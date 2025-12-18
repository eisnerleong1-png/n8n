<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazovato Forello | Excellence du Bois & de la Pierre</title>
    
    <!-- Polices Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        /* -----------------------------------------------------------
           1. CORE SETTINGS & VARIABLES
           ----------------------------------------------------------- */
        :root {
            --color-bg: #FAF8F5;       /* Off-white Premium */
            --color-gold: #C59E50;     /* Luxe / Bois vernis */
            --color-gold-light: #dcb66b;
            --color-dark: #232323;     /* Modern Dark Grey */
            --color-text: #4a4a4a;
            --color-white: #ffffff;
            
            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Montserrat', sans-serif;
            
            --spacing-section: 120px;
            --spacing-container: 8vw;
            
            --transition-smooth: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--color-bg);
            color: var(--color-text);
            font-family: var(--font-sans);
            line-height: 1.8;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* -----------------------------------------------------------
           2. TYPOGRAPHY
           ----------------------------------------------------------- */
        h1, h2, h3, h4 {
            font-family: var(--font-serif);
            color: var(--color-dark);
            font-weight: 600;
        }

        h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: var(--color-white); /* Hero specific */
        }

        h2 {
            font-size: clamp(2rem, 3vw, 3rem);
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        p.subtitle {
            font-size: 1.1rem;
            color: rgba(255,255,255, 0.9);
            font-weight: 300;
            max-width: 600px;
            margin-bottom: 2.5rem;
        }

        /* -----------------------------------------------------------
           3. UI COMPONENTS
           ----------------------------------------------------------- */
        .container {
            padding: 0 var(--spacing-container);
            max-width: 1920px;
            margin: 0 auto;
        }

        /* Buttons with Gold Shimmer */
        .btn {
            display: inline-block;
            padding: 18px 40px;
            font-family: var(--font-sans);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
            font-size: 0.9rem;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-gold);
            color: var(--color-white);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: none;
        }

        .btn-primary:hover::after {
            left: 100%;
            transition: 0.6s ease-in-out;
        }

        .btn-primary:hover {
            background-color: var(--color-gold-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(197, 158, 80, 0.3);
        }

        .btn-outline {
            border: 1px solid rgba(255,255,255, 0.6);
            color: var(--color-white);
            margin-left: 20px;
        }

        .btn-outline:hover {
            border-color: var(--color-gold);
            color: var(--color-gold);
            background: rgba(0,0,0,0.2);
        }

        /* -----------------------------------------------------------
           4. HEADER & NAV
           ----------------------------------------------------------- */
        nav {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            padding: 2rem var(--spacing-container);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 60px;
            object-fit: contain;
        }

        .nav-links {
            display: none; /* Mobile first hidden, simplified for wireframe focus */
        }
        
        @media(min-width: 768px) {
            .nav-links {
                display: flex;
                gap: 40px;
            }
            .nav-link {
                color: white;
                text-decoration: none;
                font-family: var(--font-sans);
                font-size: 0.9rem;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
        }

        header.hero {
            height: 100vh;
            width: 100%;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content {
            padding: 0 var(--spacing-container);
            max-width: 1000px;
            animation: fadeUp 1.2s ease-out;
        }

        /* -----------------------------------------------------------
           5. SECTIONS
           ----------------------------------------------------------- */
        section {
            padding: var(--spacing-section) 0;
        }

        /* Section A: Trust Signals */
        .trust-section {
            background-color: var(--color-bg);
            padding: 60px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .trust-grid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }
        
        .trust-intro {
            font-family: var(--font-serif);
            font-style: italic;
            color: var(--color-gold);
            font-size: 1.2rem;
            margin-right: auto;
        }

        .trust-logo {
            font-family: var(--font-sans);
            font-weight: 700;
            text-transform: uppercase;
            color: var(--color-dark);
            letter-spacing: 2px;
            font-size: 0.9rem;
        }

        /* Section B: 3 Pillars */
        .pillars-section {
            text-align: center;
        }

        .pillars-header {
            margin-bottom: 80px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 var(--spacing-container);
        }

        .pillar-card {
            position: relative;
            height: 600px;
            overflow: hidden;
            cursor: pointer;
            group: hover;
        }

        .pillar-bg {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.8s ease;
        }

        .pillar-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent 60%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 40px;
            text-align: left;
        }

        .pillar-card:hover .pillar-bg {
            transform: scale(1.1);
        }

        .pillar-title {
            color: var(--color-white);
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .pillar-desc {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
            transform: translateY(20px);
            opacity: 0;
            transition: var(--transition-smooth);
        }

        .pillar-card:hover .pillar-desc {
            transform: translateY(0);
            opacity: 1;
        }

        /* Section C: Gallery Masonry */
        .gallery-section {
            background-color: #F5F3F0; /* Slightly darker than BG */
        }

        .gallery-controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: none;
            border: none;
            font-family: var(--font-sans);
            font-size: 0.9rem;
            text-transform: uppercase;
            cursor: pointer;
            color: #888;
            padding-bottom: 5px;
            transition: 0.3s;
        }

        .filter-btn.active, .filter-btn:hover {
            color: var(--color-dark);
            border-bottom: 2px solid var(--color-gold);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            padding: 0 var(--spacing-container);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            aspect-ratio: 1 / 1; /* Square by default */
        }
        
        .gallery-item:nth-child(2n) {
            aspect-ratio: 3 / 4; /* Portrait */
        }
        
        .gallery-item:nth-child(3n) {
            grid-column: span 1; 
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(35, 35, 35, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.4s;
        }

        .gallery-text {
            color: var(--color-gold);
            font-family: var(--font-serif);
            font-size: 1.5rem;
            transform: translateY(20px);
            transition: 0.4s;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-item:hover .gallery-text {
            transform: translateY(0);
        }

        /* Section D: Story (Dark) */
        .story-section {
            background-color: var(--color-dark);
            color: var(--color-bg);
            display: flex;
            align-items: center;
            padding: 0;
        }
        
        .story-container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .story-image {
            flex: 1;
            min-width: 400px;
            min-height: 600px;
            background: url('https://images.unsplash.com/photo-1533090481720-856c6e3c1933?q=80&w=1000&auto=format&fit=crop') center/cover;
            filter: grayscale(100%);
        }

        .story-content {
            flex: 1;
            padding: var(--spacing-section) var(--spacing-container);
            min-width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .story-content h2 {
            color: var(--color-bg);
        }
        
        .story-content p {
            color: rgba(250, 248, 245, 0.7);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        /* Section E: FAQ */
        .faq-section {
            max-width: 800px;
            margin: 0 auto;
            padding: var(--spacing-section) 20px;
        }
        
        .faq-title {
            text-align: center;
            margin-bottom: 60px;
        }

        details {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        summary {
            font-family: var(--font-serif);
            font-size: 1.3rem;
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--color-dark);
            transition: color 0.3s;
        }

        summary:hover {
            color: var(--color-gold);
        }
        
        summary::after {
            content: '+';
            font-size: 1.5rem;
            font-weight: 300;
        }
        
        details[open] summary::after {
            content: '-';
        }

        details p {
            margin-top: 15px;
            font-size: 1rem;
            color: #666;
            padding-right: 20px;
        }

        /* Section F: Footer */
        .footer-section {
            background-color: #1a1a1a;
            color: white;
            padding: 80px var(--spacing-container);
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }
        
        @media(max-width: 900px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        .contact-form {
            background: #2a2a2a;
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            background: #333;
            border: 1px solid #444;
            color: white;
            font-family: var(--font-sans);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--color-gold);
        }

        .footer-info h3 {
            font-family: var(--font-serif);
            color: var(--color-gold);
            margin-bottom: 30px;
            font-size: 1.5rem;
        }
        
        .contact-details p {
            margin-bottom: 15px;
            color: #999;
        }

        .copyright {
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid #333;
            text-align: center;
            font-size: 0.8rem;
            color: #555;
        }

        /* Animation Classes */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Mobile Tweaks */
        @media (max-width: 768px) {
            :root {
                --spacing-container: 20px;
            }
            .btn {
                width: 100%;
                text-align: center;
                margin: 10px 0 0 0;
            }
            .trust-grid {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <nav>
        <div id="logo-container">
            <!-- Logo injecté via JS -->
            <!-- COMMENTAIRE CLIENT : INSEREZ VOTRE LIEN DE LOGO FINAL DANS LE JS PLUS BAS -->
        </div>
        <div class="nav-links">
            <a href="#trust" class="nav-link">L'Atelier</a>
            <a href="#pillars" class="nav-link">Expertise</a>
            <a href="#gallery" class="nav-link">Réalisations</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="hero-content">
            <h1>L'Excellence du Bois et de la Pierre au Service de Votre Patrimoine.</h1>
            <p class="subtitle">De la menuiserie d'art à la promotion immobilière : une expertise unique signée Hazovato Forello à Madagascar.</p>
            <div style="margin-top: 40px;">
                <a href="#gallery" class="btn btn-primary">Explorer nos Réalisations</a>
                <a href="#contact" class="btn btn-outline">Showroom</a>
            </div>
        </div>
    </header>

    <!-- SECTION A: TRUST SIGNALS -->
    <section class="trust-section" id="trust">
        <div class="container">
            <div class="trust-grid">
                <span class="trust-intro">Depuis 1998, nous façonnons l'exception.</span>
                <span class="trust-logo">BOIS PRÉCIEUX CERTIFIÉ</span>
                <span class="trust-logo">ARCHITECTES PARTENAIRES</span>
                <span class="trust-logo">NORME ISO 9001</span>
                <span class="trust-logo">FORELLO EXPO</span>
            </div>
        </div>
    </section>

    <!-- SECTION B: PILIERS -->
    <section class="pillars-section" id="pillars">
        <div class="container">
            <div class="pillars-header reveal">
                <h2>Une Maîtrise Intégrale de la Matière à l'Espace</h2>
                <p>Notre synergie industrielle et artisanale nous permet de contrôler chaque étape, de la matière brute à la remise des clés.</p>
            </div>
            <div class="pillars-grid">
                <!-- Bois -->
                <div class="pillar-card reveal">
                    <div class="pillar-bg" style="background-image: url('https://images.unsplash.com/photo-1611269154421-4e27c4137290?q=80&w=1000&auto=format&fit=crop');"></div>
                    <div class="pillar-overlay">
                        <h3 class="pillar-title">Bois & Menuiserie</h3>
                        <p class="pillar-desc">Essences nobles (Palissandre, Bois de rose), mobilier sur-mesure et agencement d'intérieur.</p>
                    </div>
                </div>
                <!-- Pierre -->
                <div class="pillar-card reveal" style="transition-delay: 0.2s;">
                    <div class="pillar-bg" style="background-image: url('https://images.unsplash.com/photo-1600607686527-6fb886090705?q=80&w=1000&auto=format&fit=crop');"></div>
                    <div class="pillar-overlay">
                        <h3 class="pillar-title">Pierre & Granit</h3>
                        <p class="pillar-desc">Extraction et transformation de granit et marbre pour des revêtements d'une durabilité absolue.</p>
                    </div>
                </div>
                <!-- Immobilier -->
                <div class="pillar-card reveal" style="transition-delay: 0.4s;">
                    <div class="pillar-bg" style="background-image: url('https://images.unsplash.com/photo-1600596542815-22b845069566?q=80&w=1000&auto=format&fit=crop');"></div>
                    <div class="pillar-overlay">
                        <h3 class="pillar-title">Immobilier Prestige</h3>
                        <p class="pillar-desc">Promotion de villas de luxe et développement d'espaces industriels en Zone Forello.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION C: GALERIE -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;" class="reveal">
                <h2>L'Art du Détail</h2>
                <p style="color: #666;">Découvrez nos dernières réalisations à Antananarivo et en province.</p>
            </div>
            
            <div class="gallery-controls reveal">
                <button class="filter-btn active" data-filter="all">Tout</button>
                <button class="filter-btn" data-filter="cuisine">Cuisines</button>
                <button class="filter-btn" data-filter="exterieur">Extérieur</button>
                <button class="filter-btn" data-filter="mobilier">Mobilier Art</button>
            </div>

            <div class="gallery-grid">
                <!-- Items Galerie -->
                <div class="gallery-item cuisine reveal">
                    <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=1000&auto=format&fit=crop" class="gallery-img" alt="Cuisine">
                    <div class="gallery-overlay"><span class="gallery-text">Cuisine en Granit</span></div>
                </div>
                <div class="gallery-item mobilier reveal">
                    <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?q=80&w=1000&auto=format&fit=crop" class="gallery-img" alt="Mobilier">
                    <div class="gallery-overlay"><span class="gallery-text">Table Palissandre</span></div>
                </div>
                <div class="gallery-item exterieur reveal">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1000&auto=format&fit=crop" class="gallery-img" alt="Exterieur">
                    <div class="gallery-overlay"><span class="gallery-text">Façade Villa</span></div>
                </div>
                <div class="gallery-item cuisine reveal">
                    <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfe1?q=80&w=1000&auto=format&fit=crop" class="gallery-img" alt="Salle de bain">
                    <div class="gallery-overlay"><span class="gallery-text">Marbre Italien</span></div>
                </div>
                <div class="gallery-item mobilier reveal">
                    <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?q=80&w=1000&auto=format&fit=crop" class="gallery-img" alt="Bureau">
                    <div class="gallery-overlay"><span class="gallery-text">Agencement Bureau</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION D: STORY -->
    <section class="story-section" id="story">
        <div class="story-container">
            <div class="story-image reveal"></div>
            <div class="story-content reveal">
                <h2>L'Héritage Hazovato</h2>
                <div style="width: 60px; height: 3px; background: var(--color-gold); margin: 20px 0;"></div>
                <p>Née de la rencontre entre l'artisanat traditionnel malgache et la puissance industrielle du groupe Forello, Hazovato est aujourd'hui la référence incontournable pour les projets d'exception.</p>
                <p>Dans nos ateliers, le temps s'arrête. Chaque planche de bois précieux est sélectionnée, chaque bloc de pierre est inspecté. Nous ne construisons pas seulement des bâtiments, nous bâtissons un patrimoine durable pour les générations futures.</p>
                <a href="#" style="color: var(--color-gold); text-decoration: none; text-transform: uppercase; font-weight: 600; letter-spacing: 1px;">Lire notre histoire &rarr;</a>
            </div>
        </div>
    </section>

    <!-- SECTION E: FAQ -->
    <section class="faq-section reveal">
        <h2 class="faq-title">Questions Fréquentes</h2>
        
        <details>
            <summary>Réalisez-vous du mobilier sur-mesure ?</summary>
            <p>Absolument. Notre bureau d'étude intégré travaille avec vos architectes ou directement avec vous pour concevoir des pièces uniques, adaptées à vos dimensions et à votre style.</p>
        </details>
        
        <details>
            <summary>Livrez-vous hors d'Antananarivo ?</summary>
            <p>Oui, nous assurons la logistique sur toute l'île de Madagascar et proposons des solutions d'exportation pour nos clients internationaux, avec un emballage renforcé pour les pièces fragiles.</p>
        </details>
        
        <details>
            <summary>Quelle est l'origine de vos bois ?</summary>
            <p>Nous sommes engagés dans une démarche stricte de légalité et de traçabilité. Tous nos bois proviennent de sources autorisées et nous disposons de toutes les certifications forestières requises par l'administration malgache.</p>
        </details>
    </section>

    <!-- SECTION F: FOOTER -->
    <footer class="footer-section" id="contact">
        <div class="container">
            <div class="footer-grid">
                <!-- Form -->
                <div class="form-wrapper reveal">
                    <h2 style="margin-bottom: 20px;">Concrétisons votre vision</h2>
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Téléphone">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="" disabled selected>Type de projet</option>
                                <option value="construction">Construction Villa</option>
                                <option value="renovation">Rénovation / Agencement</option>
                                <option value="mobilier">Mobilier sur-mesure</option>
                                <option value="autre">Autre investissement</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Budget estimatif (MGA)">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Demander un RDV</button>
                    </form>
                </div>

                <!-- Info -->
                <div class="footer-info reveal" style="transition-delay: 0.2s;">
                    <h3>Showroom & Ateliers</h3>
                    <div class="contact-details">
                        <p><strong>Zone Forello</strong><br>Tanjombato, Antananarivo 101<br>Madagascar</p>
                        <p><strong>Téléphone :</strong><br>+261 20 22 123 45<br>+261 34 00 123 45</p>
                        <p><strong>Email :</strong><br>contact@hazovato-forello.mg</p>
                    </div>
                    <div style="margin-top: 40px; opacity: 0.5;">
                        <!-- Fake Map Placeholder styling -->
                        <div style="width: 100%; height: 200px; background: #333; display: flex; align-items: center; justify-content: center; border: 1px solid #444;">
                            <span>Google Maps Integration</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 Hazovato Forello. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // 1. CONFIGURATION DU LOGO (VARIABLE OBLIGATOIRE)
        /* 
           INSTRUCTION CLIENT : 
           Remplacez l'URL ci-dessous par le lien direct de votre logo (PNG transparent recommandé).
        */
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO"; 
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Hazovato Forello Logo">`;
        }

        // 2. SCROLL REVEAL ANIMATION (Intersection Observer)
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Run once
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            });

            reveals.forEach(reveal => {
                revealOnScroll.observe(reveal);
            });
        });

        // 3. GALLERY FILTERING
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all btns
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active to click
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                        setTimeout(() => item.style.opacity = '1', 100);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                });
            });
        });

        // 4. SMOOTH SCROLLING FOR ANCHORS
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // 5. NAVBAR BACKGROUND ON SCROLL
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if(window.scrollY > 50) {
                nav.style.background = 'rgba(20, 20, 20, 0.95)';
                nav.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                nav.style.background = 'transparent';
                nav.style.boxShadow = 'none';
            }
        });

    </script>
</body>
</html>