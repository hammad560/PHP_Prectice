<!DOCTYPE html>
<html>

<body>

    <?php

    //array_flip
    $fruit = [

        "123" => "mango",
        "456" => "apple",
        "789" => "banana",
        "135" => 'orange',
        "796" => "grapes"
    ];

    $fruit = [

        "mango" => "123",
        "apple" => "458",
        "banana" => "146",
        "orange" => '162',
        "grapes" => "106"
    ];


    $flipArray = array_flip($fruit);

    echo "This is Array_flip function" . "<pre>";
    print_r($flipArray);
    echo "</pre>";

    //
    $flipArrayChange = array_change_key_case($fruit , CASE_UPPER); //calling
    echo "This is Array_change key case function" . "<pre>";
    print_r($flipArrayChange);
    echo "</pre>";
    ?>

</body>

</html>