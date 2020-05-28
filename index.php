<?php
   require 'common.php';
   if(isset($_SESSION['email'])){
       header('location:products.php');
   
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
        <title>The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css" type="text/css"/>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
           include 'header.php';
           ?>
      

        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <h1><b><i>"We sell lifestyle."</i></b></h1>
                    <p>Flat 40% OFF on premium brands.</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now!</a>
                </div>
            </div> 
        </div>
        <div class="products">
                     <div class="items">
                         <a class="nounderline">
                             <img src="img/watch.jpg" alt="watch_image" class="thumbnail">
                             <div class="caption">
                                 <h2>Watches</h2>
                                 <h4>Original watches from the best brands.</h4>
                             </div>
                         </a>
                     </div>
                     <div class ="items">
                         <a class="nounderline">
                             <img src="img/camera.jpg" alt="camera_image" class="thumbnail">
                             <div class="caption">
                                 <h2>Cameras</h2>
                                 <h4>Choose among the best available in the world.</h4>
                                         </div>
                         </a>
                     </div>
                     <div class ="items">
                         <a class="nounderline">
                             <img src="img/shirt.jpg" alt="shirt_image" class="thumbnail">
                             <div class="caption">
                                 <h2>Shirts</h2>
                                 <h4>Experience wearing one of the finest fabrics.</h4>
                             </div>
                            </a>
                 </div>
            </div>
        <footer>
                <div class="foot_container">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p> 
                </div>
            </footer>
    </body>
</html>
