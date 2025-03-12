<?php

use App\Controllers\HomeController;

$router = new Router();

// Define the home route
$router->get('/', [HomeController::class, 'index']);

// Add more routes here as needed