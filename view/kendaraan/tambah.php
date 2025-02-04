<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah parkir</h1>
    <form action="simpan.php" method="POST">
        <label for="">id_kendaraan</label>
        <input type="number" name="id_kendaraan">
        <br>
        <label for="">jenis</label>
        <input type="text" name="jenis">
        <br>
        <label for="">plat_nomor</label>
        <input type="text" name="plat_nomor">
        <br>
        <label for="">id_parkir1</label>
        <input type="text" name="id_parkir">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>