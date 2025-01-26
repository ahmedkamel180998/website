<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>
            <input type="checkbox" name="pizza">
            Pizza
        </label><br>
        <label>
            <input type="checkbox" name="hamburger">
            Hamburger
        </label><br>
        <label>
            <input type="checkbox" name="hotdog">
            Hotdog
        </label><br>
        <label>
            <input type="checkbox" name="taco">
            Taco
        </label><br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    if (isset($_POST["pizza"])) {
        echo "You Like Pizza!<br>";
    }
    if (isset($_POST["hamburger"])) {
        echo "You Like Hamburger!<br>";
    }
    if (isset($_POST["hotdog"])) {
        echo "You Like Hotdog!<br>";
    }
    if (isset($_POST["taco"])) {
        echo "You Like Taco!<br>";
    }
    if (empty($_POST["pizza"])) {
        echo "You Don't Like Pizza!<br>";
    }
    if (empty($_POST["hamburger"])) {
        echo "You Don't Like Hamburger!<br>";
    }
    if (empty($_POST["hotdog"])) {
        echo "You Don't Like Hotdog!<br>";
    }
    if (empty($_POST["taco"])) {
        echo "You Don't Like Taco!<br>";
    }


    /*
    switch ($creditCard) {
        case 'Visa':
            echo "You Selected Visa";
            break;
        case 'Mastercard':
            echo "You Selected Mastercard";
            break;
        case 'American Express':
            echo "You Selected American Express";
            break;
        default:
            echo "Please make a Selection";
            break;
    }
    */
}
?>