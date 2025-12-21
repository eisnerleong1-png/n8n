<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNO Mobile Madagascar | Innovation Officielle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* -----------------------------------------------------------
           RESET & BASE STYLES
        ----------------------------------------------------------- */
        :root {
            --primary: #0055FF;
            --primary-dark: #003db3;
            --secondary: #FFFFFF;
            --accent: #F0F4FF;
            --text-main: #1A1A1A;
            --text-light: #666666;
            --success: #00C853;
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Inter', sans-serif;
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 30px rgba(0, 85, 255, 0.1);
            --shadow-lg: 0 20px 50px rgba(0, 0, 0, 0.2);
            --radius-md: 12px;
            --radius-lg: 24px;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            color: var(--text-main);
            background-color: #FAFAFA;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }

        /* -----------------------------------------------------------
           TYPOGRAPHY
        ----------------------------------------------------------- */
        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 700;
            line-height: 1.2;
        }

        h1 { font-size: clamp(2.5rem, 5vw, 4.5rem); letter-spacing: -1px; }
        h2 { font-size: clamp(2rem, 4vw, 3rem); letter-spacing: -0.5px; margin-bottom: 1rem; }
        h3 { font-size: 1.5rem; font-weight: 600; }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary), #00C6FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* -----------------------------------------------------------
           COMPONENTS
        ----------------------------------------------------------- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-family: var(--font-heading);
            font-weight: 600;
            font-size: 1rem;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            gap: 10px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 10px 20px rgba(0, 85, 255, 0.3);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 85, 255, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            background: rgba(0, 85, 255, 0.1);
            color: var(--primary);
            font-weight: 600;
            font-size: 0.8rem;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
            transition: var(--transition);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 40px; /* Adjust based on your logo aspect ratio */
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--text-main);
            position: relative;
        }

        .nav-links a:not(.btn)::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:not(.btn):hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--text-main);
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-color: #050505;
            overflow: hidden;
            padding-top: 80px; /* Space for sticky header */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Image de fond : Urbain tech / Smartphone */
            opacity: 0.6; 
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            color: white;
            max-width: 650px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.85);
            margin: 20px 0 40px;
            font-weight: 300;
        }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-section {
            background: white;
            padding: 40px 0;
            margin-top: -60px; /* Overlap hero */
            position: relative;
            z-index: 10;
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .trust-item {
            padding: 20px;
        }

        .trust-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .trust-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .trust-text p {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        /* -----------------------------------------------------------
           CATALOG SECTION
        ----------------------------------------------------------- */
        .catalog {
            padding: 100px 0;
            background: #FAFAFA;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
            flex-wrap: wrap;
            position: sticky;
            top: 85px;
            z-index: 90;
            padding: 10px 0;
            background: rgba(250, 250, 250, 0.9);
            backdrop-filter: blur(5px);
        }

        .filter-btn {
            background: white;
            border: 1px solid #E5E5E5;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(0, 85, 255, 0.2);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .product-card {
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-md);
        }

        .product-image {
            height: 300px;
            background: #F5F5F7;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        .product-image img {
            max-height: 100%;
            transition: var(--transition);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 30px;
        }

        .product-category {
            font-size: 0.8rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .product-price {
            display: block;
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 700;
            margin: 15px 0;
        }

        .product-specs {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .spec {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .product-btn {
            width: 100%;
            padding: 12px;
            text-align: center;
            background: var(--accent);
            color: var(--primary);
            border-radius: var(--radius-md);
            font-weight: 600;
            transition: var(--transition);
        }

        .product-btn:hover {
            background: var(--primary);
            color: white;
        }

        /* -----------------------------------------------------------
           LOCATOR SECTION
        ----------------------------------------------------------- */
        .locator {
            padding: 100px 0;
            background: white;
        }

        .locator-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            background: #FAFAFA;
        }

        .locator-list {
            padding: 40px;
        }

        .search-bar {
            position: relative;
            margin-bottom: 30px;
        }

        .search-bar input {
            width: 100%;
            padding: 15px 20px;
            padding-left: 50px;
            border: 2px solid #E5E5E5;
            border-radius: 50px;
            font-family: var(--font-body);
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
        }

        .search-bar input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(0, 85, 255, 0.1);
        }

        .search-bar i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .shop-item {
            background: white;
            padding: 20px;
            border-radius: var(--radius-md);
            margin-bottom: 15px;
            border: 1px solid #F0F0F0;
            transition: var(--transition);
            cursor: pointer;
        }

        .shop-item:hover {
            border-color: var(--primary);
            transform: translateX(5px);
        }

        .shop-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .verified-badge {
            font-size: 0.75rem;
            color: var(--success);
            background: rgba(0, 200, 83, 0.1);
            padding: 4px 8px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .locator-map {
            background-color: #E5E5F7;
            background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1774&auto=format&fit=crop'); /* Map placeholder aesthetic */
            background-size: cover;
            background-position: center;
            position: relative;
            min-height: 500px;
        }

        /* Fake Map Pins */
        .map-pin {
            position: absolute;
            width: 40px;
            height: 40px;
            background: var(--primary);
            border: 4px solid white;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* -----------------------------------------------------------
           SAV SECTION
        ----------------------------------------------------------- */
        .sav {
            padding: 100px 0;
            background: var(--accent);
            position: relative;
            overflow: hidden;
        }

        .sav-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 50px;
        }

        .sav-image {
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background: #0A0A0A;
            color: white;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 60px;
        }

        .footer-col h4 {
            margin-bottom: 25px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 15px;
        }

        .footer-col ul li a {
            color: #888;
        }

        .footer-col ul li a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            font-size: 1.2rem;
        }

        .social-icon:hover {
            background: var(--primary);
            transform: rotate(10deg);
        }

        .copyright {
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* -----------------------------------------------------------
           WHATSAPP FLOATING
        ----------------------------------------------------------- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            z-index: 999;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .locator-layout, .sav-container {
                grid-template-columns: 1fr;
            }
            .locator-map { height: 300px; }
            .trust-grid { grid-template-columns: 1fr; gap: 40px; }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                justify-content: center;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
                transition: var(--transition);
            }
            .nav-links.active { right: 0; }
            .mobile-toggle { display: block; z-index: 1001; }
            
            .hero-content {
                padding-left: 0;
                text-align: center;
                padding: 0 10px;
            }
            
            .btn { width: 100%; margin-bottom: 10px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- JS will inject logo here -->
            </div>
            
            <div class="mobile-toggle" id="mobileToggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="nav-links" id="navLinks">
                <a href="#catalog">Smartphones</a>
                <a href="#">Accessoires</a>
                <a href="#sav">SAV & Garantie</a>
                <a href="#locator" class="btn btn-primary" style="padding: 12px 24px; width: auto; margin:0;">
                    <i class="fas fa-map-marker-alt"></i> Trouver une boutique
                </a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <!-- Image urbaine premium / Tech -->
            <img src="https://images.unsplash.com/photo-1556656793-02715d8dd660?q=80&w=1920&auto=format&fit=crop" alt="TECNO Madagascar">
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <span class="badge" style="background: rgba(255,255,255,0.2); color:white; border:1px solid rgba(255,255,255,0.3);">
                    <i class="fas fa-check-circle"></i> Officiel Madagascar
                </span>
                <h1>L'Innovation <span class="text-gradient">TECNO</span> Officielle à Madagascar.</h1>
                <p class="hero-subtitle">
                    Prix locaux. Garantie 13 mois. Découvrez les derniers modèles Spark, Camon et Phantom disponibles à Antananarivo aux vrais prix du marché.
                </p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: flex-start;">
                    <a href="#catalog" class="btn btn-primary">VOIR LES PRIX ET STOCKS</a>
                    <a href="#locator" class="btn" style="background: rgba(255,255,255,0.1); color: white; backdrop-filter: blur(10px);">
                        Revendeurs agréés
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <div class="container">
        <section class="trust-section">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-shield-alt trust-icon"></i>
                    <div class="trust-text">
                        <h4>Garantie Officielle Carlcare</h4>
                        <p>Service après-vente certifié 13 mois</p>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-tag trust-icon"></i>
                    <div class="trust-text">
                        <h4>Prix Transparents (MGA)</h4>
                        <p>Payez le prix juste en Ariary</p>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-store trust-icon"></i>
                    <div class="trust-text">
                        <h4>Réseau Agréé</h4>
                        <p>Distributeurs officiels à Tana</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Catalog Section -->
    <section class="catalog" id="catalog">
        <div class="container">
            <div class="section-header">
                <h2>Quel <span class="text-gradient">TECNO</span> est fait pour vous ?</h2>
                <p class="text-light">Sélectionnez votre gamme préférée</p>
            </div>

            <div class="filters">
                <button class="filter-btn active" data-filter="all">Tout voir</button>
                <button class="filter-btn" data-filter="spark">Série SPARK</button>
                <button class="filter-btn" data-filter="camon">Série CAMON</button>
                <button class="filter-btn" data-filter="phantom">Série PHANTOM</button>
            </div>

            <div class="product-grid" id="productGrid">
                <!-- Products injected via JS for cleaner HTML -->
            </div>
        </div>
    </section>

    <!-- Store Locator -->
    <section class="locator" id="locator">
        <div class="container">
            <div class="section-header">
                <h2>Trouvez le revendeur agréé</h2>
                <p>Évitez les contrefaçons, achetez en boutique officielle.</p>
            </div>
            
            <div class="locator-layout">
                <div class="locator-list">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Votre quartier (ex: Analakely, Ankorondrano)...">
                    </div>
                    
                    <div class="shops-container">
                        <div class="shop-item">
                            <div class="shop-header">
                                <h3>Mass'In Digital</h3>
                                <span class="verified-badge"><i class="fas fa-check"></i> Agréé</span>
                            </div>
                            <p style="color:#666; font-size:0.9rem; margin-bottom:10px;">Centre Commercial La City, Ivandry</p>
                            <a href="#" style="color:var(--primary); font-size:0.85rem; font-weight:600;">Voir l'itinéraire &rarr;</a>
                        </div>
                        
                        <div class="shop-item">
                            <div class="shop-header">
                                <h3>Digital World</h3>
                                <span class="verified-badge"><i class="fas fa-check"></i> Agréé</span>
                            </div>
                            <p style="color:#666; font-size:0.9rem; margin-bottom:10px;">Avenue de l'Indépendance, Analakely</p>
                            <a href="#" style="color:var(--primary); font-size:0.85rem; font-weight:600;">Voir l'itinéraire &rarr;</a>
                        </div>

                        <div class="shop-item">
                            <div class="shop-header">
                                <h3>TECNO Store Suprême</h3>
                                <span class="verified-badge"><i class="fas fa-check"></i> Agréé</span>
                            </div>
                            <p style="color:#666; font-size:0.9rem; margin-bottom:10px;">Galerie Zoom, Ankorondrano</p>
                            <a href="#" style="color:var(--primary); font-size:0.85rem; font-weight:600;">Voir l'itinéraire &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="locator-map">
                    <div class="map-pin" style="top: 40%; left: 50%;" title="La City">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="map-pin" style="top: 60%; left: 30%; animation-delay: 0.5s" title="Analakely">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="map-pin" style="top: 30%; left: 70%; animation-delay: 1s" title="Ankorondrano">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SAV Section -->
    <section class="sav" id="sav">
        <div class="container">
            <div class="sav-container">
                <div class="sav-image">
                    <!-- Tech support image -->
                    <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a78e?q=80&w=1000&auto=format&fit=crop" alt="Support Technique TECNO">
                </div>
                <div class="sav-content">
                    <span class="badge" style="background:white; color:var(--primary);">Service Après-Vente</span>
                    <h2>Un écran cassé ? Une panne ?</h2>
                    <p style="margin: 20px 0; font-size: 1.1rem; color: #555;">
                        Pas de panique. En achetant officiel, vous profitez du support <strong>Carlcare</strong> à Madagascar. Pièces d'origine et techniciens formés.
                    </p>
                    <ul style="margin-bottom: 30px;">
                        <li style="margin-bottom:10px;"><i class="fas fa-check" style="color:var(--success); margin-right:10px;"></i> Réparation sous garantie</li>
                        <li style="margin-bottom:10px;"><i class="fas fa-check" style="color:var(--success); margin-right:10px;"></i> Pièces détachées d'origine</li>
                        <li style="margin-bottom:10px;"><i class="fas fa-check" style="color:var(--success); margin-right:10px;"></i> Suivi en ligne</li>
                    </ul>
                    <a href="#" class="btn btn-outline" style="background:white;">Localiser un centre Carlcare</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>À propos</h4>
                    <ul>
                        <li><a href="#">L'histoire de TECNO</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Presse</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Vérifier ma garantie</a></li>
                        <li><a href="#">Centres Carlcare</a></li>
                        <li><a href="#">Téléchargements</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Légal</h4>
                    <ul>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 TECNO Mobile Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // -----------------------------------------------------------
        // 1. LOGO INTEGRATION (MANDATORY)
        // -----------------------------------------------------------
        const LOGO_URL = "logo.jpg";
        
        document.getElementById('logo-container').innerHTML = `
            <a href="#">
                <img src="${LOGO_URL}" alt="TECNO Mobile MG" title="Retour accueil">
            </a>
        `;

        // -----------------------------------------------------------
        // 2. PRODUCT DATA & RENDERING
        // -----------------------------------------------------------
        const products = [
            {
                name: "TECNO PHANTOM V Fold",
                category: "phantom",
                img: "https://images.unsplash.com/photo-1662947117866-9b841773099c?q=80&w=800&auto=format&fit=crop", 
                price: "4 500 000 Ar",
                ram: "12GB",
                rom: "512GB",
                camera: "50MP Main"
            },
            {
                name: "TECNO CAMON 20 Premier",
                category: "camon",
                img: "https://images.unsplash.com/photo-1616348436168-de43ad0db179?q=80&w=800&auto=format&fit=crop",
                price: "1 450 000 Ar",
                ram: "8GB",
                rom: "512GB",
                camera: "108MP Ultra"
            },
            {
                name: "TECNO SPARK 10 Pro",
                category: "spark",
                img: "https://images.unsplash.com/photo-1598327773202-3ea4017f87a2?q=80&w=800&auto=format&fit=crop",
                price: "680 000 Ar",
                ram: "8GB",
                rom: "256GB",
                camera: "32MP Selfie"
            },
            {
                name: "TECNO SPARK Go 2024",
                category: "spark",
                img: "https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?q=80&w=800&auto=format&fit=crop",
                price: "450 000 Ar",
                ram: "4GB",
                rom: "64GB",
                camera: "13MP AI"
            },
            {
                name: "TECNO CAMON 20 Pro",
                category: "camon",
                img: "https://images.unsplash.com/photo-1565849904461-04a58ad377e0?q=80&w=800&auto=format&fit=crop",
                price: "1 100 000 Ar",
                ram: "8GB",
                rom: "256GB",
                camera: "64MP RGBW"
            }
        ];

        const grid = document.getElementById('productGrid');

        function renderProducts(filter = 'all') {
            grid.innerHTML = '';
            const filtered = filter === 'all' 
                ? products 
                : products.filter(p => p.category === filter);

            filtered.forEach(p => {
                const card = document.createElement('div');
                card.className = 'product-card';
                card.innerHTML = `
                    <div class="product-image">
                        <img src="${p.img}" alt="${p.name}">
                        <div style="position:absolute; top:15px; right:15px; background:white; padding:5px 10px; border-radius:20px; font-size:0.7rem; font-weight:700; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                            EN STOCK
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Série ${p.category}</span>
                        <h3>${p.name}</h3>
                        <span class="product-price">${p.price}</span>
                        <div class="product-specs">
                            <span class="spec"><i class="fas fa-memory"></i> ${p.ram}</span>
                            <span class="spec"><i class="fas fa-hdd"></i> ${p.rom}</span>
                            <span class="spec"><i class="fas fa-camera"></i> ${p.camera}</span>
                        </div>
                        <a href="#" class="product-btn">Voir fiche technique</a>
                    </div>
                `;
                grid.appendChild(card);
            });
        }

        // Init render
        renderProducts();

        // -----------------------------------------------------------
        // 3. FILTER LOGIC
        // -----------------------------------------------------------
        const buttons = document.querySelectorAll('.filter-btn');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Active class management
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Filter execution
                renderProducts(btn.dataset.filter);
            });
        });

        // -----------------------------------------------------------
        // 4. MOBILE MENU & UX
        // -----------------------------------------------------------
        const mobileToggle = document.getElementById('mobileToggle');
        const navLinks = document.getElementById('navLinks');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if(navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close menu on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileToggle.querySelector('i').classList.remove('fa-times');
                mobileToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if(window.scrollY > 50) {
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "0 2px 20px rgba(0,0,0,0.05)";
            }
        });

    </script>
</body>
</html>