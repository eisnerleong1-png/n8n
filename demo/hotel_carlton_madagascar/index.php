<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel Carlton - L'Icône du Luxe à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        /* 
        ========================================
        DESIGN SYSTEM & RESET
        ========================================
        */
        :root {
            --color-white: #FFFFFF;
            --color-dark: #292929;
            --color-gold: #CDB579;
            --color-gold-hover: #bfa35f;
            --color-gray-light: #f4f4f4;
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Montserrat', sans-serif;
            --transition-smooth: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --spacing-section: 120px;
            --spacing-container: 5%;
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
            font-family: var(--font-sans);
            color: var(--color-dark);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            font-weight: 700;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition-smooth);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* UTILS */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 var(--spacing-container);
        }

        .text-gold { color: var(--color-gold); }
        .text-center { text-align: center; }
        .bg-dark { background-color: var(--color-dark); color: var(--color-white); }
        
        .section-padding {
            padding: var(--spacing-section) 0;
        }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-family: var(--font-sans);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border: none;
            transition: var(--transition-smooth);
        }

        .btn-primary {
            background-color: var(--color-gold);
            color: var(--color-dark);
        }

        /* Shimmer Effect */
        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: 0.5s;
        }

        .btn-primary:hover::after {
            left: 100%;
        }

        .btn-primary:hover {
            background-color: var(--color-gold-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(205, 181, 121, 0.3);
        }

        .btn-text {
            color: var(--color-dark);
            border-bottom: 1px solid var(--color-gold);
            padding-bottom: 2px;
            font-weight: 500;
        }
        
        .btn-text:hover {
            color: var(--color-gold);
        }

        /* 
        ========================================
        HEADER
        ========================================
        */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition-smooth);
            padding: 20px 0;
        }

        .header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Taille ajustée */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-link {
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            color: var(--color-white); /* White on Hero */
            letter-spacing: 0.5px;
        }

        .header.scrolled .nav-link {
            color: var(--color-dark);
        }

        .nav-link:hover {
            color: var(--color-gold);
        }

        .lang-selector {
            font-size: 0.9rem;
            color: var(--color-white);
            margin-right: 20px;
            cursor: pointer;
        }

        .header.scrolled .lang-selector {
            color: var(--color-dark);
        }

        .mobile-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .header.scrolled .mobile-toggle {
            color: var(--color-dark);
        }

        /* 
        ========================================
        HERO SECTION
        ========================================
        */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Background Image with Zoom Animation */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            animation: slowZoom 20s infinite alternate;
            z-index: -2;
        }

        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.7) 100%);
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: var(--color-white);
            max-width: 900px;
            padding: 0 20px;
            margin-top: -80px; /* Offset for visual balance */
            opacity: 0;
            animation: fadeUp 1s ease-out forwards 0.5s;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 40px;
            text-shadow: 0 1px 5px rgba(0,0,0,0.3);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* BOOKING ENGINE */
        .booking-engine {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--color-white);
            padding: 20px 30px;
            border-radius: 4px; /* Minimal radius */
            display: flex;
            gap: 20px;
            align-items: flex-end;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 1100px;
            z-index: 10;
        }

        .booking-group {
            flex: 1;
        }

        .booking-group label {
            display: block;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #888;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .booking-group input, .booking-group select {
            width: 100%;
            border: none;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            font-family: var(--font-serif);
            font-size: 1.1rem;
            color: var(--color-dark);
            background: transparent;
            outline: none;
        }

        .booking-group input:focus {
            border-color: var(--color-gold);
        }

        .booking-btn {
            background-color: var(--color-gold);
            color: var(--color-dark);
            border: none;
            padding: 15px 30px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: var(--transition-smooth);
            height: 100%;
        }

        .booking-btn:hover {
            background-color: var(--color-gold-hover);
        }

        /* 
        ========================================
        SOCIAL PROOF
        ========================================
        */
        .social-proof {
            background-color: var(--color-dark);
            padding: 30px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .proof-logos {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
        }

        .proof-item {
            color: #fff;
            font-family: var(--font-serif);
            font-style: italic;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* 
        ========================================
        ABOUT SECTION
        ========================================
        */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 30px;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .about-images {
            position: relative;
        }

        .img-main {
            width: 85%;
            aspect-ratio: 4/5;
            object-fit: cover;
        }

        .img-detail {
            position: absolute;
            bottom: -50px;
            right: 0;
            width: 50%;
            aspect-ratio: 1/1;
            border: 10px solid var(--color-white);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* 
        ========================================
        ROOMS SECTION
        ========================================
        */
        .rooms-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .rooms-header h2 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .subtitle {
            color: var(--color-gold);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .room-card {
            background: var(--color-white);
            transition: var(--transition-smooth);
            cursor: pointer;
        }

        .room-card:hover {
            transform: translateY(-10px);
        }

        .room-image {
            overflow: hidden;
            aspect-ratio: 3/2;
            margin-bottom: 25px;
        }

        .room-image img {
            transition: var(--transition-smooth);
            width: 100%;
            height: 100%;
        }

        .room-card:hover .room-image img {
            transform: scale(1.05);
        }

        .room-details {
            padding: 0 10px;
        }

        .room-details h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .room-price {
            display: block;
            font-family: var(--font-sans);
            color: #666;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .room-price strong {
            color: var(--color-gold);
            font-size: 1.1rem;
        }

        /* 
        ========================================
        SERVICES (CHECKERBOARD)
        ========================================
        */
        .service-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        .service-image {
            position: relative;
            overflow: hidden;
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
        }

        .service-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 100px;
            background-color: #fafafa;
        }

        .service-content h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .service-content p {
            color: #666;
            margin-bottom: 30px;
            max-width: 450px;
        }

        /* 
        ========================================
        REASSURANCE
        ========================================
        */
        .reassurance {
            background-color: var(--color-white);
            border-top: 1px solid #eee;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 50px;
            text-align: center;
        }

        .feature-item i {
            font-size: 2rem;
            color: var(--color-gold);
            margin-bottom: 20px;
            display: block;
        }
        
        .feature-icon {
            font-size: 2rem;
            color: var(--color-gold);
            margin-bottom: 20px;
            display: inline-block;
        }

        .feature-item h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .feature-item p {
            color: #777;
            font-size: 0.95rem;
        }

        /* 
        ========================================
        FOOTER
        ========================================
        */
        footer {
            background-color: var(--color-dark);
            color: var(--color-white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1.5fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-col h5 {
            color: var(--color-gold);
            font-family: var(--font-sans);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }

        .footer-logo-area img {
            width: 150px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #aaa;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--color-gold);
            padding-left: 5px;
        }

        .newsletter-form {
            display: flex;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .newsletter-form input {
            background: none;
            border: none;
            color: #fff;
            padding: 15px 0;
            width: 100%;
            outline: none;
        }

        .newsletter-form button {
            background: none;
            border: none;
            color: var(--color-gold);
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            color: #666;
            font-size: 0.8rem;
        }

        .socials span {
            margin-left: 20px;
            color: var(--color-gold);
            cursor: pointer;
        }

        /* 
        ========================================
        MOBILE STICKY BTN
        ========================================
        */
        .mobile-sticky-btn {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-gold);
            color: var(--color-dark);
            text-align: center;
            padding: 15px;
            font-weight: 700;
            text-transform: uppercase;
            z-index: 9999;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
        }

        /* 
        ========================================
        RESPONSIVE
        ========================================
        */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 3rem; }
            .about-grid { grid-template-columns: 1fr; gap: 40px; }
            .img-detail { width: 40%; bottom: -30px; }
            .service-row { grid-template-columns: 1fr; min-height: auto; }
            .service-row:nth-child(even) .service-content { order: 2; } 
            .service-image { height: 400px; }
            .booking-engine {
                width: 95%;
                padding: 15px;
                flex-wrap: wrap;
                gap: 15px;
            }
            .booking-group { min-width: 45%; }
            .booking-btn { width: 100%; margin-top: 10px; }
        }

        @media (max-width: 768px) {
            .nav-links, .lang-selector, .desktop-cta { display: none; }
            .mobile-toggle { display: block; }
            
            .hero h1 { font-size: 2.5rem; line-height: 1.2; }
            .hero-content { margin-top: 0; }
            
            .booking-engine {
                position: relative;
                bottom: auto;
                left: auto;
                transform: none;
                flex-direction: column;
                margin: -50px auto 50px; /* Overlap hero */
                align-items: stretch;
            }
            
            .proof-logos { gap: 30px; flex-direction: column; text-align: center; }
            
            .about-text h2, .rooms-header h2, .service-content h3 { font-size: 2rem; }
            .service-content { padding: 50px 20px; }
            
            .features-grid { grid-template-columns: 1fr; }
            
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .newsletter-form { justify-content: center; }
            .copyright { flex-direction: column; gap: 20px; text-align: center; }
            .socials span { margin: 0 10px; }

            .mobile-sticky-btn { display: block; }
            footer { padding-bottom: 80px; /* Space for sticky btn */ }
        }
    </style>
</head>
<body>

    <!-- MOBILE STICKY BUTTON -->
    <a href="#" class="mobile-sticky-btn">Réserver maintenant</a>

    <!-- HEADER -->
    <header class="header" id="main-header">
        <div class="container nav-container">
            <div class="logo">
                <a href="#"><img id="logo-img" src="" alt="Hôtel Carlton Logo"></a>
            </div>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#rooms" class="nav-link">Suites</a></li>
                    <li><a href="#services" class="nav-link">Gastronomie</a></li>
                    <li><a href="#events" class="nav-link">Événements</a></li>
                    <li><a href="#offers" class="nav-link">Offres</a></li>
                </ul>
            </nav>

            <div style="display: flex; align-items: center;">
                <span class="lang-selector">FR / EN</span>
                <a href="#" class="btn btn-primary desktop-cta">Réserver</a>
                <div class="mobile-toggle">☰</div>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Icône du Luxe au Cœur d'Antananarivo.</h1>
            <p>Vivez l'excellence d'un service 5 étoiles où l'histoire de Madagascar rencontre le confort moderne.</p>
        </div>
        
        <!-- BOOKING ENGINE (Desktop position via CSS, Mobile handled in media queries) -->
        <div class="booking-engine">
            <div class="booking-group">
                <label>Arrivée</label>
                <input type="date" value="2023-11-01">
            </div>
            <div class="booking-group">
                <label>Départ</label>
                <input type="date" value="2023-11-05">
            </div>
            <div class="booking-group">
                <label>Voyageurs</label>
                <select>
                    <option>2 Adultes</option>
                    <option>1 Adulte</option>
                    <option>Famille</option>
                </select>
            </div>
            <button class="booking-btn">Vérifier la disponibilité</button>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container">
            <div class="proof-logos">
                <div class="proof-item">★ TripAdvisor Travelers' Choice</div>
                <div class="proof-item">♛ World Luxury Hotel Awards</div>
                <div class="proof-item">✈ Air France Partner</div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <span class="subtitle">Notre Héritage</span>
                    <h2>Plus qu'un Hôtel,<br>Une Institution.</h2>
                    <p>Depuis des décennies, nous définissons l'hospitalité malgache. Le Carlton n'est pas seulement un lieu de séjour, c'est le point de rencontre de l'élite internationale et locale, rénové pour offrir une expérience sans compromis.</p>
                    <a href="#" class="btn-text">Découvrir notre histoire</a>
                </div>
                <div class="about-images">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1974&auto=format&fit=crop" alt="Lobby Luxe" class="img-main">
                    <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?q=80&w=2070&auto=format&fit=crop" alt="Détail Vin" class="img-detail">
                </div>
            </div>
        </div>
    </section>

    <!-- ROOMS SECTION -->
    <section class="section-padding bg-light" id="rooms" style="background-color: #fafafa;">
        <div class="container">
            <div class="rooms-header">
                <span class="subtitle">Séjourner</span>
                <h2>Sanctuaires de Sérénité</h2>
            </div>
            
            <div class="rooms-grid">
                <!-- Room 1 -->
                <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop" alt="Chambre Premium">
                    </div>
                    <div class="room-details">
                        <h3>Chambre Premium</h3>
                        <p class="room-price">Élégance et vue lac - <strong>750 000 MGA / nuit</strong></p>
                        <a href="#" class="btn-text">Voir les détails</a>
                    </div>
                </div>

                <!-- Room 2 -->
                <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2074&auto=format&fit=crop" alt="Suite Executive">
                    </div>
                    <div class="room-details">
                        <h3>Suite Exécutive</h3>
                        <p class="room-price">L'espace de travail ultime - <strong>1 200 000 MGA / nuit</strong></p>
                        <a href="#" class="btn-text">Voir les détails</a>
                    </div>
                </div>

                <!-- Room 3 -->
                <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=2070&auto=format&fit=crop" alt="Suite Royale">
                    </div>
                    <div class="room-details">
                        <h3>Suite Royale</h3>
                        <p class="room-price">Le sommet du prestige - <strong>Sur demande</strong></p>
                        <a href="#" class="btn-text">Voir les détails</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 60px;">
                <a href="#" class="btn-text">Explorer toutes nos suites</a>
            </div>
        </div>
    </section>

    <!-- SERVICES (CHECKERBOARD) -->
    <section id="services">
        <!-- Dining -->
        <div class="service-row">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop" alt="Gastronomie">
            </div>
            <div class="service-content">
                <span class="subtitle">Gastronomie</span>
                <h3>Voyage Culinaire</h3>
                <p>Nos chefs subliment les produits locaux de Madagascar avec des techniques internationales. Une expérience gustative inoubliable avec vue panoramique.</p>
                <a href="#" class="btn-text">Réserver une table</a>
            </div>
        </div>

        <!-- Events -->
        <div class="service-row">
            <div class="service-content" style="background-color: #fff;">
                <span class="subtitle">Events & Conférences</span>
                <h3>Le Hub des Affaires à Tana</h3>
                <p>Des salles de conférence high-tech modulables pour vos conseils d'administration ou galas internationaux. Connectivité fibre optique garantie.</p>
                <a href="#" class="btn-text">Planifier un événement</a>
            </div>
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=2069&auto=format&fit=crop" alt="Conférence">
            </div>
        </div>

        <!-- Wellness -->
        <div class="service-row">
            <div class="service-image">
                <img src="https://images.unsplash.com/photo-1571896349842-68cfd8081682?q=80&w=2070&auto=format&fit=crop" alt="Piscine">
            </div>
            <div class="service-content">
                <span class="subtitle">Bien-être</span>
                <h3>Oasis Urbaine</h3>
                <p>Détendez-vous dans notre piscine extérieure ou profitez d'un soin signature au spa après une journée intense.</p>
                <a href="#" class="btn-text">Voir le menu Spa</a>
            </div>
        </div>
    </section>

    <!-- REASSURANCE -->
    <section class="section-padding reassurance">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <h2>Un Séjour en Toute Sérénité</h2>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <span class="feature-icon">🛡</span>
                    <h4>Sécurité Absolue</h4>
                    <p>Surveillance 24/7, accès contrôlé et coffres-forts privés.</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">📶</span>
                    <h4>Connectivité Pro</h4>
                    <p>Fibre optique haut débit dédiée dans tout l'établissement.</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🚗</span>
                    <h4>Transport VIP</h4>
                    <p>Navette privée aéroport Ivato et service de chauffeur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-logo-area">
                    <img id="footer-logo" src="" alt="Logo Carlton">
                    <p style="color: #999; font-size: 0.9rem;">Rue Pierre Stibbe, Anosy<br>101 Antananarivo, Madagascar</p>
                </div>
                <div class="footer-col">
                    <h5>Hôtel</h5>
                    <ul class="footer-links">
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Presse & Médias</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>L'Excellence Carlton</h5>
                    <p style="color: #999; margin-bottom: 20px; font-size: 0.9rem;">Recevez nos offres exclusives.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Votre email">
                        <button type="submit">S'inscrire</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div>&copy; 2024 Hôtel Carlton Antananarivo. Tous droits réservés.</div>
                <div class="socials">
                    <span>Facebook</span>
                    <span>Instagram</span>
                    <span>LinkedIn</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // CONFIGURATION LOGO
        const LOGO_URL = "logo.jpg";
        
        // Application du logo
        document.getElementById('logo-img').src = LOGO_URL;
        document.getElementById('footer-logo').src = LOGO_URL;

        // Header Scroll Effect
        const header = document.getElementById('main-header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Simple Mobile Menu Toggle Logic
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');

        mobileToggle.addEventListener('click', () => {
            // Dans une vraie implémentation, on ajouterait une classe 'active' pour afficher le menu mobile
            // Ici, c'est conceptuel pour le wireframe
            alert("Menu Mobile ouvert (Prototype)");
        });
    </script>
</body>
</html>