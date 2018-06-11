<?php include '../../admin_header.php';  ?>

<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
if ($_SESSION["role"] == 'admin' ){

echo '

<div class="containerf">

	<div class="delete_client">

	<form class="add" method="POST" action="add_clientf.php">

		<div class="delete_client_heading">
			<h2 style="font-weight: normal; font-size: 25px;">Add Department Users</h2>
		</div>
	
		<div class="dep_app_content">

			<div>
				<input type="text" placeholder="Username" name="username" />
			</div>

			<div>
				<input type="text" placeholder="Password" name="password" />
			</div>

			<div>
				<input type="email" placeholder="Email" name="email"/>
			</div>

			<div>
		    	<label> Department </label>
			     	<select id="form-control"  name="department">
				        <option value="1" >Finance</option>
				        <option value="2">HR</option>
				        <option value="3">Marketing</option>
				        <option value="4">IT</option>
				        <option value="5">Production</option>
		      		</select>
		    </div>

		    <br>

			<div id="post_date" hidden>
		        <input type="text" name="role" value="Client" />

		    </div>
		   
		     
			<div style="padding-left: 37%;">
				<input style="background-color:#4CAF50;" type="submit" value="Submit" /> 
				<input style="background-color: #f44336;" type="submit" value="Cancel"/>
			</div>

		</div>
			
	</form>

	</div>

</div>


'; }


else {
	echo 'ACCCESS DENIED';
}


?>

<?php include '../../footer.php';  ?>