<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/fashion/header.php');

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
$id = $_SESSION['u_id'];

var_dump($id);
 ?>