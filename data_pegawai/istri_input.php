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

$sql3= "SELECT * FROM tb_data_istri";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
	

$sql = "INSERT INTO tb_data_istri VALUES ('',  :id_pegawai, :nama_istri, :ket )";

 $stmt = $koneksi->prepare($sql);
 $stmt ->bindParam(":id_pegawai", $_POST['id_pegawai']);
 $stmt ->bindParam(":nama_istri", $_POST['nama_istri']);
 $stmt ->bindParam(":ket", $_POST['ket']);
 $stmt-> execute();

header("location: data_istri.php");
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
      <td>NAMA SUAMI/ISTRI</td>
      <td><input type="text" name="nama_istri"></td>
      
    </tr>

    <tr>
      <td>KETERANGAN</td>
      <td>
            <select name="ket">

                <option>Suami</option>
                <option>Istri </option>
                <option>Istri 2</option>
                <option>Istri 3</option>
                <option>Istri 4</option>
            </select>
            </td>
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


