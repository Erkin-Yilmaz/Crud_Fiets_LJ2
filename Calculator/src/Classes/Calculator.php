<?php
namespace Project_calculator\Classes;
class Calculator {
    private float $operand1;
    private float $operand2;

    public function __construct(float $operand1, float $operand2) {
        $this->operand1 = $operand1;
        $this->operand2 = $operand2;
    }

    public function add(): float {
        return $this->operand1 + $this->operand2;
    }

    public function GetResult(): float {
        return $this->add();
    }

    public function clear(): void {
        $this->operand1 = 0;
        $this->operand2 = 0;
    }

    
}


?>