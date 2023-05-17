<?php
    // CODE BY JOSUA PINEM

    include 'config.php';
    session_start();
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Check username from the data
        $check_user = mysqli_query($conf, "SELECT * FROM loginform WHERE username = '$user' AND Password = '$pass'");
        if(mysqli_num_rows($check_user) > 0){
            // get position from the data
            $position = mysqli_query($conf, "SELECT * FROM tb_dosen WHERE NIP = '$user'");
            $get = mysqli_fetch_assoc($position);
            if(mysqli_num_rows($check_user) > 0){
                if($get['jabatan_fungsional'] == "Kaprodi"){
                    $_SESSION['NIP'] = $user;
                    $_SESSION['posisi'] = "Admin";
                    echo "<script>alert('Login Success!')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=../Src/Admin/admin-dashboard.php'>";
                }else if($get['jabatan_fungsional'] == "Co-Kaprodi"){
                    $_SESSION['NIP'] = $user;
                    $_SESSION['posisi'] = "Admin";
                    echo "<script>alert('Login Success!')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=../Src/Admin/admin-dashboard.php'>";
                }else{
                    $_SESSION['NIP'] = $user;
                    $_SESSION['posisi'] = "Lecturer";
                    echo "<script>alert('Login Success!')</script>";
                    echo "<meta http-equiv='refresh' content='1 url=../Src/Dosen/user-dashboard.php'>";
                }
            }
        }else{
            echo "<script>alert('Login Failed!')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../Src/index.php'>";
        }
    }
?>