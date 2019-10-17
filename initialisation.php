<?php
//initialisation pour créer les tables
	$dbname='base';
	$mytable = "users";

	if(!class_exists('SQLite3'))
	  die("SQLite 3 NOT supported.");

	$db=new SQLite3($dbname); 		
	$query = "CREATE TABLE $mytable(
				user varchar(20) NOT NULL PRIMARY KEY,            
				mdp varchar(30) NOT NULL  
				)";
				
	$results = $db->exec($query);
	
	
	$query = "INSERT INTO $mytable VALUES ('utilisateur', 'univrouen')";
	$results = $db->exec($query);
	var_dump($db);