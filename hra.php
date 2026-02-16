<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total salary </title>
</head>
<body>
<h2> total salary</h2>
<form action="" method="POST">
    <input type="number" name ="salary" ><br><br>
    
 
    <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $salary=$_POST["salary"];   
    define("HRA",20);
    define("DA",10);
    $totalsalary=$salary+HRA+DA;
    echo "<h1>total salary $totalsalary</h1>";



    

    
    
}
?>
</body>
</html>