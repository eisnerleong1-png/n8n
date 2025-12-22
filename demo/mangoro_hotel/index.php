<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangoro Hotel | Luxe & Saveurs à Moramanga</title>
    <meta name="description" content="Votre escale de confort à Moramanga. Hôtel de standing, Pizzeria gourmande et salles de conférence.">
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #50361F; /* Marron Café - Élégance */
            --accent: #F0C842; /* Jaune Moutarde/Doré - Dynamisme */
            --bg-body: #FAFAF5; /* Blanc cassé - Chaleur */
            --white: #FFFFFF;
            --text-dark: #2C1810;
            --text-light: #F9F9F9;
            --gray-light: #E5E5E5;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px -5px rgba(80, 54, 31, 0.1);
        }

        /* --- RESET & BASE --- */
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
            background-color: var(--bg-body);
            color: var(--primary);
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
            transition: var(--transition);
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
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--primary);
            border: 2px solid var(--accent);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--white);
        }

        /* Variante pour fond clair */
        .btn-primary.dark-hover:hover {
            color: var(--primary);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--accent);
        }

        .btn-secondary:hover {
            background-color: var(--accent);
            color: var(--primary);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-accent {
            color: var(--accent);
        }

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
            color: #6d5848;
            max-width: 600px;
            margin: 0 auto;
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
            background-color: rgba(80, 54, 31, 0.95);
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
            height: 50px; /* Ajuster selon logo */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
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
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            background-size: cover;
            background-position: center;
        }

        .slide.active {
            opacity: 1;
            animation: kenBurns 10s infinite alternate;
        }

        .slide::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(44, 24, 16, 0.7));
        }

        @keyframes kenBurns {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: var(--white);
            padding: 0 20px;
            max-width: 900px;
            margin-top: 60px; /* Évite le chevauchement avec le header */
        }

        .hero-content h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-content h2 {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 300;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--primary);
            color: var(--white);
            padding: 30px 0;
            position: relative;
            z-index: 20;
            margin-top: -5px; /* Fix gap */
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .trust-item i {
            color: var(--accent);
            font-size: 1.5rem;
        }

        .trust-item span {
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- SERVICES --- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
            top: 0;
        }

        .service-card:hover {
            top: -10px;
            box-shadow: 0 20px 40px -10px rgba(80, 54, 31, 0.2);
        }

        .card-img {
            height: 250px;
            width: 100%;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .service-card:hover .card-img img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 30px;
            text-align: center;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .card-content p {
            color: #666;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .price {
            display: block;
            font-family: 'Playfair Display', serif;
            color: var(--accent);
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .link-text {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            border-bottom: 1px solid var(--accent);
            padding-bottom: 2px;
        }

        /* --- GASTRONOMY (FEATURED) --- */
        .gastronomy {
            background-color: var(--white);
        }

        .split-layout {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .split-image, .split-content {
            flex: 1 1 50%;
        }

        .split-image {
            height: 600px;
        }

        .split-image img {
            width: 100%;
            height: 100%;
        }

        .split-content {
            padding: 60px;
        }

        .split-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .split-content p {
            margin-bottom: 30px;
            color: #555;
            font-size: 1.05rem;
        }

        .feature-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .feature-list li i {
            color: var(--accent);
            margin-right: 15px;
        }

        /* --- REVIEWS & GALLERY --- */
        .reviews {
            background-color: var(--bg-body);
        }

        .reviews-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .review-card {
            background: var(--white);
            padding: 40px;
            border-radius: 4px;
            box-shadow: var(--shadow-card);
            position: relative;
        }

        .review-card::before {
            content: '\201C';
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            color: rgba(240, 200, 66, 0.2);
            position: absolute;
            top: 10px;
            left: 20px;
        }

        .review-text {
            font-style: italic;
            color: #444;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .review-author {
            font-weight: 700;
            color: var(--primary);
            font-size: 0.9rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
            gap: 10px;
        }

        .gallery-item {
            overflow: hidden;
            position: relative;
        }

        .gallery-item:nth-child(1) { grid-column: 1 / 3; grid-row: 1 / 3; }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* --- ABOUT & MAP --- */
        .about-map-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: var(--white);
        }

        .about-text {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border: 0;
            filter: grayscale(20%) contrast(1.2);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--primary);
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            color: var(--accent);
            margin-bottom: 25px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: rgba(255,255,255,0.7);
        }

        .footer-col ul li a:hover {
            color: var(--accent);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            font-size: 0.85rem;
            color: rgba(255,255,255,0.5);
        }

        /* --- STICKY MOBILE BAR --- */
        .sticky-mobile-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 2000;
            padding: 10px 20px;
            justify-content: space-between;
            gap: 10px;
        }

        .sticky-btn {
            flex: 1;
            text-align: center;
            padding: 12px;
            border-radius: 4px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
        }

        .sticky-btn-call {
            background-color: var(--primary);
            color: var(--white);
        }

        .sticky-btn-book {
            background-color: var(--accent);
            color: var(--primary);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
            }
            .gallery-item:nth-child(1) { grid-column: span 2; height: 300px; }
            .split-image, .split-content { flex: 1 1 100%; }
            .split-image { height: 400px; }
            .about-map-container { grid-template-columns: 1fr; }
            .about-text { padding: 40px 20px; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; } /* Pour l'instant, pas de menu burger complexe pour rester simple fichier, ou alors simple */
            .sticky-mobile-bar { display: flex; }
            .hero-content h1 { font-size: 2.8rem; }
            .trust-grid { flex-direction: column; align-items: flex-start; padding-left: 20px; }
            footer { padding-bottom: 90px; } /* Espace pour la sticky bar */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container">
                <img id="header-logo" alt="Mangoro Hotel Logo">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#services">Hébergement</a></li>
                    <li><a href="#gastronomy">Restaurant</a></li>
                    <li><a href="#events">Événements</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <!-- Images HD Unsplash -->
            <div class="slide active" style="background-image: url('https://images.unsplash.com/photo-1571896349842-6e53ce41e887?q=80&w=2070&auto=format&fit=crop');"></div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1574126154517-d1e0d89e7344?q=80&w=2080&auto=format&fit=crop');"></div>
            <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop');"></div>
        </div>
        
        <div class="hero-content">
            <h1>Votre Escale de Confort <br>et de Saveurs à Moramanga</h1>
            <h2>Hébergement de standing, Pizzeria gourmande et Salles de conférence équipées. La référence hôtelière au cœur de l'Alaotra-Mangoro.</h2>
            <div class="hero-buttons">
                <a href="#reservation" class="btn btn-primary">Réserver une Chambre</a>
                <a href="#gastronomy" class="btn btn-secondary">Voir le Menu Restaurant</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-wifi"></i>
                    <span>Wifi Haut Débit</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-parking"></i>
                    <span>Parking Sécurisé</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-swimming-pool"></i>
                    <span>Piscine Extérieure</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-clock"></i>
                    <span>Service 24/7</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Tout pour votre séjour</h2>
                <p>Que vous soyez en déplacement professionnel, en escale touristique ou en week-end détente, nous avons pensé à chaque détail.</p>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop" alt="Chambre Confort">
                    </div>
                    <div class="card-content">
                        <h3>Nuits Paisibles</h3>
                        <p>Literie premium, insonorisation et espace lumineux pour un repos absolu après la route.</p>
                        <span class="price">À partir de 60 000 Ar</span>
                        <a href="#" class="link-text">Voir les chambres</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1590947132387-155cc02f3212?q=80&w=2070&auto=format&fit=crop" alt="Restaurant Pizzeria">
                    </div>
                    <div class="card-content">
                        <h3>Plaisirs Gourmands</h3>
                        <p>Notre célèbre Pizzeria au feu de bois, nos pâtisseries fines et une cuisine locale savoureuse.</p>
                        <span class="price">Carte Variée</span>
                        <a href="#" class="link-text">Découvrir le menu</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?q=80&w=2074&auto=format&fit=crop" alt="Salle de Conférence">
                    </div>
                    <div class="card-content">
                        <h3>Succès Professionnels</h3>
                        <p>Salles de conférence modulables et équipées pour vos séminaires et événements d'entreprise.</p>
                        <span class="price">Sur Devis</span>
                        <a href="#" class="link-text">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gastronomy Featured -->
    <section id="gastronomy" class="gastronomy">
        <div class="split-layout">
            <div class="split-image">
                <img src="https://images.unsplash.com/photo-1552539618-7eec9b4d1796?q=80&w=2002&auto=format&fit=crop" alt="Pizza Four à Bois">
            </div>
            <div class="split-content">
                <h2>Le Rendez-vous Gourmand de Moramanga</h2>
                <p>Le Mangoro n'est pas seulement un hôtel, c'est une destination culinaire. Notre four à pizza crépite toute la journée pour vous offrir le meilleur de la cuisine italienne, tandis que notre chef pâtissier prépare chaque matin des douceurs qui font la réputation de l'établissement.</p>
                <ul class="feature-list">
                    <li><i class="fas fa-utensils"></i> Produits frais du marché local</li>
                    <li><i class="fas fa-fire"></i> Authentique four à pizza au feu de bois</li>
                    <li><i class="fas fa-wine-glass"></i> Sélection de boissons et cocktails</li>
                </ul>
                <a href="#" class="btn btn-primary dark-hover">Réserver une table</a>
            </div>
        </div>
    </section>

    <!-- Proof & Gallery -->
    <section class="section-padding reviews">
        <div class="container">
            <div class="section-title">
                <h2>Ils ont aimé leur passage</h2>
            </div>

            <div class="reviews-slider">
                <div class="review-card">
                    <p class="review-text">"Une véritable oasis sur la route de Tamatave. La pizza était excellente et la nuit très calme. Je recommande pour les commerciaux."</p>
                    <p class="review-author">— R. Andrianina, VRP</p>
                </div>
                <div class="review-card">
                    <p class="review-text">"Nous avons organisé notre séminaire annuel ici. Service impeccable, salle bien équipée et le déjeuner était parfait."</p>
                    <p class="review-author">— Société BNI, Antananarivo</p>
                </div>
                <div class="review-card">
                    <p class="review-text">"Le week-end en famille idéal. Les enfants ont adoré la piscine et les pâtisseries. Un standing rare dans la région."</p>
                    <p class="review-author">— Famille Rakoto</p>
                </div>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?q=80&w=2070&auto=format&fit=crop" alt="Piscine Détente"></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop" alt="Plat Gastronomique"></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop" alt="Bureau Chambre"></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1561047029-3000c68339ca?q=80&w=1974&auto=format&fit=crop" alt="Cocktail"></div>
                <div class="gallery-item"><img src="https://images.unsplash.com/photo-1522771753033-6a1439584d1e?q=80&w=2070&auto=format&fit=crop" alt="Décoration Intérieure"></div>
            </div>
        </div>
    </section>

    <!-- About & Map -->
    <section id="contact" class="about-map-container">
        <div class="about-text">
            <h2>Bienvenue au Mangoro Hotel</h2>
            <br>
            <p>Idéalement situé à l'entrée de la ville, le Mangoro Hotel est votre partenaire de confiance. Nous combinons l'hospitalité malgache traditionnelle avec les standards internationaux de confort et d'hygiène.</p>
            <br>
            <p><i class="fas fa-map-marker-alt" style="color:var(--accent)"></i> Route Nationale 2, Moramanga</p>
            <p><i class="fas fa-phone" style="color:var(--accent)"></i> +261 34 00 000 00</p>
        </div>
        <div class="map-container">
            <!-- Google Maps Embed (Moramanga Centered) -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.247657662888!2d48.228!3d-18.948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f5aa6144444445%3A0x6d44444444444444!2sMoramanga!5e0!3m2!1sfr!2smg!4v1620000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img id="footer-logo" alt="Logo Mangoro" style="height: 40px; margin-bottom: 20px;">
                    <p>L'excellence hôtelière à Moramanga. Confort, Gastronomie et Services Professionnels.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact Rapide</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@mangorohotel.com</li>
                        <li><i class="fab fa-whatsapp"></i> WhatsApp Direct</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#services">Chambres & Suites</a></li>
                        <li><a href="#gastronomy">Restaurant & Pizzeria</a></li>
                        <li><a href="#events">Demander un Devis</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div style="font-size: 1.5rem; display: flex; gap: 15px;">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Mangoro Hotel. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile Bar -->
    <div class="sticky-mobile-bar">
        <a href="tel:+261340000000" class="sticky-btn sticky-btn-call"><i class="fas fa-phone-alt"></i> Appeler</a>
        <a href="#reservation" class="sticky-btn sticky-btn-book">Réserver</a>
    </div>

    <!-- Scripts -->
    <script>
        // --- LOGO CONFIGURATION (MANDATORY) ---
        const LOGO_URL = "logo.jpg";
        
        // Inject Logo
        document.getElementById('header-logo').src = LOGO_URL;
        document.getElementById('footer-logo').src = LOGO_URL;

        // --- HERO SLIDER LOGIC ---
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        setInterval(nextSlide, 5000); // Change image every 5 seconds

        // --- STICKY HEADER ---
        const header = document.getElementById('header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- SCROLL ANIMATION (Intersection Observer) ---
        // Simple fade-in effect for sections
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Apply to sections (Inline style init needed for this simple script or add class)
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(section);
        });

    </script>
</body>
</html>