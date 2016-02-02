<?php
	
	session_start();
	require 'fonction.php';
	$bdd= connect();

?>

<!doctype html>
<html lang="fr" class="no-js">
	<head>
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="site.css">
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
			<li><a href="categorie.php">Categorie</a></li>
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

			<?php 

				$voir = $_SESSION['voir'];

				foreach ($voir as $id => $quantite) {

					try{

                      $req = $bdd -> prepare("SELECT * FROM produit where id_Produit=:id_Produit");
                      $req -> bindParam('id_Produit', $id, PDO::PARAM_INT);
                      $req -> execute();

                      while ($produit = $req ->fetch(PDO::FETCH_OBJ))
                      {

                      	echo "<div class='bordero'><p><i><a href='accueil.php'>accueil</a></i> > <i>$produit->nomProd</i></p></div>";
                      	echo "<hr class='h'>";
                      	echo "<div class='fiche'>
                      			<div class='M'>
                      				<h1>".$produit->nomProd ."-". $produit->Marque ."</h1>
                      			</div><hr>
                      	 		<div class='I'>
                      	 			<img src='upload/$produit->image' class='image img-rounded'/>
                      	 		</div>
                      	 		<div class='P'>
                					<div class='pp'>
                      	 				<h3>Prix : ". $produit->prix ." $</h3>
                      	 			</div>
                      	 			<div class='boubou'>
                      	 				<button type='button' class='btn btn-danger bou' name='panier'><a href='Fonction_ajout_panier.php?ajout=".$produit->id_Produit."'>Ajouter au panier</a></button>
                      	 			</div>
                      	 		</div><hr class='hh'>
                      	 		<div class='D'><br> Description : <br>". $produit->Description."</div>
                      	 		<div class='blanc'></div>
                      	 	</div>";

                      }

                 	}

                 	catch(PDOException $e){

                        echo "erreur dans la requète " . $e->getMessage();
                  	}
				
				}

			?>

			

		</main>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/main.js"></script> <!-- Gem jQuery -->
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/npm.js"></script>
	
	</body>

</html>

<?php

	session_destroy();

?>