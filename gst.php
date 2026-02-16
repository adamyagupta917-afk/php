<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gst amount </title>
</head>
<body>
<h2> gst amount</h2>
<form action="" method="POST">
    <input type="number" name ="price" ><br><br>
    
 
    <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST["submit"])){
    $price=$_POST["price"];   
    define("GST",18);
   
    $gst_amount=($price*GST)/100;
    $final_price=$price + $gst_amount;
    echo "<h1>$gst_amount</h1>";
    echo "<h1>$final_price</h1>";


    

    
    
}
?>
</body>
</html>