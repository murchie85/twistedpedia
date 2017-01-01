<?php

	####### db config ##########
	$db_username = '2091203_twist';
	$db_password = 'monday85';
	$db_name = '2091203_twist';
	$db_host = 'fdb3.biz.nf';
	####### db config end ##########


$sql_con = mysqli_connect($db_host, $db_username, $db_password,$db_name);

if (!$sql_con){
	
	die('could not connect:  '  . mysql_error());
}

?>