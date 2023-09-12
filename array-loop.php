<!DOCTYPE html>
<html>
<body>

<?php
//array using loop

$number = array("Hmad", "hand", "usama", "hunza", "hashim", 22 , 33 , 44, 55,);
    echo "<ul>";
    for($i=0; $i<=8; $i++)
    {
        echo "<li>". $number[$i]."</li>";
    }
    echo "</ul>"

?>

</body>
</html>