<?php
	@session_start();
	if(isset($_POST['pristup'])){
		include("konekcija.php");
		
			$korisnicko_ime = $_POST['tbIme'];
			$lozinka=$_POST['tbLozinka'];
			
			$upit = "SELECT * FROM korisnik WHERE ime='".$korisnicko_ime."' AND lozinka = '".$lozinka."' ";
			$rezultat = mysql_query($upit,$konekcija) or die ("Upit nije izvrsen");
			if(mysql_num_rows($rezultat) == 1)
			{				
				$red=mysql_fetch_array($rezultat);
				
				$_SESSION['ime'] = $red['ime'];
				$_SESSION['uloga'] = $red['uloga'];
						
			}
				mysql_close($konekcija);
			}
?>
<?php
	include("heder.php");
?>
    <div id="main">
    	<div id="levo">
			<h2>Dobrosli na Oceni Film</h2>
				<p>Filmovi je sajt namenjen ljubiteljima domacih i stranih filmova. <br>
				Mozete videti kratak opis filma kao i glavne glumce, rezisera, itd.
				Nadam se da ce vam sajt biti lak za upotrebu i ukoliko imate bilo kakvih problema ili 
				nejasnoca mozete se obratiti <a href="autor.php">autoru</a>.<br>
				Molimo vas da na kraju posete ocenite sajt u anketi sa vase desne strane.<br>
				Hvala na poseti!
				</p>
		</div>
			
		<div id="desno">
			<div id="desno_logovanje">
				<table>
					<form name="logovanje" action="index.php" method="post">
					<tr colspan='2'><th>Ulogujte se:</th></tr>
					<tr><td>Korisnicko ime:</td><td><input type="text"  name="tbIme" class="txt_field"/></td></tr>
					<tr><td>Lozinka:</td><td><input type="password" name="tbLozinka" class="txt_field"/></td></tr>
					<tr colspan='2'><td><input type="submit" name="pristup" value="Loguj se"/></td></tr>
					</form>
				</table>
			</div>		
			<?php
				if(isset($_SESSION['uloga']))
					include("anketa.php");
					?>
		</div>
    </div>
<?php
include("futer.php");
?>