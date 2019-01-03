<?php

$file = fopen("listFile.csv", 'r');

while(($line = fgetcsv($file)) !== FALSE){
    echo "\n " . $line[0];
    echo "\n " . $line[1];
}

echo "\n ";
fclose($file);

