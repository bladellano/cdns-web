<?php require_once __DIR__ . '/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-32 bg-gradient-to-br from-red-900 via-red-800 to-orange-900">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold font-poppins text-white mb-6">
                    Desenvolvimento Laravel
                </h1>
                <p class="text-xl md:text-2xl text-red-100 mb-8">
                    APIs RESTful e sistemas web robustos com o framework mais popular do PHP
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#servicos" class="bg-orange-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-orange-700 transition duration-300">
                        Nossos Serviços
                    </a>
                    <a href="#contato" class="bg-white text-red-900 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">
                        Fale Conosco
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Introdução -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold font-poppins mb-6 text-center">Por que escolher Laravel?</h2>
                <p class="text-lg text-gray-700 mb-4 text-center">
                    Laravel é o framework PHP mais popular e amado pelos desenvolvedores, reconhecido por sua sintaxe elegante, 
                    arquitetura robusta e ecossistema completo que acelera o desenvolvimento de aplicações web modernas.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossa Expertise -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-red-50">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-xl shadow-xl p-8 md:p-12 border-l-4 border-orange-600">
                    <h2 class="text-3xl font-bold font-poppins mb-8 text-gray-900">Nossa Expertise em Laravel</h2>
                    
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <p class="text-lg">
                            Desenvolvemos aplicações web robustas e escaláveis utilizando o <strong class="text-red-900">framework Laravel</strong>, 
                            com foco em arquitetura limpa, código de alta qualidade e melhores práticas de desenvolvimento. 
                            Nossa expertise abrange desde APIs RESTful até sistemas complexos de gerenciamento empresarial.
                        </p>
                        
                        <p class="text-lg">
                            Trabalhamos com todo o ecossistema Laravel, incluindo <strong class="text-red-900">Eloquent ORM</strong>, 
                            <strong class="text-red-900">Blade Templates</strong>, <strong class="text-red-900">Laravel Queue</strong>, 
                            e integrações com bancos de dados relacionais (MySQL, PostgreSQL) e NoSQL. Implementamos autenticação robusta, 
                            autorização granular e sistemas de cache para máxima performance.
                        </p>
                        
                        <div class="bg-red-50 rounded-lg p-6 border-l-4 border-red-600">
                            <p class="text-lg">
                                Seguimos os <strong class="text-red-900">princípios SOLID</strong> e padrões de projeto consolidados, 
                                garantindo código manutenível e testável. Implementamos testes automatizados com <strong>PHPUnit</strong> 
                                e utilizamos ferramentas modernas de CI/CD para entregas contínuas e confiáveis.
                            </p>
                        </div>
                        
                        <p class="text-lg">
                            Nossa experiência inclui desenvolvimento de <strong class="text-red-900">APIs RESTful</strong> documentadas com Swagger, 
                            integração com serviços de terceiros, sistemas de notificações em tempo real, processamento de filas assíncronas, 
                            e implementação de microserviços com Laravel.
                        </p>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Laravel 8/9/10/11</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Eloquent ORM</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">APIs REST</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Blade</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Queue/Jobs</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">PHPUnit</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">MySQL/PostgreSQL</span>
                        <span class="px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-semibold">Redis</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12">Nossos Serviços Laravel</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Serviço 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Desenvolvimento de APIs RESTful</h3>
                    <p class="text-gray-600">
                        Criação de APIs robustas e escaláveis com autenticação JWT, versionamento, documentação completa e testes automatizados.
                    </p>
                </div>

                <!-- Serviço 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Sistemas E-commerce</h3>
                    <p class="text-gray-600">
                        Plataformas de e-commerce completas com carrinho de compras, gateway de pagamento, gestão de estoque e relatórios.
                    </p>
                </div>

                <!-- Serviço 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Dashboards e Painéis Administrativos</h3>
                    <p class="text-gray-600">
                        Interfaces administrativas intuitivas com gráficos interativos, relatórios em tempo real e gestão completa de dados.
                    </p>
                </div>

                <!-- Serviço 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Autenticação e Autorização</h3>
                    <p class="text-gray-600">
                        Sistemas seguros de login, controle de acesso baseado em roles e permissions, autenticação multi-fator e OAuth2.
                    </p>
                </div>

                <!-- Serviço 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Integrações de Sistemas</h3>
                    <p class="text-gray-600">
                        Integração com ERPs, CRMs, serviços de pagamento, APIs de terceiros e sincronização de dados entre plataformas.
                    </p>
                </div>

                <!-- Serviço 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-red-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Otimização de Performance</h3>
                    <p class="text-gray-600">
                        Cache estratégico, otimização de queries, filas assíncronas e melhorias arquiteturais para alta performance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tecnologias -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12">Tecnologias e Ferramentas</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Laravel 11</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Eloquent ORM</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Laravel Sanctum</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Laravel Horizon</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">MySQL/PostgreSQL</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Redis</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">Docker</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-red-900">PHPUnit/Pest</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="contato" class="py-20 bg-gradient-to-r from-red-900 to-orange-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold font-poppins text-white mb-6">Pronto para iniciar seu projeto Laravel?</h2>
            <p class="text-xl text-red-100 mb-8 max-w-2xl mx-auto">
                Entre em contato conosco e descubra como podemos criar soluções robustas e escaláveis com Laravel.
            </p>
            <a href="/#contato" class="bg-orange-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-orange-700 transition duration-300 inline-block">
                Fale com Nossa Equipe
            </a>
        </div>
    </section>

<?php require_once __DIR__ . '/footer.php'; ?>
