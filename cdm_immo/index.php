<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDM Immo | L'Expertise 360 à Antananarivo</title>
    <meta name="description" content="Agence Immobilière et Construction Antananarivo. Achat, vente, location et BTP.">
    
    <!-- Tailwind CSS (via CDN for single file portability) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts: Plus Jakarta Sans (Modern UI) & Playfair Display (Premium Headings) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cdm-black': '#000000',
                        'cdm-dark': '#0F0F0F',
                        'cdm-green': '#3DD615',
                        'cdm-green-dark': '#2eb00f',
                        'cdm-red': '#F20813',
                        'cdm-gray': '#F5F5F7',
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -5px rgba(0, 0, 0, 0.1)',
                        'card': '0 4px 20px rgba(0,0,0,0.05)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styles for Slider & Details */
        body {
            background-color: #ffffff;
            color: #0F0F0F;
            overflow-x: hidden;
        }
        
        .hero-gradient {
            background: linear-gradient(180deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 50%, rgba(255,255,255,0) 100%);
        }

        /* Image Comparison Slider */
        .img-comp-container {
            position: relative;
            height: 400px;
            overflow: hidden;
            border-radius: 1rem;
        }
        .img-comp-img {
            position: absolute;
            width: auto;
            height: auto;
            overflow: hidden;
        }
        .img-comp-img img {
            display: block;
            height: 400px;
            width: 100%;
            object-fit: cover;
        }
        .img-comp-slider {
            position: absolute;
            z-index: 9;
            cursor: ew-resize;
            width: 40px;
            height: 40px;
            background-color: #3DD615;
            border: 3px solid #fff;
            opacity: 1;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        
        /* Smooth Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #000; 
            border-radius: 4px;
        }

        .text-outline-img {
            -webkit-text-stroke: 1px rgba(255,255,255,0.3);
            color: transparent;
        }
    </style>
</head>
<body class="antialiased">

    <!-- NAVIGATION -->
    <header class="fixed w-full z-50 transition-all duration-300 bg-white/90 backdrop-blur-md border-b border-gray-100" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Injection Point -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" id="logo-container" class="block">
                        <!-- JS injects logo here. USER: Replace the URL in JS below for final logo -->
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#biens" class="text-cdm-dark hover:text-cdm-green font-medium transition-colors">Acheter</a>
                    <a href="#biens" class="text-cdm-dark hover:text-cdm-green font-medium transition-colors">Louer</a>
                    <a href="#btp" class="text-cdm-dark hover:text-cdm-green font-medium transition-colors">Construction BTP</a>
                    <a href="#services" class="text-cdm-dark hover:text-cdm-green font-medium transition-colors">Expertise Juridique</a>
                </nav>

                <!-- CTA & Mobile Menu Button -->
                <div class="flex items-center space-x-4">
                    <a href="tel:+26134XXXXXXX" class="hidden md:flex items-center gap-2 bg-cdm-green hover:bg-cdm-green-dark text-white px-5 py-2.5 rounded-full font-bold transition-all shadow-lg shadow-cdm-green/30 transform hover:-translate-y-0.5">
                        <i class="fa-solid fa-phone"></i>
                        <span>+261 34 XX XXX XX</span>
                    </a>
                    
                    <button id="mobile-menu-btn" class="md:hidden text-2xl text-cdm-dark focus:outline-none">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-1 shadow-xl">
                <a href="#biens" class="block px-3 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-md">Acheter</a>
                <a href="#biens" class="block px-3 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-md">Louer</a>
                <a href="#btp" class="block px-3 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-md">Construction BTP</a>
                <a href="#services" class="block px-3 py-3 text-base font-medium text-gray-900 hover:bg-gray-50 rounded-md">Juridique</a>
                <a href="tel:+26134XXXXXXX" class="block w-full text-center mt-4 bg-cdm-green text-white px-3 py-3 rounded-lg font-bold">Appeler maintenant</a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative pt-20 overflow-hidden min-h-screen flex items-center">
        <!-- Background Split -->
        <div class="absolute inset-0 z-0 flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 h-1/2 md:h-full relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2053&auto=format&fit=crop" alt="Villa de luxe" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/30"></div>
            </div>
            <div class="w-full md:w-1/2 h-1/2 md:h-full relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=1931&auto=format&fit=crop" alt="Ingénieur construction" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
        </div>

        <!-- Content Overlay -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-12 md:py-0">
            <div class="max-w-3xl bg-white/10 backdrop-blur-lg border border-white/20 p-8 md:p-12 rounded-2xl shadow-2xl" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-6 leading-tight">
                    L'Expertise 360 pour vos <span class="text-cdm-green">Projets Immobiliers</span> à Antananarivo.
                </h1>
                <p class="text-lg text-gray-100 mb-8 leading-relaxed max-w-2xl">
                    Achat, Vente, Gestion locative et Travaux de Construction. Sécurisez votre patrimoine avec un partenaire unique, du terrain vierge à la remise des clés.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#search-section" class="flex justify-center items-center px-8 py-4 bg-cdm-green text-white font-bold rounded-lg hover:bg-cdm-green-dark transition-all transform hover:-translate-y-1 shadow-lg shadow-cdm-green/40">
                        Trouver un bien
                    </a>
                    <a href="#btp" class="flex justify-center items-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-cdm-black transition-all">
                        Devis Construction
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEARCH BAR (Sticky Mobile) -->
    <section id="search-section" class="relative -mt-10 z-30 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-premium p-6 md:p-8" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-xl font-bold mb-4 md:hidden text-center">Trouvez votre futur bien</h2>
            <form class="flex flex-col md:flex-row gap-4 items-end">
                <div class="w-full md:w-1/4">
                    <label class="block text-sm font-semibold text-gray-500 mb-1">Type de bien</label>
                    <div class="relative">
                        <select class="w-full appearance-none bg-gray-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-cdm-green">
                            <option>Maison / Villa</option>
                            <option>Appartement</option>
                            <option>Terrain</option>
                            <option>Local Commercial</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <label class="block text-sm font-semibold text-gray-500 mb-1">Quartier (Tana)</label>
                    <input type="text" placeholder="Ivandry, Ambatobe, Centre..." class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-cdm-green">
                </div>
                <div class="w-full md:w-1/4">
                    <label class="block text-sm font-semibold text-gray-500 mb-1">Budget Max (Ar)</label>
                    <input type="number" placeholder="Ex: 500 000 000" class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-cdm-green">
                </div>
                <div class="w-full md:w-auto flex-grow">
                    <button type="button" class="w-full bg-cdm-red hover:bg-red-700 text-white font-bold py-3 px-6 rounded-lg transition-colors flex items-center justify-center gap-2">
                        <i class="fa-solid fa-search"></i>
                        <span>Rechercher</span>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-cdm-black mb-4">Une offre complète pour votre sérénité</h2>
                <div class="h-1 w-20 bg-cdm-green mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-card hover:shadow-premium transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-cdm-green text-2xl mb-6 group-hover:bg-cdm-green group-hover:text-white transition-colors">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Immobilier & Gestion</h3>
                    <p class="text-gray-600 leading-relaxed">Transactions sécurisées et gestion locative rigoureuse. Accédez aux meilleures offres de vente et location à Tana sans surprise.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-card hover:shadow-premium transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center text-cdm-green text-2xl mb-6 group-hover:bg-cdm-green group-hover:text-white transition-colors">
                        <i class="fa-solid fa-trowel-bricks"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Construction & BTP</h3>
                    <p class="text-gray-600 leading-relaxed">Maçonnerie, gros œuvre et finitions. Une équipe d'ingénieurs et d'ouvriers qualifiés pour des travaux suivis et garantis.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-2xl border border-cdm-black/5 shadow-card hover:shadow-premium transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-black rounded-xl flex items-center justify-center text-white text-2xl mb-6">
                        <i class="fa-solid fa-scale-balanced"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sécurité Juridique</h3>
                    <p class="text-gray-600 leading-relaxed">Le différenciateur clé. Vérification des titres fonciers, bornage, rédaction des contrats. Nous éliminons le risque de litige.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- LISTINGS -->
    <section id="biens" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12" data-aos="fade-up">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-cdm-black mb-2">Les opportunités du moment</h2>
                    <p class="text-gray-500">Sélection exclusive de biens vérifiés à Antananarivo</p>
                </div>
                <a href="#" class="hidden md:inline-block text-cdm-black font-semibold underline decoration-cdm-green decoration-2 underline-offset-4 hover:text-cdm-green transition-colors">Voir tout le catalogue</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Listing 1 -->
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-64 overflow-hidden">
                        <span class="absolute top-4 left-4 bg-cdm-black text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded-sm z-10">Exclusivité</span>
                        <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2070&auto=format&fit=crop" alt="Villa Ambohibao" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Villa basse moderne</h3>
                        <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-location-dot mr-1 text-cdm-green"></i> Ambohibao, Tana</p>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                            <span class="text-cdm-red font-bold text-lg">450 M Ar</span>
                            <button class="text-sm font-semibold text-gray-900 border border-gray-300 px-3 py-1 rounded hover:bg-black hover:text-white transition-colors">Détails</button>
                        </div>
                    </div>
                </div>

                <!-- Listing 2 -->
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-64 overflow-hidden">
                        <span class="absolute top-4 left-4 bg-cdm-green text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded-sm z-10">À Louer</span>
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=2070&auto=format&fit=crop" alt="Appartement Tana" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Appartement T3 Standing</h3>
                        <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-location-dot mr-1 text-cdm-green"></i> Ankorondrano, Tana</p>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                            <span class="text-gray-900 font-bold text-lg">1.5 M Ar <span class="text-sm font-normal text-gray-500">/mois</span></span>
                            <button class="text-sm font-semibold text-gray-900 border border-gray-300 px-3 py-1 rounded hover:bg-black hover:text-white transition-colors">Détails</button>
                        </div>
                    </div>
                </div>

                <!-- Listing 3 -->
                <div class="group bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-64 overflow-hidden">
                        <span class="absolute top-4 left-4 bg-gray-800 text-white text-xs font-bold px-3 py-1 uppercase tracking-wider rounded-sm z-10">Terrain</span>
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2000&auto=format&fit=crop" alt="Terrain By Pass" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Grand Terrain Constructible</h3>
                        <p class="text-gray-500 text-sm mb-4"><i class="fa-solid fa-location-dot mr-1 text-cdm-green"></i> By-Pass, Tana</p>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                            <span class="text-gray-900 font-bold text-lg">80.000 Ar <span class="text-sm font-normal text-gray-500">/m²</span></span>
                            <button class="text-sm font-semibold text-gray-900 border border-gray-300 px-3 py-1 rounded hover:bg-black hover:text-white transition-colors">Détails</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center md:hidden">
                <a href="#" class="inline-block text-cdm-black font-semibold underline decoration-cdm-green decoration-2 underline-offset-4">Voir tout le catalogue</a>
            </div>
        </div>
    </section>

    <!-- BTP FOCUS (Before/After) -->
    <section id="btp" class="py-20 bg-cdm-dark text-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-5xl font-serif font-bold mb-6">Construisez ou Rénovez <br><span class="text-cdm-green">sans stress</span>.</h2>
                    <p class="text-gray-400 text-lg mb-8">
                        Fini les chantiers abandonnés ou les malfaçons. Avec CDM Immo, bénéficiez d'une transparence totale :
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-cdm-green mt-1 mr-3"></i>
                            <span>Devis détaillé et ferme sous 48h</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-cdm-green mt-1 mr-3"></i>
                            <span>Respect strict des délais contractuels</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check text-cdm-green mt-1 mr-3"></i>
                            <span>Main d'œuvre qualifiée et encadrée</span>
                        </li>
                    </ul>
                    <a href="#" class="inline-block bg-white text-cdm-black hover:bg-cdm-green hover:text-white font-bold py-4 px-8 rounded-lg transition-all shadow-[0_0_20px_rgba(255,255,255,0.2)]">
                        Demander une estimation travaux
                    </a>
                </div>

                <!-- Slider Comparison -->
                <div class="relative" data-aos="fade-left">
                    <div class="text-center mb-2 font-bold text-sm tracking-widest text-gray-500">GLISSEZ POUR VOIR LE RÉSULTAT</div>
                    <div class="img-comp-container shadow-2xl border-4 border-gray-800">
                        <div class="img-comp-img">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" alt="Après travaux">
                        </div>
                        <div class="img-comp-img img-comp-overlay">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop" alt="Avant travaux (Chantier)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif font-bold mb-4">La confiance de nos clients</h2>
                <p class="text-gray-600">Ils ont investi à Madagascar avec nous.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-card" data-aos="fade-up">
                    <div class="flex text-cdm-green text-sm mb-4">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-lg text-gray-800 italic mb-6">"Grâce au pôle juridique de CDM Immo, j'ai évité l'achat d'un terrain litigieux à Ivato. Leur vigilance m'a sauvé mes économies."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">RF</div>
                        <div class="ml-3">
                            <p class="text-sm font-bold text-black">R. Faniry</p>
                            <p class="text-xs text-gray-500">Investisseur Local</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex text-cdm-green text-sm mb-4">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    </div>
                    <p class="text-lg text-gray-800 italic mb-6">"Rénovation complète de ma maison ancestrale. Chantier livré avec 1 semaine d'avance. Finitions impeccables, rien à dire."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">SL</div>
                        <div class="ml-3">
                            <p class="text-sm font-bold text-black">Sarah L.</p>
                            <p class="text-xs text-gray-500">Expatriée France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-serif font-bold mb-10 text-center">Questions Fréquentes</h2>
            
            <div class="space-y-4">
                <details class="group bg-gray-50 p-6 rounded-xl cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-lg list-none text-cdm-black">
                        Comment garantissez-vous la situation juridique des terrains ?
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-cdm-green"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 group-open:animate-fadeIn">
                        Nous travaillons systématiquement avec les domaines et la topographie avant toute mise en vente. Nous vérifions le certificat de situation juridique (CSJ) de moins de 3 mois et le bornage pour garantir que le bien est "titré et borné" sans opposition.
                    </p>
                </details>

                <details class="group bg-gray-50 p-6 rounded-xl cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-lg list-none text-cdm-black">
                        Quels sont vos délais pour un devis de construction ?
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-cdm-green"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 group-open:animate-fadeIn">
                        Pour un projet standard, nous nous engageons à fournir un devis détaillé (quantitatif et estimatif) sous 48h après la visite du site ou la réception des plans.
                    </p>
                </details>

                <details class="group bg-gray-50 p-6 rounded-xl cursor-pointer">
                    <summary class="flex justify-between items-center font-medium text-lg list-none text-cdm-black">
                        Gérez-vous les biens pour les propriétaires à l'étranger ?
                        <span class="transition group-open:rotate-180">
                            <i class="fa-solid fa-chevron-down text-cdm-green"></i>
                        </span>
                    </summary>
                    <p class="text-gray-600 mt-4 group-open:animate-fadeIn">
                        Oui, c'est notre spécialité. Nous proposons un mandat de gestion complet : recherche de locataires, encaissement des loyers, maintenance et paiement des charges, avec un reporting mensuel par email/WhatsApp.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black text-white pt-20 pb-10 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div>
                    <h3 class="text-2xl font-serif font-bold mb-6 text-white">CDM Immo</h3>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Votre partenaire de confiance à Madagascar. Nous transformons la complexité du marché immobilier local en une expérience simple et sécurisée.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors text-xl"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors text-xl"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors text-xl"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white border-l-4 border-cdm-green pl-3">Contact</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start">
                            <i class="fa-solid fa-location-dot mt-1 mr-3 text-cdm-green"></i>
                            <span>Enceinte City Center,<br>Antananarivo 101, Madagascar</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3 text-cdm-green"></i>
                            <span>+261 34 XX XXX XX</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3 text-cdm-green"></i>
                            <span>contact@cdm-immo.mg</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-6 text-white border-l-4 border-cdm-green pl-3">Liens Rapides</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-cdm-green transition-colors">Déposer un bien</a></li>
                        <li><a href="#" class="hover:text-cdm-green transition-colors">Nos honoraires</a></li>
                        <li><a href="#" class="hover:text-cdm-green transition-colors">Catalogue Vente</a></li>
                        <li><a href="#" class="hover:text-cdm-green transition-colors">Catalogue Location</a></li>
                        <li><a href="#" class="hover:text-cdm-green transition-colors">Demander un devis BTP</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm text-center md:text-left">&copy; 2024 CDM Immo. Tous droits réservés.</p>
                <div class="flex space-x-6 mt-4 md:mt-0 text-sm text-gray-500">
                    <a href="#" class="hover:text-white">Mentions Légales</a>
                    <a href="#" class="hover:text-white">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // 1. INJECTION LOGO (VARIABLE OBLIGATOIRE)
        // NOTE CLIENT : Remplacez l'URL ci-dessous par le lien de votre logo final.
        // J'ai mis "CDM+IMMO" dans le texte pour que ce soit cohérent visuellement.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=CDM+IMMO";
        
        document.addEventListener('DOMContentLoaded', () => {
            const logoContainer = document.getElementById('logo-container');
            const logoImg = document.createElement('img');
            logoImg.src = LOGO_URL;
            logoImg.alt = "CDM Immo Logo";
            logoImg.className = "h-12 w-auto"; // Taille ajustée pour le header
            logoContainer.appendChild(logoImg);

            // Init AOS Animation
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });

            // Init Image Comparison
            initComparisons();

            // Mobile Menu Toggle
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });

            // Smooth Scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    menu.classList.add('hidden'); // Close mobile menu if open
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });

        // 2. IMAGE COMPARISON SLIDER LOGIC
        function initComparisons() {
            var x, i;
            x = document.getElementsByClassName("img-comp-overlay");
            for (i = 0; i < x.length; i++) {
                compareImages(x[i]);
            }
            
            function compareImages(img) {
                var slider, clicked = 0, w, h;
                w = img.offsetWidth;
                h = img.offsetHeight;
                
                img.style.width = (w / 2) + "px";
                
                slider = document.createElement("DIV");
                slider.setAttribute("class", "img-comp-slider");
                slider.innerHTML = "<i class='fa-solid fa-left-right text-white'></i>"; // Icone flèches
                
                img.parentElement.insertBefore(slider, img);
                
                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                
                slider.addEventListener("mousedown", slideReady);
                window.addEventListener("mouseup", slideFinish);
                slider.addEventListener("touchstart", slideReady);
                window.addEventListener("touchend", slideFinish);
                
                function slideReady(e) {
                    e.preventDefault();
                    clicked = 1;
                    window.addEventListener("mousemove", slideMove);
                    window.addEventListener("touchmove", slideMove);
                }
                
                function slideFinish() {
                    clicked = 0;
                }
                
                function slideMove(e) {
                    var pos;
                    if (clicked == 0) return false;
                    pos = getCursorPos(e);
                    if (pos < 0) pos = 0;
                    if (pos > w) pos = w;
                    slide(pos);
                }
                
                function getCursorPos(e) {
                    var a, x = 0;
                    e = (e.changedTouches) ? e.changedTouches[0] : e;
                    a = img.getBoundingClientRect();
                    x = e.pageX - a.left;
                    x = x - window.pageXOffset;
                    return x;
                }
                
                function slide(x) {
                    img.style.width = x + "px";
                    slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                }
            }
        }
    </script>
</body>
</html>