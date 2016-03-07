
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
        echo "You can buy Specs, Mugs and Sausage rolls!";
    }
    elseif($myage>=18){
        echo "You can buy mugs ans specs";
    }
    elseif($myage>=16){
        echo "You can only buy Specs";
    }
    else
        echo "You are not off age"
    ?>
</p>
</body>
</html>