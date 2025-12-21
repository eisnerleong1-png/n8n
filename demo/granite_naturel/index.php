<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granit & Marbre Prestige Madagascar | Plans de Travail Haut de Gamme</title>
    <meta name="description" content="Marbrerie de luxe à Antananarivo. Plans de travail en granit, cuisines sur mesure et finitions en pierre naturelle. Qualité artisanale et durabilité.">
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;800&family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         */
        :root {
            --color-primary: #5FBAC6; /* Cyan/Teal - Action */
            --color-primary-dark: #4aa3ae;
            --color-accent: #3F7CB7; /* Bleu Acier - Technique */
            --color-text-main: #626365; /* Gris Anthracite - Luxe */
            --color-text-light: #888888;
            --color-bg-white: #ffffff;
            --color-bg-offwhite: #f9f9f9;
            --color-dark: #1a1a1a;
            
            --font-heading: 'Cinzel', serif;
            --font-subheading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;

            --spacing-section: 100px;
            --shadow-card: 0 10px 30px rgba(0,0,0,0.05);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.1);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; font-size: 16px; }
        body {
            font-family: var(--font-body);
            color: var(--color-text-main);
            background-color: var(--color-bg-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 { font-family: var(--font-heading); color: var(--color-dark); font-weight: 600; }
        h2 { font-size: 2.5rem; margin-bottom: 1rem; text-align: center; letter-spacing: 1px; }
        p { margin-bottom: 1rem; font-weight: 300; }
        a { text-decoration: none; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; height: auto; }

        /* UTILS */
        .container { max-width: 1280px; margin: 0 auto; padding: 0 20px; }
        .text-center { text-align: center; }
        .section-padding { padding: var(--spacing-section) 0; }
        .bg-gray { background-color: var(--color-bg-offwhite); }
        
        /* BTN STYLES */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            background-color: var(--color-primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            border: 1px solid var(--color-primary);
            cursor: pointer;
            font-size: 0.9rem;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .btn::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(255,255,255,0.2);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease-out;
            z-index: -1;
        }
        .btn:hover::after { transform: scaleX(1); transform-origin: left; }
        .btn:hover { transform: translateY(-2px); box-shadow: 0 10px 20px rgba(95, 186, 198, 0.3); }
        
        .btn-outline {
            background: transparent;
            color: var(--color-accent);
            border: 1px solid var(--color-accent);
        }
        .btn-outline:hover { background: var(--color-accent); color: white; }

        /* HEADER & NAV */
        header {
            position: fixed;
            top: 0; left: 0; width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: rgba(255, 255, 255, 0); 
        }
        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
            backdrop-filter: blur(10px);
        }
        nav { display: flex; justify-content: space-between; align-items: center; }
        
        /* Logo Injection Target */
        #logo-container img { height: 50px; width: auto; object-fit: contain; }

        .nav-links { display: flex; gap: 40px; }
        .nav-links a {
            color: white;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }
        header.scrolled .nav-links a { color: var(--color-dark); }
        .nav-links a::after {
            content: ''; position: absolute; bottom: -5px; left: 0; width: 0%; height: 2px;
            background: var(--color-primary); transition: 0.3s;
        }
        .nav-links a:hover::after { width: 100%; }

        .burger { display: none; color: white; font-size: 1.5rem; cursor: pointer; }
        header.scrolled .burger { color: var(--color-dark); }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
            text-align: center;
            color: white;
            padding-top: 80px; /* Prevent header overlap */
        }
        .hero-content {
            max-width: 900px;
            padding: 0 20px;
            opacity: 0;
            animation: fadeUp 1s ease-out forwards 0.5s;
        }
        .hero h1 {
            font-family: var(--font-heading);
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .hero h2 {
            font-family: var(--font-subheading);
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 40px;
            color: #f0f0f0;
            text-transform: none;
        }

        /* SOCIAL PROOF */
        .social-proof {
            padding: 30px 0;
            background: white;
            border-bottom: 1px solid #eee;
        }
        .proof-text { text-align: center; font-size: 0.9rem; color: var(--color-text-light); margin-bottom: 15px; text-transform: uppercase; letter-spacing: 2px; }
        .logos-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
            opacity: 0.6;
        }
        .trust-item { display: flex; align-items: center; gap: 10px; font-weight: 600; color: #444; }
        .trust-item i { color: var(--color-accent); }

        /* VALUE PROPOSITION */
        .value-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        .value-card {
            text-align: center;
            padding: 40px 20px;
            background: white;
            border-radius: 4px;
            transition: var(--transition);
        }
        .value-card:hover { transform: translateY(-10px); }
        .value-icon {
            font-size: 3rem;
            color: var(--color-accent);
            margin-bottom: 25px;
            background: linear-gradient(135deg, rgba(63, 124, 183, 0.1) 0%, rgba(255,255,255,0) 100%);
            width: 80px;
            height: 80px;
            line-height: 80px;
            border-radius: 50%;
            display: inline-block;
        }
        .value-card h3 { margin-bottom: 15px; font-family: var(--font-subheading); }

        /* SHOWROOM VIRTUAL */
        .showroom { background-color: #111; color: white; }
        .showroom h2 { color: white; }
        .showroom p { color: #aaa; text-align: center; max-width: 600px; margin: 0 auto 50px auto; }
        
        .stone-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 0; /* Seamless look */
        }
        .stone-item {
            position: relative;
            height: 400px;
            overflow: hidden;
            cursor: crosshair;
        }
        .stone-img {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.6s ease;
        }
        .stone-overlay {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            transform: translateY(20px);
            opacity: 0;
            transition: 0.4s;
        }
        .stone-item:hover .stone-img { transform: scale(1.4); /* Magnifying effect */ }
        .stone-item:hover .stone-overlay { opacity: 1; transform: translateY(0); }
        .stone-title { font-family: var(--font-heading); font-size: 1.5rem; color: white; margin-bottom: 5px; }
        .stone-desc { color: var(--color-primary); font-size: 0.9rem; font-style: italic; }

        /* SERVICES */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .service-card {
            background: white;
            border: 1px solid #eee;
            padding: 40px;
            position: relative;
            transition: var(--transition);
        }
        .service-card:hover { border-color: var(--color-primary); box-shadow: var(--shadow-card); }
        .price-tag {
            font-family: var(--font-body);
            color: var(--color-primary);
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 15px;
            display: block;
        }
        .service-title { font-size: 1.4rem; margin-bottom: 10px; font-family: var(--font-subheading); }

        /* ABOUT / EXPERTISE */
        .about-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        .about-visual {
            position: relative;
            height: 500px;
        }
        .about-visual img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: var(--shadow-hover);
        }
        .timeline {
            margin-top: 30px;
            border-left: 2px solid var(--color-accent);
            padding-left: 30px;
        }
        .timeline-item { position: relative; margin-bottom: 30px; }
        .timeline-item::before {
            content: ''; position: absolute; left: -36px; top: 5px;
            width: 10px; height: 10px; background: var(--color-accent);
            border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 1px var(--color-accent);
        }
        .timeline-title { font-weight: 700; color: var(--color-dark); margin-bottom: 5px; }

        /* FAQ */
        .faq-wrapper { max-width: 800px; margin: 0 auto; }
        details {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        summary {
            font-weight: 600;
            cursor: pointer;
            list-style: none;
            position: relative;
            padding-right: 30px;
            font-size: 1.1rem;
            font-family: var(--font-subheading);
        }
        summary::after {
            content: '+';
            position: absolute; right: 0; top: 0;
            font-weight: 300; font-size: 1.5rem; color: var(--color-primary);
        }
        details[open] summary::after { content: '-'; }
        details p { margin-top: 15px; color: var(--color-text-main); font-size: 0.95rem; }

        /* FOOTER */
        footer { background: #1a1a1a; color: white; padding: 80px 0 30px; }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }
        .footer-col h4 { color: white; margin-bottom: 25px; font-size: 1.2rem; }
        .footer-col ul li { margin-bottom: 15px; }
        .footer-col a { color: #aaa; }
        .footer-col a:hover { color: var(--color-primary); }
        .contact-info li { display: flex; gap: 15px; align-items: flex-start; color: #aaa; }
        .contact-info i { color: var(--color-primary); margin-top: 5px; }
        .footer-bottom { border-top: 1px solid #333; padding-top: 30px; text-align: center; color: #666; font-size: 0.8rem; }
        
        /* RESPONSIVE */
        @media (max-width: 992px) {
            .about-layout { grid-template-columns: 1fr; }
            .hero h1 { font-size: 2.5rem; }
        }
        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 0; right: 0;
                height: 100vh;
                background: white;
                flex-direction: column;
                width: 70%;
                padding: 100px 40px;
                transform: translateX(100%);
                transition: 0.3s;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }
            .nav-links.active { transform: translateX(0); }
            .nav-links a { color: var(--color-dark); font-size: 1.2rem; }
            .burger { display: block; z-index: 1001; }
            .burger.toggle { color: var(--color-dark); }
            
            .hero { padding-top: 0; }
            .hero-content { margin-top: 60px; }
            h2 { font-size: 2rem; }
        }

        /* ANIMATIONS */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="header">
        <div class="container">
            <nav>
                <div id="logo-container">
                    <!-- JS injects logo here -->
                </div>
                <ul class="nav-links">
                    <li><a href="#showroom">Nos Pierres</a></li>
                    <li><a href="#about">Savoir-Faire</a></li>
                    <li><a href="#services">Prestations</a></li>
                    <li><a href="#contact" class="btn" style="padding: 10px 20px; margin-top: -10px;">Devis Gratuit</a></li>
                </ul>
                <div class="burger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>L'Élégance Éternelle du Granit<br>pour vos Intérieurs à Antananarivo.</h1>
            <h2>Cuisines, Escaliers et Finitions sur mesure.<br>Une durabilité incomparable, une finition artisanale d'exception.</h2>
            <a href="#contact" class="btn">Demander une estimation gratuite</a>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container">
            <p class="proof-text">Ils nous font confiance pour leurs projets d'exception</p>
            <div class="logos-wrapper">
                <div class="trust-item"><i class="fas fa-drafting-compass"></i> Cabinet Arch'Design Mada</div>
                <div class="trust-item"><i class="fas fa-home"></i> Résidences du Lac</div>
                <div class="trust-item"><i class="fas fa-check-circle"></i> +200 Clients Satisfaits</div>
                <div class="trust-item"><i class="fas fa-shield-alt"></i> Garantie Décennale</div>
            </div>
        </div>
    </section>

    <!-- VALUE PROP -->
    <section class="section-padding" id="value">
        <div class="container">
            <h2>Pourquoi choisir le Granit Naturel ?</h2>
            <p class="text-center" style="max-width: 700px; margin: 0 auto 50px;">Un investissement noble qui surpasse les matériaux synthétiques.</p>
            
            <div class="value-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-fire-alt"></i></div>
                    <h3>Résistance Totale</h3>
                    <p>Insensible à la chaleur des plats sortant du four et impossible à rayer avec des couteaux de cuisine.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-gem"></i></div>
                    <h3>Esthétique Unique</h3>
                    <p>Chaque tranche est une œuvre d'art géologique. Votre plan de travail est unique au monde.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Investissement Durable</h3>
                    <p>Une valorisation immédiate et pérenne de votre patrimoine immobilier à Antananarivo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SHOWROOM -->
    <section class="section-padding showroom" id="showroom">
        <div class="container">
            <h2>Collection d'Exception</h2>
            <p>Survolez nos pierres pour découvrir la finesse du grain et l'éclat des cristaux.</p>
        </div>
        <div class="stone-grid">
            <!-- Stone 1 -->
            <div class="stone-item">
                <div class="stone-img" style="background-image: url('https://images.unsplash.com/photo-1618219740975-d40978bb7378?q=80&w=2000&auto=format&fit=crop');"></div>
                <div class="stone-overlay">
                    <div class="stone-title">Noir Absolu</div>
                    <div class="stone-desc">Luxe, profondeur et sobriété intemporelle.</div>
                </div>
            </div>
            <!-- Stone 2 -->
            <div class="stone-item">
                <div class="stone-img" style="background-image: url('https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=2070&auto=format&fit=crop');"></div>
                <div class="stone-overlay">
                    <div class="stone-title">Blanc Galaxy</div>
                    <div class="stone-desc">Luminosité et éclats cristallins.</div>
                </div>
            </div>
            <!-- Stone 3 -->
            <div class="stone-item">
                <div class="stone-img" style="background-image: url('https://images.unsplash.com/photo-1617850687395-50e501d51a66?q=80&w=2070&auto=format&fit=crop');"></div>
                <div class="stone-overlay">
                    <div class="stone-title">Marbre Calacatta</div>
                    <div class="stone-desc">Veinage dramatique pour salles de bain de prestige.</div>
                </div>
            </div>
            <!-- Stone 4 -->
            <div class="stone-item">
                <div class="stone-img" style="background-image: url('https://images.unsplash.com/photo-1595428774223-ef52624120d2?q=80&w=1887&auto=format&fit=crop');"></div>
                <div class="stone-overlay">
                    <div class="stone-title">Quartzite Exotique</div>
                    <div class="stone-desc">La dureté du granit, l'élégance du marbre.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section-padding bg-gray" id="services">
        <div class="container">
            <h2>Solutions sur Mesure</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3 class="service-title">Cuisines & Îlots</h3>
                    <p>Découpe précise pour encastrement d'éviers et plaques de cuisson. Finitions polies ou adoucies.</p>
                    <span class="price-tag">À partir de 450 000 Ar / ml</span>
                </div>
                <div class="service-card">
                    <h3 class="service-title">Escaliers & Marches</h3>
                    <p>Marches et contremarches avec nez poli. Traitement anti-dérapant disponible pour l'extérieur.</p>
                    <span class="price-tag">Sur devis uniquement</span>
                </div>
                <div class="service-card">
                    <h3 class="service-title">Salles de Bain</h3>
                    <p>Plans de vasque, douches à l'italienne et habillage mural. Étanchéité parfaite garantie.</p>
                    <span class="price-tag">Design personnalisé</span>
                </div>
            </div>
            <div class="text-center" style="margin-top: 40px;">
                <a href="#contact" class="btn btn-outline">Voir le catalogue des tarifs</a>
            </div>
        </div>
    </section>

    <!-- SAVOIR FAIRE -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-layout">
                <div class="about-visual">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop" alt="Artisan travaillant la pierre" loading="lazy">
                </div>
                <div class="about-content">
                    <h2>L'Excellence de la Découpe à la Pose</h2>
                    <p>Nous ne sommes pas de simples revendeurs. Nous sommes des artisans marbriers équipés des dernières technologies de découpe numérique pour une précision millimétrique.</p>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4 class="timeline-title">1. Prise de mesure Laser</h4>
                            <p>Déplacement gratuit sur Tana pour une prise de cote au millimètre près.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="timeline-title">2. Façonnage en Atelier</h4>
                            <p>Découpe, polissage des chants et traitement hydrofuge de votre pierre.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="timeline-title">3. Installation Soignée</h4>
                            <p>Pose rapide, propre et sans poussière par nos équipes certifiées.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding bg-gray">
        <div class="container">
            <h2>Questions Fréquentes</h2>
            <div class="faq-wrapper">
                <details>
                    <summary>Quels sont les délais d'installation ?</summary>
                    <p>Entre 5 et 10 jours ouvrés selon la complexité du projet et la disponibilité de la pierre en stock.</p>
                </details>
                <details>
                    <summary>Livrez-vous en province ?</summary>
                    <p>Oui, nous assurons une logistique sécurisée (caisses en bois renforcées) dans tout Madagascar (Tamatave, Majunga, Nosy Be, etc.).</p>
                </details>
                <details>
                    <summary>Le granit nécessite-t-il un entretien particulier ?</summary>
                    <p>Le granit est très facile à vivre. Un nettoyage à l'eau savonneuse suffit. Nous appliquons un traitement hydrofuge professionnel avant la pose.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Prenez Rendez-vous</h4>
                    <p style="color: #aaa; margin-bottom: 20px;">Venez toucher la pierre et voir les tranches entières dans notre showroom.</p>
                    <a href="#" class="btn">Réserver une visite</a>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Zone Andraharo, Antananarivo</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@marbrerie-tana.mg</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#hero">Accueil</a></li>
                        <li><a href="#showroom">Catalogue</a></li>
                        <li><a href="#services">Tarifs</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Marbrerie Prestige Madagascar. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // --- CONSTANTE LOGO OBLIGATOIRE ---
        const LOGO_URL = "logo.jpg";
        
        // --- INJECTION LOGO ---
        document.getElementById('logo-container').innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Marbrerie Prestige Logo"></a>`;

        // --- HEADER SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- MOBILE MENU ---
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        
        burger.addEventListener('click', () => {
            nav.classList.toggle('active');
            burger.classList.toggle('toggle');
            // Change icon
            const icon = burger.querySelector('i');
            if (nav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // --- CLOSE MENU ON CLICK LINK ---
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                burger.classList.remove('toggle');
                burger.querySelector('i').classList.remove('fa-times');
                burger.querySelector('i').classList.add('fa-bars');
            });
        });
    </script>
</body>
</html>