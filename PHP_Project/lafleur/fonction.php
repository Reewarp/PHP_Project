<?php
include ("config.php");
//fonction de connexion	
function connect()
{
	try
	{
	$connect = new PDO('mysql:host='.HOTE.';dbname='.BDD,UTILISATEUR,MDP,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));	 
	}
	 
	catch(PDOException $e)
	{
		echo" probleme de connexion a la BDD <br>" . $e->getMessage();
	}
return $connect;
}

?>