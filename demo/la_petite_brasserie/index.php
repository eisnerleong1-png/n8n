<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Petite Brasserie - Restaurant Antananarivo</title>
    
    <!-- Fonts: Playfair Display (Serif/Luxe) & Plus Jakarta Sans (Modern Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #603238; /* Bordeaux/Chocolat */
            --primary-light: #8a4b54;
            --secondary: #1a1a1a;
            --text: #4a4a4a;
            --bg-light: #fdfbfb;
            --white: #ffffff;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text);
            background-color: var(--bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--secondary);
            font-weight: 700;
        }

        img { width: 100%; height: auto; display: block; object-fit: cover; }
        
        a { text-decoration: none; transition: var(--transition); }

        ul { list-style: none; }

        /* UTILITIES */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-radius: 50px;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 1px solid var(--primary);
            box-shadow: 0 4px 15px rgba(96, 50, 56, 0.3);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--white);
        }

        .btn-outline:hover {
            background-color: var(--white);
            color: var(--primary);
            transform: translateY(-2px);
        }

        .btn-outline-dark {
            border: 1px solid var(--primary);
            color: var(--primary);
        }
        .btn-outline-dark:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .section-padding { padding: 100px 0; }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .section-title p {
            font-size: 1.1rem;
            color: #777;
            max-width: 600px;
            margin: 0 auto;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo styling injected via JS logic mostly, but styling here */
        .logo-img {
            height: 50px; /* Adjust based on actual logo aspect ratio */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        header.scrolled .nav-links a { color: var(--secondary); }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover::after { width: 100%; }

        .nav-cta {
            background-color: var(--primary);
            color: white !important;
            padding: 10px 24px;
            border-radius: 30px;
        }
        
        .nav-cta:hover {
            background-color: var(--primary-light);
            color: white !important;
        }
        
        .nav-cta::after { display: none; }

        .mobile-menu-btn {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .mobile-menu-btn { color: var(--secondary); }

        /* HERO SECTION */
        #hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(96, 50, 56, 0.3) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            color: var(--white);
            padding-top: 60px; /* Offset for header */
        }

        .hero-content h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 20px;
            color: var(--white);
            opacity: 0;
            animation: fadeUp 1s ease forwards 0.5s;
        }

        .hero-content h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 300;
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeUp 1s ease forwards 0.8s;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            opacity: 0;
            animation: fadeUp 1s ease forwards 1.1s;
        }

        /* TRUST BAR */
        #trust {
            background: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stars { color: #f1c40f; }
        .quote { font-style: italic; color: #555; border-left: 3px solid var(--primary); padding-left: 15px; }

        /* AMBIANCE SECTION (Masonry) */
        #ambiance { background-color: var(--bg-light); }

        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(2, 300px);
            gap: 20px;
        }

        .masonry-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .masonry-item img {
            height: 100%;
            width: 100%;
            transition: transform 0.8s ease;
        }

        .masonry-item:hover img { transform: scale(1.05); }

        .item-1 { grid-column: 1 / 8; grid-row: 1 / 3; } /* Large Left */
        .item-2 { grid-column: 8 / 13; grid-row: 1 / 2; } /* Top Right */
        .item-3 { grid-column: 8 / 13; grid-row: 2 / 3; } /* Bottom Right */

        .ambiance-text {
            grid-column: 1 / 13;
            text-align: center;
            max-width: 700px;
            margin: 40px auto 0;
        }

        /* MENU SECTION */
        #menu { background-color: var(--white); }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .menu-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(96, 50, 56, 0.1);
        }

        .card-img {
            height: 250px;
            overflow: hidden;
        }

        .card-img img { transition: var(--transition); }
        .menu-card:hover .card-img img { transform: scale(1.1); }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dish-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            margin-bottom: 5px;
            color: var(--secondary);
        }

        .dish-desc {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 20px;
        }

        .dish-price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            align-self: flex-end;
        }

        .menu-action { text-align: center; }

        /* ABOUT SECTION */
        #about {
            background-color: #f4f1ea; /* Warm creamy background */
        }

        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-img {
            flex: 1;
            position: relative;
        }

        .about-img img {
            border-radius: 12px;
            box-shadow: 20px 20px 0px var(--primary);
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            font-size: 2.8rem;
            color: var(--primary);
            margin-bottom: 25px;
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        /* CONTACT SECTION */
        #contact { padding: 0; }

        .contact-split {
            display: flex;
            flex-wrap: wrap;
        }

        .map-container {
            flex: 1;
            min-height: 500px;
            background: #eee;
        }

        .info-container {
            flex: 1;
            background: var(--primary);
            color: var(--white);
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-container h2 { color: var(--white); margin-bottom: 30px; }
        
        .info-item { margin-bottom: 30px; }
        .info-item i { font-size: 1.2rem; margin-right: 15px; width: 20px; text-align: center; }
        
        .call-btn-big {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--white);
            color: var(--primary);
            padding: 20px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            border-radius: 8px;
            margin-top: 20px;
            gap: 15px;
            transition: var(--transition);
        }

        .call-btn-big:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* FOOTER */
        footer {
            background: var(--secondary);
            color: #aaa;
            padding: 60px 0 30px;
            text-align: center;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--white);
            margin-bottom: 20px;
            display: block;
        }

        .social-links {
            margin-bottom: 30px;
        }

        .social-links a {
            color: var(--white);
            font-size: 1.2rem;
            margin: 0 10px;
            transition: var(--transition);
        }

        .social-links a:hover { color: var(--primary); }

        .copyright { font-size: 0.8rem; }

        /* STICKY MOBILE BAR */
        #sticky-mobile-bar {
            display: none; /* Default hidden on desktop */
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 9999;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        #sticky-mobile-bar .btn {
            flex: 1;
            padding: 12px;
            font-size: 0.9rem;
            text-align: center;
        }

        /* ANIMATIONS */
        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
            from { opacity: 0; transform: translateY(30px); }
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .masonry-grid {
                display: flex;
                flex-direction: column;
            }
            .masonry-item { height: 300px; }
            .item-1 { height: 400px; }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }

            .nav-links.active { display: flex; }
            .nav-links a { color: var(--secondary); font-size: 1.1rem; }

            .mobile-menu-btn { display: block; }
            
            .hero-content h1 { font-size: 2.5rem; }
            .hero-buttons { flex-direction: column; }
            
            .about-wrapper { flex-direction: column; }
            .about-img img { box-shadow: 10px 10px 0px var(--primary); }

            .contact-split { flex-direction: column-reverse; }
            .info-container { padding: 40px 20px; }

            #sticky-mobile-bar { display: flex; }
            
            /* Margin fix for mobile nav */
            .hero-content { padding-top: 100px; }
        }
    </style>
