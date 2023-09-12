<!DOCTYPE html>
<html>
<body>

<?php

$fruit = ["apple","mango","banana", "orange", "grapes"];
$veggire = ['a' =>"carrot", 'b'=> "pie"];
$newArray = array_merge($fruit, $veggire);

echo "<pre>";
print_r($newArray);
echo "<pre>";

?>

</body>
</html>