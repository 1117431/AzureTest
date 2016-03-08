<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 10:19
 */

//get the length of a string and print it to the screen


    $myname = "Enaburekhan";
    $length = strlen("david");
    print $length;

//you can manipulate strings easily with built -in functions too
echo "<br>";
    $partial = substr($myname,0,5);
    print $partial; //prints Enabu

echo "<br>";

    $uppercase = strtoupper($myname);
    print $uppercase;

echo "<br>";

    $lowercase = strtolower($myname);
    print $lowercase;

echo "<br>";

    print strpos("emily", "e");
    print strpos("Enaburekhan", "k");
    strpos("Enaburekhan", "z");

?>