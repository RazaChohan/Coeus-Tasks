<?php

require_once ('calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testCase1()
    {
		$calculatorObj=new calculator();
		$expression='2+5';   //Input
        $this->assertEquals(7, $calculatorObj->calculate_expression($expression));
    }

	public function testCase2()
    {
		$calculatorObj=new calculator();
		$expression='2.2+5.3'; //Input
        $this->assertEquals(7.5, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCase3()
    {
		$calculatorObj=new calculator();
		$expression='-2+-5'; //Input
        $this->assertEquals(-7, $calculatorObj->calculate_expression($expression));
    }


	public function testCase4()
    {
		$calculatorObj=new calculator();
		$expression='0+0'; //Input
        $this->assertEquals(0, $calculatorObj->calculate_expression($expression));
    }

	public function testCase5()
    {
		$calculatorObj=new calculator();
		$expression='5*10'; //Input
        $this->assertEquals(50, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCase6()
    {
		$calculatorObj=new calculator();
		$expression='5.5*10.3'; //Input
        $this->assertEquals(56.65, $calculatorObj->calculate_expression($expression));
    }

	public function testCase7()
    {
		$calculatorObj=new calculator();
		$expression='-5*-10'; //Input
        $this->assertEquals(50, $calculatorObj->calculate_expression($expression));
    }

	public function testCase8()
    {
		$calculatorObj=new calculator();
		$expression='-5*10'; //Input
        $this->assertEquals(-50, $calculatorObj->calculate_expression($expression));
    }

	public function testCase9()
    {
		$calculatorObj=new calculator();
		$expression='5-10'; //Input
        $this->assertEquals(-5, $calculatorObj->calculate_expression($expression));
    }
	
	public function testCase10()
    {
		$calculatorObj=new calculator();
		$expression='10-5'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }

	public function testCase11()
    {
		$calculatorObj=new calculator();
		$expression='-5-10'; //Input
        $this->assertEquals(-15, $calculatorObj->calculate_expression($expression));
    }

	public function testCase12()
    {
		$calculatorObj=new calculator();
		$expression='-0-0'; //Input
        $this->assertEquals(0, $calculatorObj->calculate_expression($expression));
    }

	public function testCase13()
    {
		$calculatorObj=new calculator();
		$expression='10/2'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }

	public function testCase14()
    {
		$calculatorObj=new calculator();
		$expression='2/10'; //Input
        $this->assertEquals(0.2, $calculatorObj->calculate_expression($expression));
    }

	public function testCase15()
    {
		$calculatorObj=new calculator();
		$expression='-10/2'; //Input
        $this->assertEquals(-5, $calculatorObj->calculate_expression($expression));
    }

	public function testCase16()
    {
		$calculatorObj=new calculator();
		$expression='-10/-2'; //Input
        $this->assertEquals(5, $calculatorObj->calculate_expression($expression));
    }
	
	 
}

