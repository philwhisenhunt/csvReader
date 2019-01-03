<?php
$row = 1;
if (($handle = fopen("listFile.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        print_r($data);

        foreach($data as $piece){
            print_r($piece);
        }
        // $num = count($data);
        // echo "<p> $num fields in line $row: <br /></p>\n";
        // $row++;
        // for ($c=0; $c < $num; $c++) {
        //     echo $data[$c] . "<br />\n";
        // }
    }
    fclose($handle);
}
?>