<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventia Mariage | Robes de Mariée & Costumes à Antananarivo</title>
    <meta name="description" content="Découvrez Eventia Mariage à Antananarivo. Robes de mariée, tenues de fiançailles et costumes homme. Luxe, élégance et sur-mesure pour votre grand jour.">
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --bg-color: #F1F3F4;
            --text-color: #7C8D9C;
            --text-dark: #2c3e50;
            --accent-color: #A6886D;
            --accent-hover: #8f745b;
            --white: #ffffff;
            --black: #0f0f0f;
            
            --font-serif: 'Cormorant Garamond', serif;
            --font-sans: 'Manrope', sans-serif;
            
            --spacing-xs: 1rem;
            --spacing-sm: 2rem;
            --spacing-md: 4rem;
            --spacing-lg: 8rem;
            
            --container-width: 1200px;
            --radius-md: 8px;
            --radius-lg: 16px;
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
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: var(--font-sans);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            font-weight: 600;
            color: var(--text-dark);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: 0.3s ease;
        }

        /* -----------------------------------------------------------
           UTILITIES & ANIMATIONS
        ----------------------------------------------------------- */
        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            background-color: var(--accent-color);
            color: var(--white);
            font-family: var(--font-sans);
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.9rem;
            border: none;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(166, 136, 109, 0.2);
        }

        .section-padding {
            padding: var(--spacing-lg) 0;
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background 0.4s ease, padding 0.4s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Taille ajustée pour le logo */
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-family: var(--font-sans);
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-dark);
            position: relative;
        }
        
        /* Sticky Header Text Color change handling */
        header:not(.scrolled) .nav-links a,
        header:not(.scrolled) .cta-secondary {
            color: var(--white); /* White text on hero */
        }
        header.scrolled .nav-links a {
            color: var(--text-dark);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .cta-secondary {
            font-size: 0.9rem;
            font-weight: 600;
            border-bottom: 1px solid var(--accent-color);
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            color: var(--accent-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Image de fond : Couple élégant */
            background-image: url('https://images.unsplash.com/photo-1583939003579-730e3918a45a?q=80&w=2574&auto=format&fit=crop'); 
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
            /* Overlay sombre pour la lisibilité */
            background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.6) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--white);
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Évite que le texte soit caché par le header sur mobile */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 400;
            line-height: 1.1;
            margin-bottom: 24px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero h2 {
            font-family: var(--font-sans);
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
            color: #f0f0f0;
        }

        /* -----------------------------------------------------------
           SOCIAL PROOF (Trust Bar)
        ----------------------------------------------------------- */
        .trust-bar {
            background: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .trust-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            text-align: center;
        }

        .trust-content p {
            font-size: 0.9rem;
            color: var(--text-color);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .avatars {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .avatar-group {
            display: flex;
        }

        .avatar-group img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 3px solid var(--white);
            margin-left: -15px;
            object-fit: cover;
        }
        .avatar-group img:first-child { margin-left: 0; }

        .stars {
            color: var(--accent-color);
            font-size: 0.9rem;
        }

        /* -----------------------------------------------------------
           COLLECTIONS (Bento Grid)
        ----------------------------------------------------------- */
        .collections {
            padding: var(--spacing-lg) 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: var(--spacing-md);
        }

        .section-header h2 {
            font-size: 3rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            grid-template-rows: 300px 300px;
            gap: 24px;
        }

        .bento-item {
            position: relative;
            border-radius: var(--radius-md);
            overflow: hidden;
            group: cursor-pointer;
        }

        .bento-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .bento-item:hover img {
            transform: scale(1.05);
        }

        .bento-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            color: var(--white);
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: flex-end;
        }

        .bento-overlay h3 {
            font-size: 2rem;
            color: var(--white);
            margin-bottom: 10px;
        }

        .link-arrow {
            color: var(--white);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(255,255,255,0.5);
            padding-bottom: 4px;
        }

        /* Large bloc (Gauche) */
        .item-1 {
            grid-row: 1 / 3;
            grid-column: 1 / 2;
        }

        /* -----------------------------------------------------------
           AVANTAGES
        ----------------------------------------------------------- */
        .advantages {
            background-color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            text-align: center;
        }

        .feature-card {
            padding: 20px;
        }

        .icon-box {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .feature-card p {
            font-size: 0.95rem;
        }

        /* -----------------------------------------------------------
           A PROPOS (Storytelling)
        ----------------------------------------------------------- */
        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            overflow: hidden;
        }

        .about-text {
            padding: var(--spacing-md) var(--spacing-md) var(--spacing-md) 10%;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 24px;
            line-height: 1.1;
        }

        .about-text p {
            margin-bottom: 24px;
            font-size: 1.05rem;
        }

        .about-image {
            height: 100%;
            min-height: 600px;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* -----------------------------------------------------------
           LOCATION & CONTACT
        ----------------------------------------------------------- */
        .contact-section {
            background-color: var(--bg-color);
            text-align: center;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 40px;
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }

        .contact-info {
            padding: 40px;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }

        .info-item {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .info-item i {
            color: var(--accent-color);
            margin-top: 5px;
        }

        .map-frame {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border: none;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background-color: #1a1a1a;
            color: #b0b0b0;
            padding: 60px 0 20px;
            text-align: center;
        }

        .footer-logo {
            font-family: var(--font-serif);
            font-size: 2rem;
            color: var(--white);
            margin-bottom: 20px;
            display: block;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .social-links a {
            color: var(--white);
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }

        .copyright {
            font-size: 0.8rem;
            border-top: 1px solid #333;
            padding-top: 20px;
        }

        /* -----------------------------------------------------------
           MOBILE STICKY BAR
        ----------------------------------------------------------- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 12px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none; /* Hidden on desktop */
            justify-content: space-between;
            align-items: center;
        }

        .mobile-sticky-btn {
            background-color: #25D366; /* WhatsApp Green */
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            flex: 1;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .mobile-booking-btn {
            background-color: var(--accent-color);
            margin-left: 10px;
        }

        /* -----------------------------------------------------------
           RESPONSIVE MEDIA QUERIES
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 3.5rem; }
            .bento-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
            .item-1 { grid-row: auto; grid-column: auto; height: 400px; }
            .about { grid-template-columns: 1fr; }
            .about-image { min-height: 400px; order: -1; }
            .about-text { padding: var(--spacing-sm); }
        }

        @media (max-width: 768px) {
            /* Navigation Mobile */
            .nav-links {
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                align-items: center;
                padding: 40px 0;
                gap: 20px;
                transform: translateY(-150%);
                transition: transform 0.4s ease;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            
            .nav-links.active {
                transform: translateY(0);
            }

            .nav-links a {
                color: var(--text-dark) !important;
                font-size: 1.2rem;
            }

            .mobile-menu-btn {
                display: block;
                color: var(--white);
            }
            
            header.scrolled .mobile-menu-btn {
                color: var(--text-dark);
            }

            .cta-secondary { display: none; } /* Hide generic CTA on mobile nav */

            .hero h1 { font-size: 2.8rem; }
            
            .features-grid { grid-template-columns: 1fr; gap: 30px; }
            
            .contact-container { grid-template-columns: 1fr; }
            
            .mobile-sticky-bar { display: flex; }
            
            /* Add padding bottom to body so content isn't hidden behind sticky bar */
            body { padding-bottom: 70px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <!-- Logo via JS -->
            <div id="logo-container"></div>
            
            <nav class="nav-links" id="nav-links">
                <a href="#accueil">Accueil</a>
                <a href="#collections">Nos Collections</a>
                <a href="#experience">L'Expérience</a>
                <a href="#temoignages">Témoignages</a>
            </nav>

            <a href="#contact" class="cta-secondary">Nous trouver</a>
            
            <div class="mobile-menu-btn" id="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="accueil" class="hero">
            <div class="hero-content fade-in-up">
                <h1>L'Élégance de votre "Oui" commence ici à Antananarivo.</h1>
                <h2>Découvrez la plus belle collection de robes de mariée, tenues de fiançailles et costumes. Luxe, confort et ajustement parfait pour votre grand jour.</h2>
                <a href="#contact" class="btn">Réserver mon essayage privé</a>
            </div>
        </section>

        <!-- Social Proof -->
        <section id="temoignages" class="trust-bar">
            <div class="container trust-content">
                <p>Ils nous ont fait confiance pour leur grand jour</p>
                <div class="avatars">
                    <div class="avatar-group">
                        <img src="https://images.unsplash.com/photo-1623193267923-22849d494953?q=80&w=200&auto=format&fit=crop" alt="Mariée heureuse Tana">
                        <img src="https://images.unsplash.com/photo-1546955121-d41979b01d14?q=80&w=200&auto=format&fit=crop" alt="Couple Mariage">
                        <img src="https://images.unsplash.com/photo-1616056586326-0e115049c6cb?q=80&w=200&auto=format&fit=crop" alt="Mariés Madagascar">
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collections (Bento) -->
        <section id="collections" class="section-padding">
            <div class="container">
                <div class="section-header fade-in-up">
                    <h2>Nos Univers pour Elle et Lui</h2>
                    <p>Une sélection exclusive de tissus nobles et coupes modernes.</p>
                </div>
                
                <div class="bento-grid">
                    <!-- Grand Bloc Mariée -->
                    <div class="bento-item item-1 fade-in-up">
                        <img src="https://images.unsplash.com/photo-1594552072238-b8a337eda7b6?q=80&w=2574&auto=format&fit=crop" alt="Robe mariée dentelle Tana">
                        <div class="bento-overlay">
                            <h3>La Mariée</h3>
                            <span class="link-arrow">Voir les robes <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                    
                    <!-- Fiançailles -->
                    <div class="bento-item fade-in-up">
                        <img src="https://images.unsplash.com/photo-1566174053879-31528523f8ae?q=80&w=2524&auto=format&fit=crop" alt="Robe de fiançailles Madagascar">
                        <div class="bento-overlay">
                            <h3>Fiançailles & Vodiondry</h3>
                            <span class="link-arrow">La collection <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                    
                    <!-- Homme -->
                    <div class="bento-item fade-in-up">
                        <img src="https://images.unsplash.com/photo-1593032465175-481ac7f405a0?q=80&w=2594&auto=format&fit=crop" alt="Costume mariage homme Tana">
                        <div class="bento-overlay">
                            <h3>L'Élégance au Masculin</h3>
                            <span class="link-arrow">Costumes Homme <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Avantages -->
        <section id="experience" class="section-padding advantages">
            <div class="container">
                <div class="section-header">
                    <h2>Pourquoi choisir Eventia Mariage ?</h2>
                </div>
                <div class="features-grid">
                    <div class="feature-card fade-in-up">
                        <div class="icon-box"><i class="fas fa-gem"></i></div>
                        <h3>Conseil en Image</h3>
                        <p>Des experts pour trouver la coupe qui sublime votre silhouette et correspond à votre personnalité.</p>
                    </div>
                    <div class="feature-card fade-in-up">
                        <div class="icon-box"><i class="fas fa-cut"></i></div>
                        <h3>Retouches Sur-Mesure</h3>
                        <p>Un ajustement parfait réalisé dans nos ateliers à Tana pour un tombé impeccable.</p>
                    </div>
                    <div class="feature-card fade-in-up">
                        <div class="icon-box"><i class="fas fa-crown"></i></div>
                        <h3>Qualité Premium</h3>
                        <p>Dentelles, soies et tissus importés de haute qualité pour un rendu luxueux.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- A Propos -->
        <section class="about">
            <div class="about-text fade-in-up">
                <h2>Au service de votre bonheur à Antananarivo.</h2>
                <p>Chez Eventia Mariage, nous savons que choisir sa tenue est l'un des moments les plus émouvants des préparatifs. Depuis notre ouverture au cœur de Tana, nous avons accompagné des centaines de couples.</p>
                <p>Notre mission ? Vous offrir une expérience "boutique privée" où vous êtes écoutés, conseillés et choyés. Pas de stress, juste la magie de se découvrir dans le miroir.</p>
                <a href="#contact" class="btn" style="background: var(--text-dark);">En savoir plus</a>
            </div>
            <div class="about-image fade-in-up">
                <img src="https://images.unsplash.com/photo-1550614000-4b9519e0037a?q=80&w=2600&auto=format&fit=crop" alt="Boutique mariage Antananarivo">
            </div>
        </section>

        <!-- Contact & Map -->
        <section id="contact" class="section-padding contact-section">
            <div class="container">
                <div class="section-header">
                    <h2>Venez essayer la robe de vos rêves</h2>
                </div>
                <div class="contact-container fade-in-up">
                    <div class="contact-info">
                        <h3>Eventia Mariage</h3>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Enceinte du Centre Commercial, Antananarivo 101, Madagascar</p>
                        </div>
                        <div class="info-item">
                            <i class="far fa-clock"></i>
                            <p>Mardi - Samedi : 09h00 - 18h00<br>Lundi : Sur rendez-vous</p>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone-alt"></i>
                            <p>+261 34 00 000 00</p>
                        </div>
                        <a href="#" class="btn" style="width: 100%; text-align: center; margin-top: 20px;">Prendre rendez-vous maintenant</a>
                    </div>
                    <div class="map">
                        <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60395.03158097063!2d47.48154687702819!3d-18.91001217311107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a23347599%3A0x6b107c13217b1897!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1715456789123!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <span class="footer-logo">Eventia</span>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
            <div class="copyright">
                &copy; 2024 Eventia Mariage. Tous droits réservés. Design by Lead Designer.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <a href="#" class="mobile-sticky-btn">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
        <a href="#contact" class="mobile-sticky-btn mobile-booking-btn">
            <i class="fas fa-calendar-check"></i> RDV
        </a>
    </div>

    <!-- JavaScript Integration -->
    <script>
        // ------------------------------------------
        // 1. LOGO INTEGRATION (MANDATORY)
        // ------------------------------------------
        const LOGO_URL = "logo.jpg";
        
        // Insert logo dynamically
        const logoContainer = document.getElementById('logo-container');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Eventia Mariage Logo";
        logoImg.className = "logo-img";
        
        // Add link wrapper
        const logoLink = document.createElement('a');
        logoLink.href = "#";
        logoLink.appendChild(logoImg);
        logoContainer.appendChild(logoLink);

        // ------------------------------------------
        // 2. STICKY HEADER & SCROLL EFFECT
        // ------------------------------------------
        const header = document.getElementById('header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // ------------------------------------------
        // 3. MOBILE MENU TOGGLE
        // ------------------------------------------
        const menuBtn = document.getElementById('menu-btn');
        const navLinks = document.getElementById('nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            // Change icon
            const icon = menuBtn.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                icon.style.color = 'var(--text-dark)'; // Ensure visibility on white menu
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                // Reset color logic handled by css media query + header state
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = menuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // ------------------------------------------
        // 4. ANIMATION ON SCROLL (FADE IN)
        // ------------------------------------------
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Animate only once
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

    </script>
</body>
</html>