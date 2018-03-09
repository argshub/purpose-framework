<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Purpose\IO;

/**
 * Description of FileWritter
 *
 * @author argshub
 */
class FileWritter {
    //put your code here
    private $file;
    private $fileResource;
    public function __construct(File $file) {
        $this->file = $file;
        $this->fileResource = null;
    }
    
    public function writeFromBegining(string $data) {
        if($this->fileResource == null) $this->fileResource = fopen($this->file->getFileName(), "w");
        fwrite($this->fileResource, $data);
    }
    
    public function writeToEndOfFile(string $data) {
        if($this->fileResource == null) $this->fileResource = fopen($this->file->getFileName(), "a");
        fwrite($this->fileResource, $data);
    }
    
    public function __destruct() {
        if($this->fileResource != null) fclose($this->fileResource);
    }
    
}
