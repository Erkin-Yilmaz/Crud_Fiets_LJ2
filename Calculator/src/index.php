<?php

require_once '../vendor/autoload.php';
use Project_calculator\Classes\Calculator;

$calculator = new Calculator(8, 98);
echo "The result is: " . $calculator->GetResult();

?>