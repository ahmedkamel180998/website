<?php
$password = "pizza123";
$hash = password_hash($password, PASSWORD_BCRYPT);
if (password_verify("pizza123", $hash)) {
    echo "You're logged in";
} else {
    echo "incorrect password";
}
