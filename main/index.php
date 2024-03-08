<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style_site.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Inscription à la soirée</h1>
            <p>Remplissez le formulaire ci-dessous pour vous inscrire à notre soirée incroyable!</p>
        </div>
        <form action="traitement_formulaire.php" method="post" onsubmit="afficherPopup()">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
           
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="classe">Classe</label>
                <select id="classe" name="classe" required>
                    <option value="">Sélectionnez la classe</option>
                    <option value="1">Terminale 1</option>
                    <option value="2">Terminale 2</option>
                    <option value="3">Terminale 3</option>
                    <option value="4">Terminale 4</option>
                    <option value="5">Terminale 5</option>
                    <option value="6">Terminale 6</option>
                    <option value="7">Terminale 7</option>
                    <option value="8">STMG 1</option>
                    <option value="9">STMG 2</option>
                    <option value="10">STI2D</option>
                </select>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
        <div class="conditions">
            <h2>Conditions d'utilisation :</h2>
            <ul>
                <li>En utilisant ce site Web, vous acceptez de fournir des informations exactes et à jour lors de l'inscription.</li>
                <li>Vous acceptez de ne pas utiliser ce site à des fins illicites ou interdites par la loi.</li>
                <li>Vous êtes seul responsable de maintenir la confidentialité de vos informations d'identification.</li>
                <li>Vous acceptez de ne pas perturber ou nuire au fonctionnement normal du site.</li>
                <li>Vous comprenez et acceptez que l'utilisation de ce site se fait à vos propres risques.</li>
                <li>Nous nous réservons le droit de modifier ou de mettre à jour ces conditions d'utilisation à tout moment, sans préavis.</li>
            </ul>
        </div>
    </div>
    <script>
        function afficherPopup() {
            alert("Vous avez été inscrit avec succès! Vous recevrez bientôt un e-mail d'invitation.");
        }
    </script>
</body>
</html>