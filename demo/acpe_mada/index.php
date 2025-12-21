<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACPE Mada | Excellence Opérationnelle & Lean Management</title>
    <meta name="description" content="Transformez vos processus en levier de rentabilité à Madagascar. Formation Lean Management et Coaching d'entreprise.">
    
    <!-- Google Fonts: Outfit (Titres) & Inter (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS (via CDN for single file requirement) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0e2a47', // Bleu Foncé (Autorité)
                        accent: '#fdb92e', // Jaune (Action)
                        secondary: '#2a8fcd', // Bleu Clair (Graphique)
                        offwhite: '#f8fafc',
                        greytext: '#475569'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -15px rgba(14, 42, 71, 0.15)',
                        'hover': '0 25px 50px -12px rgba(14, 42, 71, 0.25)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styles for Premium Feel */
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
        
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Gradient Overlay for Hero */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(14, 42, 71, 0.95) 0%, rgba(14, 42, 71, 0.7) 100%);
        }

        /* Button Hover Effects */
        .btn-primary {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(253, 185, 46, 0.3);
        }

        .btn-secondary {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .btn-secondary:hover {
            background-color: rgba(42, 143, 205, 0.1);
            transform: translateY(-2px);
        }

        /* Card Hover Effects */
        .service-card {
            transition: all 0.4s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            border-bottom: 4px solid #fdb92e;
        }

        /* Trust Bar Greyscale to Color */
        .partner-logo {
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }
        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Mobile Menu */
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }
        .menu-hidden {
            transform: translateX(100%);
        }
        .menu-visible {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-white text-primary antialiased">

    <!-- NAVIGATION -->
    <header id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <!-- Logo Container -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="flex items-center gap-2">
                        <!-- Logo Image populated by JS -->
                        <img id="logo-img" class="h-12 w-auto object-contain" alt="ACPE Mada Logo">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center">
                    <a href="#" class="text-primary font-medium hover:text-secondary transition-colors">Accueil</a>
                    <a href="#services" class="text-primary font-medium hover:text-secondary transition-colors">Formations</a>
                    <a href="#coaching" class="text-primary font-medium hover:text-secondary transition-colors">Coaching</a>
                    <a href="#methode" class="text-primary font-medium hover:text-secondary transition-colors">Notre Méthode</a>
                    <a href="#contact" class="text-primary font-medium hover:text-secondary transition-colors">Contact</a>
                    
                    <a href="#contact" class="btn-primary bg-accent text-primary px-6 py-3 rounded-full font-bold text-sm tracking-wide shadow-lg border border-transparent hover:bg-yellow-400">
                        AUDIT GRATUIT
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-primary hover:text-secondary focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 bg-white shadow-2xl z-50 menu-hidden flex flex-col pt-24 px-6 md:hidden">
            <button id="close-menu-btn" class="absolute top-6 right-6 text-primary text-2xl">
                <i class="fas fa-times"></i>
            </button>
            <div class="flex flex-col space-y-6">
                <a href="#" class="text-lg font-semibold text-primary hover:text-secondary">Accueil</a>
                <a href="#services" class="text-lg font-semibold text-primary hover:text-secondary">Formations</a>
                <a href="#coaching" class="text-lg font-semibold text-primary hover:text-secondary">Coaching</a>
                <a href="#methode" class="text-lg font-semibold text-primary hover:text-secondary">Notre Méthode</a>
                <a href="#contact" class="text-lg font-semibold text-primary hover:text-secondary">Contact</a>
                <a href="#contact" class="bg-accent text-primary text-center px-6 py-3 rounded-full font-bold shadow-md">
                    AUDIT GRATUIT
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="relative h-screen min-h-[700px] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Bureau moderne Tana formation" class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-20">
            <div data-aos="fade-up" data-aos-duration="1000">
                <span class="inline-block py-1 px-3 rounded-full bg-secondary/20 border border-secondary text-secondary text-xs font-bold tracking-wider mb-6 backdrop-blur-sm uppercase">
                    Leader du Lean Management à Madagascar
                </span>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Transformez vos Processus en <span class="text-accent">Levier de Rentabilité</span>
                </h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-200 font-light mb-10 leading-relaxed">
                    Experts en Lean Management et Coaching d'Entreprise. Éliminez les gaspillages, optimisez vos coûts et formez vos leaders de demain à Antananarivo.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#services" class="btn-primary bg-accent text-primary px-8 py-4 rounded-full font-bold text-base shadow-lg hover:bg-yellow-400 min-w-[200px]">
                        Voir les Programmes
                    </a>
                    <a href="#methode" class="btn-secondary bg-transparent border-2 border-secondary text-white px-8 py-4 rounded-full font-bold text-base hover:border-white min-w-[200px] flex items-center justify-center gap-2 group">
                        Notre Approche <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#trust" class="text-white/50 hover:text-white transition-colors">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- BARRE DE CONFIANCE -->
    <section id="trust" class="py-12 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <p class="text-primary font-bold text-4xl mb-1">+50</p>
                    <p class="text-gray-500 text-sm uppercase tracking-widest font-medium">Entreprises Accompagnées</p>
                </div>
                <!-- Mockup Logos for Visual Representation -->
                <div class="flex flex-wrap justify-center gap-8 md:gap-16 items-center opacity-70">
                    <i class="fas fa-building text-3xl partner-logo text-gray-400" title="Partenaire Galaxy"></i>
                    <i class="fas fa-industry text-3xl partner-logo text-gray-400" title="Partenaire Ankorondrano"></i>
                    <i class="fas fa-chart-line text-3xl partner-logo text-gray-400" title="Partenaire Finance"></i>
                    <i class="fas fa-shipping-fast text-3xl partner-logo text-gray-400" title="Partenaire Logistique"></i>
                    <i class="fas fa-hard-hat text-3xl partner-logo text-gray-400" title="Partenaire BTP"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEMATIQUE -->
    <section class="py-24 bg-offwhite">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-primary font-bold text-3xl md:text-5xl mb-6 leading-tight">
                        Vos équipes atteignent-elles leurs <span class="text-secondary">objectifs réels</span> ?
                    </h2>
                    <p class="text-greytext text-lg mb-8 leading-relaxed">
                        Dans un environnement concurrentiel, l'inefficacité coûte cher. Surstocks, délais non respectés, qualité fluctuante... ces goulots d'étranglement freinent votre croissance.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-red-100 flex items-center justify-center text-red-500 mt-1">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold text-primary">Délais & Retards</h4>
                                <p class="text-gray-500">Perte de clients due à une logistique défaillante.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500 mt-1">
                                <i class="fas fa-cubes text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold text-primary">Gaspillages (Muda)</h4>
                                <p class="text-gray-500">Ressources utilisées sans création de valeur ajoutée.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 p-6 bg-white rounded-xl border-l-4 border-accent shadow-sm">
                        <p class="text-primary font-medium italic">
                            "Si vous avez répondu non à la question du titre, le Lean Management n'est pas une option, c'est votre solution."
                        </p>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-dots opacity-20"></div>
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070&auto=format&fit=crop" alt="Manager stressé vs solution" class="rounded-2xl shadow-premium w-full object-cover h-[500px]">
                    <div class="absolute bottom-8 left-8 bg-white p-6 rounded-lg shadow-lg max-w-xs">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="text-sm font-bold text-primary">Optimisation continue</span>
                        </div>
                        <p class="text-xs text-gray-500">Réduisez vos coûts opérationnels de 20% dès la première année.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOS SERVICES PHARES -->
    <section id="services" class="py-24 bg-primary relative overflow-hidden">
        <!-- Decoration BG -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-secondary/5 skew-x-12"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-white font-bold text-3xl md:text-5xl mb-4">Nos Solutions d'Excellence</h2>
                <div class="h-1 w-20 bg-accent mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-2xl flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-secondary mb-6">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Formation Lean Six Sigma</h3>
                    <p class="text-gray-500 mb-6 flex-grow">
                        Certifiez vos équipes (Yellow & Green Belt). Maîtrisez la méthode DMAIC pour résoudre les problèmes complexes.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Certification Internationale</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Cas pratiques locaux</li>
                    </ul>
                    <div class="mt-auto">
                        <p class="text-accent font-bold text-lg mb-4">À partir de 800 000 Ar <span class="text-xs text-gray-400 font-normal">/ pers</span></p>
                        <a href="#contact" class="block w-full text-center py-3 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-colors">
                            En savoir plus
                        </a>
                    </div>
                </div>

                <!-- Carte 2 (Featured) -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-2xl flex flex-col h-full relative transform md:-translate-y-4 border-t-4 border-accent" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute top-0 right-0 bg-accent text-primary text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">POPULAIRE</div>
                    <div class="w-14 h-14 bg-yellow-50 rounded-xl flex items-center justify-center text-accent mb-6">
                        <i class="fas fa-user-tie text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Coaching de Performance</h3>
                    <p class="text-gray-500 mb-6 flex-grow">
                        Accompagnement individuel pour Dirigeants et Managers. Développez votre leadership et pilotez le changement.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Coaching 1-on-1</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Objectifs ROI mesurables</li>
                    </ul>
                    <div class="mt-auto">
                        <a href="#contact" class="block w-full text-center py-3 rounded-lg bg-primary text-white font-bold hover:bg-secondary transition-colors shadow-lg">
                            Demander un devis
                        </a>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="service-card bg-white rounded-2xl p-8 shadow-2xl flex flex-col h-full" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-secondary mb-6">
                        <i class="fas fa-microscope text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4">Diagnostic Opérationnel</h3>
                    <p class="text-gray-500 mb-6 flex-grow">
                        Audit complet sur site (Gemba Walk). Identification des 7 gaspillages et plan d'action immédiat.
                    </p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-8">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Rapport détaillé</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Roadmap priorisée</li>
                    </ul>
                    <div class="mt-auto">
                        <p class="text-accent font-bold text-lg mb-4">Sur devis</p>
                        <a href="#contact" class="block w-full text-center py-3 rounded-lg border-2 border-primary text-primary font-bold hover:bg-primary hover:text-white transition-colors">
                            Réserver un audit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- A PROPOS & METHODE -->
    <section id="methode" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col-reverse lg:flex-row gap-16 items-center">
                <!-- Visuel Equipe -->
                <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932&auto=format&fit=crop" alt="Equipe ACPE Mada" class="rounded-2xl shadow-premium object-cover h-[500px] w-full">
                    <div class="absolute -bottom-6 -right-6 bg-accent p-8 rounded-xl shadow-lg hidden md:block">
                        <p class="text-primary font-bold text-3xl">10+</p>
                        <p class="text-primary text-sm font-medium">Années d'expertise<br>à Madagascar</p>
                    </div>
                </div>

                <!-- Contenu Texte -->
                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <span class="text-secondary font-bold uppercase tracking-wider text-sm mb-2 block">À Propos de ACPE Mada</span>
                    <h2 class="text-primary font-bold text-3xl md:text-5xl mb-6">L'Excellence Opérationnelle au cœur de Tana.</h2>
                    <p class="text-greytext text-lg mb-6 leading-relaxed">
                        Nous ne sommes pas de simples formateurs. Nous sommes des praticiens du terrain. Notre équipe est composée d'experts certifiés Black Belt ayant piloté des projets de transformation dans l'Océan Indien.
                    </p>
                    <p class="text-greytext text-lg mb-8 leading-relaxed">
                        Notre ancrage local nous permet de comprendre les spécificités culturelles malgaches tout en appliquant les standards internationaux de performance (Kaizen, 5S, VSM).
                    </p>
                    <a href="#contact" class="text-secondary font-bold text-lg hover:text-primary transition-colors inline-flex items-center gap-2">
                        Rencontrer nos experts <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT / FOOTER -->
    <footer id="contact" class="bg-primary text-white pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Col 1 -->
                <div>
                    <h3 class="text-2xl font-bold font-heading mb-6 text-white">ACPE Mada</h3>
                    <p class="text-gray-400 mb-6">
                        Le partenaire de référence pour la montée en compétence de vos équipes et l'optimisation de vos coûts.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent hover:text-primary transition-all">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent hover:text-primary transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-accent">Nos Services</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Formation Lean Six Sigma</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Coaching Dirigeants</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Audit Opérationnel</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Gestion de Projet</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-accent">Liens Utiles</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Témoignages</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog & Ressources</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div>
                    <h4 class="text-lg font-bold mb-6 text-accent">Contactez-nous</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-secondary"></i>
                            <span>Zone Galaxy, Andraharo<br>Antananarivo 101, Madagascar</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-secondary"></i>
                            <span>+261 34 00 000 00</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-secondary"></i>
                            <span>contact@acpemada.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2024 ACPE Mada. Tous droits réservés.</p>
                <div class="flex gap-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Mentions Légales</a>
                    <a href="#" class="hover:text-white">Politique de Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // INIT CONFIGURATION
        const LOGO_URL = "logo.jpg";
        
        // Apply Logo
        document.addEventListener('DOMContentLoaded', () => {
            const logoImg = document.getElementById('logo-img');
            if(logoImg) logoImg.src = LOGO_URL;

            // Init Animations
            AOS.init({
                once: true,
                offset: 100,
                duration: 800,
                easing: 'ease-out-cubic',
            });
        });

        // Sticky Navbar Logic
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md');
                navbar.classList.remove('h-24');
                navbar.classList.add('h-20');
            } else {
                navbar.classList.remove('shadow-md');
                navbar.classList.remove('h-20');
                navbar.classList.add('h-24');
            }
        });

        // Mobile Menu Logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const closeBtn = document.getElementById('close-menu-btn');

        btn.addEventListener('click', () => {
            menu.classList.remove('menu-hidden');
            menu.classList.add('menu-visible');
        });

        closeBtn.addEventListener('click', () => {
            menu.classList.remove('menu-visible');
            menu.classList.add('menu-hidden');
        });

        // Close menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('menu-visible');
                menu.classList.add('menu-hidden');
            });
        });
    </script>
</body>
</html>