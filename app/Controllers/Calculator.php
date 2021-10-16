<?php

namespace App\Controllers;

use App\Models\OperationModel;

use App\Libraries\CalculatorLib;

use App\Libraries\InputVerification;

use CodeIgniter\Controller;

class Calculator extends Controller
{
    /**
     * Display the initial page.
     * A call to the database retrieve all the operations
     */
    public function index()
    {
        // Instantiate Model
        $operModel = new OperationModel();

        // Get the operations from Database
        $operations = $operModel->getOperations();
        
        // Prepare data for the View
        $data = [ 'page_title' => 'PHP Calculator',
                  'operations' => $operations
        ];
         
        // Pass controller to the View
        return view('Calculator/index', $data);
        
    }

    /**
     * Ajax Post Call to perform calculations
     * An auxiliary Library is use as delegate to perform the calculations
     */
    public function calculate() {

        // Read the JSON Data
        $first = $this->request->getJsonVar("first");
        $second = $this->request->getJsonVar("second");
        $operation = $this->request->getJsonVar("operation");

        // Ensure inputs are valid integers
        if ( !InputVerification::isValidate([$first, $second])) {
            $result = array("result" => "Invalid input; ensure numeric integer");
            return $this->response->setJSON($result);
        }
 
        // Instantiate Model
        $operModel = new OperationModel();

        // The operation against the database 
        if ( $operModel->isOperationExist($operation) ) {

            // Create instance of the Calculator Helper Library
            $calcLib = new CalculatorLib($first, $second);
            $out =  $calcLib->$operation();
            
            // Build the return structure
            $result = array("result" => $out);
        }
        else {
            $result = array("result" => "Invalid Operation");
        }
        
        // Convert/Encode result into JSON
        return $this->response->setJSON($result);

    }

}