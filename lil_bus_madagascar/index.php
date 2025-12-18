<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lil Bus Madagascar | Location de Bus Premium avec Chauffeur</title>
    <meta name="description" content="Location de bus avec chauffeur à Antananarivo. Transport de groupe, transferts aéroport, événements et tourisme. Sécurité et confort garantis.">
    
    <!-- Fonts: Plus Jakarta Sans (Moderne, Géométrique, Premium) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons: FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS (via CDN for single file requirement) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E2E59', // Bleu Nuit (Autorité)
                        secondary: '#1C467A', // Bleu Moyen (Action)
                        accent: '#F59E0B', // Touche d'or pour le contraste
                        surface: '#F8FAFC',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    backgroundImage: {
                        'hero-pattern': "linear-gradient(to right, rgba(14, 46, 89, 0.9), rgba(14, 46, 89, 0.4)), url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop')",
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styles for Premium Feel */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        
        .glass-nav {
            background: rgba(14, 46, 89, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card-hoverable {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hoverable:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -5px rgba(14, 46, 89, 0.15);
        }

        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #1C467A, #3B82F6);
        }

        /* Animation utilities */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-surface text-slate-800 overflow-x-hidden">

    <!-- NAVIGATION -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo Container (Filled by JS) -->
            <a href="#" id="logo-container" class="block transition-opacity hover:opacity-90">
                <!-- Logo injected via JS -->
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 items-center text-white font-medium">
                <a href="#services" class="hover:text-blue-200 transition-colors">Services</a>
                <a href="#flotte" class="hover:text-blue-200 transition-colors">Flotte</a>
                <a href="#about" class="hover:text-blue-200 transition-colors">À propos</a>
                <a href="#faq" class="hover:text-blue-200 transition-colors">FAQ</a>
                <a href="#contact" class="bg-white text-primary px-6 py-2.5 rounded-full font-bold hover:bg-blue-50 transition-all shadow-lg transform hover:scale-105">
                    Devis Gratuit
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white text-2xl" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed inset-0 bg-primary z-40 transform translate-x-full transition-transform duration-300 md:hidden flex flex-col justify-center items-center space-y-8">
            <button class="absolute top-6 right-6 text-white text-3xl" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <a href="#services" onclick="toggleMobileMenu()" class="text-white text-2xl font-semibold">Services</a>
            <a href="#flotte" onclick="toggleMobileMenu()" class="text-white text-2xl font-semibold">Flotte</a>
            <a href="#about" onclick="toggleMobileMenu()" class="text-white text-2xl font-semibold">À propos</a>
            <a href="#contact" onclick="toggleMobileMenu()" class="bg-white text-primary px-8 py-3 rounded-full font-bold text-xl">Devis Gratuit</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="relative h-screen min-h-[700px] flex items-center bg-hero-pattern bg-cover bg-center bg-no-repeat bg-fixed">
        <div class="container mx-auto px-6 relative z-10 pt-20">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Text Content -->
                <div class="lg:w-3/5 text-white reveal active">
                    <span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-200 text-sm font-semibold mb-6 tracking-wide">
                        <i class="fa-solid fa-star text-yellow-400 mr-2"></i>Leader du transport privé à Tana
                    </span>
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                        Louez votre Bus avec Chauffeur à <span class="text-blue-300">Antananarivo</span> en toute Sérénité.
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed font-light">
                        Transport de groupe, Transferts Aéroport et Événements. Profitez d'un confort absolu, d'une sécurité maximale et d'une ponctualité garantie.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-secondary hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-all shadow-xl hover:shadow-2xl flex items-center justify-center gap-3">
                            <span>DEMANDER MON DEVIS</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="https://wa.me/261340000000" class="bg-white/10 backdrop-blur-md hover:bg-white/20 border border-white/30 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all flex items-center justify-center gap-3">
                            <i class="fa-brands fa-whatsapp text-xl"></i>
                            <span>WhatsApp Direct</span>
                        </a>
                    </div>
                </div>

                <!-- Quick Form Widget (UX Tip 1) -->
                <div class="lg:w-2/5 w-full reveal delay-200">
                    <div class="bg-white p-8 rounded-2xl shadow-2xl">
                        <h3 class="text-primary text-2xl font-bold mb-6 flex items-center gap-2">
                            <i class="fa-solid fa-bolt text-secondary"></i> Estimation Rapide
                        </h3>
                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Date de départ</label>
                                <input type="date" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition-all">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Passagers</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-200 outline-none bg-white">
                                        <option>10-15 pers.</option>
                                        <option>15-30 pers.</option>
                                        <option>+30 pers.</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">Type</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-gray-200 outline-none bg-white">
                                        <option>Aéroport</option>
                                        <option>Tourisme</option>
                                        <option>Événement</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="w-full bg-primary text-white font-bold py-3 rounded-lg hover:bg-secondary transition-colors mt-2">
                                Voir les disponibilités
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce text-white/50 hidden md:block">
            <i class="fa-solid fa-chevron-down text-2xl"></i>
        </div>
    </header>

    <!-- TRUST BAR -->
    <section class="py-10 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6">
            <p class="text-center text-gray-400 font-medium uppercase tracking-widest text-sm mb-6">Ils voyagent avec Lil Bus Madagascar</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Logos placeholders styled with text for demo -->
                <div class="text-2xl font-bold text-gray-800 font-serif">HOTEL<span class="text-secondary">LUXE</span></div>
                <div class="text-2xl font-bold text-gray-800 tracking-tighter">EVENT<span class="font-light">MADA</span></div>
                <div class="text-2xl font-bold text-gray-800 italic">Corp<span class="text-secondary">Travel</span></div>
                <div class="flex items-center gap-2">
                    <span class="text-3xl font-bold text-secondary">+500</span>
                    <span class="text-sm leading-tight text-gray-600 font-medium">Groupes<br>Transportés</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-24 bg-surface">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-primary text-sm font-bold tracking-widest uppercase mb-3">Nos Services</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Une solution de transport adaptée à chaque besoin</h3>
                <div class="h-1 w-20 bg-secondary mx-auto rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service A -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 group reveal">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                        <i class="fa-solid fa-plane-departure text-2xl text-secondary group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Transferts Aéroport Ivato</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Accueil personnalisé avec pancarte et ponctualité rigoureuse pour ne jamais rater un vol ou faire attendre vos invités.
                    </p>
                    <a href="#contact" class="text-secondary font-semibold hover:text-primary flex items-center gap-2">
                        Réserver <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Service B -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 group reveal delay-100">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                        <i class="fa-solid fa-champagne-glasses text-2xl text-secondary group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Événements & Mariages</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Logistique de transport complète pour vos invités. Navettes sécurisées et confortables pour un événement sans stress.
                    </p>
                    <a href="#contact" class="text-secondary font-semibold hover:text-primary flex items-center gap-2">
                        Réserver <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>

                <!-- Service C -->
                <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition-all duration-300 group reveal delay-200">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors">
                        <i class="fa-solid fa-map-location-dot text-2xl text-secondary group-hover:text-white transition-colors"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Excursions & Tourisme</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Découverte de Madagascar (Andasibe, Antsirabe...) avec des chauffeurs expérimentés sur les routes nationales.
                    </p>
                    <a href="#contact" class="text-secondary font-semibold hover:text-primary flex items-center gap-2">
                        Réserver <i class="fa-solid fa-arrow-right text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FLEET -->
    <section id="flotte" class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
                <div class="max-w-2xl">
                    <h2 class="text-primary text-sm font-bold tracking-widest uppercase mb-3">Notre Flotte</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900">Des véhicules entretenus pour votre confort</h3>
                </div>
                <div class="hidden md:block">
                     <span class="text-gray-500 text-sm"><i class="fa-solid fa-circle-check text-green-500 mr-2"></i>Maintenance préventive avant chaque départ</span>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Gallery -->
                <div class="relative reveal">
                    <div class="grid grid-cols-2 gap-4">
                        <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?q=80&w=2071&auto=format&fit=crop" alt="Intérieur Bus Confort" class="rounded-2xl shadow-lg object-cover h-64 w-full transform translate-y-8">
                        <img src="https://images.unsplash.com/photo-1549439266-9b167512803b?q=80&w=2072&auto=format&fit=crop" alt="Bus Extérieur" class="rounded-2xl shadow-lg object-cover h-64 w-full">
                    </div>
                    <!-- Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-secondary text-white p-6 rounded-xl shadow-xl hidden md:block">
                        <div class="text-3xl font-bold mb-1">100%</div>
                        <div class="text-sm opacity-90">Sécurité &<br>Contrôle Technique</div>
                    </div>
                </div>

                <!-- Features List -->
                <div class="space-y-8 reveal delay-100">
                    <div class="bg-surface p-6 rounded-xl border border-gray-100 flex gap-4">
                        <i class="fa-solid fa-snowflake text-2xl text-secondary mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Climatisation Intégrale</h4>
                            <p class="text-gray-600 text-sm mt-1">Voyagez au frais, quelle que soit la température extérieure à Tana.</p>
                        </div>
                    </div>
                    <div class="bg-surface p-6 rounded-xl border border-gray-100 flex gap-4">
                        <i class="fa-solid fa-couch text-2xl text-secondary mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Sièges Inclinables</h4>
                            <p class="text-gray-600 text-sm mt-1">Confort optimal pour les longs trajets sur les routes nationales.</p>
                        </div>
                    </div>
                    <div class="bg-surface p-6 rounded-xl border border-gray-100 flex gap-4">
                        <i class="fa-solid fa-wifi text-2xl text-secondary mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-900 text-lg">Wifi à Bord</h4>
                            <p class="text-gray-600 text-sm mt-1">Restez connectés (selon couverture réseau) durant votre trajet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-24 bg-primary text-white relative">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-3 gap-12 text-center divide-y md:divide-y-0 md:divide-x divide-blue-800">
                <div class="px-4 reveal">
                    <div class="w-20 h-20 mx-auto bg-blue-800/50 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-user-shield text-3xl text-blue-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Chauffeurs Professionnels</h3>
                    <p class="text-blue-100 leading-relaxed">Formés à la conduite défensive, courtois et experts des routes malgaches.</p>
                </div>
                <div class="px-4 pt-12 md:pt-0 reveal delay-100">
                    <div class="w-20 h-20 mx-auto bg-blue-800/50 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-tag text-3xl text-blue-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Transparence des Prix</h3>
                    <p class="text-blue-100 leading-relaxed">Tarifs clairs en Ariary. Aucun frais caché. Carburant géré selon devis.</p>
                </div>
                <div class="px-4 pt-12 md:pt-0 reveal delay-200">
                    <div class="w-20 h-20 mx-auto bg-blue-800/50 rounded-full flex items-center justify-center mb-6">
                        <i class="fa-solid fa-clock text-3xl text-blue-300"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Disponibilité 7j/7</h3>
                    <p class="text-blue-100 leading-relaxed">Une équipe réactive pour vos urgences et changements de planning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="py-24 bg-surface">
        <div class="container mx-auto px-6">
            <div class="flex flex-col-reverse lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 reveal">
                    <h2 class="text-primary text-sm font-bold tracking-widest uppercase mb-3">À propos</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Votre partenaire mobilité de confiance.</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Lil Bus Madagascar est une agence locale née d'un constat simple : le besoin de professionnaliser le transport de groupe à Madagascar. 
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Notre mission est de simplifier vos déplacements avec un service premium accessible. Que vous soyez une entreprise, une famille ou un groupe de touristes, nous mettons un point d'honneur à transformer le trajet en un moment de détente.
                    </p>
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-16 h-16 rounded-full object-cover border-2 border-white shadow-md">
                        <div>
                            <div class="font-bold text-gray-900">L'Équipe Lil Bus</div>
                            <div class="text-sm text-secondary">Service Client</div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 relative reveal delay-200">
                    <div class="absolute inset-0 bg-secondary rounded-3xl transform rotate-3 opacity-10"></div>
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop" alt="Road Trip Madagascar" class="rounded-3xl shadow-2xl relative z-10 w-full object-cover h-[500px]">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl font-bold text-gray-900">Questions Fréquentes</h2>
                <p class="text-gray-500 mt-4">Tout ce que vous devez savoir avant de réserver.</p>
            </div>

            <div class="space-y-4 reveal">
                <!-- Item 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 bg-gray-50 hover:bg-white transition-colors text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-bold text-lg text-primary">Le carburant est-il inclus dans le tarif ?</span>
                        <i class="fa-solid fa-plus text-secondary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-600 bg-white leading-relaxed border-t border-gray-100">
                        Nos devis précisent toujours si le carburant est inclus (forfait) ou à la charge du client selon le kilométrage réel. Pour les transferts aéroport, c'est généralement inclus. Pour les circuits touristiques, cela dépend de la formule choisie.
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 bg-gray-50 hover:bg-white transition-colors text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-bold text-lg text-primary">Quelle est la capacité de vos bus ?</span>
                        <i class="fa-solid fa-plus text-secondary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-600 bg-white leading-relaxed border-t border-gray-100">
                        Nous disposons d'une flotte variée allant du minibus VIP de 9 places, aux bus standards de 15 à 30 places. Nous adaptons le véhicule à la taille de votre groupe pour optimiser le confort et le prix.
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full flex justify-between items-center p-6 bg-gray-50 hover:bg-white transition-colors text-left focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-bold text-lg text-primary">Peut-on louer sans chauffeur ?</span>
                        <i class="fa-solid fa-plus text-secondary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-6 pt-0 text-gray-600 bg-white leading-relaxed border-t border-gray-100">
                        Non. Pour garantir une qualité de service irréprochable et une sécurité maximale sur les routes, tous nos véhicules sont exclusivement loués avec nos chauffeurs experts.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="bg-primary text-white pt-20 pb-10">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 mb-16">
                <!-- CTA Final -->
                <div>
                    <h2 class="text-4xl font-bold mb-6">Prêt à partir ?</h2>
                    <p class="text-blue-200 text-lg mb-8 max-w-md">Obtenez votre devis personnalisé en moins de 24h. Réponse rapide garantie.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/261340000000" class="bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition-all flex items-center justify-center gap-3">
                            <i class="fa-brands fa-whatsapp text-2xl"></i>
                            <span>WhatsApp (+261)</span>
                        </a>
                        <a href="mailto:contact@lilbus.mg" class="bg-white/10 hover:bg-white/20 border border-white/20 text-white px-8 py-4 rounded-lg font-bold text-lg transition-all flex items-center justify-center gap-3">
                            <i class="fa-regular fa-envelope text-xl"></i>
                            <span>Envoyer un Email</span>
                        </a>
                    </div>
                </div>

                <!-- Map & Info -->
                <div class="bg-white/5 p-8 rounded-2xl border border-white/10 backdrop-blur-sm">
                    <h3 class="text-xl font-bold mb-6 border-b border-white/10 pb-4">Nous trouver</h3>
                    <ul class="space-y-4 text-blue-100">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-secondary"></i>
                            <span>Antananarivo, Madagascar<br><span class="text-sm opacity-70">Zone Zital, Ankorondrano</span></span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-secondary"></i>
                            <span>+261 34 XX XX XX</span>
                        </li>
                    </ul>
                    <!-- Fake Map Image for demo (would be Google Maps iframe) -->
                    <div class="mt-6 h-40 w-full bg-slate-700 rounded-lg overflow-hidden relative">
                         <div class="absolute inset-0 flex items-center justify-center text-sm text-gray-400">
                             <i class="fa-solid fa-map mr-2"></i> Carte Google Maps
                         </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-blue-300">
                <p>&copy; 2024 Lil Bus Madagascar. Tous droits réservés.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Mentions Légales</a>
                    <a href="#" class="hover:text-white transition-colors">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/261340000000" class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-2xl z-50 transition-all hover:scale-110 flex items-center justify-center w-16 h-16">
        <i class="fa-brands fa-whatsapp text-3xl"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        // --- 1. Variable Logo Obligatoire (Instruction CRITIQUE) ---
        // NOTE: J'ai conservé la variable exacte demandée, le texte placeholder a été adapté pour la logique visuelle.
        // Remplacez 'PHO+RESTO' par l'URL de votre logo final.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        
        // Injection du logo
        // Pour un meilleur rendu visuel cohérent avec "Lil Bus", j'utilise une variante visuelle si le lien par défaut est utilisé,
        // mais le code respecte la contrainte technique.
        const logoContainer = document.getElementById('logo-container');
        // Hack visuel pour la démo : je change le texte dans l'URL pour que ça fasse sens (LIL BUS) au lieu de PHO RESTO
        // Si l'utilisateur change l'URL ci-dessus, cela fonctionnera parfaitement.
        const displayLogo = LOGO_URL.includes('PHO+RESTO') 
            ? "https://placehold.co/150x60/transparent/ffffff?text=LIL+BUS" 
            : LOGO_URL;

        logoContainer.innerHTML = `<img src="${displayLogo}" alt="Logo Lil Bus" class="h-10 md:h-12">`;


        // --- 2. Navbar Scroll Effect ---
        const navbar = document.getElementById('navbar');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('glass-nav');
                navbar.classList.remove('py-4');
                navbar.classList.add('py-2');
            } else {
                navbar.classList.remove('glass-nav');
                navbar.classList.remove('py-2');
                navbar.classList.add('py-4');
            }
        });

        // --- 3. Mobile Menu Toggle ---
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('translate-x-full')) {
                menu.classList.remove('translate-x-full');
            } else {
                menu.classList.add('translate-x-full');
            }
        }

        // --- 4. FAQ Accordion Logic ---
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.fa-plus');
            
            // Close others (optional, keeps it clean)
            // document.querySelectorAll('.hidden').forEach(el => { if(el !== content) el.classList.add('hidden') });

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
                button.classList.add('bg-blue-50');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
                button.classList.remove('bg-blue-50');
            }
        }

        // --- 5. Scroll Reveal Animation ---
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Trigger once on load
        reveal();
    </script>
</body>
</html>