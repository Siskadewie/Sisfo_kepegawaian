
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
FROM tb_golongan
INNER JOIN tb_pegawai
ON 
tb_golongan.id_gol = tb_pegawai.id_pegawai";

$stmt = $koneksi->prepare($sql2);
$stmt->execute();
?>

<div style="padding:20px 20px 10px 10px" >

</div>
<a class="tbh" href="data_gol_input.php">Tambah Data</a>

<table class="table-zebri-striping">
<h2></h2>

<tr>
<th>NIP </th>
<th>Nama</th>
<th>Divisi</th>
<th>Golongan</th>
<th>Aksi</th>
</tr>

	<?php while ($row=$stmt->fetch()) { ?>
		<tr>
			<td> <?= $row['nip']?></td>	
			<td> <?= $row['nama']?></td>
			<td> <?= $row['divisi']?></td>
			<td> <?= $row['golongan']?></td>
			
			<td class="aksa">
			<a href="data_gol_edit.php?id=<?php echo $row['id_gol']; ?>">Edit</a>
			<a href="data_gol_hapus.php?id=<?php echo $row['id_gol']; ?>">Hapus</a></td>
		</tr>
	
<?php } ?>
</table>

<div class="footer">
			<?php include "footer.php" ?>
		</div>
</div>