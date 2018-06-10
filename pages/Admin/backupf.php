<?php

session_start();
$DB_SERVER="localhost";
$DBUSER="root";
$DBPASSWD="";
$DATABASE="prince_fashion";

$filename = "backup-" . date("d-m-Y") . ".sql";



$command = "C:/xampp/mysql/bin/mysqldump --opt --host=".$DB_SERVER." --user=".$DBUSER." --pass=".$DBPASSWD." ".$DATABASE." > ".$filename; 

$result = system($command);
var_dump($result);


echo "<script language='javascript'>
                  window.alert('Backup Successful');
                  window.location.href='/fashion/pages/Admin/dashboard.php';
                 </script> ";



/*C:/xampp/mysql/bin/mysqldump*/




?>