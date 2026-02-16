<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area of circle </title>
</head>
<body>
<h2> area of cicle</h2>
<form action="" method="POST">
    <input type="number" name ="radius" placeholder="Enter radius"><br><br>
    
 
    <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $radius=$_POST["radius"];   
    define("PI",3.14);
    $area=($radius * $radius * PI);
    echo "<h1>area of cicle is  $area</h1>";



    

    
    
}
?>
</body>
</html>