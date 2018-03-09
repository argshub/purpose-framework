<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Purpose\IO;

/**
 * Description of FileReader
 *
 * @author argshub
 */
class FileReader {
    //put your code here
    
    private $file;
    
    public function __construct(File $file) {
        $this->file = $file;
    }
    
    public function readByLine() {
        $file = fopen($this->file->getFileName(), "r");
        while(!feof($file)) yield fgets($file);
        fclose($file);
    }
}
