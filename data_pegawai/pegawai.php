
     <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/style.css">
    

 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
    <!--ini untuk menu-->
		<div class="menu-malasngoding">
			<?php include "menu.php" ?>
		</div>


<?php

include "koneksi.php";

$sql = "SELECT * FROM tb_pegawai WHERE id_pegawai";
$stmt = $koneksi->prepare($sql);
$stmt->execute();

?>
<div style="padding:20px 20px 10px 10px" >


</div>
<a class="tbh" href="pegawai_input.php">Tambah Data</a>

	
	<div class="container">
        <div class="col-md-12">
<h1></h1>


<table class="table-zebri-striping table-hover table-bordered">
	



<tr>
<th>ID</th>
<th>NIP</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Agama</th>
<th>Jenis Kelamin</th>
<th>Status</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Email</th>
<th>Tahun Masuk</th>
<th colspan="3">Aksi</th>

</tr>
			
	<?php 
$no=1;

	while ($row=$stmt->fetch()){ 
 		
		?>
		<tr>
				<td> <?=$no++?></td>
			<td> <?= $row['nip']?></td>
			<td> <?= $row['nama']?></td>
			<td> <?= $row['tempat_lahir']?></td>
			<td> <?= $row['tanggal_lahir']?></td>
			<td> <?= $row['agama']?></td>
			<td> <?= $row['jenis_kelamin']?></td>
			<td> <?= $row['status']?></td>
			<td> <?= $row['alamat']?></td>
			<td> <?= $row['telepon']?></td>
			<td> <?= $row['email']?></td>
			<td> <?= $row['tahun_masuk']?></td>
			
			
			<td class="aksa">
			<a href="pegawai_edit.php?id=<?php echo $row['id_pegawai']; ?>">Edit</a></td>
			<td class="aksa">
			<a href="pegawai_delete.php?id=<?php echo $row['id_pegawai']; ?>">Hapus</a>
		
		<td class="aksa">
				<a href="detail.php">Detail</a>
				
		</td>
	</tr>
<?php } ?>
</table>
</div>

<div class="footer">
			<?php include "footer.php" ?>
		</div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>