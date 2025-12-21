<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Essagri - École Supérieure d'Agronomie Antananarivo</title>
    <meta name="description" content="Cultivez votre avenir avec Essagri. Formations d'excellence en agronomie, management et environnement à Antananarivo.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            /* Palette de couleurs */
            --primary: #1E9145; /* Vert Croissance */
            --primary-dark: #146c32;
            --secondary: #744216; /* Marron Terre */
            --secondary-light: #8f5523;
            --dark: #1A1A1A;
            --light: #F8F9FA;
            --white: #FFFFFF;
            --gray: #6C757D;
            
            /* UI Essentials */
            --border-radius: 12px;
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Reset & Base */
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
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
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
            height: auto;
            display: block;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 14px 28px;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            text-align: center;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: 2px solid var(--primary);
            box-shadow: 0 4px 14px rgba(30, 145, 69, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--primary);
        }

        .btn-link {
            color: var(--white);
            text-decoration: underline;
            text-underline-offset: 4px;
            font-weight: 500;
        }
        
        .btn-link:hover {
            color: var(--primary);
        }

        /* HEADER */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            padding: 1rem 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Ajusté pour logo.jpg */
            width: auto;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            font-weight: 500;
            color: var(--dark);
            font-size: 0.95rem;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
            /* Image: Etudiants en blouse avec tablettes (Tech + Nature) */
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            padding-top: 80px; /* Pour compenser le header fixed */
        }

        .hero-content {
            color: var(--white);
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease-out;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 600px;
            animation: fadeInUp 1s ease-out;
        }

        .hero-btns {
            display: flex;
            gap: 1.5rem;
            align-items: center;
            animation: fadeInUp 1.2s ease-out;
        }

        /* REASSURANCE */
        .reassurance {
            background-color: var(--white);
            padding: 2rem 0;
            margin-top: -3rem; /* Chevauchement stylé */
            position: relative;
            z-index: 10;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            max-width: 1100px;
            margin-left: auto;
            margin-right: auto;
            transform: translateY(-50%);
            margin-bottom: -1rem;
        }
        
        /* Correction Mobile pour margin negatif */
        @media (max-width: 768px) {
            .reassurance {
                margin-top: 0;
                transform: none;
                margin-bottom: 2rem;
                border-radius: 0;
            }
        }

        .reassurance-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .reassurance-item {
            flex: 1;
            min-width: 250px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .reassurance-item i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .reassurance-item span {
            font-weight: 600;
            color: var(--dark);
        }

        /* SECTIONS GENERAL */
        section {
            padding: 5rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* PROBLEM / SOLUTION */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-img {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .about-img img {
            transition: var(--transition);
        }

        .about-img:hover img {
            transform: scale(1.05);
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: var(--gray);
        }

        /* COURSES */
        .courses {
            background-color: var(--light);
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .course-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
            group: cursor;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .course-img {
            height: 220px;
            overflow: hidden;
        }

        .course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .course-card:hover .course-img img {
            transform: scale(1.1);
        }

        .course-content {
            padding: 2rem;
        }

        .course-content h3 {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .course-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(30, 145, 69, 0.95);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
            color: var(--white);
            opacity: 0;
            transition: var(--transition);
        }

        .course-card:hover .course-overlay {
            opacity: 1;
        }

        /* FACULTY */
        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .prof-card {
            padding: 2rem;
            background: var(--white);
            border: 1px solid #eee;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }
        
        .prof-card:hover {
            border-color: var(--primary);
        }

        .prof-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            overflow: hidden;
            border: 4px solid var(--light);
        }

        .prof-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .prof-name {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .prof-role {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* CAMPUS / GALLERY */
        .campus {
            background-color: var(--secondary);
            color: var(--white);
        }

        .campus h2 {
            color: var(--white);
        }
        
        .campus p {
            color: rgba(255,255,255,0.8);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 200px);
            gap: 1rem;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .gallery-item:nth-child(1) {
            grid-column: 1 / 3;
            grid-row: 1 / 3;
            height: 100%;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        /* ADMISSIONS */
        .steps-container {
            display: flex;
            justify-content: space-between;
            max-width: 900px;
            margin: 0 auto 4rem;
            position: relative;
        }

        .steps-container::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #eee;
            z-index: 0;
        }

        .step {
            position: relative;
            z-index: 1;
            text-align: center;
            background: var(--white);
            padding: 0 1rem;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            margin: 0 auto 1rem;
            box-shadow: 0 0 0 8px var(--white);
        }

        .step h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .price-box {
            background: #eaf6ec;
            padding: 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid rgba(30, 145, 69, 0.2);
        }

        .price-text {
            font-size: 1.5rem;
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        /* FOOTER */
        footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 4rem 0 1rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-logo img {
            height: 40px;
            filter: brightness(0) invert(1); /* Logo blanc */
            margin-bottom: 1rem;
        }
        
        .slogan {
            font-style: italic;
            opacity: 0.7;
            margin-bottom: 1rem;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            opacity: 0.8;
        }

        .whatsapp-btn-footer {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #25D366;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 1rem;
            font-weight: 600;
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            opacity: 0.6;
        }

        /* FAB WhatsApp */
        .fab-whatsapp {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 2000;
            transition: var(--transition);
            animation: pulse 2s infinite;
        }

        .fab-whatsapp:hover {
            transform: scale(1.1);
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.8rem; }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-item:nth-child(1) { grid-column: span 2; }
        }

        @media (max-width: 768px) {
            .mobile-toggle { display: block; }
            .nav-links {
                position: fixed;
                top: 70px;
                right: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: var(--white);
                flex-direction: column;
                justify-content: center;
                transition: var(--transition);
                padding: 2rem;
            }
            .nav-links.active { right: 0; }
            
            .hero h1 { font-size: 2.2rem; }
            .about-grid { grid-template-columns: 1fr; }
            .about-img { order: -1; }
            .faculty-grid { grid-template-columns: 1fr; }
            
            .steps-container { flex-direction: column; gap: 2rem; }
            .steps-container::before { display: none; }
            
            .reassurance { margin-top: 0; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo" id="logo-container">
                    <!-- JS injectera le logo ici -->
                </a>
                <div class="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="nav-links">
                    <a href="#accueil">Accueil</a>
                    <a href="#formations">Nos Filières</a>
                    <a href="#campus">Le Campus</a>
                    <a href="#professeurs">Corps Professoral</a>
                    <a href="#admission" class="btn btn-primary" style="margin-left: 1rem;">Candidater maintenant</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="accueil" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Cultivez votre avenir : L'excellence en Agronomie à Antananarivo</h1>
                <p>Devenez l'ingénieur ou l'entrepreneur agricole dont Madagascar a besoin. Une pédagogie alliant 50% de théorie et 50% de pratique terrain.</p>
                <div class="hero-btns">
                    <a href="#formations" class="btn btn-primary">Découvrir les formations</a>
                    <a href="#campus" class="btn btn-link">Visite virtuelle du campus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reassurance (Bandeau) -->
    <div class="container">
        <div class="reassurance">
            <div class="reassurance-grid">
                <div class="reassurance-item">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Habilité par l'État (MESupRES)</span>
                </div>
                <div class="reassurance-item">
                    <i class="fas fa-handshake"></i>
                    <span>+50 Partenaires Entreprises</span>
                </div>
                <div class="reassurance-item">
                    <i class="fas fa-chart-line"></i>
                    <span>90% Taux d'insertion pro</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Problème / Solution -->
    <section class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>L'agriculture a changé, notre enseignement aussi.</h2>
                    <p>Oubliez l'agriculture du passé. Le monde a besoin d'experts capables de relever les défis climatiques et alimentaires.</p>
                    <p>Chez Essagri, nous ne formons pas seulement des techniciens. Nous formons les <strong>managers de l'agrobusiness</strong>, les experts en <strong>sécurité alimentaire</strong> et les <strong>ingénieurs du vivant</strong> de demain.</p>
                    <a href="#formations" class="btn btn-primary">Notre approche pédagogique</a>
                </div>
                <div class="about-img">
                    <!-- Photo labo/tech -->
                    <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Étudiant en laboratoire agronomique">
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Cursus -->
    <section id="formations" class="courses">
        <div class="container">
            <div class="section-header">
                <h2>Choisissez votre voie vers la réussite</h2>
                <p>Des programmes complets, du Bachelor au Master, conçus pour l'employabilité.</p>
            </div>
            <div class="courses-grid">
                <!-- Carte A -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1625246333195-09d9d11b3334?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Sciences Agronomiques">
                    </div>
                    <div class="course-content">
                        <h3>Sciences Agronomiques</h3>
                        <p>Maîtrisez la production végétale et animale avec les dernières technologies.</p>
                    </div>
                    <div class="course-overlay">
                        <h3>Débouchés</h3>
                        <p>Ingénieur agronome, Chef de culture, Responsable R&D, Consultant agricole.</p>
                        <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Voir le programme</a>
                    </div>
                </div>

                <!-- Carte B -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Agro-Management">
                    </div>
                    <div class="course-content">
                        <h3>Agro-Management</h3>
                        <p>L'alliance parfaite entre gestion d'entreprise et secteur agricole.</p>
                    </div>
                    <div class="course-overlay">
                        <h3>Débouchés</h3>
                        <p>Directeur d'exploitation, Manager supply chain, Entrepreneur agricole, Chef de projet.</p>
                        <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Voir le programme</a>
                    </div>
                </div>

                <!-- Carte C -->
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1584467541268-b040f83be3dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Génie Rural & Environnement">
                    </div>
                    <div class="course-content">
                        <h3>Génie Rural & Environnement</h3>
                        <p>Concevez les infrastructures durables et gérez les ressources en eau.</p>
                    </div>
                    <div class="course-overlay">
                        <h3>Débouchés</h3>
                        <p>Ingénieur hydraulicien, Expert impact environnemental, Gestionnaire de projets ruraux.</p>
                        <a href="#" class="btn btn-secondary" style="margin-top: 1rem;">Voir le programme</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professeurs -->
    <section id="professeurs" class="faculty">
        <div class="container">
            <div class="section-header">
                <h2>Apprenez aux côtés des experts</h2>
                <p>Nos enseignants sont des chercheurs et des praticiens actifs à Madagascar.</p>
            </div>
            <div class="faculty-grid">
                <div class="prof-card">
                    <div class="prof-img">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Professeur 1">
                    </div>
                    <div class="prof-name">Dr. Rajoelisolo</div>
                    <div class="prof-role">Docteur en Génétique Végétale</div>
                    <p>20 ans d'expérience au FOFIFA. Expert en amélioration variétale du riz.</p>
                </div>
                <div class="prof-card">
                    <div class="prof-img">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Professeur 2">
                    </div>
                    <div class="prof-name">Mme. Andriamanalina</div>
                    <div class="prof-role">Experte Agro-Économie</div>
                    <p>Consultante internationale pour la Banque Mondiale et fondatrice d'une coopérative d'export.</p>
                </div>
                <div class="prof-card">
                    <div class="prof-img">
                        <img src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Professeur 3">
                    </div>
                    <div class="prof-name">Mr. Rakotoarisoa</div>
                    <div class="prof-role">Ingénieur Génie Rural</div>
                    <p>Spécialiste en irrigation goutte-à-goutte et énergies renouvelables en milieu rural.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Campus & Galerie -->
    <section id="campus" class="campus">
        <div class="container">
            <div class="section-header">
                <h2>Un cadre d'étude au cœur d'Antananarivo</h2>
                <p>Des équipements modernes pour une formation de pointe.</p>
            </div>
            <div class="gallery-grid">
                <!-- Image principale large -->
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Campus Moderne">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Salle de classe">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Laboratoire">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1596464716127-f9a86b5b3f4d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Terrain d'application">
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Espace détente">
                </div>
            </div>
        </div>
    </section>

    <!-- Admissions & Tarifs -->
    <section id="admission" style="background-color: var(--white);">
        <div class="container">
            <div class="section-header">
                <h2>Comment intégrer Essagri ?</h2>
                <p>Votre futur commence par ces trois étapes simples.</p>
            </div>
            
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Pré-inscription</h3>
                    <p>Remplissez le formulaire en ligne en moins de 5 minutes.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Étude de dossier</h3>
                    <p>Notre jury analyse vos bulletins et votre motivation.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Entretien</h3>
                    <p>Une rencontre pour valider votre projet professionnel.</p>
                </div>
            </div>

            <div class="price-box">
                <div class="price-text">Scolarité accessible à partir de 200 000 Ar / mois</div>
                <p>Facilités de paiement disponibles. Bourses au mérite pour les meilleurs dossiers.</p>
                <button class="btn btn-primary" style="margin-top: 1.5rem;"><i class="fas fa-file-download"></i> Télécharger le dossier d'admission</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo" id="footer-logo-container">
                        <!-- JS clone logo -->
                    </div>
                    <p class="slogan">"L'avenir est dans la terre"</p>
                    <p style="font-size: 0.9rem; opacity: 0.8;">Formons l'élite de l'agriculture malagasy pour un développement durable et rentable.</p>
                </div>
                
                <div class="footer-col">
                    <h4>Contact Rapide</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-phone-alt" style="color:var(--primary)"></i> +261 34 00 000 00</li>
                        <li><i class="fas fa-envelope" style="color:var(--primary)"></i> contact@essagri.mg</li>
                    </ul>
                    <a href="https://wa.me/261340000000" class="whatsapp-btn-footer">
                        <i class="fab fa-whatsapp"></i> Discuter sur WhatsApp
                    </a>
                </div>

                <div class="footer-col">
                    <h4>Nous trouver</h4>
                    <ul class="contact-info">
                        <li><i class="fas fa-map-marker-alt" style="color:var(--primary)"></i> Lot IV 153, Antananarivo 101, Madagascar</li>
                    </ul>
                    <!-- Fake Map Image for demo (or iframe) -->
                    <div style="background: #333; height: 150px; width: 100%; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #777;">
                        <i class="fas fa-map-marked-alt fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Essagri. Tous droits réservés. | Mentions Légales | Plan du site</p>
            </div>
        </div>
    </footer>

    <!-- FAB WhatsApp -->
    <a href="https://wa.me/261340000000" class="fab-whatsapp" title="Contactez-nous sur WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- JAVASCRIPT -->
    <script>
        // 1. INTEGRATION LOGO (STRICT REQUIREMENT)
        const LOGO_URL = "logo.jpg";
        
        // Insert Logo in Header
        const logoContainer = document.getElementById('logo-container');
        if (logoContainer) {
            logoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Essagri Logo">`;
        }

        // Insert Logo in Footer (Clone)
        const footerLogoContainer = document.getElementById('footer-logo-container');
        if (footerLogoContainer) {
            footerLogoContainer.innerHTML = `<img src="${LOGO_URL}" alt="Essagri Logo">`;
        }

        // 2. MOBILE MENU
        const mobileToggle = document.querySelector('.mobile-toggle');
        const navLinks = document.querySelector('.nav-links');
        
        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                // Change icon
                const icon = mobileToggle.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        }

        // Close menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // 3. SCROLL ANIMATIONS (Intersection Observer)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Apply fade-in to sections and cards
        const animatedElements = document.querySelectorAll('.course-card, .about-text, .about-img, .prof-card, .step, .gallery-item');
        
        animatedElements.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });

        // 4. HEADER BACKGROUND ON SCROLL
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.padding = "0.5rem 0";
                header.style.boxShadow = "0 4px 6px -1px rgba(0, 0, 0, 0.1)";
            } else {
                header.style.padding = "1rem 0";
                header.style.boxShadow = "none";
            }
        });

    </script>
</body>
</html>