 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
<?php 
  if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $address= $_POST['address'];
      $country= $_POST['country'];
      $pass = $_POST['pass'];
      $rpword = $_POST['rpword'];

    $sql = "INSERT INTO register (username, email, phone, address, country, password,   ) VALUES('{$user}', '{$email}', '{$phone}', '{$address}', '{$country}', '{$pass}','{$rpword}')";
    $result = mysqli_query($connection,$sql);
    if ($result) {
      header('location: userlogin.php');
      $alert = "hey";
    }else{
       header('location: index.php');
    }
    }
    //  $sql = "SELECT * FROM register WHERE username = '{$user}' and password = '{$pass}'";
    // $result = mysqli_query($connection,$sql);
    // if ($result) {
    //   $resul = mysqli_fetch_array($result);
    //   if ($user==$resul['username']) {
    //     $_SESSION['username']=$user;
    //  header('location: shop.php');
    //   }else{
    //     header('location: index.php');
    //   }
    // }
 ?>
<link rel="stylesheet" href="styline.css">
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <marquee direcction: "left">Already have an account? Login below</marquee>
            <div class="auto-form-wrapper">
              <form action="#" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="user" class="form-control" placeholder="Username" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="email" class="form-control" placeholder="email" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="phone" class="form-control" placeholder="phone" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="address" class="form-control" placeholder="address" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="country" class="form-control" placeholder="country" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" name="rpword" class="form-control" placeholder="Confirm Password" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-success submit-btn btn-block" name="submit">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have an account ?</span>
                  <a href="userlogin.php"  class="text-black text-small">Login</a>
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
  <?php   if (isset($alert)) {
  
 ?>
<script type="text/javascript">
alert("user inserted successfull...You can proceed to Login")
</script>
<?php } ?>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>