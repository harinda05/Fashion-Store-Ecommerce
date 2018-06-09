<?php include '../../client_header.php';  ?>

<div class="container">

	<div class="dept_app">

		<div class="dept_app_heading">
			<h2 style="font-weight: normal; font-size: 25px; padding: 0px;">Post Jobs</h2>
		</div>

		<div class="dep_app_content">

		<form class="add" method="POST" action="../../php/add_job.php" enctype="multipart/form-data">

			<div>
				<input type="text" placeholder="Title" name="title" id ="title"/>
			</div>

			<div>
				<input type="text" placeholder="Job Position" name="position" id ="position"/> 
			</div>

			<div>
				<input type="text" placeholder="Description" name="desc" id ="desc"/>
			</div>

    		<div id="post_date" hidden>
          		<input type="text" name="post_date" value="<?php echo date('Y-m-d')?>" />
    		</div>

    		<div>
      			<label>Closing Date : </label>
				<input type="date" placeholder="contact no" name="cls_date" id ="cls_date"/> 
			</div>

    		<div>
          		<label>Attach Image: </label>
          		<input  type="file" name="job_img">
    		</div>

    		<br>
     
			<div style="padding-left: 37%;">
				<input style="background-color:#4CAF50;" type="submit" value="Submit" /> 
				<input style="background-color: #f44336;" type="submit" value="Cancel"/>
			</div>
			

		</form>

		</div>
	</div>
</div>

<?php include '../../footer.php';  ?>