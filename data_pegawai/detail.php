<?php
include "koneksi.php";

$id = $_GET['id_pegawai'];

$sql = "SELECT * FROM tb_pegawai WHERE id_pegawai";


$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_pegawai", $id);
$stmt->execute();   
$result = $stmt->fetch();

$sql2 = "SELECT *
FROM tb_pegawai
INNER JOIN tb_pensiun
ON 
tb_pegawai.id_pegawai = tb_pensiun.id_pensiun";


$stmt = $koneksi->prepare($sql2);
$stmt->bindParam(":id_pegawai", $id);
$stmt->execute();   
$result = $stmt->fetch();
?>

<html>
<head>
</head>
<body>
    <h2>Detail Data Pegawai</h2>
    <p><i>Note: Di bawah ini adalah detail informasi pegawai berdasarkan id pegawai</i> <b><?php echo $result['id_pegawai']?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIP</td>
            <td>: <?php echo $result['nip']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['nama']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?php echo $result['tempat_lahir']?>, <?php echo $result['tanggal_lahir']?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: <?php echo $result['agama']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $result['jenis_kelamin']?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: <?php echo $result['status']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $result['alamat']?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>: <?php echo $result['telepon']?></td>
        </tr>
         <tr>
            <td>Email</td>
            <td>: <?php echo $result['email']?></td>
        </tr>
         <tr>
            <td>Tahun Masuk</td>
            <td>: <?php echo $result['tahun_masuk']?></td>
        </tr>
         <tr>
            <td>Tahun Pensiun</td>
            <td>: <?php echo $result['tahun_pensiun']?></td>
        </tr>

        <tr height="40">
            <td></td>
            <td>   <a href="./">Kembali</a></td>
        </tr>
    </table>
</body>
</html>