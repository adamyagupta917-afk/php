<!DOCTYPE html>
<html>
<head>
    <title>count the no.</title>
</head>
<body>
<?php

$number = 2456;   // static number
$count = 0;
while($number !=0){
   $digit=(int) $number%10;
   $count++;
   $number=(int)($number/10);
}
echo $count;

?>
