<?php


define('HOST', 'localhost'); 
define('DBUSER','root'); 
define('PASSWORD', '');
define('DB','prince_fashion');



$connection = mysqli_connect(HOST,DBUSER,PASSWORD,DB);

if(!$connection){
	die('DB Error'.mysqli_error());
}


?>
