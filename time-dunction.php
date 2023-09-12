<!DOCTYPE html>
<html>
<body>

<?php

echo "Current Date and time (" .date("d- m - Y)(H : i : s : A)")."<br>";

date_default_timezone_set("Asia/Karachi");
echo "Current Date and time (" .date("d- m - Y)(H : i : s : A)")."<br>";

echo "This function use for show the past date or time.";

echo date("l", mktime(2,30,42, 7,14,2023));

?>

</body>
</html>