<!DOCTYPE html>
<html>
<head>
    <title>Galeri Gambar</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            margin: 5px;
            max-width: 200px;
            max-height: 200px;
        }
    </style>
</head>
<body>

<div class="gallery">
    <?php
    $fileList = glob('gambar/*');
    foreach ($fileList as $filename) {
        if (is_file($filename)) {
            echo '<img src="'.$filename.'" alt="Gambar">';
        }
    }
    ?>
</div>

</body>
</html>
