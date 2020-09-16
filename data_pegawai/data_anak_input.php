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

$sql3 = "SELECT * FROM tb_anak";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
	

$sql = "INSERT INTO tb_anak VALUES ('',  :id_istri, :nama_anak, :anak_ke, :usia )";

 $stmt = $koneksi->prepare($sql);
$stmt ->bindParam(":id_istri", $_POST['id_istri']);
 $stmt ->bindParam(":nama_anak", $_POST['nama_anak']);
 $stmt ->bindParam(":anak_ke", $_POST['anak_ke']);
  $stmt ->bindParam(":usia", $_POST['usia']);
 
 $stmt-> execute();

header("location: data_anak.php");
}

?>


<div class="isi">
<form action="" method="POST">
  <table>  
    <tr>
      <td>ID ISTRI</td>
      <td><input type="number" name="id_istri"></td>   
      
    </tr>

    <tr>
      <td>NAMA ANAK</td>
      <td><input type="text" name="nama_anak"></td>
      
    </tr>

    <tr>
      <td>ANAK KE </td>
      <td>
            <select name="anak_ke">
            <option value="anak1">Anak ke 1</option>
            <option value="anak2">Anak ke 2</option>
            <option value="anak3">Anak ke 3</option>
            <option value="anak4">Anak ke 4</option>
            <option value="anak5">Anak ke 5</option>
            <option value="anak6">Anak ke 6</option>
            <option value="anak7">Anak ke 7</option>
            <option value="anak8">Anak ke 8</option>
            <option value="anak9">Anak ke 9</option>
            
            </select>
          </td>
      
    </tr>

    <tr>
      <td>USIA</td>
      <td><input type="text" name="usia"></td>
      
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
