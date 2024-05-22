<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan dan Tampilkan Identitas</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        // Set cookie yang berlaku selama 30 hari
        setcookie("user_name", $name, time() + (86400 * 30), "/");
        echo "Data identitas telah disimpan. <a href='".$_SERVER['PHP_SELF']."'>Refresh untuk melihat identitas</a>";
    }
    ?>

    <h1>Masukkan Identitas Anda</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <button type="submit">Simpan</button>
    </form>

    <br>

    <?php
    if (isset($_COOKIE["user_name"])) {
        $name = htmlspecialchars($_COOKIE["user_name"]);
        echo "Nama yang disimpan di cookie adalah: " . $name;
    } else {
        echo "Tidak ada data identitas yang disimpan.";
    }
    ?>
</body>
</html>
