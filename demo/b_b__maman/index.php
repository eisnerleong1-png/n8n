<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bébé Maman | Magasin Puériculture Antananarivo Behoririka</title>
    <meta name="description" content="Préparez l'arrivée de Bébé sans stress. Tout l'univers Maman & Nouveau-né à Behoririka. Commandez en ligne, livraison possible.">
    
    <!-- Fonts: Poppins (Modern, clean, premium) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #EC589C; /* Pink - Action */
            --primary-dark: #c93b7f;
            --secondary: #41BCCA; /* Blue - Trust */
            --accent: #FFC655; /* Yellow - Promo */
            --text-dark: #1F2937;
            --text-light: #6B7280;
            --white: #FFFFFF;
            --bg-light: #F8FAFC;
            --border-radius: 16px;
            --shadow-soft: 0 10px 40px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 40px -10px rgba(0,0,0,0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(236, 88, 156, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(236, 88, 156, 0.4);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--white);
        }

        .btn-secondary:hover {
            background-color: #2da1af;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(65, 188, 202, 0.4);
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.05); /* Transparent start */
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 50px; /* Base height */
            transition: var(--transition);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-weight: 500;
            color: var(--white); /* White text on hero */
            transition: var(--transition);
        }

        header.scrolled .nav-links a {
            color: var(--text-dark);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        header.scrolled .mobile-menu-btn {
            color: var(--text-dark);
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1555252333-9f8e92e65df4?q=80&w=2574&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--white);
            padding-top: 80px; /* Offset for header to prevent overlap */
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeInUp 1s ease forwards 0.5s;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        /* Nouveautés Section */
        .section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--text-light);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .badge-new {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--accent);
            color: var(--text-dark);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            z-index: 2;
        }

        .product-img-wrapper {
            height: 300px;
            overflow: hidden;
            position: relative;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-img-wrapper img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 25px;
        }

        .product-info h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .price {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
            display: block;
            margin-bottom: 15px;
        }

        .stock-status {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #10B981; /* Green */
        }

        /* Categories */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .category-card {
            background: var(--white);
            padding: 30px 20px;
            border-radius: var(--border-radius);
            text-align: center;
            transition: var(--transition);
            border: 2px solid transparent;
            cursor: pointer;
            box-shadow: var(--shadow-soft);
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .cat-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: inline-block;
        }

        .cat-1 { border-color: #41BCCA; color: #41BCCA; }
        .cat-1:hover { background-color: rgba(65, 188, 202, 0.05); }

        .cat-2 { border-color: #FFC655; color: #FFC655; }
        .cat-2:hover { background-color: rgba(255, 198, 85, 0.05); }

        .cat-3 { border-color: #EC589C; color: #EC589C; }
        .cat-3:hover { background-color: rgba(236, 88, 156, 0.05); }

        .cat-4 { border-color: #8B5CF6; color: #8B5CF6; }
        .cat-4:hover { background-color: rgba(139, 92, 246, 0.05); }

        .category-card h3 {
            color: var(--text-dark);
            font-size: 1.1rem;
        }

        /* Location Split Screen */
        .location-section {
            display: flex;
            flex-wrap: wrap;
            background: var(--white);
        }

        .location-content {
            flex: 1;
            padding: 80px 50px;
            min-width: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .location-map {
            flex: 1;
            min-height: 500px;
            min-width: 400px;
            position: relative;
        }

        .location-content h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .info-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            font-size: 1.1rem;
        }

        .info-list i {
            color: var(--secondary);
            font-size: 1.2rem;
            margin-top: 5px;
        }

        .highlight-hours {
            background: rgba(65, 188, 202, 0.1);
            padding: 15px 20px;
            border-radius: 10px;
            color: var(--secondary);
            font-weight: 600;
            display: inline-block;
            margin: 10px 0 25px;
        }

        .delivery-note {
            margin-top: 20px;
            font-size: 0.95rem;
            color: var(--text-light);
            font-style: italic;
        }

        /* About & Footer */
        .about-section {
            background-color: #FDF2F8; /* Very light pink */
            text-align: center;
        }

        footer {
            background: #1F2937;
            color: var(--white);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .social-links a {
            font-size: 1.5rem;
            margin-left: 20px;
            transition: var(--transition);
        }

        .social-links a:hover {
            color: var(--primary);
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            font-size: 0.9rem;
            color: #9CA3AF;
        }

        /* Sticky WhatsApp */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            z-index: 1001;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #20ba5a;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .categories-grid { grid-template-columns: repeat(2, 1fr); }
            .location-section { flex-direction: column-reverse; }
            .location-map { min-height: 300px; }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none; /* Simplification for one-page demo, usually hamburger */
            }
            .mobile-menu-btn { display: block; }
            
            .hero { padding-top: 100px; height: auto; min-height: 85vh; }
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1rem; }
            
            .products-grid { grid-template-columns: 1fr; padding: 0 20px; }
            .categories-grid { grid-template-columns: 1fr; padding: 0 40px; }
            
            .section { padding: 60px 0; }
            .location-content { padding: 40px 20px; min-width: 100%; }
            
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" id="logo-container">
                <!-- JS will inject logo here -->
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a href="#new-arrivals">Nouveautés</a></li>
                    <li><a href="#categories">Catégories</a></li>
                    <li><a href="#location">Magasin</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Préparez l'arrivée de Bébé sans stress</h1>
            <p>Tout l'univers Maman & Nouveau-né à Behoririka. Consultez notre catalogue 24h/24 et fini la course avant 16h30.</p>
            <a href="#new-arrivals" class="btn btn-primary">
                Découvrir le Catalogue <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
        </div>
    </section>

    <!-- Nouveautés / Urgence -->
    <section id="new-arrivals" class="section">
        <div class="container">
            <div class="section-header">
                <h2>Les Arrivages de la Semaine</h2>
                <p>Nos meilleures ventes sélectionnées pour vous</p>
            </div>

            <div class="products-grid">
                <!-- Produit 1 -->
                <article class="product-card">
                    <span class="badge-new">Nouveau</span>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1591039886295-8149eb03d7c5?q=80&w=800&auto=format&fit=crop" alt="Poussette Trio Urban">
                    </div>
                    <div class="product-info">
                        <h3>Poussette Trio Urban</h3>
                        <span class="price">450.000 Ar</span>
                        <div class="stock-status">
                            <i class="fas fa-check-circle"></i> En Stock Boutique
                        </div>
                    </div>
                </article>

                <!-- Produit 2 -->
                <article class="product-card">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1518553646549-3738f74116c8?q=80&w=800&auto=format&fit=crop" alt="Sac à Langer Premium">
                    </div>
                    <div class="product-info">
                        <h3>Sac à Langer Premium</h3>
                        <span class="price">120.000 Ar</span>
                        <div class="stock-status">
                            <i class="fas fa-check-circle"></i> En Stock Boutique
                        </div>
                    </div>
                </article>

                <!-- Produit 3 -->
                <article class="product-card">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1627855017260-2646271a396e?q=80&w=800&auto=format&fit=crop" alt="Tire-lait Électrique">
                    </div>
                    <div class="product-info">
                        <h3>Tire-lait Électrique Confort</h3>
                        <span class="price">280.000 Ar</span>
                        <div class="stock-status">
                            <i class="fas fa-check-circle"></i> En Stock Boutique
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section id="categories" class="section" style="background-color: #fff;">
        <div class="container">
            <div class="section-header">
                <h2>L'essentiel pour...</h2>
            </div>
            <div class="categories-grid">
                <div class="category-card cat-1">
                    <i class="fas fa-baby-carriage cat-icon"></i>
                    <h3>La Promenade</h3>
                </div>
                <div class="category-card cat-2">
                    <i class="fas fa-bed cat-icon"></i>
                    <h3>Le Sommeil</h3>
                </div>
                <div class="category-card cat-3">
                    <i class="fas fa-bath cat-icon"></i>
                    <h3>Hygiène & Repas</h3>
                </div>
                <div class="category-card cat-4">
                    <i class="fas fa-tshirt cat-icon"></i>
                    <h3>Mode Bébé</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section (Behoririka Focus) -->
    <section id="location" class="location-section">
        <div class="location-content">
            <h2>Nous trouver facilement au Cœur de Behoririka</h2>
            <ul class="info-list">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Magasin Bébé Maman</strong><br>
                        Bâtiment Papillon, Behoririka<br>
                        <small>Parking disponible à proximité</small>
                    </div>
                </li>
            </ul>
            
            <div class="highlight-hours">
                <i class="far fa-clock"></i> Ouvert Lun-Sam : 08h30 - 16h30
            </div>

            <a href="https://goo.gl/maps/XYZ" target="_blank" class="btn btn-secondary">
                <i class="fas fa-location-arrow" style="margin-right: 10px;"></i> Itinéraire GPS
            </a>

            <p class="delivery-note">
                <i class="fas fa-motorcycle"></i> Pas le temps de passer ? Commandez sur WhatsApp et faites-vous livrer.
            </p>
        </div>
        <div class="location-map">
            <!-- Embedding Google Maps for Behoririka area (Simulation) -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.269785834925!2d47.5233!3d-18.9167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0000000001%3A0x0!2sBehoririka%2C%20Antananarivo!5e0!3m2!1sen!2smg!4v1620000000000!5m2!1sen!2smg" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>

    <!-- About Brief -->
    <section id="about" class="section about-section">
        <div class="container">
            <div class="section-header">
                <h2>La qualité pour votre tout-petit</h2>
                <p style="max-width: 600px; margin: 0 auto; font-size: 1.1rem;">
                    Chez Bébé Maman, nous sélectionnons des articles durables et confortables pour accompagner les premiers mois de vie de votre enfant.
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>Bébé Maman</h3>
                    <p>Antananarivo, Madagascar</p>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Bébé Maman Mada. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Sticky WhatsApp -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script>
        // Logo Injection Logic
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            const logoContainer = document.getElementById('logo-container');
            if (logoContainer) {
                // Ensure logo is white or has filter if needed, but here we assume the logo file handles it or fits context
                // Added a filter brightness to ensure visibility on dark overlay if logo is black, 
                // but usually a logo should be handled carefully. 
                // For this strict instruction, we just inject.
                logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Bébé Maman Logo" style="filter: brightness(0) invert(1);">`;
                
                // Switch logo color on scroll
                window.addEventListener('scroll', () => {
                    const img = logoContainer.querySelector('img');
                    if (window.scrollY > 50) {
                        img.style.filter = 'none'; // Restore original colors on white bg
                    } else {
                        img.style.filter = 'brightness(0) invert(1)'; // White on hero
                    }
                });
            }
        });

        // Sticky Header Logic
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth Scroll for Anchors
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>