<?php
require 'common.php';
if (!isset($_SESSION['email'])){
    header('location:login.php');
    
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
        <title>Your Cart | The Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="cart.css" type="text/css"/>


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
            
            
            <table class="table table-hover table-bordered">
              <?php
            $_SESSION['user_id'] =$user_id;
            $select_query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items INNER JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to Cart'";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            
                
            if (mysqli_num_rows($select_query_result) >= 1){
               
            ?>
                
                
                <thead>
                    <tr>
                        <th><center>Item ID</center></th>
                        <th><center>Item Name</center></th>
                        <th><center>Price</center></th>
                        <th></th>
                    </tr>
                </thead>
              
            
        
            
                
               
                <tbody>
                <?php
              
              $total_price = 0;
              while($run_list=mysqli_fetch_array($select_query_result)){ 
                       $total_price += $run_list["Price"];
                       $id="";
                       $id .= $run_list["id"] . ",";
                     
                
            
                        
                    echo  "<tr>
                    
                            <td>" . "#" . $run_list["id"] . "</td>
                            <td>" . $run_list["Name"] .  "</td>
                            <td>₹ " . $run_list["Price"] . "</td>
                            <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                        </tr>";
                     }
                     $id = rtrim($id, ",");
                     ?>
                    </tbody>
                     
                
                
                   <tfoot>
                   <?php
                        echo"<tr>
                            
                            <td></td>
                            <td>TOTAL</td>
                            <td>₹ " . $total_price . "</td>
                            <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                        </tr>";
                        ?>
                    
                    </tfoot>
                                                <?php
                        } else {
                            echo "<br><br>;
                            <center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                   
                </table>
                
                </div>
        
          <footer>
                <div class="foot_container">
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</p> 
                </div>
            </footer>

            </body>
</html>
