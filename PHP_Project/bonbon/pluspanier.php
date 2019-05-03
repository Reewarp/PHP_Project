<?php 
session_start();
	$id=$_GET['id'];
	if(!isset($_SESSION['panier']))

	{
		$_SESSION['panier']=array(); //création de la variable session
	}
		if(isset($_SESSION['panier'][$id]))
		{
			$_SESSION['panier'][$id]++; //ajoute 1 à la quantité
		}
		else
		{
			$_SESSION['panier'][$id]=1; //sinon met la quantité 	

		}
			$_SESSION['success']="le produit à été ajouté au panier !";
	
	header("location:homepanier.php");			

?>

