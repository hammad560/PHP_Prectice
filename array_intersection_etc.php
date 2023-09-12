<!DOCTYPE html>
<html>
<body>

<?php

//array_intersect
//array_intersect_key
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
  
$newArray =   array_intersect_assoc($a,$b);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

</body>
</html>