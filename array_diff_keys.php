<!DOCTYPE html>
<html>
<body>

<?php

$a = $fruit = [
    "first" =>"mango", 
    "second" =>"apple", 
    "third" =>"banana", 
    "fourth" =>'orange', 
    "fifth" =>"grapes"
    ];
    
    $b = $vegi = [
        "first" =>"mango", 
        "second" =>"aple", 
        "third" =>"banan", 
        "fourt" =>'orange', 
        "fifth" =>"grapes"
        ];

    $newdiffer = array_diff_key($b , $a);

    echo "<pre>";
    print_r($newdiffer);
    echo "</pre>";
?>

</body>
</html>



