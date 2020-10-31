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
 * Among all releases, only one must be set to IsMainRelease=true
 *
 * @author Mickaël Arcos <@miqwit>
 */
class OnlyOneMainRelease extends Rule {
  protected $message = "Must have one and only one main release";
  
  public function validates($newReleaseMessage): bool {
    $num_main = 0;
    
    foreach ($newReleaseMessage->getReleaseList()->getRelease() as $release) {
      if (strtolower($release->getIsMainRelease()) === "true") {
        $num_main++;
      }
    }
    
    return $num_main === 1;
  }
}
