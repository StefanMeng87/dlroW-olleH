<?php
/**
 * User: Stefan
 * Date: 27.12.16
 * Time: 14:26
 */
function convertString($inputString){
    $tempString = '';
    for ($i=0; $i <= strlen($inputString); $i++){
        $tempString = $tempString . $inputString[strlen($inputString)-1-$i];
    }
    return $tempString;
}

echo convertString('Hello World');



