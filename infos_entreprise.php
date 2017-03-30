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
			<div>
				<h1>Nom entreprise</h1>
				<p>Cette société totalise (nb stages) à son actif</p>
				<h2>Informations de l'entreprise</h2>
				<br>
				<form method="post" action="#">
					<label for="entreprise">Nom de l'entreprise :</label>
					<select>
						<option value="">Nodevo</option>
						<option value="">Banania</option>
						<option value="">brrrrrr</option>
					</select>
				</form>
				<br>
					<h2>Nouvelle entreprise</h2>
					<br>
					<form method="post" action="#">
						<label for="entreprise">Nom de l'entreprise :</label>
							<input type="text" name="nom_entreprise" />
						<br>
						<label for="entreprise">Type d'entreprise :</label>
						<select>
							<option value="">SSII</option>
							<option value="">Salafiste</option>
							<option value="">ISIS</option>
						</select>
						<br>
						<label for="entreprise">Chiffre d'affaires :</label>
							<input type="text" name="CA_entreprise" />
						<br>
						<label for="entreprise">Adresse postale :</label>
							<textarea name="commentaire" ></textarea>
						<br>
						<label for="entreprise">Responsable technique :</label>
						<select>
							<option value="">M. Ammar</option>
							<option value="">M. kkk</option>
							<option value="">M. kfc</option>
						</select>
							
						<input type="submit" name="valider" value="Editer les informations">
						<!--<select>
							 Connexion BDO pour charger la liste des élèves en fonction de la classe 
						</select>-->
					</form>
				</div>
				<div>
					<table style="width: 100%">
						<thead>
							<tr>
								<th>Année</th>
								<th>Elève</th>
								<th>Référent pédagogique</th>
								<th>Référent professionnel</th>
								<th>Action</th>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
<?php 
	include 'view/includes/footer.php';
?>