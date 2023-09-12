<!DOCTYPE html>
<html>
<body>

<?php
//function with parameters

function myfun($fname, $lname= "basharat"){
    echo "Hello $fname $lname <br>";
}

function myfun1($x, $y){
    echo $x * $y;
}

myfun("Hammad");
myfun1(10,20)

?>

</body>
</html>