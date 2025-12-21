<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayanah Shopping | L'Art de Vivre à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- DESIGN SYSTEM & RESET --- */
        :root {
            --primary: #007B88; /* Confiance - Teal */
            --primary-dark: #005f69;
            --primary-light: #e6f2f3;
            --accent: #D09244; /* Action/Luxe - Gold */
            --accent-hover: #b57d36;
            --support: #96AA53; /* Fraîcheur */
            --text-dark: #1a1a1a;
            --text-grey: #666666;
            --bg-light: #f9f9f9;
            --white: #ffffff;
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 30px rgba(0,0,0,0.08);
            --radius: 12px;
            --container: 1280px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-dark);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; height: auto; display: block; }

        /* --- UTILITIES --- */
        .container {
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--white);
            border: 2px solid var(--accent);
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            border-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(208, 146, 68, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .section-padding { padding: 80px 0; }
        .text-center { text-align: center; }

        /* --- TOP BAR --- */
        .top-bar {
            background-color: var(--primary);
            color: var(--white);
            font-size: 0.85rem;
            padding: 10px 0;
            text-align: center;
            font-weight: 500;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0; /* Will be adjusted by JS based on scroll for topbar */
            left: 0;
            width: 100%;
            z-index: 1000;
            background: transparent;
            transition: all 0.4s ease;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            padding: 10px 0;
        }

        /* Adjust for sticky header + top bar logic */
        body { padding-top: 0; }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 90px;
        }

        .logo img {
            height: 50px;
            object-fit: contain;
        }

        /* SEARCH BAR */
        .search-container {
            flex: 1;
            max-width: 500px;
            margin: 0 40px;
            position: relative;
        }

        .search-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-input {
            width: 100%;
            padding: 12px 20px;
            padding-right: 50px;
            border-radius: 50px;
            border: 1px solid #e0e0e0;
            background: #f4f8f9;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            background: #fff;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(0, 123, 136, 0.1);
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            border: none;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            border-radius: 12px;
            margin-top: 8px;
            box-shadow: var(--shadow-md);
            display: none;
            overflow: hidden;
            z-index: 1001;
            border: 1px solid #eee;
        }

        .suggestion-item {
            padding: 12px 20px;
            cursor: pointer;
            border-bottom: 1px solid #f5f5f5;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .suggestion-item:hover { background: #f9f9f9; color: var(--primary); }
        .suggestion-item i { color: var(--text-grey); font-size: 0.8rem; }

        /* NAV & ACTIONS */
        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s;
        }

        .nav-link:hover { color: var(--primary); }
        .nav-link:hover::after { width: 100%; }

        .header-actions {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .action-icon {
            font-size: 1.2rem;
            position: relative;
            color: var(--text-dark);
        }

        .badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-toggle { display: none; font-size: 1.5rem; cursor: pointer; }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            padding-top: 140px; /* Space for fixed header */
            padding-bottom: 80px;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #fbfdfd 0%, #eef6f7 100%);
            overflow: hidden;
        }

        .hero-container {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content {
            z-index: 2;
            position: relative;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(0, 123, 136, 0.1);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 24px;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: var(--text-dark);
            margin-bottom: 24px;
            line-height: 1.15;
            letter-spacing: -1px;
        }

        .hero h1 span {
            color: var(--primary);
            position: relative;
            z-index: 1;
        }
        
        .hero h1 span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 12px;
            background: #D09244;
            opacity: 0.2;
            z-index: -1;
        }

        .hero p {
            font-size: 1.15rem;
            color: var(--text-grey);
            margin-bottom: 40px;
            max-width: 90%;
        }

        .hero-visual {
            position: relative;
            height: 600px;
            border-radius: var(--radius);
        }

        .hero-img-main {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 20px 20px 0px rgba(0, 123, 136, 0.1);
        }

        .hero-floating-card {
            position: absolute;
            bottom: 40px;
            left: -30px;
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        .hero-floating-card i {
            font-size: 2rem;
            color: var(--support);
        }
        .hero-floating-card div span {
            display: block;
            font-weight: 700;
            color: var(--text-dark);
        }
        .hero-floating-card div small {
            color: var(--text-grey);
            font-size: 0.85rem;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }
        
        .trust-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .trust-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .trust-text h4 { font-size: 1rem; margin-bottom: 2px; }
        .trust-text p { font-size: 0.85rem; color: var(--text-grey); }

        /* --- CATEGORIES --- */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .category-card {
            position: relative;
            height: 350px;
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            group: 1;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        .category-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 60%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
        }

        .category-overlay h3 {
            color: white;
            font-size: 1.4rem;
            transform: translateY(0);
            transition: transform 0.3s;
        }

        .category-link {
            color: var(--accent);
            font-weight: 600;
            font-size: 0.9rem;
            margin-top: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s;
        }

        .category-card:hover .category-link {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- BEST SELLERS --- */
        .products-section {
            background-color: var(--bg-light);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-md);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--support);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 2;
        }

        .product-img-wrapper {
            height: 250px;
            overflow: hidden;
            position: relative;
            background: #f4f4f4;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-img-wrapper img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-category {
            color: var(--text-grey);
            font-size: 0.8rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 15px;
            margin-top: auto;
        }

        .product-action {
            width: 100%;
            padding: 12px;
            background: var(--text-dark);
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .product-action:hover {
            background: var(--accent);
        }

        /* --- ABOUT & LOCATION --- */
        .about-section {
            background: white;
        }

        .about-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-text h2 {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .about-text p {
            color: var(--text-grey);
            margin-bottom: 30px;
            font-size: 1.05rem;
        }

        .info-block {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-block i {
            color: var(--accent);
            font-size: 1.2rem;
            margin-top: 5px;
        }

        .map-wrapper {
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            position: relative;
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(20%); /* Premium touch */
        }

        /* --- FOOTER --- */
        footer {
            background: #0b2e33; /* Very dark teal */
            color: white;
            padding-top: 70px;
            padding-bottom: 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-brand p {
            color: #a8c5c9;
            margin-top: 20px;
            font-size: 0.95rem;
            max-width: 300px;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: #a8c5c9;
            font-size: 0.95rem;
        }

        .footer-col ul li a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-link:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: #6c8c91;
            font-size: 0.9rem;
        }

        /* --- FLOATING WHATSAPP --- */
        .float-wa {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--support);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            z-index: 100;
            transition: all 0.3s;
        }

        .float-wa:hover {
            transform: scale(1.1) rotate(10deg);
            background-color: #85994b;
        }

        /* --- MEDIA QUERIES --- */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 2.8rem; }
            .categories-grid { grid-template-columns: repeat(2, 1fr); }
            .trust-grid { grid-template-columns: repeat(3, 1fr); }
        }

        @media (max-width: 900px) {
            .hero-container { grid-template-columns: 1fr; text-align: center; gap: 40px; }
            .hero h1 { margin-left: auto; margin-right: auto; max-width: 600px; }
            .hero p { margin-left: auto; margin-right: auto; }
            .hero-visual { height: 400px; }
            .nav-menu { display: none; } /* Hide for now, mobile menu logic needed */
            .search-container { display: none; } /* On mobile, maybe icon trigger */
            .mobile-toggle { display: block; color: var(--text-dark); }
            .about-container { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            
            /* Mobile Nav Logic */
            .nav-menu.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 90px;
                left: 0;
                width: 100%;
                background: white;
                padding: 20px;
                box-shadow: var(--shadow-md);
                align-items: center;
            }
        }

        @media (max-width: 600px) {
            .hero h1 { font-size: 2.2rem; }
            .trust-grid { grid-template-columns: 1fr; text-align: center; }
            .trust-item { flex-direction: column; }
            .categories-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .social-links { justify-content: center; }
            .header-inner { padding: 0 20px; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container">
            <i class="fas fa-truck" style="margin-right: 8px;"></i> Livraison partout à Antananarivo | Service Client : 03X XX XXX XX
        </div>
    </div>

    <!-- HEADER -->
    <header id="main-header">
        <div class="container header-inner">
            <a href="#" class="logo">
                <img id="brand-logo" alt="Ayanah Shopping Logo">
            </a>

            <!-- Mobile Toggle -->
            <div class="mobile-toggle" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>

            <!-- Search -->
            <div class="search-container">
                <div class="search-wrapper">
                    <input type="text" class="search-input" placeholder="Que recherchez-vous ? (ex: Rice Cooker...)" id="search-input">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
                <div class="search-suggestions" id="search-results">
                    <!-- JS Injected items -->
                </div>
            </div>

            <!-- Nav -->
            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#" class="nav-link">Cuisine</a></li>
                    <li><a href="#" class="nav-link">Déco</a></li>
                    <li><a href="#" class="nav-link">Électro</a></li>
                    <li><a href="#" class="nav-link">Gadgets</a></li>
                </ul>
            </nav>

            <!-- Actions -->
            <div class="header-actions">
                <a href="#" class="action-icon">
                    <i class="far fa-user"></i>
                </a>
                <a href="#" class="action-icon">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="badge">2</span>
                </a>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-badge">Nouveau Catalogue 2024</span>
                <h1>Tout l'univers de la Maison et de la Cuisine à <span>Tana.</span></h1>
                <p>Fini le chaos des recherches. Retrouvez le meilleur de l'électroménager, de la décoration et des gadgets utiles en un seul endroit, livrés chez vous.</p>
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="#" class="btn btn-primary">Voir le catalogue</a>
                    <a href="#" class="btn btn-outline">En savoir plus</a>
                </div>
            </div>
            <div class="hero-visual">
                <!-- Using Unsplash image for Modern Home/Kitchen context -->
                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=2800&auto=format&fit=crop" class="hero-img-main" alt="Cuisine Moderne">
                
                <div class="hero-floating-card">
                    <i class="fas fa-shield-alt"></i>
                    <div>
                        <span>Garantie Incluse</span>
                        <small>Sur tous les appareils</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-tag"></i></div>
                    <div class="trust-text">
                        <h4>Prix Transparents</h4>
                        <p>Affichés en Ariary, pas de surprise.</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-box-open"></i></div>
                    <div class="trust-text">
                        <h4>Stock à Tana</h4>
                        <p>Disponible immédiatement.</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-star"></i></div>
                    <div class="trust-text">
                        <h4>Qualité Garantie</h4>
                        <p>Produits testés et approuvés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CATEGORIES -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Aménagez chaque coin</h2>
                <p style="color: var(--text-grey);">Explorez nos collections pour une maison plus belle et fonctionnelle.</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=1000&auto=format&fit=crop" alt="Cuisine">
                    <div class="category-overlay">
                        <h3>Cuisine</h3>
                        <div class="category-link">Voir la collection <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4f9d?q=80&w=1000&auto=format&fit=crop" alt="Décoration">
                    <div class="category-overlay">
                        <h3>Décoration</h3>
                        <div class="category-link">Voir la collection <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1588854337221-4cf9fa96059c?q=80&w=1000&auto=format&fit=crop" alt="Petit Électro">
                    <div class="category-overlay">
                        <h3>Petit Électro</h3>
                        <div class="category-link">Voir la collection <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?q=80&w=1000&auto=format&fit=crop" alt="Gadgets">
                    <div class="category-overlay">
                        <h3>Gadgets</h3>
                        <div class="category-link">Voir la collection <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEST SELLERS -->
    <section class="section-padding products-section">
        <div class="container">
            <div class="section-header">
                <h2>Coups de Cœur</h2>
                <p style="color: var(--text-grey);">Les articles préférés des foyers Malagasy cette semaine.</p>
            </div>

            <div class="products-grid">
                <!-- P1 -->
                <div class="product-card">
                    <div class="product-badge">Top Vente</div>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1585516955088-295982823617?q=80&w=800&auto=format&fit=crop" alt="Air Fryer">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Cuisine</span>
                        <h3 class="product-title">Air Fryer Digital 5L</h3>
                        <div class="product-price">350.000 Ar</div>
                        <button class="product-action"><i class="fas fa-cart-plus"></i> Ajouter au panier</button>
                    </div>
                </div>

                <!-- P2 -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1593618998160-e34014e67546?q=80&w=800&auto=format&fit=crop" alt="Couteaux">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Ustensiles</span>
                        <h3 class="product-title">Set Couteaux Chef Pro</h3>
                        <div class="product-price">85.000 Ar</div>
                        <button class="product-action"><i class="fas fa-cart-plus"></i> Ajouter au panier</button>
                    </div>
                </div>

                <!-- P3 -->
                <div class="product-card">
                    <div class="product-badge">Nouveau</div>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1507473888900-52e1ad146957?q=80&w=800&auto=format&fit=crop" alt="Lampe Tactile">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Déco</span>
                        <h3 class="product-title">Lampe Chevet Tactile</h3>
                        <div class="product-price">60.000 Ar</div>
                        <button class="product-action"><i class="fas fa-cart-plus"></i> Ajouter au panier</button>
                    </div>
                </div>

                <!-- P4 -->
                <div class="product-card">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1574620021678-43e77f0c4767?q=80&w=800&auto=format&fit=crop" alt="Batteur">
                    </div>
                    <div class="product-info">
                        <span class="product-category">Pâtisserie</span>
                        <h3 class="product-title">Batteur Électrique Inox</h3>
                        <div class="product-price">110.000 Ar</div>
                        <button class="product-action"><i class="fas fa-cart-plus"></i> Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT & LOCATION -->
    <section class="section-padding about-section">
        <div class="container about-container">
            <div class="about-text">
                <h2>Ayanah Shopping :<br>Votre partenaire confiance</h2>
                <p>Nous ne sommes pas juste une page Facebook. Nous sommes une boutique établie, dédiée à vous fournir des équipements de qualité supérieure. Venez voir, toucher et tester nos produits dans notre showroom.</p>
                
                <div class="info-block">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Adresse :</strong><br>
                        Enceinte Waterfront, Ambodivona,<br>Antananarivo 101, Madagascar
                    </div>
                </div>
                <div class="info-block">
                    <i class="far fa-clock"></i>
                    <div>
                        <strong>Heures d'ouverture :</strong><br>
                        Lundi - Samedi : 09h00 - 18h00
                    </div>
                </div>
                
                <a href="#" class="btn btn-outline" style="margin-top: 20px;">Itinéraire vers le magasin</a>
            </div>
            
            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.802197576269!2d47.5226!3d-18.9105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0c464e8e19%3A0x6b19a32c258d4624!2sWaterfront%20Ambodivona!5e0!3m2!1sfr!2smg!4v1700000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <!-- Footer Logo Placeholder via JS or Text -->
                    <h3 style="font-family:'Montserrat'; font-weight:700;">AYANAH.</h3>
                    <p>Votre destination numéro 1 pour l'équipement maison et cuisine à Antananarivo. Qualité, Prix et Service.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h4>Collections</h4>
                    <ul>
                        <li><a href="#">Cuisine</a></li>
                        <li><a href="#">Chambre & Salon</a></li>
                        <li><a href="#">Électroménager</a></li>
                        <li><a href="#">Promotions</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Service Client</h4>
                    <ul>
                        <li><a href="#">Mon Compte</a></li>
                        <li><a href="#">Suivre ma commande</a></li>
                        <li><a href="#">Retours & Échanges</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#"><i class="fab fa-whatsapp"></i> 03X XX XXX XX</a></li>
                        <li><a href="#">contact@ayanah.mg</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Ayanah Shopping. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="#" class="float-wa">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        // 1. INTEGRATION LOGO (STRICT)
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener("DOMContentLoaded", () => {
            // Insert Logo
            const logoImg = document.getElementById('brand-logo');
            if(logoImg) logoImg.src = LOGO_URL;

            // 2. STICKY HEADER
            const header = document.getElementById('main-header');
            const topBarHeight = 40; // Approximate
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > topBarHeight) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 3. SMART SEARCH (Mockup)
            const searchInput = document.getElementById('search-input');
            const searchResults = document.getElementById('search-results');
            
            const productsDB = [
                "Rice Cooker", "Mixeur Plongeant", "Batteur électrique", 
                "Rideaux Salon", "Tapis", "Air Fryer", "Set Couteaux", 
                "Lampe Chevet", "Machine à laver", "Fer à repasser"
            ];

            searchInput.addEventListener('input', (e) => {
                const val = e.target.value.toLowerCase();
                searchResults.innerHTML = '';
                
                if (val.length > 1) {
                    const filtered = productsDB.filter(p => p.toLowerCase().includes(val));
                    
                    if (filtered.length > 0) {
                        searchResults.style.display = 'block';
                        filtered.forEach(item => {
                            const div = document.createElement('div');
                            div.className = 'suggestion-item';
                            div.innerHTML = `<i class="fas fa-search"></i> ${item}`;
                            div.onclick = () => {
                                searchInput.value = item;
                                searchResults.style.display = 'none';
                            };
                            searchResults.appendChild(div);
                        });
                    } else {
                        searchResults.style.display = 'none';
                    }
                } else {
                    searchResults.style.display = 'none';
                }
            });

            // Hide suggestions when clicking outside
            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.style.display = 'none';
                }
            });

            // 4. MOBILE MENU
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const navMenu = document.getElementById('nav-menu');

            mobileBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                const icon = mobileBtn.querySelector('i');
                if(navMenu.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>