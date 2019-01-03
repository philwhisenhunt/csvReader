<?php

$file = fopen("listFile.csv", 'r');

while(($line = fgetcsv($file)) !== FALSE){
    echo $line[0];

}

fclose($file);

