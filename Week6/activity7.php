<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 09:08
 */

$myArray = array("do","re","mi"); // declares the array

echo $myArray[0]; //outputs "do"
echo "<br>"; //break line

$myArray[1] = "la"; //modifies position 1 (re)
echo "<br>";

echo $myArray[1]; // outputs "la"

unset($array[2]); //removes the array in position 2

?>