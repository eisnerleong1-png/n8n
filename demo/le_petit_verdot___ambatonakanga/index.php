<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Millésime - Bar à Vin & Bistronomie | Antananarivo</title>
    <meta name="description" content="Vins d'exception et cuisine bistronomique dans le cadre historique d'Ambatonakanga. Le rendez-vous des épicuriens à Tana.">
    
    <!-- Google Fonts: Playfair Display (Luxe/Serif) & Lato (Lisibilité) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #792235; /* Rouge Vin */
            --color-primary-dark: #5a1826;
            --color-text: #2C2C2C;
            --color-text-light: #727272;
            --color-bg: #F9F7F2; /* Crème/Blanc Cassé */
            --color-white: #ffffff;
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Lato', sans-serif;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px rgba(0,0,0,0.05);
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
            color: var(--color-text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- TYPOGRAPHY --- */
        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            font-weight: 700;
            color: var(--color-text);
        }

        .text-accent {
            color: var(--color-primary);
        }

        /* --- UI COMPONENTS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 15px 35px;
            font-family: var(--font-sans);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        .btn-primary:hover {
            background-color: var(--color-primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border-color: var(--color-text-light);
            color: var(--color-text-light);
        }

        .btn-outline:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
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
            background-color: rgba(249, 247, 242, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Ajustement hauteur logo */
            width: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }
        
        header.scrolled .logo-img {
             filter: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: var(--color-white);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
        }

        header.scrolled nav a {
            color: var(--color-text);
        }

        nav a:hover {
            color: var(--color-primary);
        }

        .mobile-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .mobile-toggle {
            color: var(--color-text);
        }

        /* --- HERO SECTION --- */
        #hero {
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
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Image de vin HD Unsplash */
            background-image: url('https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?q=80&w=2070&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            z-index: 1;
            /* Animation Ken Burns pour simuler la vidéo loop */
            animation: zoomSlow 20s infinite alternate;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.4));
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            color: var(--color-white);
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Sécurité pour ne pas chevaucher le header */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease-out forwards 0.5s;
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 300;
            margin-bottom: 40px;
            letter-spacing: 0.5px;
        }

        /* --- SOCIAL PROOF --- */
        #social-proof {
            background-color: var(--color-white);
            padding: 30px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            text-align: center;
        }

        .proof-content {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            color: var(--color-text-light);
            font-size: 0.9rem;
            font-family: var(--font-serif);
            font-style: italic;
        }

        .proof-item i {
            color: #FFD700;
            margin-right: 5px;
        }

        /* --- SECTIONS GENERAL --- */
        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 3rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 2px;
            background: var(--color-primary);
            margin: 15px auto 0;
        }

        .section-title p {
            color: var(--color-text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- ATMOSPHERE --- */
        #atmosphere {
            background-color: var(--color-bg);
        }

        .atmosphere-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .atmosphere-text h3 {
            font-size: 2.5rem;
            margin-bottom: 25px;
        }

        .atmosphere-text p {
            color: var(--color-text-light);
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .atmosphere-img-wrapper {
            position: relative;
            height: 500px;
            overflow: hidden;
            border-radius: 4px;
        }

        .atmosphere-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s ease;
        }

        .atmosphere-img-wrapper:hover img {
            transform: scale(1.05);
        }

        /* --- MENU CARDS --- */
        #menu-cards {
            background-color: var(--color-white);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .card {
            position: relative;
            background: var(--color-bg);
            overflow: hidden;
            border-radius: 2px;
            transition: var(--transition);
            box-shadow: var(--shadow-card);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .card-img {
            height: 300px;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 40px;
            text-align: center;
        }

        .card-content h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--color-primary);
        }

        .card-content p {
            color: var(--color-text-light);
            margin-bottom: 25px;
        }

        .price-tag {
            display: block;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--color-text);
        }

        /* --- PRIVATISATION --- */
        #privatization {
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1514362545857-3bc16549766b?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--color-white);
            text-align: center;
            padding: 120px 0;
        }

        #privatization h2 {
            color: var(--color-white);
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #privatization p {
            max-width: 600px;
            margin: 0 auto 40px;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        #privatization .btn-outline {
            border-color: var(--color-white);
            color: var(--color-white);
        }

        #privatization .btn-outline:hover {
            background-color: var(--color-white);
            color: var(--color-text);
        }

        /* --- LOCATION & FOOTER --- */
        #location {
            padding-bottom: 0;
            background-color: var(--color-bg);
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }
        
        @media (max-width: 768px) {
            .footer-top {
                grid-template-columns: 1fr;
            }
        }

        .map-wrapper {
            height: 100%;
            min-height: 400px;
            width: 100%;
        }

        .map-wrapper iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(100%) contrast(1.2); /* Style moderne N&B */
        }

        .info-wrapper {
            padding: 60px;
            background-color: #1a1a1a;
            color: var(--color-white);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-wrapper h3 {
            color: var(--color-white);
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .info-item {
            margin-bottom: 25px;
        }

        .info-item h4 {
            color: var(--color-primary);
            font-family: var(--font-sans);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .info-item p {
            color: #b0b0b0;
        }

        .contact-link {
            color: #b0b0b0;
            text-decoration: none;
            transition: 0.3s;
        }

        .contact-link:hover {
            color: var(--color-primary);
        }

        footer.site-footer {
            background-color: #111;
            color: #555;
            text-align: center;
            padding: 20px;
            font-size: 0.8rem;
        }

        /* --- STICKY MOBILE CTA --- */
        #sticky-mobile-cta {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--color-white);
            padding: 15px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            text-align: center;
        }
        
        #sticky-mobile-cta .btn {
            width: 100%;
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomSlow {
            from { transform: scale(1); }
            to { transform: scale(1.15); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .atmosphere-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .atmosphere-img-wrapper {
                order: -1;
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            nav {
                display: none; /* Mobile menu logic to be implemented or simplified */
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--color-white);
                flex-direction: column;
                padding: 20px;
                gap: 15px;
                text-align: center;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            
            nav.active {
                display: flex;
            }

            nav a {
                color: var(--color-text);
                display: block;
                padding: 10px;
            }
            
            .mobile-toggle {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            #sticky-mobile-cta {
                display: block;
            }
            
            /* Add padding bottom to body so content isn't hidden behind sticky CTA */
            body {
                padding-bottom: 80px;
            }
            
            .info-wrapper {
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- Logo injecté via JS -->
            </div>
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <nav id="nav-menu">
                <ul>
                    <li><a href="#atmosphere">L'Expérience</a></li>
                    <li><a href="#menu-cards">La Carte</a></li>
                    <li><a href="#privatization">Privatisation</a></li>
                    <li><a href="#location">Contact</a></li>
                    <!-- Bouton desktop seulement, caché sur mobile via CSS si besoin, 
                         mais ici on le garde dans le menu et on a le sticky bar en plus -->
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Art de la Dégustation au Cœur d'Antananarivo</h1>
            <p>Vins d'exception et cuisine bistronomique dans le cadre historique d'Ambatonakanga.</p>
            <a href="#location" class="btn btn-primary">Réserver une Table</a>
        </div>
    </section>

    <!-- Preuve Sociale -->
    <section id="social-proof">
        <div class="container proof-content">
            <div class="proof-item"><i class="fas fa-star"></i> "Noté 4.8/5 sur TripAdvisor"</div>
            <div class="proof-item"><i class="fas fa-wine-glass"></i> "Le rendez-vous des amateurs de vin"</div>
            <div class="proof-item"><i class="fas fa-shield-alt"></i> "Excellence & Sécurité"</div>
        </div>
    </section>

    <!-- Atmosphère -->
    <section id="atmosphere">
        <div class="container">
            <div class="atmosphere-grid">
                <div class="atmosphere-text">
                    <div class="section-title" style="text-align: left;">
                        <h2>Une parenthèse hors du temps</h2>
                    </div>
                    <p>Échappez au tumulte de la ville. Notre établissement offre une ambiance feutrée et chaleureuse, où le bois et la brique se marient pour créer une atmosphère intimiste.</p>
                    <p>Idéal pour vos rendez-vous d'affaires discrets ou vos dîners romantiques, nous garantissons un service aux standards internationaux.</p>
                </div>
                <div class="atmosphere-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?q=80&w=2070&auto=format&fit=crop" alt="Intérieur Restaurant Ambatonakanga">
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Cartes -->
    <section id="menu-cards">
        <div class="container">
            <div class="section-title">
                <h2>Nos Collections</h2>
                <p>Une rencontre entre le terroir malgache et les grands crus mondiaux.</p>
            </div>
            <div class="cards-grid">
                <!-- Carte Vin -->
                <div class="card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1562601579-599a56191119?q=80&w=2070&auto=format&fit=crop" alt="Cave à Vin">
                    </div>
                    <div class="card-content">
                        <h3>La Cave</h3>
                        <p>Une sélection rigoureuse de vins importés et spiritueux rares.</p>
                        <a href="#" class="btn btn-outline">Voir la Carte des Vins</a>
                    </div>
                </div>
                <!-- Carte Table -->
                <div class="card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop" alt="Plat Gastronomique">
                    </div>
                    <div class="card-content">
                        <h3>La Table</h3>
                        <p>Des produits locaux (Zébu, Foie Gras) sublimés par notre Chef.</p>
                        <span class="price-tag">Plats à partir de 35 000 Ar</span>
                        <a href="#" class="btn btn-outline">Découvrir le Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Privatisation -->
    <section id="privatization">
        <div class="container">
            <h2>Vos Événements Privés</h2>
            <p>Anniversaires, afterworks ou réunions d'entreprise. Privatisez notre espace pour une expérience sur mesure et un service dédié.</p>
            <a href="#location" class="btn btn-outline">Demander un devis</a>
        </div>
    </section>

    <!-- Localisation & Info -->
    <section id="location">
        <div class="footer-top">
            <div class="map-wrapper">
                <!-- Google Maps Embed Placeholder -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.253676837854!2d47.5255!3d-18.9185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e1d5e5b5b5b%3A0x5b5b5b5b5b5b5b5b!2sAmbatonakanga%2C%20Antananarivo!5e0!3m2!1sfr!2smg!4v1620000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="info-wrapper">
                <h3>Nous trouver</h3>
                
                <div class="info-item">
                    <h4>Adresse</h4>
                    <p>Ambatonakanga, Antananarivo 101<br>Madagascar</p>
                </div>

                <div class="info-item">
                    <h4>Horaires</h4>
                    <p>Mardi - Samedi : 17h00 - Minuit<br>Dimanche & Lundi : Fermé</p>
                </div>

                <div class="info-item">
                    <h4>Sécurité</h4>
                    <p><i class="fas fa-parking"></i> Parking sécurisé avec gardien sur place.</p>
                </div>

                <div class="info-item">
                    <h4>Réservation</h4>
                    <p><a href="tel:+261340000000" class="contact-link">+261 34 00 000 00</a></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <p>&copy; 2024 Le Millésime Antananarivo. Tous droits réservés.</p>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div id="sticky-mobile-cta">
        <a href="#location" class="btn btn-primary">Réserver une Table</a>
    </div>

    <script>
        // --- LOGO INTEGRATION (STRICT) ---
        const LOGO_URL = "logo.jpg";
        
        // Insertion du logo
        const logoContainer = document.getElementById('logo-container');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Le Millésime Logo";
        logoImg.className = "logo-img";
        // Ajout d'un lien sur le logo pour retour accueil
        const logoLink = document.createElement('a');
        logoLink.href = "#";
        logoLink.appendChild(logoImg);
        logoContainer.appendChild(logoLink);

        // --- SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- MOBILE MENU ---
        const mobileToggle = document.getElementById('mobile-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close menu when clicking a link
        document.querySelectorAll('#nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').classList.remove('fa-times');
                mobileToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // --- ANIMATION ON SCROLL (Simple Intersection Observer) ---
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Appliquer l'animation aux éléments clés
        document.querySelectorAll('.card, .atmosphere-text, .section-title').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.8s ease-out";
            observer.observe(el);
        });

    </script>
</body>
</html>