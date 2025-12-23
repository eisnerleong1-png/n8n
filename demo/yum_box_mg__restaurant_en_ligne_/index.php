<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yum Box.mg | Livraison de repas Premium à Antananarivo</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #5E1516; /* Deep Red - Serieux */
            --accent: #EB3560; /* Vivid Pink - Action */
            --white: #FFFFFF;
            --off-white: #F9F9F9;
            --text-dark: #2D2D2D;
            --text-gray: #666666;
            --shadow-soft: 0 10px 40px -10px rgba(94, 21, 22, 0.1);
            --shadow-hover: 0 20px 60px -15px rgba(94, 21, 22, 0.2);
            --radius: 16px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* RESET & BASE */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--primary);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.2;
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
            height: auto;
            display: block;
        }

        /* UTILITIES */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(235, 53, 96, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(235, 53, 96, 0.5);
        }

        .section-padding {
            padding: 100px 0;
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 15px 0;
            transition: var(--transition);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajustable via JS si besoin */
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            color: var(--primary);
            position: relative;
            font-size: 0.95rem;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cart-btn {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cart-icon-wrap {
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent);
            color: white;
            font-size: 10px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* HERO SECTION */
        .hero {
            padding-top: 140px; /* Space for sticky header */
            padding-bottom: 80px;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: var(--white);
            position: relative;
            overflow: hidden;
        }

        .hero-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 24px;
            color: var(--primary);
        }

        .hero-content h1 span {
            color: var(--accent);
        }

        .hero-content p {
            font-size: 1.1rem;
            color: var(--text-gray);
            margin-bottom: 40px;
            max-width: 500px;
        }

        .trust-badges {
            margin-top: 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 0.85rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .payment-icons {
            display: flex;
            gap: 10px;
        }

        .payment-badge {
            background: #f0f0f0;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #555;
        }

        .hero-visual {
            position: relative;
        }

        .hero-visual img {
            width: 100%;
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
            animation: float 6s ease-in-out infinite;
        }

        .hero-blob {
            position: absolute;
            top: -10%;
            right: -10%;
            width: 120%;
            height: 120%;
            background: radial-gradient(circle, rgba(235,53,96,0.05) 0%, rgba(255,255,255,0) 70%);
            z-index: -1;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* SOCIAL PROOF */
        .social-proof {
            background: var(--off-white);
            padding: 30px 0;
            border-top: 1px solid rgba(0,0,0,0.05);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .proof-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .proof-stat {
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .proof-stat i {
            color: var(--accent);
        }

        .testimonials-ticker {
            flex: 1;
            display: flex;
            gap: 30px;
            overflow: hidden;
            justify-content: flex-end;
        }

        .testimonial-item {
            font-style: italic;
            font-size: 0.9rem;
            color: var(--text-gray);
        }

        /* MENU VEDETTE */
        .featured-menu {
            background: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .menu-card {
            background: var(--white);
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
        }

        .menu-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }

        .card-img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .menu-card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .card-desc {
            font-size: 0.9rem;
            color: var(--text-gray);
            margin-bottom: 20px;
            font-weight: 300;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .price {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
        }

        .add-btn {
            background: white;
            border: 2px solid var(--accent);
            color: var(--accent);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-btn:hover {
            background: var(--accent);
            color: white;
        }

        .view-all-container {
            text-align: center;
            margin-top: 60px;
        }

        /* VALUE PROPOSITION */
        .values {
            background: var(--off-white);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .value-card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: var(--radius);
            text-align: center;
            transition: var(--transition);
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-soft);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            background: rgba(235, 53, 96, 0.1);
            color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 25px;
        }

        .value-card h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .value-card p {
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        /* ABOUT */
        .about {
            background: var(--white);
        }

        .about-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-img img {
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-text p {
            color: var(--text-gray);
            margin-bottom: 20px;
        }

        /* FOOTER */
        footer {
            background: var(--primary);
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h4 {
            margin-bottom: 25px;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }

        .footer-logo img {
            height: 40px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1); /* Logo en blanc */
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: rgba(255,255,255, 0.7);
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .footer-col ul li a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icons a {
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--accent);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            font-size: 0.8rem;
            color: rgba(255,255,255, 0.5);
        }

        /* MOBILE STICKY CTA */
        .mobile-sticky-cta {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            z-index: 999;
            display: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        /* MOBILE NAV */
        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 2.8rem;
            }
            .hero-layout, .about-layout {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .hero-visual {
                order: -1;
            }
            .hero-content p, .trust-badges {
                margin-left: auto;
                margin-right: auto;
            }
            .trust-badges {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .nav-links, .nav-actions {
                display: none; /* Hide on mobile initially */
            }
            .mobile-menu-btn {
                display: block;
            }
            .mobile-sticky-cta {
                display: block;
            }
            .section-header h2 {
                font-size: 2rem;
            }
            .hero-content h1 {
                font-size: 2.2rem;
            }
            .proof-wrapper {
                justify-content: center;
                text-align: center;
            }
        }

        /* Mobile Menu Open State */
        .mobile-nav-active .nav-links {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            gap: 20px;
        }

    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-wrapper">
            <div class="logo-container">
                <!-- Logo injecté via JS -->
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="#menu">Notre Carte</a></li>
                    <li><a href="#zones">Zones de Livraison</a></li>
                    <li><a href="#about">À Propos</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="#" class="cart-btn">
                    <div class="cart-icon-wrap">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count">0</span>
                    </div>
                    <span>0 Ar</span>
                </a>
                <a href="#menu" class="btn btn-primary">Commander Maintenant</a>
            </div>

            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container hero-layout">
            <div class="hero-content">
                <h1>Le Goût Authentique d'Antananarivo <br><span>Livré à Votre Porte.</span></h1>
                <p>Ne perdez plus de temps à chercher. Des plats cuisinés frais, savoureux et livrés chez vous ou au bureau en moins de 45 minutes.</p>
                <a href="#menu" class="btn btn-primary">Voir le Menu du Jour</a>
                
                <div class="trust-badges">
                    <span>Paiement facile via :</span>
                    <div class="payment-icons">
                        <span class="payment-badge">Mvola</span>
                        <span class="payment-badge">Orange</span>
                        <span class="payment-badge">Airtel</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="hero-blob"></div>
                <!-- Image HD Food Top Shot -->
                <img src="https://images.unsplash.com/photo-1547496502-ffa2264a36b5?q=80&w=2000&auto=format&fit=crop" alt="Table de plats gourmands">
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section class="social-proof">
        <div class="container proof-wrapper">
            <div class="proof-stat">
                <i class="fas fa-check-circle"></i>
                Déjà plus de 1000 repas livrés dans la capitale
            </div>
            <div class="testimonials-ticker">
                <div class="testimonial-item">"Le meilleur Mine Sao de Tana !" - Riana R.</div>
                <div class="testimonial-item">"Rapide et chaud, merci !" - Toky A.</div>
            </div>
        </div>
    </section>

    <!-- MENU VEDETTE -->
    <section id="menu" class="section-padding featured-menu">
        <div class="container">
            <div class="section-header">
                <h2>Nos Best-Sellers de la Semaine</h2>
                <p>Cuisinés avec amour ce matin</p>
            </div>

            <div class="menu-grid">
                <!-- Product 1 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1552611052-33e04de081de?q=80&w=800&auto=format&fit=crop" alt="Mine Sao Spécial Yum">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Mine Sao Spécial Yum</h3>
                            <p class="card-desc">Nouilles fraîches, légumes croquants, œuf au plat et viande marinée aux épices locales.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">15 000 Ar</span>
                            <button class="add-btn"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?q=80&w=800&auto=format&fit=crop" alt="Burger Gourmet Tana">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Le "Tana" Gourmet Burger</h3>
                            <p class="card-desc">Steak de zébu haché maison, fromage fondant, sauce secrète Yum et frites croustillantes.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">20 000 Ar</span>
                            <button class="add-btn"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="menu-card">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1603133872878-684f208fb74b?q=80&w=800&auto=format&fit=crop" alt="Riz Sauté Royal">
                    </div>
                    <div class="card-content">
                        <div>
                            <h3 class="card-title">Riz Sauté Royal</h3>
                            <p class="card-desc">Riz blanc sauté au wok, crevettes, poulet, petits pois et une touche de sauce soja.</p>
                        </div>
                        <div class="card-footer">
                            <span class="price">18 000 Ar</span>
                            <button class="add-btn"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="view-all-container">
                <a href="#" class="btn btn-primary" style="background: transparent; border: 2px solid var(--accent); color: var(--accent);">Voir toute la carte</a>
            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION -->
    <section class="section-padding values">
        <div class="container">
            <div class="section-header">
                <h2>Pourquoi choisir Yum Box.mg ?</h2>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="icon-box"><i class="fas fa-leaf"></i></div>
                    <h3>Fraîcheur Garantie</h3>
                    <p>Ingrédients achetés le matin même au marché local d'Analakely et environs.</p>
                </div>
                <div class="value-card">
                    <div class="icon-box"><i class="fas fa-motorcycle"></i></div>
                    <h3>Livraison Rapide</h3>
                    <p>Nos livreurs connaissent les raccourcis de Tana pour éviter les bouchons.</p>
                </div>
                <div class="value-card">
                    <div class="icon-box"><i class="fas fa-star"></i></div>
                    <h3>Hygiène Irréprochable</h3>
                    <p>Cuisiné selon les standards internationaux avec des contrôles stricts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="section-padding about">
        <div class="container about-layout">
            <div class="about-text">
                <h3>Plus qu'un restaurant, <br><span style="color: var(--accent);">une passion.</span></h3>
                <p>Né du manque d'options fiables à Antananarivo, Yum Box s'engage à moderniser votre pause déjeuner. </p>
                <p>Nous savons qu'il est difficile de trouver un repas sain, rapide et abordable dans le tumulte de la capitale. C'est pourquoi nous avons créé Yum Box : Pas de menu caché, juste du goût, des produits locaux et un service client qui vous respecte.</p>
                <a href="#contact" style="font-weight: 600; color: var(--accent); border-bottom: 2px solid var(--accent);">En savoir plus sur notre équipe</a>
            </div>
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?q=80&w=1000&auto=format&fit=crop" alt="L'équipe Yum Box en cuisine">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-logo">
                    <!-- Logo clone via JS -->
                    <div id="footer-logo-container"></div>
                    <p style="opacity: 0.8; font-size: 0.9rem;">Votre partenaire gourmand à Tana. Livraison de bonheur, un plat à la fois.</p>
                </div>
                
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#zones">Zones de Livraison</a></li>
                        <li><a href="#about">À Propos</a></li>
                        <li><a href="#">Mon Compte</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-phone-alt" style="margin-right: 8px; color: var(--accent);"></i> 034 xx xxx xx</li>
                        <li><i class="fas fa-envelope" style="margin-right: 8px; color: var(--accent);"></i> miam@yumbox.mg</li>
                        <li><i class="fas fa-map-marker-alt" style="margin-right: 8px; color: var(--accent);"></i> Antananarivo, Madagascar</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Suivez-nous</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                &copy; 2024 Yum Box.mg. Tous droits réservés. Design Premium.
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BUTTON -->
    <a href="#menu" class="btn btn-primary mobile-sticky-cta" style="width: calc(100% - 40px); text-align: center;">
        Commander Maintenant
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // LOGO CONFIGURATION (MANDATORY)
        const LOGO_URL = "logo.jpg";

        // DOM Elements
        const header = document.querySelector('header');
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const headerContainer = document.querySelector('#header');
        const logoContainer = document.querySelector('.logo-container');
        const footerLogoContainer = document.querySelector('#footer-logo-container');

        // 1. Insert Logo
        function insertLogo() {
            const imgHTML = `<a href="#"><img src="${LOGO_URL}" alt="Yum Box Logo"></a>`;
            logoContainer.innerHTML = imgHTML;
            
            // Clone for footer
            const footerImg = document.createElement('img');
            footerImg.src = LOGO_URL;
            footerImg.alt = "Yum Box Footer Logo";
            footerLogoContainer.appendChild(footerImg);
        }

        // 2. Sticky Header Effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 5px 20px rgba(0,0,0,0.1)";
                header.style.padding = "10px 0";
            } else {
                header.style.boxShadow = "none";
                header.style.padding = "15px 0";
            }
        });

        // 3. Mobile Menu Toggle
        mobileMenuBtn.addEventListener('click', () => {
            headerContainer.classList.toggle('mobile-nav-active');
            const icon = mobileMenuBtn.querySelector('i');
            if (headerContainer.classList.contains('mobile-nav-active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // 4. Smooth Scroll for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                headerContainer.classList.remove('mobile-nav-active'); // Close menu on click
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // 5. Simple Cart Interaction (Visual Only)
        let cartCount = 0;
        const countBadges = document.querySelectorAll('.cart-count');
        const addButtons = document.querySelectorAll('.add-btn');

        addButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                cartCount++;
                countBadges.forEach(badge => badge.innerText = cartCount);
                
                // Animation button
                this.innerHTML = '<i class="fas fa-check"></i>';
                this.style.background = '#5E1516';
                this.style.color = '#fff';
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-plus"></i>';
                    this.style.background = 'white';
                    this.style.color = '#EB3560';
                }, 1000);
            });
        });

        // Initialize
        insertLogo();

        // Scroll Animation (Intersection Observer)
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

        document.querySelectorAll('.menu-card, .value-card, .about-text').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });

    </script>
</body>
</html>