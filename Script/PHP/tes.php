<?php
// CODE BY FAWWAZ IKBAR AND ALFANDI MUALO 

include '../PHP/config.php';
session_start();
$NIP = $_SESSION["NIP"];
if (isset($_POST["submit"])) {
    $Nama = $_POST["Nama"];
    $Gender = $_POST["Gender"];
    $NIDN = $_POST["NIDN"];
    $Jabatan = $_POST["Jabatan"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $Email = $_POST["Email"];
    $NO_HP = $_POST["NO_HP"];
    $alamat_kantor = $_POST["alamat_kantor"];
    $no_telp_kantor = $_POST["no_telp_kantor"];
    $pendidikans1 = $_POST["pendidikans1"];
    $pendidikans2 = $_POST["pendidikans2"];
    $pendidikans3 = $_POST["pendidikans3"];

    $query = "INSERT INTO tb_dosen
        VALUES ('','$Nama','$Gender','$NIP','$NIDN','$Jabatan','$tgl_lahir','$Email','$NO_HP','$alamat_kantor','$no_telp_kantor', '$pendidikans1', '$pendidikans2', '$pendidikans3')";
    mysqli_query($conf, $query);
    if (mysqli_affected_rows($conf) > 0) {
        echo "<script>alert('Registration Success!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../Src/Loginpage.php'>";
        $_SESSION['posisi'] = false;
    }
}
