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

$sql3 = "SELECT * FROM tb_pensiun";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
	

$sql = "INSERT INTO tb_pensiun VALUES ('', :id_pegawai, :usia, :tahun_pensiun )";

 $stmt = $koneksi->prepare($sql);
$stmt ->bindParam(":id_pegawai", $_POST['id_pegawai']);
$stmt ->bindParam(":usia", $_POST['usia']);
$stmt ->bindParam(":tahun_pensiun", $_POST['tahun_pensiun']);
$stmt-> execute();

header("location: data_pensiun.php");
}

?>

 
<div class="isi">
<form action="" method="POST">
  <table>  
    <tr>
      <td>ID PEGAWAI</td>
      <td><input type="number" name="id_pegawai"></td>   
      
    </tr>

    <tr>
      <td>TAHUN PENSIUN</td>
      <td><input type="number" name="tahun_pensiun"></td>
      
    </tr>

    <tr>
      <td>USIA</td>
     <td><input type="number" name="usia"></td>
    </tr>
    
    <tr>
      <td></td>
      <td><input type="submit" name="t_simpan" value="submit"></td>
    </tr>

  </table>
</form>
</div>

<div class="footer">
      <?php include "footer.php" ?>
    </div>
