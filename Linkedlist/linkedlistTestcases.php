<?php
require_once 'linkedlistImp.php';
require_once 'listNode.php';

class LinkListTest extends PHPUnit_Framework_TestCase
{
    public function testLinkedlistObjectType()
    {
        $linkedlistObj = new LinkedList();
        $this->assertEquals('LinkedList', get_class($linkedlistObj)); 
    }
    
    public function testListNodeObjectType()
    {
        $listNodeObj=new ListNode(null);
        $this->assertEquals('ListNode',get_class($listNodeObj));
    }
    
    public function testListNodeConstructor()
    {
        $listNodeObj=new ListNode(5);
        $this->assertEquals(5,$listNodeObj->data);
    }
    
    public function testReadNodeListNode()
    {
        $listNodeObj=new ListNode(5);
        $this->assertEquals(5,$listNodeObj->data);
    }
    
    public function testLinkedlistConstructor()
    {
         $isTrue=true;
         $linkedlistObj = new LinkedList();
         $firstNode=$linkedlistObj->getFirstNode();
         $lastNode=$linkedlistObj->getLastNode();
         $count=$linkedlistObj->getCount();
         $linkedlistObj->getFirstNode();
         if($firstNode!=null || $lastNode!=null 
                             || $count!=0) {
             $isTrue=false;
         }
         $this->assertEquals($isTrue,true);            
    }
    
    public function testIsempty()
    {
          $linkedlistObj = new LinkedList();
          $chkEmpty=$linkedlistObj->isEmpty();
          $this->assertEquals($chkEmpty,true);
    }
    
    public function testInsertFirstNode()
    {
         $linkedlistObj = new LinkedList();
         $linkedlistObj->insertFirstNode(2);
         $count=$linkedlistObj->getCount();
         $this->assertEquals($count,intval(1));
    }
}
 
