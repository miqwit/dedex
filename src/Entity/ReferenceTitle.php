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
 * ReferenceTitle - This is part of the 'reference descriptive metadata' for 
 * the recording.  It is structured as the TitleText and SubTitle. In the DDEX 
 * standards, the TitleText is for the normal title of a recording and the 
 * SubTitle is a catch-all for version and/or subtitle information.  
 * 
 * SubTitle is used to differentiate different recorded versions such as ‘live’, 
 * ‘radio edit’, ‘extended mix’ etc.  The language of the title is carried 
 * within the tag (represented by an ISO 639 LanguageCode).
 * 
 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
 *
 * @author Mickaël Arcos <miqwit>
 */
class ReferenceTitle {

	/**
	 * In the DDEX standards, the TitleText is for the normal title of a 
	 * recording and the SubTitle is a catch-all for version and/or subtitle 
	 * information.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string
	 */
	private string $titleText;

	function getTitleText(): string {
		return $this->titleText;
	}

	function setTitleText(string $titleText): void {
		$this->titleText = $titleText;
	}

	/**
	 * In the DDEX 
	 * standards, the TitleText is for the normal title of a recording and the 
	 * SubTitle is a catch-all for version and/or subtitle information.  
	 * 
	 * SubTitle is used to differentiate different recorded versions such as ‘live’, 
	 * ‘radio edit’, ‘extended mix’ etc.  The language of the title is carried 
	 * within the tag (represented by an ISO 639 LanguageCode).
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string 
	 */
	private string $subTitle;

	function getSubTitle(): string {
		return $this->subTitle;
	}

	function setSubTitle(string $subTitle): void {
		$this->subTitle = $subTitle;
	}

}
