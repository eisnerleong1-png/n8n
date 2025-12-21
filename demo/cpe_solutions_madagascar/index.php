<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPE Solutions | Externalisation Comptable & Sociale</title>
    <meta name="description" content="Libérez votre cabinet de la saisie comptable. Partenaire BPO de confiance à Madagascar. Excellence française, coûts réduits.">
    
    <!-- Google Fonts: Plus Jakarta Sans (Moderne, Corporate, Premium) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           VARIABLES & RESET
        ----------------------------------------------------------- */
        :root {
            --primary: #005696;       /* Bleu Roi - Confiance */
            --primary-dark: #003d6b;  /* Hover State */
            --secondary: #C4DCE9;     /* Bleu Glace - Douceur */
            --accent: #EBF5FF;        /* Très clair pour fonds */
            --text-main: #1F2937;     /* Gris foncé lisible */
            --text-light: #6B7280;    /* Gris clair */
            --white: #FFFFFF;
            --radius-sm: 8px;
            --radius-md: 16px;
            --shadow-card: 0 10px 40px -10px rgba(0, 86, 150, 0.1);
            --shadow-hover: 0 20px 50px -10px rgba(0, 86, 150, 0.2);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: #F9FAFB;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* -----------------------------------------------------------
           TYPOGRAPHY & UTILITIES
        ----------------------------------------------------------- */
        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
            color: var(--primary);
        }

        h1 { font-size: 2.5rem; letter-spacing: -0.02em; }
        h2 { font-size: 2rem; margin-bottom: 1rem; }
        h3 { font-size: 1.25rem; margin-bottom: 0.5rem; }
        p { margin-bottom: 1rem; color: var(--text-light); }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-padding { padding: 5rem 0; }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            border-radius: var(--radius-sm);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 14px 0 rgba(0, 86, 150, 0.39);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 86, 150, 0.23);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-secondary:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        .text-center { text-align: center; }
        .grid-2 { display: grid; grid-template-columns: 1fr; gap: 2rem; }
        .grid-3 { display: grid; grid-template-columns: 1fr; gap: 2rem; }

        @media (min-width: 768px) {
            h1 { font-size: 3.5rem; }
            .grid-2 { grid-template-columns: 1fr 1fr; }
            .grid-3 { grid-template-columns: repeat(3, 1fr); }
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 1rem 0;
            transition: var(--transition);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            display: block;
        }

        /* NOTE: Logo Styling to handle the placeholder gracefully */
        .logo-placeholder-note {
            font-size: 0.6rem;
            color: red;
            position: absolute;
            top: -15px;
            left: 0;
            white-space: nowrap;
            display: none; /* Hidden on production, visible if inspected */
        }

        .nav-links {
            display: none;
        }

        @media (min-width: 768px) {
            .nav-links {
                display: flex;
                gap: 2rem;
                align-items: center;
            }
            .nav-links a {
                text-decoration: none;
                color: var(--text-main);
                font-weight: 500;
                transition: color 0.2s;
            }
            .nav-links a:hover { color: var(--primary); }
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.8) 50%, rgba(255,255,255,0.2) 100%),
                        url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80');
            background-size: cover;
            background-position: center;
            padding-top: 80px;
        }

        .hero-content {
            z-index: 2;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-visual {
            position: relative;
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            display: none; /* Mobile hidden */
        }
        
        @media (min-width: 992px) {
            .hero-visual { display: block; }
            .hero-grid { grid-template-columns: 1.2fr 1fr; }
        }

        .hero-visual img {
            width: 100%;
            height: auto;
            display: block;
            transform: scale(1.02);
            transition: transform 10s ease;
        }
        
        .hero-visual:hover img {
            transform: scale(1.1);
        }

        .hero-badge {
            background: rgba(0, 86, 150, 0.1);
            color: var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-trust {
            margin-top: 1rem;
            font-size: 0.9rem;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .hero-trust i { color: #10B981; }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-bar {
            background: #F3F4F6;
            padding: 2rem 0;
            border-bottom: 1px solid #E5E7EB;
        }

        .trust-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            gap: 2rem;
            opacity: 0.6;
        }

        .trust-item {
            font-weight: 700;
            font-size: 1.2rem;
            color: #6B7280;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            filter: grayscale(100%);
            transition: var(--transition);
        }

        .trust-item:hover {
            filter: grayscale(0%);
            color: var(--primary);
        }

        /* -----------------------------------------------------------
           PROBLEM / SOLUTION
        ----------------------------------------------------------- */
        .problem-solution {
            background: var(--white);
        }

        .comparison-card {
            padding: 2.5rem;
            border-radius: var(--radius-md);
        }

        .pain-point {
            background: #FEF2F2;
            border-left: 4px solid #EF4444;
        }

        .pain-point h3 { color: #991B1B; }
        .pain-point li { margin-bottom: 0.5rem; position: relative; padding-left: 1.5rem; list-style: none; }
        .pain-point li::before { content: "✕"; color: #EF4444; position: absolute; left: 0; font-weight: bold; }

        .solution-point {
            background: #F0F9FF;
            border-left: 4px solid var(--primary);
        }

        .solution-point h3 { color: var(--primary); }
        .solution-point li { margin-bottom: 0.5rem; position: relative; padding-left: 1.5rem; list-style: none; }
        .solution-point li::before { content: "✓"; color: var(--primary); position: absolute; left: 0; font-weight: bold; }

        /* -----------------------------------------------------------
           SERVICES
        ----------------------------------------------------------- */
        .services {
            background: var(--white);
        }

        .service-card {
            background: var(--white);
            border: 1px solid #E5E7EB;
            padding: 2.5rem 2rem;
            border-radius: var(--radius-md);
            transition: var(--transition);
            position: relative;
            top: 0;
        }

        .service-card:hover {
            top: -10px;
            box-shadow: var(--shadow-hover);
            border-color: var(--secondary);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--secondary);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* -----------------------------------------------------------
           SECURITY
        ----------------------------------------------------------- */
        .security-section {
            background-color: var(--secondary);
            color: var(--text-main);
            position: relative;
            overflow: hidden;
        }
        
        /* Pattern Overlay */
        .security-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(#005696 1px, transparent 1px);
            background-size: 20px 20px;
            opacity: 0.05;
        }

        .security-content {
            position: relative;
            z-index: 2;
        }

        .security-list {
            list-style: none;
            margin-top: 2rem;
        }

        .security-list li {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(5px);
            margin-bottom: 1rem;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            gap: 1rem;
            font-weight: 500;
        }

        .security-list i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        /* -----------------------------------------------------------
           TEAM
        ----------------------------------------------------------- */
        .team-section {
            background: var(--white);
        }

        .team-img-container {
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-card);
        }

        .team-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* -----------------------------------------------------------
           CTA / PRICING
        ----------------------------------------------------------- */
        .pricing-section {
            background: linear-gradient(180deg, var(--white) 0%, #F3F4F6 100%);
        }

        .pricing-box {
            background: var(--white);
            padding: 3rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid #E5E7EB;
            text-align: center;
        }

        .price-highlight {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
            margin: 1rem 0;
        }

        .price-sub {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background: var(--primary);
            color: var(--white);
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        @media (min-width: 768px) {
            .footer-grid { grid-template-columns: 1.5fr 1fr 1fr; }
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 1.5rem;
        }

        .footer-col p, .footer-col a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.95rem;
            margin-bottom: 0.8rem;
            display: block;
            transition: color 0.2s;
        }

        .footer-col a:hover { color: var(--white); }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
        }

        /* -----------------------------------------------------------
           ANIMATIONS (Scroll Reveal)
        ----------------------------------------------------------- */
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

    <!-- NAV -->
    <header id="navbar">
        <div class="container">
            <nav>
                <div class="logo-container" id="logo-wrapper">
                    <!-- JS WILL INJECT LOGO HERE -->
                </div>
                <div class="nav-links">
                    <a href="#services">Expertises</a>
                    <a href="#security">Sécurité</a>
                    <a href="#team">Équipe</a>
                    <a href="#contact" class="btn btn-primary">Demander un Devis Express</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content reveal">
                    <span class="hero-badge">Leader BPO France-Madagascar</span>
                    <h1>Libérez votre Cabinet de la Saisie Comptable</h1>
                    <p style="font-size: 1.2rem; color: #4B5563; margin-top: 1.5rem;">
                        L'Excellence Comptable Française, la compétitivité de Madagascar. Déléguez votre production à CPE Solutions.
                    </p>
                    <p style="margin-bottom: 2rem;">
                        Équipe dédiée, conforme RGPD & PCG. <strong>Réduisez vos coûts de 50%.</strong>
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#contact" class="btn btn-primary">DEMANDER UN DEVIS EXPRESS</a>
                        <a href="#pricing" class="btn btn-secondary">Simuler mes économies</a>
                    </div>
                    <div class="hero-trust">
                        <i class="fa-solid fa-clock"></i> Réponse sous 2h - Aucune carte requise
                    </div>
                </div>
                <div class="hero-visual reveal">
                    <!-- Image split conceptualisé par une photo bureau moderne avec double écran -->
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Bureau Comptable Moderne">
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container text-center">
            <p style="margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; font-weight: 700;">Nos équipes maîtrisent vos outils</p>
            <div class="trust-grid">
                <!-- Simulation Logos textuels pour éviter les droits d'auteur images -->
                <div class="trust-item"><i class="fa-solid fa-file-invoice-dollar"></i> SAGE</div>
                <div class="trust-item"><i class="fa-solid fa-chart-pie"></i> CEGID</div>
                <div class="trust-item"><i class="fa-solid fa-calculator"></i> QUADRATUS</div>
                <div class="trust-item"><i class="fa-solid fa-book"></i> QUICKBOOKS</div>
                <div class="trust-item"><i class="fa-solid fa-file-signature"></i> ACD</div>
            </div>
        </div>
    </section>

    <!-- PROBLEM / SOLUTION -->
    <section class="section-padding problem-solution" id="why">
        <div class="container">
            <div class="text-center reveal" style="margin-bottom: 3rem;">
                <h2>La période fiscale ne doit plus être un calvaire</h2>
                <p>Transformez vos contraintes structurelles en avantage concurrentiel.</p>
            </div>
            <div class="grid-2">
                <div class="comparison-card pain-point reveal">
                    <h3><i class="fa-solid fa-triangle-exclamation"></i> Le Frein Actuel</h3>
                    <ul style="margin-top: 1.5rem;">
                        <li>Difficultés de recrutement pénuriques en France</li>
                        <li>Coûts salariaux explosifs (Charges, Locaux)</li>
                        <li>Surcharge administrative et stress des équipes</li>
                        <li>Manque de temps pour le conseil client à valeur ajoutée</li>
                    </ul>
                </div>
                <div class="comparison-card solution-point reveal">
                    <h3><i class="fa-solid fa-star"></i> La Solution CPE</h3>
                    <ul style="margin-top: 1.5rem;">
                        <li>Une extension flexible et immédiate de votre cabinet</li>
                        <li>Absorption totale de la "Data Entry" chronophage</li>
                        <li>Équipe francophone formée aux standards français</li>
                        <li>Vous vous concentrez enfin sur la relation client</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section-padding services" id="services">
        <div class="container">
            <div class="text-center reveal" style="margin-bottom: 4rem;">
                <h2>Notre offre de services dédiée</h2>
            </div>
            <div class="grid-3">
                <div class="service-card reveal">
                    <div class="icon-box"><i class="fa-solid fa-calculator"></i></div>
                    <h3>Saisie & Révision</h3>
                    <p>Traitement factures (Achats/Ventes), Banques, Lettrage et Préparation Bilan. Respect strict des délais J+1.</p>
                </div>
                <div class="service-card reveal">
                    <div class="icon-box"><i class="fa-solid fa-users"></i></div>
                    <h3>Gestion Sociale</h3>
                    <p>Établissement des bulletins de paie, déclarations sociales, DSN. Une veille juridique incluse pour la conformité.</p>
                </div>
                <div class="service-card reveal">
                    <div class="icon-box"><i class="fa-solid fa-headset"></i></div>
                    <h3>BPO & Secrétariat</h3>
                    <p>Relance clients, gestion électronique de documents (GED), catégorisation et assistanat de direction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECURITY -->
    <section class="section-padding security-section" id="security">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div class="security-content reveal">
                    <h2>Vos données : Plus sûres que dans vos archives</h2>
                    <p style="color: var(--text-main);">La sécurité n'est pas une option, c'est le fondement de notre métier d'expert-comptable externalisé.</p>
                    <ul class="security-list">
                        <li><i class="fa-solid fa-shield-halved"></i> Conformité RGPD & Protocoles UE</li>
                        <li><i class="fa-solid fa-server"></i> Serveurs sécurisés & VPN Cryptés</li>
                        <li><i class="fa-solid fa-file-contract"></i> NDA signé par chaque collaborateur</li>
                        <li><i class="fa-solid fa-video"></i> Locaux sous surveillance 24/7 à Tana</li>
                    </ul>
                </div>
                <div class="reveal">
                     <!-- Image abstraite tech/sécurité -->
                     <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Sécurité des données" style="width: 100%; border-radius: var(--radius-md); box-shadow: 0 20px 50px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="section-padding team-section" id="team">
        <div class="container">
            <div class="grid-2" style="align-items: center;">
                <div class="team-img-container reveal">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Équipe comptable collaborative">
                </div>
                <div class="reveal" style="padding-left: 2rem;">
                    <h2>Une équipe Malgache aux standards Français</h2>
                    <p>À Antananarivo, nous ne recrutons pas de simples opérateurs de saisie, mais de futurs experts.</p>
                    <p>Tous nos collaborateurs disposent d'un <strong>Bac+4/5 en Finance/Comptabilité</strong>. Ils suivent un cursus de formation continue au Plan Comptable Général (PCG) français et aux mises à jour fiscales annuelles.</p>
                    <p>Rigueur, Francophonie parfaite et Sourire inclus.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING / ROI -->
    <section class="section-padding pricing-section" id="pricing">
        <div class="container">
            <div class="pricing-box reveal">
                <h2>Une structure de coûts transparente</h2>
                <p>Approche "Au dossier" ou "Au temps passé" selon vos besoins.</p>
                <div class="price-highlight">-60%</div>
                <div class="price-sub">d'économies par rapport à un recrutement interne en France</div>
                <a href="#contact" class="btn btn-primary">SIMULER MES ÉCONOMIES MAINTENANT</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <!-- Logo Text fallback since image is placeholder -->
                    <h3 style="color:white; margin-bottom:1rem;">CPE Solutions</h3>
                    <p>Votre partenaire BPO de confiance pour l'expertise comptable.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact Rapide</h4>
                    <a href="mailto:contact@cpe-solutions.com">contact@cpe-solutions.com</a>
                    <a href="tel:+33100000000">+33 1 00 00 00 00 (Ligne Directe)</a>
                    <p>Antananarivo, Madagascar</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Utiles</h4>
                    <a href="#">Mentions Légales</a>
                    <a href="#">Politique de Confidentialité</a>
                    <a href="#">CGV</a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 CPE Solutions. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // -----------------------------------------------------------
        // CONFIGURATION LOGO (OBLIGATOIRE)
        // -----------------------------------------------------------
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien de votre propre logo.
        // Le logo s'affichera automatiquement dans le header.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du Logo
        const logoWrapper = document.getElementById('logo-wrapper');
        if(logoWrapper) {
            logoWrapper.innerHTML = `
                <div style="position:relative;">
                    <!-- Note explicative pour le développeur/client (visible uniquement en inspectant) -->
                    <span class="logo-placeholder-note">REMPLACER VARIABLE LOGO_URL DANS LE JS</span>
                    <a href="#">
                        <img src="${LOGO_URL}" alt="Logo Entreprise">
                    </a>
                </div>
            `;
        }

        // -----------------------------------------------------------
        // SCROLL REVEAL ANIMATION
        // -----------------------------------------------------------
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Trigger once on load
        reveal();

        // -----------------------------------------------------------
        // SMOOTH SCROLL FOR ANCHOR LINKS
        // -----------------------------------------------------------
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