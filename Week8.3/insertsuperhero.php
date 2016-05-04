<?php
include ("db_connection.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$superpower=$_POST['superpower'];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('".$_POST['firstname']."','".$_POST['lastname'].
    "','".$_POST['superpower']. "')";

if(mysqli_query($db, $sql)){ echo $_POST['firstname'];
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}

?>