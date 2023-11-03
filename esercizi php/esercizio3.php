<?php

/* Scrivi una classe PHP chiamata Calculator che accetterà due valori come argomento. Aggiungili, sottraili, moltiplicali e dividili tra loro usando delle funzioni. */

class Calculator {
    private $_fval, $_sval;
    public function __construct( $fval, $sval ) {
        $this->_fval = $fval;
        $this->_sval = $sval;
    }
    public function add() {
        return $this->_fval + $this->_sval;
    }
    public function subtract() {
        return $this->_fval - $this->_sval;
    }
    public function multiply() {
        return $this->_fval * $this->_sval;
    }
    public function divide() {
        return $this->_fval / $this->_sval;
    }
}
$mycalc = new Calculator(12, 6);
echo $mycalc-> add()."\n"; // Risultato 18
echo $mycalc-> multiply()."\n"; // Risultato 72
echo $mycalc-> subtract()."\n"; // Risultato 6
echo $mycalc-> divide()."\n"; // Risultato 2
?>