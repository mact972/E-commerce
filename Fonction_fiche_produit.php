<?php

	session_start();
	require_once 'fonction.php';
	$bdd = connect();

	$id = $_GET['produit'];

	if (isset($id)) {

		if (!isset($_SESSION['voir'])) {
		
		$_SESSION['voir'] = array() ; 
		
		}
		if (isset($_SESSION['voir'][$id])) {

			$_SESSION['voir'][$id]=1;

		}
		else{

		$_SESSION['voir'][$id]=1;
		
		}

		header('location:fiche_produit.php');
	}

?>