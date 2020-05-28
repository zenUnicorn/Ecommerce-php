<?php include("connection/session.php"); ?>
 <?php include("connection/data.php"); ?>
<?php include("heading/header.php"); ?>

<?php 
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $price = $_POST['price'];
      $desc = $_POST['desc'];
      $category = $_POST['category'];
      //$imgone = $_FILES['imgone']['name'];

      $query="SELECT * from products ORDER BY name ASC";
       $insert = "UPDATE products
                          set name='{$name}',
                              price='{$price}', 
                              description= '{$desc}',
                              category={$category}, 
                              -- pic_one= '{$imgone}'
                          where id = {$id} ";
          $run = mysqli_query($connection, $insert);
          if($run){
            echo "Edit Successfull";
          }else{
            die(mysqli_error($connection));
          }
         } 
 ?>

 <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product!</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="#" method="post">
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
                      <input type="description" class="form-control" name="desc" placeholder="description">
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
                      <input type="file" class="form-control" name="imgone" placeholder="img">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputPassword4">Picture Two</label>
                      <input type="file" class="form-control" name="imgtwo" placeholder="img">
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>