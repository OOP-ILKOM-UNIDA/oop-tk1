<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "your_username" && $password == "your_password") {
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>_