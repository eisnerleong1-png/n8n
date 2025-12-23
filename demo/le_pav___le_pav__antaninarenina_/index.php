<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Pavé | Hôtel, Restaurant & Événements - Antaninarenina</title>
    <meta name="description" content="Découvrez Le Pavé à Antaninarenina : Hôtel de charme, restaurant gastronomique et salles de réception pour vos événements professionnels et privés.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #582A2C; /* Rouge Bordeaux Profond */
            --secondary: #996F58; /* Terre de Sienne/Doré mat */
            --neutral: #8C8D8F; /* Gris Souris */
            --light-bg: #FAFAFA;
            --white: #FFFFFF;
            --dark: #1A1A1A;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
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
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--primary);
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
            object-fit: cover;
        }

        /* UTILITIES */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            transition: var(--transition);
            cursor: pointer;
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: #3d1c1e;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--white);
        }

        .btn-secondary:hover {
            background-color: #7a5845;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .subtitle {
            color: var(--secondary);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.95); /* Leger background au depart pour lisibilité */
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        header.scrolled {
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo.jpg */
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--dark);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--secondary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            margin-top: 0; /* Important pour que l'image passe sous le header */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--white);
            max-width: 800px;
            padding: 0 20px;
            /* Security margin for mobile header overlap protection */
            padding-top: 80px; 
        }

        .hero h1 {
            color: var(--white);
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 25px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        /* SOCIAL PROOF */
        .social-proof {
            padding: 40px 0;
            background-color: var(--light-bg);
            border-bottom: 1px solid #eee;
        }

        .proof-text {
            text-align: center;
            color: var(--neutral);
            margin-bottom: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logos-grid i {
            font-size: 2rem;
            color: var(--neutral);
        }

        /* RESTAURANT SECTION */
        .restaurant {
            background-color: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .restaurant-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        .resto-img-large {
            grid-column: 1 / 2;
            grid-row: 1 / 3;
            height: 100%;
            border-radius: 4px;
            overflow: hidden;
        }

        .resto-img-small {
            height: 300px;
            border-radius: 4px;
            overflow: hidden;
        }

        .resto-img-large img, .resto-img-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .resto-img-large:hover img, .resto-img-small:hover img {
            transform: scale(1.05);
        }

        .menu-actions {
            background: var(--light-bg);
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #eee;
        }

        .menu-actions p {
            margin-bottom: 25px;
            color: var(--neutral);
            font-style: italic;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* ACCOMMODATION SECTION */
        .accommodation {
            background-color: var(--light-bg);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: var(--transition);
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .room-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .room-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .room-card:hover .room-image img {
            transform: scale(1.1);
        }

        .room-details {
            padding: 30px;
        }

        .room-details h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .room-features {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.85rem;
            color: var(--neutral);
        }

        .room-features span i {
            color: var(--secondary);
            margin-right: 5px;
        }

        .room-price {
            display: block;
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* EVENTS SECTION */
        .events {
            background-color: var(--white);
        }

        .event-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .event-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .event-table th, .event-table td {
            text-align: left;
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .event-table th {
            color: var(--primary);
            font-family: var(--font-heading);
            font-size: 1.1rem;
        }

        .event-image {
            position: relative;
        }

        .event-image::after {
            content: '';
            position: absolute;
            top: 20px;
            right: -20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--secondary);
            z-index: -1;
        }

        /* ABOUT SECTION */
        .about {
            background-color: #F5F5F5;
            text-align: center;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .about p {
            font-size: 1.1rem;
            color: var(--dark);
            opacity: 0.8;
            margin-bottom: 20px;
        }

        /* FOOTER */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 80px 0 100px; /* Extra bottom padding for mobile sticky */
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 15px;
            color: #ccc;
            font-size: 0.95rem;
        }

        .footer-col ul li i {
            color: var(--secondary);
            margin-right: 10px;
            width: 20px;
        }

        .map-container iframe {
            width: 100%;
            height: 200px;
            border: none;
            filter: grayscale(100%) invert(92%) contrast(83%);
            border-radius: 4px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--secondary);
        }

        /* MOBILE STICKY FOOTER */
        .mobile-sticky-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 9999;
            display: none; /* Hidden on desktop */
            padding: 10px 20px;
            gap: 15px;
        }

        .mobile-sticky-footer .btn {
            flex: 1;
            text-align: center;
            padding: 12px;
            font-size: 0.8rem;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .restaurant-grid { grid-template-columns: 1fr; }
            .resto-img-large { grid-row: auto; height: 300px; }
            .event-layout { grid-template-columns: 1fr; gap: 40px; }
            .event-layout { display: flex; flex-direction: column-reverse; }
            .event-image::after { display: none; }
        }

        @media (max-width: 768px) {
            .nav-links, .header-cta { display: none; }
            .mobile-toggle { display: block; }
            
            .hero h1 { font-size: 2.2rem; }
            .section-header h2 { font-size: 2rem; }
            
            .mobile-sticky-footer { display: flex; }
            
            /* Mobile Menu Styles */
            .nav-mobile-active {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100vh;
                background: var(--white);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 30px;
                z-index: 999;
            }
            .nav-mobile-active a { font-size: 1.5rem; color: var(--dark); font-family: var(--font-heading); }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container" id="logo-wrapper">
                <!-- Logo injected via JS -->
            </a>

            <nav class="nav-links">
                <a href="#hotel">Hôtel</a>
                <a href="#restaurant">Restaurant</a>
                <a href="#events">Événements</a>
                <a href="#about">L'Esprit Le Pavé</a>
            </nav>

            <div class="header-cta">
                <a href="#contact" class="btn btn-primary">Réserver</a>
            </div>

            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- MOBILE MENU OVERLAY -->
    <div id="mobile-menu" style="display: none;">
        <!-- Populated via JS -->
    </div>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="hero-content" data-aos="fade-up">
            <span class="subtitle" style="color: #fff; opacity: 0.9;">Bienvenue à Antaninarenina</span>
            <h1>L'Art de Recevoir au Cœur de Tana :<br>Hôtel, Restaurant & Événements</h1>
            <p>Vivez l'expérience d'un service haut de gamme dans le quartier des affaires.</p>
            <a href="#restaurant" class="btn btn-primary" style="background-color: var(--secondary);">Voir les Menus & Tarifs</a>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container">
            <p class="proof-text">Ils nous font confiance pour leurs séjours et séminaires</p>
            <div class="logos-grid">
                <!-- Logos simulés par des icônes pour la démo, remplacer par des images clients -->
                <i class="fas fa-landmark" title="Banques"></i>
                <i class="fas fa-building" title="Corporates"></i>
                <i class="fas fa-plane" title="Compagnies Aériennes"></i>
                <i class="fas fa-globe" title="ONG Internationales"></i>
                <i class="fas fa-star" title="Ambassades"></i>
            </div>
        </div>
    </section>

    <!-- RESTAURANT SECTION -->
    <section id="restaurant" class="section-padding restaurant">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="subtitle">Plaisirs Gourmands</span>
                <h2>Une gastronomie raffinée pour vos pauses</h2>
                <div style="width: 60px; height: 3px; background: var(--primary); margin: 20px auto;"></div>
            </div>

            <div class="restaurant-grid">
                <div class="resto-img-large" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop" alt="Plat signature gastronomique">
                </div>
                <div class="resto-img-small" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?q=80&w=2028&auto=format&fit=crop" alt="Salon de thé et pâtisseries">
                </div>
                <div class="resto-img-small" data-aos="fade-left" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop" alt="Ambiance restaurant">
                </div>
            </div>

            <div class="menu-actions" data-aos="zoom-in">
                <h3>Nos Cartes</h3>
                <p>Consultez nos cartes mises à jour en temps réel.</p>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary"><i class="fas fa-file-pdf"></i> Menu Restaurant</a>
                    <a href="#" class="btn btn-outline"><i class="fas fa-coffee"></i> Carte Salon de Thé</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ACCOMMODATION SECTION -->
    <section id="hotel" class="section-padding accommodation">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="subtitle">Hébergement</span>
                <h2>Séjournez au calme, au centre de Tana</h2>
            </div>

            <div class="cards-grid">
                <!-- Card 1 -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop" alt="Chambre Standard">
                    </div>
                    <div class="room-details">
                        <h3>Standard</h3>
                        <div class="room-features">
                            <span><i class="fas fa-wifi"></i> Wifi HD</span>
                            <span><i class="fas fa-coffee"></i> Petit-déj</span>
                        </div>
                        <span class="room-price">À partir de 120 000 MGA / nuit</span>
                        <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Voir disponibilités</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-f33efe80a713?q=80&w=2074&auto=format&fit=crop" alt="Chambre Supérieure">
                    </div>
                    <div class="room-details">
                        <h3>Supérieure</h3>
                        <div class="room-features">
                            <span><i class="fas fa-wifi"></i> Wifi HD</span>
                            <span><i class="fas fa-tv"></i> Smart TV</span>
                        </div>
                        <span class="room-price">À partir de 180 000 MGA / nuit</span>
                        <a href="#" class="btn btn-outline" style="width: 100%; text-align: center;">Voir disponibilités</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=2000&auto=format&fit=crop" alt="Suite Prestige">
                    </div>
                    <div class="room-details">
                        <h3>Suite</h3>
                        <div class="room-features">
                            <span><i class="fas fa-couch"></i> Salon</span>
                            <span><i class="fas fa-bath"></i> Baignoire</span>
                        </div>
                        <span class="room-price">À partir de 250 000 MGA / nuit</span>
                        <a href="#" class="btn btn-primary" style="width: 100%; text-align: center;">Réserver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENTS SECTION -->
    <section id="events" class="section-padding events">
        <div class="container">
            <div class="event-layout">
                <div class="event-content" data-aos="fade-right">
                    <span class="subtitle">B2B & Célébrations</span>
                    <h2 style="margin-bottom: 30px;">Vos événements professionnels et privés sur-mesure</h2>
                    
                    <table class="event-table">
                        <tr>
                            <th>Espace</th>
                            <th>Capacité</th>
                            <th>Inclus</th>
                        </tr>
                        <tr>
                            <td>Salle Conseil</td>
                            <td>10-20 pers</td>
                            <td>Projecteur, Wifi</td>
                        </tr>
                        <tr>
                            <td>Salle Conférence</td>
                            <td>50-80 pers</td>
                            <td>Sonorisation, Paperboard</td>
                        </tr>
                        <tr>
                            <td>Grand Hall</td>
                            <td>200+ pers</td>
                            <td>Banquet, Scène</td>
                        </tr>
                    </table>

                    <a href="#" class="btn btn-secondary">Demander un Devis Express</a>
                </div>
                <div class="event-image" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop" alt="Salle de conférence" style="border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section-padding about">
        <div class="container about-content" data-aos="fade-up">
            <h2>L'Esprit Le Pavé</h2>
            <div style="width: 40px; height: 2px; background: var(--secondary); margin: 20px auto;"></div>
            <p>
                Niché au cœur d'Antaninarenina, le quartier historique et d'affaires, Le Pavé incarne l'alliance parfaite entre l'hospitalité malgache traditionnelle et les standards internationaux de confort. 
            </p>
            <p>
                Que vous soyez en voyage d'affaires ou en quête d'une escapade urbaine, nous transformons chaque instant en une expérience privilégiée.
            </p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1 -->
                <div class="footer-col">
                    <h4>Le Pavé Antaninarenina</h4>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.227494799074!2d47.5255!3d-18.9105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU0JzM3LjgiUyA0N8KwMzEnMzEuOCJF!5e0!3m2!1sfr!2smg!4v1620000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="footer-col">
                    <h4>Horaires</h4>
                    <ul>
                        <li><i class="far fa-clock"></i> Réception Hôtel : 24/7</li>
                        <li><i class="fas fa-utensils"></i> Restaurant : 11h00 - 23h00</li>
                        <li><i class="fas fa-coffee"></i> Salon de thé : 07h00 - 18h00</li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Antaninarenina, Antananarivo 101</li>
                        <li><a href="tel:+261202200000"><i class="fas fa-phone-alt"></i> +261 20 22 000 00</a></li>
                        <li><a href="mailto:contact@lepave-tana.com"><i class="fas fa-envelope"></i> contact@lepave-tana.com</a></li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 60px; color: #666; font-size: 0.8rem; border-top: 1px solid #333; padding-top: 20px;">
                &copy; 2024 Le Pavé Antaninarenina. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY -->
    <div class="mobile-sticky-footer">
        <a href="tel:+261202200000" class="btn btn-primary"><i class="fas fa-phone"></i> Appeler</a>
        <a href="#contact" class="btn btn-outline"><i class="fas fa-map-marker-alt"></i> Itinéraire</a>
    </div>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // 1. GESTION DU LOGO (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        
        // Injection du logo
        const logoWrapper = document.getElementById('logo-wrapper');
        const img = document.createElement('img');
        img.src = LOGO_URL;
        img.alt = "Le Pavé Logo";
        logoWrapper.appendChild(img);

        // 2. INITIALISATION ANIMATIONS
        AOS.init({
            duration: 800,
            offset: 100,
            once: true
        });

        // 3. STICKY HEADER
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 4. MOBILE MENU
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        let isMenuOpen = false;

        // Créer le contenu du menu mobile
        const navLinksMobile = `
            <div class="nav-mobile-active">
                <div style="position:absolute; top: 20px; right: 20px; font-size: 2rem; cursor:pointer;" onclick="toggleMenu()">&times;</div>
                <a href="#hotel" onclick="toggleMenu()">Hôtel</a>
                <a href="#restaurant" onclick="toggleMenu()">Restaurant</a>
                <a href="#events" onclick="toggleMenu()">Événements</a>
                <a href="#contact" onclick="toggleMenu()">Contact</a>
            </div>
        `;

        mobileMenu.innerHTML = navLinksMobile;

        window.toggleMenu = function() {
            isMenuOpen = !isMenuOpen;
            if(isMenuOpen) {
                mobileMenu.style.display = 'block';
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        };

        mobileToggle.addEventListener('click', toggleMenu);

    </script>
</body>
</html>