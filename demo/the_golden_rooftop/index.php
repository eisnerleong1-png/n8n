<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Rooftop | Antananarivo</title>
    <meta name="description" content="Dominez la Ville : Cuisine du Monde & Vue Imprenable sur Tana. Le meilleur Restaurant Rooftop d'Antananarivo.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- VARIABLES & RESET --- */
        :root {
            --color-bg: #0B0B0B;
            --color-text: #F5F5F5;
            --color-text-muted: #B0B0B0;
            --color-accent: #D9B359;
            --color-accent-hover: #bfa14f;
            --font-display: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
            --spacing-container: 120px 20px;
            --spacing-container-mobile: 80px 20px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            background-color: var(--color-bg);
            color: var(--color-text);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* --- SKELETON LOADER --- */
        #loader {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: var(--color-bg);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transition: opacity 0.5s ease;
        }
        
        .loader-logo {
            font-family: var(--font-display);
            font-size: 2rem;
            color: var(--color-accent);
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
        }

        .skeleton-pulse {
            width: 50px;
            height: 2px;
            background: rgba(217, 179, 89, 0.3);
            position: relative;
            overflow: hidden;
        }

        .skeleton-pulse::after {
            content: '';
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
            transform: translateX(-100%);
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }
        
        @keyframes fadeIn {
            to { opacity: 1; }
        }

        /* --- TYPOGRAPHY --- */
        h1, h2, h3 { font-family: var(--font-display); font-weight: 700; color: var(--color-text); }
        h1 { font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1; margin-bottom: 1.5rem; }
        h2 { font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1rem; color: var(--color-accent); }
        h3 { font-size: 1.5rem; margin-bottom: 0.5rem; }
        p { font-size: 1rem; color: var(--color-text-muted); margin-bottom: 1.5rem; font-weight: 300; }
        
        .text-gold { color: var(--color-accent); }

        /* --- UTILS --- */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-family: var(--font-body);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: var(--transition);
            border: 1px solid transparent;
            font-size: 0.9rem;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: var(--color-accent);
            color: var(--color-bg);
            border-color: var(--color-accent);
        }
        
        .btn-primary:hover {
            background-color: transparent;
            color: var(--color-accent);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--color-accent);
            border-color: var(--color-accent);
        }
        
        .btn-outline:hover {
            background-color: var(--color-accent);
            color: var(--color-bg);
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

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0; left: 0; width: 100%;
            z-index: 100;
            padding: 20px 0;
            transition: var(--transition);
            background: linear-gradient(to bottom, rgba(11,11,11,0.8) 0%, rgba(11,11,11,0) 100%);
        }
        
        header.scrolled {
            background-color: rgba(11, 11, 11, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 50px;
            width: auto;
            display: block;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 40px;
        }

        nav a {
            color: var(--color-text);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px; left: 0; width: 0; height: 1px;
            background-color: var(--color-accent);
            transition: width 0.3s ease;
        }

        nav a:hover::after { width: 100%; }

        /* --- HERO SECTION --- */
        #hero {
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-image: url('https://images.unsplash.com/photo-1519671482502-9759101d4561?ixlib=rb-4.0.3&auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(11,11,11,0.4) 0%, rgba(11,11,11,0.6) 50%, rgba(11,11,11,1) 100%);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 800px;
            padding-top: 80px; /* Avoid header overlap */
        }
        
        .hero-subtitle {
            font-family: var(--font-body);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 0.9rem;
            margin-bottom: 20px;
            color: rgba(245, 245, 245, 0.8);
            border-left: 3px solid var(--color-accent);
            padding-left: 15px;
        }

        /* --- SOCIAL PROOF --- */
        #social-proof {
            background-color: var(--color-text);
            color: var(--color-bg);
            padding: 15px 0;
            z-index: 4;
            position: relative;
            border-bottom: 1px solid #ddd;
        }
        
        .proof-content {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            font-weight: 500;
            font-size: 0.9rem;
            text-align: center;
        }
        
        .proof-item i { color: var(--color-accent); margin-right: 8px; }

        /* --- EXPERIENCE --- */
        #experience { padding: var(--spacing-container); }
        
        .zigzag-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .image-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }
        
        .image-wrapper::before {
            content: '';
            position: absolute;
            top: 20px; left: -20px;
            width: 100%; height: 100%;
            border: 1px solid var(--color-accent);
            z-index: -1;
            transition: var(--transition);
        }
        
        .image-wrapper:hover::before {
            top: 10px; left: -10px;
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.8s ease;
        }
        
        .image-wrapper:hover img { transform: scale(1.05); }

        /* --- MENU --- */
        #menu {
            padding: var(--spacing-container);
            background-color: #0F0F0F;
            position: relative;
        }

        #menu::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 1px;
            background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
            opacity: 0.2;
        }

        .menu-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-bottom: 60px;
        }

        .menu-card {
            background: rgba(255, 255, 255, 0.03);
            padding: 40px 30px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: var(--transition);
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            border-color: var(--color-accent);
            background: rgba(217, 179, 89, 0.05);
        }

        .menu-icon {
            font-size: 2rem;
            color: var(--color-accent);
            margin-bottom: 20px;
        }

        .price-tag {
            display: inline-block;
            font-family: var(--font-body);
            font-size: 0.85rem;
            color: var(--color-accent);
            letter-spacing: 1px;
            margin-top: 10px;
        }

        .menu-items { list-style: none; margin-top: 20px; }
        .menu-items li {
            margin-bottom: 10px;
            font-size: 0.95rem;
            color: #d0d0d0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            padding-bottom: 10px;
        }
        .menu-items li:last-child { border: none; }

        .menu-cta-container { text-align: center; }

        /* --- LOCATION --- */
        #location {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }

        .map-container {
            width: 100%;
            height: 100%;
            min-height: 400px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(100%) invert(92%) contrast(83%);
        }

        .info-container {
            padding: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #111;
        }
        
        .info-item {
            margin-bottom: 40px;
            display: flex;
            align-items: flex-start;
        }
        
        .info-icon {
            color: var(--color-accent);
            font-size: 1.5rem;
            margin-right: 20px;
            margin-top: 5px;
        }

        /* --- FOOTER --- */
        footer {
            padding: 60px 20px 100px 20px; /* Extra padding bottom for mobile sticky bar */
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.05);
            font-size: 0.9rem;
            color: #666;
        }

        /* --- STICKY MOBILE BAR --- */
        #mobile-sticky-bar {
            position: fixed;
            bottom: 0; left: 0; width: 100%;
            background-color: rgba(11, 11, 11, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 20px;
            display: none; /* Flex on mobile */
            gap: 15px;
            z-index: 999;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -5px 20px rgba(0,0,0,0.5);
        }
        
        #mobile-sticky-bar .btn {
            flex: 1;
            padding: 12px;
            text-align: center;
            font-size: 0.8rem;
        }

        /* --- MOBILE NAV --- */
        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--color-text);
            cursor: pointer;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            h1 { font-size: 3rem; }
            .menu-grid { grid-template-columns: repeat(2, 1fr); }
            .zigzag-grid { gap: 40px; }
            .info-container { padding: 40px; }
        }

        @media (max-width: 768px) {
            :root { --spacing-container: var(--spacing-container-mobile); }
            
            nav ul { display: none; } /* Hide desktop menu */
            .mobile-toggle { display: block; }
            
            #hero { height: 90vh; }
            .hero-content { padding-top: 60px; text-align: center; }
            .hero-subtitle { border-left: none; padding-left: 0; margin-bottom: 15px; display: block; }
            
            .zigzag-grid { grid-template-columns: 1fr; }
            .image-wrapper { order: -1; margin-bottom: 30px; }
            .zigzag-grid > div:nth-child(even) { order: -1; } /* Reset zig zag for mobile stack */
            
            .menu-grid { grid-template-columns: 1fr; }
            
            #location { grid-template-columns: 1fr; }
            .map-container { height: 300px; }
            
            #mobile-sticky-bar { display: flex; }
            
            .proof-content { gap: 20px; flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- SKELETON LOADER -->
    <div id="loader">
        <div class="loader-logo">GOLDEN ROOFTOP</div>
        <div class="skeleton-pulse"></div>
    </div>

    <!-- HEADER -->
    <header id="main-header">
        <div class="container nav-container">
            <div class="logo-container" id="logo-placeholder">
                <!-- Logo inserted via JS -->
            </div>
            <nav>
                <ul>
                    <li><a href="#experience">L'Expérience</a></li>
                    <li><a href="#menu">Le Menu</a></li>
                    <li><a href="#location">Contact</a></li>
                    <li><a href="#location" class="btn btn-outline" style="padding: 10px 20px; font-size: 0.8rem;">Réserver</a></li>
                </ul>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="hero-subtitle reveal">L'expérience Golden Rooftop</div>
            <h1 class="reveal" style="transition-delay: 0.2s;">Dominez la Ville :<br> Cuisine du Monde &<br> Vue Imprenable sur Tana.</h1>
            <p class="reveal" style="transition-delay: 0.3s; max-width: 600px; margin-bottom: 40px; color: #eee;">
                Cocktails signatures et gastronomie dans une ambiance lounge exclusive.
            </p>
            <div class="reveal" style="transition-delay: 0.4s;">
                <a href="#location" class="btn btn-primary">Réserver ma table</a>
            </div>
        </div>
    </section>

    <!-- SOCIAL PROOF -->
    <section id="social-proof">
        <div class="container proof-content">
            <div class="proof-item"><i class="fas fa-star"></i> Noté 4.8/5 par nos visiteurs</div>
            <div class="proof-item"><i class="fas fa-trophy"></i> Élu meilleur spot Sunset d'Antananarivo</div>
            <div class="proof-item"><i class="fas fa-glass-cheers"></i> Ambiance Lounge Certifiée</div>
        </div>
    </section>

    <!-- EXPERIENCE SECTION -->
    <section id="experience">
        <div class="container">
            <div class="zigzag-grid">
                <div class="image-wrapper reveal">
                    <img src="https://images.unsplash.com/photo-1572116469696-9a25f050aa89?ixlib=rb-4.0.3&auto=format&fit=crop&q=80" alt="Ambiance Rooftop Antananarivo">
                </div>
                <div class="text-content reveal">
                    <h2>Plus qu'un dîner, <br>une atmosphère.</h2>
                    <p>Échappez au tumulte de la ville. Le Golden Rooftop vous offre une parenthèse hors du temps, suspendue au-dessus des lumières d'Antananarivo.</p>
                    <p>Profitez d'un cadre chic et décontracté, où le design moderne rencontre la chaleur de l'hospitalité malgache. Idéal pour vos afterworks énergisants ou vos dîners romantiques intimes.</p>
                    <a href="#menu" class="btn btn-outline" style="border-color: #333; color: #0B0B0B;">Découvrir l'ambiance</a>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU SECTION -->
    <section id="menu">
        <div class="container">
            <div class="menu-header reveal">
                <h2 style="color: var(--color-accent);">Fusion de Saveurs</h2>
                <p>Une cuisine créative qui voyage entre tradition et modernité.</p>
            </div>
            
            <div class="menu-grid">
                <!-- Card 1 -->
                <div class="menu-card reveal" style="transition-delay: 0.1s;">
                    <div class="menu-icon"><i class="fas fa-utensils"></i></div>
                    <h3>Tapas & Partage</h3>
                    <ul class="menu-items">
                        <li>Planche Mixte du Terroir</li>
                        <li>Sambos Revisitées au Fromage</li>
                        <li>Brochettes de Zébu Marinées</li>
                    </ul>
                    <span class="price-tag">Dès 15 000 Ar</span>
                </div>

                <!-- Card 2 -->
                <div class="menu-card reveal" style="transition-delay: 0.2s;">
                    <div class="menu-icon"><i class="fas fa-globe-africa"></i></div>
                    <h3>Plats du Monde</h3>
                    <ul class="menu-items">
                        <li>Spécialités du Chef (Retour de Pêche)</li>
                        <li>Filet de Zébu Rossini</li>
                        <li>Risotto aux Champignons Sauvages</li>
                    </ul>
                    <span class="price-tag">Dès 35 000 Ar</span>
                </div>

                <!-- Card 3 -->
                <div class="menu-card reveal" style="transition-delay: 0.3s;">
                    <div class="menu-icon"><i class="fas fa-cocktail"></i></div>
                    <h3>Cocktails & Vins</h3>
                    <ul class="menu-items">
                        <li>Signature Golden Sunset</li>
                        <li>Mojito Royal aux Fruits Rouges</li>
                        <li>Sélection de Vins d'Afrique du Sud</li>
                    </ul>
                    <span class="price-tag">Dès 18 000 Ar</span>
                </div>
            </div>

            <div class="menu-cta-container reveal">
                <a href="#" class="btn btn-outline">Découvrir le menu complet</a>
            </div>
        </div>
    </section>

    <!-- LOCATION & INFO -->
    <section id="location">
        <div class="map-container">
             <!-- Fake Map Embedded for Demo - Replace with real Google Maps Embed in Prod -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60322.95543169004!2d47.48!3d-18.879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0ea522332d%3A0x62955519f939e31d!2sAntananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="info-container">
            <div class="reveal">
                <h2>Nous Trouver</h2>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <div>
                        <h3>Adresse</h3>
                        <p style="margin-bottom: 5px; color: #ccc;">Immeuble Golden, 5ème Étage</p>
                        <p style="margin-bottom: 0; color: #ccc;">Centre Ville, Antananarivo 101</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock info-icon"></i>
                    <div>
                        <h3>Horaires</h3>
                        <p style="margin-bottom: 5px; color: #ccc;">Ouvert 7j/7</p>
                        <p style="margin-bottom: 0; color: #ccc;">16h00 - Minuit</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt info-icon"></i>
                    <div>
                        <h3>Réservations</h3>
                        <p style="margin-bottom: 10px; color: #ccc;">Places limitées le weekend.</p>
                        <a href="tel:+261340000000" class="btn btn-primary"><i class="fas fa-phone"></i> Appeler pour réserver</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Golden Rooftop Antananarivo. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- MOBILE STICKY BAR -->
    <div id="mobile-sticky-bar">
        <a href="#menu" class="btn btn-outline">Voir Menu</a>
        <a href="tel:+261340000000" class="btn btn-primary"><i class="fas fa-phone"></i> Réserver</a>
    </div>

    <!-- JAVASCRIPT -->
    <script>
        // --- CONSTANTS ---
        const LOGO_URL = "logo.jpg";

        document.addEventListener('DOMContentLoaded', () => {
            // 1. Insert Logo
            const logoContainer = document.getElementById('logo-placeholder');
            if(logoContainer) {
                logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Golden Rooftop Logo">`;
            }

            // 2. Loader Logic
            const loader = document.getElementById('loader');
            setTimeout(() => {
                loader.style.opacity = '0';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 500);
            }, 1500); // Fake loading time for premium feel

            // 3. Scroll Header Effect
            const header = document.getElementById('main-header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

            // 4. Scroll Reveal Animation
            const revealElements = document.querySelectorAll('.reveal');
            
            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 150;

                revealElements.forEach((reveal) => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', revealOnScroll);
            // Trigger once on load
            revealOnScroll();

            // 5. Mobile Menu Toggle (Simple implémentation)
            const mobileToggle = document.querySelector('.mobile-toggle');
            // Note: In a full production site, we would build a full screen overlay menu.
            // For this single file scope, we focus on the Sticky Bottom Bar for mobile UX as requested.
            mobileToggle.addEventListener('click', () => {
                alert("Utilisez la barre du bas pour naviguer rapidement !");
            });
        });
    </script>
</body>
</html>