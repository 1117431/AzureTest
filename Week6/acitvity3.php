
/**
* Created by PhpStorm.
* User: aenabure
* Date: 07/03/2016
* Time: 09:48
*/

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    // variables in php
    $myname = "Frodo  Baggins";
    $myage = 111;
    $name = "Edgar";

    // test for hello world

    echo "Hello World <br>";
    echo "Hello, world! <br>";

    //using equations

    echo 5 * 7;
    echo "<br>";
    // sentence
    echo "My name is " . $myname. " and I am " . $myage;
    // Testing
    /* comment test */
    echo "<br>";
    //using if statements and else commands
    if($name == "Simon"){
        print "I know you!";
    }
        else {
            print "Who are you?";
        }
    ?>
</p>
</body>
</html>