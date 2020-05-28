<?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
<?php include("heading/header2.php"); 
  
?>
<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

    $sql = "INSERT INTO message (name, email, phone, message) VALUES('{$name}', '{$email}','{$phone}','{$message}')";
    $result = mysqli_query($connection,$sql);
    if ($result) {
      //header('location:index.php');
      //$alert2 ="hay";
    }else{ 
       header('location: uuutgf.php');
      // $alert ="hey";
   	 }
   
	}
 ?>

		<center>
			<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="section-subheading text-muted"style="margin-top:200px" >Contact Us</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form action="#"  method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control"  name="name" type="text" placeholder="Name" required>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control"  name="email" type="email" placeholder="Email *" required>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="phone" type="tel" placeholder="Phone number *" required>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Your Message *" required></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button  name="submit" class="btn btn-warning btn-xl text-uppercase" type="submit">Send Message <i class="fa fa-send"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


		</center>

 <?php include("heading/footer.php"); ?>
 