<?php 
 require_once('includes/header.php'); 
			
			//<!-- les asides gauche et droite -->
			 include_once('includes/aside.php'); ?>

			<!-- Page centrale du site-->
			<div class="conteneur">
			<?php /*on recupere le produit a ajouter AU PANIR grace a la variable super globale $_GET*/
				//vérifions d'abord si l'id a été envoyé
				if (isset($_GET['id'])) {
					$id=$_GET['id'];
/* on affiche ici 1 articles*/
			$selection=$connexion->prepare("SELECT * FROM produits WHERE id=".$id);
			$selection->execute();
			/* TANT QU ON A DES DONNES DANS LA TABLE AFFICHONS*/
			$donnees=$selection->fetch(PDO::FETCH_OBJ);
			?>				
				<article class="aside1 coul" >
						<h1 class="titre"><?php echo $donnees->titre ; ?></h1>	
						<div class="produit"><img src="admin/imgs/<?php echo $donnees->titre ; ?>.jpg"></img>
						<h3><hr> Prix: <?php echo number_format($donnees->prix, 0,' ', ' ')." FCFA" ; ?><hr></h3>
						<ul>
							<li class="stock">Stock: <?php echo $donnees->stock; ?></li>
							<li><?php if($donnees->stock!=0){  ?>
							<a class="ajouter" href="ajouterpanier.php?id=<?php echo $donnees->id; ?>">Ajouter au Panier</li></a>
								<?php  }else{
									echo '<h5 style="color:red;" >Stock épuisé !</h5>';
									} ?>
							</li>
						</ul>
											
				</article>
			<article class="aside1 coul">
			<h1 class="titre">Description du produit</h1>
				<?php echo $donnees->description ; ?>				
			</article>


			<?php  
	$selection->closeCursor();
				}else{
					echo "aucun produit n'a été sélectionné.";
				}
			 ?>
			</div>

		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>
		