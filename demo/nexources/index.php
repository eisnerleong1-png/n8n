<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexources | Conseil Stratégique & Outsourcing B2B à Madagascar</title>
    <meta name="description" content="Nexources allie expertise locale et outils technologiques pour structurer et accélérer votre croissance à Madagascar.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* -------------------------------------------------------------------------- */
        /*                                RESET & BASE                                */
        /* -------------------------------------------------------------------------- */
        :root {
            --primary: #00538C;
            --primary-dark: #003d66;
            --secondary: #1E293B;
            --accent: #38BDF8;
            --bg-light: #F5F7FA;
            --white: #FFFFFF;
            --text-main: #334155;
            --text-heading: #0F172A;
            --spacing-container: 1280px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
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
            color: var(--text-main);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-heading);
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

        /* -------------------------------------------------------------------------- */
        /*                                 UTILITIES                                  */
        /* -------------------------------------------------------------------------- */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            letter-spacing: -0.01em;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 14px 0 rgba(0, 83, 140, 0.39);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 83, 140, 0.23);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        /* Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* -------------------------------------------------------------------------- */
        /*                                   HEADER                                   */
        /* -------------------------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        header.scrolled {
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 45px;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        nav a {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--secondary);
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* -------------------------------------------------------------------------- */
        /*                                HERO SECTION                                */
        /* -------------------------------------------------------------------------- */
        .hero {
            position: relative;
            padding-top: 160px; /* Space for fixed header */
            padding-bottom: 100px;
            overflow: hidden;
            background: radial-gradient(circle at 10% 20%, rgba(0, 83, 140, 0.05) 0%, rgba(255, 255, 255, 0) 90%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content {
            max-width: 600px;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
            color: var(--text-heading);
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-main);
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* Hero Visual Composition */
        .hero-visual {
            position: relative;
            height: 500px;
            width: 100%;
        }

        .img-base {
            position: absolute;
            width: 85%;
            height: 85%;
            bottom: 0;
            left: 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            z-index: 1;
        }

        .img-base img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .img-float {
            position: absolute;
            width: 55%;
            top: 0;
            right: 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0, 83, 140, 0.2);
            border: 4px solid var(--white);
            z-index: 2;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        /* -------------------------------------------------------------------------- */
        /*                                TRUST BAR                                   */
        /* -------------------------------------------------------------------------- */
        .trust-bar {
            background-color: var(--bg-light);
            padding: 40px 0;
            border-top: 1px solid rgba(0,0,0,0.03);
            border-bottom: 1px solid rgba(0,0,0,0.03);
        }

        .trust-text {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748B;
            margin-bottom: 24px;
            font-weight: 600;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logo-item {
            font-weight: 700;
            font-size: 1.5rem;
            color: #94A3B8;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo-item svg {
            width: 24px;
            height: 24px;
            fill: #94A3B8;
        }

        /* -------------------------------------------------------------------------- */
        /*                             PROBLEM / SOLUTION                             */
        /* -------------------------------------------------------------------------- */
        .problem-solution {
            background: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-card {
            padding: 30px;
            border-radius: 16px;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .feature-card:hover {
            background: var(--bg-light);
            border-color: rgba(0,0,0,0.05);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: rgba(0, 83, 140, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            color: var(--primary);
        }

        .icon-box svg {
            width: 28px;
            height: 28px;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
        }

        .pain-point {
            font-size: 0.9rem;
            color: #EF4444; /* Red for pain */
            margin-bottom: 8px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .solution-text {
            color: var(--text-main);
            font-size: 1rem;
        }

        /* -------------------------------------------------------------------------- */
        /*                                  SERVICES                                  */
        /* -------------------------------------------------------------------------- */
        .services {
            background: var(--bg-light);
            position: relative;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: 16px;
            padding: 40px 32px;
            box-shadow: 0 10px 30px -10px rgba(0,0,0,0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(0, 83, 140, 0.15);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .service-icon {
            margin-bottom: 24px;
            width: 48px;
            height: 48px;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .service-card p {
            margin-bottom: 24px;
            color: #64748B;
        }

        .service-link {
            margin-top: auto;
            color: var(--primary);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .pricing-indicator {
            margin-top: 60px;
            text-align: center;
            background: rgba(0, 83, 140, 0.05);
            padding: 16px;
            border-radius: 8px;
            display: inline-block;
            font-weight: 500;
            color: var(--primary);
        }

        /* -------------------------------------------------------------------------- */
        /*                                   ABOUT                                    */
        /* -------------------------------------------------------------------------- */
        .about {
            background: var(--white);
        }

        .about-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 24px;
        }

        .about-content p {
            margin-bottom: 24px;
            font-size: 1.1rem;
            color: var(--text-main);
        }

        .stats {
            display: flex;
            gap: 40px;
            margin-top: 32px;
            padding-top: 32px;
            border-top: 1px solid #E2E8F0;
        }

        .stat-item h4 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 4px;
        }

        .stat-item span {
            font-size: 0.9rem;
            color: #64748B;
        }

        /* -------------------------------------------------------------------------- */
        /*                              FOOTER / CONTACT                              */
        /* -------------------------------------------------------------------------- */
        .cta-section {
            background: var(--primary);
            color: var(--white);
            padding: 80px 0;
            text-align: center;
        }

        .contact-wrapper {
            background: var(--secondary);
            color: var(--white);
            padding: 80px 0 40px 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }

        .contact-info h2 {
            color: var(--white);
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .contact-info p {
            color: #94A3B8;
            margin-bottom: 40px;
        }

        .contact-details div {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 1.1rem;
        }

        .form-box {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            color: var(--text-main);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            font-family: inherit;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(0, 83, 140, 0.1);
        }

        .footer-bottom {
            margin-top: 80px;
            padding-top: 40px;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            font-size: 0.9rem;
            color: #94A3B8;
        }

        /* -------------------------------------------------------------------------- */
        /*                                 RESPONSIVE                                 */
        /* -------------------------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero-grid, .about-wrapper, .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .hero {
                text-align: center;
                padding-top: 120px;
            }
            
            .hero-content {
                margin: 0 auto;
            }

            .hero-visual {
                height: 400px;
                max-width: 600px;
                margin: 0 auto;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .section-header h2 { font-size: 2rem; }
            
            nav ul { display: none; } /* Simplified for this deliverable */
            .mobile-toggle { display: block; }
            
            .container { padding: 0 20px; }
        }
    </style>
</head>
<body>

    <!-- LOGO JS INJECTION -->
    <script>
        const LOGO_URL = "logo.jpg";
    </script>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-wrapper" id="logo-container">
                <!-- Logo injected via JS below -->
            </a>
            <nav>
                <ul>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem;">Contact</a></li>
                </ul>
                <div class="mobile-toggle">☰</div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content reveal">
                <h1>Transformez votre Potentiel en <span>Performance</span></h1>
                <p>Nexources allie expertise locale et outils technologiques innovants pour structurer et accélérer votre croissance depuis Madagascar.</p>
                <a href="#contact" class="btn btn-primary">DEMANDER UN AUDIT GRATUIT</a>
            </div>
            
            <div class="hero-visual reveal">
                <!-- Image réaliste en fond : Equipe pro -->
                <div class="img-base">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Équipe professionnelle à Madagascar">
                </div>
                <!-- Image abstraite flottante : Dashboard UI -->
                <div class="img-float">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1770&auto=format&fit=crop" alt="Interface Dashboard Analytics">
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <p class="trust-text">Des solutions conçues pour les leaders de demain</p>
            <div class="logos-grid">
                <!-- Simulated Logos with Text/Icons for reliability -->
                <div class="logo-item"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg> CLOUD ERP</div>
                <div class="logo-item"><svg viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg> DATA CRM</div>
                <div class="logo-item"><svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg> GLOBAL OPS</div>
            </div>
        </div>
    </section>

    <!-- PROBLEM / SOLUTION -->
    <section id="solutions" class="section-padding problem-solution">
        <div class="container">
            <div class="section-header reveal">
                <h2>L'innovation ne devrait pas être complexe</h2>
                <p>Nous transformons vos points de friction en leviers de croissance.</p>
            </div>
            
            <div class="features-grid">
                <!-- Card 1 -->
                <div class="feature-card reveal">
                    <div class="icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="pain-point">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        Processus lents ?
                    </div>
                    <h3>Automatisation</h3>
                    <p class="solution-text">Déploiement d'outils digitaux pour réduire le temps de traitement de 40%.</p>
                </div>

                <!-- Card 2 -->
                <div class="feature-card reveal">
                    <div class="icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <div class="pain-point">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        Manque de visibilité ?
                    </div>
                    <h3>Stratégie Data-Driven</h3>
                    <p class="solution-text">Tableaux de bord et KPI précis pour piloter votre activité en temps réel.</p>
                </div>

                <!-- Card 3 -->
                <div class="feature-card reveal">
                    <div class="icon-box">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <div class="pain-point">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        Ressources limitées ?
                    </div>
                    <h3>Outsourcing Qualifié</h3>
                    <p class="solution-text">Délégation de tâches à forte valeur ajoutée à nos équipes locales expertes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="section-padding services">
        <div class="container">
            <div class="section-header reveal">
                <h2>Nos Piliers d'Expertise</h2>
                <p>Une approche holistique pour les PME et Grands Comptes.</p>
            </div>

            <div class="service-grid">
                <!-- Service 1 -->
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#00538C" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                    </div>
                    <h3>Conseil Stratégique</h3>
                    <p>Audit de performance, analyse de marché et définition de roadmap de croissance claire et actionnable.</p>
                    <a href="#contact" class="service-link">En savoir plus →</a>
                </div>

                <!-- Service 2 -->
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#00538C" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                    </div>
                    <h3>Outils Innovants</h3>
                    <p>Implémentation de solutions digitales (ERP, CRM) sur-mesure pour moderniser votre infrastructure.</p>
                    <a href="#contact" class="service-link">En savoir plus →</a>
                </div>

                <!-- Service 3 -->
                <div class="service-card reveal">
                    <div class="service-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#00538C" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h3>Outsourcing B2B</h3>
                    <p>Externalisation intelligente : Finance, Admin, Support Client. Réduisez vos coûts sans sacrifier la qualité.</p>
                    <a href="#contact" class="service-link">En savoir plus →</a>
                </div>
            </div>

            <div class="text-center reveal">
                <span class="pricing-indicator">Solutions sur mesure (Devis en MGA ou Devises)</span>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section-padding about">
        <div class="container about-wrapper">
            <div class="about-image reveal">
                <img src="https://images.unsplash.com/photo-1556157382-97eda2d622ca?q=80&w=1600&auto=format&fit=crop" alt="Fondateur Nexources">
            </div>
            <div class="about-content reveal">
                <h2>Votre partenaire local, standards internationaux</h2>
                <p>Basée à Antananarivo, l'équipe Nexources maîtrise parfaitement le tissu économique local tout en appliquant des méthodologies globales.</p>
                <p>Nous ne sommes pas juste des consultants, nous sommes vos partenaires de terrain pour naviguer dans la complexité du marché.</p>
                
                <div class="stats">
                    <div class="stat-item">
                        <h4>100%</h4>
                        <span>Engagement</span>
                    </div>
                    <div class="stat-item">
                        <h4>24h</h4>
                        <span>Réactivité</span>
                    </div>
                    <div class="stat-item">
                        <h4>Exp.</h4>
                        <span>Multi-sectorielle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT / FOOTER -->
    <section id="contact" class="contact-wrapper">
        <div class="container">
            <div class="contact-grid">
                <!-- Info Colonne -->
                <div class="contact-info reveal">
                    <h2>Passez à la vitesse supérieure</h2>
                    <p>Discutons de vos défis actuels. Notre équipe est prête à auditer votre situation et proposer des solutions concrètes.</p>
                    
                    <div class="contact-details">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            +261 34 00 000 00
                        </div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            contact@nexources.mg
                        </div>
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            Antananarivo, Madagascar
                        </div>
                    </div>
                </div>

                <!-- Formulaire -->
                <div class="form-box reveal">
                    <form>
                        <div class="form-group">
                            <label>Nom complet</label>
                            <input type="text" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <label>Email professionnel</label>
                            <input type="email" placeholder="email@entreprise.com">
                        </div>
                        <div class="form-group">
                            <label>Entreprise</label>
                            <input type="text" placeholder="Nom de votre société">
                        </div>
                        <div class="form-group">
                            <label>Quel est votre défi actuel ?</label>
                            <select>
                                <option>Optimisation des processus</option>
                                <option>Besoin d'externalisation</option>
                                <option>Conseil stratégique</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">ÊTRE CONTACTÉ SOUS 24H</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Nexources. Tous droits réservés.</p>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPT -->
    <script>
        // 1. Logo Injection Logic
        document.addEventListener('DOMContentLoaded', () => {
            const logoContainer = document.getElementById('logo-container');
            if(logoContainer) {
                const img = document.createElement('img');
                img.src = LOGO_URL;
                img.alt = "Nexources Logo";
                logoContainer.appendChild(img);
            }
        });

        // 2. Sticky Header Logic
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 3. Scroll Reveal Animation (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, {
            root: null,
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    </script>
</body>
</html>