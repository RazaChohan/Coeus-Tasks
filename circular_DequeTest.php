<?php
/**
* Contains TestCases of Deque class
* 
* This file that contains one class implementation 
* named circularDequeTest that contains testcases
* for testing the functionality of the 
* Deque class.
*
*
* LICENSE: Licensed Under Coeus Solutions GmBH
*
* @category   Training/Learning PHP
* @package    Task2
* @copyright  Coeus-Solutions GmBH 
* @version    v 1.0
* @link       Hyperlink to file/package
* @since      File available since Release
*/


require_once ('circular_Deque.php');

/**
* circularDequeTest class
*
* This Class Implements the Test Cases of a Deque/Double Ended Circular Queue using array
* This class enables the testing of the functionality provided by the ciruclar_Deque class
* 
* 
* @package    Task2
* @author     Muhammad Raza <muhammad.raza@coeus-solutions.de>
* @category   Training/Learning PHP
* @copyright  Coeus-Solutions GmBH
* @license    License hyperlink and type
* @version    v 1.0
* @link       Hyperlink to file/package
* @since      Class available since Release
* @deprecated Class deprecated in Release
*/

class circularDequeTest extends PHPUnit_Framework_TestCase
{
/**
* Test Case for Testing the Push Front Function
*
* This method Push Five Values in the front of deque
* and then checks for the size of the deque after inserting
* these values. If the size of deque is five than testcase 
* suceeds otherwise it fails
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function testpushFront()
    {
	$circularDequeObj=new Deque();
        for ($x=1; $x<=5; $x++) {
        $circularDequeObj->pushFront($x); //Push 5 Values from Front
        }      
	    $this->assertEquals(5, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Push Rear Function
*
* This method Push Five Values in the rear of deque
* and then checks for the size of the deque after inserting
* these values. If the size of deque is five than testcase 
* suceeds otherwise it fails
*			
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
	
    public function testpushRear()
    {
		$circularDequeObj=new Deque();
                for ($x=1; $x<=5; $x++) {
                $circularDequeObj->pushRear($x); //Push 5 Values from Rear
                }      
                $this->assertEquals(5, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Dequeue Front Function
* after pushing five front values/elements in the deque
* This method Push Five Values in the front of deque
* and then dequeues five values from the front of deque
* If the size of deque is zero than testcase 
* suceeds otherwise it fails
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeFrontAfterPushFront()
    {
		$circularDequeObj=new Deque();
		for ($x=1; $x<=5; $x++) {
                $circularDequeObj->pushFront($x); //Pushing 5 Values from Front
                }
		
		for($d=1; $d<=5; $d++) {
		$circularDequeObj->dequeueFront(); //Dequeue 5 Values from Front    
		}
                $this->assertEquals(0, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Dequeue Rear Function
* after pushing five front values/elements in the deque
* This method Push Five Values in the front of deque
* and then dequeues five values from the front of deque
* If the size of deque is zero than testcase 
* suceeds otherwise it fails
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeRearAfterPushFront()
    {
		$circularDequeObj=new Deque();
		for ($x=1; $x<=5; $x++) {
                $circularDequeObj->pushFront($x); //Pushing 5 Values from Front
                }
		
		for($d=1; $d<=5; $d++) {
		$circularDequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
		}
                $this->assertEquals(0, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Dequeue Rear Function
* after pushing five rear values/elements in the deque
* This method Push Five Values in the rear of deque
* and then dequeues five values from the rear of deque
* If the size of deque is zero than testcase 
* succeeds otherwise it fails
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeRearAfterPushRear()
    {
		$circularDequeObj=new Deque();
		for ($x=1; $x<=5; $x++) {
                $circularDequeObj->pushRear($x); //Pushing 5 Values from Rear
                }
		
		for($d=1; $d<=5; $d++) {
		$circularDequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
		}
                $this->assertEquals(0, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Dequeue Front Function
* after pushing five rear values/elements in the deque
* This method Push Five Values in the rear of deque
* and then dequeues five values from the front of deque
* If the size of deque is zero than testcase 
* suceeds otherwise it fails
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeFrontAfterPushRear()
    {
		$circularDequeObj=new Deque();
		for ($x=1; $x<=5; $x++) {
                $circularDequeObj->pushRear($x); //Pushing 5 Values from Rear
                }
		
		for($d=1; $d<=5; $d++) {
		$circularDequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
		}
                $this->assertEquals(0, $circularDequeObj->size);
    }
    
/**
* Test Case for Testing the Dequeue Front Function
* after pushing three front values/elements in the deque
* This method Push three Values in the front of deque
* and then dequeues three values from the front of deque one by one
* Then after each dequeue the sequence of dequeued number is  
* checked ad compared one by one according to the expected sequence.
* If the sequence of numbers dequeued satisfies the know/expected
* sequence then test case succeeds otherwise fails.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeFrontAfterPushFrontWithSequenceOfValues()
    {
		$circularDequeObj=new Deque();
		$checkSequence=TRUE;
		
		for ($x=1; $x<=3; $x++) {
                $circularDequeObj->pushFront($x); //Pushing 3 Values from front
                }
		
		for($d=1; $d<=3; $d++) {
		    
		$circularDequeObj->dequeueFront();
		
		if($d==1){    
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=3){
			$checkSequence=FALSE;
		    }
		} elseif($d==2){
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=2){
			$checkSequence=FALSE;
		    }
		} elseif($d==3) {
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=1){
			$checkSequence=FALSE;
		    }
		  }
		  
		}
                $this->assertEquals(TRUE, $checkSequence);
    }
   
/**
* Test Case for Testing the Dequeue Rear Function
* after pushing three front values/elements in the deque
* This method Push three Values in the front of deque
* and then dequeues three values from the front of deque one by one
* Then after each dequeue the sequence of dequeued number is  
* checked ad compared one by one according to the expected sequence.
* If the sequence of numbers dequeued satisfies the know/expected
* sequence then test case succeeds otherwise fails.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/ 
    public function testDequeRearAfterPushFrontWithSequenceOfValues()
    {
		$circularDequeObj=new Deque();
		$checkSequence=TRUE;
		
		for ($x=1; $x<=3; $x++) {
                $circularDequeObj->pushFront($x); //Pushing 3 Values from front
                }
		
		for($d=1; $d<=3; $d++) {
		    
		$circularDequeObj->dequeueRear();
		
		if($d==1){    
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=1){
			$checkSequence=FALSE;
		    }
		} elseif($d==2){
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=2){
			$checkSequence=FALSE;
		    }
		} elseif($d==3) {
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=3){
			$checkSequence=FALSE;
		    }
		  }
		  
		}
                $this->assertEquals(TRUE, $checkSequence);
    }
    
/**
* Test Case for Testing the Dequeue Rear Function
* after pushing three rear values/elements in the deque
* This method Push three Values in the rear of deque
* and then dequeues three values from the rear of deque one by one
* Then after each dequeue the sequence of dequeued number is  
* checked ad compared one by one according to the expected sequence.
* If the sequence of numbers dequeued satisfies the know/expected
* sequence then test case succeeds otherwise fails.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    
    public function testDequeRearAfterPushRearWithSequenceOfValues()
    {
		$circularDequeObj=new Deque();
		$checkSequence=TRUE;
		
		for ($x=1; $x<=3; $x++) {
                $circularDequeObj->pushRear($x); //Pushing 3 Values from rear
                }
		
		for($d=1; $d<=3; $d++) {
		    
		$circularDequeObj->dequeueRear();
		
		if($d==1){    
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=3){
			$checkSequence=FALSE;
		    }
		} elseif($d==2){
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=2){
			$checkSequence=FALSE;
		    }
		} elseif($d==3) {
		    if($circularDequeObj->dequeArray[$circularDequeObj->rear]!=1){
			$checkSequence=FALSE;
		    }
		  }
		    
		}
                $this->assertEquals(TRUE, $checkSequence);
    }
    
    public function testDequeFrontAfterPushRearWithSequenceOfValues()
    {
		$circularDequeObj=new Deque();
		$checkSequence=TRUE;
		
		for ($x=1; $x<=3; $x++) {
                $circularDequeObj->pushRear($x); //Pushing 3 Values from front
                }
		
		for($d=1; $d<=3; $d++) {
		    
		$circularDequeObj->dequeueFront();
		
		if($d==1){    
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=1){
			$checkSequence=FALSE;
		    }
		} elseif($d==2){
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=2){
			$checkSequence=FALSE;
		    }
		} elseif($d==3) {
		    if($circularDequeObj->dequeArray[$circularDequeObj->front]!=3){
			$checkSequence=FALSE;
		    }
		  }	
		  
		}
                $this->assertEquals(TRUE, $checkSequence);
    }
}

