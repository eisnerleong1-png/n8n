<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret de Tanà | Hôtel de Charme & Day Use</title>
    <meta name="description" content="L'Évasion Discrète et Confortable au Cœur de Tana. Service continu 24h/24. Chambres premium pour repos ou nuitée.">
    
    <!-- Google Fonts: Playfair Display (Luxe) & Montserrat (Moderne) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary: #4B2C50; /* Violet Profond */
            --primary-light: #6a4270;
            --accent: #D13562; /* Rose Vif */
            --accent-hover: #b02a50;
            --neutral: #F4F4F4; /* Blanc cassé */
            --text-dark: #2c2c2c;
            --text-light: #ffffff;
            --transition: all 0.3s ease;
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
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
            font-family: 'Montserrat', sans-serif;
            background-color: var(--neutral);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
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
            padding: 0 15px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .text-center { text-align: center; }
        .text-accent { color: var(--accent); }
        .bg-primary { background-color: var(--primary); color: var(--text-light); }

        /* Animation Classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 15px 0;
            background: transparent; /* Start transparent */
        }

        header.scrolled {
            background: rgba(75, 44, 80, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Adjust based on logo aspect ratio */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            color: var(--text-light);
            font-weight: 500;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        /* Status Indicator */
        .status-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            color: var(--text-light);
            margin-left: 20px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background-color: #2ecc71;
            border-radius: 50%;
            margin-right: 8px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(46, 204, 113, 0); }
            100% { box-shadow: 0 0 0 0 rgba(46, 204, 113, 0); }
        }

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        #hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('https://images.unsplash.com/photo-1590490359683-65813b23b9ca?q=80&w=2574&auto=format&fit=crop') no-repeat center center/cover;
            text-align: center;
            padding-top: 80px; /* Prevent header overlap */
        }

        /* Overlay Sombre pour contraste */
        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(75, 44, 80, 0.9) 0%, rgba(75, 44, 80, 0.6) 50%, rgba(75, 44, 80, 0.8) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--text-light);
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 15px 40px;
            background-color: var(--accent);
            color: var(--text-light);
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(209, 53, 98, 0.4);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(209, 53, 98, 0.6);
        }

        /* --- FEATURES SECTION --- */
        #features {
            background-color: #fff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .section-title .line {
            width: 60px;
            height: 3px;
            background-color: var(--accent);
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            background: #fff;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* --- PRICING SECTION --- */
        #pricing {
            background-color: var(--neutral);
        }

        .pricing-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .pricing-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
            max-width: 450px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .card-img {
            height: 250px;
            width: 100%;
            position: relative;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--primary);
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .card-content {
            padding: 30px;
            text-align: center;
        }

        .card-content h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .price {
            font-size: 1.5rem;
            color: var(--accent);
            font-weight: 700;
            margin: 15px 0;
            display: block;
        }

        .price span {
            font-size: 1rem;
            color: #777;
            font-weight: 400;
        }

        .card-content p {
            color: #666;
            margin-bottom: 25px;
        }

        /* --- GALLERY SECTION --- */
        #gallery {
            background-color: #fff;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            height: 300px;
            border-radius: 8px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(75, 44, 80, 0.4);
            opacity: 0;
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay i {
            color: #fff;
            font-size: 2rem;
        }

        /* --- LOCATION SECTION --- */
        #location {
            background: var(--neutral);
        }

        .location-wrapper {
            display: flex;
            flex-wrap: wrap;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .map-container {
            flex: 1;
            min-width: 300px;
            height: 400px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .location-info {
            flex: 1;
            min-width: 300px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .location-info h3 {
            color: var(--primary);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .info-item i {
            color: var(--accent);
            font-size: 1.2rem;
            margin-right: 15px;
            margin-top: 5px;
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary);
            color: var(--text-light);
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .footer-col p {
            opacity: 0.8;
            margin-bottom: 10px;
        }

        .footer-socials {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .footer-socials a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .footer-socials a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* --- STICKY MOBILE BUTTON --- */
        .sticky-mobile-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            display: none; /* Hidden on desktop by default */
        }

        .call-btn-float {
            background: var(--accent);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 5px 20px rgba(209, 53, 98, 0.5);
            animation: pulse-btn 2s infinite;
        }

        @keyframes pulse-btn {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(209, 53, 98, 0.7); }
            70% { transform: scale(1.1); box-shadow: 0 0 0 15px rgba(209, 53, 98, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(209, 53, 98, 0); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.2rem; }
            
            header { background: rgba(75, 44, 80, 0.95); padding: 10px 0; }
            
            .menu-toggle { display: block; }
            
            nav {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--primary);
                padding: 20px;
                clip-path: circle(0% at 100% 0);
                transition: 0.5s ease-in-out;
            }

            nav.active {
                clip-path: circle(150% at 100% 0);
            }

            nav ul {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .sticky-mobile-cta { display: block; }

            .location-wrapper { flex-direction: column; }
            .map-container, .location-info { min-width: 100%; }
            .map-container { height: 250px; }
        }

        /* LIGHTBOX SIMPLE */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            align-items: center;
            justify-content: center;
        }
        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border: 2px solid #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }
        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <!-- STICKY MOBILE CTA -->
    <div class="sticky-mobile-cta">
        <a href="tel:+261340000000" class="call-btn-float" aria-label="Appeler maintenant">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo-container" id="logo-wrapper">
                <!-- Logo injected via JS -->
            </div>
            <div class="menu-toggle" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <nav id="nav-menu">
                <ul>
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#features">Services</a></li>
                    <li><a href="#pricing">Tarifs</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#location">Contact</a></li>
                </ul>
            </nav>
            <div class="status-badge hidden-mobile">
                <div class="status-dot"></div>
                <span>Ouvert 24h/24</span>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="hero">
        <div class="hero-content fade-in-up">
            <h1>L'Évasion Discrète et Confortable au Cœur de Tanà</h1>
            <p>Service continu 7j/7. Que ce soit pour une pause détente ou une nuit complète, nous vous accueillons à toute heure avec discrétion et sécurité.</p>
            <a href="#location" class="btn">Réserver Maintenant</a>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section id="features" class="section-padding">
        <div class="container">
            <div class="section-title fade-in-up">
                <h2>Pourquoi choisir Secret de Tanà ?</h2>
                <div class="line"></div>
            </div>
            <div class="features-grid">
                <div class="feature-card fade-in-up">
                    <i class="fas fa-clock feature-icon"></i>
                    <h3>Disponibilité Totale</h3>
                    <p>Accueil assuré jour et nuit, check-in flexible à toute heure pour s'adapter à votre rythme.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <i class="fas fa-sparkles feature-icon"></i>
                    <h3>Hygiène Irréprochable</h3>
                    <p>Chambres nettoyées et désinfectées méticuleusement après chaque passage.</p>
                </div>
                <div class="feature-card fade-in-up">
                    <i class="fas fa-user-shield feature-icon"></i>
                    <h3>Discrétion & Sécurité</h3>
                    <p>Un lieu calme avec parking sécurisé, garantissant le respect total de votre vie privée.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING SECTION -->
    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="section-title fade-in-up">
                <h2>Nos Formules</h2>
                <div class="line"></div>
            </div>
            <div class="pricing-container">
                <!-- Short Stay -->
                <div class="pricing-card fade-in-up">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1617325247661-675ab4b64ae8?q=80&w=2670&auto=format&fit=crop" alt="Coin détente">
                        <span class="card-tag">Short Stay</span>
                    </div>
                    <div class="card-content">
                        <h3>La Pause Détente</h3>
                        <p>Idéal pour quelques heures de repos en journée ou en soirée.</p>
                        <span class="price">20 000 Ar <span>/ heure</span></span>
                        <a href="tel:+261340000000" class="btn">Voir disponibilités</a>
                    </div>
                </div>
                <!-- Night Stay -->
                <div class="pricing-card fade-in-up">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2670&auto=format&fit=crop" alt="Chambre nuitée">
                        <span class="card-tag">Long Stay</span>
                    </div>
                    <div class="card-content">
                        <h3>La Nuitée</h3>
                        <p>Profitez d'une nuit complète de sommeil réparateur dans un confort absolu.</p>
                        <span class="price">60 000 Ar <span>/ nuit</span></span>
                        <a href="tel:+261340000000" class="btn">Réserver ma nuit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" class="section-padding">
        <div class="container">
            <div class="section-title fade-in-up">
                <h2>Ambiance & Confort</h2>
                <div class="line"></div>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item fade-in-up" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=2670&auto=format&fit=crop" alt="Salle de bain moderne">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item fade-in-up" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1505693416388-b0346efee749?q=80&w=2670&auto=format&fit=crop" alt="Lit confortable">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
                <div class="gallery-item fade-in-up" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1616594039964-40891a90969d?q=80&w=2680&auto=format&fit=crop" alt="Détail décoration">
                    <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCATION SECTION -->
    <section id="location" class="section-padding">
        <div class="container">
            <div class="section-title fade-in-up">
                <h2>Nous Trouver</h2>
                <div class="line"></div>
            </div>
            <div class="location-wrapper fade-in-up">
                <div class="map-container">
                    <!-- Google Maps Placeholder centered on Tana -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60442.22271607567!2d47.49133884841797!3d-18.887304499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a24795327%3A0x28636b13629471f7!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="location-info">
                    <h3>Secret de Tanà</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Lot X 1234, Antananarivo, Madagascar.<br><small>À 5 minutes du centre ville.</small></p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+261 34 00 000 00</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>contact@secret-tana.mg</p>
                    </div>
                    <a href="https://maps.google.com" target="_blank" class="btn" style="margin-top: 10px; width: 100%; text-align: center;">Itinéraire GPS</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h4 style="color:#fff;">Secret de Tanà</h4>
                    <p>Votre refuge de confort et de discrétion à Antananarivo.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact Rapide</h4>
                    <p>+261 34 00 000 00</p>
                    <div class="footer-socials">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Secret de Tanà. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox-modal" class="lightbox">
        <span class="close-lightbox" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" src="" alt="Agrandissement">
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- CONSTANTS ---
        const LOGO_URL = "logo.jpg";

        // --- INIT ---
        document.addEventListener('DOMContentLoaded', () => {
            // Insert Logo
            const logoWrapper = document.getElementById('logo-wrapper');
            logoWrapper.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Secret de Tanà Logo"></a>`;

            // Mobile Menu Logic
            const menuBtn = document.getElementById('mobile-menu-btn');
            const navMenu = document.getElementById('nav-menu');
            
            menuBtn.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                menuBtn.querySelector('i').classList.toggle('fa-times');
                menuBtn.querySelector('i').classList.toggle('fa-bars');
            });

            // Close menu when clicking a link
            document.querySelectorAll('nav ul li a').forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('active');
                    menuBtn.querySelector('i').classList.remove('fa-times');
                    menuBtn.querySelector('i').classList.add('fa-bars');
                });
            });

            // Scroll Animation (Fade In Up)
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.fade-in-up').forEach(el => {
                observer.observe(el);
            });

            // Sticky Header Background
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });

        // --- LIGHTBOX FUNCTIONS ---
        function openLightbox(element) {
            const modal = document.getElementById('lightbox-modal');
            const modalImg = document.getElementById('lightbox-img');
            const src = element.querySelector('img').src;
            
            modal.style.display = "flex";
            modalImg.src = src;
        }

        function closeLightbox() {
            document.getElementById('lightbox-modal').style.display = "none";
        }

        // Close lightbox on clicking outside image
        document.getElementById('lightbox-modal').addEventListener('click', function(e) {
            if(e.target === this) {
                closeLightbox();
            }
        });
    </script>
</body>
</html>