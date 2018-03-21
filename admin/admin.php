<?php
	session_start();
	?>
	<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Administration - CamerMarket</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<meta charset="utf-8">
</head>
<body>
	<?php include_once('../includes/nav.php'); ?>
 <h1>bienvenue <?php echo$_SESSION['pseudo']; ?> </h1>
 	<div id="main">
			
				<h1 id="top_header">
				<img src="images/cle_a_molette.png" width="30" alt="" /> 
				ADMINISTRATION GENERALE DU SITE</h1>
			
			<section id="main_section">

				<div>					
					<p><a href="?action=ajouter"><h1>AJOUTER UN PRODUIT</h1></a></p>
				</div>

				<div>					
					<p><a href="?action=modifieretsupprimer"><h1>MODIFIER OU SUPPRIMER UN PRODUIT</h1></a></p>
				</div>

				<div>					
					<p><a href="?action=supprimer"><h1>SUPPRIMER UN PRODUIT</h1></a></p>
				</div>
				
				<div>					
					<p><a href="messagevisiteur.php"><h1>MESSAGES DES VISITEURS</h1></a></p>
				</div>

				<div>
					
					<p><a href="clientinscrit.php"><h1>LISTE DES UTILISATEURS</h1></a></p>
				</div>
				
			</section>
			<footer id="main_footer">
				<p>&copy; Mai 2017 | Developper par DJOULAKO, SIEWE, KAMLA NKAYOUONGAM | UDS Fs MI2</p>
			</footer>
		</div>

