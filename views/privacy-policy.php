<?php require_once __DIR__ . '/header.php'; ?>

<!-- Política de Privacidade -->
<main class="bg-gray-50 min-h-screen">

    <!-- Hero -->
    <section class="bg-secondary text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">
                Política de Privacidade
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                A sua privacidade é importante para nós. Esta política descreve como recolhemos, utilizamos e protegemos os seus dados pessoais.
            </p>
            <p class="text-gray-400 text-sm mt-4">Última atualização: <?php echo date('d \d\e F \d\e Y', strtotime('2026-09-26')); ?></p>
        </div>
    </section>

    <!-- Conteúdo -->
    <section class="py-16">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="bg-white rounded-2xl shadow-sm p-8 md:p-12 space-y-12">

                <!-- 1. Responsável -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">1</span>
                        Responsável pelo Tratamento de Dados
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        O responsável pelo tratamento dos seus dados pessoais é:
                    </p>
                    <div class="bg-gray-50 rounded-xl p-5 border border-gray-100">
                        <p class="font-semibold text-secondary">CDNS Systems Ltda</p>
                        <p class="text-gray-600 text-sm mt-1">Rua Conselheiro Furtado dos Santos, n.º 73, Moreira, 1.º Andar</p>
                        <p class="text-gray-600 text-sm">Alvaiázere, Leiria, Portugal</p>
                        <p class="text-gray-600 text-sm mt-2">
                            <strong>Telefone:</strong> +351 927 860 541<br>
                            <strong>E-mail:</strong>
                            <a href="mailto:bladellano@gmail.com" class="text-primary hover:underline">bladellano@gmail.com</a>
                        </p>
                    </div>
                </div>

                <!-- 2. Dados Recolhidos -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">2</span>
                        Dados Pessoais Recolhidos
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Recolhemos apenas os dados que nos são fornecidos voluntariamente através do formulário de contacto, bem como dados técnicos de navegação:
                    </p>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span><strong>Nome completo</strong> — para identificação no contacto</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span><strong>Endereço de e-mail</strong> — para resposta à sua mensagem</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span><strong>URL do website</strong> — quando aplicável ao projeto</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span><strong>Mensagem / descrição do projeto</strong> — conteúdo da solicitação</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span><strong>Endereço IP e dados técnicos</strong> — para fins de segurança e análise de tráfego</span>
                        </li>
                    </ul>
                </div>

                <!-- 3. Finalidade e Base Legal -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">3</span>
                        Finalidade e Base Legal do Tratamento
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 font-semibold text-secondary rounded-tl-lg">Finalidade</th>
                                    <th class="px-4 py-3 font-semibold text-secondary rounded-tr-lg">Base Legal (RGPD)</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-gray-600">Responder a pedidos de contacto e orçamentos</td>
                                    <td class="px-4 py-3 text-gray-600">Execução de pré-contrato — Art. 6.º, n.º 1, b)</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-gray-600">Segurança, prevenção de fraude e spam</td>
                                    <td class="px-4 py-3 text-gray-600">Interesse legítimo — Art. 6.º, n.º 1, f)</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 text-gray-600">Análise de tráfego e melhoria do site</td>
                                    <td class="px-4 py-3 text-gray-600">Consentimento — Art. 6.º, n.º 1, a)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 4. Partilha de Dados -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">4</span>
                        Partilha de Dados com Terceiros
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Não vendemos nem cedemos os seus dados a terceiros para fins comerciais. Os dados são partilhados apenas com prestadores estritamente necessários ao funcionamento do site:
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 bg-gray-50 rounded-lg p-4 border border-gray-100">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span class="text-gray-600 text-sm"><strong>Google Analytics / Tag Manager</strong> — análise de tráfego (EUA; cláusulas contratuais padrão aplicadas)</span>
                        </div>
                        <div class="flex items-start gap-3 bg-gray-50 rounded-lg p-4 border border-gray-100">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span class="text-gray-600 text-sm"><strong>Google reCAPTCHA</strong> — proteção contra spam e bots (EUA; cláusulas contratuais padrão aplicadas)</span>
                        </div>
                        <div class="flex items-start gap-3 bg-gray-50 rounded-lg p-4 border border-gray-100">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            <span class="text-gray-600 text-sm"><strong>Serviço de e-mail (SMTP)</strong> — envio das mensagens de contacto</span>
                        </div>
                    </div>
                </div>

                <!-- 5. Conservação -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">5</span>
                        Prazo de Conservação dos Dados
                    </h2>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Dados de formulário de contacto: até <strong>12 meses</strong> após o último contacto ou término da relação comercial.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                            <span>Registos de segurança (logs): até <strong>90 dias</strong>.</span>
                        </li>
                    </ul>
                </div>

                <!-- 6. Os Seus Direitos -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">6</span>
                        Os Seus Direitos (RGPD)
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-5">
                        Ao abrigo do Regulamento Geral sobre a Proteção de Dados (RGPD — Regulamento UE 2016/679), tem os seguintes direitos:
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">✅ Acesso</p>
                            <p class="text-gray-600 text-sm">Solicitar uma cópia dos dados que detemos sobre si.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">✏️ Retificação</p>
                            <p class="text-gray-600 text-sm">Corrigir dados imprecisos ou incompletos.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">🗑️ Apagamento</p>
                            <p class="text-gray-600 text-sm">Solicitar a eliminação dos seus dados pessoais.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">⛔ Oposição</p>
                            <p class="text-gray-600 text-sm">Opor-se ao tratamento baseado em interesse legítimo.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">🔒 Limitação</p>
                            <p class="text-gray-600 text-sm">Restringir o tratamento em determinadas circunstâncias.</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <p class="font-semibold text-secondary text-sm mb-1">📦 Portabilidade</p>
                            <p class="text-gray-600 text-sm">Receber os seus dados em formato estruturado e legível.</p>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mt-5">
                        Para exercer qualquer destes direitos, contacte-nos por e-mail:
                        <a href="mailto:bladellano@gmail.com" class="text-primary hover:underline font-medium">bladellano@gmail.com</a>.
                        Responderemos no prazo máximo de <strong>30 dias</strong>.
                    </p>
                    <p class="text-gray-600 text-sm mt-2">
                        Tem ainda o direito de apresentar reclamação à autoridade competente em Portugal:
                        <a href="https://www.cnpd.pt" target="_blank" rel="noopener noreferrer" class="text-primary hover:underline">CNPD — Comissão Nacional de Proteção de Dados</a>.
                    </p>
                </div>

                <!-- 7. Cookies -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">7</span>
                        Cookies
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Este site utiliza cookies para melhorar a sua experiência e para análise de tráfego. Pode gerir as suas preferências através das definições do seu navegador.
                    </p>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 font-semibold text-secondary">Cookie</th>
                                    <th class="px-4 py-3 font-semibold text-secondary">Tipo</th>
                                    <th class="px-4 py-3 font-semibold text-secondary">Finalidade</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 font-mono text-xs text-gray-600">_ga, _gid</td>
                                    <td class="px-4 py-3 text-gray-600">Analítico</td>
                                    <td class="px-4 py-3 text-gray-600">Google Analytics — análise de tráfego</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 font-mono text-xs text-gray-600">_gtm_*</td>
                                    <td class="px-4 py-3 text-gray-600">Analítico</td>
                                    <td class="px-4 py-3 text-gray-600">Google Tag Manager — gestão de tags</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-3 font-mono text-xs text-gray-600">_grecaptcha</td>
                                    <td class="px-4 py-3 text-gray-600">Segurança</td>
                                    <td class="px-4 py-3 text-gray-600">Google reCAPTCHA — proteção contra bots</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 8. Segurança -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">8</span>
                        Segurança dos Dados
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Adotamos medidas técnicas e organizacionais adequadas para proteger os seus dados pessoais contra acesso não autorizado, alteração, divulgação ou destruição — incluindo encriptação das comunicações (HTTPS), controlo de acesso e monitorização de segurança.
                    </p>
                </div>

                <!-- 9. Alterações -->
                <div>
                    <h2 class="text-2xl font-bold text-secondary font-poppins mb-4 flex items-center gap-3">
                        <span class="bg-primary text-secondary w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">9</span>
                        Alterações a Esta Política
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Podemos atualizar esta Política de Privacidade periodicamente. Qualquer alteração relevante será comunicada através desta página, com indicação da data de última atualização. Recomendamos que a consulte regularmente.
                    </p>
                </div>

                <!-- CTA -->
                <div class="bg-secondary rounded-2xl p-8 text-center text-white">
                    <h3 class="text-xl font-bold font-poppins mb-2">Tem alguma questão sobre privacidade?</h3>
                    <p class="text-gray-300 mb-5">Entre em contacto connosco e responderemos com a maior brevidade possível.</p>
                    <a href="mailto:bladellano@gmail.com"
                        class="inline-block bg-primary text-secondary px-6 py-3 rounded-full font-semibold hover:bg-primary-dark transition duration-300">
                        bladellano@gmail.com
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/footer.php'; ?>
