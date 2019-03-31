<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	<link rel="stylesheet" href="css/login.css" type="text/css">
    <title>42 Shop</title>
</head>
<body>
<?php
    include('menu.php')
?>
	<div class="login-zone">
		<div class="connexion col-md-4 mx-auto border rounded p-5">
			<form method="POST" action="controller/signadmin.php">
				<h1>Bienvenue <span style="font-family: monospace">Admin</span> !</h1>
				<input type="text" class="input-box" name="user" id="user" placeholder="Login" required>
				<input type="password" class="input-box" name="passwd" id="passwd" placeholder="Mot de passe" required>
				<button type="submit" class="btn btn-primary">Log in</button>
			</form>
		</div>
	</div>
</body>
</html>
