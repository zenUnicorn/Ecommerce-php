 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>

<?php include("heading/header.php"); ?>
<?php 
  if (isset($_GET['add'])) {
   $username= $_SESSION['username'];
   $add = $_GET['add'];
     $query1 = "INSERT INTO cart (username,product_id)VALUES('{$username}','{$add}')";
     $result = mysqli_query($connection, $query1);
  }
 ?>

<?php 
    $sql = "SELECT * FROM products WHERE category = 'Others' ";
    $result = mysqli_query($connection,$sql);
//while($values = mysqli_fetch_array($result)) {
    //echo $values['name'];
 while($values = mysqli_fetch_array($result)){ ?>

                            <div class="product-img">
                                <div id="normal">
                                     <a href="cart.php">
                                    <img src="files/<?php echo $values['pic_one']; ?>" alt="">      
                                     </a>
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$<?php echo $values['price'] ?></p>
                                    <a href="product-details.php">
                                        <h6><?php echo $values['name'] ?></h6>
                                    </a>
                                </div>
                                 <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
                                    <a href="shop.php?add=<?php  echo $values['id']; ?>"><button class="btn btn-warning" onclick="<?php $_SESSION['p_name'] = $values['name'];
                                     ?>">Add to cart <i class="fa fa-plus"></i></button></a>
                                    </div>
                                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                    </div>
<!-- 
                                    <div class="cart">
                                        <a href="cart.php" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                    </div> -->
                                      <?php } ?>

                    </div>
                           

                </div>
                   
            </div>
           
 <!-- <div class="normal">
    <img src="<?php //echo $values['pic_one']; ?>">
 </div>
 -->
 <?php// } ?>
 <style type="text/css">
    #normal{
        width: 300px;
        height: 200px;
    }
 </style>
<!DOCTYPE html>
<html>
<head>
    <title>y</title>
</head>
<body>

</body>
</html>

 

<?php //include("heading/footer.php"); ?>
      