<?php   


    //
    // Defined functions
    //
    function add($x, $y) {
        return $x + $y;
    }

    function sub($x, $y) {
        return $x - $y;
    }

    function mul($x, $y) {
        return $x * $y;
    }

    function div($x, $y) {
        
        return (int)($x / $y);
    }

    function mod($x, $y) {
        
        return $x % $y;
    }

    function gcd($x, $y) {
        if ($y == 0) {
            return $x;
        }
        else {
            return gcd($y, $x % $y);
        }
    }

?>