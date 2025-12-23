<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Arlequin - Restaurant Indien & Malagasy | Tsaralalana</title>
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --color-bg: #050505;
            --color-surface: #121212;
            --color-surface-light: #1E1E1E;
            --color-gold: #FFCC00;
            --color-gold-hover: #E6B800;
            --color-red: #D32F2F;
            --color-text-main: #FFFFFF;
            --color-text-muted: #B0B0B0;
            --font-display: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --spacing-container: 1200px;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* RESET & BASE */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--color-bg);
            color: var(--color-text-main);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
            padding-bottom: 80px; /* Space for sticky mobile bar */
        }

        h1, h2, h3, h4 {
            font-family: var(--font-display);
            font-weight: 700;
            line-height: 1.2;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* UTILITIES */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-gold { color: var(--color-gold); }
        .text-center { text-align: center; }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--color-gold);
            color: #000000;
            border: 1px solid var(--color-gold);
        }

        .btn-primary:hover {
            background-color: var(--color-gold-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 204, 0, 0.15);
        }

        .btn-outline {
            background: transparent;
            color: var(--color-red);
            border: 1px solid var(--color-red);
        }

        .btn-outline:hover {
            background: var(--color-red);
            color: white;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(5, 5, 5, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 15px 0;
            transition: var(--transition);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
        }

        .nav-links a:hover {
            opacity: 1;
            color: var(--color-gold);
        }

        .mobile-toggle {
            display: none;
            color: var(--color-gold);
            font-size: 1.5rem;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(5,5,5,1)), url('https://images.unsplash.com/photo-1517244683847-745431f57235?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding-top: 80px; /* Prevent header overlap */
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: #fff;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .hero h2 {
            font-family: var(--font-body);
            font-size: 1.25rem;
            font-weight: 300;
            color: #e0e0e0;
            margin-bottom: 40px;
            max-width: 600px;
        }

        .hero-badges {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .badge {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            border: 1px solid rgba(255,255,255,0.2);
            color: var(--color-gold);
        }

        /* TRUST BAR */
        .trust-bar {
            background: var(--color-surface);
            padding: 30px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            margin-top: -1px;
        }

        .trust-content {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            font-size: 1.1rem;
            color: var(--color-text-muted);
        }

        .stars {
            color: var(--color-gold);
            letter-spacing: 2px;
        }

        /* SECTIONS GENERAL */
        section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h3 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--color-gold);
        }

        .section-header p {
            color: var(--color-text-muted);
        }

        /* MENU GRID */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .menu-card {
            background: var(--color-surface);
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid rgba(255,255,255,0.05);
            position: relative;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            border-color: var(--color-gold);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .card-img {
            height: 250px;
            width: 100%;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .card-img img {
            transform: scale(1.1);
            filter: saturate(1.2);
        }

        .card-content {
            padding: 25px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .dish-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #fff;
        }

        .price {
            color: var(--color-gold);
            font-weight: 700;
            font-family: var(--font-display);
            font-size: 1.1rem;
            white-space: nowrap;
        }

        .dish-desc {
            color: var(--color-text-muted);
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        /* ABOUT SECTION */
        .about-section {
            background: linear-gradient(to right, var(--color-surface), var(--color-bg));
            position: relative;
            overflow: hidden;
        }

        .about-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: #fff;
        }

        .about-text p {
            color: var(--color-text-muted);
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        .highlight-text {
            border-left: 3px solid var(--color-gold);
            padding-left: 20px;
            margin: 30px 0;
            font-style: italic;
            color: #fff;
        }

        .about-img {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
        }

        .about-img::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 204, 0, 0.1);
            mix-blend-mode: overlay;
        }

        /* LOCATION & FOOTER */
        .location-section {
            padding-bottom: 0;
        }

        .map-container {
            width: 100%;
            height: 400px;
            background-color: var(--color-surface-light);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 40px;
            position: relative;
            /* Placeholder for Map styling */
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=1500&auto=format&fit=crop');
            background-size: cover;
            filter: grayscale(100%);
        }
        
        .map-overlay {
            background: rgba(0,0,0,0.8);
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            border: 1px solid var(--color-gold);
        }

        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 60px;
            text-align: center;
        }

        .info-box i {
            font-size: 1.5rem;
            color: var(--color-gold);
            margin-bottom: 15px;
        }

        .info-box h4 {
            margin-bottom: 10px;
            color: #fff;
        }

        .info-box p {
            color: var(--color-text-muted);
            font-size: 0.9rem;
        }

        /* STICKY MOBILE BAR */
        .sticky-mobile {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--color-surface-light);
            padding: 15px 20px;
            z-index: 9999;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.5);
            display: none; /* Hidden on desktop by default */
            border-top: 1px solid var(--color-gold);
        }

        .sticky-btn {
            display: block;
            width: 100%;
            background: var(--color-gold);
            color: #000;
            text-align: center;
            padding: 12px;
            font-weight: 700;
            border-radius: 4px;
            text-transform: uppercase;
            font-size: 1rem;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .about-layout { grid-template-columns: 1fr; }
            .nav-links { display: none; } /* Hide desktop nav */
            .mobile-toggle { display: block; }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero h2 { font-size: 1rem; }
            .section-header h3 { font-size: 2rem; }
            .contact-info-grid { grid-template-columns: 1fr; }
            
            .sticky-mobile { display: block; } /* Show on mobile */
            body { padding-bottom: 80px; }
            
            .trust-content { flex-direction: column; text-align: center; gap: 5px; }
        }

        /* ANIMATIONS */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Footer */
        footer {
            background: #000;
            padding: 30px 0;
            text-align: center;
            color: #555;
            font-size: 0.8rem;
            margin-bottom: 60px; /* Space for sticky bar */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo-container" id="logo-placeholder">
                <!-- JS will insert logo here -->
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">L'Expérience</a></li>
                    <li><a href="#location">Contact</a></li>
                    <li><a href="tel:+261340000000" class="text-gold"><i class="fas fa-phone-alt"></i> 034 XX XX XX</a></li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content fade-in">
            <div class="hero-badges">
                <span class="badge"><i class="fas fa-map-marker-alt"></i> Tsaralalana</span>
                <span class="badge"><i class="fas fa-pepper-hot"></i> Épices Authentiques</span>
            </div>
            <h1>L'Authentique Cuisine Indienne & Malagasy</h1>
            <h2>Des Naans croustillants aux Romazavas savoureux. Une explosion de saveurs à deux pas de l'Hôtel Anjary.</h2>
            <div class="cta-group">
                <a href="tel:+261340000000" class="btn btn-primary">Commander / Réserver</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>"Le restaurant préféré des voyageurs du quartier" — Note : 4.8/5</span>
        </div>
    </div>

    <!-- Menu Section -->
    <section id="menu">
        <div class="container">
            <div class="section-header fade-in">
                <h3>Nos Incontournables</h3>
                <p>Les plats qui font notre renommée à Antananarivo</p>
            </div>

            <div class="menu-grid">
                <!-- Carte 1 -->
                <div class="menu-card fade-in">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?q=80&w=1000&auto=format&fit=crop" alt="Thali Complet Indien">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <span class="dish-title">Thali Royal</span>
                            <span class="price">20 000 Ar</span>
                        </div>
                        <p class="dish-desc">Assortiment complet : Curry, Dal, Riz basmati, Raïta et Chapati. Disponible en Poulet ou Végétarien.</p>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="menu-card fade-in" style="transition-delay: 0.1s;">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?q=80&w=1000&auto=format&fit=crop" alt="Naan Fromage Ail">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <span class="dish-title">Naan Fromage & Ail</span>
                            <span class="price">8 000 Ar</span>
                        </div>
                        <p class="dish-desc">Cuit minute dans notre four Tandoor traditionnel. Croustillant, fondant et riche en saveurs.</p>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="menu-card fade-in" style="transition-delay: 0.2s;">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1603133872878-684f10842bec?q=80&w=1000&auto=format&fit=crop" alt="Riz Cantonais">
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <span class="dish-title">Riz Cantonais Spécial</span>
                            <span class="price">15 000 Ar</span>
                        </div>
                        <p class="dish-desc">La touche Malagasy-Asian. Généreux, garni de crevettes, œufs et petits légumes frais.</p>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir le menu digital complet</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-layout">
                <div class="about-text fade-in">
                    <h3>Une Escale Gourmande</h3>
                    <p>Plus qu'un simple restaurant, L'Arlequin est une institution locale nichée au cœur de l'effervescence de Tsaralalana.</p>
                    <p>Que vous sortiez d'une réunion d'affaires ou que vous soyez résident à l'Hôtel Anjary voisin, nous vous promettons une hygiène irréprochable et un service rapide.</p>
                    <div class="highlight-text">
                        "Nos épices sont importées directement pour garantir ce goût inimitable que vous ne trouverez nulle part ailleurs à Tana."
                    </div>
                </div>
                <div class="about-img fade-in">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16549766b?q=80&w=1000&auto=format&fit=crop" alt="Ambiance Restaurant Arlequin">
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="location" class="location-section">
        <div class="container">
            <div class="section-header fade-in">
                <h3>Nous Trouver</h3>
                <p>Au centre de tout, facile d'accès.</p>
            </div>

            <div class="contact-info-grid fade-in">
                <div class="info-box">
                    <i class="fas fa-map-marked-alt"></i>
                    <h4>Adresse</h4>
                    <p>Rue Refotaka, Tsaralalana<br>À 50m de l'Hôtel Anjary</p>
                </div>
                <div class="info-box">
                    <i class="far fa-clock"></i>
                    <h4>Horaires</h4>
                    <p>Midi : 11h30 - 14h30<br>Soir : 18h30 - 22h00<br>7j/7</p>
                </div>
                <div class="info-box">
                    <i class="fas fa-phone"></i>
                    <h4>Réservation</h4>
                    <p>+261 34 XX XX XX<br>Service Traiteur disponible</p>
                </div>
            </div>

            <!-- Map Placeholder which links to real Google Maps -->
            <a href="https://www.google.com/maps/search/?api=1&query=Tsaralalana+Antananarivo" target="_blank" class="map-link fade-in">
                <div class="map-container">
                    <div class="map-overlay">
                        <h4 class="text-gold">Cliquez pour voir sur Google Maps</h4>
                        <p style="color:white; margin-top:5px;">Itinéraire GPS Direct</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 L'Arlequin Antananarivo. Design Premium.</p>
        </div>
    </footer>

    <!-- Sticky Bottom Bar (Mobile) -->
    <div class="sticky-mobile">
        <a href="tel:+261340000000" class="sticky-btn"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Appeler Maintenant</a>
    </div>

    <!-- JavaScript -->
    <script>
        // INTEGRATION DU LOGO (OBLIGATOIRE)
        const LOGO_URL = "logo.jpg";
        
        // Insertion dynamique du logo
        const logoPlaceholder = document.getElementById('logo-placeholder');
        if (logoPlaceholder) {
            logoPlaceholder.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="L'Arlequin Logo"></a>`;
        }

        // Animation au scroll (Intersection Observer)
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Animate only once
                    }
                });
            }, observerOptions);

            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(el => observer.observe(el));
        });

        // Header Background on Scroll
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.style.background = 'rgba(5, 5, 5, 0.95)';
                header.style.padding = '10px 0';
            } else {
                header.style.background = 'rgba(5, 5, 5, 0.85)';
                header.style.padding = '15px 0';
            }
        });
    </script>
</body>
</html>