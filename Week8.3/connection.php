<?php
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'b92fd815e333a4');
define('DB_PASSWORD', '0dfcafe2');
define('DB_DATABASE', 'AE1117431');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if ($db->connect_errno){
die('Connectfailed[' . $db->connect_error . ']');

$sql_query = "SELECT * FROM superheros
              WHERE superpower LIKE '%laser%'";

$result = $db->query($sql_query)

while($row = $result ->fetch_array()){
// print out fields from row of data
    echo "<p>” . $row['superheroName'] . “</p>";
}
$result ->close();
// close connection to database
$db ->close();
?>


