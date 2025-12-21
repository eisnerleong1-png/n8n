<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNO Mobile Madagascar | Innovation & Prix Officiels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES - 2024/2025 DESIGN SYSTEM
        ----------------------------------------------------------- */
        :root {
            --primary-blue: #0055FF;
            --primary-dark: #003db3;
            --secondary-bg: #F0F4FF;
            --text-dark: #1A1A1A;
            --text-grey: #666666;
            --text-light: #FFFFFF;
            --success: #10B981;
            --surface: #FFFFFF;
            --border-radius: 16px;
            --container-width: 1280px;
            --shadow-soft: 0 10px 40px -10px rgba(0, 85, 255, 0.1);
            --shadow-hover: 0 20px 60px -10px rgba(0, 85, 255, 0.2);
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
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            background-color: #F8FAFC;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* -----------------------------------------------------------
           UTILITIES & ANIMATIONS
        ----------------------------------------------------------- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: var(--transition);
            gap: 10px;
        }

        .btn-primary {
            background: var(--primary-blue);
            color: var(--text-light);
            border: 2px solid var(--primary-blue);
            box-shadow: 0 4px 15px rgba(0, 85, 255, 0.3);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-outline:hover {
            background: var(--primary-blue);
            color: var(--text-light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #1A1A1A 0%, #0055FF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-title p {
            color: var(--text-grey);
            font-size: 1.1rem;
        }

        /* Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
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
            transition: var(--transition);
            padding: 15px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo Placeholder Styling */
        #logo-container img {
            height: 50px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--text-dark);
            position: relative;
        }
        
        /* Header text color logic for transparent vs scrolled */
        header:not(.scrolled) .nav-links a {
             color: var(--text-light); 
             text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        }
        
        header:not(.scrolled) .nav-toggle {
            color: var(--text-light);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-blue);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-btn-mobile {
            display: none;
        }
        
        .nav-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
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
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Premium Unsplash Image: Tech/City/Blue */
            background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,85,255,0.4) 100%);
            z-index: -1;
        }

        .hero-content {
            max-width: 650px;
            color: var(--text-light);
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-features {
            display: flex;
            gap: 20px;
            margin-top: 2rem;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .hero-feature-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* -----------------------------------------------------------
           TRUST SECTION
        ----------------------------------------------------------- */
        .trust-section {
            padding: 4rem 0;
            background: var(--surface);
            margin-top: -50px;
            position: relative;
            z-index: 10;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            border-bottom: 1px solid #E2E8F0;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .trust-card {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1rem;
        }

        .trust-icon {
            width: 60px;
            height: 60px;
            background: var(--secondary-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .trust-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .trust-info p {
            font-size: 0.9rem;
            color: var(--text-grey);
        }

        /* -----------------------------------------------------------
           CATALOG SECTION
        ----------------------------------------------------------- */
        .catalog {
            padding: 6rem 0;
            background-color: #FAFAFA;
        }

        .filter-container {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            position: sticky;
            top: 80px; /* Below header */
            z-index: 90;
            padding: 10px;
            background: rgba(250, 250, 250, 0.95);
            backdrop-filter: blur(5px);
            border-radius: 12px;
        }

        .filter-btn {
            padding: 10px 24px;
            border-radius: 30px;
            border: 1px solid #E2E8F0;
            background: var(--surface);
            color: var(--text-grey);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-blue);
            color: var(--text-light);
            border-color: var(--primary-blue);
            box-shadow: 0 4px 12px rgba(0, 85, 255, 0.2);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: var(--surface);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .product-image-container {
            height: 300px;
            padding: 20px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .product-image-container img {
            max-height: 100%;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image-container img {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary-blue);
            color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .product-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-category {
            font-size: 0.8rem;
            color: var(--text-grey);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .product-specs {
            font-size: 0.9rem;
            color: var(--text-grey);
            margin-bottom: 1rem;
            display: flex;
            gap: 10px;
        }
        
        .product-specs span {
            background: #f0f0f0;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-blue);
            margin-top: auto;
            margin-bottom: 1rem;
        }

        .product-cta {
            width: 100%;
            padding: 12px;
            border: 1px solid #E2E8F0;
            background: transparent;
            color: var(--text-dark);
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .product-cta:hover {
            background: var(--text-dark);
            color: var(--text-light);
            border-color: var(--text-dark);
        }

        /* -----------------------------------------------------------
           STORE LOCATOR
        ----------------------------------------------------------- */
        .locator {
            padding: 6rem 0;
            background: var(--surface);
        }

        .locator-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            background: #fff;
            border: 1px solid #E2E8F0;
        }

        .locator-map {
            position: relative;
            background: #E5E7EB;
            min-height: 500px;
        }

        .map-placeholder {
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2074&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            filter: grayscale(20%);
        }

        .locator-list {
            padding: 3rem;
            background: white;
            display: flex;
            flex-direction: column;
        }

        .search-bar {
            position: relative;
            margin-bottom: 2rem;
        }

        .search-bar input {
            width: 100%;
            padding: 16px 16px 16px 50px;
            border: 2px solid #E2E8F0;
            border-radius: 12px;
            font-size: 1rem;
            font-family: inherit;
            transition: var(--transition);
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary-blue);
        }

        .search-bar i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-grey);
        }

        .store-item {
            padding: 1.5rem;
            border-bottom: 1px solid #f0f0f0;
            transition: var(--transition);
            cursor: pointer;
        }

        .store-item:hover {
            background: var(--secondary-bg);
            padding-left: 2rem;
        }

        .store-name {
            font-weight: 700;
            font-size: 1.1rem;
            display: flex;
            justify-content: space-between;
        }

        .store-badge {
            font-size: 0.7rem;
            background: #DEF7EC;
            color: #03543F;
            padding: 2px 8px;
            border-radius: 4px;
        }

        .store-address {
            font-size: 0.9rem;
            color: var(--text-grey);
            margin-top: 5px;
        }

        /* -----------------------------------------------------------
           SAV / SUPPORT
        ----------------------------------------------------------- */
        .sav {
            padding: 6rem 0;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .sav-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 4rem;
            position: relative;
            z-index: 2;
        }

        .sav-text h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .sav-text p {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 2rem;
        }

        .sav-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        
        .sav-img img {
            width: 100%;
            transition: transform 0.5s;
        }
        
        .sav-img:hover img {
            transform: scale(1.03);
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background: #000;
            color: #fff;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            display: block;
        }

        .footer-desc {
            color: #888;
            font-size: 0.9rem;
            max-width: 300px;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: #fff;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #888;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: var(--primary-blue);
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            background: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--primary-blue);
            color: white;
        }

        .copyright {
            border-top: 1px solid #222;
            padding-top: 2rem;
            text-align: center;
            color: #555;
            font-size: 0.8rem;
        }

        /* -----------------------------------------------------------
           FLOATING WHATSAPP
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
            z-index: 1000;
            transition: var(--transition);
            animation: pulse 2s infinite;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 20px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .trust-grid { grid-template-columns: 1fr; gap: 1rem; }
            .locator-layout { grid-template-columns: 1fr; }
            .locator-map { min-height: 300px; }
            .sav-content { grid-template-columns: 1fr; text-align: center; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                background: white;
                flex-direction: column;
                justify-content: center;
                box-shadow: -5px 0 15px rgba(0,0,0,0.1);
                transition: 0.4s ease;
            }
            .nav-links.active { right: 0; }
            .nav-links a { color: var(--text-dark) !important; font-size: 1.2rem; }
            .nav-toggle { display: block; z-index: 1001; }
            
            .hero h1 { font-size: 2.2rem; }
            .hero-content { padding-top: 60px; }
            
            .footer-grid { grid-template-columns: 1fr; gap: 2rem; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-content">
            <!-- Logo Injection Point -->
            <a href="#" id="logo-container"></a>
            
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#catalogue">Smartphones</a></li>
                    <li><a href="#">Accessoires</a></li>
                    <li><a href="#sav">SAV & Garantie</a></li>
                    <li>
                        <a href="#locator" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.85rem;">
                            Trouver une boutique
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content reveal">
                <h1>L'Innovation TECNO Officielle à Madagascar</h1>
                <p>Prix Locaux. Garantie 13 Mois. Disponibilité Immédiate à Tana.<br>Découvrez les séries Spark, Camon et Phantom aux vrais prix.</p>
                
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="#catalogue" class="btn btn-primary">
                        VOIR LES PRIX ET STOCKS <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="hero-features">
                    <div class="hero-feature-item"><i class="fas fa-check-circle" style="color: var(--success);"></i> Officiel</div>
                    <div class="hero-feature-item"><i class="fas fa-check-circle" style="color: var(--success);"></i> Garantie Mada</div>
                    <div class="hero-feature-item"><i class="fas fa-check-circle" style="color: var(--success);"></i> Stock Réel</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Band -->
    <section class="trust-section">
        <div class="container">
            <div class="trust-grid reveal">
                <div class="trust-card">
                    <div class="trust-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="trust-info">
                        <h3>Garantie Carlcare</h3>
                        <p>13 mois de couverture officielle</p>
                    </div>
                </div>
                <div class="trust-card">
                    <div class="trust-icon"><i class="fas fa-tag"></i></div>
                    <div class="trust-info">
                        <h3>Prix Transparents</h3>
                        <p>Prix affichés en Ariary (MGA)</p>
                    </div>
                </div>
                <div class="trust-card">
                    <div class="trust-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="trust-info">
                        <h3>Réseau Agréé</h3>
                        <p>Revendeurs certifiés à Tana</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalogue -->
    <section id="catalogue" class="catalog">
        <div class="container">
            <div class="section-title reveal">
                <h2>Quel TECNO est fait pour vous ?</h2>
                <p>Découvrez nos modèles phares disponibles immédiatement.</p>
            </div>

            <div class="filter-container reveal">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="spark">Série SPARK (Access)</button>
                <button class="filter-btn" data-filter="camon">Série CAMON (Photo)</button>
                <button class="filter-btn" data-filter="phantom">Série PHANTOM (Luxe)</button>
            </div>

            <div class="products-grid" id="products-grid">
                <!-- Products injected via JS -->
            </div>
        </div>
    </section>

    <!-- Store Locator -->
    <section id="locator" class="locator">
        <div class="container">
            <div class="section-title reveal">
                <h2>Trouvez un revendeur à Tana</h2>
                <p>Fini les arnaques. Rendez-vous chez nos partenaires agréés.</p>
            </div>

            <div class="locator-layout reveal">
                <div class="locator-map">
                    <div class="map-placeholder"></div>
                    <!-- Mock Google Map Pin -->
                    <div style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -100%); color: var(--primary-blue); font-size: 3rem; filter: drop-shadow(0 5px 10px rgba(0,0,0,0.3));">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                </div>
                <div class="locator-list">
                    <div class="search-bar">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Votre quartier (ex: Analakely, Ankorondrano)...">
                    </div>
                    
                    <div class="store-item">
                        <div class="store-name">Mass'In Digital <span class="store-badge">Agréé</span></div>
                        <div class="store-address">Centre Commercial La City, Ivandry</div>
                        <a href="#" style="color: var(--primary-blue); font-size: 0.85rem; margin-top: 8px; display: inline-block;">Itinéraire -></a>
                    </div>
                    <div class="store-item">
                        <div class="store-name">Techno Store <span class="store-badge">Agréé</span></div>
                        <div class="store-address">Galerie Zoom, Ankorondrano</div>
                        <a href="#" style="color: var(--primary-blue); font-size: 0.85rem; margin-top: 8px; display: inline-block;">Itinéraire -></a>
                    </div>
                    <div class="store-item">
                        <div class="store-name">Smart World <span class="store-badge">Agréé</span></div>
                        <div class="store-address">Avenue de l'Indépendance, Analakely</div>
                        <a href="#" style="color: var(--primary-blue); font-size: 0.85rem; margin-top: 8px; display: inline-block;">Itinéraire -></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SAV Section -->
    <section id="sav" class="sav">
        <div class="container">
            <div class="sav-content reveal">
                <div class="sav-text">
                    <h2>Un écran cassé ? Une panne ?</h2>
                    <p>Pas de panique. En achetant officiel, vous profitez du support Carlcare à Madagascar. Nos techniciens certifiés utilisent des pièces d'origine pour garantir la longévité de votre appareil.</p>
                    <a href="#" class="btn" style="background: transparent; border: 2px solid white; color: white;">
                        LOCALISER UN CENTRE DE RÉPARATION
                    </a>
                </div>
                <div class="sav-img">
                    <!-- Premium Repair Image -->
                    <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a783?q=80&w=2070&auto=format&fit=crop" alt="Réparation smartphone">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <span class="footer-logo">TECNO MG</span>
                    <p class="footer-desc">Le site de référence pour l'achat de smartphones TECNO authentiques à Madagascar. Qualité, Garantie et Service Client.</p>
                </div>
                <div class="footer-col">
                    <h4>Produits</h4>
                    <ul class="footer-links">
                        <li><a href="#">Série SPARK</a></li>
                        <li><a href="#">Série CAMON</a></li>
                        <li><a href="#">Série PHANTOM</a></li>
                        <li><a href="#">Accessoires</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Vérifier Garantie</a></li>
                        <li><a href="#">Centres Carlcare</a></li>
                        <li><a href="#">Contactez-nous</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 TECNO Mobile Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JavaScript -->
    <script>
        // ---------------------------------------------------------
        // 1. CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE)
        // ---------------------------------------------------------
        // INSTRUCTIONS CLIENT : Remplacez l'URL ci-dessous par le lien de votre logo final (PNG Transparent recommandé)
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-container');
        if (logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="TECNO Mobile Madagascar Logo">`;
        }

        // ---------------------------------------------------------
        // 2. DONNÉES PRODUITS
        // ---------------------------------------------------------
        const products = [
            {
                id: 1,
                name: "TECNO Spark 10 Pro",
                category: "spark",
                specs: ["256GB ROM", "16GB RAM", "32MP Selfie"],
                price: "680,000",
                badge: "Best Seller",
                image: "https://images.unsplash.com/photo-1598327105666-5b89351aff23?q=80&w=2000&auto=format&fit=crop" // Mockup Phone
            },
            {
                id: 2,
                name: "TECNO Camon 20 Premier",
                category: "camon",
                specs: ["512GB ROM", "8GB RAM", "108MP Ultra"],
                price: "1,450,000",
                badge: "Photophone",
                image: "https://images.unsplash.com/photo-1616348436168-de43ad0db179?q=80&w=1981&auto=format&fit=crop"
            },
            {
                id: 3,
                name: "TECNO Phantom V Fold",
                category: "phantom",
                specs: ["Pliable 5G", "12GB RAM", "Ecran 120Hz"],
                price: "4,200,000",
                badge: "Luxe",
                image: "https://images.unsplash.com/photo-1603923407982-936611f77d61?q=80&w=2070&auto=format&fit=crop"
            },
            {
                id: 4,
                name: "TECNO Spark Go 2024",
                category: "spark",
                specs: ["64GB ROM", "4GB RAM", "Batterie 5000mAh"],
                price: "450,000",
                badge: "Entrée de gamme",
                image: "https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?q=80&w=1858&auto=format&fit=crop"
            },
            {
                id: 5,
                name: "TECNO Camon 20 Pro",
                category: "camon",
                specs: ["256GB ROM", "8GB RAM", "Amoled"],
                price: "1,100,000",
                badge: "Nouveauté",
                image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=2080&auto=format&fit=crop"
            }
        ];

        // ---------------------------------------------------------
        // 3. LOGIQUE D'AFFICHAGE & FILTRES
        // ---------------------------------------------------------
        const productsGrid = document.getElementById('products-grid');
        const filterBtns = document.querySelectorAll('.filter-btn');

        function displayProducts(filter = 'all') {
            productsGrid.innerHTML = '';
            
            const filtered = filter === 'all' 
                ? products 
                : products.filter(p => p.category === filter);

            filtered.forEach(product => {
                const card = document.createElement('div');
                card.className = 'product-card reveal';
                
                // Specs generation
                const specsHtml = product.specs.map(spec => `<span>${spec}</span>`).join('');

                card.innerHTML = `
                    <div class="product-image-container">
                        <span class="badge">${product.badge}</span>
                        <img src="${product.image}" alt="${product.name}">
                    </div>
                    <div class="product-info">
                        <div class="product-category">${product.category} Series</div>
                        <h3 class="product-title">${product.name}</h3>
                        <div class="product-specs">${specsHtml}</div>
                        <div class="product-price">${product.price} Ar</div>
                        <button class="product-cta">Voir fiche technique</button>
                    </div>
                `;
                productsGrid.appendChild(card);
            });

            // Re-trigger animations for new elements
            observeElements();
        }

        // Event Listeners for Filters
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active to clicked
                btn.classList.add('active');
                // Filter
                displayProducts(btn.dataset.filter);
            });
        });

        // Initial Load
        displayProducts();

        // ---------------------------------------------------------
        // 4. SCROLL EFFECTS & ANIMATIONS
        // ---------------------------------------------------------
        
        // Sticky Header Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const navToggle = document.getElementById('nav-toggle');
        const navLinks = document.getElementById('nav-links');

        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Scroll Animation (Intersection Observer)
        function observeElements() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        }

        observeElements();

    </script>
</body>
</html>