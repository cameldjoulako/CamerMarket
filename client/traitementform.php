<meta charset="utf-8">

<?php
	//include(".. /includes/fonction.php");
	include_once('../connexiondatabase.php'); 
	if(isset($_POST['submit'])){
						if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['adresse']) ){

								$insertion = $connexion->prepare("INSERT INTO client
							(nom, prenom, password, telephone, email, adresse)
							VALUES(:nom, :prenom, :password, :telephone, :email, :adresse)");	

						 	$insertion->bindParam(':nom', $nom);
						    $insertion->bindParam(':prenom', $prenom);
						    $insertion->bindParam(':password', $password);
						    $insertion->bindParam(':telephone', $telephone);
						    $insertion->bindParam(':email', $email);
						    $insertion->bindParam(':adresse', $adresse);

						$nom = htmlspecialchars($_POST['nom']);
						$prenom = htmlspecialchars($_POST['prenom']);
						$password = htmlspecialchars($_POST['password']);
						$telephone = htmlspecialchars($_POST['telephone']);
						$email = htmlspecialchars($_POST['email']);
						$adresse = htmlspecialchars($_POST['adresse']);	
						$insertion->execute();
						$insertion->closeCursor();										
						header("location:profil.php");
						echo '<span class="success">Merci votre compte été créée avec success</span> ';
						
						//exit();

						}else{
							echo '<span class="error">Vueillez remplir tous les champs</span> ';

						}
						
					} 

 ?>
