<?php

class Panier{

	public  function __construct(){

		/*on verifie si la variable de session n'exite pas deja*/
		if (!isset($_SESSION['panier'])) {
			//sinon on passe à la création
			$_SESSION['panier'] = array(); /*creation d'un panier vide*/
		}

		if (isset($_GET['supprimerdupanier'])){
			/*on utilise ici notre classe panier pour suprimer en utilisant la fonction suprimer*/
			$this->supprimer($_GET['supprimerdupanier']);
		}
		
	}

		//fonction pour ajouter un produit au panier

	public function ajouter($idproduit){

		/*on teste si le produit a ajouter ne se trove pas deja ta le panier*/
		if (isset($_SESSION['panier'][$idproduit])) {
			$_SESSION['panier'][$idproduit]++; //on incremente la quantité
		}else{
			$_SESSION['panier'][$idproduit]=1; //on initialise a 1 la quantité
		}		 
	}


	/*fonction pour supprimer un produit du panier*/
	public function supprimer($idproduit){
		unset($_SESSION['panier'][$idproduit]);
	}

	/*fonction pour connaitre le prix du panier*/
	public function prixtotal(){
				require("connexiondatabase.php");
		/*on fait ici une somme des différent object commandé et on reourne*/
		$prixtotal=0;
		//on recupere les id des produis sélectionner pour faire la requette
		$ids = array_keys($_SESSION['panier']);
		if (empty($ids)) {//si les id sont vide, 
			$produits=array(); // 
		}else{

		$produits = $connexion->prepare('SELECT id, prix FROM produits WHERE id IN ('.implode(',' ,$ids).')');
		$produits->execute();
		}

		while ($produit=$produits->fetch(PDO::FETCH_OBJ)){
			$prixtotal +=$produit->prix*$_SESSION['panier'][$produit->id];
		}
		return $prixtotal;
	}

	/*fonction qui compte le nombre de produit dans le panier*/
	public function nombreproduit(){
		return array_sum($_SESSION['panier']);
	}
}

 ?>