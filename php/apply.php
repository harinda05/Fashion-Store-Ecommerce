


<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $u_id =1;
    $job_id = 2;

 /* Start Getting Form Values */
    $nic = $_POST['nic'];
    $name=$_POST['name'];
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

    $work_data = serialize($data_work);

    // Prof Qualifications
    $prof_count=0;
    $data_prof=[];
    foreach($_POST['prof_year'] as $val_prof) {
        $data_prof[] = [$val_prof, $_POST['prof_qual'][$prof_count], $_POST['prof_inst'][$prof_count]];
        $prof_count++;
    }
    $prof_data = serialize($data_prof);


    // upload CV
    $file = $_FILES['cv']['name'];
    $file_loc = $_FILES['cv']['tmp_name'];
        
    $folder=$_SERVER['DOCUMENT_ROOT'] . '/fashion/images/application/cv/';
 
    move_uploaded_file($file_loc,$folder.$file);

    $cvpath = $folder.$file;

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

    $imgpaths[]= $target;
    $img_data = serialize($imgpaths);
     
    move_uploaded_file($temp,$target);
}
    

    



 /* End Getting Form Values */

    
        // insert in to application table

    $sql="INSERT INTO application (u_id,c_id,name,dob,address,contactno,email,education,work_experience,prof_q,cv,img,status) VALUES ('$u_id','job_id','$name','$bdate',' $address','$contactno','$email','$edu','$work_data', '$prof_data','$cvpath','$img_data','received')";
    $result = $connection->query($sql);
    
    var_dump($sql);
    if($result){
       echo 'success';
    }
    else{
        echo 'failed';
   }

?>





