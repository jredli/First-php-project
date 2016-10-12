</div>
<div id="omot_dole">
	<div id="dole">
	<div class="col one_fourth">
	<h4>Galerija</h4>
	<?php include("konekcija.php"); 
	$upit=mysql_query("SELECT img FROM slike WHERE id_slika=1");
	$niz=mysql_fetch_array($upit);
	?>
        <a href="galerija.php"><img src="<?php echo $niz['img']; ?>" width="200px" height="150px" id="futer_slika"></a>			
		</div>
    	<div class="col one_fourth">
		<h4>Filmovi</h3>
		<?php
		$upit=mysql_query("SELECT img FROM slike WHERE id_slika=2");
		$niz=mysql_fetch_array($upit);
		?>
            <img src="<?php echo $niz['img']; ?>" width="200px" height="150px" id="futer_slika">
        </div>
    	<div class="col one_fourth">
    	<h4>Navigacija</h4>
        <ul class="no_bullet">
            <li>
                <span class="header"><a href="index.php">Pocetna</a></span>
            </li>
                <li>
                <span class="header"><a href="registracija.php">Registracija</a></span>
            </li>
			<li>
                <span class="header"><a href="autor.php">Autor</a></span>
            </li>
		</ul>
    </div>
    <div class="col one_fourth no_margin_right">
    	<h4>Twitter</h4>
        <ul class="no_bullet">
        	<li><a href="www.twitter.com">Twitter</a> Posetite nas na twiteru.</li>
        </ul>
		<h4>Facebook</h4>
		<ul class="no_bullet">
        	<li><a href="facebook.com">Facebook</a> Posetite nas i na facebook-u.</li>
        </ul>
		<h4>Youtube</h4>
		<ul class="no_bullet">
        	<li><a href="www.tyoutube.com">Youtube</a> Kao i na youtube-u.</li>
        </ul>
    </div>
        
        <div class="clear"></div>
    </div>
    </div>  
<div id="omot_futera">    
    <div id="futer">
    	<p>Web programiranje PHP</p>
    </div>
</div>

</body>
</html>