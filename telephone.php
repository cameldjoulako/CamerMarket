<!-- Entete du site du site-->
<?php require_once('includes/header.php'); ?>

			
			<!-- les asides gauche et droite -->
			<?php include_once('includes/aside.php'); ?>

			<!-- Page centrale du site-->
			<div class="conteneur">

					<?php  
				/* on affiche ici 4 articles*/
			$selection=$connexion->prepare("SELECT * FROM produits WHERE categorie='Telephone'");
			$selection->execute();


			/* TANT QU ON A DES DONNES DANS LA TABLE AFFICHONS*/
			while ($donnees=$selection->fetch(PDO::FETCH_OBJ)) {
				?> 

				
				<article class="aside1 coul">
						<h1 class="titre"><?php echo $donnees->titre ; ?></h1>	
						<div class="produit"><img src="admin/imgs/<?php echo $donnees->titre ; ?>.jpg"></img>
						<h3><hr> Prix: <?php echo number_format($donnees->prix, 0,' ', ' ')." FCFA" ; ?><hr></h3>
						<ul>
							<li><a  href="description.php?id=<?php echo $donnees->id; ?>" class="description">Description du produit</a></li>
							<li class="stock">Stock: <?php echo $donnees->stock; ?></li>
							<li><?php if($donnees->stock!=0){  ?>
							<a class="ajouter" href="ajouterpanier.php?id=<?php echo $donnees->id; ?>">Ajouter au Panier</li></a>
								<?php  }else{
									echo '<h5 style="color:red;" >Stock épuisé !</h5>';
									} ?>
							</li>
						</ul>	
						<span id="description"></span>					
				</article>
			<?php }
	$selection->closeCursor();	?>						


				


			</div>

		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>
		