<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Purpose\IO;
/**
 * Description of File
 *
 * @author argshub
 */
class File {
    //put your code here
    private $fileName;
    public function __construct(string $fileName) {
        $this->fileName = $fileName;
    }
    
    public function isExist(): bool {
        return file_exists($this->fileName);
    }
    
    public function getFileName(): string {
        return $this->fileName;
    }
    
    public function createNewFile() {
        $file = fopen($this->fileName, "w");
        fclose($file);
    }
}
