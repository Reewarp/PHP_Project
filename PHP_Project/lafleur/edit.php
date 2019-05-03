
<html>
<?php	
session_start();
	require "fonction.php";
	$bdd = connect();
	$designation=$_POST["designation"];
	$prix=$_POST["prix"];
	$image=$_POST["image"];
	$categorie1=$_POST["cat_code"]
	$categorie2=$_POST["cat_libelle"]
	$id=$_SESSION["id"];
	$sql="update produit set designation='$designation', prix=$prix, image=$image,  where id =$id
			update categorie set cat_code=$categorie1
			update categorie set cat_libelle=$categorie2
	";
	$resultat=$bdd->exec($sql);
	//header("location:index.php");
	
?>
	
</html>