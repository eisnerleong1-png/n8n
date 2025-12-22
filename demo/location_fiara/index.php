<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Fiara | Location de Voitures Premium à Antananarivo</title>
    <meta name="description" content="Explorez Antananarivo avec nos véhicules fiables et économiques. Location 4x4, citadines et minibus à Madagascar. Transparence et sécurité garanties.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary: #6FA2CA; /* Bleu doux */
            --primary-dark: #5587af;
            --dark: #252B31; /* Gris foncé/Noir */
            --light-bg: #F4F6F8;
            --accent-bg: #C4CAD1;
            --white: #ffffff;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 10px 30px rgba(37, 43, 49, 0.08);
            --shadow-lg: 0 20px 40px rgba(37, 43, 49, 0.12);
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
            color: var(--dark);
            line-height: 1.6;
            background-color: var(--white);
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- UTILS --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 2px solid var(--primary);
            box-shadow: 0 4px 15px rgba(111, 162, 202, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--dark);
            border: 2px solid var(--dark);
        }

        .btn-outline:hover {
            background-color: var(--dark);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* --- TYPOGRAPHY --- */
        h1, h2, h3, h4 {
            font-weight: 700;
            line-height: 1.2;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }

        h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            margin-bottom: 16px;
            letter-spacing: -0.01em;
        }

        p.subtitle {
            font-size: 1.125rem;
            color: #5A6672;
            max-width: 600px;
            margin: 0 auto 40px auto;
        }

        .section-title-wrapper {
            margin-bottom: 60px;
            text-align: center;
        }

        /* --- HEADER --- */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: transparent;
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: var(--shadow-sm);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px;
            width: auto;
            /* Placeholder style if image fails, though we rely on const */
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--white);
            position: relative;
            opacity: 0.9;
            transition: 0.3s;
        }

        .header.scrolled .nav-link {
            color: var(--dark);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .header.scrolled .mobile-toggle {
            color: var(--dark);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            /* Image: SUV on road/nature - Premium feel */
            background-image: url('https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax feel */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(37,43,49,0.7) 0%, rgba(37,43,49,0.5) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--white);
            max-width: 800px;
            /* Prevent overlap with header on mobile */
            margin-top: 80px; 
        }

        .hero-subtitle {
            font-size: clamp(1.1rem, 2vw, 1.25rem);
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
            max-width: 600px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
            position: relative;
            z-index: 10;
            margin-top: -5px; /* Seal the gap */
        }

        .trust-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .trust-text {
            font-weight: 600;
            color: var(--dark);
            font-size: 1.1rem;
        }

        .stars {
            color: #FFC107;
            font-size: 1.2rem;
            display: flex;
            gap: 5px;
        }

        /* --- FLEET SECTION --- */
        .fleet {
            background-color: var(--light-bg);
        }

        .fleet-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .fleet-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .fleet-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .card-image {
            height: 250px;
            width: 100%;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .fleet-card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 30px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-tag {
            display: inline-block;
            background-color: #E8F1F8;
            color: var(--primary-dark);
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
            width: fit-content;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .card-desc {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .card-features {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            font-size: 0.9rem;
            color: #555;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .price-area {
            margin-top: auto;
            border-top: 1px solid #eee;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price-label {
            font-size: 0.85rem;
            color: #888;
        }

        .price-val {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--dark);
        }

        .price-currency {
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* --- VALUE PROPS --- */
        .features-section {
            background-color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-box {
            padding: 40px;
            border-radius: 24px;
            background-color: var(--light-bg);
            transition: var(--transition);
        }

        .feature-box:hover {
            background-color: #fff;
            box-shadow: var(--shadow-md);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: var(--primary);
            border-radius: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--white);
            font-size: 1.5rem;
            margin-bottom: 24px;
        }

        .feature-box h3 {
            margin-bottom: 16px;
            font-size: 1.25rem;
        }

        /* --- ABOUT --- */
        .about-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            background-color: var(--dark);
            color: var(--white);
            overflow: hidden;
        }

        .about-image {
            height: 100%;
            min-height: 500px;
            position: relative;
        }
        
        .about-image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .about-content {
            padding: 80px 60px 80px 0;
        }
        
        .about-content h2 { color: var(--white); }
        .about-content p { color: #ccc; margin-bottom: 30px; font-size: 1.1rem; }

        /* --- TESTIMONIALS --- */
        .testimonials {
            background-color: #F4F6F8;
        }

        .review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .review-card {
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            position: relative;
            box-shadow: var(--shadow-sm);
        }

        .quote-icon {
            position: absolute;
            top: 30px;
            right: 30px;
            color: #E0E4E8;
            font-size: 3rem;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 20px;
        }

        .reviewer-avatar {
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* --- FAQ --- */
        .faq {
            background-color: var(--white);
        }

        .faq-item {
            border-bottom: 1px solid #eee;
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-question {
            padding: 24px 0;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question::after {
            content: '+';
            font-weight: 300;
            font-size: 1.5rem;
            color: var(--primary);
            transition: 0.3s;
        }

        .faq-item.active .faq-question::after {
            content: '-';
            transform: rotate(180deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: #666;
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-bottom: 24px;
        }

        /* --- FOOTER --- */
        .footer {
            background-color: var(--dark);
            color: var(--white);
            padding-top: 80px;
            padding-bottom: 100px; /* Space for sticky CTA */
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer h4 { margin-bottom: 20px; font-size: 1.2rem; }
        .footer ul li { margin-bottom: 12px; }
        .footer a { color: #aaa; transition: 0.3s; }
        .footer a:hover { color: var(--primary); }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* --- STICKY MOBILE CTA --- */
        .sticky-mobile-cta {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            width: 90%;
            max-width: 400px;
            background-color: var(--white);
            padding: 10px;
            border-radius: 50px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            justify-content: space-between;
            display: none; /* Shown via media query */
            animation: slideUp 0.5s ease;
        }

        @keyframes slideUp {
            from { bottom: -100px; opacity: 0; }
            to { bottom: 20px; opacity: 1; }
        }

        .sticky-price {
            padding-left: 20px;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--dark);
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        
        .sticky-price span {
            font-size: 0.7rem;
            color: #888;
            font-weight: 400;
        }

        .sticky-btn {
            background-color: #25D366; /* WhatsApp Green */
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            .about-section {
                grid-template-columns: 1fr;
            }
            .about-image {
                min-height: 300px;
                order: -1;
            }
            .about-content {
                padding: 40px 24px;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--white);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.4s;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-link { color: var(--dark); font-size: 1.2rem; }
            .mobile-toggle { display: block; z-index: 1001; }
            
            .sticky-mobile-cta { display: flex; }
            
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            
            .hero-content {
                margin-top: 60px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
               <img id="logo-el" src="" alt="Location Fiara" class="logo-img">
            </a>
            
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#flotte" class="nav-link">Véhicules</a></li>
                    <li><a href="#avantages" class="nav-link">Avantages</a></li>
                    <li><a href="#propos" class="nav-link">À Propos</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>

            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>Explorez Antananarivo<br>en toute liberté</h1>
            <p class="hero-subtitle">Évitez les surprises. Des véhicules parfaitement entretenus et des tarifs transparents pour vos séjours touristiques ou professionnels à Madagascar.</p>
            <a href="#flotte" class="btn btn-primary">Voir les véhicules <i class="fas fa-arrow-right" style="margin-left: 8px;"></i></a>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="trust-text">Plus de 500 voyageurs satisfaits nous font confiance.</div>
        </div>
    </div>

    <!-- Fleet Section -->
    <section class="section-padding fleet" id="flotte">
        <div class="container">
            <div class="section-title-wrapper">
                <h2>Notre Flotte</h2>
                <p class="subtitle">Des véhicules adaptés à la ville et aux pistes de Madagascar.</p>
            </div>

            <div class="fleet-grid">
                <!-- Card 1: Citadine -->
                <div class="fleet-card">
                    <div class="card-image">
                        <!-- Unsplash: City Car -->
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?q=80&w=800&auto=format&fit=crop" alt="Citadine Compacte">
                    </div>
                    <div class="card-body">
                        <span class="card-tag">Économique</span>
                        <h3 class="card-title">Citadine Compacte</h3>
                        <p class="card-desc">Idéal pour Tana centre. Facile à garer et faible consommation.</p>
                        <div class="card-features">
                            <div class="feature-item"><i class="fas fa-user"></i> 4</div>
                            <div class="feature-item"><i class="fas fa-suitcase"></i> 2</div>
                            <div class="feature-item"><i class="fas fa-gas-pump"></i> Essence</div>
                        </div>
                        <div class="price-area">
                            <div class="price-label">À partir de</div>
                            <div class="price-wrapper">
                                <span class="price-val">60 000</span> <span class="price-currency">MGA/j</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: SUV 4x4 -->
                <div class="fleet-card">
                    <div class="card-image">
                        <!-- Unsplash: SUV/4x4 -->
                        <img src="https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?q=80&w=800&auto=format&fit=crop" alt="SUV 4x4 Aventure">
                    </div>
                    <div class="card-body">
                        <span class="card-tag" style="background-color: #FFF3CD; color: #856404;">Recommandé</span>
                        <h3 class="card-title">SUV 4x4 Aventure</h3>
                        <p class="card-desc">Pour la route nationale et la piste. Confort et robustesse garantis.</p>
                        <div class="card-features">
                            <div class="feature-item"><i class="fas fa-user"></i> 5</div>
                            <div class="feature-item"><i class="fas fa-suitcase"></i> 4</div>
                            <div class="feature-item"><i class="fas fa-cogs"></i> 4x4</div>
                        </div>
                        <div class="price-area">
                            <div class="price-label">À partir de</div>
                            <div class="price-wrapper">
                                <span class="price-val">150 000</span> <span class="price-currency">MGA/j</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Minibus -->
                <div class="fleet-card">
                    <div class="card-image">
                        <!-- Unsplash: Van/Minibus -->
                        <img src="https://images.unsplash.com/photo-1556105315-46740683a6b8?q=80&w=800&auto=format&fit=crop" alt="Minibus Familial">
                    </div>
                    <div class="card-body">
                        <span class="card-tag">Groupe</span>
                        <h3 class="card-title">Minibus / 7 Places</h3>
                        <p class="card-desc">Transport touristique spacieux pour les familles ou groupes d'amis.</p>
                        <div class="card-features">
                            <div class="feature-item"><i class="fas fa-user"></i> 7-9</div>
                            <div class="feature-item"><i class="fas fa-suitcase"></i> 6+</div>
                            <div class="feature-item"><i class="fas fa-snowflake"></i> Clim</div>
                        </div>
                        <div class="price-area">
                            <div class="price-label">Tarif</div>
                            <div class="price-wrapper">
                                <span class="price-val">Sur Devis</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 60px;">
                <a href="#contact" class="btn btn-outline">Demander un devis personnalisé</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section-padding features-section" id="avantages">
        <div class="container">
            <div class="section-title-wrapper">
                <h2>Plus qu'une location,<br>une garantie de sérénité</h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Sécurité Garantie</h3>
                    <p>Révision mécanique complète avant chaque départ. Nous ne jouons pas avec votre sécurité sur les routes malgaches.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-tags"></i></div>
                    <h3>Transparence Totale</h3>
                    <p>Prix affichés en Ariary, clairs et définitifs. Pas de frais cachés ou de mauvaises surprises à l'arrivée.</p>
                </div>
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-route"></i></div>
                    <h3>Flexibilité Totale</h3>
                    <p>Location en toute liberté ou avec un chauffeur expérimenté qui connaît les moindres recoins de l'île.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="propos">
        <div class="about-image">
             <!-- Unsplash: Planning/Map -->
            <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=1000&auto=format&fit=crop" alt="Carte Madagascar">
        </div>
        <div class="about-content">
            <h2>Votre partenaire local à Tana</h2>
            <div style="width: 50px; height: 3px; background: var(--primary); margin: 20px 0;"></div>
            <p>Location Fiara n'est pas une agence anonyme. Nous sommes des experts du terrain basés à Antananarivo, prêts à vous conseiller les meilleurs itinéraires pour découvrir la Grande Île en sécurité.</p>
            <p>Que vous partiez pour Andasibe, le grand Sud ou simplement pour des rendez-vous d'affaires en ville, nous avons la solution.</p>
            <a href="#contact" class="btn btn-primary" style="border:none;">Contactez-nous</a>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section-padding testimonials">
        <div class="container">
            <div class="section-title-wrapper">
                <h2>Avis Clients</h2>
            </div>

            <div class="review-grid">
                <div class="review-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p>"Voiture impeccable et très propre. Le chauffeur connaissait parfaitement la route pour Morondava. Je recommande !"</p>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">JL</div>
                        <div>
                            <strong>Jean-Luc P.</strong><br>
                            <small>Touriste Français</small>
                        </div>
                    </div>
                </div>

                <div class="review-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <p>"Service très professionnel à Tana. Ponctualité au rendez-vous à l'aéroport Ivato, ce qui est rare. Merci à l'équipe."</p>
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">AM</div>
                        <div>
                            <strong>Aina M.</strong><br>
                            <small>Déplacement Pro</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding faq">
        <div class="container">
            <div class="section-title-wrapper">
                <h2>Questions Fréquentes</h2>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">Le kilométrage est-il illimité ?</div>
                <div class="faq-answer">
                    Pour les locations en ville, un forfait journalier est appliqué. Pour les provinces, le kilométrage est généralement illimité mais soumis à validation de l'itinéraire.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Les véhicules sont-ils assurés ?</div>
                <div class="faq-answer">
                    Oui, tous nos véhicules disposent d'une assurance tous risques incluant la responsabilité civile.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Acceptez-vous les paiements en devises étrangères ?</div>
                <div class="faq-answer">
                    Oui, nous acceptons les Euros et Dollars au taux du jour, ainsi que les Ariary.
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Location Fiara</h4>
                    <p style="color: #888; margin-bottom: 20px;">Votre partenaire mobilité de confiance à Madagascar.</p>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-phone-alt" style="margin-right: 10px; color: var(--primary);"></i> +261 34 00 000 00</li>
                        <li><i class="fab fa-whatsapp" style="margin-right: 10px; color: var(--primary);"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: var(--primary);"></i> Antananarivo, Madagascar</li>
                    </ul>
                </div>
                <div>
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#flotte">Véhicules</a></li>
                        <li><a href="#avantages">Services</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Location Fiara. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div class="sticky-mobile-cta">
        <div class="sticky-price">
            <span>À partir de</span>
            60 000 Ar
        </div>
        <a href="https://wa.me/261340000000" class="sticky-btn">
            <i class="fab fa-whatsapp"></i> Réserver
        </a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- 1. CONFIGURATION LOGO (IMPERATIVE) ---
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-el').src = LOGO_URL;

        // --- 2. HEADER SCROLL EFFECT ---
        const header = document.getElementById('header');
        const logoImg = document.querySelector('.logo-img');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                // Optional: Change logo color logic if using SVG, here sticking to img
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. MOBILE MENU ---
        const mobileToggle = document.getElementById('mobile-toggle');
        const navLinks = document.getElementById('nav-links');
        const links = document.querySelectorAll('.nav-link');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                icon.style.color = 'var(--dark)';
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                // Check scroll state for color
                if (window.scrollY <= 50) icon.style.color = 'var(--white)';
            }
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // --- 4. FAQ TOGGLE ---
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                // Close others
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) otherItem.classList.remove('active');
                });
                item.classList.toggle('active');
            });
        });

        // --- 5. SMOOTH REVEAL ANIMATION ---
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Select elements to animate
        const animatedElements = document.querySelectorAll('.fleet-card, .feature-box, .review-card, .about-content');
        
        animatedElements.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(20px)";
            el.style.transition = "opacity 0.6s ease-out, transform 0.6s ease-out";
            observer.observe(el);
        });

    </script>
</body>
</html>