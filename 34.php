<?php
$friuts=array(
    "Mango"=>70,
    "Banana"=>40,
    "Litchi"=>80,
    "Apple"=>60,
    "Guava"=>30
);
echo "Original Array:";
print_r($friuts);

echo "<br><br>Sorted by price using asort():<br>";
asort($friuts);
print_r($friuts);

echo "<br><br>Sorted by friuts name using ksort():<br>";
ksort($friuts);
print_r($friuts);
?>