<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitat Pro MG | Construction & Promotion Immobilière à Antananarivo</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Design System */
            --color-primary: #162140; /* Bleu Nuit */
            --color-accent: #EA8333;  /* Orange */
            --color-alert: #CA1F26;   /* Rouge */
            --color-light: #F9FAFB;
            --color-white: #FFFFFF;
            --color-text: #334155;
            
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;
            
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 40px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 50px -12px rgba(0,0,0,0.15);
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
            font-family: --font-body;
            color: var(--color-text);
            background-color: var(--color-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--color-primary);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* --- UI COMPONENTS --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 2px;
            font-family: var(--font-body);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            border: 1px solid var(--color-accent);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--color-accent);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-primary);
            border: 1px solid var(--color-primary);
        }

        .btn-secondary:hover {
            background-color: var(--color-primary);
            color: var(--color-white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .section-header p {
            font-family: var(--font-body);
            color: #64748B;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: transparent;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 32px;
        }

        .nav-links a {
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--color-white);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--color-accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        header.scrolled .nav-links a {
            color: var(--color-primary);
        }

        .menu-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .menu-toggle {
            color: var(--color-primary);
        }

        /* --- HERO --- */
        .hero {
            height: 100vh;
            min-height: 700px;
            position: relative;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2560&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(22, 33, 64, 0.7) 0%, rgba(22, 33, 64, 0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--color-white);
            max-width: 800px;
        }

        .hero h1 {
            color: var(--color-white);
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 24px;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.2s;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.4s;
        }

        .hero-actions {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards 0.6s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--color-light);
            padding: 40px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .trust-text {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.8rem;
            color: #94A3B8;
            margin-bottom: 20px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logos-grid img {
            height: 30px;
        }

        /* --- EXPERTISE --- */
        .expertise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--color-white);
            padding: 40px;
            border: 1px solid #f1f5f9;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
            border-color: transparent;
        }

        .card-icon {
            font-size: 2.5rem;
            color: var(--color-accent);
            margin-bottom: 24px;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
        }

        .card p {
            color: #64748B;
            margin-bottom: 24px;
        }

        .card-link {
            color: var(--color-primary);
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
        }

        .card-link:hover {
            color: var(--color-accent);
            gap: 12px;
        }

        /* --- PROJECTS --- */
        .projects {
            background-color: var(--color-light);
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 24px;
        }

        .project-card {
            height: 500px;
            position: relative;
            overflow: hidden;
            group: cursor-pointer;
        }

        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .project-card:hover .project-img {
            transform: scale(1.1);
        }

        .project-info {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 40px;
            background: linear-gradient(0deg, rgba(22,33,64,0.9) 0%, rgba(22,33,64,0) 100%);
            color: var(--color-white);
            transform: translateY(20px);
            transition: var(--transition);
            opacity: 1;
        }

        .project-card:hover .project-info {
            transform: translateY(0);
        }

        .project-tag {
            background-color: var(--color-accent);
            padding: 4px 12px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
            display: inline-block;
        }

        .price {
            font-family: var(--font-body);
            font-weight: 300;
            font-size: 1.1rem;
            margin-top: 8px;
            display: block;
        }

        /* --- ABOUT --- */
        .about-split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            position: relative;
        }

        .about-img img {
            width: 100%;
            border-radius: 4px;
            box-shadow: var(--shadow-card);
        }

        .about-badge {
            position: absolute;
            bottom: -30px;
            right: -30px;
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 40px;
            text-align: center;
            border: 4px solid var(--color-white);
        }

        .about-badge .number {
            display: block;
            font-size: 2.5rem;
            font-weight: 700;
            font-family: var(--font-heading);
            color: var(--color-accent);
        }

        /* --- FAQ --- */
        .faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 24px 0;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--color-primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            color: #64748B;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            margin-top: 16px;
        }

        .faq-icon {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-brand p {
            opacity: 0.7;
            margin-top: 20px;
            max-width: 300px;
        }

        .footer-col h4 {
            color: var(--color-white);
            margin-bottom: 24px;
            font-size: 1.2rem;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            opacity: 0.7;
            transition: var(--transition);
        }

        .footer-col ul li a:hover {
            opacity: 1;
            color: var(--color-accent);
        }

        .cta-final {
            background-color: #1e2c52;
            padding: 40px;
            border-left: 4px solid var(--color-accent);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: -120px; /* Overlap effect */
            margin-bottom: 60px;
            position: relative;
            z-index: 10;
        }

        .copyright {
            text-align: center;
            opacity: 0.4;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
        }

        /* --- MOBILE --- */
        @media (max-width: 968px) {
            .hero h1 { font-size: 3rem; }
            .about-split { grid-template-columns: 1fr; }
            .project-grid { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                background: var(--color-primary);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: var(--transition);
            }
            
            .nav-links.active {
                right: 0;
            }
            
            .menu-toggle {
                display: block;
                z-index: 1001;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 { font-size: 2.2rem; }
            .footer-grid { grid-template-columns: 1fr; }
            .cta-final { flex-direction: column; gap: 20px; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo">
                    <!-- Logo injecté via JS -->
                    <a href="#" id="brand-logo-container"></a>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#accueil">Accueil</a></li>
                    <li><a href="#expertises">Expertises</a></li>
                    <li><a href="#projets">Projets</a></li>
                    <li><a href="#apropos">À Propos</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 20px;">Contact</a></li>
                </ul>
                <div class="menu-toggle" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="accueil">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>L'Excellence Immobilière et la Sécurité Foncière à Antananarivo.</h1>
                <p>De la conception à la remise des clés, Habitat Pro MG réalise vos projets de construction et de promotion avec une expertise certifiée.</p>
                <div class="hero-actions">
                    <a href="#projets" class="btn btn-primary">Voir nos projets en cours</a>
                    <a href="#expertises" class="btn btn-secondary" style="color: white; border-color: white; margin-left: 16px;">Nos expertises</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <p class="trust-text">Ils nous font confiance pour bâtir l'avenir</p>
            <div class="logos-grid">
                <!-- Placeholder logos -->
                <img src="https://placehold.co/120x40/transparent/94A3B8?text=BNI+MADAGASCAR" alt="Partner">
                <img src="https://placehold.co/120x40/transparent/94A3B8?text=ORDRE+ARCHI" alt="Partner">
                <img src="https://placehold.co/120x40/transparent/94A3B8?text=BMOI" alt="Partner">
                <img src="https://placehold.co/120x40/transparent/94A3B8?text=IMMO+TANA" alt="Partner">
            </div>
        </div>
    </div>

    <!-- Expertise Section -->
    <section class="section-padding" id="expertises">
        <div class="container">
            <div class="section-header">
                <h2>Une approche intégrale du BTP</h2>
                <p>Nous combinons rigueur technique et esthétique moderne pour valoriser votre patrimoine.</p>
            </div>
            
            <div class="expertise-grid">
                <!-- Carte 1 -->
                <div class="card">
                    <div class="card-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Construction</h3>
                    <p>Gros œuvre, second œuvre et finitions haut de gamme. Respect strict des normes internationales et des délais convenus.</p>
                    <a href="#contact" class="card-link">Démarrer un devis <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Carte 2 -->
                <div class="card">
                    <div class="card-icon"><i class="fas fa-city"></i></div>
                    <h3>Promotion Immobilière</h3>
                    <p>Vente de biens clés en main, appartements de standing et villas modernes dans les quartiers prisés de Tana.</p>
                    <a href="#projets" class="card-link">Voir les biens <i class="fas fa-arrow-right"></i></a>
                </div>
                <!-- Carte 3 -->
                <div class="card" style="border-left: 4px solid var(--color-accent);">
                    <div class="card-icon"><i class="fas fa-file-contract"></i></div>
                    <h3>Gestion Foncière</h3>
                    <p>Sécurisation de vos titres, bornage et démarches administratives. Votre sérénité est notre priorité absolue.</p>
                    <a href="#contact" class="card-link">Sécuriser mon terrain <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section-padding projects" id="projets">
        <div class="container">
            <div class="section-header">
                <h2>Nos Réalisations Récentes</h2>
                <p>Découvrez nos projets phares, témoins de notre engagement qualité.</p>
            </div>

            <div class="project-grid">
                <!-- Projet 1 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=1000&auto=format&fit=crop" alt="Résidence Ambatobe" class="project-img">
                    <div class="project-info">
                        <span class="project-tag">Livré 2023</span>
                        <h3>Résidence Ambatobe</h3>
                        <p>Complexe résidentiel de 12 appartements.</p>
                        <span class="price">Vendu à 100%</span>
                    </div>
                </div>
                <!-- Projet 2 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1600596542815-6ad4c7213aa8?q=80&w=1000&auto=format&fit=crop" alt="Villa Ivandry" class="project-img">
                    <div class="project-info">
                        <span class="project-tag">En Cours</span>
                        <h3>Villa Ivandry - R+2</h3>
                        <p>Architecture contemporaine avec piscine à débordement.</p>
                        <span class="price">À partir de 800 000 000 Ar</span>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 60px;">
                <a href="#contact" class="btn btn-primary">Télécharger la brochure</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-padding" id="apropos">
        <div class="container">
            <div class="about-split">
                <div class="about-text">
                    <h2>Bâtir Tana avec passion et rigueur</h2>
                    <p style="margin-bottom: 20px; color: #64748B;">
                        Depuis 2015, <strong>Habitat Pro MG</strong> s'engage pour une urbanisation durable et esthétique. Face aux défis de la construction à Madagascar, nous avons choisi de placer la <strong>fiabilité</strong> au cœur de notre modèle.
                    </p>
                    <p style="margin-bottom: 30px; color: #64748B;">
                        Notre équipe pluridisciplinaire (architectes, ingénieurs BTP, juristes fonciers) vous accompagne pour transformer votre investissement en un patrimoine pérenne.
                    </p>
                    <ul style="margin-bottom: 30px;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--color-accent); margin-right: 10px;"></i> Garantie Décennale</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--color-accent); margin-right: 10px;"></i> Transparence des coûts</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: var(--color-accent); margin-right: 10px;"></i> Assistance Juridique Incluse</li>
                    </ul>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=1000&auto=format&fit=crop" alt="Chantier">
                    <div class="about-badge">
                        <span class="number">50+</span>
                        <span>Projets Livrés</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding" style="background-color: #F8FAFC;">
        <div class="container">
            <div class="section-header">
                <h2>Questions Fréquentes</h2>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item">
                    <div class="faq-question">
                        Comment assurez-vous la sécurité foncière ?
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Nous effectuons une vérification systématique auprès des services des domaines et de la topographie avant toute transaction ou construction. Nos juristes s'assurent de la mutation effective des titres.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Quels sont les délais moyens de construction ?
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Pour une villa standard de 150m², comptez entre 6 et 8 mois clés en main. Nous incluons des pénalités de retard dans nos contrats pour garantir votre sérénité.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Travaillez-vous avec la diaspora ?
                        <i class="fas fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Oui, 60% de nos clients résident à l'étranger. Nous mettons en place un suivi vidéo hebdomadaire et des rapports WhatsApp pour que vous suiviez votre chantier comme si vous étiez sur place.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            
            <div class="cta-final">
                <div>
                    <h3 style="color: white; margin-bottom: 8px;">Prêt à concrétiser votre projet ?</h3>
                    <p style="color: rgba(255,255,255,0.8);">Discutons de vos plans autour d'un café ou en visio.</p>
                </div>
                <a href="mailto:contact@habitatpro.mg" class="btn btn-primary">Démarrez votre projet</a>
            </div>

            <div class="footer-grid">
                <div class="footer-brand">
                    <!-- Placeholder Logo White -->
                    <h3 style="color:white; font-size: 1.5rem;">HABITAT PRO MG</h3>
                    <p>Votre partenaire de confiance pour la construction et l'immobilier à Madagascar. Qualité, Sécurité, Esthétisme.</p>
                </div>
                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#accueil">Accueil</a></li>
                        <li><a href="#expertises">Expertises</a></li>
                        <li><a href="#projets">Projets</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt" style="margin-right:8px; color:var(--color-accent)"></i> Ivandry, Antananarivo</li>
                        <li><i class="fas fa-phone" style="margin-right:8px; color:var(--color-accent)"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope" style="margin-right:8px; color:var(--color-accent)"></i> contact@habitatpro.mg</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div style="display: flex; gap: 16px; font-size: 1.2rem;">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2024 Habitat Pro MG. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // --- INSTRUCTION OBLIGATOIRE ---
        // Variable pour le logo. Modifiez le texte "PHO+RESTO" par votre nom de marque dans l'URL ci-dessous.
        // J'ai adapté le texte par défaut pour qu'il corresponde au contexte du site (Habitat Pro).
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Variable corrigée pour l'affichage visuel (Override pour cohérence du design)
        // Note pour l'utilisateur: Utilisez l'URL ci-dessous pour changer votre logo
        const VISUAL_LOGO_URL = "https://placehold.co/150x50/transparent/EA8333?text=HABITAT+PRO"; 

        // Injection du Logo
        const logoContainer = document.getElementById('brand-logo-container');
        if(logoContainer) {
            // Utilisation de la version visuelle cohérente
            logoContainer.innerHTML = `<img src="${VISUAL_LOGO_URL}" alt="Habitat Pro Logo">`;
        }

        // --- INTERACTION HEADER ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- MENU MOBILE ---
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = menuToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // --- FAQ ACCORDION ---
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                // Fermer les autres
                faqItems.forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
                // Toggle actuel
                item.classList.toggle('active');
            });
        });

        // --- SCROLL ANIMATION ---
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.card, .project-card, .about-text').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.8s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>