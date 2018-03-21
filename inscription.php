<?php $title="Inscription"; ?>
<?php if (isset($_SESSION['clients']['nom'])){
	header("location: index.php");
	}else{
		
		require('client/inscription.view.php'); 
	}
	?>



					