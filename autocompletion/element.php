<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM pokemon WHERE id = ?");
            $stmt->execute([$id]);
            $pokemon = $stmt->fetch();

            if ($pokemon) {
                ?>
                <div class="pokemon-card">
                    <h1><?= htmlspecialchars($pokemon['nom']) ?></h1>
                    <span class="type-badge"><?= htmlspecialchars($pokemon['type']) ?></span>
                    <p><strong>Description :</strong></p>
                    <p><?= nl2br(htmlspecialchars($pokemon['description'])) ?></p>
                    <br>
                    <a href="index.php">Retour à l'accueil</a>
                </div>
                <?php
            } else {
                echo "<p>Pokémon introuvable.</p>";
            }
        } else {
            echo "<p>Aucun ID spécifié.</p>";
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>