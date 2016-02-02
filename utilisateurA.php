<?php

	include_once('Fonction_utilisateurA.php');

?>
<html>


	<head>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="site.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta charset="UTF-8">
	</head>

	<body>
			

		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
		<table class="table">
 		
			<tr>
			<td>Nom</td><td>Prenom</td><td>Pseudo</td><td>Adresse</td><td>Code Postal</td><td>Mot de passe</td><td>Mail</td>
			<tr>

			<?php
			require_once 'fonction.php';
			$bdd = connect();


			try{
					$req = "select * from utilisateur";
					$resultat = $bdd->query($req);

					while ($utilisateur = $resultat ->fetch(PDO::FETCH_OBJ))
					{

					 echo "<tr><td name='asup'>".$utilisateur->nom."</td><td>".$utilisateur->prenom."</td><td>".$utilisateur->pseudo."</td><td>".$utilisateur->adresse."</td><td>".$utilisateur->cp."</td><td>".$utilisateur->mot_de_passe."</td><td>".$utilisateur->mail."</td><td><input type='submit' class='btn btn-danger' value='sup' name='supp'><input type='submit' class='btn btn-warning' value='modif' name='modiff'></td></tr>";

					
					}

					if (isset($_POST['supp'])) {
					
					 		$nom = $utilisateur->nom ;
							$req1 = " DELETE From utilisateur where nom = '$nom'";
							$resultat = $bdd->query($req1);
					}

				}
			catch(PDOException $e){

					echo "erreur dans la requète " . $e->getMessage();

				}
	

			?>

		</table>
		</form>

	</body>

</html>