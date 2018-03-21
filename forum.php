<!-- Entete du site du site-->
<?php require_once('includes/header.php'); ?>

			
			<!-- les asides gauche et droite -->
			<?php include_once('includes/aside.php'); ?>

			<!-- Page centrale du site-->
			<div class="conteneur">

		<div class="cadrem">
			<h1 class="titref">Mini forum de discussion</h1>
			<form method="post" action="forumpost.php">

			<div class="form-group">
				<label for="pseudo" class="control-label">Votre Pseudo</label>
				<input type="text" name="pseudo" id="pseudo" class="form-control">
			</div>

			<div class="form-group">
				<label for="message" class="control-label">Message</label>
				<input type="text" name="message" id="message" class="form-control">
			</div>

			<input type="submit" value="Envoyer" class="sendform" />
		</form>

			<div class="cadremessage">
				
				<?php

							/*Affichage des 10 messages recents*/
					$req = $connexion->query("SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 0, 10");
					while ($donnees = $req->fetch()) {
						echo "<p><strong class=\"pseudocolor\">" .$donnees['pseudo'] .": </strong> ";
						echo $donnees['message'] ."</p>";
						}
				?>

			</div>
		</div>
</div>

		<?php include_once('includes/footer.php'); /*ici c'est le pied de page du site*/?>
