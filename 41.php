<!DOCTYPE html>
<html>
<head>
    <title>Simple Login System</title>
</head>
<body>
<form method="POST" action="">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === "poornima" && $password === "123") {
        echo "<h2>Login successful!</h2>";
    } else {
        echo "<h2>Invalid credentials</h2>";
    }
}
?>

</body>
</html>