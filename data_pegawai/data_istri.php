

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
FROM tb_data_istri
INNER JOIN tb_pegawai
ON 
tb_data_istri.id_istri = tb_pegawai.id_pegawai";

$stmt = $koneksi->prepare($sql2);
$stmt->execute();
?>


<div style="padding:20px 20px 10px 10px" >


</div>
<a class="tbh" href="istri_input.php">Tambah Data</a>
<table class="table-zebri-striping">
<h2></h2>

<tr>
	<th>NIP</th>
<th>Nama Pegawai</th>
<th>Nama Suami/Istri</th>
<th>Ket </th>
<th>Aksi</th>
</tr>

	<?php while ($row=$stmt->fetch()) { ?>
		<tr>
<td> <?= $row['nip']?></td>
<td> <?= $row['nama']?></td>
			<td> <?= $row['nama_istri']?></td>
			<td> <?= $row['ket']?></td>
			
			<td class="aksa">
			<a href="data_istri_edit.php?id=<?php echo $row['id_istri']; ?>">Edit</a>
			<a href="data_istri_hapus.php?id=<?php echo $row['id_istri']; ?>">Hapus</a></td>
		</tr>
	
<?php } ?>
</table>

<div class="footer">
			<?php include "footer.php" ?>
		</div>
</div>