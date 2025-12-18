<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier Conseil Groupe | L'Excellence à Antananarivo</title>
    <meta name="description" content="Agence immobilière haut de gamme à Antananarivo. Achat, vente, location et promotion immobilière de standing à Madagascar.">
    
    <!-- Google Fonts: Montserrat & Lato for Premium Feel -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         * Premium, Modern, High-End Real Estate
         */
        :root {
            --primary-red: #E8232D;
            --primary-black: #0a0a0a;
            --secondary-dark: #1f1f1f;
            --text-grey: #666666;
            --off-white: #f9f9f9;
            --white: #ffffff;
            
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Lato', sans-serif;
            
            --spacing-container: 1200px;
            --shadow-card: 0 10px 30px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.12);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* RESET & BASE */
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
            color: var(--primary-black);
            line-height: 1.6;
            background-color: var(--white);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-family: var(--font-heading);
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

        /* UTILITIES */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--white); }
        .text-red { color: var(--primary-red); }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary-red);
            color: var(--white);
            border: 1px solid var(--primary-red);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary-red);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--white);
        }

        .btn-outline:hover {
            background-color: var(--white);
            color: var(--primary-black);
        }

        .btn-white {
            background-color: var(--white);
            color: var(--primary-black);
            border: 1px solid var(--white);
        }

        .btn-white:hover {
            background-color: transparent;
            color: var(--white);
        }

        /* HEADER & NAVBAR */
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
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
            backdrop-filter: blur(10px);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Adjusted height for logo variable */
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-link {
            font-family: var(--font-heading);
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--white);
            letter-spacing: 0.5px;
            position: relative;
        }

        .header.scrolled .nav-link {
            color: var(--primary-black);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-red);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .header.scrolled .mobile-menu-btn {
            color: var(--primary-black);
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1600596542815-2255c3056284?q=80&w=2600&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-content {
            text-align: center;
            color: var(--white);
            max-width: 900px;
            padding: 0 20px;
            margin-top: -50px;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 50px;
            opacity: 0.9;
        }

        /* SEARCH BAR (Floating) */
        .search-bar-wrapper {
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .search-input, .search-select {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 2px;
            font-family: var(--font-body);
            flex: 1;
            min-width: 200px;
            outline: none;
        }

        .search-input:focus, .search-select:focus {
            border-color: var(--primary-red);
        }

        .search-btn {
            padding: 15px 30px;
            background: var(--primary-red);
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 2px;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .search-btn:hover {
            background: #c0151f;
        }

        /* TRUST BAR */
        .trust-bar {
            background-color: var(--off-white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .trust-item i {
            font-size: 1.5rem;
            color: var(--primary-black);
        }

        .trust-item span {
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* EXCLUSIVE SELECTION */
        .section-header {
            margin-bottom: 60px;
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--primary-red);
            margin: 15px auto 0;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .property-card {
            background: var(--white);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
            group: hover;
        }

        .property-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-image-wrapper {
            position: relative;
            height: 280px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .property-card:hover .card-image {
            transform: scale(1.05);
        }

        .card-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--primary-red);
            color: var(--white);
            padding: 5px 12px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
        }

        .card-content {
            padding: 30px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-location {
            color: var(--text-grey);
            font-size: 0.9rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-features {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            color: var(--text-grey);
            font-size: 0.9rem;
        }

        .card-price {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-red);
        }

        .view-all-link {
            display: block;
            text-align: center;
            margin-top: 50px;
            color: var(--primary-black);
            font-weight: 600;
            text-decoration: underline;
            text-underline-offset: 5px;
            font-size: 1.1rem;
        }

        .view-all-link:hover {
            color: var(--primary-red);
        }

        /* SERVICES SECTION */
        .services-section {
            background-color: var(--off-white);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            padding: 40px;
            border-top: 3px solid transparent;
            transition: var(--transition);
        }

        .service-card:hover {
            border-top: 3px solid var(--primary-red);
            box-shadow: var(--shadow-card);
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: var(--primary-black);
        }

        .service-title {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .service-desc {
            color: var(--text-grey);
            font-size: 0.95rem;
        }

        /* PROMOTION FOCUS (Dark) */
        .promo-section {
            background-color: #787878;
            color: var(--white);
            position: relative;
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2670&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .promo-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .promo-title {
            font-size: 3rem;
            margin-bottom: 25px;
        }

        .promo-text {
            font-size: 1.1rem;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* ABOUT SECTION */
        .about-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            border-radius: 4px;
            box-shadow: 20px 20px 0 var(--off-white);
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .about-text p {
            color: var(--text-grey);
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        /* FOOTER */
        .footer {
            background-color: var(--primary-black);
            color: #ccc;
            padding-top: 80px;
            padding-bottom: 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-logo-text {
            color: var(--white);
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .footer h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .footer ul li {
            margin-bottom: 12px;
        }

        .footer ul li a:hover {
            color: var(--primary-red);
            padding-left: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
            font-size: 0.85rem;
        }

        /* STICKY MOBILE CTA */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            display: none;
            z-index: 999;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .mobile-cta-btn {
            flex: 1;
            text-align: center;
            padding: 12px;
            background: #25D366; /* WhatsApp Green */
            color: white;
            font-weight: 700;
            border-radius: 4px;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .mobile-cta-btn.secondary {
            background: var(--primary-red);
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .header { padding: 15px 0; background: rgba(0,0,0,0.8); }
            .nav-links { display: none; position: absolute; top: 100%; left: 0; width: 100%; background: var(--white); flex-direction: column; padding: 20px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
            .nav-links.active { display: flex; }
            .nav-link { color: var(--primary-black); width: 100%; padding: 10px 0; border-bottom: 1px solid #eee; }
            .mobile-menu-btn { display: block; }
            .hero-title { font-size: 2.5rem; }
            .about-layout { grid-template-columns: 1fr; }
            .about-image { margin-bottom: 40px; box-shadow: none; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .mobile-sticky-cta { display: flex; }
            .hero-content { margin-top: 0; }
            .search-bar-wrapper { flex-direction: column; padding: 15px; }
            .search-input, .search-select, .search-btn { width: 100%; }
            .trust-item { width: 100%; justify-content: center; }
            .footer-grid { grid-template-columns: 1fr; }
            body { padding-bottom: 60px; /* Space for sticky CTA */ }
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <header class="header" id="header">
        <div class="container nav-container">
            <!-- LOGO PLACEHOLDER VIA JS -->
            <a href="#" id="logo-container">
                <!-- Image Injected via JS -->
            </a>

            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#" class="nav-link">Acheter</a></li>
                    <li><a href="#" class="nav-link">Louer</a></li>
                    <li><a href="#" class="nav-link">Vendre</a></li>
                    <li><a href="#" class="nav-link">Promotion Immobilière</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                    <li><a href="#" class="btn btn-primary">Estimer mon bien</a></li>
                </ul>
            </nav>

            <div class="mobile-menu-btn" id="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">L'Excellence Immobilière à Antananarivo : Investissez en Toute Confiance</h1>
            <p class="hero-subtitle">Votre partenaire expert pour l'achat, la vente et la promotion de biens d'exception à Madagascar.</p>
            
            <!-- SEARCH WIDGET -->
            <div class="search-bar-wrapper">
                <select class="search-select">
                    <option value="" disabled selected>Type de bien</option>
                    <option value="villa">Villa</option>
                    <option value="appartement">Appartement</option>
                    <option value="terrain">Terrain</option>
                    <option value="bureau">Bureau</option>
                </select>
                <input type="text" class="search-input" placeholder="Localisation (ex: Ivandry, Ambatobe)">
                <input type="number" class="search-input" placeholder="Budget Max (Ar)">
                <button class="search-btn"><i class="fas fa-search"></i> Rechercher</button>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-award"></i>
                    <span>Expertise locale reconnue</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-file-contract"></i>
                    <span>Accompagnement Juridique Complet</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Biens vérifiés et titrés</span>
                </div>
            </div>
        </div>
    </section>

    <!-- EXCLUSIVE LISTINGS -->
    <section class="section-padding" id="listings">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Nos Mandats Exclusifs</h2>
                <p style="color: var(--text-grey); max-width: 600px; margin: 0 auto;">Une sélection rigoureuse de propriétés de prestige sur les secteurs les plus prisés.</p>
            </div>

            <div class="cards-grid">
                <!-- CARD 1 -->
                <div class="property-card">
                    <div class="card-image-wrapper">
                        <span class="card-badge">Exclusivité</span>
                        <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2670&auto=format&fit=crop" alt="Villa Ivandry" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Villa d'Architecte - Ivandry</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ivandry, Antananarivo</div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 4 Ch.</span>
                            <span><i class="fas fa-ruler-combined"></i> 300m²</span>
                            <span><i class="fas fa-water"></i> Piscine</span>
                        </div>
                        <div class="card-price">2 800 000 000 Ar</div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="property-card">
                    <div class="card-image-wrapper">
                        <span class="card-badge">Nouveauté</span>
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2670&auto=format&fit=crop" alt="Appartement Centre" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Penthouse Vue Panoramique</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ambatobe, Antananarivo</div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 3 Ch.</span>
                            <span><i class="fas fa-ruler-combined"></i> 180m²</span>
                            <span><i class="fas fa-parking"></i> 2 Pkg</span>
                        </div>
                        <div class="card-price">1 200 000 000 Ar</div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="property-card">
                    <div class="card-image-wrapper">
                        <span class="card-badge">Investissement</span>
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2301&auto=format&fit=crop" alt="Bureaux" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Plateau de Bureaux Premium</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ankorondrano, Tana</div>
                        <div class="card-features">
                            <span><i class="fas fa-building"></i> Business</span>
                            <span><i class="fas fa-ruler-combined"></i> 500m²</span>
                            <span><i class="fas fa-shield-alt"></i> Sécurisé</span>
                        </div>
                        <div class="card-price">Nous Consulter</div>
                    </div>
                </div>
            </div>

            <a href="#" class="view-all-link">Voir tous nos biens en vente</a>
        </div>
    </section>

    <!-- SERVICES SECTION -->
    <section class="section-padding services-section" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Un Accompagnement Sur-Mesure</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-handshake service-icon"></i>
                    <h3 class="service-title">Achat & Vente</h3>
                    <p class="service-desc">Sécurisez vos transactions avec notre expertise du marché local et notre réseau exclusif.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-key service-icon"></i>
                    <h3 class="service-title">Gestion Locative</h3>
                    <p class="service-desc">Optimisez votre rentabilité locative sans les contraintes administratives. Nous gérons tout pour vous.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-hard-hat service-icon"></i>
                    <h3 class="service-title">Promotion Immobilière</h3>
                    <p class="service-desc">Découvrez nos programmes neufs aux normes internationales. Investissez dans l'avenir de Tana.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROMOTION FOCUS (Dark Section) -->
    <section class="section-padding promo-section">
        <div class="container">
            <div class="promo-content">
                <h2 class="promo-title">Investir dans le Neuf à Tana</h2>
                <p class="promo-text">Appartements de standing, bureaux et locaux commerciaux. Profitez d'une valorisation garantie et d'une qualité de construction internationale.</p>
                <a href="#" class="btn btn-white">Découvrir nos programmes en cours</a>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="about-layout">
                <div class="about-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2670&auto=format&fit=crop" alt="Equipe Agence" class="about-image">
                </div>
                <div class="about-text">
                    <h2>Plus qu'une agence, votre conseil.</h2>
                    <p>Implanté à Antananarivo, Immobilier Conseil Groupe allie rigueur internationale et parfaite maîtrise du terrain malgache pour concrétiser vos projets de vie et d'investissement.</p>
                    <p>Nous comprenons les défis du marché local. C'est pourquoi nous avons mis en place des processus stricts de vérification juridique et foncière pour garantir la sécurité absolue de votre capital.</p>
                    <a href="#" class="btn btn-primary" style="margin-top: 20px;">Rencontrer notre équipe</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <span class="footer-logo-text">IMMOBILIER CONSEIL</span>
                    <p style="opacity: 0.7; font-size: 0.9rem;">L'immobilier de prestige en toute confiance à Madagascar.</p>
                </div>
                <div>
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Biens à vendre</a></li>
                        <li><a href="#">Biens à louer</a></li>
                        <li><a href="#">Estimation</a></li>
                        <li><a href="#">Programmes neufs</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" style="margin-right:8px; color:var(--primary-red);"></i> Immeuble Prisme, Tana</li>
                        <li><i class="fas fa-phone" style="margin-right:8px; color:var(--primary-red);"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope" style="margin-right:8px; color:var(--primary-red);"></i> contact@immo-conseil.mg</li>
                    </ul>
                </div>
                <div>
                    <h4>Tendances</h4>
                    <ul>
                        <li><a href="#">Agence Immo Tana</a></li>
                        <li><a href="#">Vente Maison Ivandry</a></li>
                        <li><a href="#">Appartement Centre-Ville</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Immobilier Conseil Groupe. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY CTA -->
    <div class="mobile-sticky-cta">
        <a href="https://wa.me/261340000000" class="mobile-cta-btn"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="#contact" class="mobile-cta-btn secondary">Contact</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // INSTRUCTION UTILISATEUR: Remplacez l'URL ci-dessous par le lien de votre logo final (Format PNG Transparent recommandé).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";

        // Logic to inject the logo properly
        document.addEventListener("DOMContentLoaded", () => {
            const logoContainer = document.getElementById('logo-container');
            if(logoContainer) {
                // IMPORTANT: J'ai laissé le code variable exact demandé, mais pour une agence immo, 
                // je suggère fortement de changer le texte "PHO RESTO" dans l'URL ci-dessus par "IMMO+CONSEIL" 
                // ou d'utiliser votre propre image.
                const img = document.createElement('img');
                img.src = LOGO_URL; 
                img.alt = "Immobilier Conseil Groupe Logo";
                img.className = "logo-img";
                logoContainer.appendChild(img);
            }

            // --- 2. STICKY HEADER ---
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // --- 3. MOBILE MENU ---
            const menuBtn = document.getElementById('menu-btn');
            const navLinks = document.getElementById('nav-links');

            menuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                // Change icon based on state
                const icon = menuBtn.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // --- 4. LAZY LOADING (Performance) ---
            // Simple implementation for the demo
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.loading = "lazy";
            });
        });
    </script>
</body>
</html>