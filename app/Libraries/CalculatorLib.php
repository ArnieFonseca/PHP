<?php 

namespace App\Libraries;

class CalculatorLib 
{
    private $x;
    private $y;

    /**
     * Constructor
     */
    public function __construct($x, $y)                    
    {
        $this->x  = $x;
        $this->y  = $y;
    }

    /**
     * Add Method
     */
    public function add() {
        return $this->x + $this->y;
    }

    /**
     * Multiply Method
     */
    public function mul() {
        return $this->x * $this->y;
    }

    
    /**
     * Subtract Method
     */
    public function sub() {
        return $this->x - $this->y;
    }
    
    /**
     * Divide Method
     */
    public function div() {
        return (int)($this->x / $this->y);
    }
        
    /**
     * Modulo Method
     */
    public function mod() {
        return $this->x % $this->y;
    }
    
    /**
     * Minimum Method
     */
    public function min() {
        return   ($this->x <= $this->y ? $this->x : $this->y);
    }
        
    /**
     * Maximum Method
     */
    public function max() {
        return ($this->x >= $this->y ? $this->x : $this->y);
    }
            
    /**
     * Great Common Divisor Method
     */
    public function gcd() {

        function aux($x, $y) {
            return ($y == 0) ? $x:  aux($y, $x % $y);
        }

        return aux($this->x, $this->y);
       
    }

 
}

?>