<?php
require 'common.php';
if (!isset($_SESSION['email'])){
    header('location:index.php');
                    
                $item_id = $_GET['item_id'];
                $_SESSION['user_id'] = $user_id;
                $update_status = "UPDATE user_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_id . ") and status='Added to cart'";
                $update_status_result = mysqli_query($con, $update_status) or die (mysqli_error($con));
                
               
    
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Order Confirmation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="success.css" type="text/css"/>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <body>
<?php
include 'header.php';
?>
        <div clas="container">
            <h1 class="success-banner"><center>Success!</center></h1>
            <div class="success-msg">

            <p>Your order is confirmed.</p> 
            <p>Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
        </div>
        </div>
                  <footer>
                <div class="foot_container">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p> 
                </div>
            </footer>
    </body>
</html>
