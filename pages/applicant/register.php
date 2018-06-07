<!DOCTYPE html>
<html>
<head>
	<title>Prince Fashions</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../../css/styles.css">

</head>
<body>

	<!-- header -->
	<?php include '../../header.php'; ?>

	<!-- body -->
	<div class="main_body">
		<div class="form">
			<h1>Registration</h1>
			<hr style="border: 1.5px solid #00204A; margin-bottom: 30px; width: 50%;">

			<label for="username"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="email" required>

    		<br>
			<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" required>

    		<br>

    		<label for="password"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>
			
			<button type="button">Register</button>
		</div>
	</div>





	<?php include '../../footer.php' ?>

</body>
</html>