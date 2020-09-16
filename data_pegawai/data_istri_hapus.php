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

$sql = "DELETE FROM tb_data_istri WHERE id_istri = :id_istri";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_istri", $id);
$stmt->execute();


    header("location:data_istri.php");
    

    