<?php
require 'common.php';
session_start();

$email= $_POST['email'];
$password= $_POST['password'];
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
md5($password);
$select_query = "SELECT id AND email FROM users WHERE password='$password' AND email='$email'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);

if($total_rows_fetched==0){

echo '<script type="text/javascript">'; 
echo 'alert("Invalid username or password. Please try again");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
 
}
else{
   mysqli_fetch_array($select_query_result);

$_SESSION['email'] = $email;
$_SESSION['user_id'] = mysqli_insert_id($con);
header("location:products.php");
exit();   
}
?>