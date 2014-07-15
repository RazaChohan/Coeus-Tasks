<?php

/**
* Contains definition of Dequeue class
* 
* This file that contains one class implementation 
* named Deque and a function that provides an interface
* to the user for interacting with the functionality of the 
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



/**
* Deque class
*
* This Class Implements the functionality of a Deque/Double Ended Queue using array
* of size 10. This class enables the user to interact with the deque array and perform
* all the functionalities of Deque. User can Enqeue Elements at the Front  and Rear.
* Dequeue elements from front and rear.
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

class Deque 
{
   
    public $front = -1; //Front Index of Deque
    public $rear = 10; //Rear Index of Deque
    public $dequeArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0); //Deque Array of Size 10
    public $length = 0; //Length of Deque / Number of Elements Present in Deque.

    
/**
* 
* Enqueues the given variable at the rear of dequeue
*
*
* This method enqueues the integer carried by value into the deque
* at Rear. This method first checks the length (Number of Elements)
* in Deque if length is smaller than 10 then it enqueues the integer in deque
* otherwise throws an exception
*
* @param int $value the value to enter in deque
*
*
* @throws Exception the Deque Full exception containing message that the
*                   Deque is full. Thrown if length or number 
*                   of elements in deque are equal to 10.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function pushRear($value) {
        if ($this->length == 10 
           || $this->front == $this->rear) {
            throw new Exception("Queue is Full");   //Exception Handling// 	
        }

        if ($this->rear == 10 
           && $this->rear > 0
           || $this->rear > $this->front) {
            $this->rear = $this->rear - 1;
            $this->dequeArray[$this->rear] = $value;
            $this->length = $this->length + 1;
            echo "Element Inserted in Deque at Rear\n";
        }
    }

  
/**
* Enqueue the Given Variable at the front of Deque
*
* This method enqueues the integer carried by value into the deque
* at front. This method first checks the length (Number of Elements)
* in Deque if length is smaller than 10 then it enqueues the integer in deque
* otherwise throws an exception
*
* @param int $value the value to enter in deque
*
*
* @throws Exception the Deque Full exception containing message that the
*                   Deque is full. Thrown if length or number 
*                   of elements in deque are equal to 10.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function pushFront($value) {
        if ($this->length == 10 
           || $this->front == $this->rear) {
            throw new Exception("Queue is Full\n");   //Exception Handling//
        }

        if ($this->front == -1 
           || $this->front < $this->rear) {
            $this->front++;
            $this->dequeArray[$this->front] = $value;
            $this->length = $this->length + 1;
            echo "Element Inserted in Deque at Front\n";
        }
    }

    
/**
* Dequeue the Value from the front of Deque
*
* This method dequeues the integer value from the front of deque
* This method first checks the length (Number of Elements)
* in Deque if length is greater than 0 then it dequeues the integer 
* from the front of deque otherwise throws an exception.
*
*
* @return Value at Front of Deque
*
* @throws Exception the Deque Empty exception containing message that the
*         Deque is empty. Thrown if length or number 
*         of elements in deque are equal to 0.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function dequeueFront() {
        $value = 0;
        if ($this->rear == 10 
           && $this->front == -1 
           && $this->length==0) {
            throw new Exception("\nDequeue Empty!!!\n");
        } else {
            $value = $this->dequeArray[$this->front];
            $this->front = $this->front - 1;
            $this->length = $this->length - 1;
            return $value;
        }
    }

   
/**
* Dequeue the Value from the rear of Deque
*
* This method dequeues the integer value from the rear of deque
* This method first checks the length (Number of Elements)
* in Deque if length is greater than 0 then it dequeues the integer 
* from the front of deque otherwise throws an exception.
*
*
* @return Value at Front of Deque
*
* @throws Exception the Deque Empty exception containing message that the
*                   Deque is empty. Thrown if length or number 
*                   of elements in deque are equal to 0.
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function dequeueRear() {
        $value = 0;
        if ($this->rear == 10 
           && $this->front == -1) {
            throw new Exception("\nDequeue Empty!!!\n");
        } else {
            $value = $this->dequeArray[$this->rear];
            $this->rear = $this->rear + 1;
            $this->length = $this->length - 1;
            return $value;
        }
    }

    
/**
* Displays the elements of Deque
*
* This method displays the contents/Elements of the Deque
* This method first checks the length of the Deque if it is greater
* than zero then it displays the contents/Elements of Deque otherwise it 
* displays a message that Deque is empty.
*
*
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
    public function displayDeque() {
        if ($this->front == -1 
            && $this->rear == 11 
            || $this->length<=0) {
            echo '\nDequeue Empty!!!';
        } else {
            echo "\nDequeue is:\n";
            echo "Elements from Front:\n";
            for ($i = 0; $i <= $this->front; $i++) {
                echo "Index:" . $i . ' ' . "Value" . ' ' . $this->dequeArray[$i] . "\n";
            }

            echo "Elements from Rear:\n";
            for ($j = 9; $j >= $this->rear; $j--) {
                echo "Index:" . $j . ' ' . "Value" . ' ' . $this->dequeArray[$j] . "\n";
            }
        }
    }

}


/**
* Interface for Executing functionality of Dequeue Class
*
* This method asks the user to give input on the basis of that it 
* enables to user to interact with class functionality.
*
* 
*
* @access public
* @since Method available since Release
* @deprecated Method deprecated in Release
*/
function Deque_run() {
    $dequeObj = new Deque();

    while (1) {
        echo "1-Enqueue Front\n";
        echo "2-Enqueue Rear\n";
        echo "3-Dequeue Front\n";
        echo "4-Dequeue Rear\n";
        echo "5-Display\n";
        echo "6-Exit\n\n";

        echo "Enter Your Choice>";

        $handle = fopen("php://stdin", "r");
        $choice = null;
        $choice = fgets($handle);
        try {
            switch ($choice) {
                case 1:
                    echo "Enter the Element:";
                    $value = fgets($handle);
                    $dequeObj->pushFront($value);
                    break;

                case 2:
                    echo "Enter the Element:";
                    $value = fgets($handle);
                    $dequeObj->pushRear($value);
                    break;

                case 3:
                    echo "Value Dequeued From Front:" . ' ' . $dequeObj->dequeueFront();
                    break;

                case 4:
                    echo "Value Dequeued From Rear" . ' ' . $dequeObj->dequeueRear();
                    break;

                case 5:
                    $dequeObj->displayDeque();
                    break;

                case 6:
                    return;
                    break;

                default:
                    echo "\nWrong Choice!!! Try Again.\n";
            }
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
