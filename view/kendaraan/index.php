<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kendaraan parkir</title>
</head>
<body>
    <h1>Data kendaraan parkir</h1>
    <a href="tambah.php">Tambah</a>
    <table border="2">
        <tr>
        <th>id_kendaraan</th>
        <th>jenis</th>
        <th>plat_nomor</th>
        <th>id_parkir</th>
        <th>aksi</th>
        </tr>

        <?php
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM kendaraan");
        $no = 1;

        if(mysqli_num_rows($query) > 0){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $result['id_kendaraan'] ?></td>
                    <td><?php echo $result['jenis'] ?></td>
                    <td><?php echo $result['plat_nomor'] ?></td>
                    <td><?php echo $result['id_parkir'] ?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
        }else{
            echo "data kosong";
        }
        ?>
    </table>
</body>
</html>