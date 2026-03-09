<?php
define("MAX_MARKS", 100); // constant for maximum marks per subject

if(isset($_POST['calculate'])){

    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;

    $max_total = MAX_MARKS * 5;

    $percentage = ($total / $max_total) * 100;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Percentage Calculator</title>
</head>
<body>

<h2>Enter Marks of 5 Subjects</h2>

<form method="post">
    Subject 1: <input type="number" name="sub1" required><br><br>
    Subject 2: <input type="number" name="sub2" required><br><br>
    Subject 3: <input type="number" name="sub3" required><br><br>
    Subject 4: <input type="number" name="sub4" required><br><br>
    Subject 5: <input type="number" name="sub5" required><br><br>

    <input type="submit" name="calculate" value="Calculate Percentage">
</form>

<?php
if(isset($percentage)){
    echo "<h3>Total Marks: $total</h3>";
    echo "<h3>Percentage: $percentage%</h3>";
}
?>

</body>
</html>