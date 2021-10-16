<?php 

namespace App\Libraries;

class InputVerification
{
    /**
     * Ensure inputs are integers
     */
    public static function isValidate($candidates) {

        foreach ($candidates as $candidate) {
            
            // Check that input is numeric
            if ( is_numeric($candidate) ) {
    
                // Check that is not a floating-point
                if ( str_contains($candidate, ".")  ) {
                    return false;
                }

                continue;
            }
            else {
                //Input is not numeric
                return false;
            }
        }
         
        // The numbers are valid
        return true;
        
    }
}
?>