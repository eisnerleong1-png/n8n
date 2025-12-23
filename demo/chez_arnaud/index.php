<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Arnaud - Pizzeria Traditionnelle à Antananarivo</title>
    
    <!-- Polices Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;400;500;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-primary: #1E276E; /* Bleu Institution */
            --color-accent: #B22125; /* Rouge Appétit */
            --color-bg: #FAFAF5; /* Crème Premium */
            --color-text: #1a1a1a;
            --color-text-light: #666;
            --color-white: #ffffff;
            
            --font-display: 'Playfair Display', serif;
            --font-body: 'DM Sans', sans-serif;
            
            --spacing-container: 1200px;
            --transition-smooth: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-card: 0 10px 30px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.12);
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
            font-family: var(--font-body);
            background-color: var(--color-bg);
            color: var(--color-text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- UTILS --- */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            transition: var(--transition-smooth);
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-white);
            border: 2px solid var(--color-accent);
            box-shadow: 0 4px 15px rgba(178, 33, 37, 0.3);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--color-accent);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-primary);
            border: 2px solid var(--color-primary);
        }

        .btn-secondary:hover {
            background-color: var(--color-primary);
            color: var(--color-white);
            transform: translateY(-2px);
        }

        h1, h2, h3 {
            font-family: var(--font-display);
            font-weight: 700;
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition-smooth);
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 60px; /* Taille ajustée pour premium look */
            width: auto;
            object-fit: contain;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        nav a {
            color: var(--color-white);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            position: relative;
            transition: 0.3s;
        }

        header.scrolled nav a {
            color: var(--color-primary);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--color-accent);
            transition: 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            color: var(--color-white);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1541745537411-b8096dc29c42?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(30,39,110,0.6) 100%);
            z-index: -1;
        }

        .hero-content {
            max-width: 800px;
            margin-top: 80px; /* Évite le header */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 24px;
        }

        .hero p {
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 40px;
            opacity: 0.9;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background: var(--color-white);
            padding: 40px 0;
            margin-top: -50px;
            position: relative;
            z-index: 10;
            box-shadow: var(--shadow-card);
            border-radius: 8px;
        }

        .trust-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            text-align: center;
        }

        .trust-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            color: var(--color-primary);
            padding: 10px;
        }

        .trust-item i {
            font-size: 1.5rem;
            color: var(--color-accent);
        }

        .trust-item span {
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- FAVORITES (MENU) --- */
        .favorites {
            padding: 100px 0;
            text-align: center;
        }

        .section-header {
            margin-bottom: 60px;
        }

        .section-header h2 {
            color: var(--color-primary);
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--color-text-light);
            font-size: 1.1rem;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .menu-card {
            background: var(--color-white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition-smooth);
            text-align: left;
            position: relative;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-img-wrapper {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .card-img-wrapper img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 30px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .card-header h3 {
            font-size: 1.5rem;
            color: var(--color-primary);
        }

        .price {
            font-family: var(--font-body);
            font-weight: 700;
            color: var(--color-accent);
            font-size: 1.2rem;
            white-space: nowrap;
        }

        .card-content p {
            color: var(--color-text-light);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .tag {
            display: inline-block;
            background: #f0f0f0;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            color: #666;
            text-transform: uppercase;
        }

        /* --- HERITAGE --- */
        .heritage {
            background-color: var(--color-white);
            padding: 100px 0;
            overflow: hidden;
        }

        .heritage-layout {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .heritage-content {
            flex: 1;
        }

        .heritage-content h2 {
            font-size: 3rem;
            color: var(--color-primary);
            margin-bottom: 30px;
        }

        .heritage-content p {
            font-size: 1.1rem;
            color: var(--color-text-light);
            margin-bottom: 20px;
        }

        .heritage-visuals {
            flex: 1;
            position: relative;
            height: 500px;
        }

        .img-old, .img-new {
            position: absolute;
            border-radius: 8px;
            box-shadow: var(--shadow-card);
            background-size: cover;
            background-position: center;
            transition: var(--transition-smooth);
        }

        .img-old {
            top: 0;
            left: 0;
            width: 70%;
            height: 70%;
            z-index: 1;
            background-image: url('https://images.unsplash.com/photo-1550966871-3ed3c6227b3d?q=80&w=800&auto=format&fit=crop'); /* Black & white style */
            filter: grayscale(100%) sepia(20%);
        }

        .img-new {
            bottom: 0;
            right: 0;
            width: 70%;
            height: 70%;
            z-index: 2;
            background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=800&auto=format&fit=crop'); /* Modern */
            border: 5px solid var(--color-white);
        }
        
        .heritage-visuals:hover .img-old {
            transform: translate(-10px, -10px);
        }

        /* --- FOOTER --- */
        footer {
            background-color: #111;
            color: var(--color-white);
            padding: 80px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-info h3 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .footer-info p {
            margin-bottom: 15px;
            color: #bbb;
        }

        .footer-info a {
            color: var(--color-white);
            text-decoration: none;
            transition: 0.3s;
        }
        
        .footer-info a:hover {
            color: var(--color-accent);
        }

        .map-wrapper {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: invert(90%) hue-rotate(180deg);
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #333;
            padding-top: 20px;
            color: #666;
            font-size: 0.8rem;
        }

        /* --- MOBILE STICKY BUTTON --- */
        .sticky-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--color-accent);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 20px rgba(178, 33, 37, 0.4);
            z-index: 999;
            text-decoration: none;
            transition: var(--transition-smooth);
        }
        
        .sticky-btn:hover {
            transform: scale(1.1);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 900px) {
            .hero h1 { font-size: 2.8rem; }
            .heritage-layout { flex-direction: column; }
            .heritage-visuals { width: 100%; height: 400px; }
            .footer-grid { grid-template-columns: 1fr; }
            .nav-container ul { display: none; } /* Mobile Menu simplifié: juste logo et action */
        }

        @media (max-width: 600px) {
            .trust-grid { flex-direction: column; gap: 20px; }
            .trust-bar { width: 90%; margin: -30px auto 0; }
            .menu-grid { grid-template-columns: 1fr; }
            .hero-content { margin-top: 100px; }
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="brand-logo" alt="Chez Arnaud Logo">
            </a>
            <nav>
                <ul>
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#favorites">Menu</a></li>
                    <li><a href="#heritage">Notre Histoire</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </nav>
            <a href="#footer" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.8rem;">Réserver</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1>L'Authentique Pizza au Feu de Bois à Antananarivo - Depuis 1994</h1>
                <p>30 ans de passion. Savourez nos classiques italiens et spécialités malagasy dans un cadre historique.</p>
                <a href="#favorites" class="btn btn-primary">Voir le Menu & Commander</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="container">
        <div class="trust-bar">
            <div class="trust-grid">
                <div class="trust-item">
                    <i class="fa-solid fa-fire-burner"></i>
                    <span>Four à Bois</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-leaf"></i>
                    <span>Ingrédients Frais</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-clock"></i>
                    <span>Service Rapide</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Ouvert 7j/7</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Favorites / Menu -->
    <section class="favorites" id="favorites">
        <div class="container">
            <div class="section-header">
                <h2>Les Favoris de nos Clients</h2>
                <p>Découvrez les plats qui ont fait notre réputation à Tana.</p>
            </div>
            
            <div class="menu-grid">
                <!-- Card 1 -->
                <div class="menu-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?q=80&w=800&auto=format&fit=crop" alt="Pizza Spéciale Arnaud">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h3>La Spéciale Arnaud</h3>
                            <span class="price">25 000 Ar</span>
                        </div>
                        <p>Notre signature : Mozzarella di bufala, jambon de qualité supérieure, œuf bio et olives noires.</p>
                        <span class="tag">Pizza</span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="menu-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=800&auto=format&fit=crop" alt="Pavé de Zébu">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h3>Pavé de Zébu au Poivre</h3>
                            <span class="price">35 000 Ar</span>
                        </div>
                        <p>Tendre viande de Zébu local, sauce crémeuse au poivre vert de Madagascar, frites maison.</p>
                        <span class="tag">Spécialité Malagasy</span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="menu-card">
                    <div class="card-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1574868233977-455e6e7a3dce?q=80&w=800&auto=format&fit=crop" alt="Lasagnes Bolognaises">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h3>Lasagnes Bolognaises</h3>
                            <span class="price">28 000 Ar</span>
                        </div>
                        <p>Recette traditionnelle de la Nonna, mijotée lentement et gratinée au four à bois.</p>
                        <span class="tag">Pâtes</span>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-secondary">Découvrir toute la carte</a>
        </div>
    </section>

    <!-- Heritage -->
    <section class="heritage" id="heritage">
        <div class="container">
            <div class="heritage-layout">
                <div class="heritage-content">
                    <h2>Chez Arnaud : Une Histoire de Goût depuis 1994</h2>
                    <p>Tout a commencé il y a trois décennies avec une vision simple : apporter l'authenticité de la cuisine italienne au cœur d'Antananarivo. Au fil des années, "Chez Arnaud" est devenu bien plus qu'un restaurant ; c'est une institution.</p>
                    <p>Si notre salle a été rénovée pour vous offrir un confort moderne et chaleureux, une chose n'a jamais changé : la recette secrète de notre pâte à pizza, transmise de génération en génération, et notre amour pour les produits locaux d'exception.</p>
                </div>
                <div class="heritage-visuals">
                    <div class="img-old"></div>
                    <div class="img-new"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <h3>Nous trouver</h3>
                    <p><strong>Adresse :</strong> Lot IV, Antananarivo 101, Madagascar</p>
                    <p><strong>Horaires :</strong> Lundi - Dimanche : 11h00 - 22h00</p>
                    <p style="margin-top: 20px;">
                        <a href="tel:+261340000000" style="font-size: 1.5rem; color: var(--color-accent); font-weight: bold;">
                            <i class="fa-solid fa-phone"></i> +261 34 00 000 00
                        </a>
                    </p>
                    <p style="font-size: 0.9rem; margin-top: 10px;">Cliquez pour réserver</p>
                </div>
                <div class="map-wrapper">
                    <!-- Placeholder Map pointing to Tana center -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60324.96576822453!2d47.48202474026338!3d-18.91001221319228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0344445353%3A0x2a98f12e8799435!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Chez Arnaud. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile Button -->
    <a href="tel:+261340000000" class="sticky-btn">
        <i class="fa-solid fa-phone"></i>
    </a>

    <script>
        // CONFIGURATION
        const LOGO_URL = "logo.jpg";
        
        // INIT
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Logo Injection
            const logoEl = document.getElementById('brand-logo');
            if(logoEl) logoEl.src = LOGO_URL;

            // 2. Sticky Header Logic
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 3. Smooth Scroll for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if(target){
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // 4. Simple Reveal Animation on Scroll
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.menu-card, .trust-item, .heritage-content');
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease-out';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>