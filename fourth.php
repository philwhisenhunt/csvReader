<?php

$file = fopen('listFile.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
    
    //check for boolean (csv files store booleans as strings)
    if($line[0]=="True" || $line[0]=="False"){
        echo "\n It is a boolean";
    }

    else{
        echo "\n NOT a boolean";
    }

    //check if numeric
    if(is_numeric($line[1])){
        echo "\n It IS Numeric";
    }

    else{
        echo "\n It is NOT Numeric";

    }
    echo "\n";

}
fclose($file);