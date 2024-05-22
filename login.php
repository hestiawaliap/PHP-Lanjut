<!DOCTYPE html>
<html>
<head>
    <meta charshet="UTF-8">
    <title>Form Login</title>
</head>
<body>
        <?php
        function bersihkan_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
           }

           $name = $email =  "";
           $nameErr = $emailErr ="";
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                $nameErr = "Masukkan username";
            } else {
                $name = bersihkan_input($_POST["username"]);
            }
        
            if (empty($_POST["password"])) {
                $emailErr = "Masukkan password";
            } else {
                $email = bersihkan_input($_POST["password"]);
            }
        }
        ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username">
    <span class="error" style="color:red; font-size: smaller;"><?php echo $nameErr;?></span>
    <br><br>
    Password: <input type="password" name="password">
    <span class="error" style="color:red; font-size: smaller;"><?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" value="Login">
</form>
</body>
</html>
