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
 <h1>LISTE DES UTILISATEURS</h1>
			 	<div id="main">
			 	<table align="center">
		            <tr class="titre">
			            <th>NOMS </th>
			            <th>PRENOMS</th>
			            <th>Adresse Email</th>
			            <th>Numero tel</th>
			            <th>Ville </th>
			        </tr>
			 	<?php include("../connexiondatabase.php"); 
			 	$requette = $connexion->prepare("SELECT * FROM client");
			 	$requette->execute();

			 	while($clients=$requette->fetch(PDO::FETCH_OBJ)){
			 		?>
					<div>	
				<tbody>
					<tr>
			            <td><?php echo $clients->nom ; ?></td>
			            <td><?php echo $clients->prenom ; ?></td>
			            <td><?php echo $clients->email; ?></td>
			            <td><?php echo $clients->telephone;  ?></td>
			            <td><?php echo $clients->adresse ; ?></td>
	            	</tr>	
	            </tbody>	            
	            </div>  
	        
<?php  } $requette->closeCursor();  ?>
			  
	          </table>
				</div>
				
			<footer id="main_footer">
				<p>&copy; Mai 2017 | Developper par DJOULAKO, SIEWE, KAMLA NKAYOUONGAM | UDS Fs MI2</p>
			</footer>
		</div>

</body>
</html>			