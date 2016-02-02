<?php

if(isset($_POST['connexion']))
{

$username = htmlspecialchars(trim($_POST['pseudo']));
$password = htmlspecialchars(trim($_POST['pass']));

	if ($username&&$password) 
	{

		$password = md5($password);
		$connect =mysql_connect('localhost','root','');
		mysql_select_db('pmjfinale');
		$log = mysql_query("SELECT * FROM utilisateur WHERE pseudo='$username' AND mot_de_passe='$password'");
		$rows = mysql_num_rows($log);

		if ($rows==1) 
		{
			$_SESSION['username'] = $username;
			header('Location:membre.php');
			
		}else echo "nom dutilisateur ou password incorrect";
	
	}else echo "veuillez saisir tout les champs";

}


?>