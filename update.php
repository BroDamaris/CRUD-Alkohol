<?php
require 'config.php';

$id = $_GET['id'];

$query = "SELECT * FROM alcohol WHERE id = '$id'";
$result = mysqli_query($conn, $query);
$alcohol = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama_alkohol = htmlspecialchars($_POST['nama_alkohol']);
    $deskripsi = htmlspecialchars($_POST['deskripsi']);
    $harga = htmlspecialchars($_POST['harga']);
    $gambarLama = htmlspecialchars($_POST['gambarLama']);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
        unlink('img/' . $gambarLama);
    }

    $query = "UPDATE alcohol SET
    nama_alkohol = '$nama_alkohol',
    deskripsi = '$deskripsi',
    harga = '$harga',
    gambar = '$gambar' WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
        alert('Data Alkohol Berhasil diupdate');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Alkohol Gagal diupdate');
        document.location.href = 'update.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Alkohol</title>
</head>

<body>
    <h1>Update Data Alkohol</h1>
    <p><a href="index.php">Lihat Data Alkohol</a></p>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <p>
            <label for=" nama_alkohol">Nama Alkohol :</label>
            <input type="text" name="nama_alkohol" id="nama_alkohol" value="<?= $alcohol['nama_alkohol'] ?>">
            <input type="hidden" name="gambarLama" value="<?= $alcohol['gambar'] ?>">

        </p>
        <p>
            <label for="harga">Harga :</label>
            <input type="number" name="harga" id="harga" value="<?= $alcohol['harga'] ?>">
        </p>
        <p>
            <label for=" deskripsi">Deskripsi Alkohol :</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $alcohol['deskripsi'] ?></textarea>
        </p>
        <p>
            <label for="gambarSebelumnya">Gambar Sebelumnya :</label>
            <img src="img/<?= $alcohol['gambar'] ?>" width="100px">
        </p>
        <p>
            <label for=" gambar">Upload Gambar :</label>
            <input type="file" name="gambar" id="gambar">
        </p>
        <p>
            <input type="submit" value="Update" name="update">
        </p>
    </form>
</body>

</html>