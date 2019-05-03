
<html>
<?php	
session_start();
	require "fonction.php";
	$bdd = connect();
	$nom=$_POST["nom"];
	$prix=$_POST["prix"];
	$photo=$_POST["photo"];
	$id=$_SESSION["id"];
	$sql="update produit set nom='$nom', prix=$prix, photo='Images/$photo' where id =$id";
	$resultat=$bdd->exec($sql);
	header("location:index.php");
	
?>
	
</html>