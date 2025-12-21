<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article En Couleur - Expert Nettoyage & Confection Tana</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --primary: #0EB0C7;       /* Cyan - Nettoyage */
            --primary-dark: #088da0;
            --accent: #D93826;        /* Rouge/Orange - Action */
            --accent-hover: #b52b1c;
            --highlight: #FFCA05;     /* Jaune - Confection/Details */
            --dark: #1a1a1a;
            --gray-light: #f8f9fa;
            --gray-text: #555;
            --white: #ffffff;
            --glass: rgba(255, 255, 255, 0.95);
            --shadow: 0 20px 40px -15px rgba(0,0,0,0.1);
            --font-main: 'Manrope', sans-serif;
            --font-display: 'Playfair Display', serif;
            --radius: 12px;
            --container: 1200px;
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
            font-family: var(--font-main);
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* -----------------------------------------------------------
           UTILITIES & TYPOGRAPHY
        ----------------------------------------------------------- */
        h1, h2, h3, h4 {
            line-height: 1.2;
            font-weight: 800;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        p {
            color: var(--gray-text);
            margin-bottom: 1.5rem;
        }

        .container {
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--white); }
        .highlight-text { color: var(--primary); }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--white);
            box-shadow: 0 10px 20px -5px rgba(217, 56, 38, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px -5px rgba(217, 56, 38, 0.6);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            padding: 20px 0;
            background: transparent;
        }

        header.scrolled {
            background: var(--glass);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 50px; /* Taille ajustée pour premium look */
            width: auto;
            display: block;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--white); /* White on hero by default */
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        header.scrolled nav a {
            color: var(--dark);
        }

        nav a:hover {
            color: var(--primary);
        }

        .cta-nav {
            padding: 10px 20px !important;
            background: var(--primary);
            color: white !important;
            border-radius: 30px;
        }
        
        .burger { display: none; color: white; font-size: 1.5rem; cursor: pointer;}
        header.scrolled .burger { color: var(--dark); }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        #hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;
            overflow: hidden;
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(14, 176, 199, 0.4) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 800px;
            color: white;
            padding-top: 80px; /* Eviter le header */
        }

        .hero-tag {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(5px);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .hero-title {
            font-family: var(--font-display);
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .hero-sub {
            font-size: 1.1rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 600px;
        }

        .trust-badge {
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        .stars { color: var(--highlight); }

        /* -----------------------------------------------------------
           TRUST / SOCIAL PROOF
        ----------------------------------------------------------- */
        #trust {
            padding: 40px 0;
            background: var(--white);
            border-bottom: 1px solid #eee;
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .trust-item {
            font-weight: 700;
            color: #ccc;
            font-size: 1.2rem;
            text-transform: uppercase;
            transition: color 0.3s;
        }
        
        .trust-item:hover { color: var(--dark); }

        /* -----------------------------------------------------------
           SERVICES
        ----------------------------------------------------------- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: var(--white);
            padding: 40px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.03);
        }

        .service-card::top {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 5px;
            background: var(--primary);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px -20px rgba(14, 176, 199, 0.2);
        }

        .service-card:hover::top {
            transform: scaleX(1);
        }

        .icon-box {
            width: 70px;
            height: 70px;
            background: rgba(14, 176, 199, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 25px;
        }

        /* -----------------------------------------------------------
           BEFORE / AFTER SLIDER (WOW EFFECT)
        ----------------------------------------------------------- */
        #wow-slider {
            background-color: var(--dark);
            color: white;
            padding-bottom: 0;
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            max-width: 900px;
            height: 500px;
            margin: 50px auto 0;
            border-radius: var(--radius) var(--radius) 0 0;
            overflow: hidden;
            box-shadow: 0 -20px 50px rgba(0,0,0,0.5);
            cursor: ew-resize;
        }

        .img-container {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-size: cover;
            background-position: center;
        }

        /* Image "Apres" (Propre) */
        .img-after {
            background-image: url('https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=2070&auto=format&fit=crop');
            z-index: 1;
        }

        /* Image "Avant" (Sale - Simulated with filter) */
        .img-before {
            background-image: url('https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=2070&auto=format&fit=crop');
            z-index: 2;
            width: 50%; /* Initial state */
            filter: sepia(0.8) brightness(0.6) contrast(1.1);
            border-right: 3px solid var(--white);
        }

        .slider-handle {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 40px; height: 40px;
            background: var(--white);
            border-radius: 50%;
            z-index: 3;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            pointer-events: none; /* Let clicks pass to wrapper */
        }
        
        .slider-label {
            position: absolute;
            top: 20px;
            padding: 5px 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            border-radius: 20px;
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: bold;
            z-index: 4;
        }
        .label-before { left: 20px; }
        .label-after { right: 20px; }

        /* -----------------------------------------------------------
           B2B SECTION
        ----------------------------------------------------------- */
        #b2b {
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
        }

        .b2b-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .b2b-img img {
            width: 100%;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .b2b-content h2 {
            position: relative;
            padding-bottom: 20px;
        }
        .b2b-content h2::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 60px; height: 4px;
            background: var(--primary);
        }

        /* -----------------------------------------------------------
           CONFECTION
        ----------------------------------------------------------- */
        #confection {
            position: relative;
            background: var(--white);
            border-top: 5px solid var(--highlight); /* La touche jaune */
        }

        .confection-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 50px;
            align-items: center;
        }

        .confection-content h2 span {
            color: #dcb000;
        }

        .confection-img {
            height: 400px;
            background: url('https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=2069') center/cover;
            border-radius: var(--radius);
            position: relative;
        }
        
        .confection-img::after {
             content: '';
             position: absolute;
             bottom: -20px; right: -20px;
             width: 150px; height: 150px;
             background: var(--highlight);
             z-index: -1;
             border-radius: var(--radius);
             opacity: 0.2;
        }

        /* -----------------------------------------------------------
           PRICING
        ----------------------------------------------------------- */
        #pricing {
            background: linear-gradient(to bottom, #fff, #f4fcfd);
        }

        .pricing-table {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            max-width: 800px;
            margin: 40px auto;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            padding: 25px 30px;
            border-bottom: 1px solid #eee;
            align-items: center;
        }

        .price-row:last-child { border-bottom: none; }
        
        .price-row.featured {
            background: rgba(255, 202, 5, 0.1);
        }

        .price-name { font-weight: 700; color: var(--dark); font-size: 1.1rem; }
        .price-val { font-weight: 800; color: var(--primary); font-size: 1.2rem; }
        .price-desc { font-size: 0.85rem; color: #888; display: block; margin-top: 5px;}

        /* -----------------------------------------------------------
           CONTACT & FOOTER
        ----------------------------------------------------------- */
        #contact {
            background: var(--dark);
            color: var(--white);
            padding: 80px 0 40px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-logo img {
            width: 120px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .contact-info li {
            list-style: none;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #aaa;
        }

        .contact-info i { color: var(--primary); }

        .map-container {
            width: 100%;
            height: 200px;
            background: #333;
            border-radius: var(--radius);
            overflow: hidden;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 0.8rem;
            color: #666;
        }

        /* -----------------------------------------------------------
           MOBILE STICKY CTA
        ----------------------------------------------------------- */
        #mobile-sticky-cta {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            z-index: 9999;
            display: none;
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }
        
        #mobile-sticky-cta .btn {
            width: 100%;
            text-align: center;
            padding: 14px;
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .b2b-wrapper, .confection-grid {
                grid-template-columns: 1fr;
            }
            .b2b-img { order: -1; }
            .hero-title { font-size: 2.8rem; }
        }

        @media (max-width: 768px) {
            .burger { display: block; }
            nav ul {
                position: fixed;
                top: 0; right: -100%;
                width: 80%;
                height: 100vh;
                background: var(--white);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                box-shadow: -5px 0 20px rgba(0,0,0,0.1);
            }
            nav ul.active { right: 0; }
            nav a { color: var(--dark); font-size: 1.2rem; }
            
            #mobile-sticky-cta { display: block; }
            
            .hero-title { font-size: 2.2rem; }
            .section-padding { padding: 60px 0; }
            
            .cta-nav { display: none; } /* Hide header CTA on mobile, use sticky */
        }
    </style>
