<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel Shalimar | Élégance au cœur d'Antananarivo</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --primary: #064E44; /* Vert Profond */
            --primary-light: #0a6b5d;
            --accent: #E09936; /* Or/Ambre */
            --accent-hover: #c48326;
            --secondary: #588352; /* Vert Sauge */
            --bg-light: #F9F9F7; /* Crème très léger */
            --white: #ffffff;
            --text-dark: #1a1a1a;
            --text-grey: #4a4a4a;
            --shadow: 0 10px 30px -10px rgba(6, 78, 68, 0.15);
            --radius: 8px;
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
            font-family: 'DM Sans', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            font-weight: 700;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            background-color: var(--accent);
            color: var(--white);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            border-radius: 4px; /* Slightly squared for premium feel */
            transition: var(--transition);
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(224, 153, 54, 0.3);
        }

        .btn:hover {
            background-color: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(224, 153, 54, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--accent);
            color: var(--accent);
            box-shadow: none;
        }

        .btn-outline:hover {
            background-color: var(--accent);
            color: var(--white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .mb-2 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 2rem; }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.05); /* Transparent initial */
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90px;
            transition: var(--transition);
        }

        header.scrolled .nav-container { height: 70px; }

        .logo-container img {
            max-height: 60px; /* Ajusté */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 40px;
        }

        nav a {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--white);
            position: relative;
            transition: color 0.3s;
        }

        header.scrolled nav a { color: var(--primary); }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: width 0.3s;
        }

        nav a:hover::after { width: 100%; }

        .mobile-toggle { display: none; color: var(--white); font-size: 1.5rem; cursor: pointer; }
        header.scrolled .mobile-toggle { color: var(--primary); }

        /* --- HERO --- */
        #hero {
            height: 100vh;
            min-height: 700px;
            background-image: linear-gradient(rgba(6, 78, 68, 0.7), rgba(6, 78, 68, 0.4)), url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax */
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            color: var(--white);
            max-width: 800px;
            padding-top: 80px; /* Prevent header overlap */
        }

        .hero-content h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 24px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.5s;
        }

        .hero-content p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.8s;
        }

        .hero-btn-wrapper {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 1.1s;
        }

        /* --- TRUST BAR --- */
        #trust {
            background: var(--white);
            padding: 60px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            z-index: 10;
            margin-top: -50px; /* Overlap hero */
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }

        .trust-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .trust-icon {
            font-size: 2rem;
            color: var(--secondary);
            background: rgba(88, 131, 82, 0.1);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trust-text {
            font-weight: 600;
            color: var(--primary);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- ROOMS --- */
        #rooms { background-color: var(--bg-light); }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h3 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .section-header p {
            color: var(--secondary);
            font-size: 1.1rem;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .room-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(6, 78, 68, 0.15);
        }

        .room-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .room-image img {
            transition: transform 0.8s ease;
        }

        .room-card:hover .room-image img {
            transform: scale(1.05);
        }

        .room-details {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .room-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .room-features {
            color: var(--text-grey);
            margin-bottom: 20px;
            font-size: 0.95rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .room-price {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .room-price span {
            font-size: 0.9rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            color: var(--text-grey);
        }

        /* --- LOCATION --- */
        #location {
            background-color: var(--white);
            overflow: hidden;
        }

        .location-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .location-text h3 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .location-list li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.1rem;
            color: var(--text-grey);
        }

        .location-list li::before {
            content: '•';
            color: var(--accent);
            font-size: 2rem;
            line-height: 0;
            margin-right: 15px;
        }

        .map-wrapper {
            position: relative;
            height: 500px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: var(--white);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            max-width: 250px;
        }

        /* --- TEAM --- */
        #team {
            background-color: var(--primary);
            color: var(--white);
            position: relative;
        }

        #team h3 { color: var(--white); margin-bottom: 20px; }
        #team p { color: rgba(255,255,255,0.8); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px; }

        .team-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .team-img-wrapper {
            position: relative;
        }
        
        .team-img-wrapper::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            border: 2px solid var(--accent);
            z-index: 0;
            border-radius: var(--radius);
        }

        .team-img-wrapper img {
            position: relative;
            z-index: 1;
            border-radius: var(--radius);
        }

        /* --- CONTACT & FAQ --- */
        #contact { background: var(--bg-light); }

        .contact-grid {
            display: grid;
            grid-template-columns: 3fr 2fr;
            gap: 60px;
        }

        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .form-group { margin-bottom: 20px; }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: #fdfdfd;
        }

        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }

        .faq-question {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
            display: block;
            font-size: 1.1rem;
        }

        .faq-answer { color: var(--text-grey); font-size: 0.95rem; }

        .contact-details { margin-top: 40px; }
        .contact-details p { margin-bottom: 10px; display: flex; align-items: center; gap: 10px; }
        .contact-icon { color: var(--accent); }

        /* --- FOOTER --- */
        footer {
            background-color: #04362F; /* Darker than primary */
            color: rgba(255,255,255,0.7);
            padding: 60px 0 30px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a:hover { color: var(--accent); }

        .copyright { text-align: center; }

        /* --- FLOATING WHATSAPP --- */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #1faa50;
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

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 3rem; }
            .trust-grid { grid-template-columns: repeat(2, 1fr); }
            .location-container, .team-grid, .contact-grid { grid-template-columns: 1fr; gap: 40px; }
            .team-img-wrapper { order: -1; } /* Image on top on mobile */
            .map-wrapper { height: 350px; }
        }

        @media (max-width: 768px) {
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--primary);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                box-shadow: -5px 0 15px rgba(0,0,0,0.2);
            }
            
            nav ul.active { right: 0; }
            .mobile-toggle { display: block; z-index: 1001; }
            
            /* Burger animation */
            .mobile-toggle.active { color: var(--white); position: fixed; right: 20px; top: 25px; }

            .hero-content h1 { font-size: 2.2rem; }
            .section-padding { padding: 60px 0; }
            #trust { margin-top: 0; box-shadow: none; padding: 40px 20px; background: var(--bg-light); }
            .trust-grid { gap: 30px; }
            .header-cta { display: none; } /* Hide CTA in menu on mobile to save space */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container">
                <img id="logo-img" alt="Hôtel Shalimar Logo">
            </a>
            <div class="mobile-toggle" onclick="toggleMenu()">☰</div>
            <nav>
                <ul id="nav-list">
                    <li><a href="#rooms" onclick="toggleMenu()">Chambres</a></li>
                    <li><a href="#location" onclick="toggleMenu()">Localisation</a></li>
                    <li><a href="#team" onclick="toggleMenu()">L'Équipe</a></li>
                    <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
                    <li class="header-cta"><a href="#contact" class="btn">Réserver</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section id="hero">
        <div class="container hero-content">
            <h1>Élégance, Calme et Confort au Cœur d'Antananarivo</h1>
            <p>Profitez de nos 32 chambres climatisées et d'un service hôtelier complet pour vos séjours d'affaires et touristiques. L'adresse de référence pour un séjour sans compromis.</p>
            <div class="hero-btn-wrapper">
                <a href="#rooms" class="btn">Voir les disponibilités</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section>
        <div class="container" id="trust">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                    </div>
                    <span class="trust-text">Wifi Haut Débit</span>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20v-6M6 20V10M18 20V4"/></svg>
                    </div>
                    <span class="trust-text">Climatisation</span>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <span class="trust-text">Réception 24h/24</span>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    </div>
                    <span class="trust-text">Parking Sécurisé</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms -->
    <section id="rooms" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h3>Votre Espace de Détente</h3>
                <p>Des chambres conçues pour le repos absolu après une journée intense.</p>
            </div>
            <div class="rooms-grid">
                <!-- Standard -->
                <div class="room-card reveal">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?q=80&w=2070&auto=format&fit=crop" alt="Chambre Standard">
                    </div>
                    <div class="room-details">
                        <h4 class="room-title">Chambre Standard</h4>
                        <p class="room-features">Lit Queen Size • TV Écran Plat • Bureau • Douche Italienne • Wifi</p>
                        <div class="room-price">
                            120 000 Ar <span>/ nuit</span>
                        </div>
                        <a href="#contact" class="btn-outline btn">Réserver ce type</a>
                    </div>
                </div>
                <!-- Executive -->
                <div class="room-card reveal">
                    <div class="room-image">
                        <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?q=80&w=1974&auto=format&fit=crop" alt="Suite Exécutive">
                    </div>
                    <div class="room-details">
                        <h4 class="room-title">Suite Exécutive</h4>
                        <p class="room-features">Espace Salon • Vue Ville • Minibar • Espace Travail • Coffre-fort</p>
                        <div class="room-price">
                            180 000 Ar <span>/ nuit</span>
                        </div>
                        <a href="#contact" class="btn-outline btn">Réserver ce type</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section id="location" class="section-padding">
        <div class="container location-container">
            <div class="map-wrapper reveal">
                <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?q=80&w=2062&auto=format&fit=crop" alt="Carte Antananarivo" style="height: 100%; width: 100%; object-fit: cover;">
                <div class="map-overlay">
                    <strong>Hôtel Shalimar</strong><br>
                    <small>Centre Ville, Antananarivo</small>
                </div>
            </div>
            <div class="location-text reveal">
                <h3>Au Centre de Tout, Loin du Bruit</h3>
                <p class="mb-4">Antananarivo est une ville qui bouge. Situé stratégiquement, l'Hôtel Shalimar vous permet d'éviter les embouteillages pour vos rendez-vous tout en garantissant des nuits paisibles.</p>
                <ul class="location-list">
                    <li>5 min des Banques et Ministères</li>
                    <li>10 min de l'Avenue de l'Indépendance</li>
                    <li>Accès direct aux taxis</li>
                    <li>Proximité immédiate des restaurants</li>
                </ul>
                <a href="https://maps.google.com" target="_blank" class="btn">Itinéraire Google Maps</a>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="section-padding">
        <div class="container team-grid">
            <div class="team-text reveal">
                <h3>L'Hospitalité Malagasy par Excellence</h3>
                <p>Chez Shalimar, vous n'êtes pas un numéro de chambre. Notre héritage est celui de l'accueil chaleureux et du service personnalisé.</p>
                <p>Notre équipe dédiée veille à votre confort 24h/24 et 7j/7, prête à vous conseiller sur les meilleures adresses de la ville ou à faciliter vos déplacements.</p>
            </div>
            <div class="team-img-wrapper reveal">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2832&auto=format&fit=crop" alt="Équipe Hôtel Shalimar">
            </div>
        </div>
    </section>

    <!-- Contact & FAQ -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h3>Réservez Votre Séjour</h3>
                <p>Disponibilité en temps réel. Réponse immédiate.</p>
            </div>
            <div class="contact-grid">
                <div class="contact-form reveal">
                    <form onsubmit="event.preventDefault(); alert('Merci ! Nous vous recontacterons sous peu.');">
                        <div class="form-group">
                            <label>Nom Complet</label>
                            <input type="text" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label>Dates Souhaitées</label>
                            <input type="text" class="form-control" placeholder="Arrivée - Départ">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" placeholder="Besoin spécifique ?"></textarea>
                        </div>
                        <button type="submit" class="btn" style="width: 100%;">Vérifier la disponibilité</button>
                    </form>
                </div>
                <div class="faq-container reveal">
                    <div class="faq-item">
                        <span class="faq-question">Acceptez-vous les cartes bancaires ?</span>
                        <p class="faq-answer">Oui, nous acceptons VISA et Mastercard, ainsi que les paiements en espèces (Ariary, Euro, USD).</p>
                    </div>
                    <div class="faq-item">
                        <span class="faq-question">Organisez-vous le transfert aéroport ?</span>
                        <p class="faq-answer">Absolument. Sur demande, notre navette privée vous récupère à Ivato (frais additionnels).</p>
                    </div>
                    <div class="contact-details">
                        <p><span class="contact-icon">📍</span> Lot IVX Antananarivo 101, Madagascar</p>
                        <p><span class="contact-icon">📞</span> <a href="tel:+261202200000">+261 20 22 000 00</a></p>
                        <p><span class="contact-icon">✉️</span> reservation@hotel-shalimar.mg</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Hôtel Shalimar</h4>
                    <p>Votre refuge de confort au cœur de la capitale.</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#rooms">Chambres</a></li>
                        <li><a href="#location">Localisation</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Légal</h4>
                    <ul>
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                        <li><a href="#">CGV</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Hôtel Shalimar. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="#FFF"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.305-5.235c0-5.421 4.409-9.85 9.829-9.85 2.624 0 5.088 1.026 6.95 2.891a9.825 9.825 0 012.893 6.952c-.001 5.422-4.411 9.852-9.832 9.852M12.053 2C6.541 2 2.053 6.488 2.053 12c0 1.821.487 3.53 1.338 5.002L2 22l5.122-1.342A9.977 9.977 0 0012.053 22a10 10 0 0010-10c0-5.512-4.488-10-10-10"/></svg>
    </a>

    <!-- Scripts -->
    <script>
        // LOGO INTEGRATION - STRICT REQUIREMENT
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // Sticky Header & Mobile Menu
        const header = document.querySelector('header');
        const navUl = document.querySelector('nav ul');
        const toggleBtn = document.querySelector('.mobile-toggle');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        function toggleMenu() {
            navUl.classList.toggle('active');
            toggleBtn.classList.toggle('active');
            if (toggleBtn.innerHTML === '☰') {
                toggleBtn.innerHTML = '✕';
            } else {
                toggleBtn.innerHTML = '☰';
            }
        }

        // Intersection Observer for Animations
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

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>