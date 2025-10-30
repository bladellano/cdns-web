<?php
/**
 * Flight PHP Framework Implementation for CDNS Systems
 */

// Require Composer autoloader
require 'vendor/autoload.php';

// Load environment variables from .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad(); // Doesn't throw an error if .env file doesn't exist

// Initialize Flight
Flight::path('app');

// Register the view engine
Flight::set('flight.views.path', __DIR__ . '/views');

// Load routes
require __DIR__ . '/src/routes.php';

// Start the application
Flight::start();
