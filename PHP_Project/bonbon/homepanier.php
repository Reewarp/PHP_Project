<?php
session_start();
require "fonction.php";
	$bdd = connect();	
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<a href="https://icons8.com/icon/11997/delete"></a>
		<a href="https://icons8.com/icon/63650/plus"></a>
	</head>
	<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand">
  <img src="candy.png">
  </a>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
	<form class="mr-auto md-5">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Candyhub <span class="sr-only"></span></a>
			</li>
		</ul>
		<ul class="nav nav-tabs" id="myTab">
			<li class="nav-item">
				<a class="nav-link " id="home-tab"  href="index.php"  aria-controls="home" aria-selected="true">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " id="contact-tab"  href="adminlog.php" aria-controls="contact" aria-selected="false">Admin</a>
			</li>
		</ul>
	</form>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li id="nav-link-color"class="nav-item active">

					<a id="cardbuttoncolor" href="index.php" class="btn btn-dark"> Poursuivre mes achats</a>
					<a id="cardbuttoncolor" href="viderpanier.php?=id" class="btn btn-dark"> Vider panier</a>

			</li>
		</ul>
	</div>
	

</nav>




	<table class="table table-borderless table">
			<thead>
				<tr>
					<th class="btn-warning" scope="col">Produit</th>
					<th class="btn-warning" scope="col">Prix Unit.</th>
					<th class="btn-warning" scope="col">Quantité</th>
					<th class="btn-warning" scope="col">Montant</th>	  
					<th class="btn-warning" scope="col">Ajouter</th>	  
					<th class="btn-warning" scope="col">Supprimer</th>	  
				</tr>
			</thead>
			
			<tbody>
<?php
	$Ht=0;	
if (!isset($_SESSION["panier"]))
{
?>

<?php
}
else
{
	foreach ($_SESSION['panier'] as $id=>$quantite)
	{
		$sql="select * from produit where id=$id";
							$resultat = $bdd->query($sql);
							$produit = $resultat->fetch(PDO::FETCH_OBJ);

?>	
				<tr>
					 <th scope="row"> 
						<?php echo $produit->nom;?>
					 </th>
					 <td> <?php echo $produit->prix;?> </td>
					 <td> <?php echo $quantite;?> </td>
					 <td> <?php echo $montant=$quantite*$produit->prix;?> </td>
					 <td>					
						<form class="form-inline my-2 my-lg-0" action="pluspanier.php" method="GET">
							<a href="pluspanier.php?id=<?php echo $produit->id?>" <?php echo $produit->id;?>>
							 <img id="icon-home-panier" src="https://img.icons8.com/color/48/000000/plus.png">
							</a>
						</form>
					</td>
					 <td>
						<form class="form-inline my-2 my-lg-0" action="deletepanier.php" method="GET">
							<a href="deletepanier.php?id=<?php echo $produit->id?>"<?php echo $produit->id;?>>
								<img id="icon-home-panier" src="https://img.icons8.com/color/48/000000/delete-sign.png">
							</a>
						</form>
					</td>

					


					
					 

						
				</tr>
			
<?php
$Ht = $Ht +$montant;
}
}

$Ttc = ($Ht * 1.196)+5;
$frdp = 5;
$Tva = $Ht * 19.6/100;
?>


</tbody>
		</table>
		<div class="w-75 ">
			<table class="table table-borderless table ">
				<thead >
					<tr >
						<th id="table-position" class="btn-warning" scope="col">Total HT :
							<td class="btn-warning">
							<?php echo $Ht?> $ 
							</td >							
						</th>  
					</tr>
					<tr>
						<th id="table-position" class="btn-warning" scope="col">TVA(19.6) :
							<td class="btn-warning">
							<?php echo $Tva?> $
							</td >							
						</th>  
					</tr>
					<tr>
						<th id="table-position" class="btn-warning" scope="col">Frais de port :
							<td class="btn-warning">
							<?php echo $frdp?> $
							</td >	
						</th>  
					</tr>				
					<tr> 
						<th id="table-position" class="btn-warning" scope="col">Total TTC : 	
							<td class="btn-warning">
							<?php echo $Ttc?> $
							</td >		
						</th>
										
					</tr>
				</thead>
				<tbody>
				
				</tbody>
			</table>
		</div>
	</body>
</html>

