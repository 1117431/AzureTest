
/**
* Created by PhpStorm.
* User: aenabure
* Date: 08/03/2016
* Time: 08:54
*/

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $wantedgoods = "specs";

    switch($wantedgoods){
        case "mugs":
            echo "You have to be 18 to buy mugs";
            break;
        case "specs":
            echo "You have to be 16 to buy specs";
            break;
        case "rolls":
            echo"You have to be 21 to buy sausage rolls";
            break;
        default:
            echo "Your not old enough";
    }
    ?>
</p>
</body>
</html>