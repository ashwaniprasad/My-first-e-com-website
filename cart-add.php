<?php


include 'common.php';
 
$item_id = $_GET['item_id'];
$fetch_id = "SELECT id FROM users WHERE email ='".$_SESSION['email']."'";
$result = mysqli_query($con, $fetch_id) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$user_id = $row["id"];
$insert_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
header("location:products.php");

?>


