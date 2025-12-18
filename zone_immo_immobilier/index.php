<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zone Immo | L'Immobilier de Prestige à Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #2D3339; /* Gris Ardoise - Luxe & Sérieux */
            --color-accent: #D1A276; /* Doré - Prestige */
            --color-bg: #F9F5F0; /* Version allégée du Beige Crème pour lisibilité */
            --color-bg-dark: #E8DCCA; /* Beige Crème original pour sections */
            --color-white: #FFFFFF;
            --color-text: #2D3339;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;
            --radius-sm: 8px;
            --radius-md: 16px;
            --shadow-card: 0 10px 40px -10px rgba(45, 51, 57, 0.1);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--color-bg);
            color: var(--color-text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--color-primary);
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: var(--color-accent);
            color: var(--color-white);
            font-weight: 600;
            border-radius: var(--radius-sm);
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            transition: var(--transition);
        }
        .btn:hover {
            background-color: #b88d63;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(209, 162, 118, 0.4);
        }
        .text-accent { color: var(--color-accent); }
        .section-padding { padding: 6rem 0; }
        .text-center { text-align: center; }

        /* --- HEADER --- */
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            padding: 1.5rem 0;
            transition: var(--transition);
        }
        header.scrolled {
            position: fixed;
            background: rgba(45, 51, 57, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo-img {
            height: 50px;
            filter: brightness(0) invert(1); /* Logo blanc sur fond sombre */
        }
        nav ul {
            display: flex;
            gap: 2rem;
        }
        nav a {
            color: var(--color-white);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }
        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--color-accent);
            transition: var(--transition);
        }
        nav a:hover::after { width: 100%; }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            min-height: 700px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(45,51,57,0.7) 0%, rgba(45,51,57,0.4) 50%, rgba(45,51,57,0.8) 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            color: var(--color-white);
            padding: 0 1rem;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
            color: var(--color-white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        /* --- SEARCH BOX (Desktop) --- */
        .search-box {
            background: rgba(255, 255, 255, 0.95);
            padding: 1.5rem;
            border-radius: var(--radius-sm);
            display: flex;
            gap: 1rem;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            backdrop-filter: blur(5px);
            align-items: flex-end;
        }
        .form-group {
            flex: 1;
            text-align: left;
        }
        .form-group label {
            display: block;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--color-primary);
            margin-bottom: 0.5rem;
            text-transform: uppercase;
        }
        .form-group select, .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: var(--font-body);
            background: transparent;
        }
        .search-btn {
            padding: 0.8rem 2rem;
            height: 48px;
            border-radius: 4px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--color-white);
            padding: 2rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .trust-title {
            text-align: center;
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #888;
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
        }
        .logos {
            display: flex;
            justify-content: center;
            gap: 4rem;
            flex-wrap: wrap;
            opacity: 0.6;
        }
        .logo-item { font-weight: 700; color: var(--color-primary); font-size: 1.2rem; display: flex; align-items: center; gap: 0.5rem;}

        /* --- LISTINGS --- */
        .listings { background-color: var(--color-bg); }
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 3rem;
        }
        .listing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        .card {
            background: var(--color-white);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            cursor: pointer;
            position: relative;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px -10px rgba(45, 51, 57, 0.2);
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
        .card:hover .card-img { transform: scale(1.05); }
        .card-tag {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--color-primary);
            color: var(--color-white);
            padding: 0.3rem 0.8rem;
            font-size: 0.7rem;
            text-transform: uppercase;
            border-radius: 4px;
        }
        .card-content { padding: 1.5rem; }
        .card-price {
            color: var(--color-accent);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        .card-title {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }
        .card-loc {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }
        .card-specs {
            display: flex;
            gap: 1rem;
            border-top: 1px solid #eee;
            padding-top: 1rem;
            font-size: 0.85rem;
            color: #555;
        }
        .spec-item { display: flex; align-items: center; gap: 0.3rem; }

        /* --- SERVICES --- */
        .services { background-color: var(--color-primary); color: var(--color-white); }
        .services h2 { color: var(--color-white); margin-bottom: 1rem; }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }
        .service-card {
            background: rgba(255,255,255,0.05);
            padding: 2.5rem;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(255,255,255,0.1);
            transition: var(--transition);
        }
        .service-card:hover {
            background: rgba(255,255,255,0.1);
            border-color: var(--color-accent);
        }
        .service-icon {
            font-size: 2rem;
            color: var(--color-accent);
            margin-bottom: 1.5rem;
        }
        .service-card h3 {
            color: var(--color-white);
            font-size: 1.3rem;
            margin-bottom: 1rem;
            font-family: var(--font-body);
        }
        .service-card p { opacity: 0.8; font-size: 0.95rem; }

        /* --- ABOUT --- */
        .about {
            background-color: var(--color-bg-dark); /* Beige Crème */
            display: flex;
            align-items: center;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        .about-img img {
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-card);
        }
        .about-content h2 { margin-bottom: 1.5rem; }
        .about-content p { margin-bottom: 1.5rem; color: #555; }

        /* --- FAQ --- */
        .faq-item {
            background: var(--color-white);
            margin-bottom: 1rem;
            border-radius: var(--radius-sm);
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
        }
        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            padding: 0 1.5rem;
            transition: all 0.3s ease;
            color: #666;
        }
        .faq-item.active .faq-answer {
            padding-bottom: 1.5rem;
            max-height: 200px;
        }
        .faq-icon { transition: 0.3s; }
        .faq-item.active .faq-icon { transform: rotate(180deg); }

        /* --- FOOTER --- */
        footer {
            background-color: var(--color-primary);
            color: var(--color-white);
            padding: 5rem 0 2rem;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 4rem;
        }
        .footer-cta h2 { color: var(--color-white); margin-bottom: 1rem; }
        .contact-form {
            display: grid;
            gap: 1rem;
            max-width: 400px;
        }
        .contact-form input, .contact-form textarea {
            padding: 1rem;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: var(--color-white);
            border-radius: 4px;
            font-family: var(--font-body);
        }
        .contact-form button { width: 100%; }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            opacity: 0.6;
        }

        /* --- MOBILE STICKY SEARCH --- */
        .mobile-sticky-search {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-white);
            padding: 1rem;
            z-index: 900;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
        }
        .mobile-search-btn {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        /* --- WHATSAPP BUTTON --- */
        .whatsapp-btn {
            position: fixed;
            bottom: 90px; /* Au dessus de la barre mobile si présente */
            right: 20px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 1000;
            transition: var(--transition);
        }
        .whatsapp-btn:hover { transform: scale(1.1); }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .hero h1 { font-size: 2.5rem; }
            .search-box { display: none; } /* Caché sur mobile, remplacé par sticky */
            .mobile-sticky-search { display: block; }
            .whatsapp-btn { bottom: 80px; }
            .services-grid, .about-grid, .footer-grid { grid-template-columns: 1fr; gap: 2rem; }
            .nav-container ul { display: none; } /* Menu burger simplifié pour l'exemple */
            .nav-container::after { content: '☰'; font-size: 1.5rem; color: white; cursor: pointer; }
        }
    </style>
