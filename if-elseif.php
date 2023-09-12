<!DOCTYPE html>
<html>
<body>

<?php

$marks= 872;

if($marks>=50 && $marks<=70){
    echo "3rd Devision...<br>";
}
elseif($marks>=71 && $marks<=85){
    echo "2nd Devision...<br>";
}
elseif($marks>=86 && $marks<=100){
    echo "1st Devision...<br>";
}
elseif($marks>=0 && $marks<=49){
    echo "Fail...<br>";
}
else{
    echo "Please enter valid marks...";
}
?>
</body>
</html>