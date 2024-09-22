<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//package that allows you to get env file
session_start();// declears that server needs to store client side data
$email = strtolower($_POST['email']);
$password = strtolower($_POST['password']);// resives post request from the login page to the php server and the php server resives the request
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
//stores the login info to the server^ so it crates a duplicate of the data so its not lost when you leave the tab
include('connection.php');
   //to prevent from mysqli injection
  $email = strtolower($email);
  $password = strtolower($password);
  $email = stripcslashes($email);  
  $password = stripcslashes($password);  

  if(mysqli_connect_errno()) { // built in function 
    echo "sql connect err";
  } else {
    $email = mysqli_real_escape_string($con, $email);  //prevents sql injections
    $password = mysqli_real_escape_string($con, $password); 
    echo $email;
    echo $password;
    $sql = "select *from logins where Email = '$email' and Password = '$password'"; 
    $result = mysqli_query($con, $sql);
    // Check if query succeeded
    if ($result) {
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if ($count == 1) {
          $lstat = "su";
      } else {
          $lstat = "un";
      }
  } else {
      // Log or print the error for debugging
      echo "Error in query: " . mysqli_error($con);
      $lstat = "un"; // Default to 'un' on failure
  }
  
    $_SESSION["stat"] = $lstat; // saved on client and server side 
  }



?>
<!DOCTYPE html>
<html lang="en">
<form action="home.php" method="post" id="form">
  <input type="hidden" id="stat" name="stat" value="<?php echo $lstat?>">
  <input type="hidden" id="email" name="email" value="<?php echo $email?>">
  <input type="hidden" id="password" name="password" value="<?php echo $password?>">
  <input type='hidden' id='login' name='login' value="<?php echo $login?>">
  <input type='hidden' id='redirect' name='redirect' value="<?php echo $redirect?>">
  <input type="hidden" id="key" name="key" value="sd3xlAq3Wq0tcsYrzDEN2uqgpuAbpVtN">
  <script type="text/javascript">
    function formAutoSubmit () {
      var frm = document.getElementById("form");
      frm.submit();
    } //redirects to home page while keeping user info stored

    window.onload = formAutoSubmit;
  </script>
</form>
</html>
