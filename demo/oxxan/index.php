<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OXXAN | Location de Chapiteaux Premium à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #5b3539;
            --primary-dark: #3a2224;
            --secondary: #dbe0e6;
            --text-dark: #3c3e42;
            --text-light: #6b7280;
            --white: #ffffff;
            --bg-light: #f8f9fa;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px -5px rgba(0, 0, 0, 0.08);
            --shadow-hover: 0 20px 40px -5px rgba(91, 53, 57, 0.15);
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
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--white);
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--text-dark);
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
            object-fit: cover;
        }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-padding {
            padding: 6rem 0;
        }

        .text-center { text-align: center; }
        
        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            transition: var(--transition);
            font-size: 0.9rem;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 2px solid var(--primary);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--primary);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--text-dark);
        }

        .btn-outline-dark {
            background-color: transparent;
            color: var(--text-dark);
            border: 2px solid var(--text-dark);
        }

        .btn-outline-dark:hover {
            background-color: var(--text-dark);
            color: var(--white);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 1.5rem 0;
        }

        header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 1rem 0;
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 40px;
            width: auto;
        }
        
        /* Fallback if logo.jpg breaks */
        .logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--white);
            letter-spacing: 2px;
        }
        header.scrolled .logo-text { color: var(--primary); }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--white);
            transition: 0.3s;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--white);
            transition: 0.3s;
        }

        .nav-links a:hover::after { width: 100%; }

        header.scrolled .nav-links a { color: var(--text-dark); }
        header.scrolled .nav-links a::after { background-color: var(--primary); }

        .header-cta {
            background-color: var(--primary);
            color: var(--white) !important;
            padding: 0.8rem 1.5rem;
            border-radius: 2px;
        }
        .header-cta::after { display: none !important; }
        .header-cta:hover { background-color: var(--primary-dark); }

        .hamburger {
            display: none;
            cursor: pointer;
            z-index: 1001;
        }
        .bar {
            width: 25px;
            height: 2px;
            background-color: var(--white);
            margin: 5px 0;
            transition: 0.4s;
        }
        header.scrolled .bar { background-color: var(--text-dark); }

        /* --- HERO --- */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.6));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--white);
            max-width: 800px;
            margin-top: 60px; /* Prevent header overlap */
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            color: var(--white);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards 0.2s;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            font-weight: 300;
            opacity: 0.9;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards 0.4s;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards 0.6s;
        }

        .trust-badge {
            margin-top: 2rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0.8;
        }

        .trust-badge i { color: #2ecc71; }

        /* --- SOCIAL PROOF --- */
        .social-proof {
            padding: 3rem 0;
            background-color: var(--white);
            border-bottom: 1px solid #eee;
        }

        .proof-title {
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 2rem;
        }

        .logos-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logos-grid span {
            font-weight: 700;
            font-size: 1.5rem;
            font-family: 'Playfair Display', serif;
            color: #ccc;
        }

        /* --- SOLUTIONS --- */
        .solutions {
            background-color: var(--bg-light);
        }

        .section-header {
            margin-bottom: 4rem;
            text-align: center;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .section-header p {
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .card {
            background: var(--white);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-image {
            height: 250px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 2rem;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .price {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: block;
        }

        .card-text {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .card-link {
            color: var(--text-dark);
            font-weight: 600;
            text-decoration: underline;
            text-decoration-color: var(--primary);
            text-underline-offset: 4px;
        }

        /* --- FEATURES --- */
        .features {
            background-color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .feature-item {
            text-align: left;
            padding: 2rem;
            border-left: 3px solid var(--secondary);
            transition: 0.3s;
        }

        .feature-item:hover {
            border-left-color: var(--primary);
            background-color: var(--bg-light);
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        .feature-item h3 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .feature-item p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* --- GALLERY --- */
        .gallery {
            padding-bottom: 0;
        }
        
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: 300px;
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            transition: 0.5s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }
        
        .gallery-item.wide {
            grid-column: span 2;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: var(--white);
            opacity: 0;
            transition: 0.3s;
            transform: translateY(20px);
        }

        .gallery-item:hover .overlay {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- ABOUT --- */
        .about {
            background-color: var(--secondary);
            position: relative;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 4rem;
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .about-img img {
            border-radius: 4px;
            box-shadow: 20px 20px 0px var(--white);
        }

        /* --- FAQ --- */
        .faq {
            background-color: var(--white);
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            border-bottom: 1px solid #eee;
            margin-bottom: 1rem;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 1.5rem 0;
            background: none;
            border: none;
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question::after {
            content: '+';
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            color: var(--primary);
        }

        .faq-item.active .faq-question::after {
            content: '-';
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: var(--text-light);
        }

        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-bottom: 1.5rem;
        }

        /* --- FOOTER --- */
        footer {
            background-color: var(--text-dark);
            color: var(--white);
            padding: 4rem 0 1rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }

        .footer-col p, .footer-col a {
            color: #aaa;
            margin-bottom: 0.8rem;
            display: block;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .footer-col a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #666;
            font-size: 0.8rem;
        }

        /* --- MOBILE STICKY CTA --- */
        .mobile-sticky-cta {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--white);
            padding: 1rem;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 2000;
            text-align: center;
        }

        .mobile-sticky-cta .btn {
            width: 100%;
        }

        /* --- ANIMATION KEYFRAMES --- */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .about-grid { grid-template-columns: 1fr; }
            .about-img { order: -1; margin-bottom: 2rem; }
            .masonry-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-item.large { grid-column: span 2; grid-row: span 1; }
        }

        @media (max-width: 768px) {
            .hamburger { display: block; }
            
            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                height: 100vh;
                width: 80%;
                background-color: var(--white);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: 0.5s;
                box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            }

            .nav-links.active { right: 0; }
            
            .nav-links a {
                color: var(--text-dark);
                font-size: 1.2rem;
                margin: 1rem 0;
            }
            
            .header-cta { margin-top: 2rem; }

            .hero h1 { font-size: 2.2rem; }
            .hero-buttons { flex-direction: column; }
            .btn { width: 100%; text-align: center; }
            
            .masonry-grid { display: flex; flex-direction: column; }
            .gallery-item { height: 250px; }

            .mobile-sticky-cta { display: block; }
            body { padding-bottom: 60px; } /* Space for sticky CTA */
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-wrapper">
            <a href="#" class="logo-container" id="logo-container">
                <!-- Logo injected via JS -->
                 <span class="logo-text">OXXAN</span>
            </a>
            
            <div class="hamburger" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <nav class="nav-links" id="nav-links">
                <a href="#hero" class="active">Accueil</a>
                <a href="#solutions">Nos Chapiteaux</a>
                <a href="#solutions">Mobilier & Déco</a>
                <a href="#gallery">Réalisations</a>
                <a href="#about">A Propos</a>
                <a href="#contact" class="header-cta">Demander un Devis</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section id="hero" class="hero">
            <div class="container hero-content">
                <h1>Sublimez vos Événements à Antananarivo</h1>
                <p>La référence en location de matériel de réception, pagodes et décoration pour professionnels et particuliers. Installation rapide et matériel impeccable.</p>
                <div class="hero-buttons">
                    <a href="#solutions" class="btn btn-primary">Voir le Catalogue</a>
                    <a href="#gallery" class="btn btn-secondary">Nos Réalisations</a>
                </div>
                <div class="trust-badge">
                    <span>★ Devis gratuit sous 24h</span>
                </div>
            </div>
        </section>

        <!-- SOCIAL PROOF -->
        <section class="social-proof">
            <div class="container">
                <p class="proof-title">Ils nous font confiance pour leurs événements</p>
                <div class="logos-grid">
                    <span>TELMA</span>
                    <span>ORANGE</span>
                    <span>STAR</span>
                    <span>AXIAN</span>
                    <span>COLBERT</span>
                </div>
            </div>
        </section>

        <!-- SOLUTIONS / CATALOG -->
        <section id="solutions" class="section-padding solutions">
            <div class="container">
                <div class="section-header">
                    <h2>Tout le matériel pour une réception réussie</h2>
                    <p>Des solutions clés en main adaptées à la taille et au prestige de votre événement.</p>
                </div>

                <div class="solutions-grid">
                    <!-- Card 1 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1478147427282-58a87a120781?q=80&w=800&auto=format&fit=crop" alt="Grand Chapiteau">
                        </div>
                        <div class="card-content">
                            <h3>Chapiteaux & Tentes</h3>
                            <span class="price">Sur Devis</span>
                            <p class="card-text">Structures modulables pour 50 à 500 personnes. Idéal pour mariages et foires.</p>
                            <a href="#" class="card-link">Voir les dimensions</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1519225463359-43a2456a1278?q=80&w=800&auto=format&fit=crop" alt="Pagode Garden">
                        </div>
                        <div class="card-content">
                            <h3>Pagodes Garden</h3>
                            <span class="price">Dès 150 000 Ar / jour</span>
                            <p class="card-text">L'élégance pour vos cocktails et accueils VIP. Toile blanche immaculée.</p>
                            <a href="#" class="card-link">Détails techniques</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1503160865267-af4660ce7bf2?q=80&w=800&auto=format&fit=crop" alt="Mobilier Tiffany">
                        </div>
                        <div class="card-content">
                            <h3>Mobilier & Déco</h3>
                            <span class="price">Sur Catalogue</span>
                            <p class="card-text">Chaises Tiffany, tables rondes, estrades et éclairage d'ambiance.</p>
                            <a href="#" class="card-link">Voir le catalogue</a>
                        </div>
                    </div>
                </div>

                <div class="text-center" style="margin-top: 4rem;">
                    <a href="#" class="btn btn-outline-dark">Télécharger le Catalogue Complet (PDF)</a>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section class="section-padding features">
            <div class="container">
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">✦</div>
                        <h3>Qualité Garantie</h3>
                        <p>Matériel propre, entretenu et moderne. Nos toiles sont d'un blanc pur pour garantir l'esthétique de vos photos.</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">🛠</div>
                        <h3>Service Clé en Main</h3>
                        <p>Livraison, montage et démontage inclus par nos équipes techniques formées, partout à Tana.</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">☂</div>
                        <h3>Flexibilité Totale</h3>
                        <p>Solutions adaptées à tous terrains et météo. Nous sécurisons chaque installation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY -->
        <section id="gallery" class="section-padding gallery">
            <div class="container" style="margin-bottom: 3rem;">
                <div class="section-header">
                    <h2>Nos installations en images</h2>
                </div>
            </div>
            
            <div class="masonry-grid">
                <div class="gallery-item large">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=1200&auto=format&fit=crop" alt="Mariage Réception">
                    <div class="overlay">
                        <h4>Mariage au Colbert</h4>
                        <p>Chapiteau 300 pax + Décoration</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=600&auto=format&fit=crop" alt="Détail Table">
                    <div class="overlay">
                        <h4>Art de la table</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?q=80&w=600&auto=format&fit=crop" alt="Soirée Entreprise">
                    <div class="overlay">
                        <h4>Soirée Gala</h4>
                    </div>
                </div>
                <div class="gallery-item wide">
                    <img src="https://images.unsplash.com/photo-1561526118-293e4f738f68?q=80&w=800&auto=format&fit=crop" alt="Installation Extérieure">
                    <div class="overlay">
                        <h4>Salon Pro CCI Ivato</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1505944357481-86b94246e273?q=80&w=600&auto=format&fit=crop" alt="Chaises Cérémonie">
                    <div class="overlay">
                        <h4>Cérémonie Laïque</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1511285560982-1351c4f809b5?q=80&w=600&auto=format&fit=crop" alt="Lumières">
                    <div class="overlay">
                        <h4>Mise en lumière</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="section-padding about">
            <div class="container about-grid">
                <div class="about-text">
                    <h2>Votre partenaire événementiel à Madagascar</h2>
                    <p>Basée à Antananarivo, OXXAN s'engage à fournir un service irréprochable pour garantir le succès de votre projet, qu'il soit professionnel ou privé.</p>
                    <p>Notre expertise locale nous permet de réagir vite et de proposer des solutions logistiques adaptées aux réalités du terrain malgache.</p>
                    <a href="#contact" class="btn btn-primary">Contacter notre équipe</a>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1522413454862-e024f28ee70c?q=80&w=800&auto=format&fit=crop" alt="Equipe Oxxan">
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="section-padding" id="faq">
            <div class="container">
                <div class="section-header">
                    <h2>Questions Fréquentes</h2>
                </div>
                <div class="faq">
                    <div class="faq-item">
                        <button class="faq-question">Livrez-vous en dehors de Tana ?</button>
                        <div class="faq-answer">
                            <p>Oui, nous couvrons Antananarivo et ses environs proches (Ambohidratrimo, Ivato, By-Pass). Pour les prestations en province, nous étudions les demandes sur devis spécifique incluant les frais logistiques.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Faut-il verser un acompte ?</button>
                        <div class="faq-answer">
                            <p>Oui, un acompte de 50% est requis à la signature du devis pour bloquer le matériel et la date. Le solde est à régler avant l'installation.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">Le montage est-il inclus ?</button>
                        <div class="faq-answer">
                            <p>Absolument. Nos tarifs incluent systématiquement le montage et le démontage par nos équipes pour garantir la sécurité des structures.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <!-- Logo inject via JS here too if needed, or text -->
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 1rem;">OXXAN</h3>
                    <p>L'excellence pour vos réceptions.</p>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <p>Tél : +261 34 XX XXX XX</p>
                    <p>Email : contact@oxxan.mg</p>
                    <p>Adresse : Antananarivo, Madagascar</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Utiles</h4>
                    <a href="#">Mentions Légales</a>
                    <a href="#">CGV Location</a>
                    <a href="#">Politique de Confidentialité</a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 OXXAN. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY -->
    <div class="mobile-sticky-cta">
        <a href="tel:+261340000000" class="btn btn-primary">Appeler pour un Devis</a>
    </div>

    <script>
        // --- LOGO CONFIGURATION (MANDATORY) ---
        const LOGO_URL = "logo.jpg";

        // Inject Logo
        document.addEventListener("DOMContentLoaded", () => {
            const logoContainer = document.getElementById('logo-container');
            // We create the image tag but keep the text as fallback/alt if needed or hidden
            // Since the prompt requires "Insert exactly this code", I use the variable.
            // I will replace the content of logo-container with an img tag using this URL.
            
            // To ensure "Logo.jpg" is used as the source:
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="OXXAN Logo">`;
            
            // Note: Since "logo.jpg" is a relative local link that likely doesn't exist in this preview environment,
            // the alt text or a broken image icon might show. 
            // In a real scenario, this file would exist.
        });

        // --- NAVIGATION LOGIC ---
        const header = document.getElementById('header');
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        // Sticky Header
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            
            // Animate Hamburger
            const bars = document.querySelectorAll('.bar');
            if (navLinks.classList.contains('active')) {
                bars[0].style.transform = "rotate(-45deg) translate(-5px, 6px)";
                bars[1].style.opacity = "0";
                bars[2].style.transform = "rotate(45deg) translate(-5px, -6px)";
                bars.forEach(bar => bar.style.backgroundColor = "var(--text-dark)");
            } else {
                bars[0].style.transform = "none";
                bars[1].style.opacity = "1";
                bars[2].style.transform = "none";
                // Reset color depending on scroll state
                if(!header.classList.contains('scrolled')) {
                    bars.forEach(bar => bar.style.backgroundColor = "var(--white)");
                }
            }
        });

        // Close mobile menu on click
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                // Reset hamburger
                const bars = document.querySelectorAll('.bar');
                bars[0].style.transform = "none";
                bars[1].style.opacity = "1";
                bars[2].style.transform = "none";
            });
        });

        // --- FAQ TOGGLE ---
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Close others
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) otherItem.classList.remove('active');
                });
                item.classList.toggle('active');
            });
        });

        // --- SCROLL ANIMATIONS ---
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
        const cards = document.querySelectorAll('.card');
        const features = document.querySelectorAll('.feature-item');
        
        // Initial styles for animation
        const addAnimationStyles = (el, delay) => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = `all 0.6s ease ${delay}s`;
            observer.observe(el);
        };

        cards.forEach((card, index) => addAnimationStyles(card, index * 0.2));
        features.forEach((feature, index) => addAnimationStyles(feature, index * 0.2));

    </script>
</body>
</html>