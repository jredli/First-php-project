<?php
@session_start();
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga'] != 'admin'){
		header('Location:index.php');
	}
?>
<?php
include("heder.php");
?>
<div id="main">
<?php


$id= (isset($_GET['id'])) ? $id=$_GET['id'] : 0;

include_once("konekcija.php");

$upit='SELECT id_korisnik,ime,lozinka,pol,mail,uloga FROM korisnik WHERE id_korisnik="'.$id.'"';
$rezultat=mysql_query($upit,$konekcija) or die('Upit nije izvrsen!');
$niz=mysql_fetch_array($rezultat);

	echo'<form name="promene" action="izmeni.php" method="post">
		<table border="1">
		<tr><th colspan=2>Izmeni podatke</th</tr>
		<tr><td>Ime</td><td><input type="text" class="txt_field" name="ime" value="'.$niz['ime'].'"></td></tr>
		<tr><td>lozinka</td><td><input type="text"  class="txt_field" name="lozinka" value="'.$niz['lozinka'].'"></td></tr>
		<tr><td>Pol</td><td><input type="radio" name="pol" value="M">Muski<br>
										<input type="radio" name="pol" value="Z">Zenski</td></tr>
		<tr><td>Mail</td><td><input type="text" name="mail" class="txt_field" value="'.$niz['mail'].'"></td></tr>
		<tr><td>Uloga</td><td><input type="text" name="uloga" class="txt_field" value="'.$niz['uloga'].'"></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" name="promeni" class="txt_field" value="Promeni">
		<input type="hidden" name="id_korisnik" value="'.$id.'"</td></tr>
		</table>
		</form>';
		
		$dugme=&$_POST['promeni'];
		if(isset($dugme)){
			$ime=$_POST['ime'];
			$lozinka=$_POST['lozinka'];
			$pol=&$_POST['pol'];
			$mail=$_POST['mail'];
			$uloga=$_POST['uloga'];
			$skriveno=$_POST['id_korisnik'];
					
			$sql="UPDATE korisnik SET ime='".$ime."',lozinka='".$lozinka."',pol='".$pol."',mail='".$mail."', uloga='".$uloga."' 
			WHERE id_korisnik='".$skriveno."'";
			
			$rezultat_sql=mysql_query($sql,$konekcija) or die ("UPIT NIJE IZVRSEN SQL");
			
			if($rezultat_sql){
				echo'Podaci su uspesno izmenjeni!';
				
			}
			}
			mysql_close($konekcija);
			?>
		
		
		
		
		
		
</div>
<?php
include("futer.php");
?>