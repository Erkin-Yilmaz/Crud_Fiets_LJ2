<?php

use PHPUnit\Framework\TestCase;
use Project_calculator\Classes\Calculator;

/**
 * Test class voor de Calculator
 * 
 * Deze class test of alle methodes van de Calculator class
 * correct werken met verschillende soorten invoer.
 */
class CalculatorTest extends TestCase
{
    /**
     * Test of de add() methode twee positieve getallen goed optelt
     */
    public function testAddTwoPositiveNumbers()
    {
        // Arrange (Voorbereiden)
        $calculator = new Calculator(5, 3);
        
        // Act (Uitvoeren)
        $result = $calculator->add();
        
        // Assert (Controleren)
        $this->assertEquals(8, $result, "5 + 3 moet 8 zijn");
    }


public function testAddWithNegativeNumbers()
{
    $calculator = new Calculator(-5, -15);
    $result = $calculator->add();
    $this->assertEquals(-20, $result, "-5 + -15 moet -20 zijn");
}

public function testAddWithZero()
{
    $calculator = new Calculator(0, 25);
    $result = $calculator->add();
    $this->assertEquals(25, $result, "0 + 25 moet 25 zijn");
}

public function testSubtractWithPositiveNumbers()
{
    $calculator = new Calculator(10, 5);
    $result = $calculator->subtract(10, 5);
    $this->assertEquals(5, $result, "10 - 5 moet 5 zijn");
}

public function testSubtractWithNegativeNumbers()
{
    $calculator = new Calculator(-10, -5);
    $result = $calculator->subtract(-10, -5);
    $this->assertEquals(-5, $result, "-10 - (-5) moet -5 zijn");
}

public function testSubtractWithZero()
{
    $calculator = new Calculator(10, 0);
    $result = $calculator->subtract(10, 0);
    $this->assertEquals(10, $result, "10 - 0 moet 10 zijn");
}

public function testMultiplyWithPositiveNumbers()
{
    $calculator = new Calculator(3, 4);
    $result = $calculator->multiply(3, 4);
    $this->assertEquals(12, $result, "3 * 4 moet 12 zijn");
}

public function testMultiplyWithNegativeNumbers()
{
    $calculator = new Calculator(-3, 4);
    $result = $calculator->multiply(-3, 4);
    $this->assertEquals(-12, $result, "-3 * 4 moet -12 zijn");
}

public function testMultiplyWithZero()
{
    $calculator = new Calculator(3, 0);
    $result = $calculator->multiply(3, 0);
    $this->assertEquals(0, $result, "3 * 0 moet 0 zijn");
}

public function testDivideWithPositiveNumbers()
{
    $calculator = new Calculator(10, 2);
    $result = $calculator->divide(10, 2);
    $this->assertEquals(5, $result, "10 / 2 moet 5 zijn");
}

public function testDivideWithNegativeNumbers()
{
    $calculator = new Calculator(-10, 2);
    $result = $calculator->divide(-10, 2);
    $this->assertEquals(-5, $result, "-10 / 2 moet -5 zijn");
}

public function testDivideByZero()
{
    $this->expectException(\Exception::class);
    $this->expectExceptionMessage("Delen door nul is niet mogelijk!");
    $calculator = new Calculator(10, 0);
    $calculator->divide(10, 0);
}
    
}