<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Filtre Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Rechercher des Pokémon</h1>

    <div class="container">
        <form id="filterForm">
            <div class="form-group">
                <label for="id">ID :</label>
                <input type="text" id="id" name="id" placeholder="Ex: 1, 10, ...">
            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" placeholder="Ex: Pikachu, Bulbi, ...">
            </div>

            <div class="form-group">
                <label for="type">Type :</label>
                <select id="type" name="type">
                    <option value="">Tous les types</option>
                </select>
            </div>

            <input type="button" id="filtrer" value="Filtrer">
        </form>
    </div>

    <hr>

    <div id="resultats">
        <h2>Résultats du filtrage</h2>
        <p>Veuillez cliquer sur "Filtrer" pour voir tous les Pokémon ou appliquer des critères.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>