<?php

/**
 * circular_Deque_Driver.php file that includes the reference  
 * to the deque file in the common package. This File
 * Calls a single run function form deque file. 
 *
 * LICENSE: Licensed Under Coeus Solutions GmBH
 *
 * @category   Training/Learning PHP
 * @package    Task2
 * @copyright  Coeus-Solutions GmBH 
 * @license    License hyperlink and type
 * @version    v 1.1
 * @link       Hyperlink to file/package
 * @since      File available since Release
 */
require_once ('circularDeque.php');

/**
 * Interface for Executing functionality of Dequeue Class
 *
 * This method asks the user to give input on the basis of that it 
 * enables to user to interact with class functionality.
 *
 * 
 *
 */
function Deque_run() {
    $dequeObj = new circularDeque();

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

Deque_run();
