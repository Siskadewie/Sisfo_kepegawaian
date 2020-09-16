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

$sql = "SELECT * FROM tb_gaji WHERE id_gaji = :id_gaji";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_gaji", $id);
$stmt->execute();

    $result = $stmt->fetch();
 	$sql2 = "UPDATE tb_gaji SET id_pegawai = :id_pegawai, tgl_gaji= :tgl_gaji, tunjangan = :tunjangan, gaji_pokok :gaji_pokok WHERE id_gaji= :id_gaji";


 $stmt2 = $koneksi->prepare($sql2);
 $stmt2 ->bindParam(":id_pegawai", $_POST['id_pegawai']);
 $stmt2 ->bindParam(":tgl_gaji", $_POST['tgl_gaji']);
 $stmt2 ->bindParam(":tunjangan", $_POST['tunjangan']); 
$stmt2 ->bindParam(":gaji_pokok", $_POST['gaji_pokok']); 
 $stmt2->bindParam(":id_gaji", $id);
 $stmt2-> execute();

    header("location: data_gaji.php");
    

    ?>
    <form action="" method="POST">
	<table>
		
		<table>
        
        <tr>
            <td>Id Pegawai</td>
            <td><input type="text" name="id_pegawai" value="<?php echo $result['id_pegawai'];?>"></td>   
            
        </tr>

        <tr>
            <td>Tanggal Gaji</td>
            <td><input type="date" name="tgl_gaji" value="<?php echo $result['tgl_gaji'];?>"></td>
            
        </tr>

        <tr>
            <td>Tunjangan</td>
            <td><input type="number" name="tunjangan" value="<?php echo $result['tunjangan'];?>"></td>
            
        </tr>


        <tr>
            <td>Gaji Pokok </td>
            <td><input type="number" name="gaji_pokok" value="<?php echo $result['gaji_pokok'];?>"></td>
            
        </tr>


        
        <tr>
            <td></td>
            <td><input type="submit" name="t_simpan" value="submit"></td>
        </tr>
	</table>
</form>
</div>

    </form>

    <div class="footer">
            <?php include "footer.php" ?>
        </div>
