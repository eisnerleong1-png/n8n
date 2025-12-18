<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya Cantine | Traiteur Entreprise & Scolaire Antananarivo</title>
    <meta name="description" content="Cantine d'entreprise et scolaire à Antananarivo. Repas fait maison, hygiène HACCP, livraison fiable.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --primary-red: #DF2926;
            --primary-red-dark: #b91c19;
            --secondary-cream: #FCCD94;
            --secondary-cream-light: #fff5e6;
            --text-black: #0d0d0d;
            --text-grey: #4a4a4a;
            --white: #ffffff;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --radius: 12px;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'DM Sans', sans-serif;
            --container-width: 1200px;
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
            font-family: var(--font-body);
            color: var(--text-black);
            line-height: 1.6;
            background-color: var(--white);
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        ul {
            list-style: none;
        }

        /* --- UTILITIES --- */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .text-center { text-align: center; }
        .text-primary { color: var(--primary-red); }

        h1, h2, h3 {
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--text-black);
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        p {
            color: var(--text-grey);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        /* --- BUTTONS & ANIMATIONS --- */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-red);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(223, 41, 38, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-red-dark);
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 10px 20px rgba(223, 41, 38, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--text-black);
            color: var(--text-black);
        }

        .btn-secondary:hover {
            background-color: var(--text-black);
            color: var(--white);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Adjusted dynamically via JS */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-red);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .header-contact {
            font-weight: 700;
            margin-right: 20px;
            font-size: 0.9rem;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO --- */
        .hero {
            padding-top: 140px;
            padding-bottom: 80px;
            background: linear-gradient(to right, #fff 50%, #f9f9f9 50%);
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
        }

        .hero-content span {
            color: var(--primary-red);
        }

        .hero-visual {
            position: relative;
            height: 500px;
            display: flex;
        }

        .hero-img-1, .hero-img-2 {
            position: absolute;
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
            transition: transform 0.5s ease;
        }

        /* Food Image */
        .hero-img-1 {
            width: 70%;
            height: 80%;
            top: 0;
            left: 0;
            z-index: 2;
            object-fit: cover;
            border: 4px solid var(--white);
        }

        /* Team Image */
        .hero-img-2 {
            width: 65%;
            height: 70%;
            bottom: 0;
            right: 0;
            z-index: 1;
            object-fit: cover;
            filter: brightness(0.9);
        }

        .hero-visual:hover .hero-img-1 {
            transform: scale(1.02);
            z-index: 3;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--secondary-cream);
            padding: 40px 0;
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .trust-item {
            text-align: center;
            font-weight: 700;
            font-family: var(--font-heading);
            font-size: 1.2rem;
            color: var(--primary-red-dark);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* --- PROBLEM / SOLUTION --- */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            padding: 30px;
            border-radius: var(--radius);
            background: var(--white);
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            box-shadow: var(--shadow-lg);
            transform: translateY(-5px);
            border-color: var(--secondary-cream);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--secondary-cream-light);
            color: var(--primary-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* --- SERVICES --- */
        .services-section {
            background-color: #f9f9f9;
        }

        .services-wrapper {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .service-img {
            height: 300px;
            width: 100%;
        }

        .service-content {
            padding: 40px;
        }

        .service-content h3 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--primary-red);
        }

        .link-arrow {
            display: inline-flex;
            align-items: center;
            margin-top: 20px;
            font-weight: 700;
            color: var(--text-black);
        }

        .link-arrow span { transition: transform 0.3s; }
        .link-arrow:hover span { transform: translateX(5px); }

        /* --- MENU & GALLERY --- */
        .menu-section {
            background: var(--white);
        }

        .menu-layout {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            align-items: start;
        }

        .menu-preview {
            background: var(--secondary-cream-light);
            padding: 40px;
            border-radius: var(--radius);
            border: 1px solid var(--secondary-cream);
        }

        .menu-day {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px dashed #dcb689;
        }

        .menu-day:last-child { border-bottom: none; margin-bottom: 0; }

        .menu-day h4 {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            color: var(--primary-red);
            margin-bottom: 5px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .gallery-item {
            border-radius: var(--radius);
            overflow: hidden;
            height: 250px;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .price-tag {
            margin-top: 20px;
            display: inline-block;
            background: var(--text-black);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* --- HYGIENE --- */
        .hygiene-section {
            background-color: var(--white);
            border-top: 1px solid #f0f0f0;
        }

        .checklist {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin: 40px 0;
        }

        .check-item {
            text-align: center;
        }

        .check-icon {
            font-size: 2rem;
            color: #27ae60;
            margin-bottom: 15px;
        }

        /* --- ABOUT --- */
        .about-section {
            background-color: var(--secondary-cream);
            position: relative;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            border-radius: var(--radius);
            box-shadow: var(--shadow-lg);
        }

        /* --- CONTACT --- */
        .contact-section {
            background: #fff;
        }

        .contact-box {
            background: #fff;
            box-shadow: 0 0 40px rgba(0,0,0,0.05);
            border-radius: 20px;
            padding: 60px;
            border: 1px solid #eee;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group { margin-bottom: 20px; }

        input, select {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary-red);
        }

        /* --- FOOTER --- */
        footer {
            background: #1a1a1a;
            color: #fff;
            padding: 60px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-family: var(--font-heading);
            font-size: 1.5rem;
            color: var(--white);
            margin-bottom: 20px;
            display: block;
        }

        .footer-links h4 { color: var(--secondary-cream); font-size: 1.2rem; margin-bottom: 20px; }
        .footer-links li { margin-bottom: 10px; color: #aaa; }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333;
            color: #666;
            font-size: 0.9rem;
        }

        /* --- MOBILE CTA --- */
        .mobile-cta {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            background: var(--primary-red);
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 50px;
            font-weight: 700;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            z-index: 2000;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.02); }
            100% { transform: translateX(-50%) scale(1); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            h1 { font-size: 2.8rem; }
            .hero-grid, .features-grid, .services-wrapper, .menu-layout, .about-grid, .checklist {
                grid-template-columns: 1fr;
            }
            .hero { background: var(--white); padding-top: 100px; text-align: center;}
            .hero-visual { height: 400px; margin-top: 40px; justify-content: center; }
            .hero-img-1 { width: 80%; left: 10%; }
            .hero-img-2 { display: none; } /* Simplify on tablet */
            .nav-links { display: none; }
            .mobile-menu-btn { display: block; }
            .form-grid { grid-template-columns: 1fr; }
            .mobile-cta { display: block; }
            .contact-box { padding: 30px; }
        }

        @media (max-width: 480px) {
            h1 { font-size: 2.2rem; }
            h2 { font-size: 2rem; }
            .btn { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo-container" id="logo-placeholder">
                    <!-- JS Injects Logo Here -->
                </a>
                
                <div class="nav-links">
                    <a href="#entreprises">Entreprises</a>
                    <a href="#ecoles">Écoles</a>
                    <a href="#cuisine">Notre Cuisine</a>
                    <a href="#hygiene">Hygiène</a>
                    <span class="header-contact">+261 34 00 000 00</span>
                    <a href="#contact" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem;">Demander un devis</a>
                </div>

                <div class="mobile-menu-btn">☰</div>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content">
                        <h1>La Cantine d'Entreprise et Scolaire qui a le goût du <br><span>"Fait Maison"</span> à Antananarivo.</h1>
                        <p>Offrez à vos collaborateurs et élèves des repas sains, équilibrés et sécurisés. Service traiteur fiable pour les professionnels qui exigent le meilleur.</p>
                        <a href="#contact" class="btn btn-primary">Recevoir une proposition de menu</a>
                    </div>
                    <div class="hero-visual">
                        <!-- Left: Delicious Food (Gourmet stew) -->
                        <img src="https://images.unsplash.com/photo-1547592180-85f173990554?q=80&w=800&auto=format&fit=crop" alt="Plat gourmand Malgache revisité" class="hero-img-1">
                        <!-- Right: Happy Team -->
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" alt="Équipe entreprise déjeuner" class="hero-img-2">
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust Bar -->
        <section class="trust-bar">
            <div class="container">
                <div class="trust-grid">
                    <div class="trust-item"><span>🍅</span> 100% Produits Frais</div>
                    <div class="trust-item"><span>🥘</span> 500+ Repas / Jour</div>
                    <div class="trust-item"><span>🤝</span> Partenaire des Écoles</div>
                    <div class="trust-item"><span>🏢</span> Fournisseur Bureaux Tana</div>
                </div>
            </div>
        </section>

        <!-- Problems / Solutions -->
        <section class="section-padding" id="pourquoi-maya">
            <div class="container">
                <div class="text-center" style="max-width: 700px; margin: 0 auto 50px;">
                    <h2>Fini la restauration collective industrielle sans saveur.</h2>
                    <p>Nous redonnons du sens à la pause déjeuner.</p>
                </div>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="icon-box">♥</div>
                        <h3>Le Goût avant tout</h3>
                        <p>Des recettes traditionnelles malgaches et internationales cuisinées avec amour. Pas de plats décongelés, que du vrai.</p>
                    </div>
                    <div class="feature-card">
                        <div class="icon-box">🛡️</div>
                        <h3>Hygiène Irréprochable</h3>
                        <p>Respect strict des normes HACCP. La sécurité alimentaire de vos équipes et élèves est notre priorité absolue.</p>
                    </div>
                    <div class="feature-card">
                        <div class="icon-box">⏱</div>
                        <h3>Flexibilité & Fiabilité</h3>
                        <p>Des menus adaptés à votre budget et une livraison ponctuelle garantie dans tout Antananarivo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="section-padding services-section" id="entreprises">
            <div class="container">
                <h2 class="text-center" style="margin-bottom: 50px;">Une solution adaptée à votre structure.</h2>
                <div class="services-wrapper">
                    <!-- Corporate -->
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=800&auto=format&fit=crop" alt="Repas d'entreprise" class="service-img">
                        <div class="service-content">
                            <h3>Cantine d'Entreprise</h3>
                            <p>Boostez la productivité et le bien-être de vos équipes avec des pauses déjeuner de qualité restaurant, livrées au bureau.</p>
                            <a href="#contact" class="link-arrow">Voir les offres Entreprise <span>→</span></a>
                        </div>
                    </div>
                    <!-- School -->
                    <div class="service-card" id="ecoles">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?q=80&w=800&auto=format&fit=crop" alt="Cantine scolaire saine" class="service-img">
                        <div class="service-content">
                            <h3>Cantine Scolaire</h3>
                            <p>Des repas équilibrés, validés par nutritionniste, pour soutenir la croissance et la concentration de vos élèves.</p>
                            <a href="#contact" class="link-arrow">Voir les offres Scolaires <span>→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Menu & Gallery -->
        <section class="section-padding menu-section" id="cuisine">
            <div class="container">
                <div class="menu-layout">
                    <!-- Left: Weekly Menu -->
                    <div class="menu-preview">
                        <h2>Qu'est-ce qu'on mange cette semaine ?</h2>
                        <div class="menu-day">
                            <h4>Lundi</h4>
                            <p>Hen'omby Ritra aux petits pois, Riz rouge, Rougail tomates.</p>
                        </div>
                        <div class="menu-day">
                            <h4>Mardi</h4>
                            <p>Poulet Coco façon Grand-Mère, Légumes sautés croquants.</p>
                        </div>
                        <div class="menu-day">
                            <h4>Mercredi</h4>
                            <p>Filet de Poisson sauce citronnée, Gratin de pommes de terre.</p>
                        </div>
                        <div class="price-tag">Formules dès 8 000 Ar / pers</div>
                    </div>

                    <!-- Right: Gallery -->
                    <div class="gallery-grid">
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?q=80&w=600&auto=format&fit=crop" alt="Plat riz légumes">
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop" alt="Plat viande sauce">
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1467003909585-2f8a7270028d?q=80&w=600&auto=format&fit=crop" alt="Légumes frais">
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=600&auto=format&fit=crop" alt="Poulet rôti">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hygiene -->
        <section class="section-padding hygiene-section" id="hygiene">
            <div class="container text-center">
                <h2>La Qualité sans compromis.</h2>
                <p>Nous savons que la confiance se gagne dans l'assiette et en cuisine.</p>
                
                <div class="checklist">
                    <div class="check-item">
                        <div class="check-icon">🥬</div>
                        <h3>Sourcing Local</h3>
                        <p>Produits des marchés d'Anosibe & Mahamasina.</p>
                    </div>
                    <div class="check-item">
                        <div class="check-icon">❄️</div>
                        <h3>Chaîne du Froid</h3>
                        <p>Respectée rigoureusement de l'achat à la livraison.</p>
                    </div>
                    <div class="check-item">
                        <div class="check-icon">✨</div>
                        <h3>Propreté Totale</h3>
                        <p>Cuisines désinfectées selon protocoles stricts.</p>
                    </div>
                </div>
                <button class="btn btn-secondary">Télécharger notre charte qualité</button>
            </div>
        </section>

        <!-- About -->
        <section class="section-padding about-section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-content">
                        <h2>L'esprit Maya Cantine.</h2>
                        <p>Fondée par une passionnée de la gastronomie malgache, Maya Cantine est née d'un constat simple : il est difficile de bien manger au travail à Tana.</p>
                        <p>Notre mission est de vous apporter ce petit goût de "comme à la maison", sain et réconfortant, pour que la pause déjeuner redevienne un moment de plaisir.</p>
                    </div>
                    <div class="about-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?q=80&w=800&auto=format&fit=crop" alt="Cheffe cuisine" class="about-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="section-padding contact-section" id="contact">
            <div class="container">
                <div class="contact-box">
                    <div class="text-center" style="margin-bottom: 40px;">
                        <h2>Prêt à changer la pause déjeuner ?</h2>
                        <p>Remplissez ce formulaire pour obtenir un devis personnalisé sous 24h.</p>
                    </div>
                    
                    <form>
                        <div class="form-grid">
                            <div class="form-group">
                                <input type="text" placeholder="Nom de l'entreprise / École" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Nom du responsable" required>
                            </div>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <select>
                                    <option value="" disabled selected>Nombre de couverts estimés</option>
                                    <option value="10-50">10 - 50 couverts</option>
                                    <option value="50-100">50 - 100 couverts</option>
                                    <option value="100+">Plus de 100 couverts</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="tel" placeholder="Téléphone (Obligatoire)" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Adresse Email" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="width: 100%; max-width: 300px;">Obtenir mon devis gratuit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <span class="footer-logo">Maya Cantine</span>
                    <p style="color: #aaa; font-size: 0.9rem;">Le goût du fait maison pour les pros.</p>
                    <p style="color: #aaa; font-size: 0.9rem;">Antananarivo, Madagascar</p>
                </div>
                <div class="footer-links">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#entreprises">Entreprises</a></li>
                        <li><a href="#ecoles">Écoles</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Suivez-nous</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Maya Cantine. Tous droits réservés. Mentions Légales.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA -->
    <a href="#contact" class="mobile-cta">
        Demander un devis
    </a>

    <script>
        // --- CONFIGURATION LOGO (OBLIGATOIRE) ---
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien direct de votre logo final.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du Logo
        document.getElementById('logo-placeholder').innerHTML = `<img src="${LOGO_URL}" alt="Maya Cantine Logo">`;

        // --- STICKY HEADER EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.padding = '10px 0';
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.05)';
            } else {
                header.style.padding = '15px 0';
                header.style.boxShadow = 'none';
            }
        });

        // --- SMOOTH SCROLL (Compatibilité) ---
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