<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri Dharma Ilmu Komputer UNIMED</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../Asset/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Login CSS -->
    <link rel="stylesheet" href="../CSS/login.css">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
</head>

<body class="d-flex justify-content-center">
    <!-- Register Card -->
    <div
        class="main col d-flex flex-column flex-lg-row justify-content-start align-items-center align-items-lg-stretch p-lg-0 p-3">
        <div
            class="bg-white col-12 col-lg-8 d-flex flex-column justify-content-center p-2 px-xl-5 shadow-lg rounded-4 border-0">
            <!-- UNIMED Logo -->
            <div
                class="d-flex col-12 align-items-center justify-content-center gap-4 py-3 px-4 border border-3 border-success rounded">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="../../Asset/img/logo.png" alt="Logo" class="logo">
                </div>
                <div class="header d-flex flex-column align-items-center ">
                    <span class="header-parent h3 fw-bold text-uppercase text-center">Tri Dharma</span>
                    <span class="header-child fs-6 fw-semibold text-center">Ilmu Komputer UNIMED</span>
                </div>
            </div>
            <div class="d-flex col-12 flex-column py-2 gap-3">
                <!-- Header -->
                <div class="d-flex justify-content-center bg-success ">
                    <span class="fs-4 text-white py-1 px-4 fw-bold">Register Form</span>
                </div>

                <!-- Register Form -->
                <form action="../PHP/regist.php" method="post" enctype="multipart/form-data" class="d-flex flex-column gap-4 px-3">
                    <div class="d-flex flex-column flex-md-row gap-3 gap-md-5">

                        <!-- First Column -->
                        <div class="d-flex col flex-column gap-3">
                            <div class="d-flex col flex-column gap-3">
                            <div class="d-flex flex-column">
                                    <span class="fw-semibold">Foto</span>
                                    <input class="form-control text-field text" id="formFile" name="foto" type="file">
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold">NIP</span>
                                    <input class="form-control bg-body-tertiary" type="text" name="NIP"
                                        placeholder="0123456789101112" aria-label="readonly input example">
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold">Password</span>
                                    <input class="form-control bg-body-tertiary" type="text" placeholder="Password" name ="password"
                                        aria-label="readonly input example">
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold">Name</span>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama with title">
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold">Email</span>
                                    <input class="form-control bg-body-tertiary" type="text" name="email"
                                        placeholder="email@placeholder.com" aria-label="readonly input example">
                                </div>
                            </div>
                        </div>

                        <!-- Second Column -->
                        <div class="d-flex col flex-column gap-3 justify-content-center">
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Gender</span>
                                <select class="form-select" aria-label="Default select example" name="gender">
                                    <option disabled>Select your gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Birth Date</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="01/01/1990" name="birth"
                                    id="datepicker" aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Birth Place</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="Birth Place" name="place"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Address</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="Address" name="address"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Office Phone No.</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="0612345678" name="office-phone"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Phone Number</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="08123456789" name="phone-number"
                                    aria-label="readonly input example">
                            </div>
                        </div>

                        <!-- Third Column -->
                        <div class="d-flex col flex-column gap-3 justify-content-center">
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Position</span>
                                <select class="form-select" aria-label="Default select example" name="position">
                                    <option disabled>Select your position</option>
                                    <option value="Kaprodi">Kaprodi</option>
                                    <option value="Co-Kaprodi">Co-Kaprodi</option>
                                    <option value="Lecturer">Lecturer</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">NIDN</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="0123456789101112" name="NIDN"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex flex-column">
                                    <span class="fw-semibold">Class/Functional</span>
                                    <input class="form-control bg-body-tertiary" type="text" name="class-functional"
                                        placeholder="Class/Functional" aria-label="readonly input example">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Bachelor Degree</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="Bachelor Degree" name="S1"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Master Degree</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="Master Degree" name="S2"
                                    aria-label="readonly input example">
                            </div>
                            <div class="d-flex flex-column">
                                <span class="fw-semibold">Doctor Degree</span>
                                <input class="form-control bg-body-tertiary" type="text" placeholder="Doctor Degree" name="S3"
                                    aria-label="readonly input example">
                            </div>
                        </div>
                    </div>

                    <!-- Button Form -->
                    <div class="d-flex col justify-content-between">
                        <a href="index.php" class="btn btn-secondary my-2 p-2 gap-2 d-flex">
                            <span>Back</span>
                        </a>
                        <input type="submit" class="btn btn-success my-2 p-2 gap-2 d-flex" name="submit">
                        </input>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

    <!-- JQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootstrap Datepicker -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Datepicker JS -->
    <script src="../js/date-picker.js"></script>
</body>

</html>