<?php
include_once("connection.php"); //Establishing connection with our database

$sql = "SELECT * FROM marvelmovies";
$result = mysqli_query($db,$sql);


?>
