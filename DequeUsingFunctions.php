<?php

/**
 * Contains definition of Dequeue class namely
 * circularDequeUsingFucntions
 * 
 * This file that contains one class implementation 
 * named circularDequeUsingFucntions  Deque class.
 *
 *
 * LICENSE: Licensed Under Coeus Solutions GmBH
 *
 * @category   Training/Learning PHP
 * @package    Task2
 * @copyright  Coeus-Solutions GmBH 
 * @version    v 1.0
 */

/**
 * DequeUsingFunctions class
 *
 * This Class Implements the functionality of a Deque/Double Ended Queue using array
 * of size 10. User can Enqeue Elements at the Front  and Rear.
 * Dequeue elements from front and rear.
 * 
 * @package    Task2
 * @author     Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category   Training/Learning PHP
 * @copyright  Coeus-Solutions GmBH
 * @license    License hyperlink and type
 * @version    v 1.0
 */
class DequeUsingFunctions {

    public $dequeArray = array();  // Deque Array
    public $capacity=10; //Total Capacity og Deque Array

    /**
     * 
     * Enqueues the given variable at the Front of deque
     *
     *
     * This method enqueues the integer carried by value Parameter into the deque
     * at Front. This method first checks the length (Number of Elements)
     * in Deque if length is smaller than 10 using count function 
     * then it enqueues the integer in deque using array_unshift function
     * otherwise throws an exception
     *
     * @param int $value the value to enter in deque
     *
     *
     * @throws Exception the Deque Full exception containing message that the
     *                   Deque is full. Thrown if length or number 
     *                   of elements in deque are equal to 10.
     *
     */

    public function pushFront($value) {

        if (count($this->dequeArray) ==  $this->capacity) {
            throw new Exception("Queue is Full");
        } else {
            array_unshift($this->dequeArray, $value);
        }
    }

    /**
     * 
     * Enqueues the given variable at the Front of deque
     *
     *
     * This method enqueues the integer carried by value Parameter into the deque
     * at Rear. This method first checks the length (Number of Elements)
     * in Deque if length is smaller than 10 using count function
     * then it enqueues the integer in deque rear using array_push function
     * otherwise throws an exception
     *
     * @param int $value the value to enter in deque
     *
     *
     * @throws Exception the Deque Full exception containing message that the
     *                   Deque is full. Thrown if length or number 
     *                   of elements in deque are equal to 10.
     *
     */
    public function pushRear($value) {

        if (count($this->dequeArray) == $this->capacity) {
            throw new Exception("Queue is Full");
        } else {
            array_push($this->dequeArray, $value);
        }
    }

    /**
     * Dequeue the Value from the front of Deque
     *
     * This method dequeues the integer value from the front of deque
     * This method first checks the length/size (Number of Elements)
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
     */
    public function dequeueFront() {
        
        if (count($this->dequeArray) == 0) {
            throw new Exception("Dequeue Empty!!!");
        } else {
            return array_shift($this->dequeArray);
            }
            
        }

    /**
     * Dequeue the Value from the Rear of Deque
     *
     * This method dequeues the integer value from the rear of deque
     * This method first checks the length/Size (Number of Elements)
     * in Deque if length is greater than 0 then it dequeues the integer 
     * from the rear of deque otherwise throws an exception.
     *
     *
     * @return Value at Rear of Deque
     *
     * @throws Exception the Deque Empty exception containing message that the
     *         Deque is empty. Thrown if length or number 
     *         of elements in deque are equal to 0.
     *
     */
    // Removes the last node
    public function dequeueRear() {

        if (count($this->dequeArray) == 0) {
            throw new Exception("Dequeue Empty!!!");
        } else {
            return array_pop($this->dequeArray);
        }
    }

}