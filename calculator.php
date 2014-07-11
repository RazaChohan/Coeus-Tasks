<?php

class calculator
{
	// Solve Expression Function 
	public function calculate_expression($mathString)
	{
    	$mathString = trim($mathString);
    	$mathString = preg_replace ('[^0-9\+-\*\/\(\) ]', '', $mathString);  // Remove any non-numbers Chars; Exception For Math Operators 
    	$compute = create_function("", "return (" . $mathString . ");" );
    	return 0 + $compute();
	}
///////////////////////
}

