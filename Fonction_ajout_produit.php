<?php

//connection a la base de donnée
require_once 'fonction.php';
$bdd = connect();


//systeme upload



if(isset($_POST['Ajouter']) && !empty($_POST['nomProd']) && !empty($_POST['marqueProd']) && !empty($_POST['descriptionProd']) && !empty($_POST['prixProd']))
	{
	//nom du dossier ou les fichier seront deposer
	$dossier = 'upload/';
	// recupère le nom du fichier 
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 100000;
	//recupère la taille du fichier
	$taille = filesize($_FILES['avatar']['tmp_name']);
	// tableau avec les extensions des fichiers
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	//cripté le nom du fichier 
	$extension = strrchr($_FILES['avatar']['name'], '.'); 
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
    	$erreur = '<div class="alert alert-danger" role="alert">Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...</div>';
	}
	if($taille>$taille_maxi)
	{
    
    	$erreur = '<div class="alert alert-danger" role="alert">Le fichier est trop gros...</div>';
	}
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
     	//On formate le nom du fichier ici...
    	$fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
    	$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    	if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     	{
        	echo '<div class="alert alert-success" role="alert">Upload effectué avec succès !</div>';
     	}
    	else //Sinon (la fonction renvoie FALSE).
    	{
        	echo '<div class="alert alert-danger" role="alert">Echec de l\'upload !</div>';
     	}
	}
	else
	{
    	echo $erreur;
	}	

	$nomProd = $_POST['nomProd'];
	$marqueProd = $_POST['marqueProd'];
	$descriptionProd = $_POST['descriptionProd'];
	$descriptionProd = addslashes($descriptionProd);
	$prixProd = $_POST['prixProd'];
	$idProduit = $_POST['id_Prod'];
	$type = $_POST['type'];
	$couleur = $_POST['couleur'];
	$taille = $_POST['taille'];


	$req2 = "INSERT INTO produit values('', '$nomProd', '$marqueProd', '$descriptionProd','$fichier', '$prixProd',CURDATE(),'','','')";
	$resultat2 = $bdd->query($req2);
	$req3 = "INSERT INTO contenu values('', '$idProduit', '$type', '$couleur', '$taille')";
	$resultat3 = $bdd->query($req3);
	echo "<div class='alert alert-success' role='alert'>Ajout d'un produit réussi</div>";
	}



else {

	if (empty($_POST['Ajouter'])) {
		
		header('ajout_article.php');
	}
	else{
	echo "<div class='alert alert-danger' role='alert'>Erreur dans la saisie veuillez recommencer !</div>";
	}
}


?>