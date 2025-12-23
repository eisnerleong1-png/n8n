<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bread Mafan' | Boulangerie & Pâtisserie Premium Antananarivo</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* 
         * DESIGN SYSTEM & VARIABLES 
         */
        :root {
            --bg-dark: #1a1a1a;
            --bg-darker: #121212;
            --primary-gold: #a67c52;
            --primary-gold-hover: #8c6642;
            --action-btn: #7f5525;
            --text-light: #f5f5f5;
            --text-grey: #cccccc;
            --font-heading: 'Cormorant Garamond', serif;
            --font-body: 'Montserrat', sans-serif;
            --transition: all 0.4s ease;
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
            background-color: var(--bg-dark);
            color: var(--text-light);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* 
         * UTILITIES 
         */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .gold-text {
            color: var(--primary-gold);
        }

        .section-padding {
            padding: 100px 0;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            font-weight: 700;
        }

        .btn {
            display: inline-block;
            padding: 15px 35px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 1px;
            transition: var(--transition);
            border: 1px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--action-btn);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-gold);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid var(--primary-gold);
            color: var(--primary-gold);
        }

        .btn-outline:hover {
            background-color: var(--primary-gold);
            color: white;
        }

        /* 
         * HEADER & NAV 
         */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition);
        }

        header.scrolled {
            background-color: rgba(26, 26, 26, 0.95);
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
            backdrop-filter: blur(10px);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Adjust size based on actual logo ratio */
            display: block;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        nav ul li a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            transition: var(--transition);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--primary-gold);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            color: var(--primary-gold);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* 
         * HERO SECTION 
         */
        .hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=2072&auto=format&fit=crop') no-repeat center center/cover;
            /* Alternative: Flour dusting or moody coffee steam */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.7) 0%, rgba(26,26,26,0.3) 50%, rgba(26,26,26,1) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Prevent overlap with header */
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .hero h1 span {
            display: block;
            color: var(--primary-gold);
            font-style: italic;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-grey);
            margin-bottom: 40px;
            font-weight: 300;
        }

        /* 
         * UNIVERS GOURMANDS CARDS 
         */
        .univers {
            background-color: var(--bg-dark);
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            background-color: var(--bg-darker);
            border: 1px solid #333;
            border-bottom: 3px solid var(--primary-gold);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-gold);
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
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: var(--primary-gold);
        }

        .card-content p {
            color: var(--text-grey);
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .price-tag {
            display: inline-block;
            margin-top: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-light);
            border-bottom: 1px solid var(--primary-gold);
            padding-bottom: 2px;
        }

        /* 
         * FEATURES (WHY US) 
         */
        .features {
            background-color: var(--bg-darker);
            text-align: center;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: var(--text-light);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 2px;
            background-color: var(--primary-gold);
            margin: 20px auto 0;
        }

        .feature-item {
            padding: 20px;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-gold);
            margin-bottom: 20px;
        }

        .feature-item h4 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .feature-item p {
            color: var(--text-grey);
            font-size: 0.9rem;
        }

        /* 
         * GALLERY 
         */
        .gallery {
            padding: 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 0;
        }

        .gallery-item {
            position: relative;
            height: 400px;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay h4 {
            color: var(--primary-gold);
            font-size: 1.8rem;
            margin-bottom: 10px;
            transform: translateY(20px);
            transition: var(--transition);
        }

        .gallery-overlay span {
            color: white;
            font-size: 1.1rem;
            transform: translateY(20px);
            transition: var(--transition);
            transition-delay: 0.1s;
        }

        .gallery-item:hover .gallery-overlay h4,
        .gallery-item:hover .gallery-overlay span {
            transform: translateY(0);
        }

        /* 
         * ABOUT SECTION 
         */
        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            background-color: var(--bg-dark);
        }

        .about-text {
            flex: 1;
            padding: 80px 50px;
            min-width: 350px;
        }

        .about-image {
            flex: 1;
            height: 600px;
            background: url('https://images.unsplash.com/photo-1550950158-d0d960dff51b?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            min-width: 350px;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .about-text p {
            color: var(--text-grey);
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        /* 
         * FOOTER 
         */
        footer {
            background-color: var(--action-btn); /* #7f5525 */
            color: white;
            padding-top: 60px;
            padding-bottom: 100px; /* Space for mobile sticky bar */
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            padding-bottom: 10px;
            display: inline-block;
        }

        .footer-col p, .footer-col a {
            color: rgba(255,255,255,0.9);
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 15px;
            font-size: 1.5rem;
            transition: var(--transition);
        }

        .social-icons a:hover {
            color: var(--bg-dark);
        }

        .map-container {
            width: 100%;
            height: 200px;
            background-color: #eee;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(100%) invert(92%) contrast(83%);
        }

        /* 
         * MOBILE STICKY BAR 
         */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-darker);
            border-top: 2px solid var(--primary-gold);
            display: flex;
            z-index: 2000;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.5);
            display: none; /* Hidden on desktop */
        }

        .sticky-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            color: white;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .sticky-btn i {
            font-size: 1.2rem;
            color: var(--primary-gold);
        }

        .sticky-btn.highlight {
            background-color: var(--primary-gold);
            color: var(--bg-dark);
        }
        .sticky-btn.highlight i {
            color: var(--bg-dark);
        }

        /* 
         * RESPONSIVE 
         */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .grid-3 { grid-template-columns: repeat(2, 1fr); }
            .about-image { height: 400px; }
        }

        @media (max-width: 768px) {
            .mobile-toggle { display: block; }
            
            nav ul {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background-color: var(--bg-darker);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: var(--transition);
                z-index: 999;
                border-left: 1px solid var(--primary-gold);
            }

            nav ul.active {
                right: 0;
            }

            .grid-3 { grid-template-columns: 1fr; }
            
            .hero h1 { font-size: 2.2rem; }
            .hero-content { margin-top: 80px; }
            
            .mobile-sticky-bar { display: flex; }
            footer { padding-bottom: 80px; } /* Ensure content isn't hidden by sticky bar */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo">
                <!-- Logo injected via JS -->
                <a href="#" id="logo-link"></a>
            </div>
            <nav>
                <ul id="nav-list">
                    <li><a href="#univers">Nos Univers</a></li>
                    <li><a href="#features">Services</a></li>
                    <li><a href="#gallery">Galerie</a></li>
                    <li><a href="#about">L'Esprit</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-toggle" id="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>L'Art de la Boulangerie Française <br><span>au Cœur d'Isoraka</span></h1>
            <p>Pains au levain, pâtisseries fines et espace salon de thé connecté.<br>Une parenthèse gourmande et calme à Tana.</p>
            <a href="#univers" class="btn btn-primary">DÉCOUVRIR LE MENU</a>
        </div>
    </section>

    <!-- Univers Gourmands -->
    <section id="univers" class="section-padding univers">
        <div class="container">
            <div class="grid-3">
                <!-- Card 1 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?q=80&w=2070&auto=format&fit=crop" alt="Baguettes fraîches" class="card-img">
                    <div class="card-content">
                        <h3>Boulangerie Artisanale</h3>
                        <p>La tradition du pain chaud et croustillant pétri sur place.</p>
                        <span class="price-tag">Baguette dès 2 000 Ar</span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=1989&auto=format&fit=crop" alt="Pâtisserie Fine" class="card-img">
                    <div class="card-content">
                        <h3>Pâtisserie Fine</h3>
                        <p>Douceurs sucrées et créatives pour les fins gourmets.</p>
                        <span class="price-tag">Entremets dès 12 000 Ar</span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?q=80&w=2047&auto=format&fit=crop" alt="Salon de Thé et Wifi" class="card-img">
                    <div class="card-content">
                        <h3>Salon de Thé & Snacking</h3>
                        <p>Wifi haut débit & Déjeuner sur le pouce dans un cadre feutré.</p>
                        <span class="price-tag">Formules midi disponibles</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="section-padding features">
        <div class="container">
            <h2 class="section-title">Plus qu'une simple boulangerie</h2>
            <div class="grid-3">
                <div class="feature-item">
                    <i class="fas fa-wheat feature-icon"></i>
                    <h4>Qualité Premium</h4>
                    <p>Ingrédients sélectionnés et fabrication 100% maison.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-wifi feature-icon"></i>
                    <h4>Ultra Connecté</h4>
                    <p>Wifi gratuit haut débit pour vos rendez-vous pro.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-mobile-alt feature-icon"></i>
                    <h4>Facilité</h4>
                    <p>Paiement M'Vola accepté pour votre confort.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery (Immersive) -->
    <section id="gallery" class="gallery">
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?q=80&w=1926&auto=format&fit=crop" alt="Croissant" class="gallery-img">
                <div class="gallery-overlay">
                    <h4>Croissant au Beurre</h4>
                    <span>4 000 Ar</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?q=80&w=2000&auto=format&fit=crop" alt="Opéra Chocolat" class="gallery-img">
                <div class="gallery-overlay">
                    <h4>Opéra Royal</h4>
                    <span>14 000 Ar</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=2070&auto=format&fit=crop" alt="Salade Healthy" class="gallery-img">
                <div class="gallery-overlay">
                    <h4>Salade du Chef</h4>
                    <span>18 000 Ar</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=1974&auto=format&fit=crop" alt="Café Art" class="gallery-img">
                <div class="gallery-overlay">
                    <h4>Cappuccino Art</h4>
                    <span>8 000 Ar</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Storytelling -->
    <section id="about" class="about">
        <div class="about-image"></div>
        <div class="about-text">
            <span class="gold-text" style="text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem;">Notre Histoire</span>
            <h2>L'esprit Bread Mafan'</h2>
            <p>Indépendant et passionné, Bread Mafan' réinvente la pause gourmande à Antananarivo. Situé à deux pas du célèbre Sakamanga, nous vous accueillons dans un cadre feutré où l'odeur du pain chaud se mêle aux arômes de café torréfié.</p>
            <p>Un refuge urbain conçu pour les amateurs de bons produits et de sérénité.</p>
            <a href="#" class="btn btn-outline">En savoir plus sur notre histoire</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>Bread Mafan'</h3>
                    <p>Votre boulangerie française au cœur de Tana.</p>
                    <div class="social-icons" style="margin-top: 20px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Infos Pratiques</h3>
                    <p><i class="fas fa-clock" style="margin-right: 10px; color: var(--bg-dark);"></i> 7j/7 de 06h30 à 19h00</p>
                    <p><i class="fas fa-phone" style="margin-right: 10px; color: var(--bg-dark);"></i> +261 34 00 000 00</p>
                    <p><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: var(--bg-dark);"></i> Isoraka, Antananarivo</p>
                </div>
                <div class="footer-col">
                    <h3>Nous Trouver</h3>
                    <div class="map-container">
                        <!-- Embed Google Map Placeholder pointing to Isoraka -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.908076612669!2d47.5231!3d-18.9105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e1d511935c7%3A0x6280436214197475!2sIsoraka%2C%20Antananarivo!5e0!3m2!1sfr!2smg!4v1710000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <a href="tel:+261340000000" class="sticky-btn highlight">
            <i class="fas fa-phone"></i> Appeler
        </a>
        <a href="https://maps.google.com/?q=Isoraka,Antananarivo" target="_blank" class="sticky-btn">
            <i class="fas fa-location-arrow"></i> Itinéraire
        </a>
    </div>

    <!-- JavaScript -->
    <script>
        const LOGO_URL = "logo.jpg";

        document.addEventListener('DOMContentLoaded', () => {
            // 1. Logo Injection
            const logoLink = document.getElementById('logo-link');
            const logoImg = document.createElement('img');
            logoImg.src = LOGO_URL;
            logoImg.alt = "Bread Mafan Logo";
            logoLink.appendChild(logoImg);

            // 2. Scroll Header Effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 3. Mobile Menu Toggle
            const menuBtn = document.getElementById('mobile-menu-btn');
            const navList = document.getElementById('nav-list');
            
            menuBtn.addEventListener('click', () => {
                navList.classList.toggle('active');
                const icon = menuBtn.querySelector('i');
                if (navList.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });

            // Close menu when clicking a link
            document.querySelectorAll('nav ul li a').forEach(link => {
                link.addEventListener('click', () => {
                    navList.classList.remove('active');
                    menuBtn.querySelector('i').classList.remove('fa-times');
                    menuBtn.querySelector('i').classList.add('fa-bars');
                });
            });

            // 4. Smooth Fade-in Animation (Intersection Observer)
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

            const animatedElements = document.querySelectorAll('.card, .feature-item, .about-text');
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>