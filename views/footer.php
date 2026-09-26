    <!-- Rodapé -->
    <footer class="bg-secondary text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="https://www.linkedin.com/in/bladellano/" target="_blank" rel="noopener noreferrer"
                    class="bg-primary text-secondary px-4 py-2 rounded-full hover:bg-primary-dark transition duration-300 font-medium">LinkedIn</a>
                <a href="https://www.instagram.com/_caiodellano_/" target="_blank" rel="noopener noreferrer"
                    class="bg-primary text-secondary px-4 py-2 rounded-full hover:bg-primary-dark transition duration-300 font-medium">Instagram</a>
                <a href="https://github.com/bladellano/" target="_blank" rel="noopener noreferrer"
                    class="bg-primary text-secondary px-4 py-2 rounded-full hover:bg-primary-dark transition duration-300 font-medium">GitHub</a>
            </div>
            <div class="text-gray-300 text-sm mt-6 mb-4">
                <p><?php echo $translations['footer.address'] ?? 'Contato: +351 927 860 541'; ?></p>
                <p><?php echo $translations['footer.location'] ?? 'Rua Conselheiro Furtado dos Santos, n 73, Moraria, 1 andar. Alvaiázere, Leiria, Portugal'; ?></p>
            </div>
            <p class="text-gray-400 text-xs"><?php echo $translations['footer.text'] ?? '© 2025 CDNS Systems Ltda. Todos os direitos reservados.'; ?></p>
            <p class="mt-2">
                <a href="/privacy-policy" class="text-gray-500 hover:text-primary text-xs transition duration-300">Política de Privacidade</a>
                <span class="text-gray-600 mx-2 text-xs">·</span>
                <a href="/terms-of-service" class="text-gray-500 hover:text-primary text-xs transition duration-300">Termos de Serviço</a>
            </p>
        </div>
    </footer>

<script>
// Inicialização de traduções
let translations = <?php echo json_encode(isset($translations) ? ['currentLang' => $translations] : []); ?>;
</script>

<!--<script src="<?php echo $chatWhatsappUrl; ?>/socket.io/socket.io.js"></script>-->
<!--<script src="<?php echo $chatWhatsappUrl; ?>/widget.js"></script>-->

<script>
    window.CdnsChatConfig = {
        serverUrl: 'https://cdns-systems-cdns-chat-widget.ccuexx.easypanel.host',
        webhookId: 'd62195ac-2809-493b-a2bb-05df2c261394',
        position: 'bottom-right',
        primaryColor: '#1b901d',
        botName: 'Nina',
        welcomeMessage: 'Oi! 👋 Sou a Nina, sua assistente virtual. Como posso ajudar?',
        placeholder: 'Pergunte-me qualquer coisa...',
        buttonIcon: '🤖'
    };
</script>
<script src="https://cdns-systems-cdns-chat-widget.ccuexx.easypanel.host/socket.io/socket.io.js"></script>
<script src="https://cdns-systems-cdns-chat-widget.ccuexx.easypanel.host/widget.js"></script>

<script src="js/script.js"></script>
</body>
</html>
