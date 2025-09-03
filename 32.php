<?php
$students = array(
    "Poornima" => 85,
    "Aryanshi" => 78,
    "Sakshi" => 92,
    "Palak" => 88,
    "Khushi" => 76
);

// Updated Snehika marks
$students["Aryanshi"] = 95;

echo "Updated Students Marks:<br>";
foreach ($students as $name => $marks) {
    echo "$name : $marks <br>";
}
?>
