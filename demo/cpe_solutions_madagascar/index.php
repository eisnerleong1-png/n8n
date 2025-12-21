<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPE Solutions | Externalisation Comptable & Sociale</title>
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         */
        :root {
            --primary: #005696; /* Bleu Roi */
            --primary-dark: #003d6b;
            --secondary: #C4DCE9; /* Bleu Ciel grisé */
            --secondary-light: #e6f2f8;
            --white: #FFFFFF;
            --text-dark: #1e293b;
            --text-gray: #64748b;
            --bg-light: #f8fafc;
            
            --font-heading: 'Outfit', sans-serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
            --radius-md: 12px;
            --radius-lg: 20px;
            
            --container-width: 1280px;
            --header-height: 80px;
        }

        /* 
         * RESET & BASE 
         */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--primary);
            line-height: 1.2;
        }

        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* 
         * COMPONENTS 
         */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 600;
            border-radius: 50px; /* Coins arrondis moderne */
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: var(--font-heading);
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(0, 86, 150, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 86, 150, 0.4);
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

        .section-padding { padding: 100px 0; }
        .bg-light { background-color: var(--bg-light); }
        .bg-secondary { background-color: var(--secondary); }

        .text-center { text-align: center; }
        .text-primary { color: var(--primary); }

        /* 
         * HEADER 
         */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            height: var(--header-height);
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo img {
            height: 45px; /* Ajusté pour logo.jpg */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-links a:hover { color: var(--primary); }

        .header-cta { display: none; }
        @media (min-width: 768px) { .header-cta { display: inline-flex; padding: 10px 24px; font-size: 0.9rem; } }

        /* 
         * HERO SECTION 
         */
        .hero {
            position: relative;
            padding-top: calc(var(--header-height) + 60px);
            padding-bottom: 80px;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 50px;
            align-items: center;
        }

        .hero-content {
            z-index: 2;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.8rem);
            margin-bottom: 24px;
            color: var(--text-dark);
        }

        .hero h1 span {
            color: var(--primary);
            display: block;
        }

        .hero-subtitle {
            font-size: 1.125rem;
            color: var(--text-gray);
            margin-bottom: 40px;
            max-width: 600px;
        }

        .hero-visual {
            position: relative;
            height: 500px;
            display: flex;
            gap: 20px;
        }
        
        /* Split visual effect requested */
        .visual-card {
            flex: 1;
            border-radius: var(--radius-lg);
            background-size: cover;
            background-position: center;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
            transition: transform 0.5s ease;
        }
        
        .visual-card::after {
            content: '';
            position: absolute;
            top:0; left:0; right:0; bottom:0;
            background: linear-gradient(to top, rgba(0,86,150,0.4), transparent);
        }

        .visual-card:hover { transform: translateY(-10px); }

        .vc-france {
            background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80'); /* Expert comptable serein */
            transform: translateY(30px);
        }
        
        .vc-mada {
            background-image: url('https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80'); /* Collaborateur pro */
        }
        
        .hero-assurance {
            margin-top: 20px;
            font-size: 0.85rem;
            color: var(--text-gray);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .hero-assurance i { color: #10B981; }

        /* 
         * TRUST BAR 
         */
        .trust-bar {
            background-color: #F5F5F5;
            padding: 40px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .trust-label {
            text-align: center;
            font-weight: 600;
            color: var(--text-gray);
            margin-bottom: 20px;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            opacity: 0.6;
            align-items: center;
        }
        
        .software-name {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: #475569;
            filter: grayscale(100%);
            transition: all 0.3s;
        }
        
        .software-name:hover { filter: grayscale(0%); opacity: 1; color: var(--primary); }

        /* 
         * PROBLEM / SOLUTION 
         */
        .comparison-section {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0;
            overflow: hidden;
        }

        .col-split {
            padding: 80px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .col-problem {
            background-color: #fff;
            border-right: 1px solid #f1f5f9;
        }

        .col-solution {
            background-color: var(--bg-light);
            position: relative;
        }
        
        .col-solution::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 4px; height: 100%;
            background: var(--primary);
        }

        .split-title {
            font-size: 1.8rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .list-check li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
            color: var(--text-dark);
        }
        
        .list-problem li::before {
            content: '\f057';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ef4444;
        }

        .list-solution li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #10B981;
        }

        /* 
         * SERVICES 
         */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .service-card {
            background: var(--white);
            border: 1px solid #e2e8f0;
            border-top: 4px solid var(--primary);
            padding: 40px 30px;
            border-radius: var(--radius-md);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 25px;
            background: var(--secondary-light);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .service-card h3 { margin-bottom: 15px; font-size: 1.3rem; }
        .service-card p { color: var(--text-gray); font-size: 0.95rem; }

        /* 
         * SECURITY 
         */
        .security-section {
            background-color: var(--secondary); /* Bleu Glace */
            position: relative;
            overflow: hidden;
        }
        
        /* Pattern overlay */
        .security-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(#005696 1px, transparent 1px);
            background-size: 30px 30px;
            opacity: 0.05;
        }

        .security-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 50px;
            align-items: center;
        }

        .security-content h2 { margin-bottom: 30px; }
        
        .security-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .sec-item {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(5px);
            padding: 20px;
            border-radius: var(--radius-md);
            border-left: 3px solid var(--primary);
        }

        .sec-item h4 {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        /* 
         * TEAM 
         */
        .team-wrapper {
            display: grid;
            grid-template-columns: 1fr;
            gap: 50px;
            align-items: center;
        }

        .team-img-container {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .team-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }
        
        .team-img-container:hover img { transform: scale(1.05); }

        .stat-badge {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: var(--white);
            padding: 20px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
        }

        /* 
         * PRICING / ROI 
         */
        .roi-card {
            background: var(--primary);
            color: var(--white);
            border-radius: var(--radius-lg);
            padding: 60px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .roi-card h2 { color: var(--white); }
        .roi-card p { color: rgba(255,255,255,0.8); max-width: 700px; margin: 20px auto; font-size: 1.1rem; }
        
        .roi-btn {
            background: var(--white);
            color: var(--primary);
            margin-top: 30px;
        }
        
        .roi-btn:hover { background: var(--secondary-light); color: var(--primary-dark); }

        /* 
         * FOOTER 
         */
        footer {
            background-color: var(--primary);
            color: var(--white);
            padding: 80px 0 30px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h3 { color: var(--white); margin-bottom: 25px; font-size: 1.2rem; }
        
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: rgba(255,255,255,0.7); font-size: 0.95rem; }
        .footer-links a:hover { color: var(--white); padding-left: 5px; }

        .contact-info li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 15px;
            color: rgba(255,255,255,0.8);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: rgba(255,255,255,0.5);
            font-size: 0.85rem;
        }

        /* 
         * RESPONSIVE 
         */
        @media (min-width: 992px) {
            .hero-grid { grid-template-columns: 1fr 1fr; }
            .comparison-section { grid-template-columns: 1fr 1fr; }
            .security-grid { grid-template-columns: 1fr; } /* Keep full width for impact */
            .team-wrapper { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            :root { --header-height: 70px; }
            .hero h1 { font-size: 2.5rem; }
            .section-padding { padding: 60px 0; }
            .nav-links { display: none; } /* Mobile Menu would be here */
            .visual-card.vc-france { transform: translateY(0); }
            .hero-visual { flex-direction: column; height: auto; }
            .visual-card { height: 250px; width: 100%; }
        }
        
        /* Animations */
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
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <img id="site-logo" alt="CPE Solutions Logo">
                </a>
                <ul class="nav-links">
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#securite">Sécurité</a></li>
                    <li><a href="#equipe">Expertise</a></li>
                </ul>
                <a href="#contact" class="btn btn-primary header-cta">Demander un Devis</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content reveal active">
                    <h1>Libérez votre Cabinet<br>de la Saisie<br><span>L'Excellence Comptable.</span></h1>
                    <p class="hero-subtitle">
                        Déléguez votre production comptable, sociale et administrative à CPE Solutions. Une équipe dédiée à Antananarivo, 100% conforme RGPD et PCG. 
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 15px; align-items: flex-start;">
                        <a href="#contact" class="btn btn-primary">DEMANDER UN DEVIS EXPRESS</a>
                        <div class="hero-assurance">
                            <i class="fa-regular fa-clock"></i> Réponse sous 2h
                            <span style="margin: 0 5px;">•</span>
                            <i class="fa-regular fa-credit-card"></i> Aucune CB requise
                        </div>
                    </div>
                </div>
                <div class="hero-visual reveal">
                    <!-- Concept: Dual Image for Partnership -->
                    <div class="visual-card vc-france"></div>
                    <div class="visual-card vc-mada"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <p class="trust-label">Nos équipes maîtrisent vos outils</p>
            <div class="logos-grid">
                <span class="software-name">Sage</span>
                <span class="software-name">Cegid</span>
                <span class="software-name">Quadratus</span>
                <span class="software-name">QuickBooks</span>
                <span class="software-name">Xero</span>
                <span class="software-name">ACD</span>
            </div>
        </div>
    </div>

    <!-- Problem / Solution -->
    <section id="solutions" class="comparison-section">
        <div class="col-split col-problem reveal">
            <div class="container" style="width: 100%; max-width: 600px; margin: 0 auto;">
                <h2 class="split-title" style="color: #ef4444;"><i class="fa-solid fa-triangle-exclamation"></i> Le Calvaire Actuel</h2>
                <ul class="list-check list-problem">
                    <li>Difficultés de recrutement en France (Pénurie)</li>
                    <li>Coûts salariaux explosifs</li>
                    <li>Surcharge administrative constante</li>
                    <li>Manque de temps pour le conseil client</li>
                </ul>
            </div>
        </div>
        <div class="col-split col-solution reveal">
            <div class="container" style="width: 100%; max-width: 600px; margin: 0 auto;">
                <h2 class="split-title text-primary"><i class="fa-solid fa-check-circle"></i> La Solution CPE</h2>
                <ul class="list-check list-solution">
                    <li>Une extension flexible de votre cabinet</li>
                    <li>Nous absorbons la "Data Entry" chronophage</li>
                    <li>Respect strict des délais et conformité PCG</li>
                    <li>Vous vous concentrez sur la valeur ajoutée</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center reveal">
                <h2>Nos Services BPO</h2>
                <p style="color: var(--text-gray); margin-top: 10px;">Une offre complète pour cabinets d'expertise et entreprises</p>
            </div>
            <div class="services-grid">
                <article class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h3>Saisie Comptable & Révision</h3>
                    <p>Traitement factures (Achats/Ventes), Banques, Lettrage, Préparation Bilan. Respect strict des délais J+1 ou J+2. Zéro retard.</p>
                </article>
                <article class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-users-gear"></i>
                    </div>
                    <h3>Gestion Sociale (Paie)</h3>
                    <p>Établissement des bulletins de paie, déclarations sociales, DSN. Une veille juridique incluse pour garantir la conformité.</p>
                </article>
                <article class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>BPO & Secrétariat</h3>
                    <p>Relance clients, gestion électronique de documents (GED), assistanat de direction. Libérez votre secrétariat interne.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Security -->
    <section id="securite" class="section-padding security-section">
        <div class="container">
            <div class="security-grid">
                <div class="security-content reveal">
                    <h2>Vos données sont plus en sécurité chez nous que dans vos archives.</h2>
                    <p style="font-size: 1.1rem; color: var(--text-dark);">
                        La sécurité n'est pas une option, c'est notre fondation. Nous appliquons les standards bancaires pour la protection de vos informations.
                    </p>
                    <div class="security-items">
                        <div class="sec-item">
                            <h4><i class="fa-solid fa-shield-halved text-primary"></i> Conformité RGPD</h4>
                            <p style="font-size: 0.9rem;">Protocoles stricts de traitement et stockage des données UE.</p>
                        </div>
                        <div class="sec-item">
                            <h4><i class="fa-solid fa-server text-primary"></i> Infrastructure</h4>
                            <p style="font-size: 0.9rem;">Serveurs sécurisés, VPN cryptés, Firewall dernière génération.</p>
                        </div>
                        <div class="sec-item">
                            <h4><i class="fa-solid fa-file-contract text-primary"></i> Confidentialité</h4>
                            <p style="font-size: 0.9rem;">NDA strict pour tous les employés. Locaux sous surveillance 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="equipe" class="section-padding">
        <div class="container">
            <div class="team-wrapper">
                <div class="team-text reveal">
                    <h2>Une équipe Malgache formée aux standards Français</h2>
                    <p style="margin-top: 20px; margin-bottom: 20px; color: var(--text-gray);">
                        À Antananarivo, nous ne recrutons pas simplement des opérateurs de saisie, mais de véritables collaborateurs comptables.
                    </p>
                    <ul class="list-check list-solution" style="margin-bottom: 30px;">
                        <li>Recrutement Bac+4/5 (Master Finance/Compta)</li>
                        <li>Formation continue au Plan Comptable Général (PCG)</li>
                        <li>Maîtrise parfaite du français (écrit et oral)</li>
                        <li>Culture du résultat et de la précision</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary">Rencontrer l'équipe</a>
                </div>
                <div class="team-img-container reveal">
                    <!-- Photo d'équipe moderne dans un bureau open space -->
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" alt="Equipe CPE Solutions Antananarivo">
                    <div class="stat-badge">
                        <span class="stat-number">50%</span>
                        <span>d'économie<br>réalisée</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROI / Contact -->
    <section id="contact" class="container" style="margin-bottom: 80px;">
        <div class="roi-card reveal">
            <h2>Une structure de coûts transparente</h2>
            <p>Approche "Au dossier" ou "Au temps passé". Économisez jusqu'à 60% par rapport à un recrutement interne en France, sans sacrifier la qualité.</p>
            <form id="lead-form" style="max-width: 500px; margin: 30px auto; display: flex; flex-direction: column; gap: 15px;">
                <input type="email" placeholder="Votre email professionnel" required style="padding: 16px; border-radius: 8px; border: none; width: 100%; font-family: var(--font-body);">
                <button type="submit" class="btn roi-btn" style="width: 100%; border:none;">SIMULER MES ÉCONOMIES</button>
            </form>
            <p style="font-size: 0.8rem; opacity: 0.7; margin-top: 10px;">Nous respectons votre vie privée. Aucun spam.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 style="display:flex; align-items:center; gap:10px;">
                        <i class="fa-solid fa-layer-group"></i> CPE Solutions
                    </h3>
                    <p style="opacity: 0.7; font-size: 0.9rem;">Votre partenaire BPO de confiance pour l'externalisation comptable et sociale vers Madagascar.</p>
                </div>
                <div class="footer-col">
                    <h3>Contact Rapide</h3>
                    <ul class="contact-info">
                        <li><i class="fa-solid fa-envelope"></i> contact@cpesolutions.com</li>
                        <li><i class="fa-solid fa-phone"></i> +33 1 00 00 00 00 (Ligne Directe)</li>
                        <li><i class="fa-solid fa-location-dot"></i> Zone Galaxy, Andraharo, Antananarivo</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Liens Utiles</h3>
                    <ul class="footer-links">
                        <li><a href="#">Mentions Légales</a></li>
                        <li><a href="#">Politique de Confidentialité</a></li>
                        <li><a href="#">CGV</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 CPE Solutions. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // INJECTION LOGO OBLIGATOIRE
        const LOGO_URL = "logo.jpg";
        document.getElementById('site-logo').src = LOGO_URL;

        // SCROLL REVEAL ANIMATION
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                reveals.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            // Trigger once on load
            revealOnScroll();
        });

        // FORM HANDLING SIMULATION
        document.getElementById('lead-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalText = btn.innerText;
            
            btn.innerText = "Traitement en cours...";
            btn.style.opacity = "0.8";
            
            setTimeout(() => {
                alert("Merci ! Un de nos experts va vous contacter pour votre simulation.");
                btn.innerText = "Envoyé avec succès !";
                btn.style.backgroundColor = "#10B981";
                btn.style.color = "#fff";
                this.reset();
            }, 1500);
        });

        // SMOOTH SCROLL FOR ANCHORS
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