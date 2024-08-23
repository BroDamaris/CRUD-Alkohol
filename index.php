<?php
require 'config.php';

$query = mysqli_query($conn, "SELECT * FROM alcohol");
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Alkohol</title>
</head>

<body>
    <h1>Daftar Alkohol</h1>
    <p><a href="insert.php">Tambahkan Data Alkohol</a></p>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Alkohol</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php while ($alcohol = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><img src="img/<?= $alcohol['gambar'] ?>" width="100px"></td>
                    <td><?= $alcohol['nama_alkohol'] ?></td>
                    <td>Rp.<?= $alcohol['harga'] ?></td>
                    <td><?= $alcohol['deskripsi'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $alcohol['id'] ?>">Update</a>
                        <a href="delete.php?id=<?= $alcohol['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data Alkohol ini?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>

</html>