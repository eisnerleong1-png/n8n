<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Au Bungalow | Rooftop Lounge & Restaurant</title>
    <meta name="description" content="Restaurant Lounge Panoramique à Anosivavaka. Petit-déjeuner, Bar à Salades et Soirées Lounge au 3ème étage du DYVE GARDEN.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Manrope:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #000000;
            --text-color: #F5F5F5;
            --accent-color: #5EA846; /* Vert Vif */
            --secondary-color: #C4E7AF; /* Vert Pâle */
            --dark-overlay: rgba(0, 0, 0, 0.75);
            --glass: rgba(255, 255, 255, 0.05);
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
            font-family: 'Manrope', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, .serif {
            font-family: 'Cormorant Garamond', serif;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        /* --- UTILS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: #fff;
            border: 1px solid var(--accent-color);
            box-shadow: 0 4px 20px rgba(94, 168, 70, 0.4);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--secondary-color);
            border: 1px solid var(--secondary-color);
        }

        .btn-secondary:hover {
            background-color: var(--secondary-color);
            color: var(--bg-color);
            transform: translateY(-3px);
        }

        .text-accent {
            color: var(--accent-color);
        }
        
        .text-pale {
            color: var(--secondary-color);
        }

        /* --- NAVIGATION --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
        }

        header.scrolled {
            background-color: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            border-bottom: 1px solid rgba(196, 231, 175, 0.1);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            gap: 40px;
        }

        nav ul li a {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--accent-color);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--secondary-color);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); /* Cocktail/Vue sombre */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.8) 100%);
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.5s;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #fff;
        }

        .hero h1 span {
            font-style: italic;
            color: var(--secondary-color);
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 40px;
            color: #ddd;
            font-weight: 300;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* --- ELEVATOR INDICATOR --- */
        .elevator-indicator {
            position: fixed;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            z-index: 900;
            mix-blend-mode: difference;
        }

        .floor-marker {
            font-size: 0.7rem;
            color: var(--secondary-color);
            opacity: 0.5;
            transition: var(--transition);
        }

        .elevator-track {
            width: 2px;
            height: 150px;
            background: rgba(255,255,255,0.2);
            position: relative;
            border-radius: 2px;
        }

        .elevator-cab {
            position: absolute;
            bottom: 0; /* Starts at bottom */
            left: 50%;
            transform: translateX(-50%);
            width: 8px;
            height: 20px;
            background-color: var(--accent-color);
            border-radius: 4px;
            box-shadow: 0 0 10px var(--accent-color);
            transition: bottom 0.1s linear;
        }

        /* --- INFO BAR --- */
        .info-bar {
            background-color: #0a0a0a;
            padding: 40px 0;
            border-bottom: 1px solid rgba(196, 231, 175, 0.1);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .info-item i {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
            display: block;
        }

        .info-item h3 {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #fff;
        }

        .info-item p {
            font-size: 0.9rem;
            color: #888;
        }

        /* --- SECTIONS (Shared) --- */
        section {
            padding: 100px 0;
        }

        .section-split {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .split-content {
            flex: 1;
        }

        .split-image {
            flex: 1;
            position: relative;
            height: 500px;
            overflow: hidden;
            border-radius: 4px;
        }

        .split-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .split-image:hover img {
            transform: scale(1.05);
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-text {
            color: #bbb;
            margin-bottom: 30px;
            font-size: 1.05rem;
        }

        .price-tag {
            display: inline-block;
            padding: 10px 20px;
            background: rgba(94, 168, 70, 0.1);
            color: var(--accent-color);
            border: 1px solid var(--accent-color);
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-style: italic;
        }

        /* --- FRESH MARKET --- */
        #fresh-market {
            background-color: #050505;
        }

        /* --- COMFORT FOOD --- */
        #comfort-food {
            background-color: #000;
        }

        .split-reverse {
            flex-direction: row-reverse;
        }

        /* --- LOUNGE --- */
        #lounge {
            background: linear-gradient(0deg, #000 0%, #0a0a0a 100%);
            text-align: center;
            padding-bottom: 0;
        }

        .lounge-header {
            max-width: 700px;
            margin: 0 auto 60px auto;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            height: 400px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            height: 100%;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
            filter: grayscale(80%);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            filter: grayscale(0%);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #000;
            border-top: 1px solid #1a1a1a;
            padding: 80px 0 40px 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .map-container {
            width: 100%;
            height: 400px;
            border-radius: 4px;
            overflow: hidden;
            filter: grayscale(100%) invert(92%) contrast(83%); /* Dark mode map trick */
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .footer-info h2 {
            font-size: 3rem;
            margin-bottom: 30px;
        }

        .footer-details {
            margin-top: 40px;
        }

        .footer-details p {
            margin-bottom: 15px;
            color: #999;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .footer-details i {
            color: var(--accent-color);
        }

        .contact-links {
            margin-top: 30px;
            display: flex;
            gap: 20px;
        }

        .bottom-bar {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid #1a1a1a;
            color: #444;
            font-size: 0.8rem;
        }

        /* --- FLOATING QR --- */
        .floating-menu {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--accent-color);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(94, 168, 70, 0.5);
            cursor: pointer;
            z-index: 999;
            transition: var(--transition);
            animation: pulse 2s infinite;
        }

        .floating-menu:hover {
            transform: scale(1.1);
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(94, 168, 70, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(94, 168, 70, 0); }
            100% { box-shadow: 0 0 0 0 rgba(94, 168, 70, 0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 968px) {
            .hero h1 { font-size: 2.5rem; }
            .section-split, .split-reverse { flex-direction: column; gap: 30px; }
            .split-image { height: 350px; width: 100%; }
            .gallery { grid-template-columns: repeat(2, 1fr); height: auto; }
            .gallery-item { height: 300px; }
            .footer-content { grid-template-columns: 1fr; }
            
            nav ul {
                display: none; /* Simplification pour mobile */
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #000;
                flex-direction: column;
                padding: 20px;
                text-align: center;
            }
            
            nav ul.active { display: flex; }
            .mobile-toggle { display: block; }
            
            .elevator-indicator { display: none; } /* Caché sur mobile pour clean design */
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="header">
        <div class="container nav-content">
            <div class="logo-container" id="logo-root">
                <!-- Logo injected by JS -->
            </div>
            <nav>
                <ul id="nav-links">
                    <li><a href="#info">Infos</a></li>
                    <li><a href="#fresh-market">Lunch</a></li>
                    <li><a href="#lounge">Lounge</a></li>
                    <li><a href="#footer" class="text-accent">Réserver</a></li>
                </ul>
                <div class="mobile-toggle" onclick="toggleMenu()">☰</div>
            </nav>
        </div>
    </header>

    <!-- ELEVATOR SCROLL INDICATOR -->
    <div class="elevator-indicator">
        <span class="floor-marker" style="opacity: 1; color: #fff;">3e</span>
        <div class="elevator-track">
            <div class="elevator-cab" id="elevator-cab"></div>
        </div>
        <span class="floor-marker">RDC</span>
    </div>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Prenez de la Hauteur<br><span>Votre Escale Gourmande</span></h1>
            <p>Petit-déjeuner, Bar à Salades Fraîches & Soirées Lounge.<br>L'expérience exclusive au 3ème étage du DYVE GARDEN, Anosivavaka.</p>
            <div class="hero-btns">
                <a href="#fresh-market" class="btn btn-primary">Découvrir le Menu</a>
                <a href="#footer" class="btn btn-secondary">Réserver (034 XX XXX XX)</a>
            </div>
        </div>
    </section>

    <!-- INFO BAR -->
    <section id="info" class="info-bar">
        <div class="container">
            <div class="info-grid">
                <div class="info-item reveal">
                    <h3>🕒 7j/7</h3>
                    <p>07h00 - Tard</p>
                </div>
                <div class="info-item reveal">
                    <h3>📶 Wifi Fibre</h3>
                    <p>Haut Débit Gratuit</p>
                </div>
                <div class="info-item reveal">
                    <h3>🅿️ Parking</h3>
                    <p>Sécurisé DYVE GARDEN</p>
                </div>
                <div class="info-item reveal">
                    <h3>🌇 Vue</h3>
                    <p>Panoramique 3e Étage</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FRESH MARKET SECTION -->
    <section id="fresh-market">
        <div class="container">
            <div class="section-split">
                <div class="split-image reveal">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Salade Fraîcheur">
                </div>
                <div class="split-content reveal">
                    <h2 class="section-title">Fraîcheur Sur Mesure :<br><span class="text-accent">Salad & Juice Bar</span></h2>
                    <p class="section-text">Composez votre énergie. Des ingrédients locaux sélectionnés chaque matin pour un déjeuner sain et rapide. Idéal pour reprendre le travail avec légèreté.</p>
                    <div class="price-tag">Formules dès 15 000 Ar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMFORT FOOD SECTION -->
    <section id="comfort-food">
        <div class="container">
            <div class="section-split split-reverse">
                <div class="split-image reveal">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pizza Artisanale">
                </div>
                <div class="split-content reveal">
                    <h2 class="section-title">L'Art de la Pizza &<br><span class="text-pale">Plats Signatures</span></h2>
                    <p class="section-text">Pour les gourmands, nos pizzas artisanales cuites à la perfection et nos plats du jour réconfortants. Une cuisine généreuse pour un moment de partage.</p>
                    <div class="price-tag">Pizzas dès 20 000 Ar</div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOUNGE SECTION -->
    <section id="lounge">
        <div class="container lounge-header reveal">
            <h2 class="section-title">Au Bungalow :<br>Plus qu'un restaurant</h2>
            <p class="section-text">Quand le soleil se couche sur Tana, l'ambiance se transforme. Lumières tamisées, musique lounge et cocktails signatures. Le lieu idéal pour vos afterworks ou rendez-vous d'affaires discrets.</p>
        </div>
        <div class="gallery">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1572116469696-31de0f17cc34?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Lounge Ambiance">
                <div class="gallery-overlay"><h4>Afterwork</h4></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1536935338788-843bb528f4fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cocktails">
                <div class="gallery-overlay"><h4>Signature Cocktails</h4></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1550966871-3ed3c6227b3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Vue Soir">
                <div class="gallery-overlay"><h4>Vue Panoramique</h4></div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1525268323886-2818bc206eb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Détente">
                <div class="gallery-overlay"><h4>Atmosphère</h4></div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h2>Rejoignez-nous<br><span class="text-accent">au Sommet.</span></h2>
                    <div class="footer-details">
                        <p>📍 Anosivavaka, Antananarivo.</p>
                        <p>🏢 Entrée principale DYVE GARDEN, ascenseur 3ème étage.</p>
                        <p>📞 034 XX XXX XX</p>
                    </div>
                    <div class="contact-links">
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
                <div class="map-container">
                    <!-- Placeholder for Google Maps - Using an image/iframe placeholder logic for demo -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.242761358938!2d47.513!3d-18.917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU1JzAxLjIiUyA0N8KwMzAnNDYuOCJF!5e0!3m2!1sen!2smg!4v1635000000000!5m2!1sen!2smg" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="bottom-bar">
                <p>&copy; 2024 Au Bungalow. Designed with Premium Standards.</p>
            </div>
        </div>
    </footer>

    <!-- FLOATING QR -->
    <div class="floating-menu" title="Voir le Menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
    </div>

    <script>
        // --- 1. CONFIGURATION ---
        const LOGO_URL = "logo.jpg";

        // Inject Logo
        document.getElementById('logo-root').innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Au Bungalow Logo"></a>`;

        // --- 2. NAVIGATION SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. REVEAL ANIMATION ON SCROLL ---
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            revealElements.forEach((reveal) => {
                const elementTop = reveal.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        // Trigger once on load
        revealOnScroll();

        // --- 4. ELEVATOR SCROLL ANIMATION ---
        const elevatorCab = document.getElementById('elevator-cab');
        
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height); // 0 to 1
            
            // Invert logic for visual "Going Up to 3rd Floor" concept
            // Bottom of page (Footer) = High value physically, but let's map it:
            // Top of Page (Hero) = Ground Floor (visually bottom of indicator)
            // Bottom of Page = 3rd Floor (visually top of indicator)
            // Wait, the concept is "Au Bungalow" is at the top. 
            // So scrolling DOWN the page creates the feeling of going UP the building?
            // Let's implement: Scroll Down = Elevator Goes UP.
            
            const elevatorHeight = 130; // Track height minus cab height
            const position = scrolled * elevatorHeight; 
            
            elevatorCab.style.bottom = `${position}px`;
        });

        // --- 5. MOBILE MENU TOGGLE ---
        const navLinks = document.getElementById('nav-links');
        function toggleMenu() {
            navLinks.classList.toggle('active');
        }

        // Close menu when clicking a link
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>
</html>