<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madababa - Vente en ligne Madagascar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icones Phosphor -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --primary: #1395BA; /* Teal/Blue - Confiance */
            --primary-dark: #0e7a99;
            --accent: #C23E27; /* Terracotta - Conversion */
            --accent-hover: #a3321f;
            --dark: #0f172a;
            --text: #334155;
            --light: #f8fafc;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.95);
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05);
            --radius-md: 12px;
            --radius-lg: 16px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }
        button { cursor: pointer; border: none; font-family: inherit; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .text-primary { color: var(--primary); }
        .text-accent { color: var(--accent); }
        .bg-primary { background-color: var(--primary); }
        .bg-light { background-color: #F5F7F9; }

        /* --- HEADER & NAVIGATION --- */
        .top-bar {
            background-color: var(--primary);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.875rem;
            text-align: center;
        }

        header {
            background-color: var(--white);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            gap: 2rem;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        /* Search Bar - CRITIQUE */
        .search-container {
            flex: 1;
            max-width: 600px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 0.85rem 1rem 0.85rem 3rem;
            border: 2px solid #e2e8f0;
            border-radius: 50px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            outline: none;
        }

        .search-input:focus {
            border-color: var(--primary);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.2rem;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-item {
            font-weight: 600;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nav-item:hover { color: var(--primary); }

        .btn-cart {
            position: relative;
            font-size: 1.5rem;
            color: var(--dark);
        }

        .badge-count {
            position: absolute;
            top: -5px;
            right: -8px;
            background: var(--accent);
            color: white;
            font-size: 0.7rem;
            font-weight: bold;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* --- HERO SECTION --- */
        .hero {
            background-color: var(--primary);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        /* Texture subtile pour le premium */
        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(circle at top right, rgba(255,255,255,0.1), transparent 60%);
            pointer-events: none;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 90%;
        }

        .btn-main {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background-color: var(--accent);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(194, 62, 39, 0.4);
        }

        .btn-main:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(194, 62, 39, 0.5);
        }

        .hero-visual {
            position: relative;
        }

        .hero-image-wrapper {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-lg);
            padding: 1rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            transform: rotate(-2deg);
        }

        .hero-image-wrapper img {
            border-radius: var(--radius-md);
            width: 100%;
            height: auto;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: #F8FAFC;
            padding: 1.5rem 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 1.5rem;
            text-align: center;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #64748b;
            font-size: 0.9rem;
        }

        .trust-item i { font-size: 1.2rem; color: var(--primary); }

        /* --- TOP OFFRES --- */
        .top-offers { padding: 4rem 0; }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            border: 1px solid #f1f5f9;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .badge-status {
            position: absolute;
            top: 10px;
            left: 10px;
            background: var(--accent);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 2;
        }

        .card-img {
            height: 220px;
            overflow: hidden;
            background: #f8fafc;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .card-img img { transform: scale(1.05); }

        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .price-wrapper {
            margin-top: auto;
            display: flex;
            align-items: baseline;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .old-price {
            text-decoration: line-through;
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .new-price {
            color: var(--accent);
            font-weight: 800;
            font-size: 1.25rem;
        }

        .btn-card {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            background: transparent;
            border-radius: 8px;
            color: var(--dark);
            font-weight: 600;
            transition: all 0.2s;
        }

        .btn-card:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: #f0f9ff;
        }

        /* --- CATEGORIES --- */
        .categories-section {
            padding: 4rem 0;
            background-color: #FAFAFA;
        }

        .cat-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
        }

        .cat-card {
            background: white;
            border-radius: var(--radius-md);
            padding: 2rem 1rem;
            text-align: center;
            border: 1px solid transparent;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .cat-card:hover {
            border-color: var(--primary);
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }

        .cat-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .cat-name {
            font-weight: 700;
            color: var(--dark);
        }

        /* --- SERVICE INTERMEDIAIRE --- */
        .concierge-section {
            padding: 5rem 0;
        }

        .concierge-wrapper {
            background: linear-gradient(135deg, #F8FAFC 0%, #E6FFFA 100%);
            border-radius: 24px;
            padding: 3rem;
            display: flex;
            align-items: center;
            gap: 3rem;
            border: 1px solid #e2e8f0;
        }

        .concierge-text { flex: 1; }
        .concierge-img { flex: 1; }
        
        .concierge-img img {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 2rem;
            border: 2px solid var(--primary);
            color: var(--primary);
            border-radius: 50px;
            font-weight: 700;
            background: transparent;
            transition: all 0.3s;
        }

        .btn-ghost:hover {
            background: var(--primary);
            color: white;
        }

        /* --- FAQ --- */
        .faq-section { padding: 4rem 0; max-width: 800px; margin: 0 auto; }
        
        .accordion-item {
            border-bottom: 1px solid #e2e8f0;
        }

        .accordion-header {
            width: 100%;
            padding: 1.5rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
            text-align: left;
            background: none;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: #64748b;
        }

        .accordion-content p { padding-bottom: 1.5rem; }
        
        .accordion-header.active .ph-caret-down { transform: rotate(180deg); }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .footer-links li { margin-bottom: 0.75rem; }
        .footer-links a { opacity: 0.8; }
        .footer-links a:hover { opacity: 1; text-decoration: underline; }

        .social-icons { display: flex; gap: 1rem; margin-top: 1rem; }
        .social-icons a { 
            font-size: 1.5rem; 
            background: rgba(255,255,255,0.1); 
            padding: 0.5rem; 
            border-radius: 50%;
            display: flex;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* --- FLOATING WHATSAPP --- */
        .whatsapp-float {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
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
            z-index: 9999;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover { transform: scale(1.1); }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero-grid { grid-template-columns: 1fr; text-align: center; gap: 3rem; }
            .hero-content h1 { font-size: 2.5rem; }
            .hero-content p { margin: 0 auto 2rem; }
            .hero-image-wrapper { max-width: 500px; margin: 0 auto; transform: rotate(0); }
            
            .concierge-wrapper { flex-direction: column-reverse; text-align: center; padding: 2rem; }
            .nav-actions span { display: none; } /* Hide labels on tablet */
        }

        @media (max-width: 768px) {
            .header-inner { flex-wrap: wrap; gap: 1rem; }
            .logo-container { order: 1; }
            .nav-actions { order: 2; gap: 1rem; }
            
            /* Sticky Search Logic for Mobile */
            .search-container { 
                order: 3; 
                width: 100%; 
                max-width: 100%;
                margin-top: 0.5rem;
            }

            /* On scroll sticky adjustment for mobile could be done via JS, 
               but CSS sticky top works if parent is configured */
            header { padding-bottom: 1rem; }
            
            .trust-grid { gap: 1rem; justify-content: start; overflow-x: auto; flex-wrap: nowrap; padding-bottom: 0.5rem; }
            .trust-item { white-space: nowrap; flex: 0 0 auto; }
            
            /* Horizontal Scroll for Cards on Mobile */
            .cards-grid {
                display: flex;
                overflow-x: auto;
                padding-bottom: 2rem;
                scroll-snap-type: x mandatory;
            }
            .product-card {
                min-width: 260px;
                scroll-snap-align: start;
            }
            
            .hero-content h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <!-- Top Bar -->
    <div class="top-bar">
        Livraison gratuite partout à Tana dès 100.000 Ar 🚚
    </div>

    <!-- Header -->
    <header id="main-header">
        <div class="container header-inner">
            <!-- Logo -->
            <a href="#" class="logo-container" id="logo-placeholder">
                <!-- LOGO INJECTED VIA JS -->
            </a>

            <!-- Search Bar (Sticky Priority on Mobile) -->
            <div class="search-container">
                <i class="ph ph-magnifying-glass search-icon"></i>
                <input type="text" class="search-input" placeholder="Inona no tadiavinao? (Ex: Sneakers, Samsung...)">
            </div>

            <!-- Nav Actions -->
            <div class="nav-actions">
                <a href="#" class="nav-item">
                    <i class="ph ph-user" style="font-size: 1.5rem;"></i>
                    <span>Compte</span>
                </a>
                <a href="#" class="nav-item btn-cart">
                    <i class="ph ph-shopping-cart"></i>
                    <span class="badge-count">2</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <h1>Ne perdez plus votre temps à scroller.</h1>
                <p>La première plateforme qui centralise vos achats à Madagascar. Prix transparents, vendeurs vérifiés, livraison rapide.</p>
                <button class="btn-main">
                    Voir les Promotions (Mora sy Tsara)
                    <i class="ph ph-arrow-right"></i>
                </button>
            </div>
            <div class="hero-visual">
                <div class="hero-image-wrapper">
                    <!-- Premium Shopping Image -->
                    <img src="https://images.unsplash.com/photo-1607082349566-187342175e2f?q=80&w=2070&auto=format&fit=crop" alt="Shopping en ligne Madagascar">
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-grid">
            <div class="trust-item"><i class="ph ph-package"></i> +1000 Produits</div>
            <div class="trust-item"><i class="ph ph-shield-check"></i> Vendeurs Vérifiés</div>
            <div class="trust-item"><i class="ph ph-truck"></i> Livraison Tana 24h</div>
            <div class="trust-item"><i class="ph ph-headset"></i> Service Client Malagasy 🇲🇬</div>
        </div>
    </div>

    <!-- Top Offers -->
    <section class="top-offers container">
        <div class="section-title">Les pépites du moment 🔥</div>
        <div class="cards-grid">
            
            <!-- Card 1 -->
            <article class="product-card">
                <div class="badge-status">Vite épuisé</div>
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=1000&auto=format&fit=crop" alt="Casque Audio">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Casque Sony XM4 Noise Cancelling</h3>
                    <div class="price-wrapper">
                        <span class="old-price">1 200 000 Ar</span>
                        <span class="new-price">950 000 Ar</span>
                    </div>
                    <button class="btn-card">Voir détails</button>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="product-card">
                <div class="badge-status" style="background:var(--primary)">Nouveau</div>
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1000&auto=format&fit=crop" alt="Sneakers">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Nike Air Max Red Edition</h3>
                    <div class="price-wrapper">
                        <span class="old-price">250 000 Ar</span>
                        <span class="new-price">180 000 Ar</span>
                    </div>
                    <button class="btn-card">Voir détails</button>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="product-card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?q=80&w=1000&auto=format&fit=crop" alt="Polaroid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Appareil Photo Polaroid</h3>
                    <div class="price-wrapper">
                        <span class="old-price">600 000 Ar</span>
                        <span class="new-price">450 000 Ar</span>
                    </div>
                    <button class="btn-card">Voir détails</button>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="product-card">
                <div class="badge-status">Promo Flash</div>
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1593642702821-c8da6771f0c6?q=80&w=1000&auto=format&fit=crop" alt="Dell XPS">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Dell XPS 13 (2024)</h3>
                    <div class="price-wrapper">
                        <span class="old-price">4 500 000 Ar</span>
                        <span class="new-price">3 900 000 Ar</span>
                    </div>
                    <button class="btn-card">Voir détails</button>
                </div>
            </article>

        </div>
    </section>

    <!-- Categories -->
    <section class="categories-section">
        <div class="container">
            <h2 class="section-title">Que cherchez-vous aujourd'hui ?</h2>
            <div class="cat-grid">
                <div class="cat-card">
                    <i class="ph ph-laptop cat-icon"></i>
                    <div class="cat-name">High-Tech</div>
                </div>
                <div class="cat-card">
                    <i class="ph ph-t-shirt cat-icon"></i>
                    <div class="cat-name">Mode</div>
                </div>
                <div class="cat-card">
                    <i class="ph ph-house-line cat-icon"></i>
                    <div class="cat-name">Maison</div>
                </div>
                <div class="cat-card">
                    <i class="ph ph-heart-beat cat-icon"></i>
                    <div class="cat-name">Beauté</div>
                </div>
                <div class="cat-card">
                    <i class="ph ph-car cat-icon"></i>
                    <div class="cat-name">Auto-Moto</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Conciergerie -->
    <section class="concierge-section container">
        <div class="concierge-wrapper">
            <div class="concierge-text">
                <h2 class="section-title">Vous ne trouvez pas ?</h2>
                <p style="font-size: 1.1rem; color: #475569; margin-bottom: 2rem;">
                    Pas de panique. Dites-nous exactement ce que vous cherchez, et l'équipe Madababa le trouve pour vous au meilleur prix à Tana.
                </p>
                <button class="btn-ghost">
                    Faire une demande spécifique
                    <i class="ph ph-paper-plane-right"></i>
                </button>
            </div>
            <div class="concierge-img">
                <img src="https://images.unsplash.com/photo-1556740758-90de2929450a?q=80&w=1000&auto=format&fit=crop" alt="Service Client">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq-section">
        <h2 class="section-title" style="text-align: center; display: block;">Questions Fréquentes</h2>
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header">
                    Comment se passe la livraison ?
                    <i class="ph ph-caret-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Nous livrons partout à Antananarivo sous 24h. Pour les commandes passées avant 10h, la livraison est possible l'après-midi même. Tarif unique : 5000 Ar (Gratuit > 100k Ar).</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    Quels sont les moyens de paiement ?
                    <i class="ph ph-caret-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Nous acceptons Mvola, Orange Money et le paiement en espèces à la livraison pour votre sécurité totale.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    Les produits sont-ils garantis ?
                    <i class="ph ph-caret-down"></i>
                </button>
                <div class="accordion-content">
                    <p>Oui, tous nos produits High-Tech bénéficient d'une garantie minimale de 6 mois. Les vêtements peuvent être essayés à la livraison.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Madababa</h3>
                    <p style="opacity: 0.8;">La marketplace de confiance pour les Malagasy. Qualité, Rapidité, Simplicité.</p>
                    <div class="social-icons">
                        <a href="#"><i class="ph ph-facebook-logo"></i></a>
                        <a href="#"><i class="ph ph-instagram-logo"></i></a>
                        <a href="#"><i class="ph ph-tiktok-logo"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Navigation</h3>
                    <ul class="footer-links">
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Nouveautés</a></li>
                        <li><a href="#">Vendre sur Madababa</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><a href="#">+261 34 00 000 00</a></li>
                        <li><a href="#">service@madababa.mg</a></li>
                        <li><a href="#">Analakely, Antananarivo</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                Madababa Online Store © 2024. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="#" class="whatsapp-float">
        <i class="ph ph-whatsapp-logo"></i>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. LOGO INTEGRATION (MANDATORY) ---
        // ATTENTION: Remplacez le lien ci-dessous par votre logo final !
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        
        // Inject Logo
        const logoContainer = document.getElementById('logo-placeholder');
        if(logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Madababa Logo">`;
        }

        // --- 2. FAQ ACCORDION ---
        const accordions = document.querySelectorAll('.accordion-header');
        accordions.forEach(acc => {
            acc.addEventListener('click', function() {
                this.classList.toggle('active');
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // --- 3. STICKY HEADER SHADOW ON SCROLL ---
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.style.boxShadow = "0 4px 6px -1px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "none";
            }
        });

        // --- 4. FOMO SIMULATION (OPTIONAL) ---
        // Randomly decreases stock number visually if we had a stock counter, 
        // or just logs for now to show logic is active.
        console.log("Madababa Store Ready - Premium Mode Activated");
    </script>
</body>
</html>