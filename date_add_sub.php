<!DOCTYPE html>
<html>
<body>

<?php

$date = date_create("2023-5-11");
date_add($date, date_interval_create_from_date_string("1 days"));
echo date_format($date, "Y-m-h");
?>

</body>
</html>