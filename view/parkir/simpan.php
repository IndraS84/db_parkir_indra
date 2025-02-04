<?php
include '../../config/koneksi.php';

$id_parkir = $_POST['id_parkir'];
$waktu = $_POST['waktu'];
$biaya = $_POST['biaya'];
$kapasitas = $_POST['kapasitas'];

$query = mysqli_query(
    $conn, "INSERT INTO parkir VALUES('$id_parkir','$waktu','$biaya','$kapasitas')");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";

?>