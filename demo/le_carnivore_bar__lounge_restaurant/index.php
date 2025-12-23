<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LE Carnivore | Churrascaria & Lounge Antananarivo</title>
    
    <!-- Google Fonts: Oswald (Headings) & Montserrat (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Oswald:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES 
         */
        :root {
            --primary-red: #CC2131;
            --primary-dark: #a11a26;
            --secondary-gold: #E5B652;
            --bg-dark: #0f0f0f;
            --bg-darker: #050505;
            --text-white: #FFFFFF;
            --text-gray: #d1d1d1;
            --font-heading: 'Oswald', sans-serif;
            --font-body: 'Montserrat', sans-serif;
            --transition: all 0.3s ease;
        }

        /* RESET */
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
            background-color: var(--bg-dark);
            color: var(--text-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* TYPOGRAPHY */
        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1.2;
        }

        h1 { font-size: 3.5rem; letter-spacing: 1px; }
        h2 { font-size: 2.5rem; color: var(--secondary-gold); margin-bottom: 1rem; }
        h3 { font-size: 1.5rem; color: var(--text-white); }
        
        p { font-size: 1rem; color: var(--text-gray); font-weight: 300; }

        .text-gold { color: var(--secondary-gold); }
        .text-red { color: var(--primary-red); }

        /* UTILITIES */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-padding { padding: 80px 0; }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 14px 35px;
            font-family: var(--font-heading);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-red);
            color: white;
            box-shadow: 0 4px 15px rgba(204, 33, 49, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(204, 33, 49, 0.6);
        }

        .btn-secondary {
            border: 2px solid var(--secondary-gold);
            color: var(--secondary-gold);
            background: transparent;
        }

        .btn-secondary:hover {
            background: var(--secondary-gold);
            color: var(--bg-dark);
        }

        /* 
         * 1. HEADER 
         */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.9), rgba(0,0,0,0));
        }

        header.scrolled {
            background: rgba(5, 5, 5, 0.95);
            padding: 15px 0;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.5);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Taille ajustée pour le logo */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            font-family: var(--font-heading);
            font-size: 0.9rem;
            letter-spacing: 1px;
            color: var(--text-white);
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover {
            color: var(--secondary-gold);
        }

        .nav-cta {
            background-color: var(--primary-red);
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .hamburger {
            display: none;
            font-size: 1.5rem;
            color: white;
            cursor: pointer;
        }

        /* 
         * 2. HERO SECTION 
         */
        .hero {
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            margin-top: 0; /* Override any defaults */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Image de fond "Video like" avec effet zoom */
            background-image: url('https://images.unsplash.com/photo-1544025162-d76690b60943?q=80&w=2574&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            z-index: -1;
            animation: zoomEffect 20s infinite alternate;
        }

        @keyframes zoomEffect {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 50%, #0f0f0f 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Evite le header sur mobile */
        }

        .hero h1 {
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }

        .hero p {
            font-size: 1.2rem;
            color: #f0f0f0;
            margin-bottom: 30px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.8);
            opacity: 0;
            animation: fadeInUp 1s ease 0.8s forwards;
        }

        .hero-btn-wrapper {
            opacity: 0;
            animation: fadeInUp 1s ease 1.1s forwards;
        }

        /* 
         * 3. PREUVE SOCIALE (Trust Bar)
         */
        .trust-bar {
            background-color: #1a1a1a;
            border-bottom: 1px solid rgba(229, 182, 82, 0.2);
            padding: 20px 0;
            position: relative;
            z-index: 2;
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
            color: var(--secondary-gold);
            font-family: var(--font-heading);
            font-size: 1.1rem;
            text-transform: uppercase;
        }

        .trust-item i { font-size: 1.4rem; }

        /* 
         * 4. LE CONCEPT (Split Screen)
         */
        .concept {
            background-color: var(--bg-dark);
            overflow: hidden;
        }

        .split-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 0;
        }

        .split-image {
            height: 600px;
            position: relative;
        }

        .split-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .split-content {
            padding: 60px;
        }

        .price-tag {
            display: inline-block;
            background: rgba(229, 182, 82, 0.1);
            border: 1px solid var(--secondary-gold);
            color: var(--secondary-gold);
            padding: 10px 20px;
            font-family: var(--font-heading);
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 30px;
        }

        /* 
         * 5. NIGHTLIFE 
         */
        .nightlife {
            background: url('https://images.unsplash.com/photo-1570554886111-e811eb3085c7?q=80&w=2670&auto=format&fit=crop') no-repeat center center/cover;
            position: relative;
            text-align: center;
        }

        .nightlife::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(10, 10, 10, 0.85);
        }

        .nightlife .container { position: relative; z-index: 2; }

        .insta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 40px;
            opacity: 0.8;
        }

        .insta-item {
            height: 250px;
            background: #222;
            position: relative;
            overflow: hidden;
            border: 1px solid #333;
        }

        .insta-item img {
            width: 100%; height: 100%; object-fit: cover;
            transition: var(--transition);
        }

        .insta-item:hover img { transform: scale(1.1); }
        .insta-item::after {
            content: '\f16d'; /* FontAwesome Instagram */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2rem;
            color: white;
            opacity: 0;
            transition: var(--transition);
        }
        .insta-item:hover::after { opacity: 1; }

        .neon-text {
            text-shadow: 0 0 10px rgba(229, 182, 82, 0.5), 0 0 20px rgba(229, 182, 82, 0.3);
        }

        /* 
         * 6. LOCATION & ABOUT
         */
        .location {
            background-color: var(--bg-darker);
            padding-bottom: 0;
        }

        .map-container {
            margin-top: 40px;
            height: 400px;
            width: 100%;
            background: #222;
            position: relative;
        }
        
        .map-overlay-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--primary-red);
            padding: 15px 30px;
            color: white;
            font-family: var(--font-heading);
            font-size: 1.2rem;
            border-radius: 4px;
            pointer-events: none; /* Just for visual representation in this demo */
        }

        /* 
         * 7. FOOTER 
         */
        footer {
            background-color: #000;
            padding: 50px 0 100px 0; /* Extra padding bottom for mobile sticky bar */
            border-top: 1px solid #222;
            text-align: center;
        }

        .footer-content h4 {
            color: var(--secondary-gold);
            margin-bottom: 15px;
        }

        .footer-info p {
            margin-bottom: 10px;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            color: var(--text-white);
            font-size: 1.5rem;
            margin: 0 10px;
            transition: var(--transition);
        }

        .social-links a:hover { color: var(--primary-red); }

        .copyright {
            margin-top: 40px;
            font-size: 0.8rem;
            color: #555;
        }

        /* 
         * 8. MOBILE STICKY BAR 
         */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 70px;
            background: #111;
            display: none; /* Hidden on desktop */
            z-index: 9999;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.5);
        }

        .sticky-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: var(--font-heading);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .sticky-btn i { font-size: 1.2rem; margin-bottom: 4px; }

        .btn-menu { background: #222; color: white; }
        .btn-reserve { background: var(--primary-red); color: white; }

        /* 
         * RESPONSIVE 
         */
        @media (max-width: 992px) {
            h1 { font-size: 2.5rem; }
            .split-layout { grid-template-columns: 1fr; }
            .split-image { height: 400px; }
            .split-content { padding: 40px 20px; }
            
            .hamburger { display: block; }
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: #000;
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                border-left: 1px solid #333;
            }
            .nav-links.active { right: 0; }
            .mobile-sticky-bar { display: flex; }
            
            /* Hide Desktop CTA in Nav on Mobile to prefer sticky bar */
            .nav-cta { display: none; }
        }

        @media (max-width: 480px) {
            h1 { font-size: 2rem; }
            h2 { font-size: 1.8rem; }
            .trust-grid { flex-direction: column; gap: 15px; }
            .hero-content { margin-top: 30px; }
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo">
                <a href="#"><img id="brand-logo" alt="Le Carnivore Logo"></a>
            </div>
            
            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#concept">Le Concept</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#nightlife">Soirées & DJ</a></li>
                    <li><a href="#location">Contact</a></li>
                    <li class="nav-cta"><a href="tel:+261340000000"><i class="fa-solid fa-phone"></i> Réserver</a></li>
                </ul>
            </nav>

            <div class="hamburger" id="hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1>L'Authentique Churrascaria <br>Brésilienne à Tana</h1>
            <p>Rodizio à volonté, Cocktails Signature & DJ Sets.<br>L'expérience culinaire la plus festive d'Antananarivo.</p>
            <div class="hero-btn-wrapper">
                <a href="#reservation" class="btn btn-primary">Réserver ma Table</a>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="container trust-grid">
            <div class="trust-item">
                <i class="fa-brands fa-tripadvisor"></i> Recommandé
            </div>
            <div class="trust-item">
                <i class="fa-solid fa-star"></i> Noté 4.8/5
            </div>
            <div class="trust-item">
                <i class="fa-solid fa-fire-burner"></i> +10 000 Viandes servies
            </div>
        </div>
    </div>

    <!-- CONCEPT SECTION -->
    <section id="concept" class="concept">
        <div class="split-layout">
            <div class="split-image">
                <img src="https://images.unsplash.com/photo-1558030006-4506719b7402?q=80&w=1000&auto=format&fit=crop" alt="Serveur découpant viande rodizio">
            </div>
            <div class="split-content">
                <h2>Le Rodizio : Un Festival de Saveurs</h2>
                <p>Installez-vous, retournez votre jeton côté Vert, et laissez nos serveurs vous présenter nos 15 variétés de viandes grillées au feu de bois. Une expérience immersive où la générosité brésilienne rencontre la qualité premium.</p>
                
                <div class="price-tag">
                    Formule à volonté à partir de 60 000 Ar
                </div>

                <a href="#" class="btn btn-secondary">Voir le Menu Complet</a>
            </div>
        </div>
    </section>

    <!-- NIGHTLIFE SECTION -->
    <section id="nightlife" class="nightlife section-padding">
        <div class="container">
            <h2 class="neon-text">Bar Lounge & Nightlife</h2>
            <p class="text-white" style="max-width: 600px; margin: 0 auto 30px auto;">Quand le dîner devient une fête. Profitez de nos cocktails signatures dans une ambiance tamisée et électrique.</p>
            
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap; margin-bottom: 40px;">
                <span class="btn btn-secondary" style="border-color: #fff; color: #fff; pointer-events: none;">Happy Hour 17h-19h</span>
                <span class="btn btn-secondary" style="border-color: #fff; color: #fff; pointer-events: none;">DJ Set Jeu-Sam</span>
            </div>

            <!-- Fake Instagram Wall -->
            <div class="insta-grid">
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=800&auto=format&fit=crop" alt="Cocktail">
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1592861956120-e524fc739696?q=80&w=800&auto=format&fit=crop" alt="Party Crowd">
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=800&auto=format&fit=crop" alt="Food Platter">
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?q=80&w=800&auto=format&fit=crop" alt="Night Vibe">
                </div>
            </div>
            <p style="margin-top: 20px; font-size: 0.9rem; color: #888;">@LeCarnivoreTana #RodizioNight</p>
        </div>
    </section>

    <!-- LOCATION SECTION -->
    <section id="location" class="location section-padding text-center">
        <div class="container">
            <h3>Au Centre de l'Animation (Ambatonakanga)</h3>
            <p style="margin-top: 10px;">Le cœur battant de la nuit à Tana.</p>
            
            <div class="map-container">
                <!-- Simulation de la carte Google Maps avec une image statique sombre pour le style -->
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1600&auto=format&fit=crop" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.5;" alt="Map Background">
                <div class="map-overlay-info">
                    <i class="fa-solid fa-location-dot"></i> S'y Rendre
                </div>
            </div>
            <a href="https://waze.com/ul" target="_blank" class="btn btn-primary" style="margin-top: -25px; position: relative; z-index: 5;">Ouvrir Waze / Maps</a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h4>LE Carnivore</h4>
                <div class="footer-info">
                    <p>Ambatonakanga, Antananarivo, Madagascar</p>
                    <p>Ouvert tous les jours : 11h00 - 02h00</p>
                    <p>Tel: +261 34 00 000 00</p>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 LE Carnivore. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BOTTOM BAR -->
    <div class="mobile-sticky-bar">
        <div class="sticky-btn btn-menu">
            <i class="fa-solid fa-book-open"></i> MENU
        </div>
        <div class="sticky-btn btn-reserve" onclick="window.location.href='tel:+261340000000'">
            <i class="fa-solid fa-phone"></i> RÉSERVER
        </div>
    </div>

    <script>
        // 1. LOGO INTEGRATION (MANDATORY)
        const LOGO_URL = "logo.jpg";
        const logoImg = document.getElementById('brand-logo');
        if(logoImg) {
            logoImg.src = LOGO_URL;
        }

        // 2. NAVBAR SCROLL EFFECT
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 3. MOBILE MENU TOGGLE
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            // Toggle icon betwen bars and times (X)
            const icon = hamburger.querySelector('i');
            if(navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = hamburger.querySelector('i');
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            });
        });

        // 4. ANIMATION ON SCROLL (Simple Intersection Observer)
        const observerOptions = {
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        // Select elements to animate (generic fade-up class logic simulated here)
        const animatedElements = document.querySelectorAll('h2, .split-content p, .price-tag, .insta-item');
        animatedElements.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.8s ease";
            observer.observe(el);
        });
    </script>
</body>
</html>