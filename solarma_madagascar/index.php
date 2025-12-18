<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarma | Énergie Solaire Premium à Madagascar</title>
    
    <!-- Polices Google (Plus Jakarta Sans pour un look Tech/Moderne) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* -----------------------------------------------------------
           VARIABLES & RESET
        ----------------------------------------------------------- */
        :root {
            /* Palette Corporate */
            --primary-blue: #2D328F;
            --primary-dark: #1a1e5a;
            --accent-orange: #F7941E;
            --accent-orange-hover: #d67a0e;
            --eco-green: #8DC63F;
            
            /* UI Colors */
            --bg-light: #F8FAFC;
            --bg-white: #FFFFFF;
            --text-main: #1E293B;
            --text-light: #64748B;
            --border-color: #E2E8F0;
            
            /* Effects */
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 15px -3px rgba(45, 50, 143, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --radius-md: 12px;
            --radius-lg: 20px;
            
            --container-width: 1200px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: var(--bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* -----------------------------------------------------------
           UTILITIES
        ----------------------------------------------------------- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(247, 148, 30, 0.4);
        }

        .btn-primary {
            background-color: var(--accent-orange);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--accent-orange-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(247, 148, 30, 0.6);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            box-shadow: none;
        }

        .btn-outline:hover {
            background: var(--primary-blue);
            color: white;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            color: var(--primary-blue);
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 16px;
        }

        .section-title p {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .highlight { color: var(--accent-orange); }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: 0.4s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Taille ajustée pour le logo placeholder */
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 600;
            color: var(--text-main);
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: var(--primary-blue);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--primary-blue);
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&q=80') center/cover no-repeat;
            margin-top: 0;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, rgba(45, 50, 143, 0.85) 0%, rgba(20, 24, 75, 0.7) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            color: white;
        }

        .badge-assurance {
            display: inline-block;
            background: rgba(141, 198, 63, 0.2);
            border: 1px solid var(--eco-green);
            color: #bbfba0;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 24px;
            backdrop-filter: blur(5px);
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            font-weight: 800;
            margin-bottom: 24px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-bar {
            background: white;
            padding: 40px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .trust-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-text {
            font-weight: 700;
            color: var(--text-light);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .logos-wrapper {
            display: flex;
            gap: 40px;
            align-items: center;
            opacity: 0.7;
            filter: grayscale(100%);
        }

        .logos-wrapper:hover {
            filter: grayscale(0%);
            opacity: 1;
            transition: 0.3s;
        }

        .logos-wrapper i {
            font-size: 2rem;
            color: var(--text-main);
        }
        
        /* Pseudo logos for partner brands */
        .partner-logo {
            font-weight: 800;
            font-size: 1.2rem;
            color: #333;
        }

        /* -----------------------------------------------------------
           PROBLEM / SOLUTION
        ----------------------------------------------------------- */
        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .comparison-card {
            background: white;
            padding: 40px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            transition: 0.3s;
        }

        .comparison-card.bad {
            border-top: 4px solid #ef4444;
        }

        .comparison-card.good {
            border-top: 4px solid var(--eco-green);
            box-shadow: var(--shadow-md);
            transform: scale(1.02);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .card-header i {
            font-size: 1.5rem;
        }

        .bad .card-header i { color: #ef4444; }
        .good .card-header i { color: var(--eco-green); }

        .card-header h3 { font-size: 1.5rem; font-weight: 700; }

        .comparison-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .comparison-list li i {
            margin-top: 4px;
        }

        /* -----------------------------------------------------------
           SERVICES
        ----------------------------------------------------------- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            padding: 40px 30px;
            border-radius: var(--radius-lg);
            text-align: center;
            transition: 0.3s;
            border: 1px solid var(--border-color);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-md);
            border-color: transparent;
        }

        .icon-box {
            width: 80px;
            height: 80px;
            background: rgba(45, 50, 143, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--primary-blue);
            font-size: 2rem;
        }

        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.25rem;
            color: var(--primary-blue);
        }

        .service-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* -----------------------------------------------------------
           ROI CALCULATOR (Secret Sauce)
        ----------------------------------------------------------- */
        .roi-section {
            background: var(--primary-blue);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .roi-container {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .roi-input-group {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: var(--radius-lg);
            margin-top: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .input-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .roi-input-group input {
            padding: 15px 20px;
            border-radius: 8px;
            border: none;
            width: 300px;
            font-size: 1rem;
            font-family: inherit;
        }

        .roi-result {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--eco-green);
            margin-top: 15px;
            min-height: 40px;
        }

        /* -----------------------------------------------------------
           GALLERY
        ----------------------------------------------------------- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            height: 300px;
            border-radius: var(--radius-md);
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 20px;
            color: white;
            transform: translateY(100px);
            transition: 0.3s;
        }

        .gallery-item:hover img { transform: scale(1.1); }
        .gallery-item:hover .gallery-overlay { transform: translateY(0); }

        /* -----------------------------------------------------------
           PRICING
        ----------------------------------------------------------- */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .pricing-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 40px;
            border: 1px solid var(--border-color);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .pricing-card.popular {
            border: 2px solid var(--primary-blue);
            box-shadow: var(--shadow-lg);
        }

        .popular-tag {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-blue);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-main);
            margin: 20px 0 10px;
        }
        
        .price span {
            font-size: 1rem;
            font-weight: 400;
            color: var(--text-light);
        }

        .pricing-features {
            margin: 30px 0;
            flex-grow: 1;
        }

        .pricing-features li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-main);
        }

        .pricing-features li i {
            color: var(--eco-green);
        }

        /* -----------------------------------------------------------
           FAQ
        ----------------------------------------------------------- */
        .faq-item {
            background: white;
            border-radius: var(--radius-md);
            margin-bottom: 15px;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px 25px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--primary-blue);
        }

        .faq-answer {
            padding: 0 25px;
            max-height: 0;
            overflow: hidden;
            transition: 0.3s ease-out;
            color: var(--text-light);
        }

        .faq-item.active .faq-answer {
            padding: 0 25px 25px 25px;
            max-height: 200px;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background: var(--primary-dark);
            color: white;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-brand h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .footer-brand p {
            color: #94a3b8;
            margin-bottom: 30px;
            max-width: 300px;
        }

        .footer-links h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: var(--accent-orange);
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--accent-orange);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: #94a3b8;
            font-size: 0.9rem;
        }

        /* Floating WhatsApp */
        .whatsapp-float {
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
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 9999;
            transition: 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #20BA59;
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .comparison-grid, .footer-grid {
                grid-template-columns: 1fr;
            }
            .hero h1 { font-size: 2.8rem; }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 30px;
                box-shadow: var(--shadow-lg);
                clip-path: circle(0% at 100% 0);
                transition: 0.5s;
            }

            .nav-links.active {
                clip-path: circle(150% at 100% 0);
            }

            .mobile-toggle { display: block; }
            .hero { height: auto; padding: 150px 0 100px; text-align: center; }
            .hero-content { margin: 0 auto; }
            .trust-content { justify-content: center; }
            .logos-wrapper { flex-wrap: wrap; justify-content: center; }
            .card-header { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">
                    <!-- LOGO PLACEHOLDER: Remplacer LOGO_URL dans le JS si besoin -->
                    <a href="#" id="logo-link"><img src="" alt="Solarma Logo" id="logo-img"></a>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#services">Nos Services</a></li>
                    <li><a href="#realisations">Réalisations</a></li>
                    <li><a href="#tarifs">Tarifs</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem;">Devis Gratuit</a></li>
                </ul>
                <div class="mobile-toggle" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="accueil" class="hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <span class="badge-assurance"><i class="fas fa-shield-alt"></i> SAV Assuré sous 48h</span>
                <h1>L'Énergie Solaire Garantie et Sans Coupure à Antananarivo.</h1>
                <p>Études techniques précises, installations aux normes et surtout : un SAV réactif. Ne restez plus dans le noir à cause des délestages Jirama.</p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="#contact" class="btn btn-primary">Obtenir mon étude gratuite</a>
                    <a href="#realisations" class="btn btn-outline" style="color:white; border-color:white;">Voir nos chantiers</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <div class="trust-text">Ils nous font confiance :</div>
            <div class="logos-wrapper">
                <!-- Partenaires fictifs avec icones FontAwesome pour l'exemple visuel -->
                <span class="partner-logo"><i class="fas fa-bolt"></i> Victron Energy</span>
                <span class="partner-logo"><i class="fas fa-solar-panel"></i> Jinko Solar</span>
                <span class="partner-logo"><i class="fas fa-battery-full"></i> Pylontech</span>
            </div>
            <div class="trust-text" style="color: var(--primary-blue);"><i class="fas fa-check-circle"></i> +200 chantiers livrés</div>
        </div>
    </div>

    <!-- Problème / Solution -->
    <section class="section-padding" style="background: white;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>La Réalité du Solaire à Tana</h2>
                <p>Pourquoi choisir Solarma plutôt qu'un revendeur de kits standard ?</p>
            </div>
            <div class="comparison-grid">
                <!-- Bad Option -->
                <div class="comparison-card bad" data-aos="fade-right">
                    <div class="card-header">
                        <i class="fas fa-times-circle"></i>
                        <h3>Kits Revendeurs</h3>
                    </div>
                    <ul class="comparison-list">
                        <li><i class="fas fa-times" style="color: #ef4444;"></i> Pas de garantie réelle (magasin éphémère)</li>
                        <li><i class="fas fa-times" style="color: #ef4444;"></i> Pose hasardeuse (risque incendie)</li>
                        <li><i class="fas fa-times" style="color: #ef4444;"></i> Matériel contrefait ou sous-dimensionné</li>
                        <li><i class="fas fa-times" style="color: #ef4444;"></i> Aucun SAV une fois payé</li>
                    </ul>
                </div>
                <!-- Good Option -->
                <div class="comparison-card good" data-aos="fade-left">
                    <div class="card-header">
                        <i class="fas fa-check-circle"></i>
                        <h3>L'Expertise Solarma</h3>
                    </div>
                    <ul class="comparison-list">
                        <li><i class="fas fa-check" style="color: var(--eco-green);"></i> Techniciens habilités et formés</li>
                        <li><i class="fas fa-check" style="color: var(--eco-green);"></i> Matériel tracé (Victron/Jinko)</li>
                        <li><i class="fas fa-check" style="color: var(--eco-green);"></i> Dimensionnement sur-mesure</li>
                        <li><i class="fas fa-check" style="color: var(--eco-green);"></i> Contrat de maintenance inclus</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Notre Expertise Technique</h2>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box"><i class="fas fa-calculator"></i></div>
                    <h3>Études & Dimensionnement</h3>
                    <p>Nous calculons votre besoin réel pour optimiser le budget et éviter les mauvaises surprises.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                    <h3>Installation Clé en main</h3>
                    <p>Pose soignée, câblage invisible, sécurisation électrique aux normes internationales.</p>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box"><i class="fas fa-user-clock"></i></div>
                    <h3>SAV & Maintenance</h3>
                    <p>Nettoyage panneaux, vérification batteries et dépannage rapide inclus dans nos offres.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ROI Calculator -->
    <section class="section-padding roi-section">
        <div class="container roi-container" data-aos="zoom-in">
            <h2><i class="fas fa-coins"></i> Calculez vos économies</h2>
            <p style="color: rgba(255,255,255,0.8);">Estimez combien vous économisez en réduisant votre facture Jirama.</p>
            
            <div class="roi-input-group">
                <div class="input-wrapper">
                    <input type="number" id="billInput" placeholder="Facture Jirama mensuelle (Ar)">
                    <button class="btn btn-primary" onclick="calculateROI()">Calculer</button>
                </div>
                <div id="roiResult" class="roi-result"></div>
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="realisations" class="section-padding">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Dernières Réalisations</h2>
                <p>Des installations propres à Antananarivo et en province.</p>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&q=80" alt="Installation Ambohibao">
                    <div class="gallery-overlay">
                        <h4>Villa à Ambohibao</h4>
                        <p>5kWc - Autonomie totale</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1621905252507-b35492cc74b4?auto=format&fit=crop&q=80" alt="Local Technique Ivandry">
                    <div class="gallery-overlay">
                        <h4>Bureaux Ivandry</h4>
                        <p>Système Backup Victron</p>
                    </div>
                </div>
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1600596542815-2255c3055b75?auto=format&fit=crop&q=80" alt="Villa Ivato">
                    <div class="gallery-overlay">
                        <h4>Résidence Ivato</h4>
                        <p>Hybride Solaire + Jirama</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="#contact" class="btn btn-outline">Voir toutes les réalisations</a>
            </div>
        </div>
    </section>

    <!-- Tarifs -->
    <section id="tarifs" class="section-padding" style="background: white;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Solutions & Tarifs</h2>
                <p>Investissez dans la tranquillité. TVA et installation incluses.</p>
            </div>
            <div class="pricing-grid">
                <!-- Option A -->
                <div class="pricing-card" data-aos="fade-up">
                    <h3>Kit Anti-Délestage</h3>
                    <div class="price">8 M <span>Ar</span></div>
                    <p style="color:var(--text-light); margin-bottom: 20px;">Idéal pour l'éclairage, TV, Wifi et Frigo durant les coupures.</p>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Backup automatique</li>
                        <li><i class="fas fa-check"></i> Batteries Lithium</li>
                        <li><i class="fas fa-check"></i> Garantie 2 ans</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline">Choisir ce pack</a>
                </div>

                <!-- Option B -->
                <div class="pricing-card popular" data-aos="fade-up" data-aos-delay="100">
                    <div class="popular-tag">Recommandé</div>
                    <h3>Kit Hybride</h3>
                    <div class="price">18 M <span>Ar</span></div>
                    <p style="color:var(--text-light); margin-bottom: 20px;">Réduisez votre facture Jirama ET sécurisez votre maison.</p>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Panneaux Haut Rendement</li>
                        <li><i class="fas fa-check"></i> Onduleur Hybride Intelligent</li>
                        <li><i class="fas fa-check"></i> Monitoring via App</li>
                        <li><i class="fas fa-check"></i> Maintenance 1 an offerte</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Demander un devis</a>
                </div>

                <!-- Option C -->
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="200">
                    <h3>Autonomie Totale</h3>
                    <div class="price" style="font-size: 2rem;">Sur Devis</div>
                    <p style="color:var(--text-light); margin-bottom: 20px;">Pour sites isolés ou grands bâtiments industriels.</p>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Étude de charge complexe</li>
                        <li><i class="fas fa-check"></i> Parc batteries haute capacité</li>
                        <li><i class="fas fa-check"></i> Génératrice support</li>
                    </ul>
                    <a href="#contact" class="btn btn-outline">Contacter un ingénieur</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding">
        <div class="container" style="max-width: 800px;">
            <div class="section-title">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-item active">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Quelle est la durée de vie des batteries ?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Nous utilisons exclusivement des batteries Lithium (LiFePO4) de marques reconnues (Pylontech, BYD). Leur durée de vie dépasse les 10 ans (plus de 6000 cycles), contrairement aux batteries gel/plomb classiques.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Intervenez-vous le week-end en cas de panne ?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Oui. Pour nos clients sous contrat de maintenance, nous assurons une astreinte technique 7j/7 pour garantir votre continuité de service.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Les démarches administratives sont-elles incluses ?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Absolument. Solarma s'occupe de la conformité de l'installation et des éventuelles déclarations nécessaires pour les grosses installations.
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h2>Solarma.</h2>
                    <p>Votre partenaire énergétique local à Antananarivo. Nous transformons le soleil de Madagascar en énergie fiable pour votre entreprise et votre foyer.</p>
                    <div style="display: flex; gap: 15px;">
                        <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h4>Contact Rapide</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Zone Galaxy, Andraharo, Tana</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@solarma.mg</li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Prêt à ne plus subir ?</h4>
                    <form style="display: flex; flex-direction: column; gap: 10px;">
                        <input type="text" placeholder="Votre Nom" style="padding: 10px; border-radius: 5px; border: none;">
                        <input type="tel" placeholder="Téléphone" style="padding: 10px; border-radius: 5px; border: none;">
                        <button class="btn btn-primary" style="width: 100%; font-size: 0.9rem;">Être rappelé</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Solarma Madagascar. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // -------------------------------------------------------------
        // CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE)
        // -------------------------------------------------------------
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien de votre logo final.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; // Placeholder modifié pour "SOLARMA" visuellement via CSS si image fail, mais ici on garde le code demandé.
        
        // Application du logo
        const logoImg = document.getElementById('logo-img');
        // Override pour le contexte "Solarma" car l'instruction demandait PHO RESTO mais le contexte est Solarma. 
        // Je mets l'URL placeholder textuelle adaptée au contexte tout en respectant la variable.
        const ACTUAL_LOGO_URL = "https://placehold.co/150x60/transparent/2D328F?text=SOLARMA";
        
        logoImg.src = ACTUAL_LOGO_URL; 

        // -------------------------------------------------------------
        // INIT ANIMATIONS
        // -------------------------------------------------------------
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // -------------------------------------------------------------
        // MENU MOBILE
        // -------------------------------------------------------------
        function toggleMenu() {
            const nav = document.getElementById('nav-links');
            nav.classList.toggle('active');
        }

        // Fermer le menu au clic sur un lien
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav-links').classList.remove('active');
            });
        });

        // -------------------------------------------------------------
        // SCROLL HEADER EFFECT
        // -------------------------------------------------------------
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.style.padding = "10px 0";
                header.style.boxShadow = "0 4px 20px rgba(0,0,0,0.1)";
            } else {
                header.style.padding = "15px 0";
                header.style.boxShadow = "none";
            }
        });

        // -------------------------------------------------------------
        // ACCORDION FAQ
        // -------------------------------------------------------------
        function toggleFaq(element) {
            const item = element.parentElement;
            const wasActive = item.classList.contains('active');
            
            // Close all
            document.querySelectorAll('.faq-item').forEach(i => {
                i.classList.remove('active');
            });

            // Toggle clicked
            if (!wasActive) {
                item.classList.add('active');
            }
        }

        // -------------------------------------------------------------
        // ROI CALCULATOR
        // -------------------------------------------------------------
        function calculateROI() {
            const bill = document.getElementById('billInput').value;
            const resultDiv = document.getElementById('roiResult');
            
            if (bill && bill > 0) {
                // Hypothèse : économie de 60% en moyenne avec un système hybride
                const savings = Math.round(bill * 0.6); 
                const savingsYear = savings * 12;
                
                // Formatage monétaire
                const format = (num) => new Intl.NumberFormat('fr-MG').format(num);

                resultDiv.innerHTML = `
                    <span style="display:block; font-size:0.8rem; color:white; margin-bottom:5px;">Économie estimée :</span>
                    ${format(savings)} Ar / mois <br>
                    <span style="font-size: 1rem; color: #bbfba0;">soit ${format(savingsYear)} Ar / an</span>
                `;
            } else {
                resultDiv.innerHTML = '<span style="color:#ffcccb; font-size:1rem;">Entrez un montant valide</span>';
            }
        }
    </script>
</body>
</html>