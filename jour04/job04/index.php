<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs Dynamique</title>
    <style>
        /* Styles de base pour la visualisation */
        body { font-family: sans-serif; margin: 20px; }
        table { width: 80%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h1>Liste des Utilisateurs</h1>

    <button id="updateButton">Mettre à jour les données</button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody id="userTableBody">
            <tr><td colspan="4">Cliquez sur "Mettre à jour les données" ou rechargez la page.</td></tr>
        </tbody>
    </table>

    <script>
        const updateButton = document.getElementById('updateButton');
        const tableBody = document.getElementById('userTableBody');
        const API_URL = 'users.php'; // Chemin vers votre script API PHP

        /**
         * Fonction asynchrone pour appeler l'API et gérer la réponse.
         */
        async function fetchUsers() {
            try {
                // 1. Indiquer que le chargement est en cours
                updateButton.disabled = true;
                tableBody.innerHTML = '<tr><td colspan="4">Chargement des données...</td></tr>';

                // 2. Appel AJAX (Fetch API) vers le script PHP
                const response = await fetch(API_URL);
                
                if (!response.ok) {
                    throw new Error(`Erreur HTTP: ${response.status}. Vérifiez votre serveur.`);
                }

                // 3. Lire la réponse JSON
                const users = await response.json();
                
                // 4. Rendre le tableau avec les données
                renderTable(users);

            } catch (error) {
                console.error("Erreur de récupération:", error);
                tableBody.innerHTML = `<tr><td colspan="4" style="color: red;">Erreur: ${error.message}</td></tr>`;
            } finally {
                // 5. Réactiver le bouton
                updateButton.disabled = false;
            }
        }

        /**
         * Fonction pour insérer les données JSON dans le tableau HTML.
         * @param {Array} users - Tableau d'objets utilisateurs récupérés.
         */
        function renderTable(users) {
            let html = '';

            if (Array.isArray(users) && users.length > 0) {
                users.forEach(user => {
                    html += `
                        <tr>
                            <td>${user.id}</td>
                            <td>${user.nom}</td>
                            <td>${user.prenom}</td>
                            <td>${user.email}</td>
                        </tr>
                    `;
                });
            } else {
                 html = '<tr><td colspan="4">Aucun utilisateur trouvé ou erreur de format de données.</td></tr>';
            }

            tableBody.innerHTML = html;
        }

        // --- 5. Événements ---
        // Exécuter fetchUsers() quand on clique sur le bouton
        updateButton.addEventListener('click', fetchUsers);

        // Charger les données au premier chargement de la page
        document.addEventListener('DOMContentLoaded', fetchUsers);
    </script>
</body>
</html>