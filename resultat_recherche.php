<?php
	
	session_start();

?>

<!doctype html>
<html lang="fr" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="site.css">
	<link rel="stylesheet" href="css/theme.css">
	<link href="css/carousel.css" rel="stylesheet">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

  	
	<title>Snap King</title>
	<link rel="icon" href="img/chapeau-mario--icone-4970-16.png">

</head>
<body class="back">
		<header>

			<div id="logo"><img src="img/halloween-chapeau-icone-7608-64.png" alt="Homepage"></div>
			<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
		
		</header>
		
		<nav id="main-nav">
		<ul>
			<li><a href="accueil.php">Accueil</a></li>
			<li><a href="categorie.php">Catégorie</a></li>
			<li>
					<?php
					if(isset($_SESSION['username']))  
					{

					echo "<span class='us'>".$_SESSION['username']." [<a href='Fonction_deconnexion.php'>Se déconnecter</a>]</span>";

					} else 

					{

					echo"<a href='connexion.php'>Connexion</a>";

					}
					?>
			</li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="panier.php">Panier</a><li>
			<form method="POST" action="resultat_recherche.php">
			<li>	
				<input type="text" class="form-control" placeholder="Rechercher" name="rechercher">
			<li>
			<button type="submit" class="btn btn-warning" name="recherch"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</form>
		</ul>
	</nav>
		

		<main>


			<div class='bordero'><p><i><a href="accueil.php">Accueil</a></i> > <a href="resultat_recherche.php">Rechercher</a></p></div>
            <hr class='h'>

            <div class="contenu">
			<?php

				require 'fonction.php';
				$bdd = connect();

				if (isset($_POST['recherch']))
				{
					$rech = $_POST['rechercher'];

					$req1 = "SELECT DISTINCT * from produit where nomProd LIKE '%$rech%' or Marque LIKE '%$rech%' ORDER BY nomProd";

					$resultat = $bdd->query($req1);

					while ($resu = $resultat ->fetch(PDO::FETCH_OBJ)) {
					 	
					 	echo "<div class='produit3'><img src='upload/$resu->image' class='image img-rounded'/><div class='produit'><div class='produit1'>". $resu->nomProd . "</div><div class='produit2'>".$resu->prix." €</div></div><div class='espace'><button name='voir' class='vp'><a href='Fonction_fiche_produit.php?produit=".$resu->id_Produit."'>Voir plus</a></button><hr></div></div>" ;
					 }
				}


			?>
		</div>

		</main>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/main.js"></script> <!-- Gem jQuery -->
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/holder.js"></script>
		<script src="bootstrap/js/npm.js"></script>
		<script src="js/docs.min.js"></script>
	</body>
</html>