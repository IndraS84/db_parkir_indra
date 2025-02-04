<?php
include '../../config/koneksi.php';

$id_kendaraan = $_POST['id_kendaraan'];
$jenis = $_POST['jenis'];
$plat_nomor = $_POST['plat_nomor'];
$id_parkir = $_POST['id_parkir'];

$query = mysqli_query(
    $conn, "INSERT INTO kendaraan VALUES('$id_kendaraan','$jenis','$plat_nomor','$id_parkir')");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";

?>