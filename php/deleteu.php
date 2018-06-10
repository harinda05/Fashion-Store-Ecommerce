<?php
require('dbcon.php');


session_start();


    $u_id=$_GET['u_id'];
    
      $sql = "DELETE from user where u_id='$u_id'";
      var_dump($sql);
      $result = mysqli_query($connection,$sql);

     if (!$result) {
         echo "<script language='javascript'>
                  window.alert('Could not delete user. Please try again');
                  window.location.href='/pages/Admin/delete_client.php';
                 </script> ";}
     

      elseif($result){
          
         echo "<script language='javascript'>
                  window.alert('User Successfully Deleted');
                  window.location.href='/pages/Admin/delete_client.php';
                 </script> ";

         
      }

 ?>     