<?php
require('dbcon.php');

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form 
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

        //error handlers
    //check if input characters are valid
    if(!preg_match('/^[a-z A-Z 0-9]*$/x', $username)){
        echo "<script language=\"JavaScript\">\n";
        echo "alert('Username invaild input');\n";
        echo "window.location='/fashion/pages/applicant/register.php'";
        echo "</script>";
    }
     else{
        //check if email is invalid
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script language=\"JavaScript\">\n";
            echo "alert('Invalid email');\n";
            echo "window.location='/fashion/pages/applicant/register.php'";
            echo "</script>";
        }
        else{
            if($password!=$cpassword){
                echo "<script language=\"JavaScript\">\n";
                echo "alert('Passwords are not matching');\n";
                echo "window.location='/fashion/pages/applicant/register.php'";
                echo "</script>";

            }
            else{
    
                $sql = "Insert into user (email,username,password,role) Values ('$email','$username','$password','user')";

                //var_dump($email);

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
          

          }

         
      }
}

 ?>     