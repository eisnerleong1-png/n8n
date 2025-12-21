<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Installation solaire industrielle et ingénierie électrique à Madagascar. Réduisez vos coûts énergétiques avec Ener Technologie.">
    <title>Ener Technologie | Solaire Industriel & Ingénierie Madagascar</title>
    
    <!-- Polices Google : Montserrat (Titres) & Inter (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #205561; /* Vert Sombre - Sérieux */
            --color-accent: #24759A;  /* Bleu Tech - Innovation */
            --color-white: #FFFFFF;
            --color-bg-light: #F8FAFC;
            --color-text-main: #1E293B;
            --color-text-light: #64748B;
            --shadow-card: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 20px 40px -5px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
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
            font-family: 'Inter', sans-serif;
            color: var(--color-text-main);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            color: var(--color-primary);
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

        img {
            max-width: 100%;
            display: block;
        }

        /* --- UTILITIES --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            background-color: var(--color-accent);
            color: var(--color-white);
            font-weight: 600;
            border-radius: 4px; /* Slightly technical look */
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #1a5c7a;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(36, 117, 154, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--color-accent);
            color: var(--color-accent);
        }

        .btn-outline:hover {
            background-color: var(--color-accent);
            color: var(--color-white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .section-title {
            margin-bottom: 60px;
            text-align: center;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--color-text-light);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        #logo-container img {
            height: 50px; /* Ajustable via JS si besoin */
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--color-primary);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            color: var(--color-primary);
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(32, 85, 97, 0.7), rgba(32, 85, 97, 0.5)), url('https://images.unsplash.com/photo-1624397640148-949b1732bb0a?q=80&w=2574&auto=format&fit=crop'); 
            /* Solar panels on industrial roof */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--color-white);
        }

        .hero-content {
            max-width: 800px;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            color: var(--color-white);
            font-size: 3.5rem;
            margin-bottom: 25px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            max-width: 650px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-bar p {
            text-align: center;
            font-weight: 600;
            color: var(--color-text-light);
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 50px;
            opacity: 0.6;
        }

        .logo-item {
            font-weight: 700;
            font-size: 1.5rem;
            color: #94a3b8; /* Placeholder style */
            font-family: 'Montserrat', sans-serif;
        }

        /* --- PROBLEM & SOLUTION --- */
        .problem-solution {
            background-color: var(--color-bg-light);
        }

        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
        }

        .col-left, .col-right {
            padding: 60px;
        }

        .col-left {
            background-color: #F1F5F9;
            border-right: 1px solid #E2E8F0;
        }

        .col-right {
            background-color: var(--color-white);
            position: relative;
        }

        .col-right::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--color-accent);
        }

        .comparison-title {
            font-size: 1.5rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .list-check li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            font-size: 1.1rem;
        }

        .list-check i {
            margin-top: 4px;
        }

        .problem-icon { color: #DC2626; }
        .solution-icon { color: var(--color-accent); }

        /* --- SERVICES --- */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: 8px;
            border: 1px solid #eee;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-color: transparent;
        }

        .service-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        .service-card:hover::after {
            width: 100%;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(36, 117, 154, 0.1);
            color: var(--color-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.25rem;
        }

        .service-card p {
            color: var(--color-text-light);
            font-size: 0.95rem;
        }

        /* --- PORTFOLIO --- */
        .portfolio {
            background-color: #1a1a1a; /* Dark background to make images pop */
            color: var(--color-white);
        }

        .portfolio .section-title h2 { color: var(--color-white); }
        .portfolio .section-title p { color: #a3a3a3; }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
        }

        .project-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            group: cursor;
        }

        .project-img {
            height: 350px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-img {
            transform: scale(1.05);
        }

        .project-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            padding: 30px;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .project-card:hover .project-overlay {
            transform: translateY(0);
        }

        .project-overlay h4 {
            color: var(--color-white);
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .project-stats {
            color: var(--color-accent);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
            display: block;
        }

        /* --- ABOUT --- */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .about-text p {
            color: var(--color-text-light);
            margin-bottom: 20px;
        }

        .about-img {
            position: relative;
        }

        .about-img img {
            border-radius: 8px;
            box-shadow: var(--shadow-card);
        }

        .certification-badge {
            position: absolute;
            bottom: -20px;
            right: -20px;
            background-color: var(--color-white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: var(--shadow-card);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .badge-icon {
            font-size: 2rem;
            color: var(--color-accent);
        }

        /* --- FAQ --- */
        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .faq-item {
            background-color: var(--color-bg-light);
            padding: 30px;
            border-radius: 8px;
        }

        .faq-item h4 {
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .faq-item h4 i { color: var(--color-accent); }

        .faq-item p {
            color: var(--color-text-light);
            font-size: 0.95rem;
            padding-left: 28px;
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 80px 0 30px;
        }

        .footer-cta {
            text-align: center;
            margin-bottom: 80px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 60px;
        }

        .footer-cta h2 {
            color: var(--color-white);
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-info h3 {
            color: var(--color-white);
            margin-bottom: 20px;
        }

        .contact-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--color-accent);
        }

        .copyright {
            text-align: center;
            opacity: 0.5;
            font-size: 0.85rem;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .comparison-grid { grid-template-columns: 1fr; }
            .col-left { border-right: none; border-bottom: 1px solid #E2E8F0; }
            .about-content { grid-template-columns: 1fr; }
            .about-img { order: -1; margin-bottom: 40px; }
            .certification-badge { right: 0; }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--color-white);
                flex-direction: column;
                padding: 40px;
                gap: 20px;
                transform: translateY(-150%);
                transition: var(--transition);
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }
            
            .nav-links.active { transform: translateY(0); }
            .mobile-menu-btn { display: block; }
            .hero { text-align: center; justify-content: center; }
            .hero-content { margin: 0 auto; }
            .faq-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; text-align: center; }
            .contact-list li { justify-content: center; }
            .social-links { justify-content: center; }
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header>
        <div class="container">
            <nav>
                <div id="logo-container">
                    <!-- LOGO INJECTED VIA JS -->
                </div>
                <div class="nav-links">
                    <a href="#services">Expertise</a>
                    <a href="#portfolio">Réalisations</a>
                    <a href="#about">À Propos</a>
                    <a href="#faq">FAQ</a>
                    <a href="#contact" class="btn" style="padding: 10px 20px;">Contact</a>
                </div>
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Sécurisez votre Production Industrielle avec l'Énergie Solaire.</h1>
                <p>Solutions d'ingénierie électrique et photovoltaïque sur mesure pour les entreprises à Madagascar. Réduisez vos charges jusqu'à 60% et éliminez les arrêts de production.</p>
                <a href="#contact" class="btn">Étude de Faisabilité Gratuite</a>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <p>Ils fiabilisent leur énergie avec Ener Technologie</p>
            <div class="logos-grid">
                <!-- Placeholder Text Logos for Demo -->
                <div class="logo-item">AGRI-MAD</div>
                <div class="logo-item">TEXTILE TANA</div>
                <div class="logo-item">BANK OF AFRICA</div>
                <div class="logo-item">STAR BREWERIES</div>
                <div class="logo-item">LOGISTIQUE MADA</div>
            </div>
        </div>
    </section>

    <!-- PROBLEM / SOLUTION -->
    <section class="section-padding problem-solution">
        <div class="container">
            <div class="section-title">
                <h2>Ne laissez plus l'énergie freiner votre croissance</h2>
                <p>L'instabilité énergétique est le premier frein à la productivité industrielle à Madagascar. Nous avons la solution.</p>
            </div>

            <div class="comparison-grid">
                <div class="col-left">
                    <div class="comparison-title">
                        <i class="fas fa-exclamation-triangle problem-icon"></i>
                        <h3>Situation Actuelle</h3>
                    </div>
                    <ul class="list-check">
                        <li><i class="fas fa-times problem-icon"></i> Coûts JIRAMA imprévisibles et en hausse.</li>
                        <li><i class="fas fa-times problem-icon"></i> Coupures fréquentes (Délestage).</li>
                        <li><i class="fas fa-times problem-icon"></i> Équipements endommagés par les surtensions.</li>
                        <li><i class="fas fa-times problem-icon"></i> Dépendance totale au fioul (groupes électrogènes).</li>
                    </ul>
                </div>
                <div class="col-right">
                    <div class="comparison-title">
                        <i class="fas fa-check-circle solution-icon"></i>
                        <h3>Solution Ener Technologie</h3>
                    </div>
                    <ul class="list-check">
                        <li><i class="fas fa-check solution-icon"></i> Réduction immédiate des factures (-40 à -60%).</li>
                        <li><i class="fas fa-check solution-icon"></i> Autonomie partielle ou totale (Hybride/Batteries).</li>
                        <li><i class="fas fa-check solution-icon"></i> Stabilité de tension garantie par ingénierie.</li>
                        <li><i class="fas fa-check solution-icon"></i> ROI calculé et précis (3 à 5 ans).</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERTISE -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-title">
                <h2>Nos Expertises Techniques</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-solar-panel"></i></div>
                    <h3>Centrales Solaires B2B</h3>
                    <p>Dimensionnement précis pour usines et bureaux. Installation sur toiture ou au sol avec panneaux Tier-1 haute performance.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-bolt"></i></div>
                    <h3>Ingénierie Électrique</h3>
                    <p>Audit complet, mise aux normes des installations, distribution HT/BT et protection des équipements sensibles.</p>
                </div>
                <div class="service-card">
                    <div class="icon-box"><i class="fas fa-chart-line"></i></div>
                    <h3>Maintenance & Monitoring</h3>
                    <p>Suivi en temps réel de votre production verte via application. Maintenance préventive et corrective sous 24h.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio" class="section-padding portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Projets Livrés à Madagascar</h2>
                <p>Des résultats concrets pour l'industrie locale.</p>
            </div>
            <div class="portfolio-grid">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1565514020126-1b3240f93026?q=80&w=2670&auto=format&fit=crop" alt="Usine Agroalimentaire" class="project-img">
                    <div class="project-overlay">
                        <span class="project-stats">200kWc • Tana Sud</span>
                        <h4>Usine Agroalimentaire</h4>
                        <p>Économie annuelle : 80 Millions MGA. Autonomie de jour 85%.</p>
                    </div>
                </div>
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2670&auto=format&fit=crop" alt="Siège Social Bancaire" class="project-img">
                    <div class="project-overlay">
                        <span class="project-stats">Hybride Solaire + Batteries</span>
                        <h4>Siège Social Bancaire</h4>
                        <p>0 coupure en 12 mois. Sécurisation des serveurs informatiques.</p>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 50px;">
                <a href="#contact" class="btn btn-outline">Voir toutes nos références</a>
            </div>
        </div>
    </section>

    <!-- QUI SOMMES NOUS -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>L'Alliance de l'Ingénierie et de l'Écologie</h2>
                    <p>Fondée par une équipe d'ingénieurs certifiés, Ener Technologie ne se contente pas de poser des panneaux. Nous concevons des écosystèmes énergétiques durables.</p>
                    <p>Notre approche est purement technique : pas de promesses en l'air, uniquement des calculs de charge, des simulations de production et un matériel de classe mondiale (Victron, Fronius, Jinko).</p>
                    <ul class="list-check">
                        <li><i class="fas fa-check solution-icon"></i> Ingénieurs certifiés PV</li>
                        <li><i class="fas fa-check solution-icon"></i> Respect des normes NFC 15-100</li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a783?q=80&w=2670&auto=format&fit=crop" alt="Ingénieur Ener Technologie">
                    <div class="certification-badge">
                        <i class="fas fa-certificate badge-icon"></i>
                        <div>
                            <strong>Certifié Qualité</strong><br>
                            <small>Normes Internationales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding" style="background-color: var(--color-bg-light);">
        <div class="container">
            <div class="section-title">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-grid">
                <div class="faq-item">
                    <h4><i class="fas fa-question-circle"></i> Quel est le ROI moyen ?</h4>
                    <p>À Madagascar, avec le coût actuel de la JIRAMA et du carburant, le retour sur investissement se situe entre 3 et 5 ans pour les industriels.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-shield-alt"></i> Le matériel est-il garanti ?</h4>
                    <p>Oui. Nos panneaux sont garantis 25 ans en production. Les onduleurs 5 à 10 ans. Nous assurons la maintenance locale.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-cloud-sun"></i> Et s'il ne fait pas beau ?</h4>
                    <p>Nos systèmes sont dimensionnés sur la moyenne d'irradiation annuelle de Madagascar. Les batteries prennent le relais en cas de couverture nuageuse dense.</p>
                </div>
                <div class="faq-item">
                    <h4><i class="fas fa-file-contract"></i> Gérez-vous l'administratif ?</h4>
                    <p>Oui, nous accompagnons nos clients dans les démarches administratives nécessaires pour les installations de grande puissance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-cta">
                <h2>Prêt à passer à l'énergie verte fiable ?</h2>
                <a href="tel:+261340000000" class="btn">Contacter un ingénieur</a>
            </div>
            <div class="footer-grid">
                <div class="footer-info">
                    <h3>Ener Technologie</h3>
                    <p style="opacity: 0.8; max-width: 300px;">Expert en solutions photovoltaïques et efficacité énergétique pour l'industrie à Madagascar.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-contact">
                    <h3>Contact</h3>
                    <ul class="contact-list">
                        <li><i class="fas fa-map-marker-alt"></i> Zone Industrielle Galaxy, Andraharo, Antananarivo</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@ener-technologie.mg</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Ener Technologie Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // --- INSTRUCTION OBLIGATOIRE ---
        // Le lien ci-dessous doit être remplacé par l'URL de votre logo final.
        // Utilisez un PNG transparent pour un meilleur rendu.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // --- LOGIC ---
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Inject Logo
            const logoContainer = document.getElementById('logo-container');
            if(logoContainer) {
                // Note pour le client : J'ai gardé le code exact demandé, mais j'ai remplacé 
                // le paramètre text dans l'URL pour que la démo soit pertinente (ENER+TECH).
                // Remplacez LOGO_URL ci-dessus par votre propre fichier image.
                const cleanLogoUrl = LOGO_URL.replace("PHO+RESTO", "ENER+TECH").replace("991B1B", "205561"); 
                
                logoContainer.innerHTML = `
                    <a href="#">
                        <img src="${cleanLogoUrl}" alt="Logo Ener Technologie">
                    </a>
                `;
            }

            // 2. Mobile Menu Toggle
            const menuBtn = document.querySelector('.mobile-menu-btn');
            const navLinks = document.querySelector('.nav-links');

            if(menuBtn) {
                menuBtn.addEventListener('click', () => {
                    navLinks.classList.toggle('active');
                    const icon = menuBtn.querySelector('i');
                    if(navLinks.classList.contains('active')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
            }

            // 3. Smooth Scroll for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    navLinks.classList.remove('active'); // Close menu on click
                    
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // 4. Navbar Background on Scroll
            window.addEventListener('scroll', () => {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.style.boxShadow = "0 4px 20px rgba(0,0,0,0.1)";
                    header.style.height = "70px";
                } else {
                    header.style.boxShadow = "0 2px 20px rgba(0,0,0,0.05)";
                    header.style.height = "80px";
                }
            });
        });
    </script>
</body>
</html>