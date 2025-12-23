<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vrai Traiteur Bommartin | L'Art du Cochon de Lait à Antananarivo</title>
    
    <!-- Google Fonts: Playfair Display (Luxe/Titre) & DM Sans (Moderne/Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --color-primary: #212D40; /* Bleu Nuit - Prestige */
            --color-accent: #913C24; /* Rouille - Appétit/Action */
            --color-secondary: #CE9B82; /* Beige - Douceur */
            --color-white: #ffffff;
            --color-light-gray: #f9f9f9;
            --color-text: #333333;
            
            --font-heading: 'Playfair Display', serif;
            --font-body: 'DM Sans', sans-serif;
            
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px rgba(33, 45, 64, 0.08);
            --radius: 4px;
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
            font-family: --font-body;
            color: var(--color-text);
            line-height: 1.6;
            background-color: var(--color-white);
            overflow-x: hidden;
            font-family: var(--font-body);
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--color-primary);
            line-height: 1.2;
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
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* -----------------------------------------------------------
           UTILITIES & BUTTONS
        ----------------------------------------------------------- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-accent { color: var(--color-accent); }
        .text-white { color: var(--color-white); }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.9rem;
            border-radius: 2px;
            position: relative;
            z-index: 1;
            overflow: hidden;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #7a321e;
            z-index: -2;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .btn-primary:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .btn-outline {
            border: 1px solid var(--color-accent);
            color: var(--color-accent);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--color-accent);
            color: var(--color-white);
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
            background: transparent; /* Transparent initialement */
        }

        header.scrolled {
            background-color: rgba(33, 45, 64, 0.95);
            padding: 15px 0;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo Configuration */
        .logo-container img {
            height: 50px; /* Ajusté pour le logo fourni */
            width: auto;
            /* In case logo is dark text on transparent, invert filter for hero if needed, 
               but assuming logo.jpg is self-contained. 
               Adding border-radius if it's a square jpg to soften edges. */
            border-radius: 4px; 
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--color-white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--color-accent);
            transition: 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .header-cta {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .mobile-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            /* Image de fond appétissante et festive */
            background: url('https://images.unsplash.com/photo-1555244162-803834f70033?q=80&w=2670&auto=format&fit=crop') no-repeat center center/cover;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Overlay sombre pour contraste texte */
            background: linear-gradient(135deg, rgba(33, 45, 64, 0.9) 0%, rgba(33, 45, 64, 0.6) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            color: var(--color-white);
            margin-top: 60px; /* Éviter que le header masque le contenu */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            color: var(--color-white);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.8s forwards 0.5s;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.8s forwards 0.7s;
        }

        .hero-btn-group {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.8s forwards 0.9s;
        }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-bar {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-text {
            font-weight: 600;
            color: var(--color-primary);
            font-size: 1.1rem;
        }

        .trust-logos {
            display: flex;
            gap: 30px;
            opacity: 0.7;
            align-items: center;
        }
        
        .trust-logos span {
            font-weight: 700;
            font-family: var(--font-heading);
            color: #888;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        /* -----------------------------------------------------------
           SIGNATURE (COCHON DE LAIT)
        ----------------------------------------------------------- */
        .signature {
            background-color: #fafafa;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
        }

        .signature-img-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: var(--radius);
        }

        .signature-img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .signature-img-wrapper:hover .signature-img {
            transform: scale(1.05);
        }

        .signature-badge {
            position: absolute;
            top: 30px;
            left: 30px;
            background-color: var(--color-accent);
            color: white;
            padding: 10px 20px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.8rem;
        }

        .signature-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .signature-content p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .price-tag {
            font-size: 1.5rem;
            color: var(--color-primary);
            font-family: var(--font-heading);
            font-weight: 700;
            margin-bottom: 30px;
            display: block;
        }

        .features-list {
            margin-bottom: 40px;
        }

        .features-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: var(--color-primary);
        }

        .features-list i {
            color: var(--color-accent);
            margin-right: 15px;
        }

        /* -----------------------------------------------------------
           SERVICES & MENUS
        ----------------------------------------------------------- */
        .services-title {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 60px;
        }

        .services-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow-card);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
            top: 0;
        }

        .service-card:hover {
            top: -10px;
            box-shadow: 0 20px 40px rgba(33, 45, 64, 0.12);
        }

        .service-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .service-info {
            padding: 30px;
        }

        .service-info h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .service-info p {
            color: #666;
            margin-bottom: 25px;
            font-size: 0.95rem;
        }

        .link-arrow {
            color: var(--color-accent);
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* -----------------------------------------------------------
           GALLERY (MASONRY)
        ----------------------------------------------------------- */
        .gallery {
            background-color: var(--color-primary);
            color: white;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .gallery-header h2 {
            color: white;
            font-size: 2.5rem;
        }

        .masonry-grid {
            column-count: 3;
            column-gap: 20px;
        }

        .masonry-item {
            break-inside: avoid;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            border-radius: 4px;
            cursor: pointer;
        }

        .masonry-item img {
            width: 100%;
            display: block;
            transition: transform 0.5s ease;
        }

        .masonry-item:hover img {
            transform: scale(1.05); /* Micro-interaction Zoom */
        }

        /* -----------------------------------------------------------
           ABOUT & TESTIMONIALS
        ----------------------------------------------------------- */
        .about-section {
            background-color: var(--color-secondary);
            color: var(--color-primary);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--color-primary);
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.4);
            padding: 30px;
            border-radius: var(--radius);
            backdrop-filter: blur(5px);
        }

        .testimonial-stars {
            color: #FFD700;
            margin-bottom: 15px;
        }

        .testimonial-quote {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .testimonial-author {
            font-weight: 700;
            font-family: var(--font-heading);
        }

        /* -----------------------------------------------------------
           FOOTER & CONTACT
        ----------------------------------------------------------- */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding-top: 80px;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .contact-info h2 {
            color: white;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .contact-details div {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .contact-details i {
            color: var(--color-accent);
            margin-top: 5px;
        }

        .form-box {
            background: white;
            padding: 40px;
            border-radius: var(--radius);
            color: var(--color-primary);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 2px;
            font-family: var(--font-body);
            transition: 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-accent);
            box-shadow: 0 0 0 3px rgba(145, 60, 36, 0.1);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 20px 0;
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* -----------------------------------------------------------
           MOBILE STICKY CTA
        ----------------------------------------------------------- */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-white);
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none; /* Hidden on desktop */
            justify-content: space-between;
            align-items: center;
        }

        /* -----------------------------------------------------------
           ANIMATIONS
        ----------------------------------------------------------- */
        @keyframes fadeUp {
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

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 1024px) {
            .signature-grid, .about-grid, .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .signature-img { height: 400px; }
            .masonry-grid { column-count: 2; }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--color-primary);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                box-shadow: -5px 0 15px rgba(0,0,0,0.2);
            }

            .nav-links.active {
                right: 0;
            }

            .mobile-toggle {
                display: block;
                z-index: 1001;
            }

            .mobile-sticky-cta {
                display: flex;
            }
            
            body {
                padding-bottom: 70px; /* Space for sticky CTA */
            }

            .masonry-grid { column-count: 1; }
            
            .header-cta .btn {
                display: none; /* Hide top CTA on mobile, use sticky */
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-wrapper">
            <div class="logo-container">
                <!-- Logo injecté par JS -->
            </div>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#services">Nos Menus</a></li>
                    <li><a href="#signature">Spécialité Cochon de Lait</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="header-cta">
                <a href="#contact" class="btn btn-primary">Demander un Devis</a>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>L'Art du Cochon de Lait et du Traiteur d'Exception à Antananarivo.</h1>
                <p>Sublimez vos mariages, réceptions et événements d'entreprise avec une cuisine authentique et généreuse. Service clé en main partout à Tana.</p>
                <div class="hero-btn-group">
                    <a href="#services" class="btn btn-primary" style="margin-right: 15px;">Voir nos Offres & Menus</a>
                    <a href="#signature" class="btn btn-outline" style="color: white; border-color: white;">Notre Spécialité</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <div class="trust-text">Ils nous ont fait confiance pour leurs grands moments :</div>
            <div class="trust-logos">
                <span><i class="fas fa-building"></i> Groupe STAR</span>
                <span><i class="fas fa-university"></i> Telma Corp</span>
                <span><i class="fas fa-wine-glass"></i> +500 Événements Privés</span>
            </div>
        </div>
    </div>

    <!-- Signature Product -->
    <section id="signature" class="signature section-padding reveal">
        <div class="container">
            <div class="signature-grid">
                <div class="signature-img-wrapper">
                    <span class="signature-badge">Best Seller</span>
                    <!-- Image Cochon Rôti -->
                    <img src="https://images.unsplash.com/photo-1606850780554-b55ea2497dc2?q=80&w=2670&auto=format&fit=crop" alt="Cochon de Lait Rôti Antananarivo" class="signature-img">
                </div>
                <div class="signature-content">
                    <h2>Notre Spécialité : Le Véritable Cochon de Lait Rôti</h2>
                    <p>Une cuisson lente de 6 heures, une peau dorée et incroyablement croustillante, une chair fondante parfumée aux épices malagasy secrètes. La pièce maîtresse qui impressionnera vos invités.</p>
                    
                    <span class="price-tag">Formules à partir de 200 000 Ar</span>
                    
                    <ul class="features-list">
                        <li><i class="fas fa-check-circle"></i> Découpe spectaculaire devant les invités</li>
                        <li><i class="fas fa-check-circle"></i> Accompagnements gourmands inclus</li>
                        <li><i class="fas fa-check-circle"></i> Livraison chaude garantie</li>
                    </ul>
                    
                    <a href="#contact" class="btn btn-primary">Réserver mon Cochon de Lait</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section-padding reveal">
        <div class="container">
            <div class="services-title">
                <h2>Une Solution Gourmande pour Chaque Occasion</h2>
                <p>Que ce soit pour un événement intime ou une réception grandiose, nous avons la formule adaptée.</p>
            </div>
            
            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0202128?q=80&w=2600&auto=format&fit=crop" alt="Traiteur Mariage Tana" class="service-img">
                    <div class="service-info">
                        <h3>Mariages & Réceptions</h3>
                        <p>Buffets royaux ou service à l'assiette. Une prestation haut de gamme pour le plus beau jour de votre vie.</p>
                        <a href="#contact" class="link-arrow">Voir exemple de menu <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2664&auto=format&fit=crop" alt="Traiteur Entreprise" class="service-img">
                    <div class="service-info">
                        <h3>Événements d'Entreprise</h3>
                        <p>Cocktails dînatoires, pauses café, et plateaux repas pour vos séminaires et lancements de produits.</p>
                        <a href="#contact" class="link-arrow">Demander un devis Pro <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?q=80&w=2670&auto=format&fit=crop" alt="Repas de Famille" class="service-img">
                    <div class="service-info">
                        <h3>Fêtes Familiales</h3>
                        <p>Baptêmes, Fiançailles, Famadihana. La tradition culinaire malgache respectée et sublimée.</p>
                        <a href="#contact" class="link-arrow">Contacter le chef <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Masonry -->
    <section id="gallery" class="gallery section-padding reveal">
        <div class="container">
            <div class="gallery-header">
                <h2>Le Plaisir des Yeux avant le Plaisir du Goût</h2>
            </div>
            <div class="masonry-grid">
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=2574&auto=format&fit=crop" alt="Plat Traiteur">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?q=80&w=2669&auto=format&fit=crop" alt="Cocktail">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1549488344-cbb6c34cf0f5?q=80&w=2670&auto=format&fit=crop" alt="Cuisine Chef">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2670&auto=format&fit=crop" alt="Buffet">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2670&auto=format&fit=crop" alt="Plat gastronomique">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?q=80&w=2580&auto=format&fit=crop" alt="Pancakes luxe">
                </div>
            </div>
        </div>
    </section>

    <!-- About & Testimonials -->
    <section id="about" class="about-section section-padding reveal">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>La Passion du Service Bien Fait</h2>
                    <p>Chez Vrai Traiteur Bommartin, nous croyons que chaque événement est unique. Fondé avec la volonté d'élever les standards de la restauration événementielle à Antananarivo, nous allions tradition culinaire et exigence moderne.</p>
                    <p><strong>Nos engagements :</strong> Hygiène irréprochable (normes HACCP), ponctualité absolue et produits locaux de première fraîcheur.</p>
                    
                    <!-- Testimonials Integration -->
                    <div class="testimonials-grid">
                        <div class="testimonial-card">
                            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-quote">"Le cochon de lait était parfait, nos 200 invités se sont régalés. Merci pour le professionnalisme."</p>
                            <p class="testimonial-author">- R. Andria</p>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-quote">"Service impeccable pour notre séminaire d'entreprise. Ponctuel et délicieux."</p>
                            <p class="testimonial-author">- M. Rakoto (Directeur RH)</p>
                        </div>
                    </div>
                </div>
                
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?q=80&w=2577&auto=format&fit=crop" style="border-radius: 4px; box-shadow: 0 20px 50px rgba(0,0,0,0.1);" alt="Chef Traiteur">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Contact -->
    <footer id="contact" class="reveal">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Prêt à régaler vos invités ?</h2>
                    <p style="margin-bottom: 30px; font-size: 1.1rem; opacity: 0.8;">Discutons de votre projet. Devis gratuit sous 24h.</p>
                    
                    <div class="contact-details">
                        <div>
                            <i class="fas fa-map-marker-alt fa-lg"></i>
                            <span>123 Route des Hydrocarbures, Antananarivo 101, Madagascar</span>
                        </div>
                        <div>
                            <i class="fas fa-phone-alt fa-lg"></i>
                            <span>+261 34 00 000 00</span>
                        </div>
                        <div>
                            <i class="fas fa-envelope fa-lg"></i>
                            <span>contact@vraitraiteurbommartin.mg</span>
                        </div>
                        <div>
                            <i class="fab fa-facebook fa-lg"></i>
                            <span>/VraiTraiteurBommartin</span>
                        </div>
                    </div>
                </div>

                <div class="form-box">
                    <form>
                        <div class="form-group">
                            <label>Nom complet</label>
                            <input type="text" class="form-control" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label>Date de l'événement</label>
                            <!-- UX: Input date simple mais propre -->
                            <input type="date" class="form-control" id="eventDate">
                        </div>
                        <div class="form-group">
                            <label>Nombre d'invités (approx)</label>
                            <input type="number" class="form-control" placeholder="Ex: 150">
                        </div>
                        <div class="form-group">
                            <label>Type de menu souhaité</label>
                            <select class="form-control">
                                <option>Cochon de Lait (Spécialité)</option>
                                <option>Buffet Mariage</option>
                                <option>Cocktail Entreprise</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer la demande</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                &copy; 2024 Vrai Traiteur Bommartin. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA -->
    <div class="mobile-sticky-cta">
        <div style="font-weight: 700; color: var(--color-primary);">Une question ?</div>
        <a href="tel:+261340000000" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.8rem;">Appeler maintenant</a>
    </div>

    <!-- Scripts -->
    <script>
        // CONSIGNE IMPÉRATIVE
        const LOGO_URL = "logo.jpg";

        // Insertion du Logo
        const logoContainer = document.querySelector('.logo-container');
        if(logoContainer) {
            const img = document.createElement('img');
            img.src = LOGO_URL;
            img.alt = "Logo Vrai Traiteur Bommartin";
            img.id = "logo-img";
            logoContainer.appendChild(img);
        }

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const toggleBtn = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');
        const links = document.querySelectorAll('.nav-links li');

        toggleBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            toggleBtn.innerHTML = navLinks.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Scroll Animation (Intersection Observer)
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(section => {
            observer.observe(section);
        });

        // Smart Date Picker Logic (Simulation)
        // Désactive les dates passées
        const dateInput = document.getElementById('eventDate');
        if(dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
            
            // Simulation: Disable some random dates (fully booked visual cue)
            // Note: Standard HTML date input doesn't support disabling specific dates easily without libraries like Flatpickr.
            // But we ensure min date is today for UX.
        }

    </script>
</body>
</html>