<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softwell Formation | Leader de la Formation Continue à Madagascar</title>
    <meta name="description" content="Formation professionnelle à Antananarivo. Langues, Management, Vente. Transformez le potentiel de vos équipes avec Softwell.">
    
    <!-- Google Fonts: Montserrat (Titres) & Inter (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --primary: #9A8926;       /* Olive Gold - Accent & CTA */
            --primary-hover: #7d6f1f;
            --secondary: #D6CA7E;     /* Beige Sable - Support */
            --bg-light: #F9F9F9;
            --text-dark: #0f0f0f;     /* Noir profond */
            --text-grey: #4a4a4a;
            --white: #FFFFFF;
            --black: #000000;
            
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Inter', sans-serif;
            
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 30px rgba(0,0,0,0.08);
            --shadow-lg: 0 20px 40px rgba(0,0,0,0.12);
            
            --radius: 4px; /* Coins légèrement arrondis pour un look pro */
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            color: var(--text-grey);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
            font-size: 16px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            color: var(--text-dark);
            font-weight: 700;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* -----------------------------------------------------------
           UTILITIES & LAYOUT
        ----------------------------------------------------------- */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        /* Soulignement élégant partiel */
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary);
        }

        .text-gold { color: var(--primary); }
        .text-white { color: var(--white); }

        /* Boutons Premium */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-family: var(--font-heading);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            border-radius: var(--radius);
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 1px solid var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(154, 137, 38, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--secondary);
        }

        .btn-outline:hover {
            background-color: var(--secondary);
            color: var(--text-dark);
            transform: translateY(-2px);
        }
        
        .btn-full {
            width: 100%;
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
            background: transparent;
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: var(--shadow-sm);
        }

        .header.scrolled .nav-link {
            color: var(--text-dark);
        }
        
        .header.scrolled #header-logo-img {
             /* Filtre pour rendre le logo compatible si nécessaire, mais ici on garde l'image */
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 40px; /* Taille contrôlée du logo */
            width: auto;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .nav-link {
            font-family: var(--font-heading);
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--white);
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }
        
        /* Burger Menu (Hidden Desktop) */
        .burger {
            display: none;
            cursor: pointer;
            color: var(--white);
            font-size: 1.5rem;
        }
        
        .header.scrolled .burger {
            color: var(--text-dark);
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop'); /* Unsplash: Modern Meeting */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.5) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin-top: 60px; /* Éviter le chevauchement avec le header */
        }

        .hero h1 {
            font-size: 3.5rem;
            color: var(--white);
            margin-bottom: 20px;
            letter-spacing: -1px;
            animation: fadeUp 0.8s ease-out;
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            font-weight: 300;
            max-width: 650px;
            animation: fadeUp 1s ease-out;
        }

        .hero-cta-group {
            display: flex;
            gap: 20px;
            animation: fadeUp 1.2s ease-out;
        }

        /* -----------------------------------------------------------
           PREUVE SOCIALE
        ----------------------------------------------------------- */
        .social-proof {
            padding: 40px 0;
            background-color: rgba(214, 202, 126, 0.1); /* Beige 10% */
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .proof-title {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--text-grey);
            margin-bottom: 20px;
        }

        .logo-strip {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }

        .logo-item {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 1.5rem;
            color: #888;
            /* Simulation de logos avec du texte stylisé pour l'exercice, 
               en réalité ce seraient des <img> grayscale */
        }

        /* -----------------------------------------------------------
           CATÉGORIES (SERVICES)
        ----------------------------------------------------------- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            padding: 40px 30px;
            border: 1px solid #eee;
            border-radius: var(--radius);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .service-card:hover {
            background-color: #f7f5e8; /* Très léger beige */
            border-color: var(--secondary);
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 25px;
        }

        .service-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .service-card p {
            font-size: 0.95rem;
            color: var(--text-grey);
            margin-bottom: 25px;
            flex-grow: 1;
        }

        .card-link {
            font-weight: 600;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }
        
        .card-link i {
            transition: transform 0.3s;
        }

        .service-card:hover .card-link i {
            transform: translateX(5px);
        }

        /* -----------------------------------------------------------
           PROMESSE DE VALEUR
        ----------------------------------------------------------- */
        .value-prop {
            background-color: var(--bg-light);
        }

        .value-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .value-image {
            position: relative;
        }

        .value-image img {
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
        }
        
        /* Élément décoratif carré */
        .value-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100px;
            height: 100px;
            background-color: var(--secondary);
            z-index: -1;
            opacity: 0.5;
        }

        .value-content h2 {
            font-size: 2.5rem;
            margin-bottom: 25px;
        }

        .feature-list {
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .check-icon {
            color: var(--primary);
            margin-right: 15px;
            font-size: 1.2rem;
            margin-top: 3px;
        }

        /* -----------------------------------------------------------
           PROGRAMMES PHARES
        ----------------------------------------------------------- */
        .program-block {
            background: var(--white);
            border-bottom: 1px solid #eee;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }
        
        .program-block:first-child { border-top: 1px solid #eee; }

        .program-block:hover {
            background-color: #FAFAFA;
            border-left: 4px solid var(--primary);
            padding-left: 26px; /* Compensate border */
        }

        .prog-info h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
        }
        
        .prog-meta {
            font-size: 0.9rem;
            color: #777;
            display: flex;
            gap: 20px;
        }
        
        .prog-meta span { display: flex; align-items: center; gap: 6px; }

        .prog-price {
            text-align: right;
            min-width: 200px;
        }

        .price-tag {
            display: block;
            font-weight: 700;
            color: var(--primary);
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .price-sub {
            display: block;
            font-size: 0.8rem;
            color: #999;
        }
        
        .prog-action {
            margin-left: 30px;
        }
        
        .btn-small {
            padding: 10px 20px;
            font-size: 0.75rem;
            background-color: transparent;
            border: 1px solid #ddd;
            color: var(--text-dark);
        }
        
        .btn-small:hover {
            background-color: var(--text-dark);
            color: var(--white);
            border-color: var(--text-dark);
        }

        /* -----------------------------------------------------------
           TÉMOIGNAGES
        ----------------------------------------------------------- */
        .testimonials {
            background-color: var(--black);
            color: var(--white);
            padding: 120px 0;
        }

        .testimonials h2 { color: var(--white); }

        .testi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .testi-card {
            background: rgba(255,255,255,0.05);
            padding: 40px;
            border-radius: var(--radius);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .quote-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .quote-text {
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 30px;
            color: rgba(255,255,255,0.9);
        }

        .author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary);
        }

        .author-info h4 {
            color: var(--white);
            font-size: 1rem;
            margin-bottom: 2px;
        }

        .author-info span {
            color: var(--secondary);
            font-size: 0.85rem;
        }

        /* -----------------------------------------------------------
           LEAD GEN / CONTACT
        ----------------------------------------------------------- */
        .lead-gen {
            background: linear-gradient(to right, #f8f9fa 50%, #fff 50%);
        }

        .lead-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            box-shadow: var(--shadow-lg);
            border-radius: var(--radius);
            overflow: hidden;
            background: white;
        }

        .lead-text {
            padding: 60px;
            background-color: var(--white);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .lead-form-wrapper {
            padding: 60px;
            background-color: #f4f4f4;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .form-input, .form-select {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: var(--radius);
            font-family: var(--font-body);
            transition: var(--transition);
            background-color: var(--white);
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(154, 137, 38, 0.1);
        }

        .reassurance {
            font-size: 0.8rem;
            color: #888;
            margin-top: 15px;
            text-align: center;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        .footer {
            background-color: #1a1a1a;
            color: #ccc;
            padding: 80px 0 30px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
            border-bottom: 1px solid #333;
            padding-bottom: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-link:hover {
            background: var(--primary);
            color: var(--white);
        }

        .copyright {
            text-align: center;
            color: #666;
        }

        /* -----------------------------------------------------------
           MOBILE & RESPONSIVE
        ----------------------------------------------------------- */
        .mobile-sticky-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 2000;
            justify-content: space-between;
            gap: 10px;
        }

        @media (max-width: 992px) {
            .hero h1 { font-size: 2.5rem; }
            .nav-menu { display: none; } /* Pour cet exercice, pas de menu burger JS complexe, on simplifie */
            .burger { display: block; }
            
            .nav-menu.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                padding: 20px;
                box-shadow: var(--shadow-lg);
            }
            .nav-menu.active .nav-link { color: var(--text-dark); }
            
            .value-container, .testi-grid, .lead-container, .program-block {
                grid-template-columns: 1fr;
                flex-direction: column;
                text-align: center;
            }
            
            .program-block { gap: 20px; align-items: center; }
            .prog-meta { justify-content: center; }
            .prog-price { text-align: center; margin-top: 10px; }
            .prog-action { margin-left: 0; width: 100%; }
            .btn-small { width: 100%; display: block; text-align: center; }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .value-image { order: -1; margin-bottom: 30px; }
            .lead-gen { background: #f4f4f4; }
        }

        @media (max-width: 768px) {
            .hero { text-align: center; justify-content: center; }
            .hero-content { margin-top: 80px; }
            .hero-cta-group { justify-content: center; flex-direction: column; }
            
            .section-title { font-size: 2rem; }
            
            .mobile-sticky-bar { display: flex; }
            body { padding-bottom: 70px; } /* Espace pour la barre mobile */
            
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .social-links { justify-content: center; }
        }

        /* Animations */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
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
<body>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container nav-container">
            <div class="logo-wrapper">
                <a href="#"><img id="main-logo" src="" alt="Softwell Formation Logo"></a>
            </div>
            
            <nav>
                <div class="burger" id="burger">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#services" class="nav-link">Nos Formations</a></li>
                    <li><a href="#value" class="nav-link">Solutions Entreprises</a></li>
                    <li><a href="#testimonials" class="nav-link">Témoignages</a></li>
                    <li><a href="#contact" class="btn btn-primary">Demander un Devis</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Transformez le Potentiel de <br><span class="text-gold">Vos Équipes à Madagascar</span></h1>
            <p>Le partenaire de référence pour la formation continue à Antananarivo : Langues, Management, Leadership et Vente. Des programmes certifiants adaptés aux réalités du marché local.</p>
            <div class="hero-cta-group">
                <a href="#services" class="btn btn-primary">Explorer le Catalogue</a>
                <a href="#contact" class="btn btn-outline">Parler à un conseiller</a>
            </div>
        </div>
    </section>

    <!-- Preuve Sociale -->
    <div class="social-proof">
        <div class="container">
            <p class="proof-title">Ils font grandir leurs talents avec nous</p>
            <div class="logo-strip">
                <!-- Logos textuels stylisés pour l'exercice -->
                <span class="logo-item">TELMA</span>
                <span class="logo-item">AXIAN</span>
                <span class="logo-item">RAVINALA AIRPORTS</span>
                <span class="logo-item">STAR</span>
                <span class="logo-item">BMOI</span>
            </div>
        </div>
    </div>

    <!-- Services / Catégories -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Nos Pôles d'Expertise</h2>
                <p>Des programmes conçus pour répondre aux défis stratégiques des entreprises à Madagascar.</p>
            </div>

            <div class="services-grid">
                <!-- Carte 1 -->
                <div class="service-card reveal">
                    <i class="fas fa-comments service-icon"></i>
                    <h3>Langues & Communication</h3>
                    <p>Anglais des affaires, Français professionnel, Techniques de communication orale pour cadres.</p>
                    <a href="#" class="card-link">Voir le programme <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Carte 2 -->
                <div class="service-card reveal">
                    <i class="fas fa-chart-line service-icon"></i>
                    <h3>Management & Leadership</h3>
                    <p>Gestion d'équipe, Prise de décision stratégique, Leadership situationnel.</p>
                    <a href="#" class="card-link">Voir le programme <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Carte 3 -->
                <div class="service-card reveal">
                    <i class="fas fa-bullseye service-icon"></i>
                    <h3>Vente & Marketing</h3>
                    <p>Négociation commerciale, Stratégie digitale, Relation client et fidélisation.</p>
                    <a href="#" class="card-link">Voir le programme <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Carte 4 -->
                <div class="service-card reveal">
                    <i class="fas fa-folder-open service-icon"></i>
                    <h3>Administration & RH</h3>
                    <p>Gestion administrative, Secrétariat de direction, Gestion des compétences.</p>
                    <a href="#" class="card-link">Voir le programme <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Promesse de Valeur -->
    <section id="value" class="section value-prop">
        <div class="container value-container">
            <div class="value-image reveal">
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop" alt="Formation Softwell">
            </div>
            <div class="value-content reveal">
                <h2>Une pédagogie axée sur le <span class="text-gold">résultat immédiat</span></h2>
                <p>Nous ne délivrons pas seulement de la théorie. Nous forgeons des compétences directement applicables dès le retour en entreprise.</p>
                
                <ul class="feature-list">
                    <li class="feature-item">
                        <i class="fas fa-check-circle check-icon"></i>
                        <div>
                            <strong>Experts Certifiés</strong>
                            <p>Formateurs locaux et internationaux avec expérience terrain.</p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check-circle check-icon"></i>
                        <div>
                            <strong>Contexte Local</strong>
                            <p>Études de cas adaptées au marché économique Malagasy.</p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <i class="fas fa-check-circle check-icon"></i>
                        <div>
                            <strong>Flexibilité Totale</strong>
                            <p>Formation en Intra (vos locaux) ou Inter (notre centre).</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Programmes Phares -->
    <section class="section">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title">Formations à la Une</h2>
            </div>
            
            <div class="programs-list reveal">
                <!-- Programme 1 -->
                <div class="program-block">
                    <div class="prog-info">
                        <h3>Leadership Situationnel</h3>
                        <div class="prog-meta">
                            <span><i class="far fa-clock"></i> 3 Jours</span>
                            <span><i class="far fa-user"></i> Managers</span>
                        </div>
                    </div>
                    <div class="prog-price">
                        <span class="price-tag">450 000 Ar <small>/ pers</small></span>
                        <span class="price-sub">Session Inter-entreprises</span>
                    </div>
                    <div class="prog-action">
                        <button class="btn btn-small" onclick="downloadSyllabus()">Télécharger le syllabus</button>
                    </div>
                </div>

                <!-- Programme 2 -->
                <div class="program-block">
                    <div class="prog-info">
                        <h3>Techniques de Vente B2B</h3>
                        <div class="prog-meta">
                            <span><i class="far fa-clock"></i> 2 Jours</span>
                            <span><i class="far fa-user"></i> Commerciaux</span>
                        </div>
                    </div>
                    <div class="prog-price">
                        <span class="price-tag">Sur Devis</span>
                        <span class="price-sub">Session Intra-entreprise</span>
                    </div>
                    <div class="prog-action">
                        <button class="btn btn-small" onclick="downloadSyllabus()">Télécharger le syllabus</button>
                    </div>
                </div>

                <!-- Programme 3 -->
                <div class="program-block">
                    <div class="prog-info">
                        <h3>Excel Avancé pour la Finance</h3>
                        <div class="prog-meta">
                            <span><i class="far fa-clock"></i> 4 Jours</span>
                            <span><i class="far fa-user"></i> Comptables & DAF</span>
                        </div>
                    </div>
                    <div class="prog-price">
                        <span class="price-tag">380 000 Ar <small>/ pers</small></span>
                        <span class="price-sub">Session Inter-entreprises</span>
                    </div>
                    <div class="prog-action">
                        <button class="btn btn-small" onclick="downloadSyllabus()">Télécharger le syllabus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-white">L'avis des DRH</h2>
            </div>
            <div class="testi-grid reveal">
                <div class="testi-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="quote-text">"Softwell a su adapter son module de vente à nos produits spécifiques. Une hausse de 15% de conversion observée dans les 3 mois suivant la formation."</p>
                    <div class="author">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=100&auto=format&fit=crop" alt="DRH" class="author-img">
                        <div class="author-info">
                            <h4>Sarah R.</h4>
                            <span>DRH, Groupe Industriel</span>
                        </div>
                    </div>
                </div>
                <div class="testi-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p class="quote-text">"La qualité des intervenants est impressionnante. C'est rare de trouver une telle expertise pédagogique combinée à une vraie connaissance du terrain à Tana."</p>
                    <div class="author">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=100&auto=format&fit=crop" alt="Manager" class="author-img">
                        <div class="author-info">
                            <h4>Andry L.</h4>
                            <span>Directeur Commercial</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Gen / Formulaire -->
    <section id="contact" class="section lead-gen">
        <div class="container">
            <div class="lead-container reveal">
                <div class="lead-text">
                    <h2>Prêt à investir dans votre <span class="text-gold">capital humain ?</span></h2>
                    <p style="margin: 20px 0;">Nos conseillers pédagogiques sont à votre disposition pour établir un plan de formation sur-mesure.</p>
                    <ul style="margin-bottom: 20px;">
                        <li style="margin-bottom:10px;"><i class="fas fa-phone-alt text-gold" style="margin-right:10px;"></i> +261 20 22 000 00</li>
                        <li><i class="fas fa-envelope text-gold" style="margin-right:10px;"></i> contact@softwell.mg</li>
                    </ul>
                </div>
                <div class="lead-form-wrapper">
                    <form>
                        <div class="form-group">
                            <label class="form-label">Nom de l'entreprise</label>
                            <input type="text" class="form-input" placeholder="Ex: Axian Group">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nombre de collaborateurs à former</label>
                            <select class="form-select">
                                <option>1 à 5 personnes</option>
                                <option>5 à 20 personnes</option>
                                <option>Plus de 20 personnes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email professionnel</label>
                            <input type="email" class="form-input" placeholder="email@entreprise.mg">
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Recevoir mon devis sous 24h</button>
                        <p class="reassurance"><i class="fas fa-lock"></i> Audit gratuit & Sans engagement</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Softwell Formation</h4>
                    <p style="margin-bottom: 20px;">Le levier de performance des entreprises malagasy par l'excellence pédagogique.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Formations</h4>
                    <ul class="footer-links">
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Vente & Négo</a></li>
                        <li><a href="#">Langues</a></li>
                        <li><a href="#">Informatique</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Entreprise</h4>
                    <ul class="footer-links">
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Nos Formateurs</a></li>
                        <li><a href="#">Références</a></li>
                        <li><a href="#">Recrutement</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-links">
                        <li>Quartier d'affaires, Ankorondrano</li>
                        <li>Antananarivo 101</li>
                        <li>+261 34 00 000 00</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Softwell Formation. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <a href="tel:+261340000000" class="btn btn-outline" style="border-color:#333; color:#333; flex:1;">Appeler</a>
        <a href="#contact" class="btn btn-primary" style="flex:1;">Devis Rapide</a>
    </div>

    <script>
        // LOGO INTEGRATION - IMPERATIVE
        const LOGO_URL = "logo.jpg";
        document.getElementById('main-logo').src = LOGO_URL;

        // Sticky Header Logic
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                // Change logo style or text color if needed for contrast
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const burger = document.getElementById('burger');
        const navMenu = document.getElementById('nav-menu');

        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            // Toggle icon styling or overlay if needed
        });

        // Intersection Observer for Animations (Reveal on Scroll)
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            threshold: 0.15
        });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });

        // Micro-Interaction: Download Syllabus
        function downloadSyllabus() {
            const email = prompt("Entrez votre email pro pour recevoir le PDF immédiatement :");
            if(email && email.includes('@')) {
                alert("Merci ! Le syllabus a été envoyé à " + email + ". Redirection vers nos conseillers...");
                document.getElementById('contact').scrollIntoView({behavior: 'smooth'});
            }
        }
    </script>
</body>
</html>