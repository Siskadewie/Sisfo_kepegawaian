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

$sql = "SELECT * FROM tb_pensiun WHERE id_pensiun = :id_pensiun";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_pensiun", $id);
$stmt->execute();

    $result = $stmt->fetch();
    if (isset($_POST['t_simpan'])) {
    	$sql2 = "UPDATE tb_pensiun SET id_pegawai = :id_pegawai, tahun_pensiun = :tahun_pensiun, usia = :usia WHERE id_pensiun= :id_pensiun";


    $stmt2 = $koneksi->prepare($sql2);
 $stmt2 ->bindParam(":id_pegawai", $_POST['id_pegawai']);
  $stmt2 ->bindParam(":usia", $_POST['usia']);
 $stmt2 ->bindParam(":tahun_pensiun", $_POST['tahun_pensiun']);
 
         $stmt2->bindParam(":id_pensiun", $id);
 $stmt2-> execute();

    header("location: data_pensiun.php");
    }

    ?>
    <form action="" method="POST">
	<table>
		
		<table>
        
        <tr>
            <td>Id Pegawai</td>
            <td><input type="number" name="id_pegawai" value="<?php echo $result['id_pegawai'];?>"></td>   
            
        </tr>


             <tr>
            <td>Usia</td>
            <td><input type="number" name="usia" value="<?php echo $result['usia'];?>"></td>
             </tr>


           <tr>
            <td>Tahun Pensiun</td>
            <td><input type="number" name="tahun_pensiun" value="<?php echo $result['tahun_pensiun'];?>"></td>
        </tr>

            
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
