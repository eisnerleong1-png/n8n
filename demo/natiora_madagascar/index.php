<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natiora Madagascar | Voyages Sur Mesure & Authentiques</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
        -------------------------------------------------------
        1. DESIGN SYSTEM & VARIABLES
        -------------------------------------------------------
        */
        :root {
            /* Palette Couleurs */
            --color-primary: #15427D; /* Bleu Profond - Trust */
            --color-secondary: #D93123; /* Rouge Brique - Terre */
            --color-accent: #F19623; /* Orange - Conversion */
            --color-text: #1a1a1a;
            --color-text-light: #f4f4f4;
            --color-bg-light: #f9f9f9;
            --color-white: #ffffff;
            
            /* Typography */
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;
            
            /* Layout */
            --container-width: 1200px;
            --header-height: 90px;
            --border-radius: 12px;
            
            /* Effects */
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 30px rgba(21, 66, 125, 0.1);
            --shadow-lg: 0 20px 40px rgba(0,0,0,0.2);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* 
        -------------------------------------------------------
        2. RESET & BASE STYLES
        -------------------------------------------------------
        */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; font-size: 16px; }
        
        body {
            font-family: var(--font-body);
            color: var(--color-text);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* Utilities */
        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }

        .section-padding { padding: 100px 0; }
        
        .text-center { text-align: center; }
        
        .accent-text { color: var(--color-secondary); font-weight: 600; letter-spacing: 1px; text-transform: uppercase; font-size: 0.9rem; }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 36px;
            font-weight: 700;
            border-radius: 50px;
            cursor: pointer;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            border: 2px solid var(--color-accent);
            box-shadow: 0 4px 15px rgba(241, 150, 35, 0.4);
        }

        .btn-primary:hover {
            background-color: #e08512;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(241, 150, 35, 0.6);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--color-primary);
            border: 2px solid var(--color-primary);
        }

        .btn-outline:hover {
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        /* 
        -------------------------------------------------------
        3. HEADER & NAVIGATION
        -------------------------------------------------------
        */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--header-height);
            z-index: 1000;
            transition: var(--transition);
            display: flex;
            align-items: center;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            height: 80px;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 40px;
        }

        nav a {
            font-weight: 600;
            font-size: 1rem;
            color: var(--color-white);
            position: relative;
        }

        header.scrolled nav a { color: var(--color-primary); }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        nav a:hover::after { width: 100%; }

        .burger { display: none; cursor: pointer; color: var(--color-white); font-size: 1.5rem; }
        header.scrolled .burger { color: var(--color-primary); }

        /* 
        -------------------------------------------------------
        4. HERO SECTION
        -------------------------------------------------------
        */
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
            background-image: url('https://images.unsplash.com/photo-1552558564-9a859427b0c8?q=80&w=2574&auto=format&fit=crop'); /* Allée des Baobabs */
            background-size: cover;
            background-position: center;
            z-index: -2;
            animation: zoomIn 20s infinite alternate;
        }

        @keyframes zoomIn {
            from { transform: scale(1); }
            to { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(21, 66, 125, 0.8) 0%, rgba(21, 66, 125, 0.4) 100%);
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: var(--color-white);
            max-width: 800px;
            padding: 0 20px;
            margin-top: var(--header-height); /* Prevent overlap */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s forwards 0.5s;
        }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 20px;
            line-height: 1.1;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: clamp(1.1rem, 2vw, 1.4rem);
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        /* 
        -------------------------------------------------------
        5. TRUST BAR
        -------------------------------------------------------
        */
        .trust-bar {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }
        
        .trust-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .trust-text {
            color: #666;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .trust-logos {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .trust-logo-item {
            font-weight: 700;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* 
        -------------------------------------------------------
        6. VALUE PROPOSITION (Problem/Solution)
        -------------------------------------------------------
        */
        .features {
            background-color: var(--color-bg-light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-top: 10px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border-top: 4px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-md);
            border-top: 4px solid var(--color-secondary);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--color-text);
        }

        /* 
        -------------------------------------------------------
        7. SHOWCASE (Best Sellers)
        -------------------------------------------------------
        */
        .showcase-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .trip-card {
            background: var(--color-white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            group: trip;
        }

        .trip-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-5px);
        }

        .trip-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .trip-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .trip-card:hover .trip-image img {
            transform: scale(1.1);
        }

        .trip-tag {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--color-secondary);
            color: var(--color-white);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .trip-details {
            padding: 30px;
        }

        .trip-details h3 {
            font-size: 1.5rem;
            color: var(--color-primary);
            margin-bottom: 10px;
        }

        .trip-price {
            display: block;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--color-accent);
            margin-bottom: 20px;
        }

        .trip-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            color: #777;
            font-size: 0.9rem;
        }

        .trip-meta span { display: flex; align-items: center; gap: 5px; }

        .trip-btn {
            width: 100%;
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-weight: 600;
            transition: var(--transition);
        }

        .trip-card:hover .trip-btn {
            background-color: var(--color-primary);
            color: var(--color-white);
            border-color: var(--color-primary);
        }

        .cta-wrapper {
            margin-top: 60px;
            text-align: center;
        }

        /* 
        -------------------------------------------------------
        8. ABOUT (Humanisation)
        -------------------------------------------------------
        */
        .about {
            background-color: #f0f4f8; /* Very light blue tint */
        }

        .about-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 60px;
        }

        .about-image {
            flex: 1;
            min-width: 350px;
            position: relative;
        }

        .about-image img {
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
        }

        .about-content {
            flex: 1;
            min-width: 350px;
        }

        .about-content h2 {
            font-size: 2.5rem;
            color: var(--color-primary);
            margin-bottom: 25px;
        }

        .about-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }

        /* 
        -------------------------------------------------------
        9. FAQ
        -------------------------------------------------------
        */
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .accordion-item {
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .accordion-header {
            width: 100%;
            padding: 20px 0;
            background: none;
            border: none;
            text-align: left;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--color-primary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: #555;
            padding-right: 20px;
        }

        .accordion-content p { padding-bottom: 20px; }

        .icon-plus {
            transition: transform 0.3s;
        }
        
        .active .icon-plus { transform: rotate(45deg); color: var(--color-accent); }

        /* 
        -------------------------------------------------------
        10. FOOTER
        -------------------------------------------------------
        */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 25px;
            color: var(--color-accent);
        }

        .footer-col ul li { margin-bottom: 12px; }
        .footer-col a:hover { color: var(--color-accent); padding-left: 5px; }

        .footer-logo {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: block;
        }

        .contact-info li {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.6);
        }

        /* 
        -------------------------------------------------------
        11. FLOATING ACTION (WhatsApp)
        -------------------------------------------------------
        */
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
            z-index: 999;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #20ba5a;
        }

        /* 
        -------------------------------------------------------
        12. RESPONSIVE
        -------------------------------------------------------
        */
        @media (max-width: 768px) {
            :root { --header-height: 70px; }
            
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--color-white);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s ease;
                box-shadow: -5px 0 15px rgba(0,0,0,0.1);
            }

            .nav-menu.active { right: 0; }
            
            .nav-menu a { color: var(--color-primary); font-size: 1.5rem; }

            .burger { display: block; z-index: 1001; }
            .burger.active { color: var(--color-primary); }

            .hero h1 { font-size: 2.5rem; }
            
            .about-wrapper { flex-direction: column; }
            .about-image, .about-content { width: 100%; }
        }
        
        /* Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="nav-container">
            <div class="logo-container">
                <!-- Logo injecté par JS -->
                <a href="#" id="logo-link"><img src="" alt="Natiora Madagascar Logo" id="logo-img"></a>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#why">Pourquoi Nous</a></li>
                    <li><a href="#circuits">Circuits</a></li>
                    <li><a href="#about">L'Esprit</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <!-- Bouton Mobile Only dans le menu -->
                </ul>
            </nav>
            <div class="burger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Vivez Madagascar Autrement : Votre Aventure Sur Mesure</h1>
            <p>De Tana aux Baobabs, l’expertise locale de Natiora pour des circuits privés 100% adaptés à votre budget et sans stress.</p>
            <a href="#contact" class="btn btn-primary">
                DEMANDER MON DEVIS GRATUIT
            </a>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <span class="trust-text">Ils nous font confiance pour découvrir la Grande Île :</span>
            <div class="trust-logos">
                <div class="trust-logo-item"><i class="fas fa-plane"></i> Air Mad.</div>
                <div class="trust-logo-item"><i class="fab fa-tripadvisor"></i> TripAdvisor</div>
                <div class="trust-logo-item"><i class="fas fa-shield-alt"></i> Paiement Sécurisé</div>
                <div class="trust-logo-item"><i class="fas fa-leaf"></i> Eco-Tourisme</div>
            </div>
        </div>
    </div>

    <!-- Problem / Solution -->
    <section id="why" class="section-padding features">
        <div class="container">
            <div class="section-header reveal">
                <span class="accent-text">Notre Valeur</span>
                <h2>Pourquoi choisir Natiora Madagascar ?</h2>
            </div>
            <div class="features-grid">
                <article class="feature-card reveal">
                    <div class="feature-icon"><i class="fas fa-compass"></i></div>
                    <h3>100% Sur Mesure</h3>
                    <p>Fuyez le tourisme de masse. Nous construisons votre itinéraire selon votre rythme et vos envies, pour une liberté totale.</p>
                </article>
                <article class="feature-card reveal">
                    <div class="feature-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Budget Transparent</h3>
                    <p>Aucun coût caché. Nos devis sont clairs, en Ariary (MGA) ou Devises, optimisés pour vous offrir le meilleur rapport qualité-prix.</p>
                </article>
                <article class="feature-card reveal">
                    <div class="feature-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h3>Expertise Locale Tana</h3>
                    <p>Basés à Antananarivo, nous maîtrisons le terrain et la logistique. Assistance 24/7 durant votre séjour.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Showcase / Best Sellers -->
    <section id="circuits" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <span class="accent-text">Inspirations</span>
                <h2>Nos Best-Sellers</h2>
            </div>
            <div class="showcase-grid">
                <!-- Card 1 -->
                <div class="trip-card reveal">
                    <div class="trip-image">
                        <span class="trip-tag">Incontournable</span>
                        <!-- Image Isalo -->
                        <img src="https://images.unsplash.com/photo-1518182170546-07661fd94144?q=80&w=2600&auto=format&fit=crop" alt="Parc National de l'Isalo">
                    </div>
                    <div class="trip-details">
                        <h3>La Mythique RN7</h3>
                        <span class="trip-price">Dès 2 500 000 MGA / pers.</span>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 10 Jours</span>
                            <span><i class="fas fa-car"></i> 4x4 Privé</span>
                        </div>
                        <a href="#" class="trip-btn">Voir le détail</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="trip-card reveal">
                    <div class="trip-image">
                        <span class="trip-tag">Détente</span>
                        <!-- Image Nosy Be -->
                        <img src="https://images.unsplash.com/photo-1534768393529-5777df484439?q=80&w=2574&auto=format&fit=crop" alt="Plage de Nosy Be">
                    </div>
                    <div class="trip-details">
                        <h3>Évasion Nosy Be</h3>
                        <span class="trip-price">Dès 3 200 000 MGA / pers.</span>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 7 Jours</span>
                            <span><i class="fas fa-umbrella-beach"></i> All Inclusive</span>
                        </div>
                        <a href="#" class="trip-btn">Voir le détail</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="trip-card reveal">
                    <div class="trip-image">
                        <span class="trip-tag">Nature</span>
                        <!-- Image Pangalanes -->
                        <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?q=80&w=2670&auto=format&fit=crop" alt="Canal des Pangalanes">
                    </div>
                    <div class="trip-details">
                        <h3>L'Est Sauvage & Indri</h3>
                        <span class="trip-price">Dès 1 800 000 MGA / pers.</span>
                        <div class="trip-meta">
                            <span><i class="far fa-clock"></i> 6 Jours</span>
                            <span><i class="fas fa-ship"></i> Pirogue</span>
                        </div>
                        <a href="#" class="trip-btn">Voir le détail</a>
                    </div>
                </div>
            </div>
            <div class="cta-wrapper reveal">
                <a href="#" class="btn btn-outline">Voir tous les circuits</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-image reveal">
                    <!-- Image Equipe/4x4 -->
                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=2574&auto=format&fit=crop" alt="Equipe Natiora en expédition">
                </div>
                <div class="about-content reveal">
                    <span class="accent-text">À Propos</span>
                    <h2>Natiora : L'Esprit de Madagascar</h2>
                    <p>Nous sommes nés d'une passion simple : faire découvrir la beauté brute de l'île rouge sans les filtres des agences standardisées.</p>
                    <p>Notre équipe locale s'engage pour un tourisme responsable, respectueux des communautés et de la faune endémique. Avec nous, vous n'êtes pas un touriste, vous êtes un invité.</p>
                    <a href="#" class="btn btn-outline" style="margin-top: 10px;">Rencontrer l'équipe</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <span class="accent-text">Réassurance</span>
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-container reveal">
                <div class="accordion-item">
                    <button class="accordion-header">
                        Est-ce sécurisé de voyager à Madagascar ?
                        <i class="fas fa-plus icon-plus"></i>
                    </button>
                    <div class="accordion-content">
                        <p>Absolument. Nos circuits sont conçus pour garantir votre sécurité. Nous sélectionnons des chauffeurs expérimentés, des hébergements sûrs et suivons les routes touristiques validées. Nous sommes en contact permanent avec vous.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">
                        Comment se passe le paiement ?
                        <i class="fas fa-plus icon-plus"></i>
                    </button>
                    <div class="accordion-content">
                        <p>Nous acceptons les virements bancaires internationaux (EUR/USD) pour l'acompte. Le solde peut être réglé avant l'arrivée ou sur place. Tout est détaillé dans votre devis transparent.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">
                        Les véhicules sont-ils confortables ?
                        <i class="fas fa-plus icon-plus"></i>
                    </button>
                    <div class="accordion-content">
                        <p>Oui, nous utilisons principalement des 4x4 (Toyota Land Cruiser, Prado) climatisés et parfaitement entretenus pour affronter les pistes malgaches en tout confort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <span class="footer-logo">Natiora.</span>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Antananarivo, Madagascar</li>
                        <li><i class="fas fa-phone-alt"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@natiora-travel.mg</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#circuits">Nos Circuits</a></li>
                        <li><a href="#about">L'Agence</a></li>
                        <li><a href="#">Blog Voyage</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Prêt pour le départ ?</h4>
                    <p style="margin-bottom: 20px; color: rgba(255,255,255,0.7);">Ne laissez pas votre rêve attendre. Contactez-nous pour une proposition gratuite sous 24h.</p>
                    <a href="#" class="btn btn-primary">Devis Express</a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Natiora Madagascar. Tous droits réservés. | Mentions Légales
            </div>
        </div>
    </footer>

    <!-- WhatsApp Sticky -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank" title="Contactez-nous sur WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script>
        // CONFIGURATION LOGO
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // Navbar Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu
        const burger = document.querySelector('.burger');
        const navMenu = document.querySelector('.nav-menu');
        
        burger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            burger.classList.toggle('active');
            // Change icon
            const icon = burger.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close menu when clicking link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                burger.classList.remove('active');
                burger.querySelector('i').classList.remove('fa-times');
                burger.querySelector('i').classList.add('fa-bars');
            });
        });

        // Accordion FAQ
        const accordions = document.querySelectorAll('.accordion-header');
        accordions.forEach(acc => {
            acc.addEventListener('click', function() {
                // Toggle active class
                this.classList.toggle('active');
                
                // Toggle panel
                const content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    // Close others (Optional, uncomment if needed)
                    // accordions.forEach(a => { if(a!==this) { a.classList.remove('active'); a.nextElementSibling.style.maxHeight = null; }});
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });

        // Reveal on Scroll (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        });

        revealElements.forEach(el => revealObserver.observe(el));
    </script>
</body>
</html>