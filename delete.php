<?php
require 'config.php';

$id = $_GET['id'];

$querySelect = "SELECT * FROM alcohol WHERE id = '$id'";
$result = mysqli_query($conn, $querySelect);
$alcohol = mysqli_fetch_assoc($result);

unlink('img/' . $alcohol['gambar']);

$queryDelete = "DELETE FROM alcohol WHERE id = '$id'";
mysqli_query($conn, $queryDelete);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
    alert('Data Alkohol Berhasil di hapus');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Alkohol Gagal di hapus');
    document.location.href = 'index.php';
    </script>";
}
