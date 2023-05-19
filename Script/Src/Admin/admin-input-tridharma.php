<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri Dharma Ilmu Komputer UNIMED</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../Asset/img/favicon.ico" type="image/x-icon">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../../css/main.css">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
</head>

<!-- PHP Config -->
<?php
include '../../PHP/config.php';
session_start();
$NIP = $_SESSION["NIP"];
$position = $_SESSION["posisi"];
if(isset($position) && $position == "Lecturer"){
    header('refresh:0; ../Dosen/user-dashboard.php');
    exit;
}else if(!isset($position)){
    
        header('refresh:0; ../index.php');
        exit;
    
}
// get data of lecturer
$get_data = mysqli_query($conf, "SELECT * FROM tb_dosen WHERE NIP = '$NIP'");
$get = mysqli_fetch_assoc($get_data);
?>

<!-- PHP Config/n -->

<body class="d-none">
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column shadow">
        <!-- Sidebar Header -->
        <div class="d-none d-md-flex p-2 mt-2 mx-1 gap-2 align-items-center">
            <div class="logo">
                <img src="../../../Asset/img/logounimed.png" width="48px" height="48px" alt="">
            </div>
            <span class="fs-5 fw-bold sidebar-text text-white">TRI DHARMA</span>
        </div>

        <!-- Sidebar Body -->
        <ul class="list-unstyled col d-flex flex-column gap-1 justify-content-center mt-4 fs-6 p-1">
            <li class="mx-1">
                <a href="admin-dashboard.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xe9b0</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="mx-1">
                <a href="admin-lecturers-data.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xf233</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Lecturer's Data</span>
                    </div>
                </a>
            </li>
            <li class="mx-1">
                <a href="admin-data-tridharma.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xf1c6</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Tri Dharma Data</span>
                    </div>
                </a>
            </li>
            <li class="menu-active mx-1">
                <a href="admin-input-tridarma.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xe2c6</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Tri Dharma Input</span>
                    </div>
                </a>
            </li>
            <li class="mt-auto sign-out mx-1">
                <a href="../../PHP/logout.php" class="text-decoration-none d-none d-md-flex gap-3 p-2 mx-1 rounded-2" data-bs-toggle="modal" data-bs-target="#exitModal">
                    <i class="material-icons-round fs-2 menu-icon">&#xe879</i>
                    <div class="align-items-center">
                        <span class="sidebar-text">Log Out</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main -->
    <main class="d-flex flex-column mb-5 mb-md-0">
        <!-- Topbar -->
        <div class="topbar col d-flex gap-1 align-items-center justify-content-between shadow">

            <!-- Toggle Sidebar -->
            <div class="toggle btn h-50 d-flex m-2 m-md-3 p-1 align-items-center bg-light-subtle">
                <div id="maximize" class="d-flex">
                    <i class="material-icons-round fs-2">&#xe5d2</i>
                </div>
                <div id="minimize" class="d-none">
                    <i class="material-icons-round fs-2">&#xe5cd</i>
                </div>
            </div>

            <!-- Logo UNIMED -->
            <div class="d-flex d-md-none align-items-center m-2">
                <img src="assets/img/logo.png" width="40px" height="40px" alt="">
            </div>

            <!-- Profile Picture -->
            <div class="d-flex col align-items-center justify-content-end mx-2 gap-2">
                <div class="profile-name">
                    <span class="fs-6 fw-semibold text-white"><?= $get['nama']?></span>
                </div>
                <div class="dropdown">
                    <a class="btn btn-transparent d-flex align-items-center gap-3" href="#" role="button" title="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-image">
                            <img src="../../../Asset/icon/<?= $get['foto'] ?>" class="profile-image rounded-circle bg-secondary-subtle shadow-sm col" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="profile.html" class="dropdown-item d-flex align-items-center" href="#">
                                <i class="material-icons-round">&#xe7fd</i>
                                <span class="ms-2">Profile</span>
                            </a>
                        </li>
                        <li class="d-flex d-md-none">
                            <a href="../../PHP/logout.php" class="dropdown-item d-flex align-items-center" href="#">
                                <i class="material-icons-round">&#xe879</i>
                                <span class="ms-2">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content d-flex flex-column mb-5">
            <!-- Header -->
            <div class="d-flex align-items-center mx-3 mx-md-4 mt-3 mb-2">
                <div class="col d-flex flex-column justify-content-center">
                    <span class="fs-4 fw-bold">Input Tri Dharma</span>
                    <span class="fs-6">Tri Dharma Information System of Computer Science UNIMED</span>
                </div>
            </div>

            <!-- Form -->
            <div class="card d-flex flex-column flex-md-row mx-3 mx-md-4 mt-3 shadow">
                <form action="" method="post" class="d-flex flex-column col p-3 p-md-4 gap-5 text-center" enctype="multipart/form-data">
                    <div class="d-flex col flex-lg-row flex-column gap-4">
                        <div class="d-flex col flex-column gap-3">
                            <div>
                                <label class="form-label d-flex fw-bold">Tittle</label>
                                <input type="text" class="form-control" placeholder="Input your title here" aria-label="readonly input example" name="title">
                                </input>
                            </div>
                            <div>
                                <label class="form-label d-flex fw-bold">Type</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option disabled>Type of Tri Dharma</option>
                                    <option value="Research" class="text-primary fw-semibold">Research</option>
                                    <option value="Dedication" class="text-success fw-semibold">Dedication</option>
                                    <option value="Teaching" class="text-warning fw-semibold">Teaching</option>
                                </select>
                            </div>
                            <div>
                                <label class="form-label d-flex fw-bold">Years</label>
                                <input type="text" class="form-control" name="yearpicker" title="yearpicker" id="yearpicker" name="year"/>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <label class="form-label d-flex fw-bold">Contributor 1</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control"  aria-label="Text input with radio button" value="No" disabled>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" name="contributor1" aria-label="Text input with radio button" placeholder="Input NIP">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="form-label d-flex fw-bold">Contributor 2</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio button" value="No" disabled>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" name="contributor2" aria-label="Text input with radio button" placeholder="Input NIP">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <label class="form-label d-flex fw-bold">Contributor 3</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  value="" aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with radio button" value="No" disabled>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  value="" aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control" name="contributor3" aria-label="Text input with radio button" placeholder="Input NIP">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="form-label d-flex fw-bold">Contributor 4</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control"  aria-label="Text input with radio button" value="No" disabled>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0" type="radio"  aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control"  name="contributor4" aria-label="Text input with radio button" placeholder="Input NIP">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <input type="submit" value="Submit" name="submit" class="btn btn-success p-2 mb-3">
                    </div>
                </form>
            </div>
        </div>

        <!-- Log Out PopUp -->
        <div class="modal fade" id="exitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Log Out</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to log out?
                    </div>
                    <div class="modal-footer">
                        <a href="#" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                        <a href="../../PHP/logout.php" type="button" class="btn btn-success">Accept</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Main JS -->
    <script src="../../js/main.js"></script>
    <!-- Greetings JS -->
    <script src="../../js/greetings.js">
        $ajax
    </script>
    <!-- jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Years Picker JS -->
    <script src="assets/scripts/years-picker.js"></script>
    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js">
    </script>
