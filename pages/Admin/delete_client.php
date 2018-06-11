<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
include '../../admin_header.php';
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

	echo'<div class="container">

	<div class="delete_client">

		<div class="delete_client_heading">
			<h2 style="font-weight: normal; font-size: 25px;">Delete Department Users</h2>
		</div>

		<div class="delete_client_content">
		<table class="job">
			<tr>
				<th style="width: 20%;">Department</th>
				<th style="width: 20%;" >Username</th>
				<th style="width: 10%;">Action</th>
			</tr>';

$sql="SELECT * FROM user INNER JOIN client_department ON user.u_id=client_department.u_id where role='client'";
$result=mysqli_query($connection,$sql);
    if($result){
    	while($row = $result -> fetch_assoc()){
    		
    	
    		$get_dept = "SELECT department from department where dept_id=".$row["dept_id"]."";
    		$query=mysqli_query($connection,$get_dept);
    		while($row2 = $query -> fetch_assoc()){

   
			echo'<tr>
				<td style="text-transform: uppercase;">'.$row2["department"].'</td>
				<td>'.$row["username"].'</td>
				<td>
				<button class="deletebtn"><a style="text-decoration: none; color: black;" href="/fashion/php/deleteu.php?u_id='.$row["u_id"].'">Delete</a></button>

				</td>
			</tr>';
			}}}

		echo'</table>
		</div>

	</div>
	
</div>';

  ?>



<?php include '../../footer.php';  ?>