<!DOCTYPE html>
<html>
<body>

<?php

// $fruit = ["apple","mango","banana", "orange", "grapes"];
$a = $fruit = ["apple", "mango", "banana",  "orange",  "grapes"];
$b = $numb = ["carrot", "pipe" ,"abc", "def"];
array_splice($a, 0,1, $b);

echo "<pre>";
print_r($a);
echo "</pre>";

?>

</body>
</html>
