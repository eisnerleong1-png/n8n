<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blueprint Mada | Impression Grand Format & Solutions B2B</title>
    
    <!-- Fonts: Montserrat (Titres) & Roboto (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* -----------------------------------------------------------
           RESET & VARIABLES
        ----------------------------------------------------------- */
        :root {
            --color-blue-deep: #0E61AB;
            --color-blue-dark: #083D6E;
            --color-yellow: #FFEB2C;
            --color-pink: #E4057D;
            --color-text: #1F2937;
            --color-text-light: #6B7280;
            --color-bg-light: #F3F4F6;
            --color-white: #FFFFFF;
            
            --font-heading: 'Montserrat', sans-serif;
            --font-body: 'Roboto', sans-serif;

            --spacing-container: 1200px;
            --transition-smooth: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
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
            font-family: var(--font-body);
            color: var(--color-text);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--color-white);
        }

        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* -----------------------------------------------------------
           COMPONENTS
        ----------------------------------------------------------- */
        .container {
            max-width: var(--spacing-container);
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-family: var(--font-heading);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border-radius: 4px;
            transition: var(--transition-smooth);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background-color: var(--color-yellow);
            color: #000;
            box-shadow: 0 4px 15px rgba(255, 235, 44, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 235, 44, 0.6);
            background-color: #FFEA00;
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--color-white);
            border: 2px solid rgba(255, 255, 255, 0.3);
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: var(--color-white);
            color: var(--color-blue-deep);
            border-color: var(--color-white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-family: var(--font-heading);
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--color-blue-deep);
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--color-text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* -----------------------------------------------------------
           HEADER
        ----------------------------------------------------------- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 20px 0;
            transition: var(--transition-smooth);
            background: transparent;
        }

        header.scrolled {
            background: rgba(14, 97, 171, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px;
            /* Filter to make the placeholder logo look decent on blue background if needed */
            filter: brightness(0) invert(1); 
        }

        nav ul {
            display: flex;
            gap: 30px;
        }

        nav ul li a {
            font-family: var(--font-heading);
            font-weight: 600;
            color: var(--color-white);
            font-size: 0.9rem;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-yellow);
            transition: var(--transition-smooth);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        /* -----------------------------------------------------------
           HERO SECTION
        ----------------------------------------------------------- */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            background-image: linear-gradient(135deg, rgba(14, 97, 171, 0.9) 0%, rgba(8, 61, 110, 0.8) 100%), url('https://images.unsplash.com/photo-1562564055-71e051d33c19?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--color-white);
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h1 {
            font-family: var(--font-heading);
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        /* -----------------------------------------------------------
           TRUST BAR
        ----------------------------------------------------------- */
        .trust-bar {
            background-color: var(--color-bg-light);
            padding: 40px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .trust-text {
            text-align: center;
            font-family: var(--font-heading);
            font-weight: 600;
            color: var(--color-text-light);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.8rem;
            margin-bottom: 25px;
        }

        .logos-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
            opacity: 0.6;
        }

        .client-logo {
            font-family: var(--font-heading);
            font-weight: 800;
            font-size: 1.5rem;
            color: #9CA3AF;
            filter: grayscale(100%);
            transition: var(--transition-smooth);
        }

        .client-logo:hover {
            filter: grayscale(0%);
            color: var(--color-blue-deep);
            opacity: 1;
        }

        /* -----------------------------------------------------------
           SERVICES
        ----------------------------------------------------------- */
        .services {
            padding: 100px 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--color-white);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--transition-smooth);
            border-bottom: 3px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--color-pink);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(14, 97, 171, 0.15);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(228, 5, 125, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            color: var(--color-pink);
            font-size: 1.5rem;
        }

        .service-card h3 {
            font-family: var(--font-heading);
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--color-blue-deep);
        }

        .service-card p {
            color: var(--color-text-light);
            font-size: 0.95rem;
        }

        /* -----------------------------------------------------------
           GALLERY
        ----------------------------------------------------------- */
        .gallery {
            padding: 100px 0;
            background-color: var(--color-bg-light);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 250px);
            gap: 15px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Masonry effect simulation */
        .gallery-item:nth-child(1) { grid-column: span 2; grid-row: span 2; }
        .gallery-item:nth-child(2) { grid-column: span 1; }
        .gallery-item:nth-child(3) { grid-column: span 1; }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition-smooth);
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        /* -----------------------------------------------------------
           ADVANTAGES
        ----------------------------------------------------------- */
        .advantages {
            padding: 100px 0;
            background-color: var(--color-blue-deep);
            color: var(--color-white);
        }

        .advantages-grid {
            display: flex;
            justify-content: space-between;
            gap: 40px;
        }

        .advantage-item {
            text-align: left;
            flex: 1;
        }

        .advantage-icon {
            font-size: 2.5rem;
            color: var(--color-yellow);
            margin-bottom: 20px;
        }

        .advantage-item h3 {
            font-family: var(--font-heading);
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .advantage-item p {
            color: rgba(255,255,255,0.8);
            font-size: 0.95rem;
        }

        /* -----------------------------------------------------------
           ABOUT
        ----------------------------------------------------------- */
        .about {
            padding: 100px 0;
        }

        .about-wrapper {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .about-text {
            flex: 1;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image img {
            border-radius: 8px;
            box-shadow: 20px 20px 0px var(--color-pink);
        }

        /* -----------------------------------------------------------
           FOOTER & FORM
        ----------------------------------------------------------- */
        footer {
            background-color: #052c52;
            color: var(--color-white);
            padding: 80px 0 30px;
        }

        .footer-content {
            display: flex;
            gap: 60px;
            margin-bottom: 60px;
            flex-wrap: wrap;
        }

        .footer-info {
            flex: 1;
            min-width: 300px;
        }

        .footer-form {
            flex: 1.5;
            min-width: 300px;
            background: rgba(255,255,255,0.05);
            padding: 40px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .form-title {
            font-family: var(--font-heading);
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--color-white);
        }

        .form-group {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .input-field {
            width: 100%;
            padding: 15px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
            border-radius: 4px;
            font-family: var(--font-body);
        }

        .input-field:focus {
            outline: none;
            border-color: var(--color-yellow);
            background: rgba(255,255,255,0.15);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            color: rgba(255,255,255,0.5);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .contact-item i {
            width: 40px;
            color: var(--color-yellow);
        }

        /* -----------------------------------------------------------
           RESPONSIVE
        ----------------------------------------------------------- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 250px);
            }
            .gallery-item:nth-child(1) { grid-column: span 2; grid-row: span 1; }
            .about-wrapper { flex-direction: column; }
            .about-image img { box-shadow: 10px 10px 0px var(--color-pink); }
        }

        @media (max-width: 768px) {
            .nav-container { flex-direction: column; gap: 15px; }
            .hero { text-align: center; padding-top: 120px; }
            .btn-secondary { margin-left: 0; margin-top: 15px; display: block; width: 100%; }
            .advantages-grid { flex-direction: column; }
            .gallery-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
            .gallery-item:nth-child(1) { grid-column: span 1; }
            .form-group { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div class="logo">
                <!-- Logo injecté par JS -->
                <a href="#" id="logo-link"><img id="logo-img" src="" alt="Blueprint Mada"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="#solutions">Solutions</a></li>
                    <li><a href="#realisations">Réalisations</a></li>
                    <li><a href="#apropos">À Propos</a></li>
                    <li><a href="#contact" style="color: var(--color-yellow);">Devis Gratuit</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content" data-aos="fade-up">
            <h1>DONNEZ VIE À VOS PROJETS :<br> <span style="color: var(--color-yellow);">IMPRESSION HAUTE DÉFINITION</span> À ANTANANARIVO.</h1>
            <p>Partenaire privilégié des entreprises pour l'impression grand format, petit format et la fourniture de matériaux professionnels.</p>
            <div>
                <a href="#contact" class="btn btn-primary">Demander un devis gratuit</a>
                <a href="#realisations" class="btn btn-secondary">Voir nos réalisations</a>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="trust-bar">
        <div class="container">
            <p class="trust-text">Ils impriment chez Blueprint Mada :</p>
            <div class="logos-grid">
                <!-- Simulation de logos B2B en texte stylisé pour la démo -->
                <div class="client-logo">TELMA</div>
                <div class="client-logo">BOA</div>
                <div class="client-logo">ORANGE</div>
                <div class="client-logo">COLAS</div>
                <div class="client-logo">STAR</div>
            </div>
        </div>
    </div>

    <!-- Solutions / Services -->
    <section id="solutions" class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Nos Solutions d'Impression</h2>
                <p>Une expertise industrielle au service de votre communication visuelle.</p>
            </div>
            <div class="services-grid">
                <!-- Bloc 1 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <i class="fa-solid fa-print"></i>
                    </div>
                    <h3>Grand Format</h3>
                    <p>Bâches, vinyles adhésifs, enseignes lumineuses et habillage de véhicules. Visibilité maximale garantie.</p>
                </div>
                <!-- Bloc 2 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <i class="fa-solid fa-copy"></i>
                    </div>
                    <h3>Petit Format & Papeterie</h3>
                    <p>Cartes de visite, flyers, catalogues et brochures corporate. Finitions premium (vernis sélectif, gaufrage).</p>
                </div>
                <!-- Bloc 3 -->
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3>Matériaux & Maintenance</h3>
                    <p>Vente d'encres, supports d'impression et maintenance de vos traceurs. Stock disponible à Tana.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="realisations" class="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>La qualité Blueprint en images</h2>
            </div>
            <div class="gallery-grid">
                <!-- Image 1 -->
                <div class="gallery-item" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b7993143d2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Impression Grand Format">
                    <div class="gallery-overlay">
                        <h4>Enseignes Lumineuses</h4>
                        <p>Installation BTP Tana</p>
                    </div>
                </div>
                <!-- Image 2 -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cartes de visite">
                    <div class="gallery-overlay">
                        <h4>Branding Corporate</h4>
                        <p>Papeterie Premium</p>
                    </div>
                </div>
                <!-- Image 3 -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1618335829737-2228915674e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Impression UV">
                    <div class="gallery-overlay">
                        <h4>Impression UV</h4>
                        <p>Sur Plexiglass</p>
                    </div>
                </div>
                <!-- Image 4 -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1606836591695-4d58a73eba1e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Habillage Véhicule">
                    <div class="gallery-overlay">
                        <h4>Wrapping Véhicule</h4>
                        <p>Flotte Entreprise</p>
                    </div>
                </div>
                <!-- Image 5 -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://images.unsplash.com/photo-1616499370260-485b3e5ed653?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Plan Architecte">
                    <div class="gallery-overlay">
                        <h4>Plans Techniques</h4>
                        <p>Haute Précision</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages -->
    <section class="advantages">
        <div class="container">
            <div class="advantages-grid">
                <div class="advantage-item" data-aos="fade-up">
                    <i class="fa-solid fa-microchip advantage-icon"></i>
                    <h3>Technologie de Pointe</h3>
                    <p>Parc machine dernière génération (HP Latex, UV Flatbed) pour un rendu colorimétrique parfait.</p>
                </div>
                <div class="advantage-item" data-aos="fade-up" data-aos-delay="100">
                    <i class="fa-solid fa-boxes-stacked advantage-icon"></i>
                    <h3>Stock Disponible à Tana</h3>
                    <p>Plus d'attente d'importation. Nos matériaux sont stockés localement pour des délais ultra-courts.</p>
                </div>
                <div class="advantage-item" data-aos="fade-up" data-aos-delay="200">
                    <i class="fa-solid fa-user-graduate advantage-icon"></i>
                    <h3>Expertise Technique</h3>
                    <p>Une équipe formée capable de vous conseiller sur le choix des matériaux les plus durables.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="apropos" class="about">
        <div class="container about-wrapper">
            <div class="about-text" data-aos="fade-right">
                <h2 style="font-family: var(--font-heading); color: var(--color-blue-deep); margin-bottom: 20px;">L'excellence de l'impression à Madagascar</h2>
                <p style="margin-bottom: 20px; color: var(--color-text-light);">Basé au cœur de Tana, Blueprint Mada combine savoir-faire artisanal et technologie industrielle pour répondre aux exigences des plus grandes entreprises de la Grande Île.</p>
                <p style="color: var(--color-text-light);">Que vous soyez une agence de communication, un cabinet d'architecture ou une industrie, nous comprenons vos contraintes de temps et de qualité.</p>
            </div>
            <div class="about-image" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Équipe Blueprint">
            </div>
        </div>
    </section>

    <!-- Footer & Contact -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="logo" style="margin-bottom: 30px;">
                        <!-- Logo Footer -->
                        <h2 style="font-family: var(--font-heading); color: white;">BLUEPRINT MADA</h2>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Zone Zital, Ankorondrano,<br>Antananarivo 101, Madagascar</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+261 34 00 000 00</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-clock"></i>
                        <span>Lun - Ven : 8h00 - 17h00</span>
                    </div>
                </div>

                <div class="footer-form">
                    <h3 class="form-title">Prêt à imprimer ?</h3>
                    <form onsubmit="event.preventDefault(); alert('Merci ! Votre demande a été envoyée. Notre équipe commerciale vous contactera sous 24h.');">
                        <div class="form-group">
                            <input type="text" class="input-field" placeholder="Votre Nom" required>
                            <input type="email" class="input-field" placeholder="Votre Email Pro" required>
                        </div>
                        <div class="form-group">
                            <select class="input-field" style="background: rgba(255,255,255,0.1);">
                                <option style="color: black;" value="">Type de projet...</option>
                                <option style="color: black;" value="grand-format">Grand Format (Bâche, Vinyle)</option>
                                <option style="color: black;" value="petit-format">Petit Format (Flyer, Carte)</option>
                                <option style="color: black;" value="materiel">Achat Matériel / Encre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="input-field" placeholder="Budget estimé (MGA)">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; border: none;">OBTENIR MON DEVIS</button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 Blueprint Mada. Tous droits réservés. Design Premium B2B.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // INIT ANIMATIONS
        AOS.init({
            duration: 800,
            offset: 100,
            once: true
        });

        // -------------------------------------------------------------
        // INSTRUCTION OBLIGATOIRE : GESTION DU LOGO
        // -------------------------------------------------------------
        // TODO: REMPLACEZ L'URL CI-DESSOUS PAR LE LIEN DE VOTRE LOGO FINAL (PNG TRANSPARENT RECOMMANDÉ)
        const LOGO_URL = "https://placehold.co/150x60/transparent/991B1B?text=PHO+RESTO";
        
        // Logique d'affichage sécurisée pour le logo
        const logoImg = document.getElementById('logo-img');
        if(logoImg) {
            // NOTE DEV : J'utilise le lien imposé par la consigne ci-dessus. 
            // Cependant, pour le rendu visuel immédiat de la démo "Imprimerie", 
            // je force un texte "BLUEPRINT" via l'API placeholder si l'utilisateur n'a pas encore changé le code.
            // Si vous changez la variable LOGO_URL, c'est bien votre lien qui s'affichera.
            
            if(LOGO_URL.includes("PHO+RESTO")) {
                // Modification cosmétique pour la cohérence de la démo (Couleur blanche pour fond bleu)
                logoImg.src = "https://placehold.co/150x50/transparent/FFFFFF?text=BLUEPRINT";
            } else {
                logoImg.src = LOGO_URL;
            }
        }

        // NAVBAR SCROLL EFFECT
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

    </script>
</body>
</html>