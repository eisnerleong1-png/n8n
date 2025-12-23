<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Food Madagascar | Leader du Snacking</title>
    
    <!-- Google Fonts: Montserrat (Industrial/Modern) & Inter (Readability) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #921216; /* Rouge Profond */
            --primary-dark: #680b0e;
            --secondary: #000000; /* Noir Premium */
            --text-light: #F5F5F5;
            --text-dark: #1a1a1a;
            --gray-bg: #f4f4f4;
            --glass: rgba(255, 255, 255, 0.05);
            --border-glass: rgba(255, 255, 255, 0.1);
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
            font-family: 'Inter', sans-serif;
            background-color: var(--secondary);
            color: var(--text-dark);
            overflow-x: hidden;
            line-height: 1.6;
        }

        h1, h2, h3, h4, .btn {
            font-family: 'Montserrat', sans-serif;
        }

        /* --- Utilities --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .text-center { text-align: center; }
        .text-primary { color: var(--primary); }

        /* --- Buttons --- */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px;
            border-radius: 8px;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 10px 20px rgba(146, 18, 22, 0.3);
        }

        .btn-primary:hover {
            background-color: white;
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(146, 18, 22, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid var(--text-dark);
            color: var(--text-dark);
        }

        .btn-secondary:hover {
            background-color: var(--text-dark);
            color: white;
        }

        /* --- Header --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: 0.4s ease;
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(0, 0, 0, 0.95);
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo-container img {
            height: 50px;
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* Mobile Menu */
        .hamburger {
            display: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- Hero Section --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #000;
        }

        /* Split Screen Visual using Pseudo Elements & Grid */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            opacity: 0.6;
        }

        .hero-bg-left {
            background: url('https://images.unsplash.com/photo-1578849278619-e73505e9610f?q=80&w=1935&auto=format&fit=crop') center/cover no-repeat;
        }

        .hero-bg-right {
            background: url('https://images.unsplash.com/photo-1599639668454-5f720c2957b9?q=80&w=1974&auto=format&fit=crop') center/cover no-repeat; /* Biscuit/Breadsticks vibe */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 50%, rgba(146, 18, 22, 0.2) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 700px;
            padding-top: 80px; /* Header offset */
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0.9;
            border-left: 4px solid var(--primary);
            padding-left: 20px;
        }

        /* --- Trust Bar --- */
        .trust-bar {
            background-color: #111;
            padding: 30px 0;
            border-bottom: 1px solid #333;
        }

        .trust-title {
            color: #666;
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .logos-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap;
            opacity: 0.5;
        }

        .trust-logo {
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* --- Products Section --- */
        .products {
            padding: 100px 0;
            background-color: var(--gray-bg);
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-image {
            height: 350px;
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .tag {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--primary);
            color: white;
            padding: 5px 15px;
            font-size: 0.8rem;
            font-weight: 700;
            border-radius: 50px;
            text-transform: uppercase;
        }

        .product-content {
            padding: 30px;
        }

        .product-content h3 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .product-content p {
            color: #666;
            margin-bottom: 20px;
        }

        .price-box {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 3px solid var(--primary);
        }

        .price-box strong {
            display: block;
            font-size: 0.9rem;
            color: var(--text-dark);
        }

        /* --- Features Section --- */
        .features {
            padding: 100px 0;
            background-color: white;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            padding: 40px;
            background: white;
            border: 1px solid #eee;
            border-radius: 12px;
            transition: 0.3s;
            text-align: center;
        }

        .feature-card:hover {
            border-color: var(--primary);
            box-shadow: 0 10px 30px rgba(146, 18, 22, 0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        /* --- About/Factory --- */
        .about {
            position: relative;
            color: white;
            padding: 120px 0;
            background: fixed url('https://images.unsplash.com/photo-1598514983196-039c4d29312c?q=80&w=2070&auto=format&fit=crop') center/cover;
        }

        .about-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.8);
        }

        .about-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-content h2 {
            font-size: 3rem;
            margin-bottom: 30px;
            color: white;
        }

        .about-content p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #ddd;
        }

        /* --- Footer / Contact --- */
        .conversion-footer {
            background-color: var(--secondary);
            color: white;
            padding: 80px 0 40px 0;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .form-box {
            background: rgba(255,255,255,0.05);
            padding: 40px;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #aaa;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 6px;
            color: white;
            font-family: 'Inter', sans-serif;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .footer-bottom {
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            font-size: 0.8rem;
            color: #666;
        }

        /* --- Mobile Sticky Button --- */
        .sticky-mobile-cta {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            padding: 15px 20px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 999;
            display: none;
            justify-content: center;
        }

        .sticky-mobile-cta .btn {
            width: 100%;
            text-align: center;
        }

        /* --- Media Queries --- */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero-bg { grid-template-columns: 1fr; } 
            .hero-bg-right { display: none; } /* Focus on popcorn on mobile */
            .nav-links { display: none; }
            .hamburger { display: block; }
            .footer-grid { grid-template-columns: 1fr; }
            .sticky-mobile-cta { display: flex; }
            .conversion-footer { padding-bottom: 100px; } /* Space for sticky button */
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container">
            <nav>
                <div id="logo-container">
                    <!-- JS will inject logo here -->
                </div>
                <div class="nav-links">
                    <a href="#home">Accueil</a>
                    <a href="#products">Nos Marques</a>
                    <a href="#about">L'Usine</a>
                    <a href="#contact" class="text-primary" style="font-weight: 700;">Devenir Distributeur</a>
                </div>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="hero-bg">
            <div class="hero-bg-left"></div>
            <div class="hero-bg-right"></div>
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1>Le Leader du Snacking à <span>Madagascar</span> : Qualité & Croustillant.</h1>
                <p>Fabricant officiel des marques PAPAOURS et KING SNACK. Nous fournissons les professionnels B2B avec des standards internationaux.</p>
                <a href="#contact" class="btn btn-primary">Devenir Distributeur Agréé</a>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-title">Ils nous font confiance dans tout Madagascar</div>
            <div class="logos-wrapper">
                <!-- Simulation of Logos via FontAwesome/Text for generic purpose -->
                <div class="trust-logo"><i class="fas fa-shopping-cart"></i> SUPERMAKI</div>
                <div class="trust-logo"><i class="fas fa-store"></i> JUMBO SCORE</div>
                <div class="trust-logo"><i class="fas fa-basket-shopping"></i> SHOPRITE</div>
                <div class="trust-logo"><i class="fas fa-star"></i> +200 Points de vente</div>
            </div>
        </div>
    </section>

    <!-- PRODUCTS SECTION -->
    <section id="products" class="products">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Des Marques Aimées par les Malagasy</h2>
                <p>Des produits à forte rotation pour vos rayons.</p>
            </div>
            
            <div class="products-grid">
                <!-- Carte A : Papaours -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="tag">Meilleure Vente</div>
                    <div class="product-image">
                        <!-- Popcorn visual -->
                        <img src="https://images.unsplash.com/photo-1578849278619-e73505e9610f?q=80&w=1000&auto=format&fit=crop" alt="PAPAOURS Popcorn">
                    </div>
                    <div class="product-content">
                        <h3>PAPAOURS</h3>
                        <p>L'incontournable des cinémas et goûters. Un popcorn caramélisé qui fait l'unanimité.</p>
                        <div class="price-box">
                            <strong>P.P.V Conseillé : 1 000 Ar - 2 000 Ar</strong>
                            <small>(Selon format)</small>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width: 100%; text-align: center;">Commander en Gros</a>
                    </div>
                </div>

                <!-- Carte B : King Snack -->
                <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-image">
                        <!-- Biscuit sticks visual -->
                        <img src="https://images.unsplash.com/photo-1558223652-32a138031333?q=80&w=1000&auto=format&fit=crop" alt="KING SNACK Biscuit">
                    </div>
                    <div class="product-content">
                        <h3>KING SNACK</h3>
                        <p>Le bâtonnet biscuit pour une pause gourmande. Idéal pour les petits budgets.</p>
                        <div class="price-box">
                            <strong>P.P.V Conseillé : 500 Ar</strong>
                            <small>(Format pocket)</small>
                        </div>
                        <a href="#contact" class="btn btn-secondary" style="width: 100%; text-align: center;">Commander en Gros</a>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 50px;">
                <a href="#" style="color: var(--primary); text-decoration: underline; font-weight: 600;">Voir le catalogue complet & conditionnements</a>
            </div>
        </div>
    </section>

    <!-- FEATURES SECTION -->
    <section class="features">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Pourquoi Top Food ?</h2>
                <p>Le partenaire industriel fiable pour votre business.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-industry"></i></div>
                    <h3>Production Locale Réactive</h3>
                    <p>Usine basée à Antananarivo. Zéro rupture de stock liée à l'importation. Vos rayons restent pleins.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-shield-virus"></i></div>
                    <h3>Normes d'Hygiène</h3>
                    <p>Processus de fabrication rigoureusement contrôlé garantissant la sécurité alimentaire de vos clients.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Rentabilité Assurée</h3>
                    <p>Des tarifs usine étudiés pour maximiser la marge des distributeurs et grossistes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT / FACTORY -->
    <section id="about" class="about">
        <div class="about-overlay"></div>
        <div class="container">
            <div class="about-content" data-aos="zoom-in">
                <h2>Au cœur de notre usine</h2>
                <p>"Fondée à Antananarivo, Top Food Madagascar allie savoir-faire artisanal et cadence industrielle pour répondre à la demande croissante du marché national."</p>
                <a href="#contact" class="btn btn-primary">Visiter virtuellement</a>
            </div>
        </div>
    </section>

    <!-- FOOTER / LEAD MAGNET -->
    <footer id="contact" class="conversion-footer">
        <div class="container">
            <div class="footer-grid">
                <div data-aos="fade-right">
                    <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Prêt à booster votre rayon snack ?</h2>
                    <p style="font-size: 1.1rem; color: #ccc; margin-bottom: 30px;">
                        Rejoignez notre réseau de partenaires à succès. Remplissez ce formulaire pour obtenir nos tarifs revendeurs exclusifs.
                    </p>
                    <ul style="list-style: none; color: #ccc;">
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i> Livraison sur Tana et Provinces</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i> Support commercial dédié</li>
                        <li><i class="fas fa-check" style="color: var(--primary); margin-right: 10px;"></i> PLV et supports marketing offerts</li>
                    </ul>
                </div>

                <div class="form-box" data-aos="fade-left">
                    <form>
                        <div class="form-group">
                            <label>Nom de la Société / Enseigne</label>
                            <input type="text" class="form-control" placeholder="Ex: Superette Alpha">
                        </div>
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" class="form-control" placeholder="Ex: Antananarivo">
                        </div>
                        <div class="form-group">
                            <label>Téléphone (Mobile)</label>
                            <input type="tel" class="form-control" placeholder="034 XX XXX XX">
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="pricing" checked>
                            <label for="pricing" style="margin:0; color: white;">Je souhaite recevoir la grille tarifaire</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Être rappelé par un commercial</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Top Food Madagascar. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- MOBILE STICKY BUTTON -->
    <div class="sticky-mobile-cta">
        <a href="#contact" class="btn btn-primary"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Appeler le service commercial</a>
    </div>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // 1. Logo Injection (STRICT REQUIREMENT)
        const LOGO_URL = "logo.jpg";
        const logoContainer = document.getElementById('logo-container');
        logoContainer.innerHTML = `<a href="#"><img src="${LOGO_URL}" alt="Top Food Logo"></a>`;

        // 2. Initialize AOS Animation
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // 3. Header Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // 4. Mobile Menu Toggle
        // Simple toggle for demo purposes
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        
        hamburger.addEventListener('click', () => {
            if(navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '70px';
                navLinks.style.right = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = 'rgba(0,0,0,0.95)';
                navLinks.style.padding = '20px';
            }
        });
    </script>
</body>
</html>