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
$result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php?username=$username"); // redirecting to another page
    }else
    {
        echo "Incorrect username or password.";
    }




?>
