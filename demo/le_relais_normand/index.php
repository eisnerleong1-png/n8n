<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Relais Normand - Antananarivo</title>
    <meta name="description" content="Hôtel de charme et restaurant gastronomique au cœur d'Antananarivo. Sécurité, confort et saveurs authentiques.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Manrope:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* --- RESET & VARIABLES --- */
        :root {
            --primary: #E8AC1E; /* Or Moutarde */
            --primary-hover: #c48f14;
            --text-dark: #1F1F1F; /* Noir profond */
            --bg-body: #F2F2F2; /* Blanc cassé */
            --white: #FFFFFF;
            --gray-light: #e0e0e0;
            --shadow-soft: 0 10px 40px -10px rgba(0,0,0,0.08);
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
            font-family: 'Manrope', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            color: var(--text-dark);
            line-height: 1.2;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
            object-fit: cover;
        }

        /* --- UI COMPONENTS --- */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(232, 172, 30, 0.3);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 1px solid var(--white);
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--text-dark);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 100px 0;
        }

        /* --- HEADER & NAV --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: transparent;
            padding: 20px 0;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 60px;
            width: auto;
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--white);
            position: relative;
        }

        header.scrolled .nav-links a {
            color: var(--text-dark);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-toggle {
            color: var(--text-dark);
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #000; /* Fallback */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.3) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 800px;
            padding: 0 20px;
            margin-top: 80px; /* Avoid header overlap */
        }

        .hero h1 {
            font-size: 4rem;
            color: var(--white);
            margin-bottom: 20px;
            animation: fadeUp 1s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .hero p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            max-width: 600px;
            animation: fadeUp 1s ease 0.2s forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .hero-btns {
            animation: fadeUp 1s ease 0.4s forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        /* --- TRUST BANNER --- */
        .trust-banner {
            background-color: var(--white);
            padding: 40px 0;
            border-bottom: 1px solid var(--gray-light);
            position: relative;
            z-index: 10;
            margin-top: -5px; /* Fix any gap */
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }

        .trust-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .trust-item i {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .trust-item span {
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* --- RESTAURANT SECTION --- */
        .restaurant-section {
            background: var(--bg-body);
        }

        .resto-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .resto-image {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .resto-image img {
            transition: transform 0.8s ease;
        }

        .resto-image:hover img {
            transform: scale(1.05);
        }

        .resto-content h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .resto-content .desc {
            color: #666;
            margin-bottom: 40px;
        }

        .menu-preview {
            background: var(--white);
            padding: 30px;
            border-left: 4px solid var(--primary);
            margin-bottom: 30px;
        }

        .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            border-bottom: 1px dashed #ddd;
            padding-bottom: 15px;
        }

        .menu-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .menu-item h4 {
            font-family: 'Manrope', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .menu-item .price {
            font-family: 'Playfair Display', serif;
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
        }

        /* --- ACCOMMODATION SECTION --- */
        .rooms-section {
            background-color: var(--white);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.8rem;
            margin-bottom: 15px;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .room-card {
            background: var(--bg-body);
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-soft);
        }

        .room-img {
            height: 250px;
            overflow: hidden;
        }

        .room-img img {
            width: 100%;
            height: 100%;
            transition: transform 0.6s ease;
        }

        .room-card:hover .room-img img {
            transform: scale(1.1);
        }

        .room-details {
            padding: 30px;
        }

        .room-details h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .room-meta {
            display: flex;
            gap: 15px;
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 20px;
        }

        .room-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary);
            display: block;
            margin-top: 15px;
        }

        .cta-center {
            text-align: center;
            margin-top: 50px;
        }

        /* --- LOCATION SECTION --- */
        .location-section {
            background: var(--bg-body);
        }

        .location-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .location-content {
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .location-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .location-map {
            width: 100%;
            min-height: 400px;
            background: #eee;
        }

        .location-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* --- FOOTER & FORM --- */
        footer {
            background-color: #111;
            color: var(--white);
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            margin-bottom: 60px;
        }

        .booking-form {
            background: #1F1F1F;
            padding: 40px;
            border-radius: 8px;
            border: 1px solid #333;
        }

        .booking-form h2 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        input, select {
            width: 100%;
            padding: 15px;
            background: #2a2a2a;
            border: 1px solid #333;
            color: var(--white);
            font-family: 'Manrope', sans-serif;
            border-radius: 4px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .btn-submit {
            width: 100%;
            background: var(--primary);
            color: var(--white);
            border: none;
            padding: 15px;
            font-weight: 700;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: var(--transition);
        }

        .btn-submit:hover {
            background: var(--primary-hover);
        }

        .footer-info h3 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .contact-list li {
            margin-bottom: 15px;
            color: #999;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-bottom {
            border-top: 1px solid #222;
            padding-top: 30px;
            text-align: center;
            color: #555;
            font-size: 0.9rem;
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
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            h1 { font-size: 3rem; }
            .hero-bg { grid-template-columns: 1fr; }
            .hero-bg img:nth-child(2) { display: none; } /* Show only room or food, or stack */
            .hero-bg img:first-child { width: 100%; }
            
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--white);
                flex-direction: column;
                padding: 20px;
                gap: 20px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                color: var(--text-dark);
            }

            .mobile-toggle {
                display: block;
            }

            .resto-layout, .location-layout, .footer-grid {
                grid-template-columns: 1fr;
            }

            .resto-image {
                order: -1;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
            
            .location-content {
                padding: 40px 20px;
            }
        }

        @media (max-width: 600px) {
            .hero h1 { font-size: 2.2rem; }
            .hero-btns { display: flex; flex-direction: column; gap: 10px; }
            .btn-secondary { margin-left: 0; }
            .trust-grid { grid-template-columns: 1fr 1fr; }
            .section-padding { padding: 60px 0; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="main-header">
        <div class="container nav-container">
            <div class="logo">
                <!-- LOGO LOGIC START -->
                <a href="#"><img id="dynamic-logo" alt="Le Relais Normand"></a>
                <!-- LOGO LOGIC END -->
            </div>
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#restaurant">Restaurant</a></li>
                    <li><a href="#hebergement">Chambres</a></li>
                    <li><a href="#localisation">Localisation</a></li>
                    <li><a href="#contact" style="color: var(--primary);">Réserver</a></li>
                </ul>
            </nav>
            <div class="mobile-toggle" id="mobile-menu-btn">☰</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <!-- Modern Split: Left Room, Right Food (Gourmet) -->
            <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop" alt="Chambre Luxe">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=2069&auto=format&fit=crop" alt="Cuisine Gastronomique">
        </div>
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1>L'Art de Recevoir au Cœur d'Antananarivo.</h1>
            <p>Hébergement de charme et gastronomie raffinée à deux pas de l'Avenue de l'Indépendance. Parking sécurisé et service 24h/24.</p>
            <div class="hero-btns">
                <a href="#contact" class="btn btn-primary">Réserver une Chambre</a>
                <a href="#restaurant" class="btn btn-secondary">Voir le Menu</a>
            </div>
        </div>
    </section>

    <!-- Trust Banner -->
    <div class="trust-banner">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <i>★</i>
                    <span>4.8/5 Étoiles</span>
                </div>
                <div class="trust-item">
                    <i>🅿</i>
                    <span>Parking Surveillé</span>
                </div>
                <div class="trust-item">
                    <i>📶</i>
                    <span>Wifi Haut Débit</span>
                </div>
                <div class="trust-item">
                    <i>🕒</i>
                    <span>Ouvert 24/7</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Restaurant Section -->
    <section id="restaurant" class="section-padding restaurant-section">
        <div class="container">
            <div class="resto-layout">
                <div class="resto-image reveal">
                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=2070&auto=format&fit=crop" alt="Plat Signature Zébu">
                </div>
                <div class="resto-content reveal">
                    <h2>Une Table Gourmande aux Saveurs Authentiques</h2>
                    <p class="desc">Découvrez une cuisine alliant tradition normande et produits locaux malgaches d'exception. Un cadre feutré idéal pour vos déjeuners d'affaires.</p>
                    
                    <div class="menu-preview">
                        <div class="menu-item">
                            <div>
                                <h4>Foie Gras Maison</h4>
                                <small>Chutney de mangue, pain brioché</small>
                            </div>
                            <span class="price">30 000 Ar</span>
                        </div>
                        <div class="menu-item">
                            <div>
                                <h4>Pavé de Zébu à la Normande</h4>
                                <small>Sauce camembert, gratin dauphinois</small>
                            </div>
                            <span class="price">45 000 Ar</span>
                        </div>
                    </div>
                    
                    <a href="#contact" class="btn btn-primary">Réserver une Table</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Accommodation Section -->
    <section id="hebergement" class="section-padding rooms-section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Votre Cocon de Sérénité</h2>
                <p>Des chambres conçues pour le repos absolu au cœur de la ville.</p>
            </div>
            
            <div class="room-grid">
                <!-- Room 1 -->
                <article class="room-card reveal">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=1974&auto=format&fit=crop" alt="Chambre Standard">
                    </div>
                    <div class="room-details">
                        <h3>Chambre Standard</h3>
                        <div class="room-meta">
                            <span>Lit Queen Size</span> • <span>Douche Italienne</span>
                        </div>
                        <p>Le confort essentiel avec une insonorisation parfaite pour des nuits paisibles.</p>
                        <span class="room-price">140 000 Ar / nuit</span>
                    </div>
                </article>

                <!-- Room 2 -->
                <article class="room-card reveal">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?q=80&w=1974&auto=format&fit=crop" alt="Suite Affaires">
                    </div>
                    <div class="room-details">
                        <h3>Suite Affaires</h3>
                        <div class="room-meta">
                            <span>Espace Bureau</span> • <span>Vue Ville</span>
                        </div>
                        <p>Idéale pour travailler et se détendre. Espace salon intégré et wifi prioritaire.</p>
                        <span class="room-price">220 000 Ar / nuit</span>
                    </div>
                </article>

                <!-- Room 3 -->
                <article class="room-card reveal">
                    <div class="room-img">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2070&auto=format&fit=crop" alt="Chambre Deluxe">
                    </div>
                    <div class="room-details">
                        <h3>Chambre Deluxe</h3>
                        <div class="room-meta">
                            <span>Baignoire</span> • <span>Balcon Privé</span>
                        </div>
                        <p>Une touche de luxe supplémentaire avec vue dégagée sur les hauteurs.</p>
                        <span class="room-price">180 000 Ar / nuit</span>
                    </div>
                </article>
            </div>

            <div class="cta-center reveal">
                <a href="#contact" class="btn btn-primary" style="background-color: #333;">Voir toutes les disponibilités</a>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="localisation" class="section-padding location-section">
        <div class="container">
            <div class="location-layout">
                <div class="location-content reveal">
                    <h2>Une Institution Moderne</h2>
                    <p>Le Relais Normand est idéalement situé pour vos rendez-vous d'affaires ou vos escapades touristiques.</p>
                    <br>
                    <ul style="list-style: disc; padding-left: 20px; color: #555;">
                        <li>Accès direct aux banques et commerces.</li>
                        <li>À 2 minutes de l'Avenue de l'Indépendance.</li>
                        <li><strong>Parking privé et sécurisé gratuit</strong> pour nos clients.</li>
                    </ul>
                </div>
                <div class="location-map reveal">
                    <!-- Google Maps Placeholder (Antananarivo Center) -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.226879895058!2d47.52352887609712!3d-18.918193208759363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07e0665f8c85b%3A0x6b68b75017006842!2sAvenue%20de%20l&#39;Ind%C3%A9pendance%2C%20Antananarivo%2C%20Madagascar!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer & Contact -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                
                <!-- Booking Form -->
                <div class="booking-form">
                    <h2>Prêt pour votre séjour ?</h2>
                    <form onsubmit="event.preventDefault(); alert('Demande envoyée ! Nous vous contacterons sous peu.');">
                        <div class="form-group">
                            <input type="text" placeholder="Votre Nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Votre Email" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="date" required>
                            </div>
                            <div class="form-group">
                                <select>
                                    <option>Hôtel (Nuitée)</option>
                                    <option>Restaurant (Table)</option>
                                    <option>Événement</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-submit">Vérifier la disponibilité</button>
                    </form>
                </div>

                <!-- Info -->
                <div class="footer-info">
                    <h3>Le Relais Normand</h3>
                    <p style="color: #999; margin-bottom: 30px;">
                        L'élégance à la française, la chaleur malgache. Votre adresse de référence à Antananarivo pour un séjour sans compromis.
                    </p>
                    <ul class="contact-list">
                        <li>📍 Avenue de l'Indépendance, Antananarivo 101</li>
                        <li>📞 +261 20 22 000 00</li>
                        <li>✉️ contact@lerelaisnormand.mg</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Le Relais Normand. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // LOGO INJECTION CODE
        const LOGO_URL = "logo.jpg";
        document.getElementById('dynamic-logo').src = LOGO_URL;

        // Sticky Header Logic
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const navLinks = document.getElementById('nav-links');

        mobileBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileBtn.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
        });

        // Scroll Reveal Animation (Intersection Observer)
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, {
            threshold: 0.1
        });

        revealElements.forEach(el => revealObserver.observe(el));
    </script>
</body>
</html>