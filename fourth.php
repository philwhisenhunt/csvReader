<?php

$file = fopen('listFile.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
    
   
    //convert line[0] to lowercase
   $lowerNow = strtolower($line[0]);
  
    //check for boolean (csv files store booleans as strings)
    if($lowerNow=="true" || $lowerNow=="false"){
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