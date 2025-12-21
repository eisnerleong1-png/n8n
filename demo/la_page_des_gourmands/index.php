<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pause Gourmande - Arena Business Center</title>
    
    <!-- Polices Premium : Playfair Display (Titres) & Plus Jakarta Sans (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #601517; /* Bordeaux Premium */
            --color-accent: #EA335D; /* Rose/Rouge Vif Action */
            --color-text-dark: #1A1A1A;
            --color-text-light: #F9F9F9;
            --color-bg: #FFFFFF;
            --color-bg-alt: #F8F5F5;
            
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Plus Jakarta Sans', sans-serif;
            
            --shadow-card: 0 15px 40px -10px rgba(96, 21, 23, 0.1);
            --shadow-hover: 0 25px 60px -15px rgba(96, 21, 23, 0.2);
            
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
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
            background-color: var(--color-bg);
            color: var(--color-text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: var(--font-serif);
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* --- UI COMPONENTS --- */
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: white;
            box-shadow: 0 4px 15px rgba(234, 51, 93, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(234, 51, 93, 0.5);
            background-color: #D61F48;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 1.5rem 5%;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 5%;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo-container img {
            height: 50px; /* Taille ajustée pour élégance */
            transition: var(--transition);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            font-weight: 500;
            color: white; /* Initialement blanc sur le hero */
            font-size: 0.95rem;
            position: relative;
            transition: var(--transition);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        header.scrolled .nav-links a {
            color: var(--color-primary);
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://images.unsplash.com/photo-1544025162-d76690b6d029?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26,26,26,0.85) 0%, rgba(96,21,23,0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            margin-bottom: 2.5rem;
            font-weight: 300;
            opacity: 0.9;
        }

        /* --- FEATURES BAND --- */
        .features {
            background-color: var(--color-primary);
            color: white;
            padding: 3rem 5%;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .feature-icon svg {
            width: 32px;
            height: 32px;
            color: var(--color-accent);
        }

        .feature-text {
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* --- MENU SECTION --- */
        .menu-section {
            padding: 6rem 5%;
            background-color: var(--color-bg-alt);
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-image-wrapper {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .card-image-wrapper img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 2rem;
        }

        .card-title {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            color: var(--color-primary);
            margin-bottom: 0.5rem;
        }

        .card-desc {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
        }

        .card-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--color-accent);
        }

        .link-secondary {
            display: block;
            text-align: center;
            margin-top: 3rem;
            color: var(--color-primary);
            font-weight: 600;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        /* --- GALLERY SECTION (MASONRY) --- */
        .gallery-section {
            padding: 6rem 5%;
            background: white;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: 250px;
            gap: 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            position: relative;
            cursor: pointer;
        }

        /* Masonry effect fake with spans */
        @media (min-width: 768px) {
            .gallery-item:nth-child(1) { grid-column: span 2; grid-row: span 2; }
            .gallery-item:nth-child(4) { grid-column: span 2; }
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* --- CONTACT SECTION --- */
        .contact-section {
            display: flex;
            flex-wrap: wrap;
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
            background-color: var(--color-primary);
            color: white;
            padding: 4rem 5%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: white;
        }

        .info-block {
            margin-bottom: 2rem;
        }

        .info-block h4 {
            color: var(--color-accent);
            text-transform: uppercase;
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }

        .info-block p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .contact-map {
            flex: 1;
            min-width: 300px;
            height: 500px;
            background-color: #eee;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #1a0506;
            color: #888;
            text-align: center;
            padding: 2rem;
            font-size: 0.9rem;
            padding-bottom: 5rem; /* Space for mobile sticky button */
        }

        /* --- STICKY MOBILE CTA --- */
        .sticky-mobile-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            padding: 1rem;
            background: linear-gradient(to top, rgba(255,255,255,1) 80%, rgba(255,255,255,0));
            display: none; /* Hidden by default */
        }

        .sticky-mobile-cta a {
            display: block;
            width: 100%;
            text-align: center;
            background-color: var(--color-accent);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(234, 51, 93, 0.4);
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hamburger {
                display: block;
                color: white;
                font-size: 1.5rem;
            }
            header.scrolled .hamburger {
                color: var(--color-primary);
            }
            .sticky-mobile-cta {
                display: block;
            }
            .contact-map {
                height: 300px;
            }
            .hero h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="navbar">
        <nav>
            <div class="logo-container" id="logo-placeholder">
                <!-- LOGO INJECTÉ PAR JS -->
                <!-- INSTRUCTION CLIENT : REMPLACEZ L'URL DANS LE JS POUR VOTRE LOGO FINAL -->
            </div>
            <div class="nav-links">
                <a href="#hero">Accueil</a>
                <a href="#menu">Menu</a>
                <a href="#gallery">Galerie</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="hamburger">☰</div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>La Pause Gourmande Incontournable au Cœur de l'Arena</h1>
            <p>Cuisine maison, plats du jour variés et snacking rapide. Savourez votre déjeuner sans stress, à deux pas de votre bureau.</p>
            <a href="#menu" class="btn btn-primary">VOIR LE MENU DU JOUR</a>
        </div>
    </section>

    <!-- Features / Social Proof -->
    <section class="features">
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="feature-text">Service Rapide (Pause déj)</div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="feature-text">Produits Frais & Locaux</div>
            </div>
            <div class="feature-item">
                <div class="feature-icon">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="feature-text">Accès direct Arena</div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <div class="section-title reveal">
            <h2>Qu'allez-vous déguster aujourd'hui ?</h2>
            <p>Une sélection gourmande pour toutes les faims et tous les budgets.</p>
        </div>

        <div class="cards-container">
            <!-- Carte 1 -->
            <div class="menu-card reveal">
                <div class="card-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=1000&auto=format&fit=crop" alt="Plat du jour équilibré">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Le Plat du Jour</h3>
                    <p class="card-desc">Une nouvelle saveur mijotée chaque matin par notre chef. Équilibré et généreux.</p>
                    <span class="card-price">À partir de 15 000 Ar</span>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="menu-card reveal">
                <div class="card-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1528735602780-2552fd46c7af?q=80&w=1000&auto=format&fit=crop" alt="Sandwich gourmand">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Le Coin Snacking</h3>
                    <p class="card-desc">Sandwichs gourmets, Paninis croustillants et Salades fraîches pour les plus pressés.</p>
                    <span class="card-price">À partir de 8 000 Ar</span>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="menu-card reveal">
                <div class="card-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?q=80&w=1000&auto=format&fit=crop" alt="Dessert pâtisserie">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Douceurs & Boissons</h3>
                    <p class="card-desc">Finissez sur une note sucrée avec nos pâtisseries maison et jus de fruits naturels.</p>
                    <span class="card-price">À partir de 5 000 Ar</span>
                </div>
            </div>
        </div>

        <a href="#" class="link-secondary">Découvrir la Carte Complète ></a>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="section-title reveal">
            <h2>Le Plaisir des Yeux</h2>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item reveal"><img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop" alt="Plat signature"></div>
            <div class="gallery-item reveal"><img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=800&auto=format&fit=crop" alt="Ambiance restaurant"></div>
            <div class="gallery-item reveal"><img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=800&auto=format&fit=crop" alt="Pizza détails"></div>
            <div class="gallery-item reveal"><img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=800&auto=format&fit=crop" alt="Table garnie"></div>
            <div class="gallery-item reveal"><img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?q=80&w=800&auto=format&fit=crop" alt="Boissons fraiches"></div>
        </div>
    </section>

    <!-- Contact & Map -->
    <section id="contact" class="contact-section">
        <div class="contact-info">
            <h2>Nous trouver facilement</h2>
            
            <div class="info-block">
                <h4>ADRESSE</h4>
                <p>Arena Business Center</p>
                <p>Ivandry, Antananarivo</p>
                <p style="font-size:0.9rem; opacity:0.7; margin-top:5px;">(Rez-de-chaussée, accès parking)</p>
            </div>

            <div class="info-block">
                <h4>HORAIRES</h4>
                <p>Lun - Ven : 08h00 - 17h00</p>
                <p>Service déjeuner : 11h30 - 14h30</p>
            </div>

            <div class="info-block">
                <h4>CONTACT</h4>
                <p>+261 34 XX XXX XX</p>
            </div>
        </div>
        <div class="contact-map">
            <!-- Placeholder Google Map centrée sur Ivandry -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.273030248866!2d47.530!3d-18.870!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDUyJzEyLjAiUyA0N8KwMzEnNDguMCJF!5e0!3m2!1sfr!2smg!4v1600000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Restaurant Arena Center. Design Premium.</p>
    </footer>

    <!-- Mobile Sticky CTA -->
    <div class="sticky-mobile-cta">
        <a href="tel:+261340000000">APPELER POUR COMMANDER</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. GESTION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // INSTRUCTION : Collez l'URL de votre logo ici entre les guillemets
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-placeholder');
        logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Logo Restaurant"></a>`;

        // --- 2. GESTION DU HEADER (Glassmorphism) ---
        const header = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. ANIMATIONS AU SCROLL (Intersection Observer) ---
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Jouer une seule fois
                }
            });
        }, {
            root: null,
            threshold: 0.15, // Déclenche quand 15% de l'élément est visible
            rootMargin: "0px 0px -50px 0px"
        });

        revealElements.forEach(el => revealObserver.observe(el));
    </script>
</body>
</html>