<?php
/**
 * Contains list Node Implementation class
 *
 * This file contains one class implementation
 * named ListNode class.
 *
 * @category Training/Learning PHP
 * @package Learning Test Driven Development
 * @version v 1.0
 */

/**
 * ListNode class
 *
 * This Class implements the structure of a List Node
 * 
 * @package    Learning Test Driven Development
 * @author     Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category   Training/Learning PHP
 * @copyright  Coeus-Solutions GmBH
 * @license    License hyperlink and type
 * @version    v 1.0
 */
class ListNode
{
    /* Data to hold */
    public $data;
 
    /* Link to next node */
    public $next;
 
    /* Node constructor */
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    
    function readNode()
    {
        return $this->data;
    }
    
}