<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakana Hôtel | Authenticité & Luxe à Sainte-Marie</title>
    <meta name="description" content="Hôtel Bungalow sur pilotis à Sainte-Marie, Madagascar. Vivez l'expérience unique entre ciel et lagon. Réservez votre séjour authentique.">
    
    <!-- Fonts Premium -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- 1. VARIABLES & RESET --- */
        :root {
            --color-primary: #395438; /* Vert Fougère Profond */
            --color-secondary: #8F4E27; /* Brun Terre */
            --color-accent: #EEBF63; /* Jaune Ambre */
            --color-bg-light: #F9F7F2; /* Blanc Cassé / Beige Pâle */
            --color-text-dark: #1A1A1A;
            --color-text-light: #F9F9F9;
            --shadow-soft: 0 10px 40px -10px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 50px -10px rgba(57, 84, 56, 0.15);
            --radius-card: 16px;
            --radius-btn: 50px;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
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
            font-family: --font-body;
            background-color: var(--color-bg-light);
            color: var(--color-text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: var(--font-heading);
            color: var(--color-secondary);
            font-weight: 700;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { max-width: 100%; display: block; object-fit: cover; }

        /* --- 2. UTILITY CLASSES --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 16px 32px;
            border-radius: var(--radius-btn);
            font-family: var(--font-body);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--color-accent);
            color: #1A1A1A;
            border: 2px solid var(--color-accent);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--color-accent); /* Inversion pour effet premium */
            border-color: var(--color-accent);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--color-secondary);
            color: var(--color-secondary);
        }

        .btn-outline:hover {
            background: var(--color-secondary);
            color: white;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .flex-center { display: flex; align-items: center; justify-content: center; }

        /* Vagues SVG */
        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 60px;
        }
        .wave-top {
            transform: rotate(0deg);
            top: -1px;
            bottom: auto;
        }

        /* --- 3. HEADER & NAV --- */
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 12px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            width: auto;
            /* Placeholder style in case logo is missing initially */
            border-radius: 4px;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: white;
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
        }

        header.scrolled .nav-links a {
            color: var(--color-primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--color-accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }
        header.scrolled .mobile-menu-btn { color: var(--color-primary); }

        /* --- 4. HERO SECTION --- */
        .hero {
            height: 100vh;
            position: relative;
            background: url('https://images.unsplash.com/photo-1439066615861-d1fbced6530e?q=80&w=2670&auto=format&fit=crop') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.6));
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 60px; /* Evite collision header */
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            color: white;
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .hero h2 {
            font-family: var(--font-body);
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 400;
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* --- 5. TRUST BAR --- */
        .trust-bar {
            background: white;
            padding: 24px 0;
            position: relative;
            z-index: 10;
            margin-top: -60px; /* Chevauchement sur le hero */
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 12px;
            box-shadow: var(--shadow-soft);
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
            color: var(--color-primary);
        }
        
        .trust-item i {
            color: var(--color-accent);
            font-size: 1.2rem;
        }

        /* --- 6. ACCOMMODATIONS --- */
        .accommodations {
            position: relative;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title span {
            display: block;
            color: var(--color-accent);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .section-title h2 {
            font-size: 3rem;
            color: var(--color-secondary);
        }

        .grid-bungalows {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .card {
            background: white;
            border-radius: var(--radius-card);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        .card-img {
            height: 300px;
            position: relative;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .card:hover .card-img img {
            transform: scale(1.05);
        }

        .badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.8rem;
            color: var(--color-secondary);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .card-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--color-primary);
        }

        .price {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .price strong { color: var(--color-secondary); font-size: 1.3rem; }

        .features {
            margin-bottom: 30px;
            flex-grow: 1;
        }

        .features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
            font-size: 0.95rem;
        }

        .features li i { color: var(--color-primary); }

        /* --- 7. DINING (Nature Section) --- */
        .dining {
            background-color: var(--color-primary);
            color: white;
            position: relative;
            overflow: hidden;
            padding-top: 150px;
            padding-bottom: 150px;
        }

        .dining-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .dining-content h2 {
            color: var(--color-accent);
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .dining-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 90%;
        }

        .dining-img {
            position: relative;
        }

        .dining-img img {
            border-radius: var(--radius-card);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.1);
        }

        /* --- 8. EXPERIENCES --- */
        .experiences-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .exp-card {
            position: relative;
            height: 400px;
            border-radius: var(--radius-card);
            overflow: hidden;
            group: cursor;
        }

        .exp-card img {
            width: 100%;
            height: 100%;
            transition: var(--transition);
        }

        .exp-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 30px;
            color: white;
        }

        .exp-card:hover img {
            transform: scale(1.1);
        }

        .exp-card h3 {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }

        /* --- 9. ABOUT --- */
        .about {
            background: #fff;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 50px;
            align-items: center;
        }
        .about-text h2 { color: var(--color-secondary); margin-bottom: 20px; font-size: 2.5rem; }
        .about-text p { color: #555; margin-bottom: 20px; font-size: 1.05rem; }

        /* --- 10. FOOTER --- */
        footer {
            background-color: #2b3e2a; /* Plus sombre que le primary */
            color: rgba(255,255,255,0.8);
            padding: 80px 0 100px 0; /* Extra padding bottom for sticky mobile */
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .footer-col h4 {
            color: var(--color-accent);
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-col ul li { margin-bottom: 12px; }
        .footer-col a:hover { color: var(--color-accent); }
        .social-icons { display: flex; gap: 15px; margin-top: 20px; }
        .social-icons a { width: 40px; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 50%; }
        .social-icons a:hover { background: var(--color-accent); color: #1A1A1A; }

        /* --- 11. STICKY MOBILE BAR --- */
        .mobile-sticky-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            padding: 15px 24px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            display: none; /* Hidden on desktop */
            z-index: 999;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eee;
        }
        
        .sticky-price {
            display: flex;
            flex-direction: column;
        }
        .sticky-price span { font-size: 0.8rem; color: #888; }
        .sticky-price strong { font-size: 1.1rem; color: var(--color-secondary); }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 3.5rem; }
            .dining-grid { grid-template-columns: 1fr; text-align: center; }
            .dining-grid { display: flex; flex-direction: column-reverse; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; } /* Mobile Menu implementation needed usually, keeping simple for single file */
            .mobile-menu-btn { display: block; }
            
            .hero h1 { font-size: 2.8rem; }
            .trust-bar { flex-direction: column; width: 90%; margin-top: -30px; padding: 20px; align-items: flex-start; }
            
            .experiences-grid { 
                display: flex; 
                overflow-x: auto; 
                scroll-snap-type: x mandatory; 
                padding-bottom: 20px;
            }
            .exp-card { 
                min-width: 280px; 
                scroll-snap-align: center; 
            }
            
            .about-grid { grid-template-columns: 1fr; }
            
            .mobile-sticky-bar { display: flex; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="site-logo" src="" alt="Lakana Hotel Logo">
            </a>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#bungalows">Bungalows</a></li>
                    <li><a href="#restaurant">Restaurant</a></li>
                    <li><a href="#experience">Expériences</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#" style="opacity:0.7;">EN</a></li>
                </ul>
            </nav>

            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            
            <!-- Desktop CTA -->
            <a href="#reservation" class="btn btn-primary" style="display: none; @media(min-width: 769px){display:inline-flex;}">
                Réserver
            </a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>L'Authenticité Suspendue entre Ciel et Lagon.</h1>
            <h2>Vivez l'expérience unique de nos bungalows sur pilotis à Sainte-Marie. Le charme traditionnel malgache, le confort moderne en plus.</h2>
            <a href="#bungalows" class="btn btn-primary">Vérifier les disponibilités</a>
        </div>
        
        <!-- Vague bas du header -->
        <div class="wave-divider" style="color: var(--color-bg-light);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#F9F7F2"></path>
            </svg>
        </div>
    </section>

    <!-- Social Proof -->
    <div class="container">
        <div class="trust-bar">
            <div class="trust-item">
                <i class="fas fa-star"></i>
                <span>4.8/5 sur TripAdvisor</span>
            </div>
            <div class="trust-item">
                <i class="fas fa-heart"></i>
                <span>Recommandé par les voyageurs</span>
            </div>
            <div class="trust-item">
                <i class="fas fa-user-check"></i>
                <span>+500 Séjours inoubliables</span>
            </div>
        </div>
    </div>

    <!-- Hébergements -->
    <section id="bungalows" class="section-padding accommodations">
        <div class="container">
            <div class="section-title">
                <span>Hébergement</span>
                <h2>Nos Refuges entre Terre et Mer</h2>
            </div>

            <div class="grid-bungalows">
                <!-- Card 1: Pilotis -->
                <div class="card">
                    <div class="card-img">
                        <span class="badge">Premium</span>
                        <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?q=80&w=2574&auto=format&fit=crop" alt="Bungalow Pilotis">
                    </div>
                    <div class="card-content">
                        <h3>Bungalow sur Pilotis</h3>
                        <div class="price">À partir de <strong>250 000 Ar</strong> / nuit</div>
                        <ul class="features">
                            <li><i class="fas fa-water"></i> Accès direct au lagon</li>
                            <li><i class="fas fa-wind"></i> Brise marine naturelle</li>
                            <li><i class="fas fa-wifi"></i> Wifi Fibre Optique</li>
                            <li><i class="fas fa-bed"></i> Lit King Size à baldaquin</li>
                        </ul>
                        <a href="#" class="btn btn-primary" style="width: 100%;">Voir le bungalow</a>
                    </div>
                </div>

                <!-- Card 2: Jardin -->
                <div class="card">
                    <div class="card-img">
                        <span class="badge">Famille</span>
                        <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=2670&auto=format&fit=crop" alt="Bungalow Jardin">
                    </div>
                    <div class="card-content">
                        <h3>Bungalow Jardin</h3>
                        <div class="price">À partir de <strong>140 000 Ar</strong> / nuit</div>
                        <ul class="features">
                            <li><i class="fas fa-leaf"></i> Niché dans la végétation</li>
                            <li><i class="fas fa-volume-mute"></i> Calme absolu</li>
                            <li><i class="fas fa-users"></i> Idéal pour familles (4 pers.)</li>
                            <li><i class="fas fa-coffee"></i> Terrasse privée ombragée</li>
                        </ul>
                        <a href="#" class="btn btn-outline" style="width: 100%;">Voir le bungalow</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Restauration -->
    <section id="restaurant" class="dining">
        <!-- Wave Top -->
        <div class="wave-divider wave-top" style="color: var(--color-bg-light);">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#F9F7F2"></path>
            </svg>
        </div>

        <div class="container">
            <div class="dining-grid">
                <div class="dining-img">
                    <!-- Image Langouste/Seafood -->
                    <img src="https://images.unsplash.com/photo-1565557623262-b51c2513a641?q=80&w=2671&auto=format&fit=crop" alt="Plateau de fruits de mer Madagascar">
                </div>
                <div class="dining-content">
                    <h2>Saveurs de l'Océan Indien</h2>
                    <p>Découvrez notre table d'hôtes. Une cuisine généreuse rythmée par la pêche du jour (Langouste, Thon jaune, Capitaine) et les épices de l'île (Vanille, Girofle, Poivre rose).</p>
                    <p style="font-weight: 600; color: var(--color-accent);"><i class="fas fa-check-circle"></i> Petit-déjeuner tropical inclus dans toutes nos offres.</p>
                    <a href="#" class="btn btn-primary" style="margin-top: 20px;">Découvrir le menu</a>
                </div>
            </div>
        </div>

         <!-- Wave Bottom -->
         <div class="wave-divider" style="color: #fff;">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#fff"></path>
            </svg>
        </div>
    </section>

    <!-- Expériences -->
    <section id="experience" class="section-padding">
        <div class="container">
            <div class="section-title">
                <span>Activités</span>
                <h2>Explorez Sainte-Marie depuis le Lakana</h2>
            </div>
            
            <div class="experiences-grid">
                <div class="exp-card">
                    <img src="https://images.unsplash.com/photo-1518020382113-a7e8fc38eac9?q=80&w=2517&auto=format&fit=crop" alt="Baleines">
                    <div class="exp-overlay">
                        <h3>Safari Baleines</h3>
                        <p>De Juillet à Septembre, le spectacle grandiose des baleines à bosse.</p>
                    </div>
                </div>
                <div class="exp-card">
                    <img src="https://images.unsplash.com/photo-1596436889106-be35e843f974?q=80&w=2670&auto=format&fit=crop" alt="Ile aux Nattes">
                    <div class="exp-overlay">
                        <h3>Île aux Nattes</h3>
                        <p>Excursion pirogue vers les piscines naturelles et plages vierges.</p>
                    </div>
                </div>
                <div class="exp-card">
                    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2670&auto=format&fit=crop" alt="Massage">
                    <div class="exp-overlay">
                        <h3>Bien-être & Spa</h3>
                        <p>Massages aux huiles essentielles de Madagascar face à la mer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- A Propos -->
    <section id="about" class="section-padding" style="background: var(--color-bg-light);">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>L'Esprit Lakana</h2>
                    <p>Lakana signifie "Pirogue" en Malgache. Symbole de voyage et de lien entre les hommes et l'océan.</p>
                    <p>Notre établissement est né de la volonté de créer un havre de paix respectueux de l'environnement, utilisant des matériaux locaux (bois, feuilles de Ravinala) tout en offrant un standing international.</p>
                    <p>Ici, le temps s'arrête. Laissez vos chaussures, coupez votre téléphone, et reconnectez-vous à l'essentiel.</p>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1590001155093-a3c66ab0c3ff?q=80&w=2670&auto=format&fit=crop" alt="Equipe hotel" style="border-radius: var(--radius-card); box-shadow: var(--shadow-soft);">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Lakana Hôtel</h4>
                    <p>L'adresse incontournable pour un séjour authentique et raffiné à l'île Sainte-Marie.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> booking@lakana-hotel.mg</li>
                        <li><i class="fab fa-whatsapp"></i> +261 32 00 000 00</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Accès & Infos</h4>
                    <ul>
                        <li><a href="#">Comment venir ? (Vols/Bateau)</a></li>
                        <li><a href="#">Nos Conditions Générales</a></li>
                        <li><a href="#">FAQ & Hygiène</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Localisation</h4>
                    <!-- Fake map preview -->
                    <div style="width: 100%; height: 150px; background: #566E55; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Voir sur Maps
                    </div>
                </div>
            </div>
            <div style="margin-top: 60px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); text-align: center; font-size: 0.8rem;">
                &copy; 2025 Lakana Hôtel Sainte-Marie. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Mobile Sticky Bar -->
    <div class="mobile-sticky-bar">
        <div class="sticky-price">
            <span>À partir de</span>
            <strong>140 000 Ar</strong>
        </div>
        <a href="#bungalows" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.85rem;">Réserver</a>
    </div>

    <script>
        // --- 1. INTEGRATION LOGO (STRICT) ---
        const LOGO_URL = "logo.jpg";
        document.getElementById('site-logo').src = LOGO_URL;

        // --- 2. HEADER SCROLL EFFECT ---
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. ANIMATION ON SCROLL (SIMPLE INTERSECTION OBSERVER) ---
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        // Apply animations to cards and titles
        document.querySelectorAll('.card, .section-title, .dining-content, .exp-card').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.8s ease-out";
            observer.observe(el);
        });
    </script>
</body>
</html>