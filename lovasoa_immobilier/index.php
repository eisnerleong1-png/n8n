<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovasoa Immobilier - Prestige à Antananarivo</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* 
        ========================================
        DESIGN SYSTEM & VARIABLES
        ========================================
        */
        :root {
            --color-primary-orange: #F29D1C;
            --color-cta-red: #F05023;
            --color-dark: #282828;
            --color-text: #1F2937;
            --color-text-light: #6B7280;
            --color-bg-light: #F9FAFB;
            --color-white: #ffffff;
            
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Montserrat', sans-serif;
            
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-premium: 0 20px 40px rgba(0,0,0,0.08);
            
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 1rem;
            
            --transition: all 0.3s ease-in-out;
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
            font-family: var(--font-sans);
            color: var(--color-text);
            background-color: var(--color-bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            color: var(--color-dark);
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

        /* 
        ========================================
        COMPONENTS
        ========================================
        */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: var(--radius-md);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.875rem;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-cta-red);
            color: var(--color-white);
            box-shadow: 0 4px 14px rgba(240, 80, 35, 0.4);
        }
        .btn-primary:hover {
            background-color: #d63f15;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid var(--color-primary-orange);
            color: var(--color-primary-orange);
            background: transparent;
        }
        .btn-outline:hover {
            background-color: var(--color-primary-orange);
            color: var(--color-white);
        }

        .section-padding {
            padding: 5rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .section-title p {
            color: var(--color-text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* 
        ========================================
        HEADER
        ========================================
        */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0);
            transition: var(--transition);
            padding: 1.5rem 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: var(--shadow-sm);
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
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--color-white); /* White on Hero */
            position: relative;
        }
        
        header.scrolled .nav-links a {
            color: var(--color-dark);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--color-primary-orange);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .header-cta {
            padding: 0.75rem 1.5rem;
            border: 1px solid var(--color-primary-orange);
            color: var(--color-white);
            border-radius: var(--radius-md);
            font-weight: 600;
        }
        header.scrolled .header-cta {
            color: var(--color-primary-orange);
        }
        .header-cta:hover {
            background-color: var(--color-primary-orange);
            color: var(--color-white) !important;
        }

        .mobile-menu-btn {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        header.scrolled .mobile-menu-btn {
            color: var(--color-dark);
        }

        /* 
        ========================================
        HERO SECTION
        ========================================
        */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Photo immersive d'une villa moderne à Tana (Golden Hour) */
            background: url('https://images.unsplash.com/photo-1600596542815-2a4d04774c13?q=80&w=2075&auto=format&fit=crop') no-repeat center center/cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: var(--color-white);
            width: 100%;
            padding: 0 1rem;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            color: var(--color-white);
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 3rem;
            font-weight: 300;
            opacity: 0.9;
        }

        /* Search Module */
        .search-module {
            background: rgba(255, 255, 255, 0.95);
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            display: flex;
            gap: 1rem;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: var(--shadow-premium);
            backdrop-filter: blur(5px);
            align-items: flex-end;
        }

        .search-group {
            flex: 1;
            text-align: left;
        }

        .search-group label {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--color-text-light);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }

        .search-group select, .search-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: var(--radius-sm);
            font-family: var(--font-sans);
            font-size: 1rem;
            color: var(--color-dark);
            background: #fff;
        }

        .search-btn {
            background-color: var(--color-cta-red);
            color: white;
            border: none;
            padding: 0.85rem 2rem;
            border-radius: var(--radius-sm);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            height: 48px; /* Match input height */
            white-space: nowrap;
        }
        .search-btn:hover {
            background-color: #d63f15;
        }

        /* 
        ========================================
        TRUST BAR
        ========================================
        */
        .trust-bar {
            background-color: var(--color-dark);
            padding: 2.5rem 0;
            color: rgba(255,255,255,0.6);
        }

        .trust-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .trust-text {
            font-size: 1.1rem;
            font-weight: 300;
            border-left: 3px solid var(--color-primary-orange);
            padding-left: 1rem;
            color: white;
        }

        .partners {
            display: flex;
            gap: 3rem;
            align-items: center;
        }

        .partner-logo {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 2px;
            opacity: 0.7;
            text-transform: uppercase;
        }

        /* 
        ========================================
        LISTINGS (EXCLUSIVE)
        ========================================
        */
        .listings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .listing-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            position: relative;
        }

        .listing-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-premium);
        }

        .card-image {
            height: 250px;
            position: relative;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .listing-card:hover .card-image img {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: var(--color-primary-orange);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-price {
            color: var(--color-cta-red);
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-family: var(--font-serif);
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--color-dark);
        }

        .card-location {
            color: var(--color-text-light);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-features {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #f3f4f6;
            padding-top: 1rem;
            margin-bottom: 1.5rem;
            color: var(--color-text-light);
            font-size: 0.85rem;
        }

        .card-btn {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--color-dark);
            color: white;
            text-align: center;
            display: block;
            border-radius: var(--radius-sm);
            font-weight: 500;
        }
        .card-btn:hover {
            background-color: var(--color-primary-orange);
        }

        /* 
        ========================================
        VALUE PROPOSITION
        ========================================
        */
        .value-section {
            background-color: var(--color-white);
        }

        .value-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .value-content h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            line-height: 1.2;
        }

        .feature-item {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(242, 157, 28, 0.1);
            color: var(--color-primary-orange);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .feature-text h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            font-family: var(--font-sans);
            font-weight: 700;
        }

        .feature-text p {
            color: var(--color-text-light);
        }

        .value-image {
            position: relative;
        }

        .value-image img {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-premium);
        }

        /* 
        ========================================
        TEAM SECTION
        ========================================
        */
        .team-banner {
            background: linear-gradient(rgba(40, 40, 40, 0.9), rgba(40, 40, 40, 0.9)), 
                        url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 1rem;
        }

        .team-banner h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .team-banner p {
            max-width: 700px;
            margin: 0 auto 2.5rem auto;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* 
        ========================================
        FOOTER
        ========================================
        */
        footer {
            background-color: var(--color-dark);
            color: white;
            padding: 4rem 0 1rem 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            color: var(--color-primary-orange);
            font-family: var(--font-sans);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }

        .footer-col ul li {
            margin-bottom: 0.75rem;
        }

        .footer-col ul li a {
            color: #d1d5db;
            font-size: 0.95rem;
        }
        .footer-col ul li a:hover {
            color: var(--color-primary-orange);
        }

        .contact-info p {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: #d1d5db;
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            text-align: center;
            color: rgba(255,255,255,0.4);
            font-size: 0.875rem;
        }

        /* 
        ========================================
        WIDGETS & UTILS
        ========================================
        */
        .whatsapp-widget {
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
            font-size: 2rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 1000;
            transition: var(--transition);
        }
        .whatsapp-widget:hover {
            transform: scale(1.1);
        }

        /* 
        ========================================
        RESPONSIVE
        ========================================
        */
        @media (max-width: 968px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .value-grid {
                grid-template-columns: 1fr;
            }
            .search-module {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }
            .search-btn {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 10px 10px rgba(0,0,0,0.1);
            }
            .nav-links.active {
                display: flex;
            }
            .nav-links a {
                color: var(--color-dark);
                width: 100%;
                padding: 0.5rem 0;
            }
            .header-cta {
                border-color: var(--color-cta-red);
                background-color: var(--color-cta-red);
                text-align: center;
            }
            .mobile-menu-btn {
                display: block;
            }
            .hero-content h1 {
                font-size: 2rem;
            }
            .trust-content {
                flex-direction: column;
                text-align: center;
            }
            .trust-text {
                border-left: none;
                border-bottom: 3px solid var(--color-primary-orange);
                padding-bottom: 1rem;
                padding-left: 0;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">
                    <!-- LOGO INSERTION via JS -->
                    <a href="#"><img id="main-logo" src="" alt="Lovasoa Immobilier"></a>
                </div>
                <div class="nav-links" id="nav-links">
                    <a href="#listings">Vente</a>
                    <a href="#listings">Location</a>
                    <a href="#value">Estimation</a>
                    <a href="#team">Notre Équipe</a>
                    <a href="#contact" class="header-cta">Nous contacter</a>
                </div>
                <div class="mobile-menu-btn" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content container">
            <h1>L'Immobilier à Antananarivo :<br>Sécurité, Transparence et Prestige.</h1>
            <p>Accédez aux meilleurs biens de la capitale avec un accompagnement juridique complet.</p>
            
            <!-- Search Module -->
            <div class="search-module">
                <div class="search-group">
                    <label>Type de bien</label>
                    <select>
                        <option>Maison / Villa</option>
                        <option>Appartement</option>
                        <option>Terrain</option>
                        <option>Locaux Commerciaux</option>
                    </select>
                </div>
                <div class="search-group">
                    <label>Localisation (Tana)</label>
                    <select>
                        <option>Ivandry</option>
                        <option>Ambatobe</option>
                        <option>Isoraka</option>
                        <option>Ankorondrano</option>
                        <option>Mahamasina</option>
                    </select>
                </div>
                <div class="search-group">
                    <label>Budget Max</label>
                    <input type="text" placeholder="Ex: 500 000 000 Ar">
                </div>
                <button class="search-btn">Voir les résultats</button>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container trust-content">
            <div class="trust-text">Ils nous font confiance pour leur patrimoine</div>
            <div class="partners">
                <div class="partner-logo">BNI Mada</div>
                <div class="partner-logo">Notaires M.</div>
                <div class="partner-logo">Ordre Archi</div>
            </div>
            <div style="color: white; font-weight: 500;">
                <i class="fas fa-check-circle" style="color: var(--color-primary-orange);"></i> Plus de 150 familles logées cette année
            </div>
        </div>
    </section>

    <!-- Listings Section -->
    <section id="listings" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Nos opportunités du moment à Tana</h2>
                <p>Une sélection exclusive de biens vérifiés et titrés.</p>
            </div>

            <div class="listings-grid">
                <!-- Card 1 -->
                <article class="listing-card">
                    <div class="card-image">
                        <span class="badge">Exclusivité</span>
                        <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2070&auto=format&fit=crop" alt="Villa Ivandry">
                    </div>
                    <div class="card-content">
                        <div class="card-price">1 200 000 000 Ar</div>
                        <h3 class="card-title">Villa de Maître - Ivandry</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ivandry, Ambassades</div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 4 Chambres</span>
                            <span><i class="fas fa-ruler-combined"></i> 250m²</span>
                            <span><i class="fas fa-swimming-pool"></i> Piscine</span>
                        </div>
                        <a href="#" class="card-btn">Visiter ce bien</a>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="listing-card">
                    <div class="card-image">
                        <span class="badge">Nouveau</span>
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?q=80&w=2070&auto=format&fit=crop" alt="Appartement Ambatobe">
                    </div>
                    <div class="card-content">
                        <div class="card-price">850 000 000 Ar</div>
                        <h3 class="card-title">Penthouse Vue Panoramique</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ambatobe, Lycée Français</div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 3 Chambres</span>
                            <span><i class="fas fa-ruler-combined"></i> 180m²</span>
                            <span><i class="fas fa-parking"></i> 2 Garages</span>
                        </div>
                        <a href="#" class="card-btn">Visiter ce bien</a>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="listing-card">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" alt="Maison Haute Ville">
                    </div>
                    <div class="card-content">
                        <div class="card-price">600 000 000 Ar</div>
                        <h3 class="card-title">Maison Traditionnelle Rénovée</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Haute Ville, Faravohitra</div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 5 Chambres</span>
                            <span><i class="fas fa-ruler-combined"></i> 300m²</span>
                            <span><i class="fas fa-tree"></i> Jardin</span>
                        </div>
                        <a href="#" class="card-btn">Visiter ce bien</a>
                    </div>
                </article>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="#" class="btn btn-outline">Voir tous nos biens</a>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section id="value" class="section-padding value-section">
        <div class="container">
            <div class="value-grid">
                <div class="value-content">
                    <h2>Plus qu'une agence,<br>votre partenaire de confiance.</h2>
                    
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-balance-scale"></i></div>
                        <div class="feature-text">
                            <h3>Sécurité Juridique Totale</h3>
                            <p>Nous vérifions systématiquement les titres fonciers et certifications auprès des domaines avant toute visite.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-city"></i></div>
                        <div class="feature-text">
                            <h3>Expertise Locale & Réseau</h3>
                            <p>Une maîtrise parfaite des quartiers de Tana (prix au m², sécurité, projets futurs) pour investir juste.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-file-contract"></i></div>
                        <div class="feature-text">
                            <h3>Transparence Absolue</h3>
                            <p>Honoraires clairs, aucun frais caché. Nous vous accompagnons de la première visite à la signature notariée.</p>
                        </div>
                    </div>
                </div>
                <div class="value-image">
                    <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?q=80&w=2832&auto=format&fit=crop" alt="Réunion d'affaires à Antananarivo">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team-banner">
        <div class="container">
            <h2>L'Excellence au service de votre projet</h2>
            <p>"Lovasoa, c'est l'alliance de l'expertise locale et des standards internationaux. Notre équipe dédiée vous accompagne pour sécuriser chaque étape de votre transaction."</p>
            <a href="#" class="btn btn-primary">Rencontrer nos agents</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Lovasoa Immobilier</h3>
                    <p style="color: #9ca3af; margin-bottom: 1rem;">
                        L'agence de référence pour l'immobilier de prestige à Antananarivo.
                    </p>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt" style="color: var(--color-primary-orange);"></i> Immeuble Prisme, Isoraka, Antananarivo 101</p>
                        <p><i class="fas fa-phone" style="color: var(--color-primary-orange);"></i> +261 34 00 000 00</p>
                        <p><i class="fas fa-envelope" style="color: var(--color-primary-orange);"></i> contact@lovasoa.mg</p>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="#">Acheter un bien</a></li>
                        <li><a href="#">Louer un bien</a></li>
                        <li><a href="#">Faire estimer</a></li>
                        <li><a href="#">Notre Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Infos Légales</h3>
                    <ul>
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Honoraires Agence</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Lovasoa Immobilier. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Widget -->
    <a href="https://wa.me/261340000000" class="whatsapp-widget" target="_blank" title="Contactez-nous sur WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JavaScript -->
    <script>
        // ==========================================
        // CONFIGURATION LOGO (OBLIGATOIRE)
        // ==========================================
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien direct de votre logo final (.png transparent recommandé)
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        
        // Initialisation du logo
        document.addEventListener("DOMContentLoaded", () => {
            const logoImg = document.getElementById('main-logo');
            if(logoImg) {
                logoImg.src = LOGO_URL;
            }
        });

        // ==========================================
        // UI INTERACTIONS
        // ==========================================
        
        // Sticky Header Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const navLinks = document.getElementById('nav-links');

        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Change icon
            const icon = menuBtn.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Smooth Scroll for Anchors
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                navLinks.classList.remove('active'); // Close mobile menu if open
                const icon = menuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>