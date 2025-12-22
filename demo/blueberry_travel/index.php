<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blueberry Travel Madagascar | Voyages sur Mesure</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0F4161;
            --accent-red: #E63D38;
            --white: #FFFFFF;
            --light-gray: #F4F6F8;
            --text-dark: #1A202C;
            --text-gray: #4A5568;
            --overlay-dark: rgba(15, 65, 97, 0.7);
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
        }

        /* RESET & BASE */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-body);
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 { font-family: var(--font-heading); color: var(--primary-blue); }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }
        img { width: 100%; height: auto; display: block; object-fit: cover; }

        /* BUTTONS */
        .btn {
            display: inline-block;
            padding: 16px 32px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 50px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-primary {
            background-color: var(--accent-red);
            color: var(--white);
            border: 2px solid var(--accent-red);
            box-shadow: 0 10px 20px rgba(230, 61, 56, 0.3);
        }

        .btn-primary:hover {
            background-color: transparent;
            color: var(--accent-red);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(230, 61, 56, 0.4);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
        }

        .btn-secondary:hover {
            background-color: var(--primary-blue);
            color: var(--white);
        }

        /* HEADER */
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
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 10px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container img {
            height: 60px;
            width: auto;
        }

        nav ul {
            display: none; /* Mobile first */
        }
        
        @media (min-width: 992px) {
            nav ul {
                display: flex;
                gap: 40px;
            }
            nav a {
                font-weight: 500;
                font-size: 0.95rem;
                color: var(--white);
                position: relative;
            }
            header.scrolled nav a { color: var(--primary-blue); }
            
            nav a::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                bottom: -5px;
                left: 0;
                background-color: var(--accent-red);
                transition: var(--transition);
            }
            nav a:hover::after { width: 100%; }
        }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            background: url('https://images.unsplash.com/photo-1518086208940-bf7f62b21703?q=80&w=2532&auto=format&fit=crop') no-repeat center center/cover;
            padding-top: 80px; /* Prevent header overlap */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(180deg, rgba(15,65,97,0.4) 0%, rgba(15,65,97,0.8) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
            opacity: 0;
            animation: fadeUp 1s ease-out forwards 0.5s;
        }

        .hero h1 {
            font-size: 3rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--white);
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            font-weight: 300;
        }

        /* TRUST BAR */
        .trust-bar {
            background-color: var(--white);
            padding: 40px 20px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .trust-bar p {
            font-size: 0.9rem;
            color: var(--text-gray);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .logos-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
            opacity: 0.6;
            filter: grayscale(100%);
        }
        
        /* Placeholder styling for trust logos since specific images weren't provided, 
           simulating a clean look with text representation or simple icons would work 
           but sticking to structure. */

        /* CIRCUITS SECTION */
        .circuits {
            padding: 100px 20px;
            background-color: var(--light-gray);
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--text-gray);
        }

        .circuits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto 50px;
        }

        .card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: var(--transition);
            position: relative;
            group: ;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .card-img {
            height: 250px;
            overflow: hidden;
        }

        .card-img img {
            transition: transform 0.8s ease;
        }

        .card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 30px;
        }

        .card-price {
            display: inline-block;
            background-color: rgba(15, 65, 97, 0.1);
            color: var(--primary-blue);
            padding: 5px 12px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-family: var(--font-heading);
        }

        .card-cta {
            margin-top: 20px;
            display: inline-block;
            color: var(--accent-red);
            font-weight: 600;
            position: relative;
        }
        .card-cta::after {
            content: '→';
            margin-left: 5px;
            transition: transform 0.3s;
        }
        .card:hover .card-cta::after { transform: translateX(5px); }

        /* WHY US (EXPERIENCE) */
        .why-us {
            padding: 100px 20px;
            background-color: var(--white);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-box {
            padding: 40px;
            border: 1px solid #eee;
            border-radius: 8px;
            transition: var(--transition);
        }

        .feature-box:hover {
            border-color: var(--primary-blue);
            background-color: var(--light-gray);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-blue);
        }

        .feature-box h3 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        /* GALLERY - MOSAIC */
        .gallery {
            padding: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(2, 300px);
            gap: 5px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-item img {
            height: 100%;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .gallery-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
            }
            .gallery-item.large {
                grid-column: auto;
                grid-row: auto;
                height: 300px;
            }
        }

        /* TESTIMONIALS */
        .testimonials {
            padding: 100px 20px;
            background-color: var(--light-gray);
            text-align: center;
        }

        .testimonial-card {
            max-width: 800px;
            margin: 0 auto;
            background: var(--white);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            position: relative;
        }

        .quote-icon {
            font-size: 4rem;
            color: rgba(230, 61, 56, 0.1);
            position: absolute;
            top: 20px;
            left: 20px;
            font-family: serif;
        }

        .testimonial-text {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 30px;
            color: var(--text-dark);
        }

        .client-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .client-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* FOOTER & LEAD GEN */
        footer {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 80px 20px 40px;
        }

        .footer-cta {
            max-width: 800px;
            margin: 0 auto 80px;
            text-align: center;
            background: rgba(255,255,255,0.05);
            padding: 50px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .footer-cta h2 { color: var(--white); margin-bottom: 30px; }

        .lead-form {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .lead-form input {
            padding: 15px 20px;
            border-radius: 50px;
            border: none;
            outline: none;
            flex: 1;
            min-width: 250px;
            font-family: var(--font-body);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        .footer-col ul li { margin-bottom: 10px; color: rgba(255,255,255,0.7); }
        .footer-col ul li a:hover { color: var(--accent-red); }

        .copyright {
            text-align: center;
            margin-top: 60px;
            color: rgba(255,255,255,0.4);
            font-size: 0.8rem;
        }

        /* ANIMATIONS */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* RESPONSIVE HEADLINES */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .section-header h2 { font-size: 2rem; }
            .gallery { grid-template-columns: 1fr; }
            .lead-form { flex-direction: column; }
            .btn { width: 100%; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header id="main-header">
        <div class="nav-container">
            <div class="logo-container" id="logo-root">
                <!-- Logo injected via JS -->
            </div>
            <nav>
                <ul>
                    <li><a href="#circuits">Nos Circuits</a></li>
                    <li><a href="#why-us">L'Expérience</a></li>
                    <li><a href="#testimonials">Témoignages</a></li>
                    <li><a href="#contact" class="btn btn-primary" style="padding: 10px 20px; font-size: 0.8rem;">Devis Gratuit</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>Découvrez Madagascar :<br>Des Voyages Enchanteurs, Des Souvenirs Éternels.</h1>
            <p>Votre expert local à Antananarivo pour des circuits inoubliables et 100% sur mesure.</p>
            <a href="#contact" class="btn btn-primary">Créer mon voyage sur mesure</a>
        </div>
    </section>

    <!-- TRUST BAR -->
    <section class="trust-bar">
        <p>Ils nous font confiance & Partenaires Officiels</p>
        <div class="logos-grid">
            <!-- Using text for proof as no specific logos provided, styled cleanly -->
            <span style="font-weight:700; font-size:1.2rem; color:#ccc;">Office National du Tourisme</span>
            <span style="font-weight:700; font-size:1.2rem; color:#ccc;">TripAdvisor Excellence</span>
            <span style="font-weight:700; font-size:1.2rem; color:#ccc;">Madagascar Airlines</span>
        </div>
    </section>

    <!-- CIRCUITS -->
    <section id="circuits" class="circuits">
        <div class="section-header">
            <h2>Nos Circuits Phares</h2>
            <p>Laissez-vous inspirer par nos itinéraires les plus prisés, entièrement personnalisables.</p>
        </div>

        <div class="circuits-grid">
            <!-- Carte 1 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1544250269-e7090b83e606?q=80&w=2670&auto=format&fit=crop" alt="Paysage Sud Madagascar RN7">
                </div>
                <div class="card-content">
                    <span class="card-price">À partir de 4 500 000 MGA/pers</span>
                    <h3>La Grande Traversée du Sud</h3>
                    <p style="color:var(--text-gray); font-size:0.9rem;">De la RN7 aux plages de Tuléar, découvrez les lémuriens et les paysages arides.</p>
                    <a href="#contact" class="card-cta">Explorer ce circuit</a>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1572979603070-449e79878dc4?q=80&w=2670&auto=format&fit=crop" alt="Nosy Be Plage">
                </div>
                <div class="card-content">
                    <span class="card-price">À partir de 3 800 000 MGA/pers</span>
                    <h3>Paradis du Nord & Îles Vanille</h3>
                    <p style="color:var(--text-gray); font-size:0.9rem;">Plongée, ylang-ylang et détente absolue sur l'archipel de Nosy Be.</p>
                    <a href="#contact" class="card-cta">Explorer ce circuit</a>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="card">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1555053644-8cb37279318b?q=80&w=2671&auto=format&fit=crop" alt="Allée des Baobabs">
                </div>
                <div class="card-content">
                    <span class="card-price">À partir de 4 200 000 MGA/pers</span>
                    <h3>Aventure Sauvage à l'Ouest</h3>
                    <p style="color:var(--text-gray); font-size:0.9rem;">L'iconique Allée des Baobabs et les Tsingy de Bemaraha au coucher du soleil.</p>
                    <a href="#contact" class="card-cta">Explorer ce circuit</a>
                </div>
            </div>
        </div>
        <div style="text-align:center;">
            <a href="#contact" class="btn btn-secondary">Explorer toutes nos destinations</a>
        </div>
    </section>

    <!-- EXPERIENCE BLUEBERRY -->
    <section id="why-us" class="why-us">
        <div class="section-header">
            <h2>Pourquoi choisir Blueberry Travel ?</h2>
            <p>L'excellence du service, l'authenticité de la rencontre.</p>
        </div>
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon">🇲🇬</div>
                <h3>Expertise 100% Locale</h3>
                <p>Basés à Antananarivo, nous connaissons chaque recoin de l'île. Pas d'intermédiaires, juste de la passion.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">✨</div>
                <h3>Itinéraires Uniques</h3>
                <p>Loin du tourisme de masse, nous créons des voyages flexibles qui s'adaptent à votre rythme et vos envies.</p>
            </div>
            <div class="feature-box">
                <div class="feature-icon">🛡️</div>
                <h3>Sécurité & Assistance 24/7</h3>
                <p>Voyagez l'esprit tranquille. Une assistance francophone disponible à tout moment durant votre séjour.</p>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery">
        <div class="gallery-item large">
            <img src="https://images.unsplash.com/photo-1549480119-9fcf88383dc8?q=80&w=2670&auto=format&fit=crop" alt="Lémurien">
        </div>
        <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1534958178652-50d4d42b635e?q=80&w=2670&auto=format&fit=crop" alt="Forêt tropicale">
        </div>
        <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?q=80&w=2572&auto=format&fit=crop" alt="Coucher de soleil Mer">
        </div>
        <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1565347878347-194553f47c3e?q=80&w=2670&auto=format&fit=crop" alt="Pirogue">
        </div>
        <div class="gallery-item">
            <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=2673&auto=format&fit=crop" alt="Ville Tana">
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials">
        <div class="testimonial-card">
            <div class="quote-icon">"</div>
            <p class="testimonial-text">Un voyage absolument magique. L'équipe de Blueberry a su comprendre nos attentes de confort tout en nous faisant découvrir le vrai Madagascar. L'organisation était sans faille.</p>
            <div class="client-info">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=250&auto=format&fit=crop" alt="Client" class="client-avatar">
                <div>
                    <strong>Sophie & Marc D.</strong><br>
                    <small>Voyageurs - Septembre 2023</small>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER & FORM -->
    <footer id="contact">
        <div class="footer-cta">
            <h2>Votre aventure malagasy commence par un clic</h2>
            <form class="lead-form">
                <input type="text" placeholder="Votre Nom" required>
                <input type="email" placeholder="Votre Email" required>
                <input type="text" placeholder="Date de départ souhaitée" onfocus="(this.type='date')">
                <button type="submit" class="btn btn-primary">Recevoir mon devis gratuit</button>
            </form>
        </div>

        <div class="footer-content">
            <div class="footer-col">
                <div class="logo-container-footer">
                   <!-- Logo Placeholder for Footer -->
                   <h3 style="color:white; font-family: var(--font-heading);">Blueberry Travel</h3>
                </div>
                <p style="margin-top:15px; color:rgba(255,255,255,0.7);">Agence de voyage premium spécialisée dans les circuits sur mesure à Madagascar.</p>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li>📍 Antananarivo, Madagascar</li>
                    <li>📞 +261 20 22 000 00</li>
                    <li>✉️ contact@blueberry-travel.mg</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Liens Rapides</h4>
                <ul>
                    <li><a href="#circuits">Nos Circuits</a></li>
                    <li><a href="#why-us">À Propos</a></li>
                    <li><a href="#testimonials">Avis Clients</a></li>
                    <li><a href="#">Mentions Légales</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy; 2024 Blueberry Travel Madagascar. Tous droits réservés.
        </div>
    </footer>

    <script>
        // LOGO INTEGRATION - MANDATORY CODE
        const LOGO_URL = "logo.jpg";
        
        // Inject Logo into Header
        const logoContainer = document.getElementById('logo-root');
        if(logoContainer) {
            const img = document.createElement('img');
            img.src = LOGO_URL;
            img.alt = "Blueberry Travel Logo";
            logoContainer.appendChild(img);
        }

        // Header Scroll Effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Simple Form Submission Handler (Prevent Default)
        document.querySelector('.lead-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Merci ! Votre demande a été reçue. Un expert Blueberry vous contactera sous 24h.');
        });
    </script>
</body>
</html>