<?php
/* Associative Array = An array made of Key=>Value PAIRS
        ex.1/ countries => capitals
        ex.2/ id => username
        ex.3/ item => price
*/
$countries = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

$countries["USA"] = "Las Vegas";
$countries["China"] = "Beijing";

//array_pop($countries);
//array_shift($countries);
// $keys = array_keys($countries);
// $values = array_values($countries);
// foreach ($countries as $key => $value) {
//     echo "{$key} = {$value}<br>";
// }

//$countries = array_flip($countries);
// $countries = array_reverse($countries);
// foreach ($countries as $key => $value) {
//     echo "{$key} = {$value}<br>";
// }
// foreach ($keys as $key) {
//     echo "{$key}<br>";
// }
// foreach ($values as $value) {
//     echo "{$value}<br>";
// }

echo count($countries);
