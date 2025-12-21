<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madababa - Vente en ligne Madagascar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1395BA;
            --primary-dark: #0e7a99;
            --accent: #C23E27;
            --accent-hover: #a6321f;
            --text-dark: #1a1a1a;
            --text-gray: #666666;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow-sm: 0 2px 8px rgba(0,0,0,0.05);
            --shadow-md: 0 8px 24px rgba(0,0,0,0.08);
            --radius: 12px;
            --container: 1200px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* --- Header & Nav --- */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            padding: 15px 0;
        }

        .container {
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .logo-container img {
            height: 50px; /* Ajusté pour bien voir le logo */
            object-fit: contain;
        }

        .search-bar {
            flex: 1;
            max-width: 600px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px 12px 50px;
            border: 2px solid #e0e0e0;
            border-radius: 50px;
            font-size: 0.95rem;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s;
        }

        .search-bar input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .search-bar i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-gray);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-links a:hover { color: var(--primary); }

        .cta-header {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .cart-icon {
            position: relative;
            font-size: 1.2rem;
            color: var(--primary);
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent);
            color: white;
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        /* --- Hero Section --- */
        .hero {
            background-color: var(--primary);
            position: relative;
            overflow: hidden;
            padding: 80px 0;
            color: white;
        }

        .hero-bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(19, 149, 186, 0.95) 0%, rgba(19, 149, 186, 0.7) 100%), url('https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .btn-primary {
            background-color: var(--accent);
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(194, 62, 39, 0.4);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
            transform: perspective(1000px) rotateY(-5deg);
            transition: transform 0.5s;
        }

        .hero-image:hover img {
            transform: perspective(1000px) rotateY(0deg);
        }

        /* --- Trust Bar --- */
        .trust-bar {
            background-color: var(--bg-light);
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .trust-content {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            font-size: 0.9rem;
            color: var(--text-gray);
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .trust-item i { color: var(--primary); }

        /* --- Section Titles --- */
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .section-padding {
            padding: 80px 0;
        }

        /* --- Top Offers (Grid) --- */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
            position: relative;
            border: 1px solid #f0f0f0;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent);
            color: white;
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 2;
        }

        .product-img-wrapper {
            position: relative;
            padding-top: 100%; /* Square aspect ratio */
            overflow: hidden;
        }

        .product-img-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .product-card:hover .product-img-wrapper img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .price-wrapper {
            display: flex;
            align-items: baseline;
            gap: 10px;
            margin-bottom: 15px;
        }

        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.9rem;
        }

        .current-price {
            color: var(--accent);
            font-weight: 700;
            font-size: 1.25rem;
        }

        .btn-card {
            width: 100%;
            padding: 10px;
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-card:hover {
            background: var(--primary);
            color: white;
        }

        /* --- Categories --- */
        .categories-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .category-card {
            flex: 1;
            min-width: 150px;
            background: white;
            border: 1px solid #eee;
            border-radius: var(--radius);
            padding: 30px 20px;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            border-color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .cat-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .cat-title {
            font-weight: 600;
            color: var(--text-dark);
        }

        /* --- Service Section --- */
        .service-section {
            background-color: #F0F8FA;
        }

        .service-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .service-img img {
            border-radius: var(--radius);
            box-shadow: var(--shadow-md);
        }

        .btn-ghost {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            display: inline-block;
        }

        .btn-ghost:hover {
            background: var(--primary);
            color: white;
        }

        /* --- FAQ --- */
        .faq-item {
            border-bottom: 1px solid #eee;
            padding: 20px 0;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: var(--text-gray);
            margin-top: 0;
        }

        .faq-item.active .faq-answer {
            margin-top: 15px;
            max-height: 200px;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* --- Footer --- */
        footer {
            background: var(--primary);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer-links li { margin-bottom: 10px; }
        .footer-links a { opacity: 0.8; }
        .footer-links a:hover { opacity: 1; text-decoration: underline; }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* --- Floating WhatsApp --- */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 9999;
            transition: 0.3s;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        /* --- Responsive --- */
        @media (max-width: 992px) {
            .hero-content { grid-template-columns: 1fr; text-align: center; }
            .hero-image { display: none; } /* On mobile, focus on text/CTA */
            .hero-text p { margin: 0 auto 30px; }
            .service-layout { grid-template-columns: 1fr; }
            .nav-links { display: none; } /* Simple hiding for wireframe, normally hamburger */
        }

        @media (max-width: 768px) {
            .hero-text h1 { font-size: 2.2rem; }
            .nav-wrapper { flex-wrap: wrap; }
            .search-bar { order: 3; width: 100%; min-width: 100%; margin-top: 10px; }
            header { padding-bottom: 15px; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="logo-container">
                    <img id="main-logo" alt="Madababa Logo">
                </a>

                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Inona no tadiavinao? (Ex: Chaussures, Smartphone...)">
                </div>

                <div class="cta-header">
                    <div class="nav-links">
                        <a href="#">Catégories</a>
                        <a href="#">Promos</a>
                        <a href="#">À propos</a>
                    </div>
                    <a href="#" class="cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-overlay"></div>
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Ne perdez plus votre temps à scroller. Trouvez les meilleures offres de Tana ici.</h1>
                <p>La première plateforme qui centralise vos achats à Madagascar. Prix transparents, vendeurs vérifiés.</p>
                <button class="btn-primary">
                    Voir les Promotions (Mora sy Tsara) <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Online Shopping Madagascar">
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container trust-content">
            <div class="trust-item"><i class="fas fa-check-circle"></i> +1000 produits référencés</div>
            <div class="trust-item"><i class="fas fa-flag"></i> Service Client Malagasy 🇲🇬</div>
            <div class="trust-item"><i class="fas fa-truck"></i> Livraison sur Tana</div>
        </div>
    </div>

    <!-- Top Offres -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>Les pépites du moment 🔥</h2>
            </div>
            <div class="products-grid">
                <!-- Product 1 -->
                <article class="product-card">
                    <span class="badge">PROMO</span>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Casque Audio">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Écouteurs Bluetooth Premium X2</h3>
                        <div class="price-wrapper">
                            <span class="old-price">60 000 Ar</span>
                            <span class="current-price">45 000 Ar</span>
                        </div>
                        <button class="btn-card">Voir détails</button>
                    </div>
                </article>

                <!-- Product 2 -->
                <article class="product-card">
                    <span class="badge">NOUVEAU</span>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sneakers Rouge">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sneakers Urbaines Red Edition</h3>
                        <div class="price-wrapper">
                            <span class="old-price">120 000 Ar</span>
                            <span class="current-price">95 000 Ar</span>
                        </div>
                        <button class="btn-card">Voir détails</button>
                    </div>
                </article>

                <!-- Product 3 -->
                <article class="product-card">
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Montre Connectée">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Smartwatch Series 5 - Noir</h3>
                        <div class="price-wrapper">
                            <span class="old-price"></span>
                            <span class="current-price">150 000 Ar</span>
                        </div>
                        <button class="btn-card">Voir détails</button>
                    </div>
                </article>

                <!-- Product 4 -->
                <article class="product-card">
                    <span class="badge">-20%</span>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1585336261022-680e295ce3fe?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Lunettes de Soleil">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Lunettes de Soleil Aviator</h3>
                        <div class="price-wrapper">
                            <span class="old-price">30 000 Ar</span>
                            <span class="current-price">24 000 Ar</span>
                        </div>
                        <button class="btn-card">Voir détails</button>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="section-padding" style="background-color: #fafafa;">
        <div class="container">
            <div class="section-header">
                <h2>Que cherchez-vous aujourd'hui ?</h2>
            </div>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="cat-icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="cat-title">High-Tech</div>
                </div>
                <div class="category-card">
                    <div class="cat-icon"><i class="fas fa-tshirt"></i></div>
                    <div class="cat-title">Mode H/F</div>
                </div>
                <div class="category-card">
                    <div class="cat-icon"><i class="fas fa-couch"></i></div>
                    <div class="cat-title">Maison</div>
                </div>
                <div class="category-card">
                    <div class="cat-icon"><i class="fas fa-pump-soap"></i></div>
                    <div class="cat-title">Beauté</div>
                </div>
                <div class="category-card">
                    <div class="cat-icon"><i class="fas fa-motorcycle"></i></div>
                    <div class="cat-title">Auto-Moto</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Intermédiaire -->
    <section class="section-padding service-section">
        <div class="container">
            <div class="service-layout">
                <div class="service-text">
                    <h2>Vous ne trouvez pas ?</h2>
                    <p style="margin-bottom: 30px; font-size: 1.1rem; color: #555;">
                        Dites-nous ce que vous cherchez, Madababa le trouve pour vous au meilleur prix. Notre équipe scanne le marché local pour vous.
                    </p>
                    <button class="btn-ghost">Faire une demande spécifique</button>
                </div>
                <div class="service-img">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Service Client">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding">
        <div class="container" style="max-width: 800px;">
            <div class="section-header">
                <h2>Questions Fréquentes</h2>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">Comment se passe la livraison ? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Nous livrons partout à Antananarivo sous 24h ouvrées. Nos livreurs vous contactent avant de passer.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Comment payer ? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Vous pouvez payer par Mobile Money (MVola, Orange Money) ou directement en espèces à la livraison.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Les produits sont-ils garantis ? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Oui, tous nos vendeurs partenaires sont vérifiés et une garantie minimale s'applique sur les produits électroniques.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Madababa</h4>
                    <p style="opacity: 0.8; font-size: 0.9rem;">La marketplace de référence à Madagascar pour des achats simples et sécurisés.</p>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">Vendre sur Madababa</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul class="footer-links">
                        <li><i class="fab fa-whatsapp"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@madababa.mg</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                Madababa Online Store © 2024. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp -->
    <a href="#" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Javascript -->
    <script>
        // LOGO INTEGRATION - STRICT RULE
        const LOGO_URL = "logo.jpg";
        document.getElementById('main-logo').src = LOGO_URL;

        // FAQ Logic
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });

        // Mobile Search Sticky Behavior (Optional enhancement via JS if CSS position sticky needs help, 
        // but CSS is handling it well. Adding visual cue on scroll).
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = "0 4px 12px rgba(0,0,0,0.1)";
            } else {
                header.style.boxShadow = "0 2px 8px rgba(0,0,0,0.05)";
            }
        });
    </script>
</body>
</html>