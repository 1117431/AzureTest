<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <ul>
        <li><a href="login.php">Login Page</a></li>
    </ul>
</head>

<body>
<h1>Hello Welcome to your test<?php
    echo $_GET['username']
    ?></h1>
<?php
echo $_GET['username']
?>
</body>
</html>