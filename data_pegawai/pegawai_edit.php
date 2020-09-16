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

$sql = "SELECT * FROM tb_pegawai WHERE id_pegawai = :id_pegawai";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":id_pegawai", $id);
$stmt->execute();

    $result = $stmt->fetch();
    if (isset($_POST['t_simpan'])) {
    	$sql2 = "UPDATE tb_pegawai SET nip = :nip, nama = :nama, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir, agama = :agama, jenis_kelamin = :jenis_kelamin, status = :status, alamat = :alamat, telepon = :telepon, email = :email, tahun_masuk = :tahun_masuk  WHERE id_pegawai= :id_pegawai";
      



    $stmt2 = $koneksi->prepare($sql2);
$stmt2 ->bindParam(":nip", $_POST['nip']);
$stmt2 ->bindParam(":nama", $_POST['nama']);
$stmt2 ->bindParam(":tempat_lahir", $_POST['tempat_lahir']);
$stmt2 ->bindParam(":tanggal_lahir", $_POST['tanggal_lahir']);
$stmt2 ->bindParam(":agama", $_POST['agama']);
$stmt2 ->bindParam(":jenis_kelamin", $_POST['jenis_kelamin']);
$stmt2 ->bindParam(":status", $_POST['status']);
$stmt2 ->bindParam(":alamat", $_POST['alamat']);
$stmt2 ->bindParam(":telepon", $_POST['telepon']);
$stmt2 ->bindParam(":email", $_POST['email']);
$stmt2 ->bindParam(":tahun_masuk", $_POST['tahun_masuk']);

 
         $stmt2->bindParam(":id_pegawai", $id);
 $stmt2-> execute();

    header("location: Pegawai.php");
    }

    ?>
    <form action="" method="POST">
	<table>
		
		<table>
    

        <tr>
            <td>NIP</td>
            <td><input type="number" name="nip" value="<?php echo $result['nip'];?>"></td>
            
        </tr>

        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $result['nama'];?>"></td>
            
        </tr>

        <tr>
            <td>TEMPAT, TGL LAHIR</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $result['tempat_lahir'];?>"></td>
            <td><input type="date" name="tanggal_lahir" value="<?php echo $result['tanggal_lahir'];?>"></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Lainnya</option>
            </select>
            </td>
        </tr>

        <tr>
            <td>JENIS KELAMIN</td>
            <td>
            <select name="jenis_kelamin">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
            </td>
             <tr>
            <td>STATUS PERNIKAHAN</td>
           <td>
            <select name="status">
                <option>Menikah</option>
                <option>Belum Menikah</option>
                 <option>Cerai</option>
                <option>Janda/Duda</option>
            </select>
            </td>
        </tr>


        <tr>
            <td>ALAMAT</td>
            <td><input type="textarea" name="alamat" value="<?php echo $result['alamat'];?>"></td>
            
        </tr>
        <tr>
            <td>TELEPON</td>
            <td><input type="number" name="telepon" value="<?php echo $result['telepon'];?>"></td>
            
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" value="<?php echo $result['email'];?>"></td>
            
        </tr>

        <tr>
            <td>TAHUN MASUK</td>
            <td><input type="number" name="tahun_masuk" value="<?php echo $result['tahun_masuk'];?>"></td>
            
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
