<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anjary Hotel | L'Élégance au Cœur d'Antananarivo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --primary: #941B30; /* Rouge Bordeau */
            --primary-dark: #6e1222;
            --secondary: #11522B; /* Vert Foncé */
            --secondary-light: #eef5f1;
            --text-main: #2D2D2D; /* Gris Anthracite */
            --text-light: #666666;
            --bg-light: #F9F9F9;
            --white: #FFFFFF;
            --gold: #D4AF37;
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 30px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 40px rgba(148, 27, 48, 0.15);
            --radius: 8px;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-body);
            color: var(--text-main);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 { font-family: var(--font-heading); font-weight: 700; line-height: 1.2; }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- UTILITIES --- */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .section-padding { padding: 80px 0; }
        .text-center { text-align: center; }
        .hidden-mobile { display: none; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .grid { display: grid; gap: 30px; }
        
        @media(min-width: 768px) {
            .hidden-mobile { display: block; }
            .hidden-desktop { display: none; }
        }

        /* --- TYPOGRAPHY --- */
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--text-main);
            position: relative;
            display: inline-block;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background-color: var(--primary);
            margin: 15px auto 0;
        }
        .subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto 40px;
        }

        /* --- BUTTONS --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            font-weight: 600;
            border-radius: var(--radius);
            cursor: pointer;
            border: none;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            box-shadow: 0 0 15px rgba(148, 27, 48, 0.4);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--white);
        }
        .btn-secondary:hover {
            background-color: #0b3d20;
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 2px solid var(--text-main);
            color: var(--text-main);
            background: transparent;
        }
        .btn-outline:hover {
            background-color: var(--text-main);
            color: var(--white);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 15px 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
        }
        
        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }
        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }
        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hamburger Menu (Mobile) */
        .hamburger {
            display: flex;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            z-index: 1001;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: var(--text-main);
            transition: var(--transition);
        }
        
        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 80%;
            height: 100vh;
            background: var(--white);
            padding: 80px 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-shadow: -10px 0 30px rgba(0,0,0,0.1);
            transition: var(--transition);
        }
        .mobile-menu.active { right: 0; }

        @media(min-width: 992px) {
            .hamburger, .mobile-menu { display: none; }
        }
        @media(max-width: 991px) {
            .nav-links { display: none; }
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2070&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding-top: 80px; /* Offset for header */
        }
        .hero-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeInUp 1s ease-out;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            font-weight: 300;
            opacity: 0.9;
        }

        @media(max-width: 768px) {
            .hero h1 { font-size: 2.5rem; }
            .hero p { font-size: 1rem; }
        }

        /* --- BOOKING BAR --- */
        .booking-wrapper {
            position: relative;
            z-index: 10;
            margin-top: -50px;
            padding: 0 15px;
        }
        .booking-bar {
            background: var(--white);
            padding: 30px;
            border-radius: var(--radius);
            box-shadow: var(--shadow-md);
            display: grid;
            grid-template-columns: repeat(4, 1fr) auto;
            gap: 20px;
            align-items: end;
        }
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 8px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: var(--font-body);
            color: var(--text-main);
        }
        
        /* Mobile Sticky Booking */
        .mobile-booking-sticky {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eee;
        }
        .mobile-price {
            display: flex;
            flex-direction: column;
        }
        .mobile-price span { font-size: 0.8rem; color: var(--text-light); }
        .mobile-price strong { font-size: 1.1rem; color: var(--primary); }

        @media(max-width: 1024px) {
            .booking-wrapper { display: none; }
        }
        @media(min-width: 1025px) {
            .mobile-booking-sticky { display: none; }
        }

        /* --- SOCIAL PROOF --- */
        .social-proof {
            background-color: var(--bg-light);
            border-bottom: 1px solid #eee;
        }
        .proof-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }
        .proof-item {
            padding: 20px;
            transition: var(--transition);
        }
        .proof-item:hover { transform: translateY(-5px); }
        .proof-icon {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }
        .proof-text {
            font-weight: 600;
            color: var(--text-main);
        }
        .rating-badge {
            background: #00AA6C;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            display: inline-block;
            margin-top: 5px;
        }

        /* --- ROOMS --- */
        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .room-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
        }
        .room-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }
        .room-img-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        .room-img-container img {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
        }
        .room-card:hover .room-img-container img {
            transform: scale(1.05);
        }
        .badge-best {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--primary);
            color: white;
            padding: 5px 12px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 4px;
        }
        .room-info {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .room-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            font-family: var(--font-heading);
        }
        .room-desc {
            font-size: 0.95rem;
            color: var(--text-light);
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .room-price {
            font-size: 1.1rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 15px;
        }
        .room-price span {
            font-size: 0.85rem;
            color: var(--text-light);
            font-weight: 400;
        }
        .room-footer {
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
            margin-top: auto;
        }
        .room-link {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* --- SERVICES (ZIG ZAG) --- */
        .service-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 0;
            margin-bottom: 0;
        }
        .service-img {
            height: 500px;
            position: relative;
        }
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .service-content {
            padding: 60px;
            background: var(--bg-light);
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .service-row.reverse .service-img { order: 2; }
        .service-row.reverse .service-content { order: 1; }

        @media(max-width: 991px) {
            .service-row, .service-row.reverse {
                grid-template-columns: 1fr;
            }
            .service-img, .service-content { height: auto; }
            .service-img { height: 300px; }
            .service-content { padding: 40px 20px; order: 2 !important; }
            .service-img { order: 1 !important; }
        }

        /* --- ABOUT --- */
        .about-section {
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=2070&auto=format&fit=crop');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
            padding: 120px 0;
        }
        .about-content {
            max-width: 800px;
            margin: 0 auto;
        }
        .about-content h2 { color: var(--white); margin-bottom: 20px; }
        .about-content p { font-size: 1.2rem; opacity: 0.9; }

        /* --- FAQ --- */
        .faq-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            color: var(--text-main);
        }
        .faq-toggle {
            font-size: 1.5rem;
            color: var(--primary);
            transition: transform 0.3s;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: var(--text-light);
            font-size: 0.95rem;
        }
        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-top: 15px;
        }
        .faq-item.active .faq-toggle {
            transform: rotate(45deg);
        }

        /* --- FOOTER --- */
        footer {
            background-color: #1a1a1a;
            color: #d1d1d1;
            padding: 80px 0 30px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }
        .footer-col h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.2rem;
        }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a:hover { color: var(--primary); }
        .footer-contact li {
            margin-bottom: 15px;
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }
        .social-link:hover { background: var(--primary); color: white; }
        .newsletter-form {
            display: flex;
            gap: 10px;
        }
        .newsletter-form input {
            padding: 10px;
            border-radius: 4px;
            border: none;
            width: 100%;
        }
        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            font-size: 0.85rem;
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

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

    <!-- HEADER -->
    <header id="main-header">
        <div class="container header-inner">
            <a href="#" class="logo-container">
                <img id="dynamic-logo" alt="Anjary Hotel">
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#chambres">Chambres</a></li>
                    <li><a href="#restauration">Restauration</a></li>
                    <li><a href="#events">Événements</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="hidden-mobile">
                <a href="#book" class="btn btn-primary">Réserver</a>
            </div>

            <div class="hamburger" id="hamburger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- MOBILE MENU -->
    <div class="mobile-menu" id="mobile-menu">
        <a href="#chambres" class="mobile-link">Chambres</a>
        <a href="#restauration" class="mobile-link">Restauration</a>
        <a href="#events" class="mobile-link">Événements</a>
        <a href="#about" class="mobile-link">À propos</a>
        <a href="#contact" class="mobile-link">Contact</a>
    </div>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>L'Élégance et le Confort au Cœur d'Antananarivo</h1>
            <p>Profitez d'un emplacement stratégique à Tsaralalana et d'un service 3 étoiles pour vos séjours d'affaires et de loisirs.</p>
            <a href="#book" class="btn btn-primary" style="padding: 16px 40px; font-size: 1.1rem;">RÉSERVER MA CHAMBRE</a>
        </div>
    </section>

    <!-- BOOKING BAR (DESKTOP) -->
    <div class="container booking-wrapper" id="book">
        <div class="booking-bar">
            <div class="form-group">
                <label>Arrivée</label>
                <input type="date">
            </div>
            <div class="form-group">
                <label>Départ</label>
                <input type="date">
            </div>
            <div class="form-group">
                <label>Voyageurs</label>
                <select>
                    <option>1 Adulte</option>
                    <option>2 Adultes</option>
                    <option>2 Adultes + 1 Enfant</option>
                    <option>Famille</option>
                </select>
            </div>
            <div class="form-group">
                <label>Code Promo</label>
                <input type="text" placeholder="Optionnel">
            </div>
            <button class="btn btn-secondary" style="width: 100%; height: 46px; margin-top: auto;">Vérifier</button>
        </div>
    </div>

    <!-- SOCIAL PROOF -->
    <section class="section-padding social-proof">
        <div class="container">
            <div class="proof-grid">
                <div class="proof-item reveal">
                    <div class="proof-icon">📶</div>
                    <div class="proof-text">Fibre Optique Haut Débit</div>
                </div>
                <div class="proof-item reveal">
                    <div class="proof-icon">🛏️</div>
                    <div class="proof-text">150 Chambres Rénovées</div>
                </div>
                <div class="proof-item reveal">
                    <div class="proof-icon">📍</div>
                    <div class="proof-text">Au cœur de Tsaralalana</div>
                </div>
                <div class="proof-item reveal">
                    <div class="proof-icon">⭐</div>
                    <div class="proof-text">Note 4.5/5 <span class="rating-badge">TripAdvisor</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CHAMBRES -->
    <section id="chambres" class="section-padding">
        <div class="container">
            <div class="text-center reveal">
                <h2 class="section-title">Un Sommeil Réparateur</h2>
                <p class="subtitle">Des espaces conçus pour votre confort, adaptés à tous les budgets.</p>
            </div>

            <div class="rooms-grid">
                <!-- Card 1 -->
                <article class="room-card reveal">
                    <div class="room-img-container">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop" alt="Chambre Standard">
                    </div>
                    <div class="room-info">
                        <h3 class="room-title">Chambre Standard</h3>
                        <div class="room-price">110 000 Ar <span>/ nuit</span></div>
                        <p class="room-desc">L'essentiel du confort avec literie premium et bureau de travail.</p>
                        <div class="room-footer">
                            <a href="#" class="room-link">Voir détails</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2 (Highlight) -->
                <article class="room-card reveal" style="border: 2px solid var(--primary); position: relative;">
                    <div class="badge-best">Best Seller</div>
                    <div class="room-img-container">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=1974&auto=format&fit=crop" alt="Chambre Supérieure">
                    </div>
                    <div class="room-info">
                        <h3 class="room-title">Chambre Supérieure</h3>
                        <div class="room-price">160 000 Ar <span>/ nuit</span></div>
                        <p class="room-desc">Espace et modernité. La préférée des voyageurs d'affaires.</p>
                        <div class="room-footer">
                            <a href="#" class="btn btn-primary" style="width:100%; padding: 10px;">Réserver</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="room-card reveal">
                    <div class="room-img-container">
                        <img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?q=80&w=2070&auto=format&fit=crop" alt="Suite Familiale">
                    </div>
                    <div class="room-info">
                        <h3 class="room-title">Suite Familiale</h3>
                        <div class="room-price">250 000 Ar <span>/ nuit</span></div>
                        <p class="room-desc">Luxe et espace pour tous. Salon séparé et commodités VIP.</p>
                        <div class="room-footer">
                            <a href="#" class="room-link">Voir détails</a>
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="text-center" style="margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir toutes les chambres</a>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="restauration">
        <!-- Restaurant -->
        <div class="service-row">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop" alt="Restaurant Anjary">
            </div>
            <div class="service-content">
                <h2 class="section-title" style="margin: 0 0 20px 0; font-size: 2rem;">Saveurs Locales & Internationales</h2>
                <p style="margin-bottom: 30px; color: var(--text-light);">Découvrez notre restaurant pour vos déjeuners d'affaires ou dîners détente. Notre chef vous propose un menu du jour frais et varié, alliant tradition malgache et cuisine du monde.</p>
                <a href="#" class="btn btn-outline" style="align-self: flex-start;">Découvrir le Menu</a>
            </div>
        </div>

        <!-- Events -->
        <div class="service-row reverse" id="events">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2664&auto=format&fit=crop" alt="Salle de conférence">
            </div>
            <div class="service-content">
                <h2 class="section-title" style="margin: 0 0 20px 0; font-size: 2rem;">Vos Événements au Sommet</h2>
                <p style="margin-bottom: 30px; color: var(--text-light);">Salles de conférence entièrement équipées et service traiteur sur mesure pour vos mariages, séminaires et ateliers.</p>
                <a href="#" class="btn btn-outline" style="align-self: flex-start; border-color: #2D2D2D; color: #2D2D2D;">Demander un devis</a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about-section">
        <div class="container about-content reveal">
            <h2>Anjary Hotel : Une Institution Moderne</h2>
            <p>Alliant l'hospitalité légendaire malgache à des infrastructures modernisées, nous nous engageons à faire de votre passage à Tana un moment inoubliable, que vous soyez ici pour affaires ou pour découvrir la Grande Île.</p>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding" style="background-color: #fff;">
        <div class="container" style="max-width: 800px;">
            <div class="text-center mb-5">
                <h2 class="section-title">Questions Fréquentes</h2>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    Avez-vous un parking sécurisé ?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    Oui, un parking sécurisé et gardé 24h/24 est disponible gratuitement pour tous nos clients résidents.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Proposez-vous une navette aéroport ?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    Oui, nous organisons votre transfert Ivato-Hôtel sur simple demande lors de votre réservation (service payant).
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Le petit-déjeuner est-il inclus ?
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    Nous proposons des formules flexibles. Vous pouvez choisir une chambre avec ou sans notre buffet petit-déjeuner continental lors de la réservation.
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Anjary Hotel</h4>
                    <ul class="footer-contact">
                        <li>📍 Rue de Tsaralalana, Antananarivo 101</li>
                        <li>📞 +261 20 22 123 45</li>
                        <li>✉️ contact@anjaryhotel.com</li>
                    </ul>
                    <div class="social-icons">
                        <a href="#" class="social-link">f</a>
                        <a href="#" class="social-link">in</a>
                        <a href="#" class="social-link">📸</a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#chambres">Nos Chambres</a></li>
                        <li><a href="#restauration">Restaurant</a></li>
                        <li><a href="#events">Événements</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p style="margin-bottom: 15px; font-size: 0.9rem;">Recevez nos offres exclusives.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Votre email">
                        <button class="btn btn-primary" style="padding: 10px 15px;">OK</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 Anjary Hotel Antananarivo. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BOTTOM BAR -->
    <div class="mobile-booking-sticky">
        <div class="mobile-price">
            <span>À partir de</span>
            <strong>110 000 Ar</strong>
        </div>
        <a href="#book" class="btn btn-primary" style="padding: 10px 20px;">RÉSERVER</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- LOGO INJECTION IMPERATIVE ---
        const LOGO_URL = "logo.jpg";
        document.getElementById('dynamic-logo').src = LOGO_URL;

        // --- MOBILE MENU ---
        const hamburger = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            const spans = hamburger.querySelectorAll('span');
            // Simple animation toggle
            if(mobileMenu.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                // Reset hamburger
                const spans = hamburger.querySelectorAll('span');
                spans[0].style.transform = 'none';
                spans[1].style.opacity = '1';
                spans[2].style.transform = 'none';
            });
        });

        // --- SCROLL REVEAL ANIMATION ---
        const revealElements = document.querySelectorAll('.reveal');

        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;

            revealElements.forEach((element) => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        // Trigger once on load
        revealOnScroll();

        // --- FAQ ACCORDION ---
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Close others
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) otherItem.classList.remove('active');
                });
                // Toggle current
                item.classList.toggle('active');
            });
        });

    </script>
</body>
</html>