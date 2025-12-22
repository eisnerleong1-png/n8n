<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scofield Travel | Voyage Sur Mesure à Madagascar</title>
    <meta name="description" content="Agence de voyage experte à Madagascar. Circuits sur mesure, sécurité et authenticité. Créez votre rêve avec Scofield Travel.">
    
    <!-- Google Fonts: Playfair Display (Luxe/Editorial) & Manrope (Modern/Clean) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --color-bg: #FFFFFF;
            --color-dark: #051326; /* Bleu Nuit */
            --color-gold: #DAB24C; /* Or */
            --color-gold-hover: #c29d3f;
            --color-accent: #5D9ED6; /* Bleu Clair */
            --color-text-body: #4a5568;
            --color-text-heading: #051326;
            --color-light-gray: #f7fafc;
            
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;
            
            --spacing-container: 1280px;
            --header-height: 80px;
            --border-radius: 4px;
            --shadow-card: 0 10px 30px -10px rgba(5, 19, 38, 0.15);
            --transition: all 0.3s ease;
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--color-text-body);
            background-color: var(--color-bg);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--color-text-heading);
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* UTILITIES */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 24px;
        }
        
        .section-padding { padding: 100px 0; }
        .text-center { text-align: center; }
        .text-gold { color: var(--color-gold); }
        .bg-light { background-color: var(--color-light-gray); }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--color-gold);
            color: var(--color-dark);
        }

        .btn-primary:hover {
            background-color: var(--color-gold-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(218, 178, 76, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-accent);
            border: 1px solid var(--color-accent);
        }

        .btn-secondary:hover {
            background-color: var(--color-accent);
            color: #fff;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background 0.4s ease, padding 0.4s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background-color: var(--color-dark);
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 50px; /* Taille fixe pour le logo */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 32px;
        }

        nav a {
            color: #fff;
            font-weight: 600;
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
            background-color: var(--color-gold);
            transition: width 0.3s;
        }

        nav a:hover::after { width: 100%; }

        .mobile-toggle { display: none; color: #fff; font-size: 1.5rem; cursor: pointer; }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1551044456-4299b8b6037b?q=80&w=2069&auto=format&fit=crop') no-repeat center center/cover;
            color: #fff;
            margin-top: 0; /* Assure que le hero commence tout en haut */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(5,19,38,0.7) 0%, rgba(5,19,38,0.3) 50%, rgba(5,19,38,0.8) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin-top: 60px; /* Offset pour header transparent */
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 24px;
            color: #fff;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero h2 {
            font-family: var(--font-body);
            font-size: 1.25rem;
            font-weight: 400;
            margin-bottom: 40px;
            opacity: 0.9;
            animation: fadeInUp 1.2s ease-out;
        }

        /* TRUST BAR */
        .trust-bar {
            background-color: var(--color-dark);
            color: #fff;
            padding: 30px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .trust-grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            text-align: center;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .trust-item i { color: var(--color-gold); font-size: 1.2rem; }

        /* WHY US */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            padding: 40px;
            background: #fff;
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .feature-card:hover {
            box-shadow: var(--shadow-card);
            transform: translateY(-5px);
            border-color: var(--color-gold);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--color-gold);
            margin-bottom: 24px;
        }

        .feature-card h3 { font-size: 1.5rem; margin-bottom: 16px; }

        /* CATALOG */
        .section-header { margin-bottom: 60px; }
        .section-header h2 { font-size: 2.5rem; margin-bottom: 16px; }
        .section-header p { color: var(--color-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem; }

        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
        }

        .tour-card {
            background: #fff;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            position: relative;
        }

        .tour-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .tour-image {
            height: 250px;
            width: 100%;
            overflow: hidden;
        }

        .tour-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .tour-card:hover .tour-image img { transform: scale(1.1); }

        .tour-content { padding: 30px; }
        .tour-content h3 { font-size: 1.5rem; margin-bottom: 10px; }
        .tour-meta { display: flex; gap: 15px; font-size: 0.85rem; color: #888; margin-bottom: 20px; }
        .tour-price { color: var(--color-dark); font-weight: 700; font-size: 1.1rem; display: block; margin-bottom: 20px; }
        .tour-price span { color: var(--color-gold); }

        /* ABOUT */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            position: relative;
        }
        
        .about-img img {
            border-radius: 4px;
            box-shadow: -20px 20px 0 var(--color-gold);
        }

        /* TESTIMONIALS */
        .testimonial-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .review-card {
            background: var(--color-dark);
            color: #fff;
            padding: 40px;
            border-radius: 4px;
            position: relative;
        }

        .review-card::before {
            content: '\201C';
            font-family: var(--font-heading);
            font-size: 5rem;
            color: var(--color-gold);
            opacity: 0.3;
            position: absolute;
            top: 20px;
            left: 20px;
            line-height: 1;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            border: 2px solid var(--color-gold);
        }

        /* FORMULAIRE (UX Secret Sauce) */
        .quote-form-section {
            background: linear-gradient(135deg, #f7fafc 0%, #e2e8f0 100%);
            border-radius: 8px;
            padding: 40px;
            margin-top: 60px;
            border: 1px solid #cbd5e0;
        }

        .simple-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            align-items: end;
        }

        .form-group label { display: block; font-weight: 600; margin-bottom: 8px; color: var(--color-dark); }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #fff;
        }

        /* FAQ */
        .faq-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }
        .faq-item h4 { font-size: 1.1rem; margin-bottom: 8px; cursor: pointer; display: flex; justify-content: space-between; }
        .faq-item p { color: #666; font-size: 0.95rem; display: none; margin-top: 10px;}
        .faq-item.active p { display: block; }
        .faq-item.active h4 { color: var(--color-gold); }

        /* FOOTER */
        footer {
            background-color: var(--color-dark);
            color: #fff;
            padding: 80px 0 30px;
            font-size: 0.9rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-brand p { margin-top: 20px; opacity: 0.7; max-width: 300px; }
        .footer h4 { color: var(--color-gold); margin-bottom: 24px; font-size: 1.1rem; }
        .footer ul li { margin-bottom: 12px; }
        .footer a { opacity: 0.7; }
        .footer a:hover { opacity: 1; color: var(--color-gold); }
        
        .social-links a { margin-right: 15px; font-size: 1.2rem; }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            opacity: 0.5;
            font-size: 0.8rem;
        }

        /* Floating CTA Mobile */
        .floating-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--color-gold);
            color: var(--color-dark);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            z-index: 9999;
            font-size: 1.5rem;
            display: none; /* JS will toggle */
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(218, 178, 76, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(218, 178, 76, 0); }
            100% { box-shadow: 0 0 0 0 rgba(218, 178, 76, 0); }
        }

        /* ANIMATIONS */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
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

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .nav-container ul { display: none; } /* Simplified for single file example, normally hamburger menu */
            .mobile-toggle { display: block; }
            .about-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .floating-cta { display: flex; }
            .trust-grid { gap: 10px; }
            .trust-item { flex-direction: column; font-size: 0.8rem; }
            .simple-form { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- JS insert logo here -->
            </div>
            <nav>
                <ul>
                    <li><a href="#tours">Circuits</a></li>
                    <li><a href="#about">L'Agence</a></li>
                    <li><a href="#testimonials">Avis</a></li>
                    <li><a href="#faq">Infos Pratiques</a></li>
                </ul>
            </nav>
            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <a href="#contact" class="btn btn-primary" style="display: none; @media(min-width:769px){display:inline-block;}">Devis Gratuit</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Évadez-vous à Madagascar : L'Expertise Locale pour un Voyage Sur Mesure</h1>
            <h2>Circuits touristiques, aventures privées et découverte authentique. Confiez votre rêve à Scofield Travel, votre agence experte à Antananarivo.</h2>
            <a href="#contact" class="btn btn-primary">CRÉER MON VOYAGE SUR MESURE</a>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fas fa-star"></i>
                    <span>Recommandé par les voyageurs</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>+500 circuits organisés</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-headset"></i>
                    <span>Service client 24/7</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Agence locale agréée</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Proposition de Valeur -->
    <section class="section-padding" id="why-us">
        <div class="container">
            <div class="section-header text-center reveal">
                <p>POURQUOI NOUS ?</p>
                <h2>Pourquoi choisir Scofield Travel ?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card reveal">
                    <i class="fas fa-map-signs feature-icon"></i>
                    <h3>Expertise Terrain</h3>
                    <p>Basés à Tana, nous maîtrisons chaque kilomètre de la Grande Île. Pas d'intermédiaire, juste une logistique locale impeccable.</p>
                </div>
                <div class="feature-card reveal">
                    <i class="fas fa-fingerprint feature-icon"></i>
                    <h3>100% Personnalisable</h3>
                    <p>Votre voyage est unique. Nous concevons des itinéraires adaptés à votre rythme, vos envies et votre budget au millimètre près.</p>
                </div>
                <div class="feature-card reveal">
                    <i class="fas fa-car-side feature-icon"></i>
                    <h3>Sécurité & Confort</h3>
                    <p>Une flotte de 4x4 entretenus et des chauffeurs-guides professionnels pour explorer Madagascar l'esprit tranquille.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalogue Aperçu -->
    <section class="section-padding bg-light" id="tours">
        <div class="container">
            <div class="section-header text-center reveal">
                <p>INSPIRATION</p>
                <h2>Nos plus beaux circuits à Madagascar</h2>
            </div>
            <div class="catalog-grid">
                <!-- Carte 1 -->
                <div class="tour-card reveal">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1542646602-5e7e0e470830?q=80&w=2000&auto=format&fit=crop" alt="Lémurien Madagascar Sud">
                    </div>
                    <div class="tour-content">
                        <h3>La Route du Sud (RN7)</h3>
                        <div class="tour-meta">
                            <span><i class="far fa-clock"></i> 10 Jours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Isalo, Tuléar</span>
                        </div>
                        <p>Traversez les hauts plateaux jusqu'aux massifs de l'Isalo. Une aventure géologique et culturelle incontournable.</p>
                        <span class="tour-price">À partir de <span>3 000 000 MGA</span></span>
                        <a href="#contact" class="btn btn-secondary" style="width:100%">Demander un devis</a>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="tour-card reveal">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1628522380562-b13c8479e39c?q=80&w=2070&auto=format&fit=crop" alt="Baleine Sainte Marie">
                    </div>
                    <div class="tour-content">
                        <h3>L'Est Sauvage & Sainte-Marie</h3>
                        <div class="tour-meta">
                            <span><i class="far fa-clock"></i> 12 Jours</span>
                            <span><i class="fas fa-water"></i> Forêt, Baleines</span>
                        </div>
                        <p>Plongez dans la forêt humide de l'Est et terminez par l'observation des baleines sur l'île paradisiaque de Sainte-Marie.</p>
                        <span class="tour-price">À partir de <span>2 500 000 MGA</span></span>
                        <a href="#contact" class="btn btn-secondary" style="width:100%">Demander un devis</a>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="tour-card reveal">
                    <div class="tour-image">
                        <img src="https://images.unsplash.com/photo-1536697246787-1d7fa13c121e?q=80&w=1974&auto=format&fit=crop" alt="Nosy Be Plage">
                    </div>
                    <div class="tour-content">
                        <h3>Nosy Be & Le Nord</h3>
                        <div class="tour-meta">
                            <span><i class="far fa-clock"></i> 8 Jours</span>
                            <span><i class="fas fa-umbrella-beach"></i> Plages, Plongée</span>
                        </div>
                        <p>Eaux turquoises, archipels de rêve et tsingys rouges. Le luxe tropical par excellence pour une détente absolue.</p>
                        <span class="tour-price">À partir de <span>4 000 000 MGA</span></span>
                        <a href="#contact" class="btn btn-secondary" style="width:100%">Demander un devis</a>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 40px;">
                <a href="#" style="color: var(--color-accent); font-weight: 700; border-bottom: 2px solid var(--color-accent);">Voir tous nos circuits</a>
            </div>
        </div>
    </section>

    <!-- A Propos -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="reveal">
                    <p class="text-gold" style="font-weight:700; letter-spacing:2px; margin-bottom:10px;">HUMANISATION</p>
                    <h2>Rencontrez l'équipe Scofield Travel</h2>
                    <p style="margin: 20px 0;">Derrière chaque voyage réussi se cache une équipe passionnée. Fondée par des amoureux de Madagascar, notre agence s'engage à vous montrer le vrai visage de l'île, loin du tourisme de masse.</p>
                    <p>Notre promesse ? Une disponibilité totale et une connaissance intime des lieux, des meilleurs écolodges aux guides les plus érudits.</p>
                    <a href="#contact" class="btn btn-primary" style="margin-top:20px;">Discuter avec le fondateur</a>
                </div>
                <div class="about-img reveal">
                    <img src="https://images.unsplash.com/photo-1532982827170-07973d72653e?q=80&w=2070&auto=format&fit=crop" alt="Equipe Guide Madagascar">
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section class="section-padding" style="background-color: var(--color-dark); color: #fff;" id="testimonials">
        <div class="container">
            <div class="section-header text-center reveal">
                <p style="color: var(--color-gold);">AVIS VÉRIFIÉS</p>
                <h2 style="color: #fff;">Ce que nos voyageurs disent de nous</h2>
            </div>
            <div class="testimonial-slider">
                <div class="review-card reveal">
                    <p>"Une organisation sans faille du début à la fin. Notre chauffeur Nary était exceptionnel. Madagascar est magnifique grâce à vous."</p>
                    <div class="user-info">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sophie L." class="user-avatar">
                        <div>
                            <strong>Sophie L.</strong><br>
                            <span style="color:var(--color-gold); font-size:0.8rem;">Voyage en Mai 2024</span>
                        </div>
                    </div>
                </div>
                <div class="review-card reveal">
                    <p>"Nous avions peur de la sécurité mais Scofield Travel nous a totalement rassurés. Le circuit RN7 était magique. Merci !"</p>
                    <div class="user-info">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Marc D." class="user-avatar">
                        <div>
                            <strong>Marc D.</strong><br>
                            <span style="color:var(--color-gold); font-size:0.8rem;">Voyage en Octobre 2023</span>
                        </div>
                    </div>
                </div>
                <div class="review-card reveal">
                    <p>"Luxe et authenticité. Les hôtels choisis étaient incroyables. Je recommande vivement pour une lune de miel."</p>
                    <div class="user-info">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Elena G." class="user-avatar">
                        <div>
                            <strong>Elena G.</strong><br>
                            <span style="color:var(--color-gold); font-size:0.8rem;">Voyage en Janvier 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ & Formulaire -->
    <section class="section-padding" id="contact">
        <div class="container">
            <div class="about-grid">
                <!-- FAQ -->
                <div class="reveal">
                    <h2>Préparer votre voyage</h2>
                    <div class="faq-item">
                        <h4 onclick="toggleFaq(this)">Comment obtenir le Visa ? <i class="fas fa-plus"></i></h4>
                        <p>Le visa s'obtient facilement à l'arrivée à l'aéroport d'Ivato (Antananarivo) ou en ligne via le site officiel e-Visa.</p>
                    </div>
                    <div class="faq-item">
                        <h4 onclick="toggleFaq(this)">Quels vaccins sont nécessaires ? <i class="fas fa-plus"></i></h4>
                        <p>Aucun vaccin n'est obligatoire, mais les vaccins universels (DTCP, Hépatite A) sont recommandés. Un traitement antipaludique est conseillé.</p>
                    </div>
                    <div class="faq-item">
                        <h4 onclick="toggleFaq(this)">Quelle est la meilleure saison ? <i class="fas fa-plus"></i></h4>
                        <p>D'avril à novembre (saison sèche) est idéal pour voyager partout. Pour les baleines, privilégiez juillet à septembre.</p>
                    </div>
                </div>

                <!-- Formulaire Rapide -->
                <div class="reveal">
                    <div class="quote-form-section">
                        <h3 class="text-center" style="margin-bottom:20px;">Commencez votre aventure</h3>
                        <form class="simple-form" onsubmit="event.preventDefault(); alert('Merci ! Votre demande a été envoyée à l\'équipe Scofield Travel.');">
                            <div class="form-group">
                                <label>Destination</label>
                                <select>
                                    <option>RN7 (Sud)</option>
                                    <option>Sainte-Marie (Est)</option>
                                    <option>Nosy Be (Nord)</option>
                                    <option>Sur Mesure</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date prévue</label>
                                <input type="date">
                            </div>
                            <div class="form-group">
                                <label>Budget / Pers</label>
                                <select>
                                    <option>Standard</option>
                                    <option>Confort</option>
                                    <option>Luxe</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width:100%; grid-column: 1 / -1;">Recevoir mon devis</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3 style="color:#fff; font-family:'Playfair Display', serif;">Scofield Travel</h3>
                    <p>Votre partenaire de confiance pour des voyages d'exception à Madagascar. Expertise locale, standards internationaux.</p>
                </div>
                <div class="footer">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#tours">Circuits</a></li>
                        <li><a href="#about">L'Agence</a></li>
                        <li><a href="#testimonials">Témoignages</a></li>
                    </ul>
                </div>
                <div class="footer">
                    <h4>Contact</h4>
                    <ul>
                        <li>Antananarivo, Madagascar</li>
                        <li>contact@scofield-travel.mg</li>
                        <li>+261 34 00 000 00</li>
                    </ul>
                </div>
                <div class="footer">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="https://wa.me/261340000000" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Discutons sur WhatsApp</a>
            </div>

            <div class="copyright">
                &copy; 2024 Scofield Travel Madagascar. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Floating CTA -->
    <a href="#contact" class="floating-cta">
        <i class="fas fa-paper-plane"></i>
    </a>

    <!-- SCRIPTS -->
    <script>
        // --- 1. INTÉGRATION LOGO (OBLIGATOIRE) ---
        const LOGO_URL = "logo.jpg";
        
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Scofield Travel Logo"></a>`;
        }

        // --- 2. HEADER SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. SCROLL REVEAL ANIMATION (Intersection Observer) ---
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            threshold: 0.15
        });

        revealElements.forEach(el => revealObserver.observe(el));

        // --- 4. FAQ ACCORDION ---
        function toggleFaq(element) {
            const parent = element.parentElement;
            parent.classList.toggle('active');
            
            // Close others (Optional, simpler UX kept open allowed)
            const icon = element.querySelector('i');
            if(parent.classList.contains('active')){
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        }
    </script>
</body>
</html>