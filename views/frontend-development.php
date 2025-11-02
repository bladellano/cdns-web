<?php require_once __DIR__ . '/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative py-32 bg-gradient-to-br from-purple-900 via-indigo-800 to-blue-900">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-bold font-poppins text-white mb-6">
                    Desenvolvimento Front-end
                </h1>
                <p class="text-xl md:text-2xl text-purple-100 mb-8">
                    Interfaces modernas, responsivas e interativas que encantam usuários
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="#servicos" class="bg-orange-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-orange-700 transition duration-300">
                        Nossos Serviços
                    </a>
                    <a href="#contato" class="bg-white text-purple-900 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">
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
                <h2 class="text-3xl font-bold font-poppins mb-6 text-center">Por que investir em Front-end de qualidade?</h2>
                <p class="text-lg text-gray-700 mb-4 text-center">
                    O front-end é a primeira impressão que seus usuários têm do seu produto. Uma interface bem projetada 
                    não apenas atrai visualmente, mas também proporciona uma experiência fluida, intuitiva e acessível, 
                    convertendo visitantes em clientes satisfeitos.
                </p>
            </div>
        </div>
    </section>

    <!-- Nossa Expertise -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-purple-50">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto">
                <div class="bg-white rounded-xl shadow-xl p-8 md:p-12 border-l-4 border-orange-600">
                    <h2 class="text-3xl font-bold font-poppins mb-8 text-gray-900">Nossa Expertise em Front-end</h2>
                    
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <p class="text-lg">
                            Desenvolvemos interfaces modernas e responsivas utilizando as mais recentes tecnologias e frameworks do mercado. 
                            Nossa expertise abrange desde <strong class="text-purple-900">HTML5 semântico</strong> e <strong class="text-purple-900">CSS3</strong> 
                            até frameworks JavaScript modernos como <strong class="text-purple-900">Vue.js</strong> e <strong class="text-purple-900">React</strong>.
                        </p>
                        
                        <p class="text-lg">
                            Trabalhamos com pré-processadores CSS como <strong class="text-purple-900">SCSS</strong> e <strong class="text-purple-900">Less</strong>, 
                            frameworks de UI como <strong class="text-purple-900">Tailwind CSS</strong> e <strong class="text-purple-900">Bootstrap</strong>, 
                            além de bibliotecas de componentes robustas. Implementamos design systems consistentes e componentizados para projetos escaláveis.
                        </p>
                        
                        <div class="bg-purple-50 rounded-lg p-6 border-l-4 border-purple-600">
                            <p class="text-lg">
                                Seguimos as melhores práticas de <strong class="text-purple-900">acessibilidade (WCAG)</strong>, 
                                <strong class="text-purple-900">performance web</strong> e <strong class="text-purple-900">SEO técnico</strong>. 
                                Garantimos que todas as interfaces sejam responsivas, otimizadas para diferentes dispositivos e navegadores, 
                                com carregamento rápido e experiência fluida.
                            </p>
                        </div>
                        
                        <p class="text-lg">
                            Nossa experiência inclui desenvolvimento de <strong class="text-purple-900">Single Page Applications (SPAs)</strong>, 
                            interfaces progressivas (PWA), animações e micro-interações, integração com APIs RESTful e GraphQL, 
                            gerenciamento de estado com Vuex/Pinia ou Redux, e testes automatizados de componentes.
                        </p>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">HTML5</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">CSS3/SCSS</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">JavaScript ES6+</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">Vue.js</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">React</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">Tailwind CSS</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">TypeScript</span>
                        <span class="px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-semibold">Responsive Design</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12">Nossos Serviços Front-end</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Serviço 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Design Responsivo</h3>
                    <p class="text-gray-600">
                        Interfaces que se adaptam perfeitamente a qualquer dispositivo, desde smartphones até desktops, garantindo experiência consistente.
                    </p>
                </div>

                <!-- Serviço 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Single Page Applications</h3>
                    <p class="text-gray-600">
                        Desenvolvimento de SPAs modernas com Vue.js ou React, proporcionando navegação fluida e experiência similar a aplicativos nativos.
                    </p>
                </div>

                <!-- Serviço 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">UI/UX Implementation</h3>
                    <p class="text-gray-600">
                        Implementação pixel-perfect de designs, garantindo fidelidade ao protótipo e atenção aos mínimos detalhes visuais.
                    </p>
                </div>

                <!-- Serviço 4 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Progressive Web Apps</h3>
                    <p class="text-gray-600">
                        Desenvolvimento de PWAs que funcionam offline, são instaláveis e oferecem experiência de app nativo no navegador.
                    </p>
                </div>

                <!-- Serviço 5 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Otimização de Performance</h3>
                    <p class="text-gray-600">
                        Análise e otimização de performance, lazy loading, code splitting, compressão de assets e melhoria dos Core Web Vitals.
                    </p>
                </div>

                <!-- Serviço 6 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold font-poppins mb-3">Acessibilidade Web</h3>
                    <p class="text-gray-600">
                        Implementação de recursos de acessibilidade seguindo WCAG 2.1, garantindo que seu site seja usável por todos.
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
                    <p class="font-bold text-purple-900">Vue.js 3</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">React</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">TypeScript</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">Tailwind CSS</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">SCSS/Less</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">Webpack/Vite</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">Jest/Vitest</p>
                </div>
                <div class="text-center p-4 bg-gray-50 rounded-lg">
                    <p class="font-bold text-purple-900">Cypress</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="contato" class="py-20 bg-gradient-to-r from-purple-900 to-indigo-900">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold font-poppins text-white mb-6">Pronto para criar interfaces incríveis?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
                Entre em contato conosco e vamos desenvolver front-ends modernos, responsivos e que encantam usuários.
            </p>
            <a href="/#contato" class="bg-orange-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-orange-700 transition duration-300 inline-block">
                Fale com Nossa Equipe
            </a>
        </div>
    </section>

<?php require_once __DIR__ . '/footer.php'; ?>
