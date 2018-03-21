<?php 
	function afficher($message, $type ){
		$_SESSION['notification']['message'] = $message;
		$_SESSION['notification']['type'] = $type;
	} 
?>