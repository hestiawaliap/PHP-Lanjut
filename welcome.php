<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    // Fungsi untuk menampilkan pesan kesalahan
    function showError($message) {
        echo '<script>alert("' . $message . '");</script>';
    }

    // Cek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai username dan password dari form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Cek apakah username dan password sesuai
        if ($username === 'admin' && $password === 'password') {
            echo 'Login berhasil!'; // Ganti dengan aksi yang sesuai setelah login berhasil
        } else {
            // Jika tidak sesuai, tampilkan pesan kesalahan
            showError('Username atau password salah');
        }
    }
    ?>
</body>
</html>
