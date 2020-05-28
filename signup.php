<?php
 require 'common.php';
 if(isset($_SESSION['email'])){
     header("location:products.php");
 exit();
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
        <title>Sign Up | The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="signup.css" type="text/css"/>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>


                <div class="container">
            <div class="row row_style row-fluid">
                <div class="col-xs-4">
                    <div class="form-header">SIGN UP</div>
                    <center><p>Create a new account.</p></center>
                    <form action="signup_script.php" method=POST
      oninput='passwordc.setCustomValidity(passwordc.value != password.value ? "Passwords do not match." : "")'>
      
                        <div class="form-group">
                            <input type="text" class="form-control" required name="name" placeholder="Name">
                              
  
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" required name="email" placeholder="Email">
                              
  
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="password" placeholder="Password">
                              
  
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="passwordc" placeholder="Confirm Password">
 
                       </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" required name="contact" placeholder="Contact No. eg. +919000000000">
                             
  
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="city" placeholder="City">
                              
  
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="address" placeholder="Address">
                              
  
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>    
                        
                       </form>
                    <div class="form-footer">
                        <p>Already have an account?<a href="login.php"> Login here.</a></p>
                    </div>
                    
                    
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
