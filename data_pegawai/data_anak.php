
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
FROM tb_anak
INNER JOIN tb_data_istri
ON 
tb_anak.id_anak = tb_data_istri.id_istri";

$stmt = $koneksi->prepare($sql2);
$stmt->execute();

?>

<div style="padding:20px 20px 10px 10px" >


</div>
<a class="tbh" href="data_anak_input.php">Tambah Data</a>
<table class="table-zebri-striping">
<h2></h2>

<tr>
<th>Nama Ibu/Ayah</th>
<th>Nama Anak</th>
<th>Usia Anak</th>
<th>Anak ke </th>
<th>Aksi</th>
</tr>

	<?php while ($row=$stmt->fetch()) { ?>
		<tr>
<td> <?= $row['nama_istri']?></td>
			<td> <?= $row['nama_anak']?></td>
			<td> <?= $row['usia']?></td>
			<td> <?= $row['anak_ke']?></td>
			
			<td class="aksa"> 
			<a href="data_anak_edit.php?id=<?php echo $row['id_anak']; ?>">Edit</a>
			<a href="data_anak_hapus.php?id=<?php echo $row['id_anak']; ?>">Hapus</a></td>
		</tr>
	
<?php } ?>
</table>

<div class="footer">
			<?php include "footer.php" ?>
		</div>
</div>