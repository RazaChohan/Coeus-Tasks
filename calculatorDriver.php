<?php

require_once ('calculator.php');
	//Main Function///
	echo "Type 'EXIT' to Abort: \n";

	$handle = fopen ("php://stdin","r");
	$expression=null;

	while(1){
	echo ">";
	$expression = fgets($handle);
	$expression = trim($expression);

	while($expression == ''){
	echo 'Entered String is Empty';
	echo ">";

	$expression = fgets($handle);
	$expression = trim($expression);
	}
		
    if(in_array($expression, array('EXIT', 'exit')))
    {
		exit;
	}
	try
	{
		$calculatorObj=new calculator();
		echo "Result: ".$calculatorObj->calculate_expression($expression); //Calculate Expression
		echo "\n";
	}

	catch(Exception $e)
	{
		echo "Invalid Expression";
	}
	$expression=null;
	} 
