<html>
<body>


<?php
include ("db_connection.php");



$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$_POST[firstname]','$_POST[lastname]',
                            '$_POST[superpower]')";

if(mysqli_query($db, $sql)){
} else{
    echo "Error:" . $sql. "<br>" . mysqli_error($db);
}
echo "1 record added";

header("location:index.php")
?>
</body>
</html>

