<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Simplifiers;

use Exception;
use InvalidArgumentException;

/**
 * This is a parent class for all the Simple Entities. Contains useful handlers
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleEntity {
	
	/**
	 * Returns the detailed object for a given territory.
	 * 
	 * @param type $element the Ern element
	 * @param string $type
	 * @param string $territory
	 * @return type
	 * @throws Exception
	 */
	protected function getDetailsByTerritory($element, string $type, string $territory = "worldwide") {
		$function = "get{$type}DetailsByTerritory";
		foreach ($element->$function() as $rdbt) {
			foreach ($rdbt->getTerritoryCode() as $tc) {
				if (strtolower($tc->value()) === strtolower($territory)) {
					$release_details = $rdbt;
					break 2;
				}
			}
		}
		
		if ($release_details === null) {
			throw new Exception("No details found for territory Worldwide");
		}
		
		return $release_details;
	}
	
	/**
	 * Get the UserDefinedValue in property if the value of the element is UserDefinedValue
	 * @param type $object
	 */
	protected function getUserDefinedValue($object) {
		if (strtolower($object->value()) === "userdefined") {
			return $object->getUserDefinedValue();
		}

		return $object->value();
	}

	/**
	 * Turn an ERN version string into a number that can be compared.
	 *
	 * Version strings are the version digits without dots ("382" for 3.8.2,
	 * "41" for 4.1, "431" for 4.3.1) and have at most 3 digits. They don't all
	 * have the same length, so they can't be compared as numbers directly
	 * (41 < 382). Right padding with zeros to 3 digits gives each digit its
	 * place: "4" is 400, "41" is 410, "43" is 430, "431" is 431, "382" is 382.
	 *
	 * @param string $version version string as detected by ErnParserController
	 * @return int
	 * @throws InvalidArgumentException if $version is not 1 to 3 digits
	 */
	private function versionToComparable(string $version): int {
		if (!preg_match('/^\d{1,3}$/', $version)) {
			throw new InvalidArgumentException(sprintf("Invalid ERN version '%s': expected 1 to 3 digits, like 382 or 431.", $version));
		}
		return (int) str_pad($version, 3, "0", STR_PAD_RIGHT);
	}

	/**
	 * Check if $version is the same as, or comes after, $reference.
	 * For example "4" >= "382", "431" >= "43" and "44" >= "431".
	 *
	 * @param string $version version string as detected by ErnParserController
	 * @param string $reference version string to compare with, like "43"
	 * @return bool
	 * @throws InvalidArgumentException if a version is not 1 to 3 digits
	 */
	protected function isVersionAtLeast(string $version, string $reference): bool {
		return $this->versionToComparable($version) >= $this->versionToComparable($reference);
	}

	/**
	 * Check if a DDEX object (message, release, resource...) comes from an
	 * ERN 3.x entity namespace, like \DedexBundle\Entity\Ern382.
	 *
	 * @param object $ddexObject
	 * @return bool
	 */
	protected function isErn3x($ddexObject): bool {
		return strpos(get_class($ddexObject), 'DedexBundle\\Entity\\Ern3') === 0;
	}

	/**
	 * Check if the version string corresponds to an ERN 4.x version.
	 *
	 * @param string $version version string as detected by ErnParserController
	 * @return bool
	 */
	protected function isVersion4x(string $version): bool {
		return $version[0] === '4';
	}

	/**
	 * Check if the version is ERN 4.3 or later (version string "43").
	 *
	 * @param string $version version string as detected by ErnParserController
	 * @return bool
	 */
	protected function isVersion43OrLater(string $version): bool {
		return $this->isVersionAtLeast($version, "43");
	}

	/**
	 * Check if the version is ERN 4.3.1 or later (version string "431").
	 * Do not derive this from isVersion43OrLater(): 4.3.1 introduced
	 * breaking changes (DisplayGenre, ContributorRole/Value, ...).
	 *
	 * @param string $version version string as detected by ErnParserController
	 * @return bool
	 */
	protected function isVersion431OrLater(string $version): bool {
		return $this->isVersionAtLeast($version, "431");
	}

	/**
	 * Role of an ERN 4.x contributor. Since ERN 4.3.1, Role is a composite
	 * (Value + optional InstrumentType) and no longer a plain AVS value.
	 *
	 * @param mixed $contributor Contributor object of an ERN 4.x
	 * @return string
	 */
	protected function getContributorRole($contributor) {
		$role = $contributor->getRole()[0];
		if (method_exists($role, 'getValue')) {
			// ERN 4.3.1+: ContributorRole composite, the AVS value is in Value
			$role = $role->getValue();
		}
		return $this->getUserDefinedValue($role);
	}

	/**
	 * Build an index of party references to full names from the PartyList.
	 * Used for ERN 4.x where artist/contributor names are stored in a
	 * central PartyList and referenced by ID.
	 *
	 * @param mixed $ern the NewReleaseMessage
	 * @return array [partyReference => fullName string]
	 */
	protected function buildPartyIndex($ern): array {
		$index = [];
		if ($this->isErn3x($ern) || $ern->getPartyList() === null) {
			return $index;
		}
		$parties = $ern->getPartyList();
		if (is_object($parties) && method_exists($parties, 'getParty')) {
			// ERN 4.3.1: PartyList is a composite (Party + Brand), not an array of Party
			$parties = $parties->getParty();
		}
		foreach ($parties as $party) {
			$ref = $party->getPartyReference();
			$fullName = $party->getPartyName()[0]->getFullName();
            // getFullName() returns a string in Ern41/411, a NameType object in Ern42
			$index[$ref] = (string) $fullName;
		}
		return $index;
	}

	/**
	 * Resolve display artists to SimpleArtist array, handling both
	 * ERN 3.x (inline names) and ERN 4.x (PartyList references).
	 *
	 * @param array $displayArtists
	 * @param array|null $partyIndex null for 3.x, [ref => name] for 4.x
	 * @return SimpleArtist[]
	 */
	protected function resolveDisplayArtists(array $displayArtists, ?array $partyIndex, array $displayNames = []): array {
		$artists = [];
		foreach ($displayArtists as $i => $artist) {
			try {
				if ($partyIndex !== null) {
					// Prefer DisplayArtistName when available (display name may differ from PartyList name)
					$name = isset($displayNames[$i]) ? (string) $displayNames[$i] : ($partyIndex[$artist->getArtistPartyReference()] ?? null);
					$role = $this->getUserDefinedValue($artist->getDisplayArtistRole());
				} else {
					$name = $artist->getPartyName()[0]->getFullName();
					$role = $this->getUserDefinedValue($artist->getArtistRole()[0]);
				}
				$artists[] = new SimpleArtist($name, $role);
			} catch (\Throwable $ex) {
				continue;
			}
		}
		return $artists;
	}

	/**
	 * Resolve contributors to SimpleArtist array, handling both
	 * ERN 3.x (inline names) and ERN 4.x (PartyList references).
	 *
	 * @param array $contributors
	 * @param array|null $partyIndex null for 3.x, [ref => name] for 4.x
	 * @param string $roleGetter method name for 3.x role getter (e.g. 'getResourceContributorRole')
	 * @return SimpleArtist[]
	 */
	protected function resolveContributors(array $contributors, ?array $partyIndex, string $roleGetter = 'getResourceContributorRole'): array {
		$artists = [];
		foreach ($contributors as $contributor) {
			try {
				if ($partyIndex !== null) {
					$name = $partyIndex[$contributor->getContributorPartyReference()] ?? null;
					$role = $this->getContributorRole($contributor);
				} else {
					$name = $contributor->getPartyName()[0]->getFullName();
					$role = $this->getUserDefinedValue($contributor->$roleGetter()[0]);
				}
				$artists[] = new SimpleArtist($name, $role);
			} catch (\Throwable $ex) {
				continue;
			}
		}
		return $artists;
	}
}
