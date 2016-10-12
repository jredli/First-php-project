<?php
@session_start();
if(isset($_SESSION['uloga']))
{
if($_SESSION['uloga']=="admin")
{
	header('Location:index.php');
}
else if($_SESSION['uloga']=="korisnik")
{
	header('Location:index.php');
}
else {
echo "Nemate prava pristupa"?><a href="index.php">Logovanje</a><?php
}
}
?>