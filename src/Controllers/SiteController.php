<?php

namespace CDNS\Site\Controllers;

use Flight;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SiteController
{
  /**
   * Display the home page
   *
   * @param string $lang Language code (default: en)
   * @return void
   */
  public function index($lang = 'en')
  {
    // Validate language - only EN and PT are supported
    $validLanguages = ['pt', 'en'];
    if (!in_array($lang, $validLanguages)) {
      $lang = 'en'; // Default to English if invalid language
    }

    // Load language file
    $langFile = __DIR__ . '/../../languages/' . $lang . '.json';
    $translations = [];

    if (file_exists($langFile)) {
      $translations = json_decode(file_get_contents($langFile), true);
    }

    // Check for success message in session
    $successMessage = Flight::request()->query->success ?? null;

    // Render the view with translations
    Flight::view()->set('translations', $translations);
    Flight::view()->set('currentLang', $lang);
    Flight::view()->set('successMessage', $successMessage);
    Flight::view()->set('chatWhatsappUrl', getenv('CHAT_WHATSAPP_URL'));
    Flight::render('home');
  }

  /**
   * Display the Drupal Development page
   *
   * @return void
   */
  public function drupalDevelopment()
  {
    // Set required variables for header/footer
    Flight::view()->set('currentLang', 'pt-BR');
    Flight::view()->set('chatWhatsappUrl', getenv('CHAT_WHATSAPP_URL'));
    Flight::render('drupal-development');
  }

  /**
   * Display the Laravel Development page
   *
   * @return void
   */
  public function laravelDevelopment()
  {
    // Set required variables for header/footer
    Flight::view()->set('currentLang', 'pt-BR');
    Flight::view()->set('chatWhatsappUrl', getenv('CHAT_WHATSAPP_URL'));
    Flight::render('laravel-development');
  }

  /**
   * Display the Frontend Development page
   *
   * @return void
   */
  public function frontendDevelopment()
  {
    // Set required variables for header/footer
    Flight::view()->set('currentLang', 'pt-BR');
    Flight::view()->set('chatWhatsappUrl', getenv('CHAT_WHATSAPP_URL'));
    Flight::render('frontend-development');
  }

  /**
   * Handle contact form submission
   *
   * @return void
   */
  public function submitContactForm()
  {
    // CORREÇÃO 1: Rate Limiting
    if (!$this->checkRateLimit()) {
      Flight::json([
          'success' => false,
          'errors' => ['rate_limit' => 'Too many requests. Please try again in 1 hour.']
      ], 429);
      return;
    }

    $request = Flight::request();
    $response = [];
    $errors = [];

    // CORREÇÃO 2: Verificar Honeypot
    $honeypot = $request->data->website_url ?? '';
    if (!empty($honeypot)) {
      // Bot detectado - registrar mas não avisar
      $this->logSecurityEvent('bot_detected_honeypot', [
          'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
          'honeypot_value' => $honeypot
      ]);

      // Simular sucesso para não alertar o bot
      sleep(2);
      Flight::json(['success' => true, 'message' => 'Form submitted']);
      return;
    }

    // CORREÇÃO 3: Sanitizar e validar inputs
    $name = $this->sanitizeInput($request->data->name ?? '');
    $email = $this->sanitizeEmail($request->data->email ?? '');
    $website = $this->sanitizeInput($request->data->website ?? '');
    $drupalVersion = $this->sanitizeInput($request->data->drupal_version ?? '');
    $message = $this->sanitizeInput($request->data->message ?? '');
    $recaptchaResponse = $request->data->{'g-recaptcha-response'} ?? '';

    // Validate reCAPTCHA
    if (empty($recaptchaResponse)) {
      $errors['recaptcha'] = 'Please complete the reCAPTCHA verification';
    } else {
      // Verify reCAPTCHA with Google / reCAPTCHA Enterprise
      $expectedAction = $request->data->recaptcha_action ?? null;
      $recaptchaVerify = $this->verifyRecaptcha($recaptchaResponse, $expectedAction);
      if (!$recaptchaVerify) {
        $errors['recaptcha'] = 'reCAPTCHA verification failed';
      }
    }

    // CORREÇÃO 4: Validações melhoradas
    // Validar nome
    if (empty($name) || strlen($name) < 2) {
      $errors['name'] = 'Name is required (minimum 2 characters)';
    } elseif (strlen($name) > 100) {
      $errors['name'] = 'Name is too long (maximum 100 characters)';
    }

    // Validar email
    if ($email === false) {
      $errors['email'] = 'Invalid email address';
    } elseif (empty($email)) {
      $errors['email'] = 'Email is required';
    } elseif ($this->isDisposableEmail($email)) {
      $errors['email'] = 'Disposable email addresses are not allowed';
    }

    // Validar mensagem
    if (!empty($message) && strlen($message) > 2000) {
      $errors['message'] = 'Message is too long (maximum 2000 characters)';
    }

    // If there are errors, return them
    if (!empty($errors)) {
      $this->logSecurityEvent('form_validation_failed', [
          'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
          'errors' => array_keys($errors)
      ]);

      Flight::json(['success' => false, 'errors' => $errors], 400);
      return;
    }

    // Prepare email content
    $emailContent = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Website to work:</strong> {$website}</p>
            <p><strong>Drupal Version:</strong> {$drupalVersion}</p>
            <p><strong>Message:</strong> {$message}</p>
            <hr>
            <p><small>IP: {$_SERVER['REMOTE_ADDR']}</small></p>
            <p><small>User Agent: {$_SERVER['HTTP_USER_AGENT']}</small></p>
        ";

    // Send email to bladellano@gmail.com
    $adminEmailSent = $this->sendEmail(
        $_ENV['SMTP_FROM_EMAIL'],
        'New Contact Form Submission - CDNS Systems',
        $emailContent
    );

    // Send confirmation email to user
    $userEmailContent = "
            <h2>Thank you for contacting us!</h2>
            <p>We have received your message and will get back to you as soon as possible.</p>
            <p>Here's a copy of your submission:</p>
            <hr>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Website to work:</strong> {$website}</p>
            <p><strong>Drupal Version:</strong> {$drupalVersion}</p>
            <p><strong>Message:</strong> {$message}</p>
            <hr>
            <p>If you have any questions, please reply to this email.</p>
            <p>Best regards,<br>CDNS Systems Ltda</p>
        ";

    $userEmailSent = $this->sendEmail(
        $email,
        'Your CDNS Systems Contact Form Submission',
        $userEmailContent
    );

    // Send notification to RocketChat webhook
    #$webhookSent = $this->sendRocketChatNotification($name, $email, $website, $drupalVersion, $message);

    // Log successful submission
    $this->logSecurityEvent('form_submitted_success', [
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'email' => $email
    ]);

    // For AJAX requests, return JSON response
    Flight::json([
        'success' => true,
        'message' => 'We will contact you as soon as possible. A copy of this form has been sent to your email.'
    ]);
  }

  /**
   * CORREÇÃO: Sanitize input to prevent email header injection and XSS
   *
   * @param string $input Raw input
   * @return string Sanitized input
   */
  private function sanitizeInput($input)
  {
    // Remove quebras de linha que podem causar header injection
    $input = str_replace(["\r", "\n", "%0a", "%0d", "\0"], '', $input);

    // Remove caracteres de controle Unicode
    $input = preg_replace('/[\x00-\x1F\x7F]/u', '', $input);

    // Escape HTML para prevenir XSS
    $input = htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');

    return $input;
  }

  /**
   * CORREÇÃO: Validate and sanitize email specifically
   *
   * @param string $email Raw email
   * @return string|false Sanitized email or false if invalid
   */
  private function sanitizeEmail($email)
  {
    $email = trim($email);

    // Remove qualquer caractere que não seja válido em email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }

    // Previne header injection em emails
    if (preg_match('/[\r\n\0]/', $email)) {
      return false;
    }

    return strtolower($email);
  }

  /**
   * CORREÇÃO: Check if email is from a disposable domain
   *
   * @param string $email Email to check
   * @return bool True if disposable
   */
  private function isDisposableEmail($email)
  {
    $disposableDomains = [
        'tempmail.com', '10minutemail.com', 'guerrillamail.com',
        'mailinator.com', 'trashmail.com', 'throwaway.email',
        'yopmail.com', 'maildrop.cc', 'getnada.com',
        'temp-mail.org', 'fakeinbox.com', 'sharklasers.com'
    ];

    $emailParts = explode('@', $email);
    if (count($emailParts) !== 2) {
      return false;
    }

    $domain = strtolower($emailParts[1]);
    return in_array($domain, $disposableDomains);
  }

  /**
   * CORREÇÃO: Rate limiting to prevent spam
   *
   * @return bool True if allowed, false if rate limit exceeded
   */
  private function checkRateLimit()
  {
    $rateLimitFile = sys_get_temp_dir() . '/site_rate_limit.json';
    $maxAttempts = 3; // Máximo 3 envios
    $decayMinutes = 60; // Por hora
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $now = time();

    // Carregar dados de rate limit
    $data = [];
    if (file_exists($rateLimitFile)) {
      $content = file_get_contents($rateLimitFile);
      $data = json_decode($content, true) ?? [];
    }

    // Limpar entradas antigas (mais de 1 hora)
    $data = array_filter($data, function($entry) use ($now, $decayMinutes) {
      return ($now - $entry['time']) < ($decayMinutes * 60);
    });

    // Verificar se IP excedeu limite
    $ipAttempts = array_filter($data, function($entry) use ($ip) {
      return $entry['ip'] === $ip;
    });

    if (count($ipAttempts) >= $maxAttempts) {
      $this->logSecurityEvent('rate_limit_exceeded', [
          'ip' => $ip,
          'attempts' => count($ipAttempts)
      ]);
      return false; // Bloqueado
    }

    // Registrar nova tentativa
    $data[] = ['ip' => $ip, 'time' => $now];

    // Salvar dados atualizados
    file_put_contents($rateLimitFile, json_encode(array_values($data)));

    return true; // Permitido
  }

  /**
   * CORREÇÃO: Log security events
   *
   * @param string $type Event type
   * @param array $data Event data
   * @return void
   */
  private function logSecurityEvent($type, $data)
  {
    $logDir = __DIR__ . '/../../logs';
    if (!is_dir($logDir)) {
      mkdir($logDir, 0755, true);
    }

    $logFile = $logDir . '/security.log';
    $entry = [
        'timestamp' => date('Y-m-d H:i:s'),
        'type' => $type,
        'data' => $data
    ];

    file_put_contents($logFile, json_encode($entry) . "\n", FILE_APPEND);
  }

  /**
   * Send email using PHPMailer
   *
   * @param string $to Recipient email
   * @param string $subject Email subject
   * @param string $body Email body (HTML)
   * @return bool Whether the email was sent successfully
   */
  private function sendEmail($to, $subject, $body)
  {
    // CORREÇÃO: Validação extra do destinatário
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
      error_log('Invalid recipient email: ' . $to);
      return false;
    }

    $mail = new PHPMailer(true);

    try {
      // Server settings
      $mail->isSMTP();
      $mail->Host = $_ENV['SMTP_HOST'] ?? '';
      $mail->SMTPAuth = true;
      $mail->Username = $_ENV['SMTP_USERNAME'] ?? '';
      $mail->Password = $_ENV['SMTP_PASSWORD'] ?? '';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = $_ENV['SMTP_PORT'] ?? 587;

      // CORREÇÃO: Timeout para prevenir DoS
      $mail->Timeout = 10;

      // CORREÇÃO: Charset para prevenir encoding issues
      $mail->CharSet = PHPMailer::CHARSET_UTF8;

      // Recipients
      $mail->setFrom($_ENV['SMTP_FROM_EMAIL'] ?? 'bladellano@gmail.com', $_ENV['SMTP_FROM_NAME'] ?? 'CDNS Systems');
      $mail->addAddress($to);
      $mail->addReplyTo($_ENV['SMTP_FROM_EMAIL'] ?? 'bladellano@gmail.com', $_ENV['SMTP_FROM_NAME'] ?? 'CDNS Systems');

      // Content
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = $body;

      // CORREÇÃO: Texto alternativo para clientes que não suportam HTML
      $mail->AltBody = strip_tags($body);

      $mail->send();
      return true;
    } catch (Exception $e) {
      // Log the error
      error_log('Email could not be sent. Mailer Error: ' . $mail->ErrorInfo);

      $this->logSecurityEvent('email_send_failed', [
          'to' => $to,
          'error' => $mail->ErrorInfo
      ]);

      return false;
    }
  }

  /**
   * Send notification to RocketChat webhook
   *
   * @param string $name Name from the form
   * @param string $email Email from the form
   * @param string $website Website from the form
   * @param string $drupalVersion Drupal version from the form
   * @param string $message Message from the form
   * @return bool Whether the notification was sent successfully
   */
  private function sendRocketChatNotification($name, $email, $website, $drupalVersion, $message)
  {
    $webhookUrl = $_ENV['ROCKETCHAT_WEBHOOK_URL'] ?? '';

    if (empty($webhookUrl) || $webhookUrl === 'webhook') {
      return true; // Skip if not configured
    }

    $payload = [
        'alias' => 'CDNS Systems',
        'emoji' => ':money:',
        'avatar' => 'https://cdnssystems.com.br/images/apple-icon-76x76.png',
        'text' => "Name: {$name}\nEmail: {$email}\nWebsite: {$website}\nDrupal Version: {$drupalVersion}\nMessage: {$message}"
    ];

    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5); // CORREÇÃO: Timeout de 5 segundos
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode >= 200 && $httpCode < 300) {
      return true;
    } else {
      error_log('Failed to send RocketChat notification. HTTP code: ' . $httpCode);
      return false;
    }
  }

  /**
   * Verify reCAPTCHA response with Google
   *
   * @param string $recaptchaResponse The reCAPTCHA response token from the client
   * @return bool Whether the reCAPTCHA verification was successful
   */
  private function verifyRecaptcha($recaptchaResponse, $expectedAction = null)
  {
    // Try reCAPTCHA Enterprise first if configured
    $enterpriseApiKey = $_ENV['RECAPTCHA_ENTERPRISE_API_KEY'] ?? '';
    $enterpriseProject = $_ENV['RECAPTCHA_ENTERPRISE_PROJECT'] ?? '';
    $enterpriseSiteKey = $_ENV['RECAPTCHA_ENTERPRISE_SITE_KEY'] ?? '';

    if (!empty($enterpriseApiKey) && !empty($enterpriseProject) && !empty($enterpriseSiteKey)) {
      $enterpriseUrl = sprintf(
        'https://recaptchaenterprise.googleapis.com/v1/projects/%s/assessments?key=%s',
        rawurlencode($enterpriseProject),
        rawurlencode($enterpriseApiKey)
      );

      $payload = [
        'event' => [
          'token' => $recaptchaResponse,
          'siteKey' => $enterpriseSiteKey,
        ]
      ];
      if (!empty($expectedAction)) {
        $payload['event']['expectedAction'] = $expectedAction;
      }

      $options = [
        'http' => [
          'header' => "Content-Type: application/json\r\n",
          'method' => 'POST',
          'content' => json_encode($payload),
          'timeout' => 10
        ]
      ];

      $context = stream_context_create($options);
      $result = @file_get_contents($enterpriseUrl, false, $context);
      if ($result === false) {
        error_log('Failed to verify reCAPTCHA Enterprise: Unable to connect to Google API');
        // Do not fallback automatically here; consider this a failure
        return false;
      }

      $responseData = json_decode($result, true);

      // Validate tokenProperties.valid
      $tokenValid = $responseData['tokenProperties']['valid'] ?? false;
      if (!$tokenValid) {
        $invalidReason = $responseData['tokenProperties']['invalidReason'] ?? 'unknown';
        error_log('reCAPTCHA Enterprise token invalid: ' . $invalidReason);
        $this->logSecurityEvent('recaptcha_enterprise_failed', [
          'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
          'reason' => $invalidReason
        ]);
        return false;
      }

      // Validate action if provided
      if (!empty($expectedAction)) {
        $action = $responseData['tokenProperties']['action'] ?? '';
        if (strcasecmp($action, $expectedAction) !== 0) {
          error_log('reCAPTCHA Enterprise action mismatch: expected ' . $expectedAction . ', got ' . $action);
          $this->logSecurityEvent('recaptcha_enterprise_action_mismatch', [
            'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
            'expected' => $expectedAction,
            'actual' => $action
          ]);
          return false;
        }
      }

      // Optionally you can evaluate risk score (0.0 to 1.0). We'll accept >= 0.3 by default.
      $riskScore = $responseData['riskAnalysis']['score'] ?? 0.0;
      if ($riskScore < 0.3) {
        error_log('reCAPTCHA Enterprise low risk score: ' . $riskScore);
        $this->logSecurityEvent('recaptcha_enterprise_low_score', [
          'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
          'score' => $riskScore
        ]);
        return false;
      }

      return true;
    }

    // Enterprise-only: if not configured, fail fast
    error_log('reCAPTCHA Enterprise is not configured (missing API key, project, or site key)');
    $this->logSecurityEvent('recaptcha_enterprise_not_configured', [
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
    ]);
    return false;
  }
}