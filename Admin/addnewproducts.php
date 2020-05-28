<?php include("connection/session.php"); ?>
 <?php include("connection/data.php"); ?>
<?php include("heading/header.php"); ?>
<?php 
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $price = $_POST['price'];
      $desc = $_POST['desc'];
      $picture = $_FILES['picture']['name'];
      $category = $_POST['category'];
     
      //$imgtwo = "files" . $_FILES['file']['name2'];

     
      if (move_uploaded_file($_FILES["picture"]["tmp_name"], "../files/".$_FILES['picture']['name'])){

             $insert = "INSERT INTO products (name, price, description, category, pic_one)
             VALUES('{$name}', {$price}, '{$desc}','{$category}','{$picture}')";
    
      // $query = mysqli_connect($connection);
      $run = mysqli_query($connection,$insert);
      if ($run) {
        $hey = "olu";
      // 
      }else{
        echo "<h1>try again</h1>";
      }
     }
    }
?>
      <!-- partial -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add new!</h4>
                  <p class="card-description">
                  </p>
                  <form  action="#" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">price</label>
                      <input type="price" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">description</label>
                      <input type="description" class="form-control" name="desc" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Category</label>
                      <!-- <input type="category" class="form-control" name="category"> -->
                            <select name="category" class="form-control">
                              <option>Dresses</option>
                              <option>Bags</option>
                              <option>Turks</option>
                              <option>Belts</option>
                              <option>Shoes</option>
                              <option>Others</option>
                            </select>
                          </div>
                    </div>
                    <div class="form-group">
                      <label >Picture One</label>
                      <input type="file" class="form-control" name="picture" placeholder="img">
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
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
 <?php if (isset($hey)) {
 ?>
 <script type="text/javascript">
   alert("Product Added")
 </script>
 <?php } ?>