<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Oceni Film</title>
<meta name="keywords" content="Oceni, film, movies, filmovi" />
<meta name="description" content="Oceni sajt je namenjen svima." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />	
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript">
function enableCheckbox(){
document.getElementById('onako').disabled=false;
}
function disableCheckbox(){
document.getElementById('onako').disabled=true;
}
</script>
<script language="javascript" type="text/javascript">


ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', 
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>

<div id="omot">
	<div id="zaglavlje">
		<?php 
		include("konekcija.php");
		$upit=mysql_query("SELECT img FROM slike WHERE id_slika=4");
		$niz=mysql_fetch_array($upit);
		?>
    	<a href="index.php"><img src="<?php echo $niz['img']; ?>"></a>
    </div>
    <div id="meni" class="ddsmoothmenu">
	<ul>
	<?php
		include("konekcija.php");
		
		$upit="SELECT ime_strane, href FROM meni";
		$rezultat=mysql_query($upit,$konekcija);
		$br=mysql_num_rows($rezultat);
		
		if(isset($_SESSION['uloga'])){
		if($_SESSION['uloga']=="admin")
		{
		for($i=0; $i<$br; $i++){
			$niz=mysql_fetch_array($rezultat);
			echo"<li><a href='".$niz['href']."'>".$niz['ime_strane']."</a></li>";
			}
			echo"<li><a href='administrator.php'>Admin Panel</a></li>";
			echo"<li><a href='filmovi.php'>Filmovi</a></li>";
			echo"<li><a href='logout.php'>Logout</a></li>";
		}
		
		else if($_SESSION['uloga']=="korisnik")
		{
				for($i=0; $i<$br; $i++){
			$niz=mysql_fetch_assoc($rezultat);
			echo"<li><a href='".$niz['href']."'>".$niz['ime_strane']."</a></li>";
			}
			echo"<li><a href='filmovi.php'>Filmovi</a></li>";
			echo"<li><a href='logout.php'>Logout</a></li>";
		}
		}
		else 
		{
			for($i=0; $i<$br; $i++){
			$niz=mysql_fetch_assoc($rezultat);
			echo"<li><a href='".$niz['href']."'>".$niz['ime_strane']."</a></li>";
			}
		}
		
			
			?>
			</ul>
			
	</div>
	
	
    <div id="templatemo_slider">
    	 <div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider">
            	<img src="images/slider/s.jpg" width="100%" height="100%" alt="Clash of the titans" title="Uzbudljiva epska avantura" />
                <img src="images/slider/a.jpg"  width="100%" height="100%" alt="Oblivion" title="" />
                <img src="images/slider/q.jpg"  width="100%" height="100%" alt="" title="" /></a>                
				<img src="images/slider/c.jpg" width="100%" height="100%" alt="" title="" />
				<img src="images/slider/d.jpg" width="100%" height="100%" alt="" title="" />
            </div>
            <div class="nivo-controlNav-bg"></div>
        </div> 
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:true
			});
        });
        </script>
    </div>
