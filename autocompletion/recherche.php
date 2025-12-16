<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats de recherche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            echo "<h2>Résultats pour : " . htmlspecialchars($search) . "</h2>";

            $sql = "SELECT * FROM pokemon WHERE nom LIKE :search";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['search' => '%' . $search . '%']);
            $results = $stmt->fetchAll();

            if (count($results) > 0) {
                echo "<ul>";
                foreach ($results as $pokemon) {
                    echo "<li>";
                    echo "<a href='element.php?id=" . $pokemon['id'] . "'>" . htmlspecialchars($pokemon['nom']) . "</a>";
                    echo " (" . htmlspecialchars($pokemon['type']) . ")";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Aucun Pokémon trouvé.</p>";
            }
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>
</html>