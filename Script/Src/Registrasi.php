<?php
    include '../PHP/config.php'; 
    if (isset($_POST["submit"])){
        $Nama = $_POST["Nama"];
        $Gender = $_POST["Gender"];
        $NIDN = $_POST["NIDN"];
        $Jabatan = $_POST["Jabatan"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $Email = $_POST["Email"];
        $NO_HP = $_POST["NO_HP"];
        $alamat_kantor = $_POST["alamat_kantor"];
        $no_telp_kantor = $_POST["no_telp_kantor"];

        $query = "INSERT INTO tb_registrasi
        VALUES ('','$Nama','$Gender','$NIDN','$Jabatan','$tgl_lahir','$Email','$NO_HP','$alamat_kantor','$no_telp_kantor')";
        mysqli_query($conf, $query);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="../CSS/registrasi.css" />
  </head>
  <body>
     <div class="header">
        <img src="../../Asset/icon/logounimed.png" alt="logounimed" />
        <div class="judul">
          <h1>TRI DHARMA DOSEN</h1>
  </div>
    <div class="container">
      <div class="header1">
        <div class="title">Registrasi</div>
      </div>
      <!-- biodata -->
      <div class="konten">
        <form action="" method="post">
          <!-- nama -->
          <input type="text" name="Nama" placeholder="Nama" required />
          <!-- gender -->
          <div class="gender">
            <p>Gender</p>
          <input type="radio" name="Gender" value="Laki-Laki" placeholder="Gender" required />
          <label for="lk">Laki-laki</label> 
          <input type="radio" name="Gender" value="Perempuan" placeholder="Gender" required />
          <label for="pr" class="">Perempuan</label>
          </div>

          <!-- NIDN -->
          <input type="text" name="NIDN" placeholder="NIDN" />
          <!-- jabatan -->
          <input
            type="text"
            name="Jabatan"
            placeholder="Jabatan Fungsional"
            required
          />
          <!-- tempat tanggal lahir -->
          <input
            type="date"
            name="tgl_lahir"
            placeholder="Tanggal Lahir"
            required
          />
          <!-- email -->
          <input type="email" name="Email" placeholder="Email" required />
          <!-- no hp -->
          <input type="text" name="NO_HP" placeholder="No Hp (0812-3456-7890)" required />
          <!-- alamat kantor -->
          <input
            type="text"
            name="alamat_kantor"
            placeholder="Alamat Kantor"
            required
          />
          <!-- no telp kantor -->
          <input
            type="text"
            name="no_telp_kantor"
            placeholder="No Telepon Kantor"
            required
          />
          <!-- button save -->
          <div class="btnn">
            <input type="submit" name="submit" value="Save">
            <!--<a href="Loginpage.html"><input name="submit" type="submit" value="Save" /></a>-->
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
