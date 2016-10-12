

<?php
include('konekcija.php');
$page=$_GET["page"];

if($page=="" || $page=="1")
{
$page1=0;
}
else{
$page1=($page*3)-3;
}
$upit=("select * from artikli limit $page1,3");
$rez=mysql_query($upit,$konekcija);
while($niz=mysql_fetch_array($rez))
{
echo $niz["opis"];

}
$upit1="select * from artikli";
$rez1=mysql_query($upit1,$konekcija);
$count=mysql_num_rows($rez);

$a=$count/3;
$a=ceil($a);

for($b=1;$b<=$a;$b++)
{
?>
<a href="artikli.php?page=<?php echo $b;?>" style="text-decoration:none">
<?php echo $b." "; ?>
</a>
<?php
}
?>