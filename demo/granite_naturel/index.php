<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granit & Prestige Madagascar | Marbrerie d'Exception</title>
    
    <!-- Google Fonts - Premium Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Manrope:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         * Style: Premium, Minimalist, Luxury Stone
         */
        :root {
            --primary: #5FBAC6; /* Teal/Cyan - Action */
            --primary-dark: #4aa0ac;
            --accent: #3F7CB7; /* Steel Blue - Trust */
            --text-dark: #626365; /* Anthracite - Body */
            --text-heading: #2c2d2e; /* Darker for headings */
            --bg-light: #f9f9f9;
            --bg-white: #ffffff;
            --border-color: #e5e5e5;
            
            --font-heading: 'Cinzel', serif; /* Luxury vibe */
            --font-body: 'Manrope', sans-serif; /* Modern readability */
            
            --shadow-card: 0 10px 30px rgba(0,0,0,0.05);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.08);
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
            color: var(--text-dark);
            background-color: var(--bg-white);
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--text-heading);
            font-weight: 600;
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
        }

        /* UTILITIES */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .btn {
            display: inline-block;
            padding: 16px 36px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.9rem;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 4px 15px rgba(95, 186, 198, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(95, 186, 198, 0.4);
        }

        .btn-outline {
            border: 1px solid var(--text-dark);
            background: transparent;
            color: var(--text-heading);
        }

        .btn-outline:hover {
            background: var(--text-heading);
            color: white;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90px;
        }

        .logo-container img {
            max-height: 60px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-heading);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            padding: 12px 28px;
            font-size: 0.85rem;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #1a1a1a;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2074&auto=format&fit=crop'); /* Luxury Kitchen with Black Stone */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
            opacity: 0.7;
            transform: scale(1.05); /* Slight zoom for initial movement */
            animation: slowZoom 20s infinite alternate;
        }

        @keyframes slowZoom {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            color: white;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.3s;
        }

        .hero h2 {
            font-family: var(--font-body);
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 40px;
            color: rgba(255,255,255,0.9);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.5s;
        }

        .hero-btn {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.7s;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        /* TRUST BAR */
        .trust-bar {
            background-color: white;
            padding: 40px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .trust-text {
            text-align: center;
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            align-items: center;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* VALUE PROPOSITION */
        .value-prop {
            background-color: var(--bg-light);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: white;
            padding: 40px;
            border-radius: 4px;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-card);
            border-color: rgba(63, 124, 183, 0.2);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background-color: rgba(63, 124, 183, 0.1);
            color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
        }

        .feature-card h3 {
            font-family: var(--font-body);
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        /* SHOWROOM - MASONRY/GRID */
        .showroom {
            background: white;
        }

        .showroom-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
        }

        .stone-card {
            position: relative;
            height: 400px;
            overflow: hidden;
            cursor: crosshair;
            group: 'stone';
        }

        .stone-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .stone-card:hover .stone-img {
            transform: scale(1.15);
        }

        .stone-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
            color: white;
            transform: translateY(20px);
            opacity: 0;
            transition: var(--transition);
        }

        .stone-card:hover .stone-overlay {
            transform: translateY(0);
            opacity: 1;
        }

        .magnifier-hint {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(5px);
            padding: 8px 12px;
            border-radius: 30px;
            font-size: 0.8rem;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* SERVICES & PRICING */
        .services {
            background-color: var(--bg-light);
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            padding: 0;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .service-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .service-content {
            padding: 30px;
        }

        .service-price {
            display: inline-block;
            background-color: rgba(95, 186, 198, 0.1);
            color: var(--primary-dark);
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .service-card h3 {
            margin-bottom: 10px;
            font-size: 1.4rem;
        }

        /* PROCESS / ABOUT */
        .process {
            background: #fff;
        }

        .process-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .process-video {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 20px 20px 0px rgba(63, 124, 183, 0.1);
        }

        .timeline {
            position: relative;
            padding-left: 30px;
            border-left: 2px solid #eee;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -37px;
            top: 5px;
            width: 12px;
            height: 12px;
            background: var(--accent);
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 0 0 1px #eee;
        }

        .timeline-item h4 {
            font-family: var(--font-body);
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--primary-dark);
        }

        /* FAQ */
        .faq {
            background-color: var(--bg-light);
        }

        .accordion-item {
            background: white;
            margin-bottom: 15px;
            border-radius: 4px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .accordion-header {
            padding: 20px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--text-heading);
        }

        .accordion-header i {
            color: var(--primary);
            transition: transform 0.3s;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding: 0 30px;
        }

        .accordion-content p {
            padding-bottom: 20px;
            color: var(--text-dark);
        }

        .accordion-item.active .accordion-header i {
            transform: rotate(180deg);
        }

        .accordion-item.active .accordion-content {
            max-height: 200px;
        }

        /* FOOTER */
        footer {
            background-color: #1a1a1a;
            color: #ccc;
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            padding-bottom: 60px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .footer-col h4 {
            color: white;
            margin-bottom: 25px;
            font-size: 1.2rem;
            font-family: var(--font-body);
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .contact-info li {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: flex-start;
        }

        .contact-info i {
            color: var(--primary);
            margin-top: 5px;
        }

        .footer-bottom {
            padding: 30px 0;
            text-align: center;
            font-size: 0.9rem;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .process-layout { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-links.active { right: 0; }
            .mobile-toggle { display: block; color: var(--text-heading); }
            
            .hero h1 { font-size: 2.2rem; }
            .section-header h2 { font-size: 2rem; }
            .section-padding { padding: 60px 0; }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container">
            <nav>
                <!-- JS Logo Injection Target -->
                <div class="logo-container" id="logo-placeholder">
                    <!-- 
                        COMMENTAIRE CLIENT : 
                        Le logo sera inséré automatiquement ici par le Javascript.
                        Pour changer le logo final, modifiez la variable LOGO_URL dans le script en bas de page.
                    -->
                </div>

                <div class="nav-links" id="navLinks">
                    <a href="#pierres">Nos Pierres</a>
                    <a href="#savoir-faire">Savoir-faire</a>
                    <a href="#services">Tarifs</a>
                    <a href="#faq">FAQ</a>
                    <a href="#contact" class="btn btn-primary nav-cta">Demander un Devis</a>
                </div>

                <div class="mobile-toggle" id="mobileMenu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Élégance Éternelle du Granit pour vos Intérieurs à Antananarivo.</h1>
            <h2>Cuisines, Escaliers et Finitions sur mesure. Une durabilité incomparable, une finition artisanale d'exception.</h2>
            <a href="#contact" class="btn btn-primary hero-btn">Demander une estimation gratuite</a>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <div class="trust-bar">
        <div class="container">
            <p class="trust-text">Ils nous font confiance pour leurs projets d'exception</p>
            <div class="logos-grid">
                <!-- Simulation of local trust -->
                <div class="trust-badge"><i class="fas fa-check-circle" style="color:var(--primary)"></i> +200 Cuisines Installées</div>
                <div class="trust-badge"><i class="fas fa-shield-alt" style="color:var(--primary)"></i> Garantie Décennale</div>
                <div class="trust-badge"><i class="fas fa-drafting-compass" style="color:var(--primary)"></i> Partenaire Architectes</div>
            </div>
        </div>
    </div>

    <!-- VALUE PROPOSITION -->
    <section class="section-padding value-prop">
        <div class="container">
            <div class="section-header">
                <h2>Pourquoi choisir le Granit Naturel ?</h2>
                <p>Oubliez le synthétique. Optez pour la noblesse de la pierre naturelle pour un investissement qui traverse les générations.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-fire-alt"></i></div>
                    <h3>Résistance Totale</h3>
                    <p>Ne craint ni la chaleur de vos plats sortant du four, ni les rayures de couteaux. Le granit est conçu pour vivre.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-gem"></i></div>
                    <h3>Esthétique Unique</h3>
                    <p>Chaque plaque est une œuvre d'art géologique. Les veines et les reflets de votre plan de travail sont uniques au monde.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fas fa-home"></i></div>
                    <h3>Investissement Durable</h3>
                    <p>Une valorisation immédiate de votre patrimoine immobilier à Antananarivo avec des matériaux nobles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VIRTUAL SHOWROOM -->
    <section id="pierres" class="section-padding showroom">
        <div class="container">
            <div class="section-header">
                <h2>Notre Collection d'Exception</h2>
                <p>Survolez les pierres pour apprécier la finesse du grain.</p>
            </div>

            <div class="showroom-grid">
                <!-- Item 1 -->
                <div class="stone-card">
                    <div class="magnifier-hint"><i class="fas fa-search-plus"></i> Zoom</div>
                    <img src="https://images.unsplash.com/photo-1618221639255-a2267885b0d5?q=80&w=2070&auto=format&fit=crop" alt="Granit Noir Absolu" class="stone-img">
                    <div class="stone-overlay">
                        <h3>Noir Galaxy</h3>
                        <p>Profondeur et paillettes dorées. Le luxe ultime.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="stone-card">
                    <div class="magnifier-hint"><i class="fas fa-search-plus"></i> Zoom</div>
                    <img src="https://images.unsplash.com/photo-1617185348877-62f913612d6a?q=80&w=2070&auto=format&fit=crop" alt="Marbre Blanc" class="stone-img">
                    <div class="stone-overlay">
                        <h3>Marbre de Carrare</h3>
                        <p>Luminosité et veines grises classiques.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="stone-card">
                    <div class="magnifier-hint"><i class="fas fa-search-plus"></i> Zoom</div>
                    <img src="https://images.unsplash.com/photo-1596491795188-727658739947?q=80&w=2070&auto=format&fit=crop" alt="Quartzite" class="stone-img">
                    <div class="stone-overlay">
                        <h3>Quartzite Gris</h3>
                        <p>Moderne, résistant et texturé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES & PRICING -->
    <section id="services" class="section-padding services">
        <div class="container">
            <div class="section-header">
                <h2>Solutions sur Mesure</h2>
                <p>Des tarifs transparents pour une prestation haut de gamme.</p>
            </div>

            <div class="services-container">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=2070&auto=format&fit=crop" class="service-img" alt="Cuisine">
                    <div class="service-content">
                        <span class="service-price">Dès 450 000 Ar / ml</span>
                        <h3>Plans de Travail & Îlots</h3>
                        <p>Découpe numérique pour encastrement d'évier et plaque de cuisson. Finition polie ou adoucie.</p>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=2000&auto=format&fit=crop" class="service-img" alt="Escalier">
                    <div class="service-content">
                        <span class="service-price">Sur Devis</span>
                        <h3>Escaliers & Marches</h3>
                        <p>Nez de marche arrondi ou chanfreiné. Bandes antidérapantes intégrées dans la pierre.</p>
                    </div>
                </div>

                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1584622050111-993a426fbf0a?q=80&w=2070&auto=format&fit=crop" class="service-img" alt="Salle de bain">
                    <div class="service-content">
                        <span class="service-price">Sur Devis</span>
                        <h3>Salles de Bain</h3>
                        <p>Plans vasques suspendus et habillage mural. Étanchéité parfaite et élégance spa.</p>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="#contact" class="btn btn-outline">Voir le catalogue complet</a>
            </div>
        </div>
    </section>

    <!-- PROCESS / ABOUT -->
    <section id="savoir-faire" class="section-padding process">
        <div class="container">
            <div class="process-layout">
                <div class="process-image-wrap">
                    <div class="process-video">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a782?q=80&w=2070&auto=format&fit=crop" alt="Atelier Marbrerie">
                        <div style="position:absolute; bottom:20px; left:20px; background:white; padding:10px 20px; font-weight:bold; color:var(--text-dark);">
                            <i class="fas fa-map-marker-alt"></i> Atelier à Antananarivo
                        </div>
                    </div>
                </div>
                
                <div class="process-content">
                    <h2 style="margin-bottom: 30px;">L'Excellence de la Découpe à la Pose</h2>
                    <p style="margin-bottom: 40px;">Notre équipe d'artisans allie savoir-faire traditionnel et précision moderne pour garantir un résultat sans défaut.</p>
                    
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4>1. Prise de mesure Laser</h4>
                            <p>Déplacement gratuit sur Tana. Nous utilisons des lasers pour garantir une précision au millimètre près, épousant parfaitement vos murs.</p>
                        </div>
                        <div class="timeline-item">
                            <h4>2. Découpe en Atelier</h4>
                            <p>Vos pierres sont découpées et polies dans notre atelier équipé. Pas de poussière chez vous.</p>
                        </div>
                        <div class="timeline-item">
                            <h4>3. Installation Soignée</h4>
                            <p>Pose rapide, joints invisibles et nettoyage complet du chantier.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding faq">
        <div class="container">
            <div class="section-header">
                <h2>Questions Fréquentes</h2>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="accordion-item">
                    <div class="accordion-header">
                        Quels sont les délais d'installation ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Pour un projet standard (cuisine), comptez entre 5 et 10 jours ouvrés après la validation du devis et la prise de mesures, selon la complexité des découpes.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        Livrez-vous en province ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Oui, nous assurons une logistique sécurisée (caisses bois renforcées) pour livrer et installer dans tout Madagascar (Majunga, Tamatave, Nosy Be, etc.).</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        Comment entretenir mon plan de travail en granit ?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Le granit est très facile à vivre. Un simple nettoyage à l'eau savonneuse suffit. Nous appliquons un traitement hydrofuge professionnel lors de la pose pour garantir l'étanchéité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER & FINAL CTA -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4 style="font-family: 'Cinzel', serif; font-size: 1.5rem;">PHO RESTO</h4>
                    <p style="margin-bottom: 20px;">L'art de la pierre naturelle pour sublimer vos espaces de vie à Madagascar.</p>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Zone Andraharo, Antananarivo 101</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@granit-mada.mg</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#pierres">Nos Granits</a></li>
                        <li><a href="#services">Réalisations</a></li>
                        <li><a href="#savoir-faire">Notre Atelier</a></li>
                        <li><a href="#contact">Demander un Devis</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Projet ?</h4>
                    <p style="margin-bottom: 20px;">Réservez votre visite au showroom pour choisir votre pierre.</p>
                    <a href="tel:+261340000000" class="btn btn-primary" style="width: 100%; text-align: center;">Appeler Maintenant</a>
                    <div style="margin-top: 20px; font-size: 1.5rem;">
                        <a href="#" style="margin-right: 15px;"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Granit & Prestige Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. CONFIGURATION DU LOGO (OBLIGATOIRE) ---
        // INSTRUCTION CLIENT : Collez l'URL de votre logo ci-dessous à la place du lien placeholder.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Insertion du logo dans le DOM
        document.getElementById('logo-placeholder').innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Logo Granit Prestige"></a>`;

        // --- 2. NAVIGATION MOBILE ---
        const mobileToggle = document.getElementById('mobileMenu');
        const navLinks = document.getElementById('navLinks');
        const links = document.querySelectorAll('.nav-links a');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Change icon
            const icon = mobileToggle.querySelector('i');
            if(navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Fermer le menu au clic sur un lien
        links.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileToggle.querySelector('i').classList.remove('fa-times');
                mobileToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // --- 3. SCROLL HEADER EFFECT ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
                header.style.height = "80px";
            } else {
                header.style.boxShadow = "none";
                header.style.height = "90px";
            }
        });

        // --- 4. ACCORDION FAQ ---
        const accItems = document.querySelectorAll('.accordion-item');

        accItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            header.addEventListener('click', () => {
                // Fermer les autres
                accItems.forEach(otherItem => {
                    if (otherItem !== item) otherItem.classList.remove('active');
                });
                // Toggle actuel
                item.classList.toggle('active');
            });
        });

        // --- 5. ANIMATION AU SCROLL (Intersection Observer) ---
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

        // Appliquer l'animation aux éléments clés
        document.querySelectorAll('.feature-card, .service-card, .stone-card, .timeline-item').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });

    </script>
</body>
</html>