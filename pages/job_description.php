<?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php'); ?>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');



    $job_id = $_GET['job_id'];
    $u_id = $_SESSION['u_id'];
   // $dept_id = $GET['dept_id'];

    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id where jobs.job_id = $job_id";

var_dump($sql);
    $result=mysqli_query($connection,$sql);

    var_dump($sql);
    while($row = $result -> fetch_assoc()){

      echo  '<div class="container">
        
            <div class="dept_heading">
                <h2 style="font-size: 40px; color: #00204A; text-align: center; padding: 25px;">'.$row['department'].' Department</h2>
            </div>
        
            <div class="view_job">
                <h2>'.$row['position'].'</h2>
                <hr style="border: 1.5px solid #00204A; margin-bottom: 30px; width: 100%;">
        
                <h3>Descrption</h3>
        
                <p>'.$row['description'].'</p>

                <h3>Date Posted</h3>
        
                <p>'.$row['post_date'].'</p>

                <h3>Closing Date</h3>
        
                <p>'.$row['closing_date'].'</p>';

                $app_sql = "SELECT * FROM application where job_id = $job_id AND u_id =$u_id";
                $query_app_sql=mysqli_query($connection,$app_sql);
                
                if(mysqli_num_rows($query_app_sql)>0 ){
                    echo'<label> You Have Already Applied For this Job </label>';
                }

                elseif(!$query_app_sql || mysqli_num_rows($query_app_sql)==0){
                echo '<button><a href="/fashion/pages/applicant/application.php?job_id='.$row['job_id'].'">Apply</a></button>';}
                
            echo'</div>
            
        
            </div>';




    }
                ?>

<?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>
