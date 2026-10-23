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

namespace DedexBundle\Rule;

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
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    $this->resetMessage();
    $valid = true;
    
    $paths = $this->isErn3x($newReleaseMessage)
        ? $this->getFilePaths3x($newReleaseMessage)
        : $this->getFilePaths4x($newReleaseMessage);
    
    foreach ($paths as $path => $label) {
      if (!file_exists($this->root_folder.DIRECTORY_SEPARATOR.$path)) {
        $this->message .= " ".$label;
        $valid = false;
      }
    }
    
    return $valid;
  }
  
  /**
   * ERN 3.x: SoundRecording and Image files, described by a FilePath and a
   * FileName in the TechnicalDetails of each territory.
   * 
   * @param object $newReleaseMessage
   * @return string[] FileName, indexed by path relative to the root folder
   */
  private function getFilePaths3x($newReleaseMessage): array {
    $paths = [];
    
    // SoundRecording
    foreach ($newReleaseMessage->getResourceList()->getSoundRecording() as $sr) {
      foreach ($sr->getSoundRecordingDetailsByTerritory() as $srt) {
        foreach ($srt->getTechnicalSoundRecordingDetails() as $srtd) {
          foreach ($srtd->getFile() as $file) {
            $paths[$file->getFilePath().DIRECTORY_SEPARATOR.$file->getFileName()] = $file->getFileName();
          }
        }
      }
    }
    
    //Image
    foreach ($newReleaseMessage->getResourceList()->getImage() as $im) {
      foreach ($im->getImageDetailsByTerritory() as $imt) {
        foreach ($imt->getTechnicalImageDetails() as $imtd) {
          foreach ($imtd->getFile() as $file) {
            $paths[$file->getFilePath().DIRECTORY_SEPARATOR.$file->getFileName()] = $file->getFileName();
          }
        }
      }
    }
    
    return $paths;
  }
  
  /**
   * ERN 4.x: files of every resource type, described by a single URI.
   * - 4.1 to 4.2: Resource/TechnicalDetails/File
   * - 4.3 and later: SoundRecording and Video have editions, and their files
   *   are in TechnicalDetails/DeliveryFile/File (and ClipDetails/DeliveryFile/File
   *   for clips). Other resources still use TechnicalDetails/File.
   * Accessors are checked with method_exists so that future 4.x versions
   * work without listing their classes.
   * URIs with a scheme (http://, s3://...) are not local files and are skipped.
   * 
   * @param object $newReleaseMessage
   * @return string[] URI, indexed by the same URI (relative to the root folder)
   */
  private function getFilePaths4x($newReleaseMessage): array {
    $resourceList = $newReleaseMessage->getResourceList();
    $resources = array_merge(
        $resourceList->getSoundRecording(),
        $resourceList->getVideo(),
        $resourceList->getImage(),
        $resourceList->getText(),
        $resourceList->getSheetMusic(),
        $resourceList->getSoftware()
    );
    
    $paths = [];
    foreach ($resources as $resource) {
      foreach ($this->getTechnicalDetails4x($resource) as $details) {
        foreach ($this->getFiles4x($details) as $file) {
          $uri = $file->getURI();
          if ($uri === null || trim($uri) === "" || preg_match('#^[a-z][a-z0-9+.-]*://#i', $uri)) {
            continue;
          }
          $paths[$uri] = $uri;
        }
      }
    }
    
    return $paths;
  }
  
  /**
   * @param object $resource a 4.x resource (SoundRecording, Video, Image...)
   * @return object[] its TechnicalDetails, from all its editions if it has any
   */
  private function getTechnicalDetails4x($resource): array {
    $details = [];
    foreach (["getSoundRecordingEdition", "getVideoEdition"] as $editionGetter) {
      if (method_exists($resource, $editionGetter)) {
        foreach ($resource->$editionGetter() as $edition) {
          $details = array_merge($details, $edition->getTechnicalDetails());
        }
      }
    }
    if (method_exists($resource, "getTechnicalDetails")) {
      $details = array_merge($details, $resource->getTechnicalDetails());
    }
    return $details;
  }
  
  /**
   * @param object $details a 4.x TechnicalDetails (or ClipDetails)
   * @return object[] FileType objects; a missing File (the resource can be
   *   described by other means) is skipped
   */
  private function getFiles4x($details): array {
    $files = [];
    if (method_exists($details, "getDeliveryFile")) {
      foreach ($details->getDeliveryFile() as $deliveryFile) {
        $files[] = $deliveryFile->getFile();
      }
    }
    if (method_exists($details, "getClipDetails")) {
      foreach ($details->getClipDetails() as $clip) {
        $files = array_merge($files, $this->getFiles4x($clip));
      }
    }
    if (method_exists($details, "getFile")) {
      $files[] = $details->getFile();
    }
    return array_values(array_filter($files, function ($file) {
      return $file !== null;
    }));
  }
}
