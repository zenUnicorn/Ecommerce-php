<?php include("connection/session.php"); ?>
 <?php include("connection/data.php"); ?>
<?php include("heading/header.php");?>

<?php 

      $query = 'SELECT * FROM products';
      $result = mysqli_query($connection,$query); ?>
<div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">General table</h4>
                  <p class="card-description">
                    All the Products
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
                        </tr>
                      </thead>
                      <?php 
      while ($values = mysqli_fetch_assoc($result)){  ?>
                      <tbody>
                        <tr>
                          <td>
                          <?php echo $values['id']; ?>  
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
                        </tr>

                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
