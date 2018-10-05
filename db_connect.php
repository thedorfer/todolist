<?php

function mysqlInfo(){
	//Edit values to match mysql server info
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pw = '';
	
	$dbinfo = array($mysql_host, $mysql_user, $mysql_pw);
	return($dbinfo);
}

function db(){
	
	$dbinfo = mysqlInfo();
	
	$mysql_host = $dbinfo[0];
	$mysql_user = $dbinfo[1];
	$mysql_pw = $dbinfo[2];
	
	$mysql_db = 'todolist';
	
	global $link;
	
    $link = mysqli_connect($mysql_host, $mysql_user, $mysql_pw, $mysql_db) or die('connection failed');
	
	return $link;
}

function initDB(){
	
	$dbinfo = mysqlInfo();
	
	$mysql_host = $dbinfo[0];
	$mysql_user = $dbinfo[1];
	$mysql_pw = $dbinfo[2];
	
	// Create connection
	$link = new mysqli($mysql_host, $mysql_user, $mysql_pw);
	// Check connection
	if ($link->connect_error) {
		die("Connection failed: " . $link->connect_error);
	}

	// Create database
	$query = "CREATE DATABASE todolist";
	if ($link->query($query) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $link->error;
	}

	$query = "CREATE TABLE `todolist`.`todos` ( `id` INT NOT NULL AUTO_INCREMENT , `todoDescription` TEXT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`id`));";
	if ($link->query($query) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $link->error;
	}

	mysqli_close($link);	
}

?>