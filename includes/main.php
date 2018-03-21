	<?php  
				/* on affiche ici 4 articles*/
			$selection=$connexion->prepare("SELECT * FROM produits LIMIT 0,4");
			$selection->execute();

$i=0;
			/* TANT QU ON A DES DONNES DANS LA TABLE AFFICHONS*/
			while ($donnees=$selection->fetch(PDO::FETCH_OBJ)) {
				$i++;
				?> 

				
				<article class="aside1 coul" id="article<?php echo $i; ?>">
						<h1 class="titre"><?php echo $donnees->titre ; ?></h1>	
						<div class="produit"><img src="admin/imgs/<?php echo $donnees->titre ; ?>.jpg"></img>
						<h3><hr> Prix: <?php echo number_format($donnees->prix, 0,' ', ' ')." FCFA" ; ?><hr></h3>
						<ul>
						<?php $detail=$donnees->description; ?>
							<li><a  href="description.php?id=<?php echo $donnees->id; ?>" class="description">Description du produit</a></li>
							<li class="stock">Stock: <?php echo $donnees->stock; ?></li>
							<li><?php if($donnees->stock!=0){  ?>
							<a class="ajouter ajoutpanier" href="ajouterpanier.php?id=<?php echo $donnees->id; ?>">Ajouter au Panier</li></a>
								<?php  }else{
									echo '<h5 style="color:red;" >Stock épuisé !</h5>';
									} ?>
							</li>
						</ul>	
											
				</article>
			<?php }
	$selection->closeCursor();	?>						
