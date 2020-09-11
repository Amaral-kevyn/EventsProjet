<?php
	session_start();
	$title = 'Dashboard';
	include '../views/header.php';
	require_once dirname(__FILE__).'/../Controller/header_ctrl.php';

	if (!isset($_SESSION['user'])) {
		// redirection si pas connecté
		header('location: ../Inscription/Connexion');
		// stop la lecture du script
		exit();
    }
    
require_once dirname(__FILE__).'/../View/admin.php';
?>

