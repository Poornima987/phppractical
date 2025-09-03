<?php
$num = array(10, 20, 30, 20, 40, 10, 50);

echo "Original Array: ";
print_r($num);

$uniqueNum = array_unique($num);

echo "<br>Array after removing duplicates: ";
print_r($uniqueNum);
?>
