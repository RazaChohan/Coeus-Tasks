<?php
require 'listNode.php';

class LinkedList
{ 
    /* Link to the first node in the list */
    private $firstNode;
 
    /* Link to the last node in the list */
    private $lastNode;
 
    /* Total nodes in the list */
    private $count;

    /* List constructor */
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    
    public function getFirstNode()
    {
        return $this->firstNode;
    }
    
    public function getLastNode()
    {
        return $this->lastNode;
    }
    
    public function getCount()
    {
        return $this->count;
    }
    public function isEmpty()
    {
        if($this->count==intval(0))
        {
            return true;
        }
        else if($this->count>intval(0))
        {
            return false;
        }
        
    }
    public function insertFirstNode($data)
    {
        $link = new ListNode($data);
        $link->next = $this->firstNode;
        $this->firstNode = &$link;
 
        echo 'First Node Value:' . $this->firstNode->data;
        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL){
            $this->lastNode = &$link;
        }
        $this->count++;
    }
 
    
 
}