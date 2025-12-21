<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mada All Sport | Équipement Sportif Premium Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --bg-color: #111111;
            --text-color: #FFFFFF;
            --accent-color: #E89CAE;
            --secondary-bg: #1a1a1a;
            --card-bg: #1f1f1f;
            --font-main: 'Montserrat', sans-serif;
            --font-headings: 'Oswald', sans-serif;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: var(--font-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- TYPOGRAPHY --- */
        h1, h2, h3, h4 {
            font-family: var(--font-headings);
            text-transform: uppercase;
            line-height: 1.1;
        }

        h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 1.5rem; letter-spacing: 1px; }
        h2 { font-size: 2.5rem; margin-bottom: 1rem; color: #fff; }
        h3 { font-size: 1.5rem; font-weight: 600; margin-bottom: 0.5rem; }
        p { margin-bottom: 1.5rem; opacity: 0.9; font-weight: 300; }

        /* --- UTILITIES --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 4px;
            cursor: pointer;
            border: 2px solid transparent;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: #000;
            box-shadow: 0 4px 15px rgba(232, 156, 174, 0.3);
        }

        .btn-primary:hover {
            background-color: #fff;
            color: #000;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid #fff;
            color: #fff;
            background: transparent;
        }

        .btn-outline:hover {
            background: #fff;
            color: #000;
        }

        .section-padding { padding: 100px 0; }
        .text-center { text-align: center; }
        .text-accent { color: var(--accent-color); }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            background: rgba(17, 17, 17, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajuster selon le logo */
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav a {
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        nav a:hover { color: var(--accent-color); }

        .header-cta {
            font-size: 0.85rem;
            padding: 10px 24px;
        }
        
        .menu-toggle { display: none; font-size: 1.5rem; cursor: pointer; }

        /* --- HERO SECTION --- */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
            padding-top: 80px; /* Prevent overlap with header */
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            max-width: 600px;
            color: #ddd;
        }

        .hero-buttons { display: flex; gap: 20px; }

        /* --- SOCIAL PROOF --- */
        .brands {
            background: var(--bg-color);
            padding: 40px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .brands-title {
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.5;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .brands-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            opacity: 0.6;
        }
        
        .brand-item { font-family: var(--font-headings); font-size: 1.5rem; font-weight: bold; color: #fff; }


        /* --- CATEGORIES --- */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .cat-card {
            position: relative;
            height: 400px;
            overflow: hidden;
            border-radius: 4px;
            cursor: pointer;
        }

        .cat-card img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .cat-card:hover img { transform: scale(1.1); }

        .cat-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 30px;
        }

        .cat-title {
            font-size: 1.8rem;
            color: #fff;
            transform: translateY(0);
            transition: var(--transition);
        }

        .cat-link {
            font-size: 0.9rem;
            color: var(--accent-color);
            margin-top: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            font-weight: 600;
            text-transform: uppercase;
        }

        .cat-card:hover .cat-link { opacity: 1; transform: translateY(0); }

        /* --- NOUVEAUTES --- */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .product-card {
            background: var(--card-bg);
            border-radius: 4px;
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid rgba(255,255,255,0.05);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-color: var(--accent-color);
        }

        .product-img {
            height: 300px;
            width: 100%;
            position: relative;
        }
        
        .tag-new {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent-color);
            color: #000;
            padding: 5px 10px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .product-info { padding: 25px; }

        .product-price {
            font-size: 1.25rem;
            color: var(--accent-color);
            font-weight: 700;
            margin-top: 10px;
            display: block;
        }

        /* --- CLUBS B2B --- */
        .b2b-section {
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1526676037777-05a232554f77?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            text-align: center;
        }

        .b2b-content { max-width: 700px; margin: 0 auto; }

        /* --- ABOUT & LOCATION --- */
        .location-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .map-wrapper {
            height: 400px;
            background: #222;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }
        
        .map-iframe { width: 100%; height: 100%; border: 0; filter: grayscale(100%) invert(92%) contrast(83%); }

        .info-box {
            background: var(--card-bg);
            padding: 30px;
            border-left: 4px solid var(--accent-color);
            margin-top: 30px;
        }

        /* --- FOOTER --- */
        footer {
            background: #000;
            padding-top: 80px;
            padding-bottom: 30px;
            border-top: 1px solid #222;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-logo { font-family: var(--font-headings); font-size: 1.5rem; color: #fff; margin-bottom: 20px; display: inline-block;}
        
        .footer-links h4 { font-size: 1rem; margin-bottom: 20px; color: var(--accent-color); }
        .footer-links li { margin-bottom: 10px; font-size: 0.9rem; color: #aaa; }
        .footer-links a:hover { color: #fff; padding-left: 5px; }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #1a1a1a;
            color: #555;
            font-size: 0.8rem;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            .hero-subtitle { font-size: 1rem; }
            .nav-wrapper nav, .nav-wrapper .cta-desktop { display: none; }
            .menu-toggle { display: block; color: #fff; }
            
            .mobile-menu {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: #111;
                padding: 20px;
                display: none;
                flex-direction: column;
                border-bottom: 1px solid #333;
            }
            .mobile-menu.active { display: flex; }
            .mobile-menu a { padding: 10px 0; border-bottom: 1px solid #222; }
            
            .location-grid { grid-template-columns: 1fr; }
            .hero-buttons { flex-direction: column; width: 100%; }
            .btn { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header>
        <div class="container nav-wrapper">
            <div id="logo-container" class="logo-container">
                <!-- Logo injected via JS -->
            </div>
            <nav id="desktop-nav">
                <ul>
                    <li><a href="#categories">Sports Co</a></li>
                    <li><a href="#categories">Sports Indiv</a></li>
                    <li><a href="#fitness">Fitness</a></li>
                    <li><a href="#nouveautes">Nouveautés</a></li>
                </ul>
            </nav>
            <div class="cta-desktop">
                <a href="#clubs" class="btn btn-primary header-cta">Espace Clubs</a>
            </div>
            <div class="menu-toggle" id="menu-toggle">☰</div>
        </div>
        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <a href="#categories">Sports Collectifs</a>
            <a href="#categories">Sports Individuels</a>
            <a href="#fitness">Fitness & Training</a>
            <a href="#nouveautes">Nouveautés</a>
            <a href="#clubs" style="color: var(--accent-color);">Espace Clubs / Devis</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Dépassez vos limites avec le meilleur équipement à Tana</h1>
            <p class="hero-subtitle">Retrouvez tout le matériel professionnel pour sports individuels et collectifs au Centre Commercial Akoor Digue. Performance et style garantis.</p>
            <div class="hero-buttons">
                <a href="#nouveautes" class="btn btn-primary">Voir le Catalogue</a>
                <a href="#location" class="btn btn-outline">Nous trouver</a>
            </div>
        </div>
    </section>

    <!-- PREUVE SOCIALE -->
    <div class="brands">
        <div class="container">
            <h3 class="brands-title">Les marques disponibles</h3>
            <div class="brands-grid">
                <!-- Simulating logos with text for SEO/Performance, or could use SVGs -->
                <span class="brand-item">NIKE</span>
                <span class="brand-item">ADIDAS</span>
                <span class="brand-item">PUMA</span>
                <span class="brand-item">UNDER ARMOUR</span>
                <span class="brand-item">REEBOK</span>
            </div>
        </div>
    </div>

    <!-- CATEGORIES -->
    <section id="categories" class="section-padding">
        <div class="container">
            <h2 class="text-center">Choisissez votre terrain</h2>
            <div class="categories-grid">
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Football">
                    <div class="cat-overlay">
                        <span class="cat-title">Football</span>
                        <span class="cat-link">Découvrir</span>
                    </div>
                </div>
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Basketball">
                    <div class="cat-overlay">
                        <span class="cat-title">Basketball</span>
                        <span class="cat-link">Découvrir</span>
                    </div>
                </div>
                <div id="fitness" class="cat-card">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Running & Fitness">
                    <div class="cat-overlay">
                        <span class="cat-title">Running & Fitness</span>
                        <span class="cat-link">Découvrir</span>
                    </div>
                </div>
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1521805103424-d8f8430e8933?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Accessoires Sport">
                    <div class="cat-overlay">
                        <span class="cat-title">Accessoires</span>
                        <span class="cat-link">Découvrir</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOUVEAUTES -->
    <section id="nouveautes" class="section-padding" style="background-color: var(--secondary-bg);">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 40px; flex-wrap: wrap; gap: 20px;">
                <div>
                    <h2 style="margin-bottom: 10px;">Juste arrivé en rayon</h2>
                    <p style="margin-bottom: 0;">Disponibles dès maintenant à Akoor Digue.</p>
                </div>
                <a href="#" class="btn btn-outline" style="border-color: var(--accent-color); color: var(--accent-color);">Voir tout</a>
            </div>

            <div class="products-grid">
                <!-- Produit A -->
                <div class="product-card">
                    <div class="product-img">
                        <span class="tag-new">Nouveau</span>
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Chaussures Running Pro">
                    </div>
                    <div class="product-info">
                        <h3>Running Pro Elite</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 5px; color: #aaa;">Course & Endurance</p>
                        <span class="product-price">250 000 Ar</span>
                    </div>
                </div>
                <!-- Produit B -->
                <div class="product-card">
                    <div class="product-img">
                        <span class="tag-new">Top Vente</span>
                        <img src="https://images.unsplash.com/photo-1614632537423-1e6c2e7e0aab?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Ballon Match Officiel">
                    </div>
                    <div class="product-info">
                        <h3>Ballon Match Officiel</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 5px; color: #aaa;">Football - Taille 5</p>
                        <span class="product-price">90 000 Ar</span>
                    </div>
                </div>
                <!-- Produit C -->
                <div class="product-card">
                    <div class="product-img">
                        <span class="tag-new">Stock Limité</span>
                        <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kit Haltères">
                    </div>
                    <div class="product-info">
                        <h3>Kit Haltères Pro</h3>
                        <p style="font-size: 0.9rem; margin-bottom: 5px; color: #aaa;">Musculation Home Gym</p>
                        <span class="product-price">150 000 Ar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CLUBS B2B -->
    <section id="clubs" class="section-padding b2b-section">
        <div class="container b2b-content">
            <h2>Équipez votre équipe pour la victoire</h2>
            <p>Clubs, écoles, collectivités : profitez de nos tarifs préférentiels pour vos achats en volume. Maillots personnalisés, équipements d'entraînement et ballons.</p>
            <a href="#" class="btn btn-primary">Demander un devis gratuit</a>
        </div>
    </section>

    <!-- A PROPOS & LOCALISATION -->
    <section id="location" class="section-padding">
        <div class="container">
            <div class="location-grid">
                <div>
                    <h2>Votre référence sport</h2>
                    <p>Situé au cœur du <strong>Centre Commercial Akoor Digue</strong>, Mada All Sport est le partenaire privilégié des sportifs amateurs et professionnels d'Antananarivo.</p>
                    <p>Nous sélectionnons rigoureusement nos produits pour vous garantir durabilité et performance. Pas besoin d'attendre : notre stock est local et disponible immédiatement.</p>
                    
                    <div class="info-box">
                        <h4 style="margin-bottom: 10px;">Horaires d'ouverture</h4>
                        <p style="margin-bottom: 5px;">Lundi - Dimanche : 09h00 - 18h00</p>
                        <p style="margin-bottom: 0; color: #aaa;">Ouvert 7j/7</p>
                    </div>
                </div>
                <div>
                    <div class="map-wrapper">
                         <!-- Placeholder image for map to keep visual consistency if iframe fails, but iframe is prioritized -->
                         <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.123456789!2d47.0!3d-18.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AAkoor_Digue!2sAkoor%20Digue!5e0!3m2!1sfr!2smg!4v1600000000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <p style="text-align: center; margin-top: 10px; font-size: 0.8rem; color: #777;">Centre Commercial Akoor Digue, Antananarivo</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#" class="footer-logo">MADA ALL SPORT</a>
                    <p style="font-size: 0.9rem; color: #777;">L'excellence sportive à portée de main. Équipement premium pour athlètes exigeants.</p>
                </div>
                <div class="footer-links">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#categories">Nos Sports</a></li>
                        <li><a href="#nouveautes">Nouveautés</a></li>
                        <li><a href="#clubs">Espace Clubs</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="#">contact@madaallsport.mg</a></li>
                        <li><a href="#">+261 34 00 000 00</a></li>
                        <li>Akoor Digue, Tana</li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Suivez-nous</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Mada All Sport. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // --- LOGO INTEGRATION (STRICT REQUIREMENT) ---
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            // Insert Logo
            const logoContainer = document.getElementById('logo-container');
            if (logoContainer) {
                const img = document.createElement('img');
                img.src = LOGO_URL;
                img.alt = "Mada All Sport Logo";
                logoContainer.appendChild(img);
            }

            // Mobile Menu Toggle
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');

            if(menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('active');
                    menuToggle.textContent = mobileMenu.classList.contains('active') ? '✕' : '☰';
                });
            }

            // Smooth Scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if(target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                        // Close mobile menu if open
                        if(mobileMenu.classList.contains('active')) {
                            mobileMenu.classList.remove('active');
                            menuToggle.textContent = '☰';
                        }
                    }
                });
            });

            // Header Background on Scroll
            const header = document.querySelector('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.style.background = 'rgba(17, 17, 17, 0.95)';
                    header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.5)';
                } else {
                    header.style.background = 'rgba(17, 17, 17, 0.85)';
                    header.style.boxShadow = 'none';
                }
            });

            // Scroll Animation (Intersection Observer)
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll('.cat-card, .product-card, h2, .b2b-content');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>