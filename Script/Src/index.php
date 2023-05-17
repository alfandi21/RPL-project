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
    <!-- Main CSS -->
    <link rel="stylesheet" href="../CSS/login.css">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Round" rel="stylesheet">
</head>

<body class="d-flex justify-content-center">
    <div class="main col d-flex justify-content-center align-items-center">
        <!-- Login Card -->
        <div class="card d-flex flex-column align-items-center p-2 p-md-5 gap-4 shadow-lg rounded-4 border-0">
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
            <div class="d-flex flex-column col-12 p-3">
                <!-- Login Form -->
                <form action="../PHP/login.php" method="post" class="d-flex flex-column col">
                    <!-- Login & Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" name="username" id="username" class="form-control bg-body-tertiary" placeholder="Input username/ NIP"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" id="password" class="form-control bg-body-tertiary" placeholder="Input password"
                            required>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="mb-4 d-flex justify-content-between">
                        <div class="form-check d-flex align-items-center gap-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <span>
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </span>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>

                <!-- Sign Up -->
                <div class="d-flex justify-content-center mt-3">
                    <span class="text-center">Don't have an account? <a href="register.php"
                            class="text-decoration-none">Sign up here</a></span>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap 5.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>