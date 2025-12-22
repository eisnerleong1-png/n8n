<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civis Mundi Academy | Excellence & Intégrité à Antananarivo</title>
    <meta name="description" content="Formation citoyenne et académique à Antananarivo. Civis Mundi Academy forme les leaders intègres de demain.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS (via CDN for single file portability) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Configuration for Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            orange: '#F28025',
                            blue: '#2DACE2',
                            violet: '#983F97',
                            dark: '#1A1A1A',
                            light: '#F9F9F9'
                        }
                    },
                    fontFamily: {
                        sans: ['Open Sans', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -15px rgba(0, 0, 0, 0.1)',
                        'glow': '0 0 20px rgba(45, 172, 226, 0.3)'
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Premium Styles & Reset */
        :root {
            --orange: #F28025;
            --blue: #2DACE2;
            --violet: #983F97;
        }
        
        html {
            scroll-behavior: smooth;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Hero Overlay Gradient */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.9) 0%, rgba(45, 172, 226, 0.6) 100%);
        }

        /* Glassmorphism Header */
        .glass-nav {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        .glass-nav.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .glass-nav.scrolled .nav-link {
            color: #1A1A1A;
        }
        
        .glass-nav.scrolled .logo-text {
            color: #1A1A1A;
        }

        /* Button Animations */
        .btn-premium {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .btn-premium::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            opacity: 0.2;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .btn-premium:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(242, 128, 37, 0.3);
        }

        /* Card Hover Effects */
        .program-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.15);
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Accordion Transition */
        .accordion-content {
            transition: max-height 0.3s ease-out, opacity 0.3s ease;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
        }
        
        .accordion-content.open {
            opacity: 1;
        }

        /* Mobile Sticky CTA */
        .mobile-sticky-cta {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(5px);
            border-top: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 -5px 15px rgba(0,0,0,0.05);
        }

        /* Specific logo sizing */
        #brand-logo {
            height: 50px;
            width: auto;
            object-fit: contain;
        }
    </style>
