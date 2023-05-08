<?php
    include 'config.php';
    session_start();
    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    // Check username from the data
    $check_user = mysqli_query($conf, "SELECT * FROM loginform WHERE username = '$user' AND Password = '$pass'");
    if(mysqli_num_rows($check_user) > 0){
        echo "<script>alert('Login Success!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../Src/dashboard.php'>";
        $_SESSION['posisi'] = true;
    }else{
        echo "<script>alert('Login Failed!')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../Src/Loginpage.php'>";
    }
?>