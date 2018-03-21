
				<?php 
					if (isset($_SESSION['clients']['prenom'])) {
						echo "Bonjour ".$_SESSION['clients']['prenom'];
						
					}else{
						  ?>

									
				<h1 class="titre">Connectez-vous</h1>	
						<div class="cadre">
								<form method="post" action="pages/connexion.php">
								<div class="form-group">
									<label for="email" class="control-label">Votre E-mail</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
								</div>

								<div class="form-group">
									<label for="password" class="control-label">Mot de passe</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="password">
								</div>

						<input type="submit" value="Connexion" class="sendform" name="login" />
							</form> 
						</div>
						<?php
					}
					?>