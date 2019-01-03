<?php

//Open the file.
$fileHandle = fopen("listFile.csv", "r");
 
//Loop through the CSV rows.
while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    //Dump out the row for the sake of clarity.
    // var_dump($row);
    // print_r($row[0]);
for($i=0; $i<count($row); $i++){
    echo "\n" .  $row[$i];
}
    // foreach ($row as $cell){
    //     if(is_bool($row[0])){
    //         echo "\n boolean";
    //     }
    
    //     else{
    //         // echo "\n not boolean";
    //         // print_r($row);
    //         echo($cell[0]);
            
    //     }
    // }
}

