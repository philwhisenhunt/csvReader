<?php

$file = fopen('listFile.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {

        if(is_bool($line[0])){
        echo "\n boolean";
    }

    else{
        echo "\n NOT a boolean";
    }

    if(is_numeric($line[1])){
        echo "\n It IS Numeric";
    }

    else{
        echo "\n It is NOT Numeric";

    }


//    print_r($line);

//    echo $line[0];


//    for($i=1; $i<count($line); $i++){

//     echo "working" . $i;
// //     if(is_bool($line[$i])){
// //         echo "\n boolean";
// //     }

// //     else{
// //         echo "\n not boolean";
// //     }
//    }
}
fclose($file);