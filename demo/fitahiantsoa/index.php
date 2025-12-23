<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitahiantsoa | L'Art de Vivre d'Exception à Antananarivo</title>
    
    <!-- Google Fonts: Playfair Display (Serif/Luxe) & Plus Jakarta Sans (Sans-Serif/Moderne) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES
         * Palette: Dark Mode Premium
         */
        :root {
            --bg-color: #1E1E1E;
            --bg-darker: #121212;
            --gold-primary: #D4A52E;
            --gold-hover: #B0861E;
            --bronze-accent: #8C6716;
            --text-light: #F5F5F5;
            --text-grey: #A0A0A0;
            --white: #FFFFFF;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
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
            background-color: var(--bg-color);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--gold-primary);
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        /* UTILITIES */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .btn-primary {
            background-color: var(--gold-primary);
            color: var(--bg-color);
        }

        .btn-primary:hover {
            background-color: var(--gold-hover);
            transform: translateY(-2px);
        }

        .btn-outline {
            border-color: var(--gold-primary);
            color: var(--gold-primary);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--gold-primary);
            color: var(--bg-color);
        }

        .section-padding {
            padding: 100px 0;
        }

        /* 
         * 1. HEADER (Sticky)
         */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s ease, padding 0.3s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background-color: rgba(30, 30, 30, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 50px;
            width: auto;
            object-fit: contain;
            /* Placeholder styling if image fails to load, strictly following request to use image tag */
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-link {
            font-size: 0.95rem;
            color: var(--text-light);
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--gold-primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: var(--gold-primary);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .cta-header {
            background-color: var(--gold-primary);
            color: var(--bg-color);
            padding: 10px 24px;
            border-radius: 0;
            font-weight: 600;
        }

        .cta-header:hover {
            background-color: var(--gold-hover);
        }

        /* Mobile Menu Toggle */
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 2px;
            background-color: var(--gold-primary);
        }

        /* 
         * 2. HERO SECTION
         */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .hero-slide.active {
            opacity: 1;
            animation: kenBurns 10s ease-out forwards;
        }

        @keyframes kenBurns {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(30,30,30,0.3), rgba(30,30,30,0.8));
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Offset for header */
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--white);
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .hero h1 span {
            color: var(--gold-primary);
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-light);
            margin-bottom: 40px;
            font-weight: 300;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /* 
         * 3. UNIVERS (Services)
         */
        .univers-section {
            background-color: var(--bg-darker);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-header .divider {
            width: 80px;
            height: 3px;
            background-color: var(--gold-primary);
            margin: 0 auto;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background-color: var(--bg-color);
            border: 1px solid rgba(212, 165, 46, 0.1);
            position: relative;
            overflow: hidden;
            group: 'hover';
            transition: var(--transition);
        }

        .card:hover {
            border-color: var(--gold-primary);
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(140, 103, 22, 0.15);
        }

        .card-img {
            height: 250px;
            width: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .card:hover .card-img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 30px;
            text-align: center;
        }

        .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-content p {
            color: var(--text-grey);
            margin-bottom: 25px;
            font-size: 0.95rem;
        }

        .card-link {
            color: var(--gold-primary);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            position: relative;
        }

        .card-link::after {
            content: '→';
            margin-left: 5px;
            transition: margin-left 0.3s;
        }

        .card:hover .card-link::after {
            margin-left: 10px;
        }

        /* 
         * 4. ABOUT
         */
        .about-section {
            background-color: var(--bg-color);
            position: relative;
        }

        .about-wrapper {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 50px;
        }

        .about-image {
            flex: 1;
            min-width: 300px;
            position: relative;
        }

        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 2px;
            box-shadow: 20px 20px 0 var(--bg-darker), 20px 20px 0 2px var(--gold-primary);
        }

        .about-content {
            flex: 1;
            min-width: 300px;
        }

        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .about-content p {
            color: var(--text-grey);
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        /* 
         * 5. GALLERY & TESTIMONIALS
         */
        .gallery-section {
            background-color: var(--bg-darker);
        }

        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-auto-rows: 200px;
            gap: 15px;
            margin-bottom: 80px;
        }

        .masonry-item {
            overflow: hidden;
            position: relative;
            border-radius: 2px;
        }

        .masonry-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .masonry-item:hover img {
            transform: scale(1.1);
        }

        .masonry-item.tall {
            grid-row: span 2;
        }

        .masonry-item.wide {
            grid-column: span 2;
        }

        .testimonials-wrapper {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .testimonial-card {
            background: var(--bg-color);
            padding: 30px;
            border-left: 4px solid var(--gold-primary);
            flex: 1;
            min-width: 280px;
            max-width: 400px;
        }

        .stars {
            color: var(--gold-primary);
            margin-bottom: 15px;
        }

        .quote {
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .author {
            font-weight: 600;
            color: var(--gold-primary);
            font-size: 0.9rem;
        }

        /* 
         * 6. CONTACT
         */
        .contact-section {
            background: linear-gradient(rgba(30,30,30,0.9), rgba(30,30,30,0.9)), url('https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .contact-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            background-color: rgba(30, 30, 30, 0.8);
            padding: 50px;
            border: 1px solid var(--bronze-accent);
            backdrop-filter: blur(5px);
        }

        .contact-form {
            flex: 1;
            min-width: 300px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--gold-primary);
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            background: transparent;
            border: none;
            border-bottom: 1px solid var(--text-grey);
            color: var(--white);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-bottom-color: var(--gold-primary);
        }

        select.form-control {
            cursor: pointer;
        }
        
        select.form-control option {
            background-color: var(--bg-color);
            color: var(--text-light);
        }

        .contact-info {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-item {
            margin-bottom: 30px;
        }

        .info-item h4 {
            margin-bottom: 10px;
            color: var(--white);
        }

        .info-item p {
            color: var(--text-grey);
        }

        footer {
            background-color: #000;
            padding: 30px 0;
            text-align: center;
            border-top: 1px solid #333;
            color: var(--text-grey);
            font-size: 0.85rem;
        }

        /* 
         * RESPONSIVE
         */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .nav-menu {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--bg-darker);
                flex-direction: column;
                padding: 30px;
                transform: translateY(-150%);
                transition: transform 0.4s ease;
                border-bottom: 2px solid var(--gold-primary);
            }

            .nav-menu.active {
                transform: translateY(0);
            }

            .hamburger {
                display: flex;
            }

            .hero-buttons {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
                text-align: center;
            }

            .about-image img {
                box-shadow: none;
                border: 2px solid var(--gold-primary);
            }
            
            .contact-wrapper {
                padding: 20px;
            }
        }
        
        /* Reveal on Scroll Animation Class */
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
    <header id="header">
        <div class="container nav-container">
            <!-- LOGO INJECTED HERE -->
            <div id="logo-container" class="logo-wrapper"></div>
            
            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#events" class="nav-link">Événements</a></li>
                    <li><a href="#sport" class="nav-link">Sport & Détente</a></li>
                    <li><a href="#gastronomy" class="nav-link">Restaurant</a></li>
                    <li><a href="#about" class="nav-link">À propos</a></li>
                    <li><a href="#contact" class="cta-header mobile-only">Réserver</a></li>
                </ul>
            </nav>

            <a href="#contact" class="cta-header desktop-only" style="display: none;">Réserver</a>
            
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="home">
        <div class="hero-slider">
            <!-- Images will be injected by JS -->
        </div>
        <div class="overlay"></div>
        
        <div class="hero-content reveal">
            <h1>L'Art de Vivre d'Exception<br>au Cœur <span>d'Antananarivo</span></h1>
            <p>Salle de réception prestigieuse, complexe sportif moderne et gastronomie fine réunis en un lieu unique.</p>
            <div class="hero-buttons">
                <a href="#services" class="btn btn-primary">Explorer nos Univers</a>
                <a href="#contact" class="btn btn-outline">Voir les Tarifs</a>
            </div>
        </div>
    </section>

    <!-- SERVICES (UNIVERS) -->
    <section class="section-padding univers-section" id="services">
        <div class="container">
            <div class="section-header reveal">
                <h2>Un lieu, trois expériences d'excellence</h2>
                <div class="divider"></div>
            </div>

            <div class="cards-grid">
                <!-- Carte 1: Événements -->
                <div class="card reveal" id="events">
                    <img src="https://images.unsplash.com/photo-1519167758481-83f550bb49b3?q=80&w=2098&auto=format&fit=crop" alt="Salle de réception mariage luxe" class="card-img">
                    <div class="card-content">
                        <h3>Vos Célébrations Inoubliables</h3>
                        <p>Mariages, séminaires et banquets dans un cadre architectural prestigieux. Capacité modulable et service haut de gamme.</p>
                        <a href="#contact" class="card-link">Voir la Salle</a>
                    </div>
                </div>

                <!-- Carte 2: Sport -->
                <div class="card reveal" id="sport">
                    <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1975&auto=format&fit=crop" alt="Salle de sport moderne et piscine" class="card-img">
                    <div class="card-content">
                        <h3>Vitalité & Détente</h3>
                        <p>Équipements high-tech, piscine semi-olympique et espace bien-être pour retrouver votre équilibre.</p>
                        <a href="#contact" class="card-link">Nos Abonnements</a>
                    </div>
                </div>

                <!-- Carte 3: Gastronomie -->
                <div class="card reveal" id="gastronomy">
                    <img src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?q=80&w=2070&auto=format&fit=crop" alt="Haute gastronomie et pâtisserie" class="card-img">
                    <div class="card-content">
                        <h3>Saveurs & Gourmandises</h3>
                        <p>Une cuisine raffinée et une pâtisserie artisanale d'exception pour combler les palais les plus exigeants.</p>
                        <a href="#contact" class="card-link">Découvrir la Carte</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="section-padding about-section" id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-image reveal">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop" alt="Cadre architectural Fitahiantsoa">
                </div>
                <div class="about-content reveal">
                    <h2>Un Standard International<br>au Service de Vos Émotions</h2>
                    <p>Fitahiantsoa a été conçu pour offrir aux Tananariviens un espace où le luxe rencontre la convivialité. Plus qu'un complexe, c'est une destination.</p>
                    <p>Notre mission : sublimer vos moments de vie grâce à une rigueur opérationnelle sans faille et une attention portée aux moindres détails. L'excellence n'est pas une option, c'est notre signature.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY & SOCIAL PROOF -->
    <section class="section-padding gallery-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>L'Expérience Visuelle</h2>
                <div class="divider"></div>
            </div>

            <!-- Masonry Grid -->
            <div class="masonry-grid reveal">
                <div class="masonry-item tall">
                    <img src="https://images.unsplash.com/photo-1519225421980-715cb0202128?q=80&w=900&auto=format&fit=crop" alt="Détail mariage">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1540496905036-5937c10647cc?q=80&w=900&auto=format&fit=crop" alt="Sportif haltères">
                </div>
                <div class="masonry-item wide">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=900&auto=format&fit=crop" alt="Plat gastronomique">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1578474843222-9593bc88d8b0?q=80&w=900&auto=format&fit=crop" alt="Piscine soir">
                </div>
                <div class="masonry-item">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=900&auto=format&fit=crop" alt="Cocktail">
                </div>
            </div>

            <!-- Testimonials -->
            <div class="section-header reveal" style="margin-top: 80px;">
                <h2>Ce que nos clients disent de nous</h2>
                <p style="color: var(--gold-primary); margin-top:10px;">Note moyenne : 4.9/5 Excellence Service Client</p>
            </div>
            
            <div class="testimonials-wrapper reveal">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"Nous avons célébré notre mariage chez Fitahiantsoa. Tout était parfait, de la décoration à la cuisine. Un service digne des grands hôtels internationaux."</p>
                    <p class="author">— Mirana & Hoby, Mariés</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"La salle de sport est incroyablement équipée et toujours propre. C'est mon refuge quotidien après le travail. Le personnel est très pro."</p>
                    <p class="author">— Andry R., Membre Gym</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p class="quote">"Les pâtisseries sont divines. J'y viens tous les dimanches pour le brunch. Un cadre apaisant qu'on ne trouve nulle part ailleurs à Tana."</p>
                    <p class="author">— Sarah L., Expatriée</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="section-padding contact-section" id="contact">
        <div class="container">
            <div class="contact-wrapper reveal">
                <div class="contact-form">
                    <h2>Prêt à vivre l'expérience Fitahiantsoa ?</h2>
                    <p style="color:var(--text-grey); margin-bottom:30px;">Remplissez ce formulaire, nous vous recontacterons dans les plus brefs délais.</p>
                    
                    <form>
                        <div class="form-group">
                            <label for="name">Votre Nom</label>
                            <input type="text" id="name" class="form-control" placeholder="Entrez votre nom complet">
                        </div>
                        <div class="form-group">
                            <label for="interest">Je suis intéressé par...</label>
                            <select id="interest" class="form-control">
                                <option value="events">Salle de Fête & Événements</option>
                                <option value="sport">Sport & Abonnement Gym</option>
                                <option value="restaurant">Restaurant & Pâtisserie</option>
                                <option value="other">Autre demande</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" class="form-control" placeholder="ex: 034 00 000 00">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width:100%; border:none; margin-top:20px;">Contactez-nous maintenant</button>
                    </form>
                </div>

                <div class="contact-info">
                    <div class="info-item">
                        <h4>Adresse</h4>
                        <p>Lot II A 45 Ter<br>Antananarivo, Madagascar<br><a href="#" style="color:var(--gold-primary); text-decoration:underline; font-size:0.9rem;">Voir sur Google Maps</a></p>
                    </div>
                    <div class="info-item">
                        <h4>Contact Direct</h4>
                        <p>Téléphone : +261 34 00 000 00<br>Email : contact@fitahiantsoa.mg</p>
                    </div>
                    <div class="info-item">
                        <h4>Horaires</h4>
                        <p>Sport : 05h00 - 21h00 (7j/7)<br>Restaurant : 08h00 - 22h00<br>Événements : Sur réservation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Fitahiantsoa Complexe. Tous droits réservés. Design Premium par [Votre Nom].</p>
        </div>
    </footer>

    <script>
        // --- 1. CONFIGURATION DU LOGO (OBLIGATOIRE) ---
        const LOGO_URL = "logo.jpg";
        
        // Injection du logo
        const logoContainer = document.getElementById('logo-container');
        if(logoContainer) {
            logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt=""></a>`;
        }

        // --- 2. HERO SLIDER LOGIC ---
        const slidesData = [
            "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop", // Mariage / Reception
            "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop", // Gastronomie
            "https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?q=80&w=2070&auto=format&fit=crop"  // Piscine luxe
        ];

        const sliderContainer = document.querySelector('.hero-slider');
        
        // Init Slider
        slidesData.forEach((url, index) => {
            const div = document.createElement('div');
            div.className = `hero-slide ${index === 0 ? 'active' : ''}`;
            div.style.backgroundImage = `url('${url}')`;
            sliderContainer.appendChild(div);
        });

        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');

        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 5000); // Change every 5 seconds

        // --- 3. SCROLL EFFECTS (Header & Reveal) ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                // Show 'Réserver' button on desktop when scrolled
                document.querySelector('.cta-header.desktop-only').style.display = 'inline-block';
            } else {
                header.classList.remove('scrolled');
                document.querySelector('.cta-header.desktop-only').style.display = 'none';
            }
        });

        // Intersection Observer for Reveal Animation
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealObserver.observe(el));

        // --- 4. MOBILE MENU ---
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close menu when link is clicked
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            navMenu.classList.remove('active');
        }));

    </script>
</body>
</html>