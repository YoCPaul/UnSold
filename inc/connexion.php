<?php

	include("../classes/Mysql.php");
	include("../classes/Utilisateur.php");
	include("../classes/Chaussure.php");

	$bdd = new Mysql;
	$bdd->set_serveur("localhost");
	$bdd->set_login("root");
	$bdd->set_bdd("tpl3info");
	$bdd->__construct();
?>