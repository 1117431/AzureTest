<?php
$db = new mysqli("hostname","username","password","db_name");

if ($db->connect_errno){
die('Connectfailed[' . $db->connect_error . ']');

?>


