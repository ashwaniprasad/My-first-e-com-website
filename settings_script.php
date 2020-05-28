<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
    
}
$old_password = $_POST['oldpassword'];
$old_password = mysqli_real_escape_string($con, $old_password);
$old_password = MD5($old_password);



$new_password = $_POST['new_password'];
$new_password = mysqli_real_escape_string($con, $new_password);
$new_password = MD5($new_password);

$rep_pass = $_POST['rep_password'];
$rep_pass = mysqli_real_escape_string($con, $rep_pass);
$rep_pass = MD5($rep_pass);


$select_query = "SELECT email AND password FROM users WHERE email='".$_SESSION['email']."'";
$select_query_result = mysqli_query($con,$select_query) or die($mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);

$orig_pass = $row["password"];

if ($new_password != $rep_pass) {
    header('location: settings.php?error=The two passwords don\'t match.');
} else {
    if ($old_password == $orig_pass) {
        $query = "UPDATE  users SET password = '" .$new_password. "' WHERE email = '" .$_SESSION['email']. "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated Successfully');
    } else
        header('location: settings.php?error=Wrong Old Password.');
}
?>