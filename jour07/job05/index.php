<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Showcase Tailwind</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Animation pour le dégradé de texte */
        .animate-text {
            background-size: 200% auto;
            animation: textShine 3s linear infinite;
        }
        @keyframes textShine {
            to { background-position: 200% center; }
        }
    </style>
</head>
<body class="bg-[#0B0C10] text-gray-300 antialiased overflow-x-hidden">

    <nav class="fixed w-full z-50 top-4 px-4">
        <div class="max-w-5xl mx-auto bg-white/5 backdrop-blur-lg border border-white/10 rounded-full px-6 py-3 flex justify-between items-center shadow-lg">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-bold">T</div>
                <span class="text-white font-semibold tracking-tight">Tailwind<span class="text-indigo-400">Clone</span></span>
            </div>
            
            <ul class="hidden md:flex gap-8 text-sm font-medium text-gray-400">
                <li><a href="#" class="hover:text-white transition">Features</a></li>
                <li><a href="#" class="hover:text-white transition">Témoignages</a></li>
                <li><a href="#" class="hover:text-white transition">Tarifs</a></li>
            </ul>

            <div class="flex gap-4">
                <a href="#" class="text-sm font-medium text-gray-300 hover:text-white py-2">Log in</a>
                <a href="#" class="hidden sm:block text-sm font-medium bg-white text-black px-4 py-2 rounded-full hover:bg-gray-200 transition">Sign Up</a>
            </div>
        </div>
    </nav>

    <section class="relative pt-40 pb-20 px-4">
        
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-indigo-600/30 rounded-full blur-[100px] -z-10"></div>
        <div class="absolute top-20 left-1/4 w-[300px] h-[300px] bg-purple-600/20 rounded-full blur-[80px] -z-10"></div>

        <div class="max-w-4xl mx-auto text-center">
            
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-indigo-500/30 bg-indigo-500/10 text-indigo-300 text-xs font-medium mb-6">
                <span class="flex h-2 w-2 rounded-full bg-indigo-500"></span>
                Nouveau Framework v3.0 Disponible
            </div>

            <h1 class="text-5xl md:text-7xl font-bold text-white tracking-tight mb-6 leading-tight">
                Construisez le futur du <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-indigo-400 animate-text">
                    Développement Web
                </span>
            </h1>

            <p class="text-lg text-gray-400 mb-10 max-w-2xl mx-auto">
                Un design reproduit à partir des meilleurs sites du showcase. Utilisez les classes utilitaires pour créer des interfaces modernes, rapides et responsives.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="px-8 py-3.5 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold transition shadow-[0_0_20px_rgba(79,70,229,0.5)]">
                    Commencer maintenant
                </button>
                <button class="px-8 py-3.5 rounded-lg border border-gray-700 hover:bg-gray-800 text-gray-300 transition flex items-center justify-center gap-2">
                    <i class="fa-brands fa-github"></i> Voir le code
                </button>
            </div>
        </div>

        <div class="mt-20 max-w-5xl mx-auto relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
            <div class="relative bg-[#1a1b26] border border-gray-800 rounded-xl overflow-hidden shadow-2xl">
                <div class="flex items-center gap-2 px-4 py-3 border-b border-gray-800 bg-[#13141c]">
                    <div class="flex gap-1.5">
                        <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                    </div>
                    <div class="ml-4 px-3 py-1 bg-[#1a1b26] rounded-md text-xs text-gray-500 w-64 text-center">dashboard.app.com</div>
                </div>
                <div class="p-8 grid grid-cols-3 gap-6 h-[400px]">
                    <div class="col-span-2 space-y-4">
                        <div class="h-32 bg-gray-800/50 rounded-lg animate-pulse"></div>
                        <div class="h-48 bg-gray-800/50 rounded-lg animate-pulse"></div>
                    </div>
                    <div class="col-span-1 space-y-4">
                        <div class="h-full bg-gray-800/50 rounded-lg animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-[#0B0C10]">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Tout ce dont vous avez besoin</h2>
                <p class="text-gray-400">Une architecture pensée pour la performance et l'élégance.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="md:col-span-2 bg-[#13141c] border border-white/5 p-8 rounded-2xl hover:border-indigo-500/50 transition duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-600/10 rounded-full blur-3xl -mr-16 -mt-16 group-hover:bg-indigo-600/20 transition"></div>
                    <i class="fa-solid fa-bolt text-3xl text-indigo-400 mb-4 bg-indigo-500/10 p-3 rounded-lg inline-block"></i>
                    <h3 class="text-xl font-bold text-white mb-2">Performance extrême</h3>
                    <p class="text-gray-400 max-w-md">Optimisé pour charger en moins de 100ms. Vos utilisateurs ne sentiront aucune latence grâce à notre infrastructure distribuée.</p>
                </div>

                <div class="bg-[#13141c] border border-white/5 p-8 rounded-2xl hover:border-purple-500/50 transition duration-300 group">
                    <i class="fa-solid fa-shield-halved text-3xl text-purple-400 mb-4 bg-purple-500/10 p-3 rounded-lg inline-block"></i>
                    <h3 class="text-xl font-bold text-white mb-2">Sécurisé</h3>
                    <p class="text-gray-400 text-sm">Chiffrement de bout en bout et conformité RGPD native.</p>
                </div>

                <div class="bg-[#13141c] border border-white/5 p-8 rounded-2xl hover:border-pink-500/50 transition duration-300 group">
                    <i class="fa-solid fa-code text-3xl text-pink-400 mb-4 bg-pink-500/10 p-3 rounded-lg inline-block"></i>
                    <h3 class="text-xl font-bold text-white mb-2">API First</h3>
                    <p class="text-gray-400 text-sm">Intégrez vos outils préférés via notre API REST ou GraphQL.</p>
                </div>

                <div class="md:col-span-2 bg-[#13141c] border border-white/5 p-8 rounded-2xl hover:border-indigo-500/50 transition duration-300 group relative overflow-hidden">
                     <div class="absolute bottom-0 left-0 w-64 h-64 bg-purple-600/10 rounded-full blur-3xl -ml-16 -mb-16 group-hover:bg-purple-600/20 transition"></div>
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <div class="flex-1">
                            <i class="fa-solid fa-globe text-3xl text-blue-400 mb-4 bg-blue-500/10 p-3 rounded-lg inline-block"></i>
                            <h3 class="text-xl font-bold text-white mb-2">Déploiement Global</h3>
                            <p class="text-gray-400">Déployez votre application sur plus de 35 régions en un seul clic.</p>
                        </div>
                        <div class="w-full md:w-48 h-32 bg-gray-800/50 rounded-lg border border-gray-700 flex items-center justify-center relative">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-ping absolute top-4 right-4"></div>
                            <span class="text-xs font-mono text-gray-500">Global Network</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="border-t border-white/10 bg-[#0B0C10] pt-16 pb-8 text-center text-gray-500 text-sm">
        <p>&copy; 2023 Clone Showcase. Fait avec Tailwind CSS.</p>
    </footer>

</body>
</html>