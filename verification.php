<?php
	$dbname='base';
	$mytable ="users";
	$db=new SQLite3($dbname); 	
	var_dump($db);
	if(!class_exists('SQLite3'))
	  die("SQLite 3 NOT supported.");

	$username = $_POST['username'];
	$query = "SELECT user FROM $mytable ";
	$results = $db->exec($query);

	// listage des tables dans un array() :
$tables = sqlite_single_query($db, "SELECT name FROM sqlite_master WHERE type='table'");
	
	
	
	/*if (isset($results)) {
		
		$_POST['username']
		$_POST['password']
	}*/
	