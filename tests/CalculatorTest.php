<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $seacondOperand = 1;
        $operand = '+';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $seacondOperand, $operand);
        $this->assertEquals($expected, $result);
    }
    public function testCalculateDivison(){
        $firstOperand = 8;
        $seacondOperand = 2;
        $operand = '/';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $seacondOperand, $operand);
        $this->assertEquals($expected, $result);
    }
}