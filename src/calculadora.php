<?php

class Calculadora{

    public function _constructor(){

    }

    public function sum($n1,$n2){
            return $n1+$n2;
    }

    public function sub($n1,$n2){
        return $n1+$n2;
    }

    public function divide($n1,$n2){
        if(($n1=== NULL || $n2===NULL) || (is_string($n1) || is_string($n2)  )   ) throw new InvalidArgumentException("Invalid NULL values");
        if($n2===0) throw new  DivisionByZeroError("numerator cannot be zero");   

        return $n1/$n2;

    }

    public function multiply($n1,$n2){
        return $n1*$n2;
    }

}
?>