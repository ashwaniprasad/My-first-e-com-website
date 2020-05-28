<?php
require 'common.php';

$_SESSION['item_id'] = $item_id;
$_SESSION['user_id'] = $user_id;

$delete_query = "DELETE FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' ";
$delete_query_result = mysqli_query($con, $delete_query) or die (mysqli_error($con));
header("location:cart.php");

?>



