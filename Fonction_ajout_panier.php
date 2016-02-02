<?php


session_start();
require_once 'fonction.php';
$bdd = connect();



$id = $_GET['ajout'];


if (isset($id)) {

	if (!isset($_SESSION['panier'])) {
		
		$_SESSION['panier'] = array() ; 
	}

	if (isset($_SESSION['panier'][$id])) {
		
		$_SESSION['panier'][$id]++;
	}
	else{

		$_SESSION['panier'][$id]=1;
	}

  $_SESSION['succes'] = "Le produit a été ajouté au panier !";

}

header('location:accueil.php');


?>