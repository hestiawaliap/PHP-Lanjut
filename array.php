<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Hesti Awalia Putri">
</head>
<body>
<?php
$data = array(
    array("nama" => "Hesti", "umur" => 19),
    array("nama" => "Awalia", "umur" => 19),
    array("nama" => "Putri", "umur" => 20),
    array("nama" => "Hafizh", "umur" => 19),
    array("nama" => "Luqmanul", "umur" => 18),
    array("nama" => "Hakim", "umur" => 19),
    array("nama" => "Cantika", "umur" => 18),
    array("nama" => "Karisma", "umur" => 20),
    array("nama" => "enjel", "umur" => 19),
    array("nama" => "Abela", "umur" => 21),
    array("nama" => "Berlian", "umur" => 18),
    array("nama" => "Ratu", "umur" => 17),
    array("nama" => "Raja", "umur" => 21),
    array("nama" => "Heri", "umur" => 20),
    array("nama" => "Rivia", "umur" => 19)
);

$json_data = json_encode($data, JSON_PRETTY_PRINT);

echo nl2br($json_data);
?>
</body>
</html>
