  <style>

         span {

            color: green;

         }

      </style>

     

      <script>

         function showHint(str) {

            if (str.length == 0) {

               document.getElementById("txtHint").innerHTML = "";

               return;

            }else {

               var xmlhttp = new XMLHttpRequest();

                                                            

               xmlhttp.onreadystatechange = function() {

                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

                  }

               }

               xmlhttp.open("GET", "php_ajax.php?q=" + str, true);

               xmlhttp.send();

            }

         }

      </script>









<div class="gauche">
				<aside class="aside1">
						<h1 class="titre">Mot de bienvenue</h1>	
					<p>
						Salut cher client,et Bienvenue sur CamerMarket le Numero 1 de la vente le Numero 1 de la vente d'appareils multimedia en ligne au Cameroun.
						Vous êtes déja membre, Connecter vous et passer vos commande en remplissant votre panier.    

      <form>
      <label class="label-control">Rechercher un produit</label>
         <input placeholder="Entrer le nom" class="form-control" type = "text" onkeyup = "showHint(this.value)">

      </form>

     

      <p>Suggestions: <span id="txtHint"></span></p>	
					
					
					
					
					
					
					
					
					</p>
					
				</aside>	

				<aside class="aside1">
						<h1 class="titre">Contacts</h1>	
					<p>
						TEL: (+237) 698574907
						INFO: (+237) 225487957 <br>
						E-mail: camermarket@yahoo.fr
							 
					</p>
				</aside>

				<aside class="aside1">
						<h1 class="titre">Espace Admin</h1>	
					<p>
						Vous êtes administrateur chez <a href="localhost/CamerMarket/index.php">CamerMarket.</a>, alors connecter vous et faites des mis a jours du site en toute securité.<br><br><a class="sendform" href="admin/index.php">connexion-Admin</a> 
					</p>
				</aside>
			</div>

			
			<div class="droite">
				<aside class="aside1">
						<?php include('pages/connexion.view.php'); ?>
				</aside>	
				<aside class="aside1">
						<h1 class="titre">Conseils</h1>	
					<p>
						Chere client à fin de mieux conserver l'autonomie de votre batterie, il faut faire 3 charges et trois décharges de votre appareil après son achat.
					</p>
				</aside>

				<aside class="aside1">
						<h1 class="titre">Nous suivre sur</h1>	
					<p id="autrelien">
						<a href="http://www.fb.com/camermarket" alt="Facebook" target="_blanc"><img src="images/fb.jpg"></a>
						<a href="http://www.yahoo.fr/camermarket" alt="yahoo" target="_blanc"><img src="images/yahoo.jpg"></a>
						<a href="http://www.twiter.com/camermarket" alt="twiter" target="_blanc"><img src="images/twiter.jpg"></a>
						<a href="http://www.skype.com.com/camermarket" alt="skype" target="_blanc"><img src="images/skype.jpg"></a>
						<a href="http://www.whatsapp.com/camermarket" alt="whatsapp" target="_blanc"><img src="images/whatsapp.jpg"></a>
						<a href="http://www.vimeo.com/camermarket" alt="vimeo" target="_blanc"><img src="images/vimeo.jpg"></a>
					</p>
				</aside>
			</div>