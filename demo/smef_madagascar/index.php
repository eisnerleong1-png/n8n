<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMEF Madagascar | Froid Industriel & Climatisation</title>
    <meta name="description" content="Leader du froid industriel et de la climatisation à Madagascar depuis 50 ans. Installation, maintenance et solutions énergétiques pour professionnels.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary-blue: #073164;
            --primary-blue-dark: #052349;
            --action-orange: #E85D28;
            --action-orange-hover: #d14d1b;
            --eco-green: #98C43C;
            --text-dark: #1A1A1A;
            --text-gray: #4A4A4A;
            --text-light: #F4F4F4;
            --white: #FFFFFF;
            --glass-bg: rgba(255, 255, 255, 0.95);
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 30px rgba(7, 49, 100, 0.1);
            --shadow-lg: 0 20px 50px rgba(7, 49, 100, 0.15);
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
            font-family: 'Roboto', sans-serif;
            color: var(--text-dark);
            background-color: #FAFAFA;
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
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
        }

        /* --- UTILS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-orange { color: var(--action-orange); }
        .text-blue { color: var(--primary-blue); }
        .text-green { color: var(--eco-green); }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 4px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition);
            cursor: pointer;
            border: 2px solid transparent;
        }

        .btn-primary {
            background-color: var(--action-orange);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(232, 93, 40, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--action-orange-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(232, 93, 40, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--primary-blue);
        }

        .btn-outline-blue {
            background-color: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-outline-blue:hover {
            background-color: var(--primary-blue);
            color: var(--white);
        }

        .btn-block {
            display: block;
            width: 100%;
            text-align: center;
        }

        /* --- HEADER --- */
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
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: var(--shadow-sm);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Ajustement pour logo.jpg */
            width: auto;
            object-fit: contain;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-link {
            color: var(--white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            transition: var(--transition);
        }

        header.scrolled .nav-link {
            color: var(--primary-blue);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--action-orange);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-cta {
            padding: 10px 24px;
            font-size: 0.9rem;
        }

        .hamburger {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .hamburger {
            color: var(--primary-blue);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(7, 49, 100, 0.7), rgba(7, 49, 100, 0.5)), url('https://images.unsplash.com/photo-1581094794329-cd2c2cef70cd?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax simple */
        }

        .hero-content {
            max-width: 800px;
            padding-top: 80px; /* Eviter collision header */
            color: var(--white);
            animation: fadeIn Up 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            letter-spacing: -1px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 650px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-title {
            text-align: center;
            color: var(--text-gray);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .logo-carousel {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 60px;
            opacity: 0.7;
        }

        /* Simulation de logos clients via texte stylisé */
        .client-logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: #ccc;
            transition: var(--transition);
            cursor: default;
        }
        
        .client-logo:hover {
            color: var(--primary-blue);
            transform: scale(1.05);
        }

        /* --- SERVICES --- */
        .services {
            background-color: #FAFAFA;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border-top: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .service-card.cold { border-top-color: var(--primary-blue); }
        .service-card.ac { border-top-color: #4A90E2; }
        .service-card.energy { border-top-color: var(--eco-green); }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 25px;
        }

        .service-card.cold .service-icon { color: var(--primary-blue); }
        .service-card.ac .service-icon { color: #4A90E2; }
        .service-card.energy .service-icon { color: var(--eco-green); }

        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
            color: var(--text-dark);
        }

        .service-card p {
            color: var(--text-gray);
            font-size: 0.95rem;
        }

        /* --- WHY SMEF --- */
        .why-us {
            background: var(--white);
            overflow: hidden;
        }

        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 0;
        }

        .why-image {
            height: 100%;
            min-height: 600px;
            background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        .why-content {
            padding: 80px;
        }

        .why-content h2 {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 30px;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .check-icon {
            background-color: rgba(152, 196, 60, 0.15);
            color: var(--eco-green);
            min-width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 3px;
        }

        .feature-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--primary-blue);
        }

        .feature-text p {
            font-size: 0.9rem;
            color: var(--text-gray);
        }

        /* --- HISTORY --- */
        .history {
            background-color: #F4F6F9;
            text-align: center;
        }

        .history-timeline {
            position: relative;
            max-width: 800px;
            margin: 50px auto 0;
            padding-left: 20px;
            text-align: left;
            border-left: 3px solid var(--primary-blue);
        }

        .timeline-item {
            margin-bottom: 40px;
            position: relative;
            padding-left: 30px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -11px;
            top: 5px;
            width: 19px;
            height: 19px;
            background: var(--white);
            border: 4px solid var(--primary-blue);
            border-radius: 50%;
        }

        .timeline-year {
            font-weight: 800;
            color: var(--action-orange);
            font-size: 1.2rem;
            display: block;
            margin-bottom: 5px;
        }

        .timeline-content h4 {
            font-size: 1.3rem;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }

        /* --- CONTACT SECTION --- */
        .contact {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 80px 0;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .contact-info p {
            margin-bottom: 30px;
            opacity: 0.8;
        }

        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: 8px;
            box-shadow: var(--shadow-lg);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(7, 49, 100, 0.1);
        }

        select.form-control {
            background-color: #fff;
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary-blue-dark);
            color: #aaa;
            padding: 60px 0 20px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 40px;
        }

        .footer-logo {
            margin-bottom: 20px;
            filter: brightness(0) invert(1); /* Logo blanc */
            width: 120px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a:hover {
            color: var(--action-orange);
            transition: 0.2s;
        }

        .copyright {
            text-align: center;
        }

        /* --- FLOATY BUTTON (Mobile) --- */
        .floaty-sav {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--action-orange);
            color: var(--white);
            padding: 15px 20px;
            border-radius: 50px;
            box-shadow: 0 4px 20px rgba(232, 93, 40, 0.4);
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 999;
            font-weight: 700;
            transition: var(--transition);
            animation: pulse 2s infinite;
        }

        .floaty-sav:hover {
            transform: scale(1.05);
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(232, 93, 40, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(232, 93, 40, 0); }
            100% { box-shadow: 0 0 0 0 rgba(232, 93, 40, 0); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .why-grid { grid-template-columns: 1fr; }
            .why-image { min-height: 400px; order: -1; }
            .contact-container { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--white);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            }
            
            .nav-menu.active {
                right: 0;
            }

            .nav-link { color: var(--text-dark) !important; font-size: 1.2rem; }
            .hamburger { display: block; z-index: 1001; }
            .hamburger.active { color: var(--text-dark); }
            
            .hero { text-align: center; }
            .hero-content { padding-top: 0; }
            .hero-buttons { justify-content: center; flex-direction: column; }
            .why-content { padding: 40px 20px; }
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo" id="logo-container">
                <!-- JS injects logo here -->
            </a>

            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#hero" class="nav-link">Accueil</a></li>
                    <li><a href="#services" class="nav-link">Froid Industriel</a></li>
                    <li><a href="#services" class="nav-link">Climatisation</a></li>
                    <li><a href="#services" class="nav-link">Énergie</a></li>
                    <li><a href="#about" class="nav-link">Nos Réalisations</a></li>
                    <li><a href="#contact" class="btn btn-primary nav-cta">Demander un Devis</a></li>
                </ul>
            </nav>

            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>50 Ans d'Excellence en Froid Industriel à Madagascar.</h1>
                <p>Installation, maintenance et solutions énergétiques pour les professionnels exigeants. Sécurisez votre chaîne du froid avec le leader du marché.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Parler à un ingénieur</a>
                    <a href="#about" class="btn btn-secondary">Voir nos réalisations</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <h3 class="trust-title">Ils font confiance à notre expertise</h3>
            <div class="logo-carousel">
                <span class="client-logo">STAR</span>
                <span class="client-logo">JUMBO</span>
                <span class="client-logo">RADISSON</span>
                <span class="client-logo">GALANA</span>
                <span class="client-logo">BOVIMA</span>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="services section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>Nos Domaines d'Expertise</h2>
                <p>Des solutions techniques sur-mesure pour garantir la performance de vos installations.</p>
            </div>

            <div class="services-grid">
                <!-- Card 1 -->
                <div class="service-card cold fade-in">
                    <div class="service-icon"><i class="fas fa-snowflake"></i></div>
                    <h3>Froid Industriel & Commercial</h3>
                    <p>Chambres froides positives et négatives, vitrines réfrigérées, tunnels de congélation. Conception respectant les normes d'hygiène les plus strictes.</p>
                </div>
                <!-- Card 2 -->
                <div class="service-card ac fade-in">
                    <div class="service-icon"><i class="fas fa-wind"></i></div>
                    <h3>Climatisation & Traitement d'Air</h3>
                    <p>Solutions VRV, Rooftop et centrales de traitement d'air pour bureaux, hôtels et industries. Qualité d'air et confort thermique optimal.</p>
                </div>
                <!-- Card 3 -->
                <div class="service-card energy fade-in">
                    <div class="service-icon"><i class="fas fa-solar-panel"></i></div>
                    <h3>Énergie & Solaire</h3>
                    <p>Réduisez votre facture Jirama. Installation de groupes électrogènes de secours et solutions photovoltaïques hybrides pour l'industrie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why SMEF -->
    <section id="about" class="why-us">
        <div class="why-grid">
            <div class="why-image"></div>
            <div class="why-content fade-in">
                <h2>Pourquoi choisir SMEF ?</h2>
                <div class="feature-list">
                    <div class="feature-item">
                        <div class="check-icon"><i class="fas fa-check"></i></div>
                        <div class="feature-text">
                            <h4>Bureau d'études intégré</h4>
                            <p>Nous ne sommes pas de simples installateurs. Nos ingénieurs dimensionnent vos besoins pour éviter la surconsommation énergétique.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="check-icon"><i class="fas fa-check"></i></div>
                        <div class="feature-text">
                            <h4>SAV Réactif 24/7</h4>
                            <p>La chaîne du froid n'attend pas. Intervention rapide sur Antananarivo et les grands axes provinciaux. Stock de pièces détachées garanti.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="check-icon"><i class="fas fa-check"></i></div>
                        <div class="feature-text">
                            <h4>Partenariats Mondiaux</h4>
                            <p>Distributeur agréé des grandes marques (Carrier, Bitzer). Matériel certifié et durable, adapté au climat tropical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History -->
    <section class="history section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>Notre Héritage</h2>
                <p>Depuis plus de 50 ans au cœur du développement industriel Malgache.</p>
            </div>
            <div class="history-timeline fade-in">
                <div class="timeline-item">
                    <span class="timeline-year">1972</span>
                    <div class="timeline-content">
                        <h4>Création de SMEF</h4>
                        <p>Lancement de l'atelier de réparation frigorifique à Antananarivo.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <span class="timeline-year">1995</span>
                    <div class="timeline-content">
                        <h4>Expansion Nationale</h4>
                        <p>Ouverture des agences en province (Tamatave, Majunga) pour servir l'industrie agroalimentaire.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <span class="timeline-year">2024</span>
                    <div class="timeline-content">
                        <h4>Leader de l'Efficacité Énergétique</h4>
                        <p>Intégration massive des solutions solaires hybrides pour nos clients industriels.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container contact-container">
            <div class="contact-info fade-in">
                <h2>Un projet ? <br>Une maintenance ?</h2>
                <p>Ne laissez pas votre production au hasard. Contactez nos experts pour une étude chiffrée et précise.</p>
                <ul style="list-style: none; margin-bottom: 20px;">
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-map-marker-alt" style="color: var(--action-orange);"></i> Zone Industrielle Forello, Tanjombato
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-phone-alt" style="color: var(--action-orange);"></i> +261 20 22 123 45
                    </li>
                    <li style="display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-envelope" style="color: var(--action-orange);"></i> contact@smef.mg
                    </li>
                </ul>
            </div>

            <div class="contact-form fade-in">
                <form>
                    <div class="form-group">
                        <label class="form-label">Nom Complet</label>
                        <input type="text" class="form-control" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Société</label>
                        <input type="text" class="form-control" placeholder="Nom de votre entreprise">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Type de projet</label>
                        <select class="form-control">
                            <option>Installation Chambre Froide</option>
                            <option>Climatisation Bureaux/Hôtel</option>
                            <option>Contrat de Maintenance</option>
                            <option>Solution Énergie/Solaire</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Obtenir mon étude gratuite</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <!-- Logo placeholder in footer -->
                    <div style="font-weight:800; color:white; font-size:1.5rem; margin-bottom:15px;">SMEF</div>
                    <p>Le partenaire de confiance pour le froid industriel et la climatisation à Madagascar. Qualité, Réactivité, Durabilité.</p>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Froid Industriel</a></li>
                        <li><a href="#">Climatisation</a></li>
                        <li><a href="#">Génie Électrique</a></li>
                        <li><a href="#">Maintenance SAV</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Société</h4>
                    <ul class="footer-links">
                        <li><a href="#">À Propos</a></li>
                        <li><a href="#">Nos Réalisations</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Horaires</h4>
                    <ul class="footer-links">
                        <li>Lun - Ven: 7h30 - 17h00</li>
                        <li>Sam: 8h00 - 12h00</li>
                        <li><span style="color: var(--action-orange); font-weight: bold;">SAV Urgence: 24/7</span></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 SMEF Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Floaty Button -->
    <a href="#contact" class="floaty-sav">
        <i class="fas fa-phone-volume"></i>
        <span>URGENCE SAV</span>
    </a>

    <!-- Scripts -->
    <script>
        // --- CONSTANTE LOGO REQUISE ---
        const LOGO_URL = "logo.jpg";

        document.addEventListener('DOMContentLoaded', () => {
            // 1. Inject Logo
            const logoContainer = document.getElementById('logo-container');
            const logoImg = document.createElement('img');
            logoImg.src = LOGO_URL;
            logoImg.alt = "SMEF Logo";
            logoContainer.appendChild(logoImg);

            // 2. Sticky Header Logic
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 3. Mobile Menu Toggle
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.getElementById('nav-menu');
            const icon = hamburger.querySelector('i');

            hamburger.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburger.classList.toggle('active');
                
                if (navMenu.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Close menu when clicking a link
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('active');
                    hamburger.classList.remove('active');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });
            });

            // 4. Simple Intersection Observer for Animations
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>