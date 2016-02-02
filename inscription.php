<?php

include_once('Fonction_inscription.php');

?>

<!doctype html>
<html lang="fr" class="no-js">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="site.css">
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
			<li><a href="connexion.php">Connexion</a></li>
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
		<div class="panel panel-primary aligne7">
				<div class="panel-heading">Inscription</div>
						<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" class="form-horizontal">
								<div class="aligne1">
					    			<label for="exampleInputName2 aligne1">Nom</label>
					 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Nom" name="NM">
					 			</div>
					 			<br>
					 			<div class="aligne2">
					    			<label for="exampleInputName2">Pr&eacutenom</label>
					    			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Prenom" name="PR">
					  			</div>
					  			<br>
					  			<div class="aligne3">
					    			<label for="exampleInputName2">Pseudo</label>
					    			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Pseudo" name="Pseudo">
								</div>
								<br>
								<div class="aligne3">
					    			<label for="exampleInputName2">Adresse</label>
					    			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Adresse" name="Adresse">
								</div>
								<br>
								<div class="aligne3">
					    			<label for="exampleInputName2">Code Postal</label>
					    			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="code postale" name="cp">
								</div>
								<br>
								<div class="aligne3"> 			
					    			<label for="exampleInputEmail2">Email</label>
					    			<input type="email" class="form-control yiyi" id="exampleInputEmail2" placeholder="votreemail@example.com" name="MAIL">
					  			</div>
					  			<br>
					  			<div class="aligne3">
					    			<label for="exampleInputEmail2">Confirmation Email</label>
					    			<input type="email" class="form-control yiyi" id="exampleInputEmail2" placeholder="votreemail@example.com" name="ConfirmEmail">
					  			</div>
					  			<br>
					  			<div class="aligne3">
				    				<label for="exampleInputEmail2">Mot de passe</label>
				    				<input type="password" class="form-control yiyi" id="exampleInputPassword3" placeholder="Password" name="Motdepasse">
				    			</div>
				    			<br>
				    			<div class="aligne3">
				    				<label for="exampleInputEmail2">Confirmation Mot de Passe</label>
				    				<input type="password" class="form-control yiyi" id="exampleInputPassword3" placeholder="Password" name="Confirmmdp">
				    			</div>
				    			<br>
				    			<div class="aligne4">
					  				<button type="submit" class="btn btn-primary" name="inscription">Inscription</button> <button type="reset" class="btn btn-danger">R&eacuteinisialiser</button>
					  			</div>
				  		</form>
				</div>
			</main>
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
	  		<div class="co"><p><a href="connexion.php">Connexion</a></p><div>

	  		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<script src="js/main.js"></script> <!-- Gem jQuery -->
			<script src="js/bootstrap.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/npm.js"></script>

	</body>

</html>

