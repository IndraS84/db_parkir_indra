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
        <label for="">id_parkir</label>
        <input type="number" name="id_parkir">
        <br>
        <label for="">waktu</label>
        <input type="time" name="waktu">
        <br>
        <label for="">biaya</label>
        <input type="text" name="biaya">
        <br>
        <label for="">kapasitas</label>
        <input type="text" name="kapasitas">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>