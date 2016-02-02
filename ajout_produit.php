<?php

include_once('Fonction_ajout_produit.php');

?>

<html>

	<head>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="site.css">
	</head>

	<body class="back">

		<div class="panel panel-primary aligne">
						 <div class="panel-heading">Ajouter un produit</div>
								<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" class="form-horizontal" enctype="multipart/form-data">
								<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">id du Produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Id du produit" name="id_Prod">
				 				</div>
				 				<br>
								<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">Nom du Produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Nom du produit" name="nomProd">
				 				</div>
				 				<br>
				 				<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">Marque du produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Marque du produit" name="marqueProd">
				 				</div>
			    				<br>
			    				<div class="aligne1">
				 				<label for="exampleInputName2 aligne1">Type de produit</label>
				 				<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Type de produit" name="type">
				 				</div>
				 				<br>
			    				<br>
			    				<div class="aligne1">
				    			<label for="exampleInputFile">L'image du produit</label>
				    			<input type="hidden" name="MAX_FILE_SIZE" value="100000">
    							<input type="file" name="avatar">
				 				</div>
				 				<br>
				 				<div class="aligne1">
				 				<label for="exampleInputName2 aligne1">Description du produit</label>
				 				<textarea class="form-control texteara" rows="5" name="descriptionProd"></textarea>
			    				</div>
			    				<br>
			    				<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">Prix du produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Prix du produit" name="prixProd">
				 				</div>
			    				<br>
				 				<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">couleur du Produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Couleur du produit" name="couleur">
				 				</div>
				 				<br>
				 				<div class="aligne1">
				    			<label for="exampleInputName2 aligne1">taille du Produit</label>
				 	   			<input type="text" class="form-control yiyi" id="exampleInputName2" placeholder="Nom du produit" name="taille">
				 				</div>
				 				<br>
			    				<div class="aligne4">
				  				<button type="submit" class="btn btn-primary" name="Ajouter">Ajouter</button> <button type="reset" class="btn btn-danger">R&eacuteinitialiser</button>
				  				</div>
				  				</form>
				  		</div>

	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 

	</body>



</html>
