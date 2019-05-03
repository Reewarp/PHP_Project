<?php
//connexion à la BDD 
require "config.php";
$bdd=connect();
?>


<?php	
$connect = new PDO('mysql:host=localhost;dbname=lafleur','root','');	 
$connect= array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
// function 
try
{
		$connect=new PDO('mysql:host=localhost;dbname=lafleur','root','');
}
catch	(PDOException $e)
{
	echo "problème de connexion à la BDD <br>".$e->getMessage();
}
return $connect;
?>