</body>
</html>

	<?php


	include("../connexiondatabase.php");

	if(isset($_SESSION['pseudo'])){
	if(isset($_GET['action'])){ 
		if (isset($_POST['submit'] )) {
			$titre=$_POST['titre'];
			$description=$_POST['description'];
			$prix=$_POST['prix'];
			$categorie=$_POST['categorie'];
			$stock=$_POST['stock'];
			$img = $_FILES['img']['name'];/*on recupere l'img et son extension*/
			/*on recupere ou l'image a été stockqué temporairement*/
			$img_tmp = $_FILES['img']['tmp_name'];

			if (!empty($img_tmp)) {
				/*on recupere le nom de l'image en separant l'extention et le nom*/
				
				$image = explode('.', $img);
				$image_ext = end($image); /*recuperation de l'extension*/

				/*testons si on a rentrer une image en ferifiant si son fichier a une extention image quon va definir*/
				if (in_array(strtolower($image_ext), array('png','jpeg', 'jpg'))===false ) {
					echo '<span class="error">Vueillez inserer une image avec une extension valide </span>';
				}else{
					/*fonction de redimention et test si c'est une image */
					$image_size = getimagesize($img_tmp); /* recuperation de la taille de l'img*/
					/* $image_size est un tableau avec plusieur element on utilisera
					: width height mine(nous renseigne sur le ty d'image)
					*/
					//print_r($image_size);
					if ($image_size['mime']=='image/jpeg'){

						$image_src = imagecreatefromjpeg($img_tmp);

					}else if($image_size['mime']=='image/jpg'){

						$image_src = imagecreatefromjpg($img_tmp);

					}else if($image_size['mime']=='image/png'){

						$image_src = imagecreatefrompng($img_tmp);

					}else{

						$image_src = false;
						echo '<span class="error">Vueillez Inserer une image valide</span>';	
					}

					if ($image_src!==false) {

						$image_width=180;

						if ($image_size[0]==$image_width) {

							$image_finale = $image_src;

						}else{

							/*on redimentione notre image*/
							$new_width[0] = $image_width;
							$new_height[1] = 127;
							$image_finale = imagecreatetruecolor($new_width[0], $new_height[1] );
							imagecopyresampled($image_finale, $image_src, 0, 0, 0, 0, $new_width[0], $new_height[1] , $image_size[0] , $image_size[1]);
						}
						/*on deplace notre image qu'on vien de creer dans le dossier imgs se trouvant dans admin*/
						imagejpeg($image_finale, 'imgs/'.$titre .'.jpg'); 
						/*on transforme toute les img en jpg*/
					}

				}
				
			}else{
				echo '<span class="error">Vueillez Inserer une image </span>';	
			}


			if($titre && $description && $prix && $categorie && $stock){

				
				$insertion = $connexion->prepare("INSERT INTO produits (titre, description, prix, categorie, stock)
						VALUES(:titre, :description, :prix, :categorie, :stock)");	
					 	$insertion->bindParam(':titre', $titre);
					    $insertion->bindParam(':description', $description);
					    $insertion->bindParam(':prix', $prix);
					    $insertion->bindParam(':categorie', $categorie);
					    $insertion->bindParam(':stock', $stock);
								    
						$titre = htmlspecialchars($_POST['titre']);
						$description = htmlspecialchars($_POST['description']);
						$prix = htmlspecialchars($_POST['prix']);
						$categorie = $_POST['categorie'];
						$stock = htmlspecialchars($_POST['stock']);

						$insertion->execute();
						$insertion->closeCursor();


			}else{
				echo '<span class="error">Vueillez remplir tous les champs</span>';
			}


		}



		if($_GET['action']=='ajouter'){
		?>
			<form method="post" action="" class="cadre2 bgcolor" name="ajoutp" enctype="multipart/form-data" >
			           
					<fieldset><legend>Ajout dun nouvel produit</legend>   

								<!-- titre field -->
						<div class="form-group">
							<label class="control-label" for="titre">Titre du produit:</label>
							<input type="text" class="form-control2" id="titre" name="titre"/>
						</div> 
								   
						            <!-- description field -->
						<div class="form-group">
							<label class="control-label" for="description">Description:</label>
							<textarea type="text" class="form-control2" id="description" name="description"></textarea>
						</div>

									<!-- prix field  -->
						<div class="form-group">
							<label class="control-label" for="prix">Prix:</label>
							<input type="text" class="form-control2" id="prix" name="prix"/>
						</div>
						<div class="form-group">
							<label class="control-label" for="img">Image du produit:</label>
							<input type="file" class="form-control2" id="img" name="img"/>
						</div>
						<div class="form-group">
							<label class="control-label" for="img">Catégorie du produit:</label>
							<select class="form-control2" id="categorie" name="categorie">

								<?php 
									$selection=$connexion->query("SELECT * FROM categorie");

									while ($resultat=$selection->fetch(PDO::FETCH_OBJ) ) {

									   ?>
									   		<option><?php echo $resultat->nom ?></option>

									  <?php
										
									}
								 ?>
								
							</select>
						</div>
						<div class="form-group">
							<label class="control-label" for="stock">Stock:</label>
							<input type="text" class="form-control2" id="stock" name="stock"/>
						</div>

				</fieldset> 
						<br>			
				<input type="submit" class="sendform" value="AJOUTER LE PRODUIT" name="submit" />
			</form>	

<?php 
		}else if ($_GET['action']=='modifieretsupprimer') {
			/* on affiche ici tous les articles*/

			$selection=$connexion->prepare("SELECT * FROM produits");
			$selection->execute();

			/* TANT QU ON A DES DONNES DANS LA TABLE AFFICHONS*/
			echo '<h1 id="top_header"> AJOUTER OU MODIFIER UN PRODUIT </h1><br>';
			while ($donnees=$selection->fetch(PDO::FETCH_OBJ)) {
				?> 

				<article class="aside1 coul">
						<h1 class="titre"><?php echo $donnees->titre ; ?></h1>	
						<div class="produit">
						<img src="imgs/<?php echo $donnees->titre ; ?>.jpg"></img>
						<!-- on modifie ou suprime le produit grace à l,id -->
					<a href="?action=modifier&amp;id=<?php echo $donnees->id ; ?> "><h2 class="stock">Modifier</h2></a>
					<a href="?action=supprimer&amp;id=<?php echo $donnees->id ; ?> "><h2 class="stock">Supprimer</h2></a>
						</div>
						
				</article>


				<?php 
			}

		}else if ($_GET['action']=='modifier') {
			$id=$_GET['id'];
			$selection=$connexion->prepare("SELECT * FROM produits WHERE id=$id");
			$selection->execute();
			$resultat=$selection->fetch(PDO::FETCH_OBJ);

			?>
			<form method="post" action="" class="cadre2 bgcolor" name="ajoutp">
			           
					<fieldset><legend>Modifier un  produit existant</legend>   

								<!-- titre field -->
						<div class="form-group">
							<label class="control-label" for="titre">Titre du produit:</label>
							<input value="<?php echo $resultat->titre; ?>" type="text" class="form-control2" id="titre"  name="titre" />
						</div> 
								   
						            <!-- description field -->
						<div class="form-group">
							<label class="control-label" for="description">Description:</label>
							<textarea type="text" class="form-control2" id="description" name="description"><?php echo $resultat->description; ?></textarea>
						</div>

									<!-- prix field  -->
						<div class="form-group">
							<label class="control-label" for="prix">Prix:</label>
							<input value="<?php echo $resultat->prix; ?>" type="text" class="form-control2" id="prix" name="prix"/>
						</div>
						<div class="form-group">
							<label class="control-label" for="stock">Stock:</label>
							<input value="<?php echo $resultat->stock; ?>" type="text" class="form-control2" id="stock" name="stock"/>
						</div>

				</fieldset> 
						<br>			
				<input type="submit" class="sendform" value="MODIFIER LE PRODUIT" name="submit2" />
			</form>	

		<?php
		/*ON ENREGISTRE LES MODIFICATIONS ENTRER POUR LA MIS A JOUR*/
		if (isset($_POST['submit2'] )) {
			$titre=$_POST['titre'];
			$description=$_POST['description'];
			$prix=$_POST['prix'];
			$stock=$_POST['stock'];

		  if($titre && $description && $prix && $stock){				
			$update=$connexion->prepare("UPDATE produits SET titre='$titre', description='$description', prix='$prix', stock='$stock' WHERE id=$id");					 	
								
						$update->execute();
						$update->closeCursor();


			}else{
				echo '<span class="error">Vueillez remplir tous les champs SVP</span>';
			}
		}/* FIN DE LA MIS A JOUR */
			
/*SUPPRESSION D UN PRODUIT EN BD*/
		}else if ($_GET['action']=='supprimer') {
			$id=$_GET['id'];/*on recupere l'id du produit dans l'url quon a cliquer dessus*/
			$suppression=$connexion->prepare("DELETE FROM produits WHERE id=$id");
			$suppression->execute();
			$suppression->closeCursor();
			
			
		}else{
			die(' Une erreur s est produite. ');
		}
	}else{

	}

	}else{
		header('Location: ../index.php');
	}

 ?>