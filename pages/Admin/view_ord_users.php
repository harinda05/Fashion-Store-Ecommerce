<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
include '../../admin_header.php';
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

	echo'<div class="container">

	<div class="delete_client">

		<div class="delete_client_heading">
			<h2 style="font-weight: normal; font-size: 25px;">View Applicant Users</h2>
		</div>

		<div class="delete_client_content">
		<table class="job">
			<tr>
				
				<th style="width: 20%;" >Username</th>
				<th style="width: 20%;">Email</th>
				<th style="width: 10%;">Action</th>
			</tr>';

$sql="SELECT * FROM user INNER JOIN client_department ON user.u_id=client_department.u_id where role='user'";
$result=mysqli_query($connection,$sql);
    if($result){
    	while($row = $result -> fetch_assoc()){
    	
			echo'<tr>
				<td>'.$row["username"].'</td>
				<td>'.$row["email"].'</td>
				<td>
				<button class="deletebtn"><a style="text-decoration: none; color: black;" href="/fashion/php/deleteu.php?u_id='.$row["u_id"].'">Delete</a></button>

				</td>
			</tr>';
			}}

		echo'</table>
		</div>

	</div>
	
</div>';

  ?>



<?php include '../../footer.php';  ?>