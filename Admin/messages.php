<?php include("connection/session.php"); ?>
 <?php include("connection/data.php"); ?>
<?php include("heading/header.php"); ?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">MESSAGES</h4>
                  <p class="card-description">
                    View messages!
                    <code>.table-{color}</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            name
                          </th>
                          <th>
                            message
                          </th>
                          <th>
                            Phone number
                          </th>
                          <th>
                            email
                          </th>
                          <th>
                            Date/Time
                          </th>
                        </tr>
                      </thead>
                      <?php 
                          $query = "SELECT * FROM message";

                               $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                             ?>
                                <?php while($values = mysqli_fetch_array($result)){ ?>
                      <tbody>
                        <tr class="table-danger">
                          <td>
                           <?php echo $values['name']; ?>
                          </td>
                          <td>
                           <?php echo $values['message']; ?>
                          </td>
                          <td>
                            <?php echo $values['phone']; ?>
                          </td>
                          <td>
                           <?php echo $values['email']; ?>
                          </td>
                          <td>
                           <?php echo $values['time']; ?>
                          </td>
                        </tr>
                         <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>


