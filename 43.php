<!DOCTYPE html>
<html>
<head>
    <title>Favorite Programming Language</title>
</head>
<body>
    <h2>Which is your favorite programming language?</h2>

    <form method="post">
        <input type="radio" name="language" value="PHP"> PHP<br>
        <input type="radio" name="language" value="JavaScript"> JavaScript<br>
        <input type="radio" name="language" value="Python"> Python<br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['language'])){
        $choice = $_POST['language'];
        echo "<h3>Your favorite language is: $choice</h3>";
    }
    ?>
</body>
</html>
