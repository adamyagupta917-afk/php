<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=564;
    $rev=0;
    $temp=$n;
    while($n>0){
        $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=(int)($n/10);
    }
    if($temp==$rev)
        echo "palindrome";
    else 
        echo "not palindrome";
    ?>
</body>
</html>