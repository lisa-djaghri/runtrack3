<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Moderne</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen font-sans">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2 text-blue-600">
                <i class="fa-solid fa-layer-group text-2xl"></i>
                <span class="text-xl font-bold tracking-wide text-gray-800">Mon<span class="text-blue-600">Site</span></span>
            </div>
            <ul class="flex space-x-6 font-medium text-sm text-gray-600">
                <li><a href="index.php" class="hover:text-blue-600 transition duration-300">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-10 flex justify-center items-center">
        
        <section class="bg-white w-full max-w-2xl rounded-xl shadow-2xl overflow-hidden border border-gray-100">
            
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 p-8 text-center">
                <h1 class="text-3xl font-bold text-white mb-2">Créer un compte</h1>
                <p class="text-blue-100 text-sm">Rejoignez notre communauté en quelques secondes.</p>
            </div>
            
            <form action="index.php" method="POST" class="p-8 space-y-6">

                <div>
                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-2">Civilité</span>
                    <div class="flex space-x-6">
                        <label class="flex items-center space-x-2 cursor-pointer group">
                            <input type="radio" name="civilite" value="M" class="hidden peer">
                            <span class="w-5 h-5 border-2 border-gray-300 rounded-full flex justify-center items-center peer-checked:border-blue-600 peer-checked:bg-blue-600">
                                <i class="fa-solid fa-check text-white text-xs opacity-0 peer-checked:opacity-100"></i>
                            </span>
                            <span class="text-gray-700 group-hover:text-blue-600 transition">Monsieur</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer group">
                            <input type="radio" name="civilite" value="Mme" class="hidden peer">
                            <span class="w-5 h-5 border-2 border-gray-300 rounded-full flex justify-center items-center peer-checked:border-pink-500 peer-checked:bg-pink-500">
                                <i class="fa-solid fa-check text-white text-xs opacity-0 peer-checked:opacity-100"></i>
                            </span>
                            <span class="text-gray-700 group-hover:text-pink-500 transition">Madame</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <label for="prenom" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Prénom</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-user text-gray-400"></i>
                            </div>
                            <input type="text" name="prenom" id="prenom" placeholder="Jean" required 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>
                    <div class="relative">
                        <label for="nom" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Nom</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-regular fa-user text-gray-400"></i>
                            </div>
                            <input type="text" name="nom" id="nom" placeholder="Dupont" required 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <label for="adresse" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Adresse</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-map-location-dot text-gray-400"></i>
                        </div>
                        <input type="text" name="adresse" id="adresse" placeholder="123 Rue de la Paix"
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                    </div>
                </div>

                <div class="relative">
                    <label for="email" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fa-solid fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" name="email" id="email" placeholder="jean.dupont@exemple.com" required 
                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <label for="password" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" name="password" id="password" placeholder="********" required 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>
                    <div class="relative">
                        <label for="confirm_password" class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-1">Confirmation</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-shield-halved text-gray-400"></i>
                            </div>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="********" required 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                        </div>
                    </div>
                </div>

                <div>
                    <span class="block text-xs font-bold text-gray-500 uppercase tracking-wide mb-3">Vos passions</span>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        
                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="informatique" class="peer hidden">
                            <div class="py-3 px-2 text-center rounded-lg border border-gray-200 bg-gray-50 text-gray-600 transition-all hover:bg-gray-100 peer-checked:bg-blue-50 peer-checked:border-blue-500 peer-checked:text-blue-700">
                                <i class="fa-solid fa-laptop-code mb-1 text-lg block"></i>
                                <span class="text-xs font-medium">Informatique</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="voyages" class="peer hidden">
                            <div class="py-3 px-2 text-center rounded-lg border border-gray-200 bg-gray-50 text-gray-600 transition-all hover:bg-gray-100 peer-checked:bg-green-50 peer-checked:border-green-500 peer-checked:text-green-700">
                                <i class="fa-solid fa-plane mb-1 text-lg block"></i>
                                <span class="text-xs font-medium">Voyages</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="sport" class="peer hidden">
                            <div class="py-3 px-2 text-center rounded-lg border border-gray-200 bg-gray-50 text-gray-600 transition-all hover:bg-gray-100 peer-checked:bg-orange-50 peer-checked:border-orange-500 peer-checked:text-orange-700">
                                <i class="fa-solid fa-dumbbell mb-1 text-lg block"></i>
                                <span class="text-xs font-medium">Sport</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="lecture" class="peer hidden">
                            <div class="py-3 px-2 text-center rounded-lg border border-gray-200 bg-gray-50 text-gray-600 transition-all hover:bg-gray-100 peer-checked:bg-purple-50 peer-checked:border-purple-500 peer-checked:text-purple-700">
                                <i class="fa-solid fa-book-open mb-1 text-lg block"></i>
                                <span class="text-xs font-medium">Lecture</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 text-white font-bold py-4 px-4 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition duration-200 flex justify-center items-center space-x-2">
                        <span>Valider l'inscription</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

            </form>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-10 border-t-4 border-blue-600">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <span class="text-lg font-bold">Mon Site</span>
                <p class="text-gray-400 text-sm mt-1">L'excellence au service de vos projets.</p>
            </div>
            <ul class="flex flex-wrap justify-center gap-8 text-sm text-gray-300">
                <li><a href="index.php" class="hover:text-white hover:underline decoration-blue-500 decoration-2 underline-offset-4 transition">Accueil</a></li>
                <li><a href="index.php" class="hover:text-white hover:underline decoration-blue-500 decoration-2 underline-offset-4 transition">Inscription</a></li>
                <li><a href="index.php" class="hover:text-white hover:underline decoration-blue-500 decoration-2 underline-offset-4 transition">Connexion</a></li>
            </ul>
        </div>
        <div class="text-center text-gray-600 text-xs mt-8">
            &copy; 2023 Tous droits réservés.
        </div>
    </footer>

</body>
</html>