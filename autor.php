<?php
	include("heder.php");
?>

<div id="main">
<div id="omot_autor">
	<div id="autorSlika">
	<?php
	$upit=mysql_query("SELECT img FROM slike WHERE id_slika=3");
	$niz=mysql_fetch_array($upit);
	?>
		<img src="<?php echo $niz['img']; ?>" width="230px" height="230px;">
	</div>	
	
	<div id="autorTekst">
		<h2>O autoru</h2>
		<p>Zovem se Jovan Redli i student sam druge godine Visoke ICT skole.<br>
		Ovaj sajt je radjen kao jedna od predispitnih obaveza.
		</p>
	</div>
</div>
</div>

<?php
	include("futer.php");
?>