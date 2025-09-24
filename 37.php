<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo $_GET['name'] . ", you are " . $_GET['age'] . " years old.";
} 
?>