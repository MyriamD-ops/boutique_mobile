Détails du produit



{{$product->name}}
{{$product->description}}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit - Smartphone Ultra Pro Max</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#ef4444',
                        dark: '#1f2937',
                        light: '#f9fafb'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- En-tête -->
    <header class="bg-white shadow-sm sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-blue-600 rounded-full"></div>
                    <span class="text-xl font-bold text-gray-800">TECHSTORE</span>
                </div>
                
                <nav class="w-full md:w-auto">
                    <ul class="flex flex-wrap justify-center space-x-4 md:space-x-6">
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Accueil</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Boutique</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Nouveautés</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Promotions</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600 font-medium transition">Contact</a></li>
                    </ul>
                </nav>
                
                <div class="flex items-center space-x-4 mt-4 md:mt-0">
                    <button class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-user"></i>
                    </button>
                    <button class="text-gray-600 hover:text-blue-600 relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Fil d'Ariane -->
    <div class="container mx-auto px-4 py-4">
        <nav class="text-sm text-gray-500 mb-6">
            <a href="#" class="hover:text-blue-600">Accueil</a> / 
            <a href="#" class="hover:text-blue-600">Électronique</a> / 
            <a href="#" class="hover:text-blue-600">Smartphones</a> / 
            <span class="text-gray-800">Smartphone Ultra Pro Max</span>
        </nav>
    </div>

    <main class="container mx-auto px-4 py-8">
        <!-- Détails du produit -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
            <div class="flex flex-col lg:flex-row">
                <!-- Images du produit -->
                <div class="lg:w-1/2 p-6">
                    <div class="mb-4 bg-gray-100 rounded-lg p-4 flex items-center justify-center">
                        <img src="https://via.placeholder.com/500x500/3b82f6/ffffff?text=Smartphone+Ultra+Pro+Max" alt="Smartphone Ultra Pro Max" class="w-full max-w-md object-contain">
                    </div>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="border-2 border-blue-500 rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/100x100/3b82f6/ffffff?text=1" alt="Vue 1" class="w-full h-20 object-cover">
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/100x100/6366f1/ffffff?text=2" alt="Vue 2" class="w-full h-20 object-cover">
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/100x100/8b5cf6/ffffff?text=3" alt="Vue 3" class="w-full h-20 object-cover">
                        </div>
                        <div class="border rounded-lg overflow-hidden">
                            <img src="https://via.placeholder.com/100x100/ec4899/ffffff?text=4" alt="Vue 4" class="w-full h-20 object-cover">
                        </div>
                    </div>
                </div>
                
                <!-- Informations du produit -->
                <div class="lg:w-1/2 p-6 lg:border-l border-gray-200">
                    <div class="mb-2">
                        <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">En stock</span>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full ml-2">Nouveau</span>
                    </div>
                    
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Smartphone Ultra Pro Max</h1>
                    
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-600 ml-2">4.5 (142 avis)</span>
                    </div>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-red-600">799,99 €</span>
                        <span class="text-lg text-gray-500 line-through ml-2">899,99 €</span>
                        <span class="inline-block bg-red-100 text-red-800 text-sm font-medium px-2 py-1 rounded ml-2">-11%</span>
                    </div>
                    
                    <p class="text-gray-700 mb-6">
                        Découvrez notre dernier smartphone haut de gamme avec un écran AMOLED de 6,7 pouces, 
                        un processeur ultra-rapide et un système de caméras professionnel. Profitez d'une 
                        autonomie exceptionnelle et d'une expérience utilisateur fluide.
                    </p>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Caractéristiques principales :</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Écran AMOLED 6,7" 120Hz</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Processeur Octa-core 3.2GHz</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>128 Go de stockage</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Triple caméra 108MP + 12MP + 8MP</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Batterie 5000mAh avec charge rapide</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Couleurs disponibles :</h3>
                        <div class="flex space-x-3">
                            <button class="w-10 h-10 rounded-full bg-black border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-blue-500 border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-purple-500 border-2 border-gray-300 focus:border-blue-500"></button>
                            <button class="w-10 h-10 rounded-full bg-green-500 border-2 border-gray-300 focus:border-blue-500"></button>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <label class="text-lg font-semibold mr-4">Quantité :</label>
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button class="px-4 py-2 text-gray-600 hover:text-gray-800">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="number" value="1" min="1" max="10" class="w-12 text-center border-0 focus:ring-0">
                                <button class="px-4 py-2 text-gray-600 hover:text-gray-800">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                            <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Ajouter au panier
                            </button>
                            <button class="flex-1 bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-lg font-semibold transition flex items-center justify-center">
                                <i class="fas fa-bolt mr-2"></i>
                                Acheter maintenant
                            </button>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4">
                        <div class="flex items-center text-gray-600 mb-2">
                            <i class="fas fa-shipping-fast mr-2 text-green-500"></i>
                            <span>Livraison gratuite à partir de 50€</span>
                        </div>
                        <div class="flex items-center text-gray-600 mb-2">
                            <i class="fas fa-undo-alt mr-2 text-blue-500"></i>
                            <span>Retours gratuits sous 30 jours</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-shield-alt mr-2 text-purple-500"></i>
                            <span>Garantie 2 ans incluse</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Détails supplémentaires avec onglets -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-12">
            <div class="border-b border-gray-200">
                <div class="flex overflow-x-auto">
                    <button class="tab-button py-4 px-6 font-medium border-b-2 border-blue-500 text-blue-500">Description</button>
                    <button class="tab-button py-4 px-6 font-medium text-gray-500 hover:text-gray-700">Spécifications</button>
                    <button class="tab-button py-4 px-6 font-medium text-gray-500 hover:text-gray-700">Avis clients</button>
                    <button class="tab-button py-4 px-6 font-medium text-gray-500 hover:text-gray-700">Accessoires</button>
                </div>
            </div>
            
            <div class="p-6">
                <div class="tab-content active">
                    <h3 class="text-xl font-bold mb-4">Description détaillée</h3>
                    <div class="prose max-w-none">
                        <p class="mb-4">
                            Le Smartphone Ultra Pro Max repousse les limites de l'innovation avec son design élégant 
                            et ses performances exceptionnelles. Son écran AMOLED de 6,7 pouces offre des couleurs 
                            vibrantes et des noirs profonds, idéal pour le streaming vidéo et les jeux mobiles.
                        </p>
                        <p class="mb-4">
                            Avec son triple module photo, capturez des moments inoubliables avec une qualité 
                            professionnelle. Le mode nuit amélioré vous permet de prendre des photos nettes même 
                            dans des conditions de faible luminosité.
                        </p>
                        <p class="mb-4">
                            La batterie de 5000mAh assure une autonomie d'une journée complète, même avec une 
                            utilisation intensive. La charge rapide de 65W vous permet de recharger votre appareil 
                            à 50% en seulement 20 minutes.
                        </p>
                    </div>
                </div>
                
                <div class="tab-content hidden">
                    <h3 class="text-xl font-bold mb-4">Spécifications techniques</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-3 px-4 font-medium bg-gray-50">Écran</td>
                                    <td class="py-3 px-4">6,7 pouces AMOLED, 120Hz, résolution 2400x1080</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-medium bg-gray-50">Processeur</td>
                                    <td class="py-3 px-4">Octa-core 3.2GHz</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-medium bg-gray-50">Mémoire RAM</td>
                                    <td class="py-3 px-4">8 Go</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-medium bg-gray-50">Stockage</td>
                                    <td class="py-3 px-4">128 Go (non extensible)</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-medium bg-gray-50">Appareil photo principal</td>
                                    <td class="py-3 px-4">Triple capteur: 108MP (wide) + 12MP (ultrawide) + 8MP (telephoto)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Produits similaires -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Produits similaires</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Produit 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <img src="https://via.placeholder.com/200x200/6366f1/ffffff?text=Pro+Lite" alt="Smartphone Pro Lite" class="h-40 object-contain">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Smartphone Pro Lite</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(87)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">499,99 €</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Produit 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <img src="https://via.placeholder.com/200x200/8b5cf6/ffffff?text=Gaming+Edition" alt="Smartphone Gaming Edition" class="h-40 object-contain">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Smartphone Gaming Edition</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(124)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">649,99 €</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Produit 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <img src="https://via.placeholder.com/200x200/ec4899/ffffff?text=Compact" alt="Smartphone Compact" class="h-40 object-contain">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Smartphone Compact</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(56)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">429,99 €</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Produit 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform hover:scale-105">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <img src="https://via.placeholder.com/200x200/10b981/ffffff?text=Écologique" alt="Smartphone Écologique" class="h-40 object-contain">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-1">Smartphone Écologique</h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(203)</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-red-600 font-bold">569,99 €</span>
                            <button class="bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-gray-800 text-white pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">TECHSTORE</h3>
                    <p class="text-gray-400 mb-4">
                        Votre destination shopping en ligne pour les dernières technologies et tendances.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Boutique</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Nouveautés</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Promotions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">À propos</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Service client</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Livraison</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Retours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Conditions générales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Politique de confidentialité</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2"></i>
                            <span>contact@techstore.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-2"></i>
                            <span>01 23 45 67 89</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2"></i>
                            <span>123 Rue du Commerce, 75001 Paris</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-6 text-center text-gray-400">
                <p>&copy; 2023 TECHSTORE. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Script pour les onglets
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Retirer la classe active de tous les onglets et contenus
                    tabButtons.forEach(btn => {
                        btn.classList.remove('border-blue-500', 'text-blue-500');
                        btn.classList.add('text-gray-500');
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });
                    
                    // Ajouter la classe active à l'onglet cliqué
                    this.classList.remove('text-gray-500');
                    this.classList.add('border-blue-500', 'text-blue-500');
                    
                    // Afficher le contenu correspondant
                    const tabIndex = Array.from(tabButtons).indexOf(this);
                    tabContents[tabIndex].classList.remove('hidden');
                    tabContents[tabIndex].classList.add('active');
                });
            });
            
            // Gestion de la quantité
            const minusBtn = document.querySelector('.fa-minus').parentElement;
            const plusBtn = document.querySelector('.fa-plus').parentElement;
            const quantityInput = document.querySelector('input[type="number"]');
            
            minusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });
            
            plusBtn.addEventListener('click', function() {
                let value = parseInt(quantityInput.value);
                if (value < 10) {
                    quantityInput.value = value + 1;
                }
            });
        });
    </script>
</body>
</html>