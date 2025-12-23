<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savanna Café | Hôtel & Brasserie Antananarivo</title>
    <meta name="description" content="L'Art de Vivre à Tana. Hôtel confortable et Brasserie familiale au cœur d'Antananarivo. Pizzas savoureuses, cuisine d'ici et d'ailleurs.">
    
    <!-- Google Fonts: Playfair Display (Luxe/Titre) & Montserrat (Moderne/Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --color-gold: #E6C568;
            --color-black: #050505;
            --color-dark-grey: #121212;
            --color-text-grey: #999999;
            --color-white: #ffffff;
            --font-title: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
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
            background-color: var(--color-black);
            color: var(--color-text-grey);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-title);
            color: var(--color-gold);
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        /* --- UTILITIES --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn-gold {
            display: inline-block;
            background-color: var(--color-gold);
            color: var(--color-black);
            padding: 16px 32px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid var(--color-gold);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-gold:hover {
            background-color: transparent;
            color: var(--color-gold);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .mb-2 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 2rem; }

        /* --- HEADER & NAVIGATION --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
            background: linear-gradient(to bottom, rgba(0,0,0,0.9), rgba(0,0,0,0));
        }

        header.scrolled {
            background-color: rgba(5, 5, 5, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.5);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        nav ul li a {
            color: var(--color-white);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: var(--color-gold);
        }

        .mobile-toggle {
            display: none;
            color: var(--color-gold);
            font-size: 2rem;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1514362545857-3bc16549766b?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease-out forwards 0.5s;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: var(--color-gold);
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--color-white);
            margin-bottom: 40px;
            font-weight: 300;
        }

        /* --- SERVICES (SPLIT SCREEN) --- */
        .services-split {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .service-block {
            flex: 1;
            min-width: 300px;
            height: 600px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            group: cursor;
        }

        .service-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.8s ease;
            z-index: -1;
        }

        .service-block:hover .service-bg {
            transform: scale(1.1);
        }

        .service-overlay {
            background: rgba(0,0,0,0.6);
            padding: 40px;
            text-align: center;
            border: 1px solid rgba(230, 197, 104, 0.3);
            backdrop-filter: blur(2px);
            transition: var(--transition);
            max-width: 400px;
        }

        .service-block:hover .service-overlay {
            background: rgba(0,0,0,0.8);
            border-color: var(--color-gold);
        }

        .service-title {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--color-white);
        }

        .service-desc {
            color: #ccc;
            margin-bottom: 25px;
        }

        /* --- ABOUT SECTION --- */
        .about-section {
            background-color: var(--color-dark-grey);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }

        .about-content {
            flex: 1;
        }

        .about-content h2 {
            font-size: 3rem;
            margin-bottom: 30px;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--color-gold);
            z-index: 0;
        }

        .about-image img {
            position: relative;
            z-index: 1;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* --- GALLERY (MASONRY) --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            position: relative;
            height: 300px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-icon {
            color: var(--color-gold);
            font-size: 2rem;
        }

        /* --- TESTIMONIALS --- */
        .testimonials {
            background-color: var(--color-black);
            text-align: center;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .testimonial-card {
            background: var(--color-dark-grey);
            padding: 40px;
            border-bottom: 3px solid var(--color-gold);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
        }

        .stars {
            color: var(--color-gold);
            margin-bottom: 15px;
        }

        .quote {
            font-style: italic;
            font-size: 1.1rem;
            color: var(--color-white);
            margin-bottom: 20px;
        }

        .author {
            font-weight: 700;
            color: var(--color-text-grey);
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* --- CONTACT & MAP --- */
        .contact-section {
            background: var(--color-dark-grey);
            padding-bottom: 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .contact-info {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .contact-icon {
            color: var(--color-gold);
            font-size: 1.5rem;
            margin-right: 20px;
            margin-top: 5px;
        }

        .contact-text h4 {
            color: var(--color-white);
            font-size: 1.2rem;
            margin-bottom: 5px;
            font-family: var(--font-body);
        }

        .map-container {
            width: 100%;
            min-height: 400px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(100%) invert(92%) contrast(83%); /* Map Dark Mode */
        }

        /* --- FOOTER --- */
        footer {
            background-color: #000;
            padding: 30px 0;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 90px; /* Space for mobile bar */
        }

        /* --- MOBILE STICKY BAR --- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-dark-grey);
            display: none; /* Desktop hidden */
            border-top: 2px solid var(--color-gold);
            z-index: 9999;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.5);
        }

        .sticky-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            color: var(--color-white);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sticky-btn.bg-gold {
            background: var(--color-gold);
            color: var(--color-black);
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeUp {
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

        /* --- MEDIA QUERIES --- */
        @media (max-width: 900px) {
            .hero h1 { font-size: 2.5rem; }
            .about-section { flex-direction: column; }
            .about-image { width: 100%; order: -1; margin-bottom: 30px; }
            .contact-grid { grid-template-columns: 1fr; }
            .contact-info { padding: 40px 20px; }
        }

        @media (max-width: 768px) {
            .mobile-toggle { display: block; }
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background: var(--color-dark-grey);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.5s ease;
                box-shadow: -5px 0 15px rgba(0,0,0,0.5);
            }
            nav ul.active { right: 0; }
            .services-split { flex-direction: column; }
            .service-block { height: 400px; }
            .mobile-sticky-bar { display: flex; }
            .hero { background-attachment: scroll; } /* Disable parallax on mobile for performance */
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo-container" id="logo-root">
                <!-- Logo injected by JS -->
            </div>
            <div class="mobile-toggle" id="mobile-menu-btn">☰</div>
            <nav>
                <ul id="nav-list">
                    <li><a href="#services">Hôtel & Brasserie</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#testimonials">Avis</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact" style="color: var(--color-gold);">Réserver</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <h1>L'Art de Vivre à Tana : <br>Votre Hôtel & Brasserie Familiale</h1>
            <p>Cuisine d'ici et d'ailleurs, Pizzas savoureuses et Chambres confortables. Ouvert 7j/7 au cœur d'Antananarivo.</p>
            <a href="#contact" class="btn-gold">Réserver une Table / Chambre</a>
        </div>
    </section>

    <!-- SERVICES (Split Screen) -->
    <section id="services" class="services-split">
        <!-- Brasserie -->
        <div class="service-block">
            <div class="service-bg" style="background-image: url('https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=1000&auto=format&fit=crop');"></div>
            <div class="service-overlay">
                <h3 class="service-title">La Brasserie</h3>
                <p class="service-desc">Pizzas artisanales, plats généreux et ambiance familiale. Le lieu de rencontre idéal.</p>
                <a href="#contact" class="btn-gold">Voir le Menu</a>
            </div>
        </div>
        <!-- Hôtel -->
        <div class="service-block">
            <div class="service-bg" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=1000&auto=format&fit=crop');"></div>
            <div class="service-overlay">
                <h3 class="service-title">L'Hôtel</h3>
                <p class="service-desc">Calme, propreté irréprochable et service attentionné pour vos séjours à Tana.</p>
                <a href="#contact" class="btn-gold">Voir les Chambres</a>
            </div>
        </div>
    </section>

    <!-- A PROPOS -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-section reveal">
                <div class="about-content">
                    <h2>Bienvenue au Savanna Café</h2>
                    <p class="mb-2">Plus qu'un simple établissement, nous sommes un lieu de vie vibrant au cœur de la ville.</p>
                    <p class="mb-4">Que ce soit pour un déjeuner d'affaires rapide, un dîner convivial en famille autour d'une pizza au feu de bois, ou une nuit reposante dans nos chambres modernes, nous vous accueillons avec le sourire et professionnalisme, 7 jours sur 7.</p>
                    <a href="#gallery" class="btn-gold" style="background: transparent; border: 1px solid var(--color-gold); color: var(--color-gold);">Découvrir l'ambiance</a>
                </div>
                <div class="about-image">
                    <!-- Photo équipe/ambiance -->
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=800&auto=format&fit=crop" alt="Equipe Savanna Café Antananarivo">
                </div>
            </div>
        </div>
    </section>

    <!-- GALERIE -->
    <section id="gallery" class="section-padding" style="background: #0a0a0a;">
        <div class="container">
            <div class="text-center mb-4 reveal">
                <h2 style="color: var(--color-white)">En Images</h2>
                <p>Plongez dans l'univers du Savanna</p>
            </div>
            <div class="gallery-grid reveal">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=600&auto=format&fit=crop" alt="Pizza savoureuse">
                    <div class="gallery-overlay"><span class="gallery-icon">+</span></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1590490360182-f33fb0d41022?q=80&w=600&auto=format&fit=crop" alt="Chambre Hotel Confortable">
                    <div class="gallery-overlay"><span class="gallery-icon">+</span></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1550966871-3ed3c47e7188?q=80&w=600&auto=format&fit=crop" alt="Steak frites brasserie">
                    <div class="gallery-overlay"><span class="gallery-icon">+</span></div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop" alt="Hall Hotel Lobby">
                    <div class="gallery-overlay"><span class="gallery-icon">+</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PREUVE SOCIALE -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="text-center reveal">
                <h2>Ce que nos clients disent</h2>
            </div>
            <div class="testimonial-grid reveal">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"Une adresse incontournable à Tana. Les pizzas sont délicieuses et le service est vraiment impeccable."</p>
                    <p class="author">- Jean M., Voyageur d'affaires</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"Nous avons passé une nuit au calme. Chambre propre, literie confortable, parfait pour récupérer."</p>
                    <p class="author">- Sarah L., Touriste</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"Le meilleur rapport qualité-prix du quartier. L'équipe est souriante et on s'y sent comme à la maison."</p>
                    <p class="author">- Rina A., Local</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT & MAP -->
    <section id="contact" class="contact-section">
        <div class="contact-grid">
            <div class="contact-info">
                <h2 style="margin-bottom: 40px;">Nous trouver à Tana</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-text">
                        <h4>Adresse</h4>
                        <p>Centre Ville, Antananarivo, Madagascar</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-text">
                        <h4>Téléphone</h4>
                        <p><a href="tel:+261340000000">+261 34 00 000 00</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">
                        <h4>Email</h4>
                        <p>reservation@savannacafe.mg</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <div class="contact-text">
                        <h4>Horaires</h4>
                        <p>Ouvert 7j/7<br>06h30 - 23h00</p>
                    </div>
                </div>
            </div>
            <div class="map-container">
                <!-- Google Maps Embed (Placeholder for Tana) -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60322.95562725595!2d47.4916298!3d-18.8872935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a23223327%3A0x670f5b9992451f0!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1715433000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p style="color: #666; font-size: 0.8rem;">&copy; 2025 Savanna Café. Tous droits réservés. Design Premium.</p>
        </div>
    </footer>

    <!-- MOBILE STICKY BAR -->
    <div class="mobile-sticky-bar">
        <a href="tel:+261340000000" class="sticky-btn bg-gold">
            <span>📞 Appeler</span>
        </a>
        <a href="#contact" class="sticky-btn" style="background: #222;">
            <span>📍 Itinéraire</span>
        </a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. GESTION DU LOGO ---
        const LOGO_URL = "logo.jpg";
        
        // Insertion dynamique du logo
        const logoContainer = document.getElementById('logo-root');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Savanna Café Logo";
        logoContainer.appendChild(logoImg);

        // --- 2. HEADER SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. MOBILE MENU TOGGLE ---
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const navList = document.getElementById('nav-list');
        const navLinks = document.querySelectorAll('nav ul li a');

        mobileBtn.addEventListener('click', () => {
            navList.classList.toggle('active');
            mobileBtn.textContent = navList.classList.contains('active') ? '✕' : '☰';
        });

        // Fermer le menu au clic sur un lien
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navList.classList.remove('active');
                mobileBtn.textContent = '☰';
            });
        });

        // --- 4. SCROLL ANIMATIONS (Intersection Observer) ---
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        revealElements.forEach(el => revealObserver.observe(el));

    </script>
</body>
</html>