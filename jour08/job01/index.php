<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Menu Principal</a></li>
            </ul>
        </nav>
    </header>

    <hr>

    <section>
        <h1>Création de compte</h1>
        
        <form action="index.php" method="POST">

            <div>
                <p>Civilité :</p>
                <label for="mr">Monsieur</label>
                <input type="radio" name="civilite" id="mr" value="M">
                
                <label for="mme">Madame</label>
                <input type="radio" name="civilite" id="mme" value="Mme">
            </div>
            <br>

            <div>
                <label for="prenom">Prénom :</label><br>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div>
                <label for="nom">Nom :</label><br>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="adresse">Adresse :</label><br>
                <input type="text" name="adresse" id="adresse">
            </div>
            <br>

            <div>
                <label for="email">Email :</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <br>

            <div>
                <label for="password">Mot de passe :</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="confirm_password">Confirmez le mot de passe :</label><br>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <br>

            <div>
                <p>Vos passions :</p>
                
                <input type="checkbox" name="passions[]" id="info" value="informatique">
                <label for="info">Informatique</label><br>

                <input type="checkbox" name="passions[]" id="voyages" value="voyages">
                <label for="voyages">Voyages</label><br>

                <input type="checkbox" name="passions[]" id="sport" value="sport">
                <label for="sport">Sport</label><br>

                <input type="checkbox" name="passions[]" id="lecture" value="lecture">
                <label for="lecture">Lecture</label>
            </div>
            <br>

            <button type="submit">Valider l'inscription</button>

        </form>
    </section>

    <hr>

    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>

</body>
</html>