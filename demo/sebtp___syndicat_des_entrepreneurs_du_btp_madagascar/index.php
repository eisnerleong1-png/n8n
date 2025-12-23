<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEBTP Madagascar | Syndicat des Entreprises BTP</title>
    
    <!-- Fonts: Barlow (Industrial/Modern) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -------------------------------------------------------------------
           1. RESET & VARIABLES
        ------------------------------------------------------------------- */
        :root {
            --color-primary: #F79E1B; /* Orange Action */
            --color-dark: #2C3640;    /* Charcoal Blue */
            --color-text: #546476;    /* Slate Grey */
            --color-light: #F5F7FA;   /* Light Grey Bg */
            --color-white: #ffffff;
            --font-main: 'Barlow', sans-serif;
            --shadow-card: 0 10px 30px rgba(44, 54, 64, 0.08);
            --shadow-hover: 0 20px 40px rgba(44, 54, 64, 0.12);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --container-width: 1280px;
            --header-height: 90px;
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
            font-family: var(--font-main);
            color: var(--color-text);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* -------------------------------------------------------------------
           2. UTILITIES & TYPOGRAPHY
        ------------------------------------------------------------------- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        h1, h2, h3, h4 {
            color: var(--color-dark);
            font-weight: 700;
            line-height: 1.2;
        }

        .text-center { text-align: center; }
        .text-primary { color: var(--color-primary); }
        .text-white { color: var(--color-white); }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: var(--color-white);
            border: 2px solid var(--color-primary);
        }
        .btn-primary:hover {
            background-color: transparent;
            color: var(--color-primary);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-white);
            border: 2px solid var(--color-white);
        }
        .btn-secondary:hover {
            background-color: var(--color-white);
            color: var(--color-dark);
        }

        .btn-link {
            padding: 0;
            color: var(--color-dark);
            border-bottom: 2px solid var(--color-dark);
            border-radius: 0;
            font-weight: 700;
        }
        .btn-link:hover {
            color: var(--color-primary);
            border-color: var(--color-primary);
        }

        /* -------------------------------------------------------------------
           3. HEADER (STICKY & TRANSPARENT)
        ------------------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--header-height);
            z-index: 1000;
            transition: var(--transition);
            display: flex;
            align-items: center;
            background: transparent; /* Initial transparency */
        }

        header.scrolled {
            background: rgba(44, 54, 64, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo img {
            height: 50px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 32px;
        }

        .nav-links a {
            color: var(--color-white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--color-primary);
            transition: width 0.3s;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }

        .header-ctas {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-member {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--color-white);
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        header.scrolled .btn-member {
             /* Keep white on scrolled dark bg */
        }

        .btn-adhere-header {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 10px 24px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9rem;
        }
        .btn-adhere-header:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(247, 158, 27, 0.3);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* -------------------------------------------------------------------
           4. HERO SECTION
        ------------------------------------------------------------------- */
        #hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: 0; /* Ensures no gap */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Unsplash Image: Large Construction Site */
            background-image: linear-gradient(rgba(44, 54, 64, 0.6), rgba(44, 54, 64, 0.8)), url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            z-index: 1;
            /* Ken Burns Effect */
            animation: zoomEffect 20s infinite alternate;
        }

        @keyframes zoomEffect {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            margin-top: var(--header-height); /* Prevent overlap with header */
        }

        .hero-title {
            font-size: 3.5rem;
            color: var(--color-white);
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* -------------------------------------------------------------------
           5. TRUST BAR (LOGOS)
        ------------------------------------------------------------------- */
        #partners {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .partners-title {
            text-align: center;
            font-size: 0.9rem;
            color: #8899A6;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .logo-slider {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 48px;
            opacity: 0.6;
        }
        
        .logo-slider img {
            height: 40px; /* Mockup height */
            filter: grayscale(100%);
            transition: var(--transition);
        }
        .logo-slider img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* -------------------------------------------------------------------
           6. VALUE PROPS
        ------------------------------------------------------------------- */
        #value-props {
            background-color: var(--color-light);
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
            margin-bottom: 16px;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
        }

        .card {
            background: var(--color-white);
            padding: 40px 32px;
            border-radius: 12px;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border-top: 4px solid transparent;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-top: 4px solid var(--color-primary);
        }

        .card-icon {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-bottom: 24px;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .card p {
            color: var(--color-text);
            font-size: 1rem;
        }

        /* -------------------------------------------------------------------
           7. FEATURE HIGHLIGHT (DIRECTORY)
        ------------------------------------------------------------------- */
        #feature {
            padding: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        .feature-image {
            /* Unsplash: Person using tablet/plans */
            background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        
        .feature-image::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(44, 54, 64, 0.2);
        }

        .feature-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px;
            background-color: var(--color-white);
        }

        .feature-content h2 {
            font-size: 2.5rem;
            margin-bottom: 24px;
        }

        .feature-content p {
            font-size: 1.1rem;
            margin-bottom: 32px;
            max-width: 500px;
        }

        /* -------------------------------------------------------------------
           8. NEWS & AGENDA
        ------------------------------------------------------------------- */
        #news-agenda {
            background-color: var(--color-light);
        }

        .news-layout {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 48px;
        }

        /* Agenda Column */
        .agenda-column h3 {
            margin-bottom: 32px;
            border-bottom: 2px solid var(--color-primary);
            padding-bottom: 10px;
            display: inline-block;
        }

        .event-item {
            background: var(--color-white);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            gap: 20px;
            transition: var(--transition);
        }
        
        .event-item:hover {
            box-shadow: var(--shadow-card);
        }

        .event-date {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(247, 158, 27, 0.1);
            color: var(--color-primary);
            padding: 10px;
            border-radius: 6px;
            min-width: 70px;
            text-align: center;
        }
        
        .event-date span:first-child { font-size: 1.5rem; font-weight: 700; line-height: 1; }
        .event-date span:last-child { font-size: 0.8rem; font-weight: 600; text-transform: uppercase; }

        .event-info h4 { font-size: 1.1rem; margin-bottom: 4px; }
        .event-info p { font-size: 0.9rem; color: #888; }

        /* News Column */
        .news-column h3 {
            margin-bottom: 32px;
            border-bottom: 2px solid var(--color-primary);
            padding-bottom: 10px;
            display: inline-block;
        }

        .news-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            height: 400px;
            /* Unsplash: Modern Building */
            background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        .news-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(transparent, var(--color-dark));
            padding: 40px;
            color: var(--color-white);
        }

        .news-tag {
            background: var(--color-primary);
            color: var(--color-white);
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 12px;
            display: inline-block;
        }

        .news-overlay h2 {
            color: var(--color-white);
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        /* -------------------------------------------------------------------
           9. ABOUT & STATS
        ------------------------------------------------------------------- */
        #about {
            background-color: var(--color-dark);
            color: var(--color-white);
        }

        .about-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px auto;
        }
        
        .about-content h2 { color: var(--color-white); margin-bottom: 20px; }
        .about-content p { font-size: 1.1rem; opacity: 0.8; }

        .stats-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 60px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--color-primary);
            display: block;
            line-height: 1;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--color-white);
            opacity: 0.7;
        }

        /* -------------------------------------------------------------------
           10. FOOTER
        ------------------------------------------------------------------- */
        footer {
            background-color: #1a2229;
            color: rgba(255, 255, 255, 0.7);
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            color: var(--color-white);
            margin-bottom: 24px;
            font-size: 1.1rem;
        }

        .footer-logo img {
            max-width: 150px;
            margin-bottom: 16px;
        }

        .footer-links li {
            margin-bottom: 12px;
        }
        .footer-links a:hover {
            color: var(--color-primary);
        }

        .footer-contact li {
            margin-bottom: 16px;
            display: flex;
            gap: 12px;
        }
        .footer-contact i {
            color: var(--color-primary);
            margin-top: 4px;
        }

        .newsletter-form {
            display: flex;
            margin-top: 16px;
        }
        .newsletter-form input {
            padding: 12px;
            border: none;
            border-radius: 4px 0 0 4px;
            width: 100%;
            outline: none;
        }
        .newsletter-form button {
            background: var(--color-primary);
            border: none;
            color: white;
            padding: 0 16px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 24px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        /* -------------------------------------------------------------------
           RESPONSIVE
        ------------------------------------------------------------------- */
        @media (max-width: 1024px) {
            .hero-title { font-size: 2.8rem; }
            .cards-grid { grid-template-columns: 1fr; }
            .feature-content { padding: 40px; }
            .news-layout { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            :root { --header-height: 70px; }
            
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--color-dark);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                z-index: 999;
            }
            .nav-links.active { right: 0; }
            
            .mobile-menu-btn { display: block; z-index: 1001; }
            
            .header-ctas { display: none; } /* Hide CTAs on mobile for space */
            
            #feature { grid-template-columns: 1fr; grid-template-rows: 300px auto; }
            
            .footer-grid { grid-template-columns: 1fr; }
            .hero-title { font-size: 2.2rem; }
            .hero-subtitle { font-size: 1rem; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="main-header">
        <div class="container header-inner">
            <div class="logo">
                <img id="brand-logo" alt="SEBTP Logo">
            </div>

            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#">Qui sommes-nous</a></li>
                    <li><a href="#">L'Annuaire</a></li>
                    <li><a href="#">Actualités & Veille</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <div class="header-ctas">
                <a href="#" class="btn-member">
                    <i class="fas fa-lock"></i> Espace Membre
                </a>
                <a href="#" class="btn-adhere-header">Devenir Adhérent</a>
            </div>

            <div class="mobile-menu-btn" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <h1 class="hero-title">Fédérer, Défendre et Promouvoir les bâtisseurs de Madagascar.</h1>
            <h2 class="hero-subtitle">Rejoignez le réseau de référence des entrepreneurs du BTP. Ensemble, construisons un environnement d'affaires sécurisé et performant.</h2>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Demander mon dossier d'adhésion</a>
                <a href="#" class="btn btn-secondary">Découvrir nos missions</a>
            </div>
        </div>
    </section>

    <!-- Partners / Trust Bar -->
    <section id="partners">
        <div class="container">
            <p class="partners-title">Ils font avancer le secteur avec nous :</p>
            <div class="logo-slider">
                <!-- Placeholder SVGs for logos to avoid external dependencies breaking visually -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Colas_Group_logo.svg" alt="Colas">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Sogea-Satom_logo.svg" alt="Sogea Satom">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Eiffage_20xx_logo.svg" alt="Eiffage">
                <!-- Generic partner icons for demo -->
                <img src="https://via.placeholder.com/150x50/cccccc/ffffff?text=Ministère+TP" alt="Ministère TP">
                <img src="https://via.placeholder.com/150x50/cccccc/ffffff?text=Partenaire+Loc" alt="Local Partner">
            </div>
        </div>
    </section>

    <!-- Value Propositions -->
    <section id="value-props" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Pourquoi le SEBTP est indispensable à votre croissance ?</h2>
                <p>Une structure solide pour accompagner votre développement.</p>
            </div>
            
            <div class="cards-grid">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>Représentation & Lobbying</h3>
                    <p>Une voix unique pour défendre vos intérêts auprès des pouvoirs publics et bailleurs de fonds. Nous pesons dans les décisions.</p>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <div class="card-icon"><i class="fas fa-network-wired"></i></div>
                    <h3>Réseau & Opportunités</h3>
                    <p>Accédez à un annuaire qualifié et connectez-vous aux donneurs d'ordres. Multipliez vos partenariats stratégiques.</p>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <div class="card-icon"><i class="fas fa-book-reader"></i></div>
                    <h3>Veille & Formation</h3>
                    <p>Restez informé des normes, prix et réglementations en vigueur à Madagascar. Anticipez les évolutions du marché.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature: Directory -->
    <section id="feature">
        <div class="feature-image"></div>
        <div class="feature-content">
            <h2>Trouvez le partenaire de confiance certifié SEBTP.</h2>
            <p>Notre annuaire recense les entreprises vérifiées pour garantir la qualité de vos chantiers. Chaque membre répond à une charte de qualité stricte.</p>
            <div>
                <a href="#" class="btn-link">Explorer l'Annuaire des membres <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- News & Agenda -->
    <section id="news-agenda" class="section-padding">
        <div class="container">
            <div class="news-layout">
                <!-- Agenda -->
                <div class="agenda-column">
                    <h3>Agenda du Secteur</h3>
                    
                    <div class="event-item">
                        <div class="event-date">
                            <span>15</span>
                            <span>Nov</span>
                        </div>
                        <div class="event-info">
                            <h4>Petit-déjeuner débat</h4>
                            <p>Hôtel Carlton, Anosy</p>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">
                            <span>22</span>
                            <span>Nov</span>
                        </div>
                        <div class="event-info">
                            <h4>Formation Sécurité Chantier</h4>
                            <p>Siège SEBTP</p>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-date">
                            <span>05</span>
                            <span>Déc</span>
                        </div>
                        <div class="event-info">
                            <h4>Assemblée Générale</h4>
                            <p>CCI Ivato</p>
                        </div>
                    </div>

                    <a href="#" class="btn-link">Voir tout l'agenda</a>
                </div>

                <!-- Blog/News -->
                <div class="news-column">
                    <h3>À la une</h3>
                    <div class="news-card">
                        <div class="news-overlay">
                            <span class="news-tag">Réglementation</span>
                            <h2>Nouvelles normes construction 2024 : ce qui change pour les appels d'offres</h2>
                            <p>Décryptage des nouveaux textes de loi et impacts sur vos marchés publics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Stats -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-content">
                <h2>Au service de la profession depuis 1995.</h2>
                <p>Le SEBTP est l'organisation représentative des entreprises de Bâtiment et de Travaux Publics à Madagascar. Nous œuvrons chaque jour pour un secteur structuré, éthique et performant.</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">450+</span>
                    <span class="stat-label">Entreprises Membres</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">29</span>
                    <span class="stat-label">Années d'existence</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15</span>
                    <span class="stat-label">Partenaires Stratégiques</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-logo">
                    <img id="footer-logo-img" alt="SEBTP Logo White">
                    <p style="font-size: 0.9rem; line-height: 1.5;">Syndicat des Entrepreneurs du BTP. La référence de la construction à Madagascar.</p>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i> 12 Rue des Entrepreneurs, Antananarivo 101</li>
                        <li><i class="fas fa-phone"></i> +261 20 22 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@sebtp.mg</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#">Devenir Membre</a></li>
                        <li><a href="#">Annuaire</a></li>
                        <li><a href="#">Espace Presse</a></li>
                        <li><a href="#">FAQ & Aide</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p style="margin-bottom: 12px; font-size: 0.9rem;">Recevez la veille BTP hebdo directement par email.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Votre email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <div class="copyright">
                &copy; 2024 SEBTP Madagascar. Tous droits réservés. Mentions Légales.
            </div>
        </div>
    </footer>

    <script>
        // -------------------------------------------------------------------
        // 1. GESTION DU LOGO (INSTRUCTION STRICTE)
        // -------------------------------------------------------------------
        const LOGO_URL = "logo.jpg";
        
        // Application du logo dans le header
        document.getElementById('brand-logo').src = LOGO_URL;
        
        // Application du logo dans le footer (même image pour la demo)
        document.getElementById('footer-logo-img').src = LOGO_URL;


        // -------------------------------------------------------------------
        // 2. STICKY HEADER INTERACTION
        // -------------------------------------------------------------------
        const header = document.getElementById('main-header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });


        // -------------------------------------------------------------------
        // 3. MOBILE MENU TOGGLE
        // -------------------------------------------------------------------
        const mobileToggle = document.getElementById('mobile-toggle');
        const navLinks = document.getElementById('nav-links');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // -------------------------------------------------------------------
        // 4. ANIMATION ON SCROLL (FADE UP)
        // -------------------------------------------------------------------
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

        // Apply fade-up to cards and feature text
        const animatedElements = document.querySelectorAll('.card, .feature-content, .event-item');
        
        animatedElements.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out";
            observer.observe(el);
        });
    </script>
</body>
</html>