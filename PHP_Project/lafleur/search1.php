<?php
session_start() ;
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
		<a href="https://icons8.com/icon/11997/delete"></a>
		<title>Yohann DUCHEMIN</title>

		</head>
	<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand">
  <img src="flower.png">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	<form class="mr-auto">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">"Dites le avec LAFLEUR" <span class="sr-only"></span></a>
			</li>					
		</ul>
		<ul class="nav nav-tabs" id="myTab">
			<li class="nav-item">
				<a class="nav-link active " id="home-tab"  href="index.php"  aria-controls="home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " id="contact-tab"  href="admin.php" aria-controls="contact" aria-selected="false">Admin</a>
			</li>
			<li>
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Choisir une categorie
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="search1.php">Bulbes</a>
						<a class="dropdown-item" href="search2.php">Plantes à massif</a>
						<a class="dropdown-item" href="search3.php">Rosier</a>
					</div>
				</div>
			</li>
		</ul>
	</form>
  </div>
</nav>
































		
<?php
require("fonction.php");
$bdd=connect() ;
?>
<?php

// requête

$sql="select*from produit where categorie LIKE 'bul'";
// execution de la requête
$resultat = $bdd->query($sql);
//affichage des resultats dans un objet
while($produit = $resultat->fetch(PDO::FETCH_OBJ))
{
	//echo"".$produit->designation." ".$produit->prix."€</td> <td> <img src='".$produit->image."'> </td><tr>";
?>

				<div class="CardMarge text-center">
					<div class="card" style="">
						<img class="img-fluid rounded" src="<?php echo $produit->image;?>"  alt="">		
						<p class="card-text"><?php echo $produit->designation; ?> <br> Price: <?php echo $produit->prix; ?> $</p>						
					</div>
				</div>
<?php
}
?>	



	</body>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="bootstrap-auto-dismiss-alert">
		</script>


	</html>






