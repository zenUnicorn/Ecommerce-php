<?php include("connections/session.php"); ?>
 <?php include("connections/database.php");?>
<?php 
  if (isset($_POST['submit'])) {
      $user = $_POST['user'];
      $pass = $_POST['pass']; 
       // and password ='$pass'
    // $sql = "SELECT * FROM register WHERE  '{$user}'=username and '{$pass}'=password";
    // $result = mysqli_query($connection,$sql);
    // if ($result) {

    //  //  $resul = mysqli_fetch_array($result);
    //   $user==$resul['username'];
    //     //$_SESSION['username']=$user;
    //   header('location: shop.php');
    //   exit();
    //    }else{
    //     header('location: index.php');
    //   }
      $insert = "SELECT * FROM register";
      $result = mysqli_query($connection,$insert);
      while ($value=mysqli_fetch_array($result)) {
        if ($user == $value['username'] and $pass == $value['password']) {
          $_SESSION['username'] = $value['username'];
          $_SESSION['email'] = $value['email'];
          $_SESSION['address'] = $value['address'];
          $_SESSION['phone'] = $value['phone'];
          $_SESSION['country'] = $value['country'];
          //header('location=shop.php')
            header('location:shop.php');
            //exit();
        }else{
          $hey = "olu";
        }
      }
  }
 ?>
 <link rel="stylesheet" href="styline.css">
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Login</h2>
            <div class="auto-form-wrapper">
              <form action="userlogin.php" method="post">
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
                    <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" name="submit">Login</button>
                </div>
                <a href="#top"><center><em>forgot password?</em></center></a>
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
 <?php if (isset($hey)) {
 ?>
 <script type="text/javascript">
   alert("Login Failed")
 </script>
 <?php } ?>


  