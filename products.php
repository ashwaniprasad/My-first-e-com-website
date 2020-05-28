<?php
 require 'common.php';
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Products | The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="products.css" type="text/css"/>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    
</head>
    
    
    <body>
        <?php
         include 'header.php';
         include 'check-if-added.php';
         ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p class="jumbotron-note">We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
                <div class="row row_style text-center">
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/2.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Samsung DSLR</h2>
                                 <h4 class="price">Price: ₹40,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(1)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/3.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Sony DSLR</h2>
                                 <h4 class="price">Price: ₹50,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(2)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/4.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Olympus DSLR</h2>
                                 <h4 class="price">Price: ₹80,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(3)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/5.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Canon EOS</h2>
                                 <h4 class="price">Price: ₹36,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(4)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                     
                
            </div>
            <div class="row text-center">
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/9.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Titan Model #301</h2>
                                 <h4 class="price">Price: ₹13,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(5)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/10.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Titan Model #201</h2>
                                 <h4 class="price">Price: ₹3,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(6)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                </div>
                <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/11.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>HMT Milan</h2>
                                 <h4 class="price">Price: ₹8,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(7)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                </div>
                <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/12.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Faber Luba #111</h2>
                                 <h4 class="price">Price: ₹18,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(8)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                </div> 
                
            </div>
                 <div class="row row_style text-center">
                    <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/8_1920x1280.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>H&W</h2>
                                 <h4 class="price">Price: ₹800</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(9)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                    </div>
                     <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/6.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Louis Phillipine</h2>
                                 <h4 class="price">Price: ₹1,000</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(10)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                     </div>
                     <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/13.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>John Zok</h2>
                                 <h4 class="price">Price: ₹1,500</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(11)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                     </div>
                     <div class="col-md-3 clo-sm-6 column_style">
                        <a class="nounderline">
                             <img src="img/14.jpg" alt="" class="thumbnail">
                             <div class="caption">
                                 <h2>Jhalsani</h2>
                                 <h4 class="price">Price: ₹1,300</h4>
                                 <?php if (!isset($_SESSION['email'])) { ?> 
	<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
	<?php 
} else { 
if (check_if_added_to_cart(12)) {  
	echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
} else { 
	?> 
	<a href="cart-add.php?item_id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
  } 
} 
?>
                             </div>
                         </a>
                     </div>
                     
                
            </div>
        </div>
        
                <footer>
                <div class="foot_container">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p> 
                </div>
            </footer>
        
    </body>
</html>
