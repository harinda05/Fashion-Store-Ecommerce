<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM application INNER JOIN jobs ON application.job_id=jobs.job_id where applocation.u_id = $u_id";


echo'<div class="container">
	
	<div class="my_app_heading">
		<h2 style="font-size: 40px; color: #00204A; text-align: center; padding: 25px; font-weight: normal;">My Applications</h2>
	</div>

	<div class="view_jobs">

		<table class="job">
		<tr>
				<th>Position</th>
				<th style="width: 20%;" >Details</th>
				<th style="width: 20%;">Status</th>
			</tr>';

$query=mysqli_query($connection,$sql);
    while($row = $query-> fetch_assoc()){
        echo'<tr>
        				<td>'.$row["position"].'</td>
        				<td>
        					<button class="view_btn"><a style="text-decoration: none; color: black;" href="/fashion/pages/applicant/job_view.php">View</a></button>
        				</td>
        				<td>'.$row["status"].'</td>
        				
        			</tr>';
    }

    echo'</table>
		
	</div>

</div>';

 ?>

 <?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>