</head>
<body>

    <!-- STICKY CTA MOBILE -->
    <div id="mobile-sticky-cta">
        <a href="#contact" class="btn btn-primary">Devis Gratuit</a>
    </div>

    <!-- HEADER -->
    <header id="main-header">
        <div class="container nav-container">
            <div class="logo-wrapper">
                <!-- LOGO INJECTED VIA JS -->
                <img id="main-logo" alt="Article En Couleur">
            </div>
            <div class="burger"><i class="fas fa-bars"></i></div>
            <nav>
                <ul>
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#b2b">Espace Pro</a></li>
                    <li><a href="#confection">Confection</a></li>
                    <li><a href="#contact" class="cta-nav">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section id="hero">
        <div class="container hero-content">
            <span class="hero-tag">✨ Référence Nettoyage Tana</span>
            <h1 class="hero-title">Redonnez l'éclat du neuf à vos meubles.</h1>
            <p class="hero-sub">Expert en nettoyage profond de canapés, tapis, moquettes et confection de linge de maison à Antananarivo.</p>
            
            <div class="hero-actions">
                <a href="#contact" class="btn btn-primary">Demander un Devis</a>
                <a href="#services" class="btn btn-secondary" style="color: white; border-color: white; margin-left: 15px;">Nos Tarifs</a>
            </div>

            <div class="trust-badge">
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <span>4.9/5 sur Facebook</span>
            </div>
        </div>
    </section>

    <!-- TRUST -->
    <section id="trust">
        <div class="container">
            <p class="text-center" style="margin-bottom: 20px; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Ils nous font confiance</p>
            <div class="trust-grid">
                <div class="trust-item">HOTEL CARLTON</div>
                <div class="trust-item">ORANGE MADAGASCAR</div>
                <div class="trust-item">AXIAN GROUP</div>
                <div class="trust-item">CANAL+</div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center">
                <h2 style="color: var(--primary);">Hygiène & Rénovation</h2>
                <p>Vos tissus accumulent poussière et acariens, nous les éliminons.</p>
            </div>

            <div class="services-grid">
                <!-- Card 1 -->
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-couch"></i></div>
                    <h3>Canapés & Fauteuils</h3>
                    <p style="margin-top: 10px;">Détachage en profondeur par injection-extraction. Ravive les couleurs et élimine les mauvaises odeurs.</p>
                </div>
                <!-- Card 2 -->
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-scroll"></i></div>
                    <h3>Tapis & Moquettes</h3>
                    <p style="margin-top: 10px;">Traitement anti-bactérien et séchage rapide. Idéal pour les familles avec enfants ou animaux.</p>
                </div>
                <!-- Card 3 -->
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-bed"></i></div>
                    <h3>Matelas & Literie</h3>
                    <p style="margin-top: 10px;">Assainissement complet anti-acariens pour des nuits saines et un sommeil réparateur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SLIDER WOW -->
    <section id="wow-slider" class="section-padding">
        <div class="container text-center">
            <h2 class="text-white">La preuve par l'image</h2>
            <p style="color: rgba(255,255,255,0.7);">Glissez pour voir la différence. Résultat garanti sans abîmer les fibres.</p>
            
            <div class="slider-wrapper" id="slider">
                <div class="img-container img-after"></div>
                <div class="img-container img-before" id="img-before"></div>
                <div class="slider-handle" id="slider-handle">
                    <i class="fas fa-arrows-alt-h"></i>
                </div>
                <span class="slider-label label-before">Avant</span>
                <span class="slider-label label-after">Après</span>
            </div>
        </div>
    </section>

    <!-- B2B -->
    <section id="b2b" class="section-padding">
        <div class="container b2b-wrapper">
            <div class="b2b-content">
                <span style="color: var(--primary); font-weight: 700; letter-spacing: 1px;">ESPACE PRO</span>
                <h2>Une image impeccable pour vos bureaux.</h2>
                <p>Bureaux propres, moquettes saines : améliorez le bien-être de vos collaborateurs et l'image auprès de vos clients.</p>
                <ul style="margin-bottom: 30px; list-style: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Intervention horaires flexibles</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Facturation entreprise</li>
                    <li><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Contrat d'entretien annuel</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Devis Entreprise</a>
            </div>
            <div class="b2b-img">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069" alt="Nettoyage Bureau">
            </div>
        </div>
    </section>

    <!-- CONFECTION -->
    <section id="confection" class="section-padding">
        <div class="container confection-grid">
            <div class="confection-img"></div>
            <div class="confection-content">
                <h2>Besoin de renouveau ? <br><span>Confection Sur Mesure</span></h2>
                <p>Nous ne faisons pas que nettoyer. Nous habillons votre intérieur. Rideaux, nappes, housses de protection : choix de tissus premium et finitions soignées.</p>
                <a href="#contact" class="btn btn-secondary" style="border-color: var(--highlight); color: #dcb000;">Catalogue Confection</a>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="text-center">
                <h2>Des prix clairs pour Tana</h2>
                <p>Déplacement inclus sur Tana centre.</p>
            </div>

            <div class="pricing-table">
                <div class="price-row">
                    <div>
                        <span class="price-name">Nettoyage Canapé 1 place</span>
                        <span class="price-desc">Fauteuil ou élément de salon</span>
                    </div>
                    <span class="price-val">20 000 Ar</span>
                </div>
                <div class="price-row">
                    <div>
                        <span class="price-name">Tapis (au m²)</span>
                        <span class="price-desc">Shampouinage et séchage</span>
                    </div>
                    <span class="price-val">10 000 Ar</span>
                </div>
                <div class="price-row featured">
                    <div>
                        <span class="price-name">Pack Salon Complet</span>
                        <span class="price-desc">5 places + Tapis principal</span>
                    </div>
                    <span class="price-val">-10% Remise</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="contact-grid">
                <div>
                    <div class="footer-logo">
                        <img id="footer-logo-img" alt="Logo">
                    </div>
                    <p style="color: #aaa;">Expertise locale, matériel professionnel. Nous redonnons vie à votre intérieur.</p>
                </div>
                <div>
                    <h3 style="margin-bottom: 20px;">Nous Contacter</h3>
                    <ul class="contact-info">
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@articleencouleur.mg</li>
                        <li><i class="fas fa-map-marker-alt"></i> Antananarivo, Madagascar</li>
                    </ul>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60322.9566935639!2d47.4856!3d-18.8792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a05625e3f%3A0x370498a49c258d2!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Article En Couleur. Design Premium.
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script>
        // ----------------------------------------------------
        // CONFIGURATION
        // ----------------------------------------------------
        const LOGO_URL = "logo.jpg";
        
        // Init Logos
        document.addEventListener("DOMContentLoaded", () => {
            document.getElementById('main-logo').src = LOGO_URL;
            document.getElementById('footer-logo-img').src = LOGO_URL;
        });

        // ----------------------------------------------------
        // HEADER SCROLL EFFECT
        // ----------------------------------------------------
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // ----------------------------------------------------
        // MOBILE MENU
        // ----------------------------------------------------
        const burger = document.querySelector('.burger');
        const navUl = document.querySelector('nav ul');
        const links = document.querySelectorAll('nav ul li a');

        burger.addEventListener('click', () => {
            navUl.classList.toggle('active');
            burger.innerHTML = navUl.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                navUl.classList.remove('active');
                burger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // ----------------------------------------------------
        // WOW SLIDER LOGIC
        // ----------------------------------------------------
        const sliderWrapper = document.getElementById('slider');
        const imgBefore = document.getElementById('img-before');
        const handle = document.getElementById('slider-handle');

        const updateSlider = (x) => {
            const rect = sliderWrapper.getBoundingClientRect();
            let pos = x - rect.left;
            
            // Bounds logic
            if (pos < 0) pos = 0;
            if (pos > rect.width) pos = rect.width;
            
            const percent = (pos / rect.width) * 100;
            
            imgBefore.style.width = percent + '%';
            handle.style.left = percent + '%';
        };

        // Mouse Events
        let isDragging = false;

        sliderWrapper.addEventListener('mousedown', () => isDragging = true);
        window.addEventListener('mouseup', () => isDragging = false);
        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            updateSlider(e.clientX);
        });

        // Touch Events (Mobile)
        sliderWrapper.addEventListener('touchstart', () => isDragging = true);
        window.addEventListener('touchend', () => isDragging = false);
        window.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            updateSlider(e.touches[0].clientX);
        });
        
        // Click to jump
        sliderWrapper.addEventListener('click', (e) => {
            updateSlider(e.clientX);
        });

    </script>
</body>
</html>