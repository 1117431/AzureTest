<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 09:08
 */

$provisionedActivities = array("specs","mugs","sausage rolls"); // declares the array

// name each item in array as x and print all x in the array

$provisionedActivities[1] = "hugs"; //modifies position 1 (mugs)
unset($provisionedActivities[2]); //removes the array in position 2

foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}

?>