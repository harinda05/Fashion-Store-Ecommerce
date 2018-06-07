<?php

session_start();
		if (!isset($_SESSION['nID']))

		{
		    header('Location:/fashion/pages/login.php');

		}
?>