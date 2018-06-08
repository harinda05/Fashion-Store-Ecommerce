<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $job_id = $_GET['job_id'];
   // $dept_id = $GET['dept_id'];

    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id where jobs.job_id = $job_id";

var_dump($sql);
    $result=mysqli_query($connection,$sql);

    var_dump($sql);
    while($row = $result -> fetch_assoc()){
       echo $row['title']. '<br>';
        echo $row['description']. '<br>';
        echo $row['position'].'<br>';
        echo $row['post_date'].'<br>';
        echo $row['closing_date'].'<br>';




    }
                ?>