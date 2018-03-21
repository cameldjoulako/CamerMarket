<?php
				/*script du traitement du formulaire*/
		$serveur="localhost";
		$user="root";
		$password="";
		$bdname="camermarket";
		try {
			$connexion = new PDO("mysql:localhost=$serveur;dbname=$bdname",$user, $password);
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);/*mode erreur activé*/					
		} catch (PDOException $erreur) {
				echo '<span class="error">erreur de connexion:'. $erreur->getMessage().'</span> ';
					
			}
				
	?>