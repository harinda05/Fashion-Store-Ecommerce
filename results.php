<?php 

include('php/dbcon.php');
include('header.php');

?>

<div class="container">

	<div class="dept_heading">
        <h2 style="font-size: 40px; color: #00204A; text-align: center; padding: 25px;text-transform: uppercase">Search Results</h2>
    </div>

    <div class="view_jobs">
    	<h1>Job Vacancies</h1>


	    <table class="job">
	            <tr>
	            	<th>Department</th>
	                <th>Position</th>
	                <th style="width: 15%;" >Closing Date</th>
	                <th>View</th>
	            </tr>

    	<?php


    	if (isset($_GET['search'])) {
    	 	$search_query = $_GET['user_query'];

    	$get_job = "SELECT * FROM jobs WHERE position like '%$search_query%' OR title like '%$search_query%' ;";

    	$run_job = mysqli_query($connection, $get_job);

    	while ($row_job=$result -> fetch_assoc($run_job)) {
    		
    		$position = $row_job['position'];
    		$closing_date = $row_job['closing_date'];

    		 echo "   
                    <tr>
                    	<td>Department</td>
                        <td>'. $row["position"] .'  </td>
            
                        <td>'. $row["closing_date"] .'  </td>

                        <td>'. '<a href="/fashion/pages/job_description.php?job_id='.$row["job_id"].'">View</a> </td>
                    </tr>
                                    
            ";
    	}

    	} 

    	?>

	           
	    </table>

	</div>
	

</div>


<?php include('footer.php') ?>