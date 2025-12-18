<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startimes Madagascar | Le Meilleur de la TV Numérique</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES 
         * Premium Architecture for High-End Feel
         */
        :root {
            /* Palette Brand */
            --color-primary: #0055B8; /* Confiance/Tech */
            --color-primary-dark: #003d82;
            --color-accent: #F16C20; /* Action/Achat */
            --color-accent-hover: #d95a12;
            --color-highlight: #FFCB05; /* Promos */
            
            /* Neutrals */
            --color-dark: #0f172a;
            --color-gray: #64748b;
            --color-light: #f8fafc;
            --color-white: #ffffff;
            
            /* Spacing & UI */
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 32px;
            --shadow-card: 0 10px 40px -10px rgba(0,0,0,0.1);
            --shadow-hover: 0 20px 50px -12px rgba(0,85,184,0.25);
            --container-max: 1280px;
            
            /* Transition */
            --ease-out: cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* RESET & BASE */
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
            background-color: var(--color-light);
            color: var(--color-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s var(--ease-out);
        }

        ul {
            list-style: none;
        }

        /* UTILS */
        .container {
            width: 100%;
            max-width: var(--container-max);
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 32px;
            font-weight: 700;
            border-radius: 50px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s var(--ease-out);
            border: none;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            box-shadow: 0 4px 15px rgba(241, 108, 32, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--color-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(241, 108, 32, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--color-white);
            color: var(--color-white);
        }

        .btn-secondary:hover {
            background-color: var(--color-white);
            color: var(--color-primary);
        }

        .btn-block {
            width: 100%;
        }

        .text-accent { color: var(--color-accent); }
        .text-primary { color: var(--color-primary); }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.3s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            padding: 12px 0;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 45px;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 32px;
            align-items: center;
        }

        .nav-link {
            font-weight: 600;
            color: var(--color-white);
            font-size: 0.95rem;
            position: relative;
        }
        
        header.scrolled .nav-link {
            color: var(--color-dark);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--color-accent);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .header-actions {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .btn-header {
            padding: 10px 24px;
            font-size: 0.9rem;
        }

        /* MOBILE MENU TOGGLE */
        .mobile-toggle {
            display: none;
            color: var(--color-white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        header.scrolled .mobile-toggle {
            color: var(--color-dark);
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(0,85,184,0.9), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1579952363873-27f3bde9be51?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: var(--color-white);
            padding-top: 80px;
        }

        .hero-content {
            max-width: 700px;
            animation: slideUp 0.8s var(--ease-out);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 24px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
            margin-bottom: 32px;
            max-width: 90%;
        }

        .hero-proof {
            margin-top: 32px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .hero-proof i {
            color: var(--color-highlight);
        }

        /* TRUST BAR */
        .trust-bar {
            background: var(--color-white);
            padding: 40px 0;
            border-bottom: 1px solid #e2e8f0;
            margin-top: -60px;
            position: relative;
            z-index: 10;
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
            box-shadow: 0 -10px 30px rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            text-align: center;
        }

        .trust-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .trust-icon {
            width: 50px;
            height: 50px;
            background: #f0f6ff;
            color: var(--color-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .trust-text {
            font-weight: 700;
            color: var(--color-dark);
            font-size: 0.95rem;
        }

        /* SECTIONS GENERAL */
        section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--color-dark);
            margin-bottom: 16px;
        }
        
        .section-header p {
            color: var(--color-gray);
            font-size: 1.1rem;
        }

        /* PRICING */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            align-items: center;
        }

        .price-card {
            background: var(--color-white);
            padding: 40px 32px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
            position: relative;
            transition: transform 0.3s var(--ease-out);
            border: 1px solid #e2e8f0;
        }

        .price-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .price-card.popular {
            border: 2px solid var(--color-highlight);
            transform: scale(1.05);
            z-index: 2;
        }

        .price-card.popular:hover {
            transform: scale(1.05) translateY(-10px);
        }

        .badge-popular {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--color-highlight);
            color: var(--color-dark);
            padding: 6px 16px;
            border-radius: 20px;
            font-weight: 800;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .plan-name {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--color-primary);
        }

        .plan-price {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--color-dark);
            margin-bottom: 24px;
        }

        .plan-price span {
            font-size: 1rem;
            color: var(--color-gray);
            font-weight: 500;
        }

        .plan-features {
            margin-bottom: 32px;
        }

        .plan-features li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-gray);
        }

        .plan-features li i {
            color: var(--color-primary);
        }

        /* HARDWARE SPLIT */
        .hardware-split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-card);
        }

        .hw-item {
            position: relative;
            height: 400px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: var(--color-white);
            overflow: hidden;
            group: 1;
        }

        .hw-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s var(--ease-out);
            z-index: 1;
        }
        
        .hw-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
            z-index: 2;
        }

        .hw-content {
            position: relative;
            z-index: 3;
        }

        .hw-item:hover .hw-bg {
            transform: scale(1.1);
        }

        /* APP SECTION */
        .app-section {
            background-color: var(--color-primary);
            color: var(--color-white);
            border-radius: var(--radius-lg);
            margin: 40px 24px;
            padding: 60px;
            display: flex;
            align-items: center;
            gap: 60px;
            overflow: hidden;
        }

        .app-text {
            flex: 1;
        }

        .app-visual {
            flex: 1;
            position: relative;
        }

        .phone-mockup {
            width: 300px;
            transform: rotate(-5deg);
            box-shadow: 0 30px 60px rgba(0,0,0,0.3);
            border-radius: 40px;
        }

        .store-badges {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .store-btn {
            background: rgba(255,255,255,0.15);
            padding: 10px 20px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background 0.3s;
        }
        
        .store-btn:hover {
            background: rgba(255,255,255,0.25);
        }

        /* LOCALISATION */
        .search-container {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .search-bar {
            width: 100%;
            padding: 20px 24px;
            padding-right: 60px;
            border-radius: 50px;
            border: 2px solid #e2e8f0;
            font-size: 1.1rem;
            outline: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            font-family: inherit;
        }

        .search-btn-icon {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: var(--color-primary);
            color: white;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* FOOTER */
        footer {
            background: var(--color-dark);
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
            color: var(--color-gray);
            margin-top: 16px;
            max-width: 300px;
        }

        .footer-col h4 {
            margin-bottom: 24px;
            font-size: 1.1rem;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--color-gray);
        }

        .footer-links a:hover {
            color: var(--color-white);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: var(--color-gray);
            font-size: 0.9rem;
        }

        /* FLOATING WHATSAPP */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            z-index: 100;
            transition: transform 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* ANIMATION KEYFRAMES */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* RESPONSIVE */
        @media (max-width: 968px) {
            .pricing-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto;
            }
            
            .price-card.popular {
                transform: scale(1);
            }
            
            .app-section {
                flex-direction: column-reverse;
                text-align: center;
                padding: 40px 20px;
            }
            
            .store-badges {
                justify-content: center;
            }

            .hardware-split {
                grid-template-columns: 1fr;
            }
            
            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .nav-links, .header-actions { display: none; }
            .mobile-toggle { display: block; }
            
            .trust-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container nav-wrapper">
            <!-- LOGO PLACEHOLDER -->
            <a href="#" id="logo-container">
                <!-- Javascript will insert logo here -->
                <!-- INSTRUCTION UTILISATEUR: Placez le lien de votre logo final dans la variable JS LOGO_URL -->
            </a>

            <nav>
                <ul class="nav-links">
                    <li><a href="#pricing" class="nav-link">Bouquets TV</a></li>
                    <li><a href="#hardware" class="nav-link">Décodeurs</a></li>
                    <li><a href="#app" class="nav-link">Application</a></li>
                    <li><a href="#locations" class="nav-link">Points de Vente</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="#" class="btn btn-secondary btn-header" style="border-color: rgba(255,255,255,0.3);">Espace Client</a>
                <a href="#" class="btn btn-primary btn-header">Recharger</a>
            </div>

            <div class="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Le Meilleur du Sport et du Divertissement à Madagascar</h1>
            <p>Profitez de +100 chaînes, de la Ligue des Champions et des Séries Novelas. Décodeur complet dès 40 000 Ar.</p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                <a href="#pricing" class="btn btn-primary">Voir les Offres Spéciales</a>
                <a href="#" class="btn btn-secondary">Découvrir le Kit TNT</a>
            </div>
            <div class="hero-proof">
                <i class="fas fa-check-circle"></i>
                <span>Déjà 1 million d'abonnés nous font confiance.</span>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="trust-text">Paiement MVola / Orange / Airtel</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-shipping-fast"></i></div>
                    <div class="trust-text">Installation rapide 24h</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-headset"></i></div>
                    <div class="trust-text">Service Client Local 24/7</div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="trust-text">Garantie Satisfait</div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRICING SECTION -->
    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Des forfaits adaptés à votre budget</h2>
                <p>Prix clairs en Ariary. Aucun coût caché. Changez de formule quand vous voulez.</p>
            </div>

            <div class="pricing-grid">
                <!-- Basic Plan -->
                <div class="price-card">
                    <div class="plan-name">Basic</div>
                    <div class="plan-price">15 000 <span>Ar/mois</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> Chaînes Locales (TVM, etc)</li>
                        <li><i class="fas fa-check"></i> Infos Internationales</li>
                        <li><i class="fas fa-check"></i> Musique</li>
                    </ul>
                    <a href="#" class="btn btn-secondary btn-block" style="border-color: var(--color-primary); color: var(--color-primary);">Je m'abonne</a>
                </div>

                <!-- Smart Plan (Popular) -->
                <div class="price-card popular">
                    <div class="badge-popular">Le plus populaire</div>
                    <div class="plan-name">Smart</div>
                    <div class="plan-price">35 000 <span>Ar/mois</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> <strong>Tout le bouquet Basic</strong></li>
                        <li><i class="fas fa-check"></i> Séries Novelas Exclusives</li>
                        <li><i class="fas fa-check"></i> Dessins Animés (Nickelodeon)</li>
                        <li><i class="fas fa-check"></i> Sport Local & Africain</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block">Je m'abonne</a>
                </div>

                <!-- Super Plan -->
                <div class="price-card">
                    <div class="plan-name">Super</div>
                    <div class="plan-price">60 000 <span>Ar/mois</span></div>
                    <ul class="plan-features">
                        <li><i class="fas fa-check"></i> <strong>Tout le bouquet Smart</strong></li>
                        <li><i class="fas fa-check"></i> Football Ligue des Champions</li>
                        <li><i class="fas fa-check"></i> Documentaires HD</li>
                        <li><i class="fas fa-check"></i> Films Blockbusters</li>
                    </ul>
                    <a href="#" class="btn btn-secondary btn-block" style="border-color: var(--color-primary); color: var(--color-primary);">Je m'abonne</a>
                </div>
            </div>
        </div>
    </section>

    <!-- HARDWARE SECTION -->
    <section id="hardware">
        <div class="container">
            <div class="section-header">
                <h2>Quel décodeur choisir ?</h2>
                <p>Que vous soyez en centre-ville ou en brousse, nous avons la solution.</p>
            </div>

            <div class="hardware-split">
                <!-- TNT -->
                <div class="hw-item">
                    <div class="hw-bg" style="background-image: url('https://images.unsplash.com/photo-1593341646261-285627255452?q=80&w=1000&auto=format&fit=crop');"></div>
                    <div class="hw-overlay"></div>
                    <div class="hw-content">
                        <h3>Kit TNT (Antenne Râteau)</h3>
                        <p style="margin: 10px 0 20px;">Idéal pour Tana centre et grandes villes. Image numérique claire sans parabole.</p>
                        <h4 style="color: var(--color-highlight); margin-bottom: 20px;">Promo: 40 000 Ar</h4>
                        <a href="#" class="btn btn-secondary" style="padding: 10px 20px; font-size: 0.9rem;">Choisir la TNT</a>
                    </div>
                </div>

                <!-- Satellite -->
                <div class="hw-item">
                    <div class="hw-bg" style="background-image: url('https://images.unsplash.com/photo-1534224039826-c7a0eda0e6b3?q=80&w=1000&auto=format&fit=crop');"></div>
                    <div class="hw-overlay"></div>
                    <div class="hw-content">
                        <h3>Kit Satellite (Parabole)</h3>
                        <p style="margin: 10px 0 20px;">Couverture 100% Madagascar. Idéal zones éloignées et haute définition.</p>
                        <h4 style="color: var(--color-highlight); margin-bottom: 20px;">Promo: 50 000 Ar (Install. incluse)</h4>
                        <a href="#" class="btn btn-secondary" style="padding: 10px 20px; font-size: 0.9rem;">Choisir le Satellite</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- APP SECTION -->
    <div class="container">
        <section class="app-section" id="app">
            <div class="app-text">
                <h2>La TV partout avec vous</h2>
                <p style="margin: 20px 0; opacity: 0.9;">Ne ratez plus aucun but ! Regardez vos matchs en direct et vos séries préférées sur votre smartphone, même dans les embouteillages de Tana. Service gratuit pour tous les abonnés TV.</p>
                
                <div class="store-badges">
                    <a href="#" class="store-btn">
                        <i class="fab fa-google-play fa-2x"></i>
                        <div>
                            <small>Disponible sur</small><br><strong>Google Play</strong>
                        </div>
                    </a>
                    <a href="#" class="store-btn">
                        <i class="fab fa-apple fa-2x"></i>
                        <div>
                            <small>Télécharger sur</small><br><strong>App Store</strong>
                        </div>
                    </a>
                </div>
            </div>
            <div class="app-visual">
                <img src="https://images.unsplash.com/photo-1512428559087-560fa5ce7d87?q=80&w=1000&auto=format&fit=crop" alt="Startimes App" class="phone-mockup">
            </div>
        </section>
    </div>

    <!-- LOCATION SECTION -->
    <section id="locations" style="background: white;">
        <div class="container">
            <div class="section-header">
                <h2>Trouvez une boutique</h2>
                <p>Plus de 50 points de vente à Antananarivo et en province.</p>
            </div>

            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Entrez votre quartier (ex: 67ha, Analakely)...">
                <button class="search-btn-icon">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            
            <div style="margin-top: 40px; border-radius: 20px; overflow: hidden; height: 400px; background: #e2e8f0; position: relative;">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1500&auto=format&fit=crop" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6;" alt="Map Background">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 20px; border-radius: 10px; box-shadow: 0 10px 20px rgba(0,0,0,0.1); text-align: center;">
                    <i class="fas fa-map-marker-alt" style="color: var(--color-primary); font-size: 2rem; margin-bottom: 10px;"></i>
                    <h4>Agence Galaxy Andraharo</h4>
                    <p style="font-size: 0.9rem; color: var(--color-gray);">Ouvert de 8h à 17h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3 style="color: white; font-weight: 800; font-size: 1.5rem;">STARTIMES</h3>
                    <p>Le leader de la télévision numérique en Afrique. Divertissement abordable pour chaque famille malgache.</p>
                    <div style="margin-top: 20px; display: flex; gap: 15px;">
                        <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Aide & Support</h4>
                    <ul class="footer-links">
                        <li><a href="#">Comment recharger ?</a></li>
                        <li><a href="#">Activer mon décodeur</a></li>
                        <li><a href="#">Grille des programmes</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Entreprise</h4>
                    <ul class="footer-links">
                        <li><a href="#">Qui sommes-nous ?</a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Devenir distributeur</a></li>
                        <li><a href="#">Presse</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-phone-alt"></i> 034 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> support@startimes.mg</li>
                        <li><i class="fab fa-whatsapp"></i> +261 34 00 000 00</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Startimes Madagascar. Tous droits réservés. <a href="#">Mentions Légales</a></p>
            </div>
        </div>
    </footer>

    <!-- WHATSAPP FLOATING BTN -->
    <a href="https://wa.me/" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. GESTION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // Note: Le texte "PHO+RESTO" était dans la consigne, je l'ai adapté à "STARTIMES" 
        // pour la cohérence visuelle, tout en gardant la structure demandée.
        const LOGO_URL = "https://placehold.co/150x60/transparent/ffffff?text=STARTIMES";
        
        // Insertion du logo
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Startimes Logo" class="logo-img">`;
        }

        // --- 2. SCROLL HEADER EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                // Change logo text color to dark for contrast if needed via new URL logic
                // For simplicity in this single file, we keep white text or rely on CSS filters
                // Ideally we swap the logo source here for a dark version.
                const logoImg = document.querySelector('.logo-img');
                if(logoImg) logoImg.style.filter = "invert(1) brightness(0.2)"; 
            } else {
                header.classList.remove('scrolled');
                const logoImg = document.querySelector('.logo-img');
                if(logoImg) logoImg.style.filter = "none";
            }
        });

        // --- 3. MOBILE MENU TOGGLE ---
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');
        const headerActions = document.querySelector('.header-actions');

        mobileToggle.addEventListener('click', () => {
            // Simple toggle for demo purposes. 
            // In a real production env, we'd toggle a class on the header to show a full screen menu.
            const isMenuOpen = header.classList.contains('menu-open');
            
            if (!isMenuOpen) {
                header.classList.add('menu-open');
                // Create a mobile dropdown container if it doesn't exist
                let mobileMenu = document.getElementById('mobile-menu');
                if (!mobileMenu) {
                    mobileMenu = document.createElement('div');
                    mobileMenu.id = 'mobile-menu';
                    mobileMenu.style.cssText = `
                        position: absolute;
                        top: 100%;
                        left: 0;
                        width: 100%;
                        background: white;
                        padding: 20px;
                        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                        display: flex;
                        flex-direction: column;
                        gap: 15px;
                    `;
                    // Clone links
                    const linksClone = navLinks.cloneNode(true);
                    linksClone.style.display = 'flex';
                    linksClone.style.flexDirection = 'column';
                    linksClone.style.gap = '15px';
                    linksClone.querySelectorAll('a').forEach(a => {
                        a.style.color = 'var(--color-dark)';
                        a.addEventListener('click', () => {
                            mobileMenu.style.display = 'none';
                            header.classList.remove('menu-open');
                        });
                    });
                    
                    mobileMenu.appendChild(linksClone);
                    header.appendChild(mobileMenu);
                } else {
                    mobileMenu.style.display = 'flex';
                }
            } else {
                header.classList.remove('menu-open');
                const mobileMenu = document.getElementById('mobile-menu');
                if (mobileMenu) mobileMenu.style.display = 'none';
            }
        });

    </script>
</body>
</html>