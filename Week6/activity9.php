<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 09:31
 */
$provisionedActivities = array("specs","mugs","sausage rolls"); // declares the array
for($i = 1; $i <15; $i++)
    {
  echo "<p>Hello!</p>";
    }

foreach($provisionedActivities as $x){
    print "<p>$x</p>";
    }
?>