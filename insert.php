<?php
require 'config.php';


if (isset($_POST['insert'])) {
    $nama_alkohol = htmlspecialchars($_POST['nama_alkohol']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);

    $gambar = upload();
    if (!$gambar) {
        echo "<script>
        alert('Data Gagal di insert!');
        document.location.href = 'insert.php';
        </script>";
    } else {
        $query = "INSERT INTO alcohol VALUES (
        '','$nama_alkohol', '$deskripsi', '$harga', '$gambar'
        )";

        mysqli_query($conn, $query);

        echo "<script>
        alert('Data Berhasil di insert!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Alkohol</title>
</head>

<body>
    <h1>Tambahkan Data Alkohol</h1>
    <p><a href="index.php">Lihat Data Alkohol</a></p>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <label for=" nama_alkohol">Nama Alkohol :</label>
            <input type="text" name="nama_alkohol" id="nama_alkohol">
        </p>
        <p>
            <label for="harga">Harga :</label>
            <input type="number" name="harga" id="harga">
        </p>
        <p>
            <label for="deskripsi">Deskripsi Alkohol :</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="gambar">Upload Gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </p>
        <p>
            <input type="submit" value="Insert" name="insert">
        </p>
    </form>
</body>

</html>