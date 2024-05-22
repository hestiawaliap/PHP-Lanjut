<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    session_start();

    // Jika pengguna sudah login, arahkan ke halaman welcome
    if (isset($_SESSION['username'])) {
        header("Location: welcome.php");
        exit;
    }

    // Jika form login telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Simpan username dan password dari form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simpan informasi pengguna yang valid
        $valid_username = 'user';
        $valid_password = 'password';

        // Cek apakah username dan password valid
        if ($username === $valid_username && $password === $valid_password) {
            // Atur session untuk menyimpan informasi login
            $_SESSION['username'] = $username;

            // Redirect ke halaman welcome
            header("Location: welcome.php");
            exit;
        } else {
            // Jika login gagal, tampilkan pesan kesalahan
            $error = "Invalid username or password";
            echo "<p>$error</p>";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>