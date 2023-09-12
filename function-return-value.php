<!DOCTYPE html>
<html>
<body>

<?php

function myfun($eng, $math, $phy){
    $per = ($eng + $math + $phy)/3;
    return $per;
}
 
$total =  myfun(50, 55, 70);
echo $total;
?>

</body>
</html>