<?php
$age = 16;
$citizen = true;

// if ($age >= 18 && $citizen) {
//     echo "you Can Vote";
// } else {
//     echo "You cannot vote";
// }
// if (!($age >= 18) || !$citizen) {
//     echo "you Cannot Vote";
// } else {
//     echo "You can vote";
// }

$child = false;
$senior = true;
$ticket = null;

if ($child || $senior) {
    $ticket = 10;
} else {
    $ticket = 15;
}

echo "The Ticket Price is: \${$ticket}";
