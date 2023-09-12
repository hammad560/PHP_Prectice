<!DOCTYPE html>
<html>
<body>

<?php
$date = getdate();
echo $date['month'] . " - ". $date['year'];

echo "<pre>";
print_r(getdate());
echo "</pre>";

?>

</body>
</html>