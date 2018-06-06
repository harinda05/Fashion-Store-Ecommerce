<?php
require('dbcon.php');


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      
     $session_username = $_POST['username'];
    $session_password = $_POST['password'];
     
    
      
      $sqlid = "SELECT user_name FROM applicant WHERE username = '$session_username' AND password = '$session_password'";
      

      $querysql = mysqli_query($connection,$sqlid);
     
     if (!$querysql) {
         die('Invalid query: ' . mysql_error());
      }
      
      $count = mysqli_num_rows($querysql);

      if($count == 1) {
          $_SESSION['nID'] = 1;

         header("Location:/news1/pages/home.php");
      

		  }

      else{
          echo "<script language='javascript'>
                  window.alert('Invalid Username or Password')
                  window.location.href='/news1';
                 </script> "
                  ;

         
      }
}
 ?>     