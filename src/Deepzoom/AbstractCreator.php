<?php
namespace Deepzoom;

/**
* Deep Zoom Tools
*
* Copyright (c) 2008-2010, OpenZoom <http://openzoom.org/>
* Copyright (c) 2008-2010, Nicolas Fabre <nicolas.fabre@gmail.com>
* All rights reserved.
*
* Redistribution and use in source and binary forms, with or without modification,
* are permitted provided that the following conditions are met:
*
* 1. Redistributions of source code must retain the above copyright notice,
* this list of conditions and the following disclaimer.
*
* 2. Redistributions in binary form must reproduce the above copyright
* notice, this list of conditions and the following disclaimer in the
* documentation and/or other materials provided with the distribution.
*
* 3. Neither the name of OpenZoom nor the names of its contributors may be used
* to endorse or promote products derived from this software without
* specific prior written permission.
*
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
* ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
* WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
* DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
* ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
* (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
* LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
* ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
* (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
* SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

/**
 * Image Creator, generate pyramid
 *
 * @package    Deepzoom
 * @author     Nicolas Fabre <nicolas.fabre@gmail.com>
 */
abstract class AbstractCreator {
    /**
     * Tile size
     * 
     * @var string
     */ 
    protected $_tileSize; 

    /**
     * Tile format
     * 
     * @var string
     */ 
    protected $_tileFormat; 
        
    /**
     * Ensures that $val is between the limits set by $min and $max.
     *
     * @param int $val
     * @param int $min
     * @param int $max
     * 
     * @return int
     */ 
    protected function _clamp($val, $min, $max) {
        if($val < $min) {
            return $min;
        }elseif($val > $max) {
            return $max;
        }
        return $val;
    } 
     
    /**
     * Create directory if not exist
     *
     * @param string $pathname
     * 
     * @return string
     */ 
    protected function _ensure($pathname) {
        if(!file_exists($pathname)) {
            mkdir($pathname, 0775, true);
        }
        return $pathname;
    } 
}