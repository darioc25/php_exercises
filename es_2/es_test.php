<?php

include "es_lampadina.php";

$flag;
do {
    $activations = (int)readline("Insert the maximum value of activations: ");
    if($activations > 0) {
        $flag = true;
    } else {
        $flag = false;
    }
    var_dump($activations);
} while($flag == false);

$lamp = new Lampadina($activations);
while($lamp->broken != true) {
    $command = readline("Do you want to use light bulb? (y/n): ");
    if($command == "y") {
        if($lamp->on == false) {
            $lamp->click();
            echo "Turn on the light bulb.\n";
        } else {
            $lamp->click();
            echo "Turn off the light bulb.\n";
        }
    } else if($command == "n") {
        echo "Execution stopped!\n";
        break;
    } else {
        echo "Error! Wrong command.\n";
    }
}
if($lamp->broken == true) {
    echo "Ops...you broke the light bulb!\n";
}

?>