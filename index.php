<?php
$username = "Bro Code";
$phone = "123-456-7890";

//$username = strtolower($username);
//$username = strtoupper($username);
//$username = trim($username);
//$username = str_pad($username, 20, "0");
//$phone = str_replace("-", "//", $phone);
//$username = strrev($username);
//$username = str_shuffle($username);
//$username = strcmp($username, "Bro Cod");
//$count = strlen($username);
//$index = strpos($username, " ");
//$firstName = substr($username, 0, 3);
//$lastName = substr($username, 4, 8);

// $fullName = explode(" ", $username);
// foreach ($fullName as $value) {
//     echo $value . "<br>";
// }
$name = array("Bro", "The", "Code");
$name =  implode("^-^", $name);
echo $name;
