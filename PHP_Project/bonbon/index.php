<?php
session_start() ;
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
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
  <img src="candy.png">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	<form class="mr-auto">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Candyhub <span class="sr-only"></span></a>
			</li>
		</ul>
		
	
		<ul class="nav nav-tabs" id="myTab">
			<li class="nav-item">
				<a class="nav-link active" id="home-tab"  href="index.php"  aria-controls="home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="contact-tab"  href="adminlog.php" aria-controls="contact" aria-selected="false">Admin</a>
			</li>
		</ul>
	</form>
	<a href ="homepanier.php" class="navbar-brand">
		<img src="panier.png">
	</a>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
      <input class="form-control mr-sm-2" name="candy" type="search" placeholder="Search" autocomplete="off" aria-autocomplete="on" aria-label="" >
      <button id="cardbuttoncolor" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
































		
<?php
require("fonction.php");
$bdd=connect() ;

 if(!empty($_SESSION['success'])){
?>
	<div class="alert alert-sucess" role="alert" data-auto-dismiss="2000">
		<?php echo($_SESSION['success']);
		unset($_SESSION['success']) ;
		?>
	</div>
<?php
 }
// requête
$sql="select*from produit";
// execution de la requête
$resultat = $bdd->query($sql);
//affichage des resultats dans un objet
while($produit = $resultat->fetch(PDO::FETCH_OBJ))
{
//	echo"".$produit->nom." ".$produit->prix."€</td> <td> <img src='".$produit->photo."'> </td><tr>";
?>

				<div class="CardMarge">
					<div class="card" style="">
						<img src="<?php echo $produit->photo ?>"  alt="">
						<p class="card-text"><?php echo $produit->nom; ?> <br> Price: <?php echo $produit->prix; ?> €</p>
							
							
							<form  class="form-inline my-2 my-lg-0" action="addpanier.php" method="GET">
								<a href="addpanier.php?id=<?php echo $produit->id?>" <?php echo $produit->id;?>>
									<input id="cardbuttoncolor" class="form-control" value="Add To Cart" type="button">   </input>
								</a>
							</form>
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




