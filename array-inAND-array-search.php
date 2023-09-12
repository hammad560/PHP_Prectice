<!DOCTYPE html>
<html>
<body>

<?php

$food = array("mango", "apple", "banana" , "lime", "orange");
if(in_array("banana", $food)){
    echo "find successfully<br>";
}
else{
    echo "find nothing<br>";
}
echo array_search("apple", $food);
?>

</body>
</html>