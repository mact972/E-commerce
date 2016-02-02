<?php
session_start();
?>
<!doctype html>
<html lang="fr" class="no-js">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.map">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css.map">
		<link rel="stylesheet" href="site.css">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
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

			<div class='bordero'><p><i><a href="accueil.php">Accueil</a></i> > <a href="categorie.php">Catégorie</a></p></div>
            <hr class='h'>
            
            <div class="cat">
	            <div id="bob">
	            	<a href="bonnets.php">
	            	<img src="img/gradur-l-homme-au-bob3.jpg" class="imgbob">
	            	<div class="textbob"><span>Nos Bob</span></div>
	            	</a>
	            </div>
	            
	            <div id="snap">
	            	<a href="casquettes.php">
	            	<img src="img/snap.jpeg" class="imgsnap">
	            	<div class="imgfit"><span>Casquette Snapback</span></div>
	            	</a>
	            </div>
	            
	            <div id="fitted">
	            	<a href="fitted.php">
	            	<img src="img/homme_casquette.jpg">
	            	<div class="imgfit"><span>Casquette Fitted</span></div>
	            	</a>
	            </div>
        	</div>

        </main>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/main.js"></script> <!-- Gem jQuery -->
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/npm.js"></script>
		<script src="js/docs.min.js"></script>

    </body>

</html>