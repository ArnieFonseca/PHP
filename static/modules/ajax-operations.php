<?php

    // Define an empty Array
    $operations = array();
                  
    // Load the Array with Kev/Value pairs
    $operations[] = ["add" => "Addition"];
    $operations[] = ["sub" => "Subtraction"];
    $operations[] = ["mul" => "Multiplication"];
    $operations[] = ["div" => "Division"];
    $operations[] = ["mod" => "Modulo"];
    $operations[] = ["gcd" => "GCD"];

    // Prepare the return structure
    $result = array("result" => $operations);

    // Convert to JSON
    echo json_encode($result);
    exit;
?>
