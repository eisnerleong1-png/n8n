<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingenosya | Intégrateur Odoo & Développement Offshore Madagascar</title>
    <meta name="description" content="25 ans d'expertise IT. Partenaire Silver Odoo et spécialiste du développement sur-mesure à Madagascar.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS (Via CDN for standalone file) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#0C4D7E',
                            gold: '#FDC65E',
                            dark: '#0f172a',
                            light: '#f8fafc'
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        body: ['Poppins', 'sans-serif'],
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(31, 38, 135, 0.07)',
                        'glow': '0 0 20px rgba(253, 198, 94, 0.3)'
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styles & Reset */
        html { scroll-behavior: smooth; }
        body { font-family: 'Poppins', sans-serif; -webkit-font-smoothing: antialiased; background-color: #f8fafc; overflow-x: hidden; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Montserrat', sans-serif; }

        /* Glassmorphism Utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(12, 77, 126, 0.15);
            border-color: #FDC65E;
        }

        /* Animations */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero Split Screen */
        .hero-clip {
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
        }

        /* Portfolio Hover Effect */
        .portfolio-item img {
            filter: grayscale(100%);
            transition: all 0.5s ease;
        }
        .portfolio-item:hover img {
            filter: grayscale(0%);
            transform: scale(1.05);
        }
        .portfolio-overlay {
            background: linear-gradient(to top, rgba(12, 77, 126, 0.9), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        /* Navigation */
        nav.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        nav.scrolled .nav-link { color: #0C4D7E; }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #0C4D7E; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #08365a; }
    </style>
</head>
<body class="text-slate-800">

    <!-- NAVIGATION -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 py-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo Container (Script will inject logo here) -->
            <a href="#" id="logo-container" class="block relative z-50">
                <!-- Logo injected via JS -->
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-brand-blue z-50 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#services" class="nav-link font-medium text-slate-800 hover:text-brand-blue transition">Services</a>
                <a href="#portfolio" class="nav-link font-medium text-slate-800 hover:text-brand-blue transition">Réalisations</a>
                <a href="#about" class="nav-link font-medium text-slate-800 hover:text-brand-blue transition">À propos</a>
                <a href="#contact" class="px-6 py-2.5 bg-brand-gold text-black font-bold rounded-full shadow-glow hover:bg-yellow-400 transition transform hover:scale-105">
                    Devis Gratuit
                </a>
            </div>
        </div>
        
        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed inset-0 bg-white z-40 flex flex-col items-center justify-center space-y-8 transform translate-x-full transition-transform duration-300 lg:hidden">
            <a href="#services" class="text-2xl font-bold text-brand-blue mobile-link">Services</a>
            <a href="#portfolio" class="text-2xl font-bold text-brand-blue mobile-link">Réalisations</a>
            <a href="#about" class="text-2xl font-bold text-brand-blue mobile-link">À propos</a>
            <a href="#contact" class="px-8 py-3 bg-brand-gold text-black font-bold rounded-full mobile-link">Contact</a>
        </div>
    </nav>

    <!-- HEADER / HERO SECTION -->
    <header class="relative min-h-screen flex items-center bg-brand-light overflow-hidden hero-clip">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-brand-blue hidden lg:block z-0"></div>
        <div class="absolute -top-20 -left-20 w-96 h-96 bg-brand-gold/10 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-6 relative z-10 pt-20">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                
                <!-- Text Content (Left) -->
                <div class="w-full lg:w-1/2 space-y-8 reveal active">
                    <div class="inline-flex items-center space-x-2 bg-brand-blue/10 px-4 py-2 rounded-full">
                        <span class="w-2 h-2 bg-brand-blue rounded-full animate-pulse"></span>
                        <span class="text-brand-blue font-bold text-xs uppercase tracking-wider">Expertise Tech depuis 1999</span>
                    </div>
                    
                    <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight text-slate-900">
                        25 Ans d'Expertise IT & <span class="text-brand-blue">Intégration Odoo</span> au Service de Votre Performance.
                    </h1>
                    
                    <p class="text-lg text-slate-600 leading-relaxed max-w-lg border-l-4 border-brand-gold pl-4">
                        Ingenosya allie la puissance d'Odoo et le développement sur-mesure pour digitaliser vos processus. Partenaire Silver Odoo de référence à Madagascar.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#contact" class="px-8 py-4 bg-brand-gold text-black font-bold rounded shadow-lg hover:shadow-glow hover:bg-yellow-400 transition text-center flex items-center justify-center gap-2">
                            <span>Parler à un Expert</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#services" class="px-8 py-4 border-2 border-slate-300 hover:border-brand-blue text-slate-700 hover:text-brand-blue font-semibold rounded transition text-center">
                            Découvrir nos solutions
                        </a>
                    </div>
                </div>

                <!-- Visual Content (Right) -->
                <div class="w-full lg:w-1/2 relative reveal" style="transition-delay: 200ms;">
                    <!-- Composition of images -->
                    <div class="relative">
                        <!-- Main Image: Office/Human -->
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" 
                             alt="Équipe technique Madagascar" 
                             class="rounded-xl shadow-2xl w-full object-cover h-[500px] border-4 border-white relative z-10">
                        
                        <!-- Floating UI Mockup -->
                        <div class="absolute -bottom-10 -left-10 lg:-left-20 w-3/4 rounded-lg overflow-hidden shadow-2xl border-4 border-white z-20 glass-card">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" 
                                 alt="Interface Odoo Analytics" 
                                 class="w-full h-auto opacity-90">
                            <div class="p-4 bg-white/90 backdrop-blur">
                                <div class="flex items-center gap-3">
                                    <div class="h-8 w-8 bg-green-500 rounded-full flex items-center justify-center text-white text-xs"><i class="fas fa-check"></i></div>
                                    <div>
                                        <p class="font-bold text-sm">Migration Réussie</p>
                                        <p class="text-xs text-gray-500">Système opérationnel 100%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- TRUST BAR SECTION -->
    <section class="py-10 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-16 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Odoo Partner Badge (Priority) -->
                <div class="flex items-center gap-2 font-bold text-2xl text-slate-700">
                    <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs rounded-full uppercase tracking-wider">Silver Partner</span>
                    <span>odoo</span>
                </div>
                
                <div class="h-8 w-px bg-gray-300 hidden md:block"></div>

                <!-- Placeholder Logos for Clients -->
                <div class="text-xl font-bold text-slate-400 flex items-center gap-2"><i class="fas fa-university"></i> BNI MADAGASCAR</div>
                <div class="text-xl font-bold text-slate-400 flex items-center gap-2"><i class="fas fa-industry"></i> STAR GROUP</div>
                <div class="text-xl font-bold text-slate-400 flex items-center gap-2"><i class="fas fa-globe-europe"></i> CLIENT FRANCE</div>
                
                <div class="h-8 w-px bg-gray-300 hidden md:block"></div>
                
                <!-- Heritage Badge -->
                <div class="flex flex-col items-center">
                    <span class="text-xs text-gray-400 uppercase tracking-widest">Established</span>
                    <span class="font-mono font-bold text-brand-blue">1999</span>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION -->
    <section id="value" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="text-3xl lg:text-4xl font-bold text-brand-blue mb-4">Ne laissez pas une technologie vieillissante freiner votre croissance.</h2>
                <div class="h-1 w-20 bg-brand-gold mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition group reveal">
                    <div class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-brand-blue text-2xl group-hover:bg-brand-blue group-hover:text-white transition">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Modernisation Legacy</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Transformation sécurisée de vos systèmes historiques vers des architectures web & mobile modernes et évolutives.</p>
                </div>

                <!-- Value 2 -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition group reveal" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mb-6 text-purple-600 text-2xl group-hover:bg-purple-600 group-hover:text-white transition">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Centralisation Odoo</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Fini les fichiers Excel dispersés. Unifiez votre gestion (Ventes, RH, Compta, Stock) dans un ERP puissant.</p>
                </div>

                <!-- Value 3 -->
                <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-lg transition group reveal" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-yellow-50 rounded-2xl flex items-center justify-center mb-6 text-yellow-600 text-2xl group-hover:bg-brand-gold group-hover:text-black transition">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Agilité Offshore</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">Une équipe francophone dédiée à Antananarivo, alignée sur les standards européens de qualité et de délais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section id="services" class="py-20 relative overflow-hidden bg-brand-blue text-white">
        <!-- Background Decor -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 opacity-10">
            <div class="absolute top-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-64 h-64 bg-brand-gold rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <span class="text-brand-gold font-bold tracking-widest uppercase text-sm">Expertise 360°</span>
                    <h2 class="text-4xl font-bold mt-2">Nos Domaines d'Intervention</h2>
                </div>
                <div class="hidden md:block">
                    <a href="#contact" class="text-white border-b border-brand-gold pb-1 hover:text-brand-gold transition">Télécharger la plaquette <i class="fas fa-download ml-2"></i></a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1: Odoo -->
                <div class="glass-card p-8 rounded-xl text-slate-800 reveal">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center text-purple-700 text-xl">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <span class="px-2 py-1 bg-slate-100 text-xs font-bold rounded text-slate-500">Silver Partner</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Intégration Odoo</h3>
                    <ul class="space-y-3 text-sm text-slate-600 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Audit & Analyse des processus</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Configuration sur-mesure</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Migration de données & Formation</li>
                    </ul>
                    <div class="mt-auto pt-4 border-t border-slate-200">
                         <p class="text-xs text-brand-blue font-semibold">Pack Starter Odoo à partir de 2 000 000 Ar</p>
                    </div>
                </div>

                <!-- Service 2: Dev Custom -->
                <div class="glass-card p-8 rounded-xl text-slate-800 reveal" style="transition-delay: 100ms;">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-brand-blue text-xl">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Apps Web & Mobile</h3>
                    <ul class="space-y-3 text-sm text-slate-600 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Architecture Micro-services</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Python (Django/Flask), JS (React/Vue)</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Mobile Hybride & Natif</li>
                    </ul>
                </div>

                <!-- Service 3: TMA -->
                <div class="glass-card p-8 rounded-xl text-slate-800 reveal" style="transition-delay: 200ms;">
                    <div class="flex justify-between items-start mb-6">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center text-yellow-700 text-xl">
                            <i class="fas fa-tools"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">TMA & Offshore</h3>
                    <ul class="space-y-3 text-sm text-slate-600 mb-6">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Tierce Maintenance Applicative</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Équipes dédiées (Régie)</li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i> Stabilité et Garantie long terme</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO INTERACTIF -->
    <section id="portfolio" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12 reveal">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Réalisations Concrètes</h2>
                
                <!-- Filters -->
                <div class="flex flex-wrap justify-center gap-4" id="portfolio-filters">
                    <button class="filter-btn active px-6 py-2 rounded-full border border-brand-blue bg-brand-blue text-white font-medium transition" data-filter="all">Tous</button>
                    <button class="filter-btn px-6 py-2 rounded-full border border-brand-blue text-brand-blue hover:bg-brand-blue hover:text-white font-medium transition" data-filter="odoo">Odoo ERP</button>
                    <button class="filter-btn px-6 py-2 rounded-full border border-brand-blue text-brand-blue hover:bg-brand-blue hover:text-white font-medium transition" data-filter="web">Web & E-commerce</button>
                    <button class="filter-btn px-6 py-2 rounded-full border border-brand-blue text-brand-blue hover:bg-brand-blue hover:text-white font-medium transition" data-filter="mobile">Mobile</button>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
                
                <!-- Project 1 (Odoo) -->
                <div class="portfolio-item group relative h-72 rounded-xl overflow-hidden cursor-pointer reveal" data-category="odoo">
                    <img src="https://images.unsplash.com/photo-1556740758-90de2929450a?q=80&w=2070&auto=format&fit=crop" alt="Projet RH" class="w-full h-full object-cover">
                    <div class="portfolio-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-brand-gold text-xs font-bold uppercase mb-1">Industrie</span>
                        <h3 class="text-white text-xl font-bold">Digitalisation RH Complète</h3>
                        <p class="text-gray-300 text-sm mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Intégration Odoo Entreprise pour 500 employés.</p>
                    </div>
                </div>

                <!-- Project 2 (Web) -->
                <div class="portfolio-item group relative h-72 rounded-xl overflow-hidden cursor-pointer reveal" data-category="web">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop" alt="Projet E-commerce" class="w-full h-full object-cover">
                    <div class="portfolio-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-brand-gold text-xs font-bold uppercase mb-1">Retail</span>
                        <h3 class="text-white text-xl font-bold">Refonte E-commerce B2B</h3>
                        <p class="text-gray-300 text-sm mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Plateforme sur-mesure connectée au stock.</p>
                    </div>
                </div>

                <!-- Project 3 (Mobile) -->
                <div class="portfolio-item group relative h-72 rounded-xl overflow-hidden cursor-pointer reveal" data-category="mobile">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070&auto=format&fit=crop" alt="App Mobile" class="w-full h-full object-cover">
                    <div class="portfolio-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-brand-gold text-xs font-bold uppercase mb-1">Fintech</span>
                        <h3 class="text-white text-xl font-bold">Application Mobile Banking</h3>
                        <p class="text-gray-300 text-sm mt-2 opacity-0 group-hover:opacity-100 transition duration-300">React Native / Sécurité maximale.</p>
                    </div>
                </div>

                 <!-- Project 4 (Odoo) -->
                 <div class="portfolio-item group relative h-72 rounded-xl overflow-hidden cursor-pointer reveal" data-category="odoo">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="Projet Compta" class="w-full h-full object-cover">
                    <div class="portfolio-overlay absolute inset-0 flex flex-col justify-end p-6">
                        <span class="text-brand-gold text-xs font-bold uppercase mb-1">Services</span>
                        <h3 class="text-white text-xl font-bold">Migration Odoo V14 vers V17</h3>
                        <p class="text-gray-300 text-sm mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Sans interruption de service.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 relative reveal">
                    <div class="absolute inset-0 bg-brand-gold rounded-2xl transform rotate-3 z-0"></div>
                    <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=1974&auto=format&fit=crop" alt="Culture Ingenosya" class="relative z-10 rounded-2xl shadow-xl w-full">
                </div>
                <div class="w-full lg:w-1/2 reveal">
                    <h2 class="text-4xl font-bold text-brand-blue mb-6">L'Expérience au service de l'Innovation.</h2>
                    <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                        Depuis 25 ans, Ingenosya forme et déploie les meilleurs talents tech de Madagascar. Nous ne sommes pas simplement une agence de développement, nous sommes le partenaire technique stable que les DSI recherchent.
                    </p>
                    <p class="text-slate-600 leading-relaxed mb-8">
                        Notre force réside dans notre capacité à comprendre les enjeux métier européens tout en tirant parti de l'agilité et de la compétitivité malgache.
                    </p>
                    <a href="#contact" class="inline-block border-b-2 border-brand-blue text-brand-blue font-bold pb-1 hover:text-brand-gold hover:border-brand-gold transition">
                        Rencontrer l'équipe dirigeante <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="text-3xl font-bold text-center mb-12 text-slate-900">Questions Fréquentes</h2>
            
            <div class="space-y-4">
                <!-- Q1 -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden reveal">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                        <span class="font-bold text-slate-800">Gérez-vous la migration depuis d'anciens systèmes (Legacy) ?</span>
                        <i class="fas fa-plus text-brand-gold transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 max-h-0 overflow-hidden transition-all duration-300 bg-slate-50 text-slate-600 leading-relaxed">
                        <div class="py-4">
                            Absolument. C'est notre spécialité historique depuis 1999. Nous savons analyser vos bases de données existantes (AS/400, vieux SQL, Excel complexes) pour les nettoyer et les importer proprement vers Odoo ou une nouvelle architecture web.
                        </div>
                    </div>
                </div>

                <!-- Q2 -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden reveal">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                        <span class="font-bold text-slate-800">Êtes-vous certifiés Odoo ?</span>
                        <i class="fas fa-plus text-brand-gold transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 max-h-0 overflow-hidden transition-all duration-300 bg-slate-50 text-slate-600 leading-relaxed">
                        <div class="py-4">
                            Oui, nous sommes Odoo Silver Partner. Cela garantit que nos développeurs sont certifiés, que nous suivons les meilleures pratiques d'implémentation de l'éditeur, et que nous avons accès au support direct d'Odoo S.A.
                        </div>
                    </div>
                </div>

                <!-- Q3 -->
                <div class="bg-white rounded-lg shadow-sm border border-slate-100 overflow-hidden reveal">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none" onclick="toggleFaq(this)">
                        <span class="font-bold text-slate-800">Comment travaillez-vous avec des clients en Europe ?</span>
                        <i class="fas fa-plus text-brand-gold transition-transform duration-300"></i>
                    </button>
                    <div class="px-6 max-h-0 overflow-hidden transition-all duration-300 bg-slate-50 text-slate-600 leading-relaxed">
                        <div class="py-4">
                            Nous fonctionnons avec un décalage horaire minimal (1h à 2h). Nos chefs de projet sont francophones et utilisent des outils collaboratifs modernes (Jira, Slack, Teams). Nous proposons des modèles au forfait ou en régie dédiée selon vos besoins.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="bg-brand-blue text-white pt-20 pb-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4 font-mono tracking-tighter">INGENOSYA</h3>
                    <p class="text-slate-300 mb-6 max-w-sm">
                        Votre partenaire technologique de confiance depuis 1999. Intégration ERP & Développement sur-mesure à Madagascar.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-gold hover:text-black transition"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-gold hover:text-black transition"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-6 border-b border-white/20 pb-2 inline-block">Services</h4>
                    <ul class="space-y-3 text-slate-300">
                        <li><a href="#" class="hover:text-brand-gold transition">Intégration Odoo</a></li>
                        <li><a href="#" class="hover:text-brand-gold transition">Développement Web</a></li>
                        <li><a href="#" class="hover:text-brand-gold transition">Applications Mobiles</a></li>
                        <li><a href="#" class="hover:text-brand-gold transition">Tierce Maintenance (TMA)</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-6 border-b border-white/20 pb-2 inline-block">Contact</h4>
                    <ul class="space-y-3 text-slate-300">
                        <li class="flex items-start"><i class="fas fa-map-marker-alt mt-1 mr-3 text-brand-gold"></i> Antananarivo, Madagascar</li>
                        <li class="flex items-center"><i class="fas fa-phone mr-3 text-brand-gold"></i> +261 20 22 123 45</li>
                        <li class="flex items-center"><i class="fas fa-envelope mr-3 text-brand-gold"></i> contact@ingenosya.mg</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-slate-400">
                <p>&copy; 2024 Ingenosya. Tous droits réservés.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Mentions Légales</a>
                    <a href="#" class="hover:text-white">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // --- 1. CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // INSTRUCTIONS POUR LE CLIENT : 
        // Remplacez l'URL ci-dessous par le lien direct de votre logo (PNG transparent recommandé).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-container');
        // Note: J'utilise ici un style inline pour forcer la visibilité sur fond clair ou sombre si besoin
        logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Logo Ingenosya" class="h-10 md:h-12 w-auto object-contain">`;

        // --- 2. SCROLL REVEAL ANIMATION ---
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                reveals.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            // Trigger once on load
            revealOnScroll();
        });

        // --- 3. NAVBAR GLASS EFFECT ---
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // --- 4. PORTFOLIO FILTERING ---
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update buttons style
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-brand-blue', 'text-white');
                    b.classList.add('text-brand-blue');
                });
                btn.classList.add('active', 'bg-brand-blue', 'text-white');
                btn.classList.remove('text-brand-blue');

                // Filter items
                const category = btn.getAttribute('data-filter');
                portfolioItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                        // Small animation reset
                        item.classList.remove('active');
                        setTimeout(() => item.classList.add('active'), 50);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // --- 5. FAQ ACCORDION ---
        function toggleFaq(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('.fa-plus');
            
            // Close other items (optional - single open mode)
            /*
            const allContents = document.querySelectorAll('#faq .max-h-0');
            allContents.forEach(c => {
                if (c !== content) {
                    c.style.maxHeight = null;
                    c.previousElementSibling.querySelector('.fa-plus').style.transform = 'rotate(0deg)';
                }
            });
            */

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = 'rotate(0deg)';
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = 'rotate(45deg)';
            }
        }

        // --- 6. MOBILE MENU ---
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('translate-x-full');
            const icon = mobileBtn.querySelector('i');
            if (mobileMenu.classList.contains('translate-x-full')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                mobileBtn.querySelector('i').classList.remove('fa-times');
                mobileBtn.querySelector('i').classList.add('fa-bars');
            });
        });

    </script>
</body>
</html>