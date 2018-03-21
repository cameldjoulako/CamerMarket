<?php 
	include('../includes/header2.php'); ?><!-- Entete du site du site-->
	<?php if (isset($_SESSION['clients']['nom'])) {
		?>
		<h1 >VOTRE COMPTE</h1>	<br>		
		<h2 class="titref">Bienvenue <?php echo ($_SESSION['clients']['prenom']); ?></h2>
		<H4>Vos coordonées</H4>
		<div class="cadref">
			<label class="labelprofil">Nom: <?php echo ($_SESSION['clients']['nom']); ?></label>
			<label class="labelprofil">Prenom: <?php echo ($_SESSION['clients']['prenom']); ?></label>
			<label class="labelprofil">Email: <?php echo ($_SESSION['clients']['email']); ?></label>
			<label class="labelprofil">télephone: <?php echo ($_SESSION['clients']['telephone']); ?></label>
			<label class="labelprofil">Adresse: <?php echo ($_SESSION['clients']['adresse']); ?></label>


			<span class="suiteachat"><a href="../panier.php">VOTRE PANIER</a></span> 
			<span class="suiteachat"><a href="../facture.php">PASSER MA COMMANDE</a></span> 

	           <span class="suiteachat"><a href="../viderpanier.php">VIDER TOUS LE PANIER</a></span> 

		</div>
	<?php include('../includes/footer.php'); /*ici c'est le pied de page du site*/?>

		<?php
		}else{
			header("location: ../index.php");
			echo "vueillez vous connecter";

		} ?>


