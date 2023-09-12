<!DOCTYPE html>
<html>
<body>

<?php

$fruit = [
//array_key
//array_key_first
//array_key_last
//array_key_exist

    "first" =>"mango", 
    "second" =>"apple", 
    "third" =>"banana", 
    "fourth" =>'orange', 
    "fifth" =>"grapes"
    ];
$newArray =key_exists("first",$fruit);

if($newArray){
    echo "key exisxt!";
}
else{
    echo "key does not exidt!";
}



?>

</body>
</html>