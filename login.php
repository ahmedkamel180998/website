<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <form action="login.php" method="post">
        <label>
            Username<br>
            <input type="text" name="username"><br>
        </label>
        <label>
            Password<br>
            <input type="password" name="password"><br>
        </label>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        //echo $_SESSION["username"];
        header("Location: index.php");
    } else {
        echo "Username or Password is Missed<br>";
    }
}
?>