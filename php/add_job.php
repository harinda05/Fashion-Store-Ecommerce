<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $u_id=$_GET['u_id'];
    

    $getdept = "SELECT dept_id from client_department WHERE u_id=$u_id";
    $query= $connection->query($getdept);
    while($row = $query -> fetch_assoc()){
        $dept_id=$row['dept_id'];
    }

 /* Start Getting Form Values */
    $title = $_POST['title'];
    $desc=$_POST['desc'];
    $post_date=$_POST['post_date'];
    $cls_date=$_POST['cls_date'];
    $position = $_POST['position'];
    

    // upload job image

    $file = $_FILES['job_img']['name'];
    $file_loc = $_FILES['job_img']['tmp_name'];
        
    $folder=$_SERVER['DOCUMENT_ROOT'] . '/fashion/images/job/';
 
    move_uploaded_file($file_loc,$folder.$file);

    

    // upload images




 /* End Getting Form Values */

    
        // insert in to application table

    $sql="INSERT INTO jobs (u_id,dept_id,title,position,description,post_date,closing_date,img_job) VALUES ('$u_id','$dept_id','$title','$position','$desc', '$post_date', '$cls_date', '$file')";
    $result = $connection->query($sql);
    
    var_dump($sql);
    if($result){
        echo "<script language='javascript'>
                  window.alert('Job Added Successfully')
                  window.location.href='/fashion/pages/client/view_dept_jobs.php';
                 </script> ";
    }
    else{
        echo "<script language='javascript'>
                  window.alert('Error. Please Try Again Later')
                  window.location.href='/fashion';
                 </script> ";;
   }

?>
