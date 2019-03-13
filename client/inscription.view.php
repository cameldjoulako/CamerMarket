<!-- Entete du site du site-->
<?php include('includes/header.php'); ?>
<meta charset="utf-8">

			
	<!-- les asides gauche et droite -->
	<?php include('includes/aside.php'); ?>

	<!-- Page centrale du site-->
	<div class="conteneur">

			<h1 class="titre2">Créer un nouveau compte client </h1 >
   
	  <form method="post" action="client/traitementform.php" onsubmit="return valider();" class="cadre2 bgcolor" name="register" >
           <!-- Name field -->
        <fieldset><legend>Informations personnelles</legend>   
		    <div class="form-group">
				<label class="control-label" for="nom">Nom: </label>
				<span id="enom"></span>
				<input type="text" class="form-control2" id="nom" name="nom" 
						placeholder="Your name"/>
			</div> 
		   
            <!-- prenom field -->
		    <div class="form-group">
				<label class="control-label" for="prenom">Prenom:</label>
				<span id="eprenom"></span>
				<input type="text" class="form-control2" id="prenom" name="prenom" 
						placeholder=" Your surname"/>
			</div>

			<!-- password field -->
		    <div class="form-group">
				<label class="control-label" for="password">Mot de passe:</label>
				<span id="epassword"></span>
				<input type="password" class="form-control2" id="password" name="password" 
						/>
			</div>

		</fieldset> 

		<fieldset><legend> Informations complémentaires </legend>
			<!-- telephone field -->
		    <div class="form-group">
				<label class="control-label" for="telephone">Téléphone:</label>
				<span id="tetelephone"></span>
				<input type="number" class="form-control2" id="telephone" name="telephone" 
						placeholder=" Your phone number" size="9" />
			</div>

			<!-- Email field -->
		    <div class="form-group">
				<label class="control-label" for="email">Adresse Email:</label>
				<span id="eemail"></span>
				<input type="email" class="form-control2" id="email" name="email" 
						 placeholder="Your mail adress"/>
			</div>

			<!-- ville field -->
		    <div class="form-group">
				<label class="control-label" for="adresse">Adresse:</label>
				<span id="eadresse"></span>
				<input type="text" class="form-control2" id="adresse" name="adresse" 
						 placeholder="EX Nkongsamba Bonangoh 3bis"/>
			</div>

			
		</fieldset>	
			<br>
			
			<input type="submit" class="sendform" id="envoyer" value="ENVOYER" name="submit" />
			<input type="reset" class="sendform" value="RECOMMENCER" name="reset" />
		</form>


	</div>

<script type="text/javascript"></script>

<?php include('includes/footer.php'); /*ici c'est le pied de page du site*/?>