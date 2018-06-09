<?php
require('dbcon.php');


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    
      $sql = "Insert into user (email,username,password,role) Values ('$email','$username','$password','user')";

      var_dump($email);

      $querysql = mysqli_query($connection,$sql);
     
     if (!$querysql) {
         echo "<script language='javascript'>
                  window.alert('Error in Registering. Please Try again later');
                  window.location.href='/fashion/pages/applicant/register.php';
                 </script> ";}
     

      else{
          
         echo "<script language='javascript'>
                  window.alert('Successfully Registered. Log in now');
                  window.location.href='/fashion/pages/applicant/login.php';
                 </script> ";

         
      }
}
 ?>     