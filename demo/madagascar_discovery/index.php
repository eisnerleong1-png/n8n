<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madagascar Discovery Agency | Voyages Sur Mesure & Safaris</title>
    
    <!-- Polices Google (Montserrat & Merriweather) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary: #2F4D53; /* Vert forêt sombre (Luxe/Nature) */
            --secondary: #518688; /* Sarcelle (Eau/Ciel) */
            --accent: #FDB813; /* Jaune or (Soleil/Action) */
            --text-dark: #1a1a1a;
            --text-light: #f4f4f4;
            --white: #ffffff;
            --gray-light: #f9f9f9;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            --radius: 8px;
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
            font-family: 'Merriweather', serif;
            color: var(--text-dark);
            line-height: 1.7;
            background-color: var(--white);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .btn, .nav-link {
            font-family: 'Montserrat', sans-serif;
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
            height: auto;
        }

        /* --- UI COMPONENTS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: var(--radius);
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--accent);
            color: #000;
            box-shadow: 0 4px 15px rgba(253, 184, 19, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(253, 184, 19, 0.5);
            background-color: #e5a50f;
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            font-weight: 800;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        section {
            padding: 100px 0;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: transparent;
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            padding: 15px 0;
            backdrop-filter: blur(10px);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px;
            object-fit: contain;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            color: var(--white);
            font-size: 0.95rem;
            position: relative;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        header.scrolled .nav-link {
            color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-toggle {
            color: var(--primary);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-align: center;
            overflow: hidden;
            margin-top: 0; /* Important pour que ça colle en haut */
        }

        /* Simulation Vidéo Background via Image HD + Zoom CSS */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1551041776-b00e4859367d?q=80&w=2574&auto=format&fit=crop') no-repeat center center/cover;
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
            background: linear-gradient(to bottom, rgba(47, 77, 83, 0.4), rgba(0, 0, 0, 0.7));
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            padding-top: 80px; /* Compensation Header */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.5s;
        }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            font-weight: 300;
            text-shadow: 0 1px 5px rgba(0,0,0,0.3);
        }

        .trust-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
            padding: 10px 20px;
            border-radius: 50px;
            display: inline-flex;
        }

        .trust-badge i {
            color: var(--accent);
        }

        /* --- FEATURES (Problem/Solution) --- */
        .features {
            background-color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            padding: 40px;
            background: var(--white);
            border-radius: 12px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
            text-align: left;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--secondary);
            transform: scaleY(0);
            transition: var(--transition);
            transform-origin: bottom;
        }

        .feature-card:hover {
            box-shadow: var(--shadow);
            transform: translateY(-5px);
        }

        .feature-card:hover::before {
            transform: scaleY(1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 25px;
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .feature-card p {
            color: #666;
            font-size: 0.95rem;
        }

        /* --- CIRCUITS (Inspiration) --- */
        .circuits {
            background-color: var(--gray-light);
        }

        .circuits-wrapper {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            padding-bottom: 40px; /* Espace pour le scrollbar/shadow */
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .circuits-wrapper::-webkit-scrollbar {
            height: 6px;
        }
        .circuits-wrapper::-webkit-scrollbar-track {
            background: #e0e0e0;
        }
        .circuits-wrapper::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        .circuit-card {
            min-width: 350px;
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
        }

        .circuit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .card-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .card-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .circuit-card:hover .card-img-container img {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--white);
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .card-meta {
            display: flex;
            gap: 15px;
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 20px;
        }

        .card-meta i {
            color: var(--accent);
            margin-right: 5px;
        }

        .price {
            margin-top: auto;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--secondary);
        }
        
        .price span {
            font-size: 0.8rem;
            font-weight: 400;
            color: #999;
        }

        .circuits-cta {
            text-align: center;
            margin-top: 40px;
        }

        /* --- SUR MESURE (Split) --- */
        .custom {
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .custom-img, .custom-text {
            flex: 1;
            min-width: 500px;
        }

        .custom-img {
            height: 600px;
            position: relative;
        }

        .custom-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .custom-text {
            background: var(--white);
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .custom-text h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            font-weight: 800;
        }

        .custom-text p {
            color: #555;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        /* --- ABOUT (Dark) --- */
        .about {
            background-color: var(--primary);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }
        
        /* Pattern subtil */
        .about::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.5;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .about-content h2 {
            color: var(--white);
            border-bottom: 3px solid var(--accent);
            padding-bottom: 10px;
            display: inline-block;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            display: block;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            font-family: 'Montserrat', sans-serif;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* --- TESTIMONIALS --- */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.03);
            border: 1px solid #eee;
        }

        .quote-icon {
            color: var(--accent);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .client-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .client-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .client-details h4 {
            font-size: 0.95rem;
            color: var(--primary);
            font-weight: 700;
        }

        .client-details span {
            font-size: 0.8rem;
            color: #888;
        }

        /* --- FAQ --- */
        .faq {
            background: #fafafa;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        details {
            background: var(--white);
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
            overflow: hidden;
            transition: var(--transition);
        }

        details[open] {
            box-shadow: var(--shadow);
        }

        summary {
            padding: 20px;
            cursor: pointer;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            color: var(--primary);
            list-style: none;
            position: relative;
            padding-right: 40px;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary::after {
            content: '+';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
            color: var(--accent);
            font-weight: 300;
        }

        details[open] summary::after {
            content: '-';
        }

        .faq-answer {
            padding: 0 20px 20px 20px;
            color: #555;
            font-size: 0.95rem;
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
        }

        /* --- FOOTER --- */
        footer {
            background: #1a1a1a;
            color: #bbb;
            padding: 80px 0 30px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.1rem;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a:hover {
            color: var(--accent);
        }

        .contact-info li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
        }

        .contact-info i {
            color: var(--accent);
            margin-top: 4px;
        }

        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }

        .newsletter-form input {
            padding: 12px;
            border: none;
            border-radius: 4px 0 0 4px;
            flex: 1;
            font-family: 'Merriweather', serif;
        }

        .newsletter-form button {
            background: var(--accent);
            border: none;
            padding: 0 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-weight: 700;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 30px;
            text-align: center;
        }

        /* --- WHATSAPP FLOAT --- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 2000;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .custom-img, .custom-text {
                min-width: 100%;
                height: auto;
            }
            .custom-img { height: 400px; }
            .about-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .mobile-toggle { display: block; }
            
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--primary);
                flex-direction: column;
                padding-top: 100px;
                transition: 0.4s ease;
                box-shadow: -5px 0 15px rgba(0,0,0,0.2);
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-link {
                color: var(--white) !important;
                font-size: 1.2rem;
            }
            
            .hero h1 { font-size: 2.2rem; }
            
            .stats-grid { grid-template-columns: 1fr; gap: 40px; }
            
            .custom-text { padding: 40px 20px; }
            
            /* Gestion Hero Header Mobile */
            .hero-content {
                margin-top: 60px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="main-header">
        <div class="container nav-container">
            <a href="#" class="logo-link">
                <!-- Logo injecté par JS -->
                <img id="logo-img" class="logo-img" alt="Madagascar Discovery Agency">
            </a>
            
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#circuits" class="nav-link">Nos Circuits</a></li>
                    <li><a href="#custom" class="nav-link">Sur Mesure</a></li>
                    <li><a href="#about" class="nav-link">L'Agence</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                    <li><a href="#quote" class="btn btn-primary">Créer mon voyage</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section 1: Hero -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Explorez Madagascar en Toute Sérénité</h1>
            <p>L'expertise du voyage sur mesure. Plus de 15 ans d'expérience à Antananarivo pour transformer votre rêve d'évasion en réalité inoubliable.</p>
            <a href="#contact" class="btn btn-primary" style="padding: 18px 40px; font-size: 1rem;">Demander un devis gratuit</a>
            <br>
            <div class="trust-badge">
                <i class="fas fa-certificate"></i>
                <span>Membre agréé Office National du Tourisme</span>
            </div>
        </div>
    </section>

    <!-- Section 2: Problème / Solution -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Ne laissez pas la logistique gâcher l'aventure</h2>
                <p>Voyagez l'esprit libre, nous nous occupons de tout.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h3>Sécurité Totale</h3>
                    <p>Chauffeurs-guides experts certifiés et une flotte de véhicules 4x4 régulièrement inspectés pour une traversée sans encombre.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-compass feature-icon"></i>
                    <h3>Itinéraires Uniques</h3>
                    <p>Accédez à des zones exclusives et des lodges cachés hors des sentiers battus que seuls les locaux connaissent.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-concierge-bell feature-icon"></i>
                    <h3>Gestion de A à Z</h3>
                    <p>Vols internes, hébergements de charme et activités : tout est réservé. Votre seul devoir est de profiter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Circuits Phares -->
    <section class="circuits" id="circuits">
        <div class="container">
            <div class="section-title">
                <h2>Nos Incontournables</h2>
                <p>L'inspiration pour votre prochain périple sur la Grande Île.</p>
            </div>
            
            <div class="circuits-wrapper">
                <!-- Card 1 -->
                <div class="circuit-card">
                    <div class="card-img-container">
                        <span class="card-badge">Best Seller</span>
                        <!-- Isalo / RN7 -->
                        <img src="https://images.unsplash.com/photo-1628068991275-520286307399?q=80&w=2574&auto=format&fit=crop" loading="lazy" alt="Route du Sud Madagascar">
                    </div>
                    <div class="card-content">
                        <h3>La Route du Sud (RN7)</h3>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 12 Jours</span>
                            <span><i class="fas fa-car"></i> 4x4</span>
                        </div>
                        <p style="font-size:0.9rem; color:#666; margin-bottom:15px;">Antananarivo à Tuléar via l'Isalo. Paysages changeants et culture.</p>
                        <div class="price">4 500 000 MGA <span>/ pers.</span></div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="circuit-card">
                    <div class="card-img-container">
                        <span class="card-badge">Plage & Nature</span>
                        <!-- Nosy Be -->
                        <img src="https://images.unsplash.com/photo-1544885935-98dd03d09034?q=80&w=2574&auto=format&fit=crop" loading="lazy" alt="Nosy Be Madagascar">
                    </div>
                    <div class="card-content">
                        <h3>Aventure Nord & Nosy Be</h3>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 10 Jours</span>
                            <span><i class="fas fa-ship"></i> Bateau + 4x4</span>
                        </div>
                        <p style="font-size:0.9rem; color:#666; margin-bottom:15px;">Les Tsingy Rouges, la Montagne d'Ambre et le farniente absolu.</p>
                        <div class="price">5 200 000 MGA <span>/ pers.</span></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="circuit-card">
                    <div class="card-img-container">
                        <span class="card-badge">Sauvage</span>
                        <!-- Sainte Marie / Jungle -->
                        <img src="https://images.unsplash.com/photo-1518182170546-0766ce6fec56?q=80&w=2574&auto=format&fit=crop" loading="lazy" alt="Sainte Marie Madagascar">
                    </div>
                    <div class="card-content">
                        <h3>L'Est Sauvage (Ste-Marie)</h3>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 8 Jours</span>
                            <span><i class="fas fa-binoculars"></i> Baleines</span>
                        </div>
                        <p style="font-size:0.9rem; color:#666; margin-bottom:15px;">Canal des Pangalanes et observation des baleines (en saison).</p>
                        <div class="price">3 800 000 MGA <span>/ pers.</span></div>
                    </div>
                </div>
            </div>

            <div class="circuits-cta">
                <a href="#" class="btn btn-outline">Voir tous nos circuits</a>
            </div>
        </div>
    </section>

    <!-- Section 4: Sur Mesure -->
    <section class="custom" id="custom">
        <div class="custom-img">
            <!-- Lemur -->
            <img src="https://images.unsplash.com/photo-1579782506471-a9f451f2249e?q=80&w=2663&auto=format&fit=crop" loading="lazy" alt="Lémurien Madagascar">
        </div>
        <div class="custom-text">
            <h2>Votre voyage, vos règles.</h2>
            <p>Vous préférez le farniente sur une plage déserte ou le trekking intense dans les Tsingy ? Dites-nous ce que vous aimez, nous dessinons l'itinéraire sur mesure.</p>
            <p>Nos experts locaux adaptent le rythme, les hébergements et les activités à vos envies et votre budget.</p>
            <a href="#contact" class="btn btn-secondary" style="align-self: flex-start;">Personnaliser mon séjour maintenant</a>
        </div>
    </section>

    <!-- Section 5: À Propos & Confiance -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>Partenaire de Confiance</h2>
                    <p style="color: #ddd; margin-top: 20px;">Depuis Antananarivo, Madagascar Discovery Agency est votre ancre locale. Nous ne sommes pas un algorithme, mais une équipe de passionnés dédiés à la réussite de votre expédition.</p>
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Années d'expérience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5k+</span>
                        <span class="stat-label">Voyageurs heureux</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">Guides Locaux</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Témoignages -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Ils ont vécu l'expérience</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"Une organisation militaire mais une ambiance familiale. Nous avions peur de l'état des routes, mais notre chauffeur a été exemplaire. Merci pour ce road-trip inoubliable."</p>
                    <div class="client-info">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Marie" class="client-avatar">
                        <div class="client-details">
                            <h4>Marie & Jean</h4>
                            <span>France, Octobre 2023</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"L'agence a su nous proposer un itinéraire hors des zones trop touristiques comme nous le souhaitions. Les lodges étaient sublimes."</p>
                    <div class="client-info">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Thomas" class="client-avatar">
                        <div class="client-details">
                            <h4>Thomas D.</h4>
                            <span>Suisse, Septembre 2023</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left quote-icon"></i>
                    <p>"Sécurité au top, réactivité sur WhatsApp impressionnante. C'était notre premier voyage en Afrique et nous reviendrons !"</p>
                    <div class="client-info">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sarah" class="client-avatar">
                        <div class="client-details">
                            <h4>Sarah L.</h4>
                            <span>Canada, Novembre 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: FAQ -->
    <section class="faq">
        <div class="container faq-container">
            <div class="section-title">
                <h2>Questions Fréquentes</h2>
            </div>
            
            <details>
                <summary>Est-il dangereux de voyager à Madagascar ?</summary>
                <div class="faq-answer">
                    <p>Comme toute destination, la prudence est de mise. Cependant, en voyageant avec Madagascar Discovery Agency, vous bénéficiez d'un encadrement complet. Nos chauffeurs connaissent les routes sûres et les horaires à respecter pour garantir une sécurité totale.</p>
                </div>
            </details>

            <details>
                <summary>Quel est le budget moyen pour 2 semaines ?</summary>
                <div class="faq-answer">
                    <p>Cela dépend grandement du standing des hôtels. Pour un circuit confort (hôtels 3* de charme, 4x4, carburant, guide, entrées parcs), comptez environ 1200€ à 1800€ par personne (hors vols internationaux). Nous adaptons le devis à votre budget en Ariary ou Euros.</p>
                </div>
            </details>

            <details>
                <summary>Faut-il un visa pour entrer ?</summary>
                <div class="faq-answer">
                    <p>Oui, un visa est obligatoire pour les touristes. Il peut s'obtenir directement à l'arrivée à l'aéroport (environ 35€ pour moins de 15 jours) ou en ligne via le site officiel e-Visa.</p>
                </div>
            </details>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Madagascar Discovery Agency</h4>
                    <p style="margin-bottom: 20px;">Votre créateur de souvenirs sur la Grande Île.</p>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Ivandry, Antananarivo 101</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@madagascar-discovery.com</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#circuits">Nos Circuits</a></li>
                        <li><a href="#custom">Voyage Sur Mesure</a></li>
                        <li><a href="#about">Qui sommes-nous ?</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p>Recevez nos guides de voyage gratuits.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Votre email">
                        <button type="submit">OK</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Madagascar Discovery Agency. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // --- LOGIQUE JAVASCRIPT ---
        
        // 1. Intégration du Logo (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // 2. Gestion du Header Scroll (Changement de style)
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 3. Menu Mobile
        const mobileToggle = document.getElementById('mobile-toggle');
        const navMenu = document.getElementById('nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');

        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            // Change icon
            const icon = mobileToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Fermer le menu au clic sur un lien
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileToggle.querySelector('i').classList.remove('fa-times');
                mobileToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // 4. Animation Scroll Reveal (Simple native intersection observer)
        const revealElements = document.querySelectorAll('.feature-card, .circuit-card, .custom-text, .testimonial-card');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            revealObserver.observe(el);
        });

    </script>
</body>
</html>