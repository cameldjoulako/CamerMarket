<?php session_start(); 
	include_once("../connexiondatabase.php");
	require_once('../includes/fonction.php');
	/*on initialise notre panier ie creation d'un nouvel ojet de la classe panier*/

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="description" content="Site E-commerce">
		<meta name="author" content="DJOULAKO SIEWE KAMLA MOUSTAPHA">
		<link href="css/metro-icons.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link rel="icon"  href="images/panier.png">
		<title>Accueil | CamerMarket  </title>			
	</head>
	<body onload="salut();">
		<header id="entete">
			<div class="client"> <br>
				<a href="../panier.php">Mon panier <span class="nbre"> 	
				<?php 
					//echo $panier->nombreproduit();
				?>

				</span> </a>				
				<img id="imgpanier" src="../images/panier.png" alt="panier" />
			</div>

			<div id="menu">
				<?php include('nav2.php'); ?>
			</div>			
		</header>
		<body>
		<?php include('message.php'); ?>
		
		<script type="text/javascript" src="../javascript/javascript.js"></script>
		<script type="text/javascript" src="../javascript/jquery.min.js"></script>
		<script type="text/javascript" src="../javascript/app.js"></script>