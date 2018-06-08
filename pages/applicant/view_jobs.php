<?php
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    $sql = "SELECT * FROM jobs INNER JOIN department ON jobs.dept_id=department.dept_id;"


    echo ' <table> <th> Postition: </th>
                    <th> Department </th>
                    <th> Closing Date </th>
                    <th> Apply </th>


                                    '

    $result=mysqli_query($connection,$sql);
    while($row = $result -> fetch_assoc())
                {
                  echo '<table>
                            
                                    <th> Postition: </th>
                            
                                    <th> Department <th>
                                
                                    

                               


                            </table>
                                    
                            ' 
                }

    

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');
?>
