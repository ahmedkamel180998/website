<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form action="index.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="userName"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In"><br>
    </form>
</body>

</html>
<?php
echo "{$_GET["userName"]} <br>";
echo "{$_GET["password"]} <br>";
//echo "{$_POST["userName"]} <br>";
//echo "{$_POST["password"]} <br>";
?>