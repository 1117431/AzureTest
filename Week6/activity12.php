<?php
/**
 * Created by PhpStorm.
 * User: aenabure
 * Date: 08/03/2016
 * Time: 10:41
 */
//round pi down from 3.1416...
    $round = round(M_PI);
    print $round;
echo "<br>";

// This time, round pi to 4 places
    $round_decimal = round(M_PI,4);
    print $round_decimal;

echo "<br>";

    print rand(1,55);

echo "<br>";

$fav_bands = array();
array_push($fav_bands, "Katy Perry");
array_push($fav_bands, "The Peapods");
array_push($fav_bands, "Nickelback");

?>