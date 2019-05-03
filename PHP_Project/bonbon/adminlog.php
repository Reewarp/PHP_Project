<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<a href="https://icons8.com/icon/11997/delete"></a>
		<script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
		<title>Yohann DUCHEMIN</title>

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
						<a class="nav-link active" id="contact-tab"  href="adminlog.php" aria-controls="contact" aria-selected="false">Admin</a>
					</li>
				</ul>
			</form>
	</div>
	</nav>
	
	
	<div class="w-25 p-3">
		<form class="mr-auto md-5" action="verif.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Login</label>
				<input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="login='admin'">
				<small id="emailHelp" class="form-text text-muted"></small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input name="mdp" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password='bonbon'">
			</div>
			<button id="cardbuttoncolor" type="submit" class="btn btn-primary" href='verif.php'>Submit</button>
		</form>
	</div>


	</body>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="bootstrap-auto-dismiss-alert">
		</script>

	</html>





