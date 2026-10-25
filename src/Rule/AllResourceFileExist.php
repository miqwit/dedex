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
    $this->resetMessage();
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    
    $files = $this->isErn3x($newReleaseMessage)
        ? $this->getFiles3x($newReleaseMessage)
        : $this->getFiles4x($newReleaseMessage);
    
    foreach ($files as $file => $elementPath) {
      if (!file_exists($this->root_folder.DIRECTORY_SEPARATOR.$file)) {
        $this->fail("File $file is missing", $file, $elementPath);
      }
    }
    
    return count($this->getViolations()) === 0;
  }
  
  /**
   * ERN 3.x: files of every resource type, described by a FilePath and a
   * FileName in the TechnicalDetails of each territory, like
   * Video/VideoDetailsByTerritory/TechnicalVideoDetails/File.
   * 
   * @param object $newReleaseMessage
   * @return string[] path of the FileName element in the XML, indexed by
   *   FilePath/FileName, or FileName when there is no FilePath (relative to
   *   the root folder). The first element is kept when several describe the
   *   same file.
   */
  private function getFiles3x($newReleaseMessage): array {
    $files = [];
    
    foreach ($this->getResourcesByType($newReleaseMessage->getResourceList()) as $type => $resources) {
      // MIDI details are named "Midi": MidiDetailsByTerritory, TechnicalMidiDetails
      $name = $type === "MIDI" ? "Midi" : $type;
      $territoryElement = "{$name}DetailsByTerritory";
      $technicalElement = "Technical{$name}Details";
      foreach (array_values($resources) as $i => $resource) {
        $resourcePath = sprintf("ResourceList/%s[%d]", $type, $i + 1);
        foreach (array_values($resource->{"get$territoryElement"}()) as $t => $territory) {
          $territoryPath = sprintf("%s/%s[%d]", $resourcePath, $territoryElement, $t + 1);
          foreach (array_values($territory->{"get$technicalElement"}()) as $d => $details) {
            $detailsPath = sprintf("%s/%s[%d]", $territoryPath, $technicalElement, $d + 1);
            foreach (array_values($details->getFile()) as $f => $file) {
              $filePath = rtrim((string) $file->getFilePath(), "/\\");
              $key = $filePath === "" ? $file->getFileName() : $filePath.DIRECTORY_SEPARATOR.$file->getFileName();
              if (!isset($files[$key])) {
                $files[$key] = sprintf("%s/File[%d]/FileName", $detailsPath, $f + 1);
              }
            }
          }
        }
      }
    }
    
    return $files;
  }
  
  /**
   * ERN 4.x: files of every resource type, described by a single URI.
   * - 4.1 to 4.2: Resource/TechnicalDetails/File
   * - 4.3 and later: SoundRecording and Video have editions, and their files
   *   are in TechnicalDetails/DeliveryFile/File (and ClipDetails/DeliveryFile/File
   *   for clips). Other resources still use TechnicalDetails/File.
   * Accessors are checked with method_exists so that future 4.x versions
   * work without listing their classes. The element name in the XML is the
   * getter name without "get".
   * URIs with a scheme (http://, s3://...) are not local files and are skipped.
   * 
   * @param object $newReleaseMessage
   * @return string[] path of the URI element in the XML, indexed by URI
   *   (relative to the root folder). The first element is kept when several
   *   describe the same file.
   */
  private function getFiles4x($newReleaseMessage): array {
    $files = [];
    foreach ($this->getResourcesByType($newReleaseMessage->getResourceList()) as $type => $resources) {
      foreach (array_values($resources) as $i => $resource) {
        $resourcePath = sprintf("ResourceList/%s[%d]", $type, $i + 1);
        foreach ($this->getTechnicalDetails4x($resource, $resourcePath) as list($details, $detailsPath)) {
          foreach ($this->getFiles4xFromDetails($details, $detailsPath) as list($file, $filePath)) {
            $uri = $file->getURI();
            if ($uri === null || trim($uri) === "" || preg_match('#^[a-z][a-z0-9+.-]*://#i', $uri)) {
              continue;
            }
            if (!isset($files[$uri])) {
              $files[$uri] = "$filePath/URI";
            }
          }
        }
      }
    }
    
    return $files;
  }
  
  /**
   * @param object $resource a 4.x resource (SoundRecording, Video, Image...)
   * @param string $resourcePath
   * @return array[] [TechnicalDetails, path] pairs, from all its editions if it has any
   */
  private function getTechnicalDetails4x($resource, string $resourcePath): array {
    $details = [];
    foreach (["getSoundRecordingEdition", "getVideoEdition"] as $editionGetter) {
      if (method_exists($resource, $editionGetter)) {
        foreach (array_values($resource->$editionGetter()) as $k => $edition) {
          $editionPath = sprintf("%s/%s[%d]", $resourcePath, substr($editionGetter, 3), $k + 1);
          foreach (array_values($edition->getTechnicalDetails()) as $t => $technical) {
            $details[] = [$technical, sprintf("%s/TechnicalDetails[%d]", $editionPath, $t + 1)];
          }
        }
      }
    }
    if (method_exists($resource, "getTechnicalDetails")) {
      foreach (array_values($resource->getTechnicalDetails()) as $t => $technical) {
        $details[] = [$technical, sprintf("%s/TechnicalDetails[%d]", $resourcePath, $t + 1)];
      }
    }
    return $details;
  }
  
  /**
   * @param object $details a 4.x TechnicalDetails (or ClipDetails)
   * @param string $detailsPath
   * @return array[] [FileType, path] pairs; a missing File (the resource can
   *   be described by other means) is skipped
   */
  private function getFiles4xFromDetails($details, string $detailsPath): array {
    $files = [];
    if (method_exists($details, "getDeliveryFile")) {
      foreach (array_values($details->getDeliveryFile()) as $d => $deliveryFile) {
        $files[] = [$deliveryFile->getFile(), sprintf("%s/DeliveryFile[%d]/File", $detailsPath, $d + 1)];
      }
    }
    if (method_exists($details, "getClipDetails")) {
      foreach (array_values($details->getClipDetails()) as $c => $clip) {
        $files = array_merge($files, $this->getFiles4xFromDetails($clip, sprintf("%s/ClipDetails[%d]", $detailsPath, $c + 1)));
      }
    }
    if (method_exists($details, "getFile")) {
      $files[] = [$details->getFile(), "$detailsPath/File"];
    }
    return array_values(array_filter($files, function ($file) {
      return $file[0] !== null;
    }));
  }
}
