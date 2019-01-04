<?php

$file = fopen("listFile.csv", 'r');

while(($line = fgetcsv($file)) !== FALSE){
   
    $lowerNow = strtolower($line[0]);
    
    if($lowerNow === "true" || $lowerNow === "false"){
        echo "\n " . "$lowerNow is a boolean";
    }
    else{
        echo "\n " . "$lowerNow is not a boolean";
    }

    if(is_numeric($line[1])){
        echo "\n " . $line[1] . " is numeric.";
    }
    else{
        echo "\n " . $line[1] . " is not numeric.";
    }
}

echo "\n ";
fclose($file);

