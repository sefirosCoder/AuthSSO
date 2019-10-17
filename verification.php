<?php
	$dbname='base';
	$mytable ="users";
	$db=new SQLite3($dbname); 	
	//var_dump($db);
	if(!class_exists('SQLite3'))
	  die("SQLite 3 NOT supported.");

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	
	$presence = $db->query("SELECT count(*) as c FROM $mytable where user = '$username'") -> fetchArray();
	
	$presence = $presence['c'];
	
	if ($presence) {
		$mdpBon = $db->query("SELECT count(*) as c FROM $mytable where user = '$username' and mdp = '$password'") -> fetchArray();
		$mdpBon = $mdpBon['c'];
		if ($mdpBon) {
			var_dump(setcookie('pseudo', $username, time() + 20));
			
			echo "<script>alert('Connected')</script>";
			
		} else {
			echo "<script>alert('Bad Password')</script>";
		}
	} else {
		echo "<script>alert('User not exist')</script>";
	}
	