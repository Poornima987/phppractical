<?php
$students = array(
    "Poornima" => 85,
    "Aryanshi" => 78,
    "Sakshi" => 92
);

if (array_key_exists("Sakshi", $students)) {
    echo "Key R exists in the array.";
} else {
    echo "Key Radha does not exist in the array.";
}
?>
