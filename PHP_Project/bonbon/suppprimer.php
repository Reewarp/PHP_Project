<?php	
	require "fonction.php";
	$bdd = connect();
	$id=$_GET["id"];
	$sql="delete from produit where id =$id";
	$resultat=$bdd->exec($sql);
	header("location:admin.php");
?>
	