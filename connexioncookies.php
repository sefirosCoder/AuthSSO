<?php 	
	if(isset($_COOKIE["pseudo"])) {
		echo "Connecté par cookie\n";
	} else {
		echo "Cookie expiré\n";
	}

	
?>