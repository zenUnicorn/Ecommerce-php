<?php 
session_start();
//include("connections/session.php"); ?>
 <?php include("connections/database.php");
    include("heading/header.php");
    if (!isset($_SESSION['username']
        )) {
    header('location:index.php');
    }
  ?>
<?php 
  if (isset($_GET['add'])) {
   $username = $_SESSION['username'];
   $add = $_GET['add'];
   $query1 = "INSERT INTO cart (username,product_id) VALUES ('{$username}','{$add}')";
   $result = mysqli_query($connection, $query1);
  }
 ?>
<?php 

   $query = "SELECT * FROM products";

         $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
 ?>
        <div class="shop_sidebar_area">

            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Categories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <li class="active"><a href="#">Accessories</a></li>
                        <li><a href="dresses.php">Dresses</a></li>
                        <li><a href="bags.php">Bags</a></li>
                        <li><a href="turks.php">Turks</a></li>
                        <li><a href="belts.php">Belts</a></li>
                        <li><a href="shoes.php">Shoes</a></li>
                        <li><a href="others.php">Others</a></li>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Brands</h6>

                <div class="widget-desc">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="amado">
                        <label class="form-check-label" for="amado">June Clothings</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ikea">
                        <label class="form-check-label" for="ikea">June</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="furniture">
                        <label class="form-check-label" for="furniture">Dresses</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="factory">
                        <label class="form-check-label" for="factory">The factory</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artdeco">
                        <label class="form-check-label" for="artdeco">Artdeco</label>
                    </div>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget color mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Color</h6>

                <div class="widget-desc">
                    <ul class="d-flex">
                        <li><a href="#" class="color1"></a></li>
                        <li><a href="#" class="color2"></a></li>
                        <li><a href="#" class="color3"></a></li>
                        <li><a href="#" class="color4"></a></li>
                        <li><a href="#" class="color5"></a></li>
                        <li><a href="#" class="color6"></a></li>
                        <li><a href="#" class="color7"></a></li>
                        <li><a href="#" class="color8"></a></li>
                    </ul>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Price</h6>

                <div class="widget-desc">
                    <div class="slider-range">
                        <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        </div>
                        <div class="range-price">$10 - $1000</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                        <?php if (isset($_SESSION['username'])) {
                                    echo 'WELCOME';
                            ?> <br>
                                <div class="upper">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['username']; } ?>
                                </div>
                                    <style type="text/css">
                                        .upper{
                                            text-transform: uppercase;
                                        }
                                    </style>
                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-8 0f 25</p><img src="img/fancybox_loading@2x.gif"><br>


                    <marquee direction = "left">WELCOME TO JUNE CLOTHINGS....<b>Cheers!!!</b></marquee>
                    
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                    <div> <a href="logout.php">
                                        <button class="btn btn-danger">
                                        Log out
                                    </button>
                                    </a></div>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by Category</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortBydate">
                                            <option><a href="bags.php">Bags</a></option>
                                            <option><a href="turks.php">Turks</a></option>
                                            <option><a href="dresses.php">Dresses</option>
                                            <option><a href="belts.php">Belts</a></option>
                                            <option><a href="shoes.php">Shoes</a></option>
                                            <option><a href="others.php">Others</a></option>
                                        </select>
                                    </form>
                                </div>
                                <div class="view-product d-flex align-items-center">
                                    <p>View</p>
                                    <form action="#" method="get">
                                        <select name="select" id="viewProduct">
                                            <option value="value">12</option>
                                            <option value="value">24</option>
                                            <option value="value">48</option>
                                            <option value="value">96</option>
                                        </select>
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                             <?php while($values = mysqli_fetch_array($result)){ ?>
                            <div class="product-img" id="olu">
                                <img src="files/<?php echo $values['pic_one']; ?>" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="" alt="">
                            </div>
                            <style type="text/css">
                                 #olu{
                                     width: 250px !important;
                                    height: 300px !important;
                                        }
                                    </style>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price"></p>
                                    <a href="product-details.php">
                                        <h6></h6>
                                    </a>
                                    <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">$<?php echo $values['price'] ?></p>
                                    <a href="product-details.php">
                                        <h6><?php echo $values['name'] ?></h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $values['id']; ?>">
                                    <a href="shop.php?add=<?php  echo $values['id']; ?>"><button class="btn btn-warning" onclick="<?php $_SESSION['p_name'] = $values['name'];
                                     ?>">Add to cart <i class="fa fa-plus"></i></button></a>
                            </div>  </div>
                    </div>
                           

                    </div>
                    <?php } ?>
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
    </section>
    <!-- ##### Newsletter Area End ##### -->
    <?php //include("heading/footer.php"); ?>