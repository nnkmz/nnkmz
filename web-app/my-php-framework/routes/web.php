<?php

use App\Controllers\HomeController;

$router = new Router();

// Define the home/welcome route
$router->get('/', [HomeController::class, 'welcome']);

// Add more routes here as needed