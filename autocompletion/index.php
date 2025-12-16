<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PokéSearch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home-container">
        <div class="home-logo">PokéSearch</div>
        
        <div class="home-search">
            <form action="recherche.php" method="GET" autocomplete="off">
                <input type="text" id="search-input" name="search" placeholder="Rechercher un Pokémon...">
            </form>
            
            <div id="autocomplete-results" class="autocomplete-items"></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>