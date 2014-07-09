<?php


// Solve Expression Function 
function calculate_expression($mathString)
	{
	
    	$mathString = trim($mathString);
    	$mathString = ereg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);    // Remove any non-numbers Chars; Exception For Math Operators 
    	$compute = create_function("", "return (" . $mathString . ");" );
    	return 0 + $compute();
	}
///////////////////////

//Main Function///
	echo "Type 'EXIT' to Abort: \n";
	$handle = fopen ("php://stdin","r");
	$expression=null;
	while(1)	
	{
	echo ">";
	$expression = fgets($handle);

		if((trim($expression) == 'EXIT')||(trim($expression) == 'exit'))
		{
		exit;
		}
	try
	{
	echo "Result: ".calculate_expression($expression); //Calculate Expression
	echo "\n";
	}
	catch(Exception $e)
	{
	echo "Invalid Expression";
	}
	$expression=null;
	} 
?>
