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
require_once ('DequeUsingFunctions.php');

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
 * @version    v 1.1
 * @link       Hyperlink to file/package
 */
class DequeUsingFunctionsTest extends PHPUnit_Framework_TestCase {

    /**
     * Test Case for Testing the Push Front Function
     *
     * This method Push Five Values in the front of deque
     * and then checks for the size of the deque after inserting
     * these values. If the size of deque is five than testcase 
     * suceeds otherwise it fails
     *
     *
     */
    public function testpushFront() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushFront($x); //Push 5 Values from Front
        }
        $this->assertEquals(5, count($DequeObj->dequeArray));
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
     */
    public function testpushRear() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushRear($x); //Push 5 Values from Rear
        }
        $this->assertEquals(5, count($DequeObj->dequeArray));
    }

    /**
     * Test Case for Testing the Dequeue Front Function
     * after pushing five front values/elements in the deque
     * This method Push Five Values in the front of deque
     * and then dequeues five values from the front of deque
     * If the size of deque is zero than testcase 
     * suceeds otherwise it fails
     *
     * circularDeque
     */
    public function testDequeFrontAfterPushFront() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushFront($x); //Pushing 5 Values from Front
        }

        for ($d = 1; $d <= 5; $d++) {
            $DequeObj->dequeueFront(); //Dequeue 5 Values from Front    
        }
        $this->assertEquals(0, count($DequeObj->dequeArray));
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
     */
    public function testDequeRearAfterPushFront() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushFront($x); //Pushing 5 Values from Front
        }

        for ($d = 1; $d <= 5; $d++) {
            $DequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
        }
        $this->assertEquals(0, count($DequeObj->dequeArray));
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
     */
    public function testDequeRearAfterPushRear() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushRear($x); //Pushing 5 Values from Rear
        }

        for ($d = 1; $d <= 5; $d++) {
            $DequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
        }
        $this->assertEquals(0, count($DequeObj->dequeArray));
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
     */
    public function testDequeFrontAfterPushRear() {
        $DequeObj = new DequeUsingFunctions();
        for ($x = 1; $x <= 5; $x++) {
            $DequeObj->pushRear($x); //Pushing 5 Values from Rear
        }

        for ($d = 1; $d <= 5; $d++) {
            $DequeObj->dequeueRear(); //Dequeue 5 Values from Rear    
        }
        $this->assertEquals(0, count($DequeObj->dequeArray));
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
     */
    public function testDequeFrontAfterPushFrontWithSequenceOfValues() {
        $DequeObj = new DequeUsingFunctions();
        $checkSequence = TRUE;

        for ($x = 1; $x <= 3; $x++) {
            $DequeObj->pushFront($x); //Pushing 3 Values from front
        }

        for ($d = 1; $d <= 3; $d++) {

            $value=$DequeObj->dequeueFront();

            if ($d == 1) {
                if ($value != 3) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 2) {
                if ($value != 2) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 3) {
                if ($value!=1) {
                    $checkSequence = FALSE;
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
     */
    public function testDequeRearAfterPushFrontWithSequenceOfValues() {
        $DequeObj = new DequeUsingFunctions();
        $checkSequence = TRUE;

        for ($x = 1; $x <= 3; $x++) {
            $DequeObj->pushFront($x); //Pushing 3 Values from front
        }

        for ($d = 1; $d <= 3; $d++) {

            $value=$DequeObj->dequeueRear();

            if ($d == 1) {
                if ($value!= 1) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 2) {
                if ($value!= 2) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 3) {
                if ($value != 3) {
                    $checkSequence = FALSE;
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
     */
    public function testDequeRearAfterPushRearWithSequenceOfValues() {
        $DequeObj = new DequeUsingFunctions();
        $checkSequence = TRUE;

        for ($x = 1; $x <= 3; $x++) {
            $DequeObj->pushRear($x); //Pushing 3 Values from rear
        }

        for ($d = 1; $d <= 3; $d++) {

            $value=$DequeObj->dequeueRear();

            if ($d == 1) {
                if ($value != 3) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 2) {
                if ($value != 2) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 3) {
                if ($value != 1) {
                    $checkSequence = FALSE;
                }
            }
        }
        $this->assertEquals(TRUE, $checkSequence);
    }

    public function testDequeFrontAfterPushRearWithSequenceOfValues() {
        $DequeObj = new DequeUsingFunctions();
        $checkSequence = TRUE;

        for ($x = 1; $x <= 3; $x++) {
            $DequeObj->pushRear($x); //Pushing 3 Values from front
        }

        for ($d = 1; $d <= 3; $d++) {

            $value=$DequeObj->dequeueFront();

            if ($d == 1) {
                if ($value != 1) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 2) {
                if ($value != 2) {
                    $checkSequence = FALSE;
                }
            } elseif ($d == 3) {
                if ($value != 3) {
                    $checkSequence = FALSE;
                }
            }
        }
        $this->assertEquals(TRUE, $checkSequence);
    }

}
