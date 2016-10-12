<?php
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
</head>
<body>

<div id="omot">
	<div id="zaglavlje">
    	<div id="site_title"><a href=""></a></div>
    	<div id="search">
            <form action="#" method="get">
              <input type="text" value="Pretrazi..." name="keyword" id="keyword" title="keyword" 
              				onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="search" value="" alt="Search" id="search" title="Search" class="sub_btn"  />
            </form>
        </div>
    </div>
    <div id="meni" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php" >Pocetna</a></li>  
			<li><a href="registracija.php">Registracija</a></li>   			
			<li><a href="filmovi.php">Filmovi</a></li>   		
            <li><a href="autor.php">Autor</a></li>
        </ul>
        <br style="clear: left" />
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
	<div id="main">
		<h2>USPEH!</h2>
		<p>Uspesno ste napravili akaunt na OceniFIlm.</p>
	</div>
	
</div>
<div id="omot_dole">
	<div id="dole">
    	<div class="col one_fourth">
            <h4>About</h4>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor lacus vel risus ullamcorper tempor. Pellentesque vestibulum vulputate odio sit amet adipiscing.</p>
        </div>
    	<div class="col one_fourth">
            <img src="images/futer.png" width="200px" height="150px" id="futer_slika">
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
				<span class="header"><a href="filmovi.php">Filmovi</a></span>
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