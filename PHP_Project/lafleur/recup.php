<?php
	require "fonction.php";
	$bdd = connect();
	$designation=$_POST["designation"];
	$prix=$_POST["prix"];
	$image=$_POST["image"];
	$categorie1=$_POST["cat_code"]
	$categorie2=$_POST["cat_libelle"]
	$sql="insert into produit values ('$designation','$prix','$image') ";
	$sql="insert into categorie values ('$categorie1','$categorie2') ";
	$resultat=$bdd->exec($sql);
	echo $sql
	//header("location:index.php");
	

//insert into tableName (ImageColumn) 
//SELECT BulkColumn 
//FROM Openrowset( Bulk 'image..Path..here', Single_Blob) as img

	
	
?>