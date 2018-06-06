<html>
<body>
<div class="containerf">

	<form class="add" method="POST" action="../../php/add_job.php" enctype="multipart/form-data">

				<h2>Add New Job Posting</h2><br>
	<div>
	<input type="text" placeholder="Title" name="title" id ="title"/> </div>

	<div>
	<input type="text" placeholder="Description" name="desc" id ="desc"/></div>

     <div id="post_date" hidden>
          <input type="text" name="post_date" value="<?php echo date('Y-m-d')?>" />
     </div>

     <div>
      <label>Closing Date: </label>
  <input type="date" placeholder="contact no" name="cls_date" id ="cls_date"/> </div>

     

     <div>
          <label>Attach Image: </label>
          <input  type="file" name="job_img">
     </div>
     
	<div>
	<input type="submit" value="submit" /> 
	<input type="submit" value="Cancel"/></div>

			

	</form>
		</div>


	
 


</body>

</html>