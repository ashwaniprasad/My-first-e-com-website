<?php
function check_if_added_to_cart($item_id) {

require 'common.php';
$_SESSION['user_id'] = $user_id; 

$users_products = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to Cart'";
$result = mysqli_query($con,$users_products) or die(mysqli_error($con));
$rows_in_products = mysqli_num_rows($result);
if ($rows_in_products >=1){
    return 1;
}
else{
    return 0;
}

}


 ?>
