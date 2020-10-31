<?php

namespace DedexBundle\Rule;

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <@miqwit>.
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

/**
 * All files described in resources (SoundRecording and Image) actually exist
 * on disc
 *
 * @author Mickaël Arcos <@miqwit>
 */
class AllResourceFileExist extends Rule {
  protected $message = "Missing files described in the resource:";
  
  private $root_folder;
  
  /**
   * @param string|null $level
   * @param string $root_folder Folder where to look for assets
   */
  public function __construct(?string $level = null, string $root_folder = "") {
    parent::__construct($level);
    $this->root_folder = $root_folder;
  }
  
  public function validates($newReleaseMessage): bool {
    $valid = true;
    
    // SoundRecording
    foreach ($newReleaseMessage->getResourceList()->getSoundRecording() as $sr) {
      foreach ($sr->getSoundRecordingDetailsByTerritory() as $srt) {
        foreach ($srt->getTechnicalSoundRecordingDetails() as $srtd) {
          foreach ($srtd->getFile() as $file) {
            if (!file_exists($this->root_folder.DIRECTORY_SEPARATOR.$file->getFilePath().DIRECTORY_SEPARATOR.$file->getFileName())) {
              $this->message .= " ".$file->getFileName();
              $valid = false;
            }
          }
        }
      }
    }
    
    //Image
    foreach ($newReleaseMessage->getResourceList()->getImage() as $im) {
      foreach ($im->getImageDetailsByTerritory() as $imt) {
        foreach ($imt->getTechnicalImageDetails() as $imtd) {
          foreach ($imtd->getFile() as $file) {
            if (!file_exists($this->root_folder.DIRECTORY_SEPARATOR.$file->getFilePath().DIRECTORY_SEPARATOR.$file->getFileName())) {
              $this->message .= " ".$file->getFileName();
              $valid = false;
            }
          }
        }
      }
    }
    
    return $valid;
  }
}
