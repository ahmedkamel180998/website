<?php
session_start();
?>


<?php
/*
include("database.php");

$sql = "INSERT INTO users (user_name, password)
        VALUE ('Ahmed Kamel', 'onthego')";
mysqli_query($conn, $sql);
mysqli_close($conn);

$username = "John Fedric";
$password = "ontherun";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user_name, password)
        VALUE ('$username', '$hash')";
mysqli_query($conn, $sql);
mysqli_close($conn);
*/
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
include("database.php");
$sql = "SELECT * FROM users WHERE user_name = 'Ahmed Fedric'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["id"] . "<br>";
    echo $row["user_name"] . "<br>";
    echo $row["reg_date"] . "<br>";
} else {
    echo "no users found!<br>";
}
?>

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