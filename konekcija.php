<?php
	$host="localhost";
	$korisnik="root";
	$lozinka='';
	$nazivBaze="filmovi";
	
	$konekcija=mysql_connect($host,$korisnik,$lozinka) or die("Konekcija sa serverom nije uspela.");
	$baza=mysql_select_db($nazivBaze,$konekcija) or die("Konekcija sa bazom nije uspela.");
?>