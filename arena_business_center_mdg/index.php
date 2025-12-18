<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena Business Center | Location Bureau & Domiciliation Antananarivo</title>
    <meta name="description" content="Bureau équipé premium, coworking et domiciliation d'entreprise à Antananarivo. Fibre optique dédiée, groupe électrogène, assistance administrative.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- Styles CSS -->
    <style>
        :root {
            /* Palette */
            --color-primary: #112746; /* Bleu Nuit */
            --color-primary-light: #1a3a66;
            --color-accent: #EB1E4E; /* Rose Vif */
            --color-accent-hover: #c2153d;
            --color-white: #FFFFFF;
            --color-gray-light: #F3F4F6;
            --color-text-dark: #0f172a;
            --color-text-gray: #475569;

            /* Spacing */
            --container-width: 1200px;
            --header-height: 80px;
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
        }

        /* Reset & Base */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Outfit', sans-serif;
            color: var(--color-text-dark);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* Utilities */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 600;
            border-radius: var(--radius-sm);
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            border: 2px solid var(--color-accent);
            box-shadow: 0 10px 20px -10px rgba(235, 30, 78, 0.5);
        }

        .btn-primary:hover {
            background-color: var(--color-accent-hover);
            border-color: var(--color-accent-hover);
            transform: translateY(-2px);
        }

        .btn-ghost {
            background-color: transparent;
            color: var(--color-white);
            border: 2px solid var(--color-white);
        }

        .btn-ghost:hover {
            background-color: var(--color-white);
            color: var(--color-primary);
        }

        .section-padding { padding: 100px 0; }
        .text-accent { color: var(--color-accent); }
        .bg-gray { background-color: var(--color-gray-light); }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background 0.3s ease, padding 0.3s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background-color: rgba(17, 39, 70, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajustable via JS */
        }

        .nav-links { display: flex; gap: 30px; }
        .nav-links a {
            color: var(--color-white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: var(--color-accent);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after { width: 100%; }

        .hamburger { display: none; color: white; font-size: 1.5rem; cursor: pointer; }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            min-height: 700px;
            background-image: linear-gradient(rgba(17, 39, 70, 0.75), rgba(17, 39, 70, 0.6)), url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            position: relative;
            color: var(--color-white);
        }

        .hero-content {
            max-width: 800px;
            animation: fadeUp 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 600px;
        }

        .hero-buttons { display: flex; gap: 20px; margin-bottom: 30px; }

        .trust-badge {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            opacity: 0.9;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        .trust-item { display: flex; align-items: center; gap: 8px; }
        .trust-item i { color: #4ade80; } /* Vert */

        /* SOCIAL PROOF */
        .social-proof {
            padding: 40px 0;
            background: #F8FAFC;
            border-bottom: 1px solid #E2E8F0;
        }

        .social-title {
            text-align: center;
            color: var(--color-text-gray);
            font-size: 0.9rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logo-carousel {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }
        
        /* Placeholder logo style */
        .client-logo {
            font-weight: 800;
            color: #cbd5e1;
            font-size: 1.5rem;
        }

        /* VALUE PROP */
        .value-prop-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            text-align: left;
        }

        .vp-card {
            padding: 30px;
            border-radius: var(--radius-md);
            transition: transform 0.3s;
        }
        
        .vp-card:hover { transform: translateY(-5px); }

        .vp-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(235, 30, 78, 0.1);
            color: var(--color-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .vp-card h3 { margin-bottom: 15px; font-size: 1.5rem; }
        .vp-card p { color: var(--color-text-gray); }

        /* BENTO GRID SERVICES */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: auto;
            gap: 30px;
        }

        .bento-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: 0 10px 40px -10px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .bento-card:hover {
            box-shadow: 0 20px 50px -15px rgba(0,0,0,0.15);
            transform: translateY(-5px);
        }

        .card-office { grid-column: span 7; }
        .card-admin { grid-column: span 5; }

        .bento-img {
            height: 300px;
            width: 100%;
            object-fit: cover;
        }
        
        .bento-content { padding: 40px; flex-grow: 1; display: flex; flex-direction: column; }
        .bento-content h3 { font-size: 2rem; margin-bottom: 10px; color: var(--color-primary); }
        .bento-price { 
            color: var(--color-accent); 
            font-weight: 700; 
            font-size: 1.1rem; 
            margin-bottom: 20px; 
            display: block;
        }
        .bento-list { margin-bottom: 30px; }
        .bento-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-text-gray);
        }
        .bento-list li::before {
            content: '✓';
            color: var(--color-accent);
            font-weight: bold;
        }
        .bento-action { margin-top: auto; align-self: flex-start; }

        /* GALLERY SLIDER */
        .gallery-container {
            width: 100%;
            overflow-x: auto;
            display: flex;
            scroll-snap-type: x mandatory;
            gap: 20px;
            padding-bottom: 20px;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        
        .gallery-container::-webkit-scrollbar { display: none; }

        .gallery-item {
            min-width: 400px;
            height: 300px;
            scroll-snap-align: center;
            border-radius: var(--radius-md);
            overflow: hidden;
            position: relative;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img { transform: scale(1.05); }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            font-weight: 600;
        }

        /* ABOUT */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .about-img {
            border-radius: var(--radius-lg);
            box-shadow: 20px 20px 0px var(--color-gray-light);
        }

        /* FAQ */
        .accordion { max-width: 800px; margin: 0 auto; }
        .accordion-item {
            border-bottom: 1px solid #E2E8F0;
            margin-bottom: 10px;
        }
        .accordion-header {
            width: 100%;
            padding: 20px 0;
            background: none;
            border: none;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--color-primary);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion-header::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--color-accent);
            transition: transform 0.3s;
        }
        .accordion-header.active::after { transform: rotate(45deg); }
        .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: var(--color-text-gray);
        }
        .accordion-body p { padding-bottom: 20px; }

        /* FOOTER & CONTACT */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 80px 0 30px 0;
            position: relative;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr 0.8fr;
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-form {
            background: rgba(255,255,255,0.05);
            padding: 30px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .form-group { margin-bottom: 15px; }
        .form-control {
            width: 100%;
            padding: 12px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: white;
            border-radius: 4px;
        }
        .form-control:focus { outline: none; border-color: var(--color-accent); }

        .footer-info h4, .footer-links h4, .footer-form h4 {
            color: var(--color-white);
            margin-bottom: 25px;
            font-size: 1.2rem;
        }

        .footer-info li {
            margin-bottom: 15px;
            display: flex;
            gap: 15px;
            opacity: 0.8;
        }

        .footer-links li { margin-bottom: 10px; }
        .footer-links a { color: rgba(255,255,255,0.7); }
        .footer-links a:hover { color: var(--color-accent); }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.85rem;
            opacity: 0.6;
        }

        /* MOBILE STICKY BUTTON */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-white);
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none; /* Shown on mobile via media query */
            justify-content: space-between;
            align-items: center;
        }
        
        .mobile-sticky-cta .price-hint {
            font-size: 0.8rem;
            color: var(--color-text-gray);
            font-weight: 500;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .bento-grid { grid-template-columns: 1fr; }
            .card-office, .card-admin { grid-column: span 1; }
            .about-grid { grid-template-columns: 1fr; text-align: center; }
            .about-img { margin-bottom: 30px; }
            .footer-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hamburger { display: block; }
            .hero { align-items: center; text-align: center; padding-top: 80px; }
            .hero-content { margin: 0 auto; }
            .hero h1 { font-size: 2.2rem; }
            .hero-buttons { justify-content: center; flex-direction: column; }
            .trust-badge { justify-content: center; flex-direction: column; gap: 10px; }
            .mobile-sticky-cta { display: flex; }
            footer { padding-bottom: 90px; } /* Space for sticky button */
        }

        /* ANIMATION UTILS */
        @keyframes fadeUp {
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
    </style>
</head>
<body>

    <!-- MOBILE STICKY CTA -->
    <div class="mobile-sticky-cta">
        <div class="price-hint">Dès 20k Ar / jour</div>
        <a href="#contact" class="btn btn-primary" style="padding: 10px 20px;">Demander une visite</a>
    </div>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-container">
                <!-- LE LOGO SERA INJECTÉ ICI PAR JS -->
                <img id="nav-logo" alt="Arena Business Center Logo">
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#services">Services</a></li>
                    <li><a href="#gallery">Espaces</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.85rem;">Réserver</a></li>
                </ul>
                <div class="hamburger">☰</div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Votre Bureau Premium & Centre d'Affaires au Cœur d'Antananarivo.</h1>
                <p>Coworking, Domiciliation et Assistance Administrative. Concentrez-vous sur votre business, nous gérons le reste.</p>
                
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Réserver une visite gratuite</a>
                    <a href="#services" class="btn btn-ghost">Voir les services</a>
                </div>

                <div class="trust-badge">
                    <div class="trust-item">
                        <i>⚡</i> Électricité & Groupe 24/7
                    </div>
                    <div class="trust-item">
                        <i>📶</i> Fibre Optique Dédiée
                    </div>
                    <div class="trust-item">
                        <i>🛡️</i> Sécurité Privée
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container">
            <h5 class="social-title">Ils développent leur business chez Arena</h5>
            <div class="logo-carousel">
                <span class="client-logo">TECH MADA</span>
                <span class="client-logo">GlobalCorp</span>
                <span class="client-logo">StartIO</span>
                <span class="client-logo">ExpatServices</span>
                <span class="client-logo">InvestM</span>
            </div>
        </div>
    </section>

    <!-- VALUE PROP -->
    <section class="section-padding reveal">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 10px;">Plus qu'un simple espace de travail</h2>
                <p style="color: var(--color-text-gray);">L'infrastructure indispensable pour réussir à Madagascar.</p>
            </div>
            
            <div class="value-prop-grid">
                <div class="vp-card">
                    <div class="vp-icon">⏳</div>
                    <h3>Flexibilité Totale</h3>
                    <p>Bureaux à l'heure, au mois ou à l'année. Évoluez sans contrainte de bail commercial rigide 3/6/9.</p>
                </div>
                <div class="vp-card">
                    <div class="vp-icon">🤝</div>
                    <h3>Support 360°</h3>
                    <p>Ne perdez plus de temps avec l'administration malgache. Création de société, domiciliation et assistance RH sur place.</p>
                </div>
                <div class="vp-card">
                    <div class="vp-icon">🚀</div>
                    <h3>Infrastructure Fiable</h3>
                    <p>Fibre optique très haut débit redondante et backup électrique automatique. Zéro interruption de business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES (BENTO GRID) -->
    <section id="services" class="section-padding bg-gray reveal">
        <div class="container">
            <div style="margin-bottom: 50px;">
                <h2 style="font-size: 2.5rem; color: var(--color-primary);">Nos Solutions sur Mesure</h2>
                <div style="width: 60px; height: 4px; background: var(--color-accent); margin-top: 15px;"></div>
            </div>

            <div class="bento-grid">
                <!-- CARD A: LOCATION -->
                <div class="bento-card card-office">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bureau privé Tana" class="bento-img">
                    <div class="bento-content">
                        <h3>Espaces de Travail</h3>
                        <span class="bento-price">À partir de 20 000 Ar / jour</span>
                        <ul class="bento-list">
                            <li>Bureaux Privés (1 à 10 postes)</li>
                            <li>Postes en Open Space</li>
                            <li>Salles de réunion équipées TV/Visio</li>
                            <li>Accès cuisine & espace détente</li>
                        </ul>
                        <div class="bento-action">
                            <a href="#contact" class="btn btn-primary">Voir les disponibilités</a>
                        </div>
                    </div>
                </div>

                <!-- CARD B: ADMIN -->
                <div class="bento-card card-admin">
                    <div style="background: var(--color-primary); height: 300px; display: flex; align-items: center; justify-content: center;">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Documents Admin" style="opacity: 0.2; width: 100%; height: 100%; object-fit: cover;">
                        <h3 style="position: absolute; color: white; font-size: 2.5rem;">Business<br>Services</h3>
                    </div>
                    <div class="bento-content">
                        <h3>Services Entreprises</h3>
                        <span class="bento-price">Domiciliation dès 100 000 Ar / mois</span>
                        <ul class="bento-list">
                            <li>Domiciliation Commerciale & Fiscale</li>
                            <li>Création de Société (SARL / EI)</li>
                            <li>Secrétariat & Gestion de courrier</li>
                            <li>Assistance comptable de base</li>
                        </ul>
                        <div class="bento-action">
                            <a href="#contact" class="btn btn-primary" style="background: transparent; color: var(--color-primary); border: 2px solid var(--color-primary);">Nos offres Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="section-padding reveal">
        <div class="container">
            <h2 style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 40px;">Visitez Arena Business Center</h2>
            
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Salle de réunion">
                    <div class="gallery-caption">Salles de Réunion Premium</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Coworking Space">
                    <div class="gallery-caption">Espace Coworking Lumineux</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Espace Café">
                    <div class="gallery-caption">Lounge & Café Gratuit</div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Building Tana">
                    <div class="gallery-caption">Quartier d'Affaires Sécurisé</div>
                </div>
            </div>
            <div style="text-align: right; margin-top: 10px; color: var(--color-text-gray); font-size: 0.9rem;">
                 ← Glissez pour voir plus →
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding bg-gray reveal">
        <div class="container">
            <div class="about-grid">
                <div>
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Equipe Arena" class="about-img">
                </div>
                <div>
                    <h3 style="color: var(--color-accent); font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px;">À Propos</h3>
                    <h2 style="font-size: 2.5rem; color: var(--color-primary); margin-bottom: 20px;">L'excellence opérationnelle à Tana.</h2>
                    <p style="margin-bottom: 20px; color: var(--color-text-gray);">
                        Arena Business Center n'est pas qu'un simple bailleur. Nous sommes le partenaire de croissance des entrepreneurs et des sociétés internationales s'implantant à Madagascar.
                    </p>
                    <p style="margin-bottom: 30px; color: var(--color-text-gray);">
                        Nous comprenons les défis locaux : instabilité énergétique, lenteurs administratives, besoin de connectivité. Nous avons conçu Arena pour être un havre de productivité "Plug & Play" où tout fonctionne, tout simplement.
                    </p>
                    <div style="display: flex; gap: 40px;">
                        <div>
                            <span style="font-size: 2.5rem; font-weight: 700; color: var(--color-primary);">50+</span>
                            <p style="font-size: 0.9rem;">Entreprises Domiciliées</p>
                        </div>
                        <div>
                            <span style="font-size: 2.5rem; font-weight: 700; color: var(--color-primary);">100%</span>
                            <p style="font-size: 0.9rem;">Uptime Électrique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding reveal">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; color: var(--color-primary); margin-bottom: 50px;">Questions Fréquentes</h2>
            
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-header">Le wifi est-il assez puissant pour les visio-conférences ?</button>
                    <div class="accordion-body">
                        <p>Absolument. Nous disposons d'une fibre optique professionnelle dédiée (non partagée) avec un débit symétrique garanti. De nombreux développeurs et centres d'appels opèrent depuis nos locaux sans latence.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">Y a-t-il un parking sécurisé ?</button>
                    <div class="accordion-body">
                        <p>Oui, le bâtiment dispose d'un parking souterrain gardé 24h/24, accessible à nos locataires et à leurs visiteurs.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-header">Puis-je domicilier mon entreprise sans louer de bureau ?</button>
                    <div class="accordion-body">
                        <p>Tout à fait. Notre offre de domiciliation virtuelle inclut une adresse prestigieuse, la réception du courrier et l'accès ponctuel aux salles de réunion, sans le coût d'un bureau physique.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER / CONTACT -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- FORM -->
                <div class="footer-form">
                    <h4>Rappel Immédiat</h4>
                    <p style="margin-bottom: 20px; font-size: 0.9rem; opacity: 0.8;">Laissez vos coordonnées, notre manager vous rappelle sous 2h ouvrées.</p>
                    <form onsubmit="event.preventDefault(); alert('Merci ! Nous vous recontactons très vite.');">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Numéro de Téléphone (avec indicatif)" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option style="color: black;">Je suis intéressé par...</option>
                                <option style="color: black;">Un Bureau Privé</option>
                                <option style="color: black;">Le Coworking</option>
                                <option style="color: black;">La Domiciliation</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Être rappelé</button>
                    </form>
                </div>

                <!-- INFO -->
                <div class="footer-info">
                    <h4>Nos Coordonnées</h4>
                    <ul>
                        <li>
                            <span>📍</span>
                            <span>Immeuble Prisme, 3ème étage<br>Quartier d'Affaires Ankorondrano<br>101 Antananarivo, Madagascar</span>
                        </li>
                        <li>
                            <span>📞</span>
                            <span>+261 34 00 000 00</span>
                        </li>
                        <li>
                            <span>✉️</span>
                            <span>contact@arenabusiness.mg</span>
                        </li>
                        <li>
                            <span>🕒</span>
                            <span>Lun - Ven : 08h00 - 18h00<br>Sam : 09h00 - 12h00</span>
                        </li>
                    </ul>
                </div>

                <!-- LINKS -->
                <div class="footer-links">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#">Tarifs Domiciliation</a></li>
                        <li><a href="#">Location Bureau</a></li>
                        <li><a href="#">Blog Entrepreneur Mada</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                &copy; 2025 Arena Business Center. Designed with Premium Standards.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // ==========================================
        // CONFIGURATION DU LOGO (VARIABLE CRITIQUE)
        // ==========================================
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien de votre logo final (PNG Transparent recommandé).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du logo au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const logoImg = document.getElementById('nav-logo');
            if(logoImg) {
                logoImg.src = LOGO_URL;
            }

            // Scroll Animation (Reveal)
            const revealElements = document.querySelectorAll('.reveal');
            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;
                
                revealElements.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };
            window.addEventListener('scroll', revealOnScroll);
            revealOnScroll(); // Trigger once on load
        });

        // Sticky Header Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Accordion Logic
        const accordions = document.querySelectorAll('.accordion-header');
        accordions.forEach(acc => {
            acc.addEventListener('click', function() {
                this.classList.toggle('active');
                const panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        });

        // Mobile Menu Toggle (Basic)
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            if(navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '70px';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.backgroundColor = '#112746';
                navLinks.style.flexDirection = 'column';
                navLinks.style.padding = '20px';
                navLinks.style.textAlign = 'center';
            }
        });

    </script>
</body>
</html>