<!DOCTYPE html>
<html>
<head>
    <meta charshet="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tempat_tanggal= $_POST['tempat tanggal'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];

    echo "NIM: " . $nim . "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Tempat , Tanggal Lahir : " . $tempat_tanggal . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Gender: " . $gender . "<br>";
    ?>
</body>
</html>
