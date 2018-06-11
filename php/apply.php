


<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $u_id = $_SESSION['u_id'];
    $job_id = $_GET['job_id'];

    var_dump($job_id);

 /* Start Getting Form Values */
    $nic = $_POST['nic'];
    $fname=$_POST['fname'];
    $bdate=$_POST['bdate'];
    $contactno=$_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $edu = $_POST['edu'];
  	

  	


    // Work Experience
    $work_count=0;
    $data_work=[];
    foreach($_POST['work_post'] as $val_work) {
        $data_work[] = [$val_work, $_POST['work_dur'][$work_count], $_POST['work_inst'][$work_count]];
        $work_count++;
    }

    $work_data = base64_encode(serialize($data_work));

    // Prof Qualifications
    $prof_count=0;
    $data_prof=[];
    foreach($_POST['prof_year'] as $val_prof) {
        $data_prof[] = [$val_prof, $_POST['prof_qual'][$prof_count], $_POST['prof_inst'][$prof_count]];
        $prof_count++;
    }
    $prof_data = base64_encode(serialize($data_prof));


    // upload CV
    $file = $_FILES['cv']['name'];
    $file_loc = $_FILES['cv']['tmp_name'];
        
    $folder=$_SERVER['DOCUMENT_ROOT'] . '/fashion/images/application/cv/';
 
    move_uploaded_file($file_loc,$folder.$file);

    

    // upload images

    

    $imgpaths=[];
    foreach($_FILES["img_proof"]["tmp_name"] as $key=>$tmp_name){
    $temp = $_FILES["img_proof"]["tmp_name"][$key];
    $name = $_FILES["img_proof"]["name"][$key];
     
    if(empty($temp))
    {
        break;
    }

    $target = $_SERVER['DOCUMENT_ROOT'].'/fashion/images/application/images/'.$name;

    $imgpaths[]= $name;
    $img_data = base64_encode(serialize($imgpaths));
     
    move_uploaded_file($temp,$target);
}
    

    



 /* End Getting Form Values */


 /* Marks */

    if ($edu == 'Post Graduate'){
        $mark_edu = 20;
    }

    if ($edu == 'Graduate'){
        $mark_edu = 15;
    }

    if ($edu == 'Advanced Level'){
        $mark_edu = 10;
    }

    if ($edu == 'Ordinary Level'){
        $mark_edu = 5;
    }
    
    $prof_mark = 3*$prof_count;
    $work_mark = 5*$work_count;


    $tot_mark = $mark_edu+$prof_mark+$work_mark;
    var_dump($tot_mark);

    /* End Mark */

    
        // insert in to application table

    $sql="INSERT INTO application (u_id,job_id,name,dob,address,contactno,email,education,work_experience,prof_q,cv,img,mark,status) VALUES ('$u_id','$job_id','$fname','$bdate',' $address','$contactno','$email','$edu','$work_data', '$prof_data','$file','$img_data',$tot_mark,'Received')";
    $result = $connection->query($sql);
  
    var_dump($sql);
    if($result){
       echo "<script language='javascript'>
                  window.alert('Application Sent')
                  window.location.href='/fashion';
                 </script> ";
    }
    else{
       echo "<script language='javascript'>
                  window.alert('Application Failed. Please try again later')
                  window.location.href='/fashion';
                 </script> ";
   }

?>





