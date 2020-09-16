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

$sql = "SELECT * FROM tb_golongan WHERE id_gol = :id_gol";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_gol", $id);
$stmt->execute();

    $result = $stmt->fetch();
    if (isset($_POST['t_simpan'])) {
    	$sql2 = "UPDATE tb_golongan SET id_pegawai = :id_pegawai, divisi = :divisi, golongan = :golongan WHERE id_gol= :id_gol";

 $stmt2 = $koneksi->prepare($sql2);
 $stmt2 ->bindParam(":id_pegawai", $_POST['id_pegawai']);
  $stmt2 ->bindParam(":divisi", $_POST['divisi']);
 $stmt2 ->bindParam(":golongan", $_POST['golongan']);
    $stmt2->bindParam(":id_gol", $id);
 $stmt2-> execute();

    header("location: data_gol.php");
    }

    ?>
    <form action="" method="POST">
	<table>
		
		<table>
        
        <tr>
            <td>Id Pegawai</td>
            <td><input type="text" name="id_pegawai" value="<?php echo $result['id_pegawai'];?>"></td>   
            
        </tr>
        <tr>
            <td>Divisi</td>
            <td><input type="text" name="divisi" value="<?php echo $result['divisi'];?>"></td>   
            
        </tr>

        <tr>
            <td>Golongan</td>
            <td>
            <select name="golongan">
                <option>2A</option>
                <option>2C</option>
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
