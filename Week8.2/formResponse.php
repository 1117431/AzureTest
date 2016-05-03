<?php
$result = mysqli_query($db,$sql);
?>


<table>
    <tr>
        <th>Forename</th>
        <th>Surname</th>
        <th>Sex</th>
        <th>Power</th>
    </tr>
    <?php

    while ($row = $result -> fetch_array())
    {
        $forename = $_POST[“forename”];
        $surname = $_POST[“surname”];
        $gender = $_POST[“gender”];
        $power = $_POST[“power”];

        echo "<tr>";
        echo "<td>" . $row[forename] . "</td>";
        echo "<td>" . $row[surname] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['power'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>


