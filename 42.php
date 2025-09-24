<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <form method="post">
        Number 1: <input type="text" name="num1"><br><br>
        Number 2: <input type="text" name="num2"><br><br>
        Operation: 
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Check if form submitted
    if(isset($_POST['num1'])){
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op = $_POST['op'];

        if($op == "+") $res = $a + $b;
        elseif($op == "-") $res = $a - $b;
        elseif($op == "*") $res = $a * $b;
        elseif($op == "/") $res = $b != 0 ? $a / $b : "Cannot divide by zero";

        echo "Result: $res";
    }
    ?>
</body>
</html>
