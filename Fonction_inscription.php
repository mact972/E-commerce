<?php


require_once 'fonction.php';
$bdd = connect();



if(isset($_POST['inscription']) && !empty($_POST['Motdepasse']) && !empty($_POST['NM']) && !empty($_POST['PR']) && !empty($_POST['Pseudo']) && !empty($_POST['Adresse']) &&  !empty($_POST['cp']) && !empty($_POST['MAIL']) && !empty($_POST['ConfirmEmail']) && !empty($_POST['Confirmmdp']))
{

	if( $_POST['MAIL'] != $_POST['ConfirmEmail'])
	{

		echo "<div class='alert alert-danger' role='alert'>
  				<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  				<span class='sr-only'>Error:</span>
  				Entrer une email valide
			  </div>";

			  if ( $_POST['Motdepasse'] != $_POST['Confirmmdp']) {
	
					echo "<div class='alert alert-danger' role='alert'>
  							<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  							<span class='sr-only'>Error:</span>
  							Entrer un mot de passe valide
			  			  </div>";

				}

	}
	else{ 

	$mdp = htmlspecialchars(trim($_POST['Motdepasse']));
	$mdpp = md5($mdp);
	$nm = htmlspecialchars(trim($_POST['NM']));
	$pr = htmlspecialchars(trim($_POST['PR']));
	$ps = htmlspecialchars(trim($_POST['Pseudo']));
	$mail = htmlspecialchars(trim($_POST['MAIL']));
	$adr = htmlspecialchars(trim($_POST['Adresse']));
	$cdp = htmlspecialchars(trim($_POST['cp']));


	$req1 = "INSERT INTO utilisateur values('', '$nm', '$pr', '$ps', '$adr', '$cdp', '$mdpp', '$mail')";
	$resultat = $bdd->query($req1);
	echo "<div class='alert alert-success' role='alert'>Inscription reussie</div>";
	}

}

else {


	header('inscription.php');

}

?>