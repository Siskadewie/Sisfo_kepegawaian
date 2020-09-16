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

$sql3 = "SELECT * FROM tb_golongan";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
  

$sql = "INSERT INTO tb_golongan VALUES ('', :divisi, :golongan, :id_pegawai)";
 

$stmt = $koneksi->prepare($sql);
$stmt ->bindParam(":divisi", $_POST['divisi']);
$stmt ->bindParam(":golongan", $_POST['golongan']);
$stmt->bindParam(":id_pegawai", $_POST['id_pegawai']);
$stmt-> execute();

 header("location: data_gol.php");
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
      <td>DIVISI</td>
      <td><input type="text" name="divisi"></td>
      
    </tr>

    <tr>
      <td>GOLONGAN</td>
      <td>
            <select name="golongan">
            <option value="2A">2A</option>
            <option value="2B">2B</option>
            <option value="2c">2C</option>
            
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

<div class="footer">
      <?php include "footer.php" ?>
    </div>
