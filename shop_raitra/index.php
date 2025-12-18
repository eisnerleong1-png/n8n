<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Raitra | Beauté & Cosmétiques Tana</title>
    <!-- Polices Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --color-bg: #000000;
            --color-surface: #0f0f0f;
            --color-surface-hover: #1a1a1a;
            --color-primary: #412225; /* Bordeaux Sombre demandé */
            --color-primary-light: #5e3236;
            --color-text: #FFFFFF;
            --color-text-muted: #a0a0a0;
            --color-border: #333333;
            
            --font-display: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            
            --spacing-container: 1280px;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            background-color: var(--color-bg);
            color: var(--color-text);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- TYPOGRAPHY --- */
        h1, h2, h3, h4 { font-family: var(--font-display); font-weight: 400; }
        
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .section-subtitle {
            text-align: center;
            color: var(--color-text-muted);
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }

        /* --- BUTTONS --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: #FFFFFF;
            color: var(--color-primary);
        }
        .btn-primary:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255,255,255,0.1);
        }

        .btn-secondary {
            background-color: transparent;
            border: 1px solid rgba(255,255,255,0.3);
            color: #fff;
        }
        .btn-secondary:hover {
            border-color: #fff;
            background-color: #fff;
            color: #000;
        }

        .btn-text {
            color: var(--color-text-muted);
            font-size: 0.9rem;
            border-bottom: 1px solid transparent;
        }
        .btn-text:hover {
            color: #fff;
            border-bottom: 1px solid #fff;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Taille ajustée pour le logo */
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            opacity: 0.8;
            text-transform: uppercase;
        }
        .nav-links a:hover { opacity: 1; color: #dcb386; }

        .nav-icons { display: flex; gap: 20px; align-items: center; }

        /* Mobile Menu */
        .hamburger { display: none; cursor: pointer; font-size: 1.5rem; }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('https://images.unsplash.com/photo-1607954932087-0b13d2626e3c?q=80&w=2000&auto=format&fit=crop') no-repeat center center/cover;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8));
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .social-proof {
            margin-top: 1.5rem;
            font-size: 0.85rem;
            opacity: 0.7;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        .social-proof span { color: #dcb386; }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--color-primary);
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        .trust-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            text-align: center;
        }
        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .trust-item svg { width: 20px; height: 20px; opacity: 0.8; }

        /* --- CATEGORIES --- */
        .categories { padding: 100px 0; }
        
        .cat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            height: 600px;
        }

        .cat-card {
            position: relative;
            height: 100%;
            overflow: hidden;
            border-radius: 2px;
            cursor: pointer;
            group: 1;
        }

        .cat-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .cat-card:hover img { transform: scale(1.1); }

        .cat-overlay {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            padding: 40px;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .cat-title {
            font-family: var(--font-display);
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .cat-link {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 1px solid #fff;
            padding-bottom: 4px;
        }

        /* --- PRODUCTS (BEST SELLERS) --- */
        .products { 
            padding: 100px 0; 
            background: var(--color-surface);
        }

        .product-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .product-card {
            background: transparent;
            transition: var(--transition);
        }

        .product-image {
            position: relative;
            background: #1e1e1e;
            aspect-ratio: 3/4;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .product-image img {
            width: 100%; height: 100%;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.05);
            opacity: 0.8;
        }

        .add-to-cart {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            background: var(--color-primary);
            color: #fff;
            padding: 15px;
            text-align: center;
            text-transform: uppercase;
            font-size: 0.8rem;
            font-weight: 600;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .product-card:hover .add-to-cart {
            transform: translateY(0);
        }

        .badge {
            position: absolute;
            top: 10px; left: 10px;
            background: var(--color-primary);
            color: #fff;
            padding: 4px 10px;
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: 600;
        }

        .product-info h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .price { font-weight: 600; font-size: 1rem; color: #dcb386; }
        .price .old { text-decoration: line-through; color: var(--color-text-muted); font-size: 0.9rem; margin-right: 8px; }

        /* --- ABOUT --- */
        .about {
            padding: 120px 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .about-img {
            position: relative;
        }
        .about-img img { width: 100%; border-radius: 2px; }
        .about-img::before {
            content: ''; position: absolute; top: -20px; left: -20px; 
            width: 100%; height: 100%; border: 1px solid var(--color-primary);
            z-index: -1;
        }

        /* --- MAP & CONTACT --- */
        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
        }

        .contact-info {
            padding: 80px 40px;
            background: #0a0a0a;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .contact-map {
            position: relative;
            background: #1a1a1a;
            overflow: hidden;
        }

        /* Style Map Fake (Dark Mode) */
        .map-placeholder {
            width: 100%; height: 100%;
            background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            filter: grayscale(100%) contrast(1.2) brightness(0.4);
        }
        .map-pin {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 40px; height: 40px;
            background: var(--color-primary);
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 0 20px rgba(65, 34, 37, 0.8);
            animation: pulse 2s infinite;
        }

        .form-group { width: 100%; margin-bottom: 20px; }
        .form-input {
            width: 100%;
            padding: 15px;
            background: transparent;
            border: 1px solid var(--color-border);
            color: #fff;
            outline: none;
            transition: border-color 0.3s;
        }
        .form-input:focus { border-color: var(--color-primary); }

        /* --- FOOTER --- */
        footer {
            padding: 60px 0 20px;
            background: #000;
            border-top: 1px solid rgba(255,255,255,0.05);
            text-align: center;
            font-size: 0.9rem;
            color: var(--color-text-muted);
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        .footer-links a:hover { color: #fff; }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .cat-grid { grid-template-columns: 1fr; height: auto; }
            .cat-card { height: 300px; }
            .about { grid-template-columns: 1fr; padding: 60px 24px; }
            .contact-section { grid-template-columns: 1fr; }
            .contact-map { height: 300px; }
            
            .nav-links, .nav-icons { display: none; }
            .hamburger { display: block; }
            .hero h1 { font-size: 2.5rem; }
            .trust-grid { gap: 10px; }
            .trust-item { font-size: 0.75rem; width: 45%; justify-content: center; }
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(65, 34, 37, 0.7); }
            70% { box-shadow: 0 0 0 20px rgba(65, 34, 37, 0); }
            100% { box-shadow: 0 0 0 0 rgba(65, 34, 37, 0); }
        }

    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container">
            <nav>
                <!-- LOGO CONTAINER -->
                <a href="#" class="logo" id="logo-container">
                    <!-- JS will insert logo here -->
                </a>

                <div class="nav-links">
                    <a href="#categories">Visage</a>
                    <a href="#categories">Corps</a>
                    <a href="#categories">Cheveux</a>
                    <a href="#products" style="color: #dcb386;">Promotions</a>
                </div>

                <div class="nav-icons">
                    <a href="#" aria-label="Recherche"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"></circle><path d="M21 21l-4.35-4.35"></path></svg></a>
                    <a href="#" aria-label="Panier"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 01-8 0"></path></svg></a>
                </div>

                <div class="hamburger">☰</div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Révélez votre Éclat avec l'Expertise Cosmétique à Antananarivo.</h1>
            <h2>Accédez enfin à tout notre catalogue en un clic. Soins du visage, corps et cheveux de qualité "Raitra".</h2>
            <a href="#products" class="btn btn-primary">Découvrir le Catalogue</a>
            
            <div class="social-proof">
                <span>★★★★★</span> Déjà plus de 500 clients satisfaits à Tana
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <span>Authenticité Garantie</span>
                </div>
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                    <span>Livraison Rapide sur Tana</span>
                </div>
                <div class="trust-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                    <span>Service Client Réactif</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="categories" id="categories">
        <div class="container">
            <h2 class="section-title">Que recherchez-vous aujourd'hui ?</h2>
            <p class="section-subtitle">Une sélection pointue pour chaque besoin.</p>
            
            <div class="cat-grid">
                <!-- VISAGE -->
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1570194065650-d99fb4b8ccb0?q=80&w=800&auto=format&fit=crop" alt="Soins Visage">
                    <div class="cat-overlay">
                        <span class="cat-title">Visage</span>
                        <span class="cat-link">Découvrir les soins</span>
                    </div>
                </div>
                <!-- CORPS -->
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfbc8?q=80&w=800&auto=format&fit=crop" alt="Soins Corps">
                    <div class="cat-overlay">
                        <span class="cat-title">Corps</span>
                        <span class="cat-link">Laits & Gommages</span>
                    </div>
                </div>
                <!-- CHEVEUX -->
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1522337660859-02fbefca4702?q=80&w=800&auto=format&fit=crop" alt="Soins Cheveux">
                    <div class="cat-overlay">
                        <span class="cat-title">Cheveux</span>
                        <span class="cat-link">Traitements Experts</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS / PROMOS -->
    <section class="products" id="products">
        <div class="container">
            <h2 class="section-title">Les Coups de Cœur</h2>
            <p class="section-subtitle">Nos best-sellers et promotions exclusives du moment.</p>

            <div class="product-slider">
                <!-- Produit 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=800&auto=format&fit=crop" alt="Serum Éclat">
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                    <div class="product-info">
                        <h3>Sérum Éclat Nuit</h3>
                        <p class="price">45 000 Ar</p>
                    </div>
                </div>

                <!-- Produit 2 (Promo) -->
                <div class="product-card">
                    <div class="product-image">
                        <span class="badge">PROMO</span>
                        <img src="https://images.unsplash.com/photo-1629198688000-71f23e745b6e?q=80&w=800&auto=format&fit=crop" alt="Crème Hydratante">
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                    <div class="product-info">
                        <h3>Crème Riche Karité</h3>
                        <p class="price"><span class="old">60 000 Ar</span> 50 000 Ar</p>
                    </div>
                </div>

                <!-- Produit 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?q=80&w=800&auto=format&fit=crop" alt="Huile Capillaire">
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                    <div class="product-info">
                        <h3>Huile Capillaire Précieuse</h3>
                        <p class="price">35 000 Ar</p>
                    </div>
                </div>
                
                 <!-- Produit 4 -->
                <div class="product-card">
                    <div class="product-image">
                         <span class="badge">NOUVEAU</span>
                        <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfbc8?q=80&w=800&auto=format&fit=crop" alt="Gommage Corps">
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                    <div class="product-info">
                        <h3>Gommage Café & Miel</h3>
                        <p class="price">25 000 Ar</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 60px;">
                <a href="#" class="btn btn-secondary" style="color: #000; border-color: #333;">Voir toutes les promotions</a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about container">
        <div class="about-content">
            <h2 class="section-title" style="text-align: left;">L'Esprit Shop Raitra</h2>
            <div style="width: 60px; height: 2px; background: var(--color-primary); margin-bottom: 30px;"></div>
            <p style="font-size: 1.1rem; color: #ccc; margin-bottom: 20px;">
                Nous croyons que chaque personne mérite des soins de qualité sans compromis. Fini le chaos des commandes par message incertaines.
            </p>
            <p style="margin-bottom: 30px; color: #888;">
                Nous vous offrons une boutique digitale à la hauteur de votre beauté : produits authentiques, prix transparents et service "Raitra" au cœur de Tana.
            </p>
            <a href="#contact" class="btn-text">En savoir plus sur nous &rarr;</a>
        </div>
        <div class="about-img">
            <img src="https://images.unsplash.com/photo-1596704017254-9b1b1848fb14?q=80&w=1000&auto=format&fit=crop" alt="Boutique Interior">
        </div>
    </section>

    <!-- MAP & CONTACT -->
    <section class="contact-section" id="contact">
        <div class="contact-info">
            <h2 class="section-title" style="text-align: left;">Nous trouver</h2>
            <p style="margin-bottom: 30px; color: #aaa;">Une question sur un produit ou une commande ?</p>
            
            <div style="margin-bottom: 40px; width: 100%;">
                <h4 style="color: #fff; margin-bottom: 10px;">Boutique Tana</h4>
                <p style="color: #888;">Analakely, Avenue de l'Indépendance<br>Antananarivo 101, Madagascar</p>
                <p style="color: #dcb386; margin-top: 10px;">+261 34 00 000 00</p>
            </div>

            <form style="width: 100%;">
                <div class="form-group"><input type="text" class="form-input" placeholder="Votre Nom"></div>
                <div class="form-group"><input type="email" class="form-input" placeholder="Votre Email"></div>
                <div class="form-group"><button class="btn btn-primary" style="width: 100%;">Envoyer le message</button></div>
            </form>
        </div>
        
        <div class="contact-map">
            <div class="map-placeholder"></div>
            <div class="map-pin"></div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Mentions Légales</a>
                <a href="#">Livraison & Retours</a>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
            </div>
            <p>&copy; 2024 Shop Raitra. Excellence Cosmétique à Madagascar.</p>
        </div>
    </footer>

    <!-- SCRIPT -->
    <script>
        // --- 1. CONFIGURATION LOGO (OBLIGATOIRE) ---
        // INSTRUCTION: Remplacer l'URL ci-dessous par le lien de votre logo final.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Insertion du Logo
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            // Note: Comme le placeholder demandé contient "PHO RESTO", j'ajoute un style spécifique
            // pour que cela s'intègre visuellement, mais le client doit changer l'URL.
            const img = document.createElement('img');
            img.src = LOGO_URL;
            img.alt = "Shop Raitra Logo";
            logoContainer.appendChild(img);
        }

        // --- 2. HEADER STICKY ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.padding = '10px 0';
                header.style.background = 'rgba(0,0,0,0.9)';
            } else {
                header.style.padding = '20px 0';
                header.style.background = 'rgba(0,0,0,0.5)';
            }
        });

        // --- 3. SCROLL REVEAL ANIMATIONS ---
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

        document.querySelectorAll('.cat-card, .product-card, .section-title').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });

    </script>
</body>
</html>