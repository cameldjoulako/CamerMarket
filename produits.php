<!-- Entete du site du site-->
<?php require_once('includes/header.php');
	include("connexiondatabase.php");

 ?>

			
			<!-- les asides gauche et droite -->
			<?php include_once('includes/aside.php'); ?>

			<!-- Page centrale du site-->
			<div class="conteneur">

				<h1>TOUS NOS ARTICLES</h1>
				
				<?php  
				/* on affiche ici tous les articles*/
			$selection=$connexion->prepare("SELECT * FROM produits");
			$selection->execute();

			/* TANT QU ON A DES DONNES DANS LA TABLE AFFICHONS*/
			while ($donnees=$selection->fetch(PDO::FETCH_OBJ)) {
				?> 

				<article class="aside1 coul">
						<h1 class="titre"><?php echo $donnees->titre ; ?></h1>	
						<div class="produit"><img src="admin/imgs/<?php echo $donnees->titre ; ?>.jpg"></img>
						<h2><hr> Prix: <?php echo $donnees->prix." FCFA" ; ?><hr></h2>
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
				</article>
			<?php }
	$selection->closeCursor();	?>
			</div>


 
		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>	