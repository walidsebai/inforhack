<?php
    function read_csv($csvFile){

    $rows   = array_map('str_getcsv', file($csvFile));
    $header = array_shift($rows);
    $csv    = array();
    foreach($rows as $row) {
        $csv[] = array_combine($header, $row);
    }
    print_r($csv);
  }

  read_csv('sales.csv');
?>
