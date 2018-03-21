<?php 
 require_once('includes/header.php'); 
			
			//<!-- les asides gauche et droite -->
			 include_once('includes/aside.php'); ?>

			<!-- Page centrale du site-->
			<div class="conteneur">
			<?php 
			$json = array('erreur' => true);/*tableau devrant contenir les info recuperer. par defau on met une erreur*/  
			/*on recupere le produit a ajouter AU PANIER grace a la variable super globale $_GET*/
				//vérifions d'abord si l'id a été envoyé
				if (isset($_GET['id'])) {
					$Produit=array();
					if (empty($produit)) {
						$json['message']='ce produit n existe pas.';
					}
					//ajout du produit au panier grace a la fonction ajouter
					$panier->ajouter($_GET['id']);
					//ici on a pas d'erreur on donne false a erreur
					$json['erreur']= false;
					$json['nombre']= $panier->nombreproduit();				
					$json['message']='Le produit a été ajouté à votre panier.';
				}else{
					$json['message']="aucun produit n'a été sélectionné.";
				}
				//on affiche l'ifo recuperer
				echo json_encode($json);
			 ?>
			</div>

		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>
		