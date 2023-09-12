<!-- <!DOCTYPE html>
<html>
<body>

<?php

// $date1 = date_create("2022, 10, 10");
// $date2 = date_create("2023, 10, 20");

// $diff = date_diff($date1 , $date2);
// echo "<pre>";
// print_r($diff);
// echo "</pre>";

?>

</body>
</html> -->

<!DOCTYPE html>
<html>
<body>

<?php
$date1=date_create("2013-03-15");
$date2=date_create("2023-12-12");
$diff=date_diff($date1,$date2);
echo "<pre>";
print_r($diff);
echo "</pre>";

?>

</body>
</html>