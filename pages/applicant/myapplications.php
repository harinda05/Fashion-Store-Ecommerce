<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

$u_id = $_SESSION['u_id'];

$sql = "SELECT * FROM application INNER JOIN jobs ON application.job_id=jobs.job_id where application.u_id = $u_id";


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
var_dump($sql);
$query=mysqli_query($connection,$sql);
	if($query){
    while($row = $query-> fetch_assoc()){
        echo'<tr>
        				<td>'.$row["position"].'</td>
        				<td>
        					<button class="view_btn"><a style="text-decoration: none; color: black;" href="/fashion/pages/job_description.php?job_id='.$row["job_id"].'">View</a></button>
        				</td>
        				<td>'.$row["status"].'</td>
        				
        			</tr>';
    }}

    elseif(!$query || mysqli_num_rows($query)==0) {
    	echo'<tr><td> You do not have any current applications</td></tr>';
    }

    echo'</table>
		
	</div>

</div>';

 ?>

 <?php  require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>