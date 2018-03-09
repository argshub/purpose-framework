<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Purpose\Helpers;

/**
 * Description of StringHelper
 *
 * @author argshub
 */
class StringHelper {
    //put your code here
    
    public static function rtrim(&$stringData, $characterToRemove) {
        $count = strlen($stringData) - 1;
        while($stringData[$count] == $characterToRemove)
            $stringData[$count--] = "";
        return $stringData;
    }

    public static function ltrim(&$stringData, $characterToRemove) {
        $count = 0;
        while($count < strlen($stringData) && $characterToRemove == $stringData[$count])
            $stringData[$count++] = "";
        return $stringData;
    }
    
}
