<?php

//Cycle through the csv and apply each part to the str_getcsv function
$csv = array_map("fgetcsv", file("listFile.csv", "r")); 
$header = array_shift($csv); 
// Seperate the header from data

$col = array_search("Value", $header); 
 foreach ($csv as $row) {      
 $array[] = $row[$col]; 
}