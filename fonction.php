<?php

require_once 'config.php';

function connect(){

	try{
			$connexion = new Pdo('mysql: host='.HOST.';dbname='.DBNAME,USER,PW);
			$connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connexion;
		}
	catch(PDOexception $e){

			echo "problème de connexion". $e ->getMessage() ;
			return false;
		}

}

?>