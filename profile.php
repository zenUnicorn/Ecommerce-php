 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
<?php include("heading/header.php");

  if (!isset($_SESSION['username'])) {
    header('location:userlogin.php');
  }
 ?>
 <form action="profile.php" method="post">
    <div class="col-md-24 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">YOUR PROFILE</h4>
                  <p class="card-description">
                    View your profile below!!!
                  </p>
                  <div class="form-group">
                    <label>username</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" value="<?php echo $_SESSION['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" value="<?php echo $_SESSION['email'];  ?>">
                  </div>
                  <div class="form-group">
                    <label>phone number</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" value="<?php echo $_SESSION['phone'];  ?>">
                  </div>
                  <div class="form-group">
                    <label>home address</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" value="<?php echo $_SESSION['address'];  ?>">
                  </div>
                  <div class="form-group">
                    <label>country</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" value="<?php echo $_SESSION['country'];  ?>">
                  </div>
              </div>
            </div>
 </form>
  <?php if (isset($alert)) {
 ?>
 <script type="text/javascript">
   alert("Profile Updated Successfully")
 </script>
 <?php } ?>
     
     