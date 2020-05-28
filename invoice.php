 <?php include("connections/session.php"); ?>
 <?php include("connections/database.php"); ?>
 <?php include("heading/header.php");
     $username= $_SESSION['username'];
  ?>

<?php 
     $query = "SELECT * FROM register";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));


     $query = "SELECT * FROM cart WHERE username = '{$username}'";
        $query2 = "SELECT * FROM products";

     $result = mysqli_query($connection, $query)or die(mysqli_error($connection));
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment-invoice</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <center>
                        <b><h3>JUNE CLOTHINGS</h3></b>
                            <span>New Site, Area C Owo, Ondo State.</span><br><b class="i">Payment Invoice</b></center>
                            <style type="text/css">
                                .i{
                                    text-decoration: blink;
                                }
                            </style>
                    <table>
                        <tr>
                            <td class="title">
                                <img src="img/core-img/10469.png" style="width:100px; max-width:300px;">
                            </td>
                            
                            <td>
                                <b>Reciept No</b>: #<?php echo rand(1,300000); ?><br>
                                <b>Date</b>:<?php echo ""; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Bank Payment
                </td>
            </tr>
            
            <tr class="details">
                <td>
                   Online Transfer
                </td>
                
                <td>
                    Zenith Bank Plc.
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Details
                </td>
                <td></td>
            </tr>
            <tr class="item">
                <td>
                   Name
                </td>
                
                <td class="namep">
                   <?php echo $_SESSION['username']; ?>
                </td>
                <style type="text/css">
                    .namep{
                        text-transform: uppercase;
                    }
                </style>
            </tr>
            
            <tr class="item">
                <td>
                    Address
                </td>
                
                <td>
                    <?php echo $_SESSION['address'];  ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Phone number
                </td>

                <td>
                   <?php echo $_SESSION['phone']; ?>
                </td>

            </tr>
            
            <tr class="item last">
                <td>
                    Country
                </td>
                
                <td>
                    <?php echo $_SESSION['country']; ?> 
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
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
                
                <td>
                   Fee:$ <?php  echo $total; ?>  Naira Only.
                </td>
            </tr>
            <tr class="heading">
                <td>
                    SIGNATORY
                </td>
                
                <td></td>
            </tr>
            <tr class="total">
                <td></td>
                <td>
                   CEO: JUNE CLOTHINGS<BR><img src="img/core-img/signature.png"><br>
                   <b>08103016965</b>
                </td>
            </tr>

        </table>
            <div class="b">
                <b>NOTE:</b><br>
                <b>Make sure you are always with your reciept so as to claim your product <br>
                Don't forget to call the number above.</b>
            </div>
            <style type="text/css">
                .b{
                  text-decoration: blink;  
                  color: red;
                }
            </style>
            <table>
                <tr class="total">
                <td></td>
                
                <td>
                   OWNER'S SIGNATURE<BR> ______________________ 
                   <!-- <img src="img/fancybox_loading@2x.gif"> -->
                </td>
            </tr>
            </table>
             <div>
                <button class="btn btn-danger" onclick="myFunction()">
                Print Invoice
                <i class="fa fa-upload"> </i>
                    </button></div>
    </div>
    <script type="text/javascript">
        function myFunction(){
            window.print();
        }
    </script>
    <div> <a href="logout.php">
        <button class="btn btn-danger">Log out </button></a>
    </div>

</body>
</html>