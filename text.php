<?php

function printArray($vector) {
    for($i = 0; $i < sizeof($vector); $i++) {
        for($d = 0; $d < sizeof($vector[$i]); $d++) {
            echo "[".$vector[$i][$d]."]";
        }
        if($i != (sizeof($vector) - 1)) {
            echo "\n";
        }
    }
}

function counterOccurrences($inputChar, $vector) {
    $counter = 0;
    for($i = 0; $i < sizeof($vector); $i++) {
        for($d = 0; $d < sizeof($vector[$i]); $d++) {
            if($inputChar == $vector[$i][$d]) {
                $counter++;
            }
        }
    }
    return $counter;
    // return "Number of occurrences $counter";
}

$arr = array(
    array(5, 8, 0),
    array(0, 7, 3),
    array(2, 4, 9)
);

printArray($arr);
// echo "\n";
counterOccurrences(0, $arr);

?>