</body>

<!-- PHP CODE -->
<?php
    if(isset($_POST['submit'])){
        $nip = $_SESSION['NIP'];
        $title = $_POST['title'];
        $type = $_POST['type'];
        $year = strtotime($_POST['yearpicker']);
        $year = date('Y', $year);
        $contributor1 = $_POST['contributor1'];
        $contributor2 = $_POST['contributor2'];
        $contributor3 = $_POST['contributor3'];
        $contributor4 = $_POST['contributor4'];

        $query = mysqli_query($conf, "INSERT INTO data_tridharma VALUES ('','$title', '$type', '$year', '$nip')");
        if($contributor1 != ""){
            $query1 = mysqli_query($conf, "INSERT INTO data_tridharma VALUES ('','$title', '$type', '$year', '$contributor1')");
        }
        if($contributor2 != ""){
            $query2 = mysqli_query($conf, "INSERT INTO data_tridharma VALUES ('','$title', '$type', '$year', '$contributor2')");
        }
        if($contributor3 != ""){
            $query3 = mysqli_query($conf, "INSERT INTO data_tridharma VALUES ('','$title', '$type', '$year', '$contributor3')");
        }
        if($contributor4 != ""){
            $query4 = mysqli_query($conf, "INSERT INTO data_tridharma VALUES ('','$title', '$type', '$year', '$contributor4')");
        }
    }
?>

</html>