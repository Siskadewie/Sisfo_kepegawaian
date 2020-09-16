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

$sql3 = "SELECT * FROM tb_gaji";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
    

$sql = "INSERT INTO tb_gaji VALUES ('',:id_pegawai, :tgl_gaji, :tunjangan, :gaji_pokok )";

 $stmt = $koneksi->prepare($sql);
$stmt ->bindParam(":id_pegawai", $_POST['id_pegawai']);
 $stmt ->bindParam(":tgl_gaji", $_POST['tgl_gaji']);
  $stmt ->bindParam(":tunjangan", $_POST['tunjangan']);
   $stmt ->bindParam(":gaji_pokok", $_POST['gaji_pokok']);
 $stmt-> execute();

header("location: data_gaji.php");
}

?>

<div class="isi">
<form action="" method="POST">
  <table>  
    <tr>
      <td>ID PEGAWAI</td>
      <td><input type="number" name="id_pegawai"></td>   
      

    <tr>
      <td>TANGGAL GAJIAN</td>
      <td><input type="date" name="tgl_gaji"></td>
      
    </tr>

    <tr>
      <td>TUNJANGAN</td>
     
      <td><input type="number" name="tunjangan"></td>
    
    </tr>
    
     <tr>
      <td>GAJI POKOK</td>
      <td><input type="number" name="gaji_pokok"></td>   
      
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
