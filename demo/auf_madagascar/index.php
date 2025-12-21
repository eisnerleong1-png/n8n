<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Madagascar | Excellence & Avenir</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Palette AUF */
            --primary: #9C1B3B; /* Rouge AUF */
            --primary-hover: #7a152e;
            --secondary: #6A3C84; /* Violet */
            --tertiary: #1995C6; /* Bleu CNF */
            
            /* Neutrals */
            --dark: #1a1a1a;
            --grey: #4a4a4a;
            --light-grey: #F5F5F7;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.95);
            
            /* UI Elements */
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 30px rgba(0,0,0,0.08);
            --shadow-lg: 0 20px 40px rgba(0,0,0,0.12);
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--grey);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            color: var(--dark);
            font-weight: 700;
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
            display: block;
            object-fit: cover;
        }

        /* --- Utilities --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            gap: 10px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(156, 27, 59, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(156, 27, 59, 0.4);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--secondary);
            border: 2px solid var(--secondary);
        }

        .btn-secondary:hover {
            background-color: var(--secondary);
            color: var(--white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-red {
            background-color: rgba(156, 27, 59, 0.1);
            color: var(--primary);
        }

        /* --- Header & Nav --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo-wrapper img {
            height: 50px;
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 32px;
        }

        nav a {
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.95rem;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        nav a:hover::after {
            width: 100%;
        }

        /* --- Hero Section --- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px; /* Offset for fixed header */
            overflow: hidden;
            background-color: var(--light-grey);
        }

        .hero-bg-shape {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary) 0%, #4a2c5e 100%);
            clip-path: polygon(20% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 24px;
            line-height: 1.1;
        }

        .hero-text span {
            color: var(--primary);
        }

        .hero-text p {
            font-size: 1.125rem;
            color: var(--grey);
            margin-bottom: 40px;
            max-width: 90%;
        }

        .hero-visual {
            position: relative;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(12, 1fr);
            height: 600px;
        }

        .hero-img {
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            position: absolute;
        }

        .hero-img-1 {
            grid-column: 1 / 9;
            grid-row: 2 / 10;
            width: 100%;
            height: 100%;
            z-index: 2;
            background-image: url('https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
        }

        .hero-img-2 {
            grid-column: 7 / 13;
            grid-row: 6 / 12;
            width: 100%;
            height: 100%;
            z-index: 3;
            border: 8px solid var(--white);
            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
            background-size: cover;
            background-position: center;
        }

        /* --- Social Proof --- */
        .partners {
            padding: 40px 0;
            background: var(--white);
            border-bottom: 1px solid #eee;
        }
        
        .partners-label {
            text-align: center;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #999;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            opacity: 0.6;
            flex-wrap: wrap;
        }

        .logos-grid img {
            height: 50px;
            filter: grayscale(100%);
            transition: var(--transition);
        }

        .logos-grid img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* --- Locations (Map Concept) --- */
        .locations {
            background-color: var(--light-grey);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .map-interface {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 20px;
            box-shadow: var(--shadow-md);
            overflow: hidden;
            min-height: 500px;
        }

        .location-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .loc-btn {
            text-align: left;
            padding: 20px;
            border-radius: var(--radius-md);
            background: transparent;
            border: 1px solid transparent;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .loc-btn:hover {
            background-color: var(--light-grey);
        }

        .loc-btn.active {
            background-color: rgba(156, 27, 59, 0.05);
            border-color: rgba(156, 27, 59, 0.2);
        }

        .loc-btn .icon-box {
            width: 40px;
            height: 40px;
            background: #eee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--grey);
            transition: var(--transition);
        }

        .loc-btn.active .icon-box {
            background: var(--primary);
            color: var(--white);
        }

        .loc-info h4 {
            font-size: 1.1rem;
            margin-bottom: 4px;
        }

        .loc-info p {
            font-size: 0.9rem;
            color: #777;
        }

        .map-display {
            position: relative;
            border-radius: var(--radius-md);
            overflow: hidden;
        }

        .map-card {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .map-card.active {
            opacity: 1;
            visibility: visible;
        }

        .card-img {
            height: 60%;
            background-size: cover;
            background-position: center;
        }

        .card-details {
            height: 40%;
            padding: 30px;
            background: #fdfdfd;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .detail-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 12px;
            color: var(--dark);
            font-size: 0.95rem;
        }

        .detail-row i {
            color: var(--primary);
            width: 20px;
        }

        /* --- Services --- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid #eee;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .service-header {
            padding: 40px;
            position: relative;
            color: var(--white);
        }

        .service-cnf .service-header {
            background: linear-gradient(135deg, var(--tertiary), #0f5c7d);
        }

        .service-cef .service-header {
            background: linear-gradient(135deg, var(--secondary), #451b5e);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .service-body {
            padding: 40px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .service-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .service-list li i {
            color: #27ae60;
            margin-top: 5px;
        }

        /* --- Agenda --- */
        .agenda {
            background-color: #FAFAFA;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 24px;
            border-radius: 30px;
            border: 1px solid #ddd;
            background: var(--white);
            color: var(--grey);
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
        }

        .event-card {
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-5px);
        }

        .event-img-wrap {
            height: 180px;
            position: relative;
            overflow: hidden;
        }

        .event-img-wrap img {
            width: 100%;
            height: 100%;
            transition: var(--transition);
        }

        .event-card:hover .event-img-wrap img {
            transform: scale(1.05);
        }

        .date-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--white);
            border-radius: 8px;
            padding: 8px 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            line-height: 1;
        }

        .date-day {
            display: block;
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
        }

        .date-month {
            display: block;
            font-size: 0.7rem;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--dark);
        }

        .event-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .event-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: #888;
            margin-bottom: 12px;
        }

        .event-title {
            font-size: 1.15rem;
            margin-bottom: 12px;
            flex-grow: 1;
        }

        .seats-indicator {
            font-size: 0.8rem;
            color: #d35400;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 20px;
        }

        .pulse {
            width: 8px;
            height: 8px;
            background: #d35400;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(211, 84, 0, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(211, 84, 0, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(211, 84, 0, 0); }
            100% { box-shadow: 0 0 0 0 rgba(211, 84, 0, 0); }
        }

        /* --- Footer --- */
        footer {
            background-color: var(--dark);
            color: #bbb;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 24px;
            font-size: 1.1rem;
        }

        .footer-col p {
            margin-bottom: 16px;
            font-size: 0.95rem;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--tertiary);
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            display: flex;
            justify-content: space-between;
            font-size: 0.85rem;
        }

        /* --- Newsletter --- */
        .newsletter-box {
            background: var(--secondary);
            color: var(--white);
            border-radius: var(--radius-lg);
            padding: 60px;
            text-align: center;
            margin-bottom: -60px;
            position: relative;
            z-index: 10;
            box-shadow: var(--shadow-lg);
        }

        .input-group {
            display: flex;
            max-width: 500px;
            margin: 30px auto 0;
            gap: 10px;
        }

        .input-group input {
            flex-grow: 1;
            padding: 14px 20px;
            border-radius: 50px;
            border: none;
            outline: none;
        }

        /* --- Sticky Mobile Bar --- */
        .mobile-sticky-bar {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 400px;
            background: var(--dark);
            border-radius: 50px;
            padding: 8px;
            z-index: 9999;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .mobile-sticky-btn {
            flex: 1;
            padding: 12px;
            border-radius: 40px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-agenda {
            background: var(--primary);
            color: var(--white);
        }

        .btn-map {
            background: var(--white);
            color: var(--dark);
        }

        /* --- Responsive --- */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .hero-bg-shape {
                width: 100%;
                opacity: 0.1;
                clip-path: none;
            }
            .hero-visual {
                display: none;
            }
            .hero-text {
                max-width: 100%;
                text-align: center;
            }
            .hero-text p {
                margin: 0 auto 40px;
            }
            .map-interface {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            .map-display {
                height: 300px;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem !important; }
            h2 { font-size: 2rem !important; }
            .nav-container { padding: 0 16px; }
            nav ul { display: none; } /* Simplified for this exercise */
            
            .mobile-sticky-bar {
                display: flex;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .input-group {
                flex-direction: column;
            }
            .input-group input, .input-group button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container nav-container">
            <div class="logo-wrapper" id="logo-container">
                <!-- Logo injected via JS -->
            </div>
            <nav>
                <ul>
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#lieux">Nos Lieux</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#agenda">Agenda</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 8px 20px; font-size: 0.9rem;">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="accueil">
        <div class="hero-bg-shape"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <h1>L'Excellence <span style="color: var(--primary);">Francophone</span> au service de votre Avenir.</h1>
                <h2>Connectez-vous au réseau universitaire mondial depuis nos 4 implantations à Madagascar.</h2>
                <p>Accédez aux ressources numériques (CNF), boostez votre employabilité (CEF) et rejoignez une communauté dynamique.</p>
                <div style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center; md:justify-content: flex-start;">
                    <a href="#agenda" class="btn btn-primary">Consulter l'Agenda <i class="fa-solid fa-arrow-right"></i></a>
                    <a href="#lieux" class="btn btn-secondary">Trouver un centre</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-img hero-img-1"></div> <!-- Tech/Student -->
                <div class="hero-img hero-img-2"></div> <!-- Group/Human -->
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <div class="partners">
        <div class="container">
            <p class="partners-label">Partenaire stratégique de l'Enseignement Supérieur Malgache</p>
            <div class="logos-grid">
                <!-- Placeholder logos simulating university logos in grayscale -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png" alt="Univ Tana" style="opacity: 0.5;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png" alt="Univ Fianara" style="opacity: 0.5;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png" alt="Ministère ESR" style="opacity: 0.5;">
            </div>
        </div>
    </div>

    <!-- Locations Section (Map) -->
    <section class="section-padding locations" id="lieux">
        <div class="container">
            <div class="section-header">
                <h2>4 Lieux, 1 Réseau</h2>
                <p>Que vous soyez à Antananarivo ou Fianarantsoa, il y a un espace AUF pour vous accompagner.</p>
            </div>

            <div class="map-interface">
                <!-- List -->
                <div class="location-list">
                    <button class="loc-btn active" onclick="switchLocation(0)">
                        <div class="icon-box"><i class="fa-solid fa-building"></i></div>
                        <div class="loc-info">
                            <h4>Bureau National</h4>
                            <p>Antananarivo - Zone administrative</p>
                        </div>
                    </button>
                    <button class="loc-btn" onclick="switchLocation(1)">
                        <div class="icon-box"><i class="fa-solid fa-wifi"></i></div>
                        <div class="loc-info">
                            <h4>CNF Antananarivo</h4>
                            <p>Campus Ankatso - Bibliothéque</p>
                        </div>
                    </button>
                    <button class="loc-btn" onclick="switchLocation(2)">
                        <div class="icon-box"><i class="fa-solid fa-briefcase"></i></div>
                        <div class="loc-info">
                            <h4>CEF Antananarivo</h4>
                            <p>Centre ville - Coworking Space</p>
                        </div>
                    </button>
                    <button class="loc-btn" onclick="switchLocation(3)">
                        <div class="icon-box"><i class="fa-solid fa-graduation-cap"></i></div>
                        <div class="loc-info">
                            <h4>CNF/CEF Fianarantsoa</h4>
                            <p>Université d'Andrainjato</p>
                        </div>
                    </button>
                </div>

                <!-- Display (Visual representation of the map pin click) -->
                <div class="map-display">
                    <!-- Card 1 -->
                    <div class="map-card active" id="card-0">
                        <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                        <div class="card-details">
                            <h3>Bureau National AUF</h3>
                            <div class="detail-row"><i class="fa-solid fa-location-dot"></i> Imm. Santa, Antanimena, Tana</div>
                            <div class="detail-row"><i class="fa-regular fa-clock"></i> Lun-Ven: 08h00 - 16h30</div>
                            <button class="btn btn-secondary" style="margin-top: 10px; padding: 10px 20px; font-size: 0.8rem;">Voir l'itinéraire</button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="map-card" id="card-1">
                        <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1531545514256-b1400bc00f31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                        <div class="card-details">
                            <h3>CNF Antananarivo</h3>
                            <div class="detail-row"><i class="fa-solid fa-location-dot"></i> Campus Universitaire Ankatso</div>
                            <div class="detail-row"><i class="fa-regular fa-clock"></i> Lun-Sam: 08h00 - 17h00</div>
                            <button class="btn btn-secondary" style="margin-top: 10px; padding: 10px 20px; font-size: 0.8rem;">Voir l'itinéraire</button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="map-card" id="card-2">
                        <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                        <div class="card-details">
                            <h3>CEF Antananarivo</h3>
                            <div class="detail-row"><i class="fa-solid fa-location-dot"></i> Centre Ville, Antaninarenina</div>
                            <div class="detail-row"><i class="fa-regular fa-clock"></i> Sur RDV et Ateliers</div>
                            <button class="btn btn-secondary" style="margin-top: 10px; padding: 10px 20px; font-size: 0.8rem;">Voir l'itinéraire</button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="map-card" id="card-3">
                        <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');"></div>
                        <div class="card-details">
                            <h3>CNF/CEF Fianarantsoa</h3>
                            <div class="detail-row"><i class="fa-solid fa-location-dot"></i> Université d'Andrainjato</div>
                            <div class="detail-row"><i class="fa-regular fa-clock"></i> Lun-Ven: 08h00 - 16h00</div>
                            <button class="btn btn-secondary" style="margin-top: 10px; padding: 10px 20px; font-size: 0.8rem;">Voir l'itinéraire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section-padding" id="services">
        <div class="container">
            <div class="section-header">
                <h2>Du Numérique à l'Emploi</h2>
                <p>Deux piliers pour soutenir votre parcours universitaire et professionnel.</p>
            </div>

            <div class="services-grid">
                <!-- Card CNF -->
                <article class="service-card service-cnf">
                    <div class="service-header">
                        <div class="service-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h3>Campus Numérique (CNF)</h3>
                        <p>Le Savoir à portée de clic</p>
                    </div>
                    <div class="service-body">
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Accès internet haut débit</li>
                            <li><i class="fa-solid fa-check"></i> Bases de données scientifiques</li>
                            <li><i class="fa-solid fa-check"></i> Certifications PIX & Bureautique</li>
                            <li><i class="fa-solid fa-check"></i> Salles de visioconférence</li>
                        </ul>
                        <button class="btn btn-secondary" style="width: 100%; border-color: var(--tertiary); color: var(--tertiary);">Accéder aux ressources</button>
                    </div>
                </article>

                <!-- Card CEF -->
                <article class="service-card service-cef">
                    <div class="service-header">
                        <div class="service-icon"><i class="fa-solid fa-handshake"></i></div>
                        <h3>Centre d'Employabilité (CEF)</h3>
                        <p>La Carrière en ligne de mire</p>
                    </div>
                    <div class="service-body">
                        <ul class="service-list">
                            <li><i class="fa-solid fa-check"></i> Coaching CV & Lettre de motivation</li>
                            <li><i class="fa-solid fa-check"></i> Simulations d'entretiens</li>
                            <li><i class="fa-solid fa-check"></i> Rencontres avec les entreprises</li>
                            <li><i class="fa-solid fa-check"></i> Ateliers Soft Skills</li>
                        </ul>
                        <button class="btn btn-secondary" style="width: 100%; border-color: var(--secondary); color: var(--secondary);">Services étudiants</button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Agenda Section -->
    <section class="section-padding agenda" id="agenda">
        <div class="container">
            <div class="section-header">
                <h2>Prochains Événements</h2>
            </div>

            <div class="filters">
                <button class="filter-btn active" onclick="filterEvents('all')">Tout</button>
                <button class="filter-btn" onclick="filterEvents('tana')">Antananarivo</button>
                <button class="filter-btn" onclick="filterEvents('fianara')">Fianarantsoa</button>
                <button class="filter-btn" onclick="filterEvents('online')">En Ligne</button>
            </div>

            <div class="events-grid">
                <!-- Event 1 -->
                <article class="event-card event-tana">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Atelier">
                        <div class="date-badge">
                            <span class="date-day">15</span>
                            <span class="date-month">NOV</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fa-solid fa-location-dot"></i> CEF Antananarivo</span>
                            <span style="color: var(--primary);">Gratuit</span>
                        </div>
                        <h3 class="event-title">Atelier : Réussir son entretien d'embauche</h3>
                        <div class="seats-indicator">
                            <div class="pulse"></div>
                            Il reste 5 places !
                        </div>
                        <button class="btn btn-primary" style="width: 100%; padding: 10px;">Je m'inscris</button>
                    </div>
                </article>

                <!-- Event 2 -->
                <article class="event-card event-online">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1588196749597-9ff075ee6b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Webinaire">
                        <div class="date-badge">
                            <span class="date-day">18</span>
                            <span class="date-month">NOV</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fa-solid fa-video"></i> En Ligne (Zoom)</span>
                            <span>Gratuit</span>
                        </div>
                        <h3 class="event-title">Webinaire : Les bourses de doctorat au Canada</h3>
                        <div class="seats-indicator" style="visibility: hidden;">Placeholder</div>
                        <button class="btn btn-secondary" style="width: 100%; padding: 10px;">En savoir plus</button>
                    </div>
                </article>

                <!-- Event 3 -->
                <article class="event-card event-fianara">
                    <div class="event-img-wrap">
                        <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Formation">
                        <div class="date-badge">
                            <span class="date-day">22</span>
                            <span class="date-month">NOV</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span><i class="fa-solid fa-location-dot"></i> CNF Fianarantsoa</span>
                            <span>Payant</span>
                        </div>
                        <h3 class="event-title">Certification PIX : Session intensive</h3>
                        <div class="seats-indicator">
                            <div class="pulse"></div>
                            Bientôt complet
                        </div>
                        <button class="btn btn-primary" style="width: 100%; padding: 10px;">Réserver</button>
                    </div>
                </article>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" style="color: var(--primary); font-weight: 600; text-decoration: underline;">Voir tout le calendrier</a>
            </div>
        </div>
    </section>

    <!-- Newsletter & Footer -->
    <div class="container">
        <div class="newsletter-box">
            <h3>Ne ratez aucune opportunité</h3>
            <p style="opacity: 0.9; margin-top: 10px;">Bourses, appels à candidatures et ateliers exclusifs.</p>
            <form class="input-group">
                <input type="email" placeholder="Votre adresse email universitaire">
                <button type="submit" class="btn btn-primary" style="background: var(--dark);">S'abonner</button>
            </form>
        </div>
    </div>

    <footer id="contact">
        <div class="container section-padding" style="padding-bottom: 20px;">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4 style="font-size: 1.5rem;">AUF Madagascar</h4>
                    <p>L'Agence Universitaire de la Francophonie regroupe plus de 1000 universités sur tous les continents. À Madagascar, nous œuvrons pour une éducation supérieure de qualité et une meilleure insertion professionnelle.</p>
                </div>
                <div class="footer-col">
                    <h4>Antananarivo</h4>
                    <p><i class="fa-solid fa-phone"></i> +261 20 22 318 04</p>
                    <p><i class="fa-solid fa-envelope"></i> cnf-tana@auf.org</p>
                    <p>Campus Ankatso</p>
                </div>
                <div class="footer-col">
                    <h4>Fianarantsoa</h4>
                    <p><i class="fa-solid fa-phone"></i> +261 34 00 000 00</p>
                    <p><i class="fa-solid fa-envelope"></i> cnf-fianara@auf.org</p>
                    <p>Université Andrainjato</p>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i> Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; 2025 AUF Madagascar. Tous droits réservés.</span>
                <div>
                    <a href="#" style="margin-right: 20px;">Mentions Légales</a>
                    <a href="#">Plan du site</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <button class="mobile-sticky-btn btn-agenda" onclick="window.location.href='#agenda'">
            <i class="fa-solid fa-calendar-days"></i> Agenda
        </button>
        <button class="mobile-sticky-btn btn-map" onclick="window.location.href='#lieux'">
            <i class="fa-solid fa-map-location-dot"></i> Carte
        </button>
    </div>

    <script>
        /* 1. Logo Injection */
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-container').innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Logo AUF"></a>`;

        /* 2. Map/Location Tab Logic */
        function switchLocation(index) {
            // Update Buttons
            const buttons = document.querySelectorAll('.loc-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            buttons[index].classList.add('active');

            // Update Cards
            const cards = document.querySelectorAll('.map-card');
            cards.forEach(card => card.classList.remove('active'));
            document.getElementById(`card-${index}`).classList.add('active');
        }

        /* 3. Event Filter Logic */
        function filterEvents(category) {
            // Button styles
            const btns = document.querySelectorAll('.filter-btn');
            btns.forEach(b => b.classList.remove('active'));
            event.target.classList.add('active');

            // Filtering
            const cards = document.querySelectorAll('.event-card');
            cards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'flex';
                } else {
                    if (card.classList.contains(`event-${category}`)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        }

        /* 4. Smooth Scroll for Anchor Links */
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        /* 5. Mobile Sticky Bar Visibility Logic */
        window.addEventListener('scroll', () => {
            const footer = document.querySelector('footer');
            const stickyBar = document.querySelector('.mobile-sticky-bar');
            
            // Get footer position
            const footerRect = footer.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // If footer is visible, hide sticky bar so it doesn't overlap
            if (footerRect.top < windowHeight) {
                stickyBar.style.transform = 'translate(-50%, 100px)'; // Hide down
            } else {
                stickyBar.style.transform = 'translate(-50%, 0)'; // Show
            }
        });
    </script>
</body>
</html>