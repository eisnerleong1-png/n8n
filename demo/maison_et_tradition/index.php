<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison et Tradition | Construction de Prestige à Antananarivo</title>
    <meta name="description" content="Construction de villas clés en main à Madagascar. Expertise, fiabilité et finitions haut de gamme pour la diaspora et les investisseurs.">
    
    <!-- Polices : Playfair Display (Luxe/Tradition) & Plus Jakarta Sans (Modernité) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            /* Palette Stratégique */
            --color-trust: #164727; /* Vert Forêt Profond - H1, H2, Footer */
            --color-action: #5db64a; /* Vert Herbe Vif - CTA */
            --color-secondary: #296f3a; /* Vert Moyen - Icônes */
            --color-text: #334155;
            --color-bg-light: #F8F9FA;
            --color-white: #FFFFFF;
            
            /* Spacing & Layout */
            --container-width: 1280px;
            --header-height: 80px;
            
            /* Transitions */
            --transition-smooth: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--color-text);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--color-trust);
        }

        a { text-decoration: none; color: inherit; transition: var(--transition-smooth); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- UTILS --- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0; /* White Space Strategy */
        }

        .text-center { text-align: center; }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 4px; /* Slight round for modern feel but structured */
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition-smooth);
            border: none;
        }

        .btn-primary {
            background-color: var(--color-action);
            color: var(--color-white);
            box-shadow: 0 4px 15px rgba(93, 182, 74, 0.3);
        }

        .btn-primary:hover {
            background-color: #4ca03d;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(93, 182, 74, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--color-trust);
            color: var(--color-trust);
        }

        .btn-outline:hover {
            background-color: var(--color-trust);
            color: var(--color-white);
        }

        .btn-dark {
            background-color: var(--color-trust);
            color: var(--color-white);
        }
        
        .btn-dark:hover {
            background-color: #0f351d;
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition-smooth);
            background: transparent;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: var(--header-height);
        }

        .logo-img {
            height: 50px; /* Ajusté pour le placeholder */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--color-white); /* White on hero */
        }

        header.scrolled .nav-links a {
            color: var(--color-trust); /* Dark on scroll */
        }

        .nav-cta {
            padding: 10px 24px;
            font-size: 0.9rem;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        header.scrolled .mobile-menu-btn { color: var(--color-trust); }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1600596542815-27bfef402398?q=80&w=2075&auto=format&fit=crop'); 
            /* Luxury Villa Architecture */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax feel */
        }

        .hero-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to right, rgba(22, 71, 39, 0.85), rgba(22, 71, 39, 0.4));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            color: var(--color-white);
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--color-white);
            font-weight: 700;
        }

        .hero h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
        }

        /* --- TRUST BADGES --- */
        .trust-bar {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }
        
        .trust-item {
            font-weight: 700;
            font-size: 1.2rem;
            color: #64748b;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .trust-item i { font-size: 1.5rem; }

        /* --- PROBLEM / SOLUTION --- */
        .features {
            background-color: var(--color-bg-light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h3 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .section-header p {
            color: #64748b;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: var(--transition-smooth);
            border-top: 4px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-top-color: var(--color-action);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--color-secondary);
            margin-bottom: 24px;
        }

        .feature-card h4 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
        }

        .feature-card p {
            color: #64748b;
        }

        /* --- PORTFOLIO (Masonry-ish Grid) --- */
        .portfolio {
            background-color: var(--color-white);
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 24px;
        }

        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            height: 400px; /* Fixed height for uniformity */
        }

        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-img {
            transform: scale(1.05);
        }

        .project-overlay {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(22, 71, 39, 0.95), transparent);
            padding: 30px;
            transform: translateY(100px); /* Hide details initially */
            transition: var(--transition-smooth);
            color: var(--color-white);
        }
        
        /* Always show title, hide details */
        .project-overlay h4 {
            color: var(--color-white);
            font-size: 1.5rem;
            margin-bottom: 5px;
            transform: translateY(-100px); /* Move up initially */
            transition: var(--transition-smooth);
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
        }
        
        .project-card:hover .project-overlay h4 {
             transform: translateY(0);
        }

        .project-details {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255,255,255,0.3);
            padding-top: 15px;
            opacity: 0;
            transition: opacity 0.4s ease 0.1s;
        }

        .project-card:hover .project-details {
            opacity: 1;
        }

        /* --- TEAM --- */
        .team {
            background-color: var(--color-bg-light);
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            background: var(--color-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        
        .member-img {
            height: 300px;
            width: 100%;
            object-fit: cover;
            object-position: top;
        }
        
        .member-info {
            padding: 20px;
        }
        
        .member-info h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--color-trust);
        }
        
        .member-role {
            color: var(--color-action);
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* --- TESTIMONIALS --- */
        .testimonials {
            background-color: var(--color-trust);
            color: var(--color-white);
            position: relative;
            overflow: hidden;
        }
        
        .testimonials h3, .testimonials p.subtitle {
            color: var(--color-white);
        }
        
        .testimonial-slider {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            padding-bottom: 20px;
            scrollbar-width: none; /* Hide scrollbar Firefox */
        }
        .testimonial-slider::-webkit-scrollbar { display: none; }
        
        .testimonial-card {
            min-width: 350px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
            padding: 30px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        .client-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .client-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid var(--color-action);
        }
        
        .quote {
            font-style: italic;
            font-family: 'Playfair Display', serif;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* --- CONTACT & FOOTER --- */
        .contact-section {
            background-color: var(--color-white);
        }
        
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }
        
        .form-box {
            background: var(--color-bg-light);
            padding: 40px;
            border-radius: 12px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--color-trust);
        }
        
        .form-control {
            width: 100%;
            padding: 14px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: inherit;
            transition: var(--transition-smooth);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--color-trust);
            box-shadow: 0 0 0 3px rgba(22, 71, 39, 0.1);
        }
        
        .contact-info-block h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(93, 182, 74, 0.1);
            color: var(--color-trust);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        footer {
            background-color: #0f351d; /* Darker than trust */
            color: rgba(255,255,255,0.7);
            padding: 60px 0 20px;
            font-size: 0.9rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--color-white);
            margin-bottom: 20px;
            display: block;
        }
        
        .footer-links li { margin-bottom: 10px; }
        .footer-links a:hover { color: var(--color-action); }

        .copyright {
            text-align: center;
            padding-top: 20px;
        }

        /* --- WHATSAPP WIDGET --- */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-smooth);
            animation: pulse 2s infinite;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #128C7E;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .contact-wrapper { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; } /* Simplified for this one-file output */
            .mobile-menu-btn { display: block; }
            .hero h1 { font-size: 2.2rem; }
            .hero h2 { font-size: 1rem; }
            .section-padding { padding: 60px 0; }
            .form-box { padding: 25px; }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="main-header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- LE LOGO SERA INJECTÉ ICI PAR JS -->
            </div>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#solutions">Pourquoi Nous</a></li>
                    <li><a href="#portfolio">Réalisations</a></li>
                    <li><a href="#team">Équipe</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#contact" class="btn btn-primary nav-cta">Devis Gratuit</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>L'Excellence Immobilière à Antananarivo : Construisez votre Patrimoine sans Compromis.</h1>
            <h2>De la conception à la remise des clés : une expertise fiable, des délais respectés et des finitions haut de gamme pour votre future villa.</h2>
            <a href="#contact" class="btn btn-primary">Estimer mon Projet Gratuitement</a>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="container text-center">
            <div class="trust-grid">
                <!-- Utilisations d'icônes génériques pour simuler les logos pour cette démo -->
                <div class="trust-item"><i class="fas fa-university"></i> BNI MADAGASCAR</div>
                <div class="trust-item"><i class="fas fa-layer-group"></i> LAFARGE HOLCIM</div>
                <div class="trust-item"><i class="fas fa-drafting-compass"></i> ORDRE DES ARCHITECTES</div>
                <div class="trust-item"><i class="fas fa-shield-alt"></i> BUREAU VERITAS</div>
            </div>
        </div>
    </div>

    <!-- FEATURES (PROBLEM / SOLUTION) -->
    <section id="solutions" class="section-padding features">
        <div class="container">
            <div class="section-header">
                <h3>Construire à Madagascar ne doit plus être une source de stress.</h3>
                <p>Nous transformons les défis locaux en garanties contractuelles.</p>
            </div>
            
            <div class="features-grid">
                <!-- 1 -->
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-calendar-check"></i></div>
                    <h4>Planning Garanti</h4>
                    <p>Fini les chantiers interminables. Nous nous engageons contractuellement sur les dates de livraison, avec pénalités de retard à notre charge.</p>
                </div>
                <!-- 2 -->
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Prix Fixe en Ariary</h4>
                    <p>Aucun coût caché. Notre devis est détaillé, transparent et ferme. Vous maitrisez votre budget du début à la fin.</p>
                </div>
                <!-- 3 -->
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-certificate"></i></div>
                    <h4>Qualité Certifiée</h4>
                    <p>Matériaux normés et suivi par ingénieurs agréés. Nous offrons une garantie décennale sur toutes nos structures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="section-padding portfolio">
        <div class="container">
            <div class="section-header">
                <h3>Nos signatures architecturales</h3>
                <p>Des projets d'exception livrés à Ivandry, Ambatobe et By Pass.</p>
            </div>

            <div class="portfolio-grid">
                <!-- Projet 1 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop" alt="Villa Ivandry" class="project-img">
                    <div class="project-overlay">
                        <h4>Villa Moderne - Ivandry</h4>
                        <div class="project-details">
                            <span><i class="fas fa-tag"></i> Dès 400M Ar</span>
                            <span><i class="fas fa-clock"></i> 12 Mois</span>
                        </div>
                    </div>
                </div>
                <!-- Projet 2 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2070&auto=format&fit=crop" alt="Résidence By Pass" class="project-img">
                    <div class="project-overlay">
                        <h4>Résidence Secondaire - By Pass</h4>
                        <div class="project-details">
                            <span><i class="fas fa-tag"></i> Dès 250M Ar</span>
                            <span><i class="fas fa-clock"></i> 8 Mois</span>
                        </div>
                    </div>
                </div>
                <!-- Projet 3 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" alt="Manoir Ambatobe" class="project-img">
                    <div class="project-overlay">
                        <h4>Rénovation Haut Standing - Ambatobe</h4>
                        <div class="project-details">
                            <span><i class="fas fa-tag"></i> Dès 600M Ar</span>
                            <span><i class="fas fa-clock"></i> 14 Mois</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir toutes nos réalisations</a>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section id="team" class="section-padding team">
        <div class="container">
            <div class="section-header">
                <h3>Maison et Tradition : Une famille d'experts</h3>
                <p>Derrière chaque brique, une équipe passionnée qui connait les spécificités des sols des Hautes Terres.</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Architecte" class="member-img">
                    <div class="member-info">
                        <h4>Hery Rajaonarivelo</h4>
                        <p class="member-role">Architecte Principal</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop" alt="Ingénieur" class="member-img">
                    <div class="member-info">
                        <h4>Sarah Rakoto</h4>
                        <p class="member-role">Ingénieur BTP</p>
                    </div>
                </div>
                <div class="team-member">
                    <img src="https://images.unsplash.com/photo-1541577141970-eebc83ebe30e?q=80&w=1978&auto=format&fit=crop" alt="Chef Chantier" class="member-img">
                    <div class="member-info">
                        <h4>Jean-Luc Andriamanana</h4>
                        <p class="member-role">Chef de Chantier Senior</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="section-padding testimonials">
        <div class="container">
            <div class="section-header">
                <h3>Ils sont propriétaires grâce à nous</h3>
                <p class="subtitle">La confiance de la diaspora et des locaux.</p>
            </div>
            
            <div class="testimonial-slider">
                <!-- Review 1 -->
                <div class="testimonial-card">
                    <div class="client-profile">
                        <img src="https://images.unsplash.com/photo-1589156280159-27698a70f29e?q=80&w=1972&auto=format&fit=crop" alt="Client" class="client-img">
                        <div>
                            <strong>Mme. Rasoa</strong><br>
                            <small>Propriétaire à Ivato (Vit en France)</small>
                        </div>
                    </div>
                    <p class="quote">"Vivant en France, j'avais peur de lancer les travaux à distance. L'équipe m'a envoyé des photos et vidéos WhatsApp chaque semaine. Résultat impeccable."</p>
                </div>
                <!-- Review 2 -->
                <div class="testimonial-card">
                    <div class="client-profile">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Client" class="client-img">
                        <div>
                            <strong>M. Andrianjafy</strong><br>
                            <small>Investisseur Locatif (Tana)</small>
                        </div>
                    </div>
                    <p class="quote">"J'ai testé plusieurs constructeurs. Maison & Tradition est le seul qui a respecté le budget initial au centime près. La qualité des finitions est un vrai plus pour la location."</p>
                </div>
                <!-- Review 3 -->
                <div class="testimonial-card">
                    <div class="client-profile">
                        <img src="https://images.unsplash.com/photo-1554151228-14d9def656ec?q=80&w=1972&auto=format&fit=crop" alt="Client" class="client-img">
                        <div>
                            <strong>Famille Rabemananjara</strong><br>
                            <small>Construction Ambohibao</small>
                        </div>
                    </div>
                    <p class="quote">"Un accompagnement humain. Ils nous ont aidés à choisir le terrain avant même de signer pour la construction. Merci à toute l'équipe."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <div class="contact-wrapper">
                
                <div class="contact-info-block">
                    <h4>Discutons de votre vision</h4>
                    <p style="margin-bottom: 40px; color: #64748b;">
                        Que vous soyez à Paris, Montréal ou Tana, notre équipe est prête à étudier votre projet. Remplissez le formulaire pour une première estimation.
                    </p>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h5>Nos Bureaux</h5>
                            <p>Enceinte Galaxy, Andraharo<br>Antananarivo 101, Madagascar</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h5>Email</h5>
                            <p>contact@maison-tradition.mg</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h5>Téléphone</h5>
                            <p>+261 34 00 000 00</p>
                        </div>
                    </div>
                </div>

                <div class="form-box">
                    <h4 style="margin-bottom: 25px; color: var(--color-trust);">Concrétisons votre projet</h4>
                    <form>
                        <div class="form-group">
                            <label class="form-label">Type de Projet</label>
                            <select class="form-control">
                                <option>Construction Neuve</option>
                                <option>Rénovation Complète</option>
                                <option>Extension</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Localisation du terrain</label>
                            <input type="text" class="form-control" placeholder="Ex: Ivandry, Ambohibao...">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Budget Estimatif (Ariary)</label>
                            <select class="form-control">
                                <option>Moins de 100 Millions Ar</option>
                                <option selected>100 - 300 Millions Ar</option>
                                <option>Plus de 300 Millions Ar</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Vos Coordonnées</label>
                            <input type="text" class="form-control" placeholder="Nom complet" style="margin-bottom: 10px;">
                            <input type="email" class="form-control" placeholder="Email" style="margin-bottom: 10px;">
                            <input type="tel" class="form-control" placeholder="Téléphone / WhatsApp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Démarrer la conversation</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <span class="footer-logo">MAISON ET TRADITION</span>
                    <p>L'expertise en construction BTP pour une clientèle exigeante. Nous bâtissons l'avenir de Madagascar, pierre par pierre.</p>
                </div>
                <div>
                    <h5 style="color: #fff; margin-bottom: 15px;">Liens Rapides</h5>
                    <ul class="footer-links">
                        <li><a href="#">Nos Réalisations</a></li>
                        <li><a href="#">Demander un devis</a></li>
                        <li><a href="#">Processus de construction</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
                <div>
                    <h5 style="color: #fff; margin-bottom: 15px;">Suivez-nous</h5>
                    <div style="display: flex; gap: 15px; font-size: 1.2rem;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Maison et Tradition Madagascar. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WHATSAPP WIDGET -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        /* --- CONFIGURATION LOGO (OBLIGATOIRE) --- */
        // NOTE CLIENT: Remplacez l'URL ci-dessous par le lien de votre logo final (PNG Transparent recommandé).
        // J'ai adapté le texte de l'URL pour correspondre au wireframe "Maison et Tradition".
        const LOGO_URL = "https://placehold.co/150x60/transparent/164727?text=MAISON+TRADITION";

        // Insertion du logo
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Logo Maison et Tradition" class="logo-img">`;
        }

        /* --- SCROLL EFFECT --- */
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        /* --- MOBILE MENU --- */
        const mobileBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        if(mobileBtn) {
            mobileBtn.addEventListener('click', () => {
                // Simple toggle for demo purposes
                if(navLinks.style.display === 'flex') {
                    navLinks.style.display = 'none';
                    navLinks.style.position = 'static';
                } else {
                    navLinks.style.display = 'flex';
                    navLinks.style.flexDirection = 'column';
                    navLinks.style.position = 'absolute';
                    navLinks.style.top = '80px';
                    navLinks.style.left = '0';
                    navLinks.style.width = '100%';
                    navLinks.style.background = '#164727';
                    navLinks.style.padding = '20px';
                    navLinks.style.zIndex = '999';
                }
            });
        }
    </script>
</body>
</html>