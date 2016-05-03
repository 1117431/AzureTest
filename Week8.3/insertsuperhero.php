<?php
include ("db_connection.php");

$firstname =  $_POST["firstname"];
$lastname =  $_POST["lastname"];
$superpower =  $_POST["superpower"];

$sql = "INSERT INTO superheros (firstname, lastname,mainSuperPower) VALUES ('$firstname', '$lastname', '$superpower')";

if(mysqli_query($db, $sql)){ echo "Database Updated";
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}

?>