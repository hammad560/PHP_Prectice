<!DOCTYPE html>
<html>
<body>

<?php

function myfun(&$num){
    $num +=10;
}
function myfun1($num){
    $num +=5;
}

$number = 7;
myfun($number);
echo $number;

?>

</body>
</html>