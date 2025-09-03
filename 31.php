<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "France" => "Paris"
);

// Adding new key-value pair
$countries["Germany"] = "Berlin";

// Printing all countries
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>
