<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOMAPRO | Excellence Industrielle - Hygiène & Beauté Madagascar</title>
    <meta name="description" content="Fabricant de produits d'hygiène et cosmétique à Madagascar. Production locale, standards internationaux.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- RESET & VARS --- */
        :root {
            --primary-color: #063416; /* Vert Forêt Profond */
            --accent-color: #8CC63F; /* Vert Pomme Vif */
            --text-color: #333333;
            --text-light: #f4f4f4;
            --bg-light: #f9f9f9;
            --white: #ffffff;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --shadow-soft: 0 10px 40px rgba(0,0,0,0.08);
            --shadow-hover: 0 20px 50px rgba(6, 52, 22, 0.15);
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
            font-family: 'Roboto', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--white);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--primary-color);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        /* --- UTILITIES --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }
        .text-white { color: var(--white) !important; }
        .bg-light { background-color: var(--bg-light); }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
            transition: var(--transition);
            cursor: pointer;
            border: 2px solid transparent;
        }

        .btn-primary {
            background-color: var(--accent-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: #7ab332;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(140, 198, 63, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--primary-color);
        }

        .btn-outline-dark {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline-dark:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        /* --- TOP BAR --- */
        .top-bar {
            background-color: var(--primary-color);
            color: rgba(255,255,255,0.8);
            font-size: 0.85rem;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info span {
            margin-right: 20px;
        }

        .contact-info i {
            color: var(--accent-color);
            margin-right: 8px;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 40px; /* height of top-bar */
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: transparent;
        }

        header.scrolled {
            top: 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            padding: 10px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
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
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            color: var(--white);
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        header.scrolled .nav-links a {
            color: var(--primary-color);
        }

        .nav-links a:hover {
            color: var(--accent-color);
        }

        .nav-cta {
            padding: 10px 24px;
            border: 2px solid var(--accent-color);
            color: var(--accent-color);
            border-radius: 4px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .nav-cta:hover {
            background: var(--accent-color);
            color: var(--white);
        }

        .hamburger {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .hamburger {
            color: var(--primary-color);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?q=80&w=2070&auto=format&fit=crop'); /* Premium Cosmetic Texture / Green abstract */
            background-size: cover;
            background-position: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(6, 52, 22, 0.95) 0%, rgba(6, 52, 22, 0.6) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--white);
            max-width: 800px;
            margin-top: 60px; /* Offset for header */
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 24px;
            color: var(--white);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-logos {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.7;
            filter: grayscale(100%);
            transition: var(--transition);
        }
        
        .trust-logos:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        .trust-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #888;
            font-size: 0.9rem;
        }

        .trust-item i {
            font-size: 2rem;
            color: var(--primary-color);
        }

        /* --- CATALOGUE --- */
        .catalogue-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .cat-card {
            position: relative;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: var(--shadow-soft);
        }

        .cat-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .cat-card:hover img {
            transform: scale(1.08);
        }

        .cat-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 40px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: var(--white);
        }

        .cat-card h3 {
            font-size: 2rem;
            color: var(--white);
            margin-bottom: 10px;
        }

        .cat-link {
            display: inline-flex;
            align-items: center;
            color: var(--accent-color);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 15px;
        }

        .cat-link i {
            margin-left: 10px;
            transition: transform 0.3s;
        }

        .cat-card:hover .cat-link i {
            transform: translateX(5px);
        }

        /* --- EXPERTISE --- */
        .expertise-section {
            background-color: var(--primary-color);
            color: var(--white);
            overflow: hidden;
        }

        .expertise-layout {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .expertise-img {
            flex: 1;
            min-width: 400px;
            height: 600px;
        }
        
        .expertise-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .expertise-content {
            flex: 1;
            min-width: 400px;
            padding: 80px 60px;
        }

        .expertise-content h2 {
            color: var(--white);
            font-size: 2.5rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 20px;
        }
        
        .expertise-content h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background-color: var(--accent-color);
        }

        .expertise-list li {
            margin-bottom: 25px;
            display: flex;
            align-items: flex-start;
        }

        .expertise-list i {
            color: var(--accent-color);
            font-size: 1.5rem;
            margin-right: 20px;
            margin-top: 5px;
        }

        .expertise-list h4 {
            color: var(--white);
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .expertise-list p {
            color: rgba(255,255,255,0.7);
            font-size: 0.95rem;
        }

        /* --- BEST SELLERS --- */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid #eee;
        }

        .product-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-10px);
            border-color: transparent;
        }

        .product-img {
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .product-img img {
            max-height: 100%;
            width: auto;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .product-meta {
            color: #888;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .product-price {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            display: block;
        }

        /* --- B2B FORM --- */
        .b2b-section {
            background-color: #f0f2f0;
            position: relative;
        }
        
        .b2b-box {
            background: var(--white);
            padding: 60px;
            border-radius: 20px;
            border: 1px solid var(--accent-color);
            box-shadow: var(--shadow-soft);
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            min-width: 250px;
        }

        .form-input {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            font-family: inherit;
            outline: none;
            transition: 0.3s;
        }

        .form-input:focus {
            border-color: var(--accent-color);
            background: var(--white);
        }

        /* --- FOOTER --- */
        footer {
            background-color: #042410;
            color: rgba(255,255,255,0.7);
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
        }

        .footer-logo img {
            height: 40px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 25px;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a:hover {
            color: var(--accent-color);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: var(--accent-color);
            color: var(--white);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.05);
            padding: 20px 0;
            text-align: center;
            font-size: 0.85rem;
        }

        /* --- MOBILE STICKY CTA --- */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--white);
            padding: 15px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 9999;
            display: none; /* Hidden on desktop */
            justify-content: center;
        }

        .mobile-sticky-cta .btn {
            width: 100%;
            text-align: center;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .nav-links { display: none; }
            .hamburger { display: block; }
            .expertise-img { min-width: 100%; height: 400px; order: 1; }
            .expertise-content { order: 2; padding: 60px 20px; }
            .b2b-box { padding: 40px 20px; }
        }

        @media (max-width: 768px) {
            .top-bar { display: none; }
            header { top: 0; background-color: rgba(255,255,255,0.95); padding: 10px 0; }
            header .logo-container img { height: 40px; }
            .hamburger { color: var(--primary-color); }
            
            .hero-content { text-align: center; margin-top: 0; }
            .hero h1 { font-size: 2.2rem; }
            .hero-btns { flex-direction: column; align-items: center; }
            .btn { width: 100%; max-width: 300px; text-align: center; }
            
            .catalogue-grid { grid-template-columns: 1fr; }
            .cat-card { height: 350px; }
            
            .mobile-sticky-cta { display: flex; }
            footer { padding-bottom: 80px; } /* Space for sticky CTA */
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="contact-info">
                <span><i class="fas fa-envelope"></i> contact@somapro.mg</span>
                <span><i class="fas fa-phone-alt"></i> +261 34 00 000 00</span>
            </div>
            <div class="social-mini">
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo-container" id="logo-container">
                    <!-- Logo inserted via JS -->
                </a>
                
                <ul class="nav-links">
                    <li><a href="#produits">Nos Produits</a></li>
                    <li><a href="#expertise">Expertise Industrielle</a></li>
                    <li><a href="#apropos">À Propos</a></li>
                    <li><a href="#carrieres">Carrières</a></li>
                </ul>

                <div style="display: flex; align-items: center; gap: 20px;">
                    <a href="#b2b" class="nav-cta hidden-mobile">Espace Distributeur</a>
                    <div class="hamburger">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-content">
            <h1>L'Excellence Industrielle au Service de l'Hygiène et de la Beauté à Madagascar.</h1>
            <p>Production locale, standards internationaux. Découvrez nos gammes de soins et d'entretien pour les professionnels et les familles.</p>
            <div class="hero-btns">
                <a href="#produits" class="btn btn-primary">Consulter le Catalogue</a>
                <a href="#b2b" class="btn btn-secondary">Devenir Partenaire B2B</a>
            </div>
        </div>
    </section>

    <!-- TRUST SIGNALS -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-logos">
                <div class="trust-item">
                    <i class="fas fa-certificate"></i>
                    <span>ISO 9001</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-leaf"></i>
                    <span>VITA MALAGASY</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-store"></i>
                    <span>PARTENAIRE GMS</span>
                </div>
                <div class="trust-item">
                    <i class="fas fa-flask"></i>
                    <span>TESTÉ CLINIQUEMENT</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CATALOGUE SEGMENTÉ -->
    <section id="produits" class="section-padding">
        <div class="container">
            <div class="text-center">
                <h2>Nos Univers de Production</h2>
                <p style="margin-top: 10px; color: #666;">Une gamme complète pour répondre à tous les besoins.</p>
            </div>
            
            <div class="catalogue-grid">
                <!-- Cosmétique -->
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1596462502278-27bfdd403348?q=80&w=800&auto=format&fit=crop" alt="Cosmétique et Soins Madagascar">
                    <div class="cat-overlay">
                        <h3>Cosmétique & Soins</h3>
                        <p>Douceur et naturalité pour la peau et les cheveux.</p>
                        <span class="cat-link">Voir la gamme Cosmétique <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <!-- Hygiène -->
                <div class="cat-card">
                    <img src="https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?q=80&w=800&auto=format&fit=crop" alt="Produits Entretien Madagascar">
                    <div class="cat-overlay">
                        <h3>Hygiène & Entretien</h3>
                        <p>Efficacité professionnelle pour un environnement sain.</p>
                        <span class="cat-link">Voir la gamme Entretien <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERTISE SECTION -->
    <section id="expertise" class="expertise-section">
        <div class="expertise-layout">
            <div class="expertise-img">
                <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?q=80&w=800&auto=format&fit=crop" alt="Laboratoire Industriel">
            </div>
            <div class="expertise-content">
                <h2>Une Industrie de Pointe à Antananarivo</h2>
                <ul class="expertise-list">
                    <li>
                        <i class="fas fa-microscope"></i>
                        <div>
                            <h4>R&D Intégrée</h4>
                            <p>Formulation en laboratoire interne pour des produits adaptés au marché local et aux spécificités Malagasy.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-industry"></i>
                        <div>
                            <h4>Capacité Volume</h4>
                            <p>Production à grande échelle garantissant zéro rupture pour nos distributeurs et grossistes.</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-double"></i>
                        <div>
                            <h4>Engagement Qualité</h4>
                            <p>Contrôle strict à chaque étape de la chaîne de production. Certification et traçabilité.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- BEST SELLERS -->
    <section class="section-padding bg-light">
        <div class="container">
            <h2 class="text-center">Les Incontournables du Quotidien</h2>
            
            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?q=80&w=400&auto=format&fit=crop" alt="Shampoing">
                    </div>
                    <h3>Shampoing Doux Aloe Vera</h3>
                    <p class="product-meta">250ml / 500ml • Disponible en gros</p>
                    <span class="product-price">Prix Public Conseillé</span>
                    <a href="#" class="btn btn-outline-dark" style="padding: 10px 20px; font-size: 0.8rem;">Fiche Technique</a>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1585232561025-aa7287714574?q=80&w=400&auto=format&fit=crop" alt="Gel Hydroalcoolique">
                    </div>
                    <h3>Gel Main Désinfectant</h3>
                    <p class="product-meta">100ml / 1L • Norme OMS</p>
                    <span class="product-price">Prix Public Conseillé</span>
                    <a href="#" class="btn btn-outline-dark" style="padding: 10px 20px; font-size: 0.8rem;">Fiche Technique</a>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400&auto=format&fit=crop" alt="Détergent Sol">
                    </div>
                    <h3>Nettoyant Multi-surfaces</h3>
                    <p class="product-meta">5L Bidon • Usage Pro</p>
                    <span class="product-price">Prix Pro : Sur devis</span>
                    <a href="#" class="btn btn-outline-dark" style="padding: 10px 20px; font-size: 0.8rem;">Fiche Technique</a>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B CONVERSION -->
    <section id="b2b" class="section-padding b2b-section">
        <div class="container">
            <div class="b2b-box">
                <div class="text-center">
                    <h2>Vous êtes distributeur ou grossiste ?</h2>
                    <p style="max-width: 600px; margin: 15px auto; color: #555;">Rejoignez notre réseau de partenaires à travers Madagascar. Bénéficiez de tarifs préférentiels et d'un support marketing dédié.</p>
                </div>
                
                <form onsubmit="event.preventDefault(); alert('Votre demande a bien été reçue !');">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" class="form-input" placeholder="Nom de la société" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" placeholder="Email professionnel" required>
                        </div>
                        <div class="form-group">
                            <select class="form-input">
                                <option>Type de besoin...</option>
                                <option>Distribution GMS</option>
                                <option>Grossiste</option>
                                <option>Achat en Gros (Pro)</option>
                                <option>Marque Blanche</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 30px;">
                        <button type="submit" class="btn btn-primary">Demander nos Tarifs Pro</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="#" class="footer-logo" id="footer-logo-container">
                        <!-- Logo via JS -->
                    </a>
                    <p>Votre partenaire industriel de confiance pour l'hygiène et la beauté à Madagascar.</p>
                </div>
                
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-links" style="opacity: 0.8;">
                        <li><i class="fas fa-map-marker-alt"></i> Z.I. Antananarivo, Madagascar</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@somapro.mg</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#produits">Catalogue</a></li>
                        <li><a href="#expertise">Qui sommes-nous</a></li>
                        <li><a href="#">Politique RSE</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2024 SOMAPRO Madagascar. Tous droits réservés. Designed for Excellence.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY CTA -->
    <div class="mobile-sticky-cta">
        <a href="#b2b" class="btn btn-primary">Contacter / Tarifs</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // CONFIGURATION
        const LOGO_URL = "logo.jpg";

        // INIT
        document.addEventListener('DOMContentLoaded', () => {
            // Inject Logo
            const logoHTML = `<img src="${LOGO_URL}" alt="SOMAPRO Logo">`;
            document.getElementById('logo-container').innerHTML = logoHTML;
            
            // Clone for footer (with ID handling)
            const footerLogoContainer = document.getElementById('footer-logo-container');
            if(footerLogoContainer) {
                 footerLogoContainer.innerHTML = logoHTML;
            }

            // Navbar Scroll Effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // Mobile Menu Toggle (Simple implementation)
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            
            if(hamburger) {
                hamburger.addEventListener('click', () => {
                    // In a real scenario we would toggle a class to show/hide the menu overlay
                    // For this single file demo, simple alert or logic
                    alert("Menu mobile : En production, les liens sont accessibles ci-dessous.");
                });
            }

            // Smooth Scroll for Anchors
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>