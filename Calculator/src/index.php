<?php


require __DIR__ . '/Classes/Calculator.php';


$calculator = new Calculator($operand1, $operand2);
echo "The result is: " . $calculator->GetResult();

?>