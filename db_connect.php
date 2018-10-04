<?php

function db(){
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pw = '';
	$mysql_db = 'todolist';
	
	global $link;
	
    $link = mysqli_connect($mysql_host, $mysql_user, $mysql_pw, $mysql_db) or die('connection failed');
	
	return $link;
}

?>