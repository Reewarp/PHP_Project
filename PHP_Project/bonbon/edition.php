<?php
session_start();

if($_SESSION["autorisation"]=="OK")
{

	
?>

 
 
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
		<title>Yohann DUCHEMIN</title>
	</head>
	<body>












<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand">
  <img src="candy.png">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Candyhub <span class="sr-only"></span></a>
      </li>
    </ul>

  </div>
</nav>






















		
<?php

require("fonction.php");
$bdd=connect() ;
$bonbon=$_GET["candy"];

$_SESSION["id"]=$bonbon;



// requête
$sql="select*from produit where id=$bonbon";
// execution de la requête
$resultat = $bdd->query($sql);
//affichage des resultats dans un objet
($produit = $resultat->fetch(PDO::FETCH_OBJ)) ;

//	echo"".$produit->nom." ".$produit->prix."€</td> <td> <img src='".$produit->photo."'> </td><tr>";
?>





				<div class="CardMarge">
					<div class="card" style="">
						<img src="<?php echo $produit->photo ?>"  alt="">
						<p class="card-text"><?php echo $produit->nom; ?> <br> Prix: <?php echo $produit->prix; ?> €</p>
					</div>
				</div>


	
	
	








	<form action="edit.php" method="POST">
			<div class="form-group col-md-2">
				<p id="formcolor"> Name	</p>
					<input type="text" class="form-control" value="<?php echo $produit->nom ?>" name='nom' >
			</div>  
			<div class="form-group col-md-1">
				<p id="formcolor"> Price	</p>
				<input  type="text" class="form-control" value="<?php echo $produit->prix ?>" name="prix">
			</div>  
				<div class="form-group col-md-3">
					<p id="formcolor"> Choose a picture	</p>
					<input value="<?php echo $produit->photo ?>" name="photo" type="text" class="form-control-file btn-light" >
					<input name="photo" type="file" class="form-control-file btn-light" id="exampleFormControlFile1">
				</div>
		</br>
		<div class="form-group col-md-2">

			<a href="index.php"><button type="submit" class="btn btn-warning">Submit</button></a>
	</form>




	</body>
	
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
}
else
{
	header("location:adminlog.php");
}
?>
</html>




