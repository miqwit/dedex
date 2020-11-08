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

/**
 * Simplification of a DDEX artist, typically just a name and role.
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleArtist {
	/**
	 * Artist full name
	 * @var string 
	 */
	private $name;
	
	/**
	 * Artist role (MainArtist, ...)
	 * @var string 
	 */
	private $role;
	
	/**
	 * 
	 * @param string|null $name
	 * @param string|null $role
	 */
	public function __construct(?string $name, ?string $role) {
		$this->name = $name;
		$this->role = $role;
	}
	
	/**
	 * 
	 * @param string|null $name
	 * @return \DedexBundle\Simplifiers\SimpleArtist
	 */
	public function setName(?string $name): SimpleArtist {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * 
	 * @return string|null
	 */
	public function getName(): ?string {
		return $this->name;
	}
	
	/**
	 * 
	 * @param string|null $role
	 * @return \DedexBundle\Simplifiers\SimpleArtist
	 */
	public function setRole(?string $role): SimpleArtist {
		$this->role = $role;
		return $this;
	}
	
	/**
	 * 
	 * @return string|null
	 */
	public function getRole(): ?string {
		return $this->role;
	}
}
