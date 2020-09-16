
    <!--ini untuk menu-->
		
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
         
<?php 

include "koneksi.php";

$sql3 = "SELECT * FROM tb_pegawai";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
	

$sql = "INSERT INTO tb_pegawai VALUES ('', :nip, :nama, :tempat_lahir, :tanggal_lahir, :agama, :jenis_kelamin, :status, :alamat, :telepon, :email, :tahun_masuk )";

 $stmt = $koneksi->prepare($sql);
 $stmt ->bindParam(":nip", $_POST['nip']);
 $stmt ->bindParam(":nama", $_POST['nama']);
 $stmt ->bindParam(":tempat_lahir", $_POST['tempat_lahir']);
 $stmt ->bindParam(":tanggal_lahir", $_POST['tanggal_lahir']);
 $stmt ->bindParam(":agama", $_POST['agama']);
 $stmt ->bindParam(":jenis_kelamin", $_POST['jenis_kelamin']);
 $stmt ->bindParam(":status", $_POST['status']);
 $stmt ->bindParam(":alamat", $_POST['alamat']);
 $stmt ->bindParam(":telepon", $_POST['telepon']);
 $stmt ->bindParam(":email", $_POST['email']);
 $stmt ->bindParam(":tahun_masuk", $_POST['tahun_masuk']);
 $stmt-> execute();
 header("location: pegawai.php");
}

?>
   

    <div class="container">
        <div class="col-md-12">
                <div class="panel panel-warning">
                    <div class="panel-heading" >
                        <center><h2>INPUT DATA PEGAWAI BBPSDMP KOMINFO MEDAN</h2></center>
                    </div>


                <form method="post">
                    <div class="form-group">
                            <label>NIP</label>
                            <input type="number" name="nip" id="nip" class="form-control" placeholder="Masukan Nip Anda di sini!">
                        </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Anda di sini!">
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>TEMPAT, TGL LAHIR</label>
                                <div class="form-row">
                                <div class="col">
                                  <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                </div>
                                <div class="col">
                                  <input type="date"name="tanggal_lahir" id="tanggal_lahir">
                                </div>
                              </div>
                        </div>

                    </div>
                </div>


        <label for="inputState">AGAMA</label>
      <select name="agama" id="agama" class="form-control">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Lainnya</option>
      </select>

      <label for="inputState">JENIS KELAMIN</label>
      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
        <option>Laki-Laki</option>
        <option>Perempuan</option>
      </select>


      <label for="inputState">STATUS NIKAH</label>
      <select name="status" id="status" class="form-control">
        <option>Menikah</option>
        <option>Belum Menikah</option>
         <option>Cerai</option>
        <option>Janda/Duda</option>
      </select>


      <div class="panel-body">
                     <div class="form-group">
        <label for="exampleFormControlTextarea1">ALAMAT</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukan Alamat Anda di sini!"></textarea>
      </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label>No. HP</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukan No. Hp Anda di sini!">
                        </div>
                    </div>

 <div class="form-group">
    <label for="exampleFormControlInput1">EMAIL</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
  </div>


   <div class="form-group">
                            <label>TAHUN MASUK</label>
                            <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" placeholder="Masukan Tahun Masuk Anda di sini!">
                        </div>


                <button type="submit" name="t_simpan" class="btn btn-success">SIMPAN</button> 
       
 <a href="pegawai.php">KEMBALI        
            </div>
</div>

</form>  

<div class="footer">
			<?php include "footer.php" ?>
		</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>