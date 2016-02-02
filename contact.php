<?php
session_start();
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
			<li><a href="panier.php">Panier</a></li>
		</ul>
	</nav>


		<div class="panel panel-primary aligne6">
			<div class="panel-heading">Besoin d'aide, contactez-nous :</div>
				<form method="POST" class="form-horizontal" action="mailto:mike.ticquantlousin@gmail.com" enctype="text/plain">
					<br />
					<div class="aligne5">
				    	<label for="exampleInputName2">Pseudo</label>
				    	<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Pseudo" name="pseudo">
					</div>
					<br />
					<div class="aligne5">
			    		<label for="exampleInputEmail2">Email</label>
			    		<input type="text" class="form-control yiyi" id="exampleInputEmail2" placeholder="Email" name="email">
			    	</div>
			    	<br />
			    	<div class="aligne5">
			    		<label for="exampleInputCommentaire">Commentaire</label>
			    		<textarea name="commentaire" rows="10" cols="40"></textarea>
			    	</div>
			    	<br />
			    	<div class="aligne4">
				  		<button type="submit" name="envoyer" class="btn btn-primary">Envoyer</button> <button type="submit" class="btn btn-danger">Annuler</button>
				  	</div>

				</form>
		</div>

			<br /> <br />


		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/main.js"></script> <!-- Gem jQuery -->
		<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/npm.js"></script>

	</body>

</html>