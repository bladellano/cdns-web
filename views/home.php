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
            <div id="progressBar" class="h-full bg-orange-600" style="width: 0%;"></div>
        </div>
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="images/cdns-logo.png" alt="CDNS Systems Logo" class="h-8">
                <span class="font-bold text-gray-800 text-lg">CDNS Systems</span>
            </div>
            
            <!-- Desktop Menu -->
            <ul class="desktop-menu flex space-x-6">
                <li><a href="#home" class="text-gray-600 hover:text-blue-500 transition duration-300">Início</a></li>
                <li><a href="#sobre" class="text-gray-600 hover:text-blue-500 transition duration-300">Sobre</a></li>
                <li><a href="#servicos" class="text-gray-600 hover:text-blue-500 transition duration-300">Serviços</a>
                </li>
                <li><a href="#depoimentos"
                        class="text-gray-600 hover:text-blue-500 transition duration-300">Depoimentos</a></li>
                <li><a href="#contato" class="text-gray-600 hover:text-blue-500 transition duration-300">Contato</a>
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
                <li><a href="#home" class="mobile-menu-link">Início</a></li>
                <li><a href="#sobre" class="mobile-menu-link">Sobre</a></li>
                <li><a href="#servicos" class="mobile-menu-link">Serviços</a></li>
                <li><a href="#depoimentos" class="mobile-menu-link">Depoimentos</a></li>
                <li><a href="#contato" class="mobile-menu-link">Contato</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative py-20">

        <!-- Banner Component Unicorn -->
        <div class="unicorn-banner absolute top-0 left-0 w-full h-full z-0">

            <div data-us-project="Jigop0G5U0ffW0J3ZMxG" style="width:100%; height: 100%"></div>
            <script type="text/javascript">
                ! function () {
                    if (!window.UnicornStudio) {
                        window.UnicornStudio = {
                            isInitialized: !1
                        };
                        var i = document.createElement("script");
                        i.src =
                            "https://cdn.jsdelivr.net/gh/hiunicornstudio/unicornstudio.js@v1.4.33/dist/unicornStudio.umd.js",
                            i.onload = function () {
                                window.UnicornStudio.isInitialized || (UnicornStudio.init(), window.UnicornStudio
                                    .isInitialized = !0)
                            }, (document.head || document.body).appendChild(i)
                    }
                }();
            </script>

        </div>
        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0, 0, 0, 1) 12%, transparent 0%);"></div>
        <!-- End/ Banner Component Unicorn -->

        <!-- Gradient Overlay -->
        <div class="container mx-auto px-6 text-center relative z-10">
            <img src="images/perfil-home.png" alt="Foto do Desenvolvedor"
                class="w-40 h-40 rounded-full mx-auto mb-6 border-4 border-white shadow-lg">
            <h1 class="text-4xl font-bold font-poppins text-white">CDNS Systems Ltda</h1>
            <p id="typing-subtitle" class="text-xl text-white mt-2 h-7"></p>
            <p class="mt-4 max-w-2xl mx-auto text-gray-200">
                Criando soluções web robustas e elegantes, com foco em performance e na experiência do usuário.
            </p>
            <a href="#contato"
                class="mt-8 inline-block bg-orange-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-orange-700 transition duration-300">Entre
                em Contato</a>
        </div>
    </section>

    <!-- Sobre Mim -->
    <section id="sobre" class="py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold font-poppins mb-4">Sobre Mim</h2>
                <p class="text-gray-600 mb-4">
                    Com mais de 8 anos de experiência, minha paixão é transformar ideias em código limpo e funcional.
                    Sou especialista em Drupal para sistemas de gerenciamento de conteúdo complexos e Laravel para
                    aplicações back-end customizadas. Embora meu foco principal seja nessas tecnologias, também atuo com
                    Vue, PostgreSQL, MySQL, JavaScript, jQuery, Cypress e na implementação de APIs complexas.
                </p>
                <p class="text-gray-600 mb-4">
                    Sou formado em Sistemas de Informação com especialização em Engenharia de Software, o que me
                    proporciona uma base sólida para arquitetar e construir soluções robustas e escaláveis.
                </p>
                <p class="text-gray-600 mb-4">
                    Minha filosofia de trabalho é centrada na clareza e na qualidade. Acredito que uma documentação
                    bem-feita e requisitos bem definidos são a base para o sucesso de qualquer projeto, sendo uma regra
                    indispensável para mim.
                </p>
                <p class="text-gray-600 mb-4">
                    Busco sempre o equilíbrio entre design e funcionalidade, garantindo que cada projeto seja não apenas
                    bonito, mas também intuitivo e acessível.
                </p>
                <p class="text-gray-600">
                    Ao longo da minha carreira, tive a oportunidade de colaborar com grandes projetos para clientes como
                    <strong>FIESC</strong>, <strong>Unicef</strong>, <strong>Riachuelo</strong>,
                    <strong>SEDUC/PA</strong> e <strong>TJ/PA</strong>.
                </p>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 md:pl-12">
                <img src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?q=80&w=2070&auto=format&fit=crop"
                    alt="Ilustração de código" class="rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="bg-gray-800 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12 text-white">Serviços</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Serviço 1 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-orange-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h16M8 13h8"></path>
                    </svg>
                    <h3 class="text-xl font-bold font-poppins mb-2">Desenvolvimento Drupal</h3>
                    <p class="text-gray-600">Criação de portais, intranets e sistemas complexos com a flexibilidade do
                        Drupal.</p>
                </div>
                <!-- Serviço 2 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-orange-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M12 21v-2.5M4 7l2 1M4 7l2-1M4 7v2.5M12 2.5V5">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 21a9 9 0 110-18 9 9 0 010 18z"></path>
                    </svg>
                    <h3 class="text-xl font-bold font-poppins mb-2">Aplicações com Laravel</h3>
                    <p class="text-gray-600">APIs RESTful e sistemas web robustos utilizando o ecossistema poderoso do
                        Laravel.</p>
                </div>
                <!-- Serviço 3 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-orange-600 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-bold font-poppins mb-2">Interfaces Front-end</h3>
                    <p class="text-gray-600">Design responsivo e interativo com HTML, CSS, e JavaScript moderno
                        (Vue.js/React).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos" class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12">Depoimentos</h2>
            <div class="relative max-w-4xl mx-auto">
                <div class="overflow-hidden">
                    <div id="testimonial-track" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Depoimento 1 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"Trabalhar com a CDNS Systems foi uma experiência
                                    incrível. A equipe é profissional, cumpre os prazos e a qualidade do código é
                                    impecável. Recomendo fortemente!"</p>
                                <p class="mt-4 font-bold text-right">- Maria Silva, CEO da Tech Solutions</p>
                            </div>
                        </div>
                        <!-- Depoimento 2 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"O novo site da nossa empresa superou todas as
                                    expectativas. O design é moderno e a performance é excelente. Um trabalho de
                                    primeira linha."</p>
                                <p class="mt-4 font-bold text-right">- Carlos Pereira, Diretor da Inova Corp</p>
                            </div>
                        </div>
                        <!-- Depoimento 3 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"A equipe da CDNS Systems demonstrou um profundo
                                    conhecimento técnico e um compromisso com a qualidade que raramente se vê. O projeto
                                    foi entregue antes do prazo."</p>
                                <p class="mt-4 font-bold text-right">- Ana Costa, Gerente de Projetos da WebDev</p>
                            </div>
                        </div>
                        <!-- Depoimento 4 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"Ficamos muito satisfeitos com a solução de e-commerce
                                    desenvolvida. A plataforma é robusta, escalável e fácil de gerenciar. Excelente
                                    parceria!"</p>
                                <p class="mt-4 font-bold text-right">- Pedro Martins, Fundador da E-Shop Express</p>
                            </div>
                        </div>
                        <!-- Depoimento 5 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"A migração do nosso sistema legado foi executada com
                                    perfeição. A CDNS Systems garantiu uma transição suave, sem impacto para os nossos
                                    usuários."</p>
                                <p class="mt-4 font-bold text-right">- Juliana Lima, Diretora de TI da GlobalNet</p>
                            </div>
                        </div>
                        <!-- Depoimento 6 -->
                        <div class="testimonial-item w-full md:w-1/2 flex-shrink-0 px-2">
                            <div
                                class="bg-gray-200 p-8 rounded-lg h-full flex flex-col justify-between hover:bg-gray-100 transition duration-300">
                                <p class="text-gray-600 italic">"O suporte técnico é ágil e eficiente. Sempre que
                                    precisamos, a equipe da CDNS nos atende com rapidez e resolve os problemas de forma
                                    definitiva."</p>
                                <p class="mt-4 font-bold text-right">- Ricardo Mendes, Coordenador de Infraestrutura da
                                    LogiMax</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button id="prev-btn"
                    class="absolute top-1/2 -left-4 md:-left-10 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button id="next-btn"
                    class="absolute top-1/2 -right-4 md:-right-10 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 transition disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="bg-gray-800 py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12 text-white">Entre em Contato</h2>
            <div class="max-w-2xl mx-auto bg-gray-900 p-8 rounded-lg shadow-md">
                <form action="https://formspree.io/f/xgvnpwbr" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-200 font-bold mb-2">Nome</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-200 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-200 font-bold mb-2">Mensagem</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-orange-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-orange-700 transition duration-300">
                            Enviar Mensagem
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-gray-100 text-black py-8">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="https://www.linkedin.com/in/bladellano/" target="_blank" rel="noopener noreferrer"
                    class="bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-600 transition duration-300">LinkedIn</a>
                <a href="https://www.instagram.com/_caiodellano_/" target="_blank" rel="noopener noreferrer"
                    class="bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-600 transition duration-300">Instagram</a>
                <a href="https://github.com/bladellano/" target="_blank" rel="noopener noreferrer"
                    class="bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-600 transition duration-300">GitHub</a>
            </div>
            <div class="text-gray-400 text-sm mt-6 mb-4">
                <p>Contato: +351 927 860 541</p>
                <p>Rua Conselheiro Furtado dos Santos, n 73, Moraria, 1 andar. Alvaiázere, Leiria, Portugal</p>
            </div>
            <p class="text-gray-500 text-xs">&copy; 2025 CDNS Systems Ltda. Todos os direitos reservados.</p>
        </div>
    </footer>

<script>
// Inicialização de traduções
let translations = <?php echo json_encode(isset($translations) ? ['currentLang' => $translations] : []); ?>;
</script>

<script src="js/script.js"></script>
</body>
</html>