</head>
<body>

    <!-- Sticky Mobile Bar -->
    <div id="sticky-mobile-bar">
        <a href="#contact" class="btn btn-outline-dark" style="background:white; color:var(--secondary); border: 1px solid #ddd;">Appeler</a>
        <a href="#contact" class="btn btn-primary">Réserver</a>
    </div>

    <!-- Header -->
    <header id="main-header">
        <div class="container">
            <nav>
                <!-- Logo injected via JS -->
                <a href="#" class="logo-link"><img id="header-logo" class="logo-img" alt="La Petite Brasserie"></a>
                
                <div class="mobile-menu-btn" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="nav-links" id="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#ambiance">L'Ambiance</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#contact" class="nav-cta">Réserver</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>L'Évasion Gourmande et Cosy au Cœur d'Antananarivo.</h1>
                <h2>Savourez une cuisine simple et authentique dans le cadre le plus chaleureux de la ville.</h2>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Réserver ma table</a>
                    <a href="#menu" class="btn btn-outline">Voir la carte</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof / Trust Bar -->
    <section id="trust">
        <div class="container">
            <div class="trust-wrapper">
                <div class="trust-item">
                    <h4>Ils recommandent notre ambiance :</h4>
                </div>
                <div class="trust-item">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <span>Google & TripAdvisor</span>
                </div>
                <div class="trust-item">
                    <p class="quote">"Le meilleur endroit pour se détendre à Tana."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ambiance Section -->
    <section id="ambiance" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Un Havre de Paix Loin du Tumulte</h2>
            </div>
            
            <div class="masonry-grid">
                <!-- Interior / Velvet -->
                <div class="masonry-item item-1">
                    <img src="https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?q=80&w=2070&auto=format&fit=crop" alt="Intérieur Cosy Restaurant">
                </div>
                <!-- Cocktail -->
                <div class="masonry-item item-2">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop" alt="Cocktail Signature">
                </div>
                <!-- Friends Social -->
                <div class="masonry-item item-3">
                    <img src="https://images.unsplash.com/photo-1576867757603-05b134ebc379?q=80&w=2070&auto=format&fit=crop" alt="Amis Restaurant">
                </div>
                
                <div class="ambiance-text">
                    <p>Oubliez l'agitation du centre-ville. Que ce soit pour un déjeuner d'affaires discret ou un dîner romantique, notre cadre est pensé pour votre confort absolu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Simplicité et Produits Frais</h2>
                <p>Une carte courte, gage de fraîcheur, renouvelée au gré des saisons.</p>
            </div>

            <div class="menu-grid">
                <!-- Card 1 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=1998&auto=format&fit=crop" alt="Burger du Chef">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="dish-name">Le Burger du Chef</h3>
                            <p class="dish-desc">Pain boulanger, Steak de Zébu juteux, Fromage local affiné, Sauce secrète.</p>
                        </div>
                        <span class="dish-price">25 000 Ar</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?q=80&w=2070&auto=format&fit=crop" alt="Poisson Vanille">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="dish-name">Pavé de Poisson Vanille</h3>
                            <p class="dish-desc">Pêche du jour, sauce onctueuse à la vanille de Madagascar, Riz rouge.</p>
                        </div>
                        <span class="dish-price">35 000 Ar</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1579954115545-a95591f28bfc?q=80&w=2070&auto=format&fit=crop" alt="Café Gourmand">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="dish-name">Café Gourmand</h3>
                            <p class="dish-desc">Un espresso accompagné d'une sélection de mignardises maison.</p>
                        </div>
                        <span class="dish-price">15 000 Ar</span>
                    </div>
                </div>
            </div>

            <div class="menu-action">
                <a href="#" class="btn btn-outline-dark">Télécharger le Menu PDF</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=1954&auto=format&fit=crop" alt="Le Chef et l'équipe">
                </div>
                <div class="about-content">
                    <h2>L'Esprit de la Petite Brasserie</h2>
                    <p>Ici, pas de chichis, mais de l'amour dans l'assiette. Notre chef et sa brigade s'engagent chaque matin à sélectionner les meilleurs produits du marché d'Analakely.</p>
                    <p>Nous croyons en l'hospitalité malgache : un sourire sincère, un service attentionné et une cuisine qui a du goût. Bienvenue chez vous.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="contact">
        <div class="contact-split">
            <div class="map-container">
                <!-- Placeholder for Google Map - Tana Center -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60322.95689104058!2d47.48713063125!3d-18.8791902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0ea54e582d%3A0x633190226317208!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="info-container">
                <h2>Nous Trouver</h2>
                
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Rue Principale, Centre Ville, Antananarivo 101</span>
                </div>
                
                <div class="info-item">
                    <i class="far fa-clock"></i>
                    <span>Lundi - Samedi : 11h00 - 22h00</span>
                </div>

                <a href="tel:0340000000" class="call-btn-big">
                    <i class="fas fa-phone-alt"></i>
                    Appeler : 034 XX XXX XX
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <span class="footer-logo">La Petite Brasserie</span>
            
            <div class="social-links">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-tripadvisor"></i></a>
            </div>
            
            <div class="copyright">
                &copy; 2025 La Petite Brasserie. Tous droits réservés. <br>
                <a href="#" style="color: #666; font-size: 0.8rem;">Mentions Légales</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // INTEGRATION DU LOGO (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            // Inject logo
            document.getElementById('header-logo').src = LOGO_URL;

            // Scroll Effect for Header
            const header = document.getElementById('main-header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menu-toggle');
            const navLinks = document.getElementById('nav-links');
            const links = document.querySelectorAll('.nav-links a');

            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            links.forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                });
            });

            // Intersection Observer for Fade In Animation
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

            // Select elements to animate
            const cards = document.querySelectorAll('.menu-card, .masonry-item, .about-content');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.8s ease-out';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>