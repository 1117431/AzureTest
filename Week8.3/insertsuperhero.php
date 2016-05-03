<?php
include ("db_connection.php");

$firstname =  $_POST["firstname"];
$lastname =  $_POST["lastname"];
$superpower =  $_POST["superpower"];

$sql = "INSERT INTO superheros (firstname, lastname,mainSuperPower) VALUES ('$firstname', '$lastname', '$superpower')";

if(mysql_query($db, $sql)){
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}
header("location:index.php")
?>