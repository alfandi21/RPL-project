<?php
    include 'config.php';
    session_start();
    


    if(isset($_POST['submit'])){
        // Get all the data from the form
        $name = $_POST['nama'];
        $NIP = $_POST['NIP'];
        $pass = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $birth = strtotime($_POST['birthdate']);
        $newdate = date('Y-m-d', $birth);
        $place = $_POST['place'];
        $address = $_POST['address'];
        $office = $_POST['office-phone'];
        $phone = $_POST['phone-number'];
        $position = $_POST['position'];
        $NIDN = $_POST['NIDN'];
        $class = $_POST['class-functional'];
        $s1 = $_POST['S1'];
        $s2 = $_POST['S2'];
        $s3 = $_POST['S3'];
        if($s3 == ""){
            $s3 = "none";
        }
        //save the picture
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
                        echo "<script>alert('The file too large');document.location.href = '../Src/register.php';</script>";
                    }
                }else{
                    //ekstensi file yang diuplaod tidak sesuai
    
                    echo "<srcipt>
                            alert('The extension file is not allowed to upload');
                            document.location.href = '../Src/register.php';
                        </script>";
                }
        }

        // Save the data to the database
        $main = mysqli_query($conf, "INSERT INTO tb_dosen (`id`, `nama`, `gender`, `nip`, `nidn`, `golongan_jabatan`, `jabatan_fungsional`, `birthdate`, `tempat`, `email`, `no_hp`, `alamat`, `no_tlp_kantor`, `pendidikanS1`, `pendidikanS2`, `pendidikanS3`, `foto`) VALUES (null,'$name','$gender','$NIP','$NIDN','$class','$position','$newdate','$place','$email','$phone','$address','$office','$s1','$s2','$s3','$nama')");
        if($main){
            $login = mysqli_query($conf, "INSERT INTO loginform VALUES ('', '$NIP', '$pass')");
        }
        
        if($position == "Kaprodi" || $position == "Co-Kaprodi"){
            $_SESSION['NIP'] = $NIP;
            $_SESSION['posisi'] = "Admin";
            echo "<meta http-equiv='refresh' content='1 url=../Src/Admin/admin-dashboard.php'>";
        }else{
            $_SESSION['NIP'] = $NIP;
            $_SESSION['posisi'] = "Lecturer";
            echo "<meta http-equiv='refresh' content='1 url=../Src/Dosen/user-dashboard.php'>";
        }
            
    }
    

    
?>