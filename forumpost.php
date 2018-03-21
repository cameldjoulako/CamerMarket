<!-- Entete du site du site-->
<?php require_once('includes/header.php'); ?>

			<div class="conteneur">

		<?php 

	 	if(isset($_POST['pseudo']) && $_POST['pseudo']!=""){

	 		if(isset($_POST['message']) && $_POST['message']!=""){

	 			$req = $connexion->prepare("INSERT INTO minichat(pseudo, message)
	 									VALUES(:pseudo, :message)");
	 			$req->bindparam(':pseudo', $pseudo);
	 			$req->bindparam(':message', $message);
	 			$pseudo =htmlspecialchars($_POST['pseudo']);
	 			$message = htmlspecialchars($_POST['message']);
	 			$req->execute();

	 			$req->closeCursor();

	 			header("location: forum.php");
				
	 		
	 		}	else echo "Remplisser tous les champs S.V.P";

	 	}	else echo "Remplisser tous les champs S.V.P"; 	
	 	
?>
</div>

		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>

