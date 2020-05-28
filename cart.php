<?php 
    session_start();
    include("connections/database.php");
    include("heading/header.php");
    // if (isset($_GET['add'])) {
   $username= $_SESSION['username'];
  // $add = $_GET['add'];


     $query = "SELECT * FROM cart WHERE username = '{$username}'";
        $query2 = "SELECT * FROM products";

     $result = mysqli_query($connection, $query)or die(mysqli_error($connection));
     // $result2 = mysqli_query($connection, $query2)or die(mysqli_error($connection));
    // }
 ?>
  <?php 
    if(isset($_POST['sub'])){
             $id = $_POST['delete'];
               $query5 = "DELETE FROM cart WHERE id = $id ";
              $result5 = mysqli_query($connection,$query5);
                if ($result5) {
                $aler1 = "hj";
              }else{
                echo "<h1>TRY AGAIN</h1>";
              }
             }
         ?>
    <?php if (isset($aler1)) {
 ?>
 <script type="text/javascript">
   alert("Product Removed")
 </script>
 <?php } ?>
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>Name</th>
                                        <th>Price</th>
                                        <!-- <th>Product_id</th> -->
                                    </tr>
                                </thead>
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
                                    <tr>
                                        <td class="cart_product_desc">
                                            <h5><?php echo $pro['name']; ?></h5>
                                        </td>
                                        <td class="price">
                                            <span>$<?php echo $pro['price']; ?></span>
                                        </td>
                                        <td>
                                            <form action="cart.php" method="post">
                                            <button class="btn btn-white" name="sub">Empty Cart</button>
                                            <input type="hidden" name="delete" value="<?php echo $values['id']; ?>">
                                          </form>
                                        </td>

                                        <?php }} ?>                                   
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                            <!-- <form action="" method="post">
                            <button class="btn btn-white" name="sub">Empty Cart</button>
                            <input type="hidden" name="delete" value="<?php //echo $values['id']; ?>">
                          </form> -->
                      <div class="cart-summary">
                            <h5>Payments</h5>
                            <ul class="summary-table"> <div class="input-group">
                    <input type="text" name="user" class="form-control" placeholder="Your Card Number" required="">
                    <div class="input-group-append">
                       <div class="input-group">
                    <input type="text" name="user" class="form-control" placeholder="Expiry Date" required="">
                    <div class="input-group-append">
                    </div>
                  </div>
                    </div>
                  </div><br>
                    <img src="img/core-img/paypal.png">
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="Checkout.php" class="btn amado-btn w-100">Pay</a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$<?php  echo $total; ?></span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="rs.php" class="btn amado-btn w-100">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->
    <?php include("heading/footer.php"); ?>
