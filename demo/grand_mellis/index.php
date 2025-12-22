<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Grand Mellis | Hôtel de Luxe Antananarivo</title>
    
    <!-- Google Fonts: Premium Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ------------------------------------------------------------------
           RESET & VARIABLES
        ------------------------------------------------------------------ */
        :root {
            --color-bg: #EBE1D3; /* Sable Luxe */
            --color-text: #1a1a1a;
            --color-primary: #CE0F3D; /* Rouge Profond */
            --color-white: #ffffff;
            --color-light-gray: #f5f5f5;
            --color-dark-overlay: rgba(0, 0, 0, 0.4);
            
            --font-serif: 'Cormorant Garamond', serif;
            --font-sans: 'Montserrat', sans-serif;
            
            --transition-smooth: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px rgba(0,0,0,0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--color-bg);
            color: var(--color-text);
            font-family: var(--font-sans);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            font-weight: 600;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { width: 100%; height: auto; object-fit: cover; display: block; }

        /* ------------------------------------------------------------------
           UTILITIES & LAYOUT
        ------------------------------------------------------------------ */
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
            display: inline-block;
            padding: 16px 32px;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: var(--transition-smooth);
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        .btn-primary:hover {
            background-color: #a50b30;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(206, 15, 61, 0.3);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--color-text);
            color: var(--color-text);
        }

        .btn-outline:hover {
            background: var(--color-text);
            color: var(--color-white);
        }

        /* ------------------------------------------------------------------
           HEADER
        ------------------------------------------------------------------ */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition-smooth);
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(235, 225, 211, 0.95); /* Matches bg color with opacity */
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 40px;
        }

        nav ul li a {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--color-white); /* White by default on Hero */
            transition: var(--transition-smooth);
            position: relative;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--color-primary);
            transition: var(--transition-smooth);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        header.scrolled nav ul li a {
            color: var(--color-text);
        }

        .menu-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .menu-toggle {
            color: var(--color-text);
        }

        /* ------------------------------------------------------------------
           HERO SECTION
        ------------------------------------------------------------------ */
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
            /* Photo High-End Lobby/Luxe */
            background-image: url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2070&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            z-index: -2;
            animation: zoomEffect 20s infinite alternate;
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
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6));
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: var(--color-white);
            max-width: 900px;
            padding: 0 20px;
            margin-top: 80px; /* Prevent overlap with header */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 24px;
            letter-spacing: -1px;
        }

        .hero-content p {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* ------------------------------------------------------------------
           SOCIAL PROOF
        ------------------------------------------------------------------ */
        .social-proof {
            background-color: #fff;
            padding: 40px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .badges-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 15px;
            opacity: 0.7;
            transition: 0.3s;
        }

        .trust-item:hover { opacity: 1; }

        .trust-item i {
            font-size: 2rem;
            color: var(--color-primary);
        }

        .trust-text span {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .trust-text small {
            font-size: 0.75rem;
            color: #666;
        }

        /* ------------------------------------------------------------------
           ACCOMMODATION (SLIDER)
        ------------------------------------------------------------------ */
        .rooms-header {
            margin-bottom: 60px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .rooms-header h2 {
            font-size: 3rem;
            color: var(--color-text);
        }

        .room-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition-smooth);
            group: card;
        }

        .room-card:hover {
            transform: translateY(-10px);
        }

        .room-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .room-image img {
            transition: var(--transition-smooth);
        }

        .room-card:hover .room-image img {
            transform: scale(1.05);
        }

        .room-details {
            padding: 30px;
        }

        .room-details h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .room-features {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.85rem;
            color: #666;
        }

        .room-features li i {
            color: var(--color-primary);
            margin-right: 5px;
        }

        .room-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .price-tag {
            font-family: var(--font-serif);
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--color-primary);
        }
        
        .price-tag span {
            font-size: 0.8rem;
            color: #999;
            font-family: var(--font-sans);
            font-weight: 400;
        }

        /* ------------------------------------------------------------------
           BENTO GRID EXPERIENCE
        ------------------------------------------------------------------ */
        .experience-section {
            background-color: #fff;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(2, 350px);
            gap: 20px;
        }

        .bento-item {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
        }

        .bento-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .bento-item:hover img {
            transform: scale(1.1);
        }

        .bento-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            transform: translateY(10px);
            transition: var(--transition-smooth);
        }

        .bento-item:hover .bento-overlay {
            transform: translateY(0);
        }

        /* Layout Configuration */
        .item-restaurant {
            grid-column: span 8; /* Large block */
            grid-row: span 2;
        }
        
        .item-spa {
            grid-column: span 4;
            grid-row: span 1;
        }

        .item-gym {
            grid-column: span 4;
            grid-row: span 1;
        }

        /* ------------------------------------------------------------------
           ABOUT
        ------------------------------------------------------------------ */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-content h2 {
            font-size: 3rem;
            margin-bottom: 30px;
            color: var(--color-text);
        }

        .about-content p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            border-radius: 4px;
            box-shadow: 20px 20px 0px rgba(206, 15, 61, 0.1); /* Subtle design element */
        }

        /* ------------------------------------------------------------------
           FOOTER
        ------------------------------------------------------------------ */
        footer {
            background-color: #1a1a1a;
            color: #fff;
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--color-primary);
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #ccc;
        }

        .map-container {
            width: 100%;
            height: 250px;
            background: #333;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            padding: 20px 0;
            text-align: center;
            font-size: 0.8rem;
            color: #666;
        }

        /* ------------------------------------------------------------------
           ANIMATIONS
        ------------------------------------------------------------------ */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* ------------------------------------------------------------------
           RESPONSIVE
        ------------------------------------------------------------------ */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 3rem; }
            .bento-grid { grid-template-columns: repeat(2, 1fr); grid-template-rows: auto; }
            .item-restaurant { grid-column: span 2; grid-row: span 1; height: 400px; }
            .item-spa, .item-gym { grid-column: span 1; height: 300px; }
            .about-grid { grid-template-columns: 1fr; gap: 40px; }
            .footer-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            nav { display: none; } /* Simplified for single file demo, normally hamburger */
            .menu-toggle { display: block; }
            
            .hero-content h1 { font-size: 2.5rem; }
            .hero-content { margin-top: 60px; }
            
            .rooms-header { flex-direction: column; align-items: flex-start; gap: 20px; }
            
            .bento-grid { display: flex; flex-direction: column; }
            .bento-item { height: 300px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="site-logo" alt="Le Grand Mellis - Luxury Hotel" />
            </a>
            
            <nav>
                <ul>
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#rooms">Chambres</a></li>
                    <li><a href="#experience">Expérience</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 20px; margin-left: 10px;">Réserver</a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        
        <div class="container hero-content">
            <h1>L'Art de l'Hospitalité de Luxe<br>au Cœur d'Antananarivo</h1>
            <p>Séjournez dans un cadre d'exception alliant élégance moderne et tradition malgache.<br>Spa, Gastronomie et Confort Absolu.</p>
            <a href="#rooms" class="btn btn-primary">Réserver mon Séjour</a>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <div class="container">
            <div class="badges-container">
                <div class="trust-item">
                    <i class="fas fa-star"></i>
                    <div class="trust-text">
                        <span>Excellent 4.8/5</span>
                        <small>Sur TripAdvisor</small>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-award"></i>
                    <div class="trust-text">
                        <span>Voyageur Choice 2024</span>
                        <small>Booking.com</small>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-shield-alt"></i>
                    <div class="trust-text">
                        <span>Sécurité Certifiée</span>
                        <small>Standard International</small>
                    </div>
                </div>
                <div class="trust-text" style="font-family: var(--font-serif); font-size: 1.2rem; color: #888;">
                    "Ils nous font confiance"
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation -->
    <section id="rooms" class="section-padding">
        <div class="container">
            <div class="rooms-header reveal">
                <div>
                    <h4 style="color: var(--color-primary); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 10px;">Hébergement</h4>
                    <h2>Nos Suites & Chambres d'Exception</h2>
                </div>
                <a href="#" class="btn btn-outline">Voir toutes les chambres</a>
            </div>

            <div class="room-slider reveal">
                <!-- Room 1 -->
                <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop" alt="Suite Royale">
                    </div>
                    <div class="room-details">
                        <h3>Suite Royale</h3>
                        <ul class="room-features">
                            <li><i class="fas fa-wifi"></i> Fibre</li>
                            <li><i class="fas fa-wind"></i> A/C</li>
                            <li><i class="fas fa-city"></i> Vue Ville</li>
                        </ul>
                        <p style="font-size: 0.9rem; color: #555;">Un espace de 60m² conçu pour l'élite. Salon privé, salle de bain en marbre et literie King Size.</p>
                        <div class="room-price">
                            <div class="price-tag">650 000 MGA<span> / nuit</span></div>
                            <a href="#" style="color: var(--color-primary); font-weight: 600; font-size: 0.9rem;">Détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Room 2 -->
                <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-c87295ec4270?q=80&w=1995&auto=format&fit=crop" alt="Chambre Deluxe">
                    </div>
                    <div class="room-details">
                        <h3>Chambre Deluxe</h3>
                        <ul class="room-features">
                            <li><i class="fas fa-wifi"></i> Fibre</li>
                            <li><i class="fas fa-wind"></i> A/C</li>
                            <li><i class="fas fa-coffee"></i> Nespresso</li>
                        </ul>
                        <p style="font-size: 0.9rem; color: #555;">L'équilibre parfait entre confort et fonctionnalité pour le voyageur d'affaires exigeant.</p>
                        <div class="room-price">
                            <div class="price-tag">450 000 MGA<span> / nuit</span></div>
                            <a href="#" style="color: var(--color-primary); font-weight: 600; font-size: 0.9rem;">Détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                 <!-- Room 3 -->
                 <div class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?q=80&w=1974&auto=format&fit=crop" alt="Suite Familiale">
                    </div>
                    <div class="room-details">
                        <h3>Suite Familiale</h3>
                        <ul class="room-features">
                            <li><i class="fas fa-users"></i> 4 Pers</li>
                            <li><i class="fas fa-tv"></i> Smart TV</li>
                            <li><i class="fas fa-bath"></i> Baignoire</li>
                        </ul>
                        <p style="font-size: 0.9rem; color: #555;">Deux chambres connectées offrant intimité et convivialité pour vos séjours en famille.</p>
                        <div class="room-price">
                            <div class="price-tag">550 000 MGA<span> / nuit</span></div>
                            <a href="#" style="color: var(--color-primary); font-weight: 600; font-size: 0.9rem;">Détails <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience / Bento Grid -->
    <section id="experience" class="section-padding experience-section">
        <div class="container">
            <div class="text-center" style="margin-bottom: 50px;">
                <h4 style="color: var(--color-primary); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 10px;">Art de Vivre</h4>
                <h2 style="font-size: 2.5rem;">Une Expérience 5 Étoiles</h2>
            </div>

            <div class="bento-grid reveal">
                <!-- Restaurant -->
                <div class="bento-item item-restaurant">
                    <img src="https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?q=80&w=2070&auto=format&fit=crop" alt="Gastronomie">
                    <div class="bento-overlay">
                        <h3>Le Restaurant Gastronomique</h3>
                        <p>Une fusion subtile entre saveurs locales et haute cuisine internationale.</p>
                    </div>
                </div>

                <!-- Spa -->
                <div class="bento-item item-spa">
                    <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?q=80&w=2070&auto=format&fit=crop" alt="Spa et Bien-être">
                    <div class="bento-overlay">
                        <h3>Le Spa & Bien-être</h3>
                        <p>Détente absolue dans un cadre zen.</p>
                    </div>
                </div>

                <!-- Gym -->
                <div class="bento-item item-gym">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop" alt="Salle de Sport">
                    <div class="bento-overlay">
                        <h3>Fitness & Gym</h3>
                        <p>Équipements Technogym dernière génération.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding" style="background-color: #EBE1D3;">
        <div class="container">
            <div class="about-grid reveal">
                <div class="about-content">
                    <h4 style="color: var(--color-primary); letter-spacing: 2px; text-transform: uppercase; font-size: 0.8rem; margin-bottom: 10px;">Notre Histoire</h4>
                    <h2>Le Grand Mellis :<br>Une Institution</h2>
                    <p>Situé stratégiquement au cœur d'Antananarivo, Le Grand Mellis incarne l'excellence hôtelière depuis plus de deux décennies. Notre établissement est le refuge privilégié des diplomates, hommes d'affaires et voyageurs en quête d'un service irréprochable.</p>
                    <p>Au-delà du luxe, nous vous offrons une tranquillité d'esprit totale et une sécurité aux normes internationales.</p>
                    <img src="signature_placeholder.png" alt="Signature Directeur" style="width: 150px; opacity: 0.6; margin-top: 20px;">
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?q=80&w=2070&auto=format&fit=crop" alt="Entrée Hôtel">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Le Grand Mellis</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> 3 Rue de l'Indépendance, Antananarivo 101</li>
                        <li><i class="fas fa-phone"></i> +261 20 22 234 25</li>
                        <li><i class="fas fa-envelope"></i> reservation@legrandmellis.com</li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="contact-info">
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                        <li><a href="#">Recrutement</a></li>
                        <li><a href="#">Presse</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Localisation</h4>
                    <div class="map-container">
                        <!-- Static Map Image for aesthetic purposes as iframe requires API key or embed permission -->
                        <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?q=80&w=2062&auto=format&fit=crop" alt="Map Location" style="opacity: 0.6;">
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                &copy; 2024 Le Grand Mellis. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // INTEGRATION DU LOGO (INSTRUCTION OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        
        // Exécution au chargement
        document.addEventListener('DOMContentLoaded', () => {
            // Set Logo Source
            const logoImg = document.getElementById('site-logo');
            if(logoImg) {
                logoImg.src = LOGO_URL;
            }

            // Navbar Scroll Effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Scroll Reveal Animation
            const observerOptions = {
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal');
            revealElements.forEach(el => observer.observe(el));

            // Smooth Scroll for Anchors
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>