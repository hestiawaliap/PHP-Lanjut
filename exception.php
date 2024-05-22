<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
       <?php
             session_start();
             function loginUser($username, $password) {
                  if ($username === '' || $password === '') {
                     throw new InvalidArgumentException("Username dan password harus diisi.");
                  }
                  if ($password !== 'mencoba') {
                     throw new RuntimeException("password salah.");
                  }
              $_SESSION['username'] = $username;
              }

         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             try {
                  $username = $_POST['username'];
                  $password = $_POST['password'];
                  loginUser($username, $password);
                  header("Location: welcome.php");
                  exit();
                  } catch (InvalidArgumentException $e) {
                     $error_message = $e->getMessage();
                  } catch (RuntimeException $e) {
                     $error_message = $e->getMessage();
                  }
         }   
        ?>
        
<body>
    <?php if (isset($error_message)) { ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>