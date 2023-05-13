<?php
    include 'config.php';
    session_start();
    $NIP = $_POST["NIP"];
    $pass = $_POST["Password"];
    if(isset($NIP )){
        if(isset($pass)){
            $check = mysqli_query($conf, "SELECT * FROM loginform WHERE username = '$NIP' ");
            if(mysqli_num_rows($check) > 0){
                echo "<script>alert('NIP already registered!')</script>";
                echo "<meta http-equiv='refresh' content='1 url=../Src/Loginpage.php'>";
            }else{
                $query = "INSERT INTO loginform VALUES ('','$NIP','$pass')";
                mysqli_query($conf, $query);
                $_SESSION['NIP'] = $NIP;
                echo "<script>alert('Registration Success!')</script>";
                echo "<meta http-equiv='refresh' content='1 url=../Src/Registrasi.php'>";
            }
        }

    }
?>