
function valider(){
	var form= document.register;
	 var nom=form.nom.value;
	 var prenom=form.prenom.value;
	 var password=form.password.value;
	 var telephone=form.telephone.value;
	 var email=form.email.value;
	 var adresse=form.adresse.value;

	 if(nom=="" || nom.length<3){
	 	//alert("vueillez remplir ce champ. minimum 3 caracteres");
	 	document.getElementById("enom").innerHTML="vueillez remplir ce champ. minimum 3 caracteres";
	 	return false;
	 }

	 if(prenom=="" || prenom.length<3){
	 	//alert("vueillez remplir ce champ. minimum 3 caracteres");
	 	document.getElementById("eprenom").innerHTML+="Votre prenom doit faire minimum 3 caracteres";
	 	return false;
	 }

	 if(password=="" || password.length<6){
	 	//alert("vueillez remplir ce champ. minimum 6 caracteres");
	 	document.getElementById("epassword").innerHTML+="Mot de passe incorrect. minimum 6 caracteres";
	 	return false;
	 }

	 if (telephone=="" || telephone.length<9) {
	 	//alert("vueillez remplir ce champ. minimum 9 chiffres");
	 	document.getElementById("etelephone").innerHTML+="Numero incorrect. minimum 9 chiffres";
	 	return false;
	 }

	 if (email=="") {
	 	//alert("adresse email invalide");
	 	document.getElementById("eemail").innerHTML+="adresse e-mail invalide";
	 	return false;
	 }

	 if (adresse=="") {
	 	//alert("vueillez remplir ce champ. minimum 3 caracteres");
	 	document.getElementById("eadresse").innerHTML+="vueillez remplir ce champ. minimum 3 caracteres";
	 	return false;
	 }

	 return true;
}

function affichedes(){
	var info = document.getElementByTagName("article");
	article.lastChildNode="inline-block";

		return true;
}

