<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel de l'Avenue - Antananarivo | Luxe & Casino</title>
    <meta name="description" content="L'élégance du repos, l'adrénaline du jeu. Hôtel de standing, Grand Casino et Lounge Bar au cœur d'Analakely.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --gold: #D4AF37;
            --gold-light: #F3E5AB;
            --black: #050505;
            --charcoal: #121212;
            --white: #FFFFFF;
            --grey-light: #F4F4F4;
            --grey-med: #CCCCCC;
            --text-dark: #1A1A1A;
            --text-light: #F9F9F9;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Manrope', sans-serif;
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; font-size: 16px; }
        body {
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
            transition: background-color 0.5s ease;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* TYPOGRAPHY */
        h1, h2, h3, h4 { font-family: var(--font-heading); font-weight: 700; }
        .text-gold { color: var(--gold); }
        .uppercase { text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem; font-weight: 800; }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(5, 5, 5, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        header.scrolled {
            background: rgba(5, 5, 5, 0.9);
            padding: 1rem 5%;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        nav ul { display: flex; gap: 2.5rem; }
        nav a {
            color: var(--white);
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }
        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--gold);
            transition: var(--transition);
        }
        nav a:hover::after { width: 100%; }

        /* Toggle Switch */
        .mode-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--white);
            cursor: pointer;
        }
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        .switch input { opacity: 0; width: 0; height: 0; }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(255,255,255,0.2);
            border-radius: 34px;
            transition: .4s;
            border: 1px solid rgba(255,255,255,0.3);
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 3px;
            background-color: var(--gold);
            border-radius: 50%;
            transition: .4s;
        }
        input:checked + .slider { background-color: var(--black); border-color: var(--gold); }
        input:checked + .slider:before { transform: translateX(26px); }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 1;
        }
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.7) 100%),
                        radial-gradient(circle at center, transparent 0%, #000 120%);
            z-index: 2;
        }
        .hero-bg img {
            width: 100%; height: 100%; object-fit: cover;
            animation: slowZoom 20s infinite alternate;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: var(--white);
            max-width: 900px;
            padding: 0 20px;
            margin-top: 60px; /* Prevent header overlap */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards 0.5s;
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 300;
            margin-bottom: 3rem;
            color: rgba(255,255,255,0.9);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards 0.8s;
        }

        .cta-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            opacity: 0;
            animation: fadeInUp 1s forwards 1.1s;
        }

        .btn {
            padding: 18px 35px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .btn-gold {
            background-color: var(--gold);
            color: var(--black);
        }
        .btn-gold:hover {
            background-color: var(--white);
            color: var(--black);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border-color: var(--white);
        }
        .btn-outline:hover {
            background-color: var(--white);
            color: var(--black);
            transform: translateY(-5px);
        }

        /* ACCOMMODATION (White Section) */
        .accommodation {
            padding: 8rem 5%;
            background-color: var(--white);
            color: var(--text-dark);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        .section-header h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--black);
        }
        .section-header p {
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .room-card {
            background: var(--white);
            border: 1px solid #eee;
            transition: var(--transition);
            cursor: pointer;
            overflow: hidden;
        }
        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        }
        .room-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        .room-image img {
            transition: transform 0.8s ease;
        }
        .room-card:hover .room-image img {
            transform: scale(1.1);
        }
        .room-details {
            padding: 2rem;
        }
        .room-icons {
            display: flex;
            gap: 15px;
            margin: 1rem 0;
            color: var(--gold);
            font-size: 1.2rem;
        }
        .price {
            font-size: 0.9rem;
            color: #888;
            margin-top: 1rem;
            display: block;
        }
        .price strong { color: var(--black); font-size: 1.2rem; }

        /* ENTERTAINMENT (Dark Section) */
        .entertainment {
            padding: 8rem 5%;
            background-color: var(--black);
            color: var(--white);
            position: relative;
        }
        /* Bento Grid */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 350px);
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .bento-item {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.1);
            group;
        }
        
        /* Grid Layout Specifics */
        .bento-item:nth-child(1) { grid-column: span 2; grid-row: span 2; } /* Casino */
        .bento-item:nth-child(2) { grid-column: span 2; } /* Lounge */
        .bento-item:nth-child(3) { grid-column: span 1; } /* Sports */
        .bento-item:nth-child(4) { grid-column: span 1; } /* Event */

        .bento-bg {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            opacity: 0.6;
        }
        .bento-item:hover .bento-bg {
            transform: scale(1.05);
            opacity: 0.4;
        }
        
        .bento-content {
            position: absolute;
            bottom: 0; left: 0;
            padding: 2rem;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        }
        .bento-content h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--gold);
        }
        .bento-content p { font-size: 0.95rem; color: #ddd; }

        /* SOCIAL PROOF */
        .social-proof {
            background-color: var(--grey-light);
            padding: 6rem 5%;
            text-align: center;
        }
        .testimonials-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
        }
        .testimonial-card {
            background: var(--white);
            padding: 2rem;
            max-width: 350px;
            text-align: left;
            border-left: 3px solid var(--gold);
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .stars { color: var(--gold); margin-bottom: 1rem; }
        .author { margin-top: 1.5rem; font-weight: 700; font-size: 0.9rem; }
        .role { font-size: 0.8rem; color: #777; font-weight: 400; }

        /* FOOTER */
        footer {
            background-color: #080808;
            color: var(--white);
            padding: 5rem 5% 2rem;
            border-top: 1px solid rgba(255,255,255,0.05);
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }
        .footer-col h4 { margin-bottom: 1.5rem; color: var(--gold); }
        .footer-col ul li { margin-bottom: 0.8rem; color: #999; cursor: pointer; transition: 0.3s; }
        .footer-col ul li:hover { color: var(--white); transform: translateX(5px); }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.05);
            font-size: 0.8rem;
            color: #555;
        }

        /* MOBILE STICKY BAR */
        .mobile-sticky-bar {
            display: none;
            position: fixed;
            bottom: 0; left: 0; width: 100%;
            background: rgba(0,0,0,0.9);
            backdrop-filter: blur(10px);
            padding: 15px 20px;
            z-index: 9999;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--gold);
        }
        .mobile-sticky-bar .price-info { color: var(--white); font-size: 0.9rem; }
        .mobile-sticky-bar .btn-sticky {
            background: var(--gold);
            color: var(--black);
            padding: 10px 20px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            border-radius: 2px;
        }

        /* ANIMATIONS */
        @keyframes slowZoom { from { transform: scale(1); } to { transform: scale(1.15); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: auto;
            }
            .bento-item:nth-child(1), .bento-item:nth-child(2),
            .bento-item:nth-child(3), .bento-item:nth-child(4) {
                grid-column: span 1;
                grid-row: span 1;
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            header { padding: 1rem; }
            nav { display: none; } /* Mobile Menu would go here */
            .cta-group { flex-direction: column; width: 100%; }
            .btn { width: 100%; }
            .hero h1 { font-size: 2.5rem; }
            .bento-grid { grid-template-columns: 1fr; }
            .bento-item { grid-column: span 1 !important; }
            .mobile-sticky-bar { display: flex; }
            .accommodation, .entertainment, .social-proof { padding: 4rem 1.5rem; }
        }
        
        /* Utility for day/night toggle interaction */
        body.night-mode .accommodation {
            background-color: #1a1a1a;
            color: #f1f1f1;
        }
        body.night-mode .accommodation h2, 
        body.night-mode .accommodation .price strong {
            color: var(--gold);
        }
        body.night-mode .room-card {
            background-color: #222;
            border-color: #333;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="main-header">
        <div class="logo-container" id="logo-wrapper">
            <!-- LOGO INJECTED VIA JS -->
        </div>
        <nav>
            <ul>
                <li><a href="#chambres">Chambres</a></li>
                <li><a href="#casino">Casino</a></li>
                <li><a href="#lounge">Lounge</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="mode-toggle">
            <span style="font-size: 0.8rem; text-transform:uppercase; letter-spacing:1px;">Ambiance</span>
            <label class="switch">
                <input type="checkbox" id="theme-switch">
                <span class="slider"></span>
            </label>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-bg">
            <!-- Image: Elegant Night City/Hotel Mix -->
            <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2070&auto=format&fit=crop" alt="Hôtel de l'Avenue Ambiance">
        </div>
        <div class="hero-content">
            <p class="uppercase text-gold">Antananarivo - Analakely</p>
            <h1>L'Élégance du Repos,<br>L'Adrénaline du Jeu.</h1>
            <p>L'expérience complète : Hébergement Standing, Grand Casino, Lounge Bar & Spectacles.</p>
            <div class="cta-group">
                <button class="btn btn-gold">Réserver ma Chambre</button>
                <button class="btn btn-outline">Découvrir le Casino</button>
            </div>
        </div>
    </section>

    <!-- ACCOMMODATION -->
    <section id="chambres" class="accommodation">
        <div class="section-header">
            <p class="uppercase text-gold">Hébergement</p>
            <h2>Votre Sanctuaire Urbain</h2>
            <p>Malgré l'effervescence du centre-ville, nos chambres insonorisées vous garantissent un silence absolu et un confort premium.</p>
        </div>
        
        <div class="rooms-grid">
            <!-- Room 1 -->
            <div class="room-card">
                <div class="room-image">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop" alt="Chambre Standard">
                </div>
                <div class="room-details">
                    <h3>Chambre Standard</h3>
                    <div class="room-icons">
                        <i class="fas fa-wifi"></i>
                        <i class="fas fa-snowflake"></i>
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <p>Idéale pour le voyageur d'affaires. Fonctionnelle et élégante.</p>
                    <span class="price">À partir de <strong>200 000 Ar</strong> / nuit</span>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="room-card">
                <div class="room-image">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=1974&auto=format&fit=crop" alt="Chambre Supérieure">
                </div>
                <div class="room-details">
                    <h3>Supérieure Vue Avenue</h3>
                    <div class="room-icons">
                        <i class="fas fa-wifi"></i>
                        <i class="fas fa-cocktail"></i>
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <p>Plus d'espace avec une vue imprenable sur l'Avenue de l'Indépendance.</p>
                    <span class="price">À partir de <strong>300 000 Ar</strong> / nuit</span>
                </div>
            </div>
            <!-- Room 3 -->
            <div class="room-card">
                <div class="room-image">
                    <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=2070&auto=format&fit=crop" alt="Suite Prestige">
                </div>
                <div class="room-details">
                    <h3>Suite Prestige</h3>
                    <div class="room-icons">
                        <i class="fas fa-gem"></i>
                        <i class="fas fa-bath"></i>
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <p>Le summum du luxe. Salon séparé et accès VIP au Casino.</p>
                    <span class="price">À partir de <strong>600 000 Ar</strong> / nuit</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ENTERTAINMENT (BENTO BOX) -->
    <section id="casino" class="entertainment">
        <div class="section-header">
            <p class="uppercase text-gold">Divertissement</p>
            <h2 style="color:white;">Les Nuits Vibrantes de Tana</h2>
        </div>

        <div class="bento-grid">
            <!-- Casino - Large -->
            <div class="bento-item">
                <img src="https://images.unsplash.com/photo-1605870445919-838d190e8e1b?q=80&w=2071&auto=format&fit=crop" class="bento-bg" alt="Casino Roulette">
                <div class="bento-content">
                    <h3>Le Grand Casino</h3>
                    <p>Le frisson du jeu : Roulette, Black Jack & Machines à sous dernière génération.</p>
                </div>
            </div>
            <!-- Lounge - Wide -->
            <div class="bento-item">
                <img src="https://images.unsplash.com/photo-1572116469696-31de0f17cc34?q=80&w=1974&auto=format&fit=crop" class="bento-bg" alt="Bar Lounge">
                <div class="bento-content">
                    <h3>Lounge & Cabaret</h3>
                    <p>Concerts live, soirées à thème et mixologie créative.</p>
                </div>
            </div>
            <!-- Sports Bar - Small -->
            <div class="bento-item">
                <img src="https://images.unsplash.com/photo-1570303345332-e3e7d72033e3?q=80&w=1974&auto=format&fit=crop" class="bento-bg" alt="Billard">
                <div class="bento-content">
                    <h3>Sports Bar</h3>
                    <p>Les grands matchs sur écran géant.</p>
                </div>
            </div>
            <!-- Events - Small -->
            <div class="bento-item">
                <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=2070&auto=format&fit=crop" class="bento-bg" alt="DJ Party">
                <div class="bento-content">
                    <h3>Agenda</h3>
                    <p>Programmation de la semaine.</p>
                </div>
            </div>
        </div>
        <div style="text-align:center; margin-top:3rem;">
            <a href="#" class="btn btn-outline" style="border-color:var(--gold); color:var(--gold);">Voir toute la programmation</a>
        </div>
    </section>

    <!-- SOCIAL PROOF & LOCATION -->
    <section class="social-proof">
        <div class="section-header">
            <p class="uppercase text-gold">Ils parlent de nous</p>
            <h2>L'Adresse Incontournable</h2>
        </div>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>"Le meilleur emplacement pour tout faire à pied. Le Wifi est top pour travailler."</p>
                <div class="author">Jean R. <span class="role">- Voyageur d'affaires</span></div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <p>"Une soirée incroyable au Casino et une nuit paisible juste après. Le contraste parfait."</p>
                <div class="author">Sarah & Marc <span class="role">- Couple</span></div>
            </div>
            <div class="testimonial-card">
                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                <p>"Le personnel est aux petits soins et la sécurité est rassurante."</p>
                <div class="author">Hery T. <span class="role">- Local</span></div>
            </div>
        </div>
        <div style="margin-top: 4rem; position:relative;">
            <p class="uppercase" style="margin-bottom:1rem; font-weight:700;">Situé sur l'Avenue de l'Indépendance</p>
            <!-- Fake Map Visual for Premium Feel -->
            <div style="width:100%; height:300px; background: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=2074&auto=format&fit=crop') center/cover grayscale(100%); display:flex; align-items:center; justify-content:center;">
                <button class="btn btn-gold"><i class="fas fa-map-marker-alt"></i> Ouvrir sur Google Maps</button>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="footer-grid">
            <div class="footer-col">
                <h4 class="uppercase">Hôtel de l'Avenue</h4>
                <p style="color:#777; font-size:0.9rem;">L'alliance du luxe et du divertissement au cœur historique d'Antananarivo.</p>
            </div>
            <div class="footer-col">
                <h4 class="uppercase">Navigation</h4>
                <ul>
                    <li>Nos Chambres</li>
                    <li>Le Casino</li>
                    <li>Restaurant & Bar</li>
                    <li>Événements</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="uppercase">Contact</h4>
                <ul>
                    <li><i class="fas fa-phone-alt text-gold"></i> +261 20 22 000 00</li>
                    <li><i class="fab fa-whatsapp text-gold"></i> +261 34 00 000 00</li>
                    <li><i class="fas fa-envelope text-gold"></i> reception@hotelavenue.mg</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Hôtel de l'Avenue Antananarivo. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- STICKY MOBILE BAR -->
    <div class="mobile-sticky-bar">
        <div class="price-info">
            À partir de <span class="text-gold" style="font-weight:700;">200k Ar</span>
        </div>
        <a href="#book" class="btn-sticky">Réserver</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // 1. GESTION DU LOGO (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        
        // Insertion du logo
        const logoWrapper = document.getElementById('logo-wrapper');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Hôtel de l'Avenue Logo";
        logoWrapper.appendChild(logoImg);

        // 2. SCROLL HEADER EFFECT
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 3. DAY / NIGHT TOGGLE (MICRO-INTERACTION)
        const themeSwitch = document.getElementById('theme-switch');
        const body = document.body;

        themeSwitch.addEventListener('change', () => {
            if(themeSwitch.checked) {
                body.classList.add('night-mode');
            } else {
                body.classList.remove('night-mode');
            }
        });

        // 4. SCROLL ANIMATIONS (INTERSECTION OBSERVER)
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

        // Apply fade-in to sections
        document.querySelectorAll('.room-card, .bento-item, .testimonial-card').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });
    </script>
</body>
</html>