<!DOCTYPE html>
    <!-- CODE HTML CREATE BY FAWWAZ IKBAR AND PHP BY JOSUA PINEM -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>UNIMED | LOGIN FORM</title>
  <link rel="shortcut icon" href="../../Source/icon/logounimed.png" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/login.css">

  <!-- HEADER PHP CODE -->
  <?php 
    include '../PHP/config.php';
    session_start();
    if(isset($_SESSION['posisi']) == true){
      header("Location: dashboard.php");
    }
  ?>
  <!-- END OF HEADER PHP CODE --> 
</head>

<body>
 <div class="header">
        <img src="../../Source/icon/logounimed.png" alt="logounimed" />
        <div class="judul">
          <h1>TRI DHARMA DOSEN</h1>
  </div>

<div class="container">
  <div class="box"></div>
   <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- username & password, forgot password (login) -->
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
                <form action="../PHP/login.php" method="POST">
            <input type="text"  name="Username" placeholder="Username"required  />
            <input type="Password"  name="Password" placeholder="Password"required  />
            <div class="btnn">
              <a href="coba.html"><input type="submit" value="Login" name="username"></a>
            </div>
                </form>
            <div class="forget"><a href="#">Forgot Password</a></div>
          </div>
        </div>
      </div>

         <!-- username & password, (sign up) -->
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
               <form action="">
            <input  type="text"  name="NIP" placeholder="NIDN" required />
            <input type="Password"  name="Password" placeholder="Password"required  />
            <div class="btnn">
             <a href="coba.html"><input type="submit" value="Sign up"></a>
            </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="../js/script.js"></script>

</body>
</html>
