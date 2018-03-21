<?php session_start(); 
	include_once("connexiondatabase.php");
	require_once('panier.class.php');
	require_once('fonction.php');
	/*on initialise notre panier ie creation d'un nouvel ojet de la classe panier*/
	$panier = new Panier();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<meta name="description" content="Site E-commerce">
		<meta name="author" content="DJOULAKO SIEWE KAMLA MOUSTAPHA">
		<link href="css/metro-icons.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link rel="icon"  href="images/panier.png">
		<title><?php if (isset($title)){  echo $title." | CamerMarket";	}else{echo "CamerMarket ";} ?></title>			
	</head>
	<body onload="return salue();">
		<header id="entete">
			<div class="client"> <br>
			
				<a href="client/profil.php">Mon compte |</a>
				<a href="panier.php">Mon panier 
					<span class="nbre" id="nombre"> 	
					<?php 
						echo $panier->nombreproduit();
					?>

					</span> </a>				
				<img id="imgpanier" src="images/panier.png" alt="panier" />
			</div>

			<div id="menu">
				<?php include('nav1.php'); ?>
			</div>			
		</header>
		<script type="text/javascript" src="javascript/javascript.js"></script>
		</body>
		<?php include('message.php'); ?>