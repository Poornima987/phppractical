<!DOCTYPE html>
<html>
<head>
    <title>Enter Your Name</title>
</head>
<body>
    <h2>Enter Your Name</h2>

    <form method="post">
        Name: <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['username']) && $_POST['username'] != "") {
        $name = $_POST['username'];
        echo "<h3>Welcome, " . $name . "!</h3>";
    }
    ?>
</body>
</html>
