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

$sql = "SELECT * FROM tb_anak WHERE id_anak = :id_anak";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_anak", $id);
$stmt->execute();

    $result = $stmt->fetch();
    if (isset($_POST['t_simpan'])) {
    	$sql2 = "UPDATE tb_anak SET id_istri = :id_istri, nama_anak = :nama_anak, anak_ke = :anak_ke, usia = :usia WHERE id_anak= :id_anak";


    $stmt2 = $koneksi->prepare($sql2);
 $stmt2 ->bindParam(":id_istri", $_POST['id_istri']);

 $stmt2 ->bindParam(":nama_anak", $_POST['nama_anak']);
 $stmt2 ->bindParam(":anak_ke", $_POST['anak_ke']);
  $stmt2 ->bindParam(":usia", $_POST['usia']);
         $stmt2->bindParam(":id_anak", $id);
 $stmt2-> execute();

    header("location: data_anak.php");
    }

    ?>
    <form action="" method="POST">
	<table>
		
		<table>
        
        <tr>
            <td>Id Suami/Istri</td>
            <td><input type="text" name="id_istri" value="<?php echo $result['id_istri'];?>"></td>   
            
        </tr>

        <tr>
            <td>Nama Anak</td>
            <td><input type="text" name="nama_anak" value="<?php echo $result['nama_anak'];?>"></td>
            
        </tr>
           <tr>
            <td>Usia</td>
            <td><input type="text" name="usia" value="<?php echo $result['usia'];?>"></td>
            
        </tr>

        <tr>
            <td>Keterangan</td>
            <td>
            <select name="anak_ke">
                <option>Anak 1</option>
                <option>Anak 2</option>
                <option>Anak 3</option>
                <option>Anak 4</option>
                <option>Anak 5</option>
                <option>Anak 6</option>
                 <option>Anak 7</option>
                <option>Anak 8</option>
                <option>Anak 9</option>
                <option>Anak 10</option>
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
