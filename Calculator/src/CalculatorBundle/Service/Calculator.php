<?php
/**
 * Created by PhpStorm.
 * User: arama
 * Date: 7/19/2017
 * Time: 22:54
 */

namespace CalculatorBundle\Service;


class Calculator
{
    public function sum(int $firstNumber, int $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }

    public function subtract(int $firstNumber, int $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }

    public function multiply(int $firstNumber, int $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }

    public function divide(int $firstNumber, int $secondNumber)
    {
        return $firstNumber / $secondNumber;
    }

    public function xPower(int $firstNumber, int $secondNumber)
    {
        return pow($firstNumber, $secondNumber);
    }

    public function  modulo(int $firstNumber, int $secondNumber)
    {
        return $firstNumber % $secondNumber;
    }

    public function binaryResult($result)
    {

        return decbin($result);
    }

    public function octalResult($result)
    {
        return decoct($result);
    }

    public function hexaResult($result)
    {
        return dechex($result);
    }
}