<!DOCTYPE html>
<html>
<body>

<?php

$age = 80;

switch(true){
    case ($age>=18 && $age<=30):
        echo "You are Younger...";
        break;
    case ($age>=31 && $age<=45):
        echo "You are Young...";
        break;
    case($age>=46 && $age<=60):
        echo "Not young not old...";
        break;
    case($age>=61 && $age<=100):
        echo "You are an old age..";
        break;
    default:
    echo "please enter valid age..";
    break;
}

?>

</body>
</html>