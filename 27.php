<?php
// Array create
$numbers = array(40, 10, 70, 30, 20);

echo "Original Array:<br>";
print_r($numbers);
echo "<br><br>";

// 1) sort() - Ascending order
sort($numbers);
echo "sort() Ascending:<br>";
print_r($numbers);
echo "<br><br>";

// 2) rsort() - Descending order
rsort($numbers);
echo "rsort() Descending:<br>";
print_r($numbers);
echo "<br><br>";

// Associative array
$age = array("Ram"=>25, "Shyam"=>20, "Mohan"=>30);

// 3) asort() - Ascending by value
asort($age);
echo "asort() Ascending by value:<br>";
print_r($age);
echo "<br><br>";

// 4) arsort() - Descending by value
arsort($age);
echo "arsort() Descending by value:<br>";
print_r($age);
echo "<br><br>";

// 5) ksort() - Ascending by key
ksort($age);
echo "ksort() Ascending by key:<br>";
print_r($age);
echo "<br><br>";

// 6) krsort() - Descending by key
krsort($age);
echo "krsort() Descending by key:<br>";
print_r($age);
?>
