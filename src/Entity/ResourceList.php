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
 * Description of ResourceList
 *
 * @author Mickaël Arcos <miqwit>
 */
class ResourceList {

	/**
	 * Maintain internally a list of Resources.
	 * 
	 * @var array[Resource]
	 */
	private array $resources = [];

	/**
	 * Pointer to last SoundRecording
	 * 
	 * @var SoundRecording
	 */
	private SoundRecording $lastSoundRecording;

	/**
	 * Pointer to last Image
	 * 
	 * @var Image
	 */
	private Image $lastImage;

	/**
	 * Pointer to last Text
	 * 
	 * @var Text
	 */
	private Text $lastText;

	public function getResources(): array {
		return $this->resources;
	}

	/**
	 * Return the current source recording in parsing. Will create a new source
	 * recording if no one has been created, or if the last one is locked.
	 * 
	 * @return SoundRecording
	 */
	public function getSoundRecording(): SoundRecording {
		if (empty($this->lastSoundRecording) || $this->lastSoundRecording->getLocked() === true) {
			$soundRecording = new SoundRecording();

			$this->resources[] = $soundRecording;
			$this->lastSoundRecording = &$soundRecording;
		}

		return $this->lastSoundRecording;
	}

	/**
	 * Return the current image in parsing. Will create a new source
	 * recording if no one has been created, or if the last one is locked.
	 * 
	 * @return Image
	 */
	public function getImage(): Image {
		if (empty($this->lastImage) || $this->lastImage->getLocked() === true) {
			$image = new Image();

			$this->resources[] = $image;
			$this->lastImage = &$image;
		}

		return $this->lastImage;
	}

	/**
	 * Return the current text in parsing. Will create a new source
	 * recording if no one has been created, or if the last one is locked.
	 * 
	 * @return Text
	 */
	public function getText(): Text {
		if (empty($this->lastText) || $this->lastText->getLocked() === true) {
			$text = new Text();

			$this->resources[] = $text;
			$this->lastText = &$text;
		}

		return $this->lastText;
	}

}
