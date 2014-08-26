<?php
/**
 * Contains linkedlist Implementation class
 *
 * This file contains one class implementation
 * named Linkedlist class.
 *
 * @category Training/Learning PHP
 * @package Learning Test Driven Development
 * @version v 1.0
 */
require ('listNode.php');
/**
 * Linked list class
 *
 * This Class implements the functionality of linkedlist
 * 
 * @package    Learning Test Driven Development
 * @author     Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category   Training/Learning PHP
 * @copyright  Coeus-Solutions GmBH
 * @license    License hyperlink and type
 * @version    v 1.0
 */
class LinkedList
{
    /* Link to the first node in the list */
    private $firstNode;
    /* Link to the last node in the list */
    private $lastNode;
    /* Total nodes in the list */
    private $count;
    
    /**
     * 
     * Initializes frontNode , lastNode and count variables of class
     *
     *
     * This method is the constructor of the class that initializes all the 
     * attributes of the class
     *
     */
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    /**
     * 
     * Returns the first node attribute of the class
     *
     * This method a getter function that returns the first node attribute of
     * the class.
     *
     */
    public function getFirstNode()
    {
        return $this->firstNode;
    }
    /**
     * 
     * Returns the last node attribute of the class
     *
     * This method a getter function that returns the last node attribute of
     * the class.
     *
     */
    public function getLastNode()
    {
        return $this->lastNode;
    }
    /**
     * 
     * Returns the count attribute of the class
     *
     * This method a getter function that returns the count attribute of
     * the class.
     *
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * 
     * Returns true if linkedlist is empty otherwise false
     * 
     * This method checks the value of count attribute of class if it is equal
     * to 10 then it will return true otherwise it will return false.
     *
     */
    public function isEmpty()
    {
        if ($this->count == intval(0)) {
            return true;
        } else if ($this->count > intval(0)) {
            return false;
        }
    }
    /**
     * 
     * Inserts the node in the linked list
     *
     * This method inserts the node in the linked list it first creates the 
     * object of List Node class. Then it checks whether there is any node in
     * the linkedlist or not and then adds it as first node if it not exists and 
     * adds the node to last node if the  first node exists and then increments 
     * the count by one.
     *
     * @param integer $data data to be added in the linkedlist
     * 
     */
    public function insertNode($data)
    {
        $link = new ListNode($data);

        if ($this->firstNode != NULL) {
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = &$link;
        } else {
            $link->next = $this->firstNode;
            $this->firstNode = &$link;
            if ($this->lastNode == NULL) {
                $this->lastNode = &$link;
            }
        }
        $this->count++;
    }
     /**
     * 
     * Deletes the node in the linked list
     *
     * This method deletes the node in the linked list according to the 
     * parameter given by the callee. The method traverse through the linkedlist
     * to find the desired node on which the given data is available and when it
     * is found it deletes that node.
     *
     * @param integer $key data to be added in the linkedlist
     * 
     */
    public function deleteNode($key)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $key) {
            if ($current->next == NULL) {
                return NULL;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
        }
        $this->count--;
    }
    /**
     * 
     * Returns the array of data containing all the elements/nodes of the linked
     * list
     *
     * This method traverses through the linkedlist and adds each and every node 
     * to the array and finally returns that array.
     *
     * @return array array containing all the elemenents/Nodes of the linkedlist
     * 
     */
    public function readLinkedList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            echo "Element" . $current->data;
            $current = $current->next;
        }
        return $listData;
    }
     /**
     * 
     * Prints the Array containing all the elements of the linkedlist

     *
     * This gets the title to display and array. Uses print_r method to display 
     * the contents of the passed array.
     * 
     * @param string $title Title to print/display
     *        array  $array Array of data/Elements to Print
     * 
     */
    public function print_array($title, $array)
    {

        if (is_array($array)) {
            echo $title .
            "||---------------------------------||" . PHP_EOL;
            print_r($array);
            echo "END " . $title .
            "||---------------------------------||" . PHP_EOL;
        } else {
            echo $title . " is not an array.";
        }
    }
}