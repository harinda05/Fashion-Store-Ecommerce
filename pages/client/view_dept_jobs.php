
<?php 
	require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');

  	$u_id = $_SESSION['u_id'];

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    echo '<div class="container">

	<div class="dept_app">
		<div class="dept_app_heading">
			<h2 style="font-weight: normal; font-size: 25px;">View Jobs</h2>
		</div>

		<div class="view_job_tbl">
			
			<table class="job">
			<tr>
				<th>Job Position</th>
				<th style="width: 20%;">Closing Date</th>
				<th style="width: 20%;" >Job Applications</th>
			</tr>';

   $sql = "SELECT * FROM jobs WHERE u_id=$u_id";
   $result=mysqli_query($connection,$sql);

   if(mysqli_num_rows($result)>0){
   	while($row = $result -> fetch_assoc()){
   		echo'
   			<tr>

				<td>'.$row["position"].'</td>
				<td>'.$row["closing_date"].'</td>
				<td>
					<button class="view_btn"><a style="text-decoration: none; color: black;" href="/fashion/pages/client/view_dept_app.php?job_id='.$row["job_id"].'&position='.$row["position"].'">View</a></button>
				</td>
   		';
   	}
   }
var_dump($row["job_id"]);
   echo'</table>

		</div>
		
	</div>
</div>';

?>

<? require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php'); ?>























