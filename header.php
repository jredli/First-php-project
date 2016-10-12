<?php
	@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lego</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="js/jquery.core.js"></script>
<script type="text/javascript" src="js/jquery.superfish.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.scripts.js"></script>

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
<div id="wrap">
    <div class="top_corner"></div>
    <div id="main_container">
    
        <div id="header">
            <div id="logo"><a href="index.html"><img src="images/lego1.png" alt="" title="" height="80" width="180" /></a></div>
            
            
            
            <div id="menu">
        	
 <ul>
 <?php
  include("konekcija.php");
  
  $upit="SELECT ime_strane, link FROM meni";
  $rezultat=mysql_query($upit,$konekcija);
  $br=mysql_num_rows($rezultat);
  
  if(isset($_SESSION['uloga'])){
  if($_SESSION['uloga']=="admin")
  {
  for($i=0; $i<$br; $i++){
   $niz=mysql_fetch_array($rezultat);
   echo"<li><a href='".$niz['link']."'>".$niz['ime_strane']."</a></li>";
   }
   echo"<li><a href='administrator.php'>admin panel</a></li>";
   echo"<li><a href='artikli.php'>artikli</a></li>";
   echo"<li><a href='logout.php'>logout</a></li>";
  }
  
  else if($_SESSION['uloga']=="korisnik")
  {
    for($i=0; $i<$br; $i++){
   $niz=mysql_fetch_assoc($rezultat);
   echo"<li><a href='".$niz['link']."'>".$niz['ime_strane']."</a></li>";
   }
   echo"<li><a href='artikli.php'>artikli</a></li>";
   echo"<li><a href='logout.php'>logout</a></li>";
  }
  }
  else 
  {
    for($i=0; $i<$br; $i++){
   $niz=mysql_fetch_assoc($rezultat);
   echo "<li><a href='".$niz['link']."'>".$niz['ime_strane']."</a></li>";
   }
   }
  
  
   
   ?>
   </ul>
        </div>
            
        
        </div>
        
        
        <div class="middle_banner">               
           
<div class="featured_slider">
      	<!-- begin: sliding featured banner -->
         <div id="featured_border" class="jcarousel-container">
            <div id="featured_wrapper" class="jcarousel-clip">
               <ul id="featured_images" class="jcarousel-list">
                  <li><img src="images/lego15.jpg" width="965" height="308" alt="Truperi" /></li>
                  <li><img src="images/l.png" width="965" height="308" alt="Lego" /></li>
                  <li><img src="images/lego13.jpg" width="965" height="308" alt="Lego" /></li>
                  <li><img src="images/lego6.jpg" width="965" height="308" alt="Truperi" /></li>
               </ul>
            </div>
       
            <ul id="featured_buttons" class="clear_fix">
               <li>1</li>
               <li>2</li>
               <li>3</li>
               <li>4</li>
            </ul>
         </div>
         <!-- end: sliding featured banner -->
</div>
          
        
        
        </div><!---------------------------------end of middle banner-------------------------------->
	</div>	
</div>

