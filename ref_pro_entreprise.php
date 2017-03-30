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
				<form method="post" action="#">
					<h1>Entreprises</h1>

					<h2>Ajouter un référent professionnel :</h2>

					<label for="entreprise">Nom du référent :</label>
						<input type="text" name="nom_ref_E" />
					<br>

					<label for="entreprise">Fonction :</label>
						<select>
							<option value="">Chef Jeff</option>
							<option value="">intégrateur</option>
							<option value="">esclave</option>
						</select>
						<input type="submit" name="valider" value="Valider">
				</form>
			</div>
		</div>