<?php
	@session_start();
	if(!isset($_SESSION['uloga']) || $_SESSION['uloga'] != 'admin'){
		header('Location:index.php');
	}
?>
<?php
	include('heder.php');
?>

<div id="main">
<div id="admin">
	  <?php	
	  include("konekcija.php");
	  

	
	  
	if(isset($_REQUEST['btnBrisanje'])){
	
			$brisi=$_REQUEST['brisanje'];
	
			if(count($brisi)>0){
	
			foreach($brisi as $id){
			
				$upit_brisanje="DELETE FROM korisnik WHERE id_korisnik=".$id;	
				
				$rezultat_brisanje=mysql_query($upit_brisanje, $konekcija);
			}
		}	
	}
	?>

<?php
echo'<form method="post" action="administrator.php" name="forma">';
echo'<table>';
echo'<tr class="table"><th>Id</th><th>Ime</th><th>Lozinka</th><th>Pol</th><th>Mail</th><th>Uloga</th><th>Izmena</th><th>Brisanje</th></tr>';
$upit="SELECT * FROM korisnik";
$rezultat=mysql_query($upit,$konekcija) or die ("Upit nije izvrsen!");
while($niz=mysql_fetch_array($rezultat)){
if($niz['pol']=="M"){
$niz['pol']="Muski";
}
else{
$niz['pol']="Zenski";
}
echo '<tr class="table"><td>'.$niz['id_korisnik'].'</td><td>'
.$niz['ime'].'</td><td>'.$niz['lozinka'].'</td><td>'
.$niz['pol'].'</td><td>'.$niz['mail'].'</td><td>'.$niz['uloga'].'</td>
<td><a href="izmeni.php?id='.$niz['id_korisnik'].'">Izmeni</a></td>
<td style="text-align:center"><input type="checkbox" name="brisanje[]" value="'.$niz['id_korisnik'].'"/> </td></tr>';
}
echo"<tr><th colspan=2><input type='submit' name='btnBrisanje' value='Obriši'/></th></tr>";
mysql_close($konekcija);
echo'</table>';
echo'</form>';

?>

</div>
<div id='noviFilm'>

</div>
</div>

<?php
	include('futer.php');
?>