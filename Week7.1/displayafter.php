<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel Movies</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>

<?php
include_once("connection.php"); //Establishing connection with our database

$sql = "SELECT * FROM marvelmovies
        WHERE yearReleased >='2010'";
$result = mysqli_query($db,$sql);

?>

<body>
<h1>Marvel Movies</h1>

<h2>Display All Movies created after 2010</h2>

<a href="index.html">Home</a>

<table>
    <tr>
        <th>Marvel Movie ID</th>
        <th>Release Year</th>
        <th>Title</th>
        <th>Production Studio</th>
        <th>Notes</th>
    </tr>
    <?php
    while ($row = $result -> fetch_array())
    {
        echo "<tr>";
        echo "<td>" . $row['marvelMovieID'] . "</td>";
        echo "<td>" . $row['yearReleased'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['productionStudio'] . "</td>";
        echo "<td>" . $row['notes'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<footer>Copyright 2016</footer>
</body>
</html>


