<?php
include 'config.php';
session_start();
$NIP = $_SESSION["NIP"];
$position = $_SESSION["posisi"];
if(isset($_POST['simpan'])){
    if(isset($_FILES['foto'])){
        $validation = array('png', 'jpg', 'jpeg'); // data yang diperbolehkan
        $nama = $_FILES['foto']['name']; //mendapatkan nama dari file
        $x = explode('.', $nama); //memecah nama file contoh file.jpg maka yang ditangkap jpg
        $ekstensi = strtolower(end($x)); //mengambil ekstensi file b
        $ukuran = $_FILES['foto']['size']; //mendapatkan ukuran file
        $file_tmp = $_FILES['foto']['tmp_name']; //mendapatkan lokasi file sementara

            //pengujian file 
            if(in_array($ekstensi, $validation) === true){
                // upload diperbolehkan
                // uji jika ukuran file dibawah 1mb
                if($ukuran < 1044070){
                    // jika ukuran file dibawah 1mb
                    move_uploaded_file($file_tmp, '../../Asset/icon/'.$nama);
                }else{
                    // jika ukuran file diatas 1mb
                    echo "<script>alert('The file too large');document.location.href = '../Src/profile.php';</script>";
                }
            }else{
                //ekstensi file yang diuplaod tidak sesuai

                echo "<srcipt>
                        alert('This file is not allowed to upload');
                        document.location.href = '../Src/profile.php';
                    </script>";
            }
    }
    $post = mysqli_query($conf, "UPDATE tb_dosen SET foto ='$nama' WHERE nip='$NIP'");
    if($post){
        echo "<script>alert('The picture success to upload');document.location.href = '../Src/profile.php';</script>";
    }
}
?>