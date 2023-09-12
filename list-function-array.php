<!DOCTYPE html>
<html>
<body>

<?php

$array = [
    [07, "Huzafa","manager", 25000],
    [10, "Abbasi","HR", 30000],
    [14, "Irtaza","CEO", 40000],
    [16, "Abass","Employee", 20000],

];
echo "<table border ='1px solid black' cellpadding = '5px'>
    <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>DESIGNATION</td>
    <td>SALERY</td>
    ";
foreach ($array as list($id, $name, $disignation, $salery)){
    echo "<tr> <td> $id </td><td> $name </td> <td> $disignation </td> <td> $salery</td> </tr>  <br>" ;
}
echo "<table>";

?>

</body>
</html>
