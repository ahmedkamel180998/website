<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>

</html>
<?php
$item = "Pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;
echo "You have ordered {$quantity}x {$item}/s<br>";
echo "Total = \${$total}<br>";
?>