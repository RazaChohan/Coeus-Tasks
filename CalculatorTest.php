<?php

require_once ('calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testCalculateExpressionAddNormalInputs()
    {
		$calculatorObj=new calculator();
		$expression='2+5';   //Input
        $this->assertEquals(7, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionAddFloatInputs()
    {
		$calculatorObj=new calculator();
		$expression='2.2+5.3'; //Input
        $this->assertEquals(7.5, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCalculateExpressionAddNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-2+-5'; //Input
        $this->assertEquals(-7, $calculatorObj->calculate_expression($expression));
    }


	public function testCalculateExpressionAddZeroInputs()
    {
		$calculatorObj=new calculator();
		$expression='0+0'; //Input
        $this->assertEquals(0, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionMutliplyNormalInputs()
    {
		$calculatorObj=new calculator();
		$expression='5*10'; //Input
        $this->assertEquals(50, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCalculateExpressionMutliplyFloatInputs()
    {
		$calculatorObj=new calculator();
		$expression='5.5*10.3'; //Input
        $this->assertEquals(56.65, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionMutliplyNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-5*-10'; //Input
        $this->assertEquals(50, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionMutliplyOneNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-5*10'; //Input
        $this->assertEquals(-50, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionSubtractNormalInputsWithNegativeOutput()
    {
		$calculatorObj=new calculator();
		$expression='5-10'; //Input
        $this->assertEquals(-5, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCalculateExpressionSubtractNormalInputs()
    {
		$calculatorObj=new calculator();
		$expression='10-5'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionSubtractNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-5-10'; //Input
        $this->assertEquals(-15, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionSubtractNegativeZeroInputs()
    {
		$calculatorObj=new calculator();
		$expression='-0-0'; //Input
        $this->assertEquals(0, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionDivideNormalImputs()
    {
		$calculatorObj=new calculator();
		$expression='10/2'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionDivideNormalImputsWithFloatOuput()
    {
		$calculatorObj=new calculator();
		$expression='2/10'; //Input
        $this->assertEquals(0.2, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionDivideOneNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-10/2'; //Input
        $this->assertEquals(-5, $calculatorObj->calculate_expression($expression));
    }

	public function testCalculateExpressionDivideNegativeInputs()
    {
		$calculatorObj=new calculator();
		$expression='-10/-2'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }
	
	 
}

