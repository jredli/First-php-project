<?php 
	@session_start();
	if(isset($_SESSION['uloga'])){
		unset($_SESSION['uloga']);
		unset($_SESSION['ime']);
		session_destroy();
		header('Location:index.php');
	}
?>