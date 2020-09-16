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

$id = $_GET['id'];

$sql = "DELETE FROM tb_gaji WHERE id_gaji = :id_gaji";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_gaji", $id);
$stmt->execute();


    header("location:data_gaji.php");
    

    