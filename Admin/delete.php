<?php include("connection/session.php"); ?>
<?php include("connection/data.php"); ?>
<?php include("heading/header.php"); ?>
<?php 
    if(isset($_POST['submit'])){
      $id = $_POST['delete'];
      $query2 = "DELETE FROM products WHERE id = $id ";
      $result2 = mysqli_query($connection,$query2);
      if ($result2) {
        $aler1 = "hj";
      }else{
        echo "<h1>TRY AGAIN</h1>";
      }
    } 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
</head>
<body>
  <?php if (isset($aler1)) {
 ?>
 <script type="text/javascript">
   alert("Success")
 </script>
 <?php } ?>
     <?php 

      $query = 'SELECT * FROM products';
      $result = mysqli_query($connection,$query); ?>
 <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inverse table</h4>
                  <p class="card-description">
                    Add class
                    <code>.table-dark</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-light">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                          Name
                          </th>
                          <th>
                            price
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            Delete
                          </th>
                        </tr>
                      </thead>
                      <?php 
      while ($values = mysqli_fetch_assoc($result)){  ?>
                      <tbody>
                        <tr>
                          <td>
                            .
                          </td>
                          <td>
                            <?php echo $values['name']; ?>
                          </td>
                          <td>
                           <?php echo $values['price']; ?>
                          </td>
                          <td>
                            <?php echo $values['category']; ?>
                          </td>
                          <td>
                            <form action="#" method="post">
                            <button class="btn btn-danger" name="submit">Delete</button>
                            <input type="hidden" name="delete" value="<?php echo $values['id']; ?>">
                          </form>
                          </td>
                        </tr>

                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

</body>
</html>
