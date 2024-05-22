
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body>
<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

    if ($username !== '' && $password !== '') {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
    }

    if (isset($_SESSION['username'])) {
    }
?>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>