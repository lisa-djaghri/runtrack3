<header>
    <h1><a href="index.php" style="color:white; text-decoration:none;">PokéSearch</a></h1>
    <div class="search-container">
        <form action="recherche.php" method="GET" autocomplete="off">
            <input type="text" id="search-input" name="search" placeholder="Rechercher..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        </form>
        <div id="autocomplete-results" class="autocomplete-items" style="border-radius: 0 0 5px 5px;"></div>
    </div>
</header>