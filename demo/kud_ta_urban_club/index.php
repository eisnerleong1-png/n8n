<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUDéTA | Best Nightclub & Lounge Antananarivo</title>
    <meta name="description" content="L'expérience premium au cœur de Tana. Clubbing, Lounge & Gastronomie. Réservez votre table VIP au KUDéTA.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #00585B; /* Deep Teal */
            --primary-dark: #00383a;
            --accent: #7DAEB2; /* Soft Teal */
            --text: #FFFFFF;
            --glass: rgba(0, 88, 91, 0.4);
            --glass-border: rgba(125, 174, 178, 0.3);
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
            font-family: 'Montserrat', sans-serif;
            background-color: #021a1b; /* Very dark teal/black base */
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        /* --- UTILS --- */
        .container {
            width: 90%;
            max-width: 1200px;
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
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--primary);
            box-shadow: 0 0 15px rgba(125, 174, 178, 0.2);
        }

        .btn-primary:hover {
            background-color: #fff;
            color: var(--primary);
            box-shadow: 0 0 25px rgba(125, 174, 178, 0.6);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        .btn-outline:hover {
            background: #fff;
            color: var(--primary);
            transform: translateY(-2px);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .mb-2 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 2rem; }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(2, 26, 27, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 50px; /* Ajusté pour logo.jpg */
            width: auto;
            filter: brightness(0) invert(1); /* Ensure logo is white if jpg is not */
        }

        nav ul {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        nav ul li a {
            font-size: 0.85rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background-color: var(--accent);
            color: var(--primary);
            padding: 10px 24px !important;
            font-weight: 700;
        }

        .nav-cta::after { display: none; }
        .nav-cta:hover { background-color: #fff; }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* --- HERO --- */
        #hero {
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
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1570698188566-704953335271?q=80&w=2574&auto=format&fit=crop') no-repeat center center/cover;
            z-index: 1;
            animation: zoomEffect 20s infinite alternate;
        }

        @keyframes zoomEffect {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,88,91,0.8));
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Prevent header overlap */
        }

        .hero-content h1 {
            font-size: 4.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /* --- SOCIAL PROOF --- */
        #vibe {
            background-color: #011213;
        }

        .vibe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .vibe-card {
            position: relative;
            height: 350px;
            overflow: hidden;
            border-radius: 4px;
        }

        .vibe-card img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .vibe-card:hover img {
            transform: scale(1.1);
        }

        .vibe-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        }

        /* --- AGENDA --- */
        #agenda {
            background-color: #021a1b;
            position: relative;
        }

        .agenda-scroller {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            padding-bottom: 30px;
            scroll-snap-type: x mandatory;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .agenda-scroller::-webkit-scrollbar {
            display: none;
        }

        .event-card {
            min-width: 320px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 8px;
            scroll-snap-align: center;
            transition: var(--transition);
        }

        .event-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--accent);
        }

        .event-date {
            color: var(--accent);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            margin-bottom: 10px;
            display: block;
        }

        .event-card h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .event-card p {
            color: #ccc;
            font-size: 0.95rem;
        }

        .price-tag {
            display: inline-block;
            margin-top: 20px;
            padding: 5px 15px;
            border: 1px solid var(--accent);
            border-radius: 50px;
            font-size: 0.8rem;
            color: var(--accent);
        }

        /* --- MENU TEASER --- */
        #menu {
            display: flex;
            flex-wrap: wrap;
        }

        .menu-img {
            flex: 1;
            min-width: 400px;
            background: url('https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=2670&auto=format&fit=crop') center/cover;
            min-height: 500px;
        }

        .menu-content {
            flex: 1;
            min-width: 400px;
            padding: 80px;
            background-color: #032224;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 10px;
        }

        .item-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: #fff;
        }

        .item-price {
            color: var(--accent);
            font-weight: 600;
        }

        /* --- VIP RESERVATION --- */
        #vip {
            background-color: var(--primary);
            position: relative;
            background-image: 
                linear-gradient(rgba(0, 88, 91, 0.9), rgba(0, 88, 91, 0.95)),
                url('https://www.transparenttextures.com/patterns/cubes.png');
        }

        .vip-container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(0, 0, 0, 0.2);
            padding: 50px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
            text-align: left;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
        .full-width { grid-column: span 2; }

        label {
            font-size: 0.8rem;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--accent);
        }

        input, select {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 15px;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            border-radius: 4px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255,255,255,0.15);
        }

        .price-anchor {
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
            font-style: italic;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #000;
            padding: 60px 0 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .footer-col h4 {
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .social-links a {
            margin-right: 15px;
            font-size: 1rem;
            color: var(--accent);
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 20px;
            font-size: 0.8rem;
        }

        /* --- MOBILE STICKY BAR --- */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            z-index: 999;
            text-align: center;
            display: none; /* Hidden on desktop */
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero-content h1 { font-size: 3.5rem; }
            .menu-content { padding: 40px; }
        }

        @media (max-width: 768px) {
            .hamburger { display: block; color: #fff; font-size: 1.5rem; z-index: 1001; }
            
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background-color: #000;
                flex-direction: column;
                justify-content: center;
                transition: 0.5s ease;
                padding: 40px;
            }

            nav ul.active { right: 0; }

            .hero-content h1 { font-size: 2.8rem; }
            .hero-btns { flex-direction: column; }
            
            #menu { flex-direction: column; }
            .menu-img { min-height: 300px; min-width: 100%; }
            .menu-content { min-width: 100%; }
            
            form { grid-template-columns: 1fr; }
            .full-width { grid-column: span 1; }
            .vip-container { padding: 30px 20px; }

            .mobile-sticky-cta { display: block; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" id="logo-container">
                <img id="logo-img" alt="KUDéTA">
            </a>
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <nav>
                <ul id="nav-list">
                    <li><a href="#hero" onclick="toggleMenu()">Accueil</a></li>
                    <li><a href="#agenda" onclick="toggleMenu()">Agenda</a></li>
                    <li><a href="#menu" onclick="toggleMenu()">Carte</a></li>
                    <li><a href="#vip" onclick="toggleMenu()">VIP</a></li>
                    <li><a href="#vip" class="nav-cta btn">Réserver une table</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="reveal">L'Art de la Nuit <br>à Antananarivo.</h1>
            <p class="reveal">Clubbing, Lounge & Gastronomie. L'expérience premium au cœur de Tana.</p>
            <div class="hero-btns reveal">
                <a href="#agenda" class="btn btn-outline">Voir la programmation</a>
                <a href="#vip" class="btn btn-primary">Réserver mon accès VIP</a>
            </div>
        </div>
    </section>

    <!-- Social Proof / Vibe -->
    <section id="vibe" class="section-padding">
        <div class="container">
            <div class="text-center mb-4 reveal">
                <h2>L'Épicentre de la nuit malgache</h2>
                <p style="color: var(--accent); margin-top: 10px;">Rejoignez l'élite locale et internationale dans le cadre le plus sécurisé et branché.</p>
            </div>
            <div class="vibe-grid reveal">
                <div class="vibe-card">
                    <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?q=80&w=2670&auto=format&fit=crop" alt="Ambiance Nightclub">
                    <div class="vibe-overlay"><span>@Kudeta_Tana</span></div>
                </div>
                <div class="vibe-card">
                    <img src="https://images.unsplash.com/photo-1574391884720-3850b597d62e?q=80&w=2670&auto=format&fit=crop" alt="Cocktails Luxe">
                    <div class="vibe-overlay"><span>#MixologyArt</span></div>
                </div>
                <div class="vibe-card">
                    <img src="https://images.unsplash.com/photo-1571266028243-3716950387ad?q=80&w=2670&auto=format&fit=crop" alt="DJ Set">
                    <div class="vibe-overlay"><span>#TanaNightLife</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda -->
    <section id="agenda" class="section-padding">
        <div class="container">
            <h2 class="reveal mb-4">Cette Semaine au KUDéTA</h2>
            <div class="agenda-scroller reveal">
                <!-- Card 1 -->
                <div class="event-card">
                    <span class="event-date">Jeudi 19:00</span>
                    <h3>Afterwork Jazz</h3>
                    <p>Ambiance feutrée, live band & cocktails signatures.</p>
                    <span class="price-tag">Entrée Libre</span>
                </div>
                <!-- Card 2 -->
                <div class="event-card">
                    <span class="event-date">Vendredi 23:00</span>
                    <h3>Fever Night</h3>
                    <p>DJ Résident. Afro House & Deep Tech jusqu'à l'aube.</p>
                    <span class="price-tag">Sur liste</span>
                </div>
                <!-- Card 3 -->
                <div class="event-card">
                    <span class="event-date">Samedi 22:00</span>
                    <h3>Showcase Exclusif</h3>
                    <p>Guest Star International. Le rendez-vous de l'élite.</p>
                    <span class="price-tag">30 000 Ar</span>
                </div>
                <!-- Card 4 (Loop) -->
                <div class="event-card">
                    <span class="event-date">Dimanche 16:00</span>
                    <h3>Sunset Lounge</h3>
                    <p>Chill session pour terminer la semaine.</p>
                    <span class="price-tag">Entrée Libre</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Teaser -->
    <section id="menu">
        <div class="menu-img"></div>
        <div class="menu-content">
            <h2 class="mb-4">Mixologie & Tapas</h2>
            
            <div class="menu-item reveal">
                <div class="item-info">
                    <span class="item-name">Kudéta Mist</span>
                    <p style="font-size: 0.8rem; color: #aaa;">Gin Tanqueray, Citronnelle, Mousse de Gingembre</p>
                </div>
                <span class="item-price">25 000 Ar</span>
            </div>

            <div class="menu-item reveal">
                <div class="item-info">
                    <span class="item-name">Planche Fusion</span>
                    <p style="font-size: 0.8rem; color: #aaa;">Foie gras poêlé, samoussa crevette, fromage local</p>
                </div>
                <span class="item-price">45 000 Ar</span>
            </div>

            <div class="menu-item reveal">
                <div class="item-info">
                    <span class="item-name">Champagne Premium</span>
                    <p style="font-size: 0.8rem; color: #aaa;">Moët & Chandon, Ruinart (Bouteille)</p>
                </div>
                <span class="item-price">400k+ Ar</span>
            </div>

            <a href="#" class="btn btn-outline" style="margin-top: 30px; align-self: flex-start;">Voir la carte complète</a>
        </div>
    </section>

    <!-- VIP Reservation -->
    <section id="vip" class="section-padding">
        <div class="container">
            <div class="vip-container reveal">
                <h2>Vivez l'expérience VIP</h2>
                <p>Réservez votre espace privé. Confirmation immédiate.</p>
                
                <form onsubmit="submitForm(event)">
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Invités</label>
                        <select>
                            <option>2 Personnes</option>
                            <option>4-6 Personnes</option>
                            <option>8+ Personnes (Salon)</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label>Zone Souhaitée</label>
                        <select>
                            <option>Salon VIP (Intimité)</option>
                            <option>Table Piste (Ambiance)</option>
                            <option>Bar Lounge</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label>Votre Téléphone (WhatsApp)</label>
                        <input type="tel" placeholder="+261 34 ..." required>
                    </div>
                    <div class="full-width">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Valider ma demande</button>
                    </div>
                </form>
                <p class="price-anchor">* Tables à partir de 200 000 Ar (Crédit consommation inclus)</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <span class="footer-logo">KUDéTA</span>
                    <p>Quartier Isoraka, près de la Chocolaterie.<br>Antananarivo 101, Madagascar.</p>
                    <a href="#" style="color: var(--accent); display:block; margin-top:10px; text-decoration: underline;">Voir sur Google Maps</a>
                </div>
                <div class="footer-col">
                    <h4>Horaires</h4>
                    <p>Jeudi - Samedi</p>
                    <p style="color: #fff;">21h00 - Aube</p>
                </div>
                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#">Facebook</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 KUDéTA Urban Club. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky CTA -->
    <a href="#vip" class="btn btn-primary mobile-sticky-cta">Réserver</a>

    <script>
        // LOGO INJECTION IMPERATIVE
        const LOGO_URL = "logo.jpg";
        document.getElementById('logo-img').src = LOGO_URL;

        // Navbar scroll effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        function toggleMenu() {
            const nav = document.getElementById('nav-list');
            nav.classList.toggle('active');
        }

        // Simple Reveal Animation on Scroll
        const reveals = document.querySelectorAll('.reveal');
        
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            reveals.forEach((reveal) => {
                const elementTop = reveal.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    reveal.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        // Trigger once on load
        revealOnScroll();

        // Form Mock Submission
        function submitForm(e) {
            e.preventDefault();
            alert("Merci ! Votre demande de réservation VIP a été reçue. Notre équipe vous contactera via WhatsApp dans les 15 minutes pour confirmer.");
        }
    </script>
</body>
</html>