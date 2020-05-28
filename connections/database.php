<?php 
$connection = mysqli_connect("localhost", "root", "", "ecommerce");
        if(!$connection){
            die(mysqli_error($connection));
        }
?>