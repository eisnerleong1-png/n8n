<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Pavé Antaninarenina | Hôtel & Restaurant de Charme</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
        -------------------------------------------------------
        DESIGN SYSTEM & VARIABLES
        -------------------------------------------------------
        */
        :root {
            --primary-color: #562A2B; /* Rouge Bordeaux / Vin - Luxe */
            --accent-color: #9A5C41; /* Terracotta / Cuivre - Action */
            --text-color: #4A4A4A;
            --text-light: #8C8C8C;
            --bg-light: #F9F9F9;
            --white: #FFFFFF;
            --black: #1a1a1a;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        /* 
        -------------------------------------------------------
        RESET & BASE STYLES
        -------------------------------------------------------
        */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--white);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--primary-color);
            font-weight: 700;
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

        /* 
        -------------------------------------------------------
        UTILITIES
        -------------------------------------------------------
        */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--white); }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: var(--white);
            border: 1px solid var(--accent-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--primary-color);
        }

        .btn-outline-dark {
            background-color: transparent;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }

        .btn-outline-dark:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        /* Fade In Animation Classes */
        .fade-in-section {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, visibility;
        }
        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
        }

        /* 
        -------------------------------------------------------
        HEADER
        -------------------------------------------------------
        */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: transparent;
            padding: 20px 0;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            color: var(--white);
            position: relative;
        }

        header.scrolled .nav-links a {
            color: var(--black);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .lang-switch {
            color: var(--white);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
        }
        
        header.scrolled .lang-switch {
            color: var(--black);
        }

        .hamburger {
            display: none;
            color: var(--white);
            font-size: 24px;
            cursor: pointer;
        }
        header.scrolled .hamburger {
            color: var(--black);
        }

        /* 
        -------------------------------------------------------
        HERO SECTION
        -------------------------------------------------------
        */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            overflow: hidden;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(86, 42, 43, 0.85) 0%, rgba(86, 42, 43, 0.4) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            margin-top: -50px; /* Optical adjustment */
        }

        .hero-content h1 {
            font-size: 4rem;
            color: var(--white);
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            font-weight: 300;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* Booking Bar */
        .booking-bar {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translate(-50%, 50%);
            width: 85%;
            max-width: 1000px;
            background: var(--white);
            padding: 20px 40px;
            border-radius: 4px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            z-index: 3;
        }

        .booking-field {
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
            margin-right: 20px;
        }

        .booking-field label {
            font-size: 12px;
            text-transform: uppercase;
            color: var(--text-light);
            font-weight: 600;
        }

        .booking-field input, .booking-field select {
            border: none;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: var(--primary-color);
            background: transparent;
            outline: none;
        }

        .booking-btn {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 15px 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .booking-btn:hover {
            background-color: var(--accent-color);
        }

        /* 
        -------------------------------------------------------
        SOCIAL PROOF
        -------------------------------------------------------
        */
        .social-proof {
            padding-top: 100px; /* Space for booking bar */
            padding-bottom: 60px;
            background-color: var(--bg-light);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .feature-item i {
            font-size: 32px;
            color: var(--accent-color);
            margin-bottom: 15px;
        }

        .feature-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }

        .feature-item p {
            font-size: 14px;
            color: var(--text-light);
        }

        /* 
        -------------------------------------------------------
        ACCOMMODATION
        -------------------------------------------------------
        */
        .accommodation {
            background-color: var(--white);
        }

        .split-layout {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .split-image {
            flex: 1;
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }

        .split-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .split-image:hover img {
            transform: scale(1.05);
        }

        .split-content {
            flex: 1;
        }

        .section-subtitle {
            font-size: 14px;
            text-transform: uppercase;
            color: var(--accent-color);
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
            font-weight: 600;
        }

        .split-content h2 {
            font-size: 36px;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .split-content p {
            color: var(--text-light);
            margin-bottom: 30px;
            font-size: 16px;
        }

        .amenities-list {
            margin-bottom: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .amenities-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: var(--primary-color);
        }

        .amenities-list li i {
            color: var(--accent-color);
        }

        .price-tag {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            color: var(--primary-color);
            margin-bottom: 30px;
            font-style: italic;
        }

        /* 
        -------------------------------------------------------
        DINING
        -------------------------------------------------------
        */
        .dining {
            background-color: var(--bg-light);
        }

        .dining-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 250px 250px;
            gap: 20px;
            margin-top: 50px;
        }

        .dining-item {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }
        
        .dining-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .dining-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .dining-item:hover img {
            transform: scale(1.1);
        }

        .menu-preview {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            text-align: center;
            opacity: 0;
            transition: all 0.3s ease;
            width: 80%;
            pointer-events: none;
        }

        .dining-item:hover .menu-preview {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .dining-text {
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
        }

        /* 
        -------------------------------------------------------
        EVENTS (B2B)
        -------------------------------------------------------
        */
        .events {
            background-color: var(--primary-color);
            color: var(--white);
            position: relative;
        }
        
        .events h2 {
            color: var(--white);
        }

        .events-layout {
            display: flex;
            gap: 60px;
            align-items: center;
        }

        .events-info {
            flex: 1;
        }

        .events-form-container {
            flex: 1;
            background: rgba(255, 255, 255, 0.05);
            padding: 40px;
            border-radius: 4px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .b2b-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .b2b-form input, .b2b-form select {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 10px 0;
            color: var(--white);
            font-family: 'Montserrat', sans-serif;
            outline: none;
        }
        
        .b2b-form input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }
        
        .b2b-form select {
             color: #fff;
        }
        
        .b2b-form select option {
            color: var(--black);
        }

        .b2b-form input:focus {
            border-color: var(--accent-color);
        }

        /* 
        -------------------------------------------------------
        ABOUT & FOOTER
        -------------------------------------------------------
        */
        .about-story {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px auto;
        }

        footer {
            background-color: #1a1a1a;
            color: #8C8C8C;
            padding: 60px 0 30px 0;
            font-size: 14px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .footer-col p {
            margin-bottom: 10px;
        }

        .footer-col a {
            color: #8C8C8C;
        }

        .footer-col a:hover {
            color: var(--accent-color);
        }

        .social-links a {
            font-size: 18px;
            margin-right: 15px;
        }

        .copyright {
            text-align: center;
            font-size: 12px;
        }

        /* 
        -------------------------------------------------------
        MOBILE STICKY BAR
        -------------------------------------------------------
        */
        .mobile-sticky-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 9999;
            padding: 15px 20px;
            justify-content: space-between;
            align-items: center;
        }

        .mobile-price {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--primary-color);
        }

        /* 
        -------------------------------------------------------
        RESPONSIVE DESIGN
        -------------------------------------------------------
        */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 3rem; }
            .split-layout { flex-direction: column; }
            .split-image img { height: 350px; }
            .events-layout { flex-direction: column; }
            .booking-bar {
                position: relative;
                transform: none;
                left: 0;
                width: 100%;
                flex-direction: column;
                gap: 20px;
                margin-top: 40px;
                display: none; /* Hidden on smaller screens for cleaner look, handled by CTA */
            }
            /* Show simplified booking in hero instead */
            .hero-buttons { margin-bottom: 40px; }
            
            .dining-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
            .dining-item.large { grid-column: auto; grid-row: auto; height: 300px; }
            .dining-item { height: 250px; }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-actions .btn { display: none; }
            .hamburger { display: block; }
            
            .hero-content h1 { font-size: 2.2rem; }
            .hero-buttons { flex-direction: column; }
            .hero-buttons .btn { width: 100%; text-align: center; }

            .features-grid { grid-template-columns: 1fr; }
            
            .mobile-sticky-bar { display: flex; }
            footer { padding-bottom: 80px; } /* Space for sticky bar */

            /* Mobile Menu Overlay */
            .mobile-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--white);
                z-index: 1001;
                transition: 0.4s ease;
                padding: 80px 40px;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }
            .mobile-menu.active { right: 0; }
            .mobile-menu ul { display: flex; flex-direction: column; gap: 20px; }
            .mobile-menu a { font-size: 18px; font-weight: 600; color: var(--primary-color); }
            
            .close-menu {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 30px;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo-container" id="logo-container">
                    <!-- Logo inserted via JS -->
                </div>
                
                <ul class="nav-links">
                    <li><a href="#accommodation">Hôtel</a></li>
                    <li><a href="#dining">Restaurant & Salon</a></li>
                    <li><a href="#events">Événements</a></li>
                    <li><a href="#about">Galerie</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>

                <div class="nav-actions">
                    <span class="lang-switch">FR | EN</span>
                    <a href="#" class="btn btn-primary">Réserver</a>
                    <i class="fas fa-bars hamburger" id="menu-toggle"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
        <i class="fas fa-times close-menu" id="close-menu"></i>
        <ul>
            <li><a href="#accommodation">Hôtel</a></li>
            <li><a href="#dining">Restaurant & Salon</a></li>
            <li><a href="#events">Événements</a></li>
            <li><a href="#about">Galerie</a></li>
            <li><a href="#footer">Contact</a></li>
            <li><a href="#" style="color: var(--accent-color);">Réserver Maintenant</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content fade-in-section">
            <h1>L'Art de Recevoir au Cœur d'Antaninarenina</h1>
            <p>Hôtel de Charme & Table Gourmande. L'adresse incontournable pour vos affaires et votre détente à Antananarivo.</p>
            <div class="hero-buttons">
                <a href="#accommodation" class="btn btn-primary" style="background-color: var(--primary-color); border-color: var(--primary-color);">Réserver une Chambre</a>
                <a href="#dining" class="btn btn-secondary">Découvrir le Menu</a>
            </div>
        </div>

        <!-- Desktop Booking Bar -->
        <div class="booking-bar">
            <div class="booking-field">
                <label>Arrivée</label>
                <input type="date">
            </div>
            <div class="booking-field">
                <label>Départ</label>
                <input type="date">
            </div>
            <div class="booking-field">
                <label>Invités</label>
                <select>
                    <option>1 Adulte</option>
                    <option>2 Adultes</option>
                    <option>Famille</option>
                </select>
            </div>
            <button class="booking-btn">Vérifier</button>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof section-padding">
        <div class="container fade-in-section">
            <div class="features-grid">
                <div class="feature-item">
                    <i class="fas fa-wifi"></i>
                    <h3>Wifi Fibre Haut Débit</h3>
                    <p>Connexion stable et ultra-rapide pour vos affaires.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Parking Sécurisé</h3>
                    <p>Gardiennage 24/7 au cœur d'Antaninarenina.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Emplacement Premium</h3>
                    <p>À deux pas des banques et ministères.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation -->
    <section id="accommodation" class="accommodation section-padding">
        <div class="container">
            <div class="split-layout fade-in-section">
                <div class="split-image">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2070&auto=format&fit=crop" alt="Chambre Luxe Le Pavé">
                </div>
                <div class="split-content">
                    <span class="section-subtitle">Votre Nuit, Notre Priorité</span>
                    <h2>Le Confort Calme au Cœur de la Ville</h2>
                    <p>Des chambres spacieuses, insonorisées et climatisées, conçues pour votre repos complet après une journée de travail ou de visite. Profitez d'une atmosphère feutrée et d'un service attentionné.</p>
                    
                    <ul class="amenities-list">
                        <li><i class="fas fa-tv"></i> Smart TV 4K</li>
                        <li><i class="fas fa-concierge-bell"></i> Room Service 24/7</li>
                        <li><i class="fas fa-bed"></i> Literie King Size Premium</li>
                        <li><i class="fas fa-wind"></i> Climatisation</li>
                    </ul>

                    <span class="price-tag">À partir de 180 000 Ar / nuit</span>
                    <a href="#" class="btn btn-primary">Explorer les Chambres</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Dining -->
    <section id="dining" class="dining section-padding">
        <div class="container">
            <div class="text-center dining-text fade-in-section">
                <span class="section-subtitle">Gastronomie</span>
                <h2>Des Saveurs Authentiques & Raffinées</h2>
                <p>Du petit-déjeuner d'affaires au dîner gastronomique. Découvrez nos spécialités locales, notre salon de thé élégant et notre célèbre carte de grillades au feu de bois.</p>
                <div style="margin-top: 30px;">
                    <a href="#" class="btn btn-outline-dark" id="btn-menu">Voir le Menu Digital</a>
                    <a href="#" class="btn btn-primary" style="margin-left: 15px;">Réserver une Table</a>
                </div>
            </div>

            <div class="dining-grid fade-in-section">
                <div class="dining-item large">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=2000&auto=format&fit=crop" alt="Plat Signature">
                    <div class="menu-preview">
                        <h4>Côte de Bœuf Angus</h4>
                        <p>Sauce au poivre vert de Madagascar</p>
                    </div>
                </div>
                <div class="dining-item">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop" alt="Ambiance Restaurant">
                </div>
                <div class="dining-item">
                    <img src="https://images.unsplash.com/photo-1563503144-8d484b9f291e?q=80&w=2070&auto=format&fit=crop" alt="Salon de thé">
                </div>
            </div>
        </div>
    </section>

    <!-- Events (B2B) -->
    <section id="events" class="events section-padding">
        <div class="container">
            <div class="events-layout fade-in-section">
                <div class="events-info">
                    <span class="section-subtitle" style="color: rgba(255,255,255,0.7);">Business & Célébrations</span>
                    <h2>Vos Événements Méritent l'Excellence</h2>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 30px;">De la réunion confidentielle au mariage grandiose. Nos salles modulables accueillent de 20 à 200 personnes avec tout l'équipement technologique nécessaire.</p>
                    <ul class="amenities-list" style="grid-template-columns: 1fr;">
                        <li style="color: #fff;"><i class="fas fa-check" style="color: var(--accent-color);"></i> Salles de conférence équipées</li>
                        <li style="color: #fff;"><i class="fas fa-check" style="color: var(--accent-color);"></i> Service traiteur sur mesure</li>
                        <li style="color: #fff;"><i class="fas fa-check" style="color: var(--accent-color);"></i> Équipe dédiée à votre événement</li>
                    </ul>
                </div>
                <div class="events-form-container">
                    <h3 style="color: #fff; margin-bottom: 20px; font-size: 20px;">Demander un Devis Rapide</h3>
                    <form class="b2b-form">
                        <input type="text" placeholder="Nom Complet">
                        <input type="text" placeholder="Entreprise">
                        <input type="date">
                        <select>
                            <option value="" disabled selected>Type d'événement</option>
                            <option value="seminaire">Séminaire / Réunion</option>
                            <option value="mariage">Mariage / Famille</option>
                            <option value="cocktail">Cocktail</option>
                        </select>
                        <button type="button" class="btn btn-primary" style="width: 100%; border: none;">Recevoir un devis sous 24h</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- About Story -->
    <section id="about" class="section-padding" style="background-color: #fcfcfc;">
        <div class="container fade-in-section">
            <div class="about-story">
                <span class="section-subtitle">Notre Héritage</span>
                <h2>Plus qu'un lieu, une histoire</h2>
                <p style="margin-top: 20px; font-style: italic; color: #666;">
                    "Ancré au cœur d'Antananarivo depuis des années, Le Pavé incarne l'hospitalité malgache authentique mêlée aux standards internationaux de confort. Nous sommes fiers d'être le témoin privilégié de vos réussites professionnelles et de vos plus beaux souvenirs familiaux."
                </p>
                <img src="https://fontmeme.com/permalink/241025/signature-dummy.png" alt="Signature Direction" style="height: 60px; margin: 20px auto 0 auto; opacity: 0.6;">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col" style="flex: 2;">
                    <div class="logo-container-footer" style="margin-bottom: 20px;">
                        <!-- Logo via CSS or simple text for footer -->
                        <h3 style="color: #fff;">LE PAVÉ</h3>
                    </div>
                    <p>Antaninarenina, Antananarivo 101, Madagascar</p>
                    <p><i class="fas fa-phone-alt" style="margin-right: 10px;"></i> +261 20 22 123 45</p>
                    <p><i class="fas fa-envelope" style="margin-right: 10px;"></i> reservation@lepave-tana.com</p>
                </div>
                
                <div class="footer-col" style="flex: 1;">
                    <h4>Navigation</h4>
                    <ul style="display: flex; flex-direction: column; gap: 10px;">
                        <li><a href="#">Chambres</a></li>
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Événements</a></li>
                        <li><a href="#">Carrière</a></li>
                    </ul>
                </div>

                <div class="footer-col" style="flex: 1;">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>Le Pavé Antaninarenina © 2024. Tous droits réservés. Design Premium.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <div class="mobile-info">
            <span style="display: block; font-size: 10px; text-transform: uppercase; color: #888;">À partir de</span>
            <span class="mobile-price">180 000 Ar</span>
        </div>
        <a href="#" class="btn btn-primary" style="padding: 10px 20px; font-size: 12px;">RÉSERVER</a>
    </div>

    <!-- Scripts -->
    <script>
        // --- 1. CONFIGURATION LOGO (MANDATORY) ---
        const LOGO_URL = "logo.jpg";
        
        // Insertion du logo dans le DOM
        const logoContainer = document.getElementById('logo-container');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Le Pavé Logo";
        logoContainer.appendChild(logoImg);

        // --- 2. SCROLL HEADER EFFECT ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. MOBILE MENU TOGGLE ---
        const menuToggle = document.getElementById('menu-toggle');
        const closeMenu = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-menu a');

        function toggleMenu() {
            mobileMenu.classList.toggle('active');
        }

        menuToggle.addEventListener('click', toggleMenu);
        closeMenu.addEventListener('click', toggleMenu);

        // Fermer le menu au clic sur un lien
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
            });
        });

        // --- 4. SCROLL ANIMATIONS (Intersection Observer) ---
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(section => {
            observer.observe(section);
        });

        // --- 5. MICRO-INTERACTION MENU (PAVLOV) ---
        // Juste un petit effet visuel supplémentaire si nécessaire en JS
        // Le CSS gère déjà l'apparition de l'image, mais on peut ajouter un effet sonore ou autre ici.
        // Ici, on garde simple pour la performance.

    </script>
</body>
</html>