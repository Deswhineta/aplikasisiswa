<?php 
session_start();
if(isset($_SESSION['username'])) {
  header ('location:index.php');
  echo "<script>window.alert('sudah'); window.location.href = 'index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LOST CAUSE</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="asset/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="asset/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="proses_login.php" method="post" >
                <div class="form-group"> 
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                 <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="asset/index.html">LOGIN</button>
                </div>
                
                

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="asset/js/off-canvas.js"></script>
  <script src="asset/js/hoverable-collapse.js"></script>
  <script src="asset/js/template.js"></script>
  <script src="asset/js/settings.js"></script>
  <script src="asset/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
