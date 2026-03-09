<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=5689;
    $max=0;
    while($n>0){
        $rem=$n%10;
        if($rem>$max)
            $max=$rem;
        $n=(int)($n/10);
    }
    echo"largest digit".$max
    ?>
</body>
</html>