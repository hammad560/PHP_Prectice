<!DOCTYPE html>
<html lang="en">
<head>
    <title>php toturial</title>
</head>
<body>
    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
   Name :  <input type="text" name= "name"><br><br>
   Age :  <input type="text" name= "age"><br><br>
   <input type="submit" name = "save">
</form>


<?php

if(isset($_POST['save'])){
    echo "Name: ". $_POST['name'] ."<br>";
    echo "Age :" .$_POST['age'];
}

?>
</body>
</html>