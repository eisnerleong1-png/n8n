<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsevro Miam MIAM | Snacks Premium Vita Malagasy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #212121;
            --bg-darker: #1a1a1a;
            --gold: #E8C25E;
            --gold-hover: #d4ae4e;
            --rust: #9E5A2A;
            --white: #ffffff;
            --off-white: #f5f5f7;
            --text-grey: #a0a0a0;
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
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-dark);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* --- UI UTILS --- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-primary {
            background-color: var(--gold);
            color: var(--bg-dark);
            border: 1px solid var(--gold);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(232, 194, 94, 0.2);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--gold);
        }

        .btn-secondary:hover {
            background-color: var(--gold);
            color: var(--bg-dark);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-gold {
            color: var(--gold);
        }

        .text-rust {
            color: var(--rust);
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: linear-gradient(to bottom, rgba(33,33,33,0.9), rgba(33,33,33,0));
        }

        header.scrolled {
            background: rgba(33, 33, 33, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }

        .nav-wrapper {
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
            gap: 40px;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            color: var(--white);
            position: relative;
            transition: var(--transition);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background-color: var(--gold);
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            display: block;
        }

        .mobile-toggle {
            display: none;
            color: var(--gold);
            font-size: 24px;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 700px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Image: Explosion of spices/food macro */
            object-position: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(33,33,33,0.95) 0%, rgba(33,33,33,0.4) 60%, rgba(33,33,33,0.1) 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding-top: 80px; /* Prevent header overlap */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 1s ease forwards 0.5s;
        }

        .hero h1 {
            font-size: 4rem;
            line-height: 1.1;
            margin-bottom: 24px;
            background: linear-gradient(to right, #fff, #E8C25E);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: #dcdcdc;
            margin-bottom: 40px;
            max-width: 600px;
            border-left: 3px solid var(--gold);
            padding-left: 20px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
        }

        /* --- TRUST BAR --- */
        .trust-bar {
            background-color: var(--bg-darker);
            padding: 40px 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .trust-text {
            text-align: center;
            font-size: 14px;
            color: var(--text-grey);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
        }

        .trust-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 24px;
            color: var(--white);
            font-style: italic;
        }

        /* --- CATALOGUE --- */
        .catalogue {
            background-color: var(--off-white);
            color: var(--bg-dark);
            position: relative;
        }
        
        /* Shape divider top */
        .catalogue::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            width: 100%;
            height: 50px;
            background-color: var(--off-white);
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
            transform: scaleX(1.5);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 3rem;
            margin-bottom: 16px;
            color: var(--bg-dark);
        }

        .section-header p {
            color: #666;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
            margin-bottom: 60px;
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--transition);
            group;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .card-img {
            height: 300px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .product-card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 32px;
        }

        .product-tag {
            font-size: 12px;
            font-weight: 700;
            color: var(--rust);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: block;
        }

        .card-content h3 {
            font-size: 24px;
            margin-bottom: 12px;
            color: var(--bg-dark);
        }

        .card-content p {
            color: #666;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .price {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 20px;
            color: var(--bg-dark);
        }

        .catalogue-cta {
            text-align: center;
        }

        /* --- VALUES --- */
        .values-section {
            background-color: var(--bg-dark);
            overflow: hidden;
        }

        .values-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 0;
        }

        .values-image {
            height: 100%;
            min-height: 600px;
            position: relative;
        }

        .values-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .values-content {
            padding: 80px;
        }

        .values-content h2 {
            font-size: 3rem;
            margin-bottom: 40px;
            color: var(--white);
        }

        .values-list {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .value-item {
            display: flex;
            gap: 24px;
        }

        .value-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(158, 90, 42, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--rust);
            flex-shrink: 0;
            font-size: 24px;
        }

        .value-text h4 {
            font-size: 20px;
            color: var(--gold);
            margin-bottom: 8px;
        }

        .value-text p {
            color: var(--text-grey);
            font-size: 15px;
        }

        /* --- CONTACT --- */
        .contact-section {
            background: linear-gradient(rgba(33,33,33,0.95), rgba(33,33,33,0.95)), url('https://images.unsplash.com/photo-1626507563148-522618835845?q=80&w=1920&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            text-align: center;
        }

        .contact-box {
            background-color: var(--bg-darker);
            border: 1px solid rgba(232, 194, 94, 0.1);
            max-width: 600px;
            margin: 0 auto;
            padding: 60px 40px;
            border-radius: 4px;
        }

        .form-group {
            margin-bottom: 24px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--gold);
        }

        .form-control {
            width: 100%;
            padding: 16px;
            background-color: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            color: var(--white);
            font-family: inherit;
            border-radius: 2px;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--gold);
            background-color: rgba(255,255,255,0.1);
        }

        .form-select {
            appearance: none;
            cursor: pointer;
        }

        .urgent-call {
            margin-top: 24px;
            font-size: 14px;
            color: var(--text-grey);
        }

        .urgent-call span {
            color: var(--white);
            font-weight: 700;
        }

        /* --- FOOTER --- */
        footer {
            background-color: #0f0f0f;
            padding: 60px 0 30px;
            border-top: 1px solid rgba(255,255,255,0.05);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            font-size: 24px;
            color: var(--gold);
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-link {
            color: var(--text-grey);
            transition: var(--transition);
        }

        .social-link:hover {
            color: var(--gold);
        }

        .copyright {
            text-align: center;
            font-size: 12px;
            color: #444;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.02);
        }

        /* --- ANIMATIONS --- */
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 968px) {
            .hero h1 { font-size: 3rem; }
            .values-wrapper { grid-template-columns: 1fr; }
            .values-image { min-height: 400px; order: -1; }
            .values-content { padding: 60px 24px; }
            
            .nav-links, .nav-cta { display: none; }
            .mobile-toggle { display: block; }
            
            /* Mobile Menu */
            .nav-wrapper.active .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--bg-dark);
                padding: 40px;
                text-align: center;
                box-shadow: 0 10px 20px rgba(0,0,0,0.5);
            }
        }

        @media (max-width: 600px) {
            .hero h1 { font-size: 2.5rem; }
            .hero-buttons { flex-direction: column; }
            .btn { width: 100%; text-align: center; }
            .section-padding { padding: 60px 0; }
            .section-header h2 { font-size: 2.2rem; }
            .trust-logo { font-size: 18px; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="header">
        <div class="container nav-wrapper">
            <div class="logo-container" id="logoContainer">
                <!-- Logo injected via JS -->
            </div>

            <nav class="nav-links">
                <a href="#catalogue">Nos Snacks</a>
                <a href="#values">Espace Revendeurs</a>
                <a href="#values">À Propos</a>
                <a href="#contact">Contact</a>
            </nav>

            <div class="nav-cta">
                <a href="#contact" class="btn btn-primary" style="padding: 10px 20px; font-size: 12px;">Commander</a>
            </div>

            <div class="mobile-toggle">☰</div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-bg">
            <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1920&auto=format&fit=crop" alt="Explosion d'épices et snacks indiens">
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 id="heroTitle">Le Croquant Authentique des Snacks Indiens, 100% Vita Malagasy.</h1>
                <p>Producteur local de Tsevro, Pôbary et Voanjo de qualité supérieure. La référence pour vos apéritifs et vos rayons à Antananarivo.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">DEVENIR REVENDEUR</a>
                    <a href="#catalogue" class="btn btn-secondary">VOIR LE CATALOGUE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST PROOF -->
    <section class="trust-bar" id="trust">
        <div class="container">
            <p class="trust-text">Le snack préféré des apéros à Tana. Distribué chez :</p>
            <div class="logos-grid">
                <div class="trust-logo">SUPERMAKI</div>
                <div class="trust-logo">JUMBO SCORE</div>
                <div class="trust-logo">SHOP LIANTO</div>
                <div class="trust-logo">DISCOUNT STORE</div>
            </div>
        </div>
    </section>

    <!-- CATALOGUE SECTION -->
    <section class="section-padding catalogue" id="catalogue">
        <div class="container">
            <div class="section-header reveal">
                <h2>Nos Spécialités Croustillantes</h2>
                <p>Des recettes ancestrales adaptées au goût Malgache.</p>
            </div>

            <div class="products-grid">
                <!-- Product 1 -->
                <div class="product-card reveal">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1599487488170-d11ec9c172f0?q=80&w=800&auto=format&fit=crop" alt="Tsevro Signature">
                    </div>
                    <div class="card-content">
                        <span class="product-tag">Best Seller</span>
                        <h3>Le Tsevro Signature</h3>
                        <p>Farine de pois chiche, épices secrètes. Le classique indémodable pour tous les moments.</p>
                        <div class="price-row">
                            <span class="price">500 Ar <small style="font-size: 12px; font-weight: 400; color: #999">/ PM</small></span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card reveal">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1606456071987-99f49352e697?q=80&w=800&auto=format&fit=crop" alt="Pôbary Royal">
                    </div>
                    <div class="card-content">
                        <span class="product-tag">Léger & Craquant</span>
                        <h3>Pôbary Royal</h3>
                        <p>Riz soufflé assaisonné avec précision. Une texture aérienne impossible d'arrêter de manger.</p>
                        <div class="price-row">
                            <span class="price">500 Ar <small style="font-size: 12px; font-weight: 400; color: #999">/ PM</small></span>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card reveal">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?q=80&w=800&auto=format&fit=crop" alt="Voanjo Masala">
                    </div>
                    <div class="card-content">
                        <span class="product-tag">Épicé</span>
                        <h3>Voanjo Masala</h3>
                        <p>Cacahuètes d'Ambatondrazaka sélectionnées, enrobées d'une pâte épicée croustillante.</p>
                        <div class="price-row">
                            <span class="price">1000 Ar <small style="font-size: 12px; font-weight: 400; color: #999">/ GM</small></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="catalogue-cta reveal">
                <a href="#" class="btn btn-primary" style="background: transparent; color: var(--bg-dark); border: 2px solid var(--bg-dark);">Télécharger Tarif Grossiste (PDF)</a>
            </div>
        </div>
    </section>

    <!-- VALUES SECTION -->
    <section class="values-section" id="values">
        <div class="values-wrapper">
            <div class="values-image reveal">
                <img src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?q=80&w=800&auto=format&fit=crop" alt="Main avec épices">
            </div>
            <div class="values-content reveal">
                <h2>Pourquoi choisir<br><span class="text-gold">Tsevro Miam MIAM ?</span></h2>
                
                <div class="values-list">
                    <div class="value-item">
                        <div class="value-icon">✦</div>
                        <div class="value-text">
                            <h4>Fraîcheur Locale</h4>
                            <p>Produit à Tana chaque semaine. Pas de stock rance importé qui a voyagé 6 mois en container.</p>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="value-icon">♥</div>
                        <div class="value-text">
                            <h4>Ingrédients Naturels</h4>
                            <p>Zéro conservateur chimique. Nous soutenons directement les agriculteurs malgaches.</p>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="value-icon">★</div>
                        <div class="value-text">
                            <h4>Rentabilité B2B</h4>
                            <p>Des marges attractives et stables pour nos partenaires distributeurs et épiceries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT / LEAD GEN -->
    <section class="section-padding contact-section" id="contact">
        <div class="container">
            <div class="section-header">
                <h2 style="color: var(--white);">Remplissez vos rayons</h2>
                <p style="color: #ccc;">Rejoignez le réseau des meilleurs distributeurs de Tana.</p>
            </div>

            <div class="contact-box reveal">
                <form>
                    <div class="form-group">
                        <label>Nom de la société / Épicerie</label>
                        <input type="text" class="form-control" placeholder="Ex: Épicerie Chez Dada">
                    </div>

                    <div class="form-group">
                        <label>Téléphone (Obligatoire)</label>
                        <input type="tel" class="form-control" placeholder="034 XX XXX XX">
                    </div>

                    <div class="form-group">
                        <label>Type de commande</label>
                        <select class="form-control form-select">
                            <option>Commande d'essai</option>
                            <option>Stock récurrent</option>
                            <option>Demande d'information</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">ÊTRE RAPPELÉ PAR UN COMMERCIAL</button>
                </form>

                <p class="urgent-call">Besoin urgent ? Appelez-nous au <span>034 00 000 00</span></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">Tsevro Miam MIAM</div>
                
                <div class="social-links">
                    <a href="#" class="social-link">Facebook</a>
                    <a href="#" class="social-link">Instagram</a>
                    <a href="#" class="social-link">Mentions Légales</a>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Tsevro Miam MIAM. Tous droits réservés. Fièrement Vita Malagasy.
            </div>
        </div>
    </footer>

    <script>
        // LOGO INJECTION REQUIREMENT
        const LOGO_URL = "logo.jpg";
        
        // Inject Logo
        const logoContainer = document.getElementById('logoContainer');
        logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Tsevro Miam MIAM Logo"></a>`;

        // Mobile Menu Logic
        const toggle = document.querySelector('.mobile-toggle');
        const navWrapper = document.querySelector('.nav-wrapper');
        
        toggle.addEventListener('click', () => {
            navWrapper.classList.toggle('active');
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

        // Scroll Animation (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal');
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        revealElements.forEach(el => revealObserver.observe(el));
    </script>
</body>
</html>