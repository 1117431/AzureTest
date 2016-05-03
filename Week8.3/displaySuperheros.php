
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SuperHero System</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Create a Superhero</h2>
    <p><a href="index.php">Return to home....</a></p>
</header>
<main>
    <?include ("db_connection.php");
$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while($row = $result ->fetch_array())
{
    $firstname = $row['firstName'];
    $lastname = $row['lastName'];
    $mainSuperpower= $row['mainSuperpower'];
    echo "<article>
        <h3> {$firstname} {$lastname}</h3>
        <p>This Superheros main power is <strong>{$mainSuperpower}</strong></p>
        </article>";
}
?>
    </main>
</body>
</html>

