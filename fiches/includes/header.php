<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Site professionnel de fiches de révision pour le développement web - HTML, CSS, PHP" />
    <meta name="author" content="Revision Master" />
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Fiches de Révision Pro</title>
    
    <style>
        /* ===== RESET & VARIABLES ===== */
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #7c3aed;
            --accent: #f59e0b;
            --dark: #0f0e17;
            --dark-card: #1a1927;
            --dark-card-hover: #201e30;
            --gray: #a7a9be;
            --light: #fffffe;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --border: #2e2c42;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background: linear-gradient(135deg, var(--dark) 0%, #0a0a0f 100%);
            color: var(--light);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* ===== TYPOGRAPHY ===== */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        /* ===== HEADER ===== */
        .site-header {
            background: rgba(15, 14, 23, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 1rem 2rem;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #fff, var(--gray));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .logo span:last-child {
            font-size: 0.9rem;
            font-weight: 400;
            color: var(--gray);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--light);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            border-radius: 2px;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem;
            min-height: calc(100vh - 140px);
        }

        /* ===== HERO SECTION ===== */
        .hero {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(124, 58, 237, 0.05));
            border-radius: 2rem;
            padding: 3rem 2rem;
            margin-bottom: 3rem;
            text-align: center;
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #fff, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto 1.5rem;
        }

        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-badge {
            background: rgba(79, 70, 229, 0.2);
            border: 1px solid var(--primary);
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--primary);
        }

        /* ===== CARDS GRID ===== */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: var(--dark-card);
            border-radius: 1.5rem;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: var(--transition);
            position: relative;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: var(--primary);
            box-shadow: 0 20px 40px rgba(79, 70, 229, 0.2);
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .card-html::before { background: linear-gradient(90deg, #e34c26, #f06529); }
        .card-css::before { background: linear-gradient(90deg, #264de4, #2965f1); }

        .card-header {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .card-icon {
            font-size: 2.5rem;
        }

        .card-badge {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 2rem;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .card-body {
            padding: 0 1.5rem 1.5rem;
        }

        .card-body h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .card-body p {
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .card-features {
            list-style: none;
            margin-top: 1rem;
        }

        .card-features li {
            padding: 0.5rem 0;
            color: var(--gray);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-footer {
            padding: 1.5rem;
            border-top: 1px solid var(--border);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 0.95rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--light);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            background: rgba(79, 70, 229, 0.1);
        }

        /* ===== BONUS SECTION ===== */
        .bonus-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .bonus-card {
            background: rgba(26, 25, 39, 0.5);
            border-radius: 1rem;
            padding: 1.5rem;
            border: 1px solid var(--border);
            transition: var(--transition);
            text-align: center;
        }

        .bonus-card:hover {
            background: var(--dark-card);
            border-color: var(--primary);
        }

        .bonus-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .bonus-card h3 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .bonus-card p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* ===== FOOTER ===== */
        .site-footer {
            background: var(--dark-card);
            border-top: 1px solid var(--border);
            padding: 2rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 1rem;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-copyright {
            color: var(--gray);
            font-size: 0.85rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .main-content {
                padding: 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .cards-grid {
                grid-template-columns: 1fr;
            }
            
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <a href="index.php" class="logo">
                <span class="logo-icon">📚</span>
                <span class="logo-text">FichesPro</span>
                <span>| Révisions Web</span>
            </a>
            <nav class="nav-links">
                <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a>
                <a href="fiche-html.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'fiche-html.php' ? 'active' : ''; ?>">HTML</a>
                <a href="fiche-css.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'fiche-css.php' ? 'active' : ''; ?>">CSS</a>
            </nav>
        </div>
    </header>