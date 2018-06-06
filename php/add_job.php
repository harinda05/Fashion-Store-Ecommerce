<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $c_id =1;
    

 /* Start Getting Form Values */
    $title = $_POST['title'];
    $desc=$_POST['desc'];
    $post_date=$_POST['post_date'];
    $cls_date=$_POST['cls_date'];
    

    // upload job image

    $file = $_FILES['job_img']['name'];
    $file_loc = $_FILES['job_img']['tmp_name'];
        
    $folder=$_SERVER['DOCUMENT_ROOT'] . '/fashion/images/job/';
 
    move_uploaded_file($file_loc,$folder.$file);

    $job_img_path = $folder.$file;

    // upload images




 /* End Getting Form Values */

    
        // insert in to application table

    $sql="INSERT INTO jobs (c_id,title,description,post_date,closing_date,img_job) VALUES ('$c_id', '$title', '$desc', '$post_date', '$cls_date', '$job_img_path')";
    $result = $connection->query($sql);
    
    var_dump($sql);
    if($result){
       echo 'success';
    }
    else{
        echo 'failed';
   }

?>
