<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'hunsy';
$db_database	= 'vfms';

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>