 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
 <?php include("heading/header.php"); 
  $username= $_SESSION['username'];
 ?>

<?php 
     $query = "SELECT * FROM register";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>
<?php
         $query = "SELECT * FROM cart WHERE username = '{$username}'";
        $query2 = "SELECT * FROM products";

     $result = mysqli_query($connection, $query)or die(mysqli_error($connection));
 ?>

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">
                            <div class="cart-title">
                                <?php //while($values = mysqli_fetch_array($result)){ ?>
                                <h2>Checkout</h2>
                            </div>
                            <form action="invoice.php" method="post">

                                    <div class="col-12 md-5">
                                        <input type="" class="form-control"  value="<?php echo $_SESSION['username']; ?>">
                                    </div>
                                    <div class="col-12 md-5">
                                        <input type="" class="form-control" value="<?php echo $_SESSION['email'];  ?>">
                                    </div>
                                    <div class="col-12 md-5">
                                        <input type="" class="form-control" value=" <?php echo $_SESSION['country']; ?>">
                                    </div>
                                    <div class="col-12 md-5">
                                        <input type="" class="form-control mb-3" value="<?php echo $_SESSION['address'];  ?>">
                                        <div class="col-12 md-5">
                                        <input type="" class="form-control" value="<?php echo $_SESSION['phone'];  ?>">
                                    </div>
                                    <div class="col-12 md-5">
                                        <textarea name="comment" class="form-control w-100" id="comment" cols="30" rows="10" placeholder="Leave a comment about your order"></textarea>
                                    </div>
                                   <?php
                                $total = 0;
                                 while($values = mysqli_fetch_array($result)){ ?>
                                <tbody>
                                    <?php 
                                    $id =$values['product_id'];
                                    $query1 = "SELECT * FROM products WHERE id = '$id' LIMIT 1";
                                    $check = mysqli_query($connection, $query1)or die(mysqli_error($connection));
                                    while($pro = mysqli_fetch_array($check)){
                                         $total = $total + $pro['price'];
                                     ?>
                                     
                                    <?php }} ?>
                                    <label>TOTAL</label>
                                    <div class="form-control">
                                        <input type="" name="total" value="$<?php  echo $total; ?>">
                                    </div>
                                    <div class="col-12 md-5">
                                       <a href="invoice.php">
                                            <button class="btn btn-warning">GENERATE INVOICE
                                         <i class="fa fa-file-text-o"> </i>
                                         </button>
                                       </a>
                                    </div>

                                 
                            </form>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Newsletter Area End ##### -->
<?php include("heading/footer.php"); ?>