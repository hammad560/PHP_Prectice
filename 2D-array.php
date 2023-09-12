<!DOCTYPE html>
<html>
<body>

<?php

// $arrays = array(
//     array("hammad","rwp", 2023),
//     array("Sarmad","isb", 2025),
//     array("hamza","cheer", 2027),
// );
// echo "<pre>";
// print_r($arrays);
// echo "</pre>";

$arrays =[
        ["hammad","rwp", 2023],
        ["Sarmad","isb", 2025],
        ["hamza","cheer", 2027]
];

foreach($arrays as $v1){
    foreach ($v1 as $v2) {
        echo $v2 ." ";
    }
    echo "<br>";
}
?>

</body>
</html>