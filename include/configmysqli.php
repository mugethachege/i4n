<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'hunsy';
$db_database	= 'vfms';

/* End config */



$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die('Unable to establish a DB connection');

//mysql_select_db($db_database,$link);
//mysqli_query("SET names UTF8");

?>