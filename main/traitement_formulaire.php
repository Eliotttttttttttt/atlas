<?php
 
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "eleve";
 
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);
 
 
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}
 
 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$classe = $_POST['classe'];
 
 
$sql = "INSERT INTO inscription (nom, prenom, adresse_email, classe) VALUES ('$nom', '$prenom', '$email', '$classe')";
 
if ($connexion->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur lors de l'inscription : " . $connexion->error;
}
?>