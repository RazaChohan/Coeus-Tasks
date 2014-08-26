<?php
/**
 * Contains linkedlist Driver class
 *
 * This file contains one class implementation
 * named LinkedlistDriver class.
 *
 * @category Training/Learning PHP
 * @package Learning Test Driven Development
 * @version v 1.0
 */
require_once('linkedlistImp.php');
/**
 * Linked list Driver class
 *
 * This Class contains a function named as linkedlistrun that gives an interface
 * to the user so that he/she can get or use the functionality of linked list.
 * 
 * @package    Learning Test Driven Development
 * @author     Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category   Training/Learning PHP
 * @copyright  Coeus-Solutions GmBH
 * @license    License hyperlink and type
 * @version    v 1.0
 */
class LinkedlistDriver
{
    /**
     * 
     * Gives an interface to the user to use linkedlist functionality
     *
     * This method creates an object of linkedlist class and gives an interface 
     * to the users to interact and use the functionality of linked list.
     *
     */
    function linkedlistrun()
    {
        $linkedlistObj = new LinkedList();

        while (1) {
            echo "1-Insert Node" . PHP_EOL;
            echo "2-Delete Node" . PHP_EOL;
            echo "3-Display Linkedlist" . PHP_EOL;
            echo "4-Exit" . PHP_EOL;
            echo "\n";

            echo "Enter Your Choice>";

            $handle = fopen("php://stdin", "r");
            $choice = fgets($handle);
            try {
                switch ($choice) {
                    case 1:
                        echo "Enter the Element:";
                        $value = fgets($handle);
                        $linkedlistObj->insertNode($value);
                        break;

                    case 2:
                        echo "Enter Value to Delete:";
                        $value = fgets($handle);
                        $linkedlistObj->deleteNode($value);
                        break;

                    case 3:
                        $linklistObjectsArray = $linkedlistObj->readLinkedList();
                        $linkedlistObj->print_array("Linklist Elements", $linklistObjectsArray);
                        break;

                    case 4:
                        return;
                        break;

                    default:
                        echo "\nWrong Choice!!! Try Again." . PHP_EOL;
                }
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }

}