</head>
<body class="bg-brand-light text-gray-700 overflow-x-hidden font-sans">

    <!-- NAVIGATION -->
    <nav id="navbar" class="glass-nav fixed w-full top-0 z-50 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <!-- Logo Container -->
            <a href="#" class="flex items-center gap-3 group">
                <img id="brand-logo" alt="Civis Mundi Academy Logo">
                <span class="logo-text font-heading font-bold text-xl text-white tracking-wide group-hover:text-brand-orange transition-colors duration-300 hidden md:block">
                    CIVIS MUNDI
                </span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#about" class="nav-link text-white font-medium hover:text-brand-orange transition-colors">À propos</a>
                <a href="#programs" class="nav-link text-white font-medium hover:text-brand-orange transition-colors">Programmes</a>
                <a href="#faq" class="nav-link text-white font-medium hover:text-brand-orange transition-colors">FAQ</a>
                <a href="#contact" class="btn-premium bg-brand-orange text-white px-6 py-2.5 rounded-full font-bold shadow-lg">
                    Rejoindre l'Academy
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-brand-orange text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="fixed inset-0 bg-white transform translate-x-full transition-transform duration-300 md:hidden z-40 flex flex-col items-center justify-center gap-8">
            <button id="close-menu-btn" class="absolute top-6 right-6 text-gray-500 text-3xl">
                <i class="fas fa-times"></i>
            </button>
            <a href="#about" class="text-2xl font-heading font-bold text-gray-800" onclick="closeMenu()">À propos</a>
            <a href="#programs" class="text-2xl font-heading font-bold text-gray-800" onclick="closeMenu()">Programmes</a>
            <a href="#faq" class="text-2xl font-heading font-bold text-gray-800" onclick="closeMenu()">FAQ</a>
            <a href="#contact" class="text-2xl font-heading font-bold text-brand-orange" onclick="closeMenu()">Contact</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <header id="home" class="relative h-screen min-h-[700px] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <!-- Unsplash ID: Group of diverse African students/people discussing, high quality -->
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 class="w-full h-full object-cover object-center" 
                 alt="Étudiants malgaches leaders">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-6 text-center mt-16 md:mt-0">
            <div class="inline-block bg-brand-blue/20 backdrop-blur-md border border-brand-blue/30 rounded-full px-4 py-1 mb-6 reveal">
                <span class="text-brand-blue font-bold text-sm uppercase tracking-wider">📍 Antananarivo, Madagascar</span>
            </div>
            
            <h1 class="font-heading font-extrabold text-4xl md:text-6xl lg:text-7xl text-white mb-6 leading-tight reveal" style="transition-delay: 100ms;">
                Formons les Citoyens <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-orange to-yellow-400">Intègres & Leaders</span> <br>
                de Demain.
            </h1>
            
            <p class="font-sans text-lg md:text-xl text-gray-200 mb-10 max-w-2xl mx-auto reveal" style="transition-delay: 200ms;">
                Civis Mundi Academy allie excellence académique et éducation aux valeurs pour bâtir une société solidaire et performante.
            </p>
            
            <div class="flex flex-col md:flex-row gap-4 justify-center reveal" style="transition-delay: 300ms;">
                <a href="#programs" class="btn-premium bg-brand-orange text-white px-8 py-4 rounded-full font-bold text-lg shadow-xl hover:shadow-2xl flex items-center justify-center gap-2">
                    Découvrir nos Programmes <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#about" class="px-8 py-4 rounded-full font-bold text-white border-2 border-white/30 hover:bg-white/10 transition-colors backdrop-blur-sm">
                    Qui sommes-nous ?
                </a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce hidden md:block text-white opacity-70">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </header>

    <!-- TRUST BAR -->
    <section class="py-12 bg-white relative z-20 -mt-8 rounded-t-3xl shadow-lg mx-2 md:mx-8">
        <div class="container mx-auto px-6">
            <p class="text-center text-gray-400 text-sm font-bold uppercase tracking-widest mb-8">Ils soutiennent notre mission</p>
            
            <!-- Partners Logos (Placeholders for Demo) -->
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all duration-500 mb-12">
                <div class="text-2xl font-bold text-gray-600 flex items-center gap-2"><i class="fas fa-university"></i> Ministère Éduc.</div>
                <div class="text-2xl font-bold text-gray-600 flex items-center gap-2"><i class="fas fa-hand-holding-heart"></i> ONG Aina</div>
                <div class="text-2xl font-bold text-gray-600 flex items-center gap-2"><i class="fas fa-globe-africa"></i> Future Leaders</div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-gray-100 pt-8">
                <div class="text-center">
                    <div class="text-brand-blue text-4xl font-bold mb-2">500+</div>
                    <p class="text-gray-600 font-medium">Étudiants formés</p>
                </div>
                <div class="text-center">
                    <div class="text-brand-violet text-4xl font-bold mb-2">3</div>
                    <p class="text-gray-600 font-medium">Programmes d'Excellence</p>
                </div>
                <div class="text-center">
                    <div class="text-brand-orange text-4xl font-bold mb-2">100%</div>
                    <p class="text-gray-600 font-medium">Engagé pour la Cité</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEM & SOLUTION -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Visual -->
                <div class="w-full lg:w-1/2 relative reveal">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-orange/20 rounded-full blur-xl"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-brand-blue/20 rounded-full blur-xl"></div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                         alt="Collaboration étudiante" 
                         class="rounded-2xl shadow-premium relative z-10 w-full object-cover h-[400px]">
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-lg z-20 hidden md:block max-w-xs">
                        <div class="flex items-center gap-4">
                            <div class="bg-brand-violet/10 p-3 rounded-full text-brand-violet">
                                <i class="fas fa-balance-scale text-2xl"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800">Équilibre Parfait</p>
                                <p class="text-xs text-gray-500">Savoir Académique + Savoir-être</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2 reveal">
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark mb-6">
                        Le diplôme ne suffit plus.<br>
                        <span class="text-brand-blue">Le caractère fait la différence.</span>
                    </h2>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Dans un monde en mutation rapide, la compétence technique sans éthique est fragile. À Madagascar, trop de jeunes talents échouent faute de soft-skills et de repères moraux solides.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Chez <strong>Civis Mundi Academy</strong>, nous comblons le fossé entre le savoir scolaire et le savoir-être citoyen. Nous forgeons des personnalités capables d'inspirer confiance et de diriger avec intégrité.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-brand-orange"></i>
                            <span class="font-medium text-gray-700">Pédagogie active et participative</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-brand-orange"></i>
                            <span class="font-medium text-gray-700">Mentorat par des professionnels reconnus</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAMS -->
    <section id="programs" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark mb-4">Nos Programmes de Formation</h2>
                <p class="text-gray-600 text-lg">Des cursus adaptés pour chaque étape de la vie, conçus pour maximiser votre impact.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Citoyenneté -->
                <div class="program-card bg-white rounded-2xl p-8 border border-gray-100 relative overflow-hidden group reveal">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-violet"></div>
                    <div class="w-14 h-14 rounded-xl bg-brand-violet/10 text-brand-violet flex items-center justify-center text-2xl mb-6 group-hover:bg-brand-violet group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-gray-800 mb-3">Citoyenneté & Valeurs</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3">
                        Un module essentiel pour comprendre l'intégrité, la solidarité et l'engagement civique. Devenez un pilier de votre communauté.
                    </p>
                    <div class="flex items-end justify-between mt-auto">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-bold">À partir de</p>
                            <p class="text-brand-violet font-bold text-lg">50 000 Ar <span class="text-sm text-gray-400 font-normal">/module</span></p>
                        </div>
                        <a href="#contact" class="text-brand-violet font-bold hover:underline">Voir le détail</a>
                    </div>
                </div>

                <!-- Card 2: Académique -->
                <div class="program-card bg-white rounded-2xl p-8 border border-gray-100 relative overflow-hidden group reveal" style="transition-delay: 100ms;">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-blue"></div>
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center text-2xl mb-6 group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-gray-800 mb-3">Soutien Académique</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3">
                        Renforcement scolaire d'excellence avec une pédagogie active. Nous apprenons à apprendre pour des résultats durables.
                    </p>
                    <div class="flex items-end justify-between mt-auto">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-bold">Forfaits dès</p>
                            <p class="text-brand-blue font-bold text-lg">100 000 Ar <span class="text-sm text-gray-400 font-normal">/mois</span></p>
                        </div>
                        <a href="#contact" class="text-brand-blue font-bold hover:underline">Voir les matières</a>
                    </div>
                </div>

                <!-- Card 3: Leadership -->
                <div class="program-card bg-white rounded-2xl p-8 border border-gray-100 relative overflow-hidden group reveal" style="transition-delay: 200ms;">
                    <div class="absolute top-0 left-0 w-full h-1 bg-brand-orange"></div>
                    <div class="w-14 h-14 rounded-xl bg-brand-orange/10 text-brand-orange flex items-center justify-center text-2xl mb-6 group-hover:bg-brand-orange group-hover:text-white transition-colors duration-300">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="font-heading text-2xl font-bold text-gray-800 mb-3">Leadership Pro</h3>
                    <p class="text-gray-600 mb-6 line-clamp-3">
                        Pour les jeunes actifs et étudiants ambitieux. Développez votre influence, votre prise de parole et votre gestion d'équipe.
                    </p>
                    <div class="flex items-end justify-between mt-auto">
                        <div>
                            <p class="text-xs text-gray-400 uppercase font-bold">Formation continue</p>
                            <p class="text-brand-orange font-bold text-lg">Sur Devis</p>
                        </div>
                        <a href="#contact" class="text-brand-orange font-bold hover:underline">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT & TEAM -->
    <section id="about" class="py-20 bg-brand-light relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between mb-16">
                <div class="md:w-1/2 reveal">
                    <h2 class="font-heading text-3xl md:text-4xl font-bold text-brand-dark mb-4">Une équipe dévouée à l'excellence éthique</h2>
                    <p class="text-gray-600 text-lg">Nos formateurs ne sont pas seulement des enseignants, ce sont des mentors passionnés par le développement humain à Madagascar.</p>
                </div>
                <div class="md:w-1/3 mt-8 md:mt-0 reveal">
                   <a href="#contact" class="inline-flex items-center gap-2 text-brand-blue font-bold text-lg hover:underline">Rejoindre l'équipe <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- Team Member 1 -->
                <div class="text-center group reveal">
                    <div class="relative w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Formatrice" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h4 class="font-heading font-bold text-xl text-brand-dark">Sarah R.</h4>
                    <p class="text-brand-violet font-medium text-sm mb-2">Directrice Pédagogique</p>
                    <p class="text-gray-500 text-sm px-4">Expertise en éducation positive et gestion de projets sociaux.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center group reveal" style="transition-delay: 100ms;">
                    <div class="relative w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1506277886164-e25aa3f4ef7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Formateur" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h4 class="font-heading font-bold text-xl text-brand-dark">Hery A.</h4>
                    <p class="text-brand-blue font-medium text-sm mb-2">Responsable Académique</p>
                    <p class="text-gray-500 text-sm px-4">Professeur agrégé avec 15 ans d'expérience en lycée d'élite.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center group reveal" style="transition-delay: 200ms;">
                    <div class="relative w-40 h-40 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Coach" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <h4 class="font-heading font-bold text-xl text-brand-dark">Malala T.</h4>
                    <p class="text-brand-orange font-medium text-sm mb-2">Coach Leadership</p>
                    <p class="text-gray-500 text-sm px-4">Entrepreneure et conférencière motivante pour la jeunesse.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-4xl">
            <h2 class="font-heading text-3xl font-bold text-center text-brand-dark mb-12 reveal">Questions Fréquentes</h2>
            
            <div class="space-y-4 reveal">
                <!-- Item 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="toggleAccordion(1)">
                        <span class="font-bold text-gray-700">Les certificats sont-ils reconnus ?</span>
                        <i id="icon-1" class="fas fa-plus text-brand-orange transition-transform duration-300"></i>
                    </button>
                    <div id="content-1" class="accordion-content bg-white px-6">
                        <div class="py-4 text-gray-600">
                            Oui, nous délivrons une attestation de compétence signée par l'Academy et nos partenaires, valorisable sur votre CV pour démontrer vos soft-skills et votre engagement.
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="toggleAccordion(2)">
                        <span class="font-bold text-gray-700">Où se déroulent les formations ?</span>
                        <i id="icon-2" class="fas fa-plus text-brand-orange transition-transform duration-300"></i>
                    </button>
                    <div id="content-2" class="accordion-content bg-white px-6">
                        <div class="py-4 text-gray-600">
                            Nos sessions principales ont lieu dans nos locaux au centre d'Antananarivo (zone sécurisée). Certains modules théoriques sont accessibles en ligne.
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="w-full px-6 py-4 text-left bg-gray-50 hover:bg-gray-100 flex justify-between items-center focus:outline-none" onclick="toggleAccordion(3)">
                        <span class="font-bold text-gray-700">À quel âge s'adressent les programmes ?</span>
                        <i id="icon-3" class="fas fa-plus text-brand-orange transition-transform duration-300"></i>
                    </button>
                    <div id="content-3" class="accordion-content bg-white px-6">
                        <div class="py-4 text-gray-600">
                            Nous avons des groupes adaptés : Juniors (10-14 ans), Lycéens (15-18 ans), et Jeunes Adultes/Professionnels (18 ans et +).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER & CONTACT -->
    <footer id="contact" class="bg-brand-dark text-white pt-20 pb-24 md:pb-10 relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Contact Form -->
                <div class="lg:w-1/2 bg-white rounded-2xl p-8 text-gray-800 shadow-2xl reveal">
                    <h3 class="font-heading text-2xl font-bold mb-2">Prêt à faire la différence ?</h3>
                    <p class="text-gray-500 mb-6">Remplissez ce formulaire pour une inscription ou plus d'infos.</p>
                    
                    <form onsubmit="event.preventDefault(); alert('Merci ! Votre message a bien été envoyé à l\'équipe Civis Mundi.');">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <input type="text" placeholder="Votre Nom" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-brand-orange transition-colors" required>
                            <input type="tel" placeholder="Téléphone (+261...)" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 focus:outline-none focus:border-brand-orange transition-colors" required>
                        </div>
                        <input type="email" placeholder="Votre Email" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 mb-4 focus:outline-none focus:border-brand-orange transition-colors" required>
                        <select class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 mb-4 focus:outline-none focus:border-brand-orange text-gray-600">
                            <option>Choisir un programme...</option>
                            <option>Citoyenneté & Valeurs</option>
                            <option>Soutien Académique</option>
                            <option>Leadership Pro</option>
                            <option>Autre demande</option>
                        </select>
                        <textarea placeholder="Votre message..." rows="3" class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 mb-6 focus:outline-none focus:border-brand-orange transition-colors"></textarea>
                        
                        <button type="submit" class="w-full btn-premium bg-brand-orange text-white font-bold py-3 rounded-lg shadow-lg">Envoyer ma demande</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="lg:w-1/2 flex flex-col justify-center reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <!-- Footer Logo Placeholder -->
                         <div class="font-heading font-bold text-2xl tracking-wide">CIVIS MUNDI</div>
                    </div>
                    <p class="text-gray-400 mb-8 max-w-md">
                        Façonner l'avenir de Madagascar en éduquant le cœur et l'esprit. Rejoignez une communauté d'élite morale et intellectuelle.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-brand-blue flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5 class="font-bold">Adresse</h5>
                                <p class="text-gray-400 text-sm">Lot IVX, Antanimena,<br>Antananarivo 101, Madagascar</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-brand-orange flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h5 class="font-bold">Téléphone</h5>
                                <p class="text-gray-400 text-sm">+261 34 XX XXX XX</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-brand-violet flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5 class="font-bold">Email</h5>
                                <p class="text-gray-400 text-sm">contact@civismundi.mg</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-10">
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white hover:bg-blue-700 transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-800 flex items-center justify-center text-white hover:bg-blue-900 transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-white/10 mt-16 pt-8 text-center text-sm text-gray-500">
                &copy; 2024 Civis Mundi Academy. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA Bar -->
    <div class="md:hidden fixed bottom-0 left-0 w-full mobile-sticky-cta p-4 z-40 flex gap-3">
        <a href="tel:+261340000000" class="flex-1 bg-white border border-brand-orange text-brand-orange font-bold py-3 rounded-lg text-center shadow-sm">
            <i class="fas fa-phone mr-2"></i> Appel
        </a>
        <a href="#contact" class="flex-1 bg-brand-orange text-white font-bold py-3 rounded-lg text-center shadow-lg">
            S'inscrire
        </a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. LOGO CONFIGURATION (MANDATORY) ---
        const LOGO_URL = "logo.jpg";
        
        // Apply Logo
        document.addEventListener('DOMContentLoaded', () => {
            const logoImg = document.getElementById('brand-logo');
            if(logoImg) logoImg.src = LOGO_URL;
        });

        // --- 2. Sticky Navigation Logic ---
        const navbar = document.getElementById('navbar');
        const logoText = document.querySelector('.logo-text');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
                navbar.classList.remove('py-4');
                logoText.classList.remove('text-white');
                logoText.classList.add('text-brand-dark');
            } else {
                navbar.classList.remove('scrolled');
                navbar.classList.add('py-4');
                logoText.classList.add('text-white');
                logoText.classList.remove('text-brand-dark');
            }
        });

        // --- 3. Mobile Menu Toggle ---
        const menuBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        function openMenu() {
            mobileMenu.classList.remove('translate-x-full');
        }

        function closeMenu() {
            mobileMenu.classList.add('translate-x-full');
        }

        menuBtn.addEventListener('click', openMenu);
        closeBtn.addEventListener('click', closeMenu);

        // --- 4. Scroll Reveal Animation ---
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

        // --- 5. Accordion Logic ---
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);
            
            // Close others (optional, for accordion effect)
            // document.querySelectorAll('.accordion-content').forEach(c => {
            //     if (c !== content) {
            //         c.style.maxHeight = null;
            //         c.classList.remove('open');
            //     }
            // });

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                content.classList.remove('open');
                icon.style.transform = "rotate(0deg)";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.classList.add('open');
                icon.style.transform = "rotate(45deg)";
            }
        }
    </script>
</body>
</html>