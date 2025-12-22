<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace House | Hôtel & Restaurant Gastronomique Ivato</title>
    <meta name="description" content="L'Escale de Charme & Gastronomie à 5 min de l'Aéroport d'Ivato. Chambres confortables et spécialités à l'Ail Noir.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Palette */
            --color-primary-action: #DF2028; /* Rouge - Urgence/Action */
            --color-secondary-warm: #F09A35; /* Orange - Chaleur/Gourmandise */
            --color-accent-nature: #68AD37; /* Vert - Confiance/Nature */
            --color-bg-light: #F9F8F6; /* Blanc cassé/Beige élégant */
            --color-bg-white: #FFFFFF;
            --color-text-dark: #1A1A1A;
            --color-text-grey: #4A4A4A;
            
            /* Typography */
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;

            /* Spacing */
            --container-width: 1200px;
            --section-padding: 100px 0;
            
            /* Effects */
            --shadow-card: 0 10px 30px rgba(0,0,0,0.05);
            --shadow-hover: 0 20px 40px rgba(0,0,0,0.1);
            --radius-md: 12px;
            --radius-lg: 24px;
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        html { scroll-behavior: smooth; }
        
        body {
            font-family: var(--font-body);
            background-color: var(--color-bg-light);
            color: var(--color-text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 { font-family: var(--font-heading); color: var(--color-text-dark); }
        h1 { font-size: 3.5rem; line-height: 1.1; margin-bottom: 1.5rem; }
        h2 { font-size: 2.5rem; margin-bottom: 1rem; }
        p { color: var(--color-text-grey); font-size: 1.1rem; margin-bottom: 1.5rem; }
        a { text-decoration: none; transition: all 0.3s ease; }
        ul { list-style: none; }
        img { width: 100%; display: block; object-fit: cover; }

        /* UTILS */
        .container {
            width: 90%;
            max-width: var(--container-width);
            margin: 0 auto;
        }
        
        .section-header { text-align: center; margin-bottom: 3rem; max-width: 700px; margin-left: auto; margin-right: auto; }
        .section-header span { 
            color: var(--color-secondary-warm); 
            font-weight: 600; 
            text-transform: uppercase; 
            letter-spacing: 2px; 
            font-size: 0.9rem;
            display: block;
            margin-bottom: 10px;
        }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            cursor: pointer;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary {
            background-color: var(--color-primary-action);
            color: white;
            box-shadow: 0 4px 15px rgba(223, 32, 40, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #c21b22;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(223, 32, 40, 0.4);
        }

        .btn-secondary {
            background-color: var(--color-secondary-warm);
            color: white;
            box-shadow: 0 4px 15px rgba(240, 154, 53, 0.3);
        }
        
        .btn-secondary:hover {
            background-color: #d88628;
            transform: translateY(-2px);
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            padding: 20px 0;
            background: transparent;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-wrapper img {
            height: 50px;
            width: auto;
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            color: white;
            font-weight: 500;
            font-size: 1rem;
        }

        header.scrolled nav ul li a { color: var(--color-text-dark); }
        
        .nav-cta {
            padding: 10px 24px;
            background: var(--color-primary-action);
            color: white !important;
            border-radius: 30px;
        }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            min-height: 700px;
            display: flex;
            position: relative;
            overflow: hidden;
            padding-top: 0; /* Important pour overlay */
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            display: flex;
        }

        .hero-bg .split {
            width: 50%;
            height: 100%;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-bg .split::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.3); /* Overlay sombre pour lisibilité */
        }

        .hero-content {
            z-index: 2;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding-top: 80px; /* Eviter le header */
        }

        .hero-text-box {
            max-width: 800px;
            background: rgba(0,0,0,0.4); /* Glassmorphism sombre */
            backdrop-filter: blur(5px);
            padding: 40px;
            border-radius: var(--radius-lg);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .hero h1 { color: white; font-weight: 700; text-shadow: 0 2px 10px rgba(0,0,0,0.3); }
        .hero h2 { font-family: var(--font-body); font-size: 1.25rem; font-weight: 300; margin-bottom: 2rem; color: #f0f0f0; }
        
        .trust-bar {
            margin-top: 3rem;
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255,255,255,0.9);
            padding: 10px 20px;
            border-radius: 50px;
            color: var(--color-text-dark);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .trust-item i { color: var(--color-accent-nature); }

        /* REVIEWS */
        .reviews { padding: var(--section-padding); background: white; }
        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .review-card {
            background: var(--color-bg-light);
            padding: 30px;
            border-radius: var(--radius-md);
            position: relative;
        }
        .review-card i { color: var(--color-secondary-warm); font-size: 1.5rem; margin-bottom: 1rem; }
        .review-author { font-weight: 700; margin-top: 1rem; display: block; color: var(--color-text-dark); }
        .reviews-cta { text-align: center; margin-top: 3rem; font-size: 1.2rem; font-family: var(--font-heading); font-style: italic; }

        /* ROOMS */
        .rooms { padding: var(--section-padding); }
        .rooms-showcase {
            display: flex;
            gap: 40px;
            align-items: center;
            flex-wrap: wrap;
        }
        .rooms-info { flex: 1; min-width: 300px; }
        .rooms-gallery { flex: 1; min-width: 300px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; }
        .rooms-gallery img { border-radius: var(--radius-md); height: 250px; transition: transform 0.3s; }
        .rooms-gallery img:hover { transform: scale(1.02); }
        .rooms-gallery img:first-child { grid-column: span 2; height: 350px; }
        
        .price-tag {
            display: inline-block;
            background: var(--color-accent-nature);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        /* DINING */
        .dining {
            padding: var(--section-padding);
            background-color: #1a1a1a;
            color: white;
            position: relative;
        }
        .dining-content {
            display: flex;
            align-items: center;
            gap: 50px;
            flex-wrap: wrap-reverse;
        }
        .dining-text { flex: 1; min-width: 300px; }
        .dining-image { flex: 1; min-width: 300px; position: relative; }
        
        .dining h2 { color: white; }
        .dining p { color: #cccccc; }
        .dining-image img { border-radius: var(--radius-lg); box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        
        .food-badge {
            position: absolute;
            top: -20px;
            right: -20px;
            background: var(--color-secondary-warm);
            color: white;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: 700;
            font-size: 0.85rem;
            line-height: 1.2;
            transform: rotate(15deg);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* ABOUT */
        .about { padding: var(--section-padding); background: white; text-align: center; }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; text-align: left; }
        .about-img img { border-radius: 50% 50% 0 0; height: 500px; width: 100%; }

        /* LOCATION & FORM */
        .location { padding: var(--section-padding); background: var(--color-bg-light); }
        .location-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            background: white;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-card);
        }
        
        .map-wrapper { height: 100%; min-height: 400px; background: #eee; position: relative; }
        .map-wrapper iframe { width: 100%; height: 100%; border: 0; }
        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .map-overlay i { color: var(--color-primary-action); }

        .booking-form { padding: 50px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; }
        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: var(--font-body);
            transition: border-color 0.3s;
        }
        .form-control:focus { border-color: var(--color-primary-action); outline: none; }
        .radio-group { display: flex; gap: 20px; }
        .radio-item { display: flex; align-items: center; gap: 8px; cursor: pointer; }

        /* FOOTER */
        footer { background: #111; color: white; padding: 60px 0 20px; }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            border-bottom: 1px solid #333;
            padding-bottom: 40px;
        }
        .footer-col h4 { color: white; margin-bottom: 20px; font-size: 1.2rem; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a { color: #999; }
        .footer-col ul li a:hover { color: white; }
        .footer-bottom { text-align: center; color: #666; font-size: 0.9rem; }
        .social-links { display: flex; gap: 15px; }
        .social-links a { color: white; width: 40px; height: 40px; border-radius: 50%; background: #333; display: flex; align-items: center; justify-content: center; }
        .social-links a:hover { background: var(--color-primary-action); }

        /* FLOATING WHATSAPP */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 100;
            transition: all 0.3s;
            animation: pulse 2s infinite;
        }
        .whatsapp-float:hover { transform: scale(1.1); }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        /* MOBILE MENU */
        .mobile-menu-btn { display: none; color: white; font-size: 1.5rem; cursor: pointer; }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            h1 { font-size: 2.8rem; }
            .hero-bg .split { width: 100%; position: absolute; height: 100%; top: 0; left: 0; }
            .hero-bg .split:first-child { z-index: 1; }
            .hero-bg .split:last-child { display: none; } /* On ne garde qu'une image en mobile pour clarté */
            .hero-text-box { margin: 0 20px; }
            
            .about-grid, .location-container { grid-template-columns: 1fr; }
            .map-wrapper { min-height: 300px; }
        }

        @media (max-width: 768px) {
            header.scrolled .mobile-menu-btn { color: var(--color-text-dark); }
            .nav-container ul { display: none; } /* Simple hide for demo, normally use JS toggle */
            .mobile-menu-btn { display: block; }
            
            h1 { font-size: 2.2rem; }
            .trust-bar { flex-direction: column; align-items: center; gap: 10px; }
            .dining-content { flex-direction: column-reverse; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <a href="#" class="logo-wrapper">
                <img id="logo-img" alt="Grace House Logo">
            </a>
            <nav>
                <ul>
                    <li><a href="#rooms">Chambres</a></li>
                    <li><a href="#dining">Restaurant</a></li>
                    <li><a href="#about">À Propos</a></li>
                    <li><a href="#location">Contact</a></li>
                    <li><a href="#location" class="nav-cta">Réserver</a></li>
                </ul>
                <div class="mobile-menu-btn"><i class="fas fa-bars"></i></div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <!-- Room Image (Unsplash) -->
            <div class="split" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=2070&auto=format&fit=crop');"></div>
            <!-- Food Image (Unsplash) -->
            <div class="split" style="background-image: url('https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop');"></div>
        </div>
        
        <div class="container hero-content">
            <div class="hero-text-box">
                <h1>L'Escale de Charme & Gastronomie à 5 min de l'Aéroport</h1>
                <h2>Évitez les embouteillages de Tana. Profitez d'une nuit paisible et d'une cuisine signature à l'Ail Noir avant votre vol.</h2>
                <a href="#location" class="btn btn-primary">Réserver mon Escale</a>
                
                <div class="trust-bar">
                    <div class="trust-item"><i class="fas fa-wifi"></i> Wifi Haut Débit</div>
                    <div class="trust-item"><i class="fas fa-shuttle-van"></i> Navette Aéroport</div>
                    <div class="trust-item"><i class="fas fa-shield-alt"></i> Parking Sécurisé</div>
                    <div class="trust-item"><i class="fas fa-clock"></i> 24/7</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="reviews" id="reviews">
        <div class="container">
            <div class="section-header">
                <span>Témoignages</span>
                <h2>Ils se sont reposés chez Grace House</h2>
            </div>
            <div class="reviews-grid">
                <div class="review-card">
                    <i class="fas fa-quote-left"></i>
                    <p>"Idéal pour mon transit. La proximité avec l'aéroport est imbattable, et le dîner était incroyable. Une oasis de calme."</p>
                    <span class="review-author">- Jean, France 🇫🇷</span>
                </div>
                <div class="review-card">
                    <i class="fas fa-quote-left"></i>
                    <p>"Nous avions peur du bruit des avions, mais c'était parfaitement insonorisé. Literie au top pour récupérer."</p>
                    <span class="review-author">- Sarah, Afrique du Sud 🇿🇦</span>
                </div>
                <div class="review-card">
                    <i class="fas fa-quote-left"></i>
                    <p>"La spécialité à l'ail noir est une découverte gastronomique ! Je reviendrai juste pour le restaurant."</p>
                    <span class="review-author">- Rivo, Madagascar 🇲🇬</span>
                </div>
            </div>
            <div class="reviews-cta">
                Pourquoi choisir l'incertitude quand le confort vous attend ici ?
            </div>
        </div>
    </section>

    <!-- Rooms -->
    <section class="rooms" id="rooms">
        <div class="container">
            <div class="rooms-showcase">
                <div class="rooms-info">
                    <div class="section-header" style="text-align: left; margin: 0 0 2rem 0;">
                        <span>Hébergement</span>
                        <h2>Votre Nuit de Confort Traditionnel</h2>
                    </div>
                    <div class="price-tag">À partir de 120 000 Ar / Nuit</div>
                    <p>Nos chambres spacieuses sont décorées avec l'artisanat malgache raffiné. Literie premium conçue spécifiquement pour vous aider à récupérer du décalage horaire ou du stress du voyage.</p>
                    <ul style="margin-bottom: 2rem;">
                        <li><i class="fas fa-check" style="color:var(--color-accent-nature); margin-right:10px;"></i> Climatisation réversible</li>
                        <li><i class="fas fa-check" style="color:var(--color-accent-nature); margin-right:10px;"></i> Salle de bain privative moderne</li>
                        <li><i class="fas fa-check" style="color:var(--color-accent-nature); margin-right:10px;"></i> Service en chambre</li>
                    </ul>
                    <a href="#location" class="btn btn-secondary">Voir les disponibilités</a>
                </div>
                <div class="rooms-gallery">
                    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=1974&auto=format&fit=crop" alt="Chambre Principale">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2070&auto=format&fit=crop" alt="Détail Déco">
                    <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=2070&auto=format&fit=crop" alt="Salle de Bain">
                </div>
            </div>
        </div>
    </section>

    <!-- Dining USP -->
    <section class="dining" id="dining">
        <div class="container">
            <div class="dining-content">
                <div class="dining-image">
                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?q=80&w=2070&auto=format&fit=crop" alt="Plat Signature">
                    <div class="food-badge">
                        Spécialité<br>Ail Noir
                    </div>
                </div>
                <div class="dining-text">
                    <div class="section-header" style="text-align: left; margin: 0 0 2rem 0;">
                        <span>Le Restaurant</span>
                        <h2>Le Voyage Culinaire : Excellence de l'Ail Noir</h2>
                    </div>
                    <p>Ne mangez pas juste pour vous nourrir. Découvrez une gastronomie unique à Tana.</p>
                    <p>Notre Chef Mamy transforme l'Ail Noir, trésor de santé et de goût, en une expérience sensorielle inoubliable. Des notes de vinaigre balsamique, de réglisse et d'umami qui subliment nos produits locaux.</p>
                    <a href="#location" class="btn btn-primary">Réserver une table</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <div class="section-header" style="text-align: left; margin: 0 0 2rem 0;">
                        <span>Vos Hôtes</span>
                        <h2>Bienvenue à la Maison</h2>
                    </div>
                    <p>Mamy & Miary ont créé Grace House avec une vision simple : l'hospitalité malgache authentique.</p>
                    <p>"Ici, vous n'êtes pas un numéro de chambre, vous êtes notre invité. Que vous restiez 5 heures ou 5 jours, nous voulons que Grace House soit votre meilleur souvenir de Tana."</p>
                </div>
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1932&auto=format&fit=crop" alt="Mamy et Miary">
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section class="location" id="location">
        <div class="container">
            <div class="section-header">
                <span>Ne ratez jamais votre vol</span>
                <h2>Vérifier la disponibilité en direct</h2>
            </div>
            
            <div class="location-container">
                <div class="map-wrapper">
                    <!-- Google Maps Embed Placeholder -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.802577610996!2d47.4764!3d-18.8055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDQ4JzE5LjgiUyA0N8KwMjgnMzUuMCJF!5e0!3m2!1sfr!2smg!4v1625667000000!5m2!1sfr!2smg" allowfullscreen="" loading="lazy"></iframe>
                    <div class="map-overlay">
                        <i class="fas fa-car-side"></i> 5 à 10 min de l'aéroport
                    </div>
                </div>
                
                <div class="booking-form">
                    <form>
                        <div class="form-group">
                            <label>Votre Nom</label>
                            <input type="text" class="form-control" placeholder="ex: Jean Dupont">
                        </div>
                        <div class="form-group">
                            <label>Date d'arrivée</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Votre Besoin</label>
                            <div class="radio-group">
                                <label class="radio-item">
                                    <input type="radio" name="service" checked> Chambre
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="service"> Table (Restaurant)
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Vérifier Dispo & Prix</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Grace House</h4>
                    <p>L'alliance du confort et de la gastronomie à deux pas d'Ivato.</p>
                    <div class="social-links" style="margin-top: 20px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><a href="#rooms">Chambres</a></li>
                        <li><a href="#dining">Restaurant</a></li>
                        <li><a href="#location">Réservation</a></li>
                        <li><a href="#">Mentions Légales</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope"></i> contact@gracehouse.mg</li>
                        <li><i class="fas fa-map-marker-alt"></i> Ivato, Antananarivo</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Grace House. Design Premium. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/261340000000" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // LOGO INTEGRATION REQUIRMENT
        const LOGO_URL = "logo.jpg";
        
        document.addEventListener('DOMContentLoaded', () => {
            // Set Logo
            const logoImg = document.getElementById('logo-img');
            if(logoImg) {
                logoImg.src = LOGO_URL;
            }

            // Header Scroll Effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });

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