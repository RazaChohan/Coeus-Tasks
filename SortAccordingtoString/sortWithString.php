<?php
/**
 * Contains definition of Sort String Array with Indexes class
 *
 * This file contains one class implementation
 * named SortStringAccIndexes class.
 *
 * @category Training/Learning PHP
 * @package String Array Sort
 * @version v 1.0
 */

/**
 * Contains SortStringAccIndexes Implementation
 *
 * This Class sorts the array of string according
 * to the string containing indexes
 * 
 * @package String Array Sort
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class SortStringAccIndexes
{
    /**
     *
     * Tokenizes the string containing indexes and stores in an array
     *
     * This method gets string containing indexes separated by commas 
     * this function tokenizes this string and stores it in an array 
     * and returns that array of indexes.
     * 
     * @param string stringOfIndexes 'String Containing Comma Separated Indexes'
     * 
     * @return array avg 'Array Containing Indexes'
     */
    public function tokenizeIndexString($stringOfIndexes)
    {
        $tok = strtok($stringOfIndexes, ",");
        $indexes = array();
        while ($tok !== false) {

            if (strlen($tok) > 0) {
                array_push($indexes, $tok);
            }
            $tok = strtok(",");
        }
        return $indexes;
    }
    /**
     *
     * Moves the string in array on a particular index to top of array
     *
     * This method moves the string on the given index of array to the
     * top index of the array.
     * 
     * @param string stringOfIndexes 'String Containing Comma Separated Indexes'
     * 
     * @return array avg 'Array Containing Indexes'
     */
    public function move_to_top(&$array, $key)
    {
        $temp = array($key => $array[$key]);
        unset($array[$key]);
        $array = $temp + $array;
    }
    /**
     *
     * Creates indexes string and array of strings and calls the class functions.
     *
     * This method creates the indexes string and array of strings and calls the
     * functions of class to attain the functionality.
     * 
     */
    public function run()
    {
        $handle = fopen("php://stdin", "r");
        $arrayOfString = array();
        echo "Enter Comma Sperated String of Indexes> ";
        $indexesString = fgets($handle);
        echo "Enter String in Array and 'Exit' to Finish" . PHP_EOL;
        $exit=strval("Exit\n");
        while (1) {
            echo "Enter String>";
            $string = fgets($handle);
            if ($string===$exit) {
                break;
            }
            array_push($arrayOfString, $string);
        }
        var_dump($arrayOfString);
        echo "Initial Array of String:" . PHP_EOL;
        $tokenizedIndexes = $this->tokenizeIndexString($indexesString);
        $tokenizedIndexes = array_reverse($tokenizedIndexes);
        for ($i = 0; $i < count($tokenizedIndexes); $i++) {
            $this->move_to_top($arrayOfString, $tokenizedIndexes[$i]);
        }
        echo "Sorted Array of String According to Indexes String:" . PHP_EOL;
        var_dump($arrayOfString);
    }

}