</head>
<body>

    <!-- NAV -->
    <header id="header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- LE LOGO SERA INJECTÉ ICI PAR JS -->
            </div>
            <nav>
                <ul>
                    <li><a href="#listings">Vente</a></li>
                    <li><a href="#listings">Location</a></li>
                    <li><a href="#services">Gestion</a></li>
                    <li><a href="#about">L'Agence</a></li>
                    <li><a href="#contact" class="text-accent">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Immobilier de Confiance et de Prestige à Antananarivo</h1>
            <p>Vente, location et gestion. Accédez aux meilleures opportunités du marché en toute sérénité.</p>
            
            <!-- Desktop Search Engine -->
            <div class="search-box">
                <div class="form-group">
                    <label>Quartier</label>
                    <select>
                        <option>Ivandry</option>
                        <option>Ambatobe</option>
                        <option>Haute Ville</option>
                        <option>Ankorondrano</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Type de bien</label>
                    <select>
                        <option>Villa</option>
                        <option>Appartement</option>
                        <option>Terrain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Budget Max (MGA)</label>
                    <input type="number" placeholder="Ex: 5 000 000 Ar">
                </div>
                <button class="btn search-btn">Rechercher</button>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <p class="trust-title">Ils nous confient leur patrimoine</p>
            <div class="logos">
                <div class="logo-item">BNI Madagascar</div>
                <div class="logo-item">TotalEnergies</div>
                <div class="logo-item">Ambassade de France</div>
                <div class="logo-item" style="color:var(--color-accent)">+500 Biens Vendus</div>
            </div>
        </div>
    </section>

    <!-- LISTINGS -->
    <section id="listings" class="listings section-padding">
        <div class="container">
            <div class="section-header">
                <div>
                    <h2>Opportunités Exclusives</h2>
                    <p class="text-accent">Sélectionnées par nos experts</p>
                </div>
                <a href="#" style="text-decoration: underline;">Voir tout le catalogue</a>
            </div>

            <div class="listing-grid">
                <!-- Card 1 -->
                <article class="card">
                    <div class="card-img-wrapper">
                        <span class="card-tag">Vente</span>
                        <img src="https://images.unsplash.com/photo-1600596542815-60c375043303?q=80&w=2075&auto=format&fit=crop" alt="Villa Ivandry" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-price">2 500 000 000 Ar</span>
                        <h3 class="card-title">Villa Prestige Ivandry</h3>
                        <div class="card-loc">📍 Ivandry, Antananarivo</div>
                        <div class="card-specs">
                            <div class="spec-item">🛏 4 Ch.</div>
                            <div class="spec-item">🚿 3 Sdb.</div>
                            <div class="spec-item">🏊 Piscine</div>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="card">
                    <div class="card-img-wrapper">
                        <span class="card-tag">Location</span>
                        <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2070&auto=format&fit=crop" alt="Appartement Haute Ville" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-price">3 000 000 Ar / mois</span>
                        <h3 class="card-title">Penthouse Haute Ville</h3>
                        <div class="card-loc">📍 Faravohitra, Antananarivo</div>
                        <div class="card-specs">
                            <div class="spec-item">🛏 2 Ch.</div>
                            <div class="spec-item">📏 120m²</div>
                            <div class="spec-item">🛡 Sécurisé</div>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="card">
                    <div class="card-img-wrapper">
                        <span class="card-tag">Vente</span>
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2074&auto=format&fit=crop" alt="Maison Ambatobe" class="card-img">
                    </div>
                    <div class="card-content">
                        <span class="card-price">1 800 000 000 Ar</span>
                        <h3 class="card-title">Résidence Calme Ambatobe</h3>
                        <div class="card-loc">📍 Ambatobe, Antananarivo</div>
                        <div class="card-specs">
                            <div class="spec-item">🛏 3 Ch.</div>
                            <div class="spec-item">🌳 Grand Jardin</div>
                            <div class="spec-item">🚗 Garage</div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="services section-padding">
        <div class="container text-center">
            <h2>Une Expertise 360°</h2>
            <p>Nous accompagnons les propriétaires et les investisseurs</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">✦</div>
                    <h3>Transaction</h3>
                    <p>Un accompagnement juridique et commercial sur mesure, de la visite jusqu'à la signature de l'acte authentique.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">★</div>
                    <h3>Gestion Locative</h3>
                    <p>Rentabilisez votre bien sans effort. Nous gérons les loyers, l'entretien et les relations locataires.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📈</div>
                    <h3>Estimation</h3>
                    <p>Connaissance pointue du marché tananarivien pour estimer votre bien à sa juste valeur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about section-padding">
        <div class="container about-grid">
            <div class="about-content">
                <h2>Zone Immo : L'expertise locale, les standards internationaux.</h2>
                <p>Plus qu'une agence, nous sommes votre partenaire de confiance pour sécuriser vos transactions dans la capitale.</p>
                <p>Face à la complexité du marché foncier à Madagascar, nous garantissons une transparence juridique totale et une sélection rigoureuse des biens.</p>
                <button class="btn">Rencontrer l'équipe</button>
            </div>
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2070&auto=format&fit=crop" alt="Equipe Zone Immo">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="section-padding" style="background:white;">
        <div class="container" style="max-width: 800px;">
            <h2 class="text-center" style="margin-bottom:3rem;">Questions Fréquentes</h2>
            
            <div class="faq-item">
                <div class="faq-question">Quels sont les frais d'agence ? <span class="faq-icon">▼</span></div>
                <div class="faq-answer">Nos frais sont transparents et conformes aux standards du marché : 5% à la charge du vendeur pour une vente, et 1 mois de loyer pour une location.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Aidez-vous pour les papiers administratifs ? <span class="faq-icon">▼</span></div>
                <div class="faq-answer">Absolument. Nous vérifions les titres de propriété, les bornages et accompagnons nos clients chez le notaire pour sécuriser la transaction.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Comment se déroulent les visites ? <span class="faq-icon">▼</span></div>
                <div class="faq-answer">Les visites sont organisées sur rendez-vous, 6j/7. Nous assurons le transport si nécessaire depuis notre agence à Ivandry.</div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <h2 style="font-size:2rem; margin-bottom:1rem;">Zone Immo.</h2>
                    <p style="opacity:0.7; margin-bottom:2rem; max-width:300px;">L'agence de référence pour les expatriés et investisseurs exigeants à Madagascar.</p>
                    <p>📍 Immeuble Prisme, Ivandry, Antananarivo 101</p>
                    <p>📞 +261 34 00 000 00</p>
                    <p>✉️ contact@zone-immo.mg</p>
                </div>
                <div class="footer-cta">
                    <h2>Concrétisons votre projet</h2>
                    <form class="contact-form">
                        <input type="text" placeholder="Votre Nom">
                        <input type="tel" placeholder="Téléphone / WhatsApp">
                        <textarea rows="3" placeholder="Votre recherche..."></textarea>
                        <button class="btn">Être rappelé gratuitement</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Zone Immo Madagascar. Tous droits réservés.</p>
                <p>Mentions Légales - Confidentialité</p>
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY SEARCH -->
    <div class="mobile-sticky-search">
        <button class="btn mobile-search-btn">🔍 Rechercher un bien (Filtres)</button>
    </div>

    <!-- WHATSAPP BUTTON -->
    <a href="https://wa.me/" class="whatsapp-btn" target="_blank">
        <svg fill="currentColor" viewBox="0 0 24 24" width="30" height="30"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.592 2.654-.696c1.029.575 1.938.861 3.208.861 4.545 0 8.028-4.225 6.958-8.689-1.07-4.464-6.224-4.888-7.36-3.121zm-4.755 2.584c0-.236-.095-.368-.292-.581-.198-.213-.756-.708-.756-1.602 0-.895.539-1.677 1.218-2.348l.186.208c.551.616 1.353 1.838 1.402 1.956.048.118.068.277-.04.453-.109.177-.197.35-.41.564-.236.236-.499.278-.236.728.263.45 1.156 1.904 2.479 3.086 1.139 1.018 2.064 1.34 2.378 1.492.315.152.515.118.706-.118.192-.236.816-.954 1.034-1.28.217-.327.433-.272.728-.163 1.583.746 1.888.895 2.105 1.26.217.364.217 1.218-.088 1.637-.305.418-1.503.682-1.921.728-.42.046-.925.186-3.328-.79-2.946-1.197-4.846-4.22-4.992-4.437-.146-.216-1.189-1.583-1.189-3.018l-.001-.001z"/></svg>
    </a>

    <!-- SCRIPTS -->
    <script>
        // --- 1. VARIABLE LOGO OBLIGATOIRE ---
        // Instructions: Remplacez l'URL ci-dessous par le lien de votre logo final.
        // NOTE: J'ai adapté le texte du placeholder à "ZONE IMMO" pour la cohérence visuelle.
        const LOGO_URL = "https://placehold.co/150x60/transparent/2D3339?text=ZONE+IMMO"; 
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-container');
        logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Zone Immo Logo" class="logo-img"></a>`;

        // --- 2. STICKY HEADER ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                // Ajuster le logo pour qu'il soit blanc sur fond sombre au scroll si nécessaire, 
                // ou retirer le filtre invert si le logo original est coloré.
                // Ici on garde la logique CSS simple.
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. FAQ ACCORDION ---
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });

        // --- 4. SCROLL REVEAL ANIMATION (Simple) ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.card, .service-card, .about-content').forEach(el => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });

        console.log('Site Zone Immo chargé avec succès - Mode Premium');
    </script>
</body>
</html>