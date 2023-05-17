<?php
    include 'config.php';
    session_start();
    $judul = $_SESSION['judul'];
    $position = $_SESSION['posisi'];
    if($position == "Admin"){
        $put = "../Src/Admin/admin-data-tridharma.php";
    }else{
        $put = "../Src/Dosen/user-data-tridharma.php";
    }
    $delete = mysqli_query($conf, "DELETE FROM data_tridharma WHERE judul = '$judul'");
    if($delete){
        echo "<script>document.location.href = '$put';</script>";
    }
?>