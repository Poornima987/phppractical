<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
</head>
<body>

<h2>Simple Online Quiz</h2>

<form method="POST" action="">
    <p>1. Which language is used for web development?</p>
    <input type="radio" name="q1" value="PHP" required> PHP <br>
    <input type="radio" name="q1" value="C++"> C++ <br>
    <input type="radio" name="q1" value="Java"> Java <br><br>

    <p>2. Which tag is used for line break in HTML?</p>
    <input type="radio" name="q2" value="<br>" required> &lt;br&gt; <br>
    <input type="radio" name="q2" value="<p>"> &lt;p&gt; <br>
    <input type="radio" name="q2" value="<h1>"> &lt;h1&gt; <br><br>

    <p>3. Which of the following is a database?</p>
    <input type="radio" name="q3" value="MySQL" required> MySQL <br>
    <input type="radio" name="q3" value="CSS"> CSS <br>
    <input type="radio" name="q3" value="HTML"> HTML <br><br>

    <input type="submit" value="Submit Quiz">
</form>

<?php
if (isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3'])) {
    $score = 0;

    if ($_POST['q1'] === "PHP") $score++;
    if ($_POST['q2'] === "<br>") $score++;
    if ($_POST['q3'] === "MySQL") $score++;

    echo "<h2>Your Score: $score / 3</h2>";
}
?>

</body>
</html>