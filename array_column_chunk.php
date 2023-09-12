<!DOCTYPE html>
<html>
<body>

<?php
//make a new array => array_column
//this is use to partation of an array equally=> array_chunk
$array = array(

    array(
        "id" => 3890,
        'fname' => "Hammad",
        'lname' => "Satti",
    ),
    array(
        "id" => 3885,
        'fname' => "Abrar",
        'lname' => "Balti",
    ),
    array(
        "id" => 3782,
        'fname' => "Touqeer",
        'lname' => "Husain",
    ),    
);
$newArray= array_column($array,  'fname' , 'id');
echo "This is srray_column"."<pre>";
print_r($newArray);
echo "</pre>";

//array_chunk
$fruit = [ "mango", "apple", "banana", 'orange', "grapes" ];

 $chnkArray =array_chunk($fruit, 2);
 echo "This is srray_chunk"."<pre>";
 print_r($chnkArray);
 echo "</pre>";

?>

</body>
</html>