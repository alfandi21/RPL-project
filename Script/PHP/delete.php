<?php
    include 'config.php';
    session_start();
    $judul = $_SESSION['judul'];
    $position = $_SESSION['posisi'];
    if($position == "Admin"){
        $put = "../Src/Admin/admin-dashboard.php";
    }else{
        $put = "../Src/Dosen/user-dashboard.php";
    }
    $delete = mysqli_query($conf, "DELETE FROM data_tridharma WHERE judul = '$judul'");
    if($delete){
        echo "<script>alert('The data success to delete');document.location.href = '$put';</script>";
    }
?>