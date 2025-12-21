<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ener Technologie | Ingénierie Solaire Industrielle Madagascar</title>
    <meta name="description" content="Solutions solaires industrielles et ingénierie électrique à Antananarivo. Réduisez vos coûts énergétiques et sécurisez votre production.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-dark: #205561; /* Vert Sombre - Sérieux */
            --primary-light: #2c7282;
            --accent-blue: #24759A; /* Bleu Tech - Innovation */
            --accent-hover: #1b5c7a;
            --white: #FFFFFF;
            --off-white: #F8F9FA;
            --text-dark: #1A202C;
            --text-gray: #4A5568;
            --border-light: #E2E8F0;
            --shadow-sm: 0 4px 6px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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
            font-family: 'Inter', sans-serif;
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-dark);
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
            display: block;
        }

        /* UTILITIES */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            background-color: var(--accent-blue);
            color: var(--white);
            font-weight: 600;
            border-radius: 4px; /* Slightly technical sharp corners */
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .btn:hover {
            background-color: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(36, 117, 154, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--accent-blue);
            color: var(--accent-blue);
        }

        .btn-outline:hover {
            background-color: var(--accent-blue);
            color: var(--white);
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }

        /* HEADER & NAV */
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
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px; /* Ajustement logo */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            color: var(--white);
            font-weight: 500;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-blue);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        header.scrolled .nav-links a {
            color: var(--primary-dark);
        }

        .burger {
            display: none;
            cursor: pointer;
        }

        .burger div {
            width: 25px;
            height: 3px;
            background-color: var(--white);
            margin: 5px;
            transition: var(--transition);
        }

        header.scrolled .burger div {
            background-color: var(--primary-dark);
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: linear-gradient(rgba(32, 85, 97, 0.8), rgba(32, 85, 97, 0.6)), url('https://images.unsplash.com/photo-1611365892117-00ac5ef43c90?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: var(--white);
        }

        .hero-content {
            max-width: 800px;
            padding-top: 80px; /* Prevent header overlap */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards 0.5s;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            color: var(--white);
            margin-bottom: 24px;
            letter-spacing: -1px;
        }

        .hero p {
            font-size: clamp(1.1rem, 2vw, 1.35rem);
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
            max-width: 600px;
        }

        /* CLIENTS BAR */
        .clients-bar {
            background-color: var(--off-white);
            padding: 40px 0;
            border-bottom: 1px solid var(--border-light);
        }

        .clients-title {
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-gray);
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
        }

        .clients-logos {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }
        
        /* Using text placeholders styled as logos for demo, usually images */
        .client-logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.5rem;
            color: var(--text-gray);
            filter: grayscale(100%);
            transition: var(--transition);
        }
        .client-logo:hover {
            filter: grayscale(0%);
            color: var(--primary-dark);
        }

        /* PROBLEM / SOLUTION */
        .split-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .problem-col {
            padding-right: 20px;
        }

        .solution-col {
            background-color: var(--primary-dark);
            color: var(--white);
            padding: 60px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .solution-col::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1581093458791-9f302247b532?auto=format&fit=crop&q=80&w=1000') center/cover;
            opacity: 0.1;
        }
        
        .solution-content {
            position: relative;
            z-index: 2;
        }

        .solution-col h3 {
            color: var(--white);
            margin-bottom: 20px;
        }

        .list-check li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
        }

        .list-check li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-blue);
            font-weight: bold;
        }
        
        .list-cross li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            color: var(--text-gray);
        }
        
         .list-cross li::before {
            content: '✕';
            position: absolute;
            left: 0;
            color: #e53e3e;
            font-weight: bold;
        }

        /* SERVICES GRID */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .service-card {
            background: var(--white);
            padding: 40px;
            border: 1px solid var(--border-light);
            border-radius: 4px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: var(--accent-blue);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(36, 117, 154, 0.1);
            color: var(--accent-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            margin-bottom: 25px;
            font-size: 1.5rem;
        }

        .service-card h3 {
            margin-bottom: 15px;
            font-size: 1.25rem;
        }

        .service-card p {
            color: var(--text-gray);
            font-size: 0.95rem;
        }

        /* PORTFOLIO */
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 40px;
        }
        
        @media (max-width: 768px) {
             .portfolio-grid {
                grid-template-columns: 1fr;
             }
        }

        .project-card {
            position: relative;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            group: cursor-pointer;
        }

        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-img {
            transform: scale(1.05);
        }

        .project-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to top, rgba(32, 85, 97, 0.95), transparent);
            padding: 40px 30px 30px;
            color: var(--white);
        }

        .project-stats {
            display: flex;
            gap: 20px;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #dbeafe;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* ABOUT SECTION */
        .about-wrapper {
            background-color: var(--off-white);
        }
        .about-img {
            border-radius: 8px;
            box-shadow: var(--shadow-lg);
        }

        /* FAQ */
        .faq-item {
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 20px;
        }

        .faq-question {
            padding: 20px 0;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1.1rem;
        }
        
        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--accent-blue);
            transition: var(--transition);
        }
        
        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            color: var(--text-gray);
        }
        
        .faq-item.active .faq-answer {
            max-height: 200px;
            padding-bottom: 20px;
        }

        /* FOOTER */
        footer {
            background-color: var(--primary-dark);
            color: var(--white);
            padding: 80px 0 30px;
            text-align: center;
        }

        .footer-cta h2 {
            color: var(--white);
            margin-bottom: 30px;
            font-size: 2.5rem;
        }
        
        .footer-info {
            margin-top: 60px;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* ANIMATIONS */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* RESPONSIVE */
        @media (max-width: 968px) {
            .split-section {
                grid-template-columns: 1fr;
            }
            .hero h1 {
                font-size: 2.5rem;
            }
            .nav-links {
                position: absolute;
                right: 0px;
                height: 100vh;
                top: 0px;
                background-color: var(--primary-dark);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 70%;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
            }
            .nav-links.nav-active {
                transform: translateX(0%);
            }
            .burger {
                display: block;
                z-index: 2000;
            }
        }
    </style>
</head>
<body>

    <!-- NAVIGATION -->
    <header id="header">
        <div class="container">
            <nav>
                <div class="logo-container" id="logo-wrapper">
                    <!-- Logo injecté via JS -->
                </div>
                <ul class="nav-links">
                    <li><a href="#services">Expertises</a></li>
                    <li><a href="#portfolio">Réalisations</a></li>
                    <li><a href="#about">L'Entreprise</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact" class="btn" style="padding: 10px 20px; font-size: 0.8rem; margin-left: 20px;">Contact</a></li>
                </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Sécurisez votre Production Industrielle</h1>
                <p>Solutions d'ingénierie électrique et photovoltaïque sur mesure à Madagascar. Réduisez vos charges jusqu'à 60%.</p>
                <a href="#contact" class="btn">Étude de Faisabilité Gratuite</a>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="clients-bar">
        <div class="container">
            <p class="clients-title">Ils fiabilisent leur énergie avec Ener Technologie</p>
            <div class="clients-logos">
                <span class="client-logo">STAR</span>
                <span class="client-logo">SOCOLAIT</span>
                <span class="client-logo">BOA</span>
                <span class="client-logo">LECOFRUIT</span>
                <span class="client-logo">TELMA</span>
            </div>
        </div>
    </section>

    <!-- PROBLEM / SOLUTION -->
    <section class="section-padding" id="problem-solution">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px;">
                <h2>Ne laissez plus l'énergie freiner votre croissance</h2>
            </div>
            <div class="split-section">
                <div class="problem-col reveal">
                    <h3 style="margin-bottom: 20px; color: #e53e3e;">La Réalité Actuelle</h3>
                    <ul class="list-cross">
                        <li>Coûts JIRAMA imprévisibles et en hausse</li>
                        <li>Coupures fréquentes arrêtant la production</li>
                        <li>Équipements endommagés par les surtensions</li>
                        <li>Perte de compétitivité marché</li>
                    </ul>
                </div>
                <div class="solution-col reveal">
                    <div class="solution-content">
                        <h3>La Solution Ener Technologie</h3>
                        <ul class="list-check">
                            <li>Stabilité de tension garantie</li>
                            <li>Autonomie partielle ou totale (Hybridation)</li>
                            <li>Équipements protégés par ingénierie rigoureuse</li>
                            <li>ROI précis et maîtrisé</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section-padding" id="services" style="background-color: var(--off-white);">
        <div class="container">
            <div class="text-center reveal">
                <h2>Nos Expertises Techniques</h2>
                <p style="color: var(--text-gray); margin-top: 10px;">Une approche d'ingénieur pour des résultats industriels.</p>
            </div>
            <div class="services-grid">
                <!-- Carte 1 -->
                <div class="service-card reveal">
                    <div class="icon-box">⚡</div>
                    <h3>Centrales Solaires B2B</h3>
                    <p>Dimensionnement précis pour usines et bureaux. Installation sur toiture ou ombrières de parking pour maximiser la production.</p>
                </div>
                <!-- Carte 2 -->
                <div class="service-card reveal">
                    <div class="icon-box">⚙️</div>
                    <h3>Ingénierie Électrique</h3>
                    <p>Audit complet, mise aux normes NFC 15-100, distribution HT/BT et sécurisation de vos baies serveurs.</p>
                </div>
                <!-- Carte 3 -->
                <div class="service-card reveal">
                    <div class="icon-box">📊</div>
                    <h3>Maintenance & Monitoring</h3>
                    <p>Suivi en temps réel de votre production verte via application dédiée. Intervention sous 24h à Tana.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO -->
    <section class="section-padding" id="portfolio">
        <div class="container">
            <div class="text-center reveal" style="margin-bottom: 60px;">
                <h2>Projets Livrés à Antananarivo</h2>
                <p style="color: var(--text-gray);">Des résultats chiffrés et vérifiables.</p>
            </div>
            
            <div class="portfolio-grid">
                <!-- Projet A -->
                <div class="project-card reveal">
                    <img src="https://images.unsplash.com/photo-1565514020176-6c2235b29b7a?q=80&w=2070&auto=format&fit=crop" alt="Usine Agroalimentaire" class="project-img">
                    <div class="project-overlay">
                        <h3>Usine Agroalimentaire</h3>
                        <p>Zone Industrielle Forello</p>
                        <div class="project-stats">
                            <span class="stat-item">☀️ 200kWc Installés</span>
                            <span class="stat-item">💰 -80M MGA/an</span>
                        </div>
                    </div>
                </div>

                <!-- Projet B -->
                <div class="project-card reveal">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Siège Social Bancaire" class="project-img">
                    <div class="project-overlay">
                        <h3>Siège Social Bancaire</h3>
                        <p>Antananarivo Centre</p>
                        <div class="project-stats">
                            <span class="stat-item">🔋 Backup Batteries</span>
                            <span class="stat-item">🛡️ 0 Coupure (12 mois)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 50px;">
                <a href="#" class="btn btn-outline">Voir toutes nos références techniques</a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section-padding about-wrapper" id="about">
        <div class="container">
            <div class="split-section">
                <div class="reveal">
                    <h2>L'Alliance de l'Ingénierie et de l'Écologie</h2>
                    <p style="margin: 20px 0; color: var(--text-gray);">
                        Chez Ener Technologie, nous ne sommes pas de simples installateurs. Nous sommes une équipe d'ingénieurs certifiés dédiée à la performance énergétique durable.
                    </p>
                    <p style="margin-bottom: 30px; color: var(--text-gray);">
                        Face aux défis énergétiques de Madagascar, nous apportons une rigueur scientifique : focus sur les certifications techniques, la qualité du matériel (Victron, SMA, Jinko) et la sécurité des installations.
                    </p>
                    <a href="#contact" class="btn btn-outline">Découvrir l'équipe</a>
                </div>
                <div class="reveal">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2070&auto=format&fit=crop" alt="Ingénieurs au travail" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section-padding" id="faq">
        <div class="container" style="max-width: 800px;">
            <div class="text-center reveal" style="margin-bottom: 50px;">
                <h2>Questions Fréquentes</h2>
            </div>
            
            <div class="faq-item reveal">
                <div class="faq-question">Quel est le ROI moyen à Madagascar ?</div>
                <div class="faq-answer">
                    <p>Pour une industrie fonctionnant 6j/7, le retour sur investissement se situe généralement entre 3 et 5 ans, selon votre profil de consommation et la part de substitution au diesel.</p>
                </div>
            </div>
            
            <div class="faq-item reveal">
                <div class="faq-question">Le matériel est-il garanti ?</div>
                <div class="faq-answer">
                    <p>Absolument. Nos panneaux solaires bénéficient de garanties de performance linéaire jusqu'à 25 ans. Les onduleurs sont garantis entre 5 et 10 ans selon les constructeurs. Nous assurons la maintenance locale.</p>
                </div>
            </div>
            
            <div class="faq-item reveal">
                <div class="faq-question">Intervenez-vous en province ?</div>
                <div class="faq-answer">
                    <p>Oui, bien que basés à Tana, nous déployons des équipes sur Majunga, Tamatave et Tuléar pour les projets industriels supérieurs à 50kWc.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact">
        <div class="container">
            <div class="footer-cta reveal">
                <h2>Prêt à passer à l'énergie verte fiable ?</h2>
                <p style="margin-bottom: 30px; opacity: 0.8; font-size: 1.1rem;">Nos ingénieurs sont prêts à étudier vos relevés de consommation.</p>
                <a href="tel:+261340000000" class="btn">Contacter un ingénieur</a>
            </div>
            
            <div class="footer-info">
                <p>Ener Technologie Madagascar</p>
                <p>Zone Galaxy, Andraharo, Antananarivo</p>
                <div style="margin-top: 20px;">
                    <a href="#" style="margin: 0 10px;">LinkedIn</a>
                    <a href="#" style="margin: 0 10px;">Facebook</a>
                </div>
                <p style="margin-top: 20px; font-size: 0.8rem;">&copy; 2024 Ener Technologie. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // --- 1. LOGO INTEGRATION (MANDATORY) ---
        const LOGO_URL = "logo.jpg";
        
        // Inject logo
        const logoWrapper = document.getElementById('logo-wrapper');
        const logoImg = document.createElement('img');
        logoImg.src = LOGO_URL;
        logoImg.alt = "Ener Technologie Logo";
        logoWrapper.appendChild(logoImg);

        // --- 2. SCROLL EFFECT NAVBAR ---
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. MOBILE MENU ---
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');

        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            
            // Burger Animation
            burger.classList.toggle('toggle');
        });

        // --- 4. ACCORDION FAQ ---
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });

        // --- 5. SCROLL REVEAL ANIMATION ---
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Trigger once on load
        reveal();
    </script>
</body>
</html>