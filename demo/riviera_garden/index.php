<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riviera Garden | Hôtel & Événementiel Antananarivo</title>
    
    <!-- Fonts: Playfair Display (Premium/Serif) & Plus Jakarta Sans (Modern/Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --primary: #9EC29A; /* Vert Nature */
            --primary-dark: #86A883;
            --secondary: #6093A9; /* Bleu Muted */
            --secondary-dark: #4A7587;
            --text-body: #75797D; /* Gris Moderne */
            --text-heading: #2C3E50;
            --bg-off-white: #F9F9F7;
            --white: #FFFFFF;
            --shadow-soft: 0 10px 40px -10px rgba(0,0,0,0.08);
            --radius-lg: 24px;
            --radius-btn: 50px;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

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
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-off-white);
            color: var(--text-body);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--text-heading);
            font-weight: 600;
        }

        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* -----------------------------------------------------------
           UTILITIES
        ----------------------------------------------------------- */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .text-center { text-align: center; }

        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: var(--radius-btn);
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 2px solid var(--primary);
            box-shadow: 0 4px 15px rgba(158, 194, 154, 0.4);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--secondary);
            border: 2px solid var(--secondary);
        }

        .btn-outline:hover {
            background-color: var(--secondary);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* -----------------------------------------------------------
           HEADER & NAV
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.05); /* Transparent start */
            backdrop-filter: blur(10px);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 0;
            box-shadow: var(--shadow-soft);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-img {
            height: 50px; /* Taille ajustée */
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-weight: 500;
            color: var(--text-heading);
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--text-heading);
            cursor: pointer;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding-top: 80px; /* Avoid header overlap */
        }

        /* Split Background Logic */
        .hero-bg-split {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            display: flex;
        }

        .hero-bg-left, .hero-bg-right {
            width: 50%;
            height: 100%;
            position: relative;
        }

        .hero-bg-left img, .hero-bg-right img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Gradient Overlay for Text Readability */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
            color: var(--white);
            padding-left: 24px;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 24px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
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

        .hero-btns .btn-outline {
            border-color: var(--white);
            color: var(--white);
        }
        
        .hero-btns .btn-outline:hover {
            background-color: var(--white);
            color: var(--text-heading);
        }

        /* -----------------------------------------------------------
           SOCIAL PROOF
        ----------------------------------------------------------- */
        .social-proof {
            padding: 40px 0;
            background: var(--white);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .proof-title {
            text-align: center;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--text-body);
            margin-bottom: 24px;
            opacity: 0.7;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logos-grid i {
            font-size: 2rem;
            color: var(--text-heading);
        }
        
        .rating-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #f0f0f0;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-heading);
        }
        .rating-badge i { color: #FFD700; }

        /* -----------------------------------------------------------
           HEBERGEMENT (BENTO GRID STYLE)
        ----------------------------------------------------------- */
        .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 16px;
        }

        .section-header p {
            font-size: 1.1rem;
        }

        .accommodation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 32px;
        }

        .room-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            position: relative;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px -10px rgba(0,0,0,0.12);
        }

        .room-img-wrapper {
            height: 250px;
            overflow: hidden;
        }

        .room-img-wrapper img {
            transition: transform 0.6s ease;
        }

        .room-card:hover .room-img-wrapper img {
            transform: scale(1.05);
        }

        .room-details {
            padding: 30px;
        }

        .room-price {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 8px;
            display: block;
        }

        .room-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
        }

        .room-features {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            font-size: 0.9rem;
            color: var(--text-body);
        }

        .room-features span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* -----------------------------------------------------------
           EVENEMENTIEL
        ----------------------------------------------------------- */
        .events-section {
            background-color: var(--white);
        }

        .event-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .event-content h2 {
            font-size: 3rem;
            margin-bottom: 24px;
        }
        
        .event-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 200px);
            gap: 16px;
        }

        .event-img {
            border-radius: var(--radius-lg);
            height: 100%;
            object-fit: cover;
        }
        
        .event-img:nth-child(1) { grid-column: 1 / 3; }

        /* -----------------------------------------------------------
           RESTAURANT
        ----------------------------------------------------------- */
        .restaurant-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1544148103-0773bf10d330?q=80&w=2940&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
            text-align: center;
            padding: 120px 0;
        }

        .restaurant-box {
            max-width: 700px;
            margin: 0 auto;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 60px 40px;
            backdrop-filter: blur(5px);
            border-radius: var(--radius-lg);
        }

        .restaurant-box h2 {
            color: var(--white);
            font-size: 3rem;
            margin-bottom: 20px;
        }

        /* -----------------------------------------------------------
           A PROPOS & MAP
        ----------------------------------------------------------- */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 40px;
            align-items: start;
        }

        .map-container {
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 400px;
            box-shadow: var(--shadow-soft);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* -----------------------------------------------------------
           FOOTER
        ----------------------------------------------------------- */
        footer {
            background-color: #2C3E50;
            color: #dcdcdc;
            padding: 80px 0 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-col h3 {
            color: var(--white);
            margin-bottom: 24px;
            font-size: 1.2rem;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .copyright {
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            font-size: 0.9rem;
        }

        /* -----------------------------------------------------------
           MOBILE STICKY CTA
        ----------------------------------------------------------- */
        .sticky-cta {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            z-index: 999;
            display: none; /* Hidden on desktop */
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero { flex-direction: column; text-align: center; justify-content: center; }
            .hero-content { padding: 0; margin-top: 60px; max-width: 90%; }
            .hero-btns { justify-content: center; }
            .hero h1 { font-size: 2.5rem; }
            
            .event-layout { grid-template-columns: 1fr; }
            .event-img:nth-child(1) { grid-column: auto; }
            
            .about-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .mobile-toggle { display: block; }
            
            .hero-bg-split { flex-direction: column; }
            .hero-bg-left, .hero-bg-right { width: 100%; height: 50%; }
            
            .sticky-cta { display: block; }
            
            .section-padding { padding: 60px 0; }
            h2 { font-size: 2rem !important; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div id="logo-container">
                <!-- Logo injected by JS -->
            </div>
            
            <nav>
                <ul class="nav-links">
                    <li><a href="#accommodation">Hébergement</a></li>
                    <li><a href="#events">Événements</a></li>
                    <li><a href="#restaurant">Restaurant</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="mobile-toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            
            <div style="display: none;" class="desktop-cta">
                <a href="#book" class="btn btn-primary">Réserver</a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-bg-split">
                <!-- Left: Bungalow/Peace -->
                <div class="hero-bg-left">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2370&auto=format&fit=crop" alt="Bungalow paisible">
                </div>
                <!-- Right: Wedding/Event -->
                <div class="hero-bg-right">
                    <img src="https://images.unsplash.com/photo-1519225468359-2996bc017aed?q=80&w=2370&auto=format&fit=crop" alt="Mariage festif">
                </div>
            </div>
            
            <div class="hero-overlay"></div>

            <div class="container">
                <div class="hero-content">
                    <h1>Riviera Garden <br> L'Élégance Naturelle aux Portes d'Antananarivo</h1>
                    <p>Découvrez une alliance parfaite entre le calme d'une oasis naturelle et la proximité stratégique de l'aéroport.</p>
                    <div class="hero-btns">
                        <a href="#book" class="btn btn-primary">Réserver mon Séjour</a>
                        <a href="#quote" class="btn btn-outline">Devis Événement</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Proof -->
        <section class="social-proof">
            <div class="container">
                <p class="proof-title">Ils nous font confiance pour leurs moments inoubliables</p>
                <div class="logos-grid">
                    <div class="rating-badge">
                        <i class="fa-solid fa-star"></i>
                        <span>4.8/5 Excellent (TripAdvisor)</span>
                    </div>
                    <!-- Simulate corporate logos -->
                    <i class="fa-solid fa-building"></i>
                    <i class="fa-solid fa-plane-departure"></i>
                    <i class="fa-solid fa-briefcase"></i>
                </div>
            </div>
        </section>

        <!-- Accommodation -->
        <section id="accommodation" class="section-padding">
            <div class="container">
                <div class="section-header">
                    <h2>Une Oasis de Repos</h2>
                    <p>Échappez au tumulte de la ville dans nos bungalows tout confort, idéal avant votre vol ou pour un weekend de détente.</p>
                </div>

                <div class="accommodation-grid">
                    <!-- Card 1 -->
                    <article class="room-card">
                        <div class="room-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1598928636135-d146006ff4be?q=80&w=2370&auto=format&fit=crop" alt="Bungalow Vue Jardin">
                        </div>
                        <div class="room-details">
                            <span class="room-price">Dès 150 000 Ar / nuit</span>
                            <h3 class="room-title">Bungalow Vue Jardin</h3>
                            <p>Un espace privatif entouré de verdure pour une déconnexion totale.</p>
                            <div class="room-features">
                                <span><i class="fa-solid fa-bed"></i> King Size</span>
                                <span><i class="fa-solid fa-wifi"></i> Fibre</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-outline" style="width:100%; text-align:center;">Voir disponibilités</a>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="room-card">
                        <div class="room-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=2370&auto=format&fit=crop" alt="Chambre Standard">
                        </div>
                        <div class="room-details">
                            <span class="room-price">Dès 100 000 Ar / nuit</span>
                            <h3 class="room-title">Chambre Standard</h3>
                            <p>L'option parfaite et confortable pour vos transits rapides.</p>
                            <div class="room-features">
                                <span><i class="fa-solid fa-shower"></i> Douche Italienne</span>
                                <span><i class="fa-solid fa-tv"></i> Smart TV</span>
                            </div>
                            <br>
                            <a href="#" class="btn btn-outline" style="width:100%; text-align:center;">Voir disponibilités</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Events -->
        <section id="events" class="section-padding events-section">
            <div class="container">
                <div class="event-layout">
                    <div class="event-content">
                        <h2>Le Cadre Parfait pour vos Grands Événements</h2>
                        <p style="margin-bottom: 24px;">De la cérémonie féerique au bord du lac aux séminaires d'entreprise productifs, Riviera Garden transforme vos projets en souvenirs impérissables.</p>
                        <ul style="margin-bottom: 30px; space-y: 10px;">
                            <li><i class="fa-solid fa-check" style="color:var(--primary); margin-right:10px;"></i> Salle de réception modulable</li>
                            <li><i class="fa-solid fa-check" style="color:var(--primary); margin-right:10px;"></i> Jardins fleuris pour cocktails</li>
                            <li><i class="fa-solid fa-check" style="color:var(--primary); margin-right:10px;"></i> Service traiteur haut de gamme</li>
                        </ul>
                        <a href="#" class="btn btn-primary">Organiser mon Événement</a>
                    </div>
                    <div class="event-gallery">
                        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2370&auto=format&fit=crop" class="event-img" alt="Mariage Champêtre">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2369&auto=format&fit=crop" class="event-img" alt="Table de réception">
                        <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2312&auto=format&fit=crop" class="event-img" alt="Conférence">
                    </div>
                </div>
            </div>
        </section>

        <!-- Restaurant -->
        <section id="restaurant" class="restaurant-section">
            <div class="container">
                <div class="restaurant-box">
                    <h2>Saveurs Gourmandes</h2>
                    <p style="font-size: 1.2rem; margin-bottom: 30px;">Découvrez notre carte locale et internationale dans une ambiance apaisée au bord de l'eau.</p>
                    <a href="#" class="btn btn-primary">Consulter le Menu du Jour</a>
                </div>
            </div>
        </section>

        <!-- About & Location -->
        <section id="about" class="section-padding">
            <div class="container">
                <div class="about-grid">
                    <div class="about-content">
                        <h2>Riviera Garden,<br>Votre escale privilégiée</h2>
                        <p style="margin: 20px 0;">Situé stratégiquement près de l'aéroport et du lac, nous offrons l'alliance parfaite entre accessibilité et évasion naturelle.</p>
                        <p style="margin-bottom: 30px;">Que vous soyez en transit, en voyage d'affaires ou à la recherche du lieu idéal pour votre mariage, notre équipe est dédiée à votre confort.</p>
                        
                        <div style="background: var(--white); padding: 20px; border-radius: 12px; box-shadow: var(--shadow-soft);">
                            <div style="display:flex; align-items:center; gap:15px; margin-bottom:10px;">
                                <i class="fa-solid fa-plane" style="color:var(--primary); font-size:1.5rem;"></i>
                                <strong>15 min de l'Aéroport Ivato</strong>
                            </div>
                            <div style="display:flex; align-items:center; gap:15px;">
                                <i class="fa-solid fa-city" style="color:var(--secondary); font-size:1.5rem;"></i>
                                <strong>30 min du Centre Ville</strong>
                            </div>
                        </div>
                    </div>
                    <div class="map-container">
                        <!-- Embed Google Map for Antananarivo Airport Area (Generic placeholder pointing to Ivato area) -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60359.83401569619!2d47.45!3d-18.8!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f0808f23714c33%3A0x286576d183021c3b!2sIvato%20International%20Airport!5e0!3m2!1sen!2smg!4v1700000000000!5m2!1sen!2smg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Riviera Garden</h3>
                    <p>L'élégance naturelle à Tana.</p>
                </div>
                <div class="footer-col">
                    <h3>Liens Rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#accommodation">Chambres</a></li>
                        <li><a href="#events">Mariages & Séminaires</a></li>
                        <li><a href="#restaurant">Restaurant</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fa-solid fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fa-brands fa-whatsapp"></i> WhatsApp Disponible</li>
                        <li><i class="fa-solid fa-envelope"></i> contact@rivieragarden.mg</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2024 Riviera Garden. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Sticky Mobile Button -->
    <div class="sticky-cta">
        <a href="#book" class="btn btn-primary" style="width: 100%; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">Réserver maintenant</a>
    </div>

    <!-- JavaScript -->
    <script>
        // --- 1. CONFIGURATION LOGO (OBLIGATOIRE) ---
        const LOGO_URL = "logo.jpg";
        
        // Insertion du logo
        const logoContainer = document.getElementById('logo-container');
        const img = document.createElement('img');
        img.src = LOGO_URL;
        img.alt = "Riviera Garden Logo";
        img.className = "logo-img";
        logoContainer.appendChild(img);

        // --- 2. HEADER SCROLL EFFECT ---
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- 3. MOBILE MENU TOGGLE ---
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');

        mobileToggle.addEventListener('click', () => {
            // Simple toggle for demo simplicity (In prod, use a class toggle)
            if(navLinks.style.display === 'flex') {
                navLinks.style.display = 'none';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '80px';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = 'white';
                navLinks.style.padding = '20px';
                navLinks.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
            }
        });

        // --- 4. SMOOTH SCROLL OFFSET FOR ANCHORS ---
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target){
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                    
                    // Close mobile menu if open
                    if(window.innerWidth < 768) {
                        navLinks.style.display = 'none';
                    }
                }
            });
        });
    </script>
</body>
</html>