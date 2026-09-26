<?php

/**
 * Define application routes
 */

// Home page route
Flight::route('/', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->index();
});

// Contact form submission route
Flight::route('POST /submit-contact', function() {
  $controller = new CDNS\Site\Controllers\SiteController();
  $controller->submitContactForm();
});

// Drupal Development page route
Flight::route('/drupal-development', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->drupalDevelopment();
});

// Laravel Development page route
Flight::route('/laravel-development', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->laravelDevelopment();
});

// Frontend Development page route
Flight::route('/frontend-development', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->frontendDevelopment();
});

// Privacy Policy page route
Flight::route('/privacy-policy', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->privacyPolicy();
});

// Terms of Service page route
Flight::route('/terms-of-service', function() {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->termsOfService();
});

// Language-specific home page route
Flight::route('/@lang', function($lang) {
    $controller = new CDNS\Site\Controllers\SiteController();
    $controller->index($lang);
});

// 404 handler for routes that don't match any defined patterns
Flight::map('notFound', function() {
    // You can customize this to show a proper 404 page
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>404 - Page Not Found</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
            h1 { font-size: 36px; margin-bottom: 20px; }
            p { font-size: 18px; margin-bottom: 20px; }
            a { color: #0678BE; text-decoration: none; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <h1>404 - Page Not Found</h1>
        <p>The page you are looking for does not exist.</p>
        <p><a href="/">Return to Home Page</a></p>
    </body>
    </html>';
    return false;
});
