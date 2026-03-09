<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=565;
    $rev=0;
    while($n>0){
        $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=(int)($n/10);
    }

    echo"the reverse of a no. is=".$rev;
    ?>
</body>
</html>