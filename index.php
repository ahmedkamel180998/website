<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter A Country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>
<?php
$countries = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi",
    "China" => "Beijing"
);

$capital = $countries[$_POST["country"]];
echo "The Capital is {$capital}";
?>