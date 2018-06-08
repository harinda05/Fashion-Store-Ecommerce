<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $dept_id = $_GET['dept_id'];

    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id where jobs.dept_id = $dept_id ORDER BY jobs.closing_date";


    echo ' <div> <table> <th> Postition </th>
                    <th> Department </th>
                    <th> Closing Date </th>
                    <th> View </th>


                                    ';

    $result=mysqli_query($connection,$sql);

    var_dump($sql);
    while($row = $result -> fetch_assoc())
                {
                  echo '    <tr> 
                    <td>'. $row["position"] .'  </td>
                    <td>'. $row["department"] .'  </td>
                    <td>'. $row["closing_date"] .'  </td>

                    <td>'. '<a href="/fashion/pages/job_description.php?job_id='.$row["job_id"].'">View</a> </td>
                  </tr>
                                    
                            ' ;
                }

    echo '</div>';
    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');
?>
