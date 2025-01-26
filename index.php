<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calculate">
    </form><br>
</body>

</html>
<?php
$radius = $_POST["radius"];
$circumference = null;

echo "Radius = {$radius}<sub>cm</sub> <br>";

$circumference = 2 * pi() * $radius;
// use the round function to round to the second decimal digit
$circumference = round($circumference, 2);
echo "Cicumference = {$circumference}<sub>cm</sub> <br>";

$area = pi() * pow($radius, 2);
// use the round function to round to the second decimal digit
$area = round($area, 2);
echo "Area = {$area}<sub>cm<sup>2<sup></sub> <br>";

$volume = 4 / 3 * pi() * pow($radius, 3);
// use the round function to round to the second decimal digit
$volume = round($volume, 2);
echo "Area = {$volume}<sub>cm<sup>2<sup></sub> <br>";
?>