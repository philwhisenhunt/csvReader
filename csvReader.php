<?php

$file =fopen("listFile.csv", "r");
$col1 = fgetcsv($file, 0, ",");

foreach ($col1 as $cell){
    if(is_bool($cell)){
    echo "\n boolean";
    }

    else{
        echo "\n not boolean";
    }
}

$col2 = fgetcsv($file, 0, ",");

// echo $row[0];

// function checker($file){


//     //check for boolean
 

// if(is_bool($col1)){
//     echo "boolean";
// }
// else{
//     echo "not boolean";
// }

// //check for numeric
// if(numeric($col2)){
//     echo "numeric";
// }
// else{
//     echo "not numeric";
// }


// }

// echo checker($file);