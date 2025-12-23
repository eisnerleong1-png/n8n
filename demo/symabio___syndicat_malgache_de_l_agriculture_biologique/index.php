<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symabio | Syndicat Agriculture Biologique Madagascar</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-green: #356733;
            --primary-dark: #244a22;
            --accent-yellow: #FCE83A;
            --accent-yellow-hover: #e0ce33;
            --text-dark: #1a1a1a;
            --text-light: #555555;
            --white: #ffffff;
            --off-white: #f8f9fa;
            --gradient-overlay: linear-gradient(180deg, rgba(0,0,0,0.6) 0%, rgba(53,103,51,0.4) 100%);
            --shadow-card: 0 10px 40px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 60px -15px rgba(0,0,0,0.15);
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
            font-family: 'Outfit', sans-serif;
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        /* UTILS */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--white); }
        .text-green { color: var(--primary-green); }

        /* BUTTONS */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 50px;
            transition: var(--transition);
            cursor: pointer;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-family: 'Outfit', sans-serif;
        }

        .btn-primary {
            background-color: var(--accent-yellow);
            color: var(--text-dark);
            box-shadow: 0 4px 15px rgba(252, 232, 58, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--accent-yellow-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(252, 232, 58, 0.4);
        }

        .btn-secondary {
            border: 2px solid var(--white);
            color: var(--white);
            background: transparent;
        }

        .btn-secondary:hover {
            background: var(--white);
            color: var(--primary-green);
            transform: translateY(-3px);
        }

        .btn-green {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .btn-green:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(53, 103, 51, 0.3);
        }

        /* HEADER */
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
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            color: var(--white);
            font-size: 0.95rem;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-yellow);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        header.scrolled .nav-link {
            color: var(--primary-green);
        }

        .mobile-menu-btn {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-menu-btn {
            color: var(--primary-green);
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1625246333195-78d9c38ad449?q=80&w=1770&auto=format&fit=crop');
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
            background: var(--gradient-overlay);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            color: var(--white);
            padding-top: 80px; /* Avoid header overlap */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 24px;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            margin-bottom: 40px;
            font-weight: 300;
            max-width: 600px;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* TRUST BAR */
        .trust-bar {
            background-color: var(--off-white);
            padding: 60px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .trust-title {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #888;
            margin-bottom: 40px;
            font-weight: 600;
        }

        .logos-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .partner-logo {
            font-size: 1.5rem;
            color: #ccc; /* Placeholder style for icons representing logos */
            filter: grayscale(100%);
            opacity: 0.6;
            transition: var(--transition);
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
            color: var(--primary-green);
        }

        /* VALUE PROP */
        .value-prop {
            background-color: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-header h2 {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 16px;
        }

        .section-header p {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .value-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 20px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-color: transparent;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background-color: rgba(53, 103, 51, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--primary-green);
            margin-bottom: 24px;
            transition: var(--transition);
        }

        .value-card:hover .icon-box {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            color: var(--text-dark);
        }

        .value-card p {
            color: var(--text-light);
            font-size: 1rem;
        }

        /* DIRECTORY / MAP */
        .directory {
            background-color: var(--off-white);
            position: relative;
            overflow: hidden;
        }

        .directory-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .directory-content h2 {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 24px;
        }

        .directory-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 40px;
        }

        .search-box {
            background: var(--white);
            padding: 10px;
            border-radius: 50px;
            display: flex;
            box-shadow: var(--shadow-card);
            margin-bottom: 30px;
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 15px 25px;
            font-size: 1rem;
            outline: none;
            border-radius: 50px 0 0 50px;
        }

        .search-btn {
            background: var(--primary-green);
            color: var(--white);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-btn:hover {
            background: var(--primary-dark);
        }

        .directory-visual {
            position: relative;
        }

        .map-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            position: relative;
        }

        .map-card img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            filter: brightness(0.9);
        }

        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(5px);
            padding: 20px;
            border-radius: 15px;
        }

        .stat-badge {
            display: inline-block;
            padding: 5px 12px;
            background: var(--accent-yellow);
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        /* NEWS - BENTO GRID */
        .news {
            background-color: var(--white);
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 300px);
            gap: 24px;
        }

        .bento-item {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            cursor: pointer;
            transition: var(--transition);
        }

        .bento-item:hover {
            transform: scale(0.98);
        }

        .bento-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .bento-item:hover img {
            transform: scale(1.1);
        }

        .bento-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
            color: var(--white);
        }

        .bento-tag {
            background: var(--accent-yellow);
            color: var(--text-dark);
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: inline-block;
        }

        .bento-large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .bento-title {
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
            margin-bottom: 10px;
        }

        .bento-large .bento-title {
            font-size: 2.5rem;
        }

        /* MEMBERSHIP */
        .membership {
            background-color: var(--primary-green);
            color: var(--white);
            text-align: center;
        }

        .membership h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .membership-cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 60px;
            flex-wrap: wrap;
        }

        .plan-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 40px;
            border-radius: 24px;
            width: 350px;
            text-align: left;
            transition: var(--transition);
        }

        .plan-card:hover {
            background: var(--white);
            transform: translateY(-10px);
        }

        .plan-card:hover h3, 
        .plan-card:hover .price, 
        .plan-card:hover li {
            color: var(--text-dark);
        }

        .plan-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .plan-card .price {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 30px;
            font-family: 'Outfit', sans-serif;
        }

        .plan-card .price span {
            font-size: 1rem;
            font-weight: 400;
            opacity: 0.8;
        }

        .plan-card ul {
            margin-bottom: 40px;
        }

        .plan-card li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0.9;
        }

        .plan-card li i {
            color: var(--accent-yellow);
        }
        
        .plan-card:hover li i {
            color: var(--primary-green);
        }

        /* FOOTER */
        footer {
            background-color: #1a1a1a;
            color: #888;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-brand p {
            margin-top: 20px;
            max-width: 300px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 24px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col a:hover {
            color: var(--accent-yellow);
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .newsletter-form input {
            padding: 12px;
            border-radius: 4px;
            border: none;
            background: #333;
            color: var(--white);
            flex: 1;
        }

        .newsletter-form button {
            background: var(--accent-yellow);
            border: none;
            padding: 0 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 700;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 30px;
            text-align: center;
            font-size: 0.9rem;
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .directory-container {
                grid-template-columns: 1fr;
            }
            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .bento-large {
                grid-column: span 2;
                grid-row: span 1;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                padding: 20px;
                gap: 20px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                clip-path: circle(0% at 100% 0);
                transition: clip-path 0.5s ease-in-out;
            }
            
            .nav-links.active {
                clip-path: circle(150% at 100% 0);
            }

            .nav-link {
                color: var(--text-dark);
                font-size: 1.2rem;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .bento-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
            
            .bento-large {
                grid-column: span 1;
                height: 300px;
            }
            
            .bento-item {
                height: 300px;
            }
        }
        
        /* ANIMATION UTILS */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-link">
                <!-- Img tag populated by JS -->
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#" class="nav-link">Accueil</a></li>
                    <li><a href="#" class="nav-link">Le Syndicat</a></li>
                    <li><a href="#" class="nav-link">Annuaire</a></li>
                    <li><a href="#" class="nav-link">Actualités</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
                    <li><a href="#" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem;">Adhérer</a></li>
                </ul>
            </nav>
            
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content reveal active">
            <h1>Unissons nos forces pour une Agriculture Biologique Malagasy certifiée et prospère.</h1>
            <p>Rejoignez le réseau officiel des opérateurs Bio à Madagascar. Défense des intérêts, accès aux marchés internationaux et accompagnement technique depuis plus de 10 ans.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Devenir Adhérent</a>
                <a href="#" class="btn btn-secondary">Explorer l'Annuaire</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-title">Ils soutiennent la filière Bio</div>
            <div class="logos-grid">
                <!-- Using Text/Icons as placeholder for partner logos for elegant demo -->
                <div class="partner-logo"><i class="fas fa-landmark"></i> MINAE</div>
                <div class="partner-logo"><i class="fas fa-leaf"></i> ECOCERT</div>
                <div class="partner-logo"><i class="fas fa-globe-africa"></i> AFD</div>
                <div class="partner-logo"><i class="fas fa-hand-holding-seed"></i> IFAD</div>
                <div class="partner-logo"><i class="fas fa-certificate"></i> BUREAU VERITAS</div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="section-padding value-prop">
        <div class="container">
            <div class="section-header reveal">
                <h2>Pourquoi rejoindre Symabio ?</h2>
                <p>Une structure dédiée à la croissance de votre activité.</p>
            </div>

            <div class="cards-grid">
                <!-- Card 1 -->
                <div class="value-card reveal">
                    <div class="icon-box">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Représentation & Lobbying</h3>
                    <p>Nous portons votre voix auprès de l'État pour une réglementation favorable et défendons les intérêts de la filière bio malgache.</p>
                </div>

                <!-- Card 2 -->
                <div class="value-card reveal" style="transition-delay: 0.1s;">
                    <div class="icon-box">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3>Accès aux Ressources</h3>
                    <p>Guides de certification, veille réglementaire internationale et accès exclusif à nos formations techniques spécialisées.</p>
                </div>

                <!-- Card 3 -->
                <div class="value-card reveal" style="transition-delay: 0.2s;">
                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Visibilité Internationale</h3>
                    <p>Intégrez l'annuaire de référence consulté par les acheteurs mondiaux et participez aux salons internationaux sous notre bannière.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Directory Section -->
    <section class="section-padding directory">
        <div class="container directory-container">
            <div class="directory-content reveal">
                <h2>Connectez-vous avec les acteurs du Bio.</h2>
                <p>Trouvez rapidement des producteurs, transformateurs et exportateurs certifiés à travers tout Madagascar.</p>
                
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Rechercher par produit (ex: Vanille, Girofle)...">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>

                <a href="#" class="btn btn-green">Accéder à l'annuaire complet</a>
            </div>

            <div class="directory-visual reveal">
                <div class="map-card">
                    <!-- Image suggesting a map or listing -->
                    <img src="https://images.unsplash.com/photo-1555447405-058428d65699?q=80&w=2070&auto=format&fit=crop" alt="Carte Madagascar Bio">
                    <div class="map-overlay">
                        <span class="stat-badge">250+ Adhérents</span>
                        <h4>Réseau National</h4>
                        <p style="margin:0; font-size: 0.9rem;">Couverture de 12 régions productrices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section (Bento Grid) -->
    <section class="section-padding news">
        <div class="container">
            <div class="section-header reveal">
                <h2>L'actualité de la filière</h2>
                <p>Restez informé des évolutions du marché et de la réglementation.</p>
            </div>

            <div class="bento-grid">
                <!-- Large Item -->
                <div class="bento-item bento-large reveal">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb7d5c73?q=80&w=2070&auto=format&fit=crop" alt="Loi Finance">
                    <div class="bento-content">
                        <span class="bento-tag">Réglementation</span>
                        <h3 class="bento-title">Nouvelle Loi de Finances 2025 : Impacts sur l'exportation Bio</h3>
                        <p>Analyse détaillée des nouvelles mesures fiscales et opportunités pour les exportateurs.</p>
                    </div>
                </div>

                <!-- Small Item 1 -->
                <div class="bento-item reveal">
                    <img src="https://images.unsplash.com/photo-1595839088656-324317769999?q=80&w=2070&auto=format&fit=crop" alt="Meeting">
                    <div class="bento-content">
                        <span class="bento-tag">Événement</span>
                        <h3 class="bento-title">BioFach 2025</h3>
                        <p>Inscriptions ouvertes pour le pavillon Madagascar.</p>
                    </div>
                </div>

                <!-- Small Item 2 -->
                <div class="bento-item reveal">
                    <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?q=80&w=2071&auto=format&fit=crop" alt="Farming">
                    <div class="bento-content">
                        <span class="bento-tag">Formation</span>
                        <h3 class="bento-title">Certification UE</h3>
                        <p>Atelier technique le 12 Mars.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Section -->
    <section class="section-padding membership">
        <div class="container">
            <div class="reveal">
                <h2>Donnez de la puissance à votre activité</h2>
                <p class="text-white" style="opacity: 0.9;">Rejoignez une communauté d'élite engagée pour l'excellence.</p>
            </div>

            <div class="membership-cards reveal">
                <!-- Plan Card -->
                <div class="plan-card">
                    <h3>Coopérative</h3>
                    <div class="price">300k<span> Ar/an</span></div>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Accès Espace Membre</li>
                        <li><i class="fas fa-check-circle"></i> Annuaire digital</li>
                        <li><i class="fas fa-check-circle"></i> Invitation AG</li>
                    </ul>
                    <a href="#" class="btn btn-primary" style="width: 100%;">J'adhère</a>
                </div>

                <!-- Plan Card -->
                <div class="plan-card" style="background: var(--white); color: var(--text-dark);">
                    <div style="position: absolute; top: -15px; right: 20px; background: var(--accent-yellow); padding: 5px 15px; border-radius: 20px; font-weight: bold; font-size: 0.8rem;">POPULAIRE</div>
                    <h3 style="color: var(--primary-green);">Exportateur</h3>
                    <div class="price" style="color: var(--text-dark);">1.5M<span> Ar/an</span></div>
                    <ul style="color: var(--text-dark);">
                        <li style="color: var(--text-dark);"><i class="fas fa-check-circle" style="color: var(--primary-green);"></i> Tous les avantages Coop</li>
                        <li style="color: var(--text-dark);"><i class="fas fa-check-circle" style="color: var(--primary-green);"></i> Priorité Salons Internationaux</li>
                        <li style="color: var(--text-dark);"><i class="fas fa-check-circle" style="color: var(--primary-green);"></i> Lobbying direct</li>
                        <li style="color: var(--text-dark);"><i class="fas fa-check-circle" style="color: var(--primary-green);"></i> Veille juridique avancée</li>
                    </ul>
                    <a href="#" class="btn btn-green" style="width: 100%;">J'adhère</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3 style="color: var(--white); font-family: 'Playfair Display';">SYMABIO</h3>
                    <p>Le Syndicat Malgache de l'Agriculture Biologique œuvre pour la promotion et la défense de la filière Bio à Madagascar et à l'international.</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Annuaire</a></li>
                        <li><a href="#">Adhésion</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Légal</h4>
                    <ul>
                        <li><a href="#">Statuts</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p>Recevez la veille sectorielle.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Email...">
                        <button>OK</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Symabio. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // LOGO INTEGRATION - STRICT REQUIREMENT
        const LOGO_URL = "logo.jpg";
        
        // Insert Logo
        const logoLink = document.querySelector('.logo-link');
        const img = document.createElement('img');
        img.src = LOGO_URL;
        img.alt = "Symabio Logo";
        img.className = "logo-img";
        logoLink.appendChild(img);

        // Header Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Intersection Observer for Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>