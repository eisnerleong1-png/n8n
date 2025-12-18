<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynasty Immobilier | Excellence & Confiance à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* 
        ----------------------------------------------------------------
        CORE VARIABLES & RESET
        ----------------------------------------------------------------
        */
        :root {
            --color-primary: #283577; /* Bleu Nuit - Confiance */
            --color-primary-dark: #1a2455;
            --color-accent: #F3CB46; /* Or - Prestige */
            --color-accent-hover: #dcb32f;
            --color-text: #3F3E40;
            --color-text-light: #6b7280;
            --color-bg-light: #F9FAFB;
            --color-white: #ffffff;
            
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;

            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            
            --radius-md: 0.5rem;
            --radius-lg: 1rem;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--color-text);
            background-color: var(--color-bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5 {
            font-family: var(--font-heading);
            color: var(--color-primary);
            line-height: 1.2;
        }

        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }

        /* 
        ----------------------------------------------------------------
        UTILITIES & COMPONENTS
        ----------------------------------------------------------------
        */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.875rem 2rem;
            font-weight: 600;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1rem;
            letter-spacing: 0.02em;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-primary);
            box-shadow: 0 4px 14px 0 rgba(243, 203, 70, 0.39);
        }
        .btn-primary:hover {
            background-color: var(--color-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px 0 rgba(243, 203, 70, 0.23);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--color-primary);
            color: var(--color-primary);
        }
        .btn-outline:hover {
            background: var(--color-primary);
            color: var(--color-white);
        }

        .section-padding { padding: 6rem 0; }
        
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: var(--color-accent);
            color: var(--color-primary);
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 99px;
            letter-spacing: 0.05em;
        }

        .text-center { text-align: center; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-8 { margin-bottom: 2rem; }

        /* 
        ----------------------------------------------------------------
        HEADER
        ----------------------------------------------------------------
        */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            padding: 1.25rem 0;
            background: rgba(40, 53, 119, 0.9); /* Base dark for visibility */
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        header.scrolled {
            padding: 0.75rem 0;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow-md);
        }
        
        header.scrolled .nav-link { color: var(--color-primary); }
        header.scrolled .logo-img { filter: none; } /* Reset filter if needed */

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            display: block;
            /* Placeholder styling if image fails */
            background: #eee; 
        }

        .nav-menu {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-link {
            color: var(--color-white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--color-accent);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after { width: 100%; }

        .mobile-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-toggle { color: var(--color-primary); }

        /* 
        ----------------------------------------------------------------
        HERO SECTION
        ----------------------------------------------------------------
        */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Image: Luxury Villa with view */
            background: url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop') no-repeat center center/cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(40, 53, 119, 0.4) 0%, rgba(20, 27, 65, 0.7) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            padding: 0 1rem;
            color: var(--color-white);
            margin-top: -80px; /* Slight offset for visual balance */
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--color-white);
            letter-spacing: -0.02em;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            font-weight: 300;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* 
        ----------------------------------------------------------------
        SEARCH MODULE
        ----------------------------------------------------------------
        */
        .search-module {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1100px;
            background: var(--color-white);
            padding: 2rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            z-index: 10;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            align-items: end;
        }

        .input-group label {
            display: block;
            font-size: 0.85rem;
            color: var(--color-text-light);
            margin-bottom: 0.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .input-group select, .input-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: var(--radius-md);
            background-color: #f9fafb;
            font-family: var(--font-body);
            color: var(--color-primary);
            font-weight: 600;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-group select:focus, .input-group input:focus {
            border-color: var(--color-primary);
        }

        .btn-search {
            width: 100%;
            height: 46px; /* Match input height roughly */
        }

        /* 
        ----------------------------------------------------------------
        SOCIAL PROOF
        ----------------------------------------------------------------
        */
        .social-proof {
            padding-top: 8rem; /* Space for search bar overlap */
            padding-bottom: 3rem;
            background-color: var(--color-bg-light);
            border-bottom: 1px solid #e5e7eb;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-bottom: 0.25rem;
        }

        .stat-item p {
            color: var(--color-text-light);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* 
        ----------------------------------------------------------------
        CATALOGUE (Featured)
        ----------------------------------------------------------------
        */
        .section-header {
            margin-bottom: 4rem;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .section-header p {
            color: var(--color-text-light);
        }

        .properties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .property-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all 0.4s ease;
            group: 'hover';
            position: relative;
        }

        .property-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .card-image-wrapper {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .property-card:hover .card-image {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            z-index: 2;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: 0.5rem;
            font-family: var(--font-heading);
        }

        .card-location {
            color: var(--color-text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-price {
            font-size: 1.125rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .euro-price {
            font-size: 0.8rem;
            color: var(--color-text-light);
            font-weight: 400;
            opacity: 0;
            transform: translateX(-10px);
            transition: all 0.3s ease;
        }

        .property-card:hover .euro-price {
            opacity: 1;
            transform: translateX(0);
        }

        .card-features {
            display: flex;
            justify-content: space-between;
            padding-top: 1rem;
            border-top: 1px solid #f3f4f6;
            font-size: 0.85rem;
            color: var(--color-text-light);
        }

        /* 
        ----------------------------------------------------------------
        APPROCHE 360
        ----------------------------------------------------------------
        */
        .approach-section {
            background-color: var(--color-white);
            overflow: hidden;
        }

        .approach-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 4rem;
        }

        .approach-image {
            position: relative;
        }
        
        .approach-image img {
            width: 100%;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            /* Image: Professional discussion/Handshake */
            object-fit: cover;
            height: 600px;
        }

        .approach-content h2 {
            font-size: 3rem;
            margin-bottom: 2rem;
        }

        .approach-list {
            margin-top: 2rem;
        }

        .approach-item {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .approach-icon {
            width: 60px;
            height: 60px;
            flex-shrink: 0;
            background: rgba(40, 53, 119, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary);
            font-size: 1.5rem;
        }

        .approach-text h4 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
            font-family: var(--font-body);
        }

        /* 
        ----------------------------------------------------------------
        OWNER SECTION
        ----------------------------------------------------------------
        */
        .owner-section {
            background-color: var(--color-primary);
            color: var(--color-white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        /* Decorative circle */
        .owner-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 50%;
        }

        .owner-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .owner-content h2 {
            color: var(--color-white);
            font-size: 3rem;
            margin-bottom: 1.5rem;
        }

        .owner-content p {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 2.5rem;
        }

        /* 
        ----------------------------------------------------------------
        FOOTER
        ----------------------------------------------------------------
        */
        footer {
            background-color: #1a1a1a;
            color: #d1d5db;
            padding: 5rem 0 2rem;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .footer-col h4 {
            color: var(--color-white);
            font-family: var(--font-body);
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .footer-col ul li { margin-bottom: 0.75rem; }
        .footer-col ul li a { color: #9ca3af; }
        .footer-col ul li a:hover { color: var(--color-accent); }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 2rem;
            text-align: center;
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
        }
        .social-icon {
            width: 36px;
            height: 36px;
            border: 1px solid #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            transition: all 0.3s;
        }
        .social-icon:hover {
            background: var(--color-accent);
            border-color: var(--color-accent);
            color: var(--color-primary);
        }

        /* 
        ----------------------------------------------------------------
        RESPONSIVE
        ----------------------------------------------------------------
        */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 3rem; }
            .search-module {
                grid-template-columns: 1fr 1fr;
                bottom: -80px;
            }
            .social-proof { padding-top: 10rem; }
            .approach-grid { grid-template-columns: 1fr; gap: 2rem; }
            .approach-image img { height: 400px; }
            .approach-item { flex-direction: column; align-items: flex-start; gap: 0.5rem; }
            .approach-icon { width: 40px; height: 40px; font-size: 1rem; }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--color-white);
                flex-direction: column;
                justify-content: center;
                padding: 2rem;
                transition: right 0.4s ease;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }
            .nav-menu.active { right: 0; }
            .nav-link { color: var(--color-primary); font-size: 1.25rem; }
            .mobile-toggle { display: block; z-index: 1001; }
            .mobile-toggle.active { color: var(--color-primary); }
            
            .hero h1 { font-size: 2.25rem; }
            .search-module { grid-template-columns: 1fr; position: relative; bottom: 0; transform: none; left: 0; width: 100%; margin-top: 2rem; }
            .hero { height: auto; padding: 8rem 0 4rem; flex-direction: column; }
            .hero-content { margin-top: 0; }
            .social-proof { padding-top: 4rem; }
            
            .footer-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container" id="logo-container">
                <!-- Logo injected via JS -->
            </a>
            
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#" class="nav-link">Acheter</a></li>
                    <li><a href="#" class="nav-link">Louer</a></li>
                    <li><a href="#" class="nav-link">Vendre</a></li>
                    <li><a href="#" class="nav-link">Approche 360</a></li>
                    <li><a href="#" class="btn btn-primary">Estimer mon bien</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container" style="width: 100%; position: relative; z-index: 5;">
            <div class="hero-content">
                <h1>Votre Partenaire Immobilier de Confiance à Antananarivo.</h1>
                <p>Achat, Vente, Location & Gestion 360. Trouvez le bien idéal ou vendez au meilleur prix grâce à notre expertise locale.</p>
            </div>

            <!-- Search Module -->
            <div class="search-module">
                <div class="input-group">
                    <label>Type de bien</label>
                    <select>
                        <option>Maison / Villa</option>
                        <option>Appartement</option>
                        <option>Terrain</option>
                        <option>Local Commercial</option>
                    </select>
                </div>
                <div class="input-group">
                    <label>Localisation</label>
                    <input type="text" placeholder="Ivandry, Ambatobe...">
                </div>
                <div class="input-group">
                    <label>Budget Max (Ar)</label>
                    <select>
                        <option>Indifférent</option>
                        <option>500 M - 1 Md</option>
                        <option>1 Md - 2 Md</option>
                        <option>+ 2 Mds</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-search">
                    <i class="fas fa-search" style="margin-right: 8px;"></i> Voir les résultats
                </button>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <div class="container text-center">
            <p class="mb-8" style="font-weight: 600; color: var(--color-primary);">L'AGENCE DE RÉFÉRENCE POUR VOS PROJETS IMMOBILIERS</p>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Mandats ce mois</p>
                </div>
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Expertise Juridique</p>
                </div>
                <div class="stat-item">
                    <h3>15 Ans</h3>
                    <p>Expérience Tana</p>
                </div>
                <div class="stat-item">
                    <h3>4.9/5</h3>
                    <p>Avis Clients</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Nos Dernières Opportunités à la Une</h2>
                <p>Une sélection exclusive de biens d'exception sur le marché.</p>
            </div>

            <div class="properties-grid">
                <!-- Card 1 -->
                <article class="property-card">
                    <div class="card-image-wrapper">
                        <span class="badge card-badge">Exclusivité</span>
                        <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?q=80&w=2070&auto=format&fit=crop" alt="Villa Piscine Ivandry" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Villa Piscine - Ivandry</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Ivandry, Antananarivo</div>
                        <div class="card-price" data-price="1200000000">
                            1 200 000 000 Ar
                            <span class="euro-price">~245 000 €</span>
                        </div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 4 Chb.</span>
                            <span><i class="fas fa-bath"></i> 3 Sdb.</span>
                            <span><i class="fas fa-ruler-combined"></i> 350m²</span>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="property-card">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=2070&auto=format&fit=crop" alt="Appartement T3 Centre Ville" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Appartement T3 - Standing</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> Centre Ville, Antananarivo</div>
                        <div class="card-price" data-price="2000000">
                            2 000 000 Ar <span style="font-size:0.8em; font-weight:400; color:#666;">/mois</span>
                            <span class="euro-price">~410 €</span>
                        </div>
                        <div class="card-features">
                            <span><i class="fas fa-bed"></i> 2 Chb.</span>
                            <span><i class="fas fa-parking"></i> 1 Pkg.</span>
                            <span><i class="fas fa-ruler-combined"></i> 90m²</span>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="property-card">
                    <div class="card-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=2132&auto=format&fit=crop" alt="Terrain By Pass" class="card-image">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Terrain Constructible</h3>
                        <div class="card-location"><i class="fas fa-map-marker-alt"></i> By Pass, Antananarivo</div>
                        <div class="card-price" data-price="80000">
                            80 000 Ar <span style="font-size:0.8em; font-weight:400; color:#666;">/m²</span>
                            <span class="euro-price">~16 €/m²</span>
                        </div>
                        <div class="card-features">
                            <span><i class="fas fa-tree"></i> Plat</span>
                            <span><i class="fas fa-file-contract"></i> Titré</span>
                            <span><i class="fas fa-ruler-combined"></i> 2000m²</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="text-center" style="margin-top: 3rem;">
                <a href="#" class="btn btn-outline">Parcourir tout le catalogue</a>
            </div>
        </div>
    </section>

    <!-- Approach 360 -->
    <section class="section-padding approach-section">
        <div class="container">
            <div class="approach-grid">
                <div class="approach-image">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=1973&auto=format&fit=crop" alt="Agent Immobilier Professionnel">
                </div>
                <div class="approach-content">
                    <span style="color: var(--color-accent); font-weight:700; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.5rem; display:block;">Notre Différence</span>
                    <h2>Une Vision 360 de l'Immobilier</h2>
                    <p style="color: var(--color-text-light);">Nous ne nous contentons pas d'ouvrir des portes. Nous sécurisons votre patrimoine et optimisons vos investissements grâce à une expertise globale.</p>
                    
                    <div class="approach-list">
                        <div class="approach-item">
                            <div class="approach-icon"><i class="fas fa-balance-scale"></i></div>
                            <div class="approach-text">
                                <h4>Accompagnement Juridique</h4>
                                <p style="font-size: 0.9rem; color: #666;">Vérification des titres, rédaction des actes et sécurisation des fonds. Zéro surprise.</p>
                            </div>
                        </div>
                        <div class="approach-item">
                            <div class="approach-icon"><i class="fas fa-camera"></i></div>
                            <div class="approach-text">
                                <h4>Valorisation Premium</h4>
                                <p style="font-size: 0.9rem; color: #666;">Photos professionnelles, home staging virtuel et stratégie marketing ciblée.</p>
                            </div>
                        </div>
                        <div class="approach-item">
                            <div class="approach-icon"><i class="fas fa-key"></i></div>
                            <div class="approach-text">
                                <h4>Gestion Locative 360</h4>
                                <p style="font-size: 0.9rem; color: #666;">Recherche de locataires, encaissement des loyers et maintenance technique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Owner Section -->
    <section class="section-padding owner-section">
        <div class="container owner-content">
            <h2>Propriétaire ? Maximisez la valeur de votre bien.</h2>
            <p>Profitez de notre réseau d'acheteurs qualifiés (locaux et expatriés) pour vendre rapidement et au meilleur prix.</p>
            <a href="#" class="btn btn-primary">Demander une estimation gratuite</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo-container" style="margin-bottom: 1.5rem; filter: brightness(0) invert(1);">
                         <!-- JS will duplicate logo here if needed or just text -->
                         <h3 style="color:white; font-family:var(--font-heading);">DYNASTY</h3>
                    </div>
                    <p style="color: #9ca3af; margin-bottom: 1.5rem;">L'immobilier de prestige à Antananarivo. Transparence, expertise et résultats.</p>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Acheter</a></li>
                        <li><a href="#">Louer</a></li>
                        <li><a href="#">Vendre</a></li>
                        <li><a href="#">Estimer</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Informations</h4>
                    <ul>
                        <li><a href="#">Notre Agence</a></li>
                        <li><a href="#">Recrutement</a></li>
                        <li><a href="#">Honoraires</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" style="color:var(--color-accent); margin-right:8px;"></i> Immeuble Prisme, Ankorondrano</li>
                        <li><i class="fas fa-phone" style="color:var(--color-accent); margin-right:8px;"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope" style="color:var(--color-accent); margin-right:8px;"></i> contact@dynasty-immo.mg</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Dynasty Immobilier. Tous droits réservés. Mentions Légales.</p>
            </div>
        </div>
    </footer>

    <script>
        // INSTRUCTION IMPÉRATIVE: VARIABLE LOGO
        // REMARQUE POUR L'UTILISATEUR : Collez l'URL de votre logo final ci-dessous à la place de l'URL placeholder.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";

        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Insert Logo
            const logoContainers = document.querySelectorAll('.logo-container');
            // Since the placeholder text says "PHO RESTO" due to strict instructions, 
            // but the site is real estate, we handle it gracefully in the console or just display it.
            // For the sake of the design looking good, I will use the variable but note it might look odd if not changed.
            
            // To make it look professional despite the specific placeholder text requested:
            const logoImg = document.createElement('img');
            logoImg.src = LOGO_URL;
            logoImg.alt = "Dynasty Immobilier Logo";
            logoImg.className = "logo-img";
            
            // Only injecting in header, Footer has text fallback for design consistency
            const headerLogo = document.getElementById('logo-container');
            if(headerLogo) headerLogo.appendChild(logoImg);


            // 2. Sticky Header Logic
            const header = document.getElementById('header');
            const logoImage = document.querySelector('.logo-img');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                    // Optional: Switch logo to colored version if needed here
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 3. Mobile Menu Logic
            const mobileToggle = document.getElementById('mobile-toggle');
            const navMenu = document.getElementById('nav-menu');
            const icon = mobileToggle.querySelector('i');

            mobileToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                mobileToggle.classList.toggle('active');
                
                if (navMenu.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // 4. Smooth Scroll for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Close mobile menu if open
                    navMenu.classList.remove('active');
                    mobileToggle.classList.remove('active');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');

                    const target = document.querySelector(this.getAttribute('href'));
                    if(target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // 5. Scroll Reveal Animation (Simple version)
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const cards = document.querySelectorAll('.property-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = `all 0.6s ease ${index * 0.1}s`; // Staggered delay
                observer.observe(card);
            });
        });
    </script>
</body>
</html>