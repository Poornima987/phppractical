<!DOCTYPE html>
<html>
<head>
    <title>Marks Result</title>
</head>
<body>
    <h2>Enter Your Marks</h2>

    <form method="get">
        Marks: <input type="text" name="marks">
        <input type="submit" value="Check Result">
    </form>

    <?php
    if (isset($_GET['marks'])) {
        $marks = $_GET['marks'];

        if ($marks >= 40) {
            echo "<h3>PASS</h3>";
        } else {
            echo "<h3>FAIL</h3>";
        }
    }
    ?>
</body>
</html>
