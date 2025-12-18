<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reality Immobilier - Antananarivo</title>
    
    <!-- Google Fonts: Outfit (Titres) & Inter (Corps) pour un look moderne et structuré -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            /* Palette Client */
            --primary: #5EA9F0;      /* Bleu Ciel - Confiance */
            --primary-dark: #4a8bc9; /* Hover Primary */
            --secondary: #F2C6B4;    /* Pêche/Sable - Chaleur */
            --tertiary: #916A60;     /* Marron Glacé - Luxe/Terre */
            
            /* Neutres */
            --dark: #1e293b;
            --gray: #64748b;
            --light: #f8fafc;
            --white: #ffffff;
            
            /* UI Elements */
            --radius-sm: 8px;
            --radius-md: 16px;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            line-height: 1.2;
            color: var(--dark);
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- UTILITIES --- */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding { padding: 80px 0; }
        .text-center { text-align: center; }
        .flex { display: flex; }
        .grid { display: grid; }
        .hidden { display: none; }

        /* --- BUTTONS --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            border-radius: var(--radius-sm);
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: var(--transition);
            font-family: 'Outfit', sans-serif;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(94, 169, 240, 0.3);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--primary);
            border: 2px solid var(--white);
        }
        .btn-secondary:hover {
            background-color: transparent;
            color: var(--white);
        }

        .btn-outline {
            border: 2px solid var(--tertiary);
            color: var(--tertiary);
            background: transparent;
        }
        .btn-outline:hover {
            background: var(--tertiary);
            color: var(--white);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: transparent;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            padding: 15px 0;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 500;
            color: var(--white);
            font-size: 0.95rem;
        }

        header.scrolled .nav-links a { color: var(--dark); }
        .nav-links a:hover { color: var(--primary); }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 90vh; /* Immersive */
            min-height: 600px;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2671&auto=format&fit=crop'); /* Modern Villa High Quality */
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
        }

        .hero-content {
            color: var(--white);
            max-width: 800px;
            margin-top: -60px; /* Slight offset for visual balance */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 40px;
            max-width: 600px;
        }

        /* --- SEARCH BAR (The Key Feature) --- */
        .search-container {
            position: absolute;
            bottom: -50px; /* Overlap effect */
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1100px;
            z-index: 10;
        }

        .search-bar {
            background: var(--white);
            padding: 30px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-lg);
            display: grid;
            grid-template-columns: repeat(4, 1fr) auto;
            gap: 20px;
            align-items: end;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--tertiary);
            text-transform: uppercase;
        }

        .form-select, .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #e2e8f0;
            border-radius: var(--radius-sm);
            background-color: #f8fafc;
            color: var(--dark);
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
        }

        .form-select:focus, .form-input:focus {
            border-color: var(--primary);
            background-color: var(--white);
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            padding-top: 100px; /* Space for the floating search bar */
            padding-bottom: 40px;
            background-color: var(--light);
            text-align: center;
        }

        .trust-text {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .trust-logos {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }
        
        .trust-stat {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--tertiary);
        }

        /* --- FEATURED LISTINGS --- */
        .listings { background: var(--white); }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--dark);
        }
        
        .section-header h2 span { color: var(--primary); }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid #f1f5f9;
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .card-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }

        .card:hover .card-image img { transform: scale(1.05); }

        .tag {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: var(--secondary);
            color: var(--dark);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-body { padding: 25px; }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .card-location {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-specs {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f1f5f9;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.85rem;
            color: var(--tertiary);
            font-weight: 600;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
        }

        .btn-link {
            color: var(--dark);
            font-weight: 600;
            font-size: 0.9rem;
            border-bottom: 1px solid var(--secondary);
        }

        /* --- SERVICES --- */
        .services {
            background-color: #fff9f6; /* Very light secondary tint */
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .service-item {
            padding: 30px;
            background: var(--white);
            border-radius: var(--radius-md);
            transition: var(--transition);
        }
        
        .service-item:hover {
            box-shadow: 0 10px 30px rgba(145, 106, 96, 0.1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(145, 106, 96, 0.1);
            color: var(--tertiary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .service-item h3 { margin-bottom: 15px; }
        .service-item p { color: var(--gray); font-size: 0.95rem; }

        /* --- ABOUT --- */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img {
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .about-content h2 { margin-bottom: 25px; color: var(--tertiary); }
        .about-content p { margin-bottom: 25px; color: var(--gray); font-size: 1.05rem; }

        /* --- LEAD MAGNET --- */
        .estimate {
            background-color: var(--primary);
            color: var(--white);
            text-align: center;
        }

        .estimate h2 { color: var(--white); margin-bottom: 15px; }
        .estimate p { opacity: 0.9; margin-bottom: 30px; font-size: 1.1rem; }

        /* --- FOOTER --- */
        footer {
            background-color: var(--dark);
            color: #94a3b8;
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            filter: brightness(0) invert(1);
            opacity: 0.8;
            height: 40px;
            margin-bottom: 20px;
        }

        .footer-col h4 { color: var(--white); margin-bottom: 20px; font-size: 1.1rem; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a:hover { color: var(--primary); }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.85rem;
        }

        /* --- EXTRAS --- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 2000;
            transition: var(--transition);
        }
        .whatsapp-float:hover { transform: scale(1.1); }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .search-bar { grid-template-columns: 1fr 1fr; }
            .search-bar .btn { grid-column: span 2; }
            .about-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .search-container { position: relative; bottom: 0; transform: none; left: 0; margin: -50px auto 0; width: 95%; }
            .search-bar { grid-template-columns: 1fr; padding: 20px; }
            .search-bar .btn { grid-column: span 1; }
            .trust-bar { padding-top: 40px; }
            .nav-links { display: none; } /* Mobile Menu implementation omitted for brevity, stick to core request */
            .footer-grid { grid-template-columns: 1fr; }
            .section-header { flex-direction: column; align-items: flex-start; gap: 20px; }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container nav-wrapper">
            <!-- LOGO PLACEHOLDER -->
            <img src="" alt="Reality Immobilier Logo" class="logo-img logo-container">
            <!-- Instructions pour le client : Coller le lien du logo dans le JS en bas -->

            <nav>
                <ul class="nav-links">
                    <li><a href="#listings">Vente</a></li>
                    <li><a href="#listings">Location</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">Agence</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 20px; margin-left: 10px;">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>L'Immobilier à Antananarivo : Trouvez Votre Bien Idéal en Toute Confiance.</h1>
                <p>Accédez au catalogue le plus complet de biens à la vente et à la location. Filtrez par quartier, budget et type en un clic.</p>
            </div>
        </div>
    </section>

    <!-- SEARCH BAR (STICKY/FLOATING) -->
    <div class="search-container">
        <form class="search-bar">
            <div class="form-group">
                <label>J'aimerais</label>
                <select class="form-select">
                    <option>Louer</option>
                    <option>Acheter</option>
                </select>
            </div>
            <div class="form-group">
                <label>Type de bien</label>
                <select class="form-select">
                    <option>Maison / Villa</option>
                    <option>Appartement</option>
                    <option>Terrain</option>
                    <option>Bureau</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quartier (Tana)</label>
                <select class="form-select">
                    <option>Ivandry</option>
                    <option>Ambatobe</option>
                    <option>Analakely</option>
                    <option>Ankorondrano</option>
                </select>
            </div>
            <div class="form-group">
                <label>Budget Max (Ar)</label>
                <input type="text" class="form-input" placeholder="ex: 2 000 000">
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fa-solid fa-search" style="margin-right:8px;"></i> Rechercher
            </button>
        </form>
    </div>

    <!-- TRUST BAR -->
    <section class="trust-bar" id="trust">
        <div class="container">
            <p class="trust-text">Ils nous font confiance pour leur logement</p>
            <div class="trust-logos">
                <span class="trust-stat">BNI MADAGASCAR</span>
                <span class="trust-stat">AMBATIOVY</span>
                <span class="trust-stat">ORANGE MADA</span>
                <span class="trust-stat">+50 BIENS VENDUS CETTE ANNÉE</span>
            </div>
        </div>
    </section>

    <!-- FEATURED LISTINGS -->
    <section class="section-padding listings" id="listings">
        <div class="container">
            <div class="section-header">
                <h2>Nos Dernières <span>Opportunités</span> à Saisir</h2>
                <a href="#" class="btn btn-outline">Voir tout le catalogue</a>
            </div>

            <div class="cards-grid">
                <!-- CARD 1 -->
                <article class="card">
                    <div class="card-image">
                        <span class="tag">LOCATION</span>
                        <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?q=80&w=2574&auto=format&fit=crop" alt="Villa Ambatobe">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Villa 4 pièces - Ambatobe</h3>
                        <div class="card-location"><i class="fa-solid fa-map-marker-alt"></i> Ambatobe, Antananarivo</div>
                        <div class="card-specs">
                            <span class="spec-item"><i class="fa-solid fa-bed"></i> 3</span>
                            <span class="spec-item"><i class="fa-solid fa-bath"></i> 2</span>
                            <span class="spec-item"><i class="fa-solid fa-ruler-combined"></i> 150m²</span>
                        </div>
                        <div class="card-footer">
                            <span class="price">3.5M Ar<small style="font-size:0.8rem; color:#64748b; font-weight:400">/mois</small></span>
                            <a href="#" class="btn-link">Voir le détail</a>
                        </div>
                    </div>
                </article>

                <!-- CARD 2 -->
                <article class="card">
                    <div class="card-image">
                        <span class="tag" style="background:#5EA9F0; color:white;">VENTE</span>
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2653&auto=format&fit=crop" alt="Appartement Ivandry">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Appartement Standing - Ivandry</h3>
                        <div class="card-location"><i class="fa-solid fa-map-marker-alt"></i> Ivandry, Antananarivo</div>
                        <div class="card-specs">
                            <span class="spec-item"><i class="fa-solid fa-bed"></i> 2</span>
                            <span class="spec-item"><i class="fa-solid fa-bath"></i> 1</span>
                            <span class="spec-item"><i class="fa-solid fa-parking"></i> 1</span>
                        </div>
                        <div class="card-footer">
                            <span class="price">450M Ar</span>
                            <a href="#" class="btn-link">Voir le détail</a>
                        </div>
                    </div>
                </article>

                <!-- CARD 3 -->
                <article class="card">
                    <div class="card-image">
                        <span class="tag">LOCATION</span>
                        <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?q=80&w=2670&auto=format&fit=crop" alt="Maison Analamahitsy">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Maison avec Jardin - Analamahitsy</h3>
                        <div class="card-location"><i class="fa-solid fa-map-marker-alt"></i> Analamahitsy, Antananarivo</div>
                        <div class="card-specs">
                            <span class="spec-item"><i class="fa-solid fa-bed"></i> 4</span>
                            <span class="spec-item"><i class="fa-solid fa-tree"></i> Jardin</span>
                            <span class="spec-item"><i class="fa-solid fa-shield-alt"></i> Sécurisé</span>
                        </div>
                        <div class="card-footer">
                            <span class="price">2.8M Ar<small style="font-size:0.8rem; color:#64748b; font-weight:400">/mois</small></span>
                            <a href="#" class="btn-link">Voir le détail</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section-padding services" id="services">
        <div class="container">
            <div class="text-center" style="margin-bottom:60px;">
                <h2>Pourquoi passer par Reality Immobilier ?</h2>
            </div>
            
            <div class="services-grid">
                <div class="service-item">
                    <div class="icon-box"><i class="fa-solid fa-bullseye"></i></div>
                    <h3>Recherche Ciblée</h3>
                    <p>Ne perdez plus de temps. Nos filtres avancés et notre connaissance du terrain vous mènent droit au bien qui vous correspond à Tana.</p>
                </div>
                <div class="service-item">
                    <div class="icon-box"><i class="fa-regular fa-eye"></i></div>
                    <h3>Transparence Totale</h3>
                    <p>Pas de frais cachés, des fiches détaillées, des prix clairs et des photos réelles. Finies les mauvaises surprises lors des visites.</p>
                </div>
                <div class="service-item">
                    <div class="icon-box"><i class="fa-solid fa-house-user"></i></div>
                    <h3>Gestion Locative</h3>
                    <p>Propriétaires, nous gérons vos biens à Tana de A à Z (loyers, entretien, sécurité). Idéal pour la diaspora.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT / EXPERTISE -->
    <section class="section-padding" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <h2>L'Expertise Locale à votre Service</h2>
                    <p>Une agence née à Antananarivo pour moderniser le marché immobilier. Nous connaissons chaque ruelle d'Ivandry, les hauteurs d'Ambatobe et le dynamisme du Centre Ville.</p>
                    <p>Notre mission : Sécuriser vos transactions et faciliter votre installation, que vous veniez de l'étranger ou d'un autre quartier.</p>
                    <a href="#" class="btn btn-primary">Découvrir notre agence</a>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2670&auto=format&fit=crop" alt="Équipe Reality Immobilier">
                </div>
            </div>
        </div>
    </section>

    <!-- LEAD MAGNET -->
    <section class="section-padding estimate" id="estimate">
        <div class="container">
            <h2>Vous êtes propriétaire à Tana ?</h2>
            <p>Obtenez une estimation gratuite et précise de la valeur de votre bien en 24h.</p>
            <a href="#" class="btn btn-secondary">ESTIMER MON BIEN</a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <img src="" alt="Logo Footer" class="footer-logo logo-container">
                    <p>L'immobilier nouvelle génération à Madagascar.</p>
                </div>
                <div class="footer-col">
                    <h4>Biens populaires</h4>
                    <ul>
                        <li><a href="#">Vente Appartement Tana</a></li>
                        <li><a href="#">Location Villa Ivandry</a></li>
                        <li><a href="#">Terrains à vendre</a></li>
                        <li><a href="#">Bureaux Centre Ville</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>L'Agence</h4>
                    <ul>
                        <li><a href="#">Qui sommes-nous</a></li>
                        <li><a href="#">Nos Services</a></li>
                        <li><a href="#">Recrutement</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fa-solid fa-map-marker-alt"></i> Rue Dr Raseta, Ivandry, Antananarivo</li>
                        <li><i class="fa-solid fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fa-solid fa-envelope"></i> contact@reality.mg</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Reality Immobilier. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WHATSAPP FLOATING BUTTON -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank" title="Discuter avec un agent">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- SCRIPT -->
    <script>
        // --- GESTION DU LOGO (VARIABLE OBLIGATOIRE) ---
        // INSTRUCTION CLIENT : Remplacez l'URL ci-dessous par le lien de votre propre logo
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Application du logo
        document.querySelectorAll('.logo-container').forEach(img => {
            img.src = LOGO_URL;
        });

        // --- STICKY NAVBAR EFFECT ---
        const header = document.getElementById('header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- SCROLL REVEAL (Simple) ---
        // Ajoute une petite animation d'apparition pour les éléments
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        // Applique l'observateur aux cartes et sections
        document.querySelectorAll('.card, .service-item, .about-content').forEach(el => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>