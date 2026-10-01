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
	 * ERN versions supported by this library, oldest to newest. Used by
	 * isVersionAtLeast() to compare two version strings.
	 *
	 * Comparing the strings as numbers (e.g. intval(substr($version, 0, 2)))
	 * breaks as soon as two versions don't encode to the same number of
	 * digits: a hypothetical 4.4 ("44") would compare as 44, which is LESS
	 * than 4.3.1's 431, wrongly ranking 4.4 before 4.3.1. An explicit,
	 * ordered list has no such trap.
	 *
	 * Keep this in sync with ErnParserController::$supported_versions and
	 * Rule::$supported_versions whenever a new ERN version is added.
	 *
	 * @var string[]
	 */
	private const VERSION_ORDER = ["382", "41", "411", "42", "43", "431"];

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
	 * Check if $version is the same as, or comes after, $reference in
	 * VERSION_ORDER. A version absent from VERSION_ORDER never compares as
	 * being at least any reference (including itself).
	 *
	 * @param string $version
	 * @param string $reference
	 * @return bool
	 */
	private function isVersionAtLeast(string $version, string $reference): bool {
		$versionRank = array_search($version, self::VERSION_ORDER, true);
		$referenceRank = array_search($reference, self::VERSION_ORDER, true);
		if ($versionRank === false || $referenceRank === false) {
			return false;
		}
		return $versionRank >= $referenceRank;
	}

	protected function isVersion43OrLater(string $version): bool {
		return $this->isVersion4x($version) && $this->isVersionAtLeast($version, "43");
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
		return $this->isVersion4x($version) && $this->isVersionAtLeast($version, "431");
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
		if ($ern instanceof \DedexBundle\Entity\Ern382\NewReleaseMessage || $ern->getPartyList() === null) {
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
