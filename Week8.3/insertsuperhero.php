<?php
include ("db_connection.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$superpower=$_POST['superpower'];


$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ($firstname, $lastname, $superpower)";

if(mysqli_query($db, $sql)){ echo $_POST['firstname'];
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}
header("location:index.php")
/*
 * // Escape user inputs for security

$first_name = mysqli_real_escape_string($link, $_POST['firstname']);

$last_name = mysqli_real_escape_string($link, $_POST['lastname']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);
 */
?>



