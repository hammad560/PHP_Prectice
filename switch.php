<!DOCTYPE html>
<html>
<body>

<?php

//switch statement practice

$weekday = 7; //veriable

switch($weekday){
    case 1:
        echo "Today is Monday...";
        break;
    case 2:
        echo "Today is Tuesday...";
        break;
    case 3:
        echo "Today is Wednesday...";
        break;
    case 4:
        echo "Today is Thursday...";
        break;
    case 5:
        echo "Today is Friday...";
        break;
    case 6:
        echo "Today is Saturday...";
        break;
    case 7:
        echo "Today is Sunday...";
        break;               
    default:
    echo "Enter valid weekday..." ;
    break;
}

?>

</body>
</html>