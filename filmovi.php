<?php
		include("heder.php");
?>

<div id="main">
<?php
include("konekcija.php");

$page = (isset($_GET['page'])) ? $page=$_GET['page'] : 0;  


if($page=="" || $page=="1"){
	$page1=0;
}
else{
	$page1=($page*4)-4;
}

$rez=mysql_query("SELECT * FROM film LIMIT $page1,4");

echo'<div id="filmovi">';

while($niz=mysql_fetch_array($rez)){

	echo "<div class='film'>";
	
	?>
	<img src="<?php echo $niz['slika']; ?>" height="100" width="100">
	<?php
	echo $niz['opis'];
	echo "</div>";	
	}
	
echo'</div>';	?>
<div id="strana">
<?php
	$rez1=mysql_query("SELECT * FROM film");
	$cou=mysql_num_rows($rez1);
	
	$a=$cou/4;
	$a=ceil($a);
		for($b=1;$b<=$a;$b++){
		
		?><a href="filmovi.php?page=<?php echo $b ?>" style="text-decoration:none"><?php echo $b." " ?></a><?php
		
		}
	?>
</div>
</div>

<?php
include("futer.php");
?>

