document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search-input');
    const resultsContainer = document.getElementById('autocomplete-results');

    // Écoute de la frappe
    searchInput.addEventListener('input', function() {
        const term = this.value;

        if (term.length < 1) {
            resultsContainer.innerHTML = '';
            resultsContainer.style.display = 'none';
            return;
        }

        // Appel AJAX vers le PHP
        fetch(`traitement_autocomplete.php?term=${term}`)
            .then(response => response.json())
            .then(data => {
                resultsContainer.innerHTML = '';
                
                const hasStarts = data.starts.length > 0;
                const hasContains = data.contains.length > 0;

                if (!hasStarts && !hasContains) {
                    resultsContainer.style.display = 'none';
                    return;
                }

                resultsContainer.style.display = 'block';

                // 1. Affichage des correspondances exactes (Commence par)
                data.starts.forEach(pokemon => {
                    createItem(pokemon, 'bold-match');
                });

                // 2. Séparateur (seulement si on a les deux types de résultats)
                if (hasStarts && hasContains) {
                    const separator = document.createElement('div');
                    separator.className = 'separator';
                    separator.innerText = 'Autres résultats contenant "' + term + '"';
                    resultsContainer.appendChild(separator);
                }

                // 3. Affichage des correspondances partielles (Contient)
                data.contains.forEach(pokemon => {
                    createItem(pokemon, 'normal-match');
                });
            });
    });

    // Fonction pour créer un élément de liste
    function createItem(pokemon, type) {
        const div = document.createElement('div');
        div.className = 'result-item ' + type;
        div.innerText = pokemon.nom;
        
        // Clic sur un résultat -> Redirection vers element.php
        div.addEventListener('click', () => {
            window.location.href = `element.php?id=${pokemon.id}`;
        });

        resultsContainer.appendChild(div);
    }

    // Cacher les résultats si on clique ailleurs
    document.addEventListener('click', (e) => {
        if (e.target !== searchInput && e.target !== resultsContainer) {
            resultsContainer.style.display = 'none';
        }
    });
});