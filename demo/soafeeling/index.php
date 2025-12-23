<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoaFeeling | Restaurant & Événements d'Exception à Antananarivo</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary: #CC164D; /* Rouge/Magenta - Action */
            --primary-dark: #a00f3a;
            --secondary: #F8C8BE; /* Rose Pâle - Fond élégant */
            --text-dark: #554D4F; /* Gris Foncé Premium */
            --text-light: #f9f9f9;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.95);
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
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
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: var(--white);
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* --- UI ELEMENTS --- */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: var(--transition);
            cursor: pointer;
            border: 2px solid transparent;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(204, 22, 77, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(204, 22, 77, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--text-dark);
            border-color: var(--text-dark);
        }

        .btn-outline:hover {
            background-color: var(--text-dark);
            color: var(--white);
            transform: translateY(-2px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        /* --- HEADER & NAV --- */
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
            background-color: var(--white);
            padding: 10px 0;
            box-shadow: var(--shadow);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Ajustement logo */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav a {
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        nav a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO SECTION (SPLIT) --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            overflow: hidden;
            padding: 0; /* Override section padding */
        }

        .hero-split {
            flex: 1;
            position: relative;
            height: 100%;
        }

        .hero-left {
            background: url('https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
        }

        .hero-right {
            background: url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Assombrir pour lisibilité */
            z-index: 1;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
            width: 90%;
            max-width: 800px;
            color: var(--white);
            background: rgba(0, 0, 0, 0.3); /* Légère boîte pour renforcer contraste */
            backdrop-filter: blur(5px);
            padding: 40px;
            border-radius: 4px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero-content h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .hero-btns .btn-outline {
            color: var(--white);
            border-color: var(--white);
        }
        
        .hero-btns .btn-outline:hover {
            background-color: var(--white);
            color: var(--text-dark);
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--white);
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .trust-title {
            font-size: 0.9rem;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .logos-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .trust-badge {
            background: var(--secondary);
            color: var(--text-dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-left: 20px;
        }

        /* --- SEGMENTATION --- */
        .segmentation {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            padding: 0;
        }

        .seg-col {
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
        }

        .seg-restaurant {
            background-color: var(--white);
        }

        .seg-events {
            background-color: var(--secondary);
        }

        .seg-subtitle {
            color: var(--primary);
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 0.8rem;
            margin-bottom: 15px;
        }

        .seg-col h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .seg-col p {
            margin-bottom: 30px;
            max-width: 400px;
            font-size: 1.1rem;
        }

        .price-tag {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 30px;
            display: block;
        }

        .seg-img {
            display: none; /* Backgrounds handled by color, images separate or grid? Keeping clean text focus */
        }

        /* --- GALLERY MASONRY --- */
        .gallery-section {
            background-color: var(--white);
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-header h2 {
            font-size: 3rem;
            color: var(--text-dark);
        }

        .masonry {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-auto-rows: 250px;
            gap: 15px;
            padding: 0 20px;
        }

        .masonry-item {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
            cursor: pointer;
        }

        .masonry-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .masonry-item:hover img {
            transform: scale(1.1);
        }

        .masonry-item.tall {
            grid-row: span 2;
        }

        .masonry-item.wide {
            grid-column: span 2;
        }

        /* --- MENU TEASER --- */
        .menu-teaser {
            background-color: #FAFAFA;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .menu-card {
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .card-img {
            height: 200px;
            overflow: hidden;
        }

        .card-content {
            padding: 25px;
            text-align: center;
        }

        .card-content h4 {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .card-price {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
            display: block;
            margin-bottom: 10px;
        }

        /* --- ABOUT --- */
        .about-section {
            background-color: var(--secondary);
            padding: 100px 0;
        }
        
        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image img {
            border-radius: 8px;
            box-shadow: 20px 20px 0 rgba(255,255,255,0.3);
        }

        /* --- FAQ --- */
        .faq-section {
            background: var(--white);
            max-width: 800px;
            margin: 0 auto;
        }

        .accordion-item {
            border-bottom: 1px solid #eee;
        }

        .accordion-header {
            padding: 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
        }

        .accordion-header:hover {
            color: var(--primary);
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding: 0 20px;
            color: #666;
        }

        .accordion-content p {
            padding-bottom: 20px;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #222;
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--secondary);
        }

        .footer-info p {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ccc;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary);
        }

        .map-container iframe {
            width: 100%;
            height: 250px;
            border: 0;
            border-radius: 8px;
            filter: grayscale(100%) invert(92%) contrast(83%);
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            font-size: 0.8rem;
            color: #666;
        }

        /* --- FLOATING ELEMENTS --- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: #FFF;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 2000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #20ba5a;
        }

        .sticky-mobile-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px 20px;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
            z-index: 1999;
            display: none; /* Mobile only */
        }

        .sticky-mobile-cta .btn {
            width: 100%;
            text-align: center;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 2.5rem; }
            .segmentation { grid-template-columns: 1fr; }
            .about-wrapper { flex-direction: column-reverse; }
            .nav-container nav { display: none; } /* Simplified mobile menu for this snippet */
            .mobile-toggle { display: block; color: var(--primary); }
            
            /* Basic Mobile Menu Logic Styling */
            nav.active {
                display: flex;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
        }

        @media (max-width: 768px) {
            .hero {
                /* On mobile, focus on one strong image with overlay */
                background: url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
                display: block; /* Remove flex split */
            }
            .hero-split { display: none; } /* Hide the split logic, use container background */
            
            .hero-content {
                width: 90%;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 30px 20px;
            }

            .hero-btns { flex-direction: column; }
            .sticky-mobile-cta { display: block; }
            footer { padding-bottom: 90px; } /* Space for sticky CTA */
            .whatsapp-float { bottom: 90px; }
        }
    </style>
</head>
<body>

    <!-- Header / Nav -->
    <header id="main-header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <!-- LOGO INJECTED VIA JS -->
                <img id="main-logo" alt="SoaFeeling Logo">
            </a>
            <nav id="navbar">
                <ul>
                    <li><a href="#experience">Restaurant</a></li>
                    <li><a href="#experience">Événements</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#menu">Carte</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#footer" class="btn btn-primary" style="padding: 10px 20px; margin-left: 10px;">Réserver</a></li>
                </ul>
            </nav>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <!-- Desktop Split Visuals -->
        <div class="hero-split hero-left hidden-mobile"></div>
        <div class="hero-split hero-right hidden-mobile"></div>
        
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1>L'Adresse d'Exception pour vos Événements</h1>
            <h2>SoaFeeling : Alliez gastronomie raffinée et cadre enchanteur pour transformer vos instants en souvenirs inoubliables.</h2>
            <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Demander un Devis</a>
                <a href="#restaurant" class="btn btn-outline">Réserver une Table</a>
            </div>
        </div>
    </div>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <p class="trust-title">Ils célèbrent leurs plus beaux moments chez nous</p>
            <div class="logos-wrapper">
                <i class="fas fa-building fa-2x"></i>
                <i class="fas fa-glass-cheers fa-2x"></i>
                <i class="fas fa-music fa-2x"></i>
                <i class="fas fa-gem fa-2x"></i>
                <span class="trust-badge">Plus de 150 mariages réussis</span>
            </div>
        </div>
    </section>

    <!-- Segmentation (Restaurant vs Event) -->
    <section id="experience" class="segmentation">
        <div class="seg-col seg-restaurant">
            <span class="seg-subtitle">L'Art de la Table</span>
            <h3>Une Cuisine Fusion Malagasy-Moderne</h3>
            <p>Des produits frais du marché sublimés par notre Chef pour une explosion de saveurs locales revisitées.</p>
            <span class="price-tag">Plats à partir de 25 000 Ar</span>
            <a href="#menu" class="btn btn-outline" style="border-color: var(--primary); color: var(--primary);">Voir la Carte</a>
        </div>
        <div class="seg-col seg-events">
            <span class="seg-subtitle">Célébrations Uniques</span>
            <h3>Votre Espace de Réception Privé</h3>
            <p>Mariages, Banquets, Séminaires. Une salle lumineuse capable d'accueillir jusqu'à 300 personnes.</p>
            <span class="price-tag" style="font-size: 1rem; color: var(--text-dark);">Sonorisation & Décoration incluses</span>
            <a href="#contact" class="btn btn-primary">Voir les configurations</a>
        </div>
    </section>

    <!-- Gallery Masonry -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="section-header">
                <h2>Moments Coup de Cœur</h2>
            </div>
            <div class="masonry">
                <!-- Food -->
                <div class="masonry-item"><img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=800&auto=format&fit=crop" alt="Plat gastronomique"></div>
                <!-- Wedding Couple -->
                <div class="masonry-item tall"><img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=800&auto=format&fit=crop" alt="Mariés heureux"></div>
                <!-- Decor Details -->
                <div class="masonry-item"><img src="https://images.unsplash.com/photo-1522673607200-1645062cd958?q=80&w=800&auto=format&fit=crop" alt="Décoration table"></div>
                <!-- Venue Wide -->
                <div class="masonry-item wide"><img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=800&auto=format&fit=crop" alt="Salle de réception"></div>
                <!-- Chef -->
                <div class="masonry-item"><img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=800&auto=format&fit=crop" alt="Chef en cuisine"></div>
            </div>
        </div>
    </section>

    <!-- Menu Teaser -->
    <section id="menu" class="menu-teaser">
        <div class="container">
            <div class="section-header">
                <h2>Nos Suggestions du Chef</h2>
            </div>
            <div class="cards-grid">
                <!-- Card 1 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1580476262798-bddd9f4b7369?q=80&w=800&auto=format&fit=crop" alt="Poisson Vanille">
                    </div>
                    <div class="card-content">
                        <h4>Filet de Poisson à la Vanille</h4>
                        <span class="card-price">35 000 Ar</span>
                        <p>Pêche du jour, sauce onctueuse à la vanille de Madagascar.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1546241072-48010ad2862c?q=80&w=800&auto=format&fit=crop" alt="Bol renversé luxe">
                    </div>
                    <div class="card-content">
                        <h4>Pavé de Zébu Rossini</h4>
                        <span class="card-price">45 000 Ar</span>
                        <p>Tendre filet de zébu, foie gras poêlé, réduction vin rouge.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1467003909585-2f8a7270028d?q=80&w=800&auto=format&fit=crop" alt="Dessert Chocolat">
                    </div>
                    <div class="card-content">
                        <h4>Délice Koba</h4>
                        <span class="card-price">18 000 Ar</span>
                        <p>Revisite du dessert traditionnel cacahuète et banane.</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="#" class="btn btn-primary">Télécharger le Menu (PDF)</a>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about-section">
        <div class="container about-wrapper">
            <div class="about-text">
                <span class="seg-subtitle">Notre Histoire</span>
                <h3>Bienvenue chez SoaFeeling</h3>
                <p>Né d'une passion pour le "Fihavanana" (l'accueil chaleureux malagasy) et l'excellence culinaire, SoaFeeling est plus qu'un restaurant. C'est un lieu de vie où chaque détail est pensé pour sublimer vos émotions.</p>
                <p>Notre équipe s'engage à vous offrir un service premium, que ce soit pour un dîner romantique ou le mariage de votre vie.</p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?q=80&w=800&auto=format&fit=crop" alt="Équipe SoaFeeling">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq-section">
        <div class="container">
            <div class="section-header">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">Quelle est la capacité du parking ? <i class="fas fa-chevron-down"></i></div>
                    <div class="accordion-content">
                        <p>Nous disposons d'un parking privé, sécurisé et gratuit pouvant accueillir jusqu'à 50 voitures.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Proposez-vous des forfaits tout compris ? <i class="fas fa-chevron-down"></i></div>
                    <div class="accordion-content">
                        <p>Oui, nos forfaits "Sérénité" incluent la location de salle, le service traiteur complet, la sonorisation et la décoration de base.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Peut-on apporter ses boissons ? <i class="fas fa-chevron-down"></i></div>
                    <div class="accordion-content">
                        <p>Nous proposons une large carte de vins et spiritueux, mais un droit de bouchon est disponible sur demande pour vos événements spéciaux.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-info">
                    <h4>Prêt à réserver ?</h4>
                    <p><i class="fas fa-map-marker-alt" style="color:var(--primary)"></i> Ivandry, Antananarivo 101</p>
                    <p><i class="fas fa-phone" style="color:var(--primary)"></i> +261 34 00 000 00</p>
                    <p><i class="fas fa-envelope" style="color:var(--primary)"></i> contact@soafeeling.mg</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Horaires</h4>
                    <p>Lundi - Dimanche</p>
                    <p style="color: var(--white); font-weight: bold;">10h00 - 22h00</p>
                    <p style="margin-top:20px; font-size: 0.9rem;">Ouvert les jours fériés</p>
                </div>
                <div class="footer-col map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.274390025217!2d47.5!3d-18.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDU0JzAwLjAiUyA0N8KwMzAnMDAuMCJF!5e0!3m2!1sen!2smg!4v1620000000000!5m2!1sen!2smg" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 SoaFeeling. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Floating Elements -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <div class="sticky-mobile-cta">
        <a href="#footer" class="btn btn-primary">Demander un Devis</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // 1. GESTION DU LOGO (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        document.getElementById('main-logo').src = LOGO_URL;

        // 2. STICKY HEADER
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 3. MOBILE MENU
        const mobileToggle = document.querySelector('.mobile-toggle');
        const nav = document.querySelector('nav');

        mobileToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });

        // Close menu when clicking a link
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
            });
        });

        // 4. ACCORDION FAQ
        const accItems = document.querySelectorAll('.accordion-header');
        accItems.forEach(item => {
            item.addEventListener('click', function() {
                this.classList.toggle('active');
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // 5. SCROLL REVEAL (Simple Fade In)
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

        document.querySelectorAll('.seg-col, .menu-card, .masonry-item').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });
    </script>
</body>
</html>