<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
    
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
        <title>Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="settings.css" type="text/css"/>


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
        <h2 class="setting">Your Preferences</h2>
        <form class="form" action="settings_script.php" method=POST>
      
            <label for="password">Change Password</label>
                          <div class="form-group">
                            <input type="password" class="form-control"  name="oldpassword" pattern=".{6,}" placeholder="Old Password">
                        </div>
            
                        <div class="form-group">
                            <input type="password" class="form-control"  name="new_password" pattern=".{6,}" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="rep_password" pattern=".{6,}" placeholder="Confirm New Password">
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
            <button type="submit" class=" btn btn-primary">Save Changes</button>
            
            
            
                
        </form>
        <footer>
                <div class="container-fluid foot_container">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p> 
                </div>
            </footer>
        
        
        
        
        
        </div>
        
    </body>
</html>
