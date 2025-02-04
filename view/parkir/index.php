<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kendaraan parkir</title>
</head>
<body>
    <h1>Data kendaraan parkir</h1>
    <table border="2">
        <tr>
        <th>id_parkir</th>
        <th>waktu</th>
        <th>biaya</th>
        <th>kapasitas</th>
        <th>aksi</th>
        </tr>

        <?php
        include '../../config/koneksi.php';
        $query=mysqli_query($conn,"SELECT * FROM parkir");
        $no = 1;

        if(mysqli_num_rows($query) > 0){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $result['id_parkir'] ?></td>
                    <td><?php echo $result['waktu'] ?></td>
                    <td><?php echo $result['biaya'] ?></td>
                    <td><?php echo $result['kapasitas'] ?></td>
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