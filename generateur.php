<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Générateur de noms et prénoms aléatoires</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="generateur.js"></script>
</head>
<body>
	<h1>Générateur de noms et prénoms aléatoires</h1>
	<ul>
		<?php
			// Tableaux de noms et prénoms aléatoires
			$noms = array('Darleen', 'Fidélia', 'Andréa', 'Marie', 'Stephen', 'Max', 'Louis', 'Maurine', 'Lucie', 'Paul');
            $prenoms = array('Mariella', 'Emma', 'Lola', 'Axelle', 'Aya', 'Riem', 'Ethan', 'Sophie', 'Maylon', 'Sarah');

			// Générer des index aléatoires pour le nom et le prénom
			$indexNom = array_rand($noms);
			$indexPrenom = array_rand($prenoms);

			// Fonction pour générer un nom aléatoire
			function genererNom() {
				global $noms, $indexNom;
				$indexNom = array_rand($noms);
			}

			// Fonction pour générer un prénom aléatoire
			function genererPrenom() {
				global $prenoms, $indexPrenom;
				$indexPrenom = array_rand($prenoms);
			}

			// Afficher le nom et le prénom correspondant aux index aléatoires
			echo "<li id='prenom'>" . $prenoms[$indexPrenom] . "</li>";
			echo "<li id='nom'>" . $noms[$indexNom] . "</li>";
		?>
	</ul>
	<div class="button-container">
  <button onclick="genererPrenom()">Générer un nouveau prénom</button>
  <button onclick="genererNom()">Générer un nouveau nom</button>
  <button onclick="window.location.reload()">Générer un nouveau nom et prénom</button>
</div>
</body>
</html>


