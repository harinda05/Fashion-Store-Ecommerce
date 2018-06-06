<!DOCTYPE html>
<html>
<head>
	<title>Prince Fashions</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="assests/styles.css">

</head>
<body>

	<!-- Header -->
	<?php include 'header.php' ?>

	<!-- /Header -->

	<!-- Slide Image -->
	<div class="slide">
		<div class="search_bar">
			<form  method="get" action="#" enctype="multipart/form-data" >
				<input class="search_form" type="search" name="#" placeholder="Job title or keywords" required="">
				<button class="search_button">Find Job</button>
			</form>
		</div>
		
	</div>
	<!-- /Sldie Image -->

	<!-- Body -->
	<div class="main_body">

		<!-- dept -->
		<div class="dept_main">
			<div id="dept_title">
				<h1>Find your job at any Department</h1>
			</div>
			<div class="dept1">
				<button class="dept_btn">Finance Department</button>
			</div>
			<div class="dept2">
				<button class="dept_btn">Human Resource Department</button>
			</div>
			<div class="dept3">
				<button class="dept_btn">Marketing Department</button>
			</div>
			<div class="dept4">
				<button class="dept_btn">IT Department</button>
			</div>
			<div class="dept5">
				<button class="dept_btn">Production Department</button>
			</div>
			
		</div>

	</div>
	<!-- /Body -->

	<!-- Footer -->
	<?php include 'footer.php' ?>

	<!-- /Footer -->
</body>
</html>