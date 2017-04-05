<?php
	include 'view/includes/traitement_bd.php';
	
?>

<?php 
	include 'view/includes/header.php';
?>

<?php 
	include 'view/includes/menu.php';
?>

<?php
	include 'view/includes/menu_vertical.php';
?>
		<div class="container">
			<div id="content">
				<div class="content_float">
					<h1>Entreprises</h1>
					<br>
					<h2>Rechercher une entreprise</h2>
					<br>
					<form method="post" action="#">
						<label for="entreprise">Nom de l'entreprise :</label>
						<select>
							<option value="bts1">Nodevo</option>
							<option value="bts2">Banania</option>
							<option value="licence">brrrrrr</option>
						</select>
						<input type="submit" name="valider" value="Rechercher">
					</form>
				</div>
				<div class="content">
					<h2>Nouvelle entreprise</h2>
					<br>
					<form method="post" action="#">
						<label for="entreprise">Nom de l'entreprise :</label>
							<input type="text" name="nom_entreprise" />
							<br>
							<br>
						<label for="entreprise">chiffre d'affaire :</label>
							<input type="text" name="chiffre d'affaire">
							<br>
							<br>
						<label for="entreprise">Adresse postale :</label>
							<textarea name="commentaire" ></textarea>
						<input type="submit" name="valider" value="Rechercher">
						<!--<select>
							 Connexion BDO pour charger la liste des élèves en fonction de la classe 
						</select>-->
					</form>
				</div>
			</div>
		</div>
<?php 
	include 'view/includes/footer.php';
?>
















