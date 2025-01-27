<?php
session_start();
?>
<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>This is Home Page</h1>
    <form action="login.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>
<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: login.php");
}
?>
<?php
include("footer.html");
?>