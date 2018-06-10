<?php

session_start();
		if (!isset($_SESSION['nID']))

		{
		    header('Location:/fashion/login.php');

		}
?>