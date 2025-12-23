<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAYAT BTP | Construction & Rénovation Antananarivo</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&family=Oswald:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
        ========================================
        CORE VARIABLES & RESET
        ========================================
        */
        :root {
            --primary: #D6001C;
            --primary-dark: #a80016;
            --secondary: #1A1A1A;
            --text-dark: #1F2937;
            --text-light: #6B7280;
            --bg-white: #FFFFFF;
            --bg-light: #F3F4F6;
            --font-heading: 'Oswald', sans-serif;
            --font-body: 'Manrope', sans-serif;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 20px 40px -5px rgba(214, 0, 28, 0.15);
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
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--bg-white);
            line-height: 1.6;
            overflow-x: hidden;
            padding-bottom: 80px; /* Space for mobile sticky CTA */
        }

        @media (min-width: 769px) {
            body {
                padding-bottom: 0;
            }
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--secondary);
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

        /* 
        ========================================
        UTILITIES & COMPONENTS
        ========================================
        */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            border-radius: 2px;
            transition: var(--transition);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(214, 0, 28, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--secondary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background-color: var(--primary);
            color: white;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--text-light);
        }

        /* Scroll Progress Bar */
        #scroll-progress {
            position: fixed;
            top: 0;
            right: 0;
            width: 4px;
            height: 0%;
            background: var(--primary);
            z-index: 9999;
            transition: height 0.1s;
        }

        /* 
        ========================================
        HEADER & NAVIGATION
        ========================================
        */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90px;
        }

        .logo-container {
            width: 150px;
            display: flex;
            align-items: center;
        }
        
        .logo-container img {
            max-height: 60px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            color: var(--secondary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* 
        ========================================
        HERO SECTION (Split Screen)
        ========================================
        */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            padding-top: 90px; /* Offset for fixed header */
            overflow: hidden;
        }

        .hero-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 5%;
            background: white;
            z-index: 2;
        }

        .hero-visual {
            flex: 1;
            position: relative;
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
            margin-left: -50px; /* Overlap */
        }

        .hero-visual img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
            color: var(--secondary);
        }

        .hero h2 {
            font-family: var(--font-body);
            font-size: 1.25rem;
            font-weight: 400;
            color: var(--text-light);
            margin-bottom: 40px;
            text-transform: none;
            max-width: 500px;
        }

        /* 
        ========================================
        TRUST BAR
        ========================================
        */
        .trust-bar {
            background-color: var(--bg-light);
            padding: 40px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .trust-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-label {
            font-weight: 700;
            color: var(--text-light);
            text-transform: uppercase;
            font-size: 0.9rem;
            border-left: 3px solid var(--primary);
            padding-left: 15px;
        }

        .stats-grid {
            display: flex;
            gap: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--secondary);
            font-family: var(--font-heading);
        }

        .stat-desc {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* 
        ========================================
        PROBLEM / SOLUTION
        ========================================
        */
        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .comparison-col {
            padding: 40px;
            border-radius: 8px;
        }

        .col-problem {
            background-color: #FFF5F5;
            border-left: 4px solid #f87171;
        }

        .col-solution {
            background-color: #F0FDF4;
            border-left: 4px solid #4ade80;
            position: relative;
            box-shadow: var(--shadow-card);
        }

        .col-title {
            font-size: 1.5rem;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .list-check li {
            margin-bottom: 16px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 1.05rem;
        }

        .icon-cross { color: #dc2626; }
        .icon-check { color: #16a34a; }

        /* 
        ========================================
        SERVICES
        ========================================
        */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            padding: 40px 30px;
            border: 1px solid #f3f4f6;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-color: transparent;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary);
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: left;
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 24px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .service-card p {
            color: var(--text-light);
            margin-bottom: 24px;
        }

        .service-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-radius: 4px;
            margin-top: 10px;
        }

        /* 
        ========================================
        PORTFOLIO (Before/After)
        ========================================
        */
        .portfolio-section {
            background-color: var(--secondary);
            color: white;
        }

        .portfolio-section h2, .portfolio-section p {
            color: white;
        }

        .portfolio-section p {
            opacity: 0.8;
        }

        .ba-slider-container {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        .ba-image-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ba-resize {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 50%;
            overflow: hidden;
            border-right: 3px solid var(--primary);
        }

        .ba-handle {
            position: absolute;
            top: 50%;
            left: 100%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: ew-resize;
            z-index: 10;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
        .ba-handle i {
            color: white;
        }

        .ba-label {
            position: absolute;
            top: 20px;
            padding: 5px 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            pointer-events: none;
        }

        .ba-label.before { left: 20px; }
        .ba-label.after { right: 20px; }

        /* 
        ========================================
        ABOUT & TEAM
        ========================================
        */
        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image img {
            border-radius: 4px;
            box-shadow: var(--shadow-card);
        }

        .about-image::after {
            content: '';
            position: absolute;
            bottom: -20px;
            right: -20px;
            width: 60%;
            height: 60%;
            border: 10px solid var(--bg-light);
            z-index: -1;
        }

        /* 
        ========================================
        TESTIMONIALS
        ========================================
        */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
        }

        .stars {
            color: #fbbf24;
            margin-bottom: 16px;
        }

        .quote-text {
            font-style: italic;
            color: var(--text-dark);
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        .client-info h4 {
            font-size: 1rem;
            color: var(--secondary);
            margin-bottom: 4px;
        }

        .client-info span {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* 
        ========================================
        FAQ
        ========================================
        */
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 10px;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 20px 0;
            background: none;
            border: none;
            font-family: var(--font-heading);
            font-size: 1.1rem;
            color: var(--secondary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding: 0;
            color: var(--text-light);
        }

        .faq-item.active .faq-answer {
            padding-bottom: 20px;
        }

        .faq-icon {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* 
        ========================================
        FOOTER
        ========================================
        */
        footer {
            background-color: var(--secondary);
            color: white;
            padding: 80px 0 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-info p {
            color: #9ca3af;
            margin-top: 20px;
            max-width: 300px;
        }

        .footer-col h4 {
            color: white;
            margin-bottom: 24px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: #9ca3af;
            transition: color 0.3s;
        }

        .footer-col ul li a:hover {
            color: var(--primary);
        }

        .contact-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
            color: #9ca3af;
        }

        .contact-row i {
            color: var(--primary);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* 
        ========================================
        MOBILE STICKY CTA
        ========================================
        */
        .mobile-sticky-cta {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 16px;
            background: white;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .mobile-sticky-cta .btn {
            width: 100%;
            padding: 14px;
        }

        /* 
        ========================================
        RESPONSIVE
        ========================================
        */
        @media (max-width: 968px) {
            .hero {
                flex-direction: column-reverse;
                height: auto;
                padding-top: 90px;
            }

            .hero-visual {
                clip-path: none;
                margin-left: 0;
                height: 400px;
            }

            .hero-content {
                padding: 60px 24px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .about-wrapper {
                flex-direction: column;
            }

            .comparison-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .stats-grid {
                flex-direction: column;
                gap: 20px;
                width: 100%;
            }

            .trust-content {
                justify-content: center;
                text-align: center;
            }
            
            .trust-label {
                border-left: none;
                border-bottom: 3px solid var(--primary);
                padding-left: 0;
                padding-bottom: 5px;
                width: 100%;
            }

            .mobile-sticky-cta {
                display: block;
            }
        }
    </style>
</head>
<body>

    <!-- Scroll Progress -->
    <div id="scroll-progress"></div>

    <!-- Navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logo-container">
                    <!-- Javascript will inject logo here -->
                </div>
                <ul class="nav-links">
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#portfolio" class="nav-link">Réalisations</a></li>
                    <li><a href="#about" class="nav-link">À Propos</a></li>
                    <li><a href="#testimonials" class="nav-link">Témoignages</a></li>
                </ul>
                <div style="display: flex; gap: 20px; align-items: center;">
                    <a href="#contact" class="btn btn-primary" style="display: none; @media(min-width: 768px){display:inline-flex;}">
                        Demander un Devis
                    </a>
                    <div class="hamburger">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Concrétisez Vos Projets de Construction à Antananarivo avec Sérénité.</h1>
            <h2>De la conception à la remise des clés, HAYAT BTP vous garantit qualité technique, respect des délais et maîtrise budgétaire.</h2>
            <a href="#contact" class="btn btn-primary">DEMANDER UN DEVIS GRATUIT</a>
        </div>
        <div class="hero-visual">
            <!-- Overlay Image Composition -->
             <div style="position: relative; width: 100%; height: 100%;">
                 <img src="https://images.unsplash.com/photo-1600596542815-e32c525f6e84?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Villa Moderne Tana" style="width: 100%; height: 100%; object-fit: cover;">
                 <div style="position: absolute; bottom: 0; right: 0; width: 50%; height: 60%; background: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80') center/cover; border-top-left-radius: 8px; border-left: 5px solid var(--primary); box-shadow: -10px -10px 30px rgba(0,0,0,0.2);"></div>
             </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-content">
                <div class="trust-label">Ils nous font confiance pour bâtir leur avenir</div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-desc">Ans d'expérience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-desc">Chantiers livrés</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-desc">Clients satisfaits</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem / Solution -->
    <section class="section-padding" id="problem-solution">
        <div class="container">
            <div class="section-header">
                <h2>Construire ne devrait pas être une source de stress</h2>
                <p>Oubliez les retards, les coûts cachés et les tracas administratifs.</p>
            </div>
            <div class="comparison-grid">
                <!-- Problems -->
                <div class="comparison-col col-problem">
                    <h3 class="col-title"><i class="fas fa-exclamation-triangle icon-cross"></i> La Réalité du Marché</h3>
                    <ul class="list-check">
                        <li><i class="fas fa-times icon-cross"></i> Chantiers abandonnés ou interminables</li>
                        <li><i class="fas fa-times icon-cross"></i> Budgets qui explosent sans préavis</li>
                        <li><i class="fas fa-times icon-cross"></i> Malfaçons et finitions bâclées</li>
                        <li><i class="fas fa-times icon-cross"></i> Stress administratif constant</li>
                    </ul>
                </div>
                <!-- Solution -->
                <div class="comparison-col col-solution">
                    <h3 class="col-title"><i class="fas fa-check-circle icon-check"></i> La Garantie HAYAT BTP</h3>
                    <ul class="list-check">
                        <li><i class="fas fa-check icon-check"></i> Planning détaillé et garanti contractuellement</li>
                        <li><i class="fas fa-check icon-check"></i> Devis fixe et transparent : 0 coût caché</li>
                        <li><i class="fas fa-check icon-check"></i> Suivi qualité rigoureux à chaque étape</li>
                        <li><i class="fas fa-check icon-check"></i> Gestion clé en main (Permis, Plans, Travaux)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-padding" id="services" style="background-color: #fafafa;">
        <div class="container">
            <div class="section-header">
                <h2>Une expertise complète</h2>
                <p>Des fondations aux finitions, nous maîtrisons chaque corps de métier.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Gros Œuvre & Maçonnerie</h3>
                    <p>Fondations solides, structures béton armé et élévation des murs conformes aux normes parasismiques.</p>
                    <img src="https://images.unsplash.com/photo-1581094794329-cd119277dba4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Maçonnerie" class="service-img">
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-paint-roller"></i></div>
                    <h3>Second Œuvre & Finitions</h3>
                    <p>Plomberie, électricité, carrelage et peinture haute précision pour un rendu esthétique impeccable.</p>
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Finitions" class="service-img">
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-drafting-compass"></i></div>
                    <h3>Études & Plans</h3>
                    <p>Accompagnement dès l'avant-projet : conception architecturale, plans 2D/3D et démarches administratives.</p>
                    <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Plans" class="service-img">
                </div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="#contact" class="btn btn-secondary">Voir tous nos services</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Before/After -->
    <section class="section-padding portfolio-section" id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Nos Réalisations</h2>
                <p>La transformation est notre métier. Découvrez la qualité de notre travail.</p>
            </div>
            
            <div class="ba-slider-container" id="ba-slider">
                <!-- After Image (Background) -->
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Après" class="ba-image-img">
                <div class="ba-label after">Après (Ivandry)</div>
                
                <!-- Before Image (Resizable) -->
                <div class="ba-resize" id="ba-resize">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Avant" class="ba-image-img" style="width: auto; max-width: none; height: 100%;">
                     <div class="ba-label before">Avant (Chantier)</div>
                </div>
                
                <!-- Handle -->
                <div class="ba-handle" id="ba-handle">
                    <i class="fas fa-arrows-alt-h"></i>
                </div>
            </div>
            
            <p style="text-align: center; margin-top: 20px; font-style: italic;">Glissez pour voir la transformation</p>
        </div>
    </section>

    <!-- About -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Equipe Hayat BTP">
                </div>
                <div class="about-text">
                    <h2>Une équipe d'experts à votre service</h2>
                    <p style="margin-bottom: 20px;">
                        Basée au cœur d'Antananarivo, HAYAT BTP combine expertise internationale et connaissance parfaite du terrain malgache.
                    </p>
                    <p style="margin-bottom: 30px;">
                        Nos ingénieurs et chefs de chantier sont sélectionnés pour leur rigueur et leur passion. Nous ne sommes pas de simples constructeurs, nous sommes les partenaires de votre projet de vie. Nous comprenons les enjeux locaux (climat, matériaux, sols) pour bâtir durablement.
                    </p>
                    <a href="#contact" class="btn btn-secondary">Rencontrer l'équipe</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding" id="testimonials" style="background-color: #fafafa;">
        <div class="container">
            <div class="section-header">
                <h2>La satisfaction client</h2>
                <p>Ce sont nos clients qui parlent le mieux de nous.</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="quote-text">"J'avais peur de lancer ma construction à distance depuis la France. HAYAT BTP m'a rassuré avec des rapports photos hebdomadaires. Le résultat est au-delà de mes espérances."</p>
                    <div class="client-info">
                        <h4>M. Rakotomalala</h4>
                        <span>Rénovation à Mahamasina</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="quote-text">"Un professionnalisme rare à Tana. Délais respectés à la lettre, chantier propre. Je recommande pour toute construction de villa."</p>
                    <div class="client-info">
                        <h4>Mme. Andrianjafy</h4>
                        <span>Construction neuve à Ambatobe</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="quote-text">"Transparence totale sur les prix. Pas de mauvaise surprise à la fin. Une équipe technique très compétente."</p>
                    <div class="client-info">
                        <h4>Société Immo Tana</h4>
                        <span>Projet commercial</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">
                        Vous occupez-vous du permis de construire ?
                        <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <p>Absolument. Nous gérons l'intégralité des démarches administratives auprès de la Commune Urbaine d'Antananarivo pour obtenir votre permis de construire en toute conformité.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        Quels sont les délais moyens pour une villa basse ?
                        <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <p>Pour une villa basse standard (environ 100-150m²), il faut compter entre 6 et 8 mois pour une livraison clé en main, sous réserve des conditions climatiques.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        Comment se passent les paiements ?
                        <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        <p>Nous fonctionnons par tranches de paiement liées à l'avancement réel du chantier (démarrage, fondations, élévation, toiture, finitions). Tout est clair et contractuel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="section-header" style="text-align: left; margin-bottom: 40px;">
                <h3 style="color:white; font-size: 2rem;">Prêt à démarrer votre projet ?</h3>
                <p style="color: #d1d5db;">Nos ingénieurs sont prêts à étudier votre dossier.</p>
            </div>
            
            <div class="footer-grid">
                <div class="footer-col footer-info">
                    <div class="logo-container">
                         <!-- Javascript will inject logo here -->
                    </div>
                    <p>HAYAT BTP est votre partenaire de confiance pour la construction et la rénovation à Madagascar. Qualité, intégrité et expertise.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <div class="contact-row"><i class="fas fa-map-marker-alt"></i> Antananarivo, Madagascar</div>
                    <div class="contact-row"><i class="fas fa-phone"></i> +261 34 00 000 00</div>
                    <div class="contact-row"><i class="fas fa-envelope"></i> contact@hayatbtp.mg</div>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Réalisations</a></li>
                        <li><a href="#about">À Propos</a></li>
                        <li><a href="#contact">Demander un Devis</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 HAYAT BTP. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <a href="#contact" class="btn btn-primary">DEMANDER UN DEVIS GRATUIT</a>
    </div>

    <!-- JavaScript -->
    <script>
        // 1. CONSTANTS & LOGO
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            // Inject Logo
            const logoContainers = document.querySelectorAll('.logo-container');
            logoContainers.forEach(container => {
                const img = document.createElement('img');
                img.src = LOGO_URL;
                img.alt = "HAYAT BTP Logo";
                container.appendChild(img);
            });

            // 2. SCROLL PROGRESS BAR
            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                document.getElementById("scroll-progress").style.height = scrolled + "%";
            });

            // 3. BEFORE / AFTER SLIDER LOGIC
            const slider = document.getElementById('ba-slider');
            const resize = document.getElementById('ba-resize');
            const handle = document.getElementById('ba-handle');
            let isDown = false;

            function moveSlider(e) {
                if (!isDown) return;
                
                const rect = slider.getBoundingClientRect();
                const x = (e.clientX || e.touches[0].clientX) - rect.left; // Get X relative to slider
                
                let percent = (x / rect.width) * 100;
                
                // Constraints
                if (percent < 0) percent = 0;
                if (percent > 100) percent = 100;

                resize.style.width = percent + "%";
                handle.style.left = percent + "%";
            }

            // Mouse Events
            handle.addEventListener('mousedown', () => { isDown = true; });
            window.addEventListener('mouseup', () => { isDown = false; });
            slider.addEventListener('mousemove', moveSlider);

            // Touch Events (Mobile)
            handle.addEventListener('touchstart', () => { isDown = true; });
            window.addEventListener('touchend', () => { isDown = false; });
            slider.addEventListener('touchmove', moveSlider);


            // 4. FAQ ACCORDION
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    // Close others
                    faqItems.forEach(other => {
                        if (other !== item) other.classList.remove('active');
                        if (other !== item) other.querySelector('.faq-answer').style.maxHeight = null;
                    });
                    
                    // Toggle current
                    item.classList.toggle('active');
                    const answer = item.querySelector('.faq-answer');
                    if (item.classList.contains('active')) {
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    } else {
                        answer.style.maxHeight = null;
                    }
                });
            });

            // 5. MOBILE MENU TOGGLE
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            
            hamburger.addEventListener('click', () => {
                if (navLinks.style.display === 'flex') {
                    navLinks.style.display = 'none';
                } else {
                    navLinks.style.display = 'flex';
                    navLinks.style.position = 'absolute';
                    navLinks.style.top = '90px';
                    navLinks.style.left = '0';
                    navLinks.style.width = '100%';
                    navLinks.style.flexDirection = 'column';
                    navLinks.style.background = 'white';
                    navLinks.style.padding = '20px';
                    navLinks.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                    navLinks.style.textAlign = 'center';
                }
            });

            // Close mobile menu on link click
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    if(window.innerWidth <= 768) {
                        navLinks.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>