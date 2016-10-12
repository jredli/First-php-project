<?php
	include("heder.php");
?>

<div id="main">
	<div id="reg">
	<form name="registracija" action="registracija.php" method="POST">
		<table>
			<tr ><th colspan="2">Registracija korisnika</th></tr><br>
			<tr><td>Korisnicko ime:</td><td><input type="text" class="txt_field" name="ime" id="tbIme"></td></tr>
			<tr><td>Lozinka:</td><td>          <input type="text" class="txt_field" name="lozinka" id="tblozinka"></td></tr>
			<tr><td>Pol:</td><td><input type="radio" name="rbPol" value="M">Muski<br>
												<input type="radio" name="rbPol" value="Z">Zenski<br></td>
			</tr>
			<tr><td>Mail:</td><td><input type="text" class="txt_field" name="mail" id="tbMail"></td></tr>
			<tr><th colspan="2"><input type="submit" name="dugme" value="Registracija"></th></tr>
		</table>
	</form>
	<?php
		
		if(isset($_POST['dugme'])){
			$ime=$_POST['ime'];
			$sifra=$_POST['lozinka'];
			$pol=&$_POST['rbPol'];
			$mail=$_POST['mail'];
			$rola="korisnik";
			
			if(!ereg('^[A-Z][a-z]{2,15}$',$ime)){
			echo"Prvo slovo mora biti veliko";
			echo"<br>";
			
			if(!ereg('^[a-z0-9]{4,15}$',$sifra)){
			echo"Slova i brojevi";
			echo"<br>";
			}
			if($pol==0){
			echo"Izaberite pol";
			echo"<br>";
			}
			if(!ereg('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$',$mail)){
			echo"Losa forma maila";
			echo"<br>";
			}
			}
			else{
			
			
			include('konekcija.php');
						
			$upit="INSERT INTO korisnik VALUES('','$ime','$sifra','$pol','$mail','$rola')";
			
			$rezultat=mysql_query($upit,$konekcija) or die('Upit nije izvrsen');
			if($rezultat){
				echo"Uspesno ste napravili nalog, dobrodosli!";
				}
				mysql_close($konekcija);
}
}
?>				
</div>
</div>

<?php
	include("futer.php");
?>