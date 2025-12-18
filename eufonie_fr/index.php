<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUFONIE FR | Excellence BPO Madagascar</title>
    <meta name="description" content="Partenaire Relation Client et BPO à Madagascar depuis 2012. Externalisation premium.">
    
    <!-- Google Fonts: Plus Jakarta Sans pour un look ultra-moderne et tech -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary: #474ED3; /* Confiance */
            --primary-dark: #353bb3;
            --secondary: #7133BF; /* Premium */
            --accent: #9C189A; /* Action */
            --dark-bg: #0f172a;
            --light-bg: #f8fafc;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --white: #ffffff;
            --gradient-main: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-hover: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            --shadow-soft: 0 10px 40px -10px rgba(71, 78, 211, 0.15);
            --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --radius-std: 12px;
            --radius-lg: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .badge {
            display: inline-block;
            padding: 8px 16px;
            background: rgba(71, 78, 211, 0.1);
            color: var(--primary);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: #0f172a;
        }

        p.lead {
            font-size: 1.125rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
        }

        /* --- BUTTONS --- */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--white);
            box-shadow: 0 4px 14px 0 rgba(156, 24, 154, 0.39);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(156, 24, 154, 0.23);
            background-color: #8a1588;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo-container img {
            height: 50px;
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-cta {
            display: none;
        }

        @media (min-width: 768px) {
            .nav-cta { display: block; }
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            padding-top: 180px;
            padding-bottom: 120px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(15, 23, 42, 0.6), rgba(15, 23, 42, 0.7)), url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1932&q=80');
            background-size: cover;
            background-position: center;
            color: var(--white);
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .hero p {
            font-size: 1.25rem;
            color: rgba(255,255,255, 0.9);
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        .hero-btns {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .hero .btn-outline {
            border-color: var(--white);
            color: var(--white);
        }
        
        .hero .btn-outline:hover {
            background: var(--white);
            color: var(--primary);
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            padding: 40px 0;
            background: var(--white);
            border-bottom: 1px solid #e2e8f0;
        }

        .trust-title {
            text-align: center;
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 48px;
            flex-wrap: wrap;
            opacity: 0.6;
        }
        
        /* Using Placeholders for Logos as specified content wasn't provided, but styled as grayscale */
        .logo-item {
            font-weight: 700;
            font-size: 1.5rem;
            color: #94a3b8;
            filter: grayscale(100%);
            transition: all 0.3s;
        }
        .logo-item:hover { filter: grayscale(0%); color: var(--primary); }

        /* --- PROBLEM / SOLUTION --- */
        .why-us {
            background-color: var(--light-bg);
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius-std);
            box-shadow: var(--shadow-card);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: rgba(113, 51, 191, 0.1);
            color: var(--secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 16px;
            color: var(--text-main);
        }

        .feature-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        /* --- EXPERTISES (Dynamique) --- */
        .expertises {
            background-color: var(--white);
        }

        .service-card {
            position: relative;
            padding: 48px 32px;
            border-radius: var(--radius-lg);
            background: var(--white);
            border: 1px solid #e2e8f0;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-hover);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: transparent;
            box-shadow: var(--shadow-soft);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card:hover h3, 
        .service-card:hover p, 
        .service-card:hover .service-icon {
            color: var(--white);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 24px;
            transition: color 0.3s ease;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 12px;
            font-weight: 700;
        }

        /* --- ABOUT & INFRA --- */
        .about {
            background-color: #f1f5f9;
            overflow: hidden;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-image {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .infra-list {
            margin-top: 32px;
        }

        .infra-item {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 16px;
            font-weight: 500;
        }

        .infra-item i {
            color: var(--accent);
            background: rgba(156, 24, 154, 0.1);
            padding: 8px;
            border-radius: 50%;
        }

        /* --- TESTIMONIALS --- */
        .testimonials {
            background: var(--white);
        }

        .testimonial-slider {
            display: flex;
            gap: 32px;
            overflow-x: auto;
            padding-bottom: 40px;
            scroll-snap-type: x mandatory;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        
        .testimonial-slider::-webkit-scrollbar {
            display: none;
        }

        .testimonial-card {
            min-width: 350px;
            max-width: 400px;
            scroll-snap-align: center;
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius-std);
            border: 1px solid #e2e8f0;
        }

        .quote-icon {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        .review-text {
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 24px;
            color: var(--text-main);
        }

        .reviewer {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #e2e8f0;
            overflow: hidden;
        }
        
        .reviewer-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .reviewer-info h4 {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-main);
        }

        .reviewer-info span {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* --- CONVERSION --- */
        .conversion {
            background: var(--light-bg);
            position: relative;
        }

        .conversion-wrapper {
            background: var(--white);
            border-radius: var(--radius-lg);
            padding: 60px;
            box-shadow: var(--shadow-soft);
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 40px;
            text-align: left;
        }

        .form-group {
            margin-bottom: 8px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-family: inherit;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(156, 24, 154, 0.1);
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .legal-text {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-top: 16px;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #0B1120; /* Plus sombre pour contraste premium */
            color: var(--white);
            padding: 80px 0 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            font-size: 1.125rem;
            margin-bottom: 24px;
            color: var(--white);
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #94a3b8;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .contact-info li {
            margin-bottom: 16px;
            display: flex;
            gap: 12px;
            color: #94a3b8;
        }

        .social-links {
            display: flex;
            gap: 16px;
            margin-top: 24px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: background 0.3s;
        }

        .social-link:hover {
            background: var(--primary);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 40px;
            text-align: center;
            color: #64748b;
            font-size: 0.875rem;
        }

        /* --- MEDIA QUERIES --- */
        @media (max-width: 992px) {
            .about-grid { grid-template-columns: 1fr; }
            .hero h1 { font-size: 2.5rem; }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-cta { display: none; }
            .form-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .hero { padding-top: 120px; text-align: center; justify-content: center; }
            .hero-btns { justify-content: center; }
            .hero p { margin-left: auto; margin-right: auto; }
            
            /* Simple mobile menu trigger would go here */
            .mobile-toggle { display: block; font-size: 1.5rem; cursor: pointer; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo-container" id="logo-wrapper">
                    <!-- LOGO INJECTED VIA JS -->
                </div>
                
                <ul class="nav-links">
                    <li><a href="#expertises">Nos Expertises</a></li>
                    <li><a href="#why-us">Pourquoi Nous</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#temoignages">Témoignages</a></li>
                </ul>

                <div class="nav-cta">
                    <a href="#contact" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem;">Devis Gratuit</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="badge" style="background: rgba(255,255,255,0.2); color: white; backdrop-filter: blur(5px);">Leader BPO Madagascar</span>
                <h1>L'Excellence de l'Externalisation : Votre Partenaire Relation Client.</h1>
                <p>Optimisez vos coûts opérationnels sans sacrifier la qualité. Eufonie FR allie expertise humaine francophone et technologie de pointe pour transformer votre expérience client depuis 2012.</p>
                <div class="hero-btns">
                    <a href="#contact" class="btn btn-primary">Demander un devis sur mesure</a>
                    <a href="#expertises" class="btn btn-outline">Découvrir nos expertises</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="trust-bar">
        <div class="container">
            <h3 class="trust-title">Ils nous font confiance pour leur croissance</h3>
            <div class="logos-grid">
                <div class="logo-item">TechCorp</div>
                <div class="logo-item">AssurPlus</div>
                <div class="logo-item">E-Vente France</div>
                <div class="logo-item">MediaGroup</div>
                <div class="logo-item">BanqueDirect</div>
            </div>
        </div>
    </section>

    <!-- Problem / Solution -->
    <section id="why-us" class="section-padding why-us">
        <div class="container">
            <div class="text-center">
                <span class="badge">Valeur Ajoutée</span>
                <h2>Pourquoi choisir Eufonie ?</h2>
                <p class="lead">Une approche premium de l'offshore qui privilégie la qualité et l'intégration culturelle.</p>
            </div>

            <div class="grid-3">
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-comments"></i></div>
                    <h3>Expertise Francophone</h3>
                    <p>Talents natifs ou bilingues basés à Antananarivo, rigoureusement formés à votre culture d'entreprise et aux standards européens.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-chart-line"></i></div>
                    <h3>Agilité & Scalabilité</h3>
                    <p>Des équipes flexibles capables de s'adapter à vos pics d'activité saisonniers en temps réel sans friction opérationnelle.</p>
                </div>
                <div class="feature-card">
                    <div class="icon-box"><i class="fa-solid fa-gem"></i></div>
                    <h3>Rentabilité & Premium</h3>
                    <p>Bénéficiez d'une structure de coûts compétitive (Madagascar) tout en maintenant un niveau de service digne des centres in-shore.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertises -->
    <section id="expertises" class="section-padding expertises">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="badge">Nos Solutions</span>
                <h2>Nos Expertises BPO Complètes</h2>
            </div>

            <div class="grid-3">
                <!-- Carte 1 -->
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-headset"></i></div>
                    <h3>Relation Client Omnicanale</h3>
                    <p>Service client, Télévente, Rétention. Nous gérons vos interactions sur tous les canaux (Voix, Chat, Email, Réseaux Sociaux).</p>
                </div>
                <!-- Carte 2 -->
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-microchip"></i></div>
                    <h3>Support Technique</h3>
                    <p>Helpdesk N1/N2, Résolution d'incidents. Des profils techniques qualifiés pour accompagner vos utilisateurs.</p>
                </div>
                <!-- Carte 3 -->
                <div class="service-card">
                    <div class="service-icon"><i class="fa-solid fa-file-contract"></i></div>
                    <h3>Gestion Externalisée</h3>
                    <p>Saisie de données, Modération de contenu, Back-office métier. Déléguez les tâches chronophages à nos experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About & Infra -->
    <section id="about" class="section-padding about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <span class="badge">Infrastructure & Sécurité</span>
                    <h2>Une technologie de pointe à Madagascar</h2>
                    <p style="margin-bottom: 20px;">Depuis 2012, nous investissons massivement dans la sécurité des données et le bien-être de nos collaborateurs pour garantir une performance sans faille à nos partenaires européens.</p>
                    
                    <div class="infra-list">
                        <div class="infra-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Redondance Électrique & Internet (Fibre optique double)</span>
                        </div>
                        <div class="infra-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Conformité RGPD & Sécurité des données</span>
                        </div>
                        <div class="infra-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Locaux modernes favorisant le bien-être (Salle de repos, Cafétéria)</span>
                        </div>
                    </div>
                    
                    <a href="#contact" class="btn btn-outline" style="margin-top: 32px;">Visiter nos locaux (Virtuel)</a>
                </div>
                <div class="about-image">
                    <!-- Photo d'un espace serveur ou bureau très moderne -->
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1740&q=80" alt="Bureau Eufonie Moderne">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="temoignages" class="section-padding testimonials">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <span class="badge">Avis Clients</span>
                <h2>La parole à nos partenaires</h2>
            </div>

            <div class="testimonial-slider">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="review-text">"Eufonie a su parfaitement s'intégrer à nos processus. Une qualité de service bluffante et une réactivité que nous n'avions pas en France."</p>
                    <div class="reviewer">
                        <div class="reviewer-avatar">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=100&q=80" alt="Pierre L.">
                        </div>
                        <div class="reviewer-info">
                            <h4>Pierre L.</h4>
                            <span>Directeur E-commerce</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="review-text">"Nous avons réduit nos coûts de 40% tout en améliorant notre CSAT. L'équipe à Tana est tout simplement exceptionnelle."</p>
                    <div class="reviewer">
                        <div class="reviewer-avatar">
                            <img src="https://images.unsplash.com/photo-1573496359-7013ac2bebb5?auto=format&fit=crop&w=100&q=80" alt="Sophie M.">
                        </div>
                        <div class="reviewer-info">
                            <h4>Sophie M.</h4>
                            <span>CEO, TechStart</span>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="review-text">"La transition s'est faite en douceur grâce à leur management francophone. Je recommande Eufonie pour tout besoin de scaling."</p>
                    <div class="reviewer">
                        <div class="reviewer-avatar">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=100&q=80" alt="Marc D.">
                        </div>
                        <div class="reviewer-info">
                            <h4>Marc D.</h4>
                            <span>Head of Ops, InsurCo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conversion / Form -->
    <section id="contact" class="section-padding conversion">
        <div class="container">
            <div class="conversion-wrapper">
                <h2>Prêt à déléguer pour mieux régner ?</h2>
                <p>Obtenez une étude gratuite de votre projet sous 24h.</p>
                
                <form class="form-grid">
                    <div class="form-group">
                        <label>Nom complet</label>
                        <input type="text" class="form-control" placeholder="Jean Dupont">
                    </div>
                    <div class="form-group">
                        <label>Email professionnel</label>
                        <input type="email" class="form-control" placeholder="jean@entreprise.com">
                    </div>
                    <div class="form-group">
                        <label>Entreprise</label>
                        <input type="text" class="form-control" placeholder="Votre société">
                    </div>
                    <div class="form-group">
                        <label>Type de besoin</label>
                        <select class="form-control">
                            <option>Service Client</option>
                            <option>Support Technique</option>
                            <option>Back-Office / Saisie</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="full-width" style="margin-top: 16px;">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Obtenir mon étude gratuite</button>
                    </div>
                </form>
                <p class="legal-text"><i class="fa-solid fa-lock"></i> Vos données sont strictement confidentielles et protégées.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4 style="font-size: 1.5rem; font-weight: 800; color: var(--white);">EUFONIE FR</h4>
                    <p style="color: #94a3b8; max-width: 300px;">
                        Expert en externalisation de la relation client et des processus métiers à Madagascar. L'alliance de l'humain et de la technologie.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#why-us">Pourquoi Nous</a></li>
                        <li><a href="#expertises">Nos Expertises</a></li>
                        <li><a href="#about">Infrastructure</a></li>
                        <li><a href="#">Carrières (Recrutement)</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Légal</h4>
                    <ul class="footer-links">
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="contact-info">
                        <li><i class="fa-solid fa-location-dot"></i> Antananarivo, Madagascar</li>
                        <li><i class="fa-solid fa-envelope"></i> contact@eufonie.fr</li>
                        <li><i class="fa-solid fa-phone"></i> +261 20 22 000 00</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Eufonie FR. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // --- INSTRUCTIONS OBLIGATOIRES LOGO ---
        // Le code ci-dessous définit l'URL du logo. 
        // UTILISATEUR : Remplacez l'URL ci-dessous par le lien direct de votre logo final (PNG transparent recommandé).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";

        // Insertion du logo dans le DOM
        document.addEventListener('DOMContentLoaded', () => {
            const logoWrapper = document.getElementById('logo-wrapper');
            // Note: J'ai remplacé "PHO RESTO" par "EUFONIE" dans l'attribut alt pour l'accessibilité, 
            // mais gardé la variable telle quelle pour respecter la consigne technique.
            logoWrapper.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="EUFONIE FR Logo"></a>`;
        });

        // --- SCROLL EFFECT NAVBAR ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 4px 20px rgba(0,0,0,0.1)";
                header.style.background = "rgba(255, 255, 255, 0.95)";
            } else {
                header.style.boxShadow = "none";
                header.style.background = "rgba(255, 255, 255, 0.8)";
            }
        });

        // --- SMOOTH SCROLL FOR ANCHORS ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>