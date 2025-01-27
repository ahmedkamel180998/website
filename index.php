<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>
            Username<br>
            <input type="text" name="username"><br>
        </label>
        <label>
            Age<br>
            <input type="text" name="age"><br>
        </label>
        <label>
            Email<br>
            <input type="text" name="email"><br>
        </label>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    //echo "Your username is: {$username}<br>";

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    //echo "Your Age is: {$age}<br>";

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    //echo "Your Email is: {$email}<br>";

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        echo "That Email wasn't Valid";
    } else {
        echo $email;
    }
}
?>