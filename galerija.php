<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Filmovi</title>
<meta name="keywords" content="Film, movies, filmovi" />
<meta name="description" content="Filmovi sajt je namenjen svima." />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

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

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="js/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

</head>
<body>

<div id="omot">
	<div id="zaglavlje">
    	<div id="site_title"><a href=""></a></div>
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

<div id="main1">
<?php
	$upit=mysql_query("SELECT slika FROM film");
	
	while($niz=mysql_fetch_array($upit))
	{
	?>	
		<a class="fancybox" rel="group" href="<?php echo $niz['slika'];?>"><img src="<?php echo $niz['slika'];?>" width="200" height="200" alt="" /></a>
	<?php
	}
	?>
</div>
	<?php
			include('futer.php');
	?>
       
      
      
    
    

