<?php 
session_start();
	$id=$_GET['id'];

		if(isset($_SESSION['panier'][$id]))
		{
			$_SESSION['panier'][$id]--; //retire 1 à la quantité
		}
	
		if ($_SESSION['panier'][$id]==0)
		{
			unset ($_SESSION['panier'][$id]); //enlever le produit si produit = 0	

		}
	
	header("location:homepanier.php");			

?>

?>
	