<div id="desno_anketa">				
				<h2>Anketa</h2>
				<form style="padding-left:12px" name="forma" action="index.php" method="post">
					<?php
						include('konekcija.php');
					$pitanje=" SELECT id_ankete,pitanje FROM ankete WHERE aktivna=1";
					$rez1=mysql_query($pitanje,$konekcija) or die("Upit 1 nije izvrsen!".mysql_error());
					
					$niz1=mysql_fetch_array($rez1);
					echo"<table>";
					echo'<tr><td>'.$niz1['pitanje'].'</td></tr>';
					$upit=" SELECT odgovori,id_odgovori FROM odgovori o,ankete a WHERE a.aktivna=1 AND a.id_ankete=o.id_ankete";
					$rez=mysql_query($upit,$konekcija) or die ("Upit 2 nije izvrsen!".mysql_error());
					
					while($niz=mysql_fetch_array($rez)){
						echo"<tr><td><input type='radio' name='odgovori' value=".$niz['id_odgovori'].">".$niz['odgovori']."</td></tr>";
					}
					echo "<tr><tr><input type='submit' name='glasaj' value='Glasaj'></td></tr>";
					echo "<tr><tr><input type='submit' name='rez' value='Rezultat'></td></tr>";
					echo"</table></form>";
					
					$glasanje=&$_POST['glasaj'];
					$rezultati=&$_POST['rez'];
					
					if(isset($glasanje))
					{
						$odgovor=&$_POST['odgovori'];
						$upisi_odgovor=' UPDATE rezultat SET rezultat=rezultat+1 WHERE id_odgovori='.$odgovor;
						$izvrsi_upisi_odgovor=mysql_query($upisi_odgovor,$konekcija) or die ("Morate izabrati jedan od odgovora");
						if($izvrsi_upisi_odgovor){
						echo'Vas glas je upisan, morate biti logovani da bi videli rezultat.<br>';
						}
						else{
						echo 'Morate izabrati jedan od odgovora';
						}
					}
					else	if(isset($rezultat)){
					$rezultati="SELECT * FROM ankete WHERE aktivna=1";
					$izvrsi_rezultati=mysql_query($rezultati,$konekcija) or die ("Upit 4 nije izvrsen!".mysql_error());
					
					$row=mysql_fetch_array($izvrsi_rezultati);
					$id=$row['id_ankete'];
					
					echo '<table>';
					echo '<tr><td>'.$row['pitanje'].'</td></tr>';
					$odgovori="SELECT o.odgovori,r.rezultat FROM odgovori o,rezultat r WHERE o.id_odgovori=r.id_odgovori AND r.id_ankete=".$id;
					$uzmi_odgovore=mysql_query($odgovori) or die("Upit 5 nije izvrsen!".mysql_error());
					
					while($red=mysql_fetch_array($uzmi_odgovore)){
						echo '<tr><td>'.$red['odgovori'].'</td><td>'.$red['rezultat'].'</td></tr>';
						}
						echo '</table>';
						}
						mysql_close($konekcija);
						?>	
						
						
		</div>