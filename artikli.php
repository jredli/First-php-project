<?php
	include('header.php');
?>
		<div class="center_content">
		<?php
include('konekcija.php');
$page = (isset($_GET['page'])) ? $page=$_GET['page'] : 0;

if($page=="" || $page=="1")
{
$page1=0;
}
else
{
$page1=($page*3)-3;
}
$rez=mysql_query("select * from artikli limit $page1,3");

			echo '<div id="artikli">';
			
			while($niz=mysql_fetch_array($rez)){
			echo "<div class='artikal'>";
			
			?><img src="<?php echo $niz["slika"];?>"height="200" width="200"><?php echo 
			 $niz["opis"];
			
			echo "</div>";
			

			}
			echo '</div>';
			?>
			
	
		
		<div id="strana">
		<?php
			$upit1="select * from artikli";
$rez1=mysql_query($upit1,$konekcija);
$count=mysql_num_rows($rez1);

$a=$count/3;
$a=ceil($a);

for($b=1;$b<=$a;$b++)
{
?><a href="artikli.php?page=<?php echo $b; ?>" style="text-decoration:none"><?php echo $b." ";?></a>


<?php
}
?>

		</div>
</div>
			
		
		 
        
        	<?php
				include('futer.php');
			?>
