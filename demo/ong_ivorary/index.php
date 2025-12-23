<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ivorary | Gouvernance & Engagement Citoyen</title>
    <meta name="description" content="Ivorary s'engage pour la justice, la transparence publique et l'engagement citoyen à Madagascar.">
    
    <!-- Fonts: Montserrat (Titres) & Inter (Corps) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #009FE3;
            --primary-dark: #007bb0;
            --text-dark: #1a1a1a;
            --text-grey: #666666;
            --bg-light: #F8F9FA;
            --white: #FFFFFF;
            --border-radius: 12px;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow-sm: 0 4px 6px rgba(0,0,0,0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
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
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
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

        /* --- UI COMPONENTS --- */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            letter-spacing: 0.5px;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(0, 159, 227, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 159, 227, 0.4);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary);
        }

        .btn-text {
            color: var(--primary);
            padding: 0;
            font-weight: 700;
        }
        
        .btn-text:hover {
            text-decoration: underline;
        }

        .section-padding {
            padding: 100px 0;
        }

        .badge {
            background: rgba(0, 159, 227, 0.1);
            color: var(--primary);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: inline-block;
        }

        /* --- HEADER --- */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo img {
            height: 45px;
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-grey);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- HERO SECTION --- */
        .hero {
            position: relative;
            height: 95vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-image: url('https://images.unsplash.com/photo-1577962917302-cd874c4e3169?q=80&w=2574&auto=format&fit=crop'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: var(--white);
            max-width: 800px;
            padding-top: 80px; /* Offset for fixed header */
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
        }

        /* --- SOCIAL PROOF --- */
        .partners {
            background-color: #F5F5F5;
            padding: 40px 0;
            border-bottom: 1px solid #eee;
        }

        .partners-title {
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-grey);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }

        .logos-grid i {
            font-size: 2.5rem; /* Placeholder icons */
        }

        /* --- DIAGNOSTIC & SOLUTION --- */
        .diagnostic {
            background: var(--white);
        }

        .split-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .diag-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .diag-text p {
            color: var(--text-grey);
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .solution-card {
            background: var(--bg-light);
            padding: 40px;
            border-radius: var(--border-radius);
            border-left: 5px solid var(--primary);
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: rgba(0, 159, 227, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        /* --- PILLARS --- */
        .pillars {
            background: #FAFAFA;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--white);
            padding: 40px 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            border: 1px solid rgba(0,0,0,0.03);
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .card h3 {
            margin: 20px 0 15px;
            font-size: 1.5rem;
        }

        .card p {
            color: var(--text-grey);
            margin-bottom: 20px;
        }

        /* --- RESOURCES --- */
        .resources {
            background: var(--white);
        }

        .resource-list {
            max-width: 900px;
            margin: 0 auto;
        }

        .resource-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            border-bottom: 1px solid #eee;
            transition: var(--transition);
        }

        .resource-item:hover {
            background: var(--bg-light);
            padding-left: 35px;
        }

        .res-info h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .res-meta {
            font-size: 0.9rem;
            color: var(--text-grey);
        }

        .download-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--bg-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: var(--transition);
        }

        .resource-item:hover .download-btn {
            background: var(--primary);
            color: var(--white);
        }

        /* --- NEWS --- */
        .news {
            background: var(--bg-light);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .news-img {
            height: 220px;
            width: 100%;
            object-fit: cover;
        }

        .news-content {
            padding: 25px;
        }

        .date {
            font-size: 0.8rem;
            color: var(--primary);
            font-weight: 600;
            text-transform: uppercase;
        }

        .news-content h3 {
            margin: 10px 0;
            font-size: 1.3rem;
        }

        /* --- ABOUT --- */
        .about-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
            border-top: 1px solid #eee;
            padding-top: 40px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-grey);
        }

        /* --- FOOTER --- */
        footer {
            background: #1a1a1a; /* Plus sombre que #666 pour le premium */
            color: #ccc;
            padding: 80px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer h3 {
            color: var(--white);
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        .footer-logo {
            filter: brightness(0) invert(1);
            max-width: 120px;
            margin-bottom: 20px;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #999;
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }

        .newsletter-form input {
            padding: 12px;
            border: none;
            border-radius: 4px 0 0 4px;
            width: 100%;
            background: #333;
            color: var(--white);
        }

        .newsletter-form button {
            background: var(--primary);
            border: none;
            color: var(--white);
            padding: 0 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
            font-size: 0.9rem;
            color: #666;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .split-layout { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 768px) {
            .nav-links { display: none; } /* Simplified for single file, normally js toggle */
            .mobile-menu-btn { display: block; }
            .hero-content { padding-top: 40px; }
            .hero h1 { font-size: 2.2rem; }
            .hero-buttons { flex-direction: column; }
            .footer-grid { grid-template-columns: 1fr; }
            
            /* Mobile Nav Logic (Simple) */
            .nav-active .nav-links {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: var(--white);
                padding: 20px;
                box-shadow: 0 10px 10px rgba(0,0,0,0.05);
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container nav-container">
            <a href="#" class="logo">
                <img id="logo-img" alt="Ivorary Logo">
            </a>
            <div class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <nav class="nav-links">
                <a href="#">Accueil</a>
                <a href="#pillars">Nos Missions</a>
                <a href="#resources">Rapports & Audits</a>
                <a href="#news">Actualités</a>
                <a href="#about">À Propos</a>
                <a href="#" class="btn btn-primary">Adhérer au mouvement</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge">Gouvernance & Transparence</span>
            <h1>Bâtissons ensemble une gouvernance intègre et efficace à Madagascar.</h1>
            <p>Ivorary s'engage pour la justice, la transparence publique et l'engagement citoyen. Transformons l'indignation en action concrète.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Je m'engage</a>
                <a href="#resources" class="btn btn-outline">Consulter nos rapports</a>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="partners">
        <div class="container">
            <p class="partners-title">Ils soutiennent nos actions</p>
            <div class="logos-grid">
                <!-- Placeholder icons for logos to maintain specific visuals requirements without external unverified URLs -->
                <i class="fas fa-landmark" title="Partenaire Institutionnel"></i>
                <i class="fas fa-globe-europe" title="Union Européenne"></i>
                <i class="fas fa-hand-holding-heart" title="USAID"></i>
                <i class="fas fa-university" title="Banque Mondiale"></i>
            </div>
        </div>
    </section>

    <!-- Diagnostic & Solution -->
    <section id="diagnostic" class="section-padding diagnostic">
        <div class="container split-layout">
            <div class="diag-text">
                <span class="badge">Le Constat</span>
                <h2>Une administration publique qui doit rendre des comptes.</h2>
                <p>La corruption et l'opacité minent le développement de Madagascar. Les citoyens se sentent souvent impuissants face à une administration complexe.</p>
                <div class="solution-card">
                    <h3>La Réponse Ivorary</h3>
                    <p>Nous agissons comme une sentinelle de la démocratie. Par la surveillance, le plaidoyer et la formation, nous restaurons la confiance.</p>
                </div>
            </div>
            <div class="diag-visual">
                <img src="https://images.unsplash.com/photo-1541872703-74c5963631df?q=80&w=2670&auto=format&fit=crop" alt="Réunion de travail" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg);">
            </div>
        </div>
    </section>

    <!-- Pillars -->
    <section id="pillars" class="section-padding pillars">
        <div class="container">
            <div class="section-header">
                <span class="badge">Nos Services</span>
                <h2>Nos axes de combat pour la Cité</h2>
                <p>Trois piliers fondamentaux pour redresser la barre.</p>
            </div>
            <div class="cards-grid">
                <div class="card">
                    <div class="icon-box"><i class="fas fa-users"></i></div>
                    <h3>Engagement Citoyen</h3>
                    <p>Former la jeunesse à la vie publique et aux responsabilités civiques pour créer les leaders de demain.</p>
                    <a href="#" class="btn-text">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="card">
                    <div class="icon-box"><i class="fas fa-search-dollar"></i></div>
                    <h3>Transparence Budgétaire</h3>
                    <p>Suivi rigoureux de l'efficacité des dépenses publiques. Où va l'argent des contribuables ?</p>
                    <a href="#" class="btn-text">Voir les analyses <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="card">
                    <div class="icon-box"><i class="fas fa-balance-scale"></i></div>
                    <h3>Lutte contre la corruption</h3>
                    <p>Mise en place de dispositifs d'alerte sécurisés et plaidoyer juridique pour mettre fin à l'impunité.</p>
                    <a href="#" class="btn-text">Agir maintenant <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources -->
    <section id="resources" class="section-padding resources">
        <div class="container">
            <div class="section-header">
                <span class="badge">Data & Transparence</span>
                <h2>La Transparence commence ici</h2>
                <p>Accédez à nos audits et rapports publics. L'information est le premier contre-pouvoir.</p>
            </div>
            <div class="resource-list">
                <div class="resource-item">
                    <div class="res-info">
                        <h3>Rapport d'Activité Annuel 2024</h3>
                        <span class="res-meta">PDF • 4.5 MB • Publié le 12 Jan 2025</span>
                    </div>
                    <a href="#" class="download-btn"><i class="fas fa-download"></i></a>
                </div>
                <div class="resource-item">
                    <div class="res-info">
                        <h3>Audit de la Gouvernance Locale Tana</h3>
                        <span class="res-meta">PDF • 8.2 MB • Publié le 05 Fév 2025</span>
                    </div>
                    <a href="#" class="download-btn"><i class="fas fa-download"></i></a>
                </div>
                <div class="resource-item">
                    <div class="res-info">
                        <h3>Guide du Citoyen Vigilant</h3>
                        <span class="res-meta">PDF • 2.1 MB • Outil pédagogique</span>
                    </div>
                    <a href="#" class="download-btn"><i class="fas fa-download"></i></a>
                </div>
                <div style="text-align: center; margin-top: 40px;">
                    <a href="#" class="btn btn-outline" style="background: var(--primary); border-color: var(--primary);">Accéder à la bibliothèque complète</a>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="section-padding news">
        <div class="container">
            <div class="section-header">
                <h2>Ivorary en action</h2>
            </div>
            <div class="news-grid">
                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?q=80&w=2600&auto=format&fit=crop" alt="Atelier" class="news-img">
                    <div class="news-content">
                        <span class="date">15 Mars 2025</span>
                        <h3>Atelier de sensibilisation dans les Fokontany</h3>
                        <p style="color:var(--text-grey); font-size:0.9rem;">Retour sur notre intervention auprès des chefs de quartier pour...</p>
                    </div>
                </article>
                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2670&auto=format&fit=crop" alt="Audit" class="news-img">
                    <div class="news-content">
                        <span class="date">02 Mars 2025</span>
                        <h3>Lancement de l'audit citoyen</h3>
                        <p style="color:var(--text-grey); font-size:0.9rem;">Nos équipes sont sur le terrain pour vérifier la conformité des...</p>
                    </div>
                </article>
                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=2670&auto=format&fit=crop" alt="Conférence" class="news-img">
                    <div class="news-content">
                        <span class="date">20 Fév 2025</span>
                        <h3>Conférence sur la Loi de Finances</h3>
                        <p style="color:var(--text-grey); font-size:0.9rem;">Décryptage des enjeux budgétaires pour l'année à venir.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section-padding">
        <div class="container split-layout">
            <div class="about-text">
                <h2>Une expertise au service de l'intérêt général.</h2>
                <p style="margin-bottom: 20px;">Fondée par un collectif de juristes et d'activistes, Ivorary ("Le cœur du foyer" en symbolique) est née de la volonté de remettre le citoyen au centre de la décision publique à Antananarivo et dans tout Madagascar.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number">5k+</span>
                        <span class="stat-label">Membres</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">7</span>
                        <span class="stat-label">Années d'action</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">120</span>
                        <span class="stat-label">Projets</span>
                    </div>
                </div>
            </div>
            <div class="about-img">
                <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=2669&auto=format&fit=crop" alt="Équipe Ivorary" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg);">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="col">
                    <img id="footer-logo-img" alt="Ivorary" class="footer-logo">
                    <p>Pour une gouvernance juste et transparente.</p>
                </div>
                <div class="col">
                    <h3>Liens Rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Adhésion (10 000 Ar/an)</a></li>
                        <li><a href="#resources">Rapports</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Contact</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Antananarivo, Madagascar</li>
                        <li><i class="fas fa-envelope"></i> contact@ivorary.mg</li>
                        <li><i class="fas fa-phone"></i> +261 34 00 000 00</li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter</h3>
                    <p style="font-size: 0.9rem; margin-bottom: 10px;">Restez informé de nos combats.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Votre email">
                        <button type="submit">OK</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Ivorary. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // INTEGRATION DU LOGO SELON INSTRUCTION
        const LOGO_URL = "logo.jpg";
        
        // Application du logo dans le header et le footer
        document.addEventListener("DOMContentLoaded", function() {
            const logoImg = document.getElementById('logo-img');
            const footerLogoImg = document.getElementById('footer-logo-img');
            
            if(logoImg) logoImg.src = LOGO_URL;
            if(footerLogoImg) footerLogoImg.src = LOGO_URL;
        });

        // Toggle Mobile Menu
        function toggleMenu() {
            const navContainer = document.querySelector('.nav-container');
            navContainer.classList.toggle('nav-active');
        }

        // Scroll Reveal Animation (Simple Vanilla JS implementation)
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

        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = "0";
            section.style.transform = "translateY(20px)";
            section.style.transition = "all 0.6s ease-out";
            observer.observe(section);
        });
    </script>
</body>
</html>