<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="public/css/style_index.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/png" href="public/img/logo.png" />
	</head>
	<body>
		<img src="public/img/bg2.jpg" class="superbg" />
		<?php
			include 'public/php/background_index.php';
		?>

		<div class="container">
			<div class="center">
				<img src="public/img/logo.png">
				<h1>Lycée Saint Vincent</h1>
				<h3>SUAVITER & FORTIFER</h3>
			</div>
		</div>

		<form action="commons\database\traitement_session.php" method="POST">
		    <div align="center">
		        <label for="login" >Nom d'utilisateur</label>
		        <input type="text" id="login" />
		    </div>
		    <br>
		    <div align="center">
		        <label for="password">Mot de passe</label>
		        <input type="password" id="password" />
		    </div>
		    <br>
		    <div align="center">
		        <button type="submit" class="myButton">Connexion</button>
		    </div>
		</form>
	</body>
</html>
