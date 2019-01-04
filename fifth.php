<?php

$file = fopen("listFile.csv", 'r');

while(($line = fgetcsv($file)) !== FALSE){
    echo "\n " . $line[0];
    echo "\n " . $line[1];
    $lowerNow = strtolower($line[0]);
    
    if($lowerNow === "true" || $lowerNow === "false"){
        echo "$lowerNow is a boolean";
    }
}

echo "\n ";
fclose($file);

