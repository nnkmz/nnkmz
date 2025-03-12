<?php
require_once '../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Core\Router;

// Initialize the router
$router = new Router();

// Define routes
$router->get('/', [HomeController::class, 'index']);

// Handle the request
$router->resolve();