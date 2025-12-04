<?php


require_once '/Classes/Calculator.php';


$calculator = new Calculator($operand1, $operand2);
echo "The result is: " . $calculator->GetResult();

?>