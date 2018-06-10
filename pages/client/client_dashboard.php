<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/client_header.php');
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');

if ($_SESSION["role"] == 'client' ){

	echo '

<div class="main_body">

	<div class="admin_dash">
		<button class="button button_chg"><a href="/fashion/pages/client/job.php">Post Jobs</a></button>
		<button class="button button_chg"><a href="/fashion/pages/client/view_dept_jobs.php"View Jobs</a></button>
	</div>
	
</div>';
}

else{
	echo 'Access Denied';
}

?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/fashion/footer.php');  ?>
