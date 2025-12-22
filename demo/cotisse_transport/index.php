<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotisse Transport | Excellence & Confort à Madagascar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #D1121B; /* Cotisse Red */
            --primary-dark: #a50e15;
            --text-dark: #0f172a;
            --text-light: #64748b;
            --white: #ffffff;
            --off-white: #f8fafc;
            --border: #e2e8f0;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 24px;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --container: 1280px;
            --font-sans: 'Manrope', sans-serif;
            --font-serif: 'Playfair Display', serif;
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-sans);
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        a { text-decoration: none; color: inherit; transition: 0.3s ease; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }
        
        .container {
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 24px;
        }

        /* TYPOGRAPHY */
        h1, h2, h3, h4 { letter-spacing: -0.02em; line-height: 1.2; }
        h1 { font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; color: var(--white); }
        h2 { font-size: clamp(2rem, 4vw, 3rem); font-family: var(--font-serif); font-weight: 600; margin-bottom: 1rem; }
        h3 { font-size: 1.5rem; font-weight: 700; }
        p { font-size: 1.125rem; color: var(--text-light); }

        /* UTILS */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            font-weight: 700;
            border-radius: 50px;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.05em;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 10px 20px rgba(209, 18, 27, 0.3);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(209, 18, 27, 0.4);
        }
        .btn-outline {
            background: transparent;
            border: 2px solid var(--text-dark);
            color: var(--text-dark);
        }
        .btn-outline:hover {
            background: var(--text-dark);
            color: var(--white);
        }

        .text-primary { color: var(--primary); }
        .bg-gray { background-color: var(--off-white); }
        
        /* HEADER & NAV */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            padding: 20px 0;
        }
        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: var(--shadow-sm);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img {
            height: 50px;
            width: auto;
        }
        .nav-links { display: flex; gap: 40px; }
        .nav-links a {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--white);
            position: relative;
        }
        header.scrolled .nav-links a { color: var(--text-dark); }
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: 0.3s;
        }
        .nav-links a:hover::after { width: 100%; }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            min-height: 700px;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 80px; /* Offset for fixed header */
        }
        .hero-content {
            max-width: 800px;
            color: var(--white);
            animation: fadeUp 1s ease-out;
        }
        .hero p { color: rgba(255, 255, 255, 0.9); font-size: 1.25rem; margin: 24px 0 40px; max-width: 600px; }

        /* BOOKING ENGINE */
        .booking-wrapper {
            position: relative;
            z-index: 100;
            margin-top: -80px;
            padding-bottom: 80px;
        }
        .booking-engine {
            background: var(--white);
            padding: 30px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            display: grid;
            grid-template-columns: repeat(4, 1fr) auto;
            gap: 20px;
            align-items: end;
        }
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 8px;
            text-transform: uppercase;
        }
        .form-control {
            width: 100%;
            padding: 16px;
            background: var(--off-white);
            border: 1px solid transparent;
            border-radius: var(--radius-md);
            font-family: var(--font-sans);
            font-size: 1rem;
            font-weight: 600;
            transition: 0.3s;
        }
        .form-control:focus {
            outline: none;
            background: var(--white);
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(209, 18, 27, 0.1);
        }
        
        /* SOCIAL PROOF */
        .features-bar {
            padding: 40px 0 80px;
            border-bottom: 1px solid var(--border);
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .icon-box {
            width: 50px;
            height: 50px;
            background: rgba(209, 18, 27, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
        .feature-text h4 { font-size: 1rem; font-weight: 700; margin-bottom: 2px; }
        .feature-text span { font-size: 0.85rem; color: var(--text-light); }

        /* DESTINATIONS */
        .section-padding { padding: 100px 0; }
        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }
        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }
        .card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border);
            transition: all 0.4s ease;
            position: relative;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: transparent;
        }
        .card-img {
            height: 250px;
            width: 100%;
            position: relative;
        }
        .card-img img { height: 100%; width: 100%; object-fit: cover; }
        .badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--white);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            box-shadow: var(--shadow-sm);
        }
        .card-body { padding: 30px; }
        .route {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 1.1rem;
        }
        .price-tag {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 20px;
            display: block;
        }
        .card-meta {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid var(--border);
            padding-top: 20px;
            margin-top: 20px;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        /* FLEET EXPERIENCE */
        .split-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 60px;
        }
        .split-image {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }
        .split-image img { height: 100%; width: 100%; transition: 0.5s; }
        .split-image:hover img { transform: scale(1.05); }
        .features-list { margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .check-item { display: flex; align-items: center; gap: 10px; font-weight: 600; }
        .check-item svg { color: var(--primary); width: 20px; }

        /* STATION / ABOUT */
        .station-section {
            background-color: var(--text-dark);
            color: var(--white);
            padding: 100px 0;
        }
        .station-section h2, .station-section p { color: var(--white); }
        .station-section p { opacity: 0.8; }

        /* FAQ */
        .faq-item {
            border-bottom: 1px solid var(--border);
            padding: 24px 0;
        }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 700;
            font-size: 1.1rem;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: var(--text-light);
        }
        .faq-answer p { margin-top: 15px; }
        .faq-item.active .faq-answer { max-height: 200px; }
        .faq-toggle { transition: 0.3s; }
        .faq-item.active .faq-toggle { transform: rotate(180deg); }

        /* FOOTER */
        footer {
            background: #111;
            color: #fff;
            padding: 80px 0 40px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        .footer-col h4 { margin-bottom: 24px; font-size: 1.1rem; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #888; }
        .footer-links a:hover { color: var(--white); padding-left: 5px; }
        .copyright {
            border-top: 1px solid #333;
            padding-top: 40px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* ANIMATION UTILS */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .booking-engine {
                grid-template-columns: 1fr 1fr;
            }
            .booking-btn-container {
                grid-column: span 2;
            }
        }
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .hero { align-items: flex-end; padding-bottom: 120px; }
            .split-section { grid-template-columns: 1fr; }
            .booking-engine {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 20px;
            }
            .booking-btn-container { grid-column: span 1; }
            .nav-links { display: none; } /* Mobile menu simplified for single file */
            .logo img { height: 40px; }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="navbar">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <img id="main-logo" src="" alt="Cotisse Transport">
                </a>
                <ul class="nav-links">
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#experience">L'Expérience</a></li>
                    <li><a href="#station">Gare Ambodivona</a></li>
                    <li><a href="#faq">Infos Pratiques</a></li>
                </ul>
                <a href="#booking" class="btn btn-primary" style="padding: 12px 24px;">Réserver</a>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>La Référence du Transport Premium à Madagascar.</h1>
                <h2>Ponctualité et Confort Garantis.</h2>
                <p>Voyagez l'esprit tranquille vers Toamasina, Mahajanga et tout le pays à bord de notre flotte Mercedes Sprinter dernière génération.</p>
                <a href="#booking" class="btn btn-primary">Réserver mon départ</a>
            </div>
        </div>
    </section>

    <!-- BOOKING ENGINE -->
    <div class="booking-wrapper" id="booking">
        <div class="container">
            <div class="booking-engine reveal">
                <div class="form-group">
                    <label>Départ</label>
                    <select class="form-control">
                        <option>Antananarivo</option>
                        <option>Toamasina</option>
                        <option>Mahajanga</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Arrivée</label>
                    <select class="form-control">
                        <option>Toamasina</option>
                        <option>Mahajanga</option>
                        <option>Morondava</option>
                        <option>Fianarantsoa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label>Passagers</label>
                    <select class="form-control">
                        <option>1 Passager</option>
                        <option>2 Passagers</option>
                        <option>3 Passagers</option>
                        <option>4+ Passagers</option>
                    </select>
                </div>
                <div class="booking-btn-container">
                    <button class="btn btn-primary" style="width: 100%; height: 54px;">Voir Horaires</button>
                </div>
            </div>

            <!-- SOCIAL PROOF BAR -->
            <div class="features-bar reveal">
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <div class="feature-text">
                            <h4>Départs fixes</h4>
                            <span>Ponctualité garantie</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="6" width="22" height="12" rx="2"></rect><path d="M6 18v2"></path><path d="M18 18v2"></path><circle cx="12" cy="12" r="2"></circle></svg>
                        </div>
                        <div class="feature-text">
                            <h4>Flotte Premium</h4>
                            <span>Mercedes Sprinter</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <div class="feature-text">
                            <h4>Sécurité Totale</h4>
                            <span>Gare Ambodivona</span>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                        </div>
                        <div class="feature-text">
                            <h4>Wi-Fi à bord</h4>
                            <span>Restez connecté</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DESTINATIONS -->
    <section id="destinations" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header reveal">
                <h3>Nos lignes populaires</h3>
                <h2>Vos prochaines destinations au meilleur prix.</h2>
                <p>Découvrez les merveilles de Madagascar avec un confort inégalé.</p>
            </div>
            
            <div class="destinations-grid">
                <!-- Card 1 -->
                <div class="card reveal">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?q=80&w=2071&auto=format&fit=crop" alt="Route Toamasina">
                        <span class="badge">Le Plus Vendu</span>
                    </div>
                    <div class="card-body">
                        <div class="route">
                            <span>Tana</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            <span>Toamasina</span>
                        </div>
                        <span class="price-tag">dès 25 000 Ar</span>
                        <p>Route nationale 2. Plages et cocotiers vous attendent.</p>
                        <div class="card-meta">
                            <span><svg style="vertical-align:middle; width:16px; margin-right:5px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 7h estimées</span>
                            <span>Départs quotidiens</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card reveal" style="transition-delay: 0.1s;">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1565611100342-9988229b4787?q=80&w=2070&auto=format&fit=crop" alt="Route Mahajanga">
                        <span class="badge">Premium</span>
                    </div>
                    <div class="card-body">
                        <div class="route">
                            <span>Tana</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            <span>Mahajanga</span>
                        </div>
                        <span class="price-tag">dès 35 000 Ar</span>
                        <p>Direction le soleil de l'Ouest et la cité des fleurs.</p>
                        <div class="card-meta">
                            <span><svg style="vertical-align:middle; width:16px; margin-right:5px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 10h estimées</span>
                            <span>Classe VIP dispo</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card reveal" style="transition-delay: 0.2s;">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1516116854593-376518771964?q=80&w=2070&auto=format&fit=crop" alt="Route Morondava">
                    </div>
                    <div class="card-body">
                        <div class="route">
                            <span>Tana</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            <span>Morondava</span>
                        </div>
                        <span class="price-tag">dès 45 000 Ar</span>
                        <p>L'aventure vers l'allée des Baobabs commence ici.</p>
                        <div class="card-meta">
                            <span><svg style="vertical-align:middle; width:16px; margin-right:5px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 12h estimées</span>
                            <span>Confort Max</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir toutes les destinations</a>
            </div>
        </div>
    </section>

    <!-- EXPERIENCE -->
    <section id="experience" class="section-padding">
        <div class="container">
            <div class="split-section">
                <div class="split-image reveal">
                    <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?q=80&w=2071&auto=format&fit=crop" alt="Intérieur Bus Cotisse">
                </div>
                <div class="split-content reveal">
                    <h3>Classe Affaires sur route</h3>
                    <h2>Plus qu'un voyage, une expérience exceptionnelle.</h2>
                    <p>Oubliez la fatigue des trajets classiques. Nous avons repensé chaque détail pour faire de votre voyage un moment de détente.</p>
                    
                    <div class="features-list">
                        <div class="check-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Climatisation
                        </div>
                        <div class="check-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Sièges inclinables
                        </div>
                        <div class="check-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Prises USB
                        </div>
                        <div class="check-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            Suivi GPS
                        </div>
                    </div>
                    <div style="margin-top: 40px;">
                        <a href="#booking" class="btn btn-primary">Réserver mon siège</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATION / ABOUT -->
    <section id="station" class="station-section">
        <div class="container">
            <div class="split-section">
                <div class="split-content reveal">
                    <h3 class="text-primary">Gare Privée</h3>
                    <h2>L'Excellence au départ d'Ambodivona.</h2>
                    <p>Cotisse Transport révolutionne le transport terrestre avec sa gare privée : salle d'attente VIP, snack, toilettes propres et guichets organisés. Fini le chaos, place à la sérénité.</p>
                    <p style="margin-top: 20px;">Profitez d'un café avant votre départ dans un environnement sécurisé et surveillé 24h/24.</p>
                </div>
                <div class="split-image reveal">
                    <img src="https://images.unsplash.com/photo-1563823267926-788b14a87a25?q=80&w=2070&auto=format&fit=crop" alt="Gare Moderne">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding bg-gray">
        <div class="container" style="max-width: 800px;">
            <div class="section-header reveal">
                <h2>Questions Fréquentes</h2>
            </div>
            
            <div class="faq-container reveal">
                <div class="faq-item active">
                    <div class="faq-question">
                        Les départs sont-ils vraiment à l'heure ?
                        <svg class="faq-toggle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Absolument. C'est notre engagement n°1. Les portes ferment 5 minutes avant l'heure indiquée et le bus part à la minute près.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Puis-je choisir ma place ?
                        <svg class="faq-toggle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Oui, lors de votre réservation (en ligne ou au guichet), vous pouvez sélectionner votre siège sur le plan du véhicule.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Politique bagages ?
                        <svg class="faq-toggle" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Chaque billet inclut 20kg de bagages en soute sécurisée et un bagage à main. Les excédents sont possibles moyennant un supplément.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img id="footer-logo" src="" alt="Cotisse Logo" style="height: 40px; margin-bottom: 20px; filter: grayscale(1) brightness(100);">
                    <p style="color: #888; font-size: 0.9rem;">Le leader du transport premium à Madagascar. Voyagez mieux, voyagez sûr.</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#booking">Réserver</a></li>
                        <li><a href="#destinations">Nos Destinations</a></li>
                        <li><a href="#station">Notre Gare</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-links">
                        <li>Gare Routière Ambodivona</li>
                        <li>Antananarivo, Madagascar</li>
                        <li>+261 34 00 000 00</li>
                        <li>contact@cotisse.mg</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <ul class="footer-links">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Cotisse Transport. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // CONFIGURATION
        const LOGO_URL = "logo.jpg";
        
        // INIT
        document.addEventListener('DOMContentLoaded', () => {
            // Set Logos
            document.getElementById('main-logo').src = LOGO_URL;
            document.getElementById('footer-logo').src = LOGO_URL;

            // Scroll Effect for Navbar
            const header = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // FAQ Logic
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                item.querySelector('.faq-question').addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });

            // Intersection Observer for Animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>