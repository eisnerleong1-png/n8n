<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>58 ème Visiteurs - Agence de Voyage Madagascar</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         * Palette: Beige #E0DCD1, Vert Olive #9C9E70, Brun #A38456
         */
        :root {
            --color-bg: #E0DCD1;
            --color-bg-light: #F2F0EB;
            --color-olive: #9C9E70;
            --color-olive-dark: #7D7F58;
            --color-brown: #A38456;
            --color-brown-dark: #826842;
            --color-dark: #1A1A1A;
            --color-white: #FFFFFF;
            
            --font-display: 'Cormorant Garamond', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            
            --spacing-section: 120px;
            --spacing-container: 1280px;
            
            --shadow-card: 0 20px 40px -10px rgba(0,0,0,0.1);
            --radius-btn: 4px;
            --radius-card: 12px;
            
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* RESET & BASE */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            background-color: var(--color-bg);
            color: var(--color-dark);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-display);
            font-weight: 600;
            line-height: 1.1;
            color: var(--color-brown);
        }

        p {
            color: #4A4A4A;
            font-weight: 300;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        /* UTILITIES */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: var(--spacing-section) 0;
        }

        .text-center { text-align: center; }
        
        .premium-subtitle {
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.85rem;
            color: var(--color-olive);
            font-weight: 700;
            margin-bottom: 16px;
            display: block;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-family: var(--font-body);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            border-radius: var(--radius-btn);
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--color-olive);
            color: var(--color-white);
        }

        .btn-primary:hover {
            background-color: var(--color-olive-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(156, 158, 112, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            border: 1px solid var(--color-brown);
            color: var(--color-brown);
        }

        .btn-secondary:hover {
            background-color: var(--color-brown);
            color: var(--color-white);
        }

        .btn-cta-header {
            background-color: var(--color-brown);
            color: var(--color-white);
            padding: 12px 24px;
            font-size: 0.8rem;
        }

        .btn-cta-header:hover {
            background-color: var(--color-brown-dark);
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 50px; /* Ajustable selon le ratio du logo */
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 40px;
            align-items: center;
        }

        nav a {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--color-white); /* White on Hero */
        }
        
        header.scrolled nav a {
            color: var(--color-dark);
        }

        nav a:hover {
            color: var(--color-olive);
        }

        .mobile-menu-btn {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-menu-btn {
            color: var(--color-dark);
        }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 0; /* Override default */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Image Baobab de qualité Unsplash */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--color-white);
            max-width: 900px;
            padding: 0 20px;
            margin-top: 60px; /* Eviter le header */
        }

        .hero h1 {
            font-size: clamp(3rem, 5vw, 4.5rem);
            color: var(--color-white);
            margin-bottom: 24px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero p {
            font-size: clamp(1rem, 1.5vw, 1.25rem);
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.8s;
        }

        .hero .btn {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 1.1s;
        }

        /* SOCIAL PROOF */
        .partners {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .partners-text {
            text-align: center;
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .partners-logos {
            display: flex;
            justify-content: center;
            gap: 60px;
            align-items: center;
            opacity: 0.6;
            flex-wrap: wrap;
        }
        
        .partner-item {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ccc;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* PROBLEM / SOLUTION */
        .features {
            background-color: var(--color-bg-light);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: var(--radius-card);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.03);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-card);
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--color-brown);
            margin-bottom: 24px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            font-family: var(--font-body); /* Modern Heading */
        }

        /* CATALOGUE */
        .catalogue {
            background-color: var(--color-bg);
        }

        .catalogue-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .trip-card {
            background: var(--color-white);
            border-radius: var(--radius-card);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .trip-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-card);
        }

        .trip-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .trip-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .trip-card:hover .trip-image img {
            transform: scale(1.05);
        }

        .trip-price {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--color-white);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 700;
            color: var(--color-brown);
            font-size: 0.9rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .trip-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .trip-content h3 {
            font-size: 1.75rem;
            margin-bottom: 10px;
            color: var(--color-dark);
        }

        .trip-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #777;
        }

        .trip-meta i { color: var(--color-olive); }

        .trip-link {
            margin-top: auto;
            color: var(--color-brown);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        /* ABOUT */
        .about {
            background-color: var(--color-white);
            display: flex;
            align-items: center;
        }
        
        .about-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            position: relative;
        }
        
        .about-img img {
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
        }

        /* TESTIMONIALS */
        .testimonials {
            background-color: var(--color-olive);
            color: var(--color-white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .testimonials h2, .testimonials p, .testimonials h3 {
            color: var(--color-white);
        }
        
        .testimonial-card {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 40px;
        }
        
        .stars {
            color: #FFD700;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .quote {
            font-family: var(--font-display);
            font-size: 2rem;
            font-style: italic;
            margin-bottom: 30px;
            line-height: 1.4;
        }

        /* FAQ */
        .faq {
            background-color: var(--color-bg-light);
        }

        .faq-grid {
            max-width: 800px;
            margin: 40px auto 0;
            display: grid;
            gap: 20px;
        }

        .faq-item {
            background: var(--color-white);
            padding: 24px;
            border-radius: 8px;
            border-left: 4px solid var(--color-brown);
        }

        .faq-item h4 {
            font-family: var(--font-body);
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: var(--color-dark);
        }

        /* FOOTER */
        footer {
            background-color: #1a1a1a;
            color: #ccc;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            color: var(--color-white);
            margin-bottom: 24px;
            font-family: var(--font-body);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a:hover {
            color: var(--color-brown);
        }

        .footer-logo img {
            height: 40px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            font-size: 0.85rem;
        }

        /* ANIMATIONS */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .fade-in-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .about-wrapper {
                grid-template-columns: 1fr;
            }
            .about-img {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                background: var(--color-bg);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            nav ul.active {
                right: 0;
            }
            
            nav a { color: var(--color-dark); font-size: 1.2rem; }

            .mobile-menu-btn { display: block; z-index: 1001;}
            
            .btn-cta-header {
                display: none; /* Hide CTA in header on mobile to clear clutter */
            }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-wrapper">
                <img id="brand-logo" alt="58 ème Visiteurs Logo">
            </a>
            
            <div class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>

            <nav>
                <ul id="nav-links">
                    <li><a href="#catalogue" onclick="toggleMenu()">Circuits</a></li>
                    <li><a href="#catalogue" onclick="toggleMenu()">Excursions</a></li>
                    <li><a href="#about" onclick="toggleMenu()">Qui sommes-nous</a></li>
                    <li><a href="#footer" onclick="toggleMenu()">Contact</a></li>
                    <li><a href="#" class="btn btn-cta-header">Demander un devis</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg">
            <!-- Image Allée des Baobabs Haute Qualité -->
            <img src="https://images.unsplash.com/photo-1544251025-a1344405381f?q=80&w=2069&auto=format&fit=crop" alt="Allée des Baobabs Madagascar Sunset">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Explorez l'Âme de Madagascar</h1>
            <p>Vivez l'aventure sans le stress logistique. Des voyages sur mesure créés par des experts locaux pour des souvenirs inoubliables depuis Antananarivo.</p>
            <a href="#catalogue" class="btn btn-primary">Voir nos circuits</a>
        </div>
    </section>

    <!-- PREUVE SOCIALE -->
    <section class="partners">
        <div class="container">
            <p class="partners-text">Ils nous font confiance & Partenaires</p>
            <div class="partners-logos">
                <div class="partner-item"><i class="fas fa-certificate"></i> Agence Agréée</div>
                <div class="partner-item"><i class="fas fa-shield-alt"></i> Assurance Voyage</div>
                <div class="partner-item"><i class="fas fa-hotel"></i> Hotels Premium</div>
                <div class="partner-item"><i class="fas fa-route"></i> Madagascar National Parks</div>
            </div>
        </div>
    </section>

    <!-- PROBLÈME / SOLUTION -->
    <section class="section-padding features">
        <div class="container">
            <div class="text-center fade-in-scroll">
                <span class="premium-subtitle">Sérénité & Expertise</span>
                <h2>Ne laissez pas l'organisation gâcher votre voyage</h2>
                <p style="max-width: 600px; margin: 20px auto;">Organiser un voyage à Madagascar peut être complexe. Nous gérons transport, hébergement et guides pour que vous profitiez à 100%.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card fade-in-scroll">
                    <i class="fas fa-user-shield feature-icon"></i>
                    <h3>Sécurité Garantie</h3>
                    <p>Des chauffeurs expérimentés et des itinéraires validés pour voyager l'esprit tranquille à travers l'île.</p>
                </div>
                <div class="feature-card fade-in-scroll">
                    <i class="fas fa-map-marked-alt feature-icon"></i>
                    <h3>Guides Certifiés</h3>
                    <p>Nos guides locaux passionnés vous dévoilent les secrets de la faune, de la flore et de la culture malgache.</p>
                </div>
                <div class="feature-card fade-in-scroll">
                    <i class="fas fa-car feature-icon"></i>
                    <h3>Confort & Logistique</h3>
                    <p>Véhicules 4x4 tout confort et hébergements de charme sélectionnés avec soin pour votre bien-être.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CATALOGUE -->
    <section id="catalogue" class="section-padding catalogue">
        <div class="container">
            <div class="text-center fade-in-scroll">
                <span class="premium-subtitle">Nos Destinations Phares</span>
                <h2>Circuits Incontournables</h2>
            </div>

            <div class="catalogue-grid">
                <!-- Carte 1 -->
                <div class="trip-card fade-in-scroll">
                    <div class="trip-image">
                        <img src="https://images.unsplash.com/photo-1552552825-950c99732314?q=80&w=2070&auto=format&fit=crop" alt="Sud Madagascar Isalo">
                        <span class="trip-price">Dès 2 500 000 MGA</span>
                    </div>
                    <div class="trip-content">
                        <h3>La Route du Sud (RN7)</h3>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 7-10 Jours</span>
                            <span><i class="fas fa-car-side"></i> 4x4 Inclus</span>
                        </div>
                        <p>De Tana à Tuléar, traversez les hauts plateaux, le parc de l'Isalo et finissez sur les plages d'Ifaty.</p>
                        <a href="#" class="trip-link">Voir le détail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="trip-card fade-in-scroll">
                    <div class="trip-image">
                        <img src="https://images.unsplash.com/photo-1550953760-4914c6762372?q=80&w=2072&auto=format&fit=crop" alt="Lémurien Andasibe">
                        <span class="trip-price">Dès 800 000 MGA</span>
                    </div>
                    <div class="trip-content">
                        <h3>Escapade à l'Est (Andasibe)</h3>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 2-3 Jours</span>
                            <span><i class="fas fa-leaf"></i> Nature</span>
                        </div>
                        <p>Plongez dans la forêt tropicale pour écouter le chant de l'Indri Indri, le plus grand des lémuriens.</p>
                        <a href="#" class="trip-link">Voir le détail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="trip-card fade-in-scroll">
                    <div class="trip-image">
                        <img src="https://images.unsplash.com/photo-1565528292408-e87f17b6dc19?q=80&w=2056&auto=format&fit=crop" alt="Antananarivo Rova">
                        <span class="trip-price">Dès 150 000 MGA</span>
                    </div>
                    <div class="trip-content">
                        <h3>Excursion Tana & Alentours</h3>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 1 Jour</span>
                            <span><i class="fas fa-landmark"></i> Culture</span>
                        </div>
                        <p>Découvrez l'histoire de la capitale, le Rova, le marché artisanal et le Lemurs' Park.</p>
                        <a href="#" class="trip-link">Voir le détail <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#" class="btn btn-secondary">Explorer tout le catalogue</a>
            </div>
        </div>
    </section>

    <!-- A PROPOS -->
    <section id="about" class="section-padding about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-content fade-in-scroll">
                    <span class="premium-subtitle">Qui sommes-nous</span>
                    <h2>58 ème Visiteurs, votre partenaire de confiance</h2>
                    <p style="margin-bottom: 20px;">Une équipe passionnée basée à Tana, dédiée à faire découvrir les trésors cachés de l'île Rouge. Nous croyons que chaque voyage doit être unique, authentique et sans souci.</p>
                    <p style="margin-bottom: 30px;">Nous sommes plus qu'une agence, nous sommes vos artisans du voyage à Madagascar.</p>
                    <a href="#footer" class="btn btn-primary">Nous Contacter</a>
                </div>
                <div class="about-img fade-in-scroll">
                    <img src="https://images.unsplash.com/photo-1605218427368-232159fa65dd?q=80&w=1974&auto=format&fit=crop" alt="Guide Malgache Voyage">
                </div>
            </div>
        </div>
    </section>

    <!-- TÉMOIGNAGES -->
    <section id="testimonials" class="section-padding testimonials">
        <div class="container">
            <div class="fade-in-scroll">
                <span class="premium-subtitle" style="color: rgba(255,255,255,0.7);">Avis Clients</span>
                <h2>Les voyageurs racontent</h2>
                
                <div class="testimonial-card">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="quote">"Un service impeccable, des guides souriants et une organisation au top. J'ai découvert Madagascar dans des conditions de rêve. Je recommande vivement !"</p>
                    <h3>— Marc L.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding faq">
        <div class="container">
            <div class="text-center fade-in-scroll">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-grid fade-in-scroll">
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle" style="color:var(--color-olive); margin-right:10px;"></i>Les circuits sont-ils modulables ?</h4>
                    <p>Oui, absolument. Tous nos circuits sont 100% sur mesure pour s'adapter à vos envies et votre budget.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="far fa-credit-card" style="color:var(--color-olive); margin-right:10px;"></i>Quels moyens de paiement acceptez-vous ?</h4>
                    <p>Nous acceptons les Virements Bancaires, les Espèces (Ariary, Euro, Dollar) ainsi que le Mobile Money (MVola, Orange Money).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img id="footer-logo-img" alt="Logo 58 ème Visiteurs">
                    </div>
                    <p>Votre porte d'entrée vers les merveilles de Madagascar. Authenticité et Sécurité.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Antananarivo, Madagascar</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@58emevisiteurs.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#catalogue">Nos Circuits</a></li>
                        <li><a href="#about">À Propos</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div style="display: flex; gap: 15px; font-size: 1.5rem;">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 58 ème Visiteurs. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // LOGO INTEGRATION REQUIS
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('brand-logo').src = LOGO_URL;
            document.getElementById('footer-logo-img').src = LOGO_URL;
        });

        // NAVBAR SCROLL EFFECT
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // MOBILE MENU
        function toggleMenu() {
            const nav = document.getElementById('nav-links');
            nav.classList.toggle('active');
        }

        // SCROLL ANIMATIONS (INTERSECTION OBSERVER)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-scroll').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>