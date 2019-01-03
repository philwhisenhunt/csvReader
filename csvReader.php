<?php

$file =fopen("listFile.csv", "r");
$row = fgetcsv($file, 0, ",");

foreach ($row as $cell){
    if(is_bool($cell)){
    echo "\n boolean";
}
else{
    echo "\n not boolean";
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