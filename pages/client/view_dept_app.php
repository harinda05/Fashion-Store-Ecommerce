<?php
	
	
	require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');

  	$job_id = $_GET['job_id'];
  	$position = $_GET['position'];

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    echo '<div class="container">

	<div class="dept_jobs">
		<div class="dept_jobs_heading">
			<h2 style="font-weight: normal; font-size: 25px; padding: 0px;">View Applications</h2>
		</div>

		<div class="view_app_tbl">

			<h3>JOB POSITION :'.$position.'</h3>
			
			<table class="job">
			<tr>
	
				<th style="width: 35%;">Name of the Applicant</th>
				<th style="width: 15%;">Marks Obtained</th>
				<th style="width: 15%;" >Details</th>
			</tr>
			';

	$sql = "SELECT * FROM application WHERE job_id=$job_id ORDER BY mark DESC";
    $result=mysqli_query($connection,$sql);
    if($result){
    	while($row = $result -> fetch_assoc()){
    		echo '<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["mark"].'</td>
				<td>
					<button class="view_btn"><a style="text-decoration: none; color: black;" href="/fashion/pages/client/detailed_app.php?app_id='.$row["app_id"].'&position='.$position.'">View</a></button>
				</td>
			</tr>';

    	}
    }

    if(!$result || mysqli_num_rows($result)==0){
    	echo'<tr><td colspan="3">No Applications Found</td></tr>';
    }

    echo '</table>

		</div>
		
	</div>
</div>';

?>


<? require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>









