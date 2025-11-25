<?php require_once __DIR__ . '/header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-section relative min-h-[700px] flex items-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="images/banner-hero.png" alt="Banner Hero" class="w-full h-full object-cover">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center hero-content">
                
                <!-- Badge -->
                <div class="hero-badge inline-flex items-center gap-2 mb-6">
                    <span class="badge-dot"></span>
                    <span class="badge-text">Especialistas em Desenvolvimento Web</span>
                </div>

                <!-- Main Headline -->
                <h1 class="hero-title text-5xl md:text-6xl lg:text-7xl font-bold font-poppins text-white leading-tight mb-6">
                    Transformamos Suas Ideias em 
                    <span class="hero-highlight">Soluções Digitais</span> de Alto Impacto
                </h1>

                <!-- Subtitle -->
                <p class="hero-subtitle text-xl md:text-2xl text-gray-100 mb-8 max-w-3xl mx-auto">
                    Desenvolvimento web sob medida com <strong>Drupal, Laravel e tecnologias modernas</strong> — 
                    entregando performance, escalabilidade e resultados concretos para seu negócio.
                </p>

                <!-- Social Proof Mini -->
                <div class="hero-social-proof flex flex-wrap justify-center items-center gap-6 mb-10 text-gray-200">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-sm font-medium">+8 Anos de Experiência</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                        <span class="text-sm font-medium">Clientes como FIESC, Unicef, Riachuelo</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-medium">Código Limpo & Documentado</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="hero-cta flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#contato" class="cta-primary group">
                        <span>Transforme Sua Ideia em Realidade</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="#servicos" class="cta-secondary">
                        Ver Serviços
                    </a>
                </div>

            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="hero-decoration-1"></div>
        <div class="hero-decoration-2"></div>
    </section>

    <!-- Sobre Mim -->
    <section id="sobre" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <!-- Avatar Centralizado -->
            <div class="flex justify-center mb-12">
                <div class="about-avatar-container">
                    <img src="/images/caio-amarelo.png" alt="Foto de Perfil" class="about-avatar">
                    <div class="about-avatar-ring"></div>
                </div>
            </div>
            
            <!-- Conteúdo -->
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold font-poppins mb-6 text-center text-secondary">Sobre Mim</h2>
                <div class="about-content">
                    <p class="text-gray-600 mb-4">
                        Com mais de <strong class="text-primary">8 anos de experiência</strong>, minha paixão é transformar ideias em código limpo e funcional.
                        Sou especialista em <strong class="text-secondary">Drupal</strong> para sistemas de gerenciamento de conteúdo complexos e <strong class="text-secondary">Laravel</strong> para
                        aplicações back-end customizadas. Embora meu foco principal seja nessas tecnologias, também atuo com
                        Vue, PostgreSQL, MySQL, JavaScript, jQuery, Cypress e na implementação de APIs complexas.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Sou formado em <strong class="text-secondary">Sistemas de Informação</strong> com especialização em <strong class="text-secondary">Engenharia de Software</strong>, o que me
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
                    
                    <!-- Clientes Destaque -->
                    <div class="about-clients mt-8 p-6 bg-white rounded-xl border-2 border-gray-100">
                        <p class="text-center text-gray-600 mb-3">
                            <span class="text-secondary font-semibold">Projetos de Destaque com:</span>
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <span class="client-badge">FIESC</span>
                            <span class="client-badge">Unicef</span>
                            <span class="client-badge">Riachuelo</span>
                            <span class="client-badge">SEDUC/PA</span>
                            <span class="client-badge">TJ/PA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Serviços -->
    <section id="servicos" class="bg-secondary py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12 text-white">Serviços</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Serviço 1 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h16M8 13h8"></path>
                    </svg>
                    <a href="/drupal-development">
                        <h3 class="text-xl font-bold font-poppins mb-2 hover:text-primary transition duration-300">Desenvolvimento Drupal</h3>
                    </a>
                    <p class="text-gray-600">Criação de portais, intranets e sistemas complexos com a flexibilidade do
                        Drupal.</p>
                </div>
                <!-- Serviço 2 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M12 21v-2.5M4 7l2 1M4 7l2-1M4 7v2.5M12 2.5V5">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 21a9 9 0 110-18 9 9 0 010 18z"></path>
                    </svg>
                    <a href="/laravel-development">
                        <h3 class="text-xl font-bold font-poppins mb-2 hover:text-primary transition duration-300">Aplicações com Laravel</h3>
                    </a>
                    <p class="text-gray-600">APIs RESTful e sistemas web robustos utilizando o ecossistema poderoso do
                        Laravel.</p>
                </div>
                <!-- Serviço 3 -->
                <div
                    class="bg-white p-8 rounded-lg shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <a href="/frontend-development">
                        <h3 class="text-xl font-bold font-poppins mb-2 hover:text-primary transition duration-300">Interfaces Front-end</h3>
                    </a>
                    <p class="text-gray-600">Design responsivo e interativo com HTML, CSS, e JavaScript moderno
                        (Vue.js/React).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12 text-secondary">Depoimentos</h2>
            <div class="relative max-w-6xl mx-auto">
                <div class="overflow-hidden">
                    <div id="testimonial-track" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Depoimento 1 -->
                        <div class="testimonial-item w-full md:w-1/3 flex-shrink-0 px-3">
                            <div class="testimonial-card bg-white border-2 border-gray-100 p-6 rounded-xl h-full flex flex-col hover:border-primary transition-all duration-300 hover:shadow-xl">
                                <div class="flex items-center mb-4">
                                    <img src="/images/flavio.jpg" alt="Foto de Perfil" class="testimonial-avatar w-14 h-14 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white font-bold text-xl mr-4">
                                    <div>
                                        <p class="font-bold text-secondary">Flávio Salgado</p>
                                        <p class="text-sm text-gray-500">Engenheiro da Computação</p>
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <p class="text-gray-600 italic flex-grow">"Um grande desenvolvedor PHP, super habilidoso tanto no front-end com no back-end. Um verdadeiro DEV full stack. Profissional de excelente relacionamento com a equipe. Sempre se inovando. Escreve excelente códigos limpos. Super recomendo."</p>
                            </div>
                        </div>
                        <!-- Depoimento 2 -->
                        <div class="testimonial-item w-full md:w-1/3 flex-shrink-0 px-3">
                            <div class="testimonial-card bg-white border-2 border-gray-100 p-6 rounded-xl h-full flex flex-col hover:border-primary transition-all duration-300 hover:shadow-xl">
                                <div class="flex items-center mb-4">
                                    <img src="/images/italo.jpg" alt="Foto de Perfil" class="testimonial-avatar w-14 h-14 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white font-bold text-xl mr-4">
                                    <div>
                                        <p class="font-bold text-secondary">Ítalo Costa</p>
                                        <p class="text-sm text-gray-500">Desenvolvedor Full-Stack (PHP, JS, SQL)</p>
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <p class="text-gray-600 italic flex-grow">"O Caio é um profissional diferenciado, aprende rápido, não tem medo de desafios, proativo, dedicado e sabe trabalhar em equipe. Sempre atento as novas ferramentas e tecnologias, não se furtava em compartilhar seus conhecimentos e estudos. Trabalhar com o Caio vale muito a pena."</p>
                            </div>
                        </div>
                        <!-- Depoimento 3 -->
                        <div class="testimonial-item w-full md:w-1/3 flex-shrink-0 px-3">
                            <div class="testimonial-card bg-white border-2 border-gray-100 p-6 rounded-xl h-full flex flex-col hover:border-primary transition-all duration-300 hover:shadow-xl">
                                <div class="flex items-center mb-4">
                                    <img src="/images/cleice.jpg" alt="Foto de Perfil" class="testimonial-avatar w-14 h-14 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white font-bold text-xl mr-4">
                                    <div>
                                        <p class="font-bold text-secondary">Cleice Souza</p>
                                        <p class="text-sm text-gray-500">Analista de Teste | Quality Assurance</p>
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <p class="text-gray-600 italic flex-grow">"Caio possui um excelente perfil de desenvolvedor porque ele é uma pessoa extremante centrada, competente, dedicado e super tranquilo. Possui ótimas habilidades para trabalhar em projetos alta e baixa criticidade porque ele tem uma alta concentração em resolver problemas, sem falar no raciocínio lógico que ele desenvolve de forma rápida para solucionar problemas em aplicações web ou desktop. Trabalho com Caio e super recomendo o seu excelente trabalho."</p>
                            </div>
                        </div>
                        <!-- Depoimento 4 -->
                        <!--  
                        <div class="testimonial-item w-full md:w-1/3 flex-shrink-0 px-3">
                            <div class="testimonial-card bg-white border-2 border-gray-100 p-6 rounded-xl h-full flex flex-col hover:border-primary transition-all duration-300 hover:shadow-xl">
                                <div class="flex items-center mb-4">
                                    <div class="testimonial-avatar w-14 h-14 rounded-full bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white font-bold text-xl mr-4">
                                        PM
                                    </div>
                                    <div>
                                        <p class="font-bold text-secondary">Pedro Martins</p>
                                        <p class="text-sm text-gray-500">Fundador da E-Shop Express</p>
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                </div>
                                <p class="text-gray-600 italic flex-grow">"Ficamos muito satisfeitos com a solução de e-commerce desenvolvida. A plataforma é robusta, escalável e fácil de gerenciar. Excelente parceria!"</p>
                            </div>
                        </div> -->
                    
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
    <section id="contato" class="bg-secondary py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold font-poppins text-center mb-12 text-white">Entre em Contato</h2>
            <div class="max-w-2xl mx-auto bg-secondary-dark p-8 rounded-lg shadow-md">
                <form action="https://formspree.io/f/xgvnpwbr" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-200 font-bold mb-2">Nome</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-200 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-200 font-bold mb-2">Mensagem</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 border border-gray-700 bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-primary text-secondary font-bold py-3 px-8 rounded-lg hover:bg-primary-dark transition duration-300 shadow-lg hover:shadow-xl">
                            Enviar Mensagem
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/footer.php'; ?>
