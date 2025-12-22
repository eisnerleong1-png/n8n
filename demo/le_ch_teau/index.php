<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Château | Réceptions de Prestige & Hôtellerie à Ambohimalaza</title>
    
    <!-- Google Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            /* Palette Client */
            --color-bg-cream: #FDFCF8; /* Version très claire de #F5DE98 pour fond lisible */
            --color-bg-accent: #F9F1D8; /* Accent crème */
            --color-gold-text: #966624; /* Marron Doré */
            --color-gold-vivid: #D3A74F; /* Or Vif */
            --color-dark: #1A1A1A;
            --color-white: #FFFFFF;
            
            /* Spacing & UI */
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Plus Jakarta Sans', sans-serif;
            --container-width: 1200px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 20px 40px -10px rgba(150, 102, 36, 0.15);
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
            background-color: var(--color-bg-cream);
            color: var(--color-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            color: var(--color-gold-text);
            font-weight: 700;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* -----------------------------------------------------------
           UTILITIES & ANIMATIONS
        ----------------------------------------------------------- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }

        /* Fade In Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: var(--transition);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* -----------------------------------------------------------
           BUTTONS
        ----------------------------------------------------------- */
        .btn {
            display: inline-block;
            padding: 16px 36px;
            font-size: 0.95rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            border-radius: 2px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background-color: var(--color-gold-vivid);
            color: var(--color-white);
            border: 1px solid var(--color-gold-vivid);
            box-shadow: 0 10px 20px rgba(211, 167, 79, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--color-gold-text);
            border-color: var(--color-gold-text);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(150, 102, 36, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--color-white);
            border: 1px solid var(--color-white);
        }

        .btn-outline:hover {
            background-color: var(--color-white);
            color: var(--color-gold-text);
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
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
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 60px; /* Taille ajustée pour élégance */
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            gap: 40px;
        }

        nav a {
            font-size: 0.9rem;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 1px;
            color: var(--color-white);
            transition: 0.3s;
        }

        header.scrolled nav a {
            color: var(--color-gold-text);
        }

        nav a:hover {
            color: var(--color-gold-vivid);
        }

        .hamburger {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .hamburger {
            color: var(--color-gold-text);
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2574&auto=format&fit=crop') no-repeat center center/cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 20px;
            margin-top: 80px; /* Prevents overlap with header on mobile */
        }

        .hero-subtitle {
            font-family: var(--font-sans);
            color: var(--color-gold-vivid);
            text-transform: uppercase;
            letter-spacing: 4px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 20px;
            display: block;
        }

        .hero h1 {
            font-size: 3.5rem;
            color: var(--color-white);
            line-height: 1.2;
            margin-bottom: 25px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero h2 {
            font-family: var(--font-sans);
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            font-weight: 300;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /* -----------------------------------------------------------
           TRUST / SOCIAL PROOF
        ----------------------------------------------------------- */
        .trust-bar {
            background-color: var(--color-white);
            padding: 30px 0;
            border-bottom: 1px solid rgba(150, 102, 36, 0.1);
        }

        .trust-content {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: var(--font-serif);
            color: var(--color-gold-text);
            font-size: 1.1rem;
            font-style: italic;
        }

        .trust-item i {
            color: var(--color-gold-vivid);
        }

        /* -----------------------------------------------------------
           SERVICES (BENTO GRID)
        ----------------------------------------------------------- */
        .services-section {
            background-color: var(--color-bg-cream);
        }

        .section-title {
            margin-bottom: 60px;
            position: relative;
        }

        .section-title span {
            color: var(--color-gold-vivid);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
            font-weight: 600;
            font-family: var(--font-sans);
        }

        .section-title h3 {
            font-size: 2.5rem;
            margin-top: 10px;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background: var(--color-white);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
            group: hover;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .card-image {
            height: 250px;
            width: 100%;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .service-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-content h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-content p {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .price-tag {
            display: block;
            margin-bottom: 20px;
            font-family: var(--font-serif);
            color: var(--color-gold-vivid);
            font-weight: 600;
        }

        .card-link {
            color: var(--color-gold-text);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: 0.3s;
        }

        .card-link:hover {
            gap: 10px;
            color: var(--color-gold-vivid);
        }

        /* -----------------------------------------------------------
           IMMERSIVE GALLERY
        ----------------------------------------------------------- */
        .immersive-gallery {
            padding: 0;
            position: relative;
            background: var(--color-dark);
        }

        .gallery-header {
            padding: 80px 20px 40px;
            text-align: center;
        }
        
        .gallery-header h3 {
            color: var(--color-white);
        }

        .gallery-scroller {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 0;
            scrollbar-width: none; /* Firefox */
        }
        
        .gallery-scroller::-webkit-scrollbar {
            display: none; /* Chrome/Safari */
        }

        .gallery-item {
            min-width: 40vw;
            height: 60vh;
            position: relative;
            scroll-snap-align: center;
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
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 40px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            opacity: 0;
            transition: 0.4s;
            transform: translateY(20px);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-overlay h4 {
            color: var(--color-white);
            font-size: 1.5rem;
        }

        /* -----------------------------------------------------------
           ABOUT SECTION
        ----------------------------------------------------------- */
        .about-section {
            background-color: var(--color-bg-accent);
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .about-container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .about-img {
            flex: 1;
            min-width: 400px;
            height: 600px;
        }

        .about-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-text {
            flex: 1;
            min-width: 400px;
            padding: 80px;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* -----------------------------------------------------------
           LEAD GEN / CONTACT
        ----------------------------------------------------------- */
        .contact-section {
            background: url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=2670&auto=format&fit=crop') no-repeat center center/cover;
            position: relative;
            padding: 120px 0;
        }

        .contact-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(26, 26, 26, 0.85);
        }

        .form-container {
            position: relative;
            z-index: 2;
            background: var(--color-white);
            max-width: 700px;
            margin: 0 auto;
            padding: 60px;
            border-radius: 4px;
            text-align: center;
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
            border-top: 5px solid var(--color-gold-vivid);
        }

        .form-container h3 {
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .form-container p {
            color: #777;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            background: #f9f9f9;
            font-family: var(--font-sans);
            font-size: 1rem;
            transition: 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-gold-vivid);
            background: #fff;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 30px;
        }

        .radio-option {
            cursor: pointer;
        }

        .radio-option input {
            display: none;
        }

        .radio-option span {
            display: block;
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 50px;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .radio-option input:checked + span {
            background-color: var(--color-gold-vivid);
            color: var(--color-white);
            border-color: var(--color-gold-vivid);
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background-color: var(--color-dark);
            color: #aaa;
            padding: 60px 0 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .footer-content {
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-logo {
            filter: brightness(0) invert(1);
            height: 50px;
            margin-bottom: 10px;
        }

        .footer-links a {
            margin: 0 15px;
            transition: 0.3s;
        }
        .footer-links a:hover { color: var(--color-gold-vivid); }

        .copyright {
            border-top: 1px solid #333;
            padding-top: 20px;
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 1024px) {
            .gallery-item { min-width: 60vw; }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .bento-grid { grid-template-columns: 1fr; }
            
            .nav-container { padding: 0 10px; }
            .hamburger { display: block; z-index: 1001; }
            
            nav ul {
                position: fixed;
                top: 0; right: -100%;
                width: 70%;
                height: 100vh;
                background: var(--color-white);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                box-shadow: -5px 0 20px rgba(0,0,0,0.1);
            }
            nav ul.active { right: 0; }
            nav a { color: var(--color-dark); font-size: 1.2rem; }
            
            .about-container { flex-direction: column; }
            .about-text { padding: 40px 20px; }
            .about-img { height: 300px; width: 100%; }

            .gallery-item { min-width: 85vw; }
            .form-container { padding: 30px 20px; }
            .hero-buttons { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="logo-img" alt="Le Château Logo" class="logo-img">
            </a>
            <div class="hamburger" id="hamburger">
                <i class="fa-solid fa-bars"></i>
            </div>
            <nav>
                <ul id="nav-menu">
                    <li><a href="#services">Nos Univers</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#contact" style="color: var(--color-gold-vivid);">Réserver</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content reveal">
            <span class="hero-subtitle">Le Luxe à Ambohimalaza</span>
            <h1>L'Élégance à l'État Pur :<br>Sublimez vos Événements</h1>
            <h2>Un cadre d'exception réunissant gastronomie, hôtellerie de charme et espaces de réception grandioses à quelques minutes de Tana.</h2>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Demander un Devis</a>
                <a href="#services" class="btn btn-outline">Découvrir le Lieu</a>
            </div>
        </div>
    </section>

    <!-- Trust / Social Proof -->
    <section class="trust-bar">
        <div class="container text-center">
            <p style="margin-bottom: 15px; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px; color: #999;">Ils nous font confiance</p>
            <div class="trust-content">
                <div class="trust-item">
                    <i class="fa-solid fa-star"></i>
                    <span>4.9/5 Note Client</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-champagne-glasses"></i>
                    <span>+200 Mariages d'Exception</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-award"></i>
                    <span>Le Choix de l'Élite</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services (Bento Grid) -->
    <section id="services" class="section-padding services-section">
        <div class="container">
            <div class="section-title text-center reveal">
                <span>Nos Univers</span>
                <h3>L'Excellence sous toutes ses formes</h3>
            </div>

            <div class="bento-grid">
                <!-- Service 1: Event -->
                <div class="service-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2670&auto=format&fit=crop" alt="Salle de réception mariage">
                    </div>
                    <div class="card-content">
                        <div>
                            <h4>Événementiel & Réceptions</h4>
                            <p>Une salle majestueuse et des jardins féeriques pour célébrer le plus beau jour de votre vie ou vos séminaires de prestige.</p>
                        </div>
                        <a href="#contact" class="card-link">Voir les capacités <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 2: Gastronomy -->
                <div class="service-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=2574&auto=format&fit=crop" alt="Gastronomie Fine">
                    </div>
                    <div class="card-content">
                        <div>
                            <h4>Gastronomie & Détente</h4>
                            <p>Restaurant, Bar et Salon de thé raffinés. Savourez une cuisine locale revisitée dans un cadre apaisant.</p>
                            <span class="price-tag">Menu à partir de 45 000 Ar</span>
                        </div>
                        <a href="#contact" class="card-link">Réserver une table <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 3: Hotel -->
                <div class="service-card reveal">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2670&auto=format&fit=crop" alt="Chambre de luxe">
                    </div>
                    <div class="card-content">
                        <div>
                            <h4>Séjour & Hôtellerie</h4>
                            <p>Prolongez l'expérience. Suites luxueuses et piscine scintillante pour une évasion totale proche de la capitale.</p>
                            <span class="price-tag">Nuitée à partir de 200 000 Ar</span>
                        </div>
                        <a href="#contact" class="card-link">Voir les chambres <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Immersive Gallery -->
    <section id="gallery" class="immersive-gallery">
        <div class="gallery-header reveal">
            <h3>Plongez dans l'atmosphère Le Château</h3>
        </div>
        <div class="gallery-scroller">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=2670&auto=format&fit=crop" alt="Piscine">
                <div class="gallery-overlay">
                    <h4>Piscine & Jardins</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1552539618-7eec9b4d1796?q=80&w=2000&auto=format&fit=crop" alt="Plat Signature">
                <div class="gallery-overlay">
                    <h4>Signature Culinaire</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=2670&auto=format&fit=crop" alt="Architecture">
                <div class="gallery-overlay">
                    <h4>Le Manoir</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2673&auto=format&fit=crop" alt="Mariage Cérémonie">
                <div class="gallery-overlay">
                    <h4>Cérémonies</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="about-container">
            <div class="about-img reveal">
                <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?q=80&w=2670&auto=format&fit=crop" alt="Luxe détails">
            </div>
            <div class="about-text reveal">
                <div class="section-title">
                    <span>Notre Histoire</span>
                    <h3>Une oasis de luxe à Ambohimalaza</h3>
                </div>
                <p>Niché sur les hauteurs verdoyantes d'Ambohimalaza, Le Château est bien plus qu'un lieu : c'est une promesse. Celle d'un temps suspendu, loin du tumulte de la ville, où l'architecture coloniale rencontre le confort moderne.</p>
                <p>Que ce soit pour sceller une union éternelle ou pour une simple pause gourmande, notre équipe dévouée cultive l'art de recevoir avec une attention méticuleuse portée à chaque détail.</p>
                <a href="#contact" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </section>

    <!-- Contact / Lead Gen -->
    <section id="contact" class="contact-section">
        <div class="contact-overlay"></div>
        <div class="container">
            <div class="form-container reveal">
                <h3>Prêt à vivre l'expérience ?</h3>
                <p>Obtenez une offre sur-mesure pour votre projet.</p>
                
                <form>
                    <div class="radio-group">
                        <label class="radio-option">
                            <input type="radio" name="project" value="mariage" checked>
                            <span>Mariage</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="project" value="sejour">
                            <span>Séjour</span>
                        </label>
                        <label class="radio-option">
                            <input type="radio" name="project" value="event">
                            <span>Entreprise</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Votre Nom complet" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Votre Email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Numéro de téléphone" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Obtenir mon offre personnalisée</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <img id="footer-logo-img" alt="Le Château" class="footer-logo">
                <div class="footer-links">
                    <a href="#">Mentions Légales</a>
                    <a href="#">CGV</a>
                    <a href="#">Nous Contacter</a>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Le Château Ambohimalaza. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // --- 1. INTÉGRATION LOGO (OBLIGATOIRE) ---
        const LOGO_URL = "logo.jpg";
        
        document.getElementById('logo-img').src = LOGO_URL;
        document.getElementById('footer-logo-img').src = LOGO_URL;

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
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('#nav-menu a');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            // Toggle icon from bars to times
            const icon = hamburger.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
                icon.style.color = '#1A1A1A'; // Dark color for menu open
            } else {
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-xmark');
                icon.style.color = ''; // Reset color
            }
        });

        // Close menu when clicking a link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                const icon = hamburger.querySelector('i');
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-xmark');
                icon.style.color = '';
            });
        });

        // --- 4. SCROLL ANIMATIONS (INTERSECTION OBSERVER) ---
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Only animate once
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