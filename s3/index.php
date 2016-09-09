<?php
$x = 5;
echo $x;
echo "<br />";

$word1 = "Hello";
$word2 = "World!";

echo $word1.' '.$word2;
echo "<br />";

$cars = array("Honda", "Toyota", "Ford");
echo "I drive a ".$cars[2];
echo "<br />";

foreach($cars as $car)
{
    echo "<br />".$car;
}
echo "<br />";
echo "<br />";

$car = array("make" => "Toyota", "model" => "Camary", "color" => "Black");
foreach ($car as $key => $value) {
    echo ucwords($key).": ".$value;
}

?>