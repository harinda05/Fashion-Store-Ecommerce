<?php
$DB_SERVER="localhost";
$DBUSER="root";
$DBPASSWD="";
$DATABASE="prince_fashion";

$filename = "backupsssss-" . date("d-m-Y") . ".sql";



$command = "C:/xampp/mysql/bin/mysqldump --opt --host=".$DB_SERVER." --user=".$DBUSER." --pass=".$DBPASSWD." ".$DATABASE." > ".$filename; 

system($command);

/*C:/xampp/mysql/bin/mysqldump*/




?>