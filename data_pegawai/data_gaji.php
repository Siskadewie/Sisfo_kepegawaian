
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

$sql2 = "SELECT *
FROM tb_gaji
INNER JOIN tb_pegawai 
ON 
tb_gaji.id_gaji = tb_pegawai.id_pegawai ";

$stmt = $koneksi->prepare($sql2);
$stmt->execute();
?>


<div style="padding:20px 20px 10px 10px" >


</div>
<a class="tbh" href="data_gaji_input.php">Tambah Data</a>
<table class="table-zebri-striping">

<tr>
<th>NIP </th>
<th>Nama </th>
<th>Tanggal Gaji</th>
<th>Tunjangan</th>
<th>Gaji Pokok</th>
<th>Aksi</th>
</tr>

	
	<?php while ($row=$stmt->fetch()) { ?>
			<tr>

			<td> <?= $row['nip']?></td>
			<td> <?= $row['nama']?></td>
			<td> <?= $row['tgl_gaji']?></td>
			<td> <?= $row['tunjangan']?></td>
			<td> <?= $row['gaji_pokok']?></td>

<td class="aksa">
			<a href="data_gaji_edit.php?id=<?php echo $row['id_gaji']; ?>">Edit</a>
			<a href="data_gaji_hapus.php?id=<?php echo $row['id_gaji']; ?>">Hapus</a>

		</td>
			
		</tr>
	
<?php } ?>
</table>

<div class="footer">
			<?php include "footer.php" ?>
		</div>
</div>
