<?php
	session_start();
	unset ($_SESSION['panier']);
	header("location:homepanier.php");
?>