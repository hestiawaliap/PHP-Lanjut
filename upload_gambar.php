<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307016">
    <meta name="author" content="Hesti Awalia Putri">
</head>
<body>
    <?php
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOK = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
            $uploadOK = 1;
        } else {
            echo "File bukan gambar.<br>";
            $uploadOK = 0;
        }

        // Tambahkan kode berikut untuk mengecek apakah file sudah ada
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.<br>";
            $uploadOK = 0;
        }

        // Tambahkan kode berikut untuk mengecek ukuran file
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, file anda terlalu besar.<br>";
            $uploadOK = 0;
        }

        // Tambahkan kode berikut untuk mengecek tipe file
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "Sorry, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.<br>";
            $uploadOK = 0;
        }

        // Mengecek apakah uploadOK bernilai 0
        if ($uploadOK == 0) {
            echo "Sorry, file anda gagal upload.<br>";
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "File " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " berhasil upload.<br>";
            } else {
                echo "Sorry, ada error saat upload.<br>";
            }
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload: </label><br>
        <input type="file" name="gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
