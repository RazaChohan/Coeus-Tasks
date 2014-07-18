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
 * @version    v 1.1
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
 * @version    v 1.1
 */
class circularDeque {

    public $dequeArray = array();  // Deque Array
    public $front = 1; //Front Index of Deque
    public $rear = 0; //Rear Index of Deque 
    public $size = 0; //Number of Elements in Deque
    public $capacity = 10;  //Total Capacity of Deque

    /**
     * 
     * Enqueues the given variable at the Front of deque
     *
     *
     * This method enqueues the integer carried by value Parameter into the deque
     * at Front. This method first checks the length (Number of Elements)
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
     */

    public function pushFront($value) {

        if ($this->size == $this->capacity) {
            throw new Exception("Queue is Full");
        } else {
            $this->dequeArray[$this->front] = $value;
            $this->front = ($this->front + 1) % $this->capacity;
            $this->size = $this->size + 1;
        }
    }

    /**
     * 
     * Enqueues the given variable at the Front of deque
     *
     *
     * This method enqueues the integer carried by value Parameter into the deque
     * at Front. This method first checks the length (Number of Elements)
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
     */
    public function pushRear($value) {

        if ($this->size == $this->capacity) {
            throw new Exception("Queue is Full");
        } else {
            $this->dequeArray[$this->rear] = $value;
            $this->rear = ($this->rear - 1 +$this->capacity ) % $this->capacity;
           
            $this->size = $this->size + 1;
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

        if ($this->size == 0) {
            throw new Exception("Dequeue Empty!!!");
        } else {
            $this->front = ($this->front - 1) % $this->capacity;
            $this->size = $this->size - 1;

            if ($this->front < 0) {
                $this->front = $this->front * -1;
            }
            return $this->dequeArray[$this->front];
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

        if ($this->size == 0) {
            throw new Exception("Dequeue Empty!!!");
        } else {
            $this->rear = ($this->rear + 1) % $this->capacity;
            $this->size = $this->size - 1;
            return $this->dequeArray[$this->rear];
        }
    }

}
