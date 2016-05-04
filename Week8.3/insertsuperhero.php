<?php
include ("db_connection.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$superpower=$_POST['superpower'];


echo $_POST['firstname'];
$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname','$lastname','$superpower')";

if(mysqli_query($db, $sql)){ echo $_POST['firstname'];
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}

?>