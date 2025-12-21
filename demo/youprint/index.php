<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youprint - Impression Premium à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* 
        ========================================
        DESIGN SYSTEM & VARIABLES
        ========================================
        */
        :root {
            --color-bg: #F1E8C6; /* Fond Crème demandé */
            --color-bg-light: #F9F5E6;
            --color-primary: #F52D3D; /* Rouge Vif */
            --color-accent: #D582B0; /* Rose/Lavande */
            --color-text-main: #1A1A1A;
            --color-text-light: #555555;
            --color-white: #FFFFFF;
            
            --font-main: 'Plus Jakarta Sans', sans-serif;
            
            --spacing-container: 1280px;
            --spacing-section: 100px;
            
            --shadow-card: 0 10px 30px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 40px -10px rgba(0,0,0,0.15);
            
            --radius-md: 12px;
            --radius-lg: 24px;
            
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* 
        ========================================
        RESET & BASE
        ========================================
        */
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
            background-color: var(--color-bg);
            color: var(--color-text-main);
            line-height: 1.6;
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
        }

        ul {
            list-style: none;
        }

        /* 
        ========================================
        TYPOGRAPHY
        ========================================
        */
        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            color: var(--color-text-main);
            margin-bottom: 24px;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            margin-bottom: 16px;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 12px;
        }

        p {
            font-size: 1.125rem;
            color: var(--color-text-light);
            margin-bottom: 24px;
        }

        /* 
        ========================================
        COMPONENTS
        ========================================
        */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 50px;
            transition: var(--transition);
            cursor: pointer;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .btn-primary {
            background-color: var(--color-primary);
            color: var(--color-white);
            box-shadow: 0 4px 15px rgba(245, 45, 61, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(245, 45, 61, 0.4);
            background-color: #d91c2b;
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--color-text-main);
            color: var(--color-text-main);
        }

        .btn-secondary:hover {
            background-color: var(--color-text-main);
            color: var(--color-white);
        }

        .section-padding {
            padding: var(--spacing-section) 0;
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            background-color: rgba(213, 130, 176, 0.15);
            color: #b0558b; /* Version plus sombre de l'accent pour lisibilité */
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 700;
            margin-bottom: 16px;
        }

        /* 
        ========================================
        HEADER
        ========================================
        */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: transparent; /* Transparent initialement */
        }

        .header.scrolled {
            background: rgba(241, 232, 198, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Taille ajustée pour logo.jpg */
            width: auto;
        }

        .nav-cta {
            display: none;
        }

        @media(min-width: 768px) {
            .nav-cta {
                display: block;
            }
        }

        /* 
        ========================================
        HERO SECTION
        ========================================
        */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 100px; /* Éviter que le header cache le contenu */
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: center;
        }

        .hero-content {
            z-index: 2;
            padding-right: 0;
        }

        .hero-visual {
            position: relative;
            height: 500px;
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 20px;
        }

        .hero-img-1 {
            width: 100%;
            height: 100%;
            border-radius: var(--radius-lg);
            background-image: url('https://images.unsplash.com/photo-1576153192396-09345355268f?q=80&w=1000&auto=format&fit=crop'); /* Goodies/Mug vibe */
            background-size: cover;
            background-position: center;
            transform: translateY(20px);
        }

        .hero-img-2 {
            width: 100%;
            height: 80%;
            align-self: center;
            border-radius: var(--radius-lg);
            background-image: url('https://images.unsplash.com/photo-1562654501-a0ccc0fc3fb1?q=80&w=1000&auto=format&fit=crop'); /* Printing press vibe */
            background-size: cover;
            background-position: center;
            transform: translateY(-20px);
        }

        .hero-decor {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120%;
            height: 120%;
            background: radial-gradient(circle, rgba(213, 130, 176, 0.15) 0%, rgba(241, 232, 198, 0) 70%);
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        @media (min-width: 992px) {
            .hero-grid {
                grid-template-columns: 1fr 1fr;
                gap: 80px;
            }
            .hero-content {
                padding-right: 20px;
            }
        }

        /* 
        ========================================
        SOCIAL PROOF
        ========================================
        */
        .social-proof {
            padding: 40px 0;
            background: var(--color-bg-light);
            border-top: 1px solid rgba(0,0,0,0.05);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .proof-title {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--color-text-light);
            margin-bottom: 24px;
        }

        .logos-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }

        .client-logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: #aaa;
            /* Placeholder pour logos réels */
            filter: grayscale(100%);
        }

        /* 
        ========================================
        SOLUTIONS (CATALOGUE)
        ========================================
        */
        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .solution-card {
            background: var(--color-white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
            group: hover;
        }

        .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-img-wrapper {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .solution-card:hover .card-img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 30px;
        }

        .price-tag {
            display: inline-block;
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--color-primary);
            font-weight: 600;
        }

        .cta-center {
            text-align: center;
            margin-top: 60px;
        }

        /* 
        ========================================
        WHY US (DIFFERENCE)
        ========================================
        */
        .features {
            background-color: var(--color-white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .feature-item {
            padding: 20px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(213, 130, 176, 0.2);
            color: var(--color-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 24px;
        }

        /* 
        ========================================
        PORTFOLIO
        ========================================
        */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 50px;
        }

        .portfolio-item {
            position: relative;
            border-radius: var(--radius-md);
            overflow: hidden;
            height: 300px;
        }
        
        .portfolio-item:nth-child(3) {
            grid-column: span 2; /* Large item */
            height: 400px;
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            color: white;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.03);
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        @media(min-width: 768px) {
            .portfolio-grid {
                grid-template-columns: repeat(3, 1fr);
                height: 600px; /* Masonry effect via grid lines if needed, keeping simple grid for responsiveness */
            }
            .portfolio-item { height: 100%; }
            .portfolio-item:nth-child(1) { grid-column: 1/2; grid-row: 1/2; }
            .portfolio-item:nth-child(2) { grid-column: 2/3; grid-row: 1/3; } /* Tall item */
            .portfolio-item:nth-child(3) { grid-column: 3/4; grid-row: 1/2; }
            .portfolio-item:nth-child(4) { grid-column: 1/2; grid-row: 2/3; }
            .portfolio-item:nth-child(5) { grid-column: 3/4; grid-row: 2/3; }
        }

        /* 
        ========================================
        CONTACT & FOOTER
        ========================================
        */
        .footer {
            background-color: #1A1A1A;
            color: var(--color-white);
            padding-top: 80px;
            padding-bottom: 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-col h3 {
            color: var(--color-white);
            margin-bottom: 20px;
        }

        .footer-col p {
            color: #999;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .contact-form {
            background: rgba(255,255,255,0.05);
            padding: 30px;
            border-radius: var(--radius-md);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            color: white;
            font-family: var(--font-main);
        }
        
        .form-control::placeholder {
            color: #777;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-primary);
        }

        .btn-submit {
            width: 100%;
            background: var(--color-primary);
            color: white;
            border: none;
            padding: 14px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .btn-submit:hover {
            background: #d91c2b;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            color: #555;
            font-size: 0.875rem;
        }

        /* 
        ========================================
        FLOATING WHATSAPP
        ========================================
        */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            color: #FFF;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 0px 5px 15px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1) rotate(10deg);
        }

        /* 
        ========================================
        UTILITIES
        ========================================
        */
        .text-accent { color: var(--color-accent); }
        .text-primary { color: var(--color-primary); }

        /* Animation classes (Scroll) */
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

    <!-- HEADER -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="main-logo" src="" alt="Youprint Logo" class="logo-img">
            </a>
            <nav class="nav-cta">
                <a href="#contact" class="btn btn-primary">Demander un devis gratuit</a>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-decor"></div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content reveal">
                    <span class="badge">Imprimerie Nouvelle Génération</span>
                    <h1>Boostez votre visibilité avec l'impression <span class="text-primary">haute qualité</span> à Antananarivo.</h1>
                    <p>De la carte de visite aux objets publicitaires, Youprint donne vie à vos idées. Un rendu premium, disponible à Analakely et Analamahitsy.</p>
                    <div style="margin-top: 32px;">
                        <a href="#contact" class="btn btn-primary" style="margin-right: 16px;">Demander un devis</a>
                        <a href="#solutions" class="btn btn-secondary">Nos solutions</a>
                    </div>
                </div>
                <div class="hero-visual reveal">
                    <div class="hero-img-1"></div>
                    <div class="hero-img-2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PREUVE SOCIALE -->
    <section class="social-proof">
        <div class="container">
            <p class="proof-title">Ils nous font confiance pour leur image</p>
            <div class="logos-grid">
                <!-- Logos simulés textuels pour l'exemple, car pas d'images fournies pour les clients -->
                <span class="client-logo">BNI</span>
                <span class="client-logo">TELMA</span>
                <span class="client-logo">ORANGE</span>
                <span class="client-logo">BOA</span>
                <span class="client-logo">STAR</span>
                <span class="client-logo">AXIAN</span>
            </div>
        </div>
    </section>

    <!-- SOLUTIONS -->
    <section id="solutions" class="section-padding">
        <div class="container">
            <div style="text-align: center; max-width: 600px; margin: 0 auto;" class="reveal">
                <span class="badge">Catalogue</span>
                <h2>Que souhaitez-vous imprimer aujourd'hui ?</h2>
                <p>Des solutions sur mesure pour les professionnels et les particuliers exigeants.</p>
            </div>

            <div class="solutions-grid reveal">
                <!-- Carte 1 -->
                <article class="solution-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1554188248-986adbb73be0?q=80&w=800&auto=format&fit=crop" alt="Goodies" class="card-img">
                    </div>
                    <div class="card-content">
                        <h3>Goodies & Cadeaux</h3>
                        <p>Mugs, Stylos, Clés USB, T-shirts. L'art de faire plaisir à vos clients.</p>
                        <span class="price-tag">À partir de 15 000 Ar</span>
                    </div>
                </article>

                <!-- Carte 2 -->
                <article class="solution-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b799314346d?q=80&w=800&auto=format&fit=crop" alt="Marketing Support" class="card-img">
                    </div>
                    <div class="card-content">
                        <h3>Supports Marketing</h3>
                        <p>Flyers, Cartes de visite, Brochures. Pour une première impression inoubliable.</p>
                        <span class="price-tag">À partir de 25 000 Ar / 100 ex</span>
                    </div>
                </article>

                <!-- Carte 3 -->
                <article class="solution-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" alt="Signalétique" class="card-img">
                    </div>
                    <div class="card-content">
                        <h3>Grand Format</h3>
                        <p>Bâches, Roll-up, Vinyl adhésif. Voyez les choses en grand pour votre marque.</p>
                        <span class="price-tag">Sur devis uniquement</span>
                    </div>
                </article>
            </div>

            <div class="cta-center reveal">
                <a href="#" class="btn btn-secondary">Voir tout le catalogue</a>
            </div>
        </div>
    </section>

    <!-- DIFFERENCE / FEATURES -->
    <section class="section-padding features">
        <div class="container">
            <div class="reveal">
                <span class="badge">Pourquoi Nous</span>
                <h2>La différence Youprint</h2>
            </div>
            
            <div class="features-grid reveal">
                <div class="feature-item">
                    <div class="feature-icon">★</div>
                    <h3>Qualité Premium</h3>
                    <p>Machines de dernière génération pour un rendu éclatant et des couleurs fidèles à votre charte.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <h3>Rapidité d'exécution</h3>
                    <p>Vos délais sont les nôtres. Vos commandes urgentes sont traitées en priorité absolue.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📍</div>
                    <h3>Proximité Tana</h3>
                    <p>Récupérez vos commandes facilement dans nos 2 agences : Analakely et Analamahitsy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section class="section-padding" style="background-color: var(--color-bg);">
        <div class="container">
            <div class="reveal" style="margin-bottom: 40px;">
                <span class="badge">Réalisations</span>
                <h2>Nos dernières créations</h2>
            </div>

            <div class="portfolio-grid reveal">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=800&auto=format&fit=crop" alt="T-shirt Event" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h4>Merch Event Tech</h4>
                        <p>Impression textile</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=800&auto=format&fit=crop" alt="Rollup" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h4>Campagne Lancement</h4>
                        <p>Roll-up & PLV</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1586717791821-3f44a5638d48?q=80&w=800&auto=format&fit=crop" alt="Stationery" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h4>Branding Corporate</h4>
                        <p>Papeterie complète</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1513721032312-6a18a47c8f36?q=80&w=800&auto=format&fit=crop" alt="Carte de visite" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h4>Carte Luxe</h4>
                        <p>Vernis sélectif</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1596464716127-f9a86b563cb3?q=80&w=800&auto=format&fit=crop" alt="Mug" class="portfolio-img">
                    <div class="portfolio-overlay">
                        <h4>Cadeaux fin d'année</h4>
                        <p>Sublimation sur céramique</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER & CONTACT -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Info Colonnes -->
                <div class="footer-col">
                    <h2>Prêt à imprimer ?</h2>
                    <p style="margin-bottom: 30px;">Passez nous voir ou envoyez-nous votre projet.</p>
                    
                    <h3>Agence Analakely</h3>
                    <p>Avenue de l'Indépendance</p>
                    <p>+261 34 00 000 00</p>
                    
                    <h3 style="margin-top: 20px;">Agence Analamahitsy</h3>
                    <p>Près de la station Jovenna</p>
                    <p>+261 34 00 000 01</p>
                </div>

                <!-- Formulaire -->
                <div class="footer-col">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Votre Email">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="" disabled selected>Type de projet</option>
                                <option>Carte de visite / Flyer</option>
                                <option>Grand Format (Bâche, Rollup)</option>
                                <option>Goodies (Mugs, T-shirts)</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="" disabled selected>Budget estimé (Ar)</option>
                                <option>Moins de 100 000 Ar</option>
                                <option>100 000 - 500 000 Ar</option>
                                <option>500 000 - 5 000 000 Ar</option>
                                <option>Plus de 5 000 000 Ar</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">ENVOYER LA DEMANDE</button>
                    </form>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2024 Youprint Madagascar. Design Premium. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WHATSAPP FLOAT -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <!-- Simple SVG WhatsApp Icon -->
        <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382C17.112 14.382 16.892 14.35 15.682 13.85C15.5332 13.7847 15.3855 13.7547 15.222 13.75C14.992 13.75 14.652 13.84 14.442 14.1C13.922 14.74 13.562 15.17 13.332 15.17C13.192 15.17 12.982 15.11 12.632 14.96C11.592 14.51 10.372 13.66 9.47198 12.85C9.36675 12.7486 9.27415 12.6369 9.19198 12.51C8.75198 11.83 9.40198 11.75 9.77198 11.01C9.84198 10.87 9.87198 10.73 9.82198 10.59C9.74198 10.36 9.17198 8.95001 8.87198 8.23001C8.61198 7.60001 8.35198 7.64001 8.16198 7.64001C7.99198 7.64001 7.79198 7.63001 7.59198 7.63001C7.07198 7.63001 6.64198 7.82001 6.27198 8.22001C5.75198 8.79001 5.38198 9.58001 5.38198 10.7C5.38198 12.3 6.54198 13.85 6.78198 14.16C7.00198 14.45 9.07198 17.65 12.232 19.01C14.852 20.14 15.402 19.92 15.972 19.86C16.822 19.77 17.842 19.23 18.232 18.12C18.662 16.91 18.232 15.54 18.062 15.26C17.922 15.03 17.722 14.93 17.472 14.382ZM12.002 22C10.232 22 8.57198 21.54 7.11198 20.73L2.35198 22L4.08198 17.61C2.96198 15.99 2.37198 14.07 2.37198 12C2.37198 6.69001 6.69198 2.37001 12.002 2.37001C17.312 2.37001 21.632 6.69001 21.632 12C21.632 17.31 17.312 22 12.002 22Z"/>
        </svg>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // INSERTION LOGO OBLIGATOIRE
        const LOGO_URL = "logo.jpg";
        document.getElementById('main-logo').src = LOGO_URL;

        // HEADER SCROLL EFFECT
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // REVEAL ON SCROLL
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
        // Trigger once on load
        revealOnScroll();

    </script>
</body>
</html>