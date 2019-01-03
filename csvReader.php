<?php

$file =fopen("listFile.csv", "r");

//This gets the entire row
$col1 = fgetcsv($file);
print_r($col1);

//So how to get the column only? 
//Read position 0 

foreach ($col1 as $cell){
    if(is_bool($cell)){
        echo "\n boolean";
    }

    else{
        echo "\n not boolean";
    }
}

$col2 = fgetcsv($file, 1);
print_r($col2);

foreach ($col2 as $cell){
    if(is_numeric($col2)){
        echo "\n Numeric";
    }

    else{
        echo "\n not numeric";
    }
}

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