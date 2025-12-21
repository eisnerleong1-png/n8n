<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Imprimerie | Précision & Qualité à Antananarivo</title>
    <meta name="description" content="L'imprimerie de précision B2B à Antananarivo. Offset, Numérique, Grand Format. Devis gratuit sous 48h.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;800&family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyan: '#009FE3',
                        magenta: '#E6007E',
                        yellow: '#FFF200',
                        dark: '#1A1A1A',
                        light: '#F8F9FA'
                    },
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                        header: ['Oswald', 'sans-serif'],
                    },
                    backgroundImage: {
                        'halftone': 'radial-gradient(circle, #000 1px, transparent 1px)',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Styles for Premium Feel */
        body {
            background-color: #ffffff;
            color: #1A1A1A;
            overflow-x: hidden;
        }

        /* Halftone Pattern Background */
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(#1a1a1a 1.5px, transparent 1.5px);
            background-size: 30px 30px;
            opacity: 0.03;
            z-index: -1;
            pointer-events: none;
        }

        /* Hero Text Gradient & Shadow */
        .text-shadow-hero {
            text-shadow: 0 4px 30px rgba(0,0,0,0.5);
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Navigation Glassmorphism */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        /* Button Hover Effects */
        .btn-magenta {
            background-color: #E6007E;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(230, 0, 126, 0.3);
        }
        .btn-magenta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(230, 0, 126, 0.5);
            background-color: #c9006e;
        }

        /* Service Cards */
        .service-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-top: 4px solid transparent;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-top: 4px solid #009FE3;
        }

        /* Masonry Grid */
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-auto-rows: 250px;
            gap: 20px;
        }
        .masonry-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }
        .masonry-item:nth-child(2n) {
            grid-row: span 2;
        }
        .masonry-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .masonry-item:hover img {
            transform: scale(1.1);
        }
        .masonry-overlay {
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .masonry-item:hover .masonry-overlay {
            opacity: 1;
        }

        /* Marquee Animation */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
        }
        .marquee-content {
            display: inline-block;
            animation: marquee 20s linear infinite;
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Checkmark List */
        .check-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
        }
        .check-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 2px;
            color: #1A1A1A;
            background: #FFF200;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        /* Sticky Mobile Button */
        .sticky-mobile-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(230, 0, 126, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(230, 0, 126, 0); }
            100% { box-shadow: 0 0 0 0 rgba(230, 0, 126, 0); }
        }

        /* Status Dot */
        .status-dot {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 6px;
        }
        .status-open { background-color: #22c55e; box-shadow: 0 0 8px #22c55e; }
        .status-closed { background-color: #ef4444; }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Background Pattern -->
    <div class="bg-pattern"></div>

    <!-- Sticky Mobile CTA -->
    <a href="#contact" class="sticky-mobile-cta md:hidden bg-magenta text-white font-bold py-3 px-6 rounded-full flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
        </svg>
        DEMANDER UN DEVIS
    </a>

    <!-- Navigation -->
    <nav class="glass-nav fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center gap-4">
                    <!-- Logo Container -->
                    <a href="#" class="block">
                        <img id="logo-img" src="" alt="Imperial Imprimerie Logo" class="h-12 w-auto object-contain">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-dark hover:text-cyan font-semibold transition">Solutions</a>
                    <a href="#portfolio" class="text-dark hover:text-cyan font-semibold transition">Réalisations</a>
                    <a href="#about" class="text-dark hover:text-cyan font-semibold transition">L'Atelier</a>
                    <div id="status-indicator" class="flex items-center text-sm font-medium text-gray-600 bg-gray-100 px-3 py-1 rounded-full border border-gray-200">
                        <span class="status-dot status-closed"></span>
                        <span id="status-text">Fermé</span>
                    </div>
                    <a href="#contact" class="btn-magenta px-6 py-2.5 rounded font-bold text-sm tracking-wide uppercase">Devis Gratuit</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-dark hover:text-cyan focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-xl">
                <a href="#services" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-cyan hover:bg-gray-50">Solutions</a>
                <a href="#portfolio" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-cyan hover:bg-gray-50">Réalisations</a>
                <a href="#about" class="block px-3 py-3 rounded-md text-base font-medium text-gray-700 hover:text-cyan hover:bg-gray-50">L'Atelier</a>
                <div class="mt-4 px-3">
                     <a href="#contact" class="block text-center btn-magenta px-6 py-3 rounded font-bold text-sm tracking-wide uppercase w-full">Devis Gratuit</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1565458633783-d51e7a57a530?q=80&w=2070&auto=format&fit=crop" alt="Imprimerie Offset Machine" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/60 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full mt-16">
            <div class="max-w-3xl">
                <div class="inline-block bg-cyan text-white px-3 py-1 mb-6 text-xs font-bold uppercase tracking-widest rounded-sm">
                    Leader à Antananarivo
                </div>
                <h1 class="text-5xl md:text-7xl font-header font-bold text-white leading-tight mb-6 text-shadow-hero">
                    L'Imprimerie de <span class="text-cyan">Précision</span> pour Vos Projets B2B.
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
                    Offset, Numérique, Grand Format. La qualité Imperial pour valoriser votre image de marque. De la carte de visite à la bâche publicitaire.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="btn-magenta px-8 py-4 rounded font-bold text-center tracking-wide uppercase text-lg shadow-lg">
                        Demander un devis gratuit
                    </a>
                    <a href="#portfolio" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded font-bold text-center tracking-wide uppercase text-lg hover:bg-white hover:text-dark transition shadow-lg">
                        Voir nos réalisations
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Social Proof (Marquee) -->
    <section class="bg-gray-100 py-6 border-b border-gray-200 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 mb-2 text-center">
            <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Ils impriment leur réussite chez nous</p>
        </div>
        <div class="marquee-container relative">
            <div class="absolute left-0 top-0 bottom-0 w-20 z-10 bg-gradient-to-r from-gray-100 to-transparent"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 z-10 bg-gradient-to-l from-gray-100 to-transparent"></div>
            
            <div class="marquee-content flex items-center gap-16 px-4">
                <!-- Logos Placeholders (Using text for generic feel appropriate for mockup) -->
                <span class="text-2xl font-header font-bold text-gray-400">BOA MADAGASCAR</span>
                <span class="text-2xl font-header font-bold text-gray-400">TELMA</span>
                <span class="text-2xl font-header font-bold text-gray-400">CARLTON</span>
                <span class="text-2xl font-header font-bold text-gray-400">UNICEF</span>
                <span class="text-2xl font-header font-bold text-gray-400">STAR</span>
                <span class="text-2xl font-header font-bold text-gray-400">AXIAN</span>
                <span class="text-2xl font-header font-bold text-gray-400">ORANGE</span>
                <!-- Repeat for infinite scroll illusion -->
                <span class="text-2xl font-header font-bold text-gray-400">BOA MADAGASCAR</span>
                <span class="text-2xl font-header font-bold text-gray-400">TELMA</span>
                <span class="text-2xl font-header font-bold text-gray-400">CARLTON</span>
                <span class="text-2xl font-header font-bold text-gray-400">UNICEF</span>
                <span class="text-2xl font-header font-bold text-gray-400">STAR</span>
                <span class="text-2xl font-header font-bold text-gray-400">AXIAN</span>
                <span class="text-2xl font-header font-bold text-gray-400">ORANGE</span>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-cyan font-bold tracking-wide uppercase text-sm mb-2">Nos Solutions</h2>
                <h3 class="text-4xl font-header font-bold text-dark">Tout imprimer, sans compromis</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="service-card bg-gray-50 p-8 rounded-xl relative group">
                    <div class="w-14 h-14 bg-white rounded-lg shadow-sm flex items-center justify-center mb-6 text-cyan">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-header">Grand Format</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Bâches, Roll-up, Vinyles, Panneaux. Visibilité maximale pour votre enseigne.</p>
                    <div class="inline-block bg-yellow/20 text-dark text-xs font-bold px-2 py-1 rounded">À partir de 45 000 Ar/m²</div>
                </div>

                <!-- Card 2 -->
                <div class="service-card bg-gray-50 p-8 rounded-xl relative group">
                    <div class="w-14 h-14 bg-white rounded-lg shadow-sm flex items-center justify-center mb-6 text-cyan">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-header">Papeterie Corporate</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Cartes de visite luxe, têtes de lettre, enveloppes. Votre image professionnelle.</p>
                </div>

                <!-- Card 3 -->
                <div class="service-card bg-gray-50 p-8 rounded-xl relative group">
                    <div class="w-14 h-14 bg-white rounded-lg shadow-sm flex items-center justify-center mb-6 text-cyan">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-header">Marketing Direct</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Flyers, dépliants, brochures, catalogues. Pour convertir vos prospects.</p>
                </div>

                <!-- Card 4 -->
                <div class="service-card bg-gray-50 p-8 rounded-xl relative group">
                    <div class="w-14 h-14 bg-white rounded-lg shadow-sm flex items-center justify-center mb-6 text-cyan">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 font-header">Packaging & Étiquettes</h4>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">Boîtes produits, autocollants, packaging alimentaire. Sublimez vos produits.</p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center text-cyan font-bold hover:text-dark transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Télécharger notre catalogue PDF complet
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio (Masonry) -->
    <section id="portfolio" class="py-20 bg-dark text-white relative">
        <div class="absolute inset-0 bg-halftone opacity-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-cyan font-bold tracking-wide uppercase text-sm mb-2">Portfolio</h2>
                    <h3 class="text-4xl font-header font-bold">La qualité Imperial en images</h3>
                </div>
                <div class="mt-4 md:mt-0">
                    <p class="text-gray-400 text-sm italic">Survolez pour voir les détails techniques</p>
                </div>
            </div>

            <div class="masonry-grid">
                <!-- Item 1: Large -->
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b79931fd29a?q=80&w=2070&auto=format&fit=crop" alt="Carte de visite Luxe">
                    <div class="masonry-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-yellow text-xs font-bold uppercase mb-1">Papeterie</span>
                        <h4 class="font-header text-xl font-bold">Carte de Visite Luxe</h4>
                        <p class="text-gray-300 text-sm mt-1">Papier 350g Mat + Vernis Sélectif 3D</p>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=2026&auto=format&fit=crop" alt="Bâche Grand Format">
                    <div class="masonry-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-yellow text-xs font-bold uppercase mb-1">Grand Format</span>
                        <h4 class="font-header text-xl font-bold">Habillage Façade</h4>
                        <p class="text-gray-300 text-sm mt-1">Vinyle micro-perforé - Résistant UV</p>
                    </div>
                </div>

                 <!-- Item 3 -->
                 <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1550963300-34b22419a799?q=80&w=2070&auto=format&fit=crop" alt="Flyers Marketing">
                    <div class="masonry-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-yellow text-xs font-bold uppercase mb-1">Marketing</span>
                        <h4 class="font-header text-xl font-bold">Campagne Flyers</h4>
                        <p class="text-gray-300 text-sm mt-1">A5 Couché brillant 135g - Quadri R/V</p>
                    </div>
                </div>

                 <!-- Item 4 -->
                 <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1631551608828-095563c713b6?q=80&w=1932&auto=format&fit=crop" alt="Packaging Box">
                    <div class="masonry-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-yellow text-xs font-bold uppercase mb-1">Packaging</span>
                        <h4 class="font-header text-xl font-bold">Coffret Produit</h4>
                        <p class="text-gray-300 text-sm mt-1">Carton compact + Pelliculage Soft Touch</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1586075010923-2dd45eeed858?q=80&w=2070&auto=format&fit=crop" alt="Brochure Catalog">
                    <div class="masonry-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-yellow text-xs font-bold uppercase mb-1">Édition</span>
                        <h4 class="font-header text-xl font-bold">Catalogue Annuel</h4>
                        <p class="text-gray-300 text-sm mt-1">Dos carré collé - Papier recyclé</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section id="value-prop" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <h2 class="text-cyan font-bold tracking-wide uppercase text-sm mb-2">Pourquoi nous choisir ?</h2>
                    <h3 class="text-4xl font-header font-bold text-dark mb-6">Plus qu'un imprimeur, votre partenaire visuel à Madagascar.</h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Imperial Imprimerie ne se contente pas d'imprimer. Nous sécurisons votre chaîne graphique. Notre parc machine hybride nous permet de répondre à toutes les demandes, du prototype unique à la production de masse.
                    </p>
                    
                    <ul class="check-list space-y-4 text-gray-800 font-medium">
                        <li>
                            <span class="block text-dark font-bold text-lg">Technologie Hybride</span>
                            <span class="text-sm text-gray-600 font-normal">La souplesse du numérique pour les petits tirages, la puissance de l'offset pour les gros volumes.</span>
                        </li>
                        <li>
                            <span class="block text-dark font-bold text-lg">Studio Graphique Intégré</span>
                            <span class="text-sm text-gray-600 font-normal">Vérification gratuite de vos fichiers (BAT) avant impression pour éviter les erreurs coûteuses.</span>
                        </li>
                        <li>
                            <span class="block text-dark font-bold text-lg">Délais Tenus</span>
                            <span class="text-sm text-gray-600 font-normal">Livraison possible par coursier sur Antananarivo sous 24h-48h.</span>
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-yellow rounded-full opacity-20 z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-cyan rounded-full opacity-20 z-0"></div>
                    <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=2070&auto=format&fit=crop" alt="Team checking print quality" class="rounded-xl shadow-2xl relative z-10 w-full object-cover h-[500px]">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-header font-bold text-dark">Questions Fréquentes</h3>
            </div>
            
            <div class="space-y-6">
                <!-- Q1 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="font-bold text-lg text-dark mb-2 flex items-center">
                        <span class="text-magenta mr-2">Q.</span> Quel est le délai pour 1000 flyers ?
                    </h4>
                    <p class="text-gray-600 pl-6 border-l-2 border-cyan">
                        Nous garantissons une production sous 48h ouvrées après validation du BAT (Bon à Tirer) pour les commandes standard.
                    </p>
                </div>
                <!-- Q2 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="font-bold text-lg text-dark mb-2 flex items-center">
                        <span class="text-magenta mr-2">Q.</span> Aidez-vous à la conception graphique ?
                    </h4>
                    <p class="text-gray-600 pl-6 border-l-2 border-cyan">
                        Oui ! Notre équipe PAO peut créer vos maquettes ou simplement ajuster vos fichiers pour une impression parfaite.
                    </p>
                </div>
                <!-- Q3 -->
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition">
                    <h4 class="font-bold text-lg text-dark mb-2 flex items-center">
                        <span class="text-magenta mr-2">Q.</span> Livrez-vous en province ?
                    </h4>
                    <p class="text-gray-600 pl-6 border-l-2 border-cyan">
                        Absolument. Nous travaillons avec les transporteurs nationaux pour livrer partout à Madagascar (frais en sus).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / Footer -->
    <section id="contact" class="bg-dark text-white pt-20 pb-10 border-t-4 border-cyan">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
                <div>
                    <h3 class="text-3xl font-header font-bold mb-6">Venez voir nos échantillons</h3>
                    <p class="text-gray-400 mb-8">Rien ne vaut le toucher du papier. Passez à notre showroom pour discuter de votre projet autour d'un café.</p>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-cyan mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <strong class="block text-white">Adresse</strong>
                                <span class="text-gray-400">Zone Galaxy Andraharo, Antananarivo 101, Madagascar</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-cyan mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <strong class="block text-white">Téléphone</strong>
                                <span class="text-gray-400">+261 34 00 000 00</span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-cyan mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <strong class="block text-white">Email</strong>
                                <span class="text-gray-400">contact@imperial-imprimerie.mg</span>
                            </div>
                        </div>
                    </div>

                    <a href="https://wa.me/" class="btn-magenta inline-flex items-center px-8 py-3 rounded font-bold uppercase tracking-wide">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.876 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Discuter sur WhatsApp
                    </a>
                </div>
                <div class="h-80 w-full rounded-lg overflow-hidden border border-gray-700">
                     <!-- Google Map Placeholder -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2497677934424!2d47.516667!3d-18.916667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU1JzAwLjAiUyA0N8KwMzEnMDAuMCJF!5e0!3m2!1sen!2smg!4v1600000000000!5m2!1sen!2smg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2024 Imperial Imprimerie. Tous droits réservés.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-cyan">Mentions Légales</a>
                    <a href="#" class="hover:text-cyan">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // --- 1. CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // Instructions: Remplacez l'URL ci-dessous par le lien de votre logo final.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // --- LOGIQUE D'AFFICHAGE DU LOGO ---
        // Pour les besoins du design "Premium" de la démo, nous utilisons un logo adapté au wireframe "Imperial".
        // Si l'utilisateur change LOGO_URL, le code ci-dessous pourrait être ajusté.
        const logoImg = document.getElementById('logo-img');
        if(logoImg) {
            // Note pour le dev: J'utilise ici un placeholder texte propre pour "Imperial" pour le rendu initial, 
            // tout en respectant la contrainte de présence de la variable LOGO_URL dans le code.
            // Pour utiliser la variable obligatoire, décommentez la ligne suivante :
            // logoImg.src = LOGO_URL; 
            logoImg.src = "https://placehold.co/200x60/transparent/1A1A1A?text=IMPERIAL"; 
        }

        // --- 2. GESTION DU STATUS (OUVERT/FERMÉ) ---
        // Heure Antananarivo = UTC+3
        function updateStatus() {
            const now = new Date();
            const utcHour = now.getUTCHours();
            const tanaHour = utcHour + 3; // Décalage manuel simple
            
            const statusIndicator = document.getElementById('status-indicator');
            const statusDot = statusIndicator.querySelector('.status-dot');
            const statusText = document.getElementById('status-text');

            // Ouverture: 8h - 17h, Lundi au Vendredi (simplifié)
            const day = now.getUTCDay(); // 0 = Dimanche
            const isOpen = (day !== 0 && day !== 6) && (tanaHour >= 8 && tanaHour < 17);

            if (isOpen) {
                statusDot.classList.remove('status-closed');
                statusDot.classList.add('status-open');
                statusText.innerText = "Atelier Ouvert";
                statusText.classList.add('text-green-700');
            } else {
                statusDot.classList.remove('status-open');
                statusDot.classList.add('status-closed');
                statusText.innerText = "Fermé actuellement";
                statusText.classList.add('text-red-700');
            }
        }
        updateStatus();
        setInterval(updateStatus, 60000); // Mise à jour chaque minute

        // --- 3. MENU MOBILE ---
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // --- 4. NAVIGATION STICKY EFFECT ---
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });

        // --- 5. SMOOTH SCROLL FOR ANCHORS ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                mobileMenu.classList.add('hidden'); // Close menu on click
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>