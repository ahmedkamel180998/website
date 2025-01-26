<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Enter A Number To Count To:</label>
        <input type="text" name="counter">
        <input type="submit" value="Start">
    </form>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="submit" name="stop" value="Stop">
    </form>
    <form action="index.php" method="post">
        <input type="text" name="reset" value=null>
        <input type="submit" name="reset" value="reset">
    </form>
</body>

</html>
<?php
// $counter = $_POST["counter"];
// for ($i = 1; $i <= $counter; $i++) {
//     echo "{$i}<br>";
// }
// for ($i = $counter; $i >= 1; $i--) {
//     echo "{$i}<br>";
// }
// for ($i = $counter; $i >= 1; $i -= 3.5) {
//     echo "{$i}<br>";
// }

$running = true;
$seconds = 1;
while ($running) {
    if (isset($_POST["stop"])) {
        $running = false;
    } else {
        $seconds++;
        echo "{$seconds}<br>";
    }
}
?>