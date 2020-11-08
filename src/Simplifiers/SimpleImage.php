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

use DedexBundle\Entity\Ern382\ImageDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ImageType;
use Throwable;

/**
 * SimpleImage.
 * Only use Worldwide details
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleImage extends SimpleEntity {

	/**
	 * @var ImageType
	 */
	private $ddexImage;
	
	/**
	 *
	 * @var ImageDetailsByTerritoryType 
	 */
	private $details;
	
	/**
	 * @param ImageType $image
	 */
	public function __construct($image) {
		$this->ddexImage = $image;
		
		$this->details = $this->getDetailsByTerritory($image, "image", "worldwide");
	}
	
	/**
	 * @return string FilePath as given in dedex or empty string if not specified
	 */
	public function getFilePath() {
		try {
			return $this->details->getTechnicalImageDetails()[0]->getFile()[0]->getFilePath();
		} catch (Throwable $ex) {
			return "";
		}
	}
	
	/**
	 * @return string FileName as given in dedex or empty string if not specified
	 */
	public function getFileName() {
		try {
			return $this->details->getTechnicalImageDetails()[0]->getFile()[0]->getFileName();
		} catch (Throwable $ex) {
			return "";
		}
	}
	
	/**
	 * @return string Concatenation of path and name, as we would normally use this
	 */
	public function getFullPath() {
		return empty($this->getFilePath()) ? $this->getFileName() 
						: $this->getFilePath() . DIRECTORY_SEPARATOR . $this->getFileName();
	}
	
	/**
	 * Supposes one file technical details and one hash sum.
	 * 
	 * @return string|null
	 */
	public function getHashSum(): ?string {
		try {
			return $this->details->getTechnicalImageDetails()[0]->getFile()[0]->getHashSum()->getHashSum();
		} catch (Throwable $ex) {
			return null;
		}
	}
	
	/**
	 * Supposes one file technical details and one hash sum.
	 * 
	 * @return string|null
	 */
	public function getHashSumAlgorithm(): ?string {
		try {
			return $this->getUserDefinedValue($this->details->getTechnicalImageDetails()[0]->getFile()[0]->getHashSum()->getHashSumAlgorithmType());
		} catch (Throwable $ex) {
			return null;
		}
	}
}
