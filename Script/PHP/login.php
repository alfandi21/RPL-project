<?php
    // CODE BY JOSUA PINEM

    include 'config.php';
    session_start();
    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    // Check username from the data
    $check_user = mysqli_query($conf, "SELECT * FROM loginform WHERE username = '$user' AND Password = '$pass'");
    if(mysqli_num_rows($check_user) > 0){
        echo "<script>alert('Login Success!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../Src/main.php'>";
        // get position from the data
        $position = mysqli_query($conf, "SELECT * FROM tb_dosen WHERE NIP = '$user'");
        $poss = mysqli_fetch_assoc($jabatan_fungsional);
        $_SESSION['NIP'] = $user;
        if($poss == "Kepala Prodi"){
            header("Location: ../Src/Admin/admin-dashboard.php");
        }
    }else{
        echo "<script>alert('Login Failed!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../Src/Loginpage.php'>";
    }
?>