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
            <input type="radio" name="creditCard" value="Visa">
            Visa
        </label><br>
        <label>
            <input type="radio" name="creditCard" value="Mastercard">
            Mastercard
        </label><br>
        <label>
            <input type="radio" name="creditCard" value="American Express">
            American Express
        </label><br>
        <input type="submit" name="confirm" value="confirm"><br>
    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    $creditCard = null;
    if (isset($_POST["creditCard"])) {
        $creditCard = $_POST["creditCard"];
    }
    /*
    if ($creditCard == "Visa") {
        echo "You Selected Visa";
        } elseif ($creditCard == "Mastercard") {
            echo "You Selected Mastercard";
            } elseif ($creditCard == "American Express") {
                echo "You Selected American Express";
                } else {
                    echo "Please make a Selection";
            }
            */
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
}
?>