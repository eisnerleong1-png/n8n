<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satrana Hotel - Élégance Tropicale à Toamasina</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #1C2D4D; /* Bleu Nuit */
            --color-accent: #5F803E; /* Vert Olive */
            --color-accent-hover: #4a662e;
            --color-bg: #F9FAFB;
            --color-white: #FFFFFF;
            --color-text: #333333;
            --color-text-light: #666666;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-soft: 0 10px 30px -10px rgba(28, 45, 77, 0.1);
            --shadow-hover: 0 20px 40px -15px rgba(28, 45, 77, 0.2);
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--color-text);
            background-color: var(--color-bg);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--color-primary);
            line-height: 1.2;
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
            height: auto;
            display: block;
            object-fit: cover;
        }

        /* --- UTILS --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            border-radius: 4px;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            box-shadow: 0 4px 15px rgba(95, 128, 62, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--color-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(95, 128, 62, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--color-primary);
            color: var(--color-primary);
        }

        .btn-outline:hover {
            background-color: var(--color-primary);
            color: var(--color-white);
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
            background: transparent;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajustement pour logo.jpg */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--color-white);
            transition: var(--transition);
            position: relative;
        }

        header.scrolled .nav-links a {
            color: var(--color-primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background-color: var(--color-accent);
            color: white !important;
            padding: 10px 25px;
            border-radius: 4px;
        }

        .nav-cta:hover::after {
            display: none;
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .hamburger {
            color: var(--color-primary);
        }

        /* --- HERO --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin-top: 0; /* Assure que le hero commence tout en haut */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(28, 45, 77, 0.8) 0%, rgba(28, 45, 77, 0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: var(--color-white);
            max-width: 800px;
            padding: 0 20px;
            margin-top: 80px; /* Sécurité pour éviter le chevauchement avec le header sur petits écrans */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            color: var(--color-white);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 0.5s;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 0.8s;
            font-weight: 300;
        }

        .hero .btn {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 1.1s;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- SOCIAL PROOF --- */
        .social-proof {
            background: var(--color-white);
            padding: 30px 0;
            border-bottom: 1px solid #eee;
        }

        .proof-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            text-align: center;
        }

        .proof-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-primary);
            font-weight: 600;
        }

        .stars {
            color: #FFD700;
        }

        /* --- ACCOMMODATIONS --- */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--color-text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: var(--color-white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .room-image {
            height: 250px;
            overflow: hidden;
        }

        .room-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .room-card:hover .room-image img {
            transform: scale(1.05);
        }

        .room-content {
            padding: 30px;
        }

        .room-price {
            font-size: 0.9rem;
            color: var(--color-accent);
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .room-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--color-primary);
        }

        .room-features {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            color: var(--color-text-light);
            font-size: 0.9rem;
        }

        .room-features span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cta-center {
            text-align: center;
            margin-top: 50px;
        }

        /* --- SERVICES --- */
        .services {
            background-color: var(--color-primary);
            color: var(--color-white);
            position: relative;
            overflow: hidden;
        }

        .services::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background-image: url('https://www.transparenttextures.com/patterns/cubes.png');
            opacity: 0.05;
        }

        .services .section-header h2 {
            color: var(--color-white);
        }

        .services .section-header p {
            color: rgba(255, 255, 255, 0.7);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .service-item {
            background: rgba(255, 255, 255, 0.05);
            padding: 40px 30px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .service-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--color-accent);
            margin-bottom: 20px;
        }

        .service-item h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1.25rem;
            margin-bottom: 15px;
            color: var(--color-white);
        }

        .service-item p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
        }

        /* --- GALLERY --- */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
            gap: 15px;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 4px;
            position: relative;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-item:nth-child(1) {
            grid-column: 1 / 3;
            grid-row: 1 / 3;
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
            .gallery-item:nth-child(1) {
                grid-column: auto;
                grid-row: auto;
                height: 300px;
            }
            .gallery-item {
                height: 250px;
            }
        }

        /* --- ABOUT --- */
        .about-section {
            background-color: #F3F4F6;
        }

        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-content {
            flex: 1;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image img {
            border-radius: 8px;
            box-shadow: var(--shadow-soft);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--color-accent);
            border-radius: 8px;
            z-index: -1;
        }

        @media (max-width: 992px) {
            .about-wrapper {
                flex-direction: column;
            }
            .about-image::before {
                top: 15px;
                left: 15px;
            }
        }

        /* --- CONTACT --- */
        .contact-section {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 0;
        }

        .contact-layout {
            display: flex;
            flex-wrap: wrap;
        }

        .contact-form-container {
            flex: 1;
            padding: 80px 50px;
            min-width: 400px;
        }

        .contact-map {
            flex: 1;
            min-height: 400px;
            position: relative;
            background-color: #ddd;
        }
        
        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(20%) contrast(1.2) opacity(0.9);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--color-white);
            border-radius: 4px;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-accent);
            background: rgba(255, 255, 255, 0.15);
        }

        .contact-info {
            margin-top: 40px;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.8);
        }

        .contact-item i {
            color: var(--color-accent);
        }

        /* --- FOOTER --- */
        footer {
            background-color: #000;
            color: rgba(255, 255, 255, 0.6);
            padding: 60px 0 20px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            color: var(--color-white);
            margin-bottom: 20px;
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a:hover {
            color: var(--color-accent);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--color-accent);
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--color-white);
                flex-direction: column;
                justify-content: center;
                transition: var(--transition);
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links a {
                color: var(--color-primary);
                font-size: 1.2rem;
            }
            
            .nav-links a::after {
                background-color: var(--color-primary);
            }

            .hamburger {
                display: block;
                z-index: 1001;
            }
            
            .contact-form-container {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-wrapper">
            <div class="logo-container">
                <img id="logo-img" alt="Satrana Hotel Logo">
            </div>
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#chambres">Chambres</a></li>
                    <li><a href="#galerie">Galerie</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#localisation">Localisation</a></li>
                    <li><a href="#contact" class="nav-cta">Réserver</a></li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Élégance Tropicale au Cœur de Toamasina</h1>
            <p>Un havre de paix alliant confort moderne et hospitalité malagasy pour vos séjours détente.</p>
            <a href="#contact" class="btn btn-primary">Vérifier les disponibilités</a>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container proof-wrapper">
            <div class="proof-item">
                <span class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
                <span>Recommandé par les voyageurs</span>
            </div>
            <div class="proof-item">
                <i class="fas fa-certificate"></i>
                <span>Service Client Excellence</span>
            </div>
        </div>
    </section>

    <!-- ACCOMMODATIONS -->
    <section id="chambres" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Nos Chambres et Suites</h2>
                <p>Découvrez un confort absolu conçu pour votre repos, que vous soyez en voyage d'affaires ou en vacances.</p>
            </div>
            <div class="rooms-grid">
                <!-- Room 1 -->
                <article class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=800&auto=format&fit=crop" alt="Chambre Standard">
                    </div>
                    <div class="room-content">
                        <span class="room-price">Dès 80 000 MGA / Nuit</span>
                        <h3 class="room-title">Chambre Standard</h3>
                        <div class="room-features">
                            <span><i class="fas fa-wifi"></i> Wifi</span>
                            <span><i class="fas fa-wind"></i> Clim</span>
                            <span><i class="fas fa-bed"></i> Double</span>
                        </div>
                        <p class="text-sm">Idéal pour les couples, un cocon douillet avec tout le nécessaire.</p>
                    </div>
                </article>

                <!-- Room 2 -->
                <article class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=800&auto=format&fit=crop" alt="Suite Satrana">
                    </div>
                    <div class="room-content">
                        <span class="room-price">Dès 150 000 MGA / Nuit</span>
                        <h3 class="room-title">Suite Satrana</h3>
                        <div class="room-features">
                            <span><i class="fas fa-expand"></i> 40m²</span>
                            <span><i class="fas fa-tv"></i> TV 4K</span>
                            <span><i class="fas fa-cocktail"></i> Mini-bar</span>
                        </div>
                        <p class="text-sm">Espace et luxe pour une expérience inoubliable avec vue jardin.</p>
                    </div>
                </article>

                <!-- Room 3 -->
                <article class="room-card">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1566665762606-3665e97d03bb?q=80&w=800&auto=format&fit=crop" alt="Suite Familiale">
                    </div>
                    <div class="room-content">
                        <span class="room-price">Dès 200 000 MGA / Nuit</span>
                        <h3 class="room-title">Suite Familiale</h3>
                        <div class="room-features">
                            <span><i class="fas fa-users"></i> 4 Pers</span>
                            <span><i class="fas fa-couch"></i> Salon</span>
                            <span><i class="fas fa-bath"></i> Baignoire</span>
                        </div>
                        <p class="text-sm">Le confort pour tous avec des espaces séparés pour l'intimité.</p>
                    </div>
                </article>
            </div>
            <div class="cta-center">
                <a href="#contact" class="btn btn-outline">Voir tous les détails</a>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding services">
        <div class="container">
            <div class="section-header">
                <h2>Votre Séjour, Notre Passion</h2>
                <p>Nous avons pensé à chaque détail pour faciliter votre quotidien à Toamasina.</p>
            </div>
            <div class="services-grid">
                <div class="service-item">
                    <i class="fas fa-leaf service-icon"></i>
                    <h3>Espace Détente</h3>
                    <p>Un jardin tropical calme et verdoyant pour échapper à l'agitation de la ville.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-wifi service-icon"></i>
                    <h3>Connexion Totale</h3>
                    <p>Wifi Fibre Haut Débit gratuit accessible dans toutes les chambres et espaces communs.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-map-marker-alt service-icon"></i>
                    <h3>Localisation Idéale</h3>
                    <p>Accès rapide au centre-ville, aux plages et au port économique.</p>
                </div>
                <div class="service-item">
                    <i class="fas fa-shield-alt service-icon"></i>
                    <h3>Sécurité 24/7</h3>
                    <p>Parking privé surveillé et gardiennage permanent pour votre tranquillité d'esprit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERIE -->
    <section id="galerie" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Immersion Satrana</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1571896349842-6e53ce41e86a?q=80&w=1200&auto=format&fit=crop" alt="Chambre Luxueuse">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1584622050111-993a426fbf0a?q=80&w=800&auto=format&fit=crop" alt="Salle de bain moderne">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?q=80&w=800&auto=format&fit=crop" alt="Détail décoration">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1629140727571-9b5c6f6267b4?q=80&w=800&auto=format&fit=crop" alt="Jardin extérieur">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=800&auto=format&fit=crop" alt="Lobby">
                </div>
            </div>
        </div>
    </section>

    <!-- A PROPOS -->
    <section class="section-padding about-section">
        <div class="container about-wrapper">
            <div class="about-content">
                <h2>L'Esprit Satrana</h2>
                <p style="margin-top: 20px; color: var(--color-text-light);">
                    Au Satrana Hotel, nous croyons que l'hospitalité est un art. Ancrés au cœur de Tamatave, nous avons créé un lieu où l'authenticité de l'accueil malagasy rencontre les standards internationaux de confort.
                </p>
                <p style="margin-top: 15px; color: var(--color-text-light);">
                    Que vous soyez ici pour affaires ou pour découvrir la beauté de la côte Est, notre équipe dévouée s'assure que chaque instant de votre séjour soit empreint de sérénité et de chaleur humaine.
                </p>
            </div>
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=800&auto=format&fit=crop" alt="Accueil Satrana">
            </div>
        </div>
    </section>

    <!-- LOCALISATION & CONTACT -->
    <section id="contact" class="contact-section">
        <div class="contact-layout">
            <div class="contact-form-container">
                <h2 style="color: white; margin-bottom: 30px;">Planifiez votre séjour</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" id="name" class="form-control" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="votre@email.com">
                    </div>
                    <div class="form-group">
                        <label for="dates">Dates de séjour</label>
                        <input type="text" id="dates" class="form-control" placeholder="Arrivée - Départ">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="4" placeholder="Précisions sur votre demande..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Envoyer la demande</button>
                </form>

                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Boulevard Joffre, Toamasina 501, Madagascar</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+261 34 00 000 00</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>reservation@satranahotel.mg</span>
                    </div>
                </div>
            </div>
            <div id="localisation" class="contact-map">
                <!-- Placeholder Map (Google Maps Embed would go here) -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60655.22851458925!2d49.36647260593452!3d-18.14917711467471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f501170d743a3d%3A0x6758414324208269!2sToamasina%2C%20Madagascar!5e0!3m2!1sen!2sfr!4v1700000000000!5m2!1sen!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Satrana Hotel</h4>
                    <p>L'expérience hôtelière de référence à Tamatave. Confort, sécurité et élégance.</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#chambres">Hébergements</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#galerie">Galerie Photos</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Satrana Hotel Toamasina. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        const LOGO_URL = "logo.jpg";
        
        // Initialisation du Logo
        document.addEventListener('DOMContentLoaded', () => {
            const logoImg = document.getElementById('logo-img');
            if(logoImg) {
                logoImg.src = LOGO_URL;
            }

            // Gestion Header Scroll
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Mobile Menu
            const hamburger = document.getElementById('hamburger');
            const navLinks = document.getElementById('nav-links');
            
            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Close menu when clicking a link
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                });
            });

            // Scroll Animation Observer
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

            // Apply animation styles to sections
            document.querySelectorAll('section h2, .room-card, .service-item').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.8s ease-out';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>