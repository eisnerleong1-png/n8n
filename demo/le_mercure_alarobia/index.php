<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Mercure Alarobia & Restaurant Makasi | Antananarivo</title>
    
    <!-- Google Fonts: Playfair Display (Luxe) & Plus Jakarta Sans (Moderne) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary-red: #E31D38;
            --primary-green: #1AC40E;
            --text-dark: #1A1A1A;
            --text-light: #F9F9F9;
            --bg-body: #FFFFFF;
            --bg-off-white: #F4F5F7;
            --glass: rgba(255, 255, 255, 0.95);
            --shadow-soft: 0 20px 40px rgba(0,0,0,0.05);
            --shadow-hover: 0 25px 50px rgba(0,0,0,0.15);
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
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
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--bg-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { width: 100%; display: block; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
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
            background-color: var(--primary-red);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-green); /* Micro-interaction requested */
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(227, 29, 56, 0.3);
        }

        .btn-outline {
            border: 2px solid var(--primary-green);
            color: var(--primary-green);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--primary-green);
            color: white;
            transform: translateY(-3px);
        }

        /* --- HEADER --- */
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
            background: var(--glass);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            color: var(--text-dark);
        }
        
        header:not(.scrolled) .nav-links a {
            color: white;
        }
        header.scrolled .nav-links a {
            color: var(--text-dark);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            transition: var(--transition);
        }

        .nav-links a:hover::after { width: 100%; }

        .header-cta {
            display: none;
        }

        .hamburger {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        header.scrolled .hamburger { color: var(--text-dark); }

        @media (min-width: 992px) {
            .header-cta { display: block; }
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            transform: scale(1.1);
        }

        .slide.active {
            opacity: 1;
            animation: zoomEffect 10s infinite alternate;
        }

        @keyframes zoomEffect {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 60%, rgba(0,0,0,0.1) 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 700px;
            margin-top: 60px; /* Prevent header overlap */
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(5px);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            letter-spacing: 1px;
            margin-bottom: 24px;
            text-transform: uppercase;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 24px;
            line-height: 1.1;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.2rem);
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background: white;
            padding: 40px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            z-index: 10;
            margin-top: -50px; /* Overlap effect */
            border-radius: 8px 8px 0 0;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            text-align: center;
        }

        .trust-item i {
            font-size: 1.5rem;
            color: var(--primary-green);
            margin-bottom: 12px;
        }

        .trust-item h4 {
            font-family: var(--font-body);
            font-size: 0.9rem;
            font-weight: 600;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- SPLIT SECTIONS (HOTEL & RESTO) --- */
        .split-section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            overflow: hidden;
        }

        .split-content {
            flex: 1;
            padding: 60px;
            min-width: 350px;
        }

        .split-image {
            flex: 1;
            min-width: 350px;
            height: 600px;
            position: relative;
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

        .section-tag {
            color: var(--primary-red);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 0.85rem;
            margin-bottom: 16px;
            display: block;
        }

        .makasi-tag { color: var(--primary-green); }

        .split-content h2 {
            font-size: 2.5rem;
            margin-bottom: 24px;
            color: var(--text-dark);
        }

        .split-content p {
            color: #666;
            margin-bottom: 32px;
            font-size: 1.1rem;
        }

        .price-tag {
            font-size: 1.5rem;
            font-family: var(--font-heading);
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 32px;
            display: block;
        }

        .price-tag span {
            font-size: 1rem;
            font-weight: 400;
            color: #888;
            font-family: var(--font-body);
        }

        .bg-off-white { background-color: var(--bg-off-white); }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
            padding: 16px 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
            height: 300px;
        }
        
        /* Masonry effect fake with different heights for specific items in grid if supported, 
           keeping it simple grid for robustness but varying heights */
        .gallery-item:nth-child(2) { height: 400px; grid-row: span 2; }
        .gallery-item:nth-child(3) { height: 350px; }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
            filter: brightness(0.8);
        }

        /* --- CONTACT & MAP --- */
        .contact-section {
            background-color: #111;
            color: white;
            position: relative;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .contact-info {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-info h2 { font-size: 2.5rem; margin-bottom: 20px; color: white; }
        .contact-info p { color: #aaa; margin-bottom: 40px; }

        .info-row {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 24px;
        }

        .info-row i { color: var(--primary-red); font-size: 1.2rem; margin-top: 5px; }
        .info-row h5 { font-size: 1.1rem; margin-bottom: 5px; color: white; }
        .info-row span { color: #888; font-size: 0.95rem; }

        .map-container {
            width: 100%;
            height: 100%;
            min-height: 500px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            filter: grayscale(100%) invert(92%) contrast(83%); /* Premium Map Style */
            border: 0;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #000;
            color: #555;
            padding: 40px 0;
            font-size: 0.9rem;
            border-top: 1px solid #222;
        }

        .footer-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* --- MOBILE STICKY BAR --- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            padding: 12px 24px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            display: none;
            z-index: 1001;
            justify-content: space-between;
            align-items: center;
        }
        
        .sticky-btn {
            background: var(--primary-red);
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            flex: 1;
            text-align: center;
            margin-left: 10px;
        }

        .sticky-tel {
            font-weight: 700;
            color: var(--text-dark);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 991px) {
            .hamburger { display: block; }
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.5s ease;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }
            .nav-links.active { right: 0; }
            .nav-links a { color: var(--text-dark) !important; font-size: 1.5rem; }
            
            .split-section { flex-direction: column; }
            .split-section.reverse { flex-direction: column-reverse; }
            .split-image { width: 100%; height: 400px; }
            .split-content { padding: 40px 24px; }
            
            .contact-grid { grid-template-columns: 1fr; }
            .contact-info { padding: 40px 24px; }
            .mobile-sticky-bar { display: flex; }
            footer { padding-bottom: 80px; } /* Space for sticky bar */
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="logo-img" src="" alt="Mercure Alarobia Logo">
            </a>
            <ul class="nav-links" id="nav-links">
                <li><a href="#hero">Accueil</a></li>
                <li><a href="#hotel">Chambres</a></li>
                <li><a href="#makasi">Restaurant MAKASI</a></li>
                <li><a href="#gallery">Galerie</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Mobile only in menu -->
            </ul>
            <div class="header-cta">
                <a href="#booking" class="btn btn-primary">Réserver</a>
            </div>
            <i class="fas fa-bars hamburger" onclick="toggleMenu()"></i>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="hero" class="hero">
        <div class="hero-slider">
            <!-- Image 1: Hotel Room (Luxurious, Calm) -->
            <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop');"></div>
            <!-- Image 2: Indonesian Food (Nasi Goreng, Vibrant) -->
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1596450502967-b395cb00f545?q=80&w=2070&auto=format&fit=crop');"></div>
        </div>
        <div class="hero-overlay"></div>
        
        <div class="container hero-content">
            <span class="hero-badge">Alarobia Business District</span>
            <h1>Le Refuge Urbain au Cœur des Affaires.</h1>
            <p>Alliez repos absolu et voyage culinaire en Indonésie sans quitter Antananarivo. Parking sécurisé et Wi-Fi Fibre.</p>
            <div class="hero-buttons">
                <a href="#booking" class="btn btn-primary">RÉSERVER MA CHAMBRE</a>
                <a href="#makasi" class="btn btn-outline" style="color: white; border-color: white;">VOIR LE MENU MAKASI</a>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="container">
        <div class="trust-bar">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-wifi"></i>
                    <h4>Wi-Fi Fibre</h4>
                </div>
                <div class="trust-item">
                    <i class="fas fa-parking"></i>
                    <h4>Parking Gratuit</h4>
                </div>
                <div class="trust-item">
                    <i class="fas fa-snowflake"></i>
                    <h4>Climatisation</h4>
                </div>
                <div class="trust-item">
                    <i class="fas fa-clock"></i>
                    <h4>Ouvert 7j/7</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- HOTEL SECTION -->
    <section id="hotel" class="split-section">
        <div class="split-image">
            <img src="https://images.unsplash.com/photo-1590490360182-f33efe29a79d?q=80&w=2074&auto=format&fit=crop" alt="Chambre King Size Confortable">
        </div>
        <div class="split-content">
            <span class="section-tag">Hôtel Mercure</span>
            <h2>Votre Escale Sérénité</h2>
            <p>Plus qu'un hôtel, un espace de repos situé à 5 min d'Ivandry et de la Tour Redland. Nos chambres sont parfaitement insonorisées pour garantir un sommeil réparateur loin du tumulte de la ville.</p>
            <div class="price-tag">
                120 000 MGA <span style="font-size:0.8rem;">/ nuit</span>
            </div>
            <a href="#booking" class="btn btn-primary">Voir les disponibilités</a>
        </div>
    </section>

    <!-- RESTAURANT SECTION -->
    <section id="makasi" class="split-section reverse bg-off-white">
        <div class="split-content">
            <span class="section-tag makasi-tag">Restaurant Makasi</span>
            <h2>L'Authentique Cuisine Indonésienne</h2>
            <p>Évadez-vous le temps d'un déjeuner d'affaires ou d'un dîner intime. Découvrez nos spécialités signatures préparées avec des produits frais : Satay Ayam, Nasi Goreng et le légendaire Rendang.</p>
            <a href="#menu" class="btn btn-outline">Consulter la Carte</a>
        </div>
        <div class="split-image">
            <img src="https://images.unsplash.com/photo-1555126634-323283e090fa?q=80&w=1964&auto=format&fit=crop" alt="Plat indonésien savoureux">
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="section-padding container">
        <div class="text-center" style="margin-bottom: 50px;">
            <span class="section-tag">Ambiance</span>
            <h2>Le souci du détail</h2>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=2025&auto=format&fit=crop" alt="Lobby Details">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1505935428862-770b6f24f629?q=80&w=2067&auto=format&fit=crop" alt="Textures draps">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop" alt="Cocktail Bar">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=2070&auto=format&fit=crop" alt="Restaurant Ambiance">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?q=80&w=1974&auto=format&fit=crop" alt="Chambre Vue">
            </div>
        </div>
    </section>

    <!-- CONTACT & MAP -->
    <section id="contact" class="contact-section">
        <div class="contact-grid">
            <div class="contact-info">
                <span class="section-tag">Localisation</span>
                <h2>Au centre de tout, loin du bruit.</h2>
                <p>Idéalement situé au cœur du quartier d'affaires d'Alarobia, à proximité immédiate des grands centres commerciaux et bureaux.</p>
                
                <div class="info-row">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h5>Adresse</h5>
                        <span>Alarobia, Antananarivo 101, Madagascar<br>5 min du Golden Mile, 10 min d'Ankorondrano.</span>
                    </div>
                </div>

                <div class="info-row">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h5>Réservations</h5>
                        <span>+261 34 00 000 00</span>
                    </div>
                </div>

                <div class="info-row">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h5>Email</h5>
                        <span>contact@mercure-alarobia.com</span>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.801662999999!2d47.525!3d-18.885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDUzJzA2LjAiUyA0N8KwMzEnMzAuMCJF!5e0!3m2!1sen!2smg!4v1600000000000!5m2!1sen!2smg" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-flex">
            <div>
                &copy; 2024 Le Mercure Alarobia & Makasi. Tous droits réservés.
            </div>
            <div style="display:flex; gap:20px;">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BAR -->
    <div class="mobile-sticky-bar">
        <div class="sticky-tel">
            <a href="tel:+261340000000"><i class="fas fa-phone-alt" style="color:var(--primary-red); margin-right:5px;"></i> Appeler</a>
        </div>
        <a href="#booking" class="sticky-btn">Réserver</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. LOGO INTEGRATION (STRICT) ---
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // --- 2. MOBILE MENU ---
        function toggleMenu() {
            const nav = document.getElementById('nav-links');
            nav.classList.toggle('active');
        }

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('nav-links').classList.remove('active');
            });
        });

        // --- 3. HERO SLIDER (Crossfade) ---
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        
        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000); // Change image every 5 seconds

        // --- 4. SCROLL EFFECT NAVBAR ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('navbar');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 5. SMOOTH REVEAL ON SCROLL ---
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        // Apply fade-in animation logic
        document.querySelectorAll('h2, .trust-item, .split-content, .gallery-item').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(20px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });

    </script>
</body>
</html>