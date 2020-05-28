 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
 <?php include("heading/header2.php"); ?>

<?php 
   $query = "SELECT * FROM products LIMIT 10";

         $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
 ?>



 <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <?php while($values = mysqli_fetch_array($result)){ ?>
                <div class="single-products-catagory clearfix" id="olu">
                    <a href="#">
                        <img src="files/<?php echo $values['pic_one']; ?>" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From <?php echo $values['price']; ?></p>
                            <h4><?php echo $values['name']; ?></h4>
                        </div>
                    </a>
                </div>
                  <?php } ?>

            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
<style type="text/css">
    #olu{
        width: 250px !important;
        height: 300px !important;
    }
</style>

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

</body>
<!-- 
    <script type="text/javascript">
alert(" MESSAGE DELIVERED")
</script>
<?php   //if (isset($alert2)) {
  
 ?>

<script type="text/javascript">
alert(" MESSAGE NOT SENT")
</script> -->
<?php// } ?>

</html>
