<?php session_start();
 require_once("../connexiondatabase.php");
if (isset($_POST['login'])) {
	if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password']) ) {
		

		extract($_POST);
		//echo $email;

		$requette = $connexion->prepare('SELECT * FROM client 
										  WHERE email=? 
										  AND password=?');

		$requette->execute([$email,$password]);
		
		//on compte le nombre de resultat trouvé
		$usertrouve = $requette->rowcount();
		$user=$requette->fetch(PDO::FETCH_OBJ);
		$_SESSION['clients']=array();

		if ($usertrouve) {
			$client = array(
				"id" =>$user->id,
				"nom" =>$user->nom,
				"prenom" =>$user->prenom ,
				"password" =>$user->password ,
				"email" =>$user->email ,
				"telephone" =>$user->telephone ,
				"adresse" =>$user->adresse );
				$_SESSION['clients'] = $client;
				
			header("location: ../client/profil.php");
		}else{
			echo '<span class="error">combinaisson mot de passe et email invalide</span> ';
		}
}
	
		
	}
 ?>




<?php //header('location: ../client/profil.php'); ?>