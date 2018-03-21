<?php 
	session_start(); /* demarrage de la session*/
	/*initialisation des identifiants de connexion*/
$pseudonyme="camermarketadmin";
$motdepasse="ecommerce2017";
/*fin des initialisations*/
 ?>

<link rel="stylesheet" type="text/css" href="../css/header.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta charset="utf-8">
<!-- Entete du site du site-->
<h1 class="titre2">ADMINISTRATION - CONNEXION</h1>

<?php 
if(isset($_POST['submit'])){ 
	$pseudo=$_POST['pseudo'];      /*si c'est le cas, on recupere les valeurs entre dans les champs*/
	$password=$_POST['password']; 

	if($pseudo&&$password){			/*si les deux  champs ne sont pas vide:*/

		if($pseudo == $pseudonyme && $password == $motdepasse){ /*on vérifie si les identifiant entré sont corectes a celle des admin*/
			/*instruction a faire*/
			$_SESSION['pseudo'] = $pseudo;
			header('location: admin.php');
		}else{
			echo '<span class="error">Identifiants éronnés</span>';
		}

	}else{

		echo '<span class="error">Vueillez remplir tous les champs</span>';
	}
}


?>


		<div class="conteneur">
			<div style="margin-left:300px; background-color: skyblue; border-radius: 10px;">
				<form method="POST" action="" class="cadre2 bgcolor">
				           <!-- Name field -->		        
					<div class="form-group">
						<label class="control-label" for="pseudo">Votre pseudo:</label>
						<input type="text" class="form-control2" id="pseudo" name="pseudo" 
										 placeholder="pseudonyme"/>
					</div>	           
							<!-- password field -->
					<div class="form-group">
						<label class="control-label" for="password">Mot de passe:</label>
						<input type="password" class="form-control2" id="password" name="password" />
					</div>				

						<input type="submit" class="sendform" value="Envoyer" name="submit" />
						
				</form>
			</div>
		</div>



<?php include('../includes/footer.php'); /*ici c'est le pied de page du site*/?>