<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="Total">
    </form>
</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = pow($x, $y);
//$total = sqrt($x);

/* $total = max($x, $y, $z);
echo "{$total}<br>";
$total = min($x, $y, $z);
echo "{$total}<br>";*/
//echo pi();

//$total = rand(10, 100);
//echo $total;
?>