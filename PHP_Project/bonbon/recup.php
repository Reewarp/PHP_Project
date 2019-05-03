<?php
	require "fonction.php";
	$bdd = connect();
	$nom=$_POST["nom"];
	$prix=$_POST["prix"];
	$photo=$_POST["photo"];
	$sql="insert into produit (nom,prix,photo) values ('$nom','$prix','Images/$photo') ";
	$resultat=$bdd->exec($sql);
	
	header("location:index.php");
	

//insert into tableName (ImageColumn) 
//SELECT BulkColumn 
//FROM Openrowset( Bulk 'image..Path..here', Single_Blob) as img

	
	
?>