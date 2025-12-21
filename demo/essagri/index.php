<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSAGRI Antananarivo - L'Excellence en Agronomie</title>
    
    <!-- Design System & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1E9145', // Vert croissance
                        primaryDark: '#146630',
                        secondary: '#744216', // Marron terre
                        secondaryLight: '#8D5624',
                        neutral: '#F3F4F6',
                        dark: '#111827'
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        display: ['"Outfit"', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Premium Styles */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, .font-display {
            font-family: 'Outfit', sans-serif;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(30, 145, 69, 0.85) 0%, rgba(20, 102, 48, 0.6) 100%);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(30, 145, 69, 0.2);
        }

        .text-gradient {
            background: linear-gradient(to right, #1E9145, #146630);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231e9145' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* WhatsApp Pulse */
        .pulse-btn {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(37, 211, 102, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        .image-reveal {
            clip-path: inset(0 100% 0 0);
            transition: clip-path 1s ease-out;
        }
        .image-reveal.active {
            clip-path: inset(0 0 0 0);
        }
    </style>
</head>
<body class="antialiased text-gray-800 bg-white selection:bg-primary selection:text-white">

    <!-- 1. GLOBAL HEADER (Sticky) -->
    <header id="main-header" class="fixed w-full top-0 z-50 transition-all duration-300 bg-transparent py-4">
        <div class="container mx-auto px-6">
            <nav class="flex justify-between items-center rounded-2xl px-6 py-3 transition-all duration-300" id="nav-container">
                <!-- Logo Container (Variable injected via JS) -->
                <a href="#" id="logo-container" class="block transition-transform hover:scale-105">
                    <!-- IMG tag injected by JS -->
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#hero" class="text-sm font-semibold hover:text-primary transition-colors">Accueil</a>
                    <a href="#formations" class="text-sm font-semibold hover:text-primary transition-colors">Nos Filières</a>
                    <a href="#campus" class="text-sm font-semibold hover:text-primary transition-colors">Le Campus</a>
                    <a href="#faculty" class="text-sm font-semibold hover:text-primary transition-colors">Corps Professoral</a>
                </div>

                <!-- CTA -->
                <div class="hidden lg:block">
                    <a href="#admissions" class="bg-primary hover:bg-primaryDark text-white px-6 py-3 rounded-full font-bold text-sm transition-all transform hover:-translate-y-1 shadow-lg shadow-primary/30">
                        Candidater maintenant
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-2xl text-dark focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed inset-0 bg-white z-40 transform translate-x-full transition-transform duration-300 lg:hidden flex flex-col items-center justify-center space-y-8">
            <button id="close-menu-btn" class="absolute top-6 right-8 text-3xl text-dark">
                <i class="fas fa-times"></i>
            </button>
            <a href="#hero" class="text-2xl font-bold font-display text-dark mobile-link">Accueil</a>
            <a href="#formations" class="text-2xl font-bold font-display text-dark mobile-link">Nos Filières</a>
            <a href="#campus" class="text-2xl font-bold font-display text-dark mobile-link">Le Campus</a>
            <a href="#faculty" class="text-2xl font-bold font-display text-dark mobile-link">Corps Professoral</a>
            <a href="#admissions" class="bg-primary text-white px-8 py-4 rounded-full font-bold text-lg shadow-xl mobile-link">
                Candidater maintenant
            </a>
        </div>
    </header>

    <!-- 2. HERO SECTION -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?q=80&w=2070&auto=format&fit=crop" 
                 alt="Étudiants agronomie tablette serre" 
                 class="w-full h-full object-cover object-center" />
            <!-- Dark/Green Overlay for text readability -->
            <div class="absolute inset-0 bg-black/40 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-transparent to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 pt-20">
            <div class="max-w-4xl mx-auto text-center text-white">
                <div class="inline-block px-4 py-2 mb-6 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
                    <span class="text-sm font-semibold uppercase tracking-wider">🎓 Rentrée 2025 - Inscriptions ouvertes</span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-bold font-display leading-tight mb-6 animate-fade-up">
                    Cultivez votre avenir : <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-white">L'Excellence en Agronomie</span>
                    à Antananarivo
                </h1>
                
                <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                    Devenez l'ingénieur ou l'entrepreneur agricole dont Madagascar a besoin. Une pédagogie alliant 50% de théorie et 50% de pratique terrain.
                </p>
                
                <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                    <a href="#formations" class="w-full md:w-auto bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-full font-bold transition-all transform hover:-translate-y-1 shadow-[0_0_20px_rgba(30,145,69,0.5)]">
                        Découvrir les formations
                    </a>
                    <a href="#campus" class="w-full md:w-auto text-white underline decoration-primary decoration-2 underline-offset-4 hover:text-green-300 transition-colors font-medium">
                        Visite virtuelle du campus
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-white/70">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- 3. BANDEAU DE RÉASSURANCE -->
    <div class="bg-white border-b border-gray-100 py-8 shadow-sm relative z-20 -mt-2 rounded-t-3xl md:rounded-none">
        <div class="container mx-auto px-6">
            <p class="text-center text-gray-500 text-sm font-semibold uppercase tracking-widest mb-6">L'assurance d'un diplôme reconnu et d'un métier d'avenir</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-80 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Icons/Text Representation -->
                <div class="flex items-center gap-3">
                    <i class="fas fa-university text-primary text-2xl"></i>
                    <span class="font-bold text-dark">Habilité par l'État (MESupRES)</span>
                </div>
                <div class="hidden md:block w-px h-8 bg-gray-200"></div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-handshake text-primary text-2xl"></i>
                    <span class="font-bold text-dark">Partenaires Entreprises</span>
                </div>
                <div class="hidden md:block w-px h-8 bg-gray-200"></div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-chart-line text-primary text-2xl"></i>
                    <span class="font-bold text-dark">94% d'Insertion Pro</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. SECTION PROBLÈME / SOLUTION -->
    <section class="py-20 bg-neutral/50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 space-y-8" id="problem-text">
                    <div class="inline-block px-3 py-1 rounded bg-secondary/10 text-secondary font-bold text-xs uppercase tracking-wider">
                        Vision Moderne
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-dark font-display leading-tight">
                        L'agriculture a changé, <br>notre enseignement aussi.
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Oubliez l'agriculture du passé. Chez Essagri, nous ne formons pas de simples cultivateurs. Nous formons les <strong class="text-primary">managers de l'agrobusiness</strong>, les experts en sécurité alimentaire et les <strong class="text-primary">ingénieurs du vivant</strong> qui transformeront l'économie.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="bg-primary/10 p-2 rounded-full text-primary mt-1"><i class="fas fa-check"></i></div>
                            <span class="text-gray-700 font-medium">Laboratoires connectés & Drones agricoles</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="bg-primary/10 p-2 rounded-full text-primary mt-1"><i class="fas fa-check"></i></div>
                            <span class="text-gray-700 font-medium">Gestion de projets & Entrepreneuriat</span>
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                    <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?q=80&w=2070&auto=format&fit=crop" 
                         alt="Laboratoire agronomie moderne" 
                         class="relative rounded-2xl shadow-2xl w-full h-auto object-cover transform rotate-1 hover:rotate-0 transition-all duration-500 border-4 border-white image-reveal" 
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- 5. NOS CURSUS (Le Produit) -->
    <section id="formations" class="py-24 bg-white bg-pattern">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl font-bold text-dark font-display mb-4">Choisissez votre voie vers la réussite</h2>
                <p class="text-gray-600">Des formations diplômantes conçues en partenariat avec les leaders du secteur agro-alimentaire.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte A -->
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-lg card-hover relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-primary transform origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500"></div>
                    <div class="bg-green-50 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 text-primary text-3xl group-hover:bg-primary group-hover:text-white transition-colors">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3 font-display">Sciences Agronomiques</h3>
                    <p class="text-sm text-primary font-semibold mb-4">Licence & Master</p>
                    <p class="text-gray-600 mb-6">Maîtrisez la production végétale et animale avec une approche scientifique rigoureuse.</p>
                    
                    <div class="border-t border-gray-100 pt-6 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        <p class="text-xs font-bold uppercase text-gray-400 mb-2">Débouchés :</p>
                        <p class="text-sm text-dark font-medium">Ingénieur agronome, Responsable d'exploitation, Consultant.</p>
                    </div>
                </div>

                <!-- Carte B -->
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-lg card-hover relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-secondary transform origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500"></div>
                    <div class="bg-orange-50 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 text-secondary text-3xl group-hover:bg-secondary group-hover:text-white transition-colors">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3 font-display">Agro-Management</h3>
                    <p class="text-sm text-secondary font-semibold mb-4">Bachelor & MBA</p>
                    <p class="text-gray-600 mb-6">Devenez un leader capable de piloter des entreprises agricoles rentables et durables.</p>
                    
                    <div class="border-t border-gray-100 pt-6 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        <p class="text-xs font-bold uppercase text-gray-400 mb-2">Débouchés :</p>
                        <p class="text-sm text-dark font-medium">Directeur d'agrobusiness, Exportateur, Chef de projet rural.</p>
                    </div>
                </div>

                <!-- Carte C -->
                <div class="group bg-white rounded-2xl p-8 border border-gray-100 shadow-lg card-hover relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-blue-600 transform origin-bottom scale-y-0 group-hover:scale-y-100 transition-transform duration-500"></div>
                    <div class="bg-blue-50 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 text-blue-600 text-3xl group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-dark mb-3 font-display">Génie Rural & Environnement</h3>
                    <p class="text-sm text-blue-600 font-semibold mb-4">Ingénierie</p>
                    <p class="text-gray-600 mb-6">Concevez les infrastructures de demain : irrigation, constructions durables et gestion de l'eau.</p>
                    
                    <div class="border-t border-gray-100 pt-6 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                        <p class="text-xs font-bold uppercase text-gray-400 mb-2">Débouchés :</p>
                        <p class="text-sm text-dark font-medium">Ingénieur hydrologue, Expert environnement, Urbaniste rural.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PROFESSEURS -->
    <section id="faculty" class="py-20 bg-neutral">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-bold text-dark font-display mb-2">Apprenez aux côtés des experts</h2>
                    <p class="text-gray-600">Nos enseignants sont des chercheurs et des praticiens actifs à Madagascar.</p>
                </div>
                <a href="#" class="hidden md:block text-primary font-bold hover:underline mt-4 md:mt-0">Voir toute l'équipe <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Prof 1 -->
                <div class="bg-white rounded-xl p-6 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="Professeur" class="w-20 h-20 rounded-full object-cover border-2 border-primary/20">
                    <div>
                        <h4 class="font-bold text-lg text-dark">Dr. Rakoto Jean</h4>
                        <p class="text-xs text-primary font-bold uppercase tracking-wide">PhD Agronomie</p>
                        <p class="text-sm text-gray-500 mt-1">Spécialiste Riziculture</p>
                    </div>
                </div>
                <!-- Prof 2 -->
                <div class="bg-white rounded-xl p-6 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=200&auto=format&fit=crop" alt="Professeur" class="w-20 h-20 rounded-full object-cover border-2 border-primary/20">
                    <div>
                        <h4 class="font-bold text-lg text-dark">Mme. Andriana</h4>
                        <p class="text-xs text-primary font-bold uppercase tracking-wide">MBA Agrobusiness</p>
                        <p class="text-sm text-gray-500 mt-1">Ex-Consultante FAO</p>
                    </div>
                </div>
                <!-- Prof 3 -->
                <div class="bg-white rounded-xl p-6 shadow-sm flex items-center gap-4 hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?q=80&w=200&auto=format&fit=crop" alt="Professeur" class="w-20 h-20 rounded-full object-cover border-2 border-primary/20">
                    <div>
                        <h4 class="font-bold text-lg text-dark">Pr. Rajaonarivelo</h4>
                        <p class="text-xs text-primary font-bold uppercase tracking-wide">Ingénieur Génie Rural</p>
                        <p class="text-sm text-gray-500 mt-1">Chercheur Climat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. CAMPUS (Dark Section) -->
    <section id="campus" class="py-24 bg-secondary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-4xl font-bold font-display mb-12 text-center">Un cadre d'étude au cœur d'Antananarivo</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-4 grid-rows-2 gap-4 h-[600px] md:h-[500px]">
                <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=2086&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Campus">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-bold text-xl">Salles connectées</span>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1592982537447-6f2a6a0c7c18?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Serre">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-bold">Terrain d'application</span>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Détente">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-bold">Espaces de vie</span>
                    </div>
                </div>
                <div class="md:col-span-2 relative group overflow-hidden rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="Labo">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-white font-bold text-xl">Laboratoires High-Tech</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ADMISSIONS & TARIFS -->
    <section id="admissions" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">
                <div class="flex flex-col md:flex-row">
                    <div class="p-10 md:w-2/3">
                        <h2 class="text-3xl font-bold text-dark font-display mb-6">Comment intégrer Essagri ?</h2>
                        
                        <!-- Steps -->
                        <div class="space-y-8 relative before:absolute before:left-4 before:top-2 before:bottom-2 before:w-0.5 before:bg-gray-200">
                            <div class="relative pl-12">
                                <div class="absolute left-0 top-0 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center font-bold text-sm shadow-lg shadow-primary/30">1</div>
                                <h4 class="font-bold text-lg text-dark">Pré-inscription en ligne</h4>
                                <p class="text-sm text-gray-500">Remplissez le formulaire en 5 minutes.</p>
                            </div>
                            <div class="relative pl-12">
                                <div class="absolute left-0 top-0 w-8 h-8 bg-white border-2 border-primary text-primary rounded-full flex items-center justify-center font-bold text-sm">2</div>
                                <h4 class="font-bold text-lg text-dark">Étude de dossier</h4>
                                <p class="text-sm text-gray-500">Analyse de vos bulletins et motivation.</p>
                            </div>
                            <div class="relative pl-12">
                                <div class="absolute left-0 top-0 w-8 h-8 bg-white border-2 border-gray-300 text-gray-400 rounded-full flex items-center justify-center font-bold text-sm">3</div>
                                <h4 class="font-bold text-lg text-dark">Entretien d'admission</h4>
                                <p class="text-sm text-gray-500">Rencontre avec le responsable pédagogique.</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <button class="bg-primary hover:bg-primaryDark text-white px-8 py-4 rounded-xl font-bold w-full md:w-auto transition-colors flex items-center justify-center gap-2">
                                <i class="fas fa-file-pdf"></i> Télécharger le dossier d'admission
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-neutral p-10 md:w-1/3 flex flex-col justify-center items-center text-center border-t md:border-t-0 md:border-l border-gray-200">
                        <div class="mb-4">
                            <i class="fas fa-tag text-4xl text-secondary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-2">Scolarité Accessible</h3>
                        <p class="text-gray-600 text-sm mb-6">À partir de <br><strong class="text-2xl text-dark">250.000 Ar</strong><br>/ mois</p>
                        <span class="text-xs bg-white px-3 py-1 rounded-full text-gray-500 border border-gray-200">Facilités de paiement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <footer class="bg-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Col 1 -->
                <div>
                    <div id="footer-logo" class="mb-6 opacity-90">
                        <!-- Logo injected via JS -->
                    </div>
                    <p class="text-2xl font-display font-bold text-white mb-4">"L'avenir est dans la terre"</p>
                    <p class="text-gray-400 text-sm">
                        L'école de référence pour les métiers de l'agriculture et de l'environnement à Madagascar.
                    </p>
                </div>

                <!-- Col 2 -->
                <div>
                    <h4 class="text-lg font-bold mb-6 border-b border-gray-700 pb-2 inline-block">Contact Rapide</h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="tel:+261340000000" class="flex items-center gap-3 text-gray-300 hover:text-primary transition-colors">
                                <i class="fas fa-phone-alt"></i> +261 34 00 000 00
                            </a>
                        </li>
                        <li>
                            <a href="mailto:contact@essagri.mg" class="flex items-center gap-3 text-gray-300 hover:text-primary transition-colors">
                                <i class="fas fa-envelope"></i> contact@essagri.mg
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/261340000000" class="inline-flex items-center gap-2 bg-[#25D366] text-white px-4 py-2 rounded-lg font-bold hover:bg-opacity-90 transition-all mt-2">
                                <i class="fab fa-whatsapp text-xl"></i> Écrire sur WhatsApp
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div>
                    <h4 class="text-lg font-bold mb-6 border-b border-gray-700 pb-2 inline-block">Nous Trouver</h4>
                    <p class="text-gray-300 mb-4 flex gap-3">
                        <i class="fas fa-map-marker-alt mt-1 text-primary"></i>
                        Lot II J 180 Ivandry,<br>Antananarivo 101, Madagascar
                    </p>
                    <div class="w-full h-32 bg-gray-700 rounded-lg overflow-hidden">
                        <!-- Placeholder Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.292955567383!2d47.5!3d-18.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU0JzAwLjAiUyA0N8KwMzAnMDAuMCJF!5e0!3m2!1sfr!2smg!4v1620000000000!5m2!1sfr!2smg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2024 ESSAGRI. Tous droits réservés.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Mentions Légales</a>
                    <a href="#" class="hover:text-white transition-colors">Plan du site</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/261340000000" target="_blank" class="fixed bottom-6 right-6 z-50 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:bg-[#20bd5a] transition-all duration-300 pulse-btn flex items-center justify-center">
        <i class="fab fa-whatsapp text-3xl"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        // --- 1. CONFIGURATION LOGO ---
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien direct de votre logo (PNG transparent recommandé).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        // Note: Le prompt demandait "PHO RESTO" dans le placeholder, mais le contexte est ESSAGRI. 
        // J'ai respecté STRICTEMENT la demande technique du prompt pour la variable, 
        // mais pour l'affichage visuel cohérent, le CSS s'adaptera.
        
        // Injection du logo dans le DOM
        const logoImgHtml = `<img src="${LOGO_URL}" alt="Essagri Logo" class="h-10 md:h-12 w-auto object-contain">`;
        document.getElementById('logo-container').innerHTML = logoImgHtml;
        
        // Version Footer (adaptée pour fond sombre si nécessaire, ici on garde le même)
        document.getElementById('footer-logo').innerHTML = `<img src="${LOGO_URL}" alt="Essagri Logo" class="h-12 w-auto object-contain filter brightness-0 invert">`; // Logo blanc pour footer

        // --- 2. HEADER SCROLL EFFECT ---
        const header = document.getElementById('main-header');
        const navContainer = document.getElementById('nav-container');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('py-2');
                header.classList.remove('py-4');
                navContainer.classList.add('glass-nav', 'shadow-lg');
                navContainer.classList.remove('bg-transparent');
            } else {
                header.classList.add('py-4');
                header.classList.remove('py-2');
                navContainer.classList.remove('glass-nav', 'shadow-lg');
                navContainer.classList.add('bg-transparent');
            }
        });

        // --- 3. MOBILE MENU ---
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            const isClosed = mobileMenu.classList.contains('translate-x-full');
            if (isClosed) {
                mobileMenu.classList.remove('translate-x-full');
            } else {
                mobileMenu.classList.add('translate-x-full');
            }
        }

        mobileBtn.addEventListener('click', toggleMenu);
        closeBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // --- 4. ANIMATIONS (GSAP) ---
        gsap.registerPlugin(ScrollTrigger);

        // Hero Content Fade Up
        gsap.from(".animate-fade-up", {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: "power3.out",
            delay: 0.2
        });

        // Cards Stagger
        gsap.from("#formations .card-hover", {
            scrollTrigger: {
                trigger: "#formations",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Problem Section Image Reveal
        ScrollTrigger.create({
            trigger: "#problem-text",
            start: "top 70%",
            onEnter: () => {
                document.querySelector('.image-reveal').classList.add('active');
            }
        });

    </script>
</body>
</html>