<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $c_id =1;
    

 /* Start Getting Form Values */
    $username = $_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $dept=$_POST['department'];




 /* End Getting Form Values */

    


    $sqlex="SELECT u_id FROM user ORDER BY u_id DESC LIMIT 1";
    $result = $connection->query($sqlex);
    while($row = $result->fetch_assoc()) {
        $last_u_id=$row['u_id'];
    }


    

    $sql1="INSERT INTO user (username,password,email,role) VALUES ('$username','$password', '$email','$role')";
    $result1 = $connection->query($sql1);

    $u_id_temp = $last_u_id+1;
    $sql2 ="INSERT INTO client_department (u_id,dept_id) VALUES ('$u_id_temp ','$dept')";
    $result2 = $connection->query($sql2);
    
    
    var_dump($sql1);
    var_dump($sql2);

    if($result1 and $result2){
       echo "<script language='javascript'>
                  window.alert('New Client Added')
                  window.location.href='/fashion/pages/Admin/dashboard';
                 </script> ";
    }
    else{
        echo "<script language='javascript'>
                  window.alert('New Client Not added. Try Again Later')
                  window.location.href='fashion/pages/Admin/dashboard';
                 </script> ";
   }

?>
