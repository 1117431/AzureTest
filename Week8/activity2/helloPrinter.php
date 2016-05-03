<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="activity2/style.css" type="text/css" />
</head>

<body>
<h1>Hello Welcome to your test</h1>
<?php

if($_GET[planet]== 'earth'){
    //// this happens if the value is 'earth'

    echo "Welcome to $_GET[planet]";
}

elseif($_GET[planet]== 'mars'){
    echo "Welcome to $_GET[planet]";
}

elseif($_GET[planet]== 'uranus'){
    echo "Welcome to $_GET[planet]";
}

else{
    echo "Welcome to UK";
}
?>
</body>
</html>