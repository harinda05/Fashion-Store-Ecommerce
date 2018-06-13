<?php
session_start();
if (isset($_SESSION['nID']))

		{
		
		   header('location:/fashion'); }


else{
	echo '<html>
	<head>
		<title>Prince Fashions</title>
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="stylesheet" type="text/css" href="../../css/styles.css">
	
	</head>
	<body>';

	require($_SERVER['DOCUMENT_ROOT'] . '/fashion/header.php');

	echo '<div class="main_body">
		<form method="Post" action="/fashion/php/login_f.php">
		<div class="form1">
			<h1>Log In</h1>
			<hr style="border: 1.5px solid #00204A; margin-bottom: 30px; width: 50%;">

			<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" required>

    		<br>

    		<label for="password"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>

			<input type="submit" value="Log In">

			</form>
		</div>
	</div>';

	require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');

	echo '</body>
	</html>';
}










	

