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

	

		<form method="GET">


			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
			  	<ol class="carousel-indicators">
			    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  	</ol>

			  	<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
			    	<div class="item active">
			      		<img src="img/imageslide2.png" alt="...">
			    	</div>
			    	<div class="item">
			      		<img src="img/imageslide2.png" alt="...">
			    	</div>
			  	</div>

			  	<!-- Controls -->
			  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
			  	</a>

			</div>
		

			<div class="N">
				<img src="img/notreselection.png" class='nn'>
			</div>


			<div class="contenu">
					<?php
					require_once 'fonction.php';
					$bdd = connect();


					try{


							$req0 = 'select count(id_Produit) as nbArt from produit';
							$resultat1 = $bdd->query($req0);
							while ($produit = $resultat1 ->fetch(PDO::FETCH_OBJ))
							{

								$nbArticle = $produit->nbArt;
								$perPage = 9;
								$nbPage = ceil($nbArticle/$perPage);

								if (isset($_GET['p']) && $_GET['p'] > 0 && $_GET['p'] <= $nbPage){

										$cPage = $_GET['p'];
								}
								else{

										$cPage = 1;
								}


								$req = 'select * from produit LIMIT '.(($cPage-1) * 9).',9';
								$resultat = $bdd->query($req);

								while ($produit = $resultat ->fetch(PDO::FETCH_OBJ))
								{

							 	echo "<div class='produit3'><img src='upload/$produit->image' class='image img-rounded'/><div class='produit'><div class='produit1'>". $produit->nomProd . "</div><div class='produit2'>".$produit->prix." €</div></div><div class='espace'><button name='voir' class='vp'><a href='Fonction_fiche_produit.php?produit=".$produit->id_Produit."'>Voir plus</a></button><hr></div></div>" ;

								}


							}
					
							echo "<div class='paginat'>
								<nav>
										<ul class='pagination'>
											<li>
														
												<a href='' aria-label='Previous'>
        											<span aria-hidden='true'>&laquo;</span>
      											</a>
      										</li>";

							for ($i = 1 ; $i <= $nbPage ; $i++){

									
									echo "<li>
												<a href=\"accueil.php?p=$i\">$i</a> 
										  </li>";

									
							}

							echo "		<li>
      										<a href='' aria-label='Next'>
        										<span aria-hidden='true'>&raquo;</span>
      										</a>
    									</li>
    								</ul>
    							</nav>
    						</div>";


						}

					catch(PDOException $e){

							echo "erreur dans la requète " . $e->getMessage();

						}

					?>

			<div>

			</form>
	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/holder.js"></script>
<script src="bootstrap/js/npm.js"></script>
<script src="js/docs.min.js"></script>
</body>
</html>