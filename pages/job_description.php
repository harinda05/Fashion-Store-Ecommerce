<?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php'); ?>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');



    $job_id = $_GET['job_id'];
    $u_id = $_SESSION['u_id'];
   // $dept_id = $GET['dept_id'];

    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id where jobs.job_id = $job_id";


    $result=mysqli_query($connection,$sql);

   
    while($row = $result -> fetch_assoc()){

      echo  '<div class="container">
        
            <div class="dept_heading">
                <h2 style="font-size: 40px; color: #FFA500; text-align: center; padding: 25px;text-transform: uppercase">'.$row['department'].' Department</h2>
            </div>
        
            <div class="view_job">
                <h2>Job Position : '.$row['position'].'</h2>
                <hr style="border: 1.5px solid #00204A; margin-bottom: 30px; width: 100%;">


                <table class="job">
                    <tr>
                        <th>Descrption</th>
                        <th style="width:20%;">Date Posted</th>
                        <th style="width:20%;">Closing Date</th>
                    </tr>
                    <tr>
                        <td>'.$row['description'].'</td>
                        <td>'.$row['post_date'].'</td>
                        <td>'.$row['closing_date'].'</td>
                    </tr>
                </table>
        


                <img style="padding:20px; padding-left:25%;" src="/fashion/images/job/'.$row['img_job'].'" height="50%" width="50%">'
                ;



                $app_sql = "SELECT * FROM application where job_id = $job_id AND u_id =$u_id";
                $query_app_sql=mysqli_query($connection,$app_sql);
                
                if(mysqli_num_rows($query_app_sql)>0 ){
                    echo'<button><a>You Have Already Applied</a></button>';
                }

                elseif(!$query_app_sql || mysqli_num_rows($query_app_sql)==0){
                echo '<button style="margin-left:40%;"><a href="/fashion/pages/applicant/application.php?job_id='.$row['job_id'].'">Apply</a></button>';}
                
            echo'</div>
            
        
            </div>';




    }
                ?>

<?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>
