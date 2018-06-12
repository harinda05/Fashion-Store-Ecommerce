<?php
	
	
	require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');

  	$app_id = $_GET['app_id'];
  	$position = $_GET['position'];

    require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/dbcon.php');

    /*Update Status */
    $query = "UPDATE application SET status='In Review' where app_id=$app_id";
    mysqli_query($connection,$query);

    $sql = "SELECT * FROM application WHERE app_id=$app_id";
    $result=mysqli_query($connection,$sql);
 
    if($result){
    	while($row = $result -> fetch_assoc()){

    		
    		$work_array = (unserialize(base64_decode($row['work_experience'])));
    		
    		$prof_array = (unserialize(base64_decode($row['prof_q'])));
    		
 
    		$img_array = (unserialize(base64_decode($row['img'])));
    		
    		echo '<div class="container">
	
	<div class="detailed_app">

	<div class="detailed_app_heading">
		<h2>Application Form</h2>
		<h3>Job Position : '.$position.'</h3>
	</div>

	<div class="detailed_app_content">

		<ol>
			<li>Full Name :'.$row['name'].' </li>
			<li>Date of Birth :'.$row['dob'].' </li>
			<li>Address :'.$row['address'].' </li>
			<li>Contact numbers:'.$row['contactno'].'
			</li>
			<li>Email Address :'.$row['email'].' </li>


			<li>Higher Education Qualification:'.$row["education"].'</li>



			<li>Professional Qualifications
				<table class="app_tbl">
					<tr>
						<th>Year</th>
						<th>Qualification</th>
						<th>Institute</th>
					</tr>';


			//for ($x = 1; $x <= sizeof($prof_array); $x++){
			
			foreach($prof_array as $y => $value) {


			
					echo'<tr>
						<td>'.$value[0].'</td>
						<td>'.$value[1].'</td>
						<td>'.$value[2].'</td>
					</tr>';
					}

				echo'</table>
			</li>

			<li>Work Experience
				<table class="app_tbl">
					<tr>
						<th>Post</th>
						<th>Duration</th>
						<th>Institute</th>
					</tr>';

			foreach($work_array as $z => $res) {
					echo'<tr>
						<td>'.$res[0].'</td>
						<td>'.$res[1].'</td>
						<td>'.$res[2].'</td>
					</tr>';}
			echo'</table>
			</li>

			<li>Curriculum Vitae (CV) : 

			<a href="/fashion/images/application/cv/'.$row['cv'].'" download>
  				<label> Download CV </label>
			</a>

			</li>
			<li>Scanned Images : </li>';
			foreach($img_array as $a => $resp) {
				echo'<a href="/fashion/images/application/images/'.$resp.'" download>
  				<label> Download Image'.$a.' </label> <br>
			</a>';
			}
		echo'</ol>
		
	</div>

	</div>


</div>';

    	}}
?>






















<?php include '../../footer.php';  ?>