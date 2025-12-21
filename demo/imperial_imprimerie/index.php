<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial Imprimerie | Impression de Précision à Antananarivo</title>
    <meta name="description" content="L'imprimerie de précision à Antananarivo pour vos projets B2B. Offset, Numérique, Grand Format. Demandez votre devis gratuit.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* 
        ========================================
        CORE VARIABLES & RESET
        ========================================
        */
        :root {
            --color-primary-cyan: #009FE3;
            --color-action-magenta: #E6007E;
            --color-accent-yellow: #FFF200;
            --color-dark: #111111;
            --color-gray: #f4f4f4;
            --color-text: #2c2c2c;
            --color-white: #ffffff;
            
            --font-display: 'Space Grotesk', sans-serif;
            --font-body: 'Manrope', sans-serif;
            
            --spacing-container: 1280px;
            --spacing-section: 6rem;
            
            --shadow-card: 0 10px 40px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 50px -10px rgba(0,159,227,0.15);
            
            --radius-sm: 4px;
            --radius-md: 12px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--color-text);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-display);
            font-weight: 700;
            color: var(--color-dark);
            line-height: 1.1;
        }

        img { max-width: 100%; display: block; object-fit: cover; }
        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }

        /* 
        ========================================
        UTILITIES & PATTERNS
        ========================================
        */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 2rem;
        }

        .bg-halftone {
            background-image: radial-gradient(var(--color-primary-cyan) 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.4; /* Adjusted via parent container mostly */
        }

        .text-gradient {
            background: linear-gradient(90deg, var(--color-dark), var(--color-primary-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-padding { padding: var(--spacing-section) 0; }

        /* 
        ========================================
        COMPONENTS
        ========================================
        */
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-radius: var(--radius-sm);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary {
            background-color: var(--color-action-magenta);
            color: var(--color-white);
            border: none;
            box-shadow: 0 4px 15px rgba(230, 0, 126, 0.3);
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 0%; height: 100%;
            background: rgba(255,255,255,0.2);
            transition: width 0.3s ease;
            z-index: -1;
        }
        
        .btn-primary:hover::before { width: 100%; }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(230, 0, 126, 0.4); }

        .btn-secondary {
            background: transparent;
            color: var(--color-primary-cyan);
            border: 2px solid var(--color-primary-cyan);
        }
        
        .btn-secondary:hover {
            background: var(--color-primary-cyan);
            color: var(--color-white);
        }

        .badge-promo {
            background-color: var(--color-accent-yellow);
            color: var(--color-dark);
            font-weight: 800;
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 2px;
            text-transform: uppercase;
        }

        /* 
        ========================================
        HEADER & NAV
        ========================================
        */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .site-header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 0.5rem 0;
        }
        
        .site-header.scrolled .nav-link { color: var(--color-dark); }
        .site-header:not(.scrolled) .nav-link { color: var(--color-white); text-shadow: 0 2px 4px rgba(0,0,0,0.5); }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo-wrapper img {
            height: 50px; /* Adjust based on logo ratio */
            width: auto;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-right: 2rem;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
        }
        
        .site-header.scrolled .status-badge { background: #f4f4f4; color: var(--color-dark); }
        .site-header:not(.scrolled) .status-badge { color: var(--color-white); border: 1px solid rgba(255,255,255,0.3); }

        .status-dot {
            width: 10px; height: 10px;
            border-radius: 50%;
            background-color: #ccc;
        }
        .status-dot.open { background-color: #00C853; box-shadow: 0 0 10px #00C853; }
        .status-dot.closed { background-color: #D50000; }

        .nav-menu { display: flex; gap: 2rem; align-items: center; }
        .nav-link { font-weight: 500; font-size: 1rem; position: relative; }
        
        /* Mobile Menu Toggle */
        .menu-toggle { display: none; cursor: pointer; color: var(--color-primary-cyan); font-size: 1.5rem; }

        /* 
        ========================================
        HERO SECTION
        ========================================
        */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-color: var(--color-dark);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            /* Unsplash Image: High-end printing press detail */
            background-image: url('https://images.unsplash.com/photo-1563968743333-044cef8004c3?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .hero-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0.2) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding-top: 80px; /* Header offset */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            color: var(--color-white);
            margin-bottom: 1.5rem;
        }

        .hero h1 span { color: var(--color-primary-cyan); }

        .hero p {
            font-size: clamp(1.1rem, 2vw, 1.25rem);
            color: rgba(255,255,255,0.9);
            margin-bottom: 2.5rem;
            max-width: 600px;
            font-weight: 300;
        }

        /* 
        ========================================
        TRUST BAR (SCROLLING LOGOS)
        ========================================
        */
        .trust-bar {
            background: var(--color-white);
            padding: 3rem 0;
            border-bottom: 1px solid #eee;
            overflow: hidden;
        }

        .trust-title {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #888;
            margin-bottom: 1.5rem;
        }

        .logo-slider {
            display: flex;
            width: 200%; /* Double width for seamless loop */
            animation: scroll 20s linear infinite;
        }

        .slide-track {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 50%;
        }

        .client-logo {
            font-family: var(--font-display);
            font-weight: 800;
            font-size: 1.5rem;
            color: #ddd;
            padding: 0 2rem;
            white-space: nowrap;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* 
        ========================================
        SERVICES
        ========================================
        */
        .services {
            background-color: #F8F9FA;
            position: relative;
        }

        .services::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: radial-gradient(#009FE3 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.03;
            pointer-events: none;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: var(--color-white);
            padding: 2.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            border-top: 4px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-top-color: var(--color-primary-cyan);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--color-primary-cyan);
            margin-bottom: 1.5rem;
        }

        .service-card h3 { font-size: 1.5rem; margin-bottom: 1rem; }
        .service-card p { color: #666; margin-bottom: 1.5rem; font-size: 0.95rem; }
        
        .price-tag {
            display: inline-block;
            background: rgba(0, 159, 227, 0.1);
            color: var(--color-primary-cyan);
            padding: 0.5rem 1rem;
            border-radius: var(--radius-sm);
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* 
        ========================================
        PORTFOLIO (MASONRY)
        ========================================
        */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }

        .portfolio-item {
            position: relative;
            height: 400px;
            border-radius: var(--radius-md);
            overflow: hidden;
            cursor: crosshair;
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .portfolio-item:hover img { transform: scale(1.1); }
        .portfolio-item:hover .portfolio-overlay { opacity: 1; transform: translateY(0); }

        .spec-tag {
            display: inline-block;
            border: 1px solid rgba(255,255,255,0.4);
            padding: 0.25rem 0.75rem;
            font-size: 0.8rem;
            margin-top: 0.5rem;
            border-radius: 20px;
            backdrop-filter: blur(4px);
        }

        /* 
        ========================================
        VALUE PROP & ABOUT
        ========================================
        */
        .split-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .value-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .check-icon {
            min-width: 24px;
            height: 24px;
            background-color: var(--color-accent-yellow);
            color: var(--color-dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 0.8rem;
            font-weight: bold;
            margin-top: 0.2rem;
        }

        /* 
        ========================================
        FAQ
        ========================================
        */
        .faq-container { max-width: 800px; margin: 0 auto; }
        
        .faq-item {
            border-bottom: 1px solid #eee;
            margin-bottom: 1rem;
        }
        
        .faq-question {
            padding: 1.5rem 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: #666;
        }
        
        .faq-item.active .faq-answer { max-height: 200px; padding-bottom: 1.5rem; }
        .faq-icon { transition: transform 0.3s; }
        .faq-item.active .faq-icon { transform: rotate(180deg); color: var(--color-primary-cyan); }

        /* 
        ========================================
        FOOTER
        ========================================
        */
        footer {
            background-color: var(--color-dark);
            color: var(--color-white);
            padding-top: 5rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            padding-bottom: 4rem;
        }

        .footer-col h4 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--color-white);
        }

        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            opacity: 0.8;
        }

        .map-wrapper {
            height: 300px;
            background: #222;
            border-radius: var(--radius-md);
            overflow: hidden;
        }
        
        .map-wrapper iframe { width: 100%; height: 100%; border: none; filter: grayscale(100%) invert(92%) contrast(83%); }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 2rem 0;
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.6;
        }

        /* 
        ========================================
        MOBILE STICKY CTA
        ========================================
        */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0; left: 0; width: 100%;
            background: var(--color-white);
            padding: 1rem;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none;
            justify-content: center;
        }
        
        .mobile-sticky-cta .btn { width: 100%; }

        /* 
        ========================================
        RESPONSIVE
        ========================================
        */
        @media (max-width: 992px) {
            .split-section { grid-template-columns: 1fr; gap: 2rem; }
            .hero-content { text-align: center; margin: 0 auto; }
            .nav-menu { display: none; } /* Simplified for demo, add slide logic in JS */
            .menu-toggle { display: block; }
            
            /* Simple mobile menu overwrite */
            .nav-menu.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: var(--color-white);
                padding: 2rem;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            .nav-menu.active .nav-link { color: var(--color-dark); }
        }

        @media (max-width: 768px) {
            body { padding-bottom: 80px; } /* Space for sticky CTA */
            .mobile-sticky-cta { display: flex; }
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="site-header" id="header">
        <div class="container nav-container">
            <a href="#" class="logo-wrapper">
                <img id="brand-logo" src="" alt="Imperial Imprimerie Logo">
            </a>

            <!-- Status Indicator -->
            <div id="status-indicator" class="status-badge">
                <span class="status-dot"></span>
                <span class="status-text">Chargement...</span>
            </div>

            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#services" class="nav-link">Solutions</a></li>
                    <li><a href="#portfolio" class="nav-link">Réalisations</a></li>
                    <li><a href="#why-us" class="nav-link">Expertise</a></li>
                    <li><a href="#faq" class="nav-link">FAQ</a></li>
                    <li><a href="#contact" class="nav-link btn btn-primary">Devis Gratuit</a></li>
                </ul>
            </nav>
            
            <div class="menu-toggle" id="menu-toggle">☰</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>L'Imprimerie de <br><span>Précision</span> à Antananarivo.</h1>
            <p>Offset, Numérique, Grand Format. La qualité Imperial pour valoriser votre image de marque. De la carte de visite à la bâche publicitaire.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: inherit;">
                <a href="#contact" class="btn btn-primary">Demander un Devis Gratuit</a>
                <a href="#portfolio" class="btn btn-secondary" style="border-color: rgba(255,255,255,0.5); color: white;">Voir nos travaux</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <h3 class="trust-title">Ils impriment leur réussite chez nous</h3>
        </div>
        <div class="logo-slider">
            <div class="slide-track">
                <!-- Using text placeholders for generic logos to respect copyright/simplicity, styled as logos -->
                <div class="client-logo">BOA MADAGASCAR</div>
                <div class="client-logo">TELMA</div>
                <div class="client-logo">HOTEL COLBERT</div>
                <div class="client-logo">UNICEF</div>
                <div class="client-logo">AXIAN GROUP</div>
                <div class="client-logo">STAR</div>
            </div>
            <div class="slide-track">
                <div class="client-logo">BOA MADAGASCAR</div>
                <div class="client-logo">TELMA</div>
                <div class="client-logo">HOTEL COLBERT</div>
                <div class="client-logo">UNICEF</div>
                <div class="client-logo">AXIAN GROUP</div>
                <div class="client-logo">STAR</div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section-padding services">
        <div class="container">
            <div class="section-header">
                <span class="badge-promo">Nos Solutions</span>
                <h2>Tout imprimer,<br> sans compromis.</h2>
            </div>
            
            <div class="services-grid">
                <!-- Card 1 -->
                <article class="service-card">
                    <div class="service-icon">📐</div>
                    <h3>Grand Format</h3>
                    <p>Bâches, Roll-ups, Vinyles, Panneaux de chantier. Visibilité maximale garantie.</p>
                    <span class="price-tag">Dès 45 000 Ar/m²</span>
                </article>
                
                <!-- Card 2 -->
                <article class="service-card">
                    <div class="service-icon">👔</div>
                    <h3>Papeterie Corporate</h3>
                    <p>Cartes de visite luxe, têtes de lettre, enveloppes. Soignez votre première impression.</p>
                    <a href="#" style="color: var(--color-primary-cyan); font-weight: 700;">Voir les finitions &rarr;</a>
                </article>

                <!-- Card 3 -->
                <article class="service-card">
                    <div class="service-icon">🚀</div>
                    <h3>Marketing Direct</h3>
                    <p>Flyers, dépliants, brochures, catalogues. Pour des campagnes qui convertissent.</p>
                    <a href="#" style="color: var(--color-primary-cyan); font-weight: 700;">Consulter les formats &rarr;</a>
                </article>

                <!-- Card 4 -->
                <article class="service-card">
                    <div class="service-icon">📦</div>
                    <h3>Packaging & Étiquettes</h3>
                    <p>Boîtes produits, autocollants en bobine, packaging alimentaire certifié.</p>
                    <a href="#" style="color: var(--color-primary-cyan); font-weight: 700;">Sur devis &rarr;</a>
                </article>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="#" class="btn btn-secondary">Télécharger le catalogue PDF</a>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>La qualité Imperial en images</h2>
                <p>Pas de mockups 3D ici. Uniquement des produits réels sortis de nos machines.</p>
            </div>

            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799314346d?q=80&w=800&auto=format&fit=crop" alt="Impression Grand Format">
                    <div class="portfolio-overlay">
                        <h4>Habillage Façade</h4>
                        <span class="spec-tag">Vinyle Polymère</span>
                        <span class="spec-tag">Lamination Anti-UV</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1634152962476-4b8a00e1915c?q=80&w=800&auto=format&fit=crop" alt="Carte de visite Luxe">
                    <div class="portfolio-overlay">
                        <h4>Branding Immobilier</h4>
                        <span class="spec-tag">Papier Coton 450g</span>
                        <span class="spec-tag">Dorure à chaud</span>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb7d5c73?q=80&w=800&auto=format&fit=crop" alt="Brochure">
                    <div class="portfolio-overlay">
                        <h4>Catalogue Annuel</h4>
                        <span class="spec-tag">Dos carré collé</span>
                        <span class="spec-tag">Vernis sélectif 3D</span>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1586075010923-2dd45eeed858?q=80&w=800&auto=format&fit=crop" alt="Packaging">
                    <div class="portfolio-overlay">
                        <h4>Coffret Cadeau</h4>
                        <span class="spec-tag">Carton Compact</span>
                        <span class="spec-tag">Impression Offset</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us + About -->
    <section id="why-us" class="section-padding" style="background-color: var(--color-dark); color: var(--color-white);">
        <div class="container">
            <div class="split-section">
                <div>
                    <span class="badge-promo" style="margin-bottom: 1rem; display: inline-block;">Notre Promesse</span>
                    <h2 style="color: var(--color-white); margin-bottom: 1.5rem;">Plus qu'un imprimeur, <br>votre partenaire visuel.</h2>
                    <p style="opacity: 0.8; margin-bottom: 2rem;">
                        Imperial Imprimerie ne se contente pas d'imprimer. Nous sommes votre partenaire technique à Madagascar. Notre parc machine hybride nous permet de répondre à toutes les demandes, du prototype unique à la production de masse industrielle.
                    </p>
                    <a href="#contact" class="btn btn-primary">Parler à un expert</a>
                </div>
                
                <div>
                    <ul class="value-list">
                        <li>
                            <div class="check-icon">✓</div>
                            <div>
                                <strong style="color: var(--color-primary-cyan);">Technologie Hybride</strong><br>
                                <span style="font-size: 0.95rem; opacity: 0.7;">La souplesse du numérique pour l'urgence, la puissance de l'offset pour le volume.</span>
                            </div>
                        </li>
                        <li>
                            <div class="check-icon">✓</div>
                            <div>
                                <strong style="color: var(--color-primary-cyan);">Studio Graphique Intégré</strong><br>
                                <span style="font-size: 0.95rem; opacity: 0.7;">Vérification technique gratuite de vos fichiers (BAT) avant impression. Zéro surprise.</span>
                            </div>
                        </li>
                        <li>
                            <div class="check-icon">✓</div>
                            <div>
                                <strong style="color: var(--color-primary-cyan);">Délais Tenus</strong><br>
                                <span style="font-size: 0.95rem; opacity: 0.7;">Livraison par coursier sur Antananarivo sous 24h-48h.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding">
        <div class="container faq-container">
            <h2 style="text-align: center; margin-bottom: 3rem;">Questions Fréquentes</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    Quel est le délai pour 1000 flyers ?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    Pour des tirages standards (Flyers, Cartes), nous livrons généralement sous 48h ouvrées après validation du Bon à Tirer (BAT).
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Aidez-vous à la conception graphique ?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    Oui, absolument. Notre équipe PAO peut créer vos maquettes de A à Z ou simplement adapter vos fichiers existants aux contraintes d'impression.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Livrez-vous en dehors de Tana ?
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    Oui, nous collaborons avec des transporteurs nationaux pour expédier vos commandes dans toutes les provinces de Madagascar.
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Contact -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Venez voir nos échantillons</h4>
                    <p style="margin-bottom: 2rem; opacity: 0.7;">Touchez le papier, voyez les couleurs. Rien ne vaut une visite à l'atelier pour valider votre projet.</p>
                    
                    <ul class="contact-info">
                        <li>📍 Zone Industrielle Galaxy, Andraharo, Antananarivo</li>
                        <li>📞 +261 34 00 000 00</li>
                        <li>✉️ contact@imperial-imprimerie.mg</li>
                    </ul>
                    <br>
                    <a href="https://wa.me/" class="btn btn-primary" style="background: #25D366;">Discuter sur WhatsApp</a>
                </div>

                <div class="footer-col map-wrapper">
                    <!-- Google Maps Placeholder -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2464099307466!2d47.507662!3d-18.916965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e42d7637895%3A0x6a0c0e5a5a5a5a5a!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2smg!4v1625000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            
            <div class="footer-bottom">
                &copy; 2024 Imperial Imprimerie Madagascar. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <a href="#contact" class="btn btn-primary">Demander un Devis</a>
    </div>

    <!-- Scripts -->
    <script>
        // 1. LOGO INTEGRATION (MANDATORY)
        const LOGO_URL = "logo.jpg";
        document.getElementById('brand-logo').src = LOGO_URL;

        // 2. OPEN/CLOSED STATUS LOGIC
        function updateStatus() {
            const now = new Date();
            const day = now.getDay(); // 0 = Sunday
            const hour = now.getHours();
            
            const dot = document.querySelector('.status-dot');
            const text = document.querySelector('.status-text');
            
            // Logic: Open Mon-Fri, 8h to 17h, Sat 8h-12h
            let isOpen = false;
            
            if (day >= 1 && day <= 5) {
                if (hour >= 8 && hour < 17) isOpen = true;
            } else if (day === 6) {
                if (hour >= 8 && hour < 12) isOpen = true;
            }

            if (isOpen) {
                dot.classList.remove('closed');
                dot.classList.add('open');
                text.textContent = "Atelier Ouvert";
                text.style.color = "#00C853";
            } else {
                dot.classList.remove('open');
                dot.classList.add('closed');
                text.textContent = "Fermé actuellement";
                text.style.color = "#FF5252";
            }
        }
        updateStatus();
        setInterval(updateStatus, 60000); // Update every minute

        // 3. HEADER SCROLL EFFECT
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 4. MOBILE MENU
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            menuToggle.textContent = navMenu.classList.contains('active') ? '✕' : '☰';
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                menuToggle.textContent = '☰';
            });
        });

        // 5. FAQ TOGGLE
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                // Close others
                faqItems.forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
                // Toggle current
                item.classList.toggle('active');
            });
        });
    </script>
</body>
</html>