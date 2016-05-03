<?php
include ("db_connection.php");

$superheroID =  $_POST["superhero"];
$villan =  $_POST["villan"];

$sql = "INSERT INTO superheros (superheroID, villanFought) VALUES ('$superheroID', '$villan ')";

if(mysqli_query($db, $sql)){
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}
header("location:index.php")
?>