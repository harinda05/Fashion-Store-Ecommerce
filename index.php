<!DOCTYPE html>
<html>
<head>
	<title>Prince Fashions</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>

	<!-- Header -->
	<?php
	session_start();
	if (isset($_SESSION['nID'])){

		if ($_SESSION["role"] == 'user' ){
		require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/header_logged.php');}

		if ($_SESSION["role"] == 'client' ){
		require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');}
	

	if ($_SESSION["role"] == 'admin' ){
		require($_SERVER['DOCUMENT_ROOT'] . '/fashion/admin_header.php');
	} 
}
	else{
		include 'header.php';
	}
	?>

	<!-- /Header -->

	<!-- Slide Image -->
	<div class="slide">
		<div class="search_bar">

			<form  method="get" action="results.php" enctype="multipart/form-data" >
				<input class="search_form" type="search" name="user_query" placeholder="Job title or keywords" required="" autocomplete="off">
				<button type="submit" name="search" class="search_button">Find Job</button>
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
				<button class="dept_btn" onclick="location.href='/fashion/pages/view_jobs?dept_id=1'">Finance Department</button>
			</div>
			<div class="dept2">
				<button class="dept_btn" onclick="location.href='/fashion/pages/view_jobs?dept_id=2'">Human Resource Department</button>
			</div>
			<div class="dept3">
				<button class="dept_btn" onclick="location.href='/fashion/pages/view_jobs?dept_id=3'">Marketing Department</button>
			</div>
			<div class="dept4">
				<button class="dept_btn" onclick="location.href='/fashion/pages/view_jobs?dept_id=4'">IT Department</button>
			</div>
			<div class="dept5">
				<button class="dept_btn" onclick="location.href='/fashion/pages/view_jobs?dept_id=5'">Production Department</button>
			</div>
			
		</div>

	</div>
	<!-- /Body -->

	<!-- Footer -->
	<?php include 'footer.php';
	 ?>

	<!-- /Footer -->
</body>
</html>