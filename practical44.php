<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    echo "Thank you, $name! Your feedback has been submitted.";
} else {
    echo "No feedback received!";
}
?>