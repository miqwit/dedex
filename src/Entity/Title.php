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

namespace DedexBundle\Entity;

/**
 * Models such a structure:
 * <Title TitleType="DisplayTitle">
 *   <TitleText>100 VIP</TitleText>
 * </Title>
 *
 * @author Mickaël Arcos <miqwit>
 */
class Title {

	/**
	 *
	 * @var string
	 */
	private string $TitleType;

	function getTitleType(): string {
		return $this->TitleType;
	}

	function setTitleType(string $TitleType): void {
		$this->TitleType = $TitleType;
	}

	/**
	 *
	 * @var string
	 */
	private string $TitleText;

	function getTitleText(): string {
		return $this->TitleText;
	}

	function setTitleText(string $TitleText): void {
		$this->TitleText = $TitleText;
	}
	
	/**
	 * Set to true when this SoundRecording finished parsing. Can't add new
	 * values to this one in this parsing.
	 * 
	 * @var bool 
	 */
	private bool $locked = false;
	
	function getLocked(): bool {
		return $this->locked;
	}

	function setLocked(bool $locked): void {
		$this->locked = $locked;
	}

}
