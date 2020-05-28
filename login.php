<?php
  require 'common.php';
  if(isset($_SESSION['email'])){
      header("location:index.php");
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
        <title>Login | The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css" type="text/css"/>


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
                    <div class="panel panel-default">
                        <div class="panel-header"><h2>Welcome to Login Page</h2></div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase.</p>
                        
                            <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your e-mail id" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2.3}$">
                                <div><?php echo $_GET['email-error']; ?></div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password" required="true" pattern=".{6,}">
                                <div><?php echo $_GET['password-error']; ?></div>
                            </div>
                                <div class="checkbox">
                                        <label><input type="checkbox" name="ch"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                           
                        </div>
                        <div class="panel-footer">Don't have an account?
                            <a href="signup.php">Register.</a>
                        </div>
                        
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
