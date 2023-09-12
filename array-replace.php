<!DOCTYPE html>
<html>
<body>

<?php

$fruit = ["apple","mango","banana", "orange", "grapes"];
$veggie = ["carrot", "pie"];

echo "<pre>";
$newArray = array_replace( $fruit,$veggie);
print_r($newArray);
echo "</pre>";
?>

</body>
</html>