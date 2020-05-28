<?php include("connection/session.php"); ?>
 <?php include("connection/data.php"); ?>
<?php include("heading/header.php");?>
      <!-- partial -->
      <?php 
             $query = "SELECT * FROM register";
            $query2 = "SELECT * FROM products";
            $query3 = "SELECT * FROM message";
            $query4 = "SELECT * FROM cart";

      $result = mysqli_query($connection, $query);
      $result2 = mysqli_query($connection, $query2);
      $result3 = mysqli_query($connection, $query3);
      $result4 = mysqli_query($connection, $query4);
  ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/StarAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close popup-dismiss"></i>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <a href="products.php">
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Products</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          <?php 
                            if ($result2) {
                              $count = 0;
                                if (mysqli_num_rows ($result) > 0) {
                                 while ($row = mysqli_fetch_array($result2)) {
                                  $count ++;                                 
                                }
                              }
                                echo "$count";
                            }
                           ?>
                        </h3>
                      </div>
                    </div>
                  </div></a>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65%    growth
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Cart orders</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          <?php 
                            if ($result4) {
                              $count = 0;
                                if (mysqli_num_rows ($result) > 0) {
                                 while ($row = mysqli_fetch_array($result4)) {
                                  $count ++;                                 
                                }
                              }
                                echo "$count";
                            }
                           ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <a href="cartorder.php"><i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> All Cart Orders</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <a href="messages.php">
                    <div class="float-right">
                      <p class="mb-0 text-right">Messages</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                         <?php 
                            if ($result3) {
                              $count = 0;
                                if (mysqli_num_rows ($result) > 0) {
                                 while ($row = mysqli_fetch_array($result3)) {
                                  $count ++;                                 
                                }
                              }
                                echo "$count";
                            }
                           ?> 
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
                  </p>
                </div>
              </div>
            </div></a>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Subscribers</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          <?php 
                            if ($result) {
                              $count = 0;
                                if (mysqli_num_rows ($result) > 0) {
                                 while ($row = mysqli_fetch_array($result)) {
                                  $count ++;                                 
                                }
                              }
                                echo "$count";
                            }
                           ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Registered users
                  </p>
                </div>
              </div>
            </div>
          </div>
          
           
                  <div class="wrapper">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2">Sales</p>
                      <p class="mb-2 text-primary">88%</p>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 88%" aria-valuenow="88"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  
      
              <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">REGISTERED SUBSCRIBERS</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                           #
                          </th>
                          <th>
                            First name
                          </th>
                          <th>
                            Progress
                          </th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php 
                          $query = "SELECT * FROM register";

                               $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                             ?>
                                <?php while($values = mysqli_fetch_array($result)){ ?>
                        <tr>
                          <td class="font-weight-medium">
                           <?php echo $values['id']; ?>
                          </td>
                          <td>
                           <?php echo $values['username']; ?>
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>

                  <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>