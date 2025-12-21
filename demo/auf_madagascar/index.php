<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Madagascar - L'Excellence Francophone</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --primary: #9C1B3B;     /* Rouge AUF */
            --secondary: #6A3C84;   /* Violet Institution/CEF */
            --tertiary: #1995C6;    /* Bleu Tech/CNF */
            --dark: #1F2937;
            --light: #F9FAFB;
            --white: #FFFFFF;
            --gray: #9CA3AF;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --radius: 12px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Open Sans', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 28px;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 0.95rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(156, 27, 59, 0.3);
        }

        .btn-primary:hover {
            background-color: #7a152e;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(156, 27, 59, 0.4);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .section-padding {
            padding: 80px 0;
        }

        .badge {
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* -----------------------------------------------------------
           HEADER & NAVIGATION
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-sm);
            padding: 10px 0;
        }

        header.scrolled nav a {
            color: var(--dark);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo-container img {
            height: 50px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .cta-header {
            padding: 10px 20px;
            background: var(--primary);
            color: white !important;
            border-radius: 30px;
        }
        
        .cta-header:hover::after { width: 0 !important; }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero h2 {
            font-size: 1.25rem;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            margin-bottom: 40px;
            max-width: 600px;
            opacity: 0.9;
        }

        /* -----------------------------------------------------------
           PARTNERS (Social Proof)
        ----------------------------------------------------------- */
        .partners {
            background: var(--white);
            padding: 30px 0;
            border-bottom: 1px solid #eee;
        }

        .partners-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .partner-item {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #9CA3AF;
            font-size: 1.2rem;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .partner-item i {
            font-size: 1.5rem;
        }

        /* -----------------------------------------------------------
           LOCATIONS (Interactive Map)
        ----------------------------------------------------------- */
        .locations {
            background: var(--light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .map-interface {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .location-list {
            padding: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .location-btn {
            text-align: left;
            padding: 20px;
            background: transparent;
            border: 1px solid #eee;
            border-radius: 12px;
            cursor: pointer;
            transition: var(--transition);
        }

        .location-btn h4 {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .location-btn p {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .location-btn.active, .location-btn:hover {
            background: #FFF5F7; /* Light red tint */
            border-color: var(--primary);
        }

        .location-btn.active h4 {
            color: var(--primary);
        }

        .map-display {
            position: relative;
            background: #ddd;
            min-height: 400px;
        }

        .map-display img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .location-card {
            position: absolute;
            bottom: 30px;
            left: 30px;
            right: 30px;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 12px;
            backdrop-filter: blur(5px);
            box-shadow: var(--shadow-sm);
            transform: translateY(20px);
            opacity: 0;
            transition: var(--transition);
        }

        .location-card.show {
            transform: translateY(0);
            opacity: 1;
        }

        .location-card-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info h3 {
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        /* -----------------------------------------------------------
           SERVICES (Cards)
        ----------------------------------------------------------- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            position: relative;
            top: 0;
        }

        .service-card:hover {
            top: -10px;
        }

        .card-header {
            height: 200px;
            position: relative;
        }

        .card-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        }

        .card-icon {
            width: 60px;
            height: 60px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            box-shadow: var(--shadow-sm);
            margin-right: 15px;
        }

        .cnf .card-icon { color: var(--tertiary); }
        .cef .card-icon { color: var(--secondary); }

        .card-body {
            padding: 30px;
        }

        .card-body h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .cnf h3 { color: var(--tertiary); }
        .cef h3 { color: var(--secondary); }

        .card-list li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            color: #555;
        }

        .card-list li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0;
        }

        .cnf .card-list li::before { color: var(--tertiary); }
        .cef .card-list li::before { color: var(--secondary); }

        .card-footer {
            padding: 20px 30px;
            background: #F9FAFB;
            border-top: 1px solid #eee;
        }

        /* -----------------------------------------------------------
           AGENDA
        ----------------------------------------------------------- */
        .agenda {
            background: white;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            border: 1px solid #eee;
            border-radius: 30px;
            background: transparent;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--dark);
            color: var(--white);
            border-color: var(--dark);
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .event-card {
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 25px;
            transition: var(--transition);
        }

        .event-card:hover {
            border-color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .event-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .date-badge {
            background: #FFF1F2;
            color: var(--primary);
            padding: 5px 10px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.8rem;
        }

        .seats-badge {
            color: #d97706;
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .event-card h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .event-details {
            display: flex;
            gap: 15px;
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .event-details span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* -----------------------------------------------------------
           ABOUT & NEWSLETTER
        ----------------------------------------------------------- */
        .about-newsletter {
            background: var(--dark);
            color: var(--white);
            text-align: center;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 30px auto 0;
            display: flex;
            gap: 10px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 20px;
            border-radius: 50px;
            border: none;
            outline: none;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background: #111827;
            color: #D1D5DB;
            padding: 60px 0 20px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h5 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a:hover {
            color: var(--primary);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary);
            color: var(--white);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 0.8rem;
        }

        /* -----------------------------------------------------------
           MOBILE STICKY BAR
        ----------------------------------------------------------- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-top: 1px solid #eee;
            padding: 10px 20px;
            display: none; /* Flex on mobile */
            justify-content: space-around;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 9999;
        }

        .mobile-btn {
            flex: 1;
            text-align: center;
            padding: 8px;
            border-radius: 8px;
            color: var(--dark);
            font-size: 0.8rem;
            font-weight: 600;
        }

        .mobile-btn i {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 4px;
            color: var(--primary);
        }
        
        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .nav-links { display: none; }
            .mobile-menu-toggle { display: block; }
            header.scrolled .mobile-menu-toggle { color: var(--dark); }
            
            .map-interface { grid-template-columns: 1fr; }
            .map-display { min-height: 250px; order: -1; }
            
            .newsletter-form { flex-direction: column; }
            
            .mobile-sticky-bar { display: flex; }
            body { padding-bottom: 60px; } /* Space for sticky bar */
            
            .services-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- 1. HEADER -->
    <header id="header">
        <div class="container navbar">
            <div id="logo-container" class="logo-container">
                <!-- JS will inject logo here -->
                <!-- INSTRUCTIONS POUR LE CLIENT: Remplacez l'URL dans le script en bas de page par votre logo final -->
            </div>
            
            <nav>
                <div class="nav-links">
                    <a href="#services">Services</a>
                    <a href="#locations">Implantations</a>
                    <a href="#agenda">Agenda</a>
                    <a href="#about">À Propos</a>
                    <a href="#agenda" class="cta-header">Agenda</a>
                </div>
                <div class="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- 2. HERO -->
    <section class="hero">
        <div class="container hero-content">
            <h1 data-aos="fade-up">L'Excellence Francophone au service de votre Avenir à Madagascar.</h1>
            <h2 data-aos="fade-up" data-aos-delay="100">Accédez aux ressources numériques (CNF), boostez votre employabilité (CEF) et connectez-vous au réseau universitaire mondial depuis nos 4 implantations.</h2>
            <button class="btn btn-primary" onclick="document.getElementById('agenda').scrollIntoView()">
                <i class="far fa-calendar-alt"></i> Consulter l'Agenda des Formations
            </button>
        </div>
    </section>

    <!-- 3. SOCIAL PROOF -->
    <div class="partners">
        <div class="container">
            <div class="partners-grid">
                <span style="font-size: 0.8rem; color: #aaa; width: 100%; text-align: center; margin-bottom: 10px;">PARTENAIRE DE L'ENSEIGNEMENT SUPÉRIEUR MALGACHE</span>
                <div class="partner-item"><i class="fas fa-university"></i> UNIV. ANTANANARIVO</div>
                <div class="partner-item"><i class="fas fa-graduation-cap"></i> UNIV. FIANARANTSOA</div>
                <div class="partner-item"><i class="fas fa-landmark"></i> MINISTÈRE E.S.R</div>
            </div>
        </div>
    </div>

    <!-- 4. LOCATIONS (Interactive) -->
    <section id="locations" class="section-padding locations">
        <div class="container">
            <div class="section-header">
                <h2>Où nous trouver ?</h2>
                <p>Le réseau AUF près de chez vous : 4 lieux pour vous accompagner.</p>
            </div>

            <div class="map-interface">
                <!-- Liste des lieux -->
                <div class="location-list">
                    <div class="location-btn active" onclick="updateMap(0)">
                        <h4>Bureau National</h4>
                        <p>Antananarivo - Coordination</p>
                    </div>
                    <div class="location-btn" onclick="updateMap(1)">
                        <h4>CNF Antananarivo</h4>
                        <p>Campus Numérique - Université Ankatso</p>
                    </div>
                    <div class="location-btn" onclick="updateMap(2)">
                        <h4>CEF Antananarivo</h4>
                        <p>Centre d'Employabilité - Zone Tana</p>
                    </div>
                    <div class="location-btn" onclick="updateMap(3)">
                        <h4>CNF/CEF Fianarantsoa</h4>
                        <p>Antenne Régionale - Campus Andrainjato</p>
                    </div>
                </div>

                <!-- Visuel "Carte" -->
                <div class="map-display">
                    <!-- Image de fond abstract map -->
                    <img id="map-image" src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Map Location">
                    
                    <!-- Carte info flottante -->
                    <div class="location-card show" id="location-card">
                        <div class="location-card-content">
                            <div class="info">
                                <h3 id="loc-title">Bureau National</h3>
                                <p id="loc-address"><i class="fas fa-map-marker-alt"></i> Antananarivo, Quartier Isoraka</p>
                                <p style="font-size:0.85rem; color:#666; margin-top:5px;">Lun-Ven: 08h-17h</p>
                            </div>
                            <a href="#" class="btn btn-secondary" style="padding: 8px 15px; font-size: 0.8rem;">Itinéraire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SERVICES -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Nos Services : Du Numérique à l'Emploi</h2>
            </div>

            <div class="services-grid">
                <!-- Card CNF -->
                <article class="service-card cnf">
                    <div class="card-header">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="CNF">
                        <div class="card-overlay">
                            <div class="card-icon"><i class="fas fa-wifi"></i></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Campus Numérique (CNF)</h3>
                        <ul class="card-list">
                            <li>Accès bases de données internationales</li>
                            <li>Visioconférences & FOAD</li>
                            <li>Certifications PIX & C2i</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" style="color: var(--tertiary); font-weight: 700;">Accéder aux ressources <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- Card CEF -->
                <article class="service-card cef">
                    <div class="card-header">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="CEF">
                        <div class="card-overlay">
                            <div class="card-icon"><i class="fas fa-briefcase"></i></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3>Centre d'Employabilité (CEF)</h3>
                        <ul class="card-list">
                            <li>Ateliers CV & Lettre de motivation</li>
                            <li>Coaching personnalisé & Soft Skills</li>
                            <li>Rencontres avec les entreprises</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="#" style="color: var(--secondary); font-weight: 700;">Services aux étudiants <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- 6. AGENDA -->
    <section id="agenda" class="section-padding" style="background: #F9FAFB;">
        <div class="container">
            <div class="section-header">
                <h2>Prochains Événements</h2>
            </div>

            <div class="filters">
                <button class="filter-btn active">Tout</button>
                <button class="filter-btn">Antananarivo</button>
                <button class="filter-btn">Fianarantsoa</button>
                <button class="filter-btn">En ligne</button>
            </div>

            <div class="events-grid">
                <!-- Event 1 -->
                <div class="event-card">
                    <div class="event-header">
                        <span class="date-badge">15 NOV.</span>
                        <span class="seats-badge"><i class="fas fa-fire"></i> 5 places restantes</span>
                    </div>
                    <h4>Atelier : Réussir son entretien d'embauche</h4>
                    <div class="event-details">
                        <span><i class="fas fa-map-marker-alt"></i> CEF Tana</span>
                        <span><i class="fas fa-tag"></i> Gratuit</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; justify-content: center;">Je m'inscris</button>
                </div>

                <!-- Event 2 -->
                <div class="event-card">
                    <div class="event-header">
                        <span class="date-badge" style="background:#E0F2FE; color:var(--tertiary);">22 NOV.</span>
                        <span class="seats-badge" style="color:green;"><i class="fas fa-check"></i> Disponible</span>
                    </div>
                    <h4>Formation : Maîtriser la recherche documentaire</h4>
                    <div class="event-details">
                        <span><i class="fas fa-laptop"></i> En ligne</span>
                        <span><i class="fas fa-tag"></i> Gratuit</span>
                    </div>
                    <button class="btn btn-secondary" style="width: 100%; justify-content: center;">Détails</button>
                </div>

                <!-- Event 3 -->
                <div class="event-card">
                    <div class="event-header">
                        <span class="date-badge">01 DÉC.</span>
                        <span class="seats-badge"><i class="fas fa-fire"></i> Complet bientôt</span>
                    </div>
                    <h4>Rencontre : "Café des Entrepreneurs"</h4>
                    <div class="event-details">
                        <span><i class="fas fa-map-marker-alt"></i> CNF Fianara</span>
                        <span><i class="fas fa-tag"></i> Sur dossier</span>
                    </div>
                    <button class="btn btn-primary" style="width: 100%; justify-content: center;">Candidater</button>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="#" style="font-weight: 600; text-decoration: underline;">Voir tout le calendrier</a>
            </div>
        </div>
    </section>

    <!-- 7. ABOUT & NEWSLETTER -->
    <section id="about" class="section-padding about-newsletter">
        <div class="container">
            <h2 style="margin-bottom: 20px;">L'AUF en Bref</h2>
            <p style="max-width: 700px; margin: 0 auto 40px; opacity: 0.9;">
                L'Agence Universitaire de la Francophonie (AUF) regroupe plus de 1000 universités sur tous les continents. 
                À Madagascar, nous œuvrons pour une solidarité active, mettant le savoir et le numérique au service du développement et de l'emploi des jeunes.
            </p>
            
            <div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 20px;">
                <h3><i class="far fa-paper-plane"></i> Restez informé</h3>
                <p>Ne ratez aucun appel à candidatures ou bourses doctorales.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Merci pour votre inscription !')">
                    <input type="email" placeholder="Votre email universitaire" required>
                    <button type="submit" class="btn btn-primary">S'abonner</button>
                </form>
            </div>
        </div>
    </section>

    <!-- 8. FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h5 style="color: var(--primary);">AUF MADAGASCAR</h5>
                    <p style="margin-bottom: 20px;">Le réseau mondial des universités francophones.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>Antananarivo</h5>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> +261 20 22 318 04</li>
                        <li><i class="fas fa-envelope"></i> info-tana@auf.org</li>
                        <li>Campus Ankatso</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Fianarantsoa</h5>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> +261 20 75 900 00</li>
                        <li><i class="fas fa-envelope"></i> info-fianara@auf.org</li>
                        <li>Campus Andrainjato</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 AUF Madagascar. Tous droits réservés. | Mentions Légales | Plan du site</p>
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BAR -->
    <div class="mobile-sticky-bar">
        <a href="#agenda" class="mobile-btn">
            <i class="far fa-calendar-alt"></i>
            Agenda
        </a>
        <a href="#locations" class="mobile-btn">
            <i class="fas fa-map-marker-alt"></i>
            Carte
        </a>
        <a href="#services" class="mobile-btn">
            <i class="fas fa-th-large"></i>
            Services
        </a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. LOGO INJECTION (MANDATORY CODE) ---
        // Instructions pour le client : Remplacez ce lien par votre logo réel.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Inject logo
        document.getElementById('logo-container').innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Logo AUF"></a>`;

        // --- 2. STICKY HEADER ---
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. INTERACTIVE MAP LOGIC ---
        const locationsData = [
            {
                title: "Bureau National",
                address: "Antananarivo, Quartier Isoraka",
                image: "https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
            },
            {
                title: "CNF Antananarivo",
                address: "Campus Universitaire d'Ankatso",
                image: "https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
            },
            {
                title: "CEF Antananarivo",
                address: "Zone Tana, Bâtiment Numérique",
                image: "https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
            },
            {
                title: "CNF/CEF Fianarantsoa",
                address: "Campus Andrainjato, Fianarantsoa",
                image: "https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
            }
        ];

        function updateMap(index) {
            // Update buttons state
            const buttons = document.querySelectorAll('.location-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            buttons[index].classList.add('active');

            // Update content with Fade effect
            const card = document.getElementById('location-card');
            const img = document.getElementById('map-image');
            const title = document.getElementById('loc-title');
            const address = document.getElementById('loc-address');

            card.classList.remove('show');
            
            setTimeout(() => {
                title.innerText = locationsData[index].title;
                address.innerHTML = `<i class="fas fa-map-marker-alt"></i> ${locationsData[index].address}`;
                img.src = locationsData[index].image;
                card.classList.add('show');
            }, 300);
        }

        // --- 4. ANIMATION ON SCROLL (Simple Native Observer) ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        // Apply fade-in to cards
        document.querySelectorAll('.service-card, .event-card').forEach((el) => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });

    </script>
</body>
</html>