<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Tailwind Complet</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">
    <header class="bg-blue-600 text-white shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold tracking-wide">Mon Site</div>
            <ul class="flex space-x-6 font-medium">
                <li><a href="index.php" class="hover:text-blue-200 transition duration-300">Menu Principal</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        <section class="bg-white p-8 rounded-lg shadow-lg max-w-3xl mx-auto border-t-4 border-blue-600">
            <h1 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-4">Création de compte</h1>
            
            <form action="index.php" method="POST" class="space-y-6">

                <div>
                    <span class="block text-sm font-semibold text-gray-700 mb-2">Civilité</span>
                    <div class="flex items-center space-x-6">
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="radio" name="civilite" value="M" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <span class="ml-2">Monsieur</span>
                        </label>
                        <label class="inline-flex items-center cursor-pointer">
                            <input type="radio" name="civilite" value="Mme" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                            <span class="ml-2">Madame</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <input type="text" name="prenom" id="prenom" required class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                    </div>
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" name="nom" id="nom" required class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                    </div>
                </div>

                <div>
                    <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                        <input type="password" name="password" id="password" required class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                    </div>
                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirmation</label>
                        <input type="password" name="confirm_password" id="confirm_password" required class="w-full rounded-md border-gray-300 shadow-sm border p-2 focus:border-blue-500 focus:ring-blue-500 transition">
                    </div>
                </div>

                <div class="bg-gray-50 p-4 rounded-md">
                    <p class="block text-sm font-semibold text-gray-700 mb-3">Vos passions</p>
                    <div class="flex flex-wrap gap-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="passions[]" value="informatique" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Informatique</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="passions[]" value="voyages" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Voyages</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="passions[]" value="sport" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Sport</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="passions[]" value="lecture" class="rounded text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-sm text-gray-700">Lecture</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition transform hover:-translate-y-0.5">
                    Valider l'inscription
                </button>

            </form>
        </section>
    </main>

    <footer class="bg-blue-800 text-white py-8 mt-10">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            
            <ul class="flex flex-wrap justify-center gap-6 mb-4 md:mb-0 font-medium">
                <li>
                    <a href="index.php" class="hover:text-blue-300 transition duration-300 border-b-2 border-transparent hover:border-blue-300 pb-1">Accueil</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-300 transition duration-300 border-b-2 border-transparent hover:border-blue-300 pb-1">Inscription</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-300 transition duration-300 border-b-2 border-transparent hover:border-blue-300 pb-1">Connexion</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-300 transition duration-300 border-b-2 border-transparent hover:border-blue-300 pb-1">Rechercher</a>
                </li>
            </ul>

            <div class="text-blue-200 text-sm">
                &copy; 2023 Mon Entreprise. Tous droits réservés.
            </div>

        </div>
    </footer>

</body>
</html>