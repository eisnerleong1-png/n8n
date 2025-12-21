<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Arena Business Center | Déjeuner Premium à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* -------------------------------------------------------------------
           RESET & VARIABLES
        ------------------------------------------------------------------- */
        :root {
            --primary: #601517; /* Bordeaux Élégant */
            --accent: #EA335D;  /* Rose/Rouge Vif - Action */
            --dark: #1a1a1a;
            --light: #f4f4f4;
            --white: #ffffff;
            --text-body: #4a4a4a;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--text-body);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--primary);
            line-height: 1.2;
        }

        img { max-width: 100%; display: block; object-fit: cover; }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }

        /* -------------------------------------------------------------------
           UTILITIES & ANIMATIONS
        ------------------------------------------------------------------- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--white);
            box-shadow: 0 10px 20px rgba(234, 51, 93, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(234, 51, 93, 0.4);
            background-color: #d0264b;
        }

        .btn-text {
            color: var(--primary);
            font-weight: 700;
            border-bottom: 2px solid rgba(96, 21, 23, 0.2);
            padding-bottom: 2px;
        }

        .btn-text:hover {
            border-color: var(--primary);
            color: var(--accent);
        }

        /* Fade In Up Animation Class */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* -------------------------------------------------------------------
           HEADER
        ------------------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
            background: linear-gradient(to bottom, rgba(0,0,0,0.5), transparent);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            backdrop-filter: blur(10px);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        header.scrolled .nav-links a {
            color: var(--dark);
        }
        
        .hamburger { display: none; color: var(--white); font-size: 24px; cursor: pointer; }
        header.scrolled .hamburger { color: var(--dark); }

        /* -------------------------------------------------------------------
           HERO SECTION
        ------------------------------------------------------------------- */
        .hero {
            height: 100vh;
            width: 100%;
            background-image: url('https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=2069&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            display: flex;
            align-items: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--white);
            max-width: 800px;
            padding-top: 80px; /* Éviter le chevauchement avec le header */
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        /* -------------------------------------------------------------------
           SOCIAL PROOF / VALUES
        ------------------------------------------------------------------- */
        .values-banner {
            background-color: var(--primary);
            color: var(--white);
            padding: 40px 0;
            margin-top: -5px; /* Fix any gap */
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }

        .value-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .value-icon {
            font-size: 1.8rem;
            margin-bottom: 5px;
            color: rgba(255,255,255,0.8);
        }

        .value-text {
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        /* -------------------------------------------------------------------
           MENU SECTION
        ------------------------------------------------------------------- */
        .menu-section {
            padding: 100px 0;
            background-color: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-header p {
            color: #888;
            font-style: italic;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .menu-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
        }

        .card-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .card-desc {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 20px;
        }

        .card-price {
            font-weight: 700;
            color: var(--accent);
            font-size: 1.1rem;
            display: block;
            margin-top: auto;
        }

        .menu-cta-container {
            text-align: center;
            margin-top: 60px;
        }

        /* -------------------------------------------------------------------
           GALLERY SECTION
        ------------------------------------------------------------------- */
        .gallery-section {
            padding: 100px 0;
            background-color: var(--light);
        }

        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
            gap: 15px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            position: relative;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* Classes pour le Masonry Layout */
        .g-item-1 { grid-column: span 2; grid-row: span 2; }
        .g-item-2 { grid-column: span 1; grid-row: span 1; }
        .g-item-3 { grid-column: span 1; grid-row: span 1; }
        .g-item-4 { grid-column: span 2; grid-row: span 1; }

        /* -------------------------------------------------------------------
           LOCATION / CONTACT
        ------------------------------------------------------------------- */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
            background-color: var(--primary);
            color: var(--white);
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info h2 {
            color: var(--white);
            margin-bottom: 30px;
        }

        .info-block {
            margin-bottom: 30px;
        }

        .info-block h4 {
            color: var(--accent);
            font-family: var(--font-body);
            text-transform: uppercase;
            font-size: 0.8rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .info-block p {
            font-size: 1.1rem;
            font-weight: 300;
        }

        .contact-map {
            flex: 1;
            min-width: 300px;
            min-height: 400px;
            position: relative;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* -------------------------------------------------------------------
           FOOTER
        ------------------------------------------------------------------- */
        footer {
            background-color: #0b0202;
            color: #888;
            padding: 40px 0;
            text-align: center;
            font-size: 0.85rem;
            padding-bottom: 100px; /* Space for mobile sticky footer */
        }

        /* -------------------------------------------------------------------
           MOBILE STICKY FOOTER CTA
        ------------------------------------------------------------------- */
        .sticky-footer-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none; /* Hidden on desktop by default */
            justify-content: center;
        }

        .sticky-btn {
            width: 100%;
            text-align: center;
            background-color: var(--accent);
            color: white;
            padding: 15px;
            border-radius: 8px;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* -------------------------------------------------------------------
           RESPONSIVE
        ------------------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .g-item-1, .g-item-4 { grid-column: span 2; }
            .masonry-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 768px) {
            header { background: rgba(0,0,0,0.8); padding: 15px 0; }
            .nav-links { display: none; } /* Simplification pour ce livrable */
            .hamburger { display: block; }
            
            .hero h1 { font-size: 2.2rem; }
            .hero-content { padding-top: 60px; }
            
            .values-grid { grid-template-columns: 1fr; gap: 30px; }
            
            .masonry-grid { display: flex; flex-direction: column; gap: 15px; }
            .gallery-item { height: 250px; width: 100%; }
            
            .sticky-footer-cta { display: flex; }
            footer { padding-bottom: 90px; }

            .contact-info { padding: 50px 30px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-wrapper">
            <div class="logo-container">
                <img id="logo-img" alt="Logo Restaurant Arena" />
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">☰</div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content reveal">
            <h1>La Pause Gourmande Incontournable au Cœur de l'Arena.</h1>
            <p>Cuisine maison, plats du jour variés et snacking rapide. Savourez votre déjeuner sans stress à Ivandry.</p>
            <a href="#menu" class="btn btn-primary">VOIR LE MENU DU JOUR</a>
        </div>
    </section>

    <!-- Preuve Sociale -->
    <section class="values-banner">
        <div class="container">
            <div class="values-grid">
                <div class="value-item">
                    <span class="value-icon">⏱</span>
                    <span class="value-text">Service Rapide (Pause déj)</span>
                </div>
                <div class="value-item">
                    <span class="value-icon">🌿</span>
                    <span class="value-text">Produits Frais & Locaux</span>
                </div>
                <div class="value-item">
                    <span class="value-icon">📍</span>
                    <span class="value-text">Accès direct Arena Center</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Qu'allez-vous déguster aujourd'hui ?</h2>
                <p>Des options pour tous les goûts et tous les tempos.</p>
            </div>

            <div class="menu-grid">
                <!-- Carte 1 -->
                <div class="menu-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=2080&auto=format&fit=crop" alt="Plat du Jour">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Le Plat du Jour</h3>
                            <p class="card-desc">Une nouvelle création du chef chaque matin. Équilibré et savoureux.</p>
                        </div>
                        <span class="card-price">À partir de 15 000 Ar</span>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="menu-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=2799&auto=format&fit=crop" alt="Snacking Burger">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Le Coin Snacking</h3>
                            <p class="card-desc">Sandwichs gourmets, Paninis fondants et Salades fraîches pour les pressés.</p>
                        </div>
                        <span class="card-price">À partir de 8 000 Ar</span>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="menu-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=2839&auto=format&fit=crop" alt="Desserts">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Douceurs & Boissons</h3>
                            <p class="card-desc">Pâtisseries maison et jus naturels pour finir sur une note sucrée.</p>
                        </div>
                        <span class="card-price">À partir de 5 000 Ar</span>
                    </div>
                </div>
            </div>

            <div class="menu-cta-container">
                <a href="#" class="btn-text">Découvrir la Carte Complète ></a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Le Plaisir des Yeux</h2>
            </div>
            <div class="masonry-grid">
                <div class="gallery-item g-item-1 reveal">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop" alt="Table garnie">
                </div>
                <div class="gallery-item g-item-2 reveal">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=2853&auto=format&fit=crop" alt="Toast Avocat">
                </div>
                <div class="gallery-item g-item-3 reveal">
                    <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?q=80&w=2874&auto=format&fit=crop" alt="Pancakes">
                </div>
                <div class="gallery-item g-item-4 reveal">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop" alt="Cocktail">
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="contact" class="contact-section">
        <div class="contact-info">
            <h2>Nous trouver facilement</h2>
            
            <div class="info-block">
                <h4>Adresse</h4>
                <p>Arena Business Center, RDC<br>Ivandry, Antananarivo</p>
            </div>
            
            <div class="info-block">
                <h4>Horaires</h4>
                <p>Lun - Ven : 08h00 - 17h00</p>
            </div>
            
            <div class="info-block">
                <h4>Contact</h4>
                <p>+261 34 XX XXX XX</p>
            </div>

            <div style="margin-top: 20px;">
                <a href="tel:+261340000000" class="btn btn-primary" style="background: white; color: var(--accent);">Appeler maintenant</a>
            </div>
        </div>
        
        <div class="contact-map">
             <!-- Placeholder Map centrée sur Arena Business Center Ivandry (approx coords) -->
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.2718428867455!2d47.5255!3d-18.8685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e05da591205%3A0x69680327666245c7!2sArena%20Ivandry!5e0!3m2!1sfr!2smg!4v1700000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Restaurant Arena Business Center. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Mobile Sticky Footer -->
    <div class="sticky-footer-cta">
        <a href="tel:+261340000000" class="sticky-btn">Appeler pour Commander</a>
    </div>

    <script>
        // -------------------------------------------------------------
        // CONFIGURATION LOGO
        // -------------------------------------------------------------
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // -------------------------------------------------------------
        // HEADER SCROLL EFFECT
        // -------------------------------------------------------------
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // -------------------------------------------------------------
        // ANIMATION ON SCROLL (Fade In Up)
        // -------------------------------------------------------------
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Trigger once on load
        reveal();
    </script>
</body>
</html>