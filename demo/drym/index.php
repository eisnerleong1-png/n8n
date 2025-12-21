<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drym | L'Art du Sommeil à Madagascar</title>
    
    <!-- Google Fonts: Playfair Display (Luxe/Titres) & Plus Jakarta Sans (Moderne/Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --primary-dark: #030426; /* Bleu Nuit Profond */
            --primary-light: #0a0e45; /* Légère variation pour profondeur */
            --accent-white: #FFFFFF;
            --accent-gold: #D4AF37; /* Touche subtile de luxe */
            --glass-bg: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
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
            background-color: var(--primary-dark);
            color: var(--accent-white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 600;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        /* --- UTILS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--accent-white);
            color: var(--primary-dark);
            border: 2px solid var(--accent-white);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--accent-white);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--accent-white);
            border: 1px solid var(--accent-white);
        }

        .btn-outline:hover {
            background-color: var(--accent-white);
            color: var(--primary-dark);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-gold {
            color: var(--accent-gold);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
            background: rgba(3, 4, 38, 0.85); /* Semi-transparent dès le début pour lisibilité */
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 40px;
            width: auto;
            object-fit: contain;
            /* Filtre pour assurer que le logo est blanc si c'est un jpg sombre, 
               sinon supprimer le filter si le logo est déjà adapté */
            filter: brightness(0) invert(1); 
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.9rem;
            font-weight: 500;
            position: relative;
            opacity: 0.8;
        }

        .nav-links a:hover {
            opacity: 1;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent-white);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO --- */
        #hero {
            height: 100vh;
            min-height: 700px;
            position: relative;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1505693416388-b0346ef414b9?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Parallax effect */
        }

        #hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(3,4,38,0.95) 0%, rgba(3,4,38,0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            padding-top: 80px; /* Eviter overlap header */
        }

        .hero-content h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 25px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        /* --- TRUST BAR --- */
        #trust {
            padding: 40px 0;
            border-bottom: 1px solid var(--glass-border);
            background: var(--primary-dark);
        }

        .trust-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-text {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            font-style: italic;
            color: var(--accent-gold);
        }

        .trust-badges {
            display: flex;
            gap: 30px;
        }

        .badge {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .badge i {
            color: var(--accent-white);
        }

        /* --- PROBLEM / SOLUTION --- */
        #problem-solution {
            background-color: var(--primary-dark);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .comparison-card {
            padding: 40px;
            border-radius: 20px;
            transition: var(--transition);
        }

        .problem-side {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .solution-side {
            background: linear-gradient(145deg, rgba(255,255,255,0.1), rgba(255,255,255,0.02));
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .solution-side::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--accent-white);
        }

        .comp-title {
            font-size: 1.5rem;
            font-family: var(--font-heading);
            margin-bottom: 25px;
            display: block;
        }

        .comp-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            opacity: 0.8;
        }

        .problem-side .fa-xmark { color: #ff6b6b; }
        .solution-side .fa-check { color: #51cf66; }

        /* --- PRODUCTS --- */
        #products {
            background: radial-gradient(circle at top right, #0d1250 0%, var(--primary-dark) 60%);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--transition);
            position: relative;
            group;
        }

        .product-card:hover {
            transform: translateY(-10px);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .product-img-wrapper {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 30px;
        }

        .product-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .product-desc {
            font-size: 0.9rem;
            opacity: 0.7;
            margin-bottom: 20px;
            min-height: 45px;
        }

        .product-price {
            font-family: var(--font-heading);
            font-size: 1.3rem;
            color: var(--accent-white);
            margin-bottom: 20px;
            display: block;
        }

        .btn-card {
            width: 100%;
            text-align: center;
            padding: 12px;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .btn-card:hover {
            background: var(--accent-white);
            color: var(--primary-dark);
        }

        /* --- ABOUT --- */
        #about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        .about-content {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .about-img {
            background-image: url('https://images.unsplash.com/photo-1620799140408-ed5341cd2431?q=80&w=1972&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .about-img::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(3, 4, 38, 0.2);
        }

        /* --- LOGISTICS --- */
        #logistics {
            background-color: #050730; /* Légèrement plus clair */
        }

        .logistics-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            text-align: center;
        }

        .logistic-item i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--accent-white);
            opacity: 0.9;
        }

        .logistic-item h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .logistic-item p {
            opacity: 0.7;
            font-size: 0.95rem;
            padding: 0 20px;
        }

        /* --- FOOTER --- */
        footer {
            border-top: 1px solid var(--glass-border);
            padding: 60px 0 20px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-info h4 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .contact-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            opacity: 0.8;
        }

        .social-links {
            margin-top: 30px;
            display: flex;
            gap: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-links a:hover {
            background: var(--accent-white);
            color: var(--primary-dark);
        }

        .footer-map iframe {
            width: 100%;
            height: 250px;
            border-radius: 15px;
            filter: grayscale(1) invert(1) contrast(0.8); /* Map style sombre */
            border: 1px solid var(--glass-border);
        }

        .copyright {
            text-align: center;
            opacity: 0.5;
            font-size: 0.8rem;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        /* --- STICKY MOBILE CTA --- */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            background: var(--accent-white);
            color: var(--primary-dark);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.4);
            animation: pulse 2s infinite;
            display: none; /* Hidden on desktop */
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7); }
            70% { transform: scale(1.1); box-shadow: 0 0 0 10px rgba(255, 255, 255, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(255, 255, 255, 0); }
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .comparison-grid, .about {
                grid-template-columns: 1fr;
            }
            .about-img {
                height: 300px;
                order: -1;
            }
            #hero {
                text-align: center;
                justify-content: center;
            }
            .hero-content h1 {
                font-size: 3rem;
            }
            .logistics-grid {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: var(--primary-dark);
                flex-direction: column;
                justify-content: center;
                transition: 0.4s ease;
                border-top: 1px solid var(--glass-border);
            }
            .nav-links.active {
                left: 0;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .trust-content {
                justify-content: center;
                text-align: center;
            }
            .mobile-sticky-cta {
                display: flex;
            }
            .section-header h2 {
                font-size: 2rem;
            }
        }
        
        /* Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- STICKY MOBILE CTA -->
    <a href="tel:+261340000000" class="mobile-sticky-cta" aria-label="Appeler maintenant">
        <i class="fa-solid fa-phone"></i>
    </a>

    <!-- HEADER -->
    <header>
        <div class="container nav-wrapper">
            <a href="#" class="logo" id="logo-container">
                <!-- Logo injected by JS -->
            </a>
            <div class="mobile-toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <nav class="nav-links">
                <a href="#products">Matelas</a>
                <a href="#products">Oreillers</a>
                <a href="#about">Notre Expertise</a>
                <a href="#footer">Contact</a>
                <a href="#showroom" class="btn btn-outline" style="margin-left: 20px;">Prendre RDV Showroom</a>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section id="hero">
        <div class="container hero-content reveal">
            <h1>Retrouvez enfin le sommeil réparateur que vous méritez à Antananarivo.</h1>
            <p>La première marque de literie locale alliant technologie ergonomique et design premium. Finis les réveils douloureux.</p>
            <a href="#products" class="btn btn-primary">Découvrir la collection</a>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section id="trust">
        <div class="container trust-content">
            <span class="trust-text">"Le secret des nuits paisibles de +500 foyers à Tana."</span>
            <div class="trust-badges">
                <div class="badge">
                    <i class="fa-solid fa-certificate"></i> Qualité Certifiée
                </div>
                <div class="badge">
                    <i class="fa-solid fa-bed"></i> Expert Sommeil
                </div>
            </div>
        </div>
    </section>

    <!-- PROBLEM / SOLUTION -->
    <section id="problem-solution" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>Pourquoi votre matelas actuel nuit à votre santé ?</h2>
                <p style="opacity: 0.7;">Comprendre la différence Drym.</p>
            </div>
            <div class="comparison-grid reveal">
                <!-- Problème -->
                <div class="comparison-card problem-side">
                    <span class="comp-title text-gold">Matelas Standard</span>
                    <ul class="comp-list">
                        <li><i class="fa-solid fa-xmark"></i> Affaissement rapide au centre</li>
                        <li><i class="fa-solid fa-xmark"></i> Rétention de chaleur (nuits tropicales difficiles)</li>
                        <li><i class="fa-solid fa-xmark"></i> Douleurs lombaires au réveil</li>
                        <li><i class="fa-solid fa-xmark"></i> Transfert de mouvement du partenaire</li>
                    </ul>
                </div>
                <!-- Solution -->
                <div class="comparison-card solution-side">
                    <span class="comp-title">Technologie Drym</span>
                    <ul class="comp-list">
                        <li><i class="fa-solid fa-check"></i> Maintien parfait de la colonne vertébrale</li>
                        <li><i class="fa-solid fa-check"></i> Aération optimale 3D AirFlow</li>
                        <li><i class="fa-solid fa-check"></i> Réveil énergique et sans douleur</li>
                        <li><i class="fa-solid fa-check"></i> Indépendance de couchage totale</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section id="products" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>Nos solutions pour vos nuits</h2>
            </div>
            <div class="products-grid">
                <!-- Card 1 -->
                <div class="product-card reveal">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop" alt="Matelas Orthopédique" class="product-img">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">L'Orthopédique</h3>
                        <p class="product-desc">Soutien ferme étudié pour le soulagement dorsal.</p>
                        <span class="product-price">À partir de 800 000 Ar</span>
                        <a href="#" class="btn-card">Voir les détails</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="product-card reveal" style="transition-delay: 0.1s;">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1505691938895-1758d7bab58d?q=80&w=2070&auto=format&fit=crop" alt="Matelas Le Nuage" class="product-img">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Le Nuage</h3>
                        <p class="product-desc">Mémoire de forme enveloppante pour un effet apesanteur.</p>
                        <span class="product-price">À partir de 1 200 000 Ar</span>
                        <a href="#" class="btn-card">Voir les détails</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="product-card reveal" style="transition-delay: 0.2s;">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1584100936595-c0654b55a2e6?q=80&w=2000&auto=format&fit=crop" alt="Oreillers Ergonomiques" class="product-img">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pack Oreillers Ergonomiques</h3>
                        <p class="product-desc">Duo confort pour un alignement parfait des cervicales.</p>
                        <span class="product-price">150 000 Ar</span>
                        <a href="#" class="btn-card">Ajouter au panier</a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir tout le catalogue</a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="about-content reveal">
            <h2>Drym : L'expertise du sommeil au cœur de Madagascar.</h2>
            <br>
            <p>Chez Drym, nous ne vendons pas simplement de la mousse. Nous concevons une expérience de sommeil adaptée au climat tropical et aux besoins morphologiques locaux.</p>
            <br>
            <p>Chaque matelas est le fruit de recherches approfondies pour garantir durabilité et confort hôtelier, directement chez vous.</p>
        </div>
        <div class="about-img reveal"></div>
    </section>

    <!-- LOGISTICS -->
    <section id="logistics" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>Dormez tranquille, on s'occupe de tout.</h2>
            </div>
            <div class="logistics-grid reveal">
                <div class="logistic-item">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h3>Livraison Gratuite</h3>
                    <p>Sur tout Antananarivo centre. Installation incluse.</p>
                </div>
                <div class="logistic-item">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h3>Garantie 5 Ans</h3>
                    <p>Une promesse de durabilité et de qualité sans compromis.</p>
                </div>
                <div class="logistic-item">
                    <i class="fa-solid fa-headset"></i>
                    <h3>Conseil Expert</h3>
                    <p>Service client dédié disponible par téléphone et WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-info">
                    <h4>Contactez-nous</h4>
                    <ul class="contact-list">
                        <li><i class="fa-solid fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fa-solid fa-envelope"></i> contact@drym.mg</li>
                        <li><i class="fa-solid fa-location-dot"></i> Showroom Analakely, Antananarivo</li>
                    </ul>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60344.62319047918!2d47.4862526466961!3d-18.887298982333425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0a44284d6f%3A0x6a0c028c24208e9a!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1715432000000!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Drym Madagascar. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <script>
        // --- CONSTANTES ---
        const LOGO_URL = "logo.jpg";

        // --- DOM ELEMENTS ---
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Insertion du Logo
            const logoContainer = document.getElementById('logo-container');
            const logoImg = document.createElement('img');
            logoImg.src = LOGO_URL;
            logoImg.alt = "Drym Logo";
            logoContainer.appendChild(logoImg);

            // 2. Mobile Menu Toggle
            const mobileToggle = document.querySelector('.mobile-toggle');
            const navLinks = document.querySelector('.nav-links');
            const navItems = document.querySelectorAll('.nav-links a');

            mobileToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                mobileToggle.querySelector('i').classList.toggle('fa-bars');
                mobileToggle.querySelector('i').classList.toggle('fa-xmark');
            });

            // Fermer le menu au clic sur un lien
            navItems.forEach(item => {
                item.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    const icon = mobileToggle.querySelector('i');
                    icon.classList.add('fa-bars');
                    icon.classList.remove('fa-xmark');
                });
            });

            // 3. Scroll Reveal Animation
            const revealElements = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                revealElements.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            // Trigger once on load
            revealOnScroll();

            // 4. Header Background on Scroll
            const header = document.querySelector('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.style.background = "rgba(3, 4, 38, 0.98)";
                    header.style.padding = "15px 0";
                } else {
                    header.style.background = "rgba(3, 4, 38, 0.85)";
                    header.style.padding = "20px 0";
                }
            });
        });
    </script>
</body>
</html>