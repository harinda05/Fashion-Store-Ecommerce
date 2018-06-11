<?php
    
    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');

  

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $dept_id = $_GET['dept_id'];

    $dept_sql = "SELECT department from department where dept_id=$dept_id";
    $query=mysqli_query($connection,$dept_sql);
    while($row = $query-> fetch_assoc()){
        $dept = $row['department'];
    }

    



    echo ' <div class="container">

    <div class="dept_heading">
        <h2 style="font-size: 40px; color: #00204A; text-align: center; padding: 25px;text-transform: uppercase">'.$dept.' Department</h2>
    </div>

    <div class="view_jobs">
        <h1>Job Vacancies</h1>

        <table class="job">
            <tr>
                <th>Position</th>
                <th style="width: 15%;" >Closing Date</th>
                <th>View</th>
            </tr>


                                    ';
    $t_date=date("Y-m-d");
    
    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id where jobs.dept_id = $dept_id AND closing_date>=$t_date ORDER BY jobs.closing_date";

    $result=mysqli_query($connection,$sql);

    while($row = $result -> fetch_assoc())
                {
                  echo '    
                    <tr> 
                        <td>'. $row["position"] .'  </td>
            
                        <td>'. $row["closing_date"] .'  </td>

                        <td>'. '<a href="/fashion/pages/job_description.php?job_id='.$row["job_id"].'">View</a> </td>
                    </tr>
                                    
                            ' ;
                }

    echo '</table>
        
    </div>
</div>';
    
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');  ?>
