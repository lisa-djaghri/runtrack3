document.addEventListener('DOMContentLoaded', () => {
    const filterButton = document.getElementById('filtrer');
    const idInput = document.getElementById('id');
    const nomInput = document.getElementById('nom');
    const typeSelect = document.getElementById('type');
    const resultatsDiv = document.getElementById('resultats');

    const JSON_URL = 'pokemon.json'; 
    let allPokemon = [];

    async function init() {
        try {
            const response = await fetch(JSON_URL);
            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }
            allPokemon = await response.json();
            
            populateTypeDropdown(allPokemon);
            
            displayResults(allPokemon);

        } catch (error) {
            resultatsDiv.innerHTML = `<p style="color: red;">Erreur lors du chargement des données : ${error.message}. Vérifiez si '${JSON_URL}' existe.</p>`;
            console.error(error);
        }
    }

    function populateTypeDropdown(pokemonData) {

        const allTypes = new Set();
        pokemonData.forEach(p => {

            if (Array.isArray(p.type)) {
                p.type.forEach(t => allTypes.add(t));
            } else {
                 allTypes.add(p.type);
            }
        });

        const sortedTypes = Array.from(allTypes).sort();
        sortedTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type;
            option.textContent = type;
            typeSelect.appendChild(option);
        });
    }

    function filterPokemon() {
        const criteria = {
            id: idInput.value.trim().toLowerCase(),
            nom: nomInput.value.trim().toLowerCase(),
            type: typeSelect.value.trim().toLowerCase()
        };

        const filteredPokemon = allPokemon.filter(pokemon => {

            if (criteria.id && pokemon.id.toString() !== criteria.id) {
                return false;
            }

            if (criteria.nom && !pokemon.name.french.toLowerCase().includes(criteria.nom)) {
                return false;
            }

            if (criteria.type) {

                const types = Array.isArray(pokemon.type) ? pokemon.type : [pokemon.type];
                if (!types.map(t => t.toLowerCase()).includes(criteria.type)) {
                    return false;
                }
            }

            return true;
        });

        displayResults(filteredPokemon);
    }

    function displayResults(pokemonList) {
        let htmlContent = `<h2>Résultats du filtrage (${pokemonList.length} Pokémon trouvés)</h2>`;
        
        if (pokemonList.length === 0) {
            htmlContent += `<p>Aucun Pokémon ne correspond aux critères de recherche.</p>`;
        } else {
            htmlContent += '<ul class="pokemon-list">';
            pokemonList.forEach(p => {

                const types = Array.isArray(p.type) ? p.type.join(', ') : p.type;
                htmlContent += `
                    <li class="pokemon-card">
                        <strong>ID:</strong> ${p.id}<br>
                        <strong>Nom:</strong> ${p.name.french || p.name}<br>
                        <strong>Type(s):</strong> ${types}
                    </li>
                `;
            });
            htmlContent += '</ul>';
        }

        resultatsDiv.innerHTML = htmlContent;
    }
    
    filterButton.addEventListener('click', filterPokemon);

    init();
});