<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 09:56
 */

// set the stock levels
$spec_stock = 7;
$mug_stock = 7;
$sausageroll_stock = 7;

//set the first date of the month
$monthDate = 1;

// start of while loop
while(($spec_stock >0)&& ($mug_stock >0) && ($sausageroll_stock >0)){
    $todaysGood = rand(0,2); // specs = 0, mugs = 1, sausage rolls = 2

    switch ($todaysGood){
        case 0:
            $spec_stock--;
            echo  "On day " .$monthDate. " Specs are available<br>";
        break;

        case 1:
            $mug_stock--;
            echo "On day " .$monthDate. " Mugs are available<br>";
        break;

        case 2:
            $sausageroll_stock--;
            echo "On day" .$monthDate. " Sausage rolls are available<br>";
        break;
    }
    $monthDate++; //puts the month forward by one day
}
echo "No more goods are available this month";


?>