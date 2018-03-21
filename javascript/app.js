/* cette fonction nous permetra de faire l'ajout automatique en ajax*/
/*on verifie si jquery a été chargé*/
(function($){
	/*on trouve tous les élement ayant la classse ajoutpanier et on detecte a quem moment on a clicquer dessus */
/*lorsquon aclicqué on lance la fonction en parametre de clic*/
//alert("bonjour");
	$('.ajoutpanier').click(function(event){
		/*pour annuler le lien on fait*/
		event.preventDefault();
		/*on lance la requette AJAX 1.URL A APPELER*/
		$.get($(this).attr('href'),{},function(data){
			/*s il ya erreur on afiiche  message d erreur*/
			if(data.message){
				alert("ok");
				alert(data.erreur);
			}else{
				if (confirm(data.erreur+'.Voulez vous consuler votre panier?')){
					location.href='panier.php';
				}else{
					/*
					on injecte le nombre de produit pour actualiser*/
					$('#nombre').empty().append(data.nombre);
				}
			}

		},'json'); 

		return false;
		
	});
})(jQuery);