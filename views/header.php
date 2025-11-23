<!DOCTYPE html>
<html lang="<?php echo isset($currentLang) ? $currentLang : 'pt-BR'; ?>">
<head>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5CVZ2ZNW');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desenvolvedor Web especializado em Drupal, Laravel e Front-end. Criando soluções web robustas e elegantes, com foco em performance e na experiência do usuário.">
    <meta name="keywords" content="Desenvolvimento Web, Drupal, Laravel, Front-end, PHP, JavaScript, CSS, HTML, CDNS Systems">
    <meta name="author" content="CDNS Systems Ltda">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:title" content="CDNS Systems Ltda – Desenvolvimento Web">
    <meta property="og:description" content="Soluções web robustas e elegantes, com foco em performance e na experiência do usuário.">
    <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/images/banner-hero.png"; ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta name="twitter:title" content="CDNS Systems Ltda – Desenvolvimento Web">
    <meta name="twitter:description" content="Soluções web robustas e elegantes, com foco em performance e na experiência do usuário.">
    <meta name="twitter:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/images/banner-hero.png"; ?>">

    <title>Desenvolvedor Web – Drupal, Laravel e Front-end</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💻</text></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CVZ2ZNW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="w-full h-1.5 bg-gray-200">
            <div id="progressBar" class="h-full bg-primary" style="width: 0%;"></div>
        </div>
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="images/cdns-logo.png" alt="CDNS Systems Logo" class="h-8">
                <span class="font-bold text-gray-800 text-lg">CDNS Systems</span>
            </div>
            
            <!-- Desktop Menu -->
            <ul class="desktop-menu flex space-x-6">
                <li><a 
                  href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#home" 
                  class="text-secondary hover:text-primary transition duration-300">Início</a>
                </li>
                <li><a 
                  href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#sobre" 
                  class="text-secondary hover:text-primary transition duration-300">Sobre</a>
                </li>
                <li>
                  <a href="#servicos" class="text-secondary hover:text-primary transition duration-300">Serviços</a>
                </li>
                <li><a 
                  href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#depoimentos"
                  class="text-secondary hover:text-primary transition duration-300">Depoimentos</a>
                </li>
                <li>
                  <a href="#contato" class="text-secondary hover:text-primary transition duration-300">Contato</a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <!-- Mobile Menu Overlay -->
        <div class="mobile-menu" id="mobileMenu">
            <div class="mobile-menu-close" id="mobileMenuClose">&times;</div>
            <ul>
                <li><a href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#home" class="mobile-menu-link">Início</a></li>
                <li><a href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#sobre" class="mobile-menu-link">Sobre</a></li>
                <li><a href="#servicos" class="mobile-menu-link">Serviços</a></li>
                <li><a href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>#depoimentos" class="mobile-menu-link">Depoimentos</a></li>
                <li><a href="#contato" class="mobile-menu-link">Contato</a></li>
            </ul>
        </div>
    </header>
