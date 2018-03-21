<?php $title="Votre Facture" ?>
<!-- Entete du site du site-->
<?php require_once('includes/header.php'); ?>
	<div id="facture">
	<table>
	<tr>			
	<td colspan="5"><img src="images/logo2.png" width="180px">CamerMarket - FACTURE</td>
	</tr>
		<tr>
			<th>Produits</th>
			<th>P.U</th>
			<th>Quantité</th>
			<th>Total+T.V.A</th>
		</tr><?php 
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
			            <td><?php echo $produit->titre ; ?></td>
			            <td><?php echo number_format($produit->prix, 0,' ', ' ')." FCFA" ; ?></td>
			            <td><?php echo $_SESSION['panier'][$produit->id];  ?></td>
			           <td><?php echo number_format($produit->prix*1.01, 0,' ', ' ')." FCFA" ; ?></td>
            
	            	</tr>	
	            </tbody>	            
	            </div>  
	        
<?php  } $produits->closeCursor();  ?>
			  
	          </table>
				
		          <span class="sendform" align="right">PRIX TOTAL : 
		          
		          	<?php echo number_format($panier->prixtotal(), 0,' ', ' ')." FCFA" ; ?>
		          </span>
	       	          
	           <span class="suiteachat"><a href="confirmer.php">CONFIRMER</a></span>
</body>