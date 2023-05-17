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
    <link rel="stylesheet" href="../../CSS/main.css">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
</head>

<!-- PHP Config -->
<?php
include '../../PHP/config.php';
session_start();
$NIP = $_SESSION["NIP"];
$position = $_SESSION["posisi"];
if ($position == "Admin") {
    header('refresh:0; ../Admin/admin-dashboard.php');
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
                <img src="../../../Asset/img/logo.png" width="48px" height="48px" alt="">
            </div>
            <span class="fs-5 fw-bold sidebar-text text-white">TRI DHARMA</span>
        </div>

        <!-- Sidebar Body -->
        <ul class="list-unstyled col d-flex flex-column gap-1 justify-content-center mt-4 fs-6 p-1">
            <li class="menu-active mx-1">
                <a href="#" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xe9b0</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="mx-1">
                <a href="user-tridharma-data.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
                    <i class="material-icons-round fs-2 menu-icon">&#xf1c6</i>
                    <div class="d-flex align-items-center">
                        <span class="sidebar-text">Tri Dharma Data</span>
                    </div>
                </a>
            </li>
            <li class="mx-1">
                <a href="user-input-tridharma.php" class="text-decoration-none d-flex gap-3 p-2 mx-1 rounded-2">
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
                <img src="../../../Asset/img/logo.png" width="40px" height="40px" alt="">
            </div>

            <!-- Profile Picture -->
            <div class="d-flex col align-items-center justify-content-end mx-2 gap-2">
                <div class="profile-name">
                    <span class="fs-6 fw-semibold text-white" id="name_data" value="<?php echo $get['nama']; ?>"><?php echo $get['nama']; ?></span>
                </div>
                <div class="dropdown">
                    <a class="btn btn-transparent d-flex align-items-center gap-3" href="#" role="button" title="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-image">
                            <img src="../../../Asset/icon/<?php echo $get['foto']; ?>" class="profile-image rounded-circle bg-secondary-subtle shadow-sm col" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="../profile.php" class="dropdown-item d-flex align-items-center" href="#">
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
        <div class="content d-flex flex-column gap-3 mb-5">
            <!-- Greetings -->
            <div class="d-flex align-items-center mx-3 mx-md-4 mt-3 mb-2">
                <!-- //javascript for function -->

                <div class="col d-flex flex-column justify-content-center">
                    <span class="fs-4 fw-bold"><span class="greetings">Good {time}</span> <span class="text-success"><?php echo $get['nama']; ?></span></span>
                    <span class="fs-6">Tri Dharma Information System of Computer Science UNIMED</span>
                </div>
            </div>

            <!-- Mini Profile -->
            <div class="card row d-flex flex-column flex-lg-row align-items-center gap-3 p-4 mx-3 mx-md-4 mt-3 shadow">
                <div class="col col-md-3 d-flex flex-column p-3 gap-3">
                    <div class="d-flex flex-column align-items-center">
                        <img src="../../../Asset/icon/<?php echo $get['foto']; ?>" class="user-image rounded-circle bg-secondary-subtle shadow-sm" alt="">
                    </div>
                    <div class="biodata-item d-flex flex-column align-items-center">
                        <span class="fs-6 fw-semibold"><?php echo $get['nama']; ?></span>
                    </div>
                </div>
                <div class="col d-flex flex-column flex-md-row p-3 gap-4">
                    <div class="col d-flex flex-column gap-4">
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">Birth Place, Date</span>
                            <span class="fs-6"><?php echo $get['tempat'] . ", " . date("d F Y", strtotime($get['birthdate'])); ?></span>
                        </div>
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">Email</span>
                            <span class="fs-6"><?php echo $get['email']; ?></span>
                        </div>
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">Position</span>
                            <span class="fs-6"><?php echo $get['jabatan_fungsional']; ?></span>
                        </div>
                    </div>
                    <div class="col d-flex flex-column gap-4">
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">NIP</span>
                            <span class="fs-6"><?php echo $NIP; ?></span>
                        </div>
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">NIDN</span>
                            <span class="fs-6"><?php echo $get['nidn']; ?></span>
                        </div>
                        <div class="biodata-item d-flex flex-column gap-1">
                            <span class="fs-6 fw-bold">Class/Functional</span>
                            <span class="fs-6"><?php echo $get['golongan_jabatan']; ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tri Dharma Table -->
            <div class="card table-responsive d-flex mx-3 mx-md-4 mt-3 shadow overflow-x-scroll">
                <table class="table table-sm table-striped">
                    <thead class="col">
                        <tr class="col d-flex p-2">
                            <th class="col-12 col-md d-flex fs-6 fw-bold">Tri Dharma Title</th>
                            <th class="col-4 col-md-2 d-flex fs-6 fw-bold">Years</th>
                            <th class="col-4 col-md-2 d-flex fs-6 fw-bold">Type</th>
                        </tr>
                    </thead>
                    <tbody class="col d-flex flex-column">
                        <?php
                        $get_tridharma = mysqli_query($conf, "SELECT * FROM data_tridharma WHERE NIP = '$NIP' ORDER BY tahun desc limit 3");
                        while ($tridharma = mysqli_fetch_assoc($get_tridharma)) {
                            if ($tridharma['tipe'] == "Research") {
                                $set = "d-flex align-items-center rounded-pill border border-2 border-primary";
                                $set2 = "d-flex bg-primary rounded-pill p-1";
                                $set3 = "text-primary material-icons-round";
                                $set4 = "d-flex align-items-center py-1 px-2 me-1";
                            } else  if ($tridharma['tipe'] == "Dedication") {
                                $set = "d-flex align-items-center rounded-pill border border-2 border-success";
                                $set2 = "d-flex bg-success rounded-pill p-1";
                                $set3 = "text-success material-icons-round";
                                $set4 = "d-flex align-items-center py-1 px-2 me-1";
                            } else {
                                $set = "d-flex align-items-center rounded-pill border border-2 border-warning";
                                $set2 = "d-flex bg-warning rounded-4 p-1";
                                $set3 = "text-warning material-icons-round";
                                $set4 = "d-flex align-items-center py-1 px-2 me-1";
                            }

                        ?>
                            <tr class="d-flex p-2">
                                <td class="col-12 col-md d-flex align-items-center fs-6">
                                    <span>
                                        <?php echo $tridharma['Judul']; ?>
                                    </span>
                                </td>
                                <td class="col-4 col-md-2 d-flex align-items-center fs-6">
                                    <span>
                                        <?php echo $tridharma['Tahun']; ?>
                                    </span>
                                </td>
                                <td class="col-4 col-md-2 d-flex fs-6">
                                    <div class="<?php echo $set; ?>">
                                        <span class="<?php echo $set2; ?>">
                                            <i class="<?php echo $set3; ?>">&#xef4a</i>
                                        </span>
                                        <span class="<?php echo $set4; ?>">
                                            <?php echo $tridharma['tipe']; ?>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>