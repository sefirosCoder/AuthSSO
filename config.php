



<?php
session_start();
	if(isset($_POST['projet'])){
		$user=strip_tags($_POST['user']); //Recupération des variables de formulaire dans php
		$password=$_POST['password'];
           $con=mysqli_connect("localhost","root","","projetann");
		//require"index.html";
		$query=mysqli_query($con, "SELECT * from premiertravail where name ='$user' and  password='$password'"); // Mysql quesry pour executer la requete 
		$row=mysqli_fetch_assoc($query);
		if($user===$row['name'] and $password===$row['password']){
			$_SESSION['name']="Vous etes connectes ";
			echo $_SESSION['name'];
			
		}
		else{
			echo "<script>alert('User ou mot de passe Incorrect');</script>" ;
		}


	}

?>