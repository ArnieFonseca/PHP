<?php 
  
    // Include the functions file for modularity
    include_once('functions.php');
 
    /**
     * Convert the header into a PHP Object
     */
    $obj = json_decode(file_get_contents("php://input"));
 
    // Transfer value to native variables
    $first  = $obj->first;
    $second = $obj->second;
    $operation = $obj->operation;

    // Perform operation
    $out = $operation($first,$second);
    
    // Build the return structure
    $result = array("result" => $out);
    
    // Convert back to JSON
    echo json_encode($result);
    exit;
?>