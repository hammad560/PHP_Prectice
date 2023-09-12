<!DOCTYPE html>
<html>
<body>

<?php

$a =  $array = ["banana", "apple", "chocalate", "grapes", "orange", 13];

 $randarray=   array_rand($a);


    echo "This is Array_flip function" . "<pre>";
    print_r($randarray);
    echo "</pre>";

    echo "value is : " .$a[$randarray];
?>

</body>
</html>