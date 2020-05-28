<?php
require 'common.php';
if(isset($_SESSION['email'])){
header("location:products.php");
}
$name = $email = $contact = $city = $address = $password = "";


$name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          echo '<script type="text/javascript">'; 
echo 'alert("Only letters and whitespace allowed.");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
      
    }
$email = ($_POST["email"]); 
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)){
   
             echo '<script type="text/javascrip">'; 
echo 'alert("Invalid Email address");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
}
$password =($_POST["password"]);
if (strlen($_POST["password"]) < 6) {
    
          echo '<script type="text/javascrip">'; 
echo 'alert("Password should be at least 6 characters long");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
}
$contact = ($_POST["contact"]);
if (!preg_match('/\+[0-9]{2}+[0-9]{10}/', $contact)){
      echo '<script type="text/javascript">'; 
echo 'alert("Please enter a valid 10 digit contact number");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
    
}
$city =($_POST["city"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     
      echo '<script type="text/javascript">'; 
echo 'alert("Only letters and white space allowed");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
    }
$address =($_POST["address"]);



$select_query = "SELECT id FROM users WHERE email ='$email'";
$select_query_result = mysqli_query($con,$select_query);
$total_rows_fetched = mysqli_num_rows($select_query_result);
if ($total_rows_fetched > 0){
 echo '<script type="text/javascript">'; 
echo 'alert("Email address already exists.");'; 
echo 'window.location.href = "signup.php";';
echo '</script>';
}
else {
    $user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_query($con));
    $primary_key_user = mysqli_insert_id($con);
     $_SESSION['email'] = $email;
$_SESSION['user_id'] = mysqli_insert_id($con);
     
     echo '<script type="text/javascript">'; 
echo 'alert("You are successfully registered!");'; 
echo 'window.location.href = "products.php";';
echo '</script>';
    




    
    
    
}
?>