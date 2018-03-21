<!-- Entete du site du site-->
<?php require_once('includes/header.php'); ?>
	<?php if (isset($_SESSION['clients']['nom'])) {
		?>	 
	<?php if (!empty($_SESSION['panier'])) {
		
	?>	
			<!-- Page centrale du site--> 
		         <span id="mycaddie"> MON PANIER</span>
		          <span class="suiteachat"><a href="index.php">POURSUIVRE MES ACHATS</a></span>  

		    <table align="center">
		            <tr class="titre">
			            <th>IMAGE DU PRODUIT</th>
			            <th>NOM DU PRODUIT</th>
			            <th>PRIX UNITAIRE</th>
			            <th>QUANTITE</th>
			            <th>SOUS-TOTAL</th>
			            <th>ACTIONS</th>
		            </tr>

					<?php 
					//var_dump($_SESSION['panier']);
						//on recupere les id des produis sélectionner pour faire la requette
							$ids = array_keys($_SESSION['panier']);
						$produits = $connexion->prepare('SELECT * FROM produits WHERE id IN ('.implode(',' ,$ids).')');
						$produits->execute();
						/* TANT QU'ON A DES DONNES DANS Le pannier AFFICHONS*/
						while ($produit=$produits->fetch(PDO::FETCH_OBJ)) {
					?>
					<div>	
				<tbody>
					<tr>
			            <td><img src="admin/imgs/<?php echo $produit->titre ; ?>.jpg"></td>
			            <td><?php echo $produit->titre ; ?></td>
			            <td><?php echo number_format($produit->prix, 0,' ', ' ')." FCFA" ; ?></td>
			            <td><?php echo $_SESSION['panier'][$produit->id];  ?></td>
			            <td><?php echo number_format($produit->prix*1.01, 0,' ', ' ')." FCFA" ; ?></td>
			            <td><a href="panier.php?supprimerdupanier=<?php echo$produit->id; ?>">suprimer</a></td>
	            	</tr>	
	            </tbody>	            
	            </div>  
	        
<?php  } $produits->closeCursor();  ?>
			  
	          </table>
				
		          <span class="sendform" align="right">PRIX TOTAL : 
		          
		          	<?php echo number_format($panier->prixtotal(), 0,' ', ' ')." FCFA" ; ?>
		          </span>
	       	          
	           <span class="suiteachat"><a href="facture.php">PASSER MA COMMANDE</a></span> 

	           <span class="suiteachat"><a href="viderpanier.php">VIDER TOUS LE PANIER</a></span> 

	<?php }else{
		echo '<span class="error">Pannier vide  : Vueillez vous connecter et Ajouter des produits à votre Panier. </span> <a href="index.php" class="sendform">Se connecter</a>  ';
		}  ?>          	
		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/ ?>
		<?php
		}else{
			header("location: index.php");
			echo "vueillez vous connecter";

		} ?>