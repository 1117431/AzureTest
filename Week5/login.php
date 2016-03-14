<?php
include ("connection.php"); //Establishing connection with our database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
?>
