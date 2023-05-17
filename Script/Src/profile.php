<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri Dharma Ilmu Komputer UNIMED</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../Asset/img/favicon.ico" type="image/x-icon">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../CSS/main.css">
    <!-- Profile CSS -->
    <link rel="stylesheet" href="../CSS/profile.css">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
</head>

<!-- PHP Config -->
<?php
    include '../PHP/config.php';
    session_start();
    $position = $_SESSION["posisi"];
    $NIP = $_SESSION["NIP"];
    if(!isset($_SESSION['NIP'])){
        header ('refresh:0; ../Src/index.php');
    }

    if($position == "Admin"){
        $put = "../Src/Admin/admin-dashboard.php";
    }else{
        $put = "../Src/Dosen/user-dashboard.php";
    }
    $get = mysqli_query($conf, "SELECT * FROM tb_dosen WHERE NIP = '$NIP'");
    $data = mysqli_fetch_assoc($get);
?>
<!-- PHP Config/n -->

<body class="d-flex">
    <!-- Main -->
    <main class="d-flex flex-column mb-5 mb-md-0">
        <!-- Topbar -->
        <div class="topbar col d-flex gap-1 align-items-center justify-content-between shadow">
            <!-- Logo UNIMED -->
            <div class="d-flex align-items-center m-2">
                <img src="../../Asset/img/logo.png" width="40px" height="40px" alt="">
            </div>

            <!-- Profile Picture -->
            <div class="d-flex col align-items-center justify-content-end mx-2 gap-2">
                <div class="profile-name">
                    <span class="fs-6 fw-semibold text-white"><?php echo $data['nama']; ?></span>
                </div>
                <div class="dropdown">
                    <a class="btn btn-transparent d-flex align-items-center gap-3" href="#" role="button"
                        title="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-image">
                            <img src="../../Asset/icon/<?php echo $data['foto']; ?>"
                                class="profile-image rounded-circle bg-secondary-subtle shadow-sm col" alt="">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="<?php echo $put; ?>" class="dropdown-item d-flex align-items-center" href="#">
                                <i class="material-icons-round">&#xe9b0</i>
                                <span class="ms-2">Dashbboard</span>
                            </a>
                        </li>
                        <li class="d-flex">
                            <a href="../PHP/logout.php" class="dropdown-item d-flex align-items-center" href="#">
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
            <!-- Header -->
            <div class="d-flex align-items-center mx-3 mx-md-4 mt-3 mb-2 gap-3">
                <div class="d-flex flex-column justify-content-center">
                    <a title="Dashboard" href="<?php echo $put; ?>"
                        class="d-flex rounded-4 p-2 btn btn-success bg-trans align-items-center justify-content-center">
                        <i class="material-icons-round fw-bold">&#xe5c4</i>
                    </a>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <span class="greetings fs-4 fw-bold">My Profile</span>
                    <span class="fs-6">Tri Dharma Information System of Computer Science UNIMED</span>
                </div>
            </div>

            <div class="container d-flex justify-content-center">
                <!-- Profile -->
                <div class="card col d-flex flex-column gap-5 mx-3 py-5 rounded-4 shadow-lg ">
                    <!-- Profile Picture -->
                    <div class="d-flex justify-content-center">
                        <div class="d-flex position-relative">
                            <img src="../../Asset/icon/<?php echo $data['foto']; ?>"
                                class="profile-image-edit rounded-circle bg-secondary-subtle shadow-sm col" width=""
                                alt="">
                            <a class="btn btn-success rounded-circle position-absolute d-flex p-2 change-photo"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="material-icons-round fs-6">&#xe439</i>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="../PHP/postFoto.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-content flex-container">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 text" id="staticBackdropLabel">Change Image</h1>
                                                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <input class="form-control text-field text" id="formFile" name="foto" type="file">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="simpan" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Details -->
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="d-flex flex-column align-items-center gap-3 mt-2">
                            <div class="d-flex flex-column flex-md-row col-12 gap-5 px-5">
                                <div class="d-flex col flex-column gap-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <i
                                            class="material-icons-round fs-1 border bg-body-subtle p-1 rounded bg-success text-white">&#xe7fd</i>
                                        <span class="fs-4 fw-bold text-success">Personal Information</span>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                    <div class="d-flex flex-column">
                                            <span class="fw-semibold">NIP</span>
                                            <span class="form-control bg-body-tertiary"><?php echo $data['nip']; ?></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Name</span>
                                            <input class="form-control bg-body-tertiary" type="text"
                                                value="<?php echo $data['nama']; ?>" aria-label="readonly input example" name="nama">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Email</span>
                                            <input class="form-control bg-body-tertiary" type="text" name="email"
                                                value="<?php echo $data['email']; ?>" aria-label="readonly input example">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Birth Date</span>
                                            <input class="form-control bg-body-tertiary" type="text" value="<?php echo $data['birthdate']; ?>"
                                                id="datepicker" aria-label="readonly input example" name="birthdate">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Birth Place</span>
                                            <input class="form-control bg-body-tertiary" type="text" value="<?php echo $data['tempat']; ?>"
                                                aria-label="readonly input example" name="place">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Gender</span>
                                            <select class="form-select bg-body-tertiary"
                                                aria-label="Default select example" name="gender">
                                                <option value="<?php echo $data['gender']; ?>"><?php echo $data['gender']; ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Phone Number</span>
                                            <input class="form-control bg-body-tertiary" type="text" value="<?php echo $data['no_hp']; ?>"
                                                aria-label="readonly input example" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex col flex-column gap-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <i
                                            class="material-icons-round fs-1 border bg-body-subtle p-1 rounded bg-success text-white">&#xe80c</i>
                                        <span class="fs-4 fw-bold text-success">Academic Information</span>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Position</span>
                                            <span class="form-control bg-body-tertiary"><?php echo $data['jabatan_fungsional']; ?></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">NIDN</span>
                                            <span class="form-control bg-body-tertiary"><?php echo $data['nidn']; ?></span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Class/Functional</span>
                                            <input class="form-control bg-body-tertiary" type="text" name="class"
                                                value="<?php echo $data['golongan_jabatan']; ?>" aria-label="readonly input example">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Office Phone No.</span>
                                            <input class="form-control bg-body-tertiary" name="office" type="text" value="<?php echo $data['no_tlp_kantor']; ?>"
                                                aria-label="readonly input example">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Bachelor Degree</span>
                                            <input class="form-control bg-body-tertiary" name="s1" type="text" value="<?php echo $data['pendidikanS1']; ?>"
                                                aria-label="readonly input example">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Master Degree</span>
                                            <input class="form-control bg-body-tertiary" name="s2" type="text" value="<?php echo $data['pendidikanS2']; ?>"
                                                aria-label="readonly input example">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="fw-semibold">Doctor Degree</span>
                                            <input class="form-control bg-body-tertiary" name="s3" type="text" value="<?php echo $data['pendidikanS3']; ?>"
                                                aria-label="readonly input example">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-3 mx-5">
                            <a href="#" class="btn btn-secondary my-2 p-2 gap-2 d-flex">
                                <i class="material-icons-round">&#xe5cd</i>
                                <span>Cancel</span>
                            </a>
                            <button class="btn btn-success my-2 p-2 gap-2 d-flex" name="submit">
                                <i class="material-icons-round">&#xe161</i>
                                <span>Save</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>

    </main>
    <!-- PHP for update the data -->
    <?php 
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $birthdate = strtotime($_POST['birthdate']);
            $newdate = date('Y-m-d', $birthdate);
            $place = $_POST['place'];
            $gender = $_POST['gender'];
            $phone = $_POST['phone'];
            $class = $_POST['class'];
            $office = $_POST['office'];
            $s1 = $_POST['s1'];
            $s2 = $_POST['s2'];
            $s3 = $_POST['s3'];

            $update = mysqli_query($conf, "UPDATE tb_dosen 
            SET nama='$nama', gender='$gender',golongan_jabatan='$class',birthdate='$newdate',tempat='$place',email='$email',no_hp='$phone',no_tlp_kantor='$office',pendidikanS1='$s1',pendidikanS2='$s2',pendidikanS3='$s3' 
            WHERE nip='$NIP'");
        }
    ?>



    <!-- JQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap Datepicker -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Datepicker JS -->
    <script src="assets/scripts/date-picker.js"></script>

    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>