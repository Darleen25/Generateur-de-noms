// Tableaux de prénoms et de noms
var prenoms = ["Mariella", "Emma", "Lola", "Axelle", "Aya", "Riem", "Ethan", "Sophie", "Maylon", "Sarah"];
var noms = ["Darleen", "Fidélia", "Andréa", "Marie", "Stephen", "Max", "Louis", "Maurine", "Lucie", "Paul"];

// Fonction pour générer un index aléatoire
function genererIndex(tableau) {
  var index = Math.floor(Math.random() * tableau.length);
  return index;
}

// Fonction pour générer un prénom aléatoire
function genererPrenom() {
  var index = genererIndex(prenoms);
  var prenom = prenoms[index];
  document.getElementById("prenom").innerHTML = prenom;
}

// Fonction pour générer un nom aléatoire
function genererNom() {
  var index = genererIndex(noms);
  var nom = noms[index];
  document.getElementById("nom").innerHTML = nom;
}

// Fonction pour générer un nom complet aléatoire
function genererNomComplet() {
  var indexPrenom = genererIndex(prenoms);
  var indexNom = genererIndex(noms);
  var prenom = prenoms[indexPrenom];
  var nom = noms[indexNom];
  var nomComplet = prenom + " " + nom;
  document.getElementById("nom-complet").innerHTML = nomComplet;
}

// Fonction pour modifier le prénom
function modifierPrenom() {
  var prenom = prompt("Entrez le nouveau prénom :");
  if (prenom != null) {
    document.getElementById("prenom").innerHTML = prenom;
  }
}

// Fonction pour modifier le nom
function modifierNom() {
  var nom = prompt("Entrez le nouveau nom :");
  if (nom != null) {
    document.getElementById("nom").innerHTML = nom;
  }
}
