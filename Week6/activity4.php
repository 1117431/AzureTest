
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
    $myage = 16;

    // if statements for activity 4

    if($myage>=21){
        print "You can buy Specs, Mugs and Sausage rolls!";
    }
    elseif($myage>=18){
        print "You can buy mugs ans specs";
    }
    elseif($myage>=16){
        print "You can only buy Specs";
    }
    else
        print "You are not off age"
    ?>
</p>
</body>
</html>