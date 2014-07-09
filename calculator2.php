<?php


// Solve Expression Function 
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
	$value=eval("return ($expression);");
	echo "The result is: $value"."\n";
	}
	catch(Exception $e)
	{
	echo "Invalid Expression";
	}

	} 
?>
