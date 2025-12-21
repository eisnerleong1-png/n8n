<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena Business Center | Votre QG Stratégique à Antananarivo</title>
    <meta name="description" content="Domiciliation, Coworking et accompagnement business premium à Antananarivo. Lancez votre activité en 24h avec Arena Business Center.">
    
    <!-- Google Fonts: Plus Jakarta Sans (Modern, Geometric, Premium) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         * Style: Modern Premium 2024/2025
         */
        :root {
            /* Palette */
            --primary-dark: #132a44; /* Deep Blue - Authority */
            --primary-light: #1e3a5a;
            --accent: #ea1d50; /* Vibrant Red/Pink - Action */
            --accent-hover: #c4123d;
            --surface-white: #ffffff;
            --surface-off-white: #f8f9fa;
            --text-body: #4a5568;
            --text-heading: #132a44;
            --border-light: #e2e8f0;

            /* Spacing & Layout */
            --container-width: 1280px;
            --header-height: 80px;
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;

            /* Effects */
            --shadow-soft: 0 10px 40px -10px rgba(19, 42, 68, 0.08);
            --shadow-hover: 0 20px 50px -12px rgba(19, 42, 68, 0.15);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--surface-white);
            color: var(--text-body);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-heading);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* UTILITIES */
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            font-weight: 600;
            border-radius: var(--radius-sm);
            transition: var(--transition);
            cursor: pointer;
            font-size: 1rem;
            gap: 10px;
        }

        .btn-primary {
            background-color: var(--accent);
            color: white;
            box-shadow: 0 4px 15px rgba(234, 29, 80, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(234, 29, 80, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--primary-dark);
            color: var(--primary-dark);
        }

        .btn-secondary:hover {
            background-color: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
        }

        .section-padding { padding: 100px 0; }
        
        .badge {
            display: inline-block;
            padding: 6px 12px;
            background: rgba(234, 29, 80, 0.1);
            color: var(--accent);
            font-weight: 700;
            font-size: 0.85rem;
            border-radius: 50px;
            margin-bottom: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: var(--header-height);
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        nav {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-container img {
            height: 50px;
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
            color: var(--primary-dark);
        }

        .nav-links a:hover { color: var(--accent); }

        .mobile-toggle { display: none; font-size: 1.5rem; color: var(--primary-dark); cursor: pointer; }

        /* HERO SECTION */
        .hero {
            position: relative;
            padding-top: calc(var(--header-height) + 80px);
            padding-bottom: 100px;
            background-color: var(--surface-white);
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
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
            color: var(--primary-dark);
        }

        .hero-content p {
            font-size: 1.25rem;
            color: var(--text-body);
            margin-bottom: 2.5rem;
            max-width: 540px;
        }

        .hero-actions {
            display: flex;
            gap: 20px;
            margin-bottom: 40px;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary-dark);
            background: #f0f4f8;
            padding: 10px 20px;
            border-radius: var(--radius-sm);
            width: fit-content;
        }

        .trust-badge i { color: #22c55e; } /* Green for Valid/Speed */

        .hero-visual {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-hover);
        }

        .hero-visual img {
            width: 100%;
            height: 600px;
            object-fit: cover;
            transform: scale(1.02);
            transition: transform 1s ease;
        }

        .hero-visual:hover img { transform: scale(1.05); }

        /* SOCIAL PROOF */
        .social-proof {
            background-color: var(--surface-off-white);
            padding: 40px 0;
            border-top: 1px solid var(--border-light);
            border-bottom: 1px solid var(--border-light);
        }

        .proof-title {
            text-align: center;
            font-size: 0.9rem;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
        }
        
        .logos-grid i { font-size: 2rem; color: var(--primary-dark); }

        /* PROBLEM / SOLUTION */
        .features-section {
            background-color: var(--surface-white);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 80px;
        }

        .section-header h2 { font-size: 2.5rem; margin-bottom: 1rem; }
        .section-header p { font-size: 1.1rem; color: #64748b; }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .feature-card {
            padding: 40px;
            border-radius: var(--radius-md);
            background: white;
            border: 1px solid var(--border-light);
            transition: var(--transition);
        }

        .feature-card:hover {
            border-color: transparent;
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: rgba(19, 42, 68, 0.05);
            color: var(--primary-dark);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
            transition: var(--transition);
        }

        .feature-card:hover .icon-box {
            background: var(--primary-dark);
            color: white;
        }

        /* PRICING */
        .pricing-section {
            background-color: var(--surface-off-white);
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            align-items: center; /* Center vertically so middle card can be taller */
        }

        .pricing-card {
            background: white;
            padding: 40px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-light);
            position: relative;
            transition: var(--transition);
        }

        .pricing-card.featured {
            border-color: var(--accent);
            box-shadow: var(--shadow-soft);
            transform: scale(1.05);
            z-index: 2;
        }
        
        .most-popular {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--accent);
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .price {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary-dark);
            margin: 20px 0;
            display: flex;
            align-items: baseline;
            gap: 5px;
        }

        .price span { font-size: 1rem; font-weight: 400; color: #64748b; }

        .price-features { margin: 30px 0; }

        .price-features li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }

        .price-features li i { color: #22c55e; flex-shrink: 0; }

        /* ABOUT & HUMAN */
        .about-section {
            position: relative;
            overflow: hidden;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .map-container {
            width: 100%;
            height: 100%;
            min-height: 500px;
            background-color: #e2e8f0;
        }

        .map-container iframe { width: 100%; height: 100%; border: 0; }

        .about-content {
            background: var(--primary-dark);
            color: white;
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .about-content h3 { color: white; font-size: 2rem; margin-bottom: 20px; }
        .about-content p { color: rgba(255,255,255,0.8); margin-bottom: 30px; }

        .human-expert {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .expert-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--accent);
        }

        /* FAQ */
        .faq-section {
            max-width: 800px;
            margin: 0 auto;
            padding: 100px 24px;
        }

        .accordion-item {
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 10px;
        }

        .accordion-header {
            width: 100%;
            padding: 24px 0;
            background: none;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary-dark);
            text-align: left;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            padding-right: 20px;
        }
        
        .accordion-content p { padding-bottom: 24px; color: var(--text-body); }

        .accordion-header.active i { transform: rotate(180deg); color: var(--accent); }
        .accordion-header i { transition: transform 0.3s ease; }

        /* FOOTER */
        footer {
            background-color: var(--primary-dark);
            color: white;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-brand p {
            color: rgba(255,255,255,0.7);
            margin-top: 20px;
            max-width: 300px;
        }

        .footer-col h4 { color: white; font-size: 1.1rem; margin-bottom: 24px; }
        .footer-col ul li { margin-bottom: 12px; }
        .footer-col ul li a { color: rgba(255,255,255,0.7); }
        .footer-col ul li a:hover { color: var(--accent); }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.4);
            font-size: 0.9rem;
        }

        /* FLOATING WHATSAPP */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            z-index: 9999;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1) rotate(10deg);
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-grid, .feature-grid, .pricing-grid, .about-grid, .footer-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-content h1 { font-size: 2.5rem; }
            .hero-visual { display: none; } /* On very small screens or optimize */
            .hero-visual img { height: 400px; }
            
            .pricing-card.featured { transform: none; }
            .nav-links { display: none; } /* Add JS toggle for real implementation */
            .mobile-toggle { display: block; }
        }
        
        @media (min-width: 993px) {
           .hero-visual { display: block; }
        }

        /* Animation Utility */
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
    <header id="navbar">
        <div class="container">
            <nav>
                <div class="logo-container" id="logo-wrapper">
                    <!-- JS Injects Logo Here -->
                </div>
                <ul class="nav-links">
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#features">Solutions</a></li>
                    <li><a href="#pricing">Tarifs</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.9rem;">Réserver une visite</a></li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content reveal">
                    <span class="badge">Nouveau à Antananarivo</span>
                    <h1>Votre QG Stratégique à Antananarivo : Bureaux & Domiciliation.</h1>
                    <p>Lancez votre activité en 24h. Espaces de travail tout équipés et accompagnement fiscal/RH pour les entrepreneurs qui visent la croissance.</p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary">Réserver une visite</a>
                        <a href="#pricing" class="btn btn-secondary">Voir nos tarifs</a>
                    </div>
                    <div class="trust-badge">
                        <i class="fas fa-wifi"></i>
                        <span>Internet Fibre Optique Haut Débit Garanti</span>
                    </div>
                </div>
                <div class="hero-visual reveal">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1200" alt="Bureau moderne Arena Business Center Antananarivo">
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <div class="container">
            <p class="proof-title">Ils ont choisi Arena pour grandir</p>
            <div class="logos-grid">
                <!-- Using FontAwesome icons as placeholder for client logos for aesthetic consistency -->
                <i class="fab fa-aws" title="Tech Corp"></i>
                <i class="fab fa-stripe" title="Finance Startup"></i>
                <i class="fab fa-airbnb" title="Travel Agency"></i>
                <i class="fab fa-google" title="Digital Agency"></i>
                <i class="fab fa-spotify" title="Media Group"></i>
            </div>
        </div>
    </section>

    <!-- Problem / Solution -->
    <section id="features" class="section-padding features-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Entreprendre à Tana ne devrait pas être un parcours du combattant.</h2>
                <p>Nous supprimons les frictions administratives et logistiques pour que vous puissiez vous concentrer sur votre chiffre d'affaires.</p>
            </div>
            
            <div class="feature-grid">
                <div class="feature-card reveal">
                    <div class="icon-box"><i class="fas fa-building"></i></div>
                    <h4>L'Immobilier Flexible</h4>
                    <p>Fini les cautions lourdes et les baux 3-6-9. Chez Arena, vous louez à l'heure, au jour ou au mois selon vos besoins réels.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="icon-box"><i class="fas fa-file-signature"></i></div>
                    <h4>L'Admin Simplifié</h4>
                    <p>De la domiciliation à la gestion de paie, nos experts RH et Fiscaux gèrent la complexité administrative malgache pour vous.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="icon-box"><i class="fas fa-briefcase"></i></div>
                    <h4>Image de Marque</h4>
                    <p>Recevez vos clients dans un cadre premium, utilisez nos salles de réunion high-tech et boostez votre crédibilité immédiate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" class="section-padding pricing-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Des offres claires, sans coûts cachés.</h2>
            </div>
            
            <div class="pricing-grid">
                <!-- Card 1 -->
                <div class="pricing-card reveal">
                    <h4>Domiciliation</h4>
                    <p class="desc">Pour exister légalement.</p>
                    <div class="price">100k <span>Ar / mois</span></div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Adresse prestigieuse</li>
                        <li><i class="fas fa-check"></i> Réception courrier</li>
                        <li><i class="fas fa-check"></i> Notification par email</li>
                        <li><i class="fas fa-check"></i> Scan & Envoi (Option)</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="width:100%">Souscrire</a>
                </div>

                <!-- Card 2 (Highlighted) -->
                <div class="pricing-card featured reveal">
                    <div class="most-popular">Populaire</div>
                    <h4>Coworking & Bureaux</h4>
                    <p class="desc">Pour travailler efficacement.</p>
                    <div class="price">20k <span>Ar / jour</span></div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Accès 24/7 (Membres)</li>
                        <li><i class="fas fa-check"></i> Fibre Optique Dédiée</li>
                        <li><i class="fas fa-check"></i> Café & Thé Illimités</li>
                        <li><i class="fas fa-check"></i> Accès Salle Réunion (2h)</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary" style="width:100%">Voir les espaces</a>
                </div>

                <!-- Card 3 -->
                <div class="pricing-card reveal">
                    <h4>Business Services</h4>
                    <p class="desc">Pour structurer votre croissance.</p>
                    <div class="price">Sur Devis</div>
                    <ul class="price-features">
                        <li><i class="fas fa-check"></i> Création de société</li>
                        <li><i class="fas fa-check"></i> Assistance Fiscale</li>
                        <li><i class="fas fa-check"></i> Recrutement & RH</li>
                        <li><i class="fas fa-check"></i> Branding & Logo</li>
                    </ul>
                    <a href="#contact" class="btn btn-secondary" style="width:100%">Parler à un expert</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About & Map -->
    <section id="about" class="section-padding about-section">
        <div class="container">
            <div class="about-grid reveal">
                <div class="about-content">
                    <h3>Au cœur de l'activité économique</h3>
                    <p>Situé dans le quartier d'affaires d'Antananarivo, Arena Business Center n'est pas juste un loueur de murs. Nous sommes un écosystème conçu pour connecter les talents.</p>
                    <p>Proche des banques, des meilleurs restaurants et avec un parking sécurisé, c'est l'emplacement idéal pour centraliser vos opérations.</p>
                    
                    <div class="human-expert">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150" alt="Consultante Fiscale Arena" class="expert-img">
                        <div>
                            <p style="margin:0; font-weight:700; color:white;">Sarah R.</p>
                            <p style="margin:0; font-size:0.9rem; opacity:0.7;">Responsable Accompagnement Clients</p>
                        </div>
                    </div>
                </div>
                <div class="map-container">
                    <!-- Google Maps Embed Placeholder (Tana) -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60395.04423854743!2d47.48421884144365!3d-18.887303038318617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0344c9b9bf%3A0x6009825b03517c0!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1709220000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq-section reveal">
        <div class="section-header">
            <h2>Questions Fréquentes</h2>
        </div>
        
        <div class="accordion-item">
            <button class="accordion-header">
                Quels sont les documents requis pour la domiciliation ?
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="accordion-content">
                <p>C'est très simple. Pour une personne physique : CIN et certificat de résidence. Pour une société existante : Statuts, CIF, NIF et CIN du gérant.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                Y a-t-il une durée d'engagement minimum ?
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="accordion-content">
                <p>Non, la flexibilité est notre credo. Vous pouvez louer un bureau pour une journée ou domicilier votre entreprise mois par mois.</p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-header">
                Comment fonctionne l'assistance fiscale ?
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="accordion-content">
                <p>Nous travaillons avec des cabinets partenaires agréés. Vous nous déposez vos pièces, nous faisons le lien. C'est un guichet unique pour vous faire gagner du temps.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <!-- Logo injecté ici aussi si besoin, ou texte -->
                    <h3 style="color:white; margin-bottom:10px;">ARENA</h3>
                    <p>L'accélérateur de business #1 à Antananarivo. Plus qu'un bureau, une communauté.</p>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Domiciliation</a></li>
                        <li><a href="#">Bureaux Privés</a></li>
                        <li><a href="#">Coworking</a></li>
                        <li><a href="#">Salles de Réunion</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#"><i class="fas fa-phone"></i> +261 34 00 000 00</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> hello@arena.mg</a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Arena Business Center. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/261340000000?text=Bonjour,%20je%20souhaite%20des%20infos%20sur%20vos%20bureaux" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // --- 1. CONFIGURATION DU LOGO (OBLIGATOIRE) ---
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien direct vers votre fichier logo (PNG/SVG).
        // Le logo doit être détouré (fond transparent) pour un meilleur rendu.
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Injection du logo
        const logoWrapper = document.getElementById('logo-wrapper');
        if (logoWrapper) {
            logoWrapper.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Logo Arena Business Center"></a>`;
        }

        // --- 2. LOGIQUE UI/UX ---

        // Sticky Navbar Effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.05)';
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.boxShadow = 'none';
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });

        // Accordion Logic
        const accHeaders = document.querySelectorAll('.accordion-header');
        accHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const activeHeader = document.querySelector('.accordion-header.active');
                if (activeHeader && activeHeader !== header) {
                    activeHeader.classList.remove('active');
                    activeHeader.nextElementSibling.style.maxHeight = null;
                }
                
                header.classList.toggle('active');
                const content = header.nextElementSibling;
                if (header.classList.contains('active')) {
                    content.style.maxHeight = content.scrollHeight + "px";
                } else {
                    content.style.maxHeight = null;
                }
            });
        });

        // Scroll Reveal Animation
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

        // Mobile Menu Toggle (Simplified)
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');
        
        mobileToggle.addEventListener('click', () => {
            if (navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '80px';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.flexDirection = 'column';
                navLinks.style.background = 'white';
                navLinks.style.padding = '20px';
                navLinks.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>