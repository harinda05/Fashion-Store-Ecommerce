<?php


?>

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
		<form method='Post' action='../../php/login_f.php'>
		<div class="form">
			<h1>Log In</h1>
			<hr style="border: 1.5px solid #00204A; margin-bottom: 30px; width: 50%;">

			<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" required>

    		<br>

    		<label for="password"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>
			
			<p style="text-align: center;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>

			<input type='submit' value='Log In'>

			</form>
		</div>
	</div>





	<?php include '../../footer.php' ?>

</body>
</html>