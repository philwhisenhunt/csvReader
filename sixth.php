<?php
$file = fopen('listFile.csv', 'r');

while(($line = fgetcsv($file)) !== FALSE){

$lowered = strtolower($line[0]);



}

fclose($file);
