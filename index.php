<?php
$name = "Ahmed";
$food = "Pizza";
$email = "fake@gmail.com";
// integers
$age = 26;
$users = 2;
$quantity = 3;
// floats
$gpa = 3.14;
$price = 4.99;
$taxRate = 2.1;
// boleans
$employed = true;
$online = false;
$forSale = false;

echo "Hello {$name}<br>";
echo "You Like {$food}<br>";
echo "Your Email is: {$email}<br>";
echo "Your Age is: {$age} Years Old<br>";
echo "There are {$users} users online<br>";
echo "You Would Like To Buy {$quantity} Items<br>";
echo "Your GPA is: {$gpa}<br>";
echo "Your Pizza is: \${$price}<br>";
echo "The Sales Tax Rate is: {$taxRate}%<br>";
echo "Online Status is: {$online}<br>";
echo "Employed Status is: {$employed}<br>";
echo "For Sale is: {$forSale}<br>";

$total = null;
echo "You have ordered {$quantity}x {$food}s<br>";
$total = $quantity * $price;
echo "Total price is: \${$total}<br>";
