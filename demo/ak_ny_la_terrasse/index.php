<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKANY La Terrasse | Hub Culinaire & Événementiel Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    
    <style>
        /* --- RESET & BASE --- */
        :root {
            --black: #050505;
            --white: #ffffff;
            --gray-light: #f4f4f4;
            --gray-dark: #1a1a1a;
            --accent: #bfa068; /* Touche Gold subtile pour le premium */
            --font-body: 'Manrope', sans-serif;
            --font-heading: 'Playfair Display', serif;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--black);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 400;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-padding { padding: 6rem 0; }
        .text-center { text-align: center; }
        
        /* Typography Scale */
        .display-1 { font-size: clamp(2.5rem, 5vw, 4.5rem); color: var(--white); margin-bottom: 1.5rem; }
        .heading-2 { font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1rem; }
        .sub-heading { font-family: var(--font-body); font-weight: 600; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; color: var(--gray-dark); margin-bottom: 1rem; display: block; opacity: 0.6; }
        .lead { font-size: 1.1rem; color: #555; max-width: 600px; margin-bottom: 2rem; }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid transparent;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary {
            background-color: var(--white);
            color: var(--black);
            border-color: var(--white);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--white);
        }

        .btn-dark {
            background-color: var(--black);
            color: var(--white);
        }

        .btn-dark:hover {
            background-color: transparent;
            color: var(--black);
            border-color: var(--black);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--white);
            color: var(--white);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--black);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 1.5rem 0;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajustement pour le logo */
            width: auto;
            object-fit: contain;
        }
        
        /* Fallback if image fails to load/is placeholder */
        .logo-text { font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; letter-spacing: -1px; }

        .nav-links { display: flex; gap: 2.5rem; align-items: center; }
        .nav-links a { font-size: 0.9rem; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; position: relative; }
        
        /* Header link colors based on state */
        header:not(.scrolled) .nav-links a,
        header:not(.scrolled) .logo-text { color: var(--white); }
        header.scrolled .nav-links a,
        header.scrolled .logo-text { color: var(--black); }
        
        /* Button in header adjustment */
        header:not(.scrolled) .btn-header { background: var(--white); color: var(--black); }
        header.scrolled .btn-header { background: var(--black); color: var(--white); }

        .hamburger { display: none; cursor: pointer; }
        .bar { width: 25px; height: 2px; background-color: var(--white); margin: 5px 0; transition: var(--transition); }
        header.scrolled .bar { background-color: var(--black); }

        /* --- HERO --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1514362545857-3bc16549766b?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            /* Effet Parallaxe simple via fixed attachment sur desktop, ou JS */
            background-attachment: fixed; 
        }

        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 1rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero-subtitle {
            color: rgba(255,255,255,0.9);
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        /* --- SOCIAL PROOF --- */
        .social-proof {
            background-color: var(--white);
            padding: 4rem 0;
            border-bottom: 1px solid #eee;
        }

        .proof-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .proof-item h4 { font-size: 1.1rem; margin-bottom: 0.5rem; font-weight: 600; }
        .proof-item p { font-size: 0.9rem; color: #666; font-style: italic; }

        /* --- CONCEPT --- */
        .concept { background: var(--gray-light); overflow: hidden; }
        .split-layout {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .split-image, .split-content { flex: 1; min-width: 350px; }
        
        .split-image {
            height: 600px;
            position: relative;
        }

        .split-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .split-content { padding: 4rem; }

        /* --- EVENTS --- */
        .events { background: var(--white); }
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .event-card {
            background: var(--white);
            transition: var(--transition);
            cursor: pointer;
        }

        .event-card:hover { transform: translateY(-10px); }

        .event-img-wrap {
            height: 350px;
            overflow: hidden;
            position: relative;
        }
        
        .event-img-wrap img { transition: transform 0.6s ease; }
        .event-card:hover .event-img-wrap img { transform: scale(1.05); }

        .event-details { padding: 1.5rem 0; }
        .event-date { font-size: 0.85rem; text-transform: uppercase; color: var(--accent); font-weight: 700; letter-spacing: 1px; margin-bottom: 0.5rem; display: block; }
        .event-title { font-size: 1.5rem; margin-bottom: 0.5rem; }

        /* --- MENU PREVIEW --- */
        .menu-preview { background-color: var(--black); color: var(--white); }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin: 3rem 0;
        }

        .menu-item {
            position: relative;
            height: 300px;
            overflow: hidden;
            group;
        }

        .menu-item img {
            height: 100%;
            width: 100%;
            transition: transform 0.6s ease;
            opacity: 0.8;
        }

        .menu-item:hover img { transform: scale(1.1); opacity: 0.5; }

        .menu-info {
            position: absolute;
            bottom: 20px;
            left: 20px;
            z-index: 2;
        }
        
        .menu-name { font-family: var(--font-heading); font-size: 1.5rem; color: var(--white); }
        .menu-price { font-family: var(--font-body); font-size: 1rem; color: var(--white); font-weight: 300; }

        /* --- PRIVATIZATION --- */
        .privatization {
            background-color: var(--black);
            color: var(--white);
            position: relative;
            padding: 8rem 0;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1533174072545-e8d4aa97edf9?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            background-attachment: fixed;
        }
        
        .privatization::before {
            content: '';
            position: absolute;
            top:0; left:0; right:0; bottom:0;
            background: rgba(0,0,0,0.8);
        }
        
        .priv-content { position: relative; z-index: 2; max-width: 700px; margin: 0 auto; }

        /* --- FOOTER --- */
        footer {
            background-color: var(--white);
            padding: 4rem 0 2rem;
            border-top: 1px solid #eee;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-col h5 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            font-family: var(--font-heading);
        }

        .footer-col p, .footer-col a {
            color: #666;
            margin-bottom: 0.8rem;
            display: block;
            font-size: 0.95rem;
        }
        
        .footer-col a:hover { color: var(--black); }

        .map-container iframe {
            width: 100%;
            height: 200px;
            border: 0;
            filter: grayscale(100%);
            transition: filter 0.3s;
        }
        .map-container iframe:hover { filter: grayscale(0%); }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #f4f4f4;
            font-size: 0.8rem;
            color: #999;
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .display-1 { font-size: 2.5rem; }
            .nav-links {
                position: fixed;
                right: -100%;
                top: 0;
                height: 100vh;
                width: 80%;
                background: var(--white);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            }
            .nav-links.active { right: 0; }
            .nav-links a { color: var(--black) !important; font-size: 1.2rem; }
            
            .hamburger { display: block; z-index: 1001; }
            .hamburger.active .bar:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); background-color: var(--black); }
            .hamburger.active .bar:nth-child(2) { opacity: 0; }
            .hamburger.active .bar:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); background-color: var(--black); }

            .proof-grid { grid-template-columns: 1fr; }
            .menu-grid { grid-template-columns: 1fr; }
            .split-content { padding: 2rem; }
            .split-image { height: 400px; }
            
            /* Ajustement Hero Mobile */
            .hero-content {
                margin-top: 60px; /* Éviter que le header cache le texte */
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo-container">
                    <img id="logo-img" src="" alt="AKANY La Terrasse">
                </div>
                
                <ul class="nav-links">
                    <li><a href="#concept">Concept</a></li>
                    <li><a href="#events">Agenda</a></li>
                    <li><a href="#menu">La Carte</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#reservation" class="btn btn-header btn-primary" style="padding: 0.7rem 1.5rem;">Réserver</a></li>
                </ul>

                <div class="hamburger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1 class="display-1">Le Hub Culinaire & Événementiel</h1>
            <p class="hero-subtitle">Cuisine du monde, chefs invités et ambiance décontractée.<br>Découvrez le nouveau cœur battant de Tana.</p>
            <a href="#reservation" class="btn btn-primary">Réserver une table</a>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <div class="container">
            <div class="proof-grid">
                <div class="proof-item reveal">
                    <h4>"Le Spot Afterwork"</h4>
                    <p>L'ambiance la plus cosmopolite de Tana.</p>
                </div>
                <div class="proof-item reveal">
                    <h4>"Cuisine Voyageuse"</h4>
                    <p>Des saveurs internationales revisitées avec brio.</p>
                </div>
                <div class="proof-item reveal">
                    <h4>"Design Unique"</h4>
                    <p>Une terrasse suspendue hors du temps.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Concept Section -->
    <section id="concept" class="concept">
        <div class="split-layout">
            <div class="split-image reveal">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop" alt="Plat Signature Akany">
            </div>
            <div class="split-content reveal">
                <span class="sub-heading">Notre Concept</span>
                <h2 class="heading-2">Plus qu'un Restaurant,<br>un Lieu de Vie.</h2>
                <p class="lead">Chez AKANY La Terrasse, nous brisons la routine. Que ce soit pour un déjeuner d'affaires ou une soirée entre amis, profitez d'une cuisine internationale revisitée avec des produits locaux.</p>
                <a href="#menu" class="btn btn-dark">Découvrir l'histoire</a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="section-padding events">
        <div class="container">
            <div class="text-center reveal">
                <span class="sub-heading">Programmation</span>
                <h2 class="heading-2">L'Agenda AKANY</h2>
            </div>

            <div class="events-grid">
                <!-- Event 1 -->
                <div class="event-card reveal">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=2070&auto=format&fit=crop" alt="Chef Invité">
                    </div>
                    <div class="event-details">
                        <span class="event-date">15 - 20 Nov</span>
                        <h3 class="event-title">Semaine Japonaise</h3>
                        <p>Chef Tanaka prend les commandes de la terrasse.</p>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="event-card reveal">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Soirée Jazz">
                    </div>
                    <div class="event-details">
                        <span class="event-date">Chaque Jeudi</span>
                        <h3 class="event-title">Jazz & Cocktails</h3>
                        <p>Live band et mixologie créative.</p>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="event-card reveal">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop" alt="Brunch">
                    </div>
                    <div class="event-details">
                        <span class="event-date">Dimanche</span>
                        <h3 class="event-title">Le Grand Brunch</h3>
                        <p>Buffet à volonté et soleil sur Tana.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 3rem;">
                <a href="#" class="btn btn-outline" style="border-color: var(--black); color: var(--black);">Voir tous les événements</a>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section id="menu" class="section-padding menu-preview">
        <div class="container">
            <div class="text-center reveal">
                <span class="sub-heading" style="color: rgba(255,255,255,0.7);">Gastronomie</span>
                <h2 class="heading-2" style="color: var(--white);">À la Carte cette Saison</h2>
            </div>

            <div class="menu-grid">
                <div class="menu-item reveal">
                    <img src="https://images.unsplash.com/photo-1546241072-48010ad2862c?q=80&w=1888&auto=format&fit=crop" alt="Entrée">
                    <div class="menu-info">
                        <div class="menu-name">Poke Bowl Saumon</div>
                        <div class="menu-price">25 000 Ar</div>
                    </div>
                </div>
                <div class="menu-item reveal">
                    <img src="https://images.unsplash.com/photo-1544025162-d76690b67f11?q=80&w=2070&auto=format&fit=crop" alt="Plat">
                    <div class="menu-info">
                        <div class="menu-name">Côte de Bœuf Maturée</div>
                        <div class="menu-price">60 000 Ar</div>
                    </div>
                </div>
                <div class="menu-item reveal">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16549766b?q=80&w=2070&auto=format&fit=crop" alt="Cocktail">
                    <div class="menu-info">
                        <div class="menu-name">Signature Akany</div>
                        <div class="menu-price">18 000 Ar</div>
                    </div>
                </div>
                <div class="menu-item reveal">
                    <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?q=80&w=1887&auto=format&fit=crop" alt="Dessert">
                    <div class="menu-info">
                        <div class="menu-name">Tarte Citron Déstructurée</div>
                        <div class="menu-price">20 000 Ar</div>
                    </div>
                </div>
            </div>

            <div class="text-center reveal">
                <a href="#" class="btn btn-outline">Voir le Menu Digital</a>
            </div>
        </div>
    </section>

    <!-- Privatization Section -->
    <section class="privatization">
        <div class="container priv-content">
            <h2 class="heading-2" style="color: var(--white);">Organisez votre Événement chez Nous</h2>
            <p class="lead" style="color: rgba(255,255,255,0.8); margin: 0 auto 2rem auto;">Anniversaires, lancements de produits ou dîners d'entreprise. Privatisez la terrasse pour une expérience exclusive.</p>
            <a href="#contact" class="btn btn-primary">Demander un devis</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h5>AKANY La Terrasse</h5>
                    <p>Le Hub Culinaire à Antananarivo.<br>Une expérience unique au cœur de la ville.</p>
                    <p><strong>Horaires :</strong><br>Lun - Dim : 11h00 - 23h00</p>
                </div>
                <div class="footer-col">
                    <h5>Contact</h5>
                    <p>Quartier Isoraka, Antananarivo 101</p>
                    <a href="tel:+261340000000">+261 34 00 000 00</a>
                    <a href="mailto:contact@akany-terrasse.mg">contact@akany-terrasse.mg</a>
                    <div style="margin-top: 1rem;">
                        <a href="#" style="display:inline; margin-right: 10px;">Instagram</a>
                        <a href="#" style="display:inline;">Facebook</a>
                    </div>
                </div>
                <div class="footer-col map-container">
                    <!-- Google Maps Embed Placeholder (Tana) -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.240751381363!2d47.52185237599767!3d-18.91136798721956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a2472d4db%3A0x2600c02a00c7e2c0!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 AKANY La Terrasse. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // --- INJECTION DU LOGO ---
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // --- NAVIGATION INTERACTION ---
        const header = document.getElementById('header');
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        // Scroll Effect for Header
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Close mobile menu on link click
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });

        // --- SCROLL ANIMATIONS (IntersectionObserver) ---
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, {
            root: null,
            threshold: 0.15, // Trigger when 15% visible
            rootMargin: "0px 0px -50px 0px"
        });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });

    </script>
</body>
</html>