<?php 
session_start();

$login=$_POST['login'];
$mdp=md5($_POST['mdp']);


include("fonction.php");
$bdd=connect();


$sql="select * from admin where mdp='$mdp' and login='$login'";
$resultat=$bdd->query($sql);
$resultat->fetch(PDO::FETCH_OBJ);
$nb_lignes=$resultat->rowCount();
if($nb_lignes==0)
{
	header("location:index.php");
}
else
{
	$_SESSION["admin"]=$rep->login;
	$_SESSION["autorisation"]="OK";
	header('location:accueiladmin.php');
}

?>

