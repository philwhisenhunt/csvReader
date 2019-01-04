<?php
$file = fopen('listFile.csv', 'r');

while(($line = fgetcsv($file)) !== FALSE){

$lowered = strtolower($line[0]);
    if($lowered == "true" || $lowered == "false"){
        echo "\n $lowered is a boolean.";
    }

    else{
        echo "/n $lowered is not a boolean.";
    }

    if(is_numeric($line[1])){
        echo "\n " . $line[1] . " is numeric.";
    }



}

fclose($file);
