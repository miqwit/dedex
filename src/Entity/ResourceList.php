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
	 * List of all sound recordings
	 * 
	 * @var array
	 */
	private array $soundRecordings = [];
	
	public function getSoundRecordings(): array {
		return $this->soundRecordings;
	}
	
	public function createSoundRecording(): SoundRecording {
		$soundRecording = new SoundRecording();
		$this->soundRecordings[] = $soundRecording;
		return $soundRecording;
	}

	/**
	 * List of all images
	 * 
	 * @var array
	 */
	private array $images = [];
	
	public function getImages($create = false): array {
		return $this->images;
	}
	
	public function createImage(): Image {
		$image = new Image();
		$this->images[] = $image;
		return $image;
	}

	/**
	 * List of all texts
	 * 
	 * @var array
	 */
	private array $texts = [];
	
	public function getTexts($create = false): array {
		return $this->texts;
	}
	
	public function createText(): Text {
		$text = new Text();
		$this->texts[] = $text;
		return $text;
	}

	/**
	 * Concatenate sound recordings, images and text and return it as an array.
	 * 
	 * @return array
	 */
	public function getResources(): array {
		return array_merge($this->soundRecordings, $this->images, $this->texts);
	}

}