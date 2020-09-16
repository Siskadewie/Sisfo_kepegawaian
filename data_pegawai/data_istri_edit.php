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

$sql = "SELECT * FROM tb_data_istri WHERE id_istri = :id_istri";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_istri", $id);
$stmt->execute();

    $result = $stmt->fetch();
     if (isset($_POST['t_simpan'])) {
 	$sql2 = "UPDATE tb_data_istri SET id_pegawai = :id_pegawai, nama_istri = :nama_istri, ket = :ket WHERE id_istri= :id_istri";


 $stmt2 = $koneksi->prepare($sql2);
 $stmt2 ->bindParam(":id_pegawai", $_POST['id_pegawai']);
 $stmt2 ->bindParam(":nama_istri", $_POST['nama_istri']);
 $stmt2 ->bindParam(":ket", $_POST['ket']); 
 $stmt2->bindParam(":id_istri", $id);
 $stmt2-> execute();

    header("location: data_istri.php");
    }

    ?>
    <form action="" method="POST">
		
		<table>
        
        <tr>
            <td>Id Pegawai</td>
            <td><input type="text" name="id_pegawai" value="<?php echo $result['id_pegawai'];?>"></td>   
            
        </tr>

        <tr>
            <td>Nama Istri/Suami</td>
            <td><input type="text" name="nama_istri" value="<?php echo $result['nama_istri'];?>"></td>
            
        </tr>

        <tr>
            <td>Keterangan</td>
            <td>
            <select name="ket">

                <option>Suami</option>
                <option>Istri </option>
                <option>Istri 2</option>
                <option>Istri 3</option>
                <option>Istri 4</option>
            </select>
            </td>
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
