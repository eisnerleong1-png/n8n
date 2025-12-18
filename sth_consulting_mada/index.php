<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STH Consulting | Expert RH Madagascar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            dark: '#0B0F19',     // Fond très sombre
                            primary: '#1E3A8A',  // Bleu corporate premium
                            accent: '#D97706',   // Or/Ambre pour les CTA
                            light: '#F3F4F6',    // Gris très clair
                            surface: '#FFFFFF'
                        }
                    },
                    fontFamily: {
                        sans: ['Manrope', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    boxShadow: {
                        'premium': '0 20px 40px -5px rgba(0, 0, 0, 0.1), 0 10px 20px -5px rgba(0, 0, 0, 0.04)',
                        'card': '0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Styling for Premium Feel */
        body {
            font-family: 'Manrope', sans-serif;
            background-color: #F8FAFC;
            color: #1E293B;
            overflow-x: hidden;
        }
        
        .hero-bg {
            background-image: linear-gradient(rgba(11, 15, 25, 0.75), rgba(11, 15, 25, 0.6)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .text-gradient {
            background: linear-gradient(135deg, #1E3A8A 0%, #2563EB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-primary:hover::after {
            left: 100%;
        }

        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        /* Animation classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased">

    <!-- NAVIGATION -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo Container -->
                <div class="flex-shrink-0 flex items-center">
                    <img id="header-logo" src="" alt="STH Consulting Logo" class="h-12 w-auto object-contain">
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-white hover:text-brand-accent transition-colors text-sm font-semibold tracking-wide">Expertises</a>
                    <a href="#about" class="text-white hover:text-brand-accent transition-colors text-sm font-semibold tracking-wide">À Propos</a>
                    <a href="#testimonials" class="text-white hover:text-brand-accent transition-colors text-sm font-semibold tracking-wide">Témoignages</a>
                    <a href="#contact" class="bg-brand-accent hover:bg-amber-700 text-white px-6 py-3 rounded-full text-sm font-bold shadow-lg transition-transform transform hover:scale-105">
                        Devis Gratuit
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-white hover:text-gray-300 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-dark absolute w-full top-full left-0 border-t border-gray-800">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-xl">
                <a href="#services" class="block px-3 py-2 text-gray-300 hover:text-white text-base font-medium">Expertises</a>
                <a href="#about" class="block px-3 py-2 text-gray-300 hover:text-white text-base font-medium">À Propos</a>
                <a href="#testimonials" class="block px-3 py-2 text-gray-300 hover:text-white text-base font-medium">Témoignages</a>
                <a href="#contact" class="block mt-4 text-center w-full bg-brand-accent text-white px-5 py-3 rounded-lg font-bold">Demander un Devis</a>
            </div>
        </div>
    </nav>

    <!-- SECTION 1: HERO / ABOVE THE FOLD -->
    <header class="relative h-screen min-h-[700px] flex items-center justify-center hero-bg text-white">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center z-10 fade-in-up">
            <span class="inline-block py-1 px-3 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-bold tracking-widest uppercase mb-6 text-brand-accent">
                Partenaire de confiance à Madagascar
            </span>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-medium leading-tight mb-6">
                Sécurisez et Optimisez <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-300">votre Gestion RH</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-300 font-light leading-relaxed">
                Cabinet expert en Recrutement, Gestion de Paie et Outsourcing à Antananarivo. 
                Conformité légale garantie et flexibilité totale pour votre croissance internationale.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="btn-primary bg-brand-accent text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-orange-500/30 transform hover:-translate-y-1">
                    Demander un Devis Gratuit
                </a>
                <a href="#services" class="bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-brand-dark transition-all duration-300">
                    Découvrir nos solutions
                </a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#social-proof" class="text-white/50 hover:text-white transition-colors">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </header>

    <!-- SECTION 2: PREUVE SOCIALE -->
    <section id="social-proof" class="py-10 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-semibold text-gray-400 uppercase tracking-widest mb-8">Ils font confiance à STH Consulting</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- Logos Placeholder (Using generic names for demo) -->
                <img src="https://placehold.co/120x40/transparent/333?text=CORP+INC" alt="Partner Logo" class="h-8 md:h-10 w-auto">
                <img src="https://placehold.co/120x40/transparent/333?text=GLOBAL+TECH" alt="Partner Logo" class="h-8 md:h-10 w-auto">
                <img src="https://placehold.co/120x40/transparent/333?text=MADAGASCAR+LTD" alt="Partner Logo" class="h-8 md:h-10 w-auto">
                <img src="https://placehold.co/120x40/transparent/333?text=INNOVATE" alt="Partner Logo" class="h-8 md:h-10 w-auto">
                <img src="https://placehold.co/120x40/transparent/333?text=VENTURES" alt="Partner Logo" class="h-8 md:h-10 w-auto">
            </div>
        </div>
    </section>

    <!-- SECTION 3: PROBLÈME / SOLUTION -->
    <section class="py-24 bg-brand-light relative overflow-hidden">
        <!-- Decorative bg element -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-up">
                    <h2 class="text-brand-primary text-sm font-bold uppercase tracking-widest mb-3">La Problématique</h2>
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-6 leading-tight">
                        La gestion administrative <br>vous ralentit ?
                    </h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Code du travail complexe, démarches CNAPS/OSTIE chronophages, difficulté à sourcer les bons profils locaux... 
                        <strong class="text-brand-primary">Ne laissez pas l'administratif freiner votre croissance.</strong>
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Risques de redressements fiscaux ou sociaux.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Perte de temps sur des tâches à faible valeur ajoutée.</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-times-circle text-red-500 mt-1 mr-3"></i>
                            <span class="text-gray-600">Difficulté d'attraction des talents qualifiés.</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white p-10 rounded-2xl shadow-premium border border-gray-100 fade-in-up" style="transition-delay: 200ms;">
                    <div class="flex items-center mb-6">
                        <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-4">
                            <i class="fas fa-check text-xl"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-gray-900">La Solution STH</h4>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Nous prenons en charge l'intégralité de vos processus RH. Externalisez vos contraintes pour vous concentrer sur votre cœur de métier.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-bold text-brand-primary text-2xl mb-1">100%</p>
                            <p class="text-sm text-gray-500">Conformité Légale</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="font-bold text-brand-primary text-2xl mb-1">-30%</p>
                            <p class="text-sm text-gray-500">Coûts Opérationnels</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: NOS EXPERTISES (SERVICES) -->
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
                <h2 class="text-brand-accent text-sm font-bold uppercase tracking-widest mb-3">Nos Services</h2>
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-4">Solutions d'Externalisation RH 360°</h3>
                <p class="text-gray-500 text-lg">Une approche modulaire adaptée aux PME locales et aux multinationales.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="service-card group bg-white p-8 rounded-2xl border border-gray-100 hover:border-blue-100">
                    <div class="h-14 w-14 rounded-xl bg-blue-50 group-hover:bg-brand-primary transition-colors flex items-center justify-center text-brand-primary group-hover:text-white mb-6">
                        <i class="fas fa-user-tie text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Recrutement & <br>Chasse de Tête</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Sourcing de talents qualifiés, cadres dirigeants et techniciens spécialisés. Processus de sélection rigoureux.</p>
                </div>

                <!-- Card 2 -->
                <div class="service-card group bg-white p-8 rounded-2xl border border-gray-100 hover:border-blue-100">
                    <div class="h-14 w-14 rounded-xl bg-blue-50 group-hover:bg-brand-primary transition-colors flex items-center justify-center text-brand-primary group-hover:text-white mb-6">
                        <i class="fas fa-file-invoice-dollar text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Gestion de <br>la Paie</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Traitement des salaires, déclarations sociales et fiscales (IRSA, CNAPS, OSTIE) garanties sans erreurs.</p>
                </div>

                <!-- Card 3 -->
                <div class="service-card group bg-white p-8 rounded-2xl border border-gray-100 hover:border-blue-100">
                    <div class="h-14 w-14 rounded-xl bg-blue-50 group-hover:bg-brand-primary transition-colors flex items-center justify-center text-brand-primary group-hover:text-white mb-6">
                        <i class="fas fa-users-cog text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Outsourcing de <br>Personnel</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Portage salarial et mise à disposition de personnel géré par nos soins pour une flexibilité maximale.</p>
                </div>

                <!-- Card 4 -->
                <div class="service-card group bg-white p-8 rounded-2xl border border-gray-100 hover:border-blue-100">
                    <div class="h-14 w-14 rounded-xl bg-blue-50 group-hover:bg-brand-primary transition-colors flex items-center justify-center text-brand-primary group-hover:text-white mb-6">
                        <i class="fas fa-chart-line text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Conseil & <br>Audit RH</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Audit de conformité, optimisation de l'organisation et accompagnement stratégique RH.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: À PROPOS (RÉASSURANCE) -->
    <section id="about" class="py-24 bg-brand-dark text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl fade-in-up">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80" alt="Réunion d'équipe" class="w-full h-auto object-cover transform hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="absolute bottom-6 left-6">
                        <p class="text-2xl font-serif font-bold text-white">Excellence Locale</p>
                        <p class="text-gray-300 text-sm">Basé à Antananarivo</p>
                    </div>
                </div>

                <div class="fade-in-up" style="transition-delay: 200ms;">
                    <h2 class="text-brand-accent text-sm font-bold uppercase tracking-widest mb-3">Notre Approche</h2>
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">L'Expertise Locale aux Standards Internationaux</h3>
                    <p class="text-gray-400 text-lg mb-6 leading-relaxed">
                        Basés à Antananarivo, nous maîtrisons les spécificités du marché malgache tout en appliquant une rigueur internationale.
                    </p>
                    <p class="text-gray-400 text-lg mb-8 leading-relaxed">
                        Notre mission est simple : réduire vos risques juridiques et optimiser vos coûts opérationnels grâce à une gestion RH fluide et transparente.
                    </p>
                    <a href="#contact" class="inline-flex items-center text-white font-bold hover:text-brand-accent transition-colors group">
                        Découvrir notre équipe 
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: TÉMOIGNAGES CLIENTS -->
    <section id="testimonials" class="py-24 bg-brand-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-center text-3xl md:text-4xl font-serif font-bold text-gray-900 mb-16 fade-in-up">Ce que disent nos partenaires</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-white p-10 rounded-2xl shadow-card fade-in-up relative">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-blue-100"></i>
                    <p class="text-gray-600 italic text-lg mb-6 relative z-10">"Un partenaire fiable qui a su gérer notre paie sans aucune erreur depuis 2 ans. Nous avons gagné un temps précieux sur l'administratif."</p>
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold mr-4">JL</div>
                        <div>
                            <p class="text-gray-900 font-bold">Jean Luc R.</p>
                            <p class="text-sm text-gray-500">DG, Secteur Industrie</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-10 rounded-2xl shadow-card fade-in-up relative" style="transition-delay: 150ms;">
                    <i class="fas fa-quote-right absolute top-8 right-8 text-4xl text-blue-100"></i>
                    <p class="text-gray-600 italic text-lg mb-6 relative z-10">"Le recrutement de nos profils techniques était un cauchemar. STH a trouvé 3 candidats parfaits en moins de 2 semaines. Impressionnant."</p>
                    <div class="flex items-center">
                        <div class="h-12 w-12 rounded-full bg-gray-300 flex items-center justify-center text-gray-600 font-bold mr-4">MS</div>
                        <div>
                            <p class="text-gray-900 font-bold">Marie S.</p>
                            <p class="text-sm text-gray-500">DRH, Groupe International</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7: FOOTER & CONTACT -->
    <footer id="contact" class="bg-brand-dark text-white pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-16">
                <!-- Contact Info -->
                <div class="fade-in-up">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Discutons de vos besoins RH</h2>
                    <p class="text-gray-400 mb-8 text-lg">Prêt à transformer votre gestion RH ? Remplissez le formulaire ou contactez-nous directement.</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-brand-accent mt-1 mr-4 text-xl"></i>
                            <div>
                                <h4 class="font-bold text-white">Bureau Antananarivo</h4>
                                <p class="text-gray-400">Immeuble Prisme, Zone Galaxy<br>Andraharo, Antananarivo 101</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-brand-accent mr-4 text-xl"></i>
                            <a href="mailto:contact@sth-consulting.mg" class="text-gray-400 hover:text-white transition-colors">contact@sth-consulting.mg</a>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt text-brand-accent mr-4 text-xl"></i>
                            <a href="tel:+261340000000" class="text-gray-400 hover:text-white transition-colors">+261 34 00 000 00</a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 fade-in-up" style="transition-delay: 200ms;">
                    <form onsubmit="event.preventDefault(); alert('Merci ! Votre demande a bien été envoyée.');" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Nom complet</label>
                                <input type="text" class="w-full bg-brand-dark/50 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all" placeholder="Votre nom">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Entreprise</label>
                                <input type="text" class="w-full bg-brand-dark/50 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all" placeholder="Nom de l'entreprise">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                                <input type="email" class="w-full bg-brand-dark/50 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all" placeholder="votre@email.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-400 mb-2">Téléphone</label>
                                <input type="tel" class="w-full bg-brand-dark/50 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all" placeholder="+261 ...">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Type de besoin</label>
                            <select class="w-full bg-brand-dark/50 border border-gray-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all">
                                <option>Recrutement</option>
                                <option>Gestion de Paie</option>
                                <option>Outsourcing</option>
                                <option>Conseil RH</option>
                                <option>Autre</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full bg-brand-accent hover:bg-amber-700 text-white font-bold py-4 rounded-lg shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            Être rappelé par un consultant
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">© 2025 STH Consulting. Tous droits réservés.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-linkedin text-xl"></i></a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors"><i class="fab fa-facebook text-xl"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // --- LOGO CONFIGURATION ---
        // ATTENTION : Collez le lien de votre logo final ici
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // --- APPLICATION LOGIC ---
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Set Logo URL
            // Note: The prompt requested "PHO RESTO" which is weird for an HR firm, 
            // but strict instructions must be followed. 
            // In a real scenario, you would change the text in the URL above.
            const logoElement = document.getElementById('header-logo');
            if(logoElement) {
                logoElement.src = LOGO_URL;
                // Fallback style tweak to make sure the red placeholder doesn't clash too much if not changed
                logoElement.style.filter = "brightness(0) invert(1)"; // Make white for dark header
            }

            // 2. Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('header-logo');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-brand-dark', 'shadow-md', 'py-2');
                    navbar.classList.remove('bg-transparent', 'py-4');
                    if(logo) logo.style.height = "40px"; // Shrink logo slightly
                } else {
                    navbar.classList.remove('bg-brand-dark', 'shadow-md', 'py-2');
                    navbar.classList.add('bg-transparent', 'py-4');
                    if(logo) logo.style.height = "48px"; // Original size
                }
            });

            // 3. Mobile Menu Toggle
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            if(btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }

            // 4. Scroll Animation (Intersection Observer)
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            const elements = document.querySelectorAll('.fade-in-up');
            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>