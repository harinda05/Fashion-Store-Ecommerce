<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

if ($_SESSION["role"] == 'client' ){

	echo '

<div class="client_dash_head">
	<h1>Welcome to</h1>
	<h1>Finance Department</h1>
	<h1>Dashboard</h1>
</div>';
}

else{
	echo 'access denied';
}

?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');  ?>
