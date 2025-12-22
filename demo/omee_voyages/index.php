<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OMEE VOYAGES | Agence de Voyage Sur Mesure Madagascar</title>
    
    <!-- Fonts: Playfair Display (Luxe/Titre) & Lato (Moderne/Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            /* Palette OMEE */
            --primary-orange: #F69F36; /* Orange Latérite */
            --primary-hover: #d68320;
            --secondary-blue: #4FC1DB; /* Bleu Lagon */
            --text-dark: #3C302B; /* Marron Foncé */
            --text-light: #FAFAF5; /* Sable très clair */
            --bg-body: #FAFAF5;
            --bg-white: #FFFFFF;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow-card: 0 15px 40px rgba(60, 48, 43, 0.08);
            --shadow-hover: 0 20px 50px rgba(60, 48, 43, 0.15);
            --container-width: 1200px;
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
            font-family: 'Lato', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.2;
        }

        h1 { font-size: 3.5rem; margin-bottom: 1rem; }
        h2 { font-size: 2.5rem; margin-bottom: 1.5rem; text-align: center; }
        h3 { font-size: 1.5rem; margin-bottom: 1rem; }
        p { font-size: 1.1rem; color: #5a4a42; margin-bottom: 1rem; }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }

        /* Utilitaires */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--text-light); }
        .section-padding { padding: 100px 0; }
        .mb-2 { margin-bottom: 2rem; }

        /* Boutons */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-orange);
            color: white;
            box-shadow: 0 4px 15px rgba(246, 159, 54, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(246, 159, 54, 0.6);
        }

        .btn-ghost {
            background: transparent;
            border: 2px solid var(--text-dark);
            color: var(--text-dark);
        }

        .btn-ghost:hover {
            background: var(--text-dark);
            color: white;
        }

        /* -----------------------------------------------------------
           HEADER & NAV
        ----------------------------------------------------------- */
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Taille ajustée logo */
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            color: var(--text-light); /* Blanc par défaut sur hero */
        }

        header.scrolled .nav-links a {
            color: var(--text-dark); /* Noir au scroll */
        }

        .nav-links a:hover {
            color: var(--primary-orange);
        }

        .burger {
            display: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .burger {
            color: var(--text-dark);
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://images.unsplash.com/photo-1544233726-291778943719?q=80&w=2670&auto=format&fit=crop') no-repeat center center/cover;
            /* Image: Allée des Baobabs au coucher de soleil */
            color: white;
            text-align: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Évite chevauchement header mobile */
        }

        .hero h2 {
            font-family: 'Lato', sans-serif;
            font-size: 1.2rem;
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-bar {
            background: var(--bg-white);
            padding: 40px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.7;
            filter: grayscale(100%);
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--text-dark);
        }
        
        .trust-item i {
            font-size: 1.5rem;
        }

        /* -----------------------------------------------------------
           VALUE PROPOSITION
        ----------------------------------------------------------- */
        .values {
            background-color: var(--bg-body);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .value-card {
            background: var(--bg-white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow-card);
            text-align: left;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--secondary-blue);
            margin-bottom: 20px;
        }

        .value-card h3 {
            font-size: 1.3rem;
        }

        /* -----------------------------------------------------------
           INSPIRATION (CAROUSEL)
        ----------------------------------------------------------- */
        .destinations {
            background-color: var(--bg-white);
            overflow: hidden;
        }

        .carousel-container {
            display: flex;
            overflow-x: auto;
            gap: 30px;
            padding: 20px 5px 60px 5px; /* Padding bottom for scrollbar/shadow */
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }
        
        .carousel-container::-webkit-scrollbar {
            height: 8px;
        }
        .carousel-container::-webkit-scrollbar-thumb {
            background: var(--text-dark);
            border-radius: 4px;
        }

        .trip-card {
            min-width: 350px;
            border-radius: 20px;
            overflow: hidden;
            background: var(--bg-white);
            box-shadow: var(--shadow-card);
            scroll-snap-align: center;
            position: relative;
            transition: var(--transition);
            cursor: pointer;
        }

        .trip-card:hover {
            transform: scale(1.02);
        }

        .trip-image {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .trip-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--bg-white);
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-dark);
        }

        .trip-details {
            padding: 25px;
        }

        .trip-price {
            display: block;
            margin-top: 15px;
            color: var(--primary-orange);
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* -----------------------------------------------------------
           INTERACTIVE MAP (SIMULATION)
        ----------------------------------------------------------- */
        .map-section {
            background-color: #E8F6F8; /* Bleu très clair */
            position: relative;
            overflow: hidden;
        }

        .map-container {
            position: relative;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 20px;
            /* Image de fond abstraite/texturée pour la map */
            background-color: white; 
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-card);
        }
        
        .map-bg {
             /* Using an SVG path or image of Madagascar would be ideal here. 
                Using a high quality map image from Unsplash to represent 'Exploration' */
            width: 100%;
            height: 100%;
            position: absolute;
            background: url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?q=80&w=2650&auto=format&fit=crop') no-repeat center center/cover;
            border-radius: 20px;
            opacity: 0.9;
        }
        
        .map-overlay-text {
            position: relative;
            z-index: 2;
            background: rgba(255,255,255,0.9);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
        }
        
        .map-point {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: var(--primary-orange);
            border: 3px solid white;
            border-radius: 50%;
            cursor: pointer;
            z-index: 5;
            animation: pulse 2s infinite;
        }
        
        /* Simulating locations roughly on the container */
        .point-north { top: 20%; left: 60%; } /* Nosy Be */
        .point-center { top: 50%; left: 55%; } /* Tana */
        .point-south { top: 80%; left: 40%; } /* Isalo */

        .point-tooltip {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--text-dark);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.8rem;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .map-point:hover .point-tooltip {
            opacity: 1;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(246, 159, 54, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(246, 159, 54, 0); }
            100% { box-shadow: 0 0 0 0 rgba(246, 159, 54, 0); }
        }

        /* -----------------------------------------------------------
           ABOUT
        ----------------------------------------------------------- */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            width: 100%;
            border-radius: 20px;
            box-shadow: var(--shadow-card);
        }

        /* -----------------------------------------------------------
           TESTIMONIALS
        ----------------------------------------------------------- */
        .testimonials {
            background-color: var(--bg-white);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testi-card {
            background: #FAFAF5;
            padding: 30px;
            border-radius: 16px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .testi-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .testi-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .stars { color: #FFC107; font-size: 0.8rem; }

        /* -----------------------------------------------------------
           FAQ
        ----------------------------------------------------------- */
        .faq-item {
            background: white;
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .faq-item summary {
            padding: 20px;
            cursor: pointer;
            font-weight: 700;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-item summary::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--primary-orange);
        }

        .faq-item details[open] summary::after {
            content: '-';
        }

        .faq-content {
            padding: 0 20px 20px 20px;
            border-top: 1px solid #eee;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background-color: var(--text-dark);
            color: var(--text-light);
            padding: 80px 0 30px 0;
            text-align: center;
        }

        .footer-content h2 {
            color: white;
            margin-bottom: 1rem;
        }

        .footer-links {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 20px;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        .sticky-whatsapp {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 9999;
            transition: var(--transition);
        }

        .sticky-whatsapp:hover {
            transform: scale(1.1);
            background-color: #1ebc57;
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            h1 { font-size: 2.8rem; }
            .about-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 1.8rem; }
            
            .nav-links {
                position: absolute;
                top: 70px;
                right: 0;
                background: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                transform: translateY(-150%);
                transition: var(--transition);
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            
            .nav-links.active {
                transform: translateY(0);
            }

            .nav-links a {
                color: var(--text-dark);
                padding: 10px 0;
            }

            .burger { display: block; }
            
            .trust-grid { flex-direction: column; gap: 15px; }
            
            .carousel-container { padding-bottom: 20px; }
            .trip-card { min-width: 280px; }
        }
    </style>
</head>
<body>

    <!-- STICKY WHATSAPP -->
    <a href="https://wa.me/" class="sticky-whatsapp" target="_blank" aria-label="Contact WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo-container" id="logo-wrapper">
                <!-- Logo injected via JS -->
            </div>
            
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#destinations">Circuits</a></li>
                    <li><a href="#map">Carte</a></li>
                    <li><a href="#about">L'Agence</a></li>
                    <li><a href="#footer" class="btn btn-primary" style="padding: 10px 20px; color: white;">Contact</a></li>
                </ul>
            </nav>
            
            <div class="burger" id="burger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <h1>L'Authenticité de Madagascar, l'Excellence de l'Organisation</h1>
            <h2>Créez votre voyage sur mesure avec OMEE</h2>
            <p class="text-white" style="font-size: 1.2rem; margin-bottom: 30px;">Sécurité, Confort et Découverte Inoubliable.</p>
            <a href="#footer" class="btn btn-primary">Créer mon voyage sur mesure</a>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar" id="trust">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item"><i class="fas fa-certificate"></i> Ministère du Tourisme</div>
                <div class="trust-item"><i class="fas fa-globe-africa"></i> Office National</div>
                <div class="trust-item"><i class="fas fa-hotel"></i> Luxury Partners</div>
                <div class="trust-item"><i class="fab fa-tripadvisor"></i> Excellent 5/5</div>
            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION -->
    <section class="section-padding values">
        <div class="container">
            <h2>Pourquoi confier votre aventure à OMEE ?</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-map-marked-alt value-icon"></i>
                    <h3>Expertise Locale</h3>
                    <p>Basés à Antananarivo, nous connaissons l'île par cœur. Accédez à des lieux secrets loin des sentiers battus.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-pencil-ruler value-icon"></i>
                    <h3>100% Personnalisable</h3>
                    <p>Pas de circuits figés. Votre rythme, vos envies, votre budget. Nous construisons le voyage autour de vous.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-shield-alt value-icon"></i>
                    <h3>Sérénité Totale</h3>
                    <p>Assistance 24/7, chauffeurs-guides certifiés, véhicules tout confort. Profitez, on s'occupe de tout.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INSPIRATION / DESTINATIONS -->
    <section class="section-padding destinations" id="destinations">
        <div class="container">
            <h2 class="mb-2">Nos plus belles inspirations</h2>
            <div class="carousel-container">
                
                <!-- Carte 1 -->
                <div class="trip-card">
                    <img src="https://images.unsplash.com/photo-1543788304-43282257d07c?q=80&w=2670&auto=format&fit=crop" alt="Isalo" class="trip-image">
                    <span class="trip-tag">Incontournable</span>
                    <div class="trip-details">
                        <h3>La RN7 et le Grand Sud</h3>
                        <p>Des hauts plateaux aux canyons de l'Isalo, la route mythique.</p>
                        <span class="trip-price">À partir de 1 000 € / pers.</span>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="trip-card">
                    <img src="https://images.unsplash.com/photo-1518182170546-0766ce6fec56?q=80&w=2601&auto=format&fit=crop" alt="Tsingy" class="trip-image">
                    <span class="trip-tag">Aventure</span>
                    <div class="trip-details">
                        <h3>Les Tsingy de Bemaraha</h3>
                        <p>Ponts suspendus et cathédrales de calcaire uniques au monde.</p>
                        <span class="trip-price">Sur Devis</span>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="trip-card">
                    <img src="https://images.unsplash.com/photo-1534445867742-43195f401b6c?q=80&w=2564&auto=format&fit=crop" alt="Nosy Be" class="trip-image">
                    <span class="trip-tag">Détente</span>
                    <div class="trip-details">
                        <h3>Croisière à Nosy Be</h3>
                        <p>Plages de sable blanc, tortues marines et parfums d'ylang-ylang.</p>
                        <span class="trip-price">Sur Devis</span>
                    </div>
                </div>

                <!-- Carte 4 (Extra pour scroll) -->
                <div class="trip-card">
                    <img src="https://images.unsplash.com/photo-1565355088924-118855422896?q=80&w=2670&auto=format&fit=crop" alt="Baobab" class="trip-image">
                    <span class="trip-tag">Nature</span>
                    <div class="trip-details">
                        <h3>Allée des Baobabs</h3>
                        <p>Le coucher de soleil le plus iconique de l'Afrique.</p>
                        <span class="trip-price">Sur Devis</span>
                    </div>
                </div>

            </div>
            <div class="text-center" style="margin-top: 30px;">
                <a href="#footer" class="btn btn-ghost">Explorer toutes les destinations</a>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE MAP SECTION -->
    <section class="section-padding map-section" id="map">
        <div class="container text-center">
            <h2>Explorez Madagascar</h2>
            <p>Cliquez sur les points pour découvrir les trésors de l'île.</p>
            
            <div class="map-container">
                <div class="map-bg"></div>
                <!-- Interactive Points -->
                <div class="map-point point-north" title="Nosy Be">
                    <div class="point-tooltip">Nosy Be : Plages & Plongée</div>
                </div>
                <div class="map-point point-center" title="Antananarivo">
                    <div class="point-tooltip">Antananarivo : Histoire & Culture</div>
                </div>
                <div class="map-point point-south" title="Isalo">
                    <div class="point-tooltip">Isalo : Canyons & Rando</div>
                </div>
                
                <div class="map-overlay-text">
                    <h3>Une île continent</h3>
                    <p style="margin:0; font-size: 0.9rem;">587 000 km² de biodiversité unique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h4 style="color: var(--primary-orange); text-transform: uppercase; letter-spacing: 2px;">À Propos</h4>
                    <h2>Plus qu'une agence, vos partenaires de voyage</h2>
                    <p>Depuis Antananarivo, nous tissons des liens uniques avec les communautés locales pour vous offrir un Madagascar vrai, respectueux et profondément humain.</p>
                    <p>Notre mission ? Transformer vos peurs logistiques en souvenirs impérissables grâce à une organisation millimétrée.</p>
                    <a href="#footer" class="btn btn-ghost" style="margin-top: 20px;">Rencontrer l'équipe</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1492138623748-a1b1f72287e7?q=80&w=2574&auto=format&fit=crop" alt="Guide OMEE" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="section-padding testimonials" id="testimonials">
        <div class="container">
            <h2>Ils ont voyagé avec nous</h2>
            <div class="testimonials-grid">
                
                <div class="testi-card">
                    <div class="testi-header">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Marie" class="testi-avatar">
                        <div>
                            <h4>Marie & Jean</h4>
                            <span style="font-size: 0.8rem; opacity: 0.7;">Lyon, France</span>
                        </div>
                    </div>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p style="margin-top: 10px; font-size: 0.95rem;">"Une organisation sans faille. Le chauffeur était une perle. Merci OMEE pour ce rêve devenu réalité !"</p>
                </div>

                <div class="testi-card">
                    <div class="testi-header">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Thomas" class="testi-avatar">
                        <div>
                            <h4>Thomas L.</h4>
                            <span style="font-size: 0.8rem; opacity: 0.7;">Genève, Suisse</span>
                        </div>
                    </div>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p style="margin-top: 10px; font-size: 0.95rem;">"J'avais peur de l'insécurité, mais je ne me suis jamais senti aussi bien encadré. Les Tsingy sont incroyables."</p>
                </div>

                <div class="testi-card">
                    <div class="testi-header">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sophie" class="testi-avatar">
                        <div>
                            <h4>Sophie D.</h4>
                            <span style="font-size: 0.8rem; opacity: 0.7;">Bruxelles, Belgique</span>
                        </div>
                    </div>
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p style="margin-top: 10px; font-size: 0.95rem;">"Le voyage sur mesure parfait. OMEE a su écouter nos envies de nature et de confort."</p>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding" style="background: white;">
        <div class="container" style="max-width: 800px;">
            <h2 class="mb-2">Questions Fréquentes</h2>
            
            <div class="faq-item">
                <details>
                    <summary>Est-ce dangereux de voyager à Madagascar ?</summary>
                    <div class="faq-content">
                        <p>Madagascar est un pays magnifique. Comme partout, il y a des règles à suivre. Avec OMEE, vous êtes accompagnés par des chauffeurs-guides expérimentés qui connaissent les zones sûres et les protocoles pour un voyage en toute sérénité.</p>
                    </div>
                </details>
            </div>

            <div class="faq-item">
                <details>
                    <summary>Comment se passe le paiement ?</summary>
                    <div class="faq-content">
                        <p>Nous utilisons des solutions de paiement bancaire international sécurisées. Un acompte valide la réservation, le solde est réglé avant l'arrivée.</p>
                    </div>
                </details>
            </div>

            <div class="faq-item">
                <details>
                    <summary>Proposez-vous des vols internationaux ?</summary>
                    <div class="faq-content">
                        <p>Nous nous concentrons sur l'organisation terrestre (hébergements, transports, activités) pour garantir l'excellence. Nous pouvons cependant vous conseiller sur les meilleures compagnies aériennes.</p>
                    </div>
                </details>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container footer-content">
            <h2>Prêt pour le départ ?</h2>
            <p style="color: #ccc; max-width: 600px; margin: 0 auto 30px auto;">Demandez votre devis gratuit aujourd'hui. Nos experts locaux vous répondent sous 24h avec une proposition sur mesure.</p>
            
            <a href="#" class="btn btn-primary" onclick="alert('Formulaire de devis (Simulation)')">Demander un devis gratuit</a>

            <div class="footer-links">
                <a href="#">Mentions Légales</a>
                <a href="#">CGV</a>
                <a href="#">Politique de Confidentialité</a>
            </div>
            
            <div style="margin-top: 30px; font-size: 0.8rem; color: #777;">
                &copy; 2024 OMEE VOYAGES - Antananarivo, Madagascar.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // INSTRUCTION OBLIGATOIRE : LOGO
            const LOGO_URL = "logo.jpg";
            
            // Injection du logo
            const logoWrapper = document.getElementById('logo-wrapper');
            const img = document.createElement('img');
            img.src = LOGO_URL;
            img.alt = "OMEE Voyages Logo";
            logoWrapper.appendChild(img);

            // Gestion Header Scroll (Transparent -> Blanc)
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Menu Mobile
            const burger = document.getElementById('burger');
            const navLinks = document.getElementById('nav-links');
            
            burger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Fermer menu au clic sur un lien
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                });
            });

            // Animation simple au scroll (Fade In)
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = "1";
                        entry.target.style.transform = "translateY(0)";
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const animElements = document.querySelectorAll('.value-card, .trip-card, .testi-card');
            animElements.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateY(20px)";
                el.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out";
                observer.observe(el);
            });
        });
    </script>
</body>
</html>