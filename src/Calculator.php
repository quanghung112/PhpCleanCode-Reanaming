<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $seacondOperand, $Operand)
    {
        switch ($Operand) {
            case ADDITION:
                return $firstOperand + $seacondOperand;
            case SUBTRACTION:
                return $firstOperand - $seacondOperand;
            case MULTIPLICATION:
                return $firstOperand * $seacondOperand;
            case DIVISION:
                if ($seacondOperand != 0) {
                    return $firstOperand / $seacondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}