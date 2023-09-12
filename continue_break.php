<!DOCTYPE html>
<html>
<body>

<?php
 //continue
 echo "using continue";
for($x= 1; $x <=10; $x++){
    if($x==6){
        continue;
    }
    echo $x ."<br>";
}

//break
echo "using break <br>";
for($y= 1; $y <=10; $y++){
    if($y==6){
        break;
    }
    echo $y ."<br>";
}
?>

</body>
</html>