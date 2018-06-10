<?php
require('dbcon.php');


session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form 
      
     $session_username = $_POST['username'];
    $session_password = $_POST['password'];
     
    
      
      $sqlid = "SELECT * FROM user WHERE username = '$session_username' AND password = '$session_password'";
      

      $querysql = mysqli_query($connection,$sqlid);
     
     if (!$querysql) {
         die('Invalid query: ' . mysqli_error());
      }
      

      $count = mysqli_num_rows($querysql);

      while($row = $querysql -> fetch_assoc())
        {
          $u_id = $row["u_id"];
          $username = $row["username"];

          $_SESSION['nID'] = 1;
          $_SESSION['role'] = $row["role"];
          $_SESSION['u_id'] = $u_id;
          $_SESSION['uname'] = $username;

           if($count == 1 and $row["role"]=='user') {
                    header("Location:/fashion/");
                }

            if($count == 1 and $row["role"]=='admin') {
                    header("Location:/fashion/pages/Admin/dashboard");
                }

            if($count == 1 and $row["role"]=='client') {
                    header("Location:/fashion/");
                }

           
           if(!mysqli_num_rows($querysql)){
          echo "<script language='javascript'>
                  window.alert('Invalid Username or Password')
                  window.location.href='/fashion/login.php';
                 </script> "
                  ; }

        }
        
          
     

      

         
     
}
 ?>     