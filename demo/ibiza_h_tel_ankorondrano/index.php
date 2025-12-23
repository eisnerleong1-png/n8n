<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBIZA Hôtel Ankorondrano | Votre QG Stratégique</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-cream: #FDF3E7;
            --text-blue: #263E84;
            --accent-red: #C3272D;
            --white: #FFFFFF;
            --text-grey: #4A5568;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-soft: 0 10px 40px -10px rgba(38, 62, 132, 0.08);
            --shadow-hover: 0 20px 50px -10px rgba(38, 62, 132, 0.15);
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-cream);
            color: var(--text-blue);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--text-blue);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* --- UTILS --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            transition: var(--transition);
            cursor: pointer;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--accent-red);
            color: var(--white);
            border: 1px solid var(--accent-red);
            box-shadow: 0 4px 15px rgba(195, 39, 45, 0.3);
        }

        .btn-primary:hover {
            background-color: #a81e23;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(195, 39, 45, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--text-blue);
            border: 1px solid var(--text-blue);
        }

        .btn-outline:hover {
            background-color: var(--text-blue);
            color: var(--white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- HEADER --- */
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
            background-color: rgba(253, 243, 231, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le ratio du logo */
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-item {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--accent-red);
            transition: width 0.3s;
        }

        .nav-item:hover::after {
            width: 100%;
        }

        .nav-cta-group {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .phone-cta {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .burger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 6px;
        }

        .burger span {
            width: 30px;
            height: 2px;
            background-color: var(--text-blue);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px; /* Pour compenser le header fixed */
            overflow: hidden;
        }

        .hero-bg-accent {
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background-color: #EFE6D9; /* Légèrement plus foncé que le fond */
            z-index: -1;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content {
            z-index: 10;
        }

        .hero-badge {
            display: inline-block;
            background-color: rgba(38, 62, 132, 0.1);
            color: var(--text-blue);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-grey);
            margin-bottom: 40px;
            max-width: 90%;
        }

        .hero-visuals {
            position: relative;
            height: 600px;
            width: 100%;
        }

        .img-main {
            position: absolute;
            top: 0;
            right: 0;
            width: 85%;
            height: 85%;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--shadow-soft);
            z-index: 1;
        }

        .img-secondary {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 45%;
            height: 40%;
            object-fit: cover;
            border-radius: 12px;
            border: 8px solid var(--bg-cream);
            box-shadow: var(--shadow-hover);
            z-index: 2;
        }

        /* --- FEATURES / SOCIAL PROOF --- */
        .features {
            background-color: var(--white);
            border-radius: 24px;
            margin: -50px auto 0;
            position: relative;
            z-index: 20;
            box-shadow: var(--shadow-soft);
            max-width: 1200px;
            padding: 60px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-item {
            text-align: left;
            padding: 20px;
            border-left: 1px solid rgba(38, 62, 132, 0.1);
            transition: var(--transition);
        }

        .feature-item:hover {
            background-color: #FAFAFA;
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--text-blue);
            margin-bottom: 20px;
            display: block;
        }

        .feature-title {
            font-size: 1.25rem;
            margin-bottom: 12px;
        }

        .feature-desc {
            font-size: 0.95rem;
            color: var(--text-grey);
        }

        /* --- MAP SECTION --- */
        .map-section {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 0;
            overflow: hidden;
            background: var(--white);
        }

        .map-content {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: var(--text-blue);
            color: var(--white);
        }

        .map-content h2 {
            color: var(--white);
            margin-bottom: 24px;
        }

        .map-content p {
            opacity: 0.9;
            margin-bottom: 32px;
        }

        .map-frame {
            height: 100%;
            min-height: 500px;
            width: 100%;
        }

        /* --- ROOMS --- */
        .rooms-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .room-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            border: 1px solid rgba(38, 62, 132, 0.05);
            display: flex;
            flex-direction: column;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .room-image {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }

        .room-details {
            padding: 40px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .room-price {
            color: var(--accent-red);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 16px;
            display: block;
        }

        .room-title {
            font-size: 1.75rem;
            margin-bottom: 16px;
        }

        .room-features {
            margin-bottom: 32px;
            flex-grow: 1;
        }

        .room-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-grey);
            font-size: 0.95rem;
        }

        .room-features li::before {
            content: "✓";
            color: var(--text-blue);
            font-weight: bold;
        }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
            gap: 16px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .g-large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .g-wide {
            grid-column: span 2;
        }

        /* --- FAQ --- */
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: var(--white);
            margin-bottom: 16px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }

        .faq-question {
            padding: 24px;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-blue);
            cursor: pointer;
        }

        .faq-answer {
            padding: 0 24px 24px;
            display: none;
            color: var(--text-grey);
            font-size: 0.95rem;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-icon {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--text-blue);
            color: var(--white);
            padding: 80px 0 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 24px;
            display: block;
        }

        .footer h4 {
            color: var(--white);
            margin-bottom: 24px;
            font-size: 1.2rem;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            transition: 0.3s;
        }

        .footer-links a:hover {
            color: var(--white);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 40px;
            display: flex;
            justify-content: space-between;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }

        /* --- MOBILE STICKY BAR --- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 12px 24px;
            display: none;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 9999;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            .hero-title { font-size: 2.5rem; }
            .rooms-grid { grid-template-columns: 1fr; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            .g-large { grid-column: span 1; grid-row: span 1; }
            .g-wide { grid-column: span 2; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-cta-group .btn { display: none; }
            .burger { display: flex; }
            
            .hero-grid { grid-template-columns: 1fr; padding-top: 40px; }
            .hero-bg-accent { width: 100%; height: 50%; top: auto; bottom: 0; }
            .hero-visuals { height: 400px; margin-top: 40px; }
            
            .features-grid { grid-template-columns: 1fr; }
            .features { padding: 30px; margin-top: 20px; }
            
            .map-section { grid-template-columns: 1fr; }
            .map-content { padding: 40px 24px; }
            
            .gallery-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
            .g-wide, .g-large { grid-column: span 1; }
            
            .footer-grid { grid-template-columns: 1fr; }
            
            .mobile-sticky-bar { display: flex; }
            body { padding-bottom: 70px; } /* Espace pour la barre mobile */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container" id="logo-wrapper">
                <!-- JS Logo Injection -->
            </a>
            
            <ul class="nav-links">
                <li><a href="#hero" class="nav-item">Accueil</a></li>
                <li><a href="#rooms" class="nav-item">Chambres</a></li>
                <li><a href="#location" class="nav-item">Localisation</a></li>
                <li><a href="#footer" class="nav-item">Contact</a></li>
            </ul>

            <div class="nav-cta-group">
                <a href="tel:+261340000000" class="phone-cta">+261 34 XX XXX XX</a>
                <a href="#rooms" class="btn btn-primary">Réserver</a>
                <div class="burger" onclick="toggleMenu()">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <div class="hero-bg-accent"></div>
            <div class="container hero-grid">
                <div class="hero-content fade-in">
                    <span class="hero-badge">Ankorondrano Business District</span>
                    <h1 class="hero-title">Votre QG Stratégique au Cœur d'Antananarivo</h1>
                    <p class="hero-subtitle">Confort & Sécurité à 2 minutes de La City. Wi-Fi Fibre Pro & Parking Sécurisé pour vos missions.</p>
                    <div style="display: flex; gap: 16px;">
                        <a href="#rooms" class="btn btn-primary">Voir les disponibilités</a>
                        <a href="#features" class="btn btn-outline">Découvrir l'hôtel</a>
                    </div>
                </div>
                <div class="hero-visuals fade-in">
                    <!-- Images Unsplash -->
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop" alt="Chambre Business Premium" class="img-main">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Vue Quartier Affaires" class="img-secondary">
                </div>
            </div>
        </section>

        <!-- Preuve Sociale & Localisation -->
        <section id="features" class="container">
            <div class="features fade-in">
                <div class="features-header" style="margin-bottom: 30px; text-align: center;">
                    <h3>Pourquoi les professionnels choisissent IBIZA ?</h3>
                </div>
                <div class="features-grid">
                    <div class="feature-item">
                        <span class="feature-icon">📍</span>
                        <h4 class="feature-title">Emplacement Premium</h4>
                        <p class="feature-desc">Voisin immédiat des centres d'affaires et de La City. Évitez les embouteillages de Tana.</p>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🛡️</span>
                        <h4 class="feature-title">Sécurité Totale</h4>
                        <p class="feature-desc">Gardiennage 24h/24, vidéo-surveillance et accès contrôlé. Dormez l'esprit tranquille.</p>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">💼</span>
                        <h4 class="feature-title">Services Business</h4>
                        <p class="feature-desc">Connexion Fibre Optique haut débit, bureau en chambre et calme absolu.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section id="location" class="map-section section-padding">
            <div class="map-content fade-in">
                <h2>Au cœur de l'action</h2>
                <p>Visualisez votre proximité avec les points clés d'Ankorondrano. Tout est accessible à pied ou en quelques minutes de voiture.</p>
                <ul style="list-style: none; margin-bottom: 24px;">
                    <li style="margin-bottom: 12px;">🚶 <strong>2 min</strong> à pied de La City</li>
                    <li style="margin-bottom: 12px;">🚗 <strong>5 min</strong> de l'Ambassade de France</li>
                    <li>🏢 Zone Leader Price & Centres Commerciaux directs</li>
                </ul>
                <a href="https://maps.google.com" target="_blank" class="btn btn-outline" style="border-color: white; color: white;">Ouvrir dans Google Maps</a>
            </div>
            <div class="map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.254763172087!2d47.52558097598887!3d-18.916825482255734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e59c5d01377%3A0x6296996849405d42!2sAnkorondrano%2C%20Antananarivo!5e0!3m2!1sfr!2smg!4v1709228547000!5m2!1sfr!2smg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!-- Rooms Section -->
        <section id="rooms" class="section-padding container">
            <div class="rooms-header fade-in">
                <h2>Espaces de repos et de travail</h2>
                <p>Des chambres conçues pour la récupération après une journée intense.</p>
            </div>
            <div class="rooms-grid">
                <!-- Carte A -->
                <div class="room-card fade-in">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop" alt="Chambre Business" class="room-image">
                    <div class="room-details">
                        <span class="room-price">Dès 120 000 Ar / nuit</span>
                        <h3 class="room-title">Chambre Standard Business</h3>
                        <ul class="room-features">
                            <li>Lit Queen Size Confort</li>
                            <li>Bureau de travail dédié</li>
                            <li>Douche chaude haute pression</li>
                            <li>TV Canal+ & Fibre</li>
                        </ul>
                        <a href="#" class="btn btn-outline" style="width: 100%;">Choisir cette chambre</a>
                    </div>
                </div>
                <!-- Carte B -->
                <div class="room-card fade-in">
                    <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?q=80&w=1974&auto=format&fit=crop" alt="Suite Executive" class="room-image">
                    <div class="room-details">
                        <span class="room-price">Dès 180 000 Ar / nuit</span>
                        <h3 class="room-title">Suite Exécutive</h3>
                        <ul class="room-features">
                            <li>Espace Salon privatif</li>
                            <li>Lit King Size Premium</li>
                            <li>Vue dégagée sur Tana</li>
                            <li>Minibar & Cafetière</li>
                        </ul>
                        <a href="#" class="btn btn-primary" style="width: 100%;">Réserver la suite</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery" class="section-padding container">
            <div style="margin-bottom: 40px; text-align: center;">
                <h2>L'Expérience IBIZA</h2>
                <p>Nos standards d'hygiène sont stricts pour garantir votre bien-être.</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item g-large fade-in">
                    <img src="https://images.unsplash.com/photo-1584622024886-258ca18b3e8b?q=80&w=2070&auto=format&fit=crop" alt="Salle de bain moderne">
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop" alt="Réception Hall">
                </div>
                <div class="gallery-item fade-in">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop" alt="Détail Literie">
                </div>
                <div class="gallery-item g-wide fade-in">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop" alt="Espace de travail et lobby">
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq" class="section-padding container" style="background-color: #F8F5F2; border-radius: 24px; margin-bottom: 80px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-container">
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        L'hôtel dispose-t-il d'un parking sécurisé ?
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        Oui, un parking privé et sécurisé est disponible gratuitement pour tous nos résidents, gardé 24h/24.
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        Le Wi-Fi est-il suffisant pour les visioconférences ?
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        Absolument. Nous sommes équipés de la fibre optique professionnelle, garantissant un débit stable pour vos réunions Zoom ou Teams.
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        Y a-t-il des restaurants à proximité ?
                        <span class="faq-icon">▼</span>
                    </button>
                    <div class="faq-answer">
                        Vous êtes à 3 minutes à pied de la zone de restauration de La City et du Food Court, offrant un large choix de cuisines.
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <span class="footer-logo">IBIZA Hôtel</span>
                    <p style="opacity: 0.7; max-width: 300px;">
                        L'adresse de référence pour les voyages d'affaires à Ankorondrano. Confort, sécurité et proximité.
                    </p>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul class="footer-links">
                        <li>📍 Ankorondrano, Antananarivo 101</li>
                        <li>📞 +261 34 XX XXX XX</li>
                        <li>📧 contact@ibiza-hotel-tana.com</li>
                        <li>💬 WhatsApp Disponible</li>
                    </ul>
                </div>
                <div>
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="#hero">Accueil</a></li>
                        <li><a href="#rooms">Nos Chambres</a></li>
                        <li><a href="#location">Localisation</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2024 IBIZA Hôtel Ankorondrano. Tous droits réservés.</span>
                <span>Design Premium</span>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <div style="font-weight: bold; color: var(--text-blue);">
            Dès 120 000 Ar
        </div>
        <div style="display: flex; gap: 10px;">
             <a href="tel:+261340000000" class="btn btn-outline" style="padding: 10px 16px;">📞</a>
             <a href="#rooms" class="btn btn-primary" style="padding: 10px 20px;">Réserver</a>
        </div>
    </div>

    <script>
        // --- LOGO CONFIGURATION ---
        const LOGO_URL = "logo.jpg";
        
        // Insert Logo
        const logoWrapper = document.getElementById('logo-wrapper');
        const img = document.createElement('img');
        img.src = LOGO_URL;
        img.alt = "IBIZA Hôtel Logo";
        logoWrapper.appendChild(img);

        // --- INTERACTION LOGIC ---
        
        // Header Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        function toggleMenu() {
            // Simple toggle logic for demo - in production would slide a menu
            alert("Menu mobile ouvert (Fonctionnalité à relier au système de navigation complet)");
        }

        // FAQ Accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Close others
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) otherItem.classList.remove('active');
                });
                item.classList.toggle('active');
            });
        });

        // Scroll Animation (Intersection Observer)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Animate once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

    </script>
</body>
</html>