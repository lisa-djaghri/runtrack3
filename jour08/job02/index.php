<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Tailwind</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-blue-600 text-white p-4 shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            
            <div class="text-xl font-bold">Mon Site</div>

            <ul class="flex space-x-6">
                <li>
                    <a href="index.php" class="hover:text-blue-200 transition font-medium">Menu Principal</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="container mx-auto p-6 my-8 bg-white rounded shadow-lg max-w-2xl">
        <h1 class="text-2xl font-bold mb-6 text-blue-600">Création de compte</h1>
        
        <form action="index.php" method="POST" class="space-y-4">

            <div class="flex items-center space-x-4">
                <span class="font-medium">Civilité :</span>
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="civilite" value="M" class="accent-blue-600">
                    <span>Monsieur</span>
                </label>
                <label class="flex items-center space-x-2 cursor-pointer">
                    <input type="radio" name="civilite" value="Mme" class="accent-blue-600">
                    <span>Madame</span>
                </label>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="prenom" class="block mb-1 text-sm font-medium">Prénom</label>
                    <input type="text" name="prenom" id="prenom" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="nom" class="block mb-1 text-sm font-medium">Nom</label>
                    <input type="text" name="nom" id="nom" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div>
                <label for="adresse" class="block mb-1 text-sm font-medium">Adresse</label>
                <input type="text" name="adresse" id="adresse" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block mb-1 text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="password" class="block mb-1 text-sm font-medium">Mot de passe</label>
                    <input type="password" name="password" id="password" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="confirm_password" class="block mb-1 text-sm font-medium">Confirmation</label>
                    <input type="password" name="confirm_password" id="confirm_password" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="mt-4">
                <p class="font-medium mb-2">Vos passions :</p>
                <div class="flex flex-wrap gap-4">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="passions[]" value="informatique" class="accent-blue-600">
                        <span>Informatique</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="passions[]" value="voyages" class="accent-blue-600">
                        <span>Voyages</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="passions[]" value="sport" class="accent-blue-600">
                        <span>Sport</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="passions[]" value="lecture" class="accent-blue-600">
                        <span>Lecture</span>
                    </label>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Valider l'inscription
                </button>
            </div>

        </form>
    </section>

    <footer class="bg-gray-800 text-gray-300 py-6 mt-12">
        <div class="container mx-auto text-center">
            <ul class="flex justify-center space-x-6">
                <li><a href="index.php" class="hover:text-white transition">Accueil</a></li>
                <li><a href="index.php" class="hover:text-white transition">Inscription</a></li>
                <li><a href="index.php" class="hover:text-white transition">Connexion</a></li>
                <li><a href="index.php" class="hover:text-white transition">Rechercher</a></li>
            </ul>
            <p class="text-sm mt-4 text-gray-500">&copy; 2023 Mon Site Web</p>
        </div>
    </footer>

</body>
</html>