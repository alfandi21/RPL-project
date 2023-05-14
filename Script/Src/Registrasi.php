
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
          <input type="text" name="Nama" placeholder="Isak Nabati, S.Kom, M.Kom" required />
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
          <!-- Pendidikan S1 -->
          <input type="text" name="pendidikans1" placeholder="S1-Ilmu Komputer / none" required />
          <!-- Pendidikan S2 -->
          <input type="text" name="pendidikans2" placeholder="S2-Ilmu Komputer / none" required />
          <!-- Pendidikan S3 -->
          <input type="text" name="pendidikans3" placeholder="S3-Ilmu Komputer / none" required />
